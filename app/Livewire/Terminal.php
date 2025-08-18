<?php

namespace App\Livewire;

use Livewire\Component;

class Terminal extends Component
{
    public string $code = '';
    public function mount(string $code)
    {
        $this->code = $code;
    }
    public function render()
    {
        return view('livewire.terminal');
    }
}
