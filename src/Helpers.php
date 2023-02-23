<?php

use Illuminate\Support\Arr;

if (! function_exists('mobileDevice')) {
    function mobileDevice(): bool
    {
        return (bool) preg_match(
            '/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|iphone|ipad|ipod|j2me|java|midp|mmp|netfront|opera mini|palm|phone|p(ixi|re)\/|plucker|pocket|psp|series([46])0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino)/i',
            request()?->header('User-Agent')
        );
    }
}

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
    function windowWidthBetween(mixed ...$expression): bool
    {
        $between = collect(Arr::flatten($expression));
        $w = session('windowW');
        return ($w > $between->first() && $w < $between->last());
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
    function windowHeightBetween(mixed ...$expression): bool
    {
        $between = collect(Arr::flatten($expression));
        $h = session('windowH');
        return ($h > $between->first() && $h < $between->last());
    }
}

if (!function_exists('windowXs')) {
    function windowXs(): bool
    {
        $w = session('windowW');
        return (
            $w > 0
            && $w < config('breakpoints.window-width.Xs', 640)
        );
    }
}

if (!function_exists('windowSm')) {
    function windowSm(): bool
    {
        $w = session('windowW');
        return (
            $w >= config('breakpoints.window-width.Sm', 640)
            && $w < config('breakpoints.window-width.Md', 768)
        );
    }
}

if (!function_exists('windowMd')) {
    function windowMd(): bool
    {
        $w = session('windowW');
        return (
            $w >= config('breakpoints.window-width.Md', 768)
            && $w < config('breakpoints.window-width.Lg', 1024)
        );
    }
}

if (!function_exists('windowLg')) {
    function windowLg(): bool
    {
        $w = session('windowW');
        return (
            $w >= config('breakpoints.window-width.Lg', 1024)
            && $w < config('breakpoints.window-width.Xl', 1280)
        );
    }
}

if (!function_exists('windowXl')) {
    function windowXl(): bool
    {
        $w = session('windowW');
        return (
            $w >= config('breakpoints.window-width.Xl', 1280)
            && $w < config('breakpoints.window-width.2xl', 1536)
        );
    }
}

if (!function_exists('window2xl')) {
    function window2xl(): bool
    {
        return session('windowW') >= config('breakpoints.window-width.2xl', 1536);
    }
}
