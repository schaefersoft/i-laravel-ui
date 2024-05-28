<div id="password-strength" data-input-id="{{$inputId}}">
    <div class="flex items-center justify-between w-full">
        <p>
            {{$strengthTitle}}:
        </p>
        <p id="password-strength-text" class="font-bold text-red-700">
            Ungenügend
        </p>
    </div>
    <div class="w-full bg-gray-200 rounded-full h-1.5">
        <div id="password-strength-indicator"
             class="bg-red-700 h-full rounded-full transition-all duration-150 ease-in-out"
             style="width: 2%"></div>
    </div>
</div>
