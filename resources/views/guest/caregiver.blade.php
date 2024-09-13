<x-app-layout>
    <!-- Hero -->
    <div class="pt-24 bg-gray-100">
        <div class="container px-4 mx-auto flex flex-wrap flex-col md:flex-row items-center">
            <!--Left Col-->
            <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
                <p class="uppercase tracking-loose w-full">Welcome to the</p>
                <h1 class="my-4 text-5xl font-bold leading-tight">Canada Caregiver Immigration Programme</h1>
                <p class="leading-normal text-2xl mb-8">We welcome experienced caregivers to come and work in Canada to provide
                care for Canadian families.</p>
                <a href="{{route('assessment')}}"
                class="bg-red-700 hover:bg-red-800 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline">Apply
                Now</a>
            </div>
            <!--Right Col-->
            <div class="w-full md:w-3/5 py-6 text-center px-4">
                <img class="w-full md:w-4/5 z-50" src="{{url('/images/caregiver.jpg')}}" />
            </div>
        </div>
    </div>

    <!-- Content -->
    <section class="container mx-auto text-gray-700 body-font mt-16">
        <!-- Description -->
        <div class="flex flex-wrap items-center justify-center">
            <div class="lg:w-2/3 md:w-1/2 pl-4 md:pr-16 lg:pr-32 md:mt-0 mt-10">
                <h2 class="text-3xl font-semibold mb-4">About the Programme</h2>
                <p class="leading-relaxed mb-4">The Canada Caregiver Immigration Programme is a program designed for
                    experienced caregivers to come and work in Canada to provide care for Canadian families. Caregivers play a
                    crucial role in supporting Canadian families, particularly the elderly and individuals with disabilities, by
                    providing compassionate care and assistance with daily activities.</p>
                <p class="leading-relaxed mb-4">As a caregiver in Canada, you will have the opportunity to gain valuable
                    work experience, improve your language skills, and contribute to Canadian society while earning a competitive
                    salary. This program offers a pathway for caregivers to eventually become permanent residents of Canada, with
                    the option to bring their family members to join them in Canada.</p>
                <a href="{{route('assessment')}}"
                    class="text-blue-500 inline-flex items-center font-semibold">Learn More
                    <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
            <div class="lg:w-1/3 md:w-1/2 mt-10 md:mt-0">
                <img class="object-cover object-center rounded-lg" alt="A caregiver at work"
                src="{{url('/images/caregiver.png')}}" />
            </div>
        </div>    
        <!-- Benefits -->
        <div class="container px-5 py-16 mx-auto">
            <div class="flex flex-wrap -m-4">
                <div class="lg:w-1/3 md:w-1/2 p-4">
                    <div class="flex relative">
                        <div
                            class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white">
                            <h2 class="tracking-widest text-sm title-font font-medium text-red-500 mb-1">BENEFIT 1</h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Flexible Work Schedule</h1>
                            <p class="leading-relaxed">As a caregiver in Canada, you may have a flexible work schedule, allowing you
                            to balance your work and personal life effectively.</p>
                            <a href="#"
                            class="mt-3 text-red-500 inline-flex items-center font-semibold">Learn More
                            <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 md:w-1/2 p-4">
                    <div class="flex relative">
                        <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white">
                            <h2 class="tracking-widest text-sm title-font font-medium text-red-500 mb-1">BENEFIT 2</h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Opportunity for Permanent Residency</h1>
                            <p class="leading-relaxed">The Canada Caregiver Immigration Programme offers a pathway for caregivers to eventually become permanent residents of Canada, providing them with long-term stability and opportunities for their future.</p>
                            <a href="#"
                                class="mt-3 text-red-500 inline-flex items-center font-semibold">Learn More
                                <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 md:w-1/2 p-4">
                    <div class="flex relative">                        
                        <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white">
                            <h2 class="tracking-widest text-sm title-font font-medium text-red-500 mb-1">BENEFIT 3</h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Opportunity to Bring Family Members</h1>
                            <p class="leading-relaxed">Caregivers who are eligible for permanent residency through the program have the option to bring their family members to join them in Canada, allowing them to reunite with their loved ones and build a brighter future together.</p>
                            <a href="#"
                                class="mt-3 text-red-500 inline-flex items-center font-semibold">Learn More
                                <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="bg-gray-300 py-16">
            {{-- immigration options --}}
            <div class="max-w-6xl mx-auto px-4">
                <p class="text-gray-600 text-xl mt-4">
                    Explore Canada Permanent Resident Visa Options
                </p>
                <ul class="space-y-2 pl-2 mt-2 w-full md:w-max" role="list">
                    <li>
                        <a href="{{route('express_entry')}}" class="flex gap-x-2 text-base text-gray-600">
                            <span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            </span><span class="underline">Express Entry</span>
                        </a>                                
                    </li>
                    <li>
                        <a href="{{route('PNP')}}" class="flex gap-x-2 text-base text-gray-600">
                            <span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            </span><span class="underline">Provincial Nominee Program</span>
                        </a>                                
                    </li>   
                    <li>
                        <a href="{{route('canada_pr')}}" class="flex gap-x-2 text-base text-gray-600">
                            <span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            </span><span class="underline">Canada Permanent Resident</span>
                        </a>                                
                    </li>                   
                    <li>
                        <a href="{{route('quebec')}}" class="flex gap-x-2 text-base text-gray-600">
                            <span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            </span><span class="underline">Quebec Immigration</span>
                        </a>                                
                    </li>
                    <li>
                        <a href="{{route('pro_and_skilled')}}" class="flex gap-x-2 text-base text-gray-600">
                            <span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            </span><span class="underline">Professional and skilled workers</span>
                        </a>                                
                    </li>
                    <li>
                        <a href="{{route('atlantic_immigration')}}" class="flex gap-x-2 text-base text-gray-600">
                            <span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            </span><span class="underline">Atlantic Immigration Program</span>
                        </a>                                
                    </li>
                    <li>
                        <a href="{{route('rural_and_northern')}}" class="flex gap-x-2 text-base text-gray-600">
                            <span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            </span><span class="underline">Rural and Northern Immigration Pilot</span>
                        </a>                                
                    </li>
                    <li>
                        <a href="{{route('agri_food')}}" class="flex gap-x-2 text-base text-gray-600">
                            <span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            </span><span class="underline">Agri-food Pilot</span>
                        </a>                                
                    </li>
                    <li>
                        <a href="{{route('canada_immigration_faqs')}}" class="flex text-base text-gray-600">
                            <span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            </span><span class="underline">Canada Immigration FAQs</span>
                        </a>                                
                    </li>
                </ul>
            </div>    
        </section>
        <!-- Application Process -->
        <div class="bg-gray-100">
            <div class="container px-5 py-16 mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-semibold">Application Process</h2>
                    <p class="mt-4 text-gray-600">The application process for the Canada Caregiver Immigration Programme is straightforward and involves several steps:</p>
                </div>
                <div class="flex flex-wrap -m-4">
                    <div class="p-4 md:w-1/2">
                        <div class="flex">
                        <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                            1
                        </div>
                        <div class="flex-grow pl-6">
                            <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Check Eligibility</h2>
                            <p class="leading-relaxed text-gray-600">Ensure that you meet the eligibility requirements for the Canada Caregiver Immigration Programme, including work experience, language proficiency, and education.</p>
                        </div>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/2">
                        <div class="flex">
                        <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                            2
                        </div>
                        <div class="flex-grow pl-6">
                            <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Gather Documents</h2>
                            <p class="leading-relaxed text-gray-600">Collect all the necessary documents, such as identification, work experience letters, language test results, and education credentials, to support your application.</p>
                        </div>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/2">
                        <div class="flex">
                        <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                            3
                        </div>
                        <div class="flex-grow pl-6">
                            <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Submit Application</h2>
                            <p class="leading-relaxed text-gray-600">Complete and submit your application for the Canada Caregiver Immigration Programme online or by mail, along with all the required documents and fees.</p>
                        </div>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/2">
                        <div class="flex">
                        <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                            4
                        </div>
                        <div class="flex-grow pl-6">
                            <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Wait for Processing</h2>
                            <p class="leading-relaxed text-gray-600">After submitting your application, wait for it to be processed by the immigration authorities. This may take several months, and you may be required to attend an interview or provide additional documents during the process.</p>
                        </div>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/2">
                        <div class="flex">
                            <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                                5
                            </div>
                            <div class="flex-grow pl-6">
                                <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Receive Approval</h2>
                                <p class="leading-relaxed text-gray-600">Once your application is approved, you will receive a confirmation of your eligibility for the Canada Caregiver Immigration Programme. You may be required to undergo medical examinations and obtain a police clearance certificate as part of the process.</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/2">
                        <div class="flex">
                            <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                            6
                            </div>
                            <div class="flex-grow pl-6">
                                <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Complete Landing Process</h2>
                                <p class="leading-relaxed text-gray-600">Once you receive approval, you will need to complete the landing process, which includes providing your passport details, paying the Right of Permanent Residence Fee (RPRF), and providing your mailing address in Canada.</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/2">
                        <div class="flex">
                            <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                            7
                            </div>
                            <div class="flex-grow pl-6">
                                <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Travel to Canada</h2>
                                <p class="leading-relaxed text-gray-600">Once you have completed the landing process, you will receive a Confirmation of Permanent Residence (COPR) document. You can then make travel arrangements to move to Canada and start your new life as a permanent resident.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Application Process Section -->
    <!-- Start FAQ Section -->
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="text-center mb-20">
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4">Frequently Asked Questions</h1>
                <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500s">Here are some commonly asked questions about the Canada Caregiver Immigration Programme.</p>
            </div>
            <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
                <div class="w-full lg:w-1/2 px-4 py-2">
                    <details class="mb-4">
                        <summary class="font-semibold text-gray-900 bg-gray-100 rounded-md px-4 py-2 focus:outline-none focus:bg-gray-200 transition duration-150 ease-in-out">What are the eligibility requirements for the Canada Caregiver Immigration Programme?</summary>
                        <div class="mt-2 px-4 py-2 text-gray-600 bg-gray-100 rounded-md">
                            <p class="leading-relaxed">To be eligible for the Canada Caregiver Immigration Programme, you must have:</p>
                            <ul class="list-disc list-inside">
                                <li>At least 2 years of full-time work experience as a caregiver in Canada</li>
                                <li>Successfully completed a qualifying Canadian post-secondary education program, or have an equivalent foreign education</li>
                                <li>Meet the language requirements in English or French</li>
                                <li>Be admissible to Canada</li>
                                <li>Have a valid job offer from a Canadian employer</li>
                                <li>Be able to perform the job duties of a caregiver</li>
                                <li>Pass a medical exam and obtain a police clearance certificate</li>
                            </ul>
                            <p class="leading-relaxed mt-2">It's important to note that the requirements may vary depending on the specific caregiver stream you are applying for, such as the Home Child Care Provider or Home Support Worker stream.</p>
                        </div>
                    </details>  
                    <details class="mb-4">
                        <summary class="font-semibold text-gray-900 bg-gray-100 rounded-md px-4 py-2 focus:outline-none focus:bg-gray-200 transition duration-150 ease-in-out">What are the job duties of a caregiver in Canada?</summary>
                        <div class="mt-2 px-4 py-2 text-gray-600 bg-gray-100 rounded-md">
                            <p class="leading-relaxed">As a caregiver in Canada, your job duties may include:</p>
                            <ul class="list-disc list-inside">
                                <li>Providing care for children, elderly individuals, or individuals with disabilities</li>
                                <li>Assisting with daily activities such as bathing, dressing, and feeding</li>
                                <li>Administering medications and maintaining health records</li>
                                <li>Assisting with meal preparation and household chores</li>
                                <li>Providing companionship and emotional support</li>
                            </ul>
                            <p class="leading-relaxed mt-2">It's important to review the specific job duties and requirements of the caregiver stream you are applying for to ensure you meet the criteria.</p>
                        </div>
                    </details>
                </div>
                <div class="w-full lg:w-1/2 px-4 py-2">
                    <details class="mb-4">
                        <summary class="font-semibold text-gray-900 bg-gray-100 rounded-md px-4 py-2 focus:outline-none focus:bg-gray-200 transition duration-150 ease-in-out">What is the process for obtaining a job offer from a Canadian employer?</summary>
                        <div class="mt-2 px-4 py-2 text-gray-600 bg-gray-100 rounded-md">
                            <p class="leading-relaxed">To obtain a job offer from a Canadian employer, you can follow these steps:</p>
                            <ol class="list-decimal list-inside">
                                <li>Research Canadian employers in the caregiver field and identify potential employers</li>
                                <li>Prepare a professional resume and cover letter tailored to each employer</li>
                                <li>Submit your resume and cover letter to potential employers, either through their websites, job boards, or by directly contacting them</li>
                                <li>Participate in interviews with potential employers and demonstrate your skills and qualifications</li>
                                <li>If you receive a job offer, review the terms and conditions, and ensure it meets the requirements of the Canada Caregiver Immigration Programme</li>
                                <li>If the job offer is satisfactory, accept it and obtain a written confirmation from the employer</li>
                            </ol>
                            <p class="leading-relaxed mt-2">Having a valid job offer from a Canadian employer is a key requirement for the Canada Caregiver Immigration Programme, so it's important to carefully follow the process and ensure that the job offer meets the necessary criteria.</p>
                        </div>
                    </details>
                    <details class="mb-4">
                        <summary class="font-semibold text-gray-900 bg-gray-100 rounded-md px-4 py-2 focus:outline-none focus:bg-gray-200 transition duration-150 ease-in-out">What are the language requirements for the Canada Caregiver Immigration Programme?</summary>
                        <div class="mt-2 px-4 py-2 text-gray-600 bg-gray-100 rounded-md">
                            <p class="leading-relaxed">To meet the language requirements for the Canada Caregiver Immigration Programme, you must demonstrate proficiency in English or French. You can do so by taking a language test approved by the Canadian government, such as the International English Language Testing System (IELTS) or the Canadian English Language Proficiency Index Program (CELPIP) for English, or the Test d'évaluation de français (TEF) for French.</p>
                            <p class="leading-relaxed mt-2">You must achieve a minimum level of language proficiency specified by the caregiver stream you are applying for. It's important to check the specific language requirements for the stream you are interested in and ensure you meet the minimum proficiency level before submitting your application.</p>
                        </div>
                    </details>
                    <details class="mb-4">
                        <summary class="font-semibold text-gray-900 bg-gray-100 rounded-md px-4 py-2 focus:outline-none focus:bg-gray-200 transition duration-150 ease-in-out">What is the medical exam and police clearance certificate requirement for the Canada Caregiver Immigration Programme?</summary>
                        <div class="mt-2 px-4 py-2 text-gray-600 bg-gray-100 rounded-md">
                        <p class="leading-relaxed">As part of the application process for the Canada Caregiver Immigration Programme, you will be required to undergo a medical exam and obtain a police clearance certificate.</p>
                        <p class="leading-relaxed mt-2">The medical exam is conducted by a panel of physicians approved by the Canadian government and is intended to assess your overall health and ability to meet the medical requirements for immigration. The police clearance certificate is a document issued by the police or relevant authorities in the countries where you have lived for a certain period of time, and it certifies that you have no criminal record or pose no security risk.</p>
                        <p class="leading-relaxed mt-2">Both the medical exam and police clearance certificate are important components of the Canada Caregiver Immigration Programme application process, and you will need to submit the relevant documents as part of your application.</p>
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </section>        
    <!-- Contact Section -->
    <section id="contact" class="bg-gray-100 py-12">
        <div class="container px-4 mx-auto">
            <h2 class="text-3xl font-semibold text-gray-900 text-center mb-6">Contact Us</h2>
            <p class="text-gray-600 text-center mb-12">Have questions or need more information about the Canada Caregiver Immigration Programme? Contact us using the form below.</p>
            <div class="max-w-md mx-auto bg-white rounded-md p-6 shadow-md">
                <div class="grid grid-cols-1 gap-6">
                    <label for="name" class="block text-gray-900 font-semibold">Name</label>
                    <input type="text" id="name" name="name" class="w-full px-4 py-2 rounded-md border-gray-300 focus:outline-none focus:border-blue-500 transition duration-150 ease-in-out">
                    <label for="email" class="block text-gray-900 font-semibold">Email</label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-2 rounded-md border-gray-300 focus:outline-none focus:border-blue-500 transition duration-150 ease-in-out">
                    <label for="message" class="block text-gray-900 font-semibold">Message</label>
                    <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 rounded-md border-gray-300 focus:outline-none focus:border-blue-500 transition duration-150 ease-in-out"></textarea>
                    <div id="form-response"></div>
                    <button id="form_button" type="button" class="mt-4 inline-block w-full px-4 py-2 font-semibold text-white bg-blue-500 rounded-md hover:bg-blue-600 transition duration-150 ease-in-out">Submit</button>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
<script>
    document.addEventListener("DOMContentLoaded", () => {               
        form_button.addEventListener("click", () => {
            const form_button = document.getElementById('form_button');
            const form_message = document.getElementById('message');
            const form_email = document.getElementById('email');
            const form_name = document.getElementById('name');
            const form_response = document.getElementById('form-response');
            form_response.innerHTML = "";
            var myclassList = form_response.classList;
            // Remove all classes from the div element
            while (myclassList.length > 0) {
                myclassList.remove(myclassList.item(0));
            }
            /* create paragraph element */
            let newParagraph = document.createElement("p");
            /* validation of form */
            if (form_name.value == "") {
                newParagraph.textContent = "Name field is required";
                form_response.appendChild(newParagraph);
                // Add three new classes to the div element
                form_response.classList.add("bg-red-200");
                form_response.classList.add("text-gray-800");
                form_response.classList.add("px-4");
                form_response.classList.add("py-2");
                form_response.classList.add("rounded");
                return false;
            }
            if (form_email.value == "") {
                newParagraph.textContent = "Email must be filled out";
                form_response.appendChild(newParagraph);   
                // Add three new classes to the div element
                form_response.classList.add("bg-red-200");
                form_response.classList.add("text-gray-800");  
                form_response.classList.add("px-4");
                form_response.classList.add("py-2");   
                form_response.classList.add("rounded");        
                return false;
            }
            if (form_message.value == "") {
                newParagraph.textContent = "Message must be filled out";
                form_response.appendChild(newParagraph);
                // Add three new classes to the div element
                form_response.classList.add("bg-red-200");
                form_response.classList.add("text-gray-800");
                form_response.classList.add("px-4");
                form_response.classList.add("py-2");
                form_response.classList.add("rounded");
                return false;
            }

            newParagraph.textContent = "Thank you for reaching out to us! We'll get back to you shortly.";
            form_response.appendChild(newParagraph);
            // Add three new classes to the div element
            form_response.classList.add("bg-green-300");
            form_response.classList.add("text-gray-800");
            form_response.classList.add("px-4");
            form_response.classList.add("py-2");
            form_response.classList.add("rounded");
            form_name.value ='';
            form_email.value ='';
            form_message.value = '';
        });
    });
</script>