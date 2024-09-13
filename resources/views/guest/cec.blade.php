<x-app-layout> 
    {{-- HEADER --}}
    <div id="immigrate-header" class="py-10 px-4 sm:px-6 lg:px-8 h-[40vh] flex justify-center align-center" style="background-image: url('/images/cec.jpeg');
    background-position: center center;">
        <div id="immigrate-header-content" class="flex justify-center align-center">
            <div id="immigrate-header-inner" class="flex flex-col justify-center">
                <h2 class="text-white text-2xl bold py-2 uppercase relative z-99">Canadian Experience Class</h2>
                <p class="text-white text-base relative z-99">Everything you will ever need to know about Canadian Experience Class (CEC).</p>
            </div>
        </div>
    </div>  
    {{-- BREADCRUMB --}}
    <div class="w-full overflow-hidden py-4 px-4 sm:px-6 md:px-8 md:py-5">
        <div class="w-full flex items-center">
            <div class="flex items-center">
                <a
                    href="{{route('home')}}"
                    class="flex items-center text-base font-semibold text-gray-600 hover:text-opacity-80"
                >
                    <span class="pr-2">
                    <svg  width="15" height="15" viewBox="0 0 15 15" class="fill-current">
                        <path
                        d="M13.3503 14.6503H10.2162C9.51976 14.6503 8.93937 14.0697 8.93937 13.3729V10.8182C8.93937 10.5627 8.73043 10.3537 8.47505 10.3537H6.54816C6.29279 10.3537 6.08385 10.5627 6.08385 10.8182V13.3497C6.08385 14.0464 5.50346 14.627 4.80699 14.627H1.62646C0.929989 14.627 0.349599 14.0464 0.349599 13.3497V5.24431C0.349599 4.89594 0.535324 4.5708 0.837127 4.385L6.96604 0.506501C7.29106 0.297479 7.73216 0.297479 8.05717 0.506501L14.1861 4.385C14.4879 4.5708 14.6504 4.89594 14.6504 5.24431V13.3265C14.6504 14.0697 14.07 14.6503 13.3503 14.6503ZM6.52495 9.54086H8.45184C9.14831 9.54086 9.7287 10.1215 9.7287 10.8182V13.3497C9.7287 13.6052 9.93764 13.8142 10.193 13.8142H13.3503C13.6057 13.8142 13.8146 13.6052 13.8146 13.3497V5.26754C13.8146 5.19786 13.7682 5.12819 13.7218 5.08174L7.61608 1.20324C7.54643 1.15679 7.45357 1.15679 7.40714 1.20324L1.27822 5.08174C1.20858 5.12819 1.18536 5.19786 1.18536 5.26754V13.3729C1.18536 13.6284 1.3943 13.8374 1.64967 13.8374H4.80699C5.06236 13.8374 5.2713 13.6284 5.2713 13.3729V10.8182C5.24809 10.1215 5.82848 9.54086 6.52495 9.54086Z"
                        ></path>
                        <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M7.51145 1.55106L13.465 5.33294V13.3497C13.465 13.412 13.4126 13.4644 13.3503 13.4644H10.193C10.1307 13.4644 10.0783 13.412 10.0783 13.3497V10.8182C10.0783 9.92832 9.34138 9.19112 8.45184 9.19112H6.52495C5.63986 9.19112 4.89529 9.92522 4.9217 10.8237V13.3729C4.9217 13.4352 4.86929 13.4877 4.80699 13.4877H1.64967C1.58738 13.4877 1.53496 13.4352 1.53496 13.3729V5.33311L7.51145 1.55106ZM1.27822 5.08174L7.40714 1.20324C7.45357 1.15679 7.54643 1.15679 7.61608 1.20324L13.7218 5.08174C13.7682 5.12819 13.8146 5.19786 13.8146 5.26754V13.3497C13.8146 13.6052 13.6057 13.8142 13.3503 13.8142H10.193C9.93764 13.8142 9.7287 13.6052 9.7287 13.3497V10.8182C9.7287 10.1215 9.14831 9.54086 8.45184 9.54086H6.52495C5.82848 9.54086 5.24809 10.1215 5.2713 10.8182V13.3729C5.2713 13.6284 5.06236 13.8374 4.80699 13.8374H1.64967C1.3943 13.8374 1.18536 13.6284 1.18536 13.3729V5.26754C1.18536 5.19786 1.20858 5.12819 1.27822 5.08174ZM13.3503 15H10.2162C9.32668 15 8.58977 14.2628 8.58977 13.3729V10.8182C8.58977 10.7559 8.53735 10.7035 8.47505 10.7035H6.54816C6.48587 10.7035 6.43345 10.7559 6.43345 10.8182V13.3497C6.43345 14.2396 5.69654 14.9768 4.80699 14.9768H1.62646C0.736911 14.9768 0 14.2396 0 13.3497V5.24431C0 4.77131 0.251303 4.33591 0.651944 4.08836L6.77814 0.211575C7.21781 -0.0705255 7.80541 -0.0705251 8.24508 0.211576C8.24546 0.211821 8.24584 0.212066 8.24622 0.212311L14.3713 4.08838C14.7853 4.34424 15 4.78759 15 5.24431V13.3265C15 14.2587 14.2671 15 13.3503 15ZM14.1861 4.385L8.05717 0.506501C7.73216 0.297479 7.29106 0.297479 6.96604 0.506501L0.837127 4.385C0.535324 4.5708 0.349599 4.89594 0.349599 5.24431V13.3497C0.349599 14.0464 0.929989 14.627 1.62646 14.627H4.80699C5.50346 14.627 6.08385 14.0464 6.08385 13.3497V10.8182C6.08385 10.5627 6.29279 10.3537 6.54816 10.3537H8.47505C8.73043 10.3537 8.93937 10.5627 8.93937 10.8182V13.3729C8.93937 14.0697 9.51976 14.6503 10.2162 14.6503H13.3503C14.07 14.6503 14.6504 14.0697 14.6504 13.3265V5.24431C14.6504 4.89594 14.4879 4.5708 14.1861 4.385Z"
                        ></path>
                    </svg>
                    </span>
                    Home
                </a>
                <span class="px-3 text-gray-600">
                    <svg width="7" height="12" viewBox="0 0 7 12" class="fill-current">
                    <path
                        d="M0.879233 11.4351C0.808625 11.4351 0.720364 11.3998 0.667408 11.3469C0.543844 11.2233 0.543844 11.0291 0.649756 10.9056L5.09807 6.17483C5.18633 6.08657 5.18633 5.92771 5.09807 5.82179L0.649756 1.09105C0.526192 0.967487 0.543844 0.773315 0.667408 0.649751C0.790972 0.526187 0.985145 0.543839 1.10871 0.667403L5.55702 5.39815C5.85711 5.73353 5.85711 6.26309 5.55702 6.58083L1.10871 11.3292C1.0381 11.3998 0.967493 11.4351 0.879233 11.4351Z"
                    ></path>
                    <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M0.229332 10.5281L4.48868 5.99831L0.24288 1.48294C-0.133119 1.09849 -0.0312785 0.549591 0.267983 0.25033C0.652758 -0.134445 1.2069 -0.0332381 1.50812 0.267982L1.52041 0.280272L5.9781 5.02138C6.46442 5.56491 6.47872 6.42661 5.96853 6.96778V6.96778L1.50834 11.7289C1.36051 11.8767 1.15353 12 0.879227 12C0.660517 12 0.428074 11.9064 0.267983 11.7463C-0.0719543 11.4064 -0.0699959 10.8773 0.220873 10.538L0.229332 10.5281ZM5.55702 6.58083C5.85711 6.26309 5.85711 5.73353 5.55702 5.39815L1.10871 0.667403C0.985145 0.543839 0.790972 0.526187 0.667408 0.649751C0.543844 0.773315 0.526192 0.967487 0.649756 1.09105L5.09807 5.82179C5.18633 5.92771 5.18633 6.08657 5.09807 6.17483L0.649756 10.9056C0.543844 11.0291 0.543844 11.2233 0.667408 11.3469C0.720364 11.3998 0.808625 11.4351 0.879233 11.4351C0.967493 11.4351 1.0381 11.3998 1.10871 11.3292L5.55702 6.58083Z"
                    ></path>
                    </svg>
                </span>
            </div>
            <div class="flex items-center">
                <a
                    href="{{route('cec')}}"
                    class="text-base font-semibold text-gray-600 hover:text-opacity-80"
                >
                    Express Entry
                </a>
                <span class="px-3 text-gray-600">
                    <svg width="7" height="12" viewBox="0 0 7 12" class="fill-current">
                    <path
                        d="M0.879233 11.4351C0.808625 11.4351 0.720364 11.3998 0.667408 11.3469C0.543844 11.2233 0.543844 11.0291 0.649756 10.9056L5.09807 6.17483C5.18633 6.08657 5.18633 5.92771 5.09807 5.82179L0.649756 1.09105C0.526192 0.967487 0.543844 0.773315 0.667408 0.649751C0.790972 0.526187 0.985145 0.543839 1.10871 0.667403L5.55702 5.39815C5.85711 5.73353 5.85711 6.26309 5.55702 6.58083L1.10871 11.3292C1.0381 11.3998 0.967493 11.4351 0.879233 11.4351Z"
                    ></path>
                    <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M0.229332 10.5281L4.48868 5.99831L0.24288 1.48294C-0.133119 1.09849 -0.0312785 0.549591 0.267983 0.25033C0.652758 -0.134445 1.2069 -0.0332381 1.50812 0.267982L1.52041 0.280272L5.9781 5.02138C6.46442 5.56491 6.47872 6.42661 5.96853 6.96778V6.96778L1.50834 11.7289C1.36051 11.8767 1.15353 12 0.879227 12C0.660517 12 0.428074 11.9064 0.267983 11.7463C-0.0719543 11.4064 -0.0699959 10.8773 0.220873 10.538L0.229332 10.5281ZM5.55702 6.58083C5.85711 6.26309 5.85711 5.73353 5.55702 5.39815L1.10871 0.667403C0.985145 0.543839 0.790972 0.526187 0.667408 0.649751C0.543844 0.773315 0.526192 0.967487 0.649756 1.09105L5.09807 5.82179C5.18633 5.92771 5.18633 6.08657 5.09807 6.17483L0.649756 10.9056C0.543844 11.0291 0.543844 11.2233 0.667408 11.3469C0.720364 11.3998 0.808625 11.4351 0.879233 11.4351C0.967493 11.4351 1.0381 11.3998 1.10871 11.3292L5.55702 6.58083Z"
                    ></path>
                    </svg>
                </span>
            </div>
            <div class="text-base font-semibold text-gray-600 text-opacity-80">
                CEC
            </div>
        </div>
    </div>
    {{-- MAIN --}}
    <section class="flex flex-nowrap md:h-[100vh] w-[100%]">
        {{-- MAIN --}}
        <div class="w-full md:w-[70%] h-[100%] overflow-y-scroll pt-20 pb-10 lg:pt-[120px] lg:pb-20 bg-gray-200 main">
            {{-- main content overall --}}
            <div class="mycontainer mx-auto">
                <div class="flex flex-wrap">
                    <div class="w-full px-4">
                      <div class="mb-12 lg:mb-20">                    
                        <h2 class="text-dark mb-4 text-3xl font-bold sm:text-4xl md:text-[40px]">
                            Canadian Experience Class (CEC) Eligibility
                        </h2>
                        <p class="text-dark text-base">
                            The Canadian Experience Class (CEC) program is ideal for candidates who have recent Canadian work experience and are seeking permanent immigration to Canada. CEC is also one of the fastest routes to Canadian permanent residence, taking as little as three to four months to process! 
                        </p>                        
                        {{-- table of content --}}
                        <div class="my-10">
                            <p class="flex gap-x-2 mb-2 text-xl font-bold"><span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 010 3.75H5.625a1.875 1.875 0 010-3.75z" />
                              </svg>
                              </span><span>Overview of things to know about Canada Experience Class (CEC)</span></p>
                            <ul class="md:w-max ml-4 space-y-2" role="list">
                                <li><a href="{{route("cec").'#What-is-the-Canadian-Experience-Class-Program'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                  </svg>
                                  </span><span class="underline">What is the Canadian Experience Class Program?</span></a></li>
                                <li><a href="{{route("cec").'#Who-is-eligible-for-the-Canadian-Experience-Class-Program'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                  </svg>
                                  </span><span class="underline">Who is eligible for the Canadian Experience Class Program?</span></a></li>
                                <li><a href="{{route("cec").'#Canadian-Experience-Class-requirements'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                  </svg>
                                  </span><span class="underline">Canadian Experience Class requirements</span></a></li>
                                <li><a href="{{route("cec").'#How-to-calculate-your-Canadian-Experience-Class-CRS-points'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                  </svg>
                                  </span><span class="underline">How to calculate your Canadian Experience Class CRS points</span></a></li>
                                <li><a href="{{route("cec").'#Can-I-apply-to-the-Canadian-Experience-Class-program-from-outside-of-Canada'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                  </svg>
                                  </span><span class="underline">Can I apply to the Canadian Experience Class program from outside of Canada?</span></a></li>
                                <li><a href="{{route("cec").'#Is-proof-of-funds-required-for-Canadian-Experience-Class'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                  </svg>
                                  </span><span class="underline">Is proof of funds required for Canadian Experience Class?</span></a></li>
                                <li><a href="{{route("cec").'#Does-internship-experience-in-Canada-count-towards-my-Canadian-Experience-Class-application'}}" class="flex gap-x-2 text-base text-gray-600"><span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                  </svg>
                                  </span><span class="underline">Does internship experience in Canada count towards my Canadian Experience Class application?</span></a></li>                               
                            </ul>
                        </div>
                        {{-- main content --}}
                        <div class="flex flex-wrap mb-8 md:mb-4">                           
                            {{-- What-is-the-Canadian-Experience-Class-Program --}}
                            <div class="w-full mt-16" id="What-is-the-Canadian-Experience-Class-Program">
                                <h2 class="bg-white px-4 py-2 border-l-4 border-red-600 rounded-r-md">
                                    What is the Canadian Experience Class Program?
                                </h2>
                                <div class="mt-2 px-4">
                                    <p class="mb-4">
                                        CEC is managed under the <a href="{{route('express_entry')}}" class="text-red-600 hover:underline">Express Entry system</a> and uses the 
                                        Comprehensive Ranking System (CRS) to rank interested candidates. Applicants who have competitive CRS scores will receive 
                                        <a href="{{route('apply_express_entry')}}" class="text-red-600 underline">invitations to apply</a> for Canadian permanent residence.
                                    </p>                                                                   
                                </div>
                            </div>
                            {{-- Who-is-eligible-for-the-Canadian-Experience-Class-Program --}}
                            <div class="w-full mt-16" id="Who-is-eligible-for-the-Canadian-Experience-Class-Program">
                                <h2 class="bg-white px-4 py-2 border-l-4 border-red-600 rounded-r-md">
                                    Who is eligible for the Canadian Experience Class Program?
                                </h2>
                                <div class="w-full mt-2 px-4">
                                    <p class="mb-4">
                                        In order to be eligible for CEC, a candidate must have at least 12-months of full-time 
                                        (or an equivalent amount of part-time), skilled work experience in Canada. The Canadian work 
                                        experience must have been acquired within the previous three years from the date of the 
                                        application.
                                        <br><br>CEC is not an option for foreign nationals who do not have recent Canadian work experience.
                                    </p>                                                                           
                                </div>
                                <div class="px-2 py-4 bg-white w-[100%] md:w-[70%] mx-auto rounded-lg shadow-md hover:bg-slate-100 focus:bg-slate-200">
                                    <p class="text-2xl text-gray-600 text-center mb-4">
                                       Have you employed our free online tool for checking your eligibilty?                                        
                                    </p>   
                                    <a href="{{route('assessment')}}" class="w-max mx-auto flex justify-center rounded-md 
                                    bg-red-600 text-white hover:bg-red-700 py-4 px-4">free online canada immigration assessment</a>
                                </div>  
                            </div>                             
                            {{-- Canadian-Experience-Class-requirements --}}
                            <div class="w-full mt-16" id="Canadian-Experience-Class-requirements">
                                <h2 class="bg-white px-4 py-2 border-l-4 border-red-600 rounded-r-md">
                                    Canadian Experience Class requirements
                                </h2>
                                <div class="w-full mt-2 px-4">
                                    <p class="mb-4">
                                        In order to count your 12-months of Canadian work experience towards your CEC application, it must meet the following conditions:
                                    </p>   
                                    <div class="px-4 w-full">
                                        <ul class="w-full ml-4 space-y-2 list-decimal" role="list">
                                            <li>Be obtained in Canada within the 36 months prior to the date of submission of the 
                                                electronic Application for Permanent Residence (eAPR).</li>
                                            <li>Your employment duties in Canada fall under the 
                                                <a href="{{route("noc_code")}}" class="text-red-600 underline">NOC Code Skill Level</a> 0, A, or B.</li>
                                            <li>Be lawfully obtained, paid work experience in Canada.</li>                                            
                                        </ul>                                                                             
                                    </div> 
                                    <p class="my-4">
                                        An applicant cannot count work experience obtained while engaged in full-time studies in Canada.    
                                    </p>  
                                    <div class="px-4 w-full">
                                        <p class="py-2 font-bold text-lg">
                                            In addition to the Canadian experience requirement, CEC has several other eligibility criteria which must be met in order to submit: 
                                        </p>
                                        <ul class="w-full ml-4 space-y-2 list-decimal" role="list">
                                            <li><b>Language:</b> Reach a <a href="{{route("clb")}}" class="text-red-600 underline">Canadian Language Benchmark (CLB)</a> level 7 on an approved English or French language test for NOC skill level 0 or A jobs. Reach a CLB 5 for NOC B jobs.</li>
                                            <li><b>Residence in Canada:</b> Intend to live outside of the province of Quebec.</li>                                            
                                        </ul>                                                                             
                                    </div> 
                                    <p class="py-4">Provided a candidate meets these requirements, they will be eligible to submit an 
                                        Express Entry profile for the Canadian Experience Class program. However, candidates should note 
                                        that they must meet Canada’s basic admissibility requirements. Certain criminal offenses and 
                                        medical conditions may make a person inadmissible to Canada.</p>                         
                                </div>
                            </div>                                                       
                        </div>
                        {{-- express entry options --}}
                        <div class="md:hidden  bg-white px-4 py-2 rounded-md shadow">
                            <p class="text-gray-600 text-xl mt-4 font-bold">
                                Other Express entry options
                            </p>
                            {{-- list items --}}
                            <ul class="space-y-2 pl-2 my-3 w-max" role="list">
                                <li>
                                    <a href="{{route('fsw')}}" class="flex gap-x-2 text-base text-gray-600">
                                        <span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        </span><span class="underline">Federal Skilled Worker (FSW) Program</span>
                                    </a>                                
                                </li>
                                <li>
                                    <a href="{{route('fst')}}" class="flex gap-x-2 text-base text-gray-600">
                                        <span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        </span><span class="underline">Federal Skilled Trades</span>
                                    </a>                                
                                </li>
                                                             
                                <li>
                                    <a href="{{route('express_entry_draw')}}" class="flex gap-x-2 text-base text-gray-600">
                                        <span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        </span><span class="underline">Express Entry Draws</span>
                                    </a>                                
                                </li>
                                <li>
                                    <a href="{{route('apply_express_entry')}}" class="flex gap-x-2 text-base text-gray-600">
                                        <span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        </span><span class="underline">Invitation to Apply</span>
                                    </a>                                
                                </li>
                            </ul>
                        </div>
                        {{-- main content contd--}}
                        <div class="flex flex-wrap">                           
                            {{-- How-to-calculate-your-Canadian-Experience-Class-CRS-points --}}
                            <div class="w-full mt-16" id="How-to-calculate-your-Canadian-Experience-Class-CRS-points">
                                <h2 class="bg-white px-4 py-2 border-l-4 border-red-600 rounded-r-md">
                                    How to calculate your Canadian Experience Class CRS points
                                </h2>
                                <div class="mt-2 px-4">
                                    <p class="mb-4">Express Entry holds rounds of invitations and invites CEC candidates based on their 
                                        CRS scores. To calculate your points for CEC, you simply need to use VISACAD’s handy 
                                        <a href="{{route('crs')}}" class="text-red-600 underline">CRS calculator tool</a>. 
                                    </p>                           
                                </div>
                            </div>
                            {{-- Can I apply to the Canadian Experience Class program from outside of Canada --}}
                            <div class="w-full mt-16" id="Can-I-apply-to-the-Canadian-Experience-Class-program-from-outside-of-Canada">
                                <h2 class="bg-white px-4 py-2 border-l-4 border-red-600 rounded-r-md">
                                    Can I apply to the Canadian Experience Class program from outside of Canada?
                                </h2>
                                <div class="mt-2 px-4">
                                    <p class="mb-4">As long as you meet the basic eligibility requirements for CEC as mentioned above, you can apply from anywhere in the world.
                                    </p>                           
                                </div>
                            </div>
                            {{-- Is proof of funds required for Canadian Experience Class? --}}
                            <div class="w-full mt-16" id="Is-proof-of-funds-required-for-Canadian-Experience-Class">
                                <h2 class="bg-white px-4 py-2 border-l-4 border-red-600 rounded-r-md">
                                    Is proof of funds required for Canadian Experience Class?
                                </h2>
                                <div class="mt-2 px-4">
                                    <p class="mb-4">Proof of funds is not a requirement of the CEC program. You will not be required to provide any documentation regarding your finances. 
                                    </p>                           
                                </div>
                            </div>
                            {{-- Does internship experience in Canada count towards my Canadian Experience Class application --}}
                            <div class="w-full mt-16" id="Does-internship-experience-in-Canada-count-towards-my-Canadian-Experience-Class-application">
                                <h2 class="bg-white px-4 py-2 border-l-4 border-red-600 rounded-r-md">
                                    Does internship experience in Canada count towards my Canadian Experience Class application?
                                </h2>
                                <div class="mt-2 px-4">
                                    <p class="mb-4">It depends. If your paid internship is not part of your education, then you may count it towards the Express Entry work experience requirement.  
                                    </p>                           
                                </div>
                            </div>                          
                        </div>
                      </div>
                    </div>
                </div> 
            </div>      
            {{-- call to action --}}
            <div id="immigrate-call-to-action" class="py-10 px-4 sm:px-6 lg:px-8 w-[100%] h-[40vh] flex justify-center align-center"
            style="background-image:url('/images/maple.jpeg')">
                <div id="immigrate-call-to-action-content" class="flex justify-center align-center">
                    <div id="immigrate-call-to-action-inner" class="flex flex-col justify-center">
                        <h2 class="text-white text-2xl bold py-2 text-center uppercase relative z-99">Free Immigration Assessment</h2>
                        <p class="text-white text-base relative z-99 text-center">Complete our free assessment today and a member of the VISACAD Team will contact you to discuss your immigration to Canada.</p>
                        <div class="text-center mt-4">
                            <a href="{{route("assessment")}}" class="w-max text-white rounded-md shadow text-base px-4 py-2 bg-red-600 hover:bg-red-700">Get started</a>
                        </div>
                    </div>
                </div>
            </div>       
        </div>
        {{-- ASIDE --}}
        <div class="hidden md:block w-[30%] bg-white">
           <div class="mycontainer">
                <div class="">
                    <p class="text-gray-600 text-xl mt-4">
                        Other Express Entry Options
                    </p>
                    <ul class="space-y-2 pl-2 mt-2 w-max" role="list">
                        <li>
                            <a href="{{route('fsw')}}" class="flex gap-x-2 text-base text-gray-600">
                                <span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                </span><span class="underline">Federal Skilled Worker (FSW) Program</span>
                            </a>                                
                        </li>
                        <li>
                            <a href="{{route('fst')}}" class="flex gap-x-2 text-base text-gray-600">
                                <span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                </span><span class="underline">Federal Skilled Trades</span>
                            </a>                                
                        </li>                                                    
                        <li>
                            <a href="{{route('express_entry_draw')}}" class="flex gap-x-2 text-base text-gray-600">
                                <span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                </span><span class="underline">Express Entry Draws</span>
                            </a>                                
                        </li>
                        <li>
                            <a href="{{route('apply_express_entry')}}" class="flex gap-x-2 text-base text-gray-600">
                                <span class="text-red-600"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                </span><span class="underline">Invitation to Apply</span>
                            </a>                                
                        </li>
                    </ul>
                    <p class="text-gray-600 text-xl mt-4">
                        Find out what it takes to be eligible for Canadian immigration and begin your clear path to Canada.
                    </p>
                    <a href="{{route('assessment')}}" class=" bg-red-600 mt-4 flex text-base text-white flex px-2 py-4 border border-red-600 justify-center rounded-lg
                    hover:bg-red-700 focus:bg-red-700 hover:text-white focus:text-white">
                        <span>Free online immigration assessment</span><span class="ml-[8px]">&rarr;</span>
                    </a>
                </div>
           </div>
        </div>
    </section>
</x-app-layout>
    