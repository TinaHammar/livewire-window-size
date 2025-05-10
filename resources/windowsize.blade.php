<div class="hidden display-contents"
     x-data="{
        width: @entangle('width').live,
        height: @entangle('height').live,

         getMinNonZeroValue(values) {
            // Filter out zero values
            const nonZeroValues = values.filter(value => value > 0);
            // Return the minimum value, or 0 if all are zero
            return nonZeroValues.length ? Math.min(...nonZeroValues) : 0;
        },

        update() {
            // Get all three width values
            const widthValues = [
                window.innerWidth,
                document.documentElement.clientWidth,
                document.body.clientWidth
            ];

            // Get all three height values
            const heightValues = [
                window.innerHeight,
                document.documentElement.clientHeight,
                document.body.clientHeight
            ];

            // Set width and height to the minimum non-zero value
            this.width = this.getMinNonZeroValue(widthValues);
            this.height = this.getMinNonZeroValue(heightValues);
        },
    }"
     x-init="update()"
     x-on:resize.window.debounce.750ms="update()"
>
    {{-- dev test :) --}}
    {{-- <div x-cloak>
        <button class="p-4 rounded bg-indigo-500 text-white" x-on:click="$wire.$call('render')">Click to trigger a
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
