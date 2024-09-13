<x-app-layout> 
    {{-- BREADCRUMB --}}
    <x-breadcrumb>
        <x-slot:topic>Immigrate</x-slot>
        <x-slot:subtopic>Express entry</x-slot>
    </x-breadcrumb>
    {{-- HEADER --}}
    <x-side-image-header :source="asset('images/pnprogramme.jpg')" :url="route('assessment')" button-text="Apply today">
        <x-slot:maintitle>Canada Provincial Nominee Programme (PNP)</x-slot>
        <x-slot:subtitle>Get your dream job in Canada with our help and immigrate to Canada through PNP.</x-slot>
    </x-side-image-header>
    {{-- BODY --}}
    <section class="grid grid-cols-4">
        {{-- main content --}}
        <div class="col-span-4 lg:col-span-3 pt-12 pb-24 px-4 md:px-6 lg:px-10 bg-gray-50 text-gray-600">
            <div class="relative">
                <h2 class="text-4xl md:text-5xl hedvig-regular mb-4 md:mb-6 lg:mb-8 text-gray-800">What do we have to offer</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
                    <!-- Service 1 -->
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <div class="flex items-center mb-4">
                            <svg viewBox="0 0 24 24" class="h-8 w-8 fill-current text-rose-700 mr-4">
                            <path
                                d="M12.556 4.15c.11-.14.25-.25.42-.32a2.67 2.67 0 013.3 1.53l1.6 3.6h3.92c.53 0 .97.43.97.97v1.97c0 .53-.43.97-.97.97h-3.94l-1.6 3.6a2.676 2.676 0 01-3.3 1.53 2.67 2.67 0 01-1.92-2.54l-.01-6.1c-.64-.31-1.19-.75-1.63-1.3l-1.9 1.89a4.676 4.676 0 00-.54 6.2l3.57 6.19c.21.36.6.58 1.03.58H20c.53 0 .97-.43.97-.97v-1.97c0-.53-.43-.97-.97-.97h-3.92l-1.6-3.6a2.676 2.676 0 01-3.3-1.53c-.17-.07-.31-.18-.42-.32l-1.89-1.9a4.676 4.676 0 00-.54-6.2l1.9-1.89c.44-.55.99-.99 1.63-1.3l.01-6.1c.64.31 1.19.75 1.63 1.3l1.9 1.9z" />
                            </svg>
                            <h3 class="text-xl font-bold text-gray-800">Job Search Assistance</h3>
                        </div>

                        <p class="text-gray-600">We provide personalized job search assistance to help you find

                        employment opportunities in Canada based on your skills and qualifications.</p>

                    </div> <!-- Service 2 -->

                    <div class="bg-white p-6 rounded-lg shadow-lg">

                        <div class="flex items-center mb-4">

                            <svg viewBox="0 0 24 24" class="h-8 w-8 fill-current text-rose-700 mr-4">

                                <path

                                    d="M12 3L1 9v6l11 6 11-6V9l-11-6zm7.89 6l-7.89-2.31L4.21 9 12 11.31 19.79 9zM4 12.5l7 4.5 7-4.5v3l-7 4.5-7-4.5v-3z" />

                            </svg>

                            <h3 class="text-xl font-bold text-gray-800">Immigration Consultation</h3>

                        </div>

                        <p class="text-gray-600">Our team of experienced immigration consultants will provide

                            comprehensive guidance and consultation on the provincial nominee program, eligibility requirements, and the application process.</p>

                    </div>

                    <!-- Service 3 -->

                    <div class="bg-white p-6 rounded-lg shadow-lg">

                        <div class="flex items-center mb-4">

                            <svg viewBox="0 0 24 24" class="h-8 w-8 fill-current text-rose-700 mr-4">

                                <path

                                    d="M12 1C6.48 1 2 5.48 2 11s4.48 10 10 10 10-4.48 10-10S17.52 1 12 1zm3 15h-6v-2h6v2zm2-4h-8v-2h8v2zm0-4h-8V6h8v2z" />

                            </svg>

                            <h3 class="text-xl font-bold text-gray-800">Language Assessment</h3>

                        </div>

                        <p class="text-gray-600">We offer free language assessment services to help you improve your

                            English or French language skills, which can increase your chances of success in Canada's job

                            market.

                        </p>

                    </div>

                </div>

                {{-- express entry options --}}

                <div class="md:hidden mt-16">
                    <p class="text-gray-700 text-xl mt-4 futura-medium mb-6">
                        Permanent Resident Visa Options
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

                {{-- provinces --}}

                <section class="mt-16 md:mt-24">

                    <div class="container mx-auto">

                        <h2 class="hedvig-regular text-4xl md:text-5xl text-gray-800 mb-6 md:mb-8">Provincial Nominee Program by Province</h2>

                        <div class="grid grid-cols-1 gap-8">

                            <!-- British Columbia -->

                            <div class="flex flex-col bg-white p-6 rounded-lg shadow-lg hover:border border-rose-700">                       

                                <h3 class="text-xl font-bold text-rose-700 mb-2">British Columbia Provincial Nominee Program</h3>

                                <p class="text-gray-600 mb-4">The British Columbia Provincial Nominee Program (BC PNP) is a way for

                                    skilled and semi-skilled workers, as well as international graduates, to obtain Canadian permanent

                                    residence. The BC PNP has several categories for different types of applicants, including the Skills

                                    Immigration category and the Express Entry BC category.</p>                                

                            </div>

            

                            <!-- Alberta -->

                            <div class="flex flex-col bg-white p-6 rounded-lg shadow-lg hover:border border-rose-700">                       

                                <h3 class="text-xl font-bold text-rose-700 mb-2">Alberta Immigrant Nominee Program</h3>

                                <p class="text-gray-600 mb-4">The Alberta Immigrant Nominee Program (AINP) is designed to attract and

                                    retain individuals who have the skills and abilities to contribute to Alberta's economy. The AINP has

                                    several streams, including the Alberta Opportunity Stream, the Alberta Express Entry Stream, and the

                                    Self-Employed Farmer Stream.</p>                                

                            </div>

            

                            <!-- Ontario -->

                            <div class="flex flex-col bg-white p-6 rounded-lg shadow-lg hover:border border-rose-700">                        

                                <h3 class="text-xl font-bold text-rose-700 mb-2">Ontario Immigrant Nominee Program</h3>

                                <p class="text-gray-600 mb-4">The Ontario Immigrant Nominee Program (OINP) is a way for skilled workers,

                                    international students, and business people to immigrate to Ontario. The OINP has several streams,

                                    including the Employer Job Offer category, the International Student category, and the Business

                                    Category.</p>                                

                            </div>

                            <!-- Quebec -->

                            <div class="flex flex-col bg-white p-6 rounded-lg shadow-lg hover:border border-rose-700">                       

                                <h3 class="text-xl font-bold text-rose-700 mb-2">Quebec Immigrant Nominee Program</h3>

                                <p class="text-gray-600 mb-4">The Quebec Immigrant Nominee Program (QINP) is a way for skilled workers,

                                    entrepreneurs, and businesspeople to obtain Canadian permanent residence through Quebec. The QINP has

                                    several categories, including the Quebec Skilled Worker Program and the Quebec Entrepreneur Program.</p>                                

                            </div>

                            <!-- Manitoba -->

                            <div class="flex flex-col bg-white p-6 rounded-lg shadow-lg hover:border border-rose-700">                       

                                <h3 class="text-xl font-bold text-rose-700 mb-2">Manitoba Provincial Nominee Program</h3>

                                <p class="text-gray-600 mb-4">The Manitoba Provincial Nominee Program (MPNP) is a way for skilled workers

                                    and their families to immigrate to Manitoba. The MPNP has several streams, including the Skilled

                                    Workers in Manitoba Stream, the Skilled Workers Overseas Stream, and the Business Investor Stream.</p>                                

                            </div>



                            <!-- New Brunswick -->

                            <div class="flex flex-col bg-white p-6 rounded-lg shadow-lg hover:border border-rose-700">                        

                                <h3 class="text-xl font-bold text-rose-700 mb-2">New Brunswick Provincial Nominee Program (NBPNP)</h3>

                                <p class="text-gray-600 mb-4">The NBPNP is New Brunswick's provincial immigration program with streams targeting entrepreneurs, international graduates, skilled workers with employer support and skilled workers in the federal government's Express Entry selection system</p>                                

                            </div>

                            <!-- Newfoundland -->

                            <div class="flex flex-col bg-white p-6 rounded-lg shadow-lg hover:border border-rose-700">                       

                                <h3 class="text-xl font-bold text-rose-700 mb-2">Newfoundland and Labrador Provincial Nominee Program (NLPNP)</h3>

                                <p class="text-gray-600 mb-4">The NLPNP accepts immigration applications from skilled workers, international graduates and entrepreneurs who meet program-specific criteria such as a job or job offer, intent to reside, and the ability to become economically established in the province. </p>                                

                            </div>

                            <!-- Nova Scotia -->

                            <div class="flex flex-col bg-white p-6 rounded-lg shadow-lg hover:border border-rose-700">                        

                                <h3 class="text-xl font-bold text-rose-700 mb-2">Nova Scotia Nominee Program (NSNP)</h3>

                                <p class="text-gray-600 mb-4">TThe NSNP is Nova Scotia's program for the nomination of eligible skilled workers, international graduates, entrepreneurs and professionals looking to settle permanently in the province. The program has various economic immigration streams with not one, but three streams aligned with Canada's Express Entry system.</p>                                

                            </div>

                            <!-- Prince Edward Island -->

                            <div class="flex flex-col bg-white p-6 rounded-lg shadow-lg hover:border border-rose-700">                       

                                <h3 class="text-xl font-bold text-rose-700 mb-2">Prince Edward Island Provincial Nominee Program (PEI PNP)</h3>

                                <p class="text-gray-600 mb-4">The PEI PNP is the island province's economic immigration program for skilled workers, international graduates, entrepreneurs who demonstrate the intention to live and work in PEI, and show the ability to become economically established in the province. </p>                                

                            </div>

                            <!-- Northwest Territories -->

                            <div class="flex flex-col bg-white p-6 rounded-lg shadow-lg hover:border border-rose-700">                       

                                <h3 class="text-xl font-bold text-rose-700 mb-2">Northwest Territories Nominee Program (NTNP)</h3>

                                <p class="text-gray-600 mb-4">The Northwest Territories accepts economic immigration applications to settle in Northern Canada under two main streams - the Employer Driven and Business - one of which has three distinct streams, including an Express Entry-aligned stream for skilled workers.</p>                                

                            </div>

                            <!-- Yukon -->

                            <div class="flex flex-col bg-white p-6 rounded-lg shadow-lg hover:border border-rose-700">                        

                                <h3 class="text-xl font-bold text-rose-700 mb-2">Yukon Nominee Program (YNP)</h3>

                                <p class="text-gray-600 mb-4">Yukon's official provincial immigration program assists eligible employers in Canada's northern territory to nominate internationally-trained foreign workers and businesspeople for Canadian permanent residence.</p>                                

                            </div>

                        </div>

                    </div>

                </section>

                

                <!-- Testimonials -->

                <div class="mt-16 md:mt-24">

                    <h2 class="text-4xl lg:text-5xl hedvig-regular text-gray-800 mb-8">Clients' stories</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                        <!-- Testimonial 1 -->

                        <div class="bg-white rounded-lg p-6 shadow-lg">

                            <p class="text-gray-600 mb-4">"I had a great experience working with the Canada Provincial

                                Nominee Programme team. They provided me with all the information I needed and helped me

                                throughout the application process. I am now living and working in Canada, and I couldn't be

                                happier."</p>

                            <div class="flex items-center">

                                <img src="https://randomuser.me/api/portraits/women/13.jpg" alt="Person 1"

                                    class="h-12 w-12 rounded-full mr-4">

                                <div>

                                    <p class="text-gray-800 font-bold">Vivian Lopez</p>

                                </div>

                            </div>

                        </div>



                        <!-- Testimonial 2 -->

                        <div class="bg-white rounded-lg p-6 shadow-lg">

                            <p class="text-gray-600 mb-4">"The Canada Provincial Nominee Programme team helped me find a

                                job that was perfect for my skills and qualifications. They provided me with great support

                                and guidance throughout the job search process."</p>

                            <div class="flex items-center">

                                <img src="https://randomuser.me/api/portraits/men/72.jpg" alt="Person 2"

                                    class="h-12 w-12 rounded-full mr-4">

                                <div>

                                    <p class="text-gray-800 font-bold">Johnston Reynolds</p>

                                </div>

                            </div>

                        </div>



                        <!-- Testimonial 3 -->

                        <div class="bg-white rounded-lg p-6 shadow-lg">

                            <p class="text-gray-600 mb-4">"I am so grateful to the Canada Provincial Nominee Programme

                                team for helping me and my family immigrate to Canada. They provided us with valuable

                                information and support throughout the entire process, and we are now living our dream in this beautiful country."</p>

                            <div class="flex items-center">

                                <img src="https://randomuser.me/api/portraits/women/76.jpg" alt="Person 3"

                                                            class="h-12 w-12 rounded-full mr-4">

                                <div>

                                    <p class="text-gray-800 font-bold">Anna Ricks</p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- side pane -->
        <div class="hidden md:block col-span-4 lg:col-span-1 px-4 md:px-6 bg-gradient-to-b from-gray-200 from-[5vh] via-gray-100 via-[65vh] to-gray-50">
            <p class="text-gray-700 text-xl mt-4 futura-medium mb-6">
                Canada Permanent Resident Visa Options
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