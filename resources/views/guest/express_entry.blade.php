<x-app-layout>
    {{-- BREADCRUMB --}}
    <x-breadcrumb>
        <x-slot:topic>Immigrate</x-slot>
        <x-slot:subtopic>Express entry</x-slot>
    </x-breadcrumb>
    {{-- HEADER --}}
    <x-side-image-header :source="asset('images/express_entry.png')" :url="route('assessment')" button-text="check eligibility">
        <x-slot:maintitle>A comprehensive guide for Express entry</x-slot>
        <x-slot:subtitle>Learn more about immigrating to canada through express entry and use our assessment tool to
            check your eligibility.</x-slot>
    </x-side-image-header>
    {{-- BODY --}}
    <section class="grid grid-cols-4">
        {{-- main --}}
        <div class="col-span-4 lg:col-span-3 pt-12 pb-24 px-4 md:px-6 lg:px-10 bg-gray-50 text-gray-600">
            <div class="relative">
                <h2 class="hedvig-regular text-gray-800 mb-4 md:mb-6 lg:mb-8 text-3xl md:text-4xl max-w-xl">
                    Everything you need to know about Express Entry
                </h2>
                <p class="text-gray-600 text-lg max-w-xl mb-4 md:mb-8">
                    Express Entry is the fastest and most popular pathway to permanent residence for immigrants seeking
                    a new life in Canada.
                    Canada welcomes around 110,000 skilled workers through the Express Entry system each year.
                </p>
                {{-- immigration options --}}
                <div class="md:hidden">
                    <p class="text-gray-700 text-xl mt-4 futura-medium mb-6">
                        Explore Canada immigration options
                    </p>
                    <ul class="space-y-2 pl-2 mt-2" role="list">
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
                {{-- table of content --}}
                <div class="my-10">
                    <p class="mb-4 md:mb-6 text-xl futura-medium text-gray-700 max-w-xl">
                        Overview of things to know about Canada Express entry immigration pathway
                    </p>
                    <ul class="ml-4 space-y-2" role="list">
                        <li><a href="{{ route('express_entry') . '#What-is-Express-Entry' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />

                                    </svg>

                                </span><span class="underline">What is Express Entry?</span></a></li>

                        <li><a href="{{ route('express_entry') . '#How-can-I-apply-for-Express-Entry' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />

                                    </svg>

                                </span><span class="underline">How can I apply for Express Entry?</span></a></li>

                        <li><a href="{{ route('express_entry') . '#Who-is-eligible-for-Express-Entry' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />

                                    </svg>

                                </span><span class="underline">Who is eligible for Express Entry?</span></a></li>

                        <li><a href="{{ route('express_entry') . '#What-are-the-requirements-for-Express-Entry' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />

                                    </svg>

                                </span><span class="underline">What are the requirements for Express Entry?</span></a>
                        </li>

                        <li><a href="{{ route('express_entry') . '#How-much-does-Express-Entry-cost' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />

                                    </svg>

                                </span><span class="underline">How much does Express Entry cost?</span></a></li>

                        <li><a href="{{ route('express_entry') . '#Do-I-need-a-job-offer-for-Express-Entry' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />

                                    </svg>

                                </span><span class="underline">Do I need a job offer for Express Entry?</span></a></li>

                        <li><a href="{{ route('express_entry') . '#How-long-does-Express-Entry-take' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />

                                    </svg>

                                </span><span class="underline">How long does Express Entry take?</span></a></li>

                        <li><a href="{{ route('express_entry') . '#How-are-Express-Entry-points-are-calculated' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />

                                    </svg>

                                </span><span class="underline">How are Express Entry points are calculated?</span></a>
                        </li>

                        <li><a href="{{ route('express_entry') . '#Will-the-CRS-score-cut-off-go-down' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />

                                    </svg>

                                </span><span class="underline">Will the CRS score cut-off go down?</span></a></li>

                        <li><a href="{{ route('express_entry') . '#How-can-I-increase-my-CRS-score' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />

                                    </svg>

                                </span><span class="underline">How can I increase my CRS score?</span></a></li>

                        <li><a href="{{ route('express_entry') . '#What-is-the-ideal-Express-Entry-candidate' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />

                                    </svg>

                                </span><span class="underline">What is the ideal Express Entry candidate?</span></a>
                        </li>

                        <li><a href="{{ route('express_entry') . '#What-is-the-difference-between-Express-Entry-eligibility-points-and-CRS-score' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />

                                    </svg>

                                </span><span class="underline">What is the difference between Express Entry eligibility
                                    points and CRS score?</span></a></li>

                        <li><a href="{{ route('express_entry') . '#Is-there-a-minimum-score-for-Express-Entry' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />

                                    </svg>

                                </span><span class="underline">Is there a minimum score for Express Entry?</span></a>
                        </li>

                        <li><a href="{{ route('express_entry') . '#How-are-my-language-points-calculated' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />

                                    </svg>

                                </span><span class="underline">How are my language points calculated?</span></a></li>

                        <li><a href="{{ route('express_entry') . '#How-does-my-IELTS-score-affect-my-CRS-score' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />

                                    </svg>

                                </span><span class="underline">How does my IELTS score affect my CRS score?</span></a>
                        </li>

                        <li><a href="{{ route('express_entry') . '#Does-my-spouse-need-to-take-the-IELTS-exam' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />

                                    </svg>

                                </span><span class="underline">Does my spouse need to take the IELTS exam?</span></a>
                        </li>

                    </ul>
                </div>
                <p class="futura-medium text-gray-700 text-xl">
                    You might also like:
                </p>
                {{-- extras --}}
                <div class="my-10">
                    <ul class="ml-4 space-y-2" role="list">
                        <li><a href="{{ route('express_entry') . '#Why-is-my-Express-Entry-score-zero' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />

                                    </svg>

                                </span><span class="underline">Why is my Express Entry score zero?</span></a>
                        </li>

                        <li><a href="{{ route('express_entry') . '#What-CRS-score-is-required-for-Canadian-PR' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />

                                    </svg>

                                </span><span class="underline">What CRS score is required for Canadian
                                    PR?</span></a></li>

                        <li><a href="{{ route('express_entry') . '#Why-is-the-CRS-cut-off-so-high' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />

                                    </svg>

                                </span><span class="underline">Why is the CRS cut-off so high?</span></a></li>

                        <li><a href="{{ route('express_entry') . '#CRS-score-trend' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />

                                    </svg>

                                </span><span class="underline">CRS score trend</span></a></li>

                        <li><a href="{{ route('express_entry') . '#Is-438/459/467/462-a-good-CRS-score' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />

                                    </svg>

                                </span><span class="underline">Is 438/459/467/462 a good CRS score?</span></a>
                        </li>

                        <li><a href="{{ route('express_entry') . '#How-to-calculate-your-CRS-score' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />

                                    </svg>

                                </span><span class="underline">How to calculate your CRS score?</span></a></li>

                        <li><a href="{{ route('express_entry') . '#What-is-an-Express-Entry-profile' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />

                                    </svg>

                                </span><span class="underline">What is an Express Entry profile?</span></a>
                        </li>

                        <li><a href="{{ route('express_entry') . '#How-to-create-an-Express-Entry-profile' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />

                                    </svg>

                                </span><span class="underline">How to create an Express Entry
                                    profile?</span></a></li>

                        <li><a href="{{ route('express_entry') . '#What-language-results-are-required-for-Express-Entry' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />

                                    </svg>

                                </span><span class="underline">What language results are required for Express
                                    Entry?</span></a></li>

                        <li><a href="{{ route('express_entry') . '#Which-ECA-report-do-I-need-for-Express-Entry' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />

                                    </svg>

                                </span><span class="underline">Which ECA report do I need for Express
                                    Entry?</span></a></li>

                        <li><a href="{{ route('express_entry') . '#How-will-a-job-offer-affect-my-Express-Entry-profile' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />

                                    </svg>

                                </span><span class="underline">How will a job offer affect my Express Entry
                                    profile?</span></a></li>

                        <li><a href="{{ route('express_entry') . '#How-do-I-find-my-NOC-code' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />

                                    </svg>

                                </span><span class="underline">How do I find my NOC code?</span></a></li>

                    </ul>
                </div>
                {{-- main content --}}
                <div class="py-10">
                    {{-- What is Express Entry? --}}
                    <div id="What-is-Express-Entry">
                        <h2 class="futura-medium text-2xl mb-4 md:mb-6 text-rose-600">What is Express Entry?</h2>
                        <p class="mb-4">Express Entry is an online system used by the Canadian government
                            to organize and process applications for skilled workers who wish to immigrate to Canada and
                            acquire Canadian permanent residence status.
                        </p>
                        <p class="mb-4 futura-medium text-gray-700 text-lg">The system manages three main federal
                            economic programs:</p>
                        <ul class="ml-4 space-y-2 list-decimal mb-6" role="list">
                            <li>Federal Skilled Worker (FSW)</li>
                            <li>Federal Skilled Trades (FST)</li>
                            <li>Canadian Experience Class(CEC)</li>
                        </ul>
                        <div class="py-6">
                            <x-link-one href="{{ route('assessment') }}">Check Express entry eligibilty</x-link-one>
                        </div>
                    </div>

                    {{-- How can I apply for Express Entry? --}}
                    <div class="mt-16 md:mt-24" id="How-can-I-apply-for-Express-Entry">
                        <h2 class="futura-medium text-2xl mb-4 md:mb-6 text-rose-600">How can I apply for Express
                            Entry?</h2>
                        <p class="mb-4">Applying to Express Entry is a two-step process. The first step
                            is to submit your profile which requires the following documents:</p>
                        <ul class="ml-4 list-decimal space-y-2" role="list">
                            <li>Language test results</li>
                            <li>Educational credential assessment report</li>
                            <li>A passport or travel document</li>
                        </ul>
                        <p class="mt-4">After you submit your profile and you receive an invitation to
                            apply for Canadian permanent residence, you will need to provide a more substantial
                            application
                            that includes reference letters, additional identity documents, police clearance
                            certificates,
                            and results of a medical examination.
                        </p>
                    </div>

                    {{-- Who is eligible for Express Entry? --}}
                    <div class="mt-16 md:mt-24" id="Who-is-eligible-for-Express-Entry">
                        <h2 class="futura-medium text-2xl mb-4 md:mb-6 text-rose-600">Who is eligible for Express
                            Entry?</h2>
                        <p class="mb-4">Individuals with university or college degrees, skilled work
                            experience and moderate proficiency in English and/or French are ideal Express
                            Entry candidates.
                        </p>
                        <p class="futura-medium text-gray-700 text-lg mb-4 md:mb-6">In order to submit a profile
                            through the
                            Express Entry system, candidates must also meet the eligibility requirements
                            for one of the three federal programs:</p>
                        <ul class="ml-4 list-decimal space-y-2" role="list">
                            <li>Federal Skilled Worker (FSW)</li>
                            <li>Federal Skilled Trades (FST)</li>
                            <li>Canadian Experience Class (CEC)</li>
                        </ul>
                        <p class="mt-4 md:mt-6">Use {{ config('app.name') }} free <a
                                href="{{ route('assessment') }}" class="text-rose-700 underline">Express entry
                                assessment</a> tool to evaluate your eligiblity
                            status.</p>
                    </div>

                    {{-- What-are-the-requirements-for-Express-Entry --}}                    
                    <div class="mt-16 md:mt-24" id="What-are-the-requirements-for-Express-Entry">
                        <h2 class="futura-medium text-2xl mb-4 md:mb-6 text-rose-600">What are the requirements for Express Entry?</h2>
                        <p class="mb-4">In general, to be eligible to apply to Express Entry as a skilled
                            worker, you must:</p>
                        <ul class="ml-4 list-decimal space-y-2" role="list">
                            <li>Have at least one year, in the last 10 years of continuous full-time (or
                                equivalent part-time) work experience in a skilled occupation</li>
                            <li>Be able to demonstrate on an approved language test a minimum of
                                Canadian Language Benchmark (CLB) seven in either English or French
                            </li>
                            <li>Completed post-secondary education that is assessed against Canadian
                                standards with an Education Credential Assessment
                            </li>
                        </ul>
                        <p class="mt-4 md:mt-6">These are the minimum requirements to apply to Canada’s
                            Express Entry system as a skilled worker. Meeting these requirements doesn’t mean you will
                            receive an invitation to apply for Canadian permanent residence. Candidates with
                            stronger profiles will always be selected over candidates that simply meet the minimum
                            requirement.
                        </p>
                    </div>

                    {{-- How much does Express Entry cost? --}}
                    <div class="mt-16 md:mt-24" id="How-much-does-Express-Entry-cost?">
                        <h2 class="futura-medium text-2xl mb-4 md:mb-6 text-rose-600">How much does Express Entry cost?
                        </h2>
                        <div class="">
                            <p class="mb-4 md:mb-6">The cost of immigrating to Canada through Express Entry is about
                                $2,300 CAD for a single applicant, or about $4,500 CAD for a couple. The breakdown of
                                costs
                                include:
                            </p>
                            <ul class="ml-4 list-decimal space-y-2" role="list">
                                <li>Language tests: Average cost – $300</li>
                                <li>Educational Credential Assessment (ECA): Average cost – $200</li>
                                <li>Biometrics: $85/person</li>
                                <li>Government fees: $1,325/adult & $225/child</li>
                                <li>Medical examination fees: average cost – $450/adult & $250/child</li>
                                <li>Police clearance certificates: average cost – $100/country</li>
                            </ul>
                            <p class=" mt-4 md:mt-6">No government fees are required to submit your initial
                                Express Entry profile. The fees are only requested when you are invited to apply for
                                Canadian permanent residence. In addition to the government processing fees, you may
                                also need
                                to pay provincial immigration fees if you apply through a PNP.
                            </p>
                            <p class="mt-2">
                                You should also be aware that unless you are applying under the Canadian
                                Experience Class program or have a valid arranged employment offer, you will need to
                                demonstrate you have sufficient funds to support your resettlement in Canada. These
                                settlement
                                funds are not fees paid to the government but you must have access to them to be
                                approved
                                for a permanent residence visa. The amounts per family size as at of June 2022 are
                                mentioned in the table below:
                            </p>
                            <div class="rounded-lg border border-gray-200 mt-6 md:mt-8">
                                <div class="overflow-x-auto rounded-t-lg">
                                    <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                                        <thead class="text-left">
                                            <tr>
                                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                                    Number of family members
                                                </th>
                                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                                    Required funds
                                                    of Birth</th>
                                            </tr>
                                        </thead>

                                        <tbody class="divide-y divide-gray-200">
                                            <tr>
                                                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">1
                                                </td>
                                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">$13,310</td>
                                            </tr>

                                            <tr>
                                                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">2
                                                </td>
                                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">$16,570</td>
                                            </tr>

                                            <tr>
                                                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">3
                                                </td>
                                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">$20,371</td>
                                            </tr>
                                            <tr>
                                                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">4
                                                </td>
                                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">$24,733</td>
                                            </tr>
                                            <tr>
                                                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">5
                                                </td>
                                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">$28,052</td>
                                            </tr>
                                            <tr>
                                                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">6
                                                </td>
                                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">$31,638</td>
                                            </tr>
                                            <tr>
                                                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">7
                                                </td>
                                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">$35,224</td>
                                            </tr>
                                            <tr>
                                                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">For
                                                    each additional family member</td>
                                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">$3,586</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Do I need a job offer for Express Entry? --}}
                    <div class="mt-16 md:mt-24" id="Do-I-need-a-job-offer-for-Express-Entry">
                        <h2 class="futura-medium text-2xl mb-4 md:mb-6 text-rose-600">Do I need a job offer for Express Entry?</h2>                        
                        <p class="mb-2">You do not require a job offer for Express Entry. The vast
                            majority of candidates selected for Express Entry do not have a formal Canadian job offer.
                        </p>
                        <p class="mb-4">If you do have a valid Canadian job offer, this can add up to 200 points to your CRS score.</p>                        
                    </div>

                    {{-- How long does Express Entry take? --}}
                    <div class="mt-16 md:mt-24" id="How-long-does-Express-Entry-take">
                        <h2 class="futura-medium text-2xl mb-4 md:mb-6 text-rose-600">How long does Express Entry take?</h2>
                        <p class="mb-4 md:mb-6">Express Entry can take as little as six months to process, from
                            submission of the Express Entry profile to the issuance of a permanent resident
                            visa. However, not all cases will proceed this quickly. Your Express Entry
                            profile will remain active in the pool of candidates for 12 months if you do not
                            receive an invitation to apply. If after 12 months you have not received an
                            invitation, you are welcome to resubmit your profile and remain in the pool. To
                            break it down further:

                        </p>
                        <ul class="ml-4 list-decimal space-y-2" role="list">
                            <li>Your profile will remain valid for 12 months in the Express Entry pool
                            </li>
                            <li>Upon issuance of the ITA, you will have 60 days to provide the requested
                                full application of documents</li>
                            <li>Once the immigration authorities receive your complete application, your
                                permanent resident visa, IRCC may process your application in about six
                                months</li>
                        </ul>                            
                    </div>

                    {{-- How are Express Entry points are calculated? --}}
                    <div class="mt-16 md:mt-24" id="How-are-Express-Entry-points-are-calculated">
                        <h2 class="futura-medium text-2xl mb-4 md:mb-6 text-rose-600">How are Express Entry points are calculated?</h2>                        
                        <p class="mb-4 md:mb-6">When people refer to Canada’s “Express Entry points”, they are
                            usually referring to the Comprehensive Ranking System (CRS) score. Canada uses
                            the CRS score to rank candidates in the Express Entry pool using a series of
                            factors, including:
                        </p>                            
                        <ul class="ml-4 list-disc space-y-2 mb-6 md:mb-8" role="list">
                            <li>Age;</li>
                            <li>Level of education;</li>
                            <li>Proficiency in French or English;</li>
                            <li>Foreign and Canadian work experience;</li>
                            <li>Spouse factors; and</li>
                            <li>Connections to Canada</li>
                        </ul>
                        <div class="py-6">
                            <x-link-two href="{{ route('crs') }}" class="">CRS calculator tool.</x-link-two>
                        </div>
                    </div>

                    {{-- Will the CRS score cut-off go down? --}}
                    <div class="mt-16" id="Will-the-CRS-score-cut-off-go-down">
                        <h2 class="futura-medium text-2xl mb-4 md:mb-6 text-rose-600">Will the CRS
                            score cut-off go down?</h2>                        
                        <p class="mb-2">It is impossible to predict how the CRS score will fluctuate in
                            the future. No lawyer or consultant can predict this, nor can they guarantee
                            that a person will successfully receive permanent residence through the Express
                            Entry system.

                        </p>

                        <p class="mb-2">Further, with more and more provinces selecting profiles from the
                            Express Entry pool, a candidate’s CRS score is losing its importance. Instead,
                            Provincial Nominee Programs look for candidates that can fill local labour
                            market or demographic gaps. This means that candidates with in-demand skills or
                            work experience can still succeed in the Express Entry pool, even with a low CRS
                            score.</p>

                        <p class="mb-2">The Canadian government has also hinted at moving to
                            occupation-based Express Entry draws, which could make the CRS score obsolete.
                        </p>

                        <p class="mb-6 md:mb-8">There are several options for increasing a person’s chances in
                            Canada’s Express Entry pool. To learn more about your eligibility for Express
                            Entry or PNP, complete                                
                        </p>
                        <div class="py-6">
                            <x-link-one href="{{ route('assessment') }}">Free visa assessment</x-link-one>
                        </div>
                    </div>

                    {{-- How-can-I-increase-my-CRS-score --}}
                    <div class="mt-16 md:mt-24" id="How-can-I-increase-my-CRS-score">
                        <h2 class="futura-medium text-2xl mb-4 md:mb-6 text-rose-600">How can I
                            increase my CRS score?</h2>

                        <div class="">

                            {{-- retake --}}

                            <div class="">
                                <h3 class="py-2 futura-medium text-lg">1. RETAKE THE IELTS</h3>
                                <p class="mb-2">Improving your IELTS score is the number one way to increase
                                    your points. On their own, good IELTS results can get you up to 160 points.
                                </p>
                                <p class="mb-2">But if you have good IELTS and post-secondary education can get you an
                                    additional 50 points. Good IELTS and at least three years of work experience
                                    can get you another 50 points.</p>
                                <p class="mb-2">You need to score at least Canadian Language Benchmark (CLB) 7
                                    to be eligible for Express Entry under the Federal Skilled Worker program,
                                    which is at least 6.0 on each language ability on the IELTS. But if you can
                                    score CLB 9 in all language abilities, you could be looking at up to 260
                                    Express Entry points for just your language ability.</p>
                                <p class="mb-2">You can also take the IELTS as many times as you want to. You can even
                                    update your Express Entry profile with new IELTS test results after you
                                    submit your profile to the pool.</p>
                                <p class="mb-6 md:mb-8">{{config('app.name')}} provides all of our Express Entry clients access to free
                                    online IELTS tutorials to help prepare to take the test. There are a lot of
                                    free or paid materials available online to help you prepare.</p>
                                <div class="px-4 py-4 w-full md:w-[70%] rounded-lg border border-gray-300 hover:border-rose-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
                                    </svg>
                                    <p>
                                        Register to take your IELTS early. That way, if you don’t do as well as
                                        you hoped, you have time to retake them before you submit your profile.
                                        You can always update your profile, but if you wait until after you’re
                                        in the pool to improve your score, you could be missing out on draws.  
                                    </p>
                                </div>
                            </div>

                            {{-- work experience --}}
                            <div class="mt-10">
                                <h3 class="py-2 futura-medium text-lg">2. WORK EXPERIENCE</h3>
                                <p class="mb-2">Since Express Entry manages applications to economic
                                    immigration streams, your work experience is a big part of calculating your
                                    Express Entry points.
                                </p>
                                <p class="mb-6 md:mb-8">
                                    That said, it’s not very easy to accumulate more years of work experience
                                    just to improve your Express Entry points.
                                </p>
                                <div class="px-4 py-4 w-full md:w-[70%] rounded-lg border border-gray-300 hover:border-rose-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
                                    </svg>
                                    <p>
                                        If you’re not eligible for Express Entry, or if you are eligible but
                                        don’t have a competitive score, consider coming to Canada first as a
                                        student or temporary worker. Canadian experience can open up a lot more
                                        Canadian immigration options.
                                    </p>
                                </div>                                
                                <p class="mt-6 mb-2">A lot of candidates don’t leverage the work experience that
                                    they do have as much as possible, though. Express Entry uses the National
                                    Occupational Classification (NOC) matrix to assign points to all
                                    occupations. Choosing the right NOC code is one of the simplest ways to
                                    increase your score.
                                </p>
                                <p class="mb-2">
                                    You’ll need to prove that whatever NOC codes you claim in your work
                                    experience are accurate if you receive an invitation to apply for permanent
                                    residence, so you should not misrepresent your experience.
                                </p>
                                <p class="mb-2">
                                    That said, it’s worth it to spend some time finding exactly which NOC codes
                                    accurately reflect your career history while getting you as many Express
                                    Entry points as possible.
                                </p>
                                <p class="mb-2">
                                    The NOC matrix can be confusing to sort through, so consulting an expert to
                                    figure out which NOC codes you can claim can be very helpful.
                                </p>
                            </div>

                            {{-- spousal --}}
                            <div class="mt-10">
                                <h3 class="py-2 futura-medium text-lg">3. SPOUSAL POINTS</h3>
                                <p class="mb-6 md:mb-8">It may not apply to some candidates, but if you have a spouse
                                    or common-law partner, you may be missing out on some points you can claim.
                                    <br>
                                    There are three possibilities here, and it’s worth looking into them all.
                                    <br>
                                    First, your spouse or partner may get you more points. By retaking a
                                    language test, or getting an educational credential assessment (ECA) for any
                                    post-secondary education they have, your spouse or partner could increase
                                    your Express Entry points.
                                    <br>
                                    Second, you may actually have a higher score as a single applicant. Since
                                    your score changes depending on whether you have an accompanying spouse or
                                    partner, you could increase your score by listing them as non-accompanying.
                                    If you receive permanent residence, you can still <a
                                        href="{{ route('sponsorship_immigration') }}"
                                        class="text-rose-700 underline">sponsor them to join you in Canada</a>,
                                    but it does mean a period of separation.
                                    <br>
                                    Third, your spouse may actually be a stronger applicant. You should
                                    definitely run through the exercise of trying to calculate how many points
                                    your spouse would get if they were the principal applicant, with or without
                                    you accompanying them.
                                </p>

                                <div class="px-4 py-4 w-full md:w-[70%] rounded-lg border border-gray-300 hover:border-rose-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
                                    </svg>
                                    <p>
                                       If you and your spouse or partner are both strong candidates, you can
                                        each submit a profile to the Express Entry pool and list each other as
                                        accompanying. That way you double your chances of success!
                                    </p>
                                </div>

                                <p class="mt-6">If you’ve done as well as possible on language tests, claimed
                                    as many points as possible for your work experience, maximized your spousal
                                    points, and still don’t have a competitive score, there are some more
                                    challenging ways you can improve it.
                                </p>
                            </div>

                            {{-- job offer --}}
                            <div class="mt-10">
                                <h3 class="py-2 futura-medium text-lg">4. JOB OFFER</h3>
                                <p>An eligible job offer from a Canadian employer can get you
                                    between 50 to 200 additional points. Spend time on the Canada Job Bank, as
                                    well as private job boards and social networking sites to try to connect
                                    with Canadian employers in your field.
                                </p>
                            </div>

                            {{-- provinciai nomination --}}
                            <div class="mt-10">
                                <h3 class="py-2 futura-medium text-lg">5. PROVINCIAL NOMINATION</h3>
                                <p>If you receive a nomination from a province, you get 600
                                    additional points. Many provinces operate a nomination program aligned with
                                    Express Entry, but it’s usually up to the candidate to figure out which
                                    programs they might be eligible for and how to apply. Keep in mind that
                                    applying for a provincial nomination is usually a completely separate
                                    application process.
                                </p>
                            </div>

                            {{-- study --}}
                            <div class="mt-10">
                                <h3 class="py-2 futura-medium text-lg">6. STUDY</h3>
                                <p class="mb-2">Going back to school is a pretty big investment to increase
                                    your score, but it can also have a big impact. A short program like a
                                    one-year post-secondary certificate could get you a lot of points. If you
                                    already have one post-secondary degree of three years or more, worth 120
                                    points, and take a second one-year program, you can claim an additional 8
                                    points for just education. If you already had CLB 9, and two years of
                                    Canadian work experience, you can claim an additional 50 points for skills
                                    transferability. That’s 58 total additional Express Entry points.
                                </p>
                                <p>Canadian educational credentials are highly valued in Express
                                    Entry, and being an <span class="text-gray-700 futura-bold">international student</span> can open a lot
                                    of other doors to staying in Canada permanently that you might not otherwise
                                    be eligible for.
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- What-is-the-ideal-Express-Entry-candidate --}}
                    <div class="mt-16 md:mt-24" id="What-is-the-ideal-Express-Entry-candidate">
                        <h2 class="futura-medium text-2xl mb-4 md:mb-6 text-rose-600">What is the ideal Express Entry candidate?</h2>
                        <div class="">
                            <p class="mb-4 md:mb-6">There is no one-size-fits-all type of profile that is eligible
                                for Express Entry. Candidates who enter the pool receive a comprehensive ranking
                                system (CRS) score. Those who rank higher, are more likely to receive an
                                invitation to apply. Selection factors that can influence your CRS score are
                                language proficiency, your age, your level of work experience, education, and
                                Canadian connections.
                            </p>
                            
                            <p class="py-2 futura-medium text-lg">Ideal Express Entry candidates would meet the
                                following requirements:</p>

                            <ul class="ml-4 list-decimal space-y-2 mb-4 md:mb-6" role="list">
                                <li>Be under 30 years old </li>
                                <li>Hold at least two Bachelor’s degrees or a Master’s degree </li>
                                <li>Be able to demonstrate moderate to high English and/or French language
                                    proficiency (Canadian Language Benchmark [CLB] level nine or higher)
                                </li>
                                <li>Have at least three years of skilled work experience</li>
                            </ul>

                            
                            <p class="py-2 font-bold text-lg">Other factors that can really boost your CRS
                                score can include:</p>
                            <ul class="ml-4 list-disc space-y-2" role="list">
                                <li>Higher language proficiency in English and/or French</li>
                                <li>Bilingualism in French and English</li>
                                <li>A Master’s degree or Ph.D. education</li>
                                <li>Canadian work or educational experience</li>
                                <li>A Canadian brother or sister currently residing in Canada</li>
                                <li>An arranged employment offer from a Canadian company </li>
                                <li>A nomination from a provincial nominee program</li>
                            </ul>
                        </div>
                    </div>

                    {{-- What is the difference between Express Entry eligibility points and CRS score? --}}
                    <div class="mt-16 md:mt-24"
                        id="What-is-the-difference-between-Express-Entry-eligibility-points-and-CRS-score">
                        <h2 class="futura-medium text-2xl mb-4 md:mb-6 text-rose-600">What is the
                            difference between Express Entry eligibility points and CRS score?</h2>
                        <p>To apply under the Federal Skilled Worker Program (FSWP),
                            candidates must first score at least 67 on the FSW eligibility points grid. Once
                            an FSW candidate, or any other Express Entry candidate, enters the Express Entry
                            pool, they will receive a CRS score. Canada uses the CRS score rank all
                            candidates against each other in the Express Entry pool. Approximately every two
                            weeks, the Government of Canada holds an Express Entry draw, setting a minimum
                            CRS score cut-off. Those in the pool with a CRS score above the cut-off will
                            receive an Invitation to Apply for Canadian permanent residence.
                        </p>
                    </div>

                    {{-- Is-there-a-minimum-score-for-Express-Entry --}}
                    <div class="mt-16 md:mt-24" id="Is-there-a-minimum-score-for-Express-Entry">
                        <h2 class="futura-medium text-2xl mb-4 md:mb-6 text-rose-600">Is there a
                            minimum score for Express Entry?</h2>                       
                        <p>The minimum CRS score required to receive an Invitation to Apply
                            (ITA) for Canadian permanent residence changes from draw to draw. For this
                            reason, it is important to take steps to improve your ranking in the pool of
                            candidates to increase your chances of receiving an invitation.
                        </p>
                    </div>

                    {{-- How-are-my-language-points-calculated --}}
                    <div class="mt-16 md:mt-24" id="How-are-my-language-points-calculated">
                        <h2 class="futura-medium text-2xl mb-4 md:mb-6 text-rose-600">How are my
                            language points calculated?</h2>                        
                        <p>Express Entry language points are based on what a candidate
                            scores on one of Canada’s official English or French exams. If a candidate has a
                            strong proficiency in both French or English, they can maximize the number of
                            points received under the language factor of their <a href="{{ route('crs') }}"
                                class="text-rose-700 underline">CRS score</a>.
                        </p>
                    </div>

                    {{-- How does my IELTS score affect my CRS score? --}}
                    <div class="mt-16 md:mt-24" id="How-does-my-IELTS-score-affect-my-CRS-score">
                        <h2 class="futura-medium text-2xl mb-4 md:mb-6 text-rose-600">How does my IELTS
                            score affect my CRS score?</h2>
                        <p class="mb-2">Your IELTS or CELPIP score can have a significant impact on your
                            CRS score. Scoring at least a Canadian Language Benchmark (CLB) 9 in each area
                            of the exam can double your skill transferability factor points, which can
                            considerably increase your CRS score.
                        </p>
                        <p>
                            Express Entry candidates may demonstrate their proficiency in one of Canada’s
                            official languages – French or English. If you have a stronger proficiency in
                            French, you may choose to take the French exam instead. In this case, you do not
                            need to take the IELTS or CELPIP exam. Instead, you should aim to score a
                            minimum of CLB 9 on each area of the French exam to maximize your language
                            points.
                        </p>
                    </div>

                    {{-- Does my spouse need to take the IELTS exam? --}}
                    <div class="mt-16 md:mt-24" id="Does-my-spouse-need-to-take-the-IELTS-exam">
                        <h2 class="futura-medium text-2xl mb-4 md:mb-6 text-rose-600">Does my spouse
                            need to take the IELTS exam?</h2>
                        <p class="mb-6 md:mb-8">If you are submitting an Express Entry profile through the FSW
                            program with an accompanying spouse, they may need to take a language exam, such
                            as the IELTS, depending on your FSW score. If your spouse scores a minimum of
                            CLB 4 in each area of one of IRCC’s designated language exams, you can claim an
                            additional 5 points toward your FSW score. If your score is below 67, these
                            points could help render you eligible to submit a profile.
                            <br>Your spouse’s language results may also help to increase your CRS score,
                            and improve your chances in the Express Entry pool.
                        </p>
                        <div class="py-6">
                            <x-link-one href="{{ route('assessment') }}">Find out if you are eligible</x-link-one>
                        </div>
                    </div>

                    {{-- Why is my Express Entry score zero? --}}
                    <div id="Why-is-my-Express-Entry-score-zero" class="mt-16 md:mt-24">
                        <h2 class="futura-medium text-2xl mb-4 md:mb-6 text-rose-600">Why is my Express
                            Entry score zero?</h2>                                            
                        <p class="mb-4 md:mb-6">If your Express Entry score is zero, it means your profile does
                            not meet the eligibility requirements. This can occur right away after
                            submitting your Express Entry profile, or after your profile has been in the
                            pool for months.
                        </p>
                        <p class="py-2 futura-medium text-lg"> Some common reasons a profile becomes no longer
                            eligible include:</p>

                        <ul class="ml-4 list-disc space-y-2" role="list">
                            <li>Expired language results or ECA report;</li>
                            <li>No longer meeting minimum settlement fund requirements;</li>
                            <li>Losing eligibility points toward the age factor (for Federal Skilled
                                Workers)</li>
                            <li>Having less than one year of work experience in your primary NOC code</li>
                        </ul>
                    </div>

                    {{-- What-CRS-score-is-required-for-Canadian-PR --}}
                    <div class="mt-16 md:mt-24" id="What-CRS-score-is-required-for-Canadian-PR">
                        <h2 class="futura-medium text-2xl mb-4 md:mb-6 text-rose-600">What CRS score is
                            required for Canadian Permanent Resident?</h2>                       
                        <p>There is no specific CRS score that will guarantee an Invitation
                            to Apply (ITA) for Canadian permanent residence. The CRS cut-off is always
                            fluctuating Government of Canada does not release the CRS cut-off targeted ahead
                            of each Express Entry draw.

                        </p>
                    </div>

                    {{-- Why is the CRS cut-off so high? --}}
                    <div class="mt-16 md:mt-24" id="Why-is-the-CRS-cut-off-so-high">
                        <h2 class="futura-medium text-2xl mb-4 md:mb-6 text-rose-600">Why is the CRS
                            cut-off so high?</h2>
                        <p class="mb-2">The CRS cut-off for Provincial Nominee Program (PNP) specific
                            Express Entry draws due to the additional points given to candidates with a
                            nomination on their profile.
                        </p>
                        <p>
                            Express Entry candidates may receive 600 points toward their CRS score
                            upon receiving a provincial nomination.
                        </p>
                    </div>

                    {{-- CRS score trend --}}
                    <div class="mt-16 md:mt-24" id="CRS-score-trend">
                        <h2 class="futura-medium text-2xl mb-4 md:mb-6 text-rose-600">CRS score trend
                        </h2>
                        <p>In 2021, Canada alternated between holding Canadian Experience
                            Class (CEC) and Provincial Nominee Program (PNP) draws. In 2021, the CRS cut-off
                            in CEC draws reached record lows. In February 2021, the Canadian government
                            invited over 27,000 CEC candidates with CRS scores as low as 75. The CRS cut-off
                            for PNP draws ranged between the 600-800s. The high CRS cut-off in PNP draws is
                            due to the additional 600 points given to PNP candidates. That means that, prior
                            to receiving a nomination, the lowest ranking PNP candidate had a CRS score of
                            less than 100.
                        </p>
                    </div>

                    {{-- Is-438/459/467/462-a-good-CRS-score --}}
                    <div class="mt-16 md:mt-24" id="Is-438/459/467/462-a-good-CRS-score">
                        <h2 class="futura-medium text-2xl mb-4 md:mb-6 text-rose-600">Is
                            438/459/467/462 a good CRS score?</h2>                        
                        <p class="mb-2">The lowest CRS score selected in 2019 was 438 – however, there is
                            no guarantee that having this score will result in an invitation. Whether you
                            receive an invitation from the federal or provincial government will depend on
                            various external factors, in addition to your own individual profile.
                        </p> 
                        <p class="mb-2">
                            Throughout the COVID-19 pandemic, provinces have continued to invite
                            candidates directly from the Express Entry pool, sometimes targeting a minimum
                            CRS cut-off, sometimes only targeting other factors such as work experience, or
                            the candidates score on their own points grid.
                        </p>
                        <p class="mb-2">
                            A CRS score in the mid to high 400s is typically considered a good
                            score, which may help your chances of being selected by a province.    
                        </p>     
                        <p>
                            Since the CRS cut-off cannot be predicted ahead of each draw score, it
                            is important to take measures to maximize your CRS score wherever possible.
                        </p>                 
                    </div>

                    {{-- How-to-calculate-your-CRS-score --}}
                    <div class="mt-16 md:mt-24" id="How-to-calculate-your-CRS-score">
                        <h2 class="futura-medium text-2xl mb-4 md:mb-6 text-rose-600">How to calculate
                            your CRS score?</h2>
                        <p class="mb-6 md:mb-8">To calculate your CRS score, you first need to understand how
                            Canada awards points to Express Entry candidates through the Comprehensive
                            Ranking System. You can then calculate your points against each factor to
                            determine how you rank in the Express Entry pool.
                            To receive an estimate of your CRS score, use our free crs calculator.
                        </p>  
                        <div class="py-6">
                            <x-link-two href="{{ route('assessment') }}">CRS score calculator</x-link-two>
                        </div>            
                    </div>

                    {{-- What is an Express Entry profile? --}}
                    <div class="mt-16 md:mt-24" id="What-is-an-Express-Entry-profile">
                        <h2 class="futura-medium text-2xl mb-4 md:mb-6 text-rose-600">What is an
                            Express Entry profile?</h2>
                        <p class="mb-2">An Express Entry profile is an electronic form submitted by
                            eligible candidates that includes personal details such as age, work experience,
                            education, ability in French and English, family details, and ties to Canada.                            
                        </p>
                        <p>Using these details, Canada ranks profiles in the Express Entry pool
                            against one another and determine who receives an invitation.</p>
                    </div>

                    {{-- How-to-create-an-Express-Entry-profile --}}
                    <div class="mt-16 md:mt-24" id="How-to-create-an-Express-Entry-profile">
                        <h2 class="futura-medium text-2xl mb-4 md:mb-6 text-rose-600">How to create an
                            Express Entry profile</h2>                        
                        <p class="mb-2">To create an Express Entry profile, you must first create an IRCC
                            secure account. If a representative is submitting a profile on your behalf, they
                            will submit the profile through their Authorized Paid Representatives Portal.
                        </p>
                        <p>
                            After creating an account, you or your representative will need to fill
                                out an eligibility questionnaire to determine if you qualify for an Express
                                Entry program. If you are eligible, the next step is to fill out an online form
                                with your information, including details on your age, work experience,
                                education, and language test results. Once the form is submitted, the Express
                                Entry system will automatically determine your Comprehensive Ranking System
                                (CRS) score and which program you are eligible under.
                        </p>
                    </div>

                    {{-- What language results are required for Express Entry --}}
                    <div class="mt-16 md:mt-24" id="What-language-results-are-required-for-Express-Entry">
                        <h2 class="futura-medium text-2xl mb-4 md:mb-6 text-rose-600">What language
                            results are required for Express Entry</h2>
                        <p class="mb-2">Most Express Entry programs require a minimum of Canadian
                            Language Benchmark 7 in each area of the French or English language exam (band 6
                            in each area of the IELTS exam).
                        </p>
                        <p>
                            There are some exceptions to this minimum requirement for candidates
                            applying under the Federal Skilled Trades (FST) program, or CEC applicants with
                            a primary occupation in NOC skill type B.
                        </p>
                    </div>

                    {{-- Which ECA report do I need for Express Entry? --}}
                    <div class="mt-16 md:mt-24" id="Which-ECA-report-do-I-need-for-Express-Entry">
                        <h2 class="futura-medium text-2xl mb-4 md:mb-6 text-rose-600">
                            Which ECA report do I need for Express Entry?
                        </h2>
                        <p class="mb-4">The ECA report required for Express Entry must be issued for
                            immigration purposes. <span class="text-gray-700 futura-bold">Read
                                more about Education Credential
                                Assessment reports.</span>
                        </p>
                    </div>

                    {{-- How-will-a-job-offer-affect-my-Express-Entry-profile --}}
                    <div class="mt-16 md:mt-24" id="How-will-a-job-offer-affect-my-Express-Entry-profile">
                        <h2 class="futura-medium text-2xl mb-4 md:mb-6 text-rose-600">
                            How will a job offer affect my Express Entry profile?
                        </h2>
                        <p class="mb-4">Adding a valid Canadian job offer may increase your Express Entry
                            CRS score by 50-200 points. In most cases, a positive <span class="text-gray-700 futura-bold">Labour Market
                            Impact Assessment (LMIA)</span> is required for these points to be awarded.
                        </p>
                        <p>
                            An informal job offer will not award any additional points to your
                            Express Entry profile and should not be mentioned in the application.
                        </p>
                    </div>

                    {{-- How-do-I-find-my-NOC-code --}}
                    <div class="mt-16 md:mt-24" id="How-do-I-find-my-NOC-code">
                        <h2 class="futura-medium text-2xl mb-4 md:mb-6 text-rose-600">
                            How do I find my NOC code?
                        </h2>
                        <p class="mb-4">You can find your <span class="text-gray-700 futura-bold">NOC code</span> by searching the NOC matrix for
                            your job title or industry. It is important to make sure the majority of the
                            main duties listed on the NOC you choose match your job description.
                        </p>
                    </div>

                    {{-- related links --}}
                    <div class="mt-16 md:mt-24">
                        <h2 class="text-gray-700 text-2xl futura-medium py-2">Related links</h2>                        
                        <ul class="grid grid-cols-1 xl:grid-cols-3 gap-y-10 gap-x-6 items-start py-8">
                            <li class="relative flex flex-col sm:flex-row xl:flex-col items-start">
                                <div class="order-1 sm:ml-6 xl:ml-0">
                                    <h3 class="mb-1 text-gray-700 futura-medium">                                        
                                        Provincial Nominee Programs
                                    </h3>                                    
                                    <a class="group inline-flex items-center h-9 rounded-full text-sm font-semibold whitespace-nowrap px-3 focus:outline-none focus:ring-2 bg-rose-100 text-rose-700 hover:bg-rose-200 hover:text-rose-900 focus:ring-rose-500 mt-6"
                                        href="{{ route('PNP') }}">Learn
                                        more
                                        <svg class="overflow-visible ml-3 text-rose-300 group-hover:text-rose-400"
                                            width="3" height="6" viewBox="0 0 3 6" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M0 0L3 3L0 6"></path>
                                        </svg>
                                    </a>
                                </div>
                                <img src="{{asset('images/pnp.jpg')}}" alt="" class="mb-6 shadow-md rounded-lg bg-rose-50 w-full sm:w-[17rem] sm:mb-0 xl:mb-6 xl:w-full" width="1216" height="640">
                            </li>
                            <li class="relative flex flex-col sm:flex-row xl:flex-col items-start">
                                <div class="order-1 sm:ml-6 xl:ml-0">
                                    <h3 class="mb-1 text-gray-700 futura-medium">
                                        Get a study visa for your Canada Study
                                        program
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
                            <li class="relative flex flex-col sm:flex-row xl:flex-col items-start">
                                <div class="order-1 sm:ml-6 xl:ml-0">
                                    <h3 class="mb-1 text-gray-700 futura-medium">
                                        Sponsor a family member or colleague
                                    </h3>                                    
                                    <a class="group inline-flex items-center h-9 rounded-full text-sm font-semibold whitespace-nowrap px-3 focus:outline-none focus:ring-2 bg-rose-100 text-rose-700 hover:bg-rose-200 hover:text-rose-900 focus:ring-rose-500 mt-6"
                                        href="{{ route('sponsorship_immigration') }}">Learn
                                        more
                                        <svg class="overflow-visible ml-3 text-rose-300 group-hover:text-rose-400"
                                            width="3" height="6" viewBox="0 0 3 6" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M0 0L3 3L0 6"></path>
                                        </svg>
                                    </a>
                                </div>
                                <img src="{{asset('images/family2.jpeg')}}" alt="" class="mb-6 shadow-md rounded-lg bg-rose-50 w-full sm:w-[17rem] sm:mb-0 xl:mb-6 xl:w-full" width="1216" height="640">
                            </li>
                        </ul>                        
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
    </section>

</x-app-layout>
