<x-app-layout> 
    {{-- breadcrumb --}}
    <x-breadcrumb>
        <x-slot:topic>immigration</x-slot>
        <x-slot:subtopic>Sponsorship</x-slot>
    </x-breadcrumb>
    {{-- HEADER --}}
    <x-side-image-header :url="route('sponsorship_assessment')" :source="asset('images/sponsor.jpg')" button-text="Apply today">
        <x-slot:maintitle>Sponsorship immigration</x-slot>
        <x-slot:subtitle>Learn more about Canadian Sponsorship immigration and all the acceptable options.</x-slot>
    </x-side-image-header>    
    {{-- BODY --}}
    <section class="grid grid-cols-4">
        {{-- MAIN --}}
        <div class="col-span-4 lg:col-span-3 pt-12 pb-24 px-4 md:px-6 lg:px-10 bg-gray-50 text-gray-600">
            {{-- main content --}}           
            <h2 class="hedvig-regular text-gray-800 mb-8 text-3xl text-4xl md:text-5xl max-w-xl">

                Sponsor your Family to Immigrate to Canada

            </h2>

            <p class="text-lg max-w-3xl mb-6 md:mb-8">

                As a nation with a commitment to family reunification and keeping loved ones together, Canada offers a number of immigration programs that give Canadians the opportunity to sponsor their family members to Canada.

            </p>                           

            {{-- contact work --}}
            <div class="px-4 py-4 rounded-lg border border-gray-300 max-w-xl">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
                </svg>
                <p class="max-w-lg">
                    Our free sponsorship visa eligibility assessment tool helps you to know if you can sponsor or be sponsored to immigrate to Canada.
                </p>
                <p class="mt-6">
                    <a href="{{route('sponsorship_assessment')}}"
                        class="inline-flex cursor-pointer text-rose-700 hover:text-rose-800 text-sm uppercase futura-medium rounded-2xl py-3 px-5 border-2 border-rose-700 hover:border-rose-800 hover:bg-white">
                        Find out more about your eligility
                    </a>
                </p>
            </div>

            {{-- table of content --}}
            <div class="my-10">

                <p class="py-2 futura-medium text-xl text-gray-700">Everything you need to know</p>

                <ul class="ml-4 space-y-2" role="list">

                    <li><a href="{{route("sponsorship_immigration").'#What-is-family-class-sponsorship'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                    </svg>

                    </span><span class="underline">What is family class sponsorship?</span></a></li>

                    <li><a href="{{route("sponsorship_immigration").'#Who-can-I-sponsor-to-come-to-Canada'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                    </svg>

                    </span><span class="underline">Who can I sponsor to come to Canada?</span></a></li>

                    <li><a href="{{route("sponsorship_immigration").'#How-can-I-be-eligible-to-sponsor-a-family-member'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                    </svg>

                    </span><span class="underline">How can I be eligible to sponsor a family member?</span></a></li>

                    <li><a href="{{route("sponsorship_immigration").'#Who-isnt-eligible-to-sponsor-a-relative'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                    </svg>

                    </span><span class="underline">Who isn’t eligible to sponsor a relative?</span></a></li>

                    <li><a href="{{route("sponsorship_immigration").'#How-much-does-it-cost-to-sponsor-a-family-member-in-Canada'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                    </svg>

                    </span><span class="underline">How much does it cost to sponsor a family member in Canada?</span></a></li>

                    <li><a href="{{route("sponsorship_immigration").'#What-is-the-income-requirement-for-Canada-family-sponsorship'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                    </svg>

                    </span><span class="underline">What is the income requirement for Canada family sponsorship?</span></a></li>

                    <li><a href="{{route("sponsorship_immigration").'#Do-I-need-a-job-to-sponsor-a-family-member'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                    </svg>

                    </span><span class="underline">Do I need a job to sponsor a family member?</span></a></li>                               

                    <li><a href="{{route("sponsorship_immigration").'#How-long-does-sponsorship-take'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                    </svg>

                    </span><span class="underline">How long does sponsorship take?</span></a></li>

                    <li><a href="{{route("sponsorship_immigration").'#What-other-options-do-I-have-to-bring-my-family-member-to-Canada'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                    </svg>

                    </span><span class="underline">What other options do I have to bring my family member to Canada?</span></a></li>

                    <li><a href="{{route("sponsorship_immigration").'#How-many-relatives-can-I-sponsor-to-Canada'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                    </svg>

                    </span><span class="underline">How many relatives can I sponsor to Canada?</span></a></li>

                    <li><a href="{{route("sponsorship_immigration").'#Sponsoring-a-family-member-from-Quebec'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                    </svg>

                    </span><span class="underline">Sponsoring a family member from Quebec</span></a></li>                                    

                </ul>                              

            </div>

            {{-- Applying for Family Class Sponsorship --}}
            <div class="my-10">

                <p class="py-2 futura-medium text-xl text-gray-700">Applying for Family Class Sponsorship</p>

                <ul class="ml-4 space-y-2" role="list">

                    <li><a href="{{route("sponsorship_immigration").'#Canada-sponsorship-background-check'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                    </svg>

                    </span><span class="underline">Canada sponsorship background check</span></a></li>

                    <li><a href="{{route("sponsorship_immigration").'#Canada-sponsorship-biometrics'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                    </svg>

                    </span><span class="underline">Canada sponsorship biometrics</span></a></li>

                    <li><a href="{{route("sponsorship_immigration").'#Canada-sponsorship-medical-exam'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                    </svg>

                    </span><span class="underline">Canada sponsorship medical exam</span></a></li>

                    <li><a href="{{route("sponsorship_immigration").'#How-do-I-check-the-status-of-my-sponsorship-application'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                    </svg>

                    </span><span class="underline">How do I check the status of my sponsorship application?</span></a></li>

                    <li><a href="{{route("sponsorship_immigration").'#Is-there-a-deadline-for-Canadian-sponsorship-applications'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />

                    </svg>

                    </span><span class="underline">Is there a deadline for Canadian sponsorship applications?</span></a></li>

                </ul>                              

            </div>

            {{-- What-is-family-class-sponsorship --}}
            <div id="What-is-family-class-sponsorship" class="mt-16 md:mt-24">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">What is family class sponsorship?</h2>

                <div class="">

                    <p>Canada offers sponsorship programs for permanent residents or citizens of Canada that wish to bring their loved ones to Canada. These programs allow certain family members to become permanent residents of Canada. One of the most popular streams of Canadian immigration, family sponsorship programs makes it easy for citizens and permanent residents to bring their spouse and immediate family members to Canada with reduced processing times because Canada knows that family should never be put on hold.

                    </p>                                        

                </div>

            </div>

            {{-- Who-can-I-sponsor-to-come-to-Canada --}}
            <div class="mt-16 md:mt-24" id="Who-can-I-sponsor-to-come-to-Canada">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Who can I sponsor to come to Canada?</h2>

                <div class="">

                    {{-- Spouse, Common-law, or Conjugal Partner --}}

                    <div class="">

                        <p class="py-2 futura-medium text-xl text-gray-700">

                            Spouse, Common-law, or Conjugal Partner

                        </p> 

                        <p class="text-base">You may be eligible to <a href="javascript:void(0)" class="text-red-600 underline">sponsor your spouse, common-law, or conjugal partner</a> for Canadian permanent residence, whether they are living in Canada with a valid temporary visa or residing abroad. Applicants who are living in Canada may also qualify for an open work permit, giving couples the chance to relieve some of their financial burdens.</p>   

                        <p class="text-base mt-2">A <a href="javascript:void(0)" class="text-red-600 underline">spousal open work permit</a> gives sponsored individuals the ability to work in Canada while their sponsorship application is being processed. Since Canada recognizes common-law partnerships, you may be eligible to apply for spousal sponsorship if you and your partner are not married but have been living together for a period of at least one year.</p>                                      

                    </div>

                    {{-- Parent or Grandparent Sponsorship --}}

                    <div class="mt-4">

                        <p class="py-2 futura-medium text-xl text-gray-700">

                            Parent or Grandparent Sponsorship

                        </p> 

                        <p class="text-base">Canada’s commitment to family reunification extends to <a href="javascript:void(0)" class="text-red-600 underline">parents and 

                            grandparents</a> of Canadian citizens and permanent residents through the parent and 

                            grandparent sponsorship program. In order to sponsor a parent or grandparent, citizens 

                            and permanent residents will be required to demonstrate that they can financially support 

                            their family by meeting the <a href="javascript:void(0)" class="text-red-600 underline">Minimum Necessary Income (MNI)</a> for the size of their family 

                            unit. They must also agree to financially support their sponsored family members if 

                            needed. Sponsors who are unable to permanently support their parent or grandparent may 

                            be eligible for a Super Visa, a long term, multiple-entry visa for parents and 

                            grandparents of Canadian citizens and permanent residents.</p>                                            

                    </div> 

                    {{-- Child or Other Dependant Sponsorship --}}

                    <div class="mt-4">

                        <p class="py-2 futura-medium text-xl text-gray-700">

                            Child or Other Dependant Sponsorship

                        </p> 

                        <p class="text-base">If you are immigrating to Canada, you can choose to include your 

                            children as accompanying dependents on your application for permanent residence. 

                            However, if you choose not to include them, or are otherwise unable to do so, they 

                            may still be able to join you in Canada later. <span class="text-gray-800">Canada’s child sponsorship program</span> 

                            allows Canadian citizens and permanent residents to sponsor their biological or adopted 

                            children under the age of 22 for permanent residence, as long as they are unmarried and 

                            have no children of their own. A child over the age of 22 may be considered a dependent 

                            if they suffer from a physical or mental condition that prevents them from being able to 

                            support themselves.</p>                                            

                    </div> 

                    {{-- Orphaned brother, sister, nephew, niece, or grandchild --}}

                    <div class="mt-4">

                        <p class="py-2 futura-medium text-xl text-gray-700">

                            Orphaned brother, sister, nephew, niece, or grandchild

                        </p> 

                        <p class="text-base">In some specific instances, Canadian citizens or Permanent Residents may be eligible to sponsor their orphaned brother, sister, nephew, niece, or grandchild to come to Canada. To sponsor your orphaned relative, they must be unmarried, under 18 years old, and related to you by blood or adoption.</p>                                            

                    </div>    

                    {{-- Other relatives (under exceptional circumstances as a “Lonely Canadian”) --}}                     

                    <div class="mt-4">

                        <p class="py-2 futura-medium text-xl text-gray-700">

                            Other relatives (under exceptional circumstances as a “Lonely Canadian”)

                        </p> 

                        <p class="text-base">In some rare circumstances, Canadian citizens or Permanent Residents may be eligible to sponsor one extended relative to come to Canada. To sponsor a relative that falls outside of Canada’s current Family Class definition, sponsors must be considered a “Lonely Canadian”. This means the sponsor has no spouse, common-law partner, child, parent, or grandparent.</p>                                            

                    </div> 

                </div>

            </div>
            {{-- How-can-I-be-eligible-to-sponsor-a-family-member --}}
            <div class="mt-16 md:mt-24" id="How-can-I-be-eligible-to-sponsor-a-family-member">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">How can I be eligible to sponsor a family member?</h2>

                <div class="">

                    <p class="mb-4 md:mb-6">To sponsor a family member, you must meet minimum eligibility requirements. Eligible sponsors must:

                    </p>   

                    <ul class="space-y-2 ml-4 list-disc" role="list">

                        <li>be a Canadian citizen or permanent resident</li>

                        <li>be at least 18 years old</li>

                        <li>live in Canada, or plan to return to Canada once your spouse or partner becomes a permanent resident of Canada</li>

                        <li>be able and willing to provide for the basic financial needs of your family member for three years</li>

                    </ul>

                </div>

            </div>
            {{-- Who-isnt-eligible-to-sponsor-a-relative --}}
            <div class="mt-16 md:mt-24" id="Who-isnt-eligible-to-sponsor-a-relative">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Who isn’t eligible to sponsor a relative?</h2>

                <div class="">

                    <div class=""> 

                        <p class="py-2 futura-medium text-xl text-gray-700">

                            There are some cases in which a permanent resident or citizen is not eligible to sponsor. If one of the below scenarios apply, a sponsor may be ineligible if they:

                        </p>

                        <ul class="ml-4 list-disc space-y-2" role="list">

                            <li>are currently in prison</li>

                            <li>have not paid alimony or child support payments</li>     

                            <li>have declared bankruptcy and are not yet released</li>

                            <li>received social assistance for reasons other than a disability</li>

                            <li>failed to pay back an immigration loan, made late payments or missed payments</li>

                            <li>have previously sponsored another relative and failed to meet the terms of the sponsorship agreement</li>

                            <li>have been convicted of a violent crime, any offence against a relative or any sexual offence, depending on details of the case</li>                                           

                        </ul>                                                                                                                         

                    </div>                             

                </div>

            </div>
            {{-- How-much-does-it-cost-to-sponsor-a-family-member-in-Canada --}}
            <div class="mt-16 md:mt-24" id="How-much-does-it-cost-to-sponsor-a-family-member-in-Canada">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">How much does it cost to sponsor a family member in Canada?</h2>

                <div class="">

                    <p class="mb-4 md:mb-6">If you are sponsoring your spouse and they have dependent children, or if you are sponsoring your adopted child, a $150 payment will be required for each child included in the application. If you are including the spouse or partner of your relative, an additional $1,050 is required. The government processing fees to sponsor a relative in Canada are listed below.

                    </p>  

                    <ul class="space-y-2 list-none w-[70%]">

                        <li>Sponsorship fee = $75</li>

                        <li>Principal applicant processing fee = $475</li>

                        <li>Right of permanent residence fee = $500</li>

                        <li>Biometrics = $85</li>

                        <li>Total = $1135</li>    

                    </ul> 

                    <p class="mt-4 md:mt-6">If the sponsor resides in or intends to reside in Quebec upon the issuance of permanent residence, a fee of $289 CAD will need to be paid in addition to the fees mentioned above.</p>                      

                </div>

            </div>
            {{-- What-is-the-income-requirement-for-Canada-family-sponsorship --}}
            <div class="mt-16 md:mt-24" id="What-is-the-income-requirement-for-Canada-family-sponsorship">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">What is the income requirement for Canada family sponsorship?</h2>

                <div class="">

                    <p class="mb-2">Minimum income requirements apply to some sponsorship applications, including parents, grandparents, eligible orphaned relatives, or those eligible under the “lonely Canadian” policy.

                    </p>

                    <p class="mb-2">These sponsors must meet the Minimum Necessary Income (MNI) required for the size of their family unit, and must also provide Canada Revenue Agency-issued Notices of Assessment (NOA) as proof that they have met the required MNI for at least three consecutive years.

                    </p>       

                    <p class="mb-2">Unlike most other forms of Canadian sponsorship, you do not need to demonstrate a minimum amount of income to sponsor a spouse. However, whenever you sponsor a family member to Canada, you must sign an undertaking in which you promise to provide financial support for the basic needs of your sponsored family member. This undertaking is required for all sponsorship applications and acknowledges a sponsor’s promise to repay social assistance benefits paid to the sponsor and their family member(s) for a period of 20 years. A supplementary undertaking will need to be signed if the sponsor lives in Quebec.</p>

                    <p class="mb-2">The length of the undertaking depends on the category of sponsorship. For spousal sponsorship (including spouses and common-law or conjugal partners), the length of the undertaking is 3 years from the day the sponsored individual becomes a 

                        <a href="{{route('canada_pr')}}" class="text-red-600 underline">Canadian permanent resident.</a></p>                     

                    <p>Canadian citizens or permanent residents who are sponsoring their dependent children are not required to meet the Minimum Necessary Income (MNI), provided that their dependent child does not have any children of their own. If the dependent child being sponsored has dependent children of their own, the sponsor must meet the MNI required for their family unit size.</p>

                </div>

            </div>
            {{-- Do-I-need-a-job-to-sponsor-a-family-member --}}
            <div class="mt-16 md:mt-24" id="Do-I-need-a-job-to-sponsor-a-family-member">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Do I need a job to sponsor a family member?</h2>

                <div class="">

                    <p>To sponsor a family member other than a spouse or partner, applicants must meet MNI requirements. While a job is not necessarily required, sponsors must provide proof of sufficient income from the past three years to support their sponsored family members.

                    </p>                                                 

                </div> 

            </div>
            {{-- How-long-does-sponsorship-take --}}
            <div class="mt-16 md:mt-24" id="How-long-does-sponsorship-take">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">How long does sponsorship take?</h2>

                <div class="">

                    <p class="mb-2">Sponsorship applications take approximately 12 months to process from start to finish. They are typically processed within 12 months but they can take longer depending on the nature of your case.

                    </p>        

                    <p class="mb-2">If you have a complicated case, or the visa officer requires additional proof of your relationship, your application may experience delays.</p>      

                    <p>The best way to ensure your sponsorship application is processed as quickly as possible is to make sure it is done right the first time. The lawyers and legal professionals at Canadim have helped thousands of spousal sponsorship candidates.</p>                                                           

                </div> 

            </div>
            {{-- What-other-options-do-I-have-to-bring-my-family-member-to-Canada --}}
            <div class="mt-16 md:mt-24" id="What-other-options-do-I-have-to-bring-my-family-member-to-Canada">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">What other options do I have to bring my family member to Canada?</h2>

                <div class="">

                    <p class="py-2 font-bold text-lg">

                        If sponsorship is not an option, your relative may be eligible under another Canadian immigration program. Take our free online assessment today to find out what immigration options are available to you or your family members.

                    </p>                                      

                </div>  

            </div>
            {{-- How-many-relatives-can-I-sponsor-to-Canada --}}
            <div class="mt-16 md:mt-24" id="How-many-relatives-can-I-sponsor-to-Canada">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">How many relatives can I sponsor to Canada?</h2>

                <div class="">                                                                                

                    <p>There is no limit to the number of eligible family members a Canadian permanent resident or citizen can sponsor. However, applicants must submit separate applications for each eligible family member sponsored.

                    </p>

                </div> 

            </div>
            {{-- Sponsoring-a-family-member-from-Quebec --}}
            <div class="mt-16 md:mt-24" id="Sponsoring-a-family-member-from-Quebec">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Sponsoring a family member from Quebec</h2>

                <div class="">

                    <p>The federal government gives Quebec more autonomy in determining who will settle in their province. For this reason, permanent residents or citizens that reside in Quebec must first apply to the Quebec Ministère de l’Immigration, de la Francisation et de l’Intégration (MIFI) for approval to sponsor their eligible family member. MIFI is responsible for approving a sponsorship undertaking for sponsors living in Quebec.

                    </p>

                </div>  

            </div>  

            {{-- sponsorship options --}}
            <div class="lg:hidden mt-16 bg-white px-4 py-2 rounded-md shadow-md">

                <p class="text-gray-600 text-xl mt-4">

                    Explore Canada Immigration

                </p>

                <ul class="space-y-2 pl-2 mt-2 md:w-max" role="list">

                    <li>

                        <a href="{{route('canada_immigration')}}" class="flex gap-x-2 text-base text-gray-600">

                            <span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />

                            </svg>

                            </span><span class="underline">Immigrate to Canada</span>

                        </a>                                

                    </li>

                    <li>

                        <a href="{{route('work_permit')}}" class="flex gap-x-2 text-base text-gray-600">

                            <span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />

                            </svg>

                            </span><span class="underline">Working in Canada</span>

                        </a>                                

                    </li>

                    <li>

                        <a href="{{route('study_immigration')}}" class="flex gap-x-2 text-base text-gray-600">

                            <span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />

                            </svg>

                            </span><span class="underline">Study in Canada</span>

                        </a>                                

                    </li>                            

                    <li>

                        <a href="{{route('business_immigration')}}" class="flex gap-x-2 text-base text-gray-600">

                            <span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />

                            </svg>

                            </span><span class="underline">Business Visa</span>

                        </a>                                

                    </li>

                    <li>

                        <a href="{{route('citizenship')}}" class="flex gap-x-2 text-base text-gray-600">

                            <span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />

                            </svg>

                            </span><span class="underline">Become a Citizen</span>

                        </a>                                

                    </li>

                    <li>

                        <a href="{{route('cec')}}" class="flex gap-x-2 text-base text-gray-600">

                            <span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />

                            </svg>

                            </span><span class="underline">Canadian Experience Class</span>

                        </a>                                

                    </li>

                    <li>

                        <a href="{{route('sponsorship_faqs')}}" class="flex gap-x-2 text-base text-gray-600">

                            <span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />

                            </svg>

                            </span><span class="underline">Sponsorship immigration FAQs</span>

                        </a>                                

                    </li>

                </ul>

            </div>
            
            {{-- Canada-sponsorship-background-check --}}
            <div id="Canada-sponsorship-background-check" class="mt-16 md:mt-24">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Canada sponsorship background check</h2>

                <div class="">

                    <p>All individuals over the age of 18 applying for Canadian permanent residence must provide a Police Clearance Certificate to confirm they are not criminally inadmissible.

                        <br>Applicants must obtain police clearances from all countries they have resided in for 6 months or longer since the age of 18.

                    </p>                                        

                </div>

            </div>

            {{-- Canada-sponsorship-biometrics --}}
            <div class="mt-16 md:mt-24" id="Canada-sponsorship-biometrics">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Canada sponsorship biometrics</h2>

                <div class="">

                    <p>Canada requires most immigration applicants to provide biometrics. Use <a href="https://www.cic.gc.ca/english/visit/biometrics.asp" class="text-red-600 underline">Canada’s online tool</a> to find out if you need to give your biometrics.

                    <br>After paying your biometric fee when submitting your application, you will receive a letter from IRCC with instructions on how to provide your biometrics.</p>                                         

                </div>

            </div>

            {{-- Canada-sponsorship-medical-exam --}}
            <div class="mt-16 md:mt-24" id="Canada-sponsorship-medical-exam">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Canada sponsorship medical exam</h2>

                <div class="">

                    <p class="mb-4">Individuals applying for Canadian permanent residence must undergo a medical exam to ensure they are not medically inadmissible.

                        <br>You do not need to submit your medical exam with your application. After submitting your sponsorship application, IRCC will provide instructions on how to complete your medical exam.

                    <br>The medical exam must be with a doctor on <a href="http://www.cic.gc.ca/pp-md/pp-list.aspx" class="text-red-600 underline">IRCC’s list of panel physicians</a>.</p>                                                                     

                </div>

            </div>

            {{-- How-do-I-check-the-status-of-my-sponsorship-application --}}
            <div class="mt-16 md:mt-24" id="How-do-I-check-the-status-of-my-sponsorship-application">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">How do I check the status of my sponsorship application?</h2>

                <div class="">

                    <p class="mb-2">If you applied for spousal, common-law, or dependent child sponsorship, you may track your application status using <a href="https://prt-srp.apps.cic.gc.ca/en/register" class="text-red-600 underline">Canada’s Permanent Residence Application Tracker portal.</a>

                    </p>

                    <p>If you are sponsoring another family member, how you check your application status will depend on whether your application was submitted online or through the mail. <a href="https://www.canada.ca/en/immigration-refugees-citizenship/services/application/check-status.html" class="text-red-600 underline">Use IRCC’s online tool</a> to learn more about how to check the status of your sponsorship application.</p>                                                            

                </div>

            </div>

            {{-- Is-there-a-deadline-for-Canadian-sponsorship-applications --}}
            <div class="mt-16 md:mt-24" id="Is-there-a-deadline-for-Canadian-sponsorship-applications">

                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Is there a deadline for Canadian sponsorship applications?</h2>

                <div class="">

                    <p class="mb-2">Eligible Canadian citizens and permanent residents may apply to sponsor their spouse or child at any time.

                    </p>                                     

                    <p>Candidates applying to sponsor their parents or grandparents must be invited to do so and apply within the deadline provided.</p>                         

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
                    <a href="{{ route('sponsorship_faqs') }}"
                        class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                        Sponsorship FAQs
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
                Discover your  eligibility status for sponsoring or being sponsored to immigrate to Canada through our free online tool.
            </p>
            <div class="py-6">
                <x-link-one href="{{ route('sponsorship_assessment') }}">Free online assessment</x-link-one>
            </div>
        </div>
    </section>
</x-app-layout> 