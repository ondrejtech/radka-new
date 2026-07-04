<?php

namespace App\Livewire\Template;

use App\Models\Order as OrderModel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\View\View;
use Livewire\Attributes\Renderless;
use Livewire\Component;
use Livewire\WithPagination;

class OrderList extends Component
{
    use WithPagination;

    public string $searchOrderNumber = '';

    public string $searchReference = '';

    public string $searchProductName = '';

    public string $dateFrom = '';

    public string $dateTo = '';

    public string $filterStatus = '';

    public string $filterOpen = '-1';

    public int $perPage = 20;

    public function updatingSearchOrderNumber(): void
    {
        $this->resetPage();
    }

    public function updatingSearchProductName(): void
    {
        $this->resetPage();
    }

    public function updatingSearchReference(): void
    {
        $this->resetPage();
    }

    public function updatingDateFrom(): void
    {
        $this->resetPage();
    }

    public function updatingDateTo(): void
    {
        $this->resetPage();
    }

    public function updatingFilterStatus(): void
    {
        $this->resetPage();
    }

    public function updatingFilterOpen(): void
    {
        $this->resetPage();
    }

    public function setPerPage(int $perPage): void
    {
        $this->perPage = $perPage;
        $this->resetPage();
    }

    public function resetFilter(): void
    {
        $this->reset(['searchOrderNumber', 'searchReference', 'searchProductName', 'dateFrom', 'dateTo', 'filterStatus', 'filterOpen']);
        $this->resetPage();
    }

    public function closeOrder(int $orderId): void
    {
        $order = $this->resolveOrder($orderId);

        if (! $order || ! $order->is_open) {
            return;
        }

        $order->update(['is_open' => false]);

        $this->dispatch('message', [
            'text' => 'Otevřená objednávka byla uzavřena.',
            'type' => 'success',
            'status' => '200',
        ]);
    }

    #[Renderless]
    public function exportXml(): mixed
    {
        $orders = $this->buildQuery()->with(['statusOrder', 'items', 'transportation'])->get();

        $dom = new \DOMDocument('1.0', 'UTF-8');
        $dom->formatOutput = true;

        $root = $dom->createElement('orders');
        $dom->appendChild($root);

        foreach ($orders as $order) {
            $orderEl = $dom->createElement('order');

            foreach ($order->getAttributes() as $key => $value) {
                $xmlKey = $key === 'id' ? 'order_number' : $key;
                $xmlValue = $key === 'id'
                    ? $order->created_at->format('Y').$value
                    : (string) ($value ?? '');
                $el = $dom->createElement($xmlKey);
                $el->appendChild($dom->createTextNode($xmlValue));
                $orderEl->appendChild($el);
            }

            $itemsEl = $dom->createElement('items');
            foreach ($order->items as $item) {
                $itemEl = $dom->createElement('item');
                foreach ($item->getAttributes() as $key => $value) {
                    $el = $dom->createElement($key);
                    $el->appendChild($dom->createTextNode((string) ($value ?? '')));
                    $itemEl->appendChild($el);
                }
                $itemsEl->appendChild($itemEl);
            }
            $orderEl->appendChild($itemsEl);
            $root->appendChild($orderEl);
        }

        $xml = $dom->saveXML();

        return response()->streamDownload(
            fn () => print ($xml),
            'orders-'.now()->format('Y-m-d').'.xml',
            ['Content-Type' => 'application/xml'],
        );
    }

    public function render(): View
    {
        $orders = $this->buildQuery()->with(['statusOrder', 'items', 'transportation'])->paginate($this->perPage);

        return view('livewire.template.orderlist', ['orders' => $orders]);
    }

    private function buildQuery(): Builder
    {
        return OrderModel::query()
            ->when(
                auth()->check(),
                fn ($q) => $q->where('user_id', auth()->id()),
                fn ($q) => $q->where('session_id', session()->getId()),
            )
            ->when($this->searchOrderNumber !== '', fn ($q) => $q->where('id', $this->searchOrderNumber))
            ->when($this->searchProductName !== '', fn ($q) => $q->whereHas('items', fn ($q) => $q->where('name', 'like', '%'.$this->searchProductName.'%')))
            ->when($this->searchReference !== '', fn ($q) => $q->where('reference', 'like', '%'.$this->searchReference.'%'))
            ->when($this->dateFrom !== '', fn ($q) => $q->whereDate('created_at', '>=', $this->dateFrom))
            ->when($this->dateTo !== '', fn ($q) => $q->whereDate('created_at', '<=', $this->dateTo))
            ->when($this->filterStatus !== '', fn ($q) => $q->where('status_order_id', $this->filterStatus))
            ->when($this->filterOpen !== '-1', fn ($q) => $q->where('is_open', $this->filterOpen === '1'))
            ->latest();
    }

    private function resolveOrder(int $orderId): ?OrderModel
    {
        return OrderModel::when(
            auth()->check(),
            fn ($q) => $q->where('user_id', auth()->id()),
            fn ($q) => $q->where('session_id', session()->getId()),
        )->find($orderId);
    }
}
