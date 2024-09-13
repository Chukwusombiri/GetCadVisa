<x-app-layout> 
    {{-- BREADCRUMB --}}
    <x-breadcrumb>
        <x-slot:topic>Firm</x-slot>
        <x-slot:subtopic>About us</x-slot>
    </x-breadcrumb>
    <!-- Header -->
    <x-side-image-header :url="route('contact')" :source="asset('images/about.jpg')" button-text="Speak to us">
        <x-slot:maintitle>About {{config('app.name')}}</x-slot>
        <x-slot:subtitle>Discover everything about us that sets us apart from other immigration services.</x-slot>
    </x-side-image-header>       
    {{-- BODY --}}
    <section class="py-16 md:py-24 bg-gray-50 text-gray-600">       
        {{-- intro --}}
        <div class="container mx-auto px-4 md:px-6 lg:px-10 grid grid-cols-1 md:grid-cols-5 lg:grid-cols-2 gap-6 md:gap-8 lg:gap-10">
            <div class="md:col-span-3 lg:col-span-1 md:order-2">                            
                <h2 class="hedvig-regular text-gray-800 mb-8 text-3xl text-4xl md:text-5xl max-w-xl">
                    Your trusted partner in navigating the complexities of Canadian immigration
                </h2>
                <p class="text-lg mb-2">
                    {{config('app.name')}} was founded with a clear vision: to provide comprehensive and reliable immigration services to individuals and families aspiring to make Canada their new home. Our journey began with a small team of passionate immigration experts who understood the intricacies and challenges of the immigration process. 
                </p>
                <p class="text-lg mb-4 md:mb-6">
                    Whether you are seeking to move to Canada on a permanent or temporary basis, our mission is to make your immigration journey as seamless and successful as possible.
                </p>  
                <!-- link button -->
                <div class="py-6">
                    <x-link-two href="{{ route('contact') }}">Contact us for further enquiries</x-link-two>
                </div>                                                                                                                                      
            </div>
            <div class="md:col-span-2 lg:col-span-1 md:order-1 flex">
                <div class="w-full">
                    <img src="{{ asset('/images/team1.jpg') }}" alt="Team photo"
                        class="w-full h-[80vh] rounded-xl object-fit shadow-xl">
                    <p class="text-sm futura-light uppercase mt-4 mb-2 tracking-widest"><span
                            class="font-bold">Attorney Steven Calton</span>, Visa Assessment Officer</p>
                </div>
            </div>
        </div>  
        {{-- stats --}}
        <div class="container px-4 md:px-6 lg:px-10 mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-10 mt-10">
            <div class="flex flex-col justify-start py-6 md:border-t border-gray-300">
                <h4 class="hedvig-bold text-5xl md:text-6xl font-bold text-rose-700">
                    95%
                </h4>
                <p class="futura-book text-lg md:text-2xl mt-2 md:mt-4">
                    Client Success Rate
                </p>
            </div>
            <div class="flex flex-col justify-start py-6 border-t border-gray-300">
                <h4 class="hedvig-bold text-5xl md:text-6xl font-bold text-rose-700">
                    5000+
                </h4>
                <p class="futura-book text-lg md:text-2xl mt-2 md:mt-4">
                    Volume of Applications
                </p>
            </div>
            <div class="flex flex-col justify-start py-6 border-t border-gray-300">
                <h4 class="hedvig-bold text-5xl md:text-6xl font-bold text-rose-700">
                    -30%
                </h4>
                <p class="futura-book text-lg md:text-2xl mt-2 md:mt-4">
                    Visa Average processing time reduction
                </p>
            </div>
        </div>
    </section>
    {{-- vision --}}
    <section class="py-16 bg-gray-50 text-gray-600">
        <div class="max-w-7xl mx-auto container px-4 md:px-6 lg:px-10">
            <div class="mb-16">
                <p class="hedvig-regular text-4xl lg:text-5xl tracking-wide text-gray-800">Our Work Ethics and Values</p>
            </div>
            {{-- items --}}
            <div class="flex flex-wrap my-12">
                <div class="w-full border-b md:w-1/2 md:border-r lg:w-1/3 p-8">
                    <div class="flex items-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                            fill="currentColor" class="h-6 w-6 text-rose-700">
                            <path
                                d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                            </path>
                        </svg>
                        <div class="ml-4 text-xl">Integrity</div>
                    </div>
                    <p class="leading-loose text-gray-500">We adhere to the highest standards of honesty and ethics in all our dealings. 
                        Our clients can trust that we will always act in their best interests.
                    </p>
                </div>



                <div class="w-full border-b md:w-1/2 lg:w-1/3 lg:border-r p-8">
                    <div class="flex items-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                            fill="currentColor" class="h-6 w-6 text-rose-700">
                            <path
                                d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                            </path>
                        </svg>
                        <div class="ml-4 text-xl">Excellence</div>
                    </div>
                    <p class="leading-loose text-gray-500">We strive for excellence in everything we do. Our team stays updated with the 
                        latest immigration laws and practices to provide the most accurate and effective solutions.
                    </p>
                </div>



                <div class="w-full border-b md:w-1/2 md:border-r lg:w-1/3 lg:border-r-0 p-8">
                    <div class="flex items-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                            fill="currentColor" class="h-6 w-6 text-rose-700">
                            <path
                                d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                            </path>
                        </svg>
                        <div class="ml-4 text-xl">Transparency</div>
                    </div>
                    <p class="leading-loose text-gray-500">We believe in clear and open communication. Our clients are kept informed at 
                        every step of the process, ensuring there are no surprises or hidden fees.
                    </p>
                </div>



                <div class="w-full border-b md:w-1/2 lg:w-1/3 lg:border-r lg:border-b-0 p-8">
                    <div class="flex items-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                            fill="currentColor" class="h-6 w-6 text-rose-700">
                            <path
                                d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                            </path>
                        </svg>
                        <div class="ml-4 text-xl">Empathy</div>
                    </div>
                    <p class="leading-loose text-gray-500">We understand that immigration can be a stressful and emotional journey. Our 
                        team is here to offer support, compassion, and personalized attention to each client's unique situation.
                    </p>
                </div>



                <div class="w-full border-b md:w-1/2 md:border-r md:border-b-0 lg:w-1/3 lg:border-b-0 p-8">
                    <div class="flex items-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                            fill="currentColor" class="h-6 w-6 text-rose-700">
                            <path
                                d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                            </path>
                        </svg>
                        <div class="ml-4 text-xl">Innovation</div>
                    </div>
                    <p class="leading-loose text-gray-500">We continuously seek innovative solutions to enhance our services and improve 
                        the client experience. Our use of advanced technology ensures efficient and effective handling of your 
                        immigration needs.
                    </p>
                </div>
            </div>
        </div>
    </section>                
    {{-- team --}}
    <section class="bg-gray-50">
        <div class="h-[32rem] bg-gray-100">
            <div class="container px-4 md:px-6 lg:px-10 py-10 mx-auto">
                <h1 class="hedvig-regular text-gray-800 text-3xl text-4xl md:text-5xl max-w-xl">The Executive Team</h1>      
                <div class="flex mx-auto mt-6">
                    <span class="inline-block w-40 h-1 bg-rose-700 rounded-full"></span>
                    <span class="inline-block w-3 h-1 mx-1 bg-rose-700 rounded-full"></span>
                    <span class="inline-block w-1 h-1 bg-rose-700 rounded-full"></span>
                </div>
    
                <p class="max-w-2xl mt-6 text-gray-600 text-md md:text-lg">
                    Our journey began with a small team of passionate immigration experts who understood the intricacies and challenges of the immigration process.
                </p>              
            </div>
        </div>
    
        <div class="container px-4 md:px-6 lg:px-10 py-10 mx-auto -mt-72 sm:-mt-80 md:-mt-96">
            <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-16 md:grid-cols-2 xl:grid-cols-3">
                <div class="flex flex-col items-center p-4 border sm:p-6 rounded-xl">
                    <img class="object-cover w-full rounded-xl aspect-square" src="{{asset('images/team3.jpg')}}" alt="Financial/documentation officer">
    
                    <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize">Attorney Mike Montazer</h1>
    
                    <p class="mt-2 text-gray-500 capitalize">Financial/Documentation officer</p>
    
                    <div class="flex mt-3 -mx-2">
                        <a href="{{config('app.company.telegram')}}" class="mx-2 text-gray-600 transition-colors duration-300" aria-label="Reddit">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-telegram w-8 h-8" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#be123c" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M15 10l-4 4l6 6l4 -16l-18 7l4 2l2 6l3 -4" />
                            </svg>
                        </a>
                        <a href="{{config('app.company.telegram')}}" class="mx-2 text-gray-600 transition-colors duration-300" aria-label="Reddit">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram w-8 h-8" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#be123c" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                                <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                <path d="M16.5 7.5l0 .01" />
                            </svg>
                        </a>
    
                        <a href="{{config('app.company.telegram')}}" class="mx-2 text-gray-600 transition-colors duration-300" aria-label="Facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook w-8 h-8" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#be123c" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                            </svg>
                        </a>
    
                        <a href="{{config('app.company.telegram')}}" class="mx-2 text-gray-600 transition-colors duration-300" aria-label="Github">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-linkedin w-8 h-8" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#be123c" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                                <path d="M8 11l0 5" />
                                <path d="M8 8l0 .01" />
                                <path d="M12 16l0 -5" />
                                <path d="M16 16v-3a2 2 0 0 0 -4 0" />
                            </svg>
                        </a>
                    </div>
                </div>
    
                <div class="flex flex-col items-center p-4 border sm:p-6 rounded-xl">
                    <img class="object-cover w-full rounded-xl aspect-square" src="{{asset('images/team1.jpg')}}" alt="Assessment officer">
    
                    <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize">Attorney Steven Calton</h1>
    
                    <p class="mt-2 text-gray-500 capitalize">Visa Assessment Officer</p>
    
                    <div class="flex mt-3 -mx-2">
                        <a href="#" class="mx-2 text-gray-600 transition-colors duration-300" aria-label="Reddit">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram w-8 h-8" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#be123c" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                                <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                <path d="M16.5 7.5l0 .01" />
                            </svg>
                        </a>
    
                        <a href="#" class="mx-2 text-gray-600 transition-colors duration-300" aria-label="Facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook w-8 h-8" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#be123c" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                            </svg>
                        </a>
    
                        <a href="#" class="mx-2 text-gray-600 transition-colors duration-300" aria-label="Github">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-linkedin w-8 h-8" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#be123c" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                                <path d="M8 11l0 5" />
                                <path d="M8 8l0 .01" />
                                <path d="M12 16l0 -5" />
                                <path d="M16 16v-3a2 2 0 0 0 -4 0" />
                            </svg>
                        </a>
                    </div>
                </div>
    
                <div class="flex flex-col items-center p-4 border sm:p-6 rounded-xl">
                    <img class="object-cover w-full rounded-xl aspect-square" src="{{asset('images/team2.png')}}" alt="Director of the international student department">
    
                    <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize">Judith Mckay</h1>
    
                    <p class="mt-2 text-gray-500 capitalize">Director of the international student department.</p>
    
                    <div class="flex mt-3 -mx-2">
                        <a href="#" class="mx-2 text-gray-600 transition-colors duration-300" aria-label="Reddit">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram w-8 h-8" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#be123c" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                                <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                <path d="M16.5 7.5l0 .01" />
                            </svg>
                        </a>
    
                        <a href="#" class="mx-2 text-gray-600 transition-colors duration-300" aria-label="Facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook w-8 h-8" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#be123c" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                            </svg>
                        </a>
    
                        <a href="#" class="mx-2 text-gray-600 transition-colors duration-300" aria-label="Github">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-linkedin w-8 h-8" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#be123c" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                                <path d="M8 11l0 5" />
                                <path d="M8 8l0 .01" />
                                <path d="M12 16l0 -5" />
                                <path d="M16 16v-3a2 2 0 0 0 -4 0" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- reviews --}}    
    <section class="bg-gray-50 py-16">
        <div class="text-gray-600 pt-8" id="reviews">

            <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-10">
        
                <div class="mb-10">
                    <h2 class="hedvig-regular text-gray-800 text-3xl text-4xl md:text-5xl max-w-xl">
                        Read some reviews from our clients
                    </h2>
                </div>
        
        
                <div class="md:columns-2 lg:columns-3 gap-8 space-y-8">            
                    <x-review-card image-url="https://randomuser.me/api/portraits/men/34.jpg" nationality="Pakistan">
                        <x-slot:client>Ahmed Khan</x-slot>
                        <x-slot:comment>I cannot thank {{config('app.name')}} enough for their outstanding service. From the very first consultation, I knew I was in good hands. The team was attentive, knowledgeable, and always available to answer my questions. They made the entire process so much easier and less stressful. Now, my family and I are happily settled in Canada, and I have started my dream job. I highly recommend {{config('app.name')}} to anyone looking to immigrate to Canada.</x-slot>
                    </x-review-card>
                    <x-review-card image-url="https://randomuser.me/api/portraits/women/35.jpg" nationality="India">
                        <x-slot:client>Priya Patel</x-slot>
                        <x-slot:comment>I was overwhelmed with the Canadian visa application process until I found {{config('app.name')}}. Their expertise and guidance were invaluable. They took care of everything and made the process smooth and stress-free. My family and I are now permanent residents of Canada, and we couldn't be happier. Highly recommend their services!</x-slot>
                    </x-review-card>
                    <x-review-card image-url="https://randomuser.me/api/portraits/men/36.jpg" nationality="Ghana">
                        <x-slot:client>Kwame Agyeman</x-slot>
                        <x-slot:comment>I am incredibly thankful to {{config('app.name')}} for their exceptional service. Their team was thorough and professional, making the complex immigration process feel manageable. They guided us every step of the way, and we received our permanent residency without any issues. We are now enjoying our new life in Canada, and I am working in my dream job. Thank you, {{config('app.name')}}!</x-slot>
                    </x-review-card>
                    <x-review-card image-url="https://randomuser.me/api/portraits/women/37.jpg" nationality="Mexico">
                        <x-slot:client>Maria Gonzalez</x-slot>
                        <x-slot:comment>I was overwhelmed with the Canadian visa application process until I found {{config('app.name')}}. Their expertise and guidance were invaluable. They took care of everything and made the process smooth and stress-free. My family and I are now permanent residents of Canada, and we couldn't be happier. Highly recommend their services!</x-slot>
                    </x-review-card>
                    <x-review-card image-url="https://randomuser.me/api/portraits/men/38.jpg" nationality="Russia">
                        <x-slot:client>Olga Petrov</x-slot>
                        <x-slot:comment>{{config('app.name')}} exceeded our expectations in every way. They were knowledgeable, responsive, and genuinely cared about our success. The entire process was handled with utmost care and expertise. We are now happily settled in Calgary, and my children are thriving in their new schools. We are grateful for the outstanding service provided by {{config('app.name')}}.</x-slot>
                    </x-review-card>
                    <x-review-card image-url="https://randomuser.me/api/portraits/women/39.jpg" nationality="UAE">
                        <x-slot:client>Fatima Al-Mansouri</x-slot>
                        <x-slot:comment>The professionalism and dedication of {{config('app.name')}} are unmatched. They provided exceptional service and support throughout the entire immigration process. Thanks to their help, my family and I are now enjoying a new life in Canada. We appreciate everything they have done for us and highly recommend their services to anyone looking to immigrate to Canada</x-slot>
                    </x-review-card>
                    <x-review-card image-url="https://randomuser.me/api/portraits/men/34.jpg" nationality="China">
                        <x-slot:client>Chen Wei</x-slot>
                        <x-slot:comment>Moving to Canada seemed like a daunting task, but {{config('app.name')}} made it easy and straightforward. Their team was always available to answer my questions and provide updates. They were efficient and thorough, and I received my work visa much sooner than expected. I am now living my dream in Vancouver. Thank you, {{config('app.name')}}!</x-slot>
                    </x-review-card>
                </div>
            </div>
        </div>
    </section>
</x-app-layout> 