<div class="w-full flex items-center justify-center flex-col">
    <input class="currency-input max-w-full text-center text-3xl border-0 focus:border-0 focus:outline-0 focus:ring-0"
           name="{{$name}}"
           type="number"
           step="0.01"
           @disabled($disabled)
           value="{{$value}}"
        {{$attributes}}/>

    @if($currency)
        <p class="px-2 py-0.5 bg-slate-200 rounded-md text-center">
            {{$currency}}
        </p>
    @endif

    @error($errorName)
    <p class="text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
