<button @if($disabled) disabled @endif
        class="flex justify-center w-full rounded-md px-3 text-sm font-semibold leading-6 text-white shadow-sm enabled:bg-theme-500 py-1.5 enabled:hover:bg-theme-600 focus-visible:outline-theme-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 disabled:bg-theme-500 disabled:opacity-60"
        type="{{$type}}"
        id="{{$id}}"
        {{$attributes}}
>
    {{$slot}}
</button>
