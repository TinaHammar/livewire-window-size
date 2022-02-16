<?php

if (!function_exists('windowWidthLessThan')) {
    function windowWidthLessThan(int $value): bool
    {
        return session('windowW') < $value;
    }
}

if (!function_exists('windowWidthGreaterThan')) {
    function windowWidthGreaterThan(int $value): bool
    {
        return session('windowW') > $value;
    }
}

if (!function_exists('windowWidthBetween')) {
    function windowWidthBetween(int $expression): bool
    {
        $between = collect(explode(',', $expression));
        $w = session('windowW');
        return ($w > $between->first()) && ($w < $between->last());
    }
}

if (!function_exists('windowHeightLessThan')) {
    function windowHeightLessThan(int $value): bool
    {
        return session('windowH') < $value;
    }
}

if (!function_exists('windowHeightGreaterThan')) {
    function windowHeightGreaterThan(int $value): bool
    {
        return session('windowH') > $value;
    }
}

if (!function_exists('windowHeightBetween')) {
    function windowHeightBetween(int $expression): bool
    {
        $between = collect(explode(',', $expression));
        $h = session('windowH');
        return ($h > $between->first()) && ($h < $between->last());
    }
}

if (!function_exists('windowXs')) {
    function windowXs(): bool
    {
        $w = session('windowW');
        return ($w > 0) &&
            ($w < config('breakpoints.window-width.Xs', 640));
    }
}

if (!function_exists('windowSm')) {
    function windowSm(): bool
    {
        $w = session('windowW');
        return ($w >= config('breakpoints.window-width.Sm', 640))
            && ($w < config('breakpoints.window-width.Md', 768));
    }
}

if (!function_exists('windowMd')) {
    function windowMd(): bool
    {
        $w = session('windowW');
        return ($w >= config('breakpoints.window-width.Md', 768))
            && ($w < config('breakpoints.window-width.Lg', 1024));
    }
}

if (!function_exists('windowLg')) {
    function windowLg(): bool
    {
        $w = session('windowW');
        return ($w >= config('breakpoints.window-width.Lg', 1024))
            && ($w < config('breakpoints.window-width.Xl', 1280));
    }
}

if (!function_exists('windowXl')) {
    function windowXl(): bool
    {
        $w = session('windowW');
        return ($w >= config('breakpoints.window-width.Xl', 1280))
            && ($w < config('breakpoints.window-width.2xl', 1536));
    }
}

if (!function_exists('window2xl')) {
    function window2xl(): bool
    {
        return session('windowW') >= config('breakpoints.window-width.2xl', 1536);
    }
}
