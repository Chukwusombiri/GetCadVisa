<x-app-layout>
    {{-- BREADCRUMB --}}
    <x-breadcrumb>
        <x-slot:topic>Immigrate</x-slot>
        <x-slot:subtopic>Canada Immigration</x-slot>
    </x-breadcrumb>
    {{-- HEADER --}}
    <x-header>
        <x-slot:maintitle>Immigrating to Canada</x-slot>
        <x-slot:subtitle>Discover the many options available for Immigration to Canada and what you need to know
            about Canada immigration.</x-slot>
    </x-header>
    {{-- CONTENT --}}
    <section class="grid grid-cols-4">
        {{-- MAIN --}}
        <div class="col-span-4 lg:col-span-3 pt-12 pb-24 px-4 md:px-6 lg:px-10 bg-gray-50 text-gray-600">
            <div class="">
                <h2 class="hedvig-regular text-gray-800 mb-4 md:mb-6 lg:mb-8 text-3xl md:text-4xl">
                    Everything you should know
                </h2>
                <p class="text-gray-600 text-lg max-w-xl">
                    Canada offers one of the world's most open and dynamic immigration systems. There are
                    over 100
                    different Canadian immigration pathways for skilled workers, business people, and
                    families.
                </p>
                <p class="text-gray-600  text-lg mt-2 md:mt-4 max-w-xl">
                    Come end of year 2024, Canada will have over 1.3 million new immigrants! There are many
                    routes to
                    immigrate to Canada and secure Canadian permanent residence, but not to worry because
                    {{ config('app.name') }} has made it cinch.
                </p>
                {{-- immigration options --}}
                <div class="md:hidden">
                    <p class="text-gray-700 text-xl mt-4 futura-medium mb-6">
                        Explore Canada immigration options
                    </p>
                    {{-- list items --}}
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
                            <a href="{{ route('quebec') }}"
                                class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                                Quebec Immigration
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
                </div>

                {{-- table of content --}}
                <div class="my-10">
                    <p class="mb-4 md:mb-6 text-xl futura-medium text-gray-700">What you will learn</p>
                    <ul class="ml-4 space-y-2" role="list">
                        <li><a href="{{ route('canada_immigration') . '#Easiest-Ways-to-Immigrate-to-Canada-in-2023' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                </span><span class="underline">Easiest Ways to Immigrate to Canada in
                                    {{ now()->year }}</span></a>
                        </li>
                        <li><a href="{{ route('canada_immigration') . '#Canadian-Immigration-Programs-Overview' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                </span><span class="underline">Overview of Canadian Immigration Programs</span></a>
                        </li>
                        <li><a href="{{ route('canada_immigration') . '#Economic-and-Business-Immigration-Options' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                </span><span class="underline">Economic and Business Immigration
                                    Options</span></a></li>
                        <li><a href="{{ route('canada_immigration') . '#Family-Sponsorship' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                </span><span class="underline">Family Sponsorship</span></a></li>
                        <li><a href="{{ route('canada_immigration') . '#Humanitarian-and-Refugee-Immigration' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                </span><span class="underline">Humanitarian and Refugee
                                    Immigration</span></a></li>
                        <li><a href="{{ route('canada_immigration') . '#How-Much-Money-do-You-Need-to-Immigrate-to-Canada' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                </span><span class="underline">How Much Money do You Need to Immigrate to
                                    Canada?</span></a></li>
                        <li><a href="{{ route('canada_immigration') . '#What-are-the-Requirements-to-Immigrate-to-Canada' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                </span><span class="underline">What are the Requirements to Immigrate to
                                    Canada?</span></a></li>
                        <li><a href="{{ route('canada_immigration') . '#What-is-the-Fastest-Way-to-Immigrate-to-Canada' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                </span><span class="underline">What is the Fastest Way to Immigrate to
                                    Canada?</span></a></li>
                        <li><a href="{{ route('canada_immigration') . '#What-is-the-Maximum-Age-for-Canadian-Immigration' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                </span><span class="underline">What is the Maximum Age for Canadian
                                    Immigration?</span></a></li>
                        <li><a href="{{ route('canada_immigration') . '#Is-it-Easy-to-Immigrate-to-Canada' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                </span><span class="underline">Is it Easy to Immigrate to
                                    Canada?</span></a></li>
                        <li><a href="{{ route('canada_immigration') . '#Do-I-Need-a-Job-Offer-to-Immigrate-to-Canada' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                </span><span class="underline">Do I Need a Job Offer to Immigrate to
                                    Canada?</span></a></li>
                        <li><a href="{{ route('canada_immigration') . '#What-is-a-Permanent-Resident' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                </span><span class="underline">What is a Permanent Resident?</span></a>
                        </li>
                        <li><a href="{{ route('canada_immigration') . '#What-is-a-Citizen' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                </span><span class="underline">What is a Citizen?</span></a></li>
                        <li><a href="{{ route('canada_immigration') . '#Can-I-Work-Anywhere-in-Canada' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />

                                    </svg>

                                </span><span class="underline">Can I Work Anywhere in Canada?</span></a>
                        </li>

                        <li><a href="{{ route('canada_immigration') . '#Can-I-Bring-My-Family-to-Canada' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />

                                    </svg>

                                </span><span class="underline">Can I Bring My Family to Canada?</span></a>
                        </li>

                        <li><a href="{{ route('canada_immigration') . '#Why-is-Canada-Looking-for-Immigrants' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />

                                    </svg>

                                </span><span class="underline">Why is Canada Looking for
                                    Immigrants?</span></a></li>

                    </ul>
                </div>

                {{-- main content --}}
                <div class="py-10">

                    {{-- Easiest Ways to Immigrate to Canada in 2023 --}}
                    <div id="Easiest-Ways-to-Immigrate-to-Canada-in-2023">
                        <h2 class="futura-medium text-2xl mb-4 md:mb-6 text-rose-700">
                            Easiest Ways to Immigrate to Canada in {{ now()->year }}
                        </h2>
                        <p class="mb-4">The easiest way to immigrate to Canada will depend on your
                            own unique profile or
                            connections to the country. With Canadian immigration targets higher than
                            ever,
                            now is the time to start your immigration journey.
                        </p>
                        <p class="mb-4">
                            It should be noted that there is no one simple way to immigrate to Canada.
                            While some programs may be easier for
                            you to apply to, the process is long and involves many steps.
                        </p>
                        <p class="mb-10">
                            While immigrating to Canada does require a significant financial and
                            emotional investment,
                            the end result is worth it. Canada consistently ranks among the best
                            countries for quality
                            of life and is known for its positive attitude toward immigration.
                        </p>
                        <p class="py-2 font-bold text-lg text-gray-700">Trending ways of immigrating to Canada:</p>
                        <ul class="ml-4 mb-6 md:mb-8 space-y-2" role="list">
                            <li>
                                <a href="{{ route('canada_immigration') . '#express-entry' }}"
                                    class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                                    Express Entry
                                    <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('canada_immigration') . '#pnp' }}"
                                    class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                                    Provincial Nominee Programs
                                    <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('canada_immigration') . '#business-immigration' }}"
                                    class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                                    Business Immigration
                                    <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('canada_immigration') . '#sponsorship-immigration' }}"
                                    class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                                    Sponsorship Immigration
                                    <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                        <div class="py-6">
                            <x-link-one href="{{ route('assessment') }}">Check your visa eligibilty</x-link-one>
                        </div>

                        {{-- express entry --}}
                        <div class="mt-10" id="express-entry">
                            <h3 class="py-2 font-bold text-xl text-gray-700">Express Entry</h3>
                            <p class="mb-4 md:mb-6">Express Entry is Canada’s fastest and most popular
                                immigration program.
                                Candidates that apply through the Express Entry system can receive
                                permanent residence
                                status as soon as six months.
                                <br>
                                By 2025, Canada plans to invite half a million newcomers. Of which a
                                large percentage will
                                come through one of the three streams of Express Entry:
                            </p>
                            <ul class="ml-4 space-y-2 list-decimal" role="list">
                                <li class="futura-medium text-gray-700">Federal Skilled Trades</li>
                                <li class="futura-medium text-gray-700">Canadian Experience Class (CEC); and</li>
                                <li class="futura-medium text-gray-700">Federal Skilled Trades</li>
                            </ul>
                            <p class="mt-4 mb-2">
                                The Express Entry system involves submitting an online profile that is
                                scored by Canada’s
                                Comprehensive Ranking System (CRS). To submit an Express Entry profile,
                                you must first be
                                eligible under one of Canada’s above three federal streams. The Canadian
                                government then
                                issues invitations to apply for permanent residence to the
                                highest-ranking candidates in
                                the Express Entry pool.
                            </p>
                            <p class="mb-2">
                                The Express Entry process may be the easiest way to come to Canada for
                                certain candidates
                                eligible to submit a profile. It can be difficult to meet the CRS
                                cut-off in the federal
                                draw. However, just by being in the pool of candidates, you could be
                                nominated for permanent
                                residence by a province.
                            </p>
                            <p class="mb-2">The cost of immigrating to Canada through Express Entry is typically
                                about $2,300 CAD for a
                                single applicant, or about $4,500 CAD for a couple. This does not
                                include the settlement
                                funds that must also be shown as part of the eligibility requirement,
                                which will vary by
                                family size. <a href="{{ route('express_entry') }}"
                                    class="underline text-rose-700 inline-block">Learn more..</a>
                            </p>
                            <div class="flex mt-6 md:mt-8">
                                <x-link-one href="{{ route('assessment') }}">Check Express entry
                                    eligibility</x-link-one>
                            </div>
                        </div>

                        {{-- Provincial Nominee Programs --}}
                        <div class="mt-16" id="pnp">
                            <h3 class="py-2 font-bold text-xl text-gray-700">Provincial Nominee Programs</h3>
                            <p class="mb-2">Throughout the pandemic, provinces continued to nominate
                                overseas workers for Canadian permanent residence. By 2025, Canada plans
                                to welcome 117,500 new immigrants through PNPs.
                            </p>
                            <p class="mb-2">There are countless nominee programs offered by Canada’s ten provinces
                                and three territories. Each PNP has its own unique eligibility criteria.
                                Many PNPs require a connection to the province to apply for nomination.
                                However, there are some programs that invite overseas candidates solely
                                based on their ability to respond to the province’s labour market needs.</p>
                            <p class="mb-2">
                                Each PNP has its own application processing time. After receiving a
                                nomination, PNP candidates must apply to the federal government for
                                Canadian permanent residence. The time it takes to process the permanent
                                residence application will depend on whether the PNP operates using the
                                Express Entry system.</p>
                            <p class="mb-4 md:mb-8">The cost of immigrating to Canada through a PNP is usually the same
                                as
                                Express Entry, with some additional fees, depending on the province.
                                Certain provinces don’t charge a fee to process PNP applications, while
                                others, such as Ontario, can charge up to $1,500 CAD.<a href="{{ route('PNP') }}"
                                    class="underline text-rose-700 inline-block">Learn
                                    more</a>
                            </p>
                            <div class="py-6">
                                <x-link-one href="{{ route('assessment') }}">Check your PNP eligibilty</x-link-one>
                            </div>
                        </div>

                        {{-- Business Immigration --}}
                        <div class="mt-16" id="business-immigration">
                            <h3 class="py-2 font-bold text-xl text-gray-700">Business Immigration</h3>
                            <p class="mb-2">If you have experience managing or owning your own
                                business, the easiest way to immigrate to Canada could be through a
                                federal or provincial business immigration program.
                            </p>
                            <p class="mb-2">The federal government offers immigration programs for individuals that
                                plan to be self-employed in Canada or start up a business in Canada.</p>
                            <p class="mb-2">There are also several PNPs specific to overseas candidates interested
                                in starting a business in a certain Canadian province.</p>
                            <p class="mb-4 md:mb-8">Business immigration programs typically require a significant
                                investment
                                in the company you intend to start in Canada. The amount required will
                                depend on the program you are interested in. Many PNPs have regional
                                entrepreneur programs that require a lower investment for candidates
                                interested in starting a business in a less populated area.<a
                                    href="{{ route('business_immigration') }}"
                                    class="underline text-rose-700 inline-block">Learn more</a>
                            </p>
                            <div class="py-6">
                                <x-link-one href="{{ route('business_assessment') }}">Check your Business visa
                                    eligibilty</x-link-one>
                            </div>
                        </div>

                        {{-- Sponsorship Immigration --}}
                        <div class="mt-16" id="sponsorship-immigration">
                            <h3 class="py-2 font-bold text-xl text-gray-700">Sponsorship Immigration</h3>
                            <p class="mb-4">If you have a qualifying family member that is a
                                permanent resident or citizen of Canada, family sponsorship will likely
                                be the easiest way for you to immigrate to Canada.
                            </p>
                            <p class="mb-2">Canada offers several immigration programs that give permanent residents
                                and citizens the chance to bring their family members to the country.
                                This year, Canada plans to welcome 105,000 new permanent residents
                                through family sponsorship programs.</p>
                            <p class="mb-2">There are also several PNPs specific to overseas candidates interested
                                in starting a business in a certain Canadian province.</p>
                            <p class="mb-2">If your spouse, child, or grandchild is a permanent resident or citizen
                                of Canada, you may be eligible for family sponsorship.</p>
                            <p class="mb-2">Sponsoring a relative typically costs about $1,135 CAD. Additional fees
                                will apply if the sponsor resides in or intends to reside in Quebec.</p>
                            <p class="mb-4 md:mb-8">The processing time for a sponsorship application will depend on
                                the
                                family member who is sponsoring you. For spousal sponsorship,
                                applications typically take about 12 months to process from start to
                                finish.
                                <a href="{{ route('sponsorship_immigration') }}"
                                    class="underline text-rose-700 inline-block">Learn more</a>
                            </p>
                            <div class="py-6">
                                <x-link-one href="{{ route('sponsorship_assessment') }}">Check Sponsorship visa
                                    eligibility</x-link-one>
                            </div>
                        </div>

                    </div>

                    {{-- Canadian Immigration Programs Overview --}}
                    <div class="mt-16 md:mt-24" id="Canadian-Immigration-Programs-Overview">
                        <h2 class="futura-medium text-2xl mb-4 md:mb-6 text-rose-700">Canadian Immigration Programs</h2>
                        <div>
                            <p class="mb-4 md:mb-8">There are more than 80 pathways to immigrate to Canada! We
                                will outline the broad categories of Canadian immigration in an effort to
                                keep things simple for our readers. Click on the links to the specific
                                programs to learn more about the requirements and qualifications needed to
                                be eligible to apply.
                            </p>
                            <div class="px-4 py-4 w-full md:w-[70%] rounded-lg border border-gray-300 hover:border-rose-600">
                                <p><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
                                    </svg>
                                    Do you know we can help you improve streamline your options and also
                                    improve your chances of Canada Immigration?
                                    <br> Use our <a href="{{ route('assessment') }}"
                                        class="underline text-rose-700">free
                                        online canada immigration
                                        assessment</a> tool to boost your immigration processing.
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Economic and Business Immigration Options --}}
                    <div class="mt-16 md:mt-24" id="Economic-and-Business-Immigration-Options">
                        <h2 class="futura-medium text-2xl mb-4 md:mb-6 text-rose-700">Economic and Business Immigration Options</h2>
                        <div>
                            <p class="mb-4"><a href="{{ route('pro_and_skilled') }}"
                                    class="text-rose-700">Economic</a>
                                and <a href="{{ route('business_immigration') }}" class="text-rose-700">business
                                    immigration</a> options are for
                                professionals who have skills that support the Canadian economy. Each
                                program differs greatly in the qualifications required so no
                                one-size-fits-all description is possible.
                            </p>
                            <div>
                                <p class="py-2 font-bold text-lg text-gray-700">Economic and business immigration categories include:</p>
                                <ul class="ml-4 space-y-2" role="list">
                                    <li>
                                        <a href="{{ route('express_entry') }}"
                                            class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                                            Express Entry
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
                                            Provincial Nominee Programs
                                            <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('quebec') }}"
                                            class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                                            Quebec Immigration
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
                                            Caregivers Program
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
                                            Atlantic Immigration Pilot
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
                                            Agri-Food Pilot
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
                        </div>
                    </div>

                    {{-- Family Sponsorship --}}
                    <div class="mt-16 md:mt-24" id="Family-Sponsorship">
                        <h2 class="futura-medium text-2xl mb-4 md:mb-6 text-rose-700">Family Sponsorship</h2>
                        <div>
                            <p class="mb-4">Family sponsorship is a category of immigration available to
                                the family members of Canadian citizens and permanent residents.
                            </p>
                            <p class="py-2 font-bold text-lg text-gray-700">Family members eligible to sponsor include:</p>
                                <ul class="ml-4 space-y-2 list-decimal" role="list">
                                    <li>Spouse or common-law/conjugal partner</li>
                                    <li>Dependent child (adopted or biological)</li>
                                    <li>Parents and grandparents</li>
                                </ul>
                                <p class="mt-4 mb:mt-6">In some circumstances, you may be eligible to sponsor
                                    other family members
                                    outside the above-mentioned categories. If you have no other eligible
                                    relatives to sponsor
                                    you may sponsor Orphaned brother or sister; Orphaned nephew or niece;
                                    Orphaned grandchild
                                </p>
                        </div>
                    </div>

                    {{-- Humanitarian and Refugee Immigration --}}
                    <div class="mt-16 md:mt-24" id="Humanitarian-and-Refugee-Immigration">
                        <h2 class="futura-medium text-2xl mb-4 md:mb-6 text-rose-700">Humanitarian and Refugee Immigration</h2>                        
                        <p class="mb-4">Canada has an international
                            reputation as a leader in accepting new refugees and other immigrants for <a
                                href="">humanitarian</a> and
                            compassionate reasons. A significant portion of Canada’s annual immigration
                            target is dedicated to
                            admitting refugees.
                        </p>
                    </div>

                    {{-- How Much Money do You Need to Immigrate to Canada? --}}
                    <div class="mt-16 md:mt-24" id="How-Much-Money-do-You-Need-to-Immigrate-to-Canada">
                        <h2 class="futura-medium text-2xl mb-4 md:mb-6 text-rose-700">How much money do you need to immigrate to Canada</h2>
                        <div>
                            <p class="mb-2">The cost of immigrating to Canada is generally about $2,300
                                CAD for a single applicant, or about $4,500 CAD for a couple.
                                This amount does not include the <a href="" class="text-rose-700">settlement
                                    funds</a> that many candidates must
                                show to be eligible
                                for Canadian immigration; this amount will vary by family size, starting at
                                around $13,000 CAD
                                for a single applicant. If a candidate is applying through a provincial
                                program, additional fees
                                may apply. Proof of settlement funds is not required for those with a
                                Canadian job offer or who
                                are applying under the Canadian Experience Class.
                            </p>
                            <p class="mb-2">All forms of <a href="{{ route('business_immigration') }}"
                                    class="text-rose-700">business immigration</a> require significant
                                investment in Canada. It might
                                require the applicant to have invested in a Canadian company or require an
                                applicant to make an
                                interest-free loan to the federal or provincial government.
                            </p>
                            <p class="mb-2">In most cases, you do not provide financial information to <a
                                    href="{{ route('sponsorship_immigration') }}" class="text-rose-700">sponsor a
                                    spouse or dependent child</a>. If you
                                are sponsoring other family members like a parent or grandparent, there is a
                                financial requirement that will need to be met in order to be eligible to apply.
                            </p>
                            <p class="mb-2">If you are applying under <a href=""
                                    class="text-rose-700">humanitarian and compassionate</a> grounds
                                applications, no
                                financial requirements exist. The only time financial information is
                                required under this category
                                of immigration is if the refugee is a privately sponsored applicant. In that
                                case, the Canadian
                                group sponsoring the refugee must demonstrate that they have raised
                                sufficient funds to sponsor
                                the resettlement of the refugee candidate.
                            </p>
                        </div>
                    </div>

                    {{-- What are the Requirements to Immigrate to Canada? --}}
                    <div class="mt-16 md:mt-24" id="What-are-the-Requirements-to-Immigrate-to-Canada">
                        <h2 class="futura-medium text-2xl mb-4 md:mb-6 text-rose-700">What are the Requirements to Immigrate to Canada?</h2>                        
                        <p class="mb-2">Each immigration program has its own minimum eligibility
                            requirements. It is important to verify your eligibility prior to applying.
                        </p>
                        <p class="mb-2">When submitting an application, the Canadian government will
                            request various documents
                            to verify your work experience, education, identity, and criminal and
                            medical background. The types
                            of required documents depend on the program to which you are applying.
                        </p>
                        <p class="mb-6 md:mb-8">In order to determine the documents, you will require, first,
                            to determine which immigration program is best for you!
                        </p>
                        <div class="py-6">
                            <x-link-one href="{{ route('assessment') }}">Find out your immigration program</x-link-one>
                        </div>
                    </div>

                    {{-- What is the Fastest Way to Immigrate to Canada? --}}
                    <div class="mt-16 md:mt-24" id="What-is-the-Fastest-Way-to-Immigrate-to-Canada">
                        <h2 class="futura-medium text-2xl mb-4 md:mb-6 text-rose-700">What is the Fastest Way to Immigrate to Canada?</h2>                       
                        <p>The fastest method of immigrating to Canada is through <a href="{{ route('express_entry') }}">Express Entry</a>. 
                            Express Entry processes most applications in six months or less.
                        </p>
                    </div>

                    {{-- What is the Maximum Age for Canadian Immigration? --}}
                    <div class="mt-16 md:mt-24" id="What-is-the-Maximum-Age-for-Canadian-Immigration">
                        <h2 class="futura-medium text-2xl mb-4 md:mb-6 text-rose-700">What is the Maximum Age for Canadian Immigration?</h2>
                        <p>There is no specific age limit requirement for any Canadian
                            immigration program. That said, in most categories of economic immigration, applicants 25-35
                            receive the maximum points. That doesn’t mean older applicants cannot be selected. Having
                            substantial work experience, high language proficiency, connections to Canada, and advanced
                            education can easily offset any points lost for age in economic immigration. Family sponsorship
                            and humanitarian and refugee immigration to Canada do not use a ranking
                            system and therefore do not have any penalties for age whatsoever.
                        </p>
                    </div>

                    {{-- Is it Easy to Immigrate to Canada? --}}
                    <div class="mt-16 md:mt-24" id="Is-it-Easy-to-Immigrate-to-Canada">
                        <h2 class="futura-medium text-2xl mb-4 md:mb-6 text-rose-700">Is it Easy to Immigrate to Canada?</h2>                        
                        <p class="mb-2">With over 80 pathways of immigration, Canada has a range of
                            options for all types of
                            applicants. That said, moving to a new country requires some effort. Some
                            immigration programs
                            require higher qualifications and more documents than others. Using the
                            services of a Canadian
                            immigration lawyer can greatly assist in the immigration process from start
                            to finish.
                        </p>
                        <p class="mb-2">Canadian immigration lawyers are the point of contact with
                            the government for your
                            application. They handle the submission of your application and advise you
                            on the documents you
                            need, the ones you might want to include, and the documents you should not
                            provide.
                        </p>
                        <p class="mb-4 md:mb-8">In order to determine the documents, you will require, first,
                            to determinewhich immigration program is best for you!
                        </p>
                        <div class="py-6">
                            <x-link-one href="{{ route('assessment') }}">Check for immigration program</x-link-one>
                        </div>
                    </div>

                    {{-- Do I Need a Job Offer to Immigrate to Canada? --}}
                    <div class="mt-16 md:mt-24" id="Do-I-Need-a-Job-Offer-to-Immigrate-to-Canada">
                        <h2 class="futura-medium text-2xl mb-4 md:mb-6 text-rose-700">Do I Need a Job Offer to Immigrate to Canada?</h2>                        
                        <p class="mb-6 md:mb-8">No. The vast majority of all Canadian permanent residents do
                            not have a job offer in Canada when they apply. While some Canadian
                            immigration programs require applicants to have a Canadian job offer, there
                            is a range of programs and options available to foreign nationals without an
                            offer of employment in Canada. Here are two main immigration programs that
                            do not require a Canadian job offer:
                        </p>
                        <div class="mb-10">
                            <h3 class="font-bold text-lg py-2 text-gray-700">1. Express Entry</h3>
                            <p class="mb-2">
                                The Express Entry system is responsible for welcoming over 100,000
                                newcomers to Canada each
                                year. If you are applying for an Express Entry program, it is likely
                                that you will not need
                                a job offer. In fact, about 90% of Express Entry candidates were invited
                                to apply for
                                permanent residency without holding a Canadian job offer, according to
                                IRCC’s Year-End
                                Report 2019.
                            </p>

                            <p>Express Entry requires applicants to have adequate work and educational
                                experience, as well
                                as language skills. However, you will not lose points for not having an
                                offer from a Canadian
                                employer.</p>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg py-2 text-gray-700">2. Provincial Nominee Programs (PNPs)</h3>
                            <p class="mb-2">
                                There are also many Provincial Nominee Programs that do not require a
                                job offer to apply.
                            </p>
                            <p class="mb-2">Some provinces, such as <a href=""
                                    class="text-rose-700">Saskatchewan</a>, will instead use Expression
                                of Interest (EOI)
                                points-based systems – similar to Express Entry – to determine which
                                candidates will be
                                invited to apply for nomination.
                            </p>
                            <p class="mb-2">Other provinces, such as <a href=""
                                    class="text-rose-700">Ontario</a> or <a href=""
                                    class="text-rose-700">Nova
                                    Scotia</a>, will invite candidates
                                directly from the
                                Express Entry pool to fill specific demographic or labour market gaps.
                                That means, just by
                                having an Express Entry profile in the pool of candidates, you have the
                                opportunity to be
                                invited to settle permanently in a Canadian province.</p>
                            <p class="mb-2">
                                So if you want to immigrate to Canada and do not yet have a valid job
                                offer, don’t panic!
                                There are many options available to become a permanent resident do not
                                include a job offer
                                requirement.
                            </p>
                        </div>
                    </div>

                    {{-- What is a Permanent Resident? --}}
                    <div class="mt-16 md:mt-24" id="What-is-a-Permanent-Resident">
                        <h2 class="futura-medium text-2xl mb-4 md:mb-6 text-rose-700">What is a Permanent Resident?</h2>
                        <p class=""><a href="{{ route('canada_pr') }}" class="text-rose-700">A
                                Canadian permanent resident</a> is a citizen of another country who has
                            been granted

                            permission to live in Canada as a permanent resident. Once a person has
                            permanent resident

                            status, they have the right to live and work anywhere in the country.
                            Permanent residents receive

                            a significant number of benefits in Canada, including access to healthcare
                            and social services,

                            the right to live, work, and study anywhere in Canada, and protection under
                            Canadian law. As well,

                            after being a permanent resident for a certain amount of time, permanent
                            residents are eligible to

                            apply to become Canadian citizens! Notably, Canadian permanent residents do
                            not have the right to

                            vote in Canadian elections.
                        </p>
                    </div>

                    {{-- What is a Citizen? --}}
                    <div class="mt-16 md:mt-24" id="What-is-a-Citizen">
                        <h2 class="futura-medium text-2xl mb-4 md:mb-6 text-rose-700">What is a Citizen?</h2>                        
                        <p class=""><a href="{{ route('citizenship') }}">Canadian citizens</a>
                            have many rights and privileges in Canada. Citizens have access to
                            healthcare, social services, support under the law. A citizen can live,
                            work, and study, anywhere
                            in Canada, and has the right to vote in Canadian elections. As well,
                            citizenship cannot be
                            revoked or removed. All people born in Canada automatically qualify for
                            Canadian citizenship.
                            As well, foreign nationals can become naturalized Canadian citizens by going
                            through the proper
                            application process with Immigration, Refugees, and Citizenship Canada
                            (IRCC).
                        </p>
                    </div>

                    {{-- Can I Work Anywhere in Canada? --}}
                    <div class="mt-16 md:mt-24" id="Can-I-Work-Anywhere-in-Canada">
                        <h2 class="futura-medium text-2xl mb-4 md:mb-6 text-rose-700">Can I Work Anywhere in Canada?</h2>                    
                        <p class="">Once a person has <a href="{{ route('canada_pr') }}"
                                class="text-rose-700">Canadian permanent resident</a> status, they have
                            the authorization to
                            live and work anywhere in Canada. If a foreign national does not have
                            Canadian permanent resident
                            status, then they must have the proper authorization to work in Canada.
                            Usually, this
                            authorization comes in the form of a Canadian <a href="{{route('work_permit')}}"
                                class="text-rose-700">work
                                permit.</a>
                        </p>
                    </div>

                    {{-- Can I Bring My Family to Canada? --}}
                    <div class="mt-16 md:mt-24" id="Can-I-Bring-My-Family-to-Canada">
                        <h2 class="futura-medium text-2xl mb-4 md:mb-6 text-rose-700">Can I Bring My Family to Canada?</h2>
                        <p class="">Certain immigration programs allow foreign nationals to
                            immigrate to Canada with
                            their family members. However, the family members able to accompany a
                            foreign national varies
                            depending on the immigration program. For example, those immigrating through
                            Canada’s Express
                            Entry system are eligible to include their spouse and dependent children on
                            the application,
                            but not their parents. However, Canada has <a
                                href="{{ route('sponsorship_immigration') }}" class="text-rose-700">family
                                sponsorship</a> programs enabling Canadian
                            citizens
                            and permanent residents to sponsor their spouse or common-law partner,
                            dependent children, and
                            parents/grandparents. In order to determine whether or not your family
                            members may join you,
                            first you must determine which immigration pathway you choose to pursue!
                        </p>
                    </div>

                    {{-- Why is Canada Looking for Immigrants? --}}
                    <div class="mt-16 md:mt-24" id="Why-is-Canada-Looking-for-Immigrants">
                        <h2 class="futura-medium text-2xl mb-4 md:mb-6 text-rose-700">Why is Canada Looking for Immigrants?</h2>
                        <p class="mb-6 mb:mb-8">Canadian cities and rural areas depend on newcomers to keep
                            their populations growing and to support their labour markets. Canada also has an
                            aging population, and without a robust system of immigration, Canada would be on a similar
                            trajectory to that of Japan in the 1990s. But unlike Japan, Canada embraced immigration and that
                            has allowed us to maintain a large proportion of the population in prime working age, between
                            25 and 54. This would not be possible without mass immigration to Canada.
                        </p>
                        <div class="py-6">                            
                           <x-link-one href="{{route('assessment')}}">Find out if you are eligible</x-link-one>
                        </div>
                    </div>

                    {{-- related links --}}
                    <div class="mt-16 md:mt-24">
                        <h2 class="text-gray-700 text-2xl futura-medium py-2">Related links</h2>
                        <!-- inspired by tailwindcss.com -->
                        <ul class="grid grid-cols-1 xl:grid-cols-3 gap-y-10 gap-x-6 items-start py-8">
                            <li class="relative flex flex-col sm:flex-row xl:flex-col items-start">
                                <div class="order-1 sm:ml-6 xl:ml-0">
                                    <h3 class="mb-1 text-gray-700 futura-medium">                                        
                                        Immigrate to Canada through Express Entry
                                    </h3>                                    
                                    <a class="group inline-flex items-center h-9 rounded-full text-sm font-semibold whitespace-nowrap px-3 focus:outline-none focus:ring-2 bg-rose-100 text-rose-700 hover:bg-rose-200 hover:text-rose-900 focus:ring-rose-500 mt-6"
                                        href="{{ route('express_entry') }}">Learn
                                        more
                                        <svg class="overflow-visible ml-3 text-rose-300 group-hover:text-rose-400"
                                            width="3" height="6" viewBox="0 0 3 6" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M0 0L3 3L0 6"></path>
                                        </svg>
                                    </a>
                                </div>
                                <img src="{{asset('images/express_entry.png')}}" alt="" class="mb-6 shadow-md rounded-lg bg-rose-50 w-full sm:w-[17rem] sm:mb-0 xl:mb-6 xl:w-full" width="1216" height="640">
                            </li>
                            <li class="relative flex flex-col sm:flex-row xl:flex-col items-start">
                                <div class="order-1 sm:ml-6 xl:ml-0">
                                    <h3 class="mb-1 text-gray-700 futura-medium">
                                        Get a job and start working in Canada 
                                    </h3>                                    
                                    <a class="group inline-flex items-center h-9 rounded-full text-sm font-semibold whitespace-nowrap px-3 focus:outline-none focus:ring-2 bg-rose-100 text-rose-700 hover:bg-rose-200 hover:text-rose-900 focus:ring-rose-500 mt-6"
                                        href="{{ route('work_permit') }}">Learn
                                        more
                                        <svg class="overflow-visible ml-3 text-rose-300 group-hover:text-rose-400"
                                            width="3" height="6" viewBox="0 0 3 6" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M0 0L3 3L0 6"></path>
                                        </svg>
                                    </a>
                                </div>
                                <img src="{{asset('images/work_permit.jpg')}}" alt="" class="mb-6 shadow-md rounded-lg bg-rose-50 w-full sm:w-[17rem] sm:mb-0 xl:mb-6 xl:w-full" width="1216" height="640">
                            </li>
                            <li class="relative flex flex-col sm:flex-row xl:flex-col items-start">
                                <div class="order-1 sm:ml-6 xl:ml-0">
                                    <h3 class="mb-1 text-gray-700 futura-medium">
                                        Get a study visa for your Canada Study program
                                    </h3>                                    
                                    <a class="group inline-flex items-center h-9 rounded-full text-sm font-semibold whitespace-nowrap px-3 focus:outline-none focus:ring-2 bg-rose-100 text-rose-700 hover:bg-rose-200 hover:text-rose-900 focus:ring-rose-500 mt-6"
                                        href="{{ route('study_immigration') }}">Learn
                                        more
                                        <svg class="overflow-visible ml-3 text-rose-300 group-hover:text-rose-400"
                                            width="3" height="6" viewBox="0 0 3 6" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M0 0L3 3L0 6"></path>
                                        </svg>
                                    </a>
                                </div>
                                <img src="{{asset('images/study.jpg')}}" alt="" class="mb-6 shadow-md rounded-lg bg-rose-50 w-full sm:w-[17rem] sm:mb-0 xl:mb-6 xl:w-full" width="1216" height="640">
                            </li>
                        </ul>                        
                    </div>
                </div>
            </div>
        </div>
        {{-- ASIDE --}}
        <div class="hidden md:block col-span-4 lg:col-span-1 px-4 md:px-6 bg-gradient-to-b from-gray-200 from-[5vh] via-gray-100 via-[65vh] to-gray-50">
            <div class="mycontainer">
                <div class="">
                    <p class="text-gray-600 text-xl mt-4 futura-medium mb-6">
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
                            <a href="{{ route('quebec') }}"
                                class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                                Quebec Immigration
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
            </div>
        </div>
    </section>

</x-app-layout>
