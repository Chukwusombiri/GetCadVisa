<div class="container mx-auto my-8 px-4 md:px-8" wire:key="uniqueKey-{{ $uniqueKey }}">   
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
        <!-- CARD 1 -->
        @if (count($blogs)>0)
        @foreach ($blogs as $item)
        <div class="rounded overflow-hidden shadow-lg flex flex-col">
            <div class="relative">
                <a href="{{$item['url']}}">
                    <img class="w-full h-56"
                        src="{{$item['urlToImage']}}"
                        alt="{{$item['title']}}">
                    <div
                        class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                    </div>
                </a>                       
            </div>
            <div class="px-6 py-4 mb-auto">
                <a href="{{$item['url']}}"
                    class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2">
                    {{$item['title']}}
                </a>                        
            </div>
            <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                <a href="{{$item['url']}}"
                    class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                    Keep reading
                    <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>                       
            </div>
        </div>
        @endforeach
        @else
            <div class="py-6 hedvig-regular text-gray-500 text-center text-2xl md:text-3xl tracking-wide">
                No latest news to display
            </div>
        @endif
        <!-- CARD ends -->
        <div class="sm:col-span-2 md:col-span-3 flex justify-end my-4">
            <button wire:click="refreshComponent" class="px-4 py-2 border border-rose-700 text-rose-700 uppercase text-xs hover:bg-slate-300 transition duration-3000 flex items-center gap-2 rounded-2xl">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-refresh w-6 h-6" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" />
                    <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4" />
                </svg>
                Refresh
            </button>
        </div>
    </div>
</div>