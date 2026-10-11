<?php

namespace Tanthammar\LivewireWindowSize;

trait HasBreakpoints
{
    protected array $breakpoints = [];

    public function mountHasBreakpoints(): void
    {
        $this->setBreakpoints(config('breakpoints.window-width', []));
    }

    public function getBreakpoints(): array
    {
        return $this->breakpoints;
    }

    public function getBreakpoint(string $key): int
    {
        return data_get($this->breakpoints, $key, 0);
    }

    public function setBreakpoints(array $breakpoints): void
    {
        $this->breakpoints = $breakpoints;
    }

    public function setBreakpoint(string $key, int $windowWidth): void
    {
        data_set($this->breakpoints, $key, $windowWidth);
    }
}
