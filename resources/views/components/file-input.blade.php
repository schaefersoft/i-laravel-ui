<div class="relative mb-2">
    <label class="inline-block bg-white px-1 text-xs font-medium text-gray-900"
           for="{{$name}}">
        {{ $label }}
    </label>
    <input
        class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-gray-900 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-theme-500 file:px-3 file:py-[0.32rem] file:text-white file:font-bold file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-theme-700 hover:cursor-pointer focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none @if($errors->has($name)) border-red-500 @else border-gray-300 @endif"
        name="{{$name}}"
        id="{{$name}}"
        type="file"
        @if($accept) accept="{{$accept}}" @endif
        @if($disabled) disabled @endif
        @if($multiple) multiple @endif/>
    @error($name)
    <p class="text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
