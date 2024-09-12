<div class="flex items-center justify-center w-full h-full">
    <label class="dropzone flex flex-col items-center justify-center w-full h-full border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
        <div class="flex flex-col items-center justify-center pt-5 pb-6">
            <x-fas-upload class="size-8 mb-4 fill-gray-500"/>
            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                <span class="font-semibold">Hochladen</span> oder Datei ablegen
            </p>
            <p class="text-xs text-gray-500 dark:text-gray-400">
                PDF (MAX. 100MB)
            </p>
        </div>
        <div class="fileNames flex items-center justify-center flex-row flex-wrap w-full p-2 text-center text-xs">

        </div>
        @error($name)
        <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
        <input class="input"
               name="{{$name}}"
               type="file"
               hidden
               value="{{$value}}"
               accept="application/pdf"/>
    </label>
</div>
