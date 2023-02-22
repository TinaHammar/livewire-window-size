{{-- dev test :) --}}
<div>

    <p>---WIDTH---</p>

    <div>session width: {{session('windowW')}}</div>

    @windowWidthLessThan(400)
    <div id="lw-windowsize-wls400">windowWIDTHLessThan 400</div>
    @endif

    @windowWidthGreaterThan(399)
    <div id="lw-windowsize-wgt399">windowWIDTHGreaterThan 399</div>
    @endif

    @windowWidthBetween(400, 1500)
    <div id="lw-windowsize-wbtw400-1500">windowWIDTHBetween 400, 1500</div>
    @endif

    <p>---HEIGHT---</p>

    <div>session height:  {{session('windowH')}}</div>

    @windowHeightLessThan(500)
    <div id="lw-windowsize-hls500">windowHEIGHTLessThan 500</div>
    @endif

    @windowHeightGreaterThan(499)
    <div id="lw-windowsize-hgt499">windowHEIGHTGreaterThan 499</div>
    @endif

    @windowHeightBetween(400, 1500)
    <div id="lw-windowsize-hbtw400-900">windowHEIGHTBetween 400, 1500</div>
    @endif

    <p>---BREAKPOINTS---</p>

    @windowXs()
    <div id="lw-windowsize-xs" class="text-2xl">Xs window</div>
    @endif

    @windowSm()
    <div id="lw-windowsize-sm" class="text-2xl">Sm window</div>
    @endif

    @windowMd()
    <div id="lw-windowsize-md" class="text-2xl">Md window</div>
    @endif

    @windowLg()
    <div id="lw-windowsize-lg" class="text-2xl">Lg window</div>
    @endif

    @windowXl()
    <div id="lw-windowsize-xl" class="text-2xl">Xl window</div>
    @endif

    @window2xl()
    <div id="lw-windowsize-2xl" class="text-2xl">2xl window</div>
    @endif

    <p>---END---</p>
</div>
