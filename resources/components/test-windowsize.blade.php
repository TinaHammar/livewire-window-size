{{-- dev test :) --}}
<div>
    <p>---WIDTH---</p>
    @windowWidthLessThan(400)
    <div>windowWIDTHLessThan 400</div>
    @endif
    @windowWidthGreaterThan(399)
    <div>windowWIDTHGreaterThan 399</div>
    @endif
    @windowWidthBetween(400, 1500)
    <div>windowWIDTHBetween 400, 1500</div>
    @endif
    <p>---HEIGHT---</p>
    @windowHeightLessThan(500)
    <div>windowHEIGHTLessThan 500</div>
    @endif
    @windowHeightGreaterThan(499)
    <div>windowHEIGHTGreaterThan 499</div>
    @endif
    @windowHeightBetween(400, 900)
    <div>windowHEIGHTBetween 400, 900</div>
    @endif
    <p>---BREAKPOINTS---</p>
    @windowXs()
    <div class="text-2xl">Xs window</div>
    @endif
    @windowSm()
    <div class="text-2xl">Sm window</div>
    @endif
    @windowMd()
    <div class="text-2xl">Md window</div>
    @endif
    @windowLg()
    <div class="text-2xl">Lg window</div>
    @endif
    @windowXl()
    <div class="text-2xl">Xl window</div>
    @endif
    @window2xl()
    <div class="text-2xl">2xl window</div>
    @endif
    <p>---END---</p>
</div>
