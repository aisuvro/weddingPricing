<?php

namespace App\Livewire;

use Livewire\Component;

class PaymentPage extends Component
{
    public function render()
    {
        return view('livewire.payment-page')
            ->extends('welcome')
            ->section('content');
    }
}
