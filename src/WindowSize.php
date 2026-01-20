<?php

namespace Tanthammar\LivewireWindowSize;

use Livewire\Component;

class WindowSize extends Component
{
    public int $width;

    public int $height;

    public function mount()
    {
        $w = session('windowW', 0);
        $h = session('windowH', 0);
        $this->width = is_int($w) && $w > 0 ? $w : 0;
        $this->height = is_int($h) && $h > 0 ? $h : 0;
    }

    public function updatedWidth(int $size): void
    {
        if (is_int($size) && $size > 0) {
            session(['windowW' => $size]);
        }
    }

    public function updatedHeight(int $size): void
    {
        if (is_int($size) && $size > 0) {
            session(['windowH' => $size]);
        }
    }

    public function render()
    {
        return view('breakpoints::windowsize');
    }
}
