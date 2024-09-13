<x-app-layout> 
    {{-- breadcrumb --}}
    <x-breadcrumb>
        <x-slot:topic>immigration</x-slot>
        <x-slot:subtopic>PNP finder</x-slot>
    </x-breadcrumb>
    {{-- HEADER --}}
    <x-header>
        <x-slot:maintitle>CLB Language Converter</x-slot>
        <x-slot:subtitle>Determine the Canadian Language Benchmark (CLB) conversions</x-slot>
    </x-header>
     {{-- BODY --}}
     <section class="grid grid-cols-4">
        {{-- MAIN --}}
        <div class="col-span-4 lg:col-span-3 pt-12 pb-24 px-4 md:px-6 lg:px-10 bg-gray-50 text-gray-600">                            
            <h2 class="hedvig-regular text-gray-800 mb-8 text-3xl text-4xl md:text-5xl max-w-xl">
                Canada Immigration Language Converter
            </h2>
            <p class="mb-2 text-lg">
                A standardized language test result, showing English or French language proficiency, is required for 
                immigration to Canada under Express Entry. Three tests are currently recognized by Immigration, Refugees 
                and Citizenship Canada (IRCC). Each test evaluates and gives scores for four abilities: reading, speaking,
                    writing and listening.
            </p>
            <p class="mb-6 md:mb-8 text-lg">
                Use this tool to determine the Canadian Language Benchmark (CLB) conversations for your language test scores for Canadian immigration.
            </p>                           
            {{-- crs form --}}
            <div class="px-4 py-4 w-full md:w-[70%] rounded-lg border border-gray-300 hover:border-rose-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
                </svg>
                <p>
                    SORRY! THIS TOOL IS UNDERGOING MAINTENANCE. CHECK BACK LATER FOR UPDATES! For an indepth understanding of Canadian Language Benchmark, <a href="https://www.canada.ca/content/dam/ircc/migration/ircc/english/pdf/pub/language-benchmarks.pdf" class="text-rose-700 underline">this page</a> document.
                </p>
            </div>
            {{-- immigrate tools options --}}
            <div class="md:hidden mt-16 bg-white px-4 py-2 rounded-md shadow-md">
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
            {{-- main content inner --}}
            <div class="flex flex-wrap">
                {{-- trending news --}}
                <div id="trending-news" class="w-full mt-16">
                    <h2 class="bg-white px-4 py-2 border-l-4 border-rose-700 rounded-r-md text-2xl">Additional Information</h2>
                    <div class="mt-2 px-4 py-2 border-b border-gray-300">
                        <p class="mb-2 text-gray-700">Many of Canada’s immigration programs, including all three federal programs managed under Express Entry, require that Express Entry candidates write a standardized language test and demonstrate a minimum language ability in at least one of Canada’s official languages, English or French. These federal economic programs include the FSW Class, Federal Skilled Trades Class (FSTC), and the Canadian Experience Class (CEC).</p>
                        <p class="mb-2 text-gray-700">Canada has its own system for describing language proficiency according to Canadian standards. Canada ranks English language proficiency according to Canadian Language Benchmarks or CLBs. There are 12 CLBs that cover the range from the most basic ability (CLB 1) to complete fluency (CLB 12). In French, Canada’s classifies language ability in a similar fashion, with levels known as a Niveaux de compétence Linguistique canadiens (NCLC).</p>
                        <p class="mb-2 text-gray-700">Candidates for Canadian immigration through a federal economic immigration program are required to demonstrate their proficiency in either English or French by way of a standardized test recognized by IRCC. Results of tests have a corresponding CLB for each of the four language components that are assessed: Speaking, Reading, Writing, Listening.</p>
                    </div>
                    
                    <div class="mt-2 px-4 py-2">
                        <p class="mb-4 font-bold text-xl">The three standardized tests that a candidate may take in order to prove language ability for a federal economic immigration program are:</p> 
                        <ul class="ml-4 list-disc space-y-2 w-full">
                            <li><p class="font-bold">IELTS</p>
                                <p class="mt-2">The IELTS (International English Language Testing System) test, which candidates outside and inside Canada alike may sit, is the most popular standardized language test recognized by IRCC for immigration purposes. Candidates for Canadian immigration should ensure that they take the General IELTS test, rather than the Academic test. Results are given by what is known as ‘bands’ across the four abilities, with an aggregate overall band score determined as an average of these. The scores in each of the four abilities have a corresponding CLB.</p>
                            </li>
                            <li>
                                <p class="font-bold">CELPIP</p>
                                <p class="mt-2">The CELPIP (Canadian English Language Proficiency Index Program) test is a Canadian test for English ability that may be taken by candidates for Canadian immigration who are taking the test from within Canada. CELPIP results correspond directly with CLBs, with results per language ability given as a score from 1 to 12.</p>
                            </li>
                            <li>
                                <p class="font-bold">TEF</p>
                                <p class="mt-2">The TEF (Test d'Évaluation de français) is a test of general French ability, recognized as official proof of language proficiency by IRCC for immigration applications, as well as by the Ministère de l'Immigration, de la diversité et de l'Inclusion (MIDI) du Québec for Quebec Selection Certificate applications.</p>
                            </li>
                        </ul>
                        <p class="mt-4">Note that though candidates for a federal economic immigration program are required to prove ability in one official language, they may be able to gain more points under the Comprehensive Ranking System (CRS) for Express Entry by proving ability in both official languages.</p>
                    </div>
                </div>
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