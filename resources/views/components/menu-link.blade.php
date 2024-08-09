<li>
    <a href="{{$href}}"
       class="relative flex items-center flex-row hover:cursor-pointer hover:bg-gray-200 rounded-md px-3 py-1 @if($highlighted) bg-gray-100 after:absolute after:h-full after:w-1.5 after:bg-theme-500 after:-left-3 after:rounded-md @endif">
        {{$slot}}
    </a>
</li>
