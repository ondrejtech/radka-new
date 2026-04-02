<?php

namespace Database\Seeders;

use App\Models\StatusOrder;
use Illuminate\Database\Seeder;

class StatusOrderSeeder extends Seeder
{
    public function run(): void
    {
        $statuses = [
            1 => 'Čeká na zpracování poznámky',
            2 => 'Čeká na potvrzení cen',
            3 => 'Čeká na fakturaci',
            4 => 'Částečně fakturováno',
            5 => 'Fakturace - stojí v autofakturační frontě',
            6 => 'Fakturováno - čeká se na převzetí logistikou',
            7 => 'V LS - zařazeno do fronty práce logistiky',
            8 => 'Připraveno pro dopravce/osobky',
            9 => 'Předáno dopravci/osobky',
            10 => 'Předáno dopravcem',
            11 => 'Storno objednávky',
            12 => 'Reportováno',
        ];

        foreach ($statuses as $id => $name) {
            StatusOrder::updateOrCreate(['id' => $id], ['name' => $name]);
        }
    }
}
