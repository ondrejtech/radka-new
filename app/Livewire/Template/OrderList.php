<?php

namespace App\Livewire\Template;

use App\Models\Order as OrderModel;
use Illuminate\View\View;
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

    public function render(): View
    {
        $orders = OrderModel::with(['statusOrder', 'items'])
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
            ->latest()
            ->paginate($this->perPage);

        return view('livewire.template.orderlist', ['orders' => $orders]);
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
