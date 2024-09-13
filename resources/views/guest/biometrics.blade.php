<x-app-layout>
    {{-- breadcrumb --}}
    <x-breadcrumb>
        <x-slot:topic>immigration</x-slot>
        <x-slot:subtopic>Biometrics</x-slot>
    </x-breadcrumb>
    {{-- header --}}
    <x-side-image-header :url="route('contact')" :source="asset('images/biometric.jpg')" button-text="Contact us for enquiries">
        <x-slot:maintitle>Biometrics For Canada immigration</x-slot>
        <x-slot:subtitle>Discover all the requirements needed for your immgration to Canada and how to submit the
            required information</x-slot>
    </x-side-image-header>
    <!-- Page Content -->
    <div class="container mx-auto px-4 py-8">

        <div class="flex flex-col lg:flex-row gap-y-8">

            <div class="lg:w-3/4 pr-8">

                <h1 class="text-3xl font-bold mb-4">Canada’s Biometrics Visa Requirements: Fingerprints and a Photo</h1>

                <p class="text-gray-600 mb-4 text-xl">Canada's expanded biometrics requirements mean everyone interested
                    in applying for a visitor visa, work or study permit, a permanent residence visa, or claiming
                    refugee/asylum status will need to review whether or not they are required to submit biometrics
                    (fingerprints and a photo).</p>

                <p class="mb-4 text-gray-600">Through the collection of biometric data, the Government of Canada is able
                    to process applications more efficiently and streamline the entry of low-risk travellers into
                    Canada.</p>


                <h2 class="text-xl font-bold mb-4 text-gray-700">Table of Contents</h2>

                <ul class="mt-2 space-y-2 list-disc w-full md:w-[80%] ml-4 text-red-600" role="list">

                    <li><a href="{{ route('biometrics') . '#Biometrics-Collection-at-Visa-Application-Centres' }}"
                            class="text-red-600">Biometrics Collection at Visa Application Centres</a></li>

                    <li><a href="{{ route('biometrics') . '#Biometrics-for-Permanent-Residence-Applications' }}"
                            class="text-red-600">Biometrics for Permanent Residence Applications</a></li>

                    <li><a href="{{ route('biometrics') . '#Reducing-Application-Delays' }}"
                            class="text-red-600">Reducing
                            Application Delays</a></li>

                    <li><a href="{{ route('biometrics') . '#Applicants-with-Multiple-Citizenships' }}"
                            class="text-red-600">Applicants with Multiple Citizenships</a></li>

                    <li><a href="{{ route('biometrics') . '#In-Canada-Applications' }}" class="text-red-600">In-Canada
                            Applications</a></li>

                    <li><a href="{{ route('biometrics') . '#Exemptions' }}" class="text-red-600">Exemptions</a></li>

                    <li><a href="{{ route('biometrics') . '#Frequently-Asked-Questions' }}"
                            class="text-red-600">Frequently Asked Questions</a></li>

                </ul>

                {{-- Biometrics-Collection-at-Visa-Application-Centres --}}

                <div class="mt-10" id="Biometrics-Collection-at-Visa-Application-Centres">

                    <h3 class="text-dark font-bold text-xl mb-4">Biometrics Collection at Visa Application Centres</h3>

                    <p class="text-gray-600 mb-4">Individuals submitting an application outside Canada for the first
                        time will need to submit their biometrics at a Government of Canada-authorized Visa Application
                        Centre (VAC). To find the VAC that is nearest to you, <a
                            href="https://www.canada.ca/en/immigration-refugees-citizenship/corporate/contact-ircc/offices/find-visa-application-centre.html"
                            class="text-red-600 hover:underline">consult this page</a>.</p>

                    <p class="text-gray-600">Travellers from visa-exempt countries who are coming to Canada as tourists
                        with a valid Electronic Travel Authorization (eTA) will not be required to provide biometrics.
                    </p>

                </div>

                {{-- Biometrics for Permanent Residence Applications --}}

                <div class="mt-10" id="Biometrics-for-Permanent-Residence-Applications">

                    <h3 class="text-dark font-bold text-xl mb-4">Biometrics for Permanent Residence Applications</h3>

                    <p class="text-gray-600">The Government of Canada says anyone applying for permanent residence will
                        need to give their biometrics and pay the fee regardless of whether they have provided
                        biometrics in the past to support a visitor visa, study or work permit application or a
                        different application for permanent residence (<a
                            href="{{ route('biometrics') . '#Exemptions' }}"
                            class="text-red-600 hover:underline">provided they do not meet the requirement for exemption
                            listed below</a>).</p>

                </div>

                {{-- Reducing-Application-Delays --}}

                <div class="mt-10" id="Reducing-Application-Delays">

                    <h3 class="text-dark font-bold text-xl mb-4">Reducing Application Delays</h3>

                    <p class="text-gray-600 mb-2">The Government of Canada provides the following advice for reducing
                        application delays:</p>

                    <ul role="list" class="w-full md:w-[80%] ml-4 list-disc space-y-2 text-gray-600">

                        <li class="text-gray-600">Do not mail in your application. Either apply online or in-person at a
                            Visa Application Centre.</li>

                        <li class="text-gray-600">Pay both the application fee and the biometrics fee when you submit
                            your application.</li>

                        <li class="text-gray-600">Give your biometrics at the same time as you apply at a Visa
                            Application Centre, or within a few days of getting your Biometric Instruction Letter.</li>

                        <li class="text-gray-600">Consider travel time when planning if you need to travel to visit a
                            VAC or Application Support Center (ASC, if applying from the United States) to provide your
                            biometrics.</li>

                        <li class="text-gray-600">If you can, make sure all family members who are applying for a visa
                            go to the same VAC or ASC at the same time to give biometrics.</li>

                        <li>
                            <p class="text-gray-600">If you have a temporary injury or decoration (such as henna) on
                                your face or hands, wait until the injury has healed or the decoration has faded
                                completely before you give your biometrics.</p>

                            <p class="text-gray-600">A temporary injury or medical condition is one that will likely
                                heal or improve over time, and can include:</p>

                            <ul role="list" class="list-disc space-y-2 w-full md:w-[80%] ml-4 text-gray-600">

                                <li class="text-gray-600">bandaged face or fingers due to minor cuts or burns,</li>

                                <li class="text-gray-600">rashes and other temporary skin conditions.</li>

                            </ul>

                        </li>

                        <li class="text-gray-600">If you have a permanent injury or condition on your face or hands, go
                            to a VAC or ASC to have your photograph and any available fingerprints taken. A permanent
                            injury or medical condition is one that will not heal or improve over time. Bring any
                            documentation you have about your condition.</li>

                        <li class="text-gray-600">If you are about to reach your 80th birthday, please note that VACs
                            cannot collect biometrics from applicants 80 years of age and over. If you are 79 years old
                            when you submit your application, but you turn 80 years old before you give your biometrics,
                            you must contact your Canadian visa office to make arrangements to have your biometrics
                            collected there. If you are in the United States, you can still give your biometrics at the
                            nearest US Application Support Centre</li>

                    </ul>

                </div>

                {{-- Applicants-with-Multiple-Citizenships --}}

                <div class="mt-10" id="Applicants-with-Multiple-Citizenships">

                    <h3 class="text-dark font-bold text-xl mb-4">Applicants with Multiple Citizenships</h3>

                    <p class="text-gray-600 mb-2">Applicants with multiple citizenships must use the same travel
                        document (e.g. passport) for the entire application process. This same document should be used
                        when giving biometrics at a Visa Application Centre or at an Application Support Centre (ASC) if
                        you applying from the United States.</p>

                    <p class="text-gray-600">Applicants who have already submitted an application and would like to
                        change the nationality on that application must withdraw the application. To do this, contact
                        the visa office responsible for your country or territory. After doing this, such applicants may
                        submit a new application and pay the applicable fees.</p>

                </div>

                {{-- In-Canada-Applications --}}

                <div class="mt-10" id="In-Canada-Applications">

                    <h3 class="text-dark font-bold text-xl mb-4">In-Canada Applications</h3>

                    <p class="text-gray-600 mb-2">In-person applications are available at specified <a
                            href="http://www.cic.gc.ca/english/information/where-to-give-biometrics.asp"
                            class="text-red-600">Service Canada locations</a> across Canada.</p>

                    <p class="text-gray-600 mb-2">Foreign nationals between ages 14 and 79 must submit biometrics if
                        they are applying within Canada as a:</p>

                    <ul role="list" class="text-gray-600 space-y-2 list-disc w-full md:w-[80%] ml-4 mb-2">

                        <li class="text-gray-600">foreign worker (including work permit extension)</li>

                        <li class="text-gray-600">international student (including study permit extension)</li>

                        <li class="text-gray-600">visa-required visitor (including extending stay)</li>

                        <li class="text-gray-600">permanent resident.</li>

                    </ul>

                    <p class="text-gray-600">

                        Biometrics are required to extend permits and visas if the applicant's previously given
                        biometrics are no longer valid.<br><br>All permanent resident applications from family,
                        economic, and refugee class require biometrics.

                    </p>

                </div>

                {{-- Exemptions --}}

                <div class="mt-10" id="Exemptions">

                    <h3 class="text-dark font-bold text-xl mb-4">Exemptions</h3>

                    <p class="text-gray-600 mb-2">Applicants in the following categories are not required to give
                        biometrics to travel:</p>

                    <ul role="list" class="list-disc text-gray-600 w-full md:w-[80%] ml-4 space-y-2">

                        <li>Canadian citizens, citizenship applicants (including passport applicants), or existing
                            permanent residents;</li>

                        <li>visa-exempt nationals coming to Canada as tourists who hold a valid Electronic Travel
                            Authorization (eTA);</li>

                        <li>children under the age of 14;</li>

                        <li>applicants over the age of 79 (there is no upper age exemption for asylum claimants);</li>

                        <li>heads of state and heads of government;</li>

                        <li>cabinet ministers and accredited diplomats of other countries and the United Nations, coming
                            to Canada on official business;</li>

                        <li>U.S. visa holders transiting through Canada;</li>

                        <li>refugee claimants or protected persons who have already provided biometrics and are applying
                            for a study or work permit;</li>

                        <li>temporary resident applicants who have already provided biometrics in support of a permanent
                            resident application that is still in progress.</li>

                    </ul>

                </div>

                {{-- Frequently Asked Questions --}}

                <div class="mt-10" id="Frequently-Asked-Questions">

                    <h3 class="text-dark font-bold text-4xl">Frequently Asked Questions</h3>
                    <x-faq-item trigger="What are biometrics?">
                        For the purposes of Canadian immigration, biometrics identification is the
                        collection of an applicant's fingerprints and photo for facial recognition.
                    </x-faq-item>
                    <x-faq-item trigger="Why does the Government of Canada require applicants to submit biometrics?">
                        It is important for Canada's immigration authorities to be able to identify anyone
                        applying to come to Canada as a visitor, student, worker, permanent resident,
                        refugee claimant, or asylum seeker. Biometric screening is used to protect the
                        safety and security of Canadians and ensure the integrity of Canada's immigration
                        system. The collection of biometrics identification (fingerprints and facial
                        recognition photos) is considered an efficient tool for correctly identifying
                        individuals. Biometrics collection enables the Government of Canada to facilitate
                        application processing and simplify entry into Canada for low-risk travellers.
                    </x-faq-item>
                    <x-faq-item trigger="How often will I need to submit my fingerprints and photo in person?">
                        Applicants will need to give their biometrics once every 10 years. Applicants don’t
                        need to give their biometrics again until the 10-year period expires.
                    </x-faq-item>
                    <x-faq-item
                        trigger="Where do I give my biometrics if there is no Visa Application Centre (VAC) in
                    the country or territory I am applying from?">
                        Canada's immigration authorities recommend that individuals who do not have a
                        biometric service point available in their

                        country find the closest location possible. Click here for a <a
                            href="https://www.canada.ca/en/immigration-refugees-citizenship/campaigns/biometrics/where-to-give-biometrics.html"
                            class="text-red-600 hover:underline">list of VACs</a> where biometrics can be
                        submitted. In the

                        United States, individuals can give their biometrics at a <a
                            href="https://egov.uscis.gov/crisgwi/go?action=offices.type&OfficeLocator.office_type=ASC"
                            class="text-red-600 hover:underline">Government of Canada-authorized
                            Application Support Center</a>.

                    </x-faq-item>
                    <x-faq-item trigger="How do I know if I need to give my biometrics?">
                        Foreign nationals who apply for a visitor visa, a work or study permit (excluding
                        United States nationals), permanent residence,or refugee or asylum status will be
                        required to give their biometrics. <a href="{{ route('biometrics') . '#Exemptions' }}"
                            class="text-red-600 hover:underline">Click here for a list of exemptions to
                            biometrics</a>.
                    </x-faq-item>
                    <x-faq-item trigger="When am I expected to give my biometrics?">
                        Foreign nationals applying to come to Canada can check the validity status of their
                        biometrics data with

                        Immigration, Refugees and Citizenship Canada (IRCC) by <a
                            href="https://onlineservices-servicesenligne.cic.gc.ca/extapp/termsAndConditions?&lang=en&_ga=2.217160790.1937553031.1532973583-1522476441.1502119099"
                            class="text-red 600 hover:underline">visiting this page</a>. If the applicant
                        applied online,

                        they will have 30 days to go in person to an official biometrics collection service
                        point once they receive

                        their Biometrics Instruction Letter. IRCC may send the letter online or by mail and
                        the applicant must bring a

                        paper copy of it to the nearest <a
                            href="https://www.canada.ca/en/immigration-refugees-citizenship/campaigns/biometrics/where-to-give-biometrics.html"
                            class="text-red 600 hover:underline">VAC</a> in order to give their biometrics.

                    </x-faq-item>
                    <x-faq-item trigger="How much does it cost to submit my biometrics?">
                        The Government of Canada applies an additional fee for biometrics screening and
                        processing, which depends on whether applicants are applying as individuals, with
                        family members, or as a group.
                    </x-faq-item>
                    <x-faq-item
                        trigger="I have privacy concerns. Will my fingerprints and photo be kept secure after
                    they are collected for biometrics?">
                        The Government of Canada says fingerprints are encrypted and sent electronically
                        through a secure internal system to the Canadian Immigration Biometrics
                        Identification System. Once the transfer is complete, personal information is
                        deleted from the database.
                    </x-faq-item>
                </div>

            </div>

            <div class="lg:w-1/4">

                <div class="bg-white p-4 rounded-lg mb-10">

                    <h2 class="text-lg font-bold mb-4">Legal and Advice Options</h2>

                    <ul class="space-y-3" role="list">

                        <li
                            class=" flex flex-nowrap gap-x-1 px-4 py-2 bg-red-50 text-gray-700 shadow rounded-lg hover:bg-red-100 hover:text-gray-800 transition-colors duration-300 hover:cursor-pointer focus:cursor-pointer">

                            <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />

                                </svg>

                            </span>

                            <a href="{{ route('about') }}">About {{ config('app.name') }}</a>

                        </li>

                        <li
                            class="flex flex-nowrap gap-x-1 px-4 py-2 bg-red-50 text-gray-700 shadow rounded-lg hover:bg-red-100 hover:text-gray-800 transition-colors duration-300 hover:cursor-pointer focus:cursor-pointer active:text-red-500">

                            <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />

                                </svg>

                            </span>

                            <a href="{{ route('professional_cred') }}">Professional Credential</button>

                        </li>

                        <li
                            class="flex flex-nowrap gap-x-1 px-4 py-2 bg-red-50 text-gray-700 shadow rounded-lg hover:bg-red-100 hover:text-gray-800 transition-colors duration-300 hover:cursor-pointer focus:cursor-pointer active:text-red-500">

                            <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />

                                </svg>

                            </span>

                            <a href="{{ route('temp_res_visa') }}">Temporary resident visas</button>

                        </li>

                        <li
                            class="flex flex-nowrap gap-x-1 px-4 py-2 bg-red-50 text-gray-700 shadow rounded-lg hover:bg-red-100 hover:text-gray-800 transition-colors duration-300 hover:cursor-pointer focus:cursor-pointer active:text-red-500">

                            <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />

                                </svg>

                            </span>

                            <a href="{{ route('biometrics') }}">Biometrics</button>

                        </li>

                        <li
                            class="flex flex-nowrap gap-x-1 px-4 py-2 bg-red-50 text-gray-700 shadow rounded-lg hover:bg-red-100 hover:text-gray-800 transition-colors duration-300 hover:cursor-pointer focus:cursor-pointer active:text-red-500">

                            <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />

                                </svg>

                            </span>

                            <a href="/terms-of-service">Terms of Use</button>

                        </li>

                        <li
                            class="flex flex-nowrap gap-x-1 px-4 py-2 bg-red-50 text-gray-700 shadow rounded-lg hover:bg-red-100 hover:text-gray-800 transition-colors duration-300 hover:cursor-pointer focus:cursor-pointer active:text-red-500">

                            <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />

                                </svg>

                            </span>

                            <a href="/privacy-policy">Privacy Policy</button>

                        </li>

                    </ul>

                </div>
            </div>

        </div>

    </div>



</x-app-layout>
