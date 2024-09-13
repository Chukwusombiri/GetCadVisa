<x-app-layout>
    {{-- breadcrumb --}}
    <x-breadcrumb>
        <x-slot:topic>immigration</x-slot>
        <x-slot:subtopic>work permit</x-slot>
    </x-breadcrumb>
    {{-- HEADER --}}
    <x-header>
        <x-slot:maintitle>Canadian work permit</x-slot>
        <x-slot:subtitle>Learn more about Canadian Work permit and the options available for working in
            canada.</x-slot>
    </x-header>
    {{-- BODY --}}
    <section class="grid grid-cols-4">
        {{-- MAIN --}}
        <div class="col-span-4 lg:col-span-3 pt-12 pb-24 px-4 md:px-6 lg:px-10 bg-gray-50 text-gray-600">
            {{-- main content --}}
            <h2 class="hedvig-regular text-gray-800 mb-8 text-3xl text-4xl md:text-5xl max-w-xl">
                Canadian Work Permit & Visa Process
            </h2>
            <p class="text-lg max-w-3xl mb-2">
                A work permit enables a foreign national to work in Canada temporarily. Canada offers more than 100
                different options to foreign workers.
            </p>
            <p class="text-lg max-w-3xl mb-6 md:mb-8">

                Each year, Canada issues about half a million work permits to temporary foreign workers around the
                world.

                Canada is a prime destination for many foreign nationals who are seeking employment opportunities.

                Working in Canada is also an excellent first step for those seeking to immigrate to the country
                permanently.

            </p>
            {{-- contact work --}}
            <div class="px-4 py-4 rounded-lg border border-gray-300 max-w-xl">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
                </svg>
                <p class="max-w-lg">
                    Get a Free Work Permit Consultation with the {{ config('app.name') }} Canadian immigration Firm.
                </p>
                <p class="mt-6">
                    <a onclick="Livewire.emit('openModal', 'contact-work')"
                        class="inline-flex cursor-pointer text-rose-700 hover:text-rose-800 text-sm uppercase futura-medium rounded-2xl py-3 px-5 border-2 border-rose-700 hover:border-rose-800 hover:bg-white">Contact
                        us to discuss your work permit needs.</a>
                </p>
            </div>
            {{-- table of content --}}
            <div class="my-10">
                <p class="mb-4 md:mb-6 futura-medium text-gray-700 text-xl">What you will learn</p>
                <ul class="ml-4 space-y-2" role="list">
                    <li><a href="{{ route('express_entry') . '#Who-is-eligible-to-work-in-Canada' }}"
                            class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                                </svg>

                            </span><span class="underline">Who is eligible to work in Canada?</span></a></li>

                    <li><a href="{{ route('express_entry') . '#Types-of-Canadian-work-permits' }}"
                            class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                                </svg>

                            </span><span class="underline">Types of Canadian work permits</span></a></li>

                    <li><a href="{{ route('express_entry') . '#How-to-obtain-a-Canadian-work-permit' }}"
                            class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                                </svg>

                            </span><span class="underline">How to obtain a Canadian work permit</span></a></li>

                    <li><a href="{{ route('express_entry') . '#If-I-have-a-Canadian-job-offer,am-I-eligible-to-apply-for-a-work-permit' }}"
                            class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                                </svg>

                            </span><span class="underline">If I have a Canadian job offer, am I eligible to apply for a
                                work permit?</span></a></li>

                    <li><a href="{{ route('express_entry') . '#What-am-I-allowed-to-do-on-a-Canadian-work-permit' }}"
                            class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                                </svg>

                            </span><span class="underline">What am I allowed to do on a Canadian work permit?</span></a>
                    </li>

                    <li><a href="{{ route('express_entry') . '#Can-my-family-be-included-on-my-work-permit-application' }}"
                            class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                                </svg>

                            </span><span class="underline">Can my family be included on my work permit
                                application?</span></a></li>

                    <li><a href="{{ route('express_entry') . '#How-much-does-a-Canadian-work-permit-cost' }}"
                            class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                                </svg>

                            </span><span class="underline">How much does a Canadian work permit cost?</span></a></li>

                    <li><a href="{{ route('express_entry') . '#How-do-I-apply-for-a-Canadian-work-permit' }}"
                            class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                                </svg>

                            </span><span class="underline">How do I apply for a Canadian work permit?</span></a></li>

                    <li><a href="{{ route('express_entry') . '#What-documents-are-required-to-apply-for-a-Canadian-work-permit' }}"
                            class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                                </svg>

                            </span><span class="underline">What documents are required to apply for a Canadian work
                                permit?</span></a></li>

                    <li><a href="{{ route('express_entry') . '#Biometrics-for-Canadian-work-permits' }}"
                            class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                                </svg>

                            </span><span class="underline">Biometrics for Canadian work permits</span></a></li>

                    <li><a href="{{ route('express_entry') . '#Police-clearances-for-Canadian-work-permits' }}"
                            class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                                </svg>

                            </span><span class="underline">Police clearances for Canadian work permits</span></a></li>

                    <li><a href="{{ route('express_entry') . '#Medical-exam-for-Canadian-work-permit' }}"
                            class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                                </svg>

                            </span><span class="underline">Medical exam for Canadian work permit</span></a></li>

                    <li><a href="{{ route('express_entry') . '#Photo-requirements-for-Canadian-work-permit' }}"
                            class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                                </svg>

                            </span><span class="underline">Photo requirements for Canadian work permit</span></a></li>

                    <li><a href="{{ route('express_entry') . '#How-long-will-it-take-to-process-my-work-permit-application' }}"
                            class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                                </svg>

                            </span><span class="underline">How long will it take to process my work permit
                                application?</span></a></li>

                    <li><a href="{{ route('express_entry') . '#How-long-will-it-take-to-process-my-LMIA-application' }}"
                            class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                                </svg>

                            </span><span class="underline">How long will it take to process my LMIA
                                application?</span></a></li>

                    <li><a href="{{ route('express_entry') . '#What-is-the-rate-of-success-for-work-permit-LMI-applications' }}"
                            class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                                </svg>

                            </span><span class="underline">What is the rate of success for work permit/LMIA
                                applications?</span></a></li>

                    <li><a href="{{ route('express_entry') . '#How-can-I-check-the-status-of-my-work-permit-application' }}"
                            class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                                </svg>

                            </span><span class="underline">How can I check the status of my work permit
                                application?</span></a></li>

                    <li><a href="{{ route('express_entry') . '#Reasons-a-work-permit-application-is-refused' }}"
                            class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                                </svg>

                            </span><span class="underline">Reasons a work permit application is refused</span></a></li>

                    <li><a href="{{ route('express_entry') . '#How-can-I-include-my-spouse-and-dependents-on-my-work-permit-application' }}"
                            class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                                </svg>

                            </span><span class="underline">How can I include my spouse and dependents on my work permit
                                application?</span></a></li>

                    <li><a href="{{ route('express_entry') . '#How-do-I-activate-my-work-permit' }}"
                            class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                                </svg>

                            </span><span class="underline">How do I activate my work permit?</span></a></li>

                    <li><a href="{{ route('express_entry') . '#How-to-find-a-job-in-Canada' }}"
                            class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                                </svg>

                            </span><span class="underline">How to find a job in Canada</span></a></li>

                    <li><a href="{{ route('express_entry') . '#Benefits-of-working-in-Canada' }}"
                            class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                                </svg>

                            </span><span class="underline">Benefits of working in Canada</span></a></li>

                    <li><a href="{{ route('express_entry') . '#How-can-I-extend-my-work-permit' }}"
                            class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                                </svg>

                            </span><span class="underline">How can I extend my work permit?</span></a></li>
                </ul>

            </div>
            {{-- Who is eligible to work in Canada? --}}
            <div id="Who-is-eligible-to-work-in-Canada" class="mt-16">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Who is eligible to work in Canada?</h2>

                <div class="">

                    <p class="mb-4">Most foreign nationals require a permit to be eligible to work in Canada, with
                        some exemptions.

                    </p>

                    <p class="mb-4">To apply for a work permit, most candidates will require a Canadian job offer

                        supported by a <a href="javascript:void(0)" class="text-red-600 underline">Labour Market

                            Impact Assessment (LMIA)</a>. There are some exceptions to this requirement, where

                        foreign workers can apply for a work permit without an LMIA, or a job offer. Examples of

                        this include a recent graduate from a Canadian Designated Learning Institute (DLI), or

                        the spouse of someone already on a Canadian work or study permit.

                    </p>

                </div>

                <div class="">

                    <p class="py-2 font-bold text-lg">Candidates who qualify to apply for a work permit must also meet
                        the following eligibility requirements:</p>

                    <ul class="ml-4 space-y-2 list-disc mb-6 md:mb-8" role="list">

                        <li>Demonstrate their intent to leave once their work authorization expires; and</li>

                        <li>Prove they have sufficient funds to support them and their family in Canada and to return
                            home; and</li>

                        <li>Are not criminally or medically <a href="{{ route('in_admissibilty') }}"
                                class="text-red-600 underline">inadmissible</a> to Canada; and</li>

                        <li>Plan to work with an eligible employer; and</li>

                        <li>Can provide any requested documents that may prove their eligibility to enter Canada</li>

                    </ul>
                    <div class="py-6">
                        <x-link-one href="{{ route('business_assessment') }}">Check your work permit
                            eligibility</x-link-one>
                    </div>
                </div>

            </div>
            {{-- Types of Canadian work permits --}}
            <div class="mt-16 md:mt-24" id="Types-of-Canadian-work-permits">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Types of Canadian work permits</h2>

                <div class="">

                    <p class="mb-4">There are many different options for obtaining a Canadian work permit. Some work
                        permits require a job offer from a Canadian employer, some require that the employer provide a
                        Labour Market Impact Assessment (LMIA), while others require that a person has some sort of
                        connection to Canada (previous education, spousal sponsorship, etc.).

                    </p>

                    <p class="mb-4">Please refer to the following categories below to determine the work permit which
                        best suits your qualifications:</p>

                    <div class="px-4 w-full">

                        <p class="py-2 font-bold text-lg">

                            Requiring a Labour Market Impact Assessment (LMIA)

                        </p>

                        <ul class="ml-4 space-y-2 list-disc" role="list">

                            <li><a href="javascript:void(0)" class="text-red-600 underline">Temporary Foreign Worker
                                    Program (TFWP)</a></li>

                            <li><a href="javascript:void(0)" class="text-red-600 underline">Facilitated LMIA
                                    (Quebec)</a></li>

                            <li><a href="javascript:void(0)" class="text-red-600 underline">Global Talent Stream</a>
                            </li>

                        </ul>

                    </div>

                    <div class="px-4 mt-4">

                        <p class="py-2 font-bold text-lg">

                            LMIA-Exempt but requiring a job offer or employment contract

                        </p>

                        <ul class="ml-4 space-y-2 list-disc" role="list">

                            <li><a href="javascript:void(0)" class="text-red-600 underline">International Mobility
                                    Program (IMP)</a></li>

                            <li><a href="javascript:void(0)" class="text-red-600 underline">NAFTA Work Permits</a>
                            </li>

                            <li><a href="javascript:void(0)" class="text-red-600 underline">CETA Work Permits</a></li>

                            <li><a href="javascript:void(0)" class="text-red-600 underline">Intra-Company
                                    Transfers</a></li>

                        </ul>

                    </div>

                    <div class="px-4 mt-4 mb-6 md:mb-8">

                        <p class="py-2 font-bold text-lg">

                            Open Work Permits (no job offer or LMIA required)

                        </p>

                        <ul class="ml-4 space-y-2 list-disc" role="list">

                            <li><a href="javascript:void(0)" class="text-red-600 underline">Post-Graduation Work
                                    Permits (PGWP)</a></li>

                            <li><a href="javascript:void(0)" class="text-red-600 underline">Spousal Sponsorship from
                                    Inside of Canada</a></li>

                            <li><a href="javascript:void(0)" class="text-red-600 underline">International Experience
                                    Canada (IEC) (working holiday visa)</a></li>

                            <li><a href="javascript:void(0)" class="text-red-600 underline">Bridging Open Work Permit
                                    (BOWP)</a></li>

                            <li><a href="javascript:void(0)" class="text-red-600 underline">Spouse Accompanying
                                    International Student or Worker</a></li>

                        </ul>

                    </div>
                    <div class="px-4 py-4 rounded-lg border border-gray-300 max-w-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
                        </svg>
                        <p class="max-w-xl">
                            Canadian permanent residents do not require a work permit to work in Canada. Permanent
                            resident status gives a person the legal right to live and work anywhere in the country.
                            Find out more about permanent immigration options for professional and skilled workers.
                        </p>
                        <p class="mt-6">
                            <a onclick="Livewire.emit('openModal', 'contact-work')"
                                class="inline-flex cursor-pointer text-rose-700 hover:text-rose-800 text-sm uppercase futura-medium rounded-2xl py-3 px-5 border-2 border-rose-700 hover:border-rose-800 hover:bg-white">Contact
                                us to discuss your work permit needs.</a>
                        </p>
                    </div>
                </div>

            </div>
            {{-- How to obtain a Canadian work permit --}}
            <div class="mt-16 md:mt-24" id="How-to-obtain-a-Canadian-work-permit">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">How to obtain a Canadian work permit</h2>

                <div class="">

                    <p class="mb-4">The process for obtaining a Canadian work permit varies greatly depending on
                        which type of work permit a person is applying for. For example, an international student
                        studying in Canada will oftentimes be automatically issued authorization to work part-time as
                        part of their study permit authorization.

                    </p>

                    <p class="mb-4">Most closed work permit applications require that a foreign national has an
                        official job offer from a Canadian employer which is supported by a Labour Market Impact
                        Assessment (LMIA). Even those who are LMIA-exempt or exempt from requiring a work permit should
                        be aware of the unique documentation they need to prepare in order to ensure they are granted
                        entry to Canada. There are two general pathways for obtaining a Canadian work permit: a closed
                        (restricted) work permit and an open work permit.</p>

                    <p class="mb-4">Closed work permits are tied to specific employers, this means that a foreign
                        national issued a closed work permit must remain working with the same employer at the same
                        location unless they change their work permit.</p>

                </div>

            </div>
            {{-- If-I-have-a-Canadian-job-offer,am-I-eligible-to-apply-for-a-work-permit --}}
            <div class="mt-16 md:mt-24" id="If-I-have-a-Canadian-job-offer,am-I-eligible-to-apply-for-a-work-permit">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">If I have a Canadian job offer, am I
                    eligible to apply for a work permit?</h2>

                <div class="">

                    <p class="mb-4">Having a Canadian job offer does not necessarily mean you are eligible to apply
                        for a work permit. A job offer must meet certain requirements to be considered valid for certain
                        work permit applications.

                    </p>

                    <p class="mb-4">It is important to note that the province of Quebec has its own process for
                        determining the validity of an offer of employment.</p>

                    <div class="">

                        <p class="py-2 font-bold text-lg">

                            In most cases, in order to be eligible for a work permit, an applicant’s job offer must be
                            either:

                        </p>

                        <ul class="ml-4 list-decimal space-y-2" role="list">

                            <li>Supported by a positive Labour Market Impact Assessment (LMIA);</li>

                            <li>Exempt from requiring an LMIA.</li>

                        </ul>

                    </div>

                </div>

            </div>
            {{-- What-am-I-allowed-to-do-on-a-Canadian-work-permit --}}
            <div class="mt-16 md:mt-24" id="What-am-I-allowed-to-do-on-a-Canadian-work-permit">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">What am I allowed to do on a Canadian
                    work permit?</h2>

                <div class="">

                    <p class="mb-4">Your physical work permit outlines the specific restrictions attached to your

                        authorization. These limitations will mainly be determined by the type of work permit you

                        are eligible for. Conditions may include the type of work you can engage in, where and for

                        whom you can work, and how long you can work in Canada. All work permit holders are

                        prohibited from working at a business where is are grounds to suspect a risk of sexual

                        exploitations of some workers.

                    </p>

                    <p class="mb-4">Work permit holders are not permanent residents of Canada and must leave the

                        country by the end of their authorized stay. However, if you are working in Canada and would

                        like to remain permanently, <a href="{{ route('business_assessment') }}"
                            class="text-red-600 underline">complete our free assessment form</a> to receive a full

                        evaluation of your immigration options.</p>

                </div>

            </div>

            {{-- Can my family be included on my work permit application? --}}
            <div class="mt-16 md:mt-24" id="Can-my-family-be-included-on-my-work-permit-application">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Can my family be included on my work
                    permit application?</h2>

                <div class="">

                    <p class="mb-4">If you are applying for an employer-supported work permit, you may be eligible to

                        have your spouse and dependent children accompany you to Canada.

                    </p>

                    <p class="mb-4">If your children are school-aged and are in Canada, they may attend Canadian

                        educational institutions without requiring a separate study permit. Your spouse or partner

                        may also be eligible to apply for an open work permit, allowing them to work for any employer

                        in Canada.

                    </p>

                </div>

            </div>

            {{-- How-much-does-a-Canadian-work-permit-cost --}}
            <div class="mt-16 md:mt-24" id="How-much-does-a-Canadian-work-permit-cost">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">How much does a Canadian work permit
                    cost?</h2>

                <div class="">

                    <p class="mb-4">The processing fee for a closed work permit is $155 CAD per person or $255 per

                        person for an open work permit. If you are restoring a work permit or applying as a group of

                        performing artists, additional fees will apply.

                    </p>

                </div>

            </div>

            {{-- How-do-I-apply-for-a-Canadian-work-permit --}}
            <div class="mt-16 md:mt-24" id="How-do-I-apply-for-a-Canadian-work-permit">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">How do I apply for a Canadian work
                    permit?</h2>

                <div class="">

                    <p class="mb-4">The application procedure is different depending on which type of work permit

                        you need. The first step is determining which work permit is best for you. If you need help

                        figuring out the application, simply <a onclick="Livewire.emit('openModal', 'contact-work')"
                            class="text-red-600 underline hover:cursor-pointer">contact us</a> and a member of our team
                        will assist you with

                        scheduling a consultation.

                    </p>

                </div>

            </div>

            {{-- What documents are required to apply for a Canadian work permit? --}}
            <div class="mt-16 md:mt-24" id="What-documents-are-required-to-apply-for-a-Canadian-work-permit">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">What documents are required to apply for
                    a Canadian work permit?</h2>

                <div class="">

                    <p class="py-2 futura-medium text-lg">

                        The documents required for a Canadian work permit will depend on the type of work permit you are
                        applying for. Applicants may need to provide the following documents as part of their work
                        permit application:

                    </p>

                    <ul class="ml-4 space-y-2 list-disc" role="list">

                        <li>Completed application forms</li>

                        <li>Proof of status in Canada (if applicable)</li>

                        <li>Family member’s proof of status (if applicable)</li>

                        <li>Labour Market Impact Assessment (if applicable)</li>

                        <li>Written offer of employment (if applicable)</li>

                        <li>CV/ résumé</li>

                        <li>Marriage certificate (if applicable)</li>

                        <li>Certificat d’acceptation du Québec (CAQ) (if applicable)</li>

                        <li>Proof that you meet the job requirements</li>

                        <li>Valid copy of your passport</li>

                        <li>Copy of education credential</li>

                        <li>Medical exam results (if requested)</li>

                        <li>Evidence of financial means to stay in Canada and return to home country</li>

                        <li>Proof of payment for applicable government fees</li>

                        <li>Recent passport-sized photos</li>

                    </ul>

                </div>

            </div>

            {{-- Biometrics for Canadian work permits --}}
            <div class="mt-16 md:mt-24" id="Biometrics-for-Canadian-work-permits">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Biometrics for Canadian work permits</h2>

                <div class="">

                    <p class="mb-4">IRCC currently has a temporary measure in place that exempts applicants applying
                        for a work permit from within Canada. Candidates outside of Canada are still required to provide
                        biometrics upon receiving a biometrics instruction letter.

                    </p>

                    <p class="mb-4"><a
                            href="https://www.canada.ca/en/immigration-refugees-citizenship/campaigns/biometrics/how-to-give-biometrics.html"
                            class="text-red-600 underline">Follow the government of Canada’s instructions for how to
                            give your biometrics on their dedicated page.</a></p>

                </div>

            </div>

            {{-- Police clearances for Canadian work permits --}}
            <div class="mt-16 md:mt-24" id="Police-clearances-for-Canadian-work-permits">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Police clearances for Canadian work
                    permits</h2>

                <div class="">

                    <p class="mb-4">The visa officer reviewing your application may ask you to provide police
                        clearances certificates. Depending on where you are applying from, this document may be part of
                        your application checklist and must be provided with your initial submission.

                    </p>

                    <p class="mb-4">Work permit applicants may be required to provide a police clearance certificate
                        from any country that they have lived in for 6 months or more past the age of 18.</p>

                </div>

            </div>

            {{-- Medical exam for Canadian work permit --}}
            <div class="mt-16 md:mt-24" id="Medical-exam-for-Canadian-work-permit">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Medical exam for Canadian work permit
                </h2>

                <div class="">

                    <p class="mb-4">Foreign nationals that apply to work in Canada may need to complete a medical
                        exam, depending on their intended length of stay, where they have lived, and what occupation
                        they will work in.

                    </p>

                    <p class="mb-4">If you intend to work in Canada for less than 6 months, you will likely not
                        require a medical exam, with some exceptions. In the case that you intend to work in a job that
                        brings you into close contact with people or are an agricultural worker that has been to certain
                        countries, you will need a medical exam.</p>

                    <div class="">

                        <p class="py-2 font-bold text-lg">

                            If you are planning to work in Canada for longer than 6 months, you will be required to take
                            a medical exam if one of the following conditions applies:

                        </p>

                        <ul class="ml-4 space-y-2 list-decimal" role="list">

                            <li>You have lived in or travelled to one of the countries listed on Canada’s ‘Find out if
                                you need a medical exam’ page for 6-months or longer, or</li>

                            <li>You intend to work in an occupation where you will be in close contact with people
                                listed in the above-mentioned hyperlink</li>

                        </ul>

                        <p class="mt-4">Medical exams must be completed with a panel physician designated by IRCC.
                            You can find a panel physician near you on IRCC’s Find a Panel Physician webpage.</p>

                        <p class="mt-4">Applicants have the option to take an upfront medical exam. This involves
                            contacting the panel physician directly and taking the exam prior to submitting a work
                            permit application. If you do not provide your medical exam results with your application,
                            the IRCC officer will send instructions on how to complete the medical exam and provide a
                            deadline for when it needs to be completed.</p>

                    </div>

                </div>

            </div>

            {{-- Photo-requirements-for-Canadian-work-permit --}}
            <div class="mt-16 md:mt-24" id="Photo-requirements-for-Canadian-work-permit">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Photo requirements for Canadian work
                    permit</h2>

                <div class="">

                    <p class="mb-4">Foreign nationals applying for a Canadian work permit must provide a
                        passport-sized photo with their application. The photo must be according to <a
                            href="https://www.canada.ca/content/dam/ircc/migration/ircc/english/pdf/photospecs-e.pdf"
                            class="text-red-600 underline">IRCC’s specifications</a>.

                    </p>

                </div>

            </div>

            {{-- How-long-will-it-take-to-process-my-work-permit-application --}}
            <div class="mt-16 md:mt-24" id="How-long-will-it-take-to-process-my-work-permit-application">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">How long will it take to process my work
                    permit application?</h2>

                <div class="">

                    <p class="mb-4">The processing time for a work permit application depends on the type of work
                        permit and the applicant’s country of residence at the time of application. Processing times
                        range anywhere from a few weeks to several months.

                    </p>

                </div>

            </div>

            {{-- How long will it take to process my LMIA application? --}}
            <div class="mt-16 md:mt-24" id="How-long-will-it-take-to-process-my-LMIA-application">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">How long will it take to process my LMIA
                    application?</h2>

                <div class="">

                    <p class="mb-4">There are two types of <a href="javascript:void(0)"
                            class="text-red-600 underline">

                            Labour Market Impact Assessment (LMIA)</a> applications: a regular LMIA and a simplified
                        LMIA.

                        The simplified LMIA is only available in the province of Quebec. The regular LMIA is

                        processed on a case-by-case basis with processing times varying greatly from applicant to

                        applicant. Generally, it takes a minimum of five months to receive a response on a regular

                        LMIA application.

                        <br><br>

                        If an employer is eligible for Canada’s <a href="javascript:void(0)"
                            class="text-red-600 underline">

                            Global Talent Stream</a>, they may qualify for expedited LMIA processing. The simplified

                        LMIA completed for Quebec employment is usually processed in approximately two to three

                        months.

                    </p>

                </div>

            </div>

            {{-- What-is-the-rate-of-success-for-work-permit-LMI-applications --}}
            <div class="mt-16 md:mt-24" id="What-is-the-rate-of-success-for-work-permit-LMI-applications">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">What is the rate of success for work
                    permit/LMIA applications?</h2>

                <div class="mb-6 md:mb-8">

                    <p>It is impossible to give a rate of success for work permit/LMIA applications, as

                        all applications are processed on a case-by-case basis. If an applicant meets the

                        requirements of the LMIA, their application should be approved. However, applications are

                        assessed by individual officers, each exercising their own discretion in choosing whether or

                        not to approve a work permit application.

                    </p>                    
                </div>
                <div class="py-6">
                    <x-link-one href="{{ route('business_assessment') }}">Find out if you are eligible</x-link-one>
                </div>

            </div>

            {{-- work permit options --}}
            <div class="md:hidden mt-16">
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
                        <a href="{{ route('sponsorship_immigration') }}"
                            class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                            Sponsorship visa
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
                        <a href="{{ route('business_immigration') }}"
                            class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                            Business Visa
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
                    <li>
                        <a href="{{ route('work_faqs') }}"
                            class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                            Work permit FAQs
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

            {{-- How can I check the status of my work permit application? --}}
            <div id="How-can-I-check-the-status-of-my-work-permit-application" class="mt-16 md:mt-24">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">How can I check the status of my work
                    permit application?</h2>

                <div class="">

                    <p class="mb-4">If you submitted an online work permit application, you may check the status
                        through your online account. If you submitted a paper-based application, you may check the
                        status by linking it to an <a
                            href="https://www.canada.ca/en/immigration-refugees-citizenship/services/application/account/link-paper-online.html"
                            class="text-red-600 underline">online IRCC account</a>.

                    </p>

                </div>

            </div>

            {{-- Reasons-a-work-permit-application-is-refused --}}
            <div class="mt-16 md:mt-24" id="Reasons-a-work-permit-application-is-refused">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Reasons a work permit application is
                    refused</h2>

                <div class="">

                    <p class="mb-4">Receiving a work permit refusal can be devasting. There are many reasons a work
                        permit can be refused. If it is unclear why your application was refused, applying for GCMS
                        notes may help get a better idea, and can help address the officer’s concerns if you decide to
                        reapply.

                    </p>

                    <div class="">

                        <p class="py-2 futura-medium text-xl text-gray-700">

                            Here are some common reasons for a work permit refusal:

                        </p>

                        <ul class="md:w-[80%] ml-4 space-y-2" role="list">

                            <li>The officer was not convinced that you could adequately perform your intended work;</li>

                            <li>The officer was not convinced that you would return to your home country at the end of
                                your authorized stay in Canada;</li>

                            <li>You do not meet the criteria for the work permit you applied for</li>

                        </ul>

                    </div>

                </div>

            </div>

            {{-- How-can-I-include-my-spouse-and-dependents-on-my-work-permit-application --}}
            <div class="mt-16 md:mt-24" id="How-can-I-include-my-spouse-and-dependents-on-my-work-permit-application">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">How can I include my spouse and
                    dependents on my work permit application?</h2>

                <div class="">

                    <p class="mb-4">If you are applying for a closed Canadian work permit, your spouse may be
                        eligible for an open work permit.

                        <br>If your spouse is eligible, they will need to apply for their own work permit. In most
                        cases, they must apply for this permit online.

                    </p>

                </div>

            </div>

            {{-- How do I activate my work permit? --}}
            <div class="mt-16" id="How-do-I-activate-my-work-permit">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">How do I activate my work permit?</h2>

                <div class="">

                    <p class="mb-4">How you activate your work permit will depend on where you are applying from and
                        how you are applying.

                    </p>

                    <div class="">

                        <p class="py-2 futura-medium text-xl text-gray-700">

                            1. Activating your work permit after applying from within Canada

                        </p>

                        <p class=" mt-4">If your application is approved after applying for a work permit from within
                            Canada, you will receive an approval letter from IRCC. In the case that you applied online,
                            the approval letter will appear in your account. If you submitted a paper-based application,
                            the letter would arrive at your mailing address. Once you have received your approval
                            letter, your physical work permit will arrive by mail. The permit will arrive already
                            activated and you can use it to work in Canada.

                        </p>

                    </div>

                    <div class="mt-4">

                        <p class="py-2 futura-medium text-xl text-gray-700">

                            2. Activating your work permit after applying from outside Canada

                        </p>

                        <p class="mt-4">If your application is approved after applying from outside of Canada, you
                            will receive a letter with instructions on how to obtain your physical work permit at the
                            Canadian port of entry (POE). In the case that you applied online, the instruction letter
                            will appear on your online account. If you applied on paper, you would receive the letter to
                            your mailing address.

                        </p>

                    </div>

                    <div class="mt-4">

                        <p class="py-2 futura-medium text-xl text-gray-700">

                            3. Activating your work permit after applying from the port of entry

                        </p>

                        <p class=" mt-4">Certain applicants may be eligible to apply for a work permit at the port of
                            entry to Canada. If you are applying for a work permit at the border, you will need to bring
                            documents that support your eligibility. If approved, the officer may print the work permit
                            right away at the border. This work permit can be used right away.

                        </p>

                    </div>

                </div>

            </div>

            {{-- How to find a job in Canada --}}
            <div class="mt-16" id="How-to-find-a-job-in-Canada">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">How to find a job in Canada</h2>

                <div class="">

                    <p class="mb-4">It may feel daunting to begin the search for employment in Canada. Thankfully,
                        there are many resources for those seeking an official job offer from a Canadian employer. When
                        beginning the job hunt, we recommend making use of Canadim’s job hunt resources, listed below.
                        Be sure to take the time to prepare your resume and tailor your social media presence before
                        sending out any applications!

                    </p>

                    <ul class="mb-4 list-disc ml-4">

                        <li><a href="javascript:void(0)" class="text-red-600 underline">Canadian Resume Guide</a></li>

                        <li><a href="javascript:void(0)" class="text-red-600 underline">Social Media Presence
                                Guide</a></li>

                    </ul>

                    <p class="mb-4">Certain positions in Canada may require a person to know their <a
                            href="javascript:void(0)" class="text-red-600 underline">National Occupation
                            Classification Code (NOC Code)</a>. This code is used to classify all types of employment by
                        Canadian standards. Canadim has put together a tool to assist with finding your NOC Code as
                        well.</p>

                </div>

            </div>

            {{-- Benefits of working in Canada --}}
            <div class="mt-16" id="Benefits-of-working-in-Canada">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Benefits of working in Canada</h2>

                <div class="">

                    <p class="mb-4">Working in Canada has many benefits. Canadian labour laws ensure that workplaces
                        have a high-degree of safety and that all employers follow certain laws and regulations to
                        ensure the well being of their employees. As well, Canadian wages are competitive and foreign
                        nationals are required, by law, to be offered wages equivalent to their Canadian counterparts.

                    </p>

                    <p class="mb-4">Finally, some Canadian work permits enable the spouse and children of workers to

                        accompany them to Canada. Another significant benefit for those interested in immigrating to

                        Canada permanently is that by gaining Canadian work experience, a foreign national may

                        increase their eligibility for a number of Canadian permanent residency programs. The

                        following programs award value, in varying degrees, for Canadian work experience:</p>

                    <ul class="ml-4 list-disc space-y-2" role="list">

                        <li>

                            <p class="mb-4"><a href="{{ route('express_entry') }}"
                                    class="text-red-600 underline">Express Entry</a></p>

                            <ul class="list-disc ml-4 space-y-2" role="list">

                                <li>Canadian Experience Class (CEC)</li>

                                <li>Federal Skilled Worker (FSW)</li>

                                <li>Federal Skilled Trades (FST)</li>

                            </ul>

                        </li>

                        <li><a href="{{ route('PNP') }}" class="text-red-600 underline">Provincial Nominee Programs
                                (PNPs)</a></li>

                        <li><a href="{{ route('quebec') }}" class="text-red-600 underline">Quebec Immigration
                                Programs</a></li>

                        <li><a href="{{ route('atlantic_immigration') }}" class="text-red-600 underline">Atlantic
                                Immigration Pilot Program</a></li>

                    </ul>

                </div>

            </div>

            {{-- How can I extend my work permit? --}}
            <div class="mt-16" id="How-can-I-extend-my-work-permit">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">How can I extend my work permit?</h2>

                <div class="">

                    <p class="mb-4">Generally, temporary foreign workers that are eligible to extend their work
                        permit must apply online. If you plan to extend your work permit, it is recommended to do so at
                        least 30 days before the expiry date of your current permit. While this is a recommendation,
                        technically an applicant has until the last day of expiry to apply for the extension request.

                        <br><br>{{config('app.name')}} is going to help find solutions to every request, <a
                            onclick="Livewire.emit('openModal','contact-work')"
                            class="hover:cursor-pointer text-red-600 underline">Contact us now.</a>

                    </p>

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
                                Canadian Experience Class
                            </h3>                                    
                            <a class="group inline-flex items-center h-9 rounded-full text-sm font-semibold whitespace-nowrap px-3 focus:outline-none focus:ring-2 bg-rose-100 text-rose-700 hover:bg-rose-200 hover:text-rose-900 focus:ring-rose-500 mt-6"
                                href="{{ route('cec') }}">Learn
                                more
                                <svg class="overflow-visible ml-3 text-rose-300 group-hover:text-rose-400"
                                    width="3" height="6" viewBox="0 0 3 6" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M0 0L3 3L0 6"></path>
                                </svg>
                            </a>
                        </div>
                        <img src="{{asset('images/cec.jpg')}}" alt="" class="mb-6 shadow-md rounded-lg bg-rose-50 w-full sm:w-[17rem] sm:mb-0 xl:mb-6 xl:w-full" width="1216" height="640">
                    </li>
                    <li class="relative flex flex-col sm:flex-row xl:flex-col items-start">
                        <div class="order-1 sm:ml-6 xl:ml-0">
                            <h3 class="mb-1 text-gray-700 futura-medium">
                                Become a citizen in Canada
                            </h3>                                    
                            <a class="group inline-flex items-center h-9 rounded-full text-sm font-semibold whitespace-nowrap px-3 focus:outline-none focus:ring-2 bg-rose-100 text-rose-700 hover:bg-rose-200 hover:text-rose-900 focus:ring-rose-500 mt-6"
                                href="{{ route('citizenship') }}">Learn
                                more
                                <svg class="overflow-visible ml-3 text-rose-300 group-hover:text-rose-400"
                                    width="3" height="6" viewBox="0 0 3 6" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M0 0L3 3L0 6"></path>
                                </svg>
                            </a>
                        </div>
                        <img src="{{asset('images/citizens.jpg')}}" alt="" class="mb-6 shadow-md rounded-lg bg-rose-50 w-full sm:w-[17rem] sm:mb-0 xl:mb-6 xl:w-full" width="1216" height="640">
                    </li>
                </ul>                        
            </div>
        </div>
        {{-- aside --}}
        <div
            class="hidden md:block col-span-4 lg:col-span-1 px-4 md:px-6 bg-gradient-to-b from-gray-200 from-[5vh] via-gray-100 via-[65vh] to-gray-50">
            <p class="text-gray-700 text-xl mt-4 futura-medium mb-6">
                Canada immigration options
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
                    <a href="{{ route('sponsorship_immigration') }}"
                        class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                        Sponsorship visa
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
                    <a href="{{ route('business_immigration') }}"
                        class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                        Business Visa
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
                <li>
                    <a href="{{ route('work_faqs') }}"
                        class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                        Work permit FAQs
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
                Evaluate your eligibilty for work permit visa using our free tool to know your immigration status.
            </p>
            <div class="py-6">
                <x-link-one href="{{ route('business_assessment') }}">Work visa assessment</x-link-one>
            </div>
        </div>
    </section>
</x-app-layout>

<script>
    Livewire.on('contactedWork', (e) => {
        toastr.success('Successfully contacted Work permit team')
    })
</script>
