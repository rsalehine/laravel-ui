<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\View;
use Livewire\Attributes\Layout;
use App\Support\SidebarPaginator;



class ComponentPage extends Component
{


    public ?array $prevSlug = null;
    public ?array $nextSlug = null;
    public ?array $current = null;

    public string $view = 'livewire.components';
     public string $path = '';

    public function mount(?string $main = null, ?string $children = null)
    {
        if ($main) {
            $this->view .= ".{$main}";
        }
        if ($children) {
            $this->view .= ".{$children}";
        }

        $segments = explode('.', $this->view);
        if ($segments[0] === 'livewire') {
            array_shift($segments); 
        }
        $this->path = '/' . implode('/', $segments);
    }

    #[Layout('layouts.docs', ['activeGroup' => 'components'])]
    public function render()
    {
        if (!View::exists($this->view)) {
            abort(404);
        }

        $pagger = SidebarPaginator::getPagger($this->path);
        $this->prevSlug = $pagger['prev'];
        $this->nextSlug = $pagger['next'];
        $this->current = $pagger['current'];

       

        return view($this->view);
    }
}
