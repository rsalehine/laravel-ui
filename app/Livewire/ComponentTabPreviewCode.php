<?php

namespace App\Livewire;

use Livewire\Component;

class ComponentTabPreviewCode extends Component
{
    public string $filePath = '';
    public string $component = '';
    public string $pathShow = '';

    public bool $isLivewire = false;
    public string $componentPreview = '';
    public bool $noInTabs = false;

    public function mount(string $component = '', $noInTabs = false)
    {
        $this->component = $component;
        $this->loadComponentCode();
        $this->noInTabs = $noInTabs;
    }

    protected function loadComponentCode()
    {
        if (empty($this->component)) {
            return;
        }

        $componentPath = str_replace('.', '/', $this->component);
        $this->filePath = resource_path("views/{$componentPath}.blade.php");


        $previewcomponentPath = str_replace('/', '.', $this->component);
        if (str_starts_with($previewcomponentPath, 'livewire.')) {
            $this->isLivewire = true;
        }

        $this->componentPreview = substr($previewcomponentPath, 11);
    }

    public function render()
    {
        return view('livewire.component-tab-preview-code');
    }
}
