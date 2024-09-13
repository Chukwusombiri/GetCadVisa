<div class="bg-white text-gray-600">   
    <div class="px-4 md:px-6 lg:px-10 py-6">
        <p class="text-lg futura-medium text-center">Are you sure you want to delete this visa assessment information?</p>
        <div class="flex justify-end items-center gap-4 mt-4">
            <button class="bg-gray-300 text-gray-800 text-xs hover:bg-gray-400 tracking-wide uppercase rounded-2xl px-4 py-[12px] font-semibold" wire:click="$emit('closeModal')">cancel</button>
            <button class="px-4 py-[12px] text-xs font-semibold tracking-wide uppercase bg-rose-700 hover:bg-rose-800 text-gray-100 rounded-2xl" wire:click="delete">delete</button>
        </div>
    </div>
</div>