<div class="relative mb-2">
    <label class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900"
           for="{{$name}}">
        {!! $label !!}
    </label>
    <input
        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-theme-600 sm:text-sm sm:leading-6 @if($errors->has($name)) ring-red-500 @else ring-gray-300 @endif"
        autocomplete="{{$autocomplete}}"
        name="{{$name}}"
        id="{{$name}}"
        type="{{$type}}"
        placeholder="{{$placeholder}}"
        @if($disabled) disabled @endif
        @if($autofocus) autofocus @endif
        value="{{$value ?? null}}"/>

    @error($name)
    <p class="text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
