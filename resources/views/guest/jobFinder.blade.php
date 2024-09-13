<x-app-layout> 
    {{-- breadcrumb --}}
    <x-breadcrumb>
        <x-slot:topic>immigration</x-slot>
        <x-slot:subtopic>Job finder</x-slot>
    </x-breadcrumb>
    {{-- HEADER --}}
    <x-header>
        <x-slot:maintitle>A Guide for Newcomers looking to job</x-slot>
        <x-slot:subtitle>Discover your straight-forward pathway to finding your dream job in Canada as a newcomer.</x-slot>
    </x-header>    
     {{-- BODY --}}
     <section class="grid grid-cols-4">
        {{-- MAIN --}}
        <div class="col-span-4 lg:col-span-3 pt-12 pb-24 px-4 md:px-6 lg:px-10 bg-gray-50 text-gray-600">                                
            <h2 class="hedvig-regular text-gray-800 mb-8 text-3xl text-4xl md:text-5xl max-w-xl">
                Find and land your first job in Canada 
            </h2>
            <p class="text-lg mb-2">
                {{config('app.name')}} has built this guide to make it as easy as possible for newcomers like you to find your dream job as you settle in Canada. The country is open and welcoming, as it depends on global talent to support its economic and social prosperity.
            </p>
            <p class="text-lg">Finding a job in your field in Canada can be challenging. But many newcomers show that it is certainly possible – as long as you are prepared.
            </p>                                                       
            {{-- immigrate tools options --}}
            <div class="md:hidden mt-16 bg-white px-4 py-2 rounded-md shadow-md">
                <p class="text-gray-700 text-xl mt-4 futura-medium mb-6">
                    Immigration Tools
                </p>
                
                <ul class="space-y-2 pl-2 mt-2" role="list">
                    <li>
                        <a href="{{ route('crs') }}"
                            class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                            Crs calculator
                            <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pnp_finder') }}"
                            class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                            PNP Finder
                            <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('clb_converter') }}"
                            class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                            CLB Converter
                            <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('imp') }}"
                            class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                            Immigration Processing time
                            <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('job_finder') }}"
                            class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                            Job Finder
                            <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('visiting_canada') }}"
                            class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                            Visiting Canada
                            <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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
                <p class="flex gap-x-2 mb-2 text-xl font-bold"><span class="text-rose-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                    </svg>                                  
                </span><span>Recommended Reads about Finding Job in Canada</span></p>
                <ul class="md:w-max ml-4 space-y-2" role="list">
                    <li><a href="{{route("job_finder").'#Overview'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                    </span><span class="underline">Overview</span></a></li>
                    <li><a href="{{route("job_finder").'#Research'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                    </span><span class="underline">Research</span></a></li>
                    <li><a href="{{route("job_finder").'#Working-in-a-Regulated-Occupation'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                    </span><span class="underline">Working in a Regulated Occupation</span></a></li>
                    <li><a href="{{route("job_finder").'#Prepare-your-Resume-and-Cover-Letter'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                    </span><span class="underline">Prepare your Resume and Cover Letter</span></a></li>
                    <li><a href="{{route("job_finder").'#Increase-your-Chances-by-Networking-in-Canada'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                    </span><span class="underline">Increase your Chances by Networking in Canada</span></a></li>
                    <li><a href="{{route("job_finder").'#Apply-for-Jobs'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                    </span><span class="underline">Apply for Jobs</span></a></li>
                    <li><a href="{{route("job_finder").'#Prepare-for-your-Interview'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                    </span><span class="underline">Prepare for your Interview</span></a></li>
                    <li><a href="{{route("job_finder").'#Frequently-Asked-Questions'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-rose-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                    </span><span class="underline">Frequently Asked Questions</span></a></li>                                    
                </ul>                              
            </div>
            {{-- Overview --}}
            <div id="Overview" class="mt-16">
                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Introduction into Finding Job in Canada</h2>
                <p class="text-md">Canada’s labour force has over 20 million people. Newcomers account for a growing share of the labour force. Landed immigrants make up over 25 per cent of workers in Canada.</p>
                <p class="mt-2 text-md">There are plenty of good Canadian employment opportunities. Each and every day more than 50,000 Canadian job postings go unfilled.</p>
                <p class="mt-2 text-md">In this guide, {{config('app.name')}} will outline each step you can take to be successful in your job search in Canada.</p>
                <p class="mt-2 text-md">First, you will learn how to carry out crucial research. Identify how you will be positioning yourself and which employers are a good fit for you, and learn more tips for your application. You will also learn about working in a regulated occupation in Canada.</p>
                <p class="mt-2 text-md">Second, you will learn about preparing your resume. It is important to prepare your resume in the Canadian format as well as writing a cover letter. In addition, you will learn writing a cover letter and optimizing your LinkedIn profile.</p>
                <p class="mt-2 text-md">Third, you will learn about how you can increase your chances of landing a job by networking in person and online, as well as mentorship opportunities.</p>
                <p class="mt-2 text-md">Fourth, you will learn about where to find job listings in Canada, and how to apply for your desired jobs.</p>
                <p class="mt-2 text-md">Finally, you will learn about preparing for your interviews in Canada.</p>
                <p class="mt-2 text-md">At the end of this page, you will be able to see the most frequently asked questions about finding a job in Canada.</p>
            </div>
            {{-- Research --}}
            <div id="Research" class="mt-16 md:mt-24">
                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Research</h2>
                <p class="mb-2 futura-medium text-xl text-gray-700">Follow the steps below to successfully research your options.</p>
                <p class="mt-2 text-md"><span class="futura-medium uppercase">Step 1:</span> The first step is to figure out where you see yourself in a few years. Identify what you are passionate about and what your ambitions are. This will help you in every step of the way.</p>
                <p class="mt-4 text-md"><span class="futura-medium uppercase">Step 2:</span> Identify individuals and organizations with experience in your chosen field and industry. Reach out to them and ask them for a phone call or meeting so they can provide you with career advice. Networking is key to not only helping you find employment opportunities, but also learning about the actions you can take to secure your dream job in Canada. Often, individuals and organizations are willing to have coffee with newcomers to provide advice and mentorship. See our “Networking” section below for more information on how to network in Canada.</p>
                <p class="mt-4 text-md"><span class="futura-medium uppercase">Step 3:</span> Identify which employers you wish to apply for. You can do this by looking at job listings. Below, you will find a list of different resources that you can use to view current listings. Choose positions based on your knowledge, skills and experience.</p>
                <p class="mt-4 text-md"><span class="futura-medium uppercase">Step 4:</span> The next step is to conduct research about these employers you have identified.</p>
                <p class="mt-2 text-md">You can do so by checking out the 'About' section on employer profiles on LinkedIn. You can also read their 'About' section on their website. Make sure you know about the employer's history, what their products or services are, and how they view themselves.</p>
                <p class="mt-2 text-md">Check if they have an "In the news" section on their website, where they are likely to publish their latest achievements. You can also search for the employer name on Google News, or other similar platforms.</p>
                <p class="mt-2 text-md">It is also recommended that you have a look at the employer's social media accounts, where they may be announcing recent news.</p>
                <p class="mt-2 text-md">Gather as much information as you can that is relevant to your position. If possible, find out who would be your manager.</p>
                <p class="mt-2 text-md">This information will be useful for you when writing your cover letters and during your interview. This will show the employer that you are prepared.</p>
                <p class="mt-4 text-md"><span class="futura-medium uppercase">Step 5:</span> Now that you have done the research, the third step is to work on how you will be framing yourself.</p>
                <p class="mt-2 text-md">Identify pain points they may be currently facing. Then, identify opportunities.</p>
                <p class="mt-2 text-md">Your job now is to try to frame your work experience and background as what is needed to address these pain points. Frame yourself as the candidate they need to solve the problems they face.</p>                                  
            </div>
            {{-- Working in a Regulated Occupation --}}
            <div id="Working-in-a-Regulated-Occupation" class="mt-16 md:mt-24">
                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Working in a Regulated Occupation</h2>
                <p class="mb-2 futura-medium text-xl text-gray-700">About 20% of jobs in Canada are regulated. Some professionals and tradespeople must meet specific requirements of competency and training to practice their profession in Canada. The reason some jobs are regulated is to protect the health and safety of Canadians.</p>
                <p class="mt-2 text-md">If you wish to work in a regulated profession, you will have to get your foreign credential recognized and receive accreditation, or receive a license to practice. In Canada, workers in regulated professions are accredited by a provincial or territorial regulatory body. This means that the requirements you will need to fulfil to practice in your regulated profession will depend on the province or territory you choose to reside in.</p>
                <p class="mt-4 md:mt-6 futura-medium text-xl text-gray-700">What professions are regulated?</p>
                <p class="mt-2 text-md">Professions related to health, safety or ethics are usually regulated. This includes doctors, nurses and other healthcare professionals; engineers and skilled trade workers; and lawyers and accountants.</p>
                <p class="mt-2 text-md">There are over 500 credentialing bodies across Canada. For this reason, the first step is usually to identify which province you will move to. You should then identify which occupation you wish to pursue in Canada. The third step is to find out if your chosen occupation is regulated in the province you are heading to.</p>
                <p class="mt-2 text-md futura-medium">If you want to know if your profession is regulated, follow these steps:</p>
                <p class="mt-4 text-md"><span class="futura-medium uppercase">Step 1:</span> <a href="https://www.cicic.ca/928/find_out_if_your_occupation_is_regulated_or_not.canada" class="text-rose-700 underline">Visit this webpage</a>. It is operated by governments across Canada. This is the most authoritative and trusted source for credential recognition in Canada. The governments operate what is called the Canadian Information Centre for International Credentials (CICIC).</p>
                <p class="mt-4 md:mt-6 text-md"><span class="futura-medium uppercase">Step 2:</span> On the CICIC webpage, search for your occupation and indicate the province you intend to work in. You can search by keyword or by the National Occupational Classification (NOC) code.</p>
                <p class="mt-4 md:mt-6 text-md"><span class="futura-medium uppercase">Step 3:</span> In the results page, click on your occupation.</p>
                <p class="mt-4 md:mt-6 text-md"><span class="futura-medium uppercase">Step 4:</span> In the following page, scroll down to “2. Confirm the occupational regulations” and click on the “Regulations and Laws” tab.</p>
                <p class="mt-4 md:mt-6 text-md"><span class="futura-medium uppercase">Step 5:</span> Now that you have done the research, the third step is to work on how you will be framing yourself.</p>
                <p class="mt-2 text-md">The province or regulatory authority’s website will provide you with the steps you can pursue to be able to work in your dream job in Canada.</p>
                <p class="mt-2 text-md">You may also consider enrolling in bridging programs. Bridging programs help internationally-trained individuals gain access to training and support in Canada. This training helps you get a license or certificate that would be required to practice your profession in a Canadian province or territory.</p>           
                <p class="mt-2 text-md">Also keep in mind there are over 500 immigrant-serving organizations across Canada that provide completely free support to newcomers. The supports include help finding a job and help improving your English and French skills.</p>
                <p class="mt-6 md:mt-8 futura-medium text-xl text-gray-700">Popular Reads</p>
                <ul class="ml-4 mt-6 space-y-2 list-disc">
                    <li><a href="https://www.canada.ca/en/immigration-refugees-citizenship/services/new-immigrants/prepare-life-canada/prepare-work/credential-assessment/process.html" class="text-rose-700 underline">About credential recognition in Canada;</a></li>
                    <li><a href="https://www.cicic.ca/" class="text-rose-700 underline">Government information hub for credential recognition;</a></li>
                    <li><a href="https://www.cic.gc.ca/english/newcomers/services/index.asp" class="text-rose-700 underline">Where to find free newcomer services in Canada.</a></li>
                </ul>                     
            </div>
            {{-- Prepare-your-Resume-and-Cover-Letter --}}
            <div id="Prepare-your-Resume-and-Cover-Letter" class="mt-16 md:mt-24">
                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Working in a Regulated Occupation</h2>
                <p class="text-md">It is important to tailor your resume to the Canadian market to be successful.</p>
                <p class="mt-2 text-md">In this section, we highlight what you should be mentioning in your resume, what you shouldn’t mention in your resume, and how to write your cover letter.</p>
                <p class="mt-2 text-md"><span class="futura-medium uppercase">Step 1:</span> You will also learn how to write your cover letter and optimize your LinkedIn profile.</p>
                <p class="mt-4 md:mt-6 py-2 futura-medium text-xl text-gray-700">Make sure to have your resume in the Canadian format</p>
                <p class="mt-2 text-md">The Canadian resume tends to be more concise than other resumes around the world. You are encouraged to tailor your resume for each position you are applying for. Generic resumes do not go far in the Canadian job market.</p>
                <p class="mt-4 md:mt-6 text-md"><span class="futura-medium uppercase">Step 2:</span> Your resume should not be too long. If you don’t have much experience, one page is enough.</p>
                <p class="mt-4 md:mt-6 text-md"><span class="futura-medium uppercase">Step 3:</span> Your resume should grab the reader’s attention – quickly. Hiring managers usually have dozens, if not hundreds of resumes to go through. It’s your responsibility to stand out. It’s also recommended to make your resume easy to read and skim through.</p>
                <p class="mt-2 text-md">You can do this by making sure the resume has a clear flow from start to finish. Start with a career summary or overview at the start of the resume.</p>
                <p class="mt-4 md:mt-6 text-md"><span class="futura-medium uppercase">Step 4:</span> In the ‘Experience’ section, only mention roles that are relevant to the job you are applying for, unless you have a short career. Under each role, do not just list your duties, but mention your personal and team achievements. Focus on achievements that may convince the reader that you can help their organization. You can also include technical or software skills if it is appropriate for the role.</p>
                <p class="mt-2 py-2 futura-medium text-xl text-gray-700">Here are some more things that you should do on your resume:</p>
                <ul class="ml-4 mt-4 md:mt-6 space-y-2 list-disc">
                    <li><a href="https://www.canada.ca/en/immigration-refugees-citizenship/services/new-immigrants/prepare-life-canada/prepare-work/credential-assessment/process.html" class="text-rose-700 underline">About credential recognition in Canada;</a></li>
                    <li><a href="https://www.cicic.ca/" class="text-rose-700 underline">Government information hub for credential recognition;</a></li>
                    <li><a href="https://www.cic.gc.ca/english/newcomers/services/index.asp" class="text-rose-700 underline">Where to find free newcomer services in Canada.</a></li>
                </ul>
                <p class="my-4 md:mt-6 text-md"><span class="futura-medium uppercase">Step 5:</span> Now that you have done the research, the third step is to work on how you will be framing yourself.</p>
                <p class="mt-2 text-md">The province or regulatory authority’s website will provide you with the steps you can pursue to be able to work in your dream job in Canada.</p>
                <p class="mt-2 text-md">You may also consider enrolling in bridging programs. Bridging programs help internationally-trained individuals gain access to training and support in Canada. This training helps you get a license or certificate that would be required to practice your profession in a Canadian province or territory.</p>           
                <p class="mt-2 mb-4 md:mb-6 text-md">Also keep in mind there are over 500 immigrant-serving organizations across Canada that provide completely free support to newcomers. The supports include help finding a job and help improving your English and French skills.</p>
                <p class="py-2 futura-medium text-xl text-gray-700">Popular Reads</p>
                <ul class="ml-4 mt-4 space-y-2 list-decimal">
                    <li>Use just one font throughout your resume;</li>
                    <li>Convert your academic grades to the Canadian equivalent. For example, convert your high school grades to a GPA;</li>
                    <li>Include volunteer work if you have any;</li>
                    <li>Use keywords that are relevant to the job you are applying for in your resume;</li>
                    <li>If applicable, add certification and licensing;</li>
                    <li>If applicable, add your foreign language proficiency;</li>
                    <li>Include your contact information at the top, including a Canadian phone number.</li>
                </ul> 
                <p class="py-2 futura-medium text-xl text-gray-700">Here are some things that you should NOT include on your resume.</p>
                <ul class="ml-4 mt-4 space-y-2 list-decimal">
                    <li>The words “resume” or “curriculum vitae”;</li>
                    <li>References – it is assumed you already hInclude volunteer work if you have anyave references and employers will ask you for them if applicable;</li>
                    <li>Date of birth;</li>
                    <li>Gender;</li>
                    <li>Ethnicity or nationality;</li>
                    <li>Marital status</li>
                </ul>
                <p class="mt-4 md:mt-6 text-md">If you need help writing your resume in the Canadian format, you may be interested in CanadaVisa's Canadian Style Resume Builder.</p>                     
                <p class="py-2 futura-medium text-xl text-gray-700">How to write a cover letter?</p>
                <p class="mt-2 text-md">It is common to attach a cover letter alongside your resume when applying for a job. A cover letter is a short description of why you are a good fit for the job.</p>
                <p class="mt-2 text-md">Like your resume, your cover letter should also be tailored to each job you are applying for. For example, if you found out the hiring manager, mention his or her name in the beginning of your cover letter.</p>
                <p class="mt-2 text-md">Introduce yourself and the position you’re applying for. Then, answer this question: “why do you want this job?”.</p>
                <p class="mt-2 text-md">Next, indicate why your skills and experience make you a good candidate. Don’t just mention the same things that are on your resume. Your cover letter and resume should complement each other.</p>
                <p class="mt-2 text-md">Towards the end of your cover letter, thank the hiring manager and mention that you intend to follow up. You can also include any additional information you wish to include, such as a link to your website or portfolio.</p>
                <p class="mt-4 md:mt-6 py-2 futura-medium text-xl text-gray-700">How to optimize your LinkedIn profile</p>
                <p class="mt-4 text-md">LinkedIn is a social media platform that helps professionals connect with each other. You will be able to use it to connect with fellow professionals as well as potential employers. LinkedIn is also a popular website for job listings.</p>
                <p class="mt-2 mb-6 text-md">Whether or not you apply for a job through LinkedIn, your potential employer may choose to look you up on LinkedIn to learn more about you, even before calling you in for a face-to-face interview. This is why it is a good idea to have an optimized LinkedIn profile, even if you are not applying for a job on LinkedIn.</p>
                <p class="py-2 futura-medium text-xl text-gray-700">Here are some tips to help you optimize your profile.</p>
                <ul class="ml-4 mt-4 md:mt-6 space-y-2 list-decimal">
                    <li>Have a professional high-quality headshot as your profile picture. After all, your picture is likely the first thing that recruiters and hiring managers are looking at when visiting your profile;</li>
                    <li>Make sure your photo is recent, you are wearing business clothing, and the photo contains adequate lighting;</li>
                    <li>Add a good headline. This could be a current or previous job title so that recruiters will be able to find you;</li>
                    <li>Include a summary of who you are and what you do. In addition, mention the problems that you may be able to solve for potential employers;</li>
                    <li>Include relevant work experience and education. However, you don’t need to list out all of your duties and responsibilities for each role. Keep it short and sweet;</li>
                    <li>Ask for LinkedIn recommendations from your old managers. Having LinkedIn recommendations on your profile helps you stand out;</li>
                    <li>Include your contact your information in your profile (e.g., your email address).</li>
                    </ul>
            </div>
            {{-- Increase-your-Chances-by-Networking-in-Canada --}}
            <div id="Increase-your-Chances-by-Networking-in-Canada" class="mt-16 md:mt-24">
                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Increase your Chances by Networking in Canada</h2>
                <p class="my-4 text-gray-700">For newcomers to Canada, knowing how to network effectively can massively help you with your job hunt. In fact, networking can be crucial to finding a job in Canada.</p>
                <p class="mt-2 text-md">Networking can provide insights and invaluable advice on how to improve professionally, and provide you with career advice and job leads. It allows you to meet other professionals who can introduce you to new opportunities.</p>
                <p class="mt-2 text-md">Many jobs are not publicly advertised. This means that you have to be actively speaking to people and networking to uncover Canada’s “hidden job market”.</p>
                <p class="mt-2 text-md">Build a personal brand and get your name out there so that you can be considered the next time a job opportunity arises.</p>
                <p class="mt-6 py-2 futura-medium text-xl text-gray-700">Here is a list of things that you can do:</p>
                <ul class="ml-4 mt-4 space-y-2 list-decimal">
                    <li>
                        <p class="mb-4">Prepare a 30-second elevator pitch so that you know what to say when you do meet the right people. An elevator pitch is where you communicate your value over a short period of time in an elevator ride. Talk about your value and about what makes you different than others. Here is an example:</p>                        
                        <ul>
                            <li class="mb-2 max-w-2xl">“Hi, my name is Anand Patel. I’m a games developer with four years of experience in games built with Unity. In my last company, we focused on getting a game to market in just 3 months. I have just arrived from India and I’m looking to continue building my career in Canada. Do you happen to know anyone in this space?”</li>
                            <li class="max-w-2xl">Note that you should only say your elevator pitch if you are at a networking event and you are asked something along the lines of “What do you do?” or “What brings you to this event?”.</li>                            
                        </ul>
                    </li>
                    <li>If you already have some family, friends or acquaintances in Canada, ask them for help. They may introduce you to their connections and this may get you started on meeting the right people.</li>
                    <li>Find networking events or job fairs in your area related to your profession. Attend them, and continuously look to create new contacts. Find events on websites such as MeetUp.com and Eventbrite.com.</li>
                    <li>Consider spending some time volunteering. This will help you meet new people who may help you find a job. It will also help you gain Canadian work experience and will help familiarize you with the Canadian work culture.</li>
                    <li>If you’re not already on LinkedIn, get on LinkedIn. This professional social media platform has become a must-have for professionals looking to network with others in their field and for those who are looking for a job. On LinkedIn, you will be able to search for people and opportunities by location, job title, as well as other factors.</li>
                    <li>Join a professional association. These are groups of professionals within a particular industry or field. Joining a professional association can help you gather insights about the industry in Canada, and can also help you connect with key professionals. </li>
                </ul>   
                <p class="mt-4 md:mt-6 text-md">Another option is to look for a mentor. If you have a mentor who is a seasoned professional in your industry, this can benefit you greatly in your job search and beyond. IRCC's website lists <a href="http://www.cic.gc.ca/english/newcomers/map/services.asp" class="text-rose-700 underline">immigrant-serving organizations</a> that offer newcomers with free services such as mentorship, resume writing workshops, training sessions as well as other forms of employment assistance.</p>                                                                                     
            </div>
            {{-- Apply-for-Jobs --}}
            <div id="Apply-for-Jobs" class="mt-16 md:mt-24">
                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Apply for Jobs</h2>
                <p class="my-4 text-gray-700">In this section, you can familiarize yourself with the resources available to view job listings in Canada. </p>
                <p class="mt-2 text-md">There are many tools and resources available to help you to apply for jobs in Canada.</p>
                <p class="mt-4 md:mt-6 py-2 futura-medium text-xl text-gray-700 text-lg">Where to find job listings?</p>
                <p class="mt-2 text-md">Here is a list of websites that you can use to start looking for jobs:</p>                                    
                <p class="mt-2 text-md underline">Canada’s Job Bank</p>
                <p class="mt-2 text-md">This website is run by Employment and Social Development Canada (ESDC). ESDC is the Canadian federal government department responsible for Canada’s labour market as well as social programs. The website has a database of job listings and other employment services.</p>
                <p class="mt-2 text-md underline">Google for Jobs</p>
                <p class="mt-2 text-md">Use Google just as you would normally and you may find job listings compiled by Google. For example, you can search for “HR manager job in Toronto” and Google's job table will likely appear.</p>
                <p class="mt-2 text-md underline">LinkedIn</p>
                <p class="mt-2 text-md">LinkedIn is a social media platform for professionals to connect with each other. It also has a jobs section where you can find plenty of job listings in your desired location.</p>
                <p class="mt-4 md:mt-6 py-2 futura-medium text-xl text-gray-700">Other websites:</p>
                <ul class="ml-4 mt-4 space-y-2 list-decimal">
                    <li><a href="https://ca.indeed.com/" class="text-rose-700 underline">Indeed (ca.indeed.com)</a></li>
                    <li><a href="https://www.monster.ca/" class="text-rose-700 underline">Monster.ca</a></li>
                    <li><a href="https://www.ziprecruiter.com/Search-Jobs-Near-Me" class="text-rose-700 underline">ZipRecruiter</a></li>
                    <li><a href="https://www.glassdoor.ca/index.htm" class="text-rose-700 underline">Glassdoor.ca</a></li>
                    <li><a href="https://www.eluta.ca/" class="text-rose-700 underline">Eluta.ca</a></li>
                </ul>
            </div>
            {{-- Prepare-for-your-Interview --}}
            <div id="Prepare-for-your-Interview" class="mt-16 md:mt-24">
                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Prepare for your Interview</h2>
                <p class="my-4 text-gray-700">You’ve probably had job interviews before in your home country. Now, you want to learn about how you can prepare for a job interview in Canada. We get it. It can be difficult to attend interviews in a new country with a new work culture.</p>
                <p class="mt-4 md:mt-6 py-2 futura-medium text-xl text-gray-700">This is why we’ve written out this guide to help.</p>
                <p class="mt-4 py-2 futura-medium text-xl text-gray-700">1: Study the job description</p>
                <p class="mt-2 text-md">Make sure you understand everything laid out in the job description and listing. Based on this, you can plan on what questions you would like to ask the interviewer.</p>                                    
                <p class="mt-2 text-md">Now that you understand what the employer is looking for, try to frame yourself within their expectations.</p>
                <p class="mt-2 text-md">If there is, for example, a certain skill you lack, make sure you prepare powerful responses, and illustrate your ability and willingness to learn.</p>
                <p class="mt-4 md:mt-6 py-2 futura-medium text-xl text-gray-700">2: Research the employer</p>
                <p class="mt-2 text-md">Use the employer’s website, look at press releases and look at the employer's LinkedIn to research them before your interview.</p>
                <p class="mt-2 text-md">Understand their product or service offering. Find out if there are any recent updates in the news about the employer. Find information about the company culture.</p>
                <p class="mt-2 text-md">By getting to know the employer and its challenges, you may be able to provide stronger, tailored responses during your interview. This will also help you ask better questions during the interview.</p>
                <p class="mt-4 md:mt-6 py-2 futura-medium text-xl text-gray-700">3: Prepare for the “Tell me about yourself” question</p>
                <p class="mt-2 text-md">You don’t need to restate your full name. The interviewer already knows that. Give an overview about your experience and education. Mention something that you offer that no one else does. Now that you’ve researched the employer and studied the job description, try to frame yourself as a solution to a problem they may have.</p>
                <p class="mt-4 md:mt-6 py-2 futura-medium text-xl text-gray-700">4: Prepare for common interview questions</p>
                <p class="mt-2 text-md">Monster.com has a fantastic resource to help prepare you for basic questions, behavioural questions, salary questions and career development questions. <a href="https://www.monster.com/career-advice/article/100-Potential-Interview-Questions" class="text-rose-700 underline">You can find the resource here</a>.</p>
                <p class="mt-2 text-md">It is important to note that many of the questions in Canadian style interviews are behavioural-based. An example of a behavioural-based question is: “Have you had an experience with this sort of challenge before?”. They would expect to hear stories that demonstrate your behaviour in certain scenarios.</p>
                <p class="mt-2 text-md">For this reason, try to remember various scenarios in your past experience, and how you reacted, so you can bring them up during your interviews.</p>
                <p class="mt-2 text-md">In addition, if you would like to prepare for the question about your expected salary, it may be a good idea to use CanadaVisa's Salary Survey to learn more about the Canadian market.</p>
                <p class="mt-2 text-md">When you practice answering questions, do so with your speaking voice (out loud), and maintain a professional body posture, as you would in a real interview.</p>
                <p class="mt-2 text-md">You can’t always prepare for every question that would be asked. Therefore, it is important to prepare yourself mentally to hear questions you were not expecting, and be prepared to think on your feet.</p>
                <p class="mt-4 md:mt-6 py-2 futura-medium text-xl text-gray-700">5: Practice your interview</p>
                <p class="mt-2 text-md">When you’re done preparing for interview questions, practice your interview with family or friends. You can also participate in mock interviews. A mock interview is a practice interview to help you train for the real thing. Many immigrant-serving organizations and staffing agencies offer free mock interviews. They will give you feedback on how to improve your interview skills.</p>
                <p class="mt-4 md:mt-6 py-2 futura-medium text-xl text-gray-700">6: Prepare a copy of your CV, your portfolio and work samples</p>
                <p class="mt-2 text-md">Make sure they are up to date and organized. Bring hardcopies with you to the interview.</p>
                <p class="mt-4 md:mt-6 py-2 futura-medium text-xl text-gray-700">7: During the interview</p>
                <p class="mt-2 text-md">Remember to dress professionally on the day of the interview. Maintain eye contact during the interview, even if it is online.</p>
                <p class="mt-2 text-md">Be mindful of your body language during the interview.</p>
                <p class="mt-2 text-md">If your interview is virtual, test your connection beforehand, and make sure you are in a quiet environment.</p>
                <p class="mt-4 md:mt-6 py-2 futura-medium text-xl text-gray-700">8: After the interview</p>
                <p class="mt-2 text-md">After your interview, stand out by sending an email to your interviewer to thank them for the opportunity. Be patient. It is common for the hiring process to take longer than what the employer says in the interview. Do not lose hope if you do not hear from the employer for several weeks. If you have not heard from them after the period they indicated to you, then send one brief follow up email highlighting your continued interest in working for the employer.</p>                                   
            </div>
            {{-- Frequently-Asked-Questions --}}
            <div class="mt-16 md:mt-24" id="Frequently-Asked-Questions">
                <h2 class="hedvig-regular text-gray-800 mb-8 text-3xl text-4xl md:text-5xl max-w-xl">Frequently Asked Questions</h2>
                <x-faq-item trigger="How long should my resume be in Canada?">
                    Your resume should be around two pages long. If you do not have much experience, one page is enough.
                </x-faq-item>
                <x-faq-item trigger="How do I shorten my CV?">
                    Don’t mention jobs that you had earlier on in your career. For past jobs that are less relevant to the position, you can mention them in just one or two lines each.
                        <br><br>You do not need to include references, a signature, your date of birth, gender, ethnicity, nationality or marital status.
                </x-faq-item>
                <x-faq-item trigger="Should I mention all of my work history on my CV?">
                    Only mention your whole work history if it is relevant to the job you are applying for. Your CV should only include essential information. Include your recent employers, and/or the employers that are relevant to the job.
                </x-faq-item>
                <x-faq-item trigger="Should I mention my references on my CV?">
                    Generally, you do not need to include the references on your CV. The employer will ask for their contact details if he or she wishes.
                    <br><br>If it states in the job listing that the employer will want to contact your references, then you can include them on your CV.
                </x-faq-item>
                <x-faq-item trigger="Should I apply for jobs in person?">
                    You do not need to apply for jobs in person in Canada.
                </x-faq-item>
                <x-faq-item trigger="Do I have to write a cover letter?">
                    It is common to attach a cover letter alongside your resume when applying for a job. A cover letter is a short description of why you are a good fit for the job.
                    <br><br> If your resume does not convey everything you would like, then a cover letter is a good idea.
                </x-faq-item>
                <x-faq-item trigger="What do I mention in a cover letter?">
                    Introduce yourself and the position you’re applying for, and indicate why your skills and experience make you a good candidate. Don’t just mention the same things that are on your resume. Your cover letter and resume should complement each other.
                    <br><br>Bonus tip: do your research on the company, and mention something specific about why you’re a good fit.
                </x-faq-item>
            </div>
            <!-- link button -->
            <div class="mt-6 py-6">
                <x-link-one href="{{ route('contact') }}">Contact us for further assistance</x-link-one>
            </div>
        </div>
        {{-- aside --}}
        <div class="hidden md:block col-span-4 lg:col-span-1 px-4 md:px-6 bg-gradient-to-b from-gray-200 from-[5vh] via-gray-100 via-[65vh] to-gray-50">
            <p class="text-gray-700 text-xl mt-4 futura-medium mb-6">
                Immigration Tools
            </p>
            
            <ul class="space-y-2 pl-2 mt-2" role="list">
                <li>
                    <a href="{{ route('crs') }}"
                        class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                        Crs calculator
                        <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('pnp_finder') }}"
                        class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                        PNP Finder
                        <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('clb_converter') }}"
                        class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                        CLB Converter
                        <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('imp') }}"
                        class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                        Immigration Processing time
                        <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('job_finder') }}"
                        class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                        Job Finder
                        <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('visiting_canada') }}"
                        class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                        Visiting Canada
                        <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
            </ul>
            <p class="text-gray-700 text-md mt-4 md:mt-8 mb-6">
                Evaluate your eligibilty for visa using our free tool to know your immigration status.
            </p>
            <div class="py-6">
                <x-link-one href="{{ route('assessment') }}">visa assessment</x-link-one>
            </div>
        </div>
    </section>
</x-app-layout> 