<x-app-layout>
     <!-- Hero section -->
  <section class="bg-green-200 py-16">
    <div class="container px-4 mx-auto flex flex-col md:flex-row items-center justify-between">
      <div class="md:w-1/2">
        <h1 class="text-5xl font-bold mb-6">Immigrate to Canada through the Agri-Food Pilot Programme</h1>
        <p class="text-lg mb-8">The Agri-Food Immigration Pilot is a new immigration program aimed at bringing in skilled workers to help address the labour needs of the Canadian agri-food sector.</p>
        <a href="{{route('contact')}}" class="w-full flex justify-center bg-red-700 text-white py-2 px-4 rounded hover:bg-red-800"><span>Learn More</span></a>
      </div>
      <div class="md:w-1/2">
        <img src="{{url('images/agri-food-pilot-program.jpg')}}" alt="Farmers in a field" class="w-full">
      </div>
    </div>
  </section>

  <!-- Programme section -->
  <section class="bg-white py-16">
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-between gap-x-4">
      <div class="md:w-1/2">
        <img src="{{url('images/agri.jpg')}}" alt="Farm" class="w-full">
      </div>
      <div class="md:w-1/2 px-4">
        <h2 class="text-4xl font-bold mb-6">The Agri-Food Pilot Programme</h2>
        <p class="text-lg mb-8">The Agri-Food Pilot Programme is designed to address the labour needs of the Canadian agri-food sector by providing a pathway to permanent residency for experienced workers in eligible occupations. The pilot is set to run until May 2023.</p>
        <ul class="list-disc ml-8">
          <li class="mb-4">The pilot is employer-driven, which means that eligible employers must apply to become designated to participate in the program and can only recruit workers for eligible occupations.</li>
          <li class="mb-4">The program has a maximum of 2,750 applications per year, with a cap of 750 applications per occupation.</li>
          <li class="mb-4">Applicants must have a valid job offer from a designated employer in Canada and meet other eligibility requirements, including language proficiency and education.</li>
          <li class="mb-4">Successful applicants will receive a work permit and can gain Canadian work experience before being eligible to apply for permanent residency.</li>
        </ul>
        <a href="{{route('assessment')}}" class="bg-gray-400 text-white py-2 px-4 rounded hover:bg-red-700">Check Eligibility</a>
      </div>
    </div>
  </section>

  <!-- Requirements section -->
  <section class="bg-gray-100 py-16">
    <div class="container mx-auto">
      <h2 class="text-4xl font-bold text-center mb-12">Requirements</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white rounded shadow p-8">
          <h3 class="text-2xl font-bold mb-4">1. Job Offer from a Designated Employer</h3>
          <p class="text-lg">Applicants must have a valid job offer from a designated employer in Canada. The job offer must be for a full-time, permanent position in an eligible occupation.</p>
        </div>
        <div class="bg-white rounded shadow p-8">
          <h3 class="text-2xl font-bold mb-4">2. Work Experience</h3>
          <p class="text-lg">Applicants must have at least one year of full-time work experience in Canada in an eligible occupation within the past three years.</p>
        </div>
        <div class="bg-white rounded shadow p-8">
          <h3 class="text-2xl font-bold mb-4">3. Language Proficiency</h3>
          <p class="text-lg">Applicants must meet the language requirements for their occupation. This includes taking an approved language test and obtaining a minimum score.</p>
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
                <a href="{{route('rural_and_northern')}}" class="flex gap-x-2 text-base text-gray-600">
                    <span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    </span><span class="underline">Rural and Northern Immigration Pilot</span>
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
  <!-- Application Process section -->
  <section class="bg-white py-16">
    <div class="container mx-auto px-4">
      <h2 class="text-4xl font-bold text-center mb-12">Application Process</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="bg-gray-400 rounded shadow p-8">
          <h3 class="text-2xl font-bold mb-4 text-white">1. Find a Designated Employer</h3>
          <p class="text-lg text-white">Applicants must first find a designated employer in Canada who is eligible to participate in the Agri-Food Pilot Program and obtain a valid job offer.</p>
        </div>
        <div class="bg-gray-400 rounded shadow p-8">
          <h3 class="text-2xl font-bold mb-4 text-white">2. Apply for Work Permit</h3>
          <p class="text-lg text-white">Once a job offer is secured, applicants can apply for a work permit under the Agri-Food Pilot Program. This requires submitting the necessary documents and paying the applicable fees.</p>
        </div>
        <div class="bg-gray-400 rounded shadow p-8">
          <h3 class="text-2xl font-bold mb-4 text-white">3. Obtain Work Permit</h3>
          <p class="text-lg text-white">After submitting the application, the Immigration, Refugees and Citizenship Canada (IRCC) will review the documents and verify the eligibility of the applicant. If the application is approved, the applicant will receive a work permit allowing them to work in Canada in the designated occupation for the designated employer.</p>
        </div>
        <div class="bg-gray-400 rounded shadow p-8">
            <h3 class="text-2xl font-bold mb-4 text-white">4. Gain Canadian Work Experience</h3>
            <p class="text-lg text-white">Once the work permit is obtained, the applicant can start working in Canada and gain Canadian work experience in the designated occupation. This is a crucial step towards being eligible for permanent residency.</p>
          </div>
          <div class="bg-gray-400 rounded shadow p-8">
            <h3 class="text-2xl font-bold mb-4 text-white">5. Apply for Permanent Residency</h3>
            <p class="text-lg text-white">After gaining the required Canadian work experience, the applicant can apply for permanent residency through the appropriate immigration program, such as the Express Entry or Provincial Nominee Program, depending on the specific requirements and eligibility criteria.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Benefits section -->
    <section class="bg-gray-100 py-16">
      <div class="container mx-auto">
        <h2 class="text-4xl font-bold text-center mb-12">Benefits</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="bg-white rounded shadow p-8">
            <h3 class="text-2xl font-bold mb-4">1. Pathway to Permanent Residency</h3>
            <p class="text-lg">The Agri-Food Pilot Program provides a pathway to permanent residency for eligible applicants, allowing them to settle in Canada permanently and enjoy the benefits of Canadian citizenship, such as access to healthcare, education, and social services.</p>
          </div>
          <div class="bg-white rounded shadow p-8">
            <h3 class="text-2xl font-bold mb-4">2. Canadian Work Experience</h3>
            <p class="text-lg">Applicants who successfully obtain a work permit under the Agri-Food Pilot Program can gain valuable Canadian work experience, which can enhance their resume and improve their chances of finding employment in Canada in the future.</p>
          </div>
          <div class="bg-white rounded shadow p-8">
            <h3 class="text-2xl font-bold mb-4">3. Opportunity to Work in the Agri-Food Sector</h3>
            <p class="text-lg">The Agri-Food Pilot Program specifically targets occupations in the agri-food sector, which is a key industry in Canada. Applicants who are passionate about agriculture and food production can have the opportunity to work and contribute to this important sector in Canada.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- FAQ section -->
    <section class="bg-white py-16">
      <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-12">Frequently Asked Questions</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <div>
            <h3 class="text-2xl font-bold mb-4">Who is eligible for the Agri-Food Pilot Program?</h3>
            <p class="text-lg">Applicants who are currently working in Canada in one of the eligible occupations in the agri-food sector, have a valid job offer from an eligible employer, meet the language proficiency requirements, and have the necessary education and work experience may be eligible for the Agri-Food Pilot Program. It is important to review the specific eligibility criteria and requirements outlined by the Immigration, Refugees and Citizenship Canada (IRCC) to determine eligibility.
            </p>
        </div>
        <div>
          <h3 class="text-2xl font-bold mb-4">How long does it take to obtain permanent residency through the Agri-Food Pilot Program?</h3>
          <p class="text-lg">The processing times for permanent residency applications can vary depending on the specific immigration program through which an applicant applies, as well as other factors such as the completeness of the application, the complexity of the case, and the volume of applications being processed. It is recommended to review the most up-to-date processing times on the IRCC website for accurate information.</p>
        </div>
        <div>
          <h3 class="text-2xl font-bold mb-4">Can my family accompany me to Canada under the Agri-Food Pilot Program?</h3>
          <p class="text-lg">Yes, eligible applicants under the Agri-Food Pilot Program may be able to include their family members, such as spouses or common-law partners, and dependent children, in their application for permanent residency. However, additional documentation and requirements may apply for family members accompanying the main applicant to Canada.</p>
        </div>
        <div>
          <h3 class="text-2xl font-bold mb-4">What are the language requirements for the Agri-Food Pilot Program?</h3>
          <p class="text-lg">Applicants under the Agri-Food Pilot Program are required to demonstrate proficiency in English or French, which are the two official languages of Canada. The specific language requirements may vary depending on the occupation and immigration program, and can be demonstrated through language tests approved by the IRCC, such as the International English Language Testing System (IELTS) or the Canadian English Language Proficiency Index Program (CELPIP).</p>
        </div>
      </div>
    </div>
</section>
<!-- Contact section -->
<section class="bg-gray-100 py-16">
  <div class="container mx-auto">
    <h2 class="text-4xl font-bold text-center mb-12">Contact Us</h2>
    <p class="text-lg text-center mb-8">If you have any questions or need further information about the Canada Agri-Food Pilot Immigration Program, please don't hesitate to contact us. Our team of immigration experts is here to assist you.</p>
    <div class="max-w-md mx-auto">
      <div class="grid grid-cols-1 gap-4">
        <input type="text" name="name" id="name" placeholder="Name" class="border border-gray-300 rounded p-2">
        <input type="email" name="email" id="email" placeholder="Email" class="border border-gray-300 rounded p-2">
        <textarea name="message" id="message" placeholder="Message" rows="4" class="border border-gray-300 rounded p-2"></textarea>
        <div id="form-response"></div>
        <button id="form_button" type="button" class="bg-gray-400 text-white font-bold py-2 px-4 rounded mt-4">Submit</button>
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