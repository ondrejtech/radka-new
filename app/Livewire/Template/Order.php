<?php

namespace App\Livewire\Template;

use App\Models\Order as OrderModel;
use Illuminate\View\View;
use Livewire\Component;

class Order extends Component
{
    public int $orderId;

    public function mount(int $orderId): void
    {
        $this->orderId = $orderId;

        if ((int) session('meta_purchase') === $orderId) {
            $order = OrderModel::with('items')->find($orderId);

            if ($order) {
                $this->dispatch(
                    'meta-purchase',
                    value: round((float) $order->total_with_vat, 2),
                    ids: $order->items->pluck('pro_id')->map(fn ($id) => (string) $id)->all(),
                    transactionId: (string) $order->id,
                );
            }
        }
    }

    public function render(): View
    {
        $order = OrderModel::with(['statusOrder', 'items', 'invoice', 'transportation'])
            ->when(
                auth()->check(),
                fn ($q) => $q->where('user_id', auth()->id()),
                fn ($q) => $q->where('session_id', session()->getId()),
            )
            ->findOrFail($this->orderId);

        return view('livewire.template.order', [
            'order' => $order,
        ]);
    }
}
