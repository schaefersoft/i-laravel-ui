<div class="relative flex items-center flex-row hover:cursor-pointer hover:bg-gray-200 rounded-md @if($highlighted) bg-gray-100 after:absolute after:h-full after:w-1.5 after:bg-theme-500 after:-left-3 after:rounded-md @endif">
    <div class="group flex items-center justify-between flex-row w-full h-8 relative">
        <a href="{{$href}}"
           class="flex flex-row items-center h-full w-full ps-3 pe-1 py-3">
            {{$slot}}
        </a>

        <div class="absolute right-1 top-50% max-w-6 max-h-6">
            {{ $extra ?? '' }}
        </div>
    </div>
</div>
