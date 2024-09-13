<x-app-layout>
    <!-- Hero Section -->
    <section class="bg-gray-50 py-24">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2">
                    <h2 class="text-4xl font-bold text-gray-800">Welcome to Canada Rural and Northern Immigration Pilot</h2>
                    <p class="mt-4 text-xl text-gray-600">Build your future in Canada's rural and northern communities</p>
                    <p class="mt-8 text-gray-700">The Canada Rural and Northern Immigration Pilot (C-RNIP) is a program designed to help rural and northern communities in Canada attract and retain skilled immigrants. If you are looking to settle and work in a rural or northern community in Canada, the C-RNIP may be the right pathway for you.</p>
                    <div class="mt-8">
                        <a href="{{route('assessment')}}" class="inline-block px-6 py-3 text-lg font-semibold text-white bg-red-700 hover:bg-blue-800 rounded">Check Eligibility</a>
                    </div>
                </div>
                <div class="md:w-1/2 mt-12 md:mt-0">
                    <img src="{{url('/images/northern.jpg')}}" alt="Canada Rural and Northern Immigration Pilot" class="w-full rounded-lg">
                </div>
            </div>
        </div>
    </section>
    <!-- Features Section -->
    <section class="bg-white py-16">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-800 text-center">Why Choose C-RNIP?</h2>
            <p class="mt-4 text-xl text-gray-600 text-center">Discover the benefits of immigrating through the Canada Rural and Northern Immigration Pilot</p>
            <div class="flex flex-col md:flex-row mt-12">
                <!-- Feature 1 -->
                <div class="md:w-1/3 px-4">
                    <div class="flex items-center justify-center">
                        <img src="{{url('images/job.jpeg')}}" alt="Feature 1" class="w-20 h-20 rounded-full bg-gray-100 p-4">
                    </div>
                    <h3 class="mt-4 text-2xl font-bold text-gray-800 text-center">Job Opportunities</h3>
                    <p class="mt-2 text-gray-700 text-center">C-RNIP offers various job opportunities in rural and northern communities in Canada. From agriculture and forestry to healthcare and hospitality, there are plenty of options for skilled immigrants.</p>
                </div>
                <!-- Feature 2 -->
                <div class="md:w-1/3 px-4 mt-8 md:mt-0">
                    <div class="flex items-center justify-center">
                        <img src="{{url('images/community.jpg')}}" alt="Feature 2" class="w-20 h-20 rounded-full bg-gray-100 p-4">
                    </div>
                    <h3 class="mt-4 text-2xl font-bold text-gray-800 text-center">Community Living</h3>
                    <p class="mt-2 text-gray-700 text-center">Experience the warmth and close-knit community living in rural and northern areas of Canada. Enjoy the beautiful landscapes, friendly people, and vibrant culture.</p>
                </div>
                <!-- Feature 3 -->
                <div class="md:w-1/3 px-4 mt-8 md:mt-0">
                    <div class="flex items-center justify-center">
                        <img src="{{url('images/citizens.jpg')}}" alt="Feature 3" class="w-20 h-20 rounded-full bg-gray-100 p-4">
                    </div>
                    <h3 class="mt-4 text-2xl font-bold text-gray-800 text-center">Immigration Support</h3>
                    <p class="mt-2 text-gray-700 text-center">C-RNIP provides immigration support and services to help you navigate the immigration process, including settlement assistance, language training, and access to community resources.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- How it Works Section -->
    <section class="bg-gray-100 py-16">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-800 text-center">How It Works</h2>
            <p class="mt-4 text-xl text-gray-600 text-center">Learn about the step-by-step process of immigrating through C-RNIP</p>
            <div class="flex flex-col md:flex-row mt-12">
                <!-- Step 1 -->
                <div class="md:w-1/4 px-4">
                    <div class="flex items-center justify-center">
                        <div class="w-16 h-16 flex items-center justify-center rounded-full bg-blue-600 text-white text-2xl font-bold">1</div>
                    </div>
                    <h3 class="mt-4 text-2xl font-bold text-gray-800 text-center">Check Eligibility</h3>
                    <p class="mt-2 text-gray-700 text-center">Review the eligibility requirements to ensure that you meet the criteria for C-RNIP. This includes checking the specific requirements of the participating communities.</p>
                </div>
                <!-- Step 2 -->
                <div class="md:w-1/4 px-4 mt-8 md:mt-0">
                    <div class="flex items-center justify-center">
                        <div class="w-16 h-16 flex items-center justify-center rounded-full bg-blue-600 text-white text-2xl font-bold">2</div>
                    </div>
                    <h3 class="mt-4 text-2xl font-bold text-gray-800 text-center">Find a Job</h3>
                    <p class="mt-2 text-gray-700 text-center">Search for job opportunities in the participating communities of C-RNIP. You can apply for jobs directly or connect with employers in these communities.</p>
                </div>
                <!-- Step 3 -->
                <div class="md:w-1/4 px-4 mt-8 md:mt-0">
                    <div class="flex items-center justify-center">
                        <div class="w-16 h-16 flex items-center justify-center rounded-full bg-blue-600 text-white text-2xl font-bold">3</div>
                    </div>
                    <h3 class="mt-4 text-2xl font-bold text-gray-800 text-center">Get a Job Offer</h3>
                    <p class="mt-2 text-gray-700 text-center">Once you receive a job offer from an employer in a participating community, they will provide you with a letter of endorsement required for your C-RNIP application.</p>
                </div>
                <!-- Step 4 -->
                <div class="md:w-1/4 px-4 mt-8 md:mt-0">
                    <div class="flex items-center justify-center">
                        <div class="w-16 h-16 flex items-center justify-center rounded-full bg-blue-600 text-white text-2xl font-bold">4</div>
                    </div>
                    <h3 class="mt-4 text-2xl font-bold text-gray-800 text-center">Apply for Permanent Residence</h3>
                    <p class="mt-2 text-gray-700 text-center">Submit your application for permanent residence through the C-RNIP stream of the Express Entry system. Make sure to include all required documents, including the letter of endorsement from your employer.</p>
                </div>
            </div>
        </div>
    </section>
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
                    <a href="{{route('agri_food')}}" class="flex gap-x-2 text-base text-gray-600">
                        <span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        </span><span class="underline">Agri-food Pilot</span>
                    </a>                                
                </li>
                <li>
                    <a href="{{route('caregiver')}}" class="flex gap-x-2 text-base text-gray-600">
                        <span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        </span><span class="underline">Caregiver program</span>
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
    <!-- Testimonials Section -->
    <section class="bg-white py-16">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-800 text-center">Testimonials</h2>
            <p class="mt-4 text-xl text-gray-600 text-center">Hear from immigrants who have successfully immigrated through C-RNIP</p>
            <div class="flex flex-col md:flex-row mt-12">
                <!-- Testimonial 1 -->
                <div class="md:w-1/3 px-4">
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <div class="flex items-center">
                            <img class="w-12 h-12 object-cover rounded-full" src="{{url('/images/face1.jpg')}}" alt="Testimonial 1">
                            <div class="ml-4">
                                <h3 class="text-lg font-bold text-gray-800">Hugh Smith</h3>
                                <p class="mt-1 text-gray-700">Software Developer</p>
                            </div>
                        </div>
                        <p class="mt-4 text-gray-700">"C-RNIP has been a game-changer for me and my family. The support and assistance we received throughout the immigration process were invaluable. We are now happily settled in a beautiful community in Canada."</p>
                    </div>
                </div>
                <!-- Testimonial 2 -->
                <div class="md:w-1/3 px-4 mt-8 md:mt-0">
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <div class="flex items-center">
                            <img class="w-12 h-12 object-cover rounded-full" src="{{url('/images/face3.jpg')}}" alt="Testimonial 2">
                            <div class="ml-4">
                                <h3 class="text-lg font-bold text-gray-800">Maria Hernandez</h3>
                                <p class="mt-1 text-gray-700">Nurse</p>
                            </div>
                        </div>
                        <p class="mt-4 text-gray-700">"I am so grateful for the opportunities that C-RNIP has provided me. The community where I found a job and settled in Canada has been incredibly welcoming and supportive. I am proud to call Canada my new home."</p>
                    </div>
                </div>
                <!-- Testimonial 3 -->
                <div class="md:w-1/3 px-4 mt-8 md:mt-0">
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <div class="flex items-center">
                            <img class="w-12 h-12 object-cover rounded-full" src="{{url('/images/face2.jpg')}}" alt="Testimonial 3">
                            <div class="ml-4">
                                <h3 class="text-lg font-bold text-gray-800">Linda Rosy</h3>
                                <p class="mt-1 text-gray-700">Accountant</p>
                            </div>
                        </div>
                        <p class="mt-4 text-gray-700">"The Rural and Northern Immigration Pilot has opened doors for me and my family that we never thought possible. The opportunity to work and live in a smaller community in Canada has been a blessing. The support and guidance we received throughout the immigration process were exceptional, and we are now enjoying a high quality of life in Canada."</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section -->
    <section class="bg-gray-200 py-16">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-800 text-center">Contact Us</h2>
            <p class="mt-4 text-xl text-gray-600 text-center">Have questions? Get in touch with us.</p>
            <div class="flex justify-center mt-8">
                <div class="w-full max-w-md">                    
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label>
                        <input class="w-full px-3 py-2 text-gray-700 border rounded-md focus:outline-none focus:border-blue-500" id="name" type="text" placeholder="Full Name">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                        <input class="w-full px-3 py-2 text-gray-700 border rounded-md focus:outline-none focus:border-blue-500" id="email" type="email" placeholder="Email Address">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="message">Message</label>
                        <textarea class="w-full px-3 py-2 text-gray-700 border rounded-md focus:outline-none focus:border-blue-500" id="message" rows="5" placeholder="Your Message"></textarea>
                    </div>
                    <div id="form-response"></div>
                    <div class="flex items-center justify-center mt-4">
                        <button id="form_button" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md focus:outline-none focus:shadow-outline" type="button">
                        Submit
                        </button>
                    </div>                    
                    <p class="text-center text-gray-600 text-sm">By submitting this form, you agree to our <a href="/privacy-policy" class="text-blue-500">Privacy Policy</a> and <a href="{{route('terms.show')}}" class="text-blue-500">Terms of Service</a>.</p>
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