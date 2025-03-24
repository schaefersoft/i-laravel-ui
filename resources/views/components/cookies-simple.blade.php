<div id="cookie-notification"
     class="container fixed left-1/2 -translate-x-1/2 pb-3 w-full z-200 translate-y-full -bottom-1">
    <div class="p-4 md:px-8 bg-white rounded-md drop-shadow-[0_0px_35px_rgba(0,0,0,0.25)]">
        <div class="grid grid-cols-12 gap-2">
            <div class="col-span-12 md:col-span-8">
                <div class="flex items-center justify-center h-full">
                    <p class="text-sm md:text-base">
                        {{$content}}
                    </p>
                </div>
            </div>
            <div class="col-span-12 md:col-span-4">
                <div
                    class="flex flex-col items-center justify-center h-full">
                    <div id="accept-cookies-button"
                         class="flex items-center justify-center my-1 py-1 md:py-2 text-center text-white text-sm md:text-base w-full rounded-md bg-theme-500 hover:bg-theme-700 hover:cursor-pointer font-bold">
                        {{$accept_button}}
                    </div>
                    <div id="decline-cookies-button"
                         class="flex items-center justify-center my-1 py-1 md:py-2 text-center text-gray-900 text-sm md:text-base w-full rounded-md hover:bg-gray-200 hover:cursor-pointer border border-gray-400">
                        {{$decline_button}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
