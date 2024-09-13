<x-app-layout> 
    {{-- BREADCRUMB --}}
    <x-breadcrumb>
        <x-slot:topic>Immigration</x-slot>
        <x-slot:subtopic>Quebec</x-slot>
    </x-breadcrumb>
    {{-- HEADER --}}
    <x-header>
        <x-slot:maintitle>Quebec Immigration Program</x-slot>
        <x-slot:subtitle>Our Quebec immigration program can help make your dreams of immigrating to Canada a reality. Let's get started.</x-slot>
    </x-header>
    {{-- BODY --}}

    <section class="grid grid-cols-4">
        {{-- main content --}}
        <div class="col-span-4 lg:col-span-3 pt-12 pb-24 bg-gray-50 text-gray-600">
            <div class="container mx-auto  px-4 md:px-6 lg:px-10">
                <!-- Quebec immigration program -->
                <div class="bg-white shadow overflow-hidden sm:rounded-lg">

                    <div class="px-4 py-5 sm:px-6">

                        <h2 class="text-xl lg:text-2xl leading-6 futura-medium text-rose-700">Quebec Immigration Program</h2>

                        <p class="mt-2 max-w-2xl text-md text-gray-600">The Quebec Immigration Program is a pathway for

                        skilled foreign workers and their families to obtain permanent residence in Quebec. Learn more

                        about the eligibility criteria, application process, and more.</p>

                    </div>

                    <div class="border-t border-gray-200 px-4 py-5 sm:p-0">

                        <div class="sm:divide-y sm:divide-gray-200">

                            <div class="py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">

                                <dt class="text-md font-medium text-gray-600">

                                Eligibility

                                </dt>

                                <dd class="mt-2 text-md text-gray-600 sm:mt-0 sm:col-span-2">

                                To be eligible for the Quebec Immigration Program, you must meet certain criteria,

                                including language proficiency, education level, work experience, and more. Visit our

                                eligibility page for more information.

                                </dd>

                            </div>

                            <div class="py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">

                                <dt class="text-md font-medium text-gray-600">

                                Application process

                                </dt>

                                <dd class="mt-2 text-md text-gray-600 sm:mt-0 sm:col-span-2">

                                The application process for the Quebec Immigration Program involves several steps,

                                including submitting an Expression of Interest, obtaining a Quebec Selection

                                Certificate, and applying for permanent residence. Learn more about the process on

                                our application page.

                                </dd>

                            </div>

                            <div class="py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">

                                <dt class="text-md font-medium text-gray-600">

                                Benefits

                                </dt>

                                <dd class="mt-2 text-md text-gray-600 sm:mt-0 sm:col-span-2">

                                The Quebec Immigration Program offers numerous benefits, including access to the

                                Canadian labour market, high standard of living, universal healthcare, and more. Visit

                                our benefits page for more information.

                                </dd>

                            </div>

                        </div>

                    </div>

                </div>

                {{-- express entry options --}}
                <div class="md:hidden mt-16">
                    <p class="text-gray-700 text-xl mt-4 futura-medium mb-6">
                        Explore Canada immigration options
                    </p>
                    <ul class="space-y-2 pl-2 mt-2" role="list">
                        <li>
                            <a href="{{ route('express_entry') }}"
                                class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                                Express entry
                                <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('PNP') }}"
                                class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                                Provincial Nominee Program
                                <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('canada_pr') }}"
                                class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                                Canada Permanent Resident
                                <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('pro_and_skilled') }}"
                                class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                                Professional and skilled workers
                                <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('atlantic_immigration') }}"
                                class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                                Atlantic Immigration Program
                                <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('rural_and_northern') }}"
                                class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                                Rural and Northern Immigration Pilot
                                <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('agri_food') }}"
                                class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                                Agri-food Pilot
                                <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('caregiver') }}"
                                class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                                Caregiver program
                                <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('canada_immigration_faqs') }}"
                                class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                                Canada Immigration FAQs
                                <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <p class="text-gray-700 text-md mt-4 md:mt-8 mb-6">
                        Use our free visa eligibility assessment tool to know your immigration status and kick start your visa application.
                    </p>
                    <div class="py-6">
                        <x-link-one href="{{ route('assessment') }}">Free visa assessment</x-link-one>
                    </div>
                </div>

                <!-- Quebec City -->
                <div class="bg-white shadow overflow-hidden sm:rounded-lg mt-16">

                    <div class="flex-shrink-0">

                        <img class="h-48 w-full object-cover object-center"

                            src="{{url('/images/quebac-city.jpg')}}"

                            alt="Quebec City">

                    </div>

                    <div class="px-4 py-5 sm:p-6">

                        <h3 class="text-xl lg:text-2xl leading-6 futura-medium text-rose-700">Quebec City</h3>

                        <div class="mt-2 flex flex-col sm:flex-row sm:items-center sm:justify-between">

                            <div class="sm:flex sm:space-x-2">

                                <p class="text-md font-medium text-gray-600">Province:</p>

                                <p class="text-md text-gray-600">Quebec</p>

                            </div>

                            <div class="mt-2 flex items-center text-sm text-gray-600 sm:mt-0">

                                <!-- Heroicon name: solid/users -->

                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-600" xmlns="http://www.w3.org/2000/svg"

                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">

                                    <path

                                        d="M10 12a3 3 0 100-6 3 3 0 000 6zM6 9a3 3 0 116 0 3 3 0 01-6 0z" />

                                    <path fill-rule="evenodd"

                                        d="M2 4a2 2 0 012-2h12a2 2 0 012 2v12a2 2 0 01-2 2H4a2 2 0 01-2-2V4zm2-1a1 1 0 00-1 1v12a1 1 0 001 1h12a1 1 0 001-1V4a1 1 0 00-1-1H4z"

                                        clip-rule="evenodd" />

                                </svg>

                                <span>Population: 531,902</span>

                            </div>

                        </div>

                        <div class="mt-3 text-md text-gray-600">

                            <p>Quebec City is the capital of the province of Quebec and one of the oldest cities in North

                                America, founded in 1608. The city is known for its historic architecture, including the

                                famous Château Frontenac hotel, as well as its vibrant cultural scene and numerous

                                festivals.</p>

                        </div>

                    </div>

                </div>

                <!-- Montreal -->

                <div class="bg-white shadow overflow-hidden sm:rounded-lg mt-16">

                    <div class="flex-shrink-0">

                        <img class="h-48 w-full object-cover"

                            src="{{url('/images/montreal.jpg')}}"

                            alt="Montreal">

                    </div>

                    <div class="px-4 py-5 sm:p-6">

                        <h3 class="text-xl lg:text-2xl leading-6 futura-medium text-rose-700">Montreal</h3>

                        <div class="mt-2 flex flex-col sm:flex-row sm:items-center sm:justify-between">

                            <div class="sm:flex sm:space-x-2">

                                <p class="text-md font-medium text-gray-600">Province:</p>

                                <p class="text-md text-gray-600">Quebec</p>

                            </div>

                            <div class="mt-2 flex items-center text-sm text-gray-600 sm:mt-0">

                                <!-- Heroicon name: solid/users -->

                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-600" xmlns="http://www.w3.org/2000/svg"

                                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">

                                <path

                                                                    d="M10 12a3 3 0 100-6 3 3 0 000 6zM6 9a3 3 0 116 0 3 3 0 01-6 0z" />

                                <path fill-rule="evenodd"

                                                                    d="M2 4a2 2 0 012-2h12a2 2 0 012 2v12a2 2 0 01-2 2H4a2 2 0 01-2-2V4zm2-1a1 1 0 00-1 1v12a1 1 0 001 1h12a1 1 0 001-1V4a1 1 0 00-1-1H4z"

                                                                    clip-rule="evenodd" />

                                </svg>

                                <span>Population: 1,704,694</span>

                            </div>

                        </div>

                        <div class="mt-3 text-md text-gray-600">

                            <p>Montreal is the largest city in Quebec and the second-largest city in Canada, with a rich

                            history and a diverse cultural scene. The city is known for its charming neighborhoods,

                            world-class restaurants, and lively festivals, including the Montreal Jazz Festival and

                            Just for Laughs.</p>

                        </div>

                    </div>

                </div>            

                <!-- Gatineau -->

                <div class="bg-white shadow overflow-hidden sm:rounded-lg mt-16">

                    <div class="flex-shrink-0">

                        <img class="h-48 w-full object-cover"

                            src="{{url('/images/gatineau.jpg')}}"

                            alt="Gatineau">

                    </div>

                    <div class="px-4 py-5 sm:p-6">

                        <h3 class="text-xl lg:text-2xl leading-6 futura-medium text-rose-700">Gatineau</h3>

                        <div class="mt-2 flex flex-col sm:flex-row sm:items-center sm:justify-between">

                            <div class="sm:flex sm:space-x-2">

                                <p class="text-md font-medium text-gray-600">Province:</p>

                                <p class="text-md text-gray-600">Quebec</p>

                            </div>

                            <div class="mt-2 flex items-center text-sm text-gray-600 sm:mt-0">

                                <!-- Heroicon name: solid/users -->

                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-600" xmlns="http://www.w3.org/2000/svg"

                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">

                                    <path

                                        d="M10 12a3 3 0 100-6 3 3 0 000 6zM6 9a3 3 0 116 0 3 3 0 01-6 0z" />

                                        <path fill-rule="evenodd"d="M2 4a2 2 0 012-2h12a2 2 0 012 2v12a2 2 0 01-2 2H4a2 2 0 01-2-2V4zm2-1a1 1 0 00-1 1v12a1 1 0 001 1h12a1 1 0 001-1V4a1 1 0 00-1-1H4z" clip-rule="evenodd" />

                                </svg>

                                <span>Population: 276,245</span>

                            </div>

                        </div>

                        <div class="mt-3 text-md text-gray-600">

                            <p>Gatineau is a city in western Quebec, located on the northern bank of the Ottawa River

                            across from Ottawa, the capital of Canada. The city is known for its beautiful parks,

                            museums, and cultural events. It offers a high quality of life with affordable housing

                            and a strong job market.</p>

                        </div>

                    </div>

                </div>

            </div>
            <!-- CTA Section -->
            <div class="bg-gray-100 lg:bg-gray-50 py-16 mt-16">

                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                    <div class="lg:text-center">

                        <h2 class="text-base text-red-700 font-semibold tracking-wide uppercase">Ready to immigrate to

                            Quebec?</h2>

                        <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">

                            Start your immigration process today

                        </p>

                        <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">

                            Quebec offers a diverse range of immigration programs for individuals interested in living and

                            working in the province. Don't miss out on the opportunity to build your future in Quebec. Contact

                            us to get started!

                        </p>

                        <div class="mt-6 max-w-lg mx-auto">

                            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">

                                <x-link-one href="{{route('assessment')}}">Get started</x-link-one>
                                <x-link-two href="{{route('contact')}}">Speak to an advisor</x-link-two>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>                                                   
        {{-- aside --}}
        <div class="hidden md:block col-span-4 lg:col-span-1 px-4 md:px-6 bg-gradient-to-b from-gray-200 from-[5vh] via-gray-100 via-[65vh] to-gray-50">
            <p class="text-gray-700 text-xl mt-4 futura-medium mb-6">
                Explore Canada immigration options
            </p>
            <ul class="space-y-2 pl-2 mt-2" role="list">
                <li>
                    <a href="{{ route('express_entry') }}"
                        class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                        Express entry
                        <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('PNP') }}"
                        class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                        Provincial Nominee Program
                        <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('canada_pr') }}"
                        class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                        Canada Permanent Resident
                        <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('pro_and_skilled') }}"
                        class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                        Professional and skilled workers
                        <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('atlantic_immigration') }}"
                        class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                        Atlantic Immigration Program
                        <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('rural_and_northern') }}"
                        class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                        Rural and Northern Immigration Pilot
                        <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('agri_food') }}"
                        class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                        Agri-food Pilot
                        <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('caregiver') }}"
                        class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                        Caregiver program
                        <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('canada_immigration_faqs') }}"
                        class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                        Canada Immigration FAQs
                        <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
            </ul>
            <p class="text-gray-700 text-md mt-4 md:mt-8 mb-6">
                Use our free visa eligibility assessment tool to know your immigration status and kick start your visa application.
            </p>
            <div class="py-6">
                <x-link-one href="{{ route('assessment') }}">Free visa assessment</x-link-one>
            </div>
        </div>
    </section>

</x-app-layout>