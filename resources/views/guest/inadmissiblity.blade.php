<x-app-layout>
    <x-breadcrumb>
        <x-slot:topic>immigration</x-slot>
        <x-slot:subtopic>Inadmissibility</x-slot>
    </x-breadcrumb>
    {{-- HEADER --}}
    <x-side-image-header :url="route('contact')" :source="asset('images/inadmissibility.png')" button-text="Get in touch">
        <x-slot:maintitle>Visa inadmissibility</x-slot>
        <x-slot:subtitle>Inadmissibility is a complex issue that can affect an individual's ability to enter or remain in Canada. Discover how to avoid it completely.</x-slot>
    </x-side-image-header>
    <!-- Main Content -->
    <section class="py-16">
        <div class="px-4 md:px-6 lg:px-10 max-w-4xl mx-auto">
            <h1 class="hedvig-regular text-gray-800 mb-8 text-3xl text-4xl md:text-5xl max-w-xl">Understanding Inadmissibility in Canadian Immigration</h1>           
            <div class="text-lg">
                <p class="text-gray-600 leading-relaxed mb-2">
                    Inadmissibility is a complex issue that can affect an individual's ability to enter or remain in Canada. It refers to situations where an individual is deemed ineligible for immigration or temporary residence due to a variety of factors, including criminal history, medical conditions, financial reasons, or security concerns. 
                </p>
                <p class="text-gray-600 leading-relaxed mb-2">
                    The Canadian government has strict regulations in place to ensure that people who come to Canada do not pose a threat to its citizens or its values. This means that individuals who have committed certain crimes or who have a medical condition that could put a strain on the Canadian healthcare system may not be allowed into the country.
                </p>
                <p class="text-gray-600 leading-relaxed">
                    If you are deemed inadmissible to Canada, you may still have options to overcome this barrier. For example, you may be eligible to apply for a Temporary Resident Permit (TRP) or Criminal Rehabilitation to enter Canada despite your inadmissibility. It's important to consult with an experienced immigration lawyer who can guide you through the process and help you explore your options.
                </p>
            </div>



            <div class="mt-16">
                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Criminal Inadmissibility</h2>
                <div class="">
                    <p  class="mb-2">If a person has been convicted of, or committed a crime in their home country, and that crime has an equivalent under Canadian law, the person may be considered inadmissible to Canada due to criminality. It is important to note that not all crimes and convictions make a person inadmissible to Canada. The crime has to be of a certain degree of seriousness. One common reason for criminal inadmissibility is a DUI charge. People with one or more recent convictions for driving while intoxicated are likely to be turned away from entering Canada. Other crimes that can cause criminal inadmissibility include theft, reckless driving and assault.</p>
                    <p><b>NOTE: </b>A DUI conviction can cause problems entering Canada for up to 10 years from the completion of the sentence. After 10 years, you are considered rehabilitated.</p>
                </div>
            </div>

            <div class="mt-16">
                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Medical Issues</h2>
                <div class="">
                    <p>On the other hand, a person can be considered inadmissible to Canada due to their health. If a person has a medical condition that poses a serious threat to the health or safety of the Canadian public, they will likely not be allowed to enter the country. Likewise, a person might be denied entry if an immigration officer determines that there is a chance that they will pose an excessive demand from publicly funded Canadian health and social services.</p>
                </div>
            </div>            

            <div class="mt-16">
                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Temporary Resident Permit</h2>
                <div class="">
                    <p>Inadmissibility is not equivalent to a permanent ban from entering Canada. There are solutions available to help people otherwise considered inadmissible to enter Canada. One of those is a Temporary Resident Permit. If an inadmissible person has a valid need to enter Canada that outweighs the risks of them being in the county, they may be granted this special permit that will allow them to be in the country for a predetermined amount of time.</p>
                </div>
            </div>            

            <div class="mt-16">
                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">How {{config('app.name')}} Can Help</h2>
                <div class="">
                    <p>Inadmissibility is one of the more complicated immigration problems in Canada. If you have questions about inadmissibility and options by which to overcome it, a Canadian immigration lawyer like the ones at {{config('app.name')}} can help these immigration issues better. <a href="{{route('contact')}}" class="text-red-600 hover:underline"></a></p>
                </div>
            </div>            
        </div>
      </section>

      <section class="py-16">
         <!-- News Updates -->
         <div class="px-4 md:px-8 lg:px-10 max-w-8xl mx-auto">
            <div class="pb-3 border-b mb-6 md:mb-8 flex justify-between">
                <h3 class="hedvig-regular uppercase text-4xl md:text-5xl tracking-wide max-w-xl text-gray-800">Latest
                    Canada immigration news</h3>
                <a href="{{ route('news') }}"
                    class="flex items-center text-md uppercase futura-medium text-rose-700 hover:text-rose-800">
                    View All
                    <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
            {{-- grid --}}
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
            </div>
        </div>
      </section>

</x-app-layout>          

          

