<x-layout>

    <form class="flex justify-between flex-wrap gap-16" method="post" action="/">
        @csrf
        <div type="button" class="text-gray-900 bg-white border border-gray-300 font-medium rounded-lg text-sm px-5 py-2.5
            mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 w-[396px]">
            <x-badge1 rating="4.7" reviews="12"/>
            <div class="flex items-center pl-4 border border-gray-200 rounded bg-gray-800 dark:border-gray-700 my-4 hover:bg-gray-700">
                <input id="badge1"
                       type="radio"
                       value="1"
                       checked
                       name="type"
                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600
                       dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 selected">
                <label for="badge1"
                       class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                    Type 1 - Light
                </label>
            </div>
        </div>

        <div type="button" class="text-gray-900 bg-white border border-gray-300 font-medium rounded-lg text-sm px-5 py-2.5
            mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 w-[396px]">
            <x-bagde1dark rating="4.7" reviews="12"/>
            <div class="flex items-center pl-4 border border-gray-200 rounded bg-gray-800 dark:border-gray-700 my-4 hover:bg-gray-700">
                <input id="badge1dark"
                       type="radio"
                       value="2"
                       name="type"
                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600
                       dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="badge1dark"
                       class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                    Type 1 - Dark
                </label>
            </div>
        </div>

        <div class="flex flex-col w-full">
            <label for="url" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Preview</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="url"
                       name="url"
                       id="url"
                       class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50
                       focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600
                       dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="Maps URL"
                       required>
                <button type="submit"
                        class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4
                        focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600
                        dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Preview
                </button>
            </div>
            <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500 dark:text-gray-400">The URL can be obtain by clicking the Share button for the location on Google Maps</p>
        </div>
    </form>

</x-layout>

