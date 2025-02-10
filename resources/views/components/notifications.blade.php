@if(session()->get('error'))
    <div class="my-1 mb-4 w-full rounded-md border-0 bg-red-400/80 px-4 py-2">
        <p>
            {!! session()->get('error') !!}
        </p>
    </div>
@endif

@if(session()->get('warning'))
    <div class="my-1 mb-4 w-full rounded-md border-0 bg-yellow-500/80 px-4 py-2">
        <p>
            {!! session()->get('warning') !!}
        </p>
    </div>
@endif

@if(session()->get('success'))
    <div class="my-1 mb-4 w-full rounded-md border-0 bg-green-500/80 px-4 py-2">
        <p>
            {!! session()->get('success') !!}
        </p>
    </div>
@endif
