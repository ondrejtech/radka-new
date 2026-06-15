<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class BasketOrderForm extends Form
{
    #[Validate('nullable|string|max:255', onUpdate: false)]
    public string $reference = '';

    #[Validate('nullable|string', onUpdate: false)]
    public string $note = '';

    #[Validate('nullable|date', onUpdate: false)]
    public string $deliveryDate = '';

    #[Validate('required|integer', as: 'způsob dopravy', onUpdate: false)]
    public string $transportId = '';

    #[Validate('nullable|string|max:70', onUpdate: false)]
    public string $shipName = '';

    #[Validate('nullable|string|max:35', onUpdate: false)]
    public string $shipStreet = '';

    #[Validate('nullable|string|max:35', onUpdate: false)]
    public string $shipCity = '';

    #[Validate('nullable|string|max:10', onUpdate: false)]
    public string $shipZip = '';

    #[Validate('nullable|string|max:50', onUpdate: false)]
    public string $shipCountry = 'Česká republika';

    #[Validate('nullable|string|max:20', onUpdate: false)]
    public string $shipPhone = '';

    #[Validate('nullable|email|max:50', as: 'e-mail', onUpdate: false)]
    public string $shipEmail = '';
}
