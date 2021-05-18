<div class="hidden display-contents"
     x-data="{
        width: @entangle('width'),
        height: @entangle('height'),
        update() {
            this.width = ( window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth )
            this.height = ( window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight )
        },
    }"
     x-init="update()"
     x-on:resize.window.debounce.750ms="update()"
>
    {{-- dev test :) --}}
    {{-- <div x-cloak>
        <button class="p-4 rounded bg-indigo-500 text-white" x-on:click="$wire.call('render')">Click to trigger a
            request
        </button>
        <p>LivewireW: {{$width}}</p>
        <p>LivewireH: {{$height}}</p>
        <p>AlpineW: <span x-text="width"></span></p>
        <p>AlpineH: <span x-text="height"></span></p>
        <p>sessionW: {{session('windowW')}}</p>
        <p>sessionH: {{session('windowH')}}</p>
    </div> --}}
</div>
