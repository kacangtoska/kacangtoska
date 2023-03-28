<?php

namespace App\Http\Livewire\Carousel;

use Livewire\Component;

class HeaderPage extends Component
{
    public $pageTitle;

    public function mount($pageTitle = "Page Title")
    {
        $this->pageTitle = $pageTitle;
    }

    public function render()
    {
        return view('livewire.carousel.header-page');
    }
}
