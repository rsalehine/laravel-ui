<?php

namespace App\Livewire;

use Livewire\Component;

class SingleCodeBlock extends Component
{
    public array $data = [];
    public function mount(array $data)
    {
        $this->data = $data;
    }
    public function render()
    {
        return view('livewire.single-code-block');
    }
}
