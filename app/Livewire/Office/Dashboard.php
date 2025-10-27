<?php

namespace App\Livewire\Office;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Dashboard extends Component
{
    public $user;
    public $direct = 0, $totalDirect = 0, $right = 0, $left = 0;

    public function mount()
    {
        $this->user = Auth::user();
    }


    #[Layout('components.layouts.office')]
    public function render()
    {
        return view('livewire.office.dashboard');
    }
}
