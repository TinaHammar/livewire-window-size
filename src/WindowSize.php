<?php

namespace Tanthammar\LivewireWindowSize;

use Livewire\Component;

class WindowSize extends Component
{
    public int $width;

    public int $height;

    public function mount(): void
    {
        $this->width = session('windowW', 0);
        $this->height = session('windowH', 0);
    }

    public function updatedWidth(int $size): void
    {
        if ($size > 0) {
            session(['windowW' => $size]);
        }
    }

    public function updatedHeight(int $size): void
    {
        if ($size > 0) {
            session(['windowH' => $size]);
        }
    }

    public function render(): \Illuminate\View\View
    {
        return view('breakpoints::windowsize');
    }
}
