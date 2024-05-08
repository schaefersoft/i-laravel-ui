<div class="grid grid-cols-12">
    <div class="col-span-12 mb-6 sm:hidden">
        <x-ui::button type="button"
                      id="sidebar-open-button">
            {{$expandButtonText}}
        </x-ui::button>
    </div>

    <aside id="sidebar"
           class="">
        <div class="flex items-center justify-end w-full sm:hidden">
            <div id="sidebar-close-button"
                 class="p-2">
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="size-8 fill-black"
                     viewBox="0 0 384 512">
                    <path
                        d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/>
                </svg>
            </div>
        </div>
        {{$sidebar}}
    </aside>
    <div id="sidebar-background"></div>
    <div class="col-span-12 sm:col-span-8 md:col-span-9">
        {{$content}}
    </div>
</div>
