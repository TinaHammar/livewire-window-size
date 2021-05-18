# Laravel Livewire Window Size and Breakpoints
Laravel blade directives and php helpers for serverside rendered content, based on browser window size WITHOUT css. Requires Livewire and AlpineJS

An example to show the purpose of this package:
```php 
if(windowXs()) {
 //execute a tiny Eloquent query and return a minimalistic view
}
if(window2xl()) {
 //execute a huge Eloquent query and return a gigantic view
}
```


[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Travis](https://img.shields.io/travis/tanthammar/livewire-window-size.svg?style=flat-square)]()
[![Total Downloads](https://img.shields.io/packagist/dt/tanthammar/livewire-window-size.svg?style=flat-square)](https://packagist.org/packages/tanthammar/livewire-window-size)

# Requirements
* php 8
* Laravel 8
* Livewire
* AlpineJS


## Description
The main purpose of this package is not to avoid duplicated html, 
but to avoid unnecessary serverside code execution, just to render content that will never be seen.

* AlpineJS syncs the browsers inner `width` and `height`, in realtime (debounced 750ms), when the browser window is resized. 
* The corresponding Livewire component will store the values to `Session`.
* The package has a `config/breakpoints` file where you set your breakpoints
* The package provides multiple `@blade` directives and Laravel `helpers()`
* You have access to the browser window width/height via `session('windowW')` and `session('windowH')`
* There is also a `HasBreakpoints` trait to `set` and `get` dynamic breakpoints to override config.
* You can change the config dynamically with Laravel `Config::set(...)`

# Important note
It's important to understand the difference between the serverside rendered breakpoints, that this package provides, and css media queries. 
<br>When using css, the content of the page will update in realtime as the user resizes the window, 
whereas this package debounces a network request.
<br>If you are using Livewire to generate dynamic content, the page will update in realtime with a slight lag (750ms) otherwise the content will update on the next page request.
<br>It is therefore important that you place the `<livewire:breakpoints />` at first point of contact with the user, for your application to look its best.
<br>I have it in my `app.blade.php` and on the `login`/`register` pages. 


## Installation
```
composer require tanthammar/livewire-window-size`
```

## Publish config
```
php artisan vendor:publish --tag=livewire-window-size
```
The default settings are based on TailwindCSS breakpoints
```php
'window-width' => [
    // 0 = undefined|false
    // @windowXs (>= 1px && < Sm)
    'Sm' => 640, // => @windowSm (>= 640px && < Md)
    'Md' => 768, // => @windowMd (>= 768px && < Lg)
    'Lg' => 1024, // => @windowLg (>= 1024px && < Xl)
    'Xl' => 1280, // => @windowXl (>= 1280px && < 2xl)
    '2xl' => 1536, // => @window2xl (> 1536px)
],
```

## Add the component to your layout
* Add this to all layouts where you want to keep track of the browser window size.
* Then you have access to the browser window width/height via `session('windowW')` and `session('windowH')`

Example: `app.blade.php`
```blade
<livewire:breakpoints />
```

## Blade directives
@elsif..., @else..., @end..., @unless... and @endif works with all the directives. Explanation in [Laravel docs](https://laravel.com/docs/8.x/blade#custom-if-statements).
```blade
//Browser width, with example values
@windowWidthLessThan(400)
@windowWidthGreaterThan(399)
@windowWidthBetween(400, 1500)

//Browser height, with example values
@windowHeightLessThan(500)
@windowHeightGreaterThan(499)
@windowHeightBetween(400, 900)

//Breakpoints based on config values
@windowXs()
@windowSm()
@windowMd()
@windowLg()
@windowXl()
@window2xl()
```
Example
```blade 
@windowXs()
<div>This window is extra small</div>
@endif
@window2xl()
<div>This window is very large</div>
@endif
```

## Helpers
Same name as Blade directives
```php
//Browser width, with example values
windowWidthLessThan(400)
windowWidthGreaterThan(399)
windowWidthBetween(400, 1500)

//Browser height, with example values
windowHeightLessThan(500)
windowHeightGreaterThan(499)
windowHeightBetween(400, 900)

//Breakpoints based on config values
windowXs()
windowSm()
windowMd()
windowLg()
windowXl()
window2xl()
```

Example php
```php 
if(windowXs()) {
 //execute a tiny Eloquent query and return a minimalistic view
}
if(window2xl()) {
 //execute a huge Eloquent query and return a gigantic view
}
```

## HasBreakpoints trait
Add the trait to a component to import config values and  get/set custom breakpoints dynamically.

```php 
use Tanthammar\LivewireWindowSize\HasBreakpoints;

class Foo extends \Livewire\Component
{
    use HasBreakpoints;
    ...
}
```
## Blade directives test component
Add this to any blade view to test the blade directives
```blade 
<x-breakpoints::test-windowsize />
```




## 💬 Let's connect
Discuss with other tall-form users on the official Livewire Discord channel.
You'll find me in the "partners/tall-forms" channel.

* [🔗 **Discord**](https://discord.gg/livewire)
* [🔗 **Twitter**](https://twitter.com/TinaHammar)
* [🔗 **Youtube**](https://www.youtube.com/channel/UCRPTsZ2OduwzGq3EdiynY2Q)
* [🔗 **Devdojo**](https://devdojo.com/tinahammar)

## Changelog
Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing
Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## License
The MIT License (MIT). Please see [License File](/LICENSE.md) for more information.
