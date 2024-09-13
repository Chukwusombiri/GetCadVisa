<x-app-layout>
    {{-- breadcrumb --}}
    <x-breadcrumb>
        <x-slot:topic>immigration</x-slot>
        <x-slot:subtopic>Citizenship</x-slot>
    </x-breadcrumb>
    {{-- HEADER --}}
    <x-header>
        <x-slot:maintitle>Canadian Citizenship</x-slot>
        <x-slot:subtitle>Become a canadian citizen today. Learn more about Canadian Citizenship eligibity</x-slot>
    </x-header>
    {{-- INTRO --}}
    <section class="pt-20 pb-10 lg:pt-[120px] lg:pb-20 bg-gray-100">
        <div class="grid grid-cols-4 gap-4 md:gap-6 lg:gap-10 px-4 md:px-6 lg:px-10">
            {{-- citizenship intro --}}
            <div class="col-span-4 md:col-span-2 px-4">
                <h2 class="hedvig-regular text-gray-800 mb-6 md:mb-8 text-4xl md:text-5xl ">
                    Apply for Canadian Citizenship
                </h2>
                <p class="text-gray-600 text-lg">
                    Many Canadian permanent residents who have weathered the immigration process look forward to being
                    granted citizenship
                    and are eager for the day they can be sworn in as official Canadian citizens. Before that day comes,
                    there are a few
                    final steps that need to be addressed before Immigration, Refugees, Citizenship Canada (IRCC)
                    approves their
                    Canadian citizenship application.
                </p>
                <p class="text-gray-600 text-lg mt-2">
                    There are many benefits to becoming a Canadian citizen including the right to settle permanently in
                    one of the world's
                    most prosperous countries, participate in the country's democracy, and possess one of the world's
                    strongest passports.
                </p>
            </div>

            {{-- citizenship options --}}
            <div class="col-span-4 md:col-span-2 px-4">
                <p class="text-gray-600 text-xl mt-4">
                    Explore Canada Immigration program options
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
                        <a href="{{ route('citizenship_faqs') }}"
                            class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                            Canadian citizenship FAQs
                            <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li>
                </ul>

                <p class="text-gray-600 text-xl mt-4">
                    Our free visa <a href="{{ route('assessment') }}"
                        class="text-rose-700 underline futura-medium tracking-wide">assessment tool</a> helps your know
                    your eligibility status for a canadian visa. Use the button below to instantly contact our Customer
                    support team.
                </p>

                <div class="flex justify-start gap-x-4 mt-6 md:mt-8">
                    <a onclick="Livewire.emit('openModal','contact-citizenship')"
                        href="{{ route('sponsorship_assessment') }}"
                        class="inline-flex cursor-pointer text-rose-700 hover:text-rose-800 text-sm uppercase futura-medium rounded-2xl py-3 px-5 border-2 border-rose-700 hover:border-rose-800 hover:bg-white">
                        Instant Consultation
                    </a>
                </div>

            </div>

        </div>

    </section>

    {{-- Table of content --}}
    <section class="pt-20 lg:pt-[120px] bg-gray-50">

        <div class="mx-4 md:mx-6 lg:mx-10 border-b border-gray-300 pb-16 grid grid-cols-4 gap-4 md:gap-6 lg:gap-10">

            <div class="col-span-4 md:col-span-2">

                {{-- table of content --}}

                <div class="">

                    <p class="py-2 futura-medium text-xl text-gray-700">Overview of Canadian Citizenship</p>

                    <ul class="ml-4 space-y-2 mb-4" role="list">

                        <li><a href="{{ route('citizenship') . '#How-to-get-Canadian-citizenship' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />

                                    </svg>

                                </span><span class="underline">How to get Canadian citizenship</span></a></li>

                        <li><a href="{{ route('citizenship') . '#When-to-apply-for-Canadian-citizenship' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />

                                    </svg>

                                </span><span class="underline">When to apply for Canadian citizenship</span></a></li>

                        <li><a href="{{ route('citizenship') . '#How-to-apply-for-Canadian-citizenship' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />

                                    </svg>

                                </span><span class="underline">How to apply for Canadian citizenship</span></a></li>

                        <li><a href="{{ route('citizenship') . '#Canadian-citizenship-test' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />

                                    </svg>

                                </span><span class="underline">Canadian citizenship test</span></a></li>

                        <li><a href="{{ route('citizenship') . '#Canadian-citizenship-ceremony' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />

                                    </svg>

                                </span><span class="underline">Canadian citizenship ceremony </span></a></li>

                        <li><a href="{{ route('citizenship') . '#Canadian-citizenship-cost' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />

                                    </svg>

                                </span><span class="underline">Canadian citizenship cost</span></a></li>

                        <li><a href="{{ route('citizenship') . '#Canadian-citizenship-application-processing-time' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />

                                    </svg>

                                </span><span class="underline">Canadian citizenship application processing
                                    time</span></a></li>

                        <li><a href="{{ route('citizenship') . '#Language-test-for-Canadian-citizenship' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />

                                    </svg>

                                </span><span class="underline">Language test for Canadian citizenship</span></a></li>

                        <li><a href="{{ route('citizenship') . '#Proving-Canadian-citizenship' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />

                                    </svg>

                                </span><span class="underline">Proving Canadian citizenship</span></a></li>

                        <li><a href="{{ route('citizenship') . '#Canadian-citizenship-benefits' }}"
                                class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />

                                    </svg>

                                </span><span class="underline">Canadian citizenship benefits</span></a></li>

                    </ul>

                </div>

            </div>

            {{-- citizenship options --}}

            <div class="col-span-4 md:col-span-2">

                <img src="/images/citizens.jpg" alt="" class="w-full h-auto rounded-xl">

            </div>

        </div>

    </section>

    {{-- main content --}}
    <section class="pt-20 pb-10 lg:pb-20 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 md:px-6 lg:px-10 text-gray-600">

            {{-- How-to-get-Canadian-citizenship --}}

            <div id="How-to-get-Canadian-citizenship" class="">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">How to get Canadian citizenship</h2>

                <div class="">

                    <p class="mb-4">To become a Canadian citizen by naturalization, one must first immigrate to
                        Canada as a permanent

                        resident. As with all Canadian immigration programs, permanent residents must meet a specific
                        set of

                        requirements to be deemed eligible to apply for citizenship:

                    </p>

                    <p class="py-2 futura-medium text-xl text-gray-700">
                        1. Residency requirements:
                    </p>
                    <p class="">Applicants need to provide proof that they have been living in Canada for three
                        years (1,095 days) out of the five years that precede their signed application with some
                        exceptions. </p>


                    <div class="mt-4 md:mt-6">
                        <p class="py-2 futura-medium text-xl text-gray-700">
                            2. File taxes
                        </p>

                        <p>Citizenship applicants must have filed their taxes in Canada for at least three years during
                            the five-year period before applying. </p>
                    </div>

                    <div class="mt-4 md:mt-6">

                        <p class="py-2 futura-medium text-xl text-gray-700">

                            3. Pass the citizenship test

                        </p>

                        <p>Applicants between the ages of 18 and 54 must take a citizenship test to demonstrate their
                            knowledge of their rights and responsibilities as a Canadian </p>

                    </div>

                    <div class="mt-4 md:mt-6">

                        <p class="py-2 futura-medium text-xl text-gray-700">

                            4. Demonstrate language ability

                        </p>

                        <p>To become a Canadian citizen, applicants must demonstrate a minimum level of French or
                            English. </p>

                    </div>

                </div>

            </div>

            {{-- When-to-apply-for-Canadian-citizenship --}}

            <div class="mt-16 md:mt-24" id="When-to-apply-for-Canadian-citizenship">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">When to apply for Canadian citizenship
                </h2>

                <div class="">

                    <p>Canadian permanent residents must have lived in Canada for at least 1,095 days (three years) out
                        of the past five years before applying for Canadian citizenship (with some exceptions).

                    </p>

                    <p class="mt-2">Permanent residents (PR) must also ensure they meet additional minimum
                        requirements before they are eligible to apply for Canadian citizenship. </p>

                </div>

            </div>

            {{-- How-to-apply-for-Canadian-citizenship --}}

            <div class="mt-16 md:mt-24" id="How-to-apply-for-Canadian-citizenship">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">How to apply for Canadian citizenship
                </h2>
                <p>The Canadian government is currently testing an online platform for Canadian citizenship
                    applications. Currently, it is only available to certain applicants. Those who are not currently
                    eligible to apply online must apply on paper.

                </p>

                <p class="mt-2">Eligible applicants will be required to pass the Canadian citizenship test, and may
                    be asked to undergo an interview before a citizenship judge, if requested by IRCC. Once approved,
                    applicants will attend a Citizenship Ceremony to take the Oath of Citizenship, where they will
                    officially become a Canadian citizen.</p>
            </div>

            {{-- Canadian-citizenship-test --}}

            <div class="mt-16 md:mt-24" id="Canadian-citizenship-test">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Canadian citizenship test</h2>

                <p class="mb-4 md:mb-6">
                    To become a Canadian citizen, applicants must first pass a test on the rights and responsibilities
                    of citizenship. The test is broken down into 20 questions on Canadian history geography, economy,
                    government, laws, and symbols.
                </p>

                <p class="py-2 futura-medium text-xl text-gray-700">
                    When can I take the citizenship test?
                </p>

                <p class="mb-4 md:mb-6">After IRCC has finished processing a citizenship application, applicants are
                    required to take the citizenship exam. Since the COVID-19 pandemic, the citizenship exam is
                    currently offered online only.</p>

                <p class="mt-2 mb-4 md:mb-6">To take the citizenship test online, an applicant must first wait to be
                    invited. Once they have finished processing an application, Immigration, Refugee, Citizenship Canada
                    (IRCC) will issue an invitation to take the citizenship test. After receiving the invitation, an
                    applicant has 21 days to complete the citizenship test. If a citizenship applicant doesn’t pass
                    their first test, IRCC will invite them to take the test again. </p>

                <p class="py-2 futura-medium text-xl text-gray-700">
                    How to study for the Canadian citizenship test
                </p>
                <p class="mt-2 mb-4 md:mb-6">The Canadian government provides a free study guide to help prepare for
                    the citizenship test. Applicants may also call their local school or school board, or a nearby
                    immigration settlement service provider to ask for information on free citizenship classes. </p>

                <p class="py-2 futura-medium text-xl text-gray-700">
                    Canadian citizenship test exemptions
                </p>
                <p class="mt-2">Citizenship applicants under the ages of 18, or over the ages of 54 at the time of
                    signing the application are exempt from the citizenship test requirement.</p>
            </div>

            {{-- Canadian-citizenship-ceremony --}}

            <div class="mt-16 md:mt-24" id="Canadian-citizenship-ceremony">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Canadian citizenship ceremony</h2>


                <p class="mt-2">

                    The final step of becoming a Canadian citizen is the citizenship ceremony. At this ceremony,
                    soon-to-be citizens take the Oath of Citizenship.

                </p>

                <p class="mt-2">The Canadian government will issue a Notice to Appear, which is essentially an
                    invitation to take the oath at a citizenship ceremony. The Oath of Citizenship confirms one’s
                    agreeance to abide by Canadian rights and responsibilities. </p>

            </div>

            {{-- Canadian-citizenship-cost --}}

            <div class="mt-16 md:mt-24" id="Canadian-citizenship-cost">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Canadian citizenship cost</h2>

                <p class="mb-4 md:mb-6">

                    Canadian citizenship costs for a single applicant are $630 CAD per adult and $100 CAD per child,
                    broken down as follows:

                </p>
                <ul class="ml-4 space-y-2 list-decimal" role="list">

                    <li>Processing fees: $530/adult & $100/child </li>

                    <li>Right of Citizenship fee: $100/adult </li>

                </ul>
            </div>

            {{-- Canadian-citizenship-application-processing-time --}}

            <div class="mt-16 md:mt-24" id="Canadian-citizenship-application-processing-time">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Canadian citizenship application
                    processing time</h2>

                <p>

                    The processing time for a citizenship application may vary depending on when the application was
                    submitted

                    and the complexity of the application. To check the average processing time of an application,

                    <a href="https://www.canada.ca/en/immigration-refugees-citizenship/services/application/check-processing-times.html"
                        class="text-rose-700 underline">visit IRCC’s dedicated webpage</a>.

                </p>

            </div>

            {{-- Language-test-for-Canadian-citizenship --}}

            <div class="mt-16 md:mt-24" id="Language-test-for-Canadian-citizenship">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Language test for Canadian citizenship
                </h2>
                <p class="mb-4 md:mb-6">

                    When applying for Canadian citizenship, individuals must provide proof of sufficient proficiency in
                    English

                    or French. Proof of language ability can be demonstrated through the following third-party test
                    results from

                    organizations:

                </p>

                <ul class="ml-4 space-y-2 list-decimal" role="list">

                    <li>Canadian English Language Proficiency Index Program (CELPIP) – CELPIP General, CELPIP General-LS
                    </li>

                    <li>International English Language Testing System (IELTS) – General training </li>

                    <li>Test d’Évaluation de Français (TEF) (in French) </li>

                    <li>Test d’Évaluation de Français (TEFAQ) (in French) </li>

                    <li>TEF pour la naturalisation: a 2 skills (listening and speaking) version </li>

                </ul>

                <p class="mt-4 md:mt-6">Proof of language proficiency may also be demonstrated by test results
                    previously submitted for Quebec immigration. </p>

                <p class="mt-2">Applicants who are younger than 18 or older than 54 are not required to demonstrate
                    language proficiency. </p>
            </div>

            {{-- Proving-Canadian-citizenship --}}

            <div class="mt-16 md:mt-24" id="Proving-Canadian-citizenship">
                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Proving Canadian citizenship</h2>
                <p>
                    Upon becoming a naturalized Canadian, citizens are granted a Canadian citizenship certificate. This
                    document can be used as proof of citizenship when applying for a Canadian passport.
                </p>
            </div>

            {{-- Canadian-citizenship-benefits --}}

            <div class="mt-16 md:mt-24" id="Canadian-citizenship-benefits">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Canadian citizenship benefits</h2>

                <p>

                    Permanent residents benefit from many of the same resources as those with citizenship status. They
                    have access to publicly funded schools and healthcare, can live and work anywhere in Canada, and
                    their civil liberties are protected under Canadian law and by the Canadian Charter of Rights and
                    Freedoms.

                </p>

                <p class="mt-2">However, becoming a Canadian citizen has its perks. Here are five things permanent
                    residents can only do once they become citizens:</p>



                <div class="mt-4 md:mt-6">

                    <p class="py-2 futura-medium text-xl text-gray-700">

                        1. Vote

                    </p>

                    <p class="">Canada operates as a parliamentary democracy. At every federal election, every
                        Canadian citizen over the age of 18 can cast a ballot to vote for our Prime Minister. But in
                        addition to federal elections, there are also regular provincial and municipal elections that
                        citizens can vote in. </p>

                    <p class="mt-2">Voting gives citizens a say in who runs their country, province, territory, and
                        town. This is a major benefit and responsibility of Canadian citizenship.</p>

                </div>

                <div class="mt-4 md:mt-6">

                    <p class="py-2 futura-medium text-xl text-gray-700">

                        2. Run for office

                    </p>

                    <p>Canadian citizens can also run for office. Interested citizens can run in municipal, provincial,
                        or federal elections. </p>

                    <p class="mt-2">There are several major political parties in Canada. Citizens interested in
                        getting involved in politics, can join a youth wing, or run as an independent candidate.</p>

                </div>

                <div class="mt-4 md:mt-6">

                    <p class="py-2 futura-medium text-xl text-gray-700">

                        3. Travel freely

                    </p>

                    <p>Canadian citizens can apply to get a Canadian passport. Unlike PR cards, passports only need to
                        be renewed every 5-10 years. </p>

                    <p class="mt-2">The Canadian passport is ranked among the best in the world. With a Canadian
                        passport, citizens can travel to a number of countries around the world without needing a visa.
                        A Canadian passport will also allow citizens to re-enter the country more easily than a
                        permanent resident travel document.</p>

                </div>

                <div class="mt-4 md:mt-6">

                    <p class="py-2 futura-medium text-xl text-gray-700">

                        4. Pass on citizenship to kids

                    </p>

                    <p>The children of first-generation Canadian citizens, whether that child is born in Canada or not,
                        will automatically be Canadian citizens. This means they can benefit from their parent’s status
                        without going through the same process of applying for Canadian citizenship. </p>

                    <p class="mt-2">The child of permanent residents, on the other hand, will be a Canadian
                        citizen only if that child is born in Canada. If the child of a permanent resident is born
                        abroad, their parents will have to sponsor them.</p>

                </div>

                <div class="mt-4 md:mt-6">

                    <p class="py-2 futura-medium text-xl text-gray-700">

                        5. Live anywhere in the world

                    </p>

                    <p class="mt-2">Canadian citizens are free to live anywhere in the world for as long as they like
                        without losing their citizenship. Unlike permanent residency, there are no residency
                        requirements for Canadian citizens. The only restriction is that Canadians living abroad for a
                        period of more than five years lose the right to vote in federal elections. </p>

                </div>
            </div>

        </div>
    </section>
</x-app-layout>

<script>
    Livewire.on('contactedCitizenship', (e) => {

        toastr.success('Successfully contacted Citizenship team')

    })
</script>
