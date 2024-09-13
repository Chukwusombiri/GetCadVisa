<x-app-layout>
    {{-- breadcrumb --}}
    <x-breadcrumb>
        <x-slot:topic>immigration</x-slot>
        <x-slot:subtopic>Sponsorship</x-slot>
    </x-breadcrumb>
    {{-- HEADER --}}
    <x-side-image-header :url="route('business_assessment')" :source="asset('images/business.jpg')" button-text="Apply today">
        <x-slot:maintitle>Canadian Business visa</x-slot>
        <x-slot:subtitle>Learn more about Canadian business immigration and how to get a business visa.</x-slot>
    </x-side-image-header>
    {{-- BODY --}}

    <section class="grid grid-cols-4">
        {{-- MAIN --}}
        <div class="col-span-4 lg:col-span-3 pt-12 pb-24 px-4 md:px-6 lg:px-10 bg-gray-50 text-gray-600">

            <h2 class="hedvig-regular text-gray-800 mb-8 text-3xl text-4xl md:text-5xl max-w-xl">                
                Business visa: Everything you need to know
            </h2>

            <p class="text-lg mb-2">
                Canada offers a variety of immigration pathways for entrepreneurs, investors, and self-employed persons.
                These pathways are operated by the Canadian government, as well as by provincial and territorial
                governments.
            </p>

            <p class="text-lg mb-2">
                The Government of Canada is always seeking investors, business managers, and entrepreneurs of all shapes
                and sizes who are interested in settling and seeking new opportunities in Canada to apply to the wide
                range of fast-tracked Business Immigration Programs. Your experience and business know-how are
                invaluable
                assets that can help you invest in your future with Canada’s fast-growing, diverse economy.
            </p>
            {{-- business options --}}
            <div class="md:hidden mt-16">

                <p class="py-2 futura-medium text-xl text-gray-700">
                    Canada Immigration options
                </p>
                <ul class="space-y-2 pl-2 mt-2" role="list">
                    <li>
                        <a href="{{ route('canada_immigration') }}"
                            class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                            Immigrate to Canada
                            <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('work_permit') }}"
                            class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                            Working in Canada
                            <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('study_immigration') }}"
                            class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                            Student visa
                            <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('sponsorship_immigration') }}"
                            class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                            Sponsorship
                            <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('citizenship') }}"
                            class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                            Canadian Citizenship
                            <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('cec') }}"
                            class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                            Canadian Experience Class
                            <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li>
                </ul>

            </div>
            {{-- table of content --}}
            <div class="my-10">

                <p class="py-2 futura-medium text-xl text-gray-700">Canadian Business visa program: what you'll learn</p>

                <ul class="ml-4 space-y-2" role="list">

                    <li><a href="{{ route('business_immigration') . '#Federal-Business-Immigration-Programs' }}"
                            class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                                </svg>

                            </span><span class="underline">Federal Business Immigration Programs</span></a></li>

                    <li><a href="{{ route('business_immigration') . '#Quebec-Business-Immigration-Programs' }}"
                            class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                                </svg>

                            </span><span class="underline">Quebec Business Immigration Programs</span></a></li>

                    <li><a href="{{ route('business_immigration') . '#Provincial-Nominee-Programs-for-Business' }}"
                            class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                                </svg>

                            </span><span class="underline">Provincial Nominee Programs for Business</span></a></li>

                    <li><a href="{{ route('business_immigration') . '#Our-Business-Immigration-Team' }}"
                            class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                                </svg>

                            </span><span class="underline">Our Business Immigration Team</span></a></li>

                    <li><a href="{{ route('business_immigration') . '#Business-Immigration-FAQs' }}"
                            class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                                </svg>

                            </span><span class="underline">Business Immigration FAQs</span></a></li>

                </ul>

            </div>
            {{-- business asssessment --}}
            <div class="px-4 py-4 w-full md:w-[70%] rounded-lg border border-gray-300 hover:border-rose-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
                </svg>
                <p class="mb-4 md:mb-6">
                    {{config('app.name')}} free business visa assessment helps save stress and time by evaluating the chances 
                    of getting Business visa from anywhere in the world. Try it today and see for yourself.  
                </p>
                <div class="py-6">
                    <x-link-two href="{{ route('business_assessment') }}">start today</x-link-two>
                </div>
            </div>
            {{-- Federal-Business-Immigration-Programs --}}
            <div id="Federal-Business-Immigration-Programs" class="mt-16 md:mt-24">
                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Federal Business Immigration
                    Programs</h2>
                <p>Whether you are self-employed, are looking to grow or start a business in Canada,

                    or simply would like to leverage your personal net worth to help drive the Canadian economy,

                    there are several Federal Business Immigration Programs designed to fit the skills and

                    experience of successful business persons who want to settle in any province except Quebec.

                </p>
            </div>
            {{-- Quebec-Business-Immigration-Programs --}}
            <div class="mt-16 md:mt-24" id="Quebec-Business-Immigration-Programs">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Quebec Business Immigration
                    Programs</h2>

                <div class="">

                    <p>Quebec is calling all business immigrants to take advantage of their array of Self-Employed,

                        Investor, and Entrepreneur Immigration Programs. Devised to foster economic growth and create

                        job opportunities on a provincial level, Quebec’s unique Business Immigration Programs are a

                        great option for potential newcomers searching for entrepreneurial diversity.

                    </p>

                </div>

            </div>
            {{-- Provincial-Nominee-Programs-for-Business --}}
            <div class="mt-16 md:mt-24" id="Provincial-Nominee-Programs-for-Business">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Provincial Nominee Programs for
                    Business</h2>

                <div class="">

                    <p>Each province and territory operates its own Provincial Nominee Program (PNP),
                        many of which have a stream for candidates with entrepreneurial or management experience. The
                        eligibility criteria and application procedure for each PNP stream varies, but successful
                        applicants will invariably receive a provincial nomination. This provincial nomination then
                        generally permits the applicant to submit an application for permanent residence at the federal
                        level.

                    </p>

                </div>

            </div>
            {{-- Our-Business-Immigration-Team --}}
            <div class="mt-16 md:mt-24" id="Our-Business-Immigration-Team">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Our Business Immigration Team
                </h2>

                <div class="w-full">

                    <p>

                        With a wealth of opportunities waiting for experienced, business-savvy individuals to help

                        propel the growing Canadian economy, our team of experts are ready to help you take the next

                        step in your business immigration endeavours. Guiding you step by step through the

                        immigration process from eligibility to permanent residency, our business immigration team

                        provides first-class support, so you can get back to focusing on your business.

                    </p>

                </div>

            </div>
            {{-- Business-Immigration-FAQs --}}
            <div class="mt-16 md:mt-24" id="Business-Immigration-FAQs">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Business Immigration FAQs</h2>
                <x-faq-item>
                    <x-slot:trigger>What types of business or investment activities make me eligible for the
                        Investor Venture Capital Program?</x-slot>
                        If you have a net worth of at least $10 million CAD acquired through legal business
                        investment activities such as a commercial, for-profit business or private sector
                        activities, you could be eligible for the Investor Venture Capital Pilot Program.
                </x-faq-item>
                <x-faq-item>
                    <x-slot:trigger>Do I need to invest my own money for a Canadian investor visa?</x-slot>
                    Yes. Most streams of Canadian business immigration will require a capital investment
                    from your personal net worth. The Federal Startup Visa and Self-Employed programs
                    are the only streams that do not require some sort of upfront investment.
                </x-faq-item>
                <x-faq-item>
                    <x-slot:trigger>Will my visa be affected if my business fails?</x-slot>
                    No. Your permanent residence will not be jeopardized in the event your business
                    fails.
                </x-faq-item>
                <x-faq-item>
                    <x-slot:trigger>What is the minimum investment I would need to secure for a Startup Visa?</x-slot>
                    Entrepreneurs wishing to immigrate to Canada with a startup visa must secure a
                    minimum investment of $200,000 from an approved organization or at least $75,000
                    from a designated angel investor. If your business is accepted into a business
                    incubator program, you are not required to secure an investment.
                </x-faq-item>
                <x-faq-item>
                    <x-slot:trigger>Can I move to Canada if I am self-employed?</x-slot>
                    Yes. If you have at least two years of relevant experience as an artisan,
                    professional athlete or farmer, you could be eligible to come to Canada with a
                    self-employed visa.
                </x-faq-item>                
            </div>
        </div>
        <!-- side pane -->
        <div
            class="hidden md:block col-span-4 lg:col-span-1 px-4 md:px-6 bg-gradient-to-b from-gray-200 from-[5vh] via-gray-100 via-[65vh] to-gray-50">
            <p class="text-gray-700 text-xl mt-4 futura-medium mb-6">
                Explore Canada immigration options
            </p>
            <ul class="space-y-2 pl-2 mt-2" role="list">
                <li>
                    <a href="{{ route('canada_immigration') }}"
                        class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                        Immigrate to Canada
                        <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('work_permit') }}"
                        class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                        Working in Canada
                        <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('study_immigration') }}"
                        class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                        Student visa
                        <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('sponsorship_immigration') }}"
                        class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                        Sponsorship
                        <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('citizenship') }}"
                        class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                        Canadian Citizenship
                        <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('cec') }}"
                        class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                        Canadian Experience Class
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
                Use our free visa eligibility assessment tool to know your immigration status and kick start your visa
                application.
            </p>
            <div class="py-6">
                <x-link-one href="{{ route('assessment') }}">Free visa assessment</x-link-one>
            </div>
        </div>
    </section>

</x-app-layout>
