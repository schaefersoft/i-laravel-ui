<div class="relative flex items-center">
    <div class="flex h-6 items-center">
        <input type="checkbox"
               class="h-4 w-4 rounded border-gray-300 text-theme-600 focus:ring-2 focus:ring-theme-600 focus:ring-offset-0 hover:cursor-pointer"
               id="{{$name}}"
               name="{{$name}}"
               @if($disabled) disabled @endif/>
    </div>
    <div class="text-sm leading-6">
        <label for="{{$name}}" class="flex items-center ps-3 font-medium text-gray-900 hover:cursor-pointer">
            {{$slot}}
        </label>
    </div>
</div>
@error($name)
<p class="text-sm text-red-600">{{ $message }}</p>
@enderror
