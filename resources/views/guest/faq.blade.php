<x-app-layout> 
    {{-- BREADCRUMB --}}
    <x-breadcrumb>
        <x-slot:topic>Firm</x-slot>
        <x-slot:subtopic>FAQs</x-slot>
    </x-breadcrumb>
    <!-- Header -->
    <x-header>
        <x-slot:maintitle>Frequently asked questions</x-slot>
        <x-slot:subtitle>Discover some of the most asked question about {{config('app.name')}} and Canada immigration</x-slot>
    </x-header> 
     {{-- BODY --}}
     <section class="grid grid-cols-4">
        {{-- MAIN --}}
        <div class="col-span-4 lg:col-span-3 pt-12 pb-24 px-4 md:px-6 lg:px-10 bg-gray-50 text-gray-600">                              
            <h2 class="hedvig-regular text-gray-800 mb-4 md:mb-6 lg:mb-8 text-4xl md:text-5xl max-w-xl">
                Read on find out most asked questions
            </h2>
            <p class="text-lg">
                Our team of experienced immigration professionals has compiled these FAQs based on the inquiries we receive most frequently from clients like you. We hope these answers will address your concerns and provide you with the confidence to move forward with your plans to immigrate to Canada.                             
            </p>  
            <p class="text-lg mt-2">
                If you have a question that isn't covered here, please don't hesitate to contact us directly. Our dedicated team is always ready to assist you with personalized advice and support.    
            </p>              
            <!-- link button -->
            <div class="mt-6 py-6">
                <x-link-two href="{{ route('contact') }}">Contact us for further enquiries</x-link-two>
            </div>
            {{-- Frequently-Asked-Questions --}}
            <div class="mt-8" id="Frequently-Asked-Questions">
                <x-faq-item trigger="When can I expect to receive a response to my inquires?">
                    {{config('app.name')}} makes every effort to respond to all inquiries that are not addressed by our FAQ 
                    (Frequently Asked Questions) page within one (1) business day. Business days in Canada are 
                    Monday to Friday, 09:00 to 17:00, Eastern Time. Please contact our office ONLY if your 
                    inquiry does not appear on our FAQ page and we have not acknowledged receipt of your 
                    communication within one (1) business day from the time of receipt.
                </x-faq-item>
                <x-faq-item trigger="Why does your firm insist upon e-mail communication?">
                    Not only is e-mail the most expeditious and efficient form of communication but, we require a written record of ALL of our communications with you.
                    <br><br>Each and every piece of correspondence that we receive from you is stored by our firm 
                    in physical and electronic files in our office. To reduce confusion and expedite your case it 
                    is important that you include your file number and contact information on every piece of 
                    correspondence to allow us to devote our full attention to working on your file, thereby 
                    achieving the best possible results for you and exceeding your expectations.
                </x-faq-item> 
                <x-faq-item trigger="Why have I received an e-mail from a legal assistant?">
                    The legal assistants at {{config('app.name')}} work under the supervision of standard operational procedures 
                    of {{config('app.name')}}. All incoming and outgoing e-mail is reviewed (and approved when outgoing) by 
                    either {{config('app.name')}}.
                </x-faq-item>
                <x-faq-item trigger="What is permanent residence in Canada?">
                    Obtaining "permanent residence" or "permanent resident status" in Canada is also known as 
                    "immigrating to Canada" or becoming a "landed immigrant." The successful end result of the 
                    Immigration process is the issuance of an “immigrant visa” or “confirmation of permanent 
                    residence document”. Persons to whom an immigrant visa/confirmation of permanent residence 
                    document has been issued must present themselves to an Immigration officer at one of Canada's 
                    official ports of entry in order to become landed immigrants.
                </x-faq-item>
                <x-faq-item trigger="What benefits do I have if I am a permanent resident of Canada?">
                    Canadian permanent residents/landed immigrants and citizens enjoy all of the same rights 
                    and privileges (i.e. free health care, free elementary and secondary education, etc.) 
                    with three (3) exceptions:
                    <ul class="mt-4 ml-4 space-y-2 list-disc w-full">
                        <li>Permanent residents cannot vote;</li>
                        <li>Permanent residents cannot hold a Canadian passport; and</li>
                        <li>Permanent residents can be deported for certain criminal convictions.</li>
                    </ul>
                </x-faq-item>
                <x-faq-item trigger="Once I am a permanent resident of Canada, do I have to stay in Canada?">
                    Obtaining "permanent residence" or "permanent resident status" in Canada is also known as "immigrating to Canada" or becoming a "landed immigrant." The successful end result of the Immigration process is the issuance of an “immigrant visa” or “confirmation of permanent residence document”. Persons to whom an immigrant visa/confirmation of permanent residence document has been issued must present themselves to an Immigration officer at one of Canada's official ports of entry in order to become landed immigrants.
                </x-faq-item>       
                <x-faq-item trigger="What benefits do I have if I am a permanent resident of Canada?">
                    <p class="py-3">
                        Canadian permanent residents/landed immigrants and citizens enjoy all of the same rights and privileges (i.e. free health care, free elementary and secondary education, etc.) with three (3) exceptions:
                    </p>
                    <ul class="ml-4 list-disc space-y-2 mt-4 w-full text-xl" role="list">
                        <li>Permanent residents cannot vote;</li>
                        <li>Permanent residents cannot hold a Canadian passport; and</li>
                        <li>Permanent residents can be deported for certain criminal convictions.</li>
                    </ul>
                </x-faq-item>
                <x-faq-item trigger="What are the criteria to retain Canadian permanent resident">
                    <p class="py-3">
                        Within any five (5) year period, a permanent resident must be:
                    </p>
                    <ul class="ml-4 list-disc space-y-2 mt-4 w-full" role="list">
                        <li>physically present in Canada for at least 730 days (two (2) years) in that five (5) year period OR</li>
                        <li>outside of Canada, accompanying a Canadian citizen, who is his or her spouse or common-law partner or a child accompanying a parent OR</li>
                        <li>outside of Canada, employed on a full-time basis by a Canadian business OR</li>
                        <li>an accompanying spouse, common-law partner or child of a permanent resident, who is outside Canada and is employed on a full-time basis by a Canadian business.</li>
                    </ul>
                </x-faq-item>            
                <x-faq-item trigger="How can I become a permanent resident of Canada?">
                    <p class="py-3">
                        To be eligible to immigrate to Canada, one must meet the requirements of one of the many catergories of Canadian Immigration:
                    </p>
                    <ul class="ml-4 list-disc space-y-2 mt-4 w-full" role="list">
                        <li>Federal Skilled Worker Class</li>
                        <li>Federal Skilled Trades Class</li>
                        <li>Canadian Experience Class</li>
                        <li>Business Class</li>
                        <li>Family Class</li>
                        <li>and apply for Permanent Residence in Canada through a designated Case Processing Centre/Centralized Intake Office.</li>
                    </ul>
                </x-faq-item>
                <x-faq-item trigger="What do I mention in a cover letter?">
                    Introduce yourself and the position you’re applying for, and indicate why your skills and experience make you a good candidate. Don’t just mention the same things that are on your resume. Your cover letter and resume should complement each other.
                        <br><br>Bonus tip: do your research on the company, and mention something specific about why you’re a good fit.
                </x-faq-item>
                <x-faq-item trigger="How can I become a citizen of Canada?">
                    After having resided in Canada for a total of 1095 days within a consecutive five year 
                        period of time as a permanent resident of Canada, one is eligible to apply for 
                        Citizenship. If you believe you are eligible to apply for Canadian Citizenship and wish 
                        our assistance, please submit your inquiry online at <a href="{{route('contact')}}" class="text-rose-700 underline">our contact page</a>
                        and if haven't checked your eligibilty status go ahead to use <a href="{{route('assessment')}}" class="text-rose-700 underline">our free online eligibility tool.</a>
                </x-faq-item>
                <x-faq-item trigger="I would like to obtain a Work Permit. Can you help me?">
                    Yes. Please review the information on our website pertaining to <a href="{{route('work_permit')}}" class="text-rose-700 underline">Work Permits</a>.
                </x-faq-item>
                <x-faq-item trigger="I would like to obtain a Study Permit. Can you help me?">
                    Yes. Please review the information on our website pertaining to <a href="{{route('study_immigration')}}" class="text-rose-700 underline">Study Permits</a>.
                </x-faq-item>
                <x-faq-item trigger="How can I determine if I am eligible to become a permanent resident of Canada/to sponsor a family member to become a permanent resident of Canada?">
                    If you are interested in immigrating to Canada or sponsoring a family member to immigrate to Canada, we invite you to visit our Online Eligibility Assessment Questionnaire, which is designed to enable our firm's team of lawyers to assess your qualifications for Immigration to Canada/your eligibility to sponsor a family member to immigrate to Canada in accordance with Citizenship and Immigration Canada's selection criteria, at no charge to you, usually within a few hours but no more than one (1) business day from the time that your Questionnaire is received. Business days in Canada are from 09:00 to 17:00, Eastern Time, Monday to Friday.
                    <br><br>If {{config('app.name')}} determines that we can assist you to immigrate to Canada/sponsor a family member to immigrate to Canada, a member of our firm will provide you with a detailed breakdown of Abrams & Krochak's fees and services, via e-mail. Our Online Eligibility Assessment Questionnaire can be accessed by visiting <a href="{{route('assessment')}}" class="text-rose-700 underline">here.</a>
                </x-faq-item>
                <x-faq-item trigger="I have not received your assessment of my qualifications for Immigration to Canada. When can I expect to receive it?">
                    All those completing our free Online Eligibility Assessment Questionnaire will receive a response. In many cases, we may have an incorrect e-mail address from you or our response may have been filtered into your Junk/Bulk/Spam mail folder (if applicable). Please check your Junk/Bulk/Spam mail folder before you contact us.
                </x-faq-item>
                <x-faq-item trigger="I completed your Online Eligibility Assessment Questionnaire and got a response within minutes! Your Questionnaire MUST be automated. I would appreciate it if a lawyer reviewed my qualifications.">
                    Please note that your Online Eligibility Assessment Questionnaire has been personally 
                    assessed by Attorney Isadora Richmond of our firm and, despite the speed of the 
                    evaluation, we wish to assure you that our e-mail is not an automated response. 
                    Mr. Isadora reviews and assesses all incoming Online Eligibility Assessment 
                    Questionnaires within one (1) business day, fifty-two (52) weeks per year and 
                    is known to work during non-business hours to accommodate the multitude of time zones 
                    around the world from which Questionnaires and inquiries originate.
                </x-faq-item>
                <x-faq-item trigger="Can I send you my curriculum vitae/résumé to assess?">
                    No. If you would like your qualifications for Immigration to Canada assessed by our firm, we wish to advise you that we do not assess qualifications on the basis of a curriculum vitae/résumé. To have your qualifications assessed by our firm, please fill out our Online Eligibility Assessment Questionnaire.
                </x-faq-item>
                <x-faq-item trigger="I have questions related to your assessment of my qualifications for Immigration to Canada. I wish to telephone your firm. May I do so?">
                    We would be delighted to speak with you over the telephone and answer any questions that you might have. We can be reached, via telephone, between the hours of 09:00 and 17:00, Eastern Time, Monday to Friday at {{config('app.company.phone')}}.
                </x-faq-item>
                <x-faq-item trigger="I will be in Toronto next month and would like to schedule an appointment to meet with Mr. Abrams to discuss his assessment of my qualifications for Immigration to Canada. May I do so?">
                    By all means, you are welcome to come to our office. Because Attorney Isadora is 
                    responsible for maintaining correspondence, via e-mail, with our many clients around 
                    the world as well as the thousands of individuals, such as yourself, who seek information 
                    over the Internet, Attorney Alexander Lowery meets with potential clients in our office while 
                    Attorney Isadora looks after the e-mail. Should you wish to schedule an appointment, 
                    please telephone Attorney Isadora at +1-416-482-3387 between the hours of 09:00 and 17:00,
                        Eastern Time, Monday to Friday. Generally speaking, Attorney Isadora charges a 300 CAD 
                        consultation fee for an appointment. If you subsequently become a client of 
                        {{config('app.name')}}, the 300 CAD consultation fee will be deducted from {{config('app.name')}}'s legal fees.
                </x-faq-item>
                <x-faq-item trigger="Can I send you my curriculum vitae/résumé to assess?">
                    Please be advised that we shall be pleased to answer any and all specific questions that you might have with respect to documentary requirements if and when you become our client. We cannot, however, inform you as to which supporting documents are required from you before you formally retain our services.
                    <br><br>We strongly recommend that you do NOT go to the time and expense of acquiring and translating supporting documents until such time as you have received our firm's preliminary package, which contains detailed instructions regarding the format and substance that your supporting documents must take to maximize your chances of success and interview waiver.
                </x-faq-item>
                <x-faq-item trigger="Do you have a branch office in my country?">
                    Please note that we do not have branch offices. We effectively represent thousands of individuals on all six (6) continents from our offices here in Toronto, Canada, through the use of e-mail, fax, telephone, mail and courier.
                </x-faq-item>
                <x-faq-item trigger="Do you have a representative or agent in my country whom I can contact?">
                    No, we do not have agents and no individual and/or organization is authorized to represent our interests in Canada and/or abroad. If individuals are interested in using our services, we would prefer that they contact us, directly, rather than through a third party.
                </x-faq-item>
                <x-faq-item trigger="Do you have a representative or agent in my country whom I can contact?">
                    No, we do not have agents and no individual and/or organization is authorized to represent our interests in Canada and/or abroad. If individuals are interested in using our services, we would prefer that they contact us, directly, rather than through a third party.
                </x-faq-item>
                <x-faq-item trigger="Why do I need to use your services? Why can I not apply for Permanent Residence in Canada on my own?">
                    We have been approached by countless individuals, who informed us that they knew that 
                    they were qualified to immigrate to Canada and had all of the necessary documents and 
                    then went ahead to apply for Permanent Residence in Canada on their own and failed. It 
                    is true that there is not much that our firm can do insofar as some of your documents 
                    are concerned (i.e. a birth certificate is a birth certificate, a marriage certificate 
                    is a marriage certificate, etc.); however, we caution you, now, that if your letters of 
                    reference are in the least bit deficient or your Application forms have not been 
                    completed, correctly, you will surely jeopardize the expeditious processing of your 
                    Application for Permanent Residence. Among the services that we provide are ensuring 
                    that your letters of reference comply with Citizenship and Immigration Canada's 
                    standards; ensuring that your Application forms have been filled out correctly 
                    (incidentally, we rarely have seen the forms filled out correctly); and drafting 
                    written, legal arguments, which will accompany your Application package and which will 
                    argue why you should be issued Canadian Permanent Residence. The analogy we provide 
                    where our arguments are concerned is that of a painter. Paint, in and of itself, is 
                    beautiful. However, paint has no meaning unless it is used by a painter to paint a 
                    beautiful picture. In the Immigration context, your qualifications may be impressive; 
                    however, if you do not have effective representation whereby a lawyer will highlight 
                    your qualifications for Citizenship and Immigration Canada officials to appreciate, your 
                    qualifications can get lost/overlooked in your mountain of supporting documents.
                </x-faq-item>
                <x-faq-item trigger="Are you Immigration Consultants?">
                    Please note that we are NOT Immigration consultants; rather, we are Immigration lawyers. While lawyers and consultants are both regulated by their respective regulatory bodies, a lawyer has completed a university law degree, which is not a requirement for becoming licensed as a consultant. Please keep this information in mind when choosing your representative.
                            <br><br> Please also note that should your Application for Permanent Residence in Canada be refused, only an Immigration Lawyer can represent you in the Federal Court of Canada. Immigration Consultants are NOT permitted to do so.
                </x-faq-item>
                <x-faq-item trigger="If I use your services, how quickly does your firm work?">
                    The speed with which we work depends entirely upon you. If you give us what we need in a timely fashion and follow our instructions, we can work quickly. If you do not give us what we need in a timely fashion or do not follow our instructions, properly, processing will take longer.
                </x-faq-item>
                <x-faq-item trigger="Are you sure that I qualify?">
                    Please note that we are very cautious about the types of cases we positively assess. Our 
                    firm enjoys a near 100% success rate with clients, who retain us, via the Internet 
                    because we do not accept cases that are borderline and that have no hope of succeeding. 
                    Suffice it to say, if we positively assessed your qualifications for Immigration to 
                    Canada, we believe that you stand a very good chance of applying for and receiving 
                    Canadian Permanent Residence with our assistance. We do not believe in wasting people's 
                    time and money and our reputation is far too important for us to risk making "quick" 
                    profits at our clients' expense. Our firm thrives on referrals from satisfied clients.
                </x-faq-item>
                <x-faq-item trigger="I would like to retain your services but not until next year sometime. May I do so?">
                    As Canadian Immigration laws, regulations and policies are always subject to change at any time without advance notice, we can make no assurances to you whatsoever that you will still qualify if you defer your proposed Canadian Immigration plans to a later date.
                </x-faq-item>
                <x-faq-item trigger="Can I pay your legal fees once I receive Permanent Residence and arrive in Canada?">
                    Regrettably, our legal fees and schedule of payments are non-negotiable (i.e. we do not operate on a "fly now, pay later" basis).
                </x-faq-item>
                <x-faq-item trigger="I have already applied for and received Permanent Residence in Canada on my own. Can you assist me to find a job and accommodation in Canada?">
                    Regrettably, we do not provide job search/settlement services separate and apart from our Canadian Immigration legal services but we can help fine tune your 
                            knowledge concerning finding a job easily by <a href="{{route('job_finder')}}" class="text-rose-700 underline">showing your what you need to know.</a>
                </x-faq-item>
                <x-faq-item trigger="Can your firm assist me to apply for Canadian Citizenship?">
                    Yes, we can. Kindly contact us through <a href="{{route('contact')}}" class="text-rose-700 underline">our contact page.</a>
                </x-faq-item>

                <!-- bordered card -->
                <div class="mt-8 md:mt-10 px-4 py-4 w-full md:w-[70%] rounded-lg border border-gray-300 hover:border-rose-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
                    </svg>
                    <p>
                        Do you still have some unanswered questions and will like to make a direct inquiry? Endevor to get in touch with a representative.
                    </p>
                    <p>
                        Visit our <a href="{{route('contact')}}" class="text-rose-700 underline">Contact page</a> so as to drop your question in our contact form. 
                    </p>
                </div>
            </div>                                 
        </div>
        {{-- aside --}}
        <div class="hidden md:block col-span-4 lg:col-span-1 px-4 md:px-6 bg-gradient-to-b from-gray-200 from-[5vh] via-gray-100 via-[65vh] to-gray-50">            
            <p class="text-gray-700 text-xl mt-4 futura-medium mb-6">
                About {{config('app.name')}} links
            </p>
            <ul class="space-y-2 pl-2 mt-2" role="list">
                <li>
                    <a href="{{ route('about') }}"
                        class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                        About Us
                        <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('about').'#vision' }}"
                        class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                        Working ethics and values
                        <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('about').'#team' }}"
                        class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                        Our Team
                        <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('about').'#reviews' }}"
                        class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                        Clients Reviews
                        <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('FAQ') }}"
                        class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                        Frequently asked questions
                        <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
            </ul>
            <p class="text-gray-700 text-md mt-4 md:mt-8 mb-6">
                Do you need any assistance or want to make further enquiries? Get in touch with us right away.
            </p>
            <div class="py-6">
                <x-link-one href="{{ route('contact') }}">Speak to an advisor</x-link-one>
            </div>
        </div>
    </section>
</x-app-layout> 