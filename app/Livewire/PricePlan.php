<?php

namespace App\Livewire;

use Livewire\Component;

class PricePlan extends Component
{
    public function render()
    {
        return view('livewire.price-plan')
                ->extends('welcome')
                ->section('content');
    }
}
