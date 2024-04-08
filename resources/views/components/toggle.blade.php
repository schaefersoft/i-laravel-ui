<label class="flex items-center justify-between w-full cursor-pointer">
    <div class="pe-4">
        {{$slot}}
    </div>
    <input type="checkbox" name="{{$name}}" class="sr-only peer" @checked($value)>
    <div class="relative min-w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-0 dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-theme-600"></div>
</label>
