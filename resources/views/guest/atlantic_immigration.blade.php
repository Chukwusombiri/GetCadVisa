<x-app-layout>
    {{-- BREADCRUMB --}}
    <x-breadcrumb>
        <x-slot:topic>Immigrate</x-slot>
        <x-slot:subtopic>Atlantic</x-slot>
    </x-breadcrumb>
    <!-- Header -->
    <x-side-image-header :url="route('assessment')" :source="asset('images/atlantic.jpg')" button-text="Apply today">
        <x-slot:maintitle>Canada Atlantic Immigration Programme</x-slot>
        <x-slot:subtitle>Learn more about immigrating to the Atlantic provinces of Canada.</x-slot>
    </x-side-image-header>    
    <!-- Province sections -->
    <section class="bg-gray-50 py-16 lg:py-24">
        <div class="container mx-auto px-4 md:px-8 lg:px-10">
            <div class="grid grid-cols-3 gap-6 md:gap-8 lg:gap-10">
                <div class="col-span-3 md:col-span-2">
                    <h2 class="text-3xl md:text-4xl hedvig-regular mb-8 text-gray-800">Provincial Immigration Programs</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <div class="flex mb-4">
                                <img class="w-12 h-12 object-cover mr-4 rounded-full" src="{{url('images/vision.jpg')}}" alt="New Brunswick">
                                <h3 class="text-xl font-bold">New Brunswick</h3>
                            </div>
                            <p class="text-gray-700 mb-4">The New Brunswick Provincial Nominee Program (NBPNP) offers several
                            streams for skilled workers, entrepreneurs, and international graduates to immigrate to the province.</p>                            
                        </div>

                        <div>

                            <div class="flex mb-4">

                            <img class="w-12 h-12 object-cover mr-4 rounded-full"

                                src="{{url('images/nova.jpg')}}"

                                alt="Nova Scotia">

                            <h3 class="text-xl font-bold">Nova Scotia</h3>

                            </div>

                            <p class="text-gray-700 mb-4">The Nova Scotia Nominee Program (NSNP) has various streams for skilled

                            workers, entrepreneurs, and international graduates to immigrate to the province and obtain permanent

                            residency.</p>                            

                        </div>

                        <div>

                            <div class="flex mb-4">

                                <img class="w-12 h-12 object-cover mr-4 rounded-full"

                                    src="{{url('/images/prince.jpg')}}"

                                    alt="Prince Edward Island">

                                    <h3 class="text-xl font-bold">Prince Edward Island</h3>

                            </div>

                            <p class="text-gray-700 mb-4">The Prince Edward Island Provincial Nominee Program (PEI PNP) has

                            streams for skilled workers, entrepreneurs, and international graduates to immigrate to the province and

                            obtain permanent residency.</p>

                        </div>

                        <div>

                            <div class="flex mb-4">

                                <img class="w-12 h-12 object-cover mr-4 rounded-full"

                                            src="{{url('/images/newfoundland.jpg')}}"

                                            alt="Newfoundland and Labrador">

                                <h3 class="text-xl font-bold">Newfoundland and Labrador</h3>

                            </div>

                            <p class="text-gray-700 mb-4">The Newfoundland and Labrador Provincial Nominee Program (NLPNP)

                            offers various categories for skilled workers, entrepreneurs, and international graduates to immigrate to

                            the province.</p>

                        </div>

                    </div>

                </div>

                <div class="col-span-3 md:col-span-1">

                    {{-- immigration options --}}

                    <div class="mt-16">
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

            </div>           

        </div>    
    </section>
    <!-- Contact section -->
    <section class="bg-gray-100 py-16 md:py-24">
        <div class="px-4 md:px-8 lg:px-10">
            <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">                    
                <div>
                    <h2 class="text-4xl md:text-5xl hedvig-regular mb-8 lg:mb-10">Get in touch with us today</h2>  
                    <p class="text-gray-600 mb-4 text-lg">If you have any questions or need further information about the Canada
                        Atlantic Immigration Programme, please feel free to contact us. Our team is here to assist you.</p>
                    <h3 class="text-xl font-semibold mb-4 text-rose-700">Contact Information</h3>
                    <p class="futura-medium text-gray-600 mb-2 text-lg">Email: {{config('mail.reply_to.address')}}</p>
                    <p class="futura-medium text-gray-600 mb-2 text-lg">Phone: {{config('app.company.whatsapp')}}</p>
                    <p class="futura-medium text-gray-600 mb-2 text-lg">Telegram: <a href="{{config('app.company.telegram')}}" class="hover:underline hover:text-rose-700">Click to chat us</a></p>
                    <p class="futura-medium text-gray-600 text-lg">Address: {{config('app.company.address')}}</p>
                </div>
                <div>
                    <h3 class="text-xl futura-medium mb-4">Send us a message</h3>                       
                    <div class="mb-4">
                        <x-label for="name" value="{{__('Full Name')}}" />
                        <x-input type="text" id="name" name="name" class="block mt-2 w-full" placeholder="Your Name" />
                    </div>
                    <div class="mb-4">
                        <x-label for="email" value="{{__('Email address')}}" />
                        <x-input type="text" id="email" name="email" class="block mt-2 w-full" placeholder="Your email address" />                        
                    </div>
                    <div class="mb-4">
                        <x-label for="message" value="{{ __('Provide information concerning your inquiry') }}" />
                        <textarea name="message" id="message"rows="5" placeholder="Additional information"
                        class="text-dark placeholder-gray-500 focus:border-primary w-full 
                        rounded-lg border py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]">                                                                                       
                        </textarea>
                    </div>
                    <div id="form-response"></div>
                    <div class="flex justify-center mt-4">
                            <button id="form_button" class="bg-rose-700 text-gray-100 font-semibold py-3 px-6 rounded-2xl hover:bg-rose-800 transition duration-300"
                                type="button">Send message</button>
                    </div>
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