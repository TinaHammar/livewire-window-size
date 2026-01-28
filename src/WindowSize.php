<?php

namespace Tanthammar\LivewireWindowSize;

use Livewire\Component;

class WindowSize extends Component
{
    public int|array $width;

    public int|array $height;

    public function mount(): void
    {
        $w = session('windowW', 0);
        $h = session('windowH', 0);
        $this->width = is_int($w) && $w > 0 ? $w : 0;
        $this->height = is_int($h) && $h > 0 ? $h : 0;
    }

    public function updatedWidth(array|int $size): void
    {
        if (is_int($size) && $size > 0) {
            session(['windowW' => $size]);
        }
    }

    public function updatedHeight(array|int $size): void
    {
        if (is_int($size) && $size > 0) {
            session(['windowH' => $size]);
        }
    }

    public function render(): \Illuminate\View\View
    {
        return view('breakpoints::windowsize');
    }
}
