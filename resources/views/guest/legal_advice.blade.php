<x-app-layout>
    {{-- breadcrumb --}}
    <x-breadcrumb>
        <x-slot:topic>immigration</x-slot>
        <x-slot:subtopic>Legal advice</x-slot>
    </x-breadcrumb>
    {{-- header --}}
    <x-side-image-header :url="route('contact')" :source="asset('images/legal.jpg')" button-text="Ask us questions">
        <x-slot:maintitle>Legal advice for clients</x-slot>
        <x-slot:subtitle>{{config('app.name')}} offers expert and professional legal advice.</x-slot>
    </x-side-image-header> 
    <!-- Page Content -->
    <section class="py-16">
        <div class="container mx-auto px-4 md:px-8">
            <div class="max-w-5xl">
                <h1 class="text-3xl font-bold mb-4">{{config('app.name')}} is able to offer you a full range of professional legal services.</h1>
                <p class="text-gray-600 mb-2">With unmatched experience in Canadian immigration, the {{config('app.name')}} Firm is able to provide you with professional legal services related to the following matters:</p>                
                <ul class="pl-4 space-y-2 list-disc mb-4 text-gray-600" role="list">
    
                    <li>Authorization to Return to Canada</li>
    
                    <li>Corporate Immigration Compliance</li>
    
                    <li>Citizenship Applications, Refusals, or Revocations</li>
    
                    <li>Reapplying After a Refusal</li>
    
                    <li>Criminal Pardons and Record Suspension</li>
    
                    <li>Legal Opinions and Consultations</li>
    
                    <li>Medical, Criminal, or Other Inadmissibility</li>
    
                </ul>
                <p class="text-gray-600">We invite you to contact us directly if you require legal services in any of the above areas. You can also explore below to learn more about each of the services that we offer.</p>            
            </div>  
        </div>  
    </section>  
    {{-- faqs --}}
    <section class="py-16">
        <div class="container mx-auto px-4 md:px-8">
            <div class="max-w-5xl">
                <h2 class="hedvig-regular text-4xl mb-8 text-gray-700 max-w-xl">Discover answers to most asked questions</h2>
                <p class="text-lg text-gray-700 max-w-2xl mb-10">Our legal team has meticulously put together the most seeked advice and clients' areas of interest. If you are in need of a more personalized advice, please get in touch with us through email or Real time chat on the button right corner of your browser window</p>
                <div class="flex flex-col gap-4">
                    <x-faq-item trigger="Reapplying After a Refusal">
                        <p class="py-3 text-base leading-relaxed text-gray-700">

                            As discussed above, certain situations are appropriate for intervention from the Federal Court or submission to the Immigration Appeal Division. Typically, improper refusals or delays in immigration application processing may be appropriate for one of those options.

                        </p>

                        <p class="text-gray-700 leading-relaxed text-base mb-2">Immigration applications can be refused by Immigration, Refugees and Citizenship Canada (IRCC) for a wide range of reasons, from failure of the applicant to achieve the required number of points to credibility concerns. The {{config('app.name')}} has dealt with most, if not all, of these possible scenarios, and can provide representation in the appeal of certain refusals.</p>

                        <p class="text-gray-700 leading-relaxed text-base mb-2">Immigration processing delays also occur for a number of reasons. In most cases, the Visa Office processing the application is doing the absolute best they can to process the application in a timely fashion. Under certain circumstances, however, a Visa Office will have delayed far beyond the standard processing time. In those cases, it may be necessary to seek Federal Court intervention to mandate that the Visa Office process the application in a timely fashion.</p>

                        <p class="text-gray-700 leading-relaxed text-base mb-2">If you have been subject to an improper immigration refusal or delay, please contact us directly to let us know about your case.</p>
                    </x-faq-item>    
                    <x-faq-item trigger="Medical, Criminal, or Other Inadmissibility">
                        Reasons for medical, criminal, or other inadmissibility to Canada can be quite complex. Ultimately, if you are found inadmissible, you will be unable to visit or reside in Canada (with a number of limited exceptions for short-term visits). However, a determination of inadmissibility is subject to review and appeal. In addition, if you are properly found to be inadmissible, there are often ways to correct your inadmissibility. For example, if you are criminally inadmissible, you may be eligible to apply for "rehabilitation", which will allow you to be admitted to Canada. If you are experience problems or have questions about medical, criminal, or other inadmissibility to Canada, please contact us directly so that we can advise you accordingly.
                    </x-faq-item>
                    <x-faq-item trigger="Citizenship Applications, Refusals, or Revocations">
                        If you are interested in the requirements for Canadian Citizenship, check out our page about Canadian citizenship. We offer a full range application services for Canadian Citizenship. In addition, if you have had any issues with your application, please let us know. Please <a href="{{route('contact')}}" class="text-red-600 hover:underline focus:underline active:underline">contact us directly</a> to learn more about how we can assist you with your Canadian citizenship application.
                    </x-faq-item>
                    <x-faq-item trigger="Corporate Immigration Compliance">
                        Employers that choose to hire foreign nationals are subject to heightened scrutiny from Immigration, Refugees and Citizenship Canada. {{config('app.name')}} can provide you professional legal advice on all of the requirements of Canada's Temporary Foreign Worker Program to ensure that you are in full compliance. Please contact us directly to learn more about how we can assist you.
                    </x-faq-item>
                    <x-faq-item trigger="Authorization to Return to Canada">
                        If you are asked to leave Canada, you need to submit a formal application to be able to re-enter the country. {{config('app.name')}} has expertise in submitting Authorization to Return to Canada applications. Note that generally speaking, ARC applications are usually submitted together with another Canadian immigration application.
                    </x-faq-item>
                    <x-faq-item trigger="Criminal Pardons and Record Suspension">
                        If you have a Canadian criminal record, {{config('app.name')}} is able to provide you with assistance in having yourself "pardoned" or to have your record suspended, whichever is appropriate. If successful, this process can assist greatly in your ability to travel to other countries. If you are applying to immigrate to Canada but have been convicted of a crime here, this will allow you to address your criminal admissibility to Canada. We invite you to let us know more about your circumstances by contacting us directly so that we can advise you accordingly.
                    </x-faq-item>
                    <x-faq-item trigger="Legal Opinion and Consultation">
                        If you are seeking a legal written opinion or wish to have a consultation about any Canadian immigration question or concern, please contact us and let us know more about your needs.
                    </x-faq-item>
                </div>        
            </div>
        </div>
    </section>
</x-app-layout>