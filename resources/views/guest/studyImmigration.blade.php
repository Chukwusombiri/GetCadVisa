<x-app-layout> 
    {{-- breadcrumb --}}
    <x-breadcrumb>
        <x-slot:topic>immigration</x-slot>
        <x-slot:subtopic>Study visa</x-slot>
    </x-breadcrumb>
    {{-- HEADER --}}
    <x-side-image-header :url="route('study_assessment')" :source="asset('images/study.jpg')" button-text="Apply for visa">
        <x-slot:maintitle>Canada student visa</x-slot>
        <x-slot:subtitle>A guide for International students looking to study in Canada.</x-slot>
    </x-side-image-header>
    {{-- BODY --}}
    <section class="grid grid-cols-4">
        {{-- MAIN --}}
        <div class="col-span-4 lg:col-span-3 pt-12 pb-24 px-4 md:px-6 lg:px-10 bg-gray-50 text-gray-600">
            {{-- main content --}}
            <h2 class="hedvig-regular text-gray-800 mb-8 text-3xl text-4xl md:text-5xl max-w-xl">

                Get a degree in Canada

            </h2>
            <p class="text-lg max-w-3xl mb-6 md:mb-8">

                Do you want to study in Canada? We answer all your top questions, including how much it costs to study in 

                Canada, which courses are available and how you can use your Canadian study permit as a pathway to obtain 

                Canadian permanent residence.

            </p> 
            {{-- table of content --}}
            <div class="my-10">
                <p class="py-2 futura-medium text-xl text-gray-700">Overview of Canadian International student visa program</p>
                <ul class="md:w-max ml-4 space-y-2" role="list">
                    <li><a href="{{route("study_immigration").'#What-Are-My-Chances-of-Becoming-an-International-Student-in-Canada'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                    </svg>

                    </span><span class="underline">What Are My Chances of Becoming an International Student in Canada?</span></a></li>

                    <li><a href="{{route("study_immigration").'#VISOCANADA-International-Student-Program'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                    </svg>

                    </span><span class="underline">{{config('app.name')}}'s International Student Program</span></a></li>

                    <li><a href="{{route("study_immigration").'#International-Student-Document-Checklist'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                    </svg>

                    </span><span class="underline">International Student Document Checklist</span></a></li>

                    <li><a href="{{route("study_immigration").'#What-is-a-Canadian-Study-Permit'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                    </svg>

                    </span><span class="underline">What is a Canadian Study Permit?</span></a></li>

                    <li><a href="{{route("study_immigration").'#What-is-the-Application-Process-for-a-Canadian-Study-Permit'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                    </svg>

                    </span><span class="underline">What is the Application Process for a Canadian Study Permit?</span></a></li>

                    <li><a href="{{route("study_immigration").'#How-Long-Does-it-Take-to-Apply-for-a-Canadian-Study-Permit'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                    </svg>

                    </span><span class="underline">How Long Does it Take to Apply for a Canadian Study Permit?</span></a></li>

                    <li><a href="{{route("study_immigration").'#What-Are-the-Conditions-of-a-Canadian-Study-Permit'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                    </svg>

                    </span><span class="underline">What Are the Conditions of a Canadian Study Permit?</span></a></li>

                    <li><a href="{{route("study_immigration").'#How-Much-Does-it-Cost-to-Study-in-Canada'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                    </svg>

                    </span><span class="underline">How Much Does it Cost to Study in Canada?</span></a></li>                               

                    <li><a href="{{route("study_immigration").'#How-to-Study-in-Canada-for-Free'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                    </svg>

                    </span><span class="underline">How to Study in Canada for Free</span></a></li>

                    <li><a href="{{route("study_immigration").'#What-is-a-Designated-Learning-Institution'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                    </svg>

                    </span><span class="underline">What is a Designated Learning Institution (DLI)?</span></a></li>

                    <li><a href="{{route("study_immigration").'#What-are-the-Different-Types-of-Canadian-Post-Secondary-Schools'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                    </svg>

                    </span><span class="underline">What are the Different Types of Canadian Post-Secondary Schools?</span></a></li>

                    <li><a href="{{route("study_immigration").'#Do-I-Need-to-Take-the-IELTS-to-Study-in-Canada'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                    </svg>

                    </span><span class="underline">Do I Need to Take the IELTS to Study in Canada?</span></a></li>

                    <li><a href="{{route("study_immigration").'#Do-I-Need-to-Submit-a-Letter-of-Intent-to-Study-in-Canada'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                    </svg>

                    </span><span class="underline">Do I Need to Submit a Letter of Intent to Study in Canada?</span></a></li>

                    <li><a href="{{route("study_immigration").'#When-is-the-Deadline-to-Apply'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                    </svg>

                    </span><span class="underline">When is the Deadline to Apply?</span></a></li>                                    

                    <li><a href="{{route("study_immigration").'#Which-Canadian-University-is-Right-for-Me'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                    </svg>

                    </span><span class="underline">Which Canadian University is Right for Me?</span></a></li>

                    <li><a href="{{route("study_immigration").'#Can-I-Change-Schools-or-Programs-While-on-a-Study-Permit'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                    </svg>

                    </span><span class="underline">Can I Change Schools or Programs While on a Study Permit?</span></a></li>

                    <li><a href="{{route("study_immigration").'#Can-I-Work-While-Studying-in-Canada'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                    </svg>

                    </span><span class="underline">Can I Work While Studying in Canada?</span></a></li>

                    <li><a href="{{route("study_immigration").'#Can-I-Bring-My-Family-With-Me-While-I-Study'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                    </svg>

                    </span><span class="underline">Can I Bring My Family With Me While I Study?</span></a></li>

                    <li><a href="{{route("study_immigration").'#Can-My-Spouse-Work-While-I-am-Studying-in-Canada'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                    </svg>

                    </span><span class="underline">Can My Spouse Work While I am Studying in Canada?</span></a></li>

                    <li><a href="{{route("study_immigration").'#Can-I-Study-in-Quebec'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                    </svg>

                    </span><span class="underline">Can I Study in Quebec?</span></a></li>

                    <li><a href="{{route("study_immigration").'#What-Are-the-Requirements-to-Study-in-Quebec'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                    </svg>

                    </span><span class="underline">What Are the Requirements to Study in Quebec?</span></a></li>

                    <li><a href="{{route("study_immigration").'#Are-International-Students-Covered-by-Canada-Healthcare-System'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                    </svg>

                    </span><span class="underline">Are International Students Covered by Canada’s Healthcare System?</span></a></li>

                    <li><a href="{{route("study_immigration").'#Can-I-Stay-in-Canada-After-I-Graduate'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                    </svg>

                    </span><span class="underline">Can I Stay in Canada After I Graduate?</span></a></li>

                </ul>                              
            </div>

            {{-- study asssessment --}}
            <div class="px-4 py-4 rounded-lg border border-gray-300 max-w-xl">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
                </svg>
                <p class="max-w-lg">
                    Our free online study immigration assessment tool helps you to know your eligibility status. 
                    Hope you've used it already? If no, use the button to assess our tool.
                </p>
                <p class="mt-6">
                    <a href="{{route('sponsorship_assessment')}}"
                        class="inline-flex cursor-pointer text-rose-700 hover:text-rose-800 text-sm uppercase futura-medium rounded-2xl py-3 px-5 border-2 border-rose-700 hover:border-rose-800 hover:bg-white">
                        Find out more about your eligility
                    </a>
                </p>
            </div>
                
            {{-- What-Are-My-Chances-of-Becoming-an-International-Student-in-Canada --}}
            <div id="What-Are-My-Chances-of-Becoming-an-International-Student-in-Canada" class="mt-16 md:mt-24">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">What Are My Chances of Becoming an International Student in Canada?</h2>

                <div class="">

                    <p class="mb-2">The number of international students in Canada continues to grow every year. Many of them are able to stay in Canada after finishing their studies.

                    </p> 

                    <p class="mb-2">Approval of a Canadian study permit is always at the discretion of the visa officer. </p>

                    <p class="mb-2">Last year, Canada admitted more than 400,000 international students. The majority of those students came from France, Nigeria, China, Japan, South Korea, the United States, Brazil, Iran, India, and Vietnam.</p>

                    <p class="mb-2">Diversity of international students is a priority for the Canadian government. In 2019, it launched <a href="https://www.international.gc.ca/education/strategy-2019-2024-strategie.aspx?lang=eng" class="text-rose-700 underline">Building on Success</a>, a new International Education Strategy (IES).</p>

                    <p class="mb-2">The government has budgeted $147.9 million dollars towards this goal over the next five years.</p>

                    <p>You can boost your chances of success by working with us through our International Student Program.</p>                                       

                </div>

            </div>

            {{-- {{config('app.name')}}-International-Student-Program --}}
            <div class="mt-16 md:mt-24" id="{{config('app.name')}}-International-Student-Program">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">{{config('app.name')}}'s International Student Program</h2>

                <div class="">

                    <p>{{config('app.name')}}’s <span class="text-gray-700 futura-medium">International Student Program</span> can help to guide you through the process. From getting your study permit to permanent residency, we’ll be there every step of the way. With our help, you can transform a Canadian education into <a href="{{route('canada_pr')}}" class="text-red 600 underline">Canadian permanent residence</a>. 

                        <br>Every one of our International Student Program clients is paired with an Educational Counsellor who has been trained in the landscape of Canadian higher education and immigration in Canada. With their help, you will submit the strongest possible application.                                            

                    </p>

                    {{-- basic steps of the application process --}}

                    <div class="mt-4 md:mt-6">

                        <p class="py-2 futura-medium text-xl text-gray-700">
                            Here are the basic steps of the application process:
                        </p> 

                        <p class=""><span class="underline font-bold">1. Choose a Program:</span> Your program choice is one of the most important factors of your study permit application. You must present a strong case for studying in Canada in this particular program. We make program recommendations based on your work experience and educational history. This will give you the best possible chance of submitting a successful application.</p>   

                        <p class="mt-2"><span class="underline font-bold">2. Apply to the School:</span> After deciding on a program, we will help you prepare and submit your application. You need to have a letter of acceptance from a Canadian-designated learning institution (DLI) before you can apply for a study permit.</p>                                      

                        <p class="mt-2"><span class="underline font-bold">3. Apply for a Study Permit:</span> With your acceptance letter in hand, you’ll be ready to apply for your study permit. We will help you to prepare and submit your application to Canadian immigration.</p>

                    </div>

                </div>

            </div>

            {{-- International-Student-Document-Checklist --}}
            <div class="mt-16 md:mt-24" id="International-Student-Document-Checklist">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">International Student Document Checklist</h2>

                <div class="">

                    <p class="py-2 futura-medium text-xl text-gray-700">Certain documents are necessary for the application process. Below is a list of documents that may be requested of you.

                    </p>   

                    <p class="text-base"><span class="futura-medium underline">Acceptance Letter:</span> A letter sent by the school confirming your acceptance into your program of study.</p>   

                    <p class="text-base mt-2"><span class="futura-medium underline">Proof of Financial Support:</span> Proof that you have money to support yourself and any family members coming with you. You must show that you can cover your tuition fees as well as your cost of living (accommodation, food, etc.) for your first year in Canada.</p>                                      

                    <p class="text-base mt-2"><span class="futura-medium underline">Identity documents:</span> Birth certificate, marriage certificate and passport.</p>

                </div>

            </div>

            {{-- What-is-a-Canadian-Study-Permit --}}
            <div class="mt-16 md:mt-24" id="What-is-a-Canadian-Study-Permit">
                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">What is a Canadian Study Permit?</h2>
                <p class="">
                    A <a href="{{route('study_assessment')}}" class="text-rose-700 underline">Canadian study permit</a> is the document that allows you to study at a school in Canada. 
                </p>
                <p class="mt-2">Once you have been accepted to study at a Designated Learning Institution (DLI), you can apply for a Canadian study permit.</p>                                                                                                                      
            </div>

            {{-- What-is-the-Application-Process-for-a-Canadian-Study-Permit --}}
            <div class="mt-16 md:mt-24" id="What-is-the-Application-Process-for-a-Canadian-Study-Permit">
                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">What is the Application Process for a Canadian Study Permit?</h2>
                <p class="py-2 futura-medium text-xl text-gray-700">There are four stages to obtaining a Canadian study permit:</p>  

                <div class="mb-4 md:mb-6">

                    <p><span class="underline text-lg futura-medium">1. Check your eligibility:</span> Ensure you meet the eligibility requirements for a Canadian study permit. You will need:</p>

                    <ul class="space-y-2 list-disc ml-4" role="list">

                        <li>an acceptance letter from a DLI,</li>

                        <li>proof of financial support,</li>

                        <li>supporting documents (varies depending on your countries of citizenship and residence)</li>

                    </ul>

                </div>

                <div class="mb-4 md:mb-6">

                    <p><span class="underline text-lg futura-medium">2. Prepare your application:</span> If you meet all eligibility requirements then you can start to prepare your study permit application. Make sure that you have gathered all documents required for your country. If you don’t show that you meet the requirements, an immigration officer may reject your application. It is a good idea to have a qualified immigration representative review your application before you submit it.</p>

                </div>

                <div class="mb-4 md:mb-6">

                    <p><span class="underline text-lg futura-medium">3. Submit your study permit application:</span> You have two options when submitting your application:</p>

                    <ul class="space-y-2 list-disc ml-4" role="list">

                        <li>Submit an electronic application: <a href="https://www.canada.ca/en/immigration-refugees-citizenship/services/application/account.html" class="text-rose-700 underline">Create an account on the Immigration, Refugees and Citizenship Canada (IRCC)</a> website. You can submit an application electronically using scanned or electronic copies of documents.</li>

                        <li>Submit a paper-based application: Gather hard copies of your documents and mail them to the <a href="https://www.canada.ca/en/immigration-refugees-citizenship/corporate/contact-ircc/offices/find-visa-application-centre.html" class="text-rose-700 underline">Visa Application Centre (VAC)</a> assigned to your country.</li>                                                

                    </ul>

                </div>
                <p><span class="underline text-lg futura-medium">4. If your study permit is approved, come to Canada!</span> You do not receive your Canadian study permit until you arrive at a Canadian Port of Entry (POE). If your permit is approved, the Canadian government will issue you a Port of Entry Introduction Letter. You must show this letter to the immigration official when you arrive in Canada to get your study permit.</p>               
            </div>

            {{-- How-Long-Does-it-Take-to-Apply-for-a-Canadian-Study-Permit --}}
            <div class="mt-16 md:mt-24" id="How-Long-Does-it-Take-to-Apply-for-a-Canadian-Study-Permit">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">How Long Does it Take to Apply for a Canadian Study Permit?</h2>
                <p class="mb-2">Processing times for study permits vary greatly. The amount of time it takes depends on your country of residence.

                </p>

                <p class="mb-2">The shortest processing time is 1-2 weeks, but some applicants can expect to wait as long as 16 weeks. Processing times depend on the volume of applications received. If you’re applying close to the beginning of Canada’s academic year you may experience delays.

                </p>       

                <p>Want faster processing times? <a href="{{route('study_assessment')}}" class="text-rose-700 underline">Find out if you are eligible for the Study Direct Stream (SDS).</a></p>                                        
            </div>

            {{-- What-Are-the-Conditions-of-a-Canadian-Study-Permit --}}
            <div class="mt-16 md:mt-24" id="What-Are-the-Conditions-of-a-Canadian-Study-Permit">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">What Are the Conditions of a Canadian Study Permit?</h2>
                
                <p class="mb-4">There are certain terms and conditions attached to a Canadian study permit. You must respect these conditions in order to retain all the benefits of your study experience.

                </p>

                <ul class="space-y-2 list-disc mb-4 md:mb-6 ml-4" role="list">

                    <li>You must be enrolled at a designated learning institution (DLI)</li>

                    <li>You must be enrolled as a part-time student, or a full-time student if studying in Quebec</li>

                    <li>You must not take any authorized leaves longer than 150 days from your program of study</li>                                      

                </ul>   

                <p>It is important to understand and respect the terms of your study permit. In 

                    doing so, you will get the most out of your study abroad experience in Canada. Students who 

                    respect the terms of their study permits also have a better chance of being granted a

                        <a href="javascript:void(0)" class="text-rose-700 underline">post-graduate work permit</a>. </p>
            </div>

            {{-- How-Much-Does-it-Cost-to-Study-in-Canada --}}
            <div class="mt-16 md:mt-24" id="How-Much-Does-it-Cost-to-Study-in-Canada">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">How Much Does it Cost to Study in Canada?</h2>

                <div class="">

                    <p class="mb-2">The good news is that studying in Canada is affordable. Canadian tuition fees are generally lower than those in Australia, the U.S. and the U.K.

                    </p>        

                    <p class="mb-2">In the 2018/2019 school year, the average annual tuition for an undergraduate international student in Canada was $27,159 CAD. The average tuition for the same year spent at an American university can be compared at $45,950 USD.</p>      

                    <p class="mb-2">You can use this tool to find tuition costs for college and university programs in Canada, as well as the estimated costs of books and supplies.</p>                                                           

                    <p>When deciding where to study abroad, cost of living is also an important factor to consider. The cost of living in Canada can be very affordable compared to most other top destinations for international students:</p>

                </div> 
                <div class="rounded-lg border border-gray-200 mt-6 md:mt-8">
                    <div class="overflow-x-auto rounded-t-lg">
                        <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                            <thead class="text-left">
                                <tr>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                        Country
                                    </th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                        Average Annual tuition and Cost of living</th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200">
                                <tr>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Canada
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">$29,947</td>
                                </tr>

                                <tr>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">United Kingdom
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">$35,045</td>
                                </tr>

                                <tr>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">United States
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">$36,564</td>
                                </tr>
                                <tr>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Australia
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">$42,093</td>
                                </tr>                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="mt-6 md:mt-8">

                    <p class="py-2 futura-medium text-lg text-gray-700">Cost of Canadian Student Housing</p>

                    <p class="mt-2">There are many options for living as a student in Canada. From living in university residence, to apartment rental, students can pick the living style that suits them best. Typically, large cities, like Toronto and Vancouver, have higher housing costs than smaller cities and towns.</p>

                    <p class="mt-2">The University of Toronto, which serves nearly <a href="http://www.planningandbudget.utoronto.ca/Assets/Academic+Operations+Digital+Assets/Planning+$!26+Budget/enrolment1718.pdf" class="text-rose-700 underline">20,000 international students</a>, estimates the monthly cost of housing for a student to sit somewhere between <a href="https://www.studentlife.utoronto.ca/hs/living-costs" class="text-rose-700 underline">$1,080 to $2,982 CAD</a> in downtown Toronto.</p>

                    <p class="mt-2">In Montreal, the cost of living is low compared to other major North American cities. The University of Montreal estimates a monthly student housing cost of <a href="http://www.bei.umontreal.ca/english/mtl_budget.htm" class="text-rose-700 underline">$550 CAD</a>. The city of Montreal remains a very popular study destination for international students, and recently ranked fifth in the world for best study destination.</p>

                    <p class="mt-2">In Saint John’s, Newfoundland, one of Canada’s smallest cities, the <a href="http://www.saintjohnlifeonyourterms.ca/cost-of-living.html" class="text-rose-700 underline">cost of living is 10-30%</a> lower than other Canadian cities. The average monthly cost of a two-bedroom rental is just $710 CDN, or $350 per room.</p>

                </div>

                <div class="mt-4 md:mt-6">

                    <p class="py-2 futura-medium text-lg text-gray-700">Food and Transportation costs</p>

                    <p class="">Similar to housing, cost of food and transportation varies between provinces. Let’s stick with the three examples from above to explore the price of amenities in cities in Canada.</p>

                    <p class="mt-4 md:mt-6 font-bold">All prices are in Canadian dollar</p>
                    <div class="rounded-lg border border-gray-200 mt-4 md:mt-6">
                        <div class="overflow-x-auto rounded-t-lg">
                            <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                                <thead class="text-left">
                                    <tr>
                                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                            City
                                        </th>
                                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                            Local transportation</th>
                                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                            Basic lunchtime menu in the business district</th>
                                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                            Suggested monthly grocery budget</th>
                                    </tr>
                                </thead>
    
                                <tbody class="divide-y divide-gray-200">
                                    <tr>
                                        <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Toronto</td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">$122.45/month</td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">$17.00</td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">$200.00 to $400.00</td>
                                    </tr>
                                    <tr>
                                        <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Montreal</td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">$80/month</td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">$17.00</td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">$350.00</td>
                                    </tr>
                                    <tr>
                                        <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Saint John’s</td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">$78.00/month</td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">$18.00</td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">$240.00</td>
                                    </tr>                         
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="mt-4 md:mt-6">

                    <p class="py-2 futura-medium text-xl text-gray-700">Health Insurance</p>

                    <p class="mt-2">All international students in Canada must have healthcare coverage. Certain 

                        provinces automatically give international students access to Canada’s public healthcare 

                        system, but others do not. Students in <a href="https://settlement.org/ontario/education/colleges-universities-and-institutes/information-for-foreign-students/what-kind-of-health-insurance-do-international-students-get/" class="text-rose-700 underline">provinces that do not offer health coverage to international students</a> must purchase private health insurance. Schools in these provinces generally offer health insurance plans for international students which may be added to your tuition and student fees.</p>

                </div>                              

            </div>

            {{-- How-to-Study-in-Canada-for-Free --}}
            <div class="mt-16 md:mt-24" id="How-to-Study-in-Canada-for-Free">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">How to Study in Canada for Free</h2>

                <div class="">

                    <p class="mb-2">There are plenty of scholarship opportunities for international students who want to study in Canada.

                    </p>

                    <p class="mb-2">The opportunities available to you will depend on your field of study or research and your country of origin.</p>

                    <p class="mb-2">You can find more information about <a href="https://www.educanada.ca/scholarships-bourses/non_can/index.aspx?lang=eng" class="text-rose-700 underline">scholarships that may be available to you</a> by using this database.</p>                                     

                </div>  

            </div>

            {{-- What-is-a-Designated-Learning-Institution --}}
            <div class="mt-16 md:mt-24" id="What-is-a-Designated-Learning-Institution">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">What is a Designated Learning Institution (DLI)?</h2>

                <div class="w-full ">                                                                                

                    <p class="mb-2">A <a href="javascript:void(0)" class="text-rose-700 underline">designated learning institution (DLI)</a> is any school that is allowed to admit international students.

                    </p>

                    <p class="mb-2">All primary and secondary schools in Canada are DLIs and can admit students from foreign countries.</p>

                    <p class="mb-2">Not all post-secondary schools are DLIs, so you must check the Canadian government’s list of DLIs before applying.</p>

                </div> 

            </div>

            {{-- What-are-the-Different-Types-of-Canadian-Post-Secondary-Schools --}}
            <div class="mt-16 md:mt-24" id="What-are-the-Different-Types-of-Canadian-Post-Secondary-Schools">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">What are the Different Types of Canadian Post-Secondary Schools?</h2>

                <div class="w-full ">

                    <p class="mb-2">Canada has a reputation for providing accessible, quality education for international students. To understand which program is right for you, first you must understand Canada’s levels of study.</p>

                    <p class="mb-2">Any educational program beyond the twelfth grade in Canada is considered post-secondary education. There are a few different types of post-secondary education, each with a different purpose.</p>

                    <p class="mb-2">Certain programs may have specific admissions requirements.</p>

                    <p class="mb-2">Our mandate is to ensure that you meet the basic admissions requirements for any program that you are applying for</p>

                </div>  

            </div>   

            {{-- sponsorship options --}}
            <div class="md:hidden mt-16 bg-white px-4 py-2 rounded-md shadow-md">
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
                    <a href="{{ route('sponsorship_immigration') }}"
                        class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                        Become a sponsor
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
                    <a href="{{ route('study_faqs') }}"
                        class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                        Study visa FAQs
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
            
            {{-- Do-I-Need-to-Take-the-IELTS-to-Study-in-Canada --}}
            <div id="Do-I-Need-to-Take-the-IELTS-to-Study-in-Canada" class="mt-16 md:mt-24">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Do I Need to Take the IELTS to Study in Canada?</h2>

                <div class="">

                    <p class="mb-2">To study at a Canadian school you will need to be proficient in English or French.</p>

                    <p class="mb-2">Canadian post-secondary schools set their own conditions for language skills of international students. Language skill requirements vary from one school to the next.</p>

                    <p class="mb-2">While preparing your application, you should research the specific requirements for your program. Some schools even allow you to complete English courses after you begin your studies.</p>

                    <p class="mb-2">Some international students do not need to provide proof of their language skills. If you are from an English-speaking country or have studied in English, then you may not have to take the IELTS.</p>

                    <p>Each school set its own language requirements. It is important to check the specific requirements of the school where you want to apply.</p>                                     

                </div>

            </div>

            {{-- Do-I-Need-to-Submit-a-Letter-of-Intent-to-Study-in-Canada --}}
            <div class="mt-16 md:mt-24" id="Do-I-Need-to-Submit-a-Letter-of-Intent-to-Study-in-Canada">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Do I Need to Submit a Letter of Intent to Study in Canada?</h2>

                <div class="">

                    <p class="mb-2">Our international student program offers guidance on writing your best letter of intent!</p>                                         

                    <p class="mb-2">The purpose of the letter of intent is to assure the Canadian government that you will respect the conditions of your permit. You must agree to leave the country once your permit has expired.</p>

                    <p>Our international student program offers guidance on writing your best letter of intent!</p>

                </div>

            </div>

            {{-- When-is-the-Deadline-to-Apply --}}
            <div class="mt-16 md:mt-24" id="When-is-the-Deadline-to-Apply">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">When is the Deadline to Apply?</h2>

                <div>

                    <p>Each school has their own deadline. You should make sure to submit your application well before this deadline. 

                        <br>Canadian schools are flooded with applications every year. As the deadline approaches, schools become more selective. The more reputable schools are especially competitive, so the earlier you get your application in, the better.</p>                                                                                                           

                </div>

            </div>

            {{-- Which-Canadian-University-is-Right-for-Me --}}
            <div class="mt-16 md:mt-24" id="Which-Canadian-University-is-Right-for-Me">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Which Canadian University is Right for Me?</h2>

                <div class="">

                    <p class="mb-4">Canada has a selection of post-secondary institutions of different sizes and specialties. Here's a list of five of the country’s most recognized schools, and a description of each to help get you started!

                    </p>

                    <ul class="ml-4 space-y-4 list-disc" role="list">

                        <li>

                            <p class="font-bold">University of Toronto (UofT)</p>

                            <p>The University of Toronto is likely one of the Canadian schools you have already heard of! International students choose UofT for its academic excellence and vibrant campus life. 20,000 of them, to be exact. It is also located in the downtown core of the world's most diverse city.</p>

                        </li>

                        <li>

                            <p class="font-bold">University of British Columbia (UBC)</p>

                            <p>UBC is North America’s most international university. Thirty percent of UBC’s student population is international—16,188 students from 156 countries. Located on Canada’s beautiful west coast, the university is part of busy Vancouver. UBC is an excellent choice for those interested in living in a city while still having access to nature. Living in Vancouver means easy access to the beautiful outdoors, including forest, ocean and mountains.</p>

                        </li>

                        <li>

                            <p class="font-bold">McGill University</p>

                            <p>McGill has an international reputation for excellence. It's no wonder it has a population of more than 12,000 international students. Although it is in the French province of Quebec, McGill is an English university. The city of Montreal is known as one of the best cities to live in as a student. The cost of living is low and it is home to a vibrant artistic and cultural scene.</p>

                        </li>

                        <li>

                            <p class="font-bold">Université de Montreal (UdeM)</p>

                            <p>UdeM is one of Canada’s highest ranking universities, and a great option for those interested in studying in French! Located in the city of Montreal, UdeM and its affiliate schools serve 9,500 international students each year.</p>

                        </li>

                        <li>

                            <p class="font-bold">McMaster University</p>

                            <p>McMaster is one of the world’s top 100 universities. Located in Hamilton, Ontario, the university is only an hour drive from Toronto. Hamilton is experiencing a significant job boom in the tech sector. This is great news for those interested in working during or after their studies!</p>

                        </li>

                    </ul>

                </div>

            </div>

            {{-- Can-I-Change-Schools-or-Programs-While-on-a-Study-Permit --}}
            <div class="mt-16 md:mt-24" id="Can-I-Change-Schools-or-Programs-While-on-a-Study-Permit">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Can I Change Schools or Programs While on a Study Permit?</h2>

                <div>

                    <p class="mb-2">With a Canadian study permit, you can change your school or program at any time. To do so, you will want to make sure you are following the right procedure and staying within the conditions of your study permit.

                    </p>                                     

                    <p class="mb-4">Here are the exact steps you need to follow to <a href="https://www.canada.ca/en/immigration-refugees-citizenship/services/application/account.html" class="text-rose-700 underline">change your school or program through the online portal</a>:</p>                         

                    <ul class="list-decimal ml-4 space-y-4" role="list">

                        <li>Sign in to your account.</li>

                        <li>Find the section called Designated Learning Institution student transfer</li>

                        <li>Click transfer from DLI number</li>

                        <li>Enter your study permit application number in the search field and then click search for my application</li>

                        <li>You may be prompted to enter more details from your original study permit application, so it’s important to have this handy.</li>

                        <li>Enter the information about your new program or school, including the new DLI number, your new student ID number, and your start date.</li>

                        <li>Click submit transfer</li>

                        <li>You will then be asked to review all the information you have submitted. If everything looks good, you can complete the process by clicking confirm transfer</li>

                        <li>You will receive a notification that your request is complete. This confirms that you have successfully informed the government of your change in plans.</li>

                    </ul>

                </div>

            </div>

            {{-- Can-I-Work-While-Studying-in-Canada --}}
            <div class="mt-16 md:mt-24" id="Can-I-Work-While-Studying-in-Canada">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Can I Work While Studying in Canada?</h2>

                <div>

                    <p class="mb-2">Yes! Another perk to studying in Canada is that international students have the right to work. This helps offset the cost of tuition and living expenses.

                    </p>                                     

                    <p class="mb-2">International students in Canada can work part-time (up to 20 hours per week) during school terms. During scheduled breaks like summer vacation, international students may work full-time.</p>                         

                    <p class="mb-2">Most students don’t need a work permit to work while they study, whether their job is on campus or off campus. Your study permit will state whether you’re allowed to work off campus. </p>

                    <p>If your program of study includes work experience, you may be able to work more than 20 hours during the semester. This will be indicated in your letter of acceptance. If the government approves this condition, you will be granted both a work permit and a study permit. This work permit will allow you to work on campus only.  </p>

                </div>

            </div>

            {{-- Can-I-Bring-My-Family-With-Me-While-I-Study --}}
            <div class="mt-16 md:mt-24" id="Can-I-Bring-My-Family-With-Me-While-I-Study">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Can I Bring My Family With Me While I Study?</h2>

                <div>

                    <p class="mb-2">International students who are married or have kids may wish to bring their family with them.

                    </p>                                     

                    <p class="mb-2">Canadian visa officers will consider study permit applications which include accompanying family members. You should note that including family members on a study permit application may influence the visa officer’s decision.</p>                         

                    <p>If you are approved as a family, your spouse will be able to work full time while in Canada. Any accompanying children will be able to study for free.</p>

                </div>

            </div>

            {{-- Can-My-Spouse-Work-While-I-am-Studying-in-Canada --}}
            <div class="mt-16 md:mt-24" id="Can-My-Spouse-Work-While-I-am-Studying-in-Canada">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Can My Spouse Work While I am Studying in Canada?</h2>

                <div>

                    <p>If your family does accompany you, your spouse will be eligible for an <a href="javascript:void(0)" class="text-rose-700 underline">open work permit</a>, authorizing them to work full-time in Canada while you are studying.
                    </p>                                                            

                </div>

            </div>  

            {{-- Can-I-Study-in-Quebec --}}
            <div class="mt-16 md:mt-24" id="Can-I-Study-in-Quebec">
                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Can I Study in Quebec?</h2>
                <p>Studying in Quebec gives you the option to study in English, French, or both. However, Quebec student visa requirements are a little different from the rest of Canada.
                </p>   
            </div>

            {{-- What-Are-the-Requirements-to-Study-in-Quebec --}}
            <div class="mt-16 md:mt-24" id="What-Are-the-Requirements-to-Study-in-Quebec">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">What Are the Requirements to Study in Quebec?</h2>

                <div class="">

                    <p class="mb-2">In order to study in Quebec, you will need a <span class="text-gray-700 futura-medium">Quebec Acceptance Certificate (CAQ)</span>. This document is issued by the <a href="https://www.immigration-quebec.gouv.qc.ca/en/home.html" class="text-rose-700 underline">Ministry of Immigration, Francisation and Integration (MIFI)</a>. It confirms that Quebec has accepted you as an international student. You need a CAQ before you can apply for a study permit if your program of study is in Québec.

                    </p>                                     

                    <p class="mb-4 md:mb-6">To be eligible to apply for a CAQ, you need to meet the following requirements.</p>  

                    <ul class="list-disc ml-4 space-y-4 mb-4">

                        <li>Be accepted into a Québec designated learning institution</li>

                        <li>Pay the fees associated with a CAQ application</li>

                        <li>Agree to comply with the conditions for issuing a CAQ for studies</li>

                    </ul> 

                    <p class="mb-2">You do not need a CAQ or a study permit if you intend to study a program that is less than 6 months in duration.</p>

                    <p class="mb-2">Once you have a CAQ, you have to apply for a study permit from the Government of Canada. When you receive your study permit, you’re ready to start studying in Canada!</p>                      

                </div>

            </div>

            {{-- Are-International-Students-Covered-by-Canada-Healthcare-System --}}
            <div class="mt-16 md:mt-24" id="Are-International-Students-Covered-by-Canada-Healthcare-System">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Are International Students Covered by Canada’s Healthcare System?</h2>
                    <p class="mb-2">All international students in Canada must have healthcare coverage.

                    </p>                                     

                    <p>Certain provinces allow international students access to Canada’s public healthcare system. Students in provinces that do not offer health coverage must buy private health insurance. All Canadian schools offer health insurance plans for international students.</p>                         
            </div>

            {{-- Can-I-Stay-in-Canada-After-I-Graduate --}}
            <div class="mt-16 md:mt-24" id="Can-I-Stay-in-Canada-After-I-Graduate">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Can I Stay in Canada After I Graduate?</h2>

                <div class="w-full ">

                    <p class="mb-2">Canada makes it easy for international students to become permanent residents if they want to remain in the country.

                    </p>                                     

                    <p class="mb-2">The Post-Graduate Work Permit allows international students to stay in Canada and work for up to three years after graduating. After working in Canada for one year, international graduates may be eligible to apply for permanent residency. </p>                         

                    <p class="mb-2">To apply for a PGWP, you need to prove that you have respected all the conditions of your study permit. Studying must have been your primary activity during your time in Canada.</p>

                    <p class="mb-2">A PGWP is typically granted for the same duration as your studies in Canada.</p>

                </div>

            </div>
        </div>
        {{-- aside --}}
        <div class="hidden md:block col-span-4 lg:col-span-1 px-4 md:px-6 bg-gradient-to-b from-gray-200 from-[5vh] via-gray-100 via-[65vh] to-gray-50">
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
                <a href="{{ route('sponsorship_immigration') }}"
                    class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                    Become a sponsor
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
                <a href="{{ route('study_faqs') }}"
                    class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                    Study visa FAQs
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
                Evaluate your eligibilty for student visa using our free tool to know your immigration possibilities.
            </p>
            <div class="py-6">
                <x-link-one href="{{ route('study_assessment') }}">Get your study visa</x-link-one>
            </div>
        </div>
    </section>

</x-app-layout> 