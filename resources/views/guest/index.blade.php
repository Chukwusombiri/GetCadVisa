<x-app-layout>
    {{-- LANDING --}}
    <section class="py-12 md:py-16 lg:py-24 bg-gray-50" id="landing">
        <div id="landing-content" class="mx-auto max-w-full md:max-w-8xl md:max-w-9xl px-4 md:px-6 lg:px-10 flex">
            <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-10">
                {{-- grid-item-1 --}}
                <div class="flex flex-col items-center md:items-start">
                    <h1 class="hedvig-bold text-5xl md:text-6xl tracking-wide text-gray-800">
                        Fastest way to get a Canadian visa
                    </h1>
                    <p class="mt-6 md:mt-10 item-center md:items-center w-full text-gray-700 text-md md:text-lg">
                        {{ config('app.name') }} offers the most seamless and reliable approach to securing immigration
                        to canada.
                        <span class="hidden md:inline">
                            All types of visa application ranging from Business visa to Quebec visa are made and secured
                            under the most possible speed.
                        </span>
                    </p>
                    <div class="w-full mt-8 flex justify-start">
                        <x-link-one href="{{ route('assessment') }}">Apply now</x-link-one>
                    </div>
                </div>
                {{-- grid-item-2 --}}
                <div class="flex">
                    <div class="w-full max-w-full xl:max-w-5xl mx-auto">
                        <img src="{{ asset('/images/landing.jpg') }}" alt=""
                            class="w-full h-auto rounded-xl object-fit">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- why choose us --}}
    <section class="min-h-screen bg-gray-50">
        <div class="mx-auto lg:grid lg:grid-cols-4 lg:gap-16 xl:gap-24 px-4 py-12 md:px-6 lg:py-24 lg:px-10">
            <div class="col-span-2 mb-8">
                <p class="futura-light text-md md:text-lg text-gray-700">Trusted Worldwide</p>
                <h2 class="hedvig-regular mt-3 mb-4 text-3xl md:text-5xl tracking-wide text-gray-800">
                    Trusted
                    by over 600k users</h2>
                <p class="text-md md:text-lg lg:text-xl text-gray-600">Our rigorous security and compliance
                    standards are at the heart of all we do. We work tirelessly to secure your Canada visa</p>
                <div class="pt-6 mt-6 space-y-4 border-t border-gray-200">
                    <div>
                        <a href="{{ route('assessment') }}"
                            class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                            Explore your eligibility
                            <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                    <div>
                        <a href="{{ route('about') }}"
                            class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                            Visit the Trust Center
                            <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-span-2 space-y-8 md:grid md:grid-cols-2 md:gap-12 md:space-y-0">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="icon icon-tabler icon-tabler-discount-check-filled w-10 h-10 mb-2 text-rose-500 md:w-12 md:h-12"
                        width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M12.01 2.011a3.2 3.2 0 0 1 2.113 .797l.154 .145l.698 .698a1.2 1.2 0 0 0 .71 .341l.135 .008h1a3.2 3.2 0 0 1 3.195 3.018l.005 .182v1c0 .27 .092 .533 .258 .743l.09 .1l.697 .698a3.2 3.2 0 0 1 .147 4.382l-.145 .154l-.698 .698a1.2 1.2 0 0 0 -.341 .71l-.008 .135v1a3.2 3.2 0 0 1 -3.018 3.195l-.182 .005h-1a1.2 1.2 0 0 0 -.743 .258l-.1 .09l-.698 .697a3.2 3.2 0 0 1 -4.382 .147l-.154 -.145l-.698 -.698a1.2 1.2 0 0 0 -.71 -.341l-.135 -.008h-1a3.2 3.2 0 0 1 -3.195 -3.018l-.005 -.182v-1a1.2 1.2 0 0 0 -.258 -.743l-.09 -.1l-.697 -.698a3.2 3.2 0 0 1 -.147 -4.382l.145 -.154l.698 -.698a1.2 1.2 0 0 0 .341 -.71l.008 -.135v-1l.005 -.182a3.2 3.2 0 0 1 3.013 -3.013l.182 -.005h1a1.2 1.2 0 0 0 .743 -.258l.1 -.09l.698 -.697a3.2 3.2 0 0 1 2.269 -.944zm3.697 7.282a1 1 0 0 0 -1.414 0l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.32 1.497l2 2l.094 .083a1 1 0 0 0 1.32 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z"
                            stroke-width="0" fill="currentColor" />
                    </svg>
                    <h3 class="hedvig-regular mb-2 text-2xl font-bold">95.99% success</h3>
                    <p class="futura-light text-md md:text-lg text-gray-500">Visa application success
                        average says more than just numbers</p>
                </div>
                <div>
                    <svg class="w-10 h-10 mb-2 text-rose-500 md:w-12 md:h-12" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z">
                        </path>
                    </svg>
                    <h3 class="hedvig-regular mb-2 text-2xl font-bold">15k+ Clients</h3>
                    <p class="futura-light text-md md:text-lg text-gray-500">Trusted by over 15k clients from around the world
                    </p>
                </div>
                <div>
                    <svg class="w-10 h-10 mb-2 text-rose-500 md:w-12 md:h-12" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <h3 class="hedvig-regular mb-2 text-2xl font-bold">10+ years</h3>
                    <p class="futura-light text-md md:text-lg text-gray-500">Active and running for the past 10+ years and
                        counting.
                    </p>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="icon icon-tabler icon-tabler-list-details w-10 h-10 mb-2 text-rose-500 md:w-12 md:h-12"
                        width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ef4444"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M13 5h8" />
                        <path d="M13 9h5" />
                        <path d="M13 15h8" />
                        <path d="M13 19h5" />
                        <path d="M3 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                        <path d="M3 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                    </svg>
                    <h3 class="hedvig-regular mb-2 text-2xl font-bold">3k+ Monthly</h3>
                    <p class="futura-light text-md md:text-lg text-gray-500">We process and secure a minimum of 3k visa
                        applications.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- EXTRA --}}
    <div class="relative overflow-hidden bg-gray-900 py-12 md:py-16 lg:py-24 xl:py-32">
        <div class="relative">
            <div class="lg:mx-auto lg:grid lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-2 lg:gap-24 lg:px-8">
                <div class="mx-auto max-w-xl px-6 lg:mx-0 lg:max-w-none lg:py-16 lg:px-0 lg:col-start-2">
                    <div class="flex flex-col">
                            <h2 class="hedvig-regular text-3xl md:text-5xl tracking-wide text-white">
                                What it takes to immigrate to Canada?
                            </h2>
                            <p class="mt-4 text-md md:text-lg text-gray-300">
                                Express Entry is the Canadian government’s leading immigration pathway for skilled
                                workers. <a class="text-rose-500 uppercase hover:underline futura-semibold text-sm"
                                    href="{{ route('express_entry') }}">Learn more</a>
                            </p>
                            <p class="mt-2 mb-4 text-md lg:text-lg text-gray-300">
                                Discover the preliquisite for immgrating to Canada and begin your
                                clear path to Canada.
                            </p>
                            <div class="mt-4 md:mt-6 lg:mt-10">
                                <x-link-two class="border-rose-500 text-rose-500" href="/login">
                                    Discover eligibility
                                </x-link-two>
                            </div>
                    </div>
                </div>
                <div class="mt-12 md:mt-16 lg:mt-0">
                    <div class="-ml-48 pr-6 md:-ml-16 lg:relative lg:m-0 lg:h-full lg:px-0">
                        <img alt="Inbox user interface" loading="lazy" width="647" height="486"
                            class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:right-0 lg:h-full lg:w-auto lg:max-w-none"
                            style="color:transparent" src="{{ asset('/images/family_maple.jpeg') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- IMMIGRATION SERVICES STARTS --}}
    <section class="py-12 md:py-16 lg:py-24 xl:py-32 bg-gray-200">
        <div class="container mx-auto px-4 md:px-6 lg:px-10">
            <div class="mx-auto max-w-full lg:max-w-8xl md:px-20 flex flex-col">
                <h2 class="hedvig-regular text-4xl md:text-5xl text-gray-800 w-full md:max-w-xl mb-8 md:mb-10">
                    Immigrating to Canada
                    just got a lot easier</h2>
                <div class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-10">
                    {{-- single immigration service --}}
                    <div class="bg-white rounded-xl shadow-md overflow-hidden">
                        <div class="relative">
                            <img class="w-full h-48 object-cover" src="{{ asset('images/landing2.jpg') }}">
                        </div>
                        <div class="p-4">
                            <div class="text-xl font-medium text-gray-800 mb-2">Immigrate to Canada</div>
                            <p class="text-gray-500 text-md">Turn your goal of moving to Canada into a reality by
                                exploring over 25 available immigration pathways.</p>
                            <div>
                                <a href="{{ route('canada_immigration') }}"
                                    class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                                    Learn more
                                    <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- single immigration service --}}
                    <div class="bg-white rounded-xl shadow-md overflow-hidden">
                        <div class="relative">
                            <img class="w-full h-48 object-cover" src="{{ asset('images/citizens.jpg') }}">
                        </div>
                        <div class="p-4">
                            <div class="text-xl font-medium text-gray-800 mb-2">Canadian Citizen</div>
                            <p class="text-gray-500 text-md">Our comprehensive settlement information and resources can
                                help you establish your new life in Canada.</p>
                            <div>
                                <a href="{{ route('citizenship') }}"
                                    class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                                    Learn more
                                    <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- single immigration service --}}
                    <div class="bg-white rounded-xl shadow-md overflow-hidden">
                        <div class="relative">
                            <img class="w-full h-48 object-cover" src="{{ asset('images/study.jpg') }}">
                        </div>
                        <div class="p-4">
                            <div class="text-xl font-medium text-gray-800 mb-2">Study in Canada</div>
                            <p class="text-gray-500 text-md">Studying in Canada can enhance your prospects of
                                immigrating as a skilled worker.</p>
                            <div>
                                <a href="{{ route('study_immigration') }}"
                                    class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                                    know your options
                                    <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- single immigration service --}}
                    <div class="bg-white rounded-xl shadow-md overflow-hidden">
                        <div class="relative">
                            <img class="w-full h-48 object-cover" src="{{ asset('images/business.jpg') }}">
                        </div>
                        <div class="p-4">
                            <div class="text-xl font-medium text-gray-800 mb-2">Business Immigration</div>
                            <p class="text-gray-500 text-md">Discover investment and business opportunities in one of
                                the world's most open and stable economies.</p>
                            <div>
                                <a href="{{ route('business_assessment') }}"
                                    class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                                    Get started
                                    <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- single immigration service --}}
                    <div class="bg-white rounded-xl shadow-md overflow-hidden">
                        <div class="relative">
                            <img class="w-full h-48 object-cover" src="{{ asset('images/work_permit.jpg') }}">
                        </div>
                        <div class="p-4">
                            <div class="text-xl font-medium text-gray-800 mb-2">Canada Work Permit</div>
                            <p class="text-gray-500 text-md">Determine if you need a Canadian temporary work permit and
                                learn how to obtain one.</p>
                            <div>
                                <a href="{{ route('business_assessment') }}"
                                    class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                                    Get a work permit
                                    <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- single immigration service --}}
                    <div class="bg-white rounded-xl shadow-md overflow-hidden">
                        <div class="relative">
                            <img class="w-full h-48 object-cover" src="{{ asset('images/sponsor.jpg') }}">
                        </div>
                        <div class="p-4">
                            <div class="text-xl font-medium text-gray-800 mb-2">Become a Sponsor</div>
                            <p class="text-gray-500 text-md">Check your eligibilyty and bring your family members to
                                Canada to live as permanent residents.</p>
                            <div>
                                <a href="{{ route('sponsorship_assessment') }}"
                                    class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                                    Check eligibility
                                    <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ABOUT US --}}
    <section class="py-12 md:py-16 lg:py-24 bg-gray-100">
        <div class="container mx-auto px-6 md:px-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <div class="flex justify-center items-center order-2 md:order-1">
                    <div class="w-full md:h-[80vh]">
                        <img src="{{ asset('/images/team1.jpg') }}" alt="Team photo"
                            class="w-full h-full rounded-xl object-fit shadow-xl">
                        <p class="text-sm futura-light uppercase mt-4 mb-2 tracking-widest"><span
                                class="font-bold">Attorney Steven Calton</span>, Visa Assessment Officer</p>
                    </div>
                </div>
                <div class="flex flex-col order-1 md:order-2">
                    <h2 class="hedvig-regular text-4xl md:text-6xl font-medium text-gray-800 mb-8">
                        Rendering best Canada immigration services
                    </h2>
                    <div class="text-gray-700">
                        <p class="futura-bold text-lg mb-2 font-medium">Who we are</p>
                        <p class="text-lg mb-6">
                            We specialize in offering representation and guidance to foreign nationals seeking to obtain
                            a Canadian visa and enter Canada either permanently or temporarily.
                            <br><a href="{{ route('about') }}"
                                class="text-sm font-semibold uppercase cursor-pointer text-rose-700">Learn more</a>
                        </p>
                        <p class="futura-bold text-lg mb-2 font-medium">Chat an advisor, or email</p>
                        <p class="text-lg mb-6">Have immigration-related inquiries? Our team is available seven days a
                            week to assist you.</p>
                    </div>
                    <div class="mt-6">
                        <x-link-two href="{{ route('contact') }}" class="py-4">Get in touch</x-link-two>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- TOOLS/SUBSCRIBE --}}
    <section class="relative pt-12 pb-8 md:pt-16 md:pb-12 lg:pt-24 lg:pb-16 xl:pt-32 xl:pb-24 bg-gray-50">
        <div id="index-contact-content"
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 max-w-7xl mx-auto gap-6 md:gap-8 lg:gap-10">
            {{-- first grid item --}}
            <div class="lg:col-span-2 order-2 md:order-1 px-4 md:px-8 lg:px-10 flex flex-col">
                <h2 class="hedvig-regular text-4xl md:text-5xl text-gray-800 mb-4 md:mb-6 lg:mb-8 max-w-lg">
                    {{ config('app.name') }} immigration tools
                </h2>
                <div class="w-full grid grid-cols-1 lg:grid-cols-2 gap-4 md:gap-6 lg:gap-10">
                    <div class="lg:border-r border-b border-rose-300">
                        <a href="{{ route('crs') }}" class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-calculator w-8 h-8 md:w-12 md:h-12" width="40"
                                height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ef4444"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M4 3m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                                <path
                                    d="M8 7m0 1a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1v1a1 1 0 0 1 -1 1h-6a1 1 0 0 1 -1 -1z" />
                                <path d="M8 14l0 .01" />
                                <path d="M12 14l0 .01" />
                                <path d="M16 14l0 .01" />
                                <path d="M8 17l0 .01" />
                                <path d="M12 17l0 .01" />
                                <path d="M16 17l0 .01" />
                            </svg>
                            <div class="ml-3">
                                <p
                                    class="futura-bold text-gray-700 text-md tracking-wide cursor-pointer hover:underline">
                                    CRS Calculator</p>
                                <p class="text-md cursor-pionter hover:underline w-full md:w-[80%]">Our CRS calculator
                                    helps you assess your Express Entry eligibility.</p>
                            </div>
                        </a>
                    </div>
                    <div class="lg:border-r border-b border-rose-300">
                        <a href="{{ route('pnp_finder') }}" class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-list-search w-8 h-8 md:w-12 md:h-12"
                                width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="#ef4444" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M15 15m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                <path d="M18.5 18.5l2.5 2.5" />
                                <path d="M4 6h16" />
                                <path d="M4 12h4" />
                                <path d="M4 18h4" />
                            </svg>
                            <div class="ml-3">
                                <p
                                    class="futura-bold text-gray-700 text-md tracking-wide cursor-pointer hover:underline">
                                    PNP Finder</p>
                                <p class="text-md cursor-pionter hover:underline w-full md:w-[80%]">Effortlessly find
                                    out ongoing Provincial Nominee Program (PNP) across Canada.</p>
                            </div>
                        </a>
                    </div>
                    <div class="lg:border-r border-b border-rose-300">
                        <a href="{{ route('clb_converter') }}" class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-ruler-measure w-8 h-8 md:w-12 md:h-12"
                                width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="#ef4444" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M19.875 12c.621 0 1.125 .512 1.125 1.143v5.714c0 .631 -.504 1.143 -1.125 1.143h-15.875a1 1 0 0 1 -1 -1v-5.857c0 -.631 .504 -1.143 1.125 -1.143h15.75z" />
                                <path d="M9 12v2" />
                                <path d="M6 12v3" />
                                <path d="M12 12v3" />
                                <path d="M18 12v3" />
                                <path d="M15 12v2" />
                                <path d="M3 3v4" />
                                <path d="M3 5h18" />
                                <path d="M21 3v4" />
                            </svg>
                            <div class="ml-3">
                                <p
                                    class="futura-bold text-gray-700 text-md tracking-wide cursor-pointer hover:underline">
                                    CLB Languate Converter</p>
                                <p class="text-md cursor-pionter hover:underline w-full md:w-[80%]">Use this tool to
                                    check your Canadian immigration Language Benchmark (CLB) conversion.</p>
                            </div>
                        </a>
                    </div>
                    <div class="lg:border-r border-b border-rose-300">
                        <a href="{{ route('imp') }}" class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-calendar-month w-8 h-8 md:w-12 md:h-12"
                                width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="#ef4444" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" />
                                <path d="M16 3v4" />
                                <path d="M8 3v4" />
                                <path d="M4 11h16" />
                                <path d="M7 14h.013" />
                                <path d="M10.01 14h.005" />
                                <path d="M13.01 14h.005" />
                                <path d="M16.015 14h.005" />
                                <path d="M13.015 17h.005" />
                                <path d="M7.01 17h.005" />
                                <path d="M10.01 17h.005" />
                            </svg>
                            <div class="ml-3">
                                <p
                                    class="futura-bold text-gray-700 text-md tracking-wide cursor-pointer hover:underline">
                                    Immigration Processing time (IPT)</p>
                                <p class="text-md cursor-pionter hover:underline w-full md:w-[80%]">Discover Canada's
                                    latest information on Immgration Processing time.</p>
                            </div>
                        </a>
                    </div>
                    <div class="lg:border-r border-b border-rose-300">
                        <a href="{{ route('job_finder') }}" class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-radar-2 w-8 h-8 md:w-12 md:h-12" width="40"
                                height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ef4444"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                <path d="M15.51 15.56a5 5 0 1 0 -3.51 1.44" />
                                <path d="M18.832 17.86a9 9 0 1 0 -6.832 3.14" />
                                <path d="M12 12v9" />
                            </svg>
                            <div class="ml-3">
                                <p
                                    class="futura-bold text-gray-700 text-md tracking-wide cursor-pointer hover:underline">
                                    Job Finder</p>
                                <p class="text-md cursor-pionter hover:underline w-full md:w-[80%]">Our comprehensive
                                    guide helps navigate the jobs market with ease as a newcomer.</p>
                            </div>
                        </a>
                    </div>
                    <div class="lg:border-r border-b border-rose-300">
                        <a href="https://ircc.canada.ca/english/visit/visas.asp" class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-e-passport w-8 h-8 md:w-12 md:h-12" width="40"
                                height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ef4444"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M2 5m0 2a2 2 0 0 1 2 -2h16a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-16a2 2 0 0 1 -2 -2z" />
                                <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                <path d="M9 12h-7" />
                                <path d="M15 12h7" />
                            </svg>
                            <div class="ml-3">
                                <p
                                    class="futura-bold text-gray-700 text-md tracking-wide cursor-pointer hover:underline">
                                    Visiting Canada</p>
                                <p class="text-md cursor-pionter hover:underline w-full md:w-[80%]">Find out if you
                                    need a visa to travel to Canada on IRCC webiste.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            {{-- second grid item --}}
            <div class="lg:col-span-1 order-1 md:order-2 flex justify-end">
                <div class="w-[90%] h-full flex flex-col justify-center items-center bg-cover bg-center rounded-l-2xl p-6"
                    style="background:linear-gradient(rgba(28, 27, 27, 0.5), rgba(20, 20, 20, 0.5)), url('/images/indian-fam.avif') no-repeat center;background-size:cover">
                    <div class="w-full flex items-end mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-quote rotate-180  text-gray-100" width="40"
                            height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M10 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5" />
                            <path
                                d="M19 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5" />
                        </svg>
                        <span class="w-10/12 border-b border-gray-100"><span class="hidden">Horizontal
                                rule</span></span>
                    </div>
                    <div class="w-full text-gray-100">
                        <h2 class="hedvig-bold text-lg md:text-xl mb-4 md:mb-8 text-left tracking-wide">
                            Thanks to Visocanada Ltd., my wife, our two kids, and I seamlessly moved to Canada. Their
                            exceptional service made the process stress-free, and I received my Work visa quickly.
                        </h2>
                        <h2 class="hedvig-bold text-lg md:text-xl mb-6 md:mb-8 text-left tracking-wide">
                            Now, my wife is living in her dream country, and I am working my dream job. I highly
                            recommend Visocanada Ltd. for their professionalism and efficiency.
                        </h2>
                        <p class="w-full text-sm uppercase tracking-widest"><span class="font-semibold">Vikram
                                Sharma</span>, IMMIGRANT</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- BLOGS --}}
    <section class="py-12 md:py-16 lg:py-24 xl:py-32">
        <div class="px-4 md:px-8 lg:px-10 max-w-8xl mx-auto">
            <div class="pb-3 border-b mb-6 md:mb-8 flex justify-between flex-wrap gap-y-6">
                <h3 class="hedvig-regular uppercase text-4xl md:text-5xl tracking-wide max-w-xl text-gray-800">Latest
                    Canada immigration blog</h3>
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
    {{-- CTA --}}
    <section class="relative py-16">

        <div aria-hidden="true"
            class="absolute inset-0 h-max w-full m-auto grid grid-cols-2 -space-x-52 opacity-40">
            <div class="blur-[106px] h-56 bg-gradient-to-br from-teal-500 to-purple-400"></div>
            <div class="blur-[106px] h-32 bg-gradient-to-r from-cyan-400 to-sky-300"></div>
        </div>
    
        <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
            <div class="relative">
                
                <div class="flex items-center justify-center -space-x-2">
                    <img loading="lazy" width="400" height="400" src="https://randomuser.me/api/portraits/women/12.jpg" alt="member photo" class="h-8 w-8 rounded-full object-cover">
                    <img loading="lazy" width="200" height="200" src="https://randomuser.me/api/portraits/women/45.jpg" alt="member photo" class="h-12 w-12 rounded-full object-cover">
                    <img loading="lazy" width="200" height="200" src="https://randomuser.me/api/portraits/women/60.jpg" alt="member photo" class="z-10 h-16 w-16 rounded-full object-cover">
                    <img loading="lazy" width="200" height="200" src="https://randomuser.me/api/portraits/women/4.jpg" alt="member photo" class="relative h-12 w-12 rounded-full object-cover">
                    <img loading="lazy" width="200" height="200" src="https://randomuser.me/api/portraits/women/34.jpg" alt="member photo" class="h-8 w-8 rounded-full object-cover">
                </div>
    
                <div class="mt-6 m-auto space-y-6 md:w-8/12 lg:w-7/12">
                    <h1 class="hedvig-bold text-center text-4xl text-gray-800 md:text-5xl">
                        Let's be your guide
                    </h1>     
                    <p class="text-md md:text-lg text-gray-600 futura-medium text-center">All you have to do is fill out a form, leave the rest for us. Become an immigrant like others.</p>               
                    <div class="flex justify-center">
                        <x-link-one href="{{route('assessment')}}">
                            <span class="relative text-base font-semibold text-white">Get Started</span>
                        </x-link-one>                        
                    </div>
                </div>
            </div>
        </div>    
    </section>
</x-app-layout>
