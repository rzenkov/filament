<div class="fixed z-20 inset-0 flex items-end justify-center p-4 md:py-3 md:px-6 pointer-events-none sm:items-start sm:justify-end">
    <div 
        x-data="{ show: false, message: '' }" 
        x-on:notify.window="show = true; message = event.detail; setTimeout(() => { show = false }, 2500)" 
        x-show="show" 
        x-transition:enter="transform ease-out duration-300 transition" 
        x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2" 
        x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0" 
        x-transition:leave="transition ease-in duration-100" 
        x-transition:leave-start="opacity-100" 
        x-transition:leave-end="opacity-0" 
        class="max-w-sm w-full bg-gray-800 shadow-lg rounded pointer-events-auto overflow-hidden">
        <div class="p-4">
            <div class="flex items-start">
                <div class="w-0 flex-1">
                    <p x-text="message" class="text-sm text-white"></p>
                </div>
                <div class="ml-4 flex-shrink-0 flex">
                    <button @click="show = false" class="text-gray-400 hover:text-white transition-colors duration-200 focus:outline-none">
                        <span class="sr-only">Close</span>
                        <x-heroicon-o-x class="w-5 h-5 fill-current" />
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>