<div class="range-slider-frame">
    <div class="range-slider-background">
        <div class="selected"></div>
    </div>
    <input id="{{$lowerName}}"
           name="{{$lowerName}}"
           class="from-slider range-slider"
           value="{{$lowerValue}}"
           min="{{$min}}"
           max="{{$max}}"
           type="range"
           @if($lowerDisabled) disabled @endif/>
    <input id="{{$upperName}}"
           name="{{$upperName}}"
           class="to-slider range-slider"
           value="{{$upperValue}}"
           min="{{$min}}"
           max="{{$max}}"
           type="range"
           @if($upperDisabled) disabled @endif/>

    @if($showDetails)
        <div class="flex items-center justify-between flex-row pt-4">
            <p>
                @if($prefix)
                    {{$prefix}}
                @endif
                <span class="lower-value">
                    {{$lowerValue}}
                </span>
                @if($suffix)
                    {{$suffix}}
                @endif
            </p>
            <p>
                @if($prefix)
                    {{$prefix}}
                @endif
                <span class="upper-value">
                    {{$upperValue}}
                </span>
                @if($suffix)
                    {{$suffix}}
                @endif
            </p>
        </div>
    @endif
</div>
