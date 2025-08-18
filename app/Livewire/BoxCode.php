<?php

namespace App\Livewire;

use Livewire\Component;
use App\Support\DocsCode;


class BoxCode extends Component
{

    public ?string $title = null;
    public ?string $icon = null;
    public bool $shellStyle = false;
    private string $componentName = '';

    public array $data = [];

    public function mount(string $name, ?string $title, ?string $icon, bool $shellStyle)
    {
        $this->componentName = $name;
        $this->title = $title;
        $this->icon = $icon;
        $this->shellStyle = $shellStyle;
        $this->getCode();
    }

    private function getCode()
    {
        try {
            $this->data = DocsCode::get($this->componentName);
        } catch (\Exception) {
            $this->data = [
                'code' => '',
                'lang' => '',
            ];
        }
    }
    public function render()
    {
        return view('livewire.box-code');
    }
}
