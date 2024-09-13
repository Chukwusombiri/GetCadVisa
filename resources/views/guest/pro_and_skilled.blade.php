<x-app-layout>   
    {{-- BREADCRUMB --}}
    <x-breadcrumb>
        <x-slot:topic>Immigrate</x-slot>
        <x-slot:subtopic>Skilled worker</x-slot>
    </x-breadcrumb>
    <!-- Header -->
    <x-side-image-header :url="route('business_assessment')" :source="asset('images/professional.jpg')" button-text="Apply today">
        <x-slot:maintitle>Professional and Skilled Workers Immigration</x-slot>
        <x-slot:subtitle>Take the first step towards living and working in Canada. Our team of immigration experts can help you with your professional and skilled workers immigration application.</x-slot>
    </x-side-image-header>
    <!-- Requirements Section -->
    <section class="bg-gray-100 py-16 md:py-24">
        <div class="container mx-auto grid grid-cols-3 gap-10 px-4 md:px-8 lg:px-10">
            <div class="col-span-3 md:col-span-2">
                <h2 class="text-3xl lg:text-4xl hedvig-regular mb-8 text-gray-800">Requirements for Professional and Skilled Workers Immigration</h2>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10">                   
                    <div class="border border-gray-300 hover:border-rose-700 p-4 rounded-xl">
                        <h3 class="text-xl font-bold mb-4">Education and Skills</h3>
                        <p class="text-gray-600">To be eligible for professional and skilled workers immigration, you need to have a certain level of education and skills. The specific requirements may vary depending on the immigration program you choose.</p>
                    </div>
                    <div class="border border-gray-300 hover:border-rose-700 p-4 rounded-xl">
                        <h3 class="text-xl font-bold mb-4">Language Proficiency</h3>
                        <p class="text-gray-600">You need to demonstrate your language proficiency in English or French, which are the two official languages of Canada. This can be done through language tests such as IELTS or CELPIP.</p>
                    </div>                   
                    <div class="border border-gray-300 hover:border-rose-700 p-4 rounded-xl">
                        <h3 class="text-xl font-bold mb-4">Work Experience</h3>
                        <p class="text-gray-600">You need to have relevant work experience in your field of expertise. The minimum required work experience may vary depending on the immigration program you choose.</p>
                    </div>
                    <div class="border border-gray-300 hover:border-rose-700 p-4 rounded-xl">
                        <h3 class="text-xl font-bold mb-4">Proof of Funds</h3>
                        <p class="text-gray-600">You need to show that you have enough money to support yourself and your family in Canada. The amount of funds required may vary depending on the number of family members accompanying you.</p>
                    </div>
                </div>

            </div>
            {{-- immigration options --}}
            <div class="col-span-3 md:col-span-1">
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
        </div>       
    </section>
    <!-- Process Section -->
    <section class="bg-50 py-16 md:py-24">
        <div class="container mx-auto px-4 md:px-8 lg:px-10">
            <h2 class="text-3xl lg:text-4xl hedvig-regular mb-8">Immigration Process</h2>
            <div class="md:flex md:justify-between gap-x-4">

                <div class="md:w-1/2">

                    <div class="mb-6">

                        <h3 class="text-xl font-bold mb-4 text-rose-700">1. Free Assessment</h3>

                        <p class="text-gray-600">Fill out our online assessment form to determine your eligibility for professional and skilled workers immigration to Canada. Our immigration experts will review your information and provide you with a free assessment.</p>

                    </div>

                    <div class="mb-6">

                        <h3 class="text-xl font-bold mb-4 text-rose-700">2. Document Preparation</h3>

                        <p class="text-gray-600">Once you are eligible, our team of immigration experts will guide you through the document preparation process. We will help you gather all the necessary documents, such as educational transcripts, language test results, and work experience letters.</p>

                    </div>

                </div>

                <div class="md:w-1/2">

                    <div class="mb-6">

                        <h3 class="text-xl font-bold mb-4 text-rose-700">3. Application Submission</h3>

                        <p class="text-gray-600">Once all the required documents are ready, our team will assist you in submitting your application to the relevant Canadian immigration authorities. We will ensure that your application is complete and accurate, and we will keep you updated on the progress of your application.</p>

                    </div>

                    <div class="mb-6">

                        <h3 class="text-xl font-bold mb-4 text-rose-700">4. Interview Preparation</h3>

                        <p class="text-gray-600">If your application is shortlisted, you may be required to attend an interview with Canadian immigration authorities. Our team will provide you with comprehensive interview preparation, including tips on how to answer common interview questions and guidance on what to expect during the interview process.</p>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- Benefits Section -->
    <section class="bg-gray-100 py-16">

        <div class="container mx-auto px-4">

            <h2 class="text-3xl lg:text-4xl hedvig-regular mb-8 max-w-xl">Benefits of Professional and Skilled Workers Immigration</h2>

            <div class="md:flex md:justify-between gap-x-4">

                <div class="md:w-1/2">

                    <div class="mb-6 md:mb-8 bg-white p-4 rounded-xl shadow-md">

                        <h3 class="text-xl font-bold mb-4">Permanent Residency</h3>

                        <p class="text-gray-600">Professional and skilled workers immigration to Canada can lead to permanent residency, which allows you to live, work, and study in Canada indefinitely. Permanent residency also provides you with access to most of the social benefits and healthcare services that Canadian citizens enjoy.</p>

                    </div>

                    <div class="mb-6 md:mb-8 bg-white p-4 rounded-xl shadow-md">

                        <h3 class="text-xl font-bold mb-4">Opportunities for Family Sponsorship</h3>

                        <p class="text-gray-600">As a permanent resident of Canada, you may be eligible to sponsor your spouse, common-law partner, dependent children, or other eligible family members to come and live with you in Canada. This can provide you with the opportunity to reunite with your loved ones and build a family life in Canada.</p>

                    </div>

                </div>

                <div class="md:w-1/2">

                    <div class="mb-6 md:mb-8 bg-white p-4 rounded-xl shadow-md">

                        <h3 class="text-xl font-bold mb-4">Access to Canadian Job Market</h3>

                        <p class="text-gray-600">Professional and skilled workers immigration opens up opportunities for you to work in Canada and contribute to the Canadian economy. Canada has a strong job market with various industries offering employment opportunities for skilled workers, and as a permanent resident, you have the right to work in any job or industry of your choice.</p>

                    </div>

                    <div class="mb-6 md:mb-8 bg-white p-4 rounded-xl shadow-md">

                        <h3 class="text-xl font-bold mb-4">Access to Canadian Social Services</h3>

                        <p class="text-gray-600">As a permanent resident of Canada, you have access to most of the social services and benefits that Canadian citizens enjoy, including healthcare services, education, and social welfare programs. This can provide you with a high quality of life and a safe and supportive environment for you and your family.</p>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- Call to Action Section -->
    <section class="bg-gradient-to-b from-sky-100 to-gray-100">
        <div class="container mx-auto px-4 md:px-8 lg:px-10 flex flex-col justify-center min-h-[90vh]">                       
            <h2 class="text-3xl lg:text-4xl hedvig-regular mb-6 md:mb-8 text-center max-w-xl mx-auto">Ready to Start Your Immigration Journey?</h2>
            <p class="text-gray-600 text-lg md:text-xl futura-medium text-center max-w-2xl mx-auto mb-6">If you are a professional or skilled worker looking to immigrate to Canada, our team of experienced immigration consultants can assist you throughout the entire process.</p>
            <div class="w-full py-6 flex justify-center">
                <x-link-two href="{{ route('contact') }}">Speak to an advisor</x-link-two>
            </div>
        </div>
    </section>       
</x-app-layout>