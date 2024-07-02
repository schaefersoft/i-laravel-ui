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
           type="range"/>
    <input id="{{$upperName}}"
           name="{{$upperName}}"
           class="to-slider range-slider"
           value="{{$upperValue}}"
           min="{{$min}}"
           max="{{$max}}"
           type="range"/>

    @if($showDetails)
        <div class="flex items-center justify-between flex-row pt-4">
            <p>
                <span class="lower-value">
                    {{$lowerValue}}
                </span>
                @if($unit)
                    {{$unit}}
                @endif
            </p>
            <p>
                <span class="upper-value">
                    {{$upperValue}}
                </span>
                @if($unit)
                    {{$unit}}
                @endif
            </p>
        </div>
    @endif
</div>
