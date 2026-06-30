<?php

namespace App\Livewire\Template;

use App\Models\Order as OrderModel;
use App\Services\PayPalService;
use Illuminate\View\View;
use Livewire\Component;

class Order extends Component
{
    public int $orderId;

    public function mount(int $orderId): void
    {
        $this->orderId = $orderId;
    }

    public function render(PayPalService $payPalService): View
    {
        $order = OrderModel::with(['statusOrder', 'items', 'invoice'])
            ->when(
                auth()->check(),
                fn ($q) => $q->where('user_id', auth()->id()),
                fn ($q) => $q->where('session_id', session()->getId()),
            )
            ->findOrFail($this->orderId);

        return view('livewire.template.order', [
            'order' => $order,
            'payPalClientId' => $payPalService->publicClientId(),
        ]);
    }
}
