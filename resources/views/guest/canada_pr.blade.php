<x-app-layout>
    {{-- BREADCRUMB --}}
    <x-breadcrumb>
        <x-slot:topic>Immigrate</x-slot>
        <x-slot:subtopic>Permanent resident</x-slot>
    </x-breadcrumb>
    <!-- Header -->
    <x-side-image-header :url="route('assessment')" :source="asset('images/family2.jpeg')" button-text="Apply today">
        <x-slot:maintitle>Canada Permanent Residence</x-slot>
        <x-slot:subtitle>Discover the many pathways available for you to become a permanent resident of
            Canada</x-slot>
    </x-side-image-header>
    <!-- body -->
    <section class="grid grid-cols-4">
        {{-- main --}}
        <div class="col-span-4 lg:col-span-3 pt-12 pb-24 px-4 md:px-6 lg:px-10 bg-gray-50 text-gray-600">
            {{-- intro --}}
            <div>
                <h1 class="hedvig-regular text-4xl lg:text-5xl text-gray-800 mb-8 md:mb-10 max-w-xl">What is Canada Permanent Residence?</h1>                    
                <p class="text-md lg:text-lg mb-4 md:mb-6">
                    Canada Permanent Residence offers many benefits, including the right to live and work in
                    Canada, access to Canada's public health care and social services, and the opportunity to apply for
                    Canadian citizenship.
                </p>

                <ul class="md:pl-4 list-disc">
                    <li class="text-md futura-medium">Right to live and work in Canada indefinitely</li>
                    <li class="text-md futura-medium">Access to Canada's public health care and social services</li>
                    <li class="text-md futura-medium">Opportunity to apply for Canadian citizenship</li>
                    <li class="text-md futura-medium">Ability to sponsor family members for permanent residence</li>
                    <li class="text-md futura-medium">Protection under Canadian law and the Canadian Charter of Rights and Freedoms</li>
                </ul>

                {{-- immigration options --}}
                <div class="mt-16 lg:hidden">
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

                <div class="mt-16 md:mt-24">
                    <h3 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Requirements for Canada Permanent Residence</h3>
                    <p class="text-gray-600 mb-4 md:mb-6">
                        There are several ways to obtain Canada Permanent Residence, each with its own set of
                        requirements.
                    </p>
                    <ul class="pl-4 list-decimal space-y-6">
                        <li class="font-bold text-xl text-gray-700">Express Entry</li>
                            <ul class="pl-2 list-disc space-y-4">

                                <li>Must meet eligibility criteria for one of the three
                                    federal economic immigration programs: Federal Skilled Worker Program, Federal Skilled
                                    Trades Program,or Canadian Experience Class</li>
                                <li>Must score high enough on the Comprehensive Ranking
                                    System (CRS) to receive an Invitation to Apply (ITA) for Permanent Residence</li>
                            </ul>
                        <li class="font-bold text-xl text-gray-700">Provincial Nominee Program (PNP)</li>
                            <ul class="pl-2 list-disc space-y-4">
                                <li>Must be nominated by a province or territory</li>
                                <li>Must meet the specific eligibility criteria for the PNP
                                    stream that they are nominated under</li>
                            </ul>
                        <li class="font-bold text-xl text-gray-700">Family Sponsorship</li>
                            <ul class="pl-2 list-disc space-y-4">
                                <li>Must have a close relative who is a Canadian citizen or
                                    Permanent Resident and who is willing to sponsor them</li>
                                <li>Must meet the eligibility criteria for the Family
                                    Sponsorship program</li>
                            </ul>
                        <li class="font-bold text-xl text-gray-700">Business Immigration</li>
                            <ul class="pl-2 list-disc space-y-4">
                                <li>Must have a high net worth and experience in managing or owning a business</li>
                                <li>Must meet the eligibility criteria for one of the
                                    Business Immigration programs: Start-up Visa Program, Self-employed Persons Program, or
                                    Quebec Investor Program</li>
                            </ul>
                    </ul>
                </div>
            </div>
            {{-- benefits --}}
            <div class="mt-16 md:mt-24">
                <h1 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Benefits of Canada Permanent Residence</h1>
                <div class="flex flex-wrap">
                    <div class="w-full md:w-1/2 lg:w-1/3 p-4">
                        <div class="bg-white rounded-lg shadow-lg p-4">
                            <h2 class="text-lg font-bold mb-2">Access to Healthcare</h2>
                            <p class="text-gray-600">Permanent Residents of Canada have access to public healthcare
                                services, which are funded by the government. This includes doctor visits, hospital stays, and
                                other medical procedures.
                            </p>
                        </div>
                    </div>

                    <div class="w-full md:w-1/2 lg:w-1/3 p-4">
                        <div class="bg-white rounded-lg shadow-lg p-4">
                            <h2 class="text-lg font-bold mb-2">Employment Opportunities</h2>
                            <p class="text-gray-600">Canada has a strong economy and a low unemployment rate. As a
                                Permanent Resident, you have the right to work and live anywhere in Canada, and can
                                take advantage of the numerous job opportunities available.</p>
                        </div>
                    </div>

                    <div class="w-full md:w-1/2 lg:w-1/3 p-4">
                        <div class="bg-white rounded-lg shadow-lg p-4">
                            <h2 class="text-lg font-bold mb-2">Education</h2>
                            <p class="text-gray-600">Canada has a world-class education system, with top-ranked
                                universities and colleges. Permanent Residents can take advantage of the affordable tuition fees
                                and apply for scholarships and other financial aid.</p>
                        </div>
                    </div>

                    <div class="w-full md:w-1/2 lg:w-1/3 p-4">
                        <div class="bg-white rounded-lg shadow-lg p-4">
                            <h2 class="text-lg font-bold mb-2">Social Benefits</h2>
                            <p class="text-gray-600">As a Permanent Resident, you have access to various social
                                benefits such as the Canada Pension Plan, Employment Insurance, and other government
                                assistance programs.</p>
                        </div>
                    </div>

                    <div class="w-full md:w-1/2 lg:w-1/3 p-4">
                        <div class="bg-white rounded-lg shadow-lg p-4">
                            <h2 class="text-lg font-bold mb-2">Travel</h2>
                            <p class="text-gray-600">Permanent Residents can travel freely in and out of Canada
                                without the need for a visa or other travel documents. This makes it easy to visit family and
                                friends abroad, or to explore other parts of the world.</p>
                        </div>
                    </div>

                    <div class="w-full md:w-1/2 lg:w-1/3 p-4">
                        <div class="bg-white rounded-lg shadow-lg p-4">
                            <h2 class="text-lg font-bold mb-2">Citizenship</h2>
                            <p class="text-gray-600">After living in Canada as a Permanent Resident for a certain
                                period of time, you may be eligible to apply for Canadian citizenship. This gives you the
                                right to vote, run for public office, and access other benefits reserved for citizens.</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- how to --}}
            <div class="mt-16 md:mt-24">
                <h1 class="hedvig-regular text-4xl lg:text-5xl text-gray-800 mb-8 md:mb-10 max-w-xl">How to Apply for Canada Permanent Residence</h1>
                <p class="mb-4 md:mb-6 max-w-lg">Applying for Canada Permanent Residence involves several steps and
                    requirements. Here's a brief overview of the process:</p>

                <ul class="pl-4 list-decimal futura-medium space-y-4 mb-6 md:mb-8">
                    <li class="max-w-xl">Gather all the required documents, including proof of identity, education, work experience,
                        and language proficiency.</li>
                    <li class="max-w-xl">Determine your eligibility based on the different immigration programs, such as Express
                        Entry, Provincial Nominee Program, Family Sponsorship, or Business Immigration.</li>
                    <li class="max-w-xl">Create an online profile and submit your application through the relevant immigration
                        program.</li>
                    <li class="max-w-xl">Wait for an Invitation to Apply (ITA) from the Canadian government, which is based on your
                        eligibility and points score.</li>
                    <li class="max-w-xl">Submit additional documents and complete medical and security checks.</li>
                    <li class="max-w-xl">If approved, receive a Confirmation of Permanent Residence (COPR) and apply for a Permanent
                        Resident Visa (PRV).</li>
                    <li class="max-w-xl">Once the PRV is issued, travel to Canada and complete the landing process to become a
                        Permanent Resident.</li>
                </ul>

                <p class="futura-light text-gray-700 max-w-xl">Note: The application process and requirements may vary depending on
                    the immigration program and category you choose. It's advisable to seek professional assistance or
                    consult the official website of Immigration, Refugees and Citizenship Canada (IRCC) for up-to-date and
                    accurate information.</p>

            </div>
            {{-- faq --}}        
            <div class="mt-16 md:mt-24">
                <h1 class="hedvig-regular text-4xl lg:text-5xl text-gray-800 mb-8 md:mb-10 max-w-xl">
                    Frequently Asked Questions (FAQs) about Canada Permanent Residence</h1>
                <div class="flex flex-wrap">
                    <div class="w-full xl:w-1/2 p-4 flex flex-col" x-data='{isOpen:false}' @click.away="isOpen=false">
                        <button type="button" class="w-full flex flex-nowrap justify-between items-center py-4 md:py-7 appearance-none outline-none border-none focus:outline-none focus:border-none" @click="isOpen=!isOpen">
                            <p class="text-start text-md md:text-2xl font-semibold tracking-wider">What are the eligibility criteria for Canada
                                Permanent Residence?</p>
                            <span class="ml-4">
                                <svg xmlns="http://www.w3.org/2000/svg" :class="{ 'rotate-45': isOpen }" class="icon icon-tabler icon-tabler-plus w-6 h-6 md:w-8 md:h-8" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M12 5l0 14" />
                                    <path d="M5 12l14 0" />
                                </svg>
                            </span>
                        </button>
                        <div class="my-3 md:my-6" x-show="isOpen">
                            <p class="text-md md:text-xl">
                                The eligibility criteria depend on the immigration program and
                                category you choose. Generally, you need to meet the minimum requirements for age,
                                education, language proficiency, work experience, and adaptability. You also need to
                                have no criminal or medical inadmissibility issues.                                
                            </p>        
                        </div>
                    </div>
                    <div class="w-full xl:w-1/2 p-4 xl:border-l border-gray-300  flex flex-col" x-data='{isOpen:false}' @click.away="isOpen=false">
                        <button type="button" class="w-full flex flex-nowrap justify-between items-center py-4 md:py-7 appearance-none outline-none border-none focus:outline-none focus:border-none" @click="isOpen=!isOpen">
                            <p class="text-start text-md md:text-2xl font-semibold tracking-wider">What is the Express Entry system?</p>
                            <span class="ml-4">
                                <svg xmlns="http://www.w3.org/2000/svg" :class="{ 'rotate-45': isOpen }" class="icon icon-tabler icon-tabler-plus w-6 h-6 md:w-8 md:h-8" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M12 5l0 14" />
                                    <path d="M5 12l14 0" />
                                </svg>
                            </span>
                        </button>
                        <div class="my-3 md:my-6" x-show="isOpen">
                            <p class="text-md md:text-xl">
                                The Express Entry system is an online application management
                                system used by the Canadian government to manage applications for Canada Permanent
                                Residence under the Federal Skilled Worker Program, Federal Skilled Trades Program, and Canadian
                                Experience Class. It uses a points-based system called the Comprehensive Ranking System (CRS)
                                to rank candidates based on their age, education, language proficiency, work
                                experience, and other factors.                      
                            </p>        
                        </div>
                    </div>
                    <div class="w-full xl:w-1/2 p-4 flex flex-col" x-data='{isOpen:false}' @click.away="isOpen=false">
                        <button type="button" class="w-full flex flex-nowrap justify-between items-center py-4 md:py-7 appearance-none outline-none border-none focus:outline-none focus:border-none" @click="isOpen=!isOpen">
                            <p class="text-start text-md md:text-2xl font-semibold tracking-wider">What is the Provincial Nominee Program (PNP)?</p>
                            <span class="ml-4">
                                <svg xmlns="http://www.w3.org/2000/svg" :class="{ 'rotate-45': isOpen }" class="icon icon-tabler icon-tabler-plus w-6 h-6 md:w-8 md:h-8" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M12 5l0 14" />
                                    <path d="M5 12l14 0" />
                                </svg>
                            </span>
                        </button>
                        <div class="my-3 md:my-6" x-show="isOpen">
                            <p class="text-md md:text-xl">
                                The Provincial Nominee Program (PNP) is a program that allows
                                provinces and territories in Canada to nominate candidates for Canada Permanent
                                Residence based on their specific economic and labour market needs. Each province and
                                territory has its own PNP with different eligibility criteria and application processes.                             
                            </p>        
                        </div>
                    </div>
                    <div class="w-full xl:w-1/2 p-4 xl:border-l border-gray-300 flex flex-col" x-data='{isOpen:false}' @click.away="isOpen=false">
                        <button type="button" class="w-full flex flex-nowrap justify-between items-center py-4 md:py-7 appearance-none outline-none border-none focus:outline-none focus:border-none" @click="isOpen=!isOpen">
                            <p class="text-start text-md md:text-2xl font-semibold tracking-wider">How long does it take to get Canada Permanent
                                Residence?</p>
                            <span class="ml-4">
                                <svg xmlns="http://www.w3.org/2000/svg" :class="{ 'rotate-45': isOpen }" class="icon icon-tabler icon-tabler-plus w-6 h-6 md:w-8 md:h-8" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M12 5l0 14" />
                                    <path d="M5 12l14 0" />
                                </svg>
                            </span>
                        </button>
                        <div class="my-3 md:my-6" x-show="isOpen">
                            <p class="text-md md:text-xl">
                                The processing time for Canada Permanent Residence
                                applications depends on the immigration program and category you choose, as well as the volume of
                                applications received by the Canadian government. Generally, the Express Entry
                                system takes six months or less to process applications, while the Provincial Nominee Program
                                takes longer, depending on the specific province or territory. It's important to note that
                                processing times are subject to change and can vary depending on individual
                                circumstances. You can check the latest processing times on the official website of Immigration,
                                Refugees and Citizenship Canada (IRCC).                             
                            </p>        
                        </div>
                    </div>                    
                </div>
            </div>
            {{-- cta --}}
            <div class="mt-16 md:mt-24 h-[80vh] flex flex-col justify-center items-center">
                <h1 class="hedvig-regular text-3xl md:text-4xl max-w-xl mx-auto text-center mb-6 md:mb-8">Get Started on Your Canada Permanent Residence Application Today</h1>        
                <p class="text-gray-600 text-lg">Don't wait any longer to start your journey to becoming Canada Permanent Residence.</p>
                <!-- link button -->
                <div class="w-full py-6 flex justify-center">
                    <x-link-two href="{{ route('contact') }}">Speak to an advisor</x-link-two>
                </div>
            </div>
        </div>
        <!-- side pane -->
        <div
            class="hidden md:block col-span-4 lg:col-span-1 px-4 md:px-6 bg-gradient-to-b from-gray-200 from-[5vh] via-gray-100 via-[65vh] to-gray-50">
            <p class="text-xl mt-4 futura-medium mb-6">
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
            <p class="text-md mt-4 md:mt-8 mb-6">
                Use our free visa eligibility assessment tool to know your immigration status and kick start your visa
                application.
            </p>
            <div class="py-6">
                <x-link-one href="{{ route('assessment') }}">Free visa assessment</x-link-one>
            </div>
        </div>
    </section>
</x-app-layout>
