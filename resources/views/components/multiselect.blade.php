<div data-search class="relative mb-2 w-full">
    <div
        class="relative flex items-center flex-wrap p-0.5 rounded-md border-0 ring-1 ring-inset @if($errors->has($name)) ring-red-500 @else ring-gray-300 @endif focus-within:ring-2 focus-within:ring-inset focus-within:ring-theme-600">
        <div data-search-badge-container class="flex flex-wrap space-2 px-2"></div>
        <input data-search-input
               class="flex-grow block w-full border-0 text-gray-900 mx-0 placeholder:text-gray-400 focus:outline-none focus:ring-0 sm:text-sm sm:leading-6 m-0"
               name="{{$name}}"
               id="{{$name}}"
               type="text"
               placeholder="{{$placeholder}}"
               @if($disabled) disabled @endif
               @if($autofocus) autofocus @endif
            {{ $attributes }}
        />
    </div>

    <label class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900"
           for="{{$name}}">
        {!! $label !!}
        @if($requiredAsterisk)
            <span class="text-red-600">*</span>
        @endif
    </label>

    @error($errorName)
    <p class="text-sm text-red-600">{{ $message }}</p>
    @enderror

    <div data-search-dropdown
         class="absolute left-0 top-full rounded-md shadow bg-white border z-10 w-full max-h-[40vh] overflow-y-auto hidden">

        @foreach($items as $item)
            <div data-search-dropdown-value="{{ $item['value'] }}"
                 data-search-dropdown-content="{{$item['content']}}"
                 class="py-2 px-3 hover:bg-gray-200 cursor-pointer @if(!$loop->last) border-b @endif">
                <x-ui::checkbox name="{{$name}}[{{$item['value']}}]"
                                :checked="old($name .'.'.$item['value'], in_array($item['value'], $selectedValues))">
                    {{ $item['content'] }}
                </x-ui::checkbox>
            </div>
        @endforeach

        <div data-search-dropdown-none class="hidden">
            {{$none}}
        </div>
    </div>
</div>
