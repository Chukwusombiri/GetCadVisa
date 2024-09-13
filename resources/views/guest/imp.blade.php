<x-app-layout> 
    {{-- breadcrumb --}}
    <x-breadcrumb>
        <x-slot:topic>tools</x-slot>
        <x-slot:subtopic>Immigration Processing Time</x-slot>
    </x-breadcrumb>
    {{-- HEADER --}}
    <x-header>
        <x-slot:maintitle>Canadian Immigration Processing Time</x-slot>
        <x-slot:subtitle>Find out the processing time for your Canadian immigration application.</x-slot>
    </x-header> 
     {{-- BODY --}}
     <section class="grid grid-cols-4">
        {{-- MAIN --}}
        <div class="col-span-4 lg:col-span-3 pt-12 pb-24 px-4 md:px-6 lg:px-10 bg-gray-50 text-gray-600">                            
            <h2 class="hedvig-regular text-gray-800 mb-8 text-3xl text-4xl md:text-5xl max-w-xl">
                IRCC's Canadian Immigration Processing Times
            </h2>
            <p class="text-lg mb-6 md:mb-8">
                Whether you are looking to visit, study, work in or immigrate to Canada, Immigration, Refugee and Citizenship Canada's (IRCC) processing times tool provides the latest information on how long it may take your application to be processed.
            </p>
            <!-- link button -->
            <div class="py-6">
                <x-link-one href="https://www.canada.ca/en/immigration-refugees-citizenship/services/application/check-processing-times.html">Discover IRCC's Latest Immigration Processing time</x-link-one>                
            </div>                                              
            {{-- immigrate tools options --}}
            <div class="md:hidden mt-16">
                <p class="text-gray-700 text-xl mt-4 futura-medium mb-6">
                    Immigration Tools
                </p>
                
                <ul class="space-y-2 pl-2 mt-2" role="list">
                    <li>
                        <a href="{{ route('crs') }}"
                            class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                            Crs calculator
                            <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pnp_finder') }}"
                            class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                            PNP Finder
                            <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('clb_converter') }}"
                            class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                            CLB Converter
                            <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('imp') }}"
                            class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                            Immigration Processing time
                            <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('job_finder') }}"
                            class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                            Job Finder
                            <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('visiting_canada') }}"
                            class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                            Visiting Canada
                            <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>                                       
            <div class="mt-16 md:mt-24">
                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">About Canadian Immigration Processing Times</h2>
                <p class="mb-2 text-gray-700 text-md">The processing time begins the day Immigration, Refugees and Citizenship Canada (IRCC) receives an application and ends the day a final decision is made.</p>                                     
                <p class="mb-4 md:mb-6 text-md">Generally, the processing time for any given application depends on the following factors:</p> 
                <ul class="ml-4 list-disc space-y-2">
                    <li>the type of application submitted</li>
                    <li>if the application is complete;</li>
                    <li>how quickly IRCC expects to process applications already in the system;</li>                                            
                    <li>how easily applicants’ information can be verified; </li>
                    <li>how long applicants take to respond to any requests or concerns; and</li>
                    <li> other factors.</li>
                </ul>   
            </div>                       
        </div>
        {{-- aside --}}
        <div class="hidden md:block col-span-4 lg:col-span-1 px-4 md:px-6 bg-gradient-to-b from-gray-200 from-[5vh] via-gray-100 via-[65vh] to-gray-50">
            <p class="text-gray-700 text-xl mt-4 futura-medium mb-6">
                Immigration Tools
            </p>
            
            <ul class="space-y-2 pl-2 mt-2" role="list">
                <li>
                    <a href="{{ route('crs') }}"
                        class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                        Crs calculator
                        <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('pnp_finder') }}"
                        class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                        PNP Finder
                        <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('clb_converter') }}"
                        class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                        CLB Converter
                        <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('imp') }}"
                        class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                        Immigration Processing time
                        <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('job_finder') }}"
                        class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                        Job Finder
                        <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('visiting_canada') }}"
                        class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                        Visiting Canada
                        <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
            </ul>
            <p class="text-gray-700 text-md mt-4 md:mt-8 mb-6">
                Evaluate your eligibilty for visa using our free tool to know your immigration status.
            </p>
            <div class="py-6">
                <x-link-one href="{{ route('assessment') }}">visa assessment</x-link-one>
            </div>
        </div>
    </section>
</x-app-layout> 