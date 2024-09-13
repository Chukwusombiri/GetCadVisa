<x-app-layout>
    {{-- breadcrumb --}}
    <x-breadcrumb>
        <x-slot:topic>immigration</x-slot>
        <x-slot:subtopic>Legal advice</x-slot>
    </x-breadcrumb>
    {{-- header --}}
    <x-header>
        <x-slot:maintitle>Professional Credentials</x-slot>
        <x-slot:subtitle>The lawyers at {{config('app.name')}} are Authorized by Immigration, Refugees and Citizenship Canada to represent you as your Canadian Immigration Lawyer.</x-slot>
    </x-header>
    <!-- Page Content -->
    <section class="container mx-auto">
        <div class="flex flex-col lg:flex-row gap-y-8">
            <div class="lg:w-3/4 px-4 md:px-8">
                <p class="text-gray-600 mb-4">The credibility, knowledge and experience of the Canadian immigration lawyer you choose to represent you is of critical importance. Applicants should not assume that individuals who make claims of expertise are qualified, or even permitted, under Canadian legislation, to handle the crucial matters associated with Canadian Immigration applications.</p>                       
                <p class="mb-4 text-gray-600">Given the importance of your Canadian immigration application to your future, we caution you to take the utmost care in assuring yourselves as to the qualifications of your representative.</p>
                <p class="mb-4 text-gray-600">{{config('app.name')}} makes resources available to prospective applicants who wish to verify our credentials.</p>
                <p class="text-gray-600 mb-8">As members in good standing of various Canadian Law Societies, the lawyers at {{config('app.name')}} are authorized by Immigration, Refugees and Citizenship Canada (IRCC) to represent you.</p>
                <div class="px-4 py-4 w-full md:w-[70%] rounded-lg border border-gray-300 hover:border-rose-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
                    </svg>
                    <p>
                        Contact us to verify the authority of our lawyers to represent you.
                    </p>
                    <!-- link button -->
                    <div class="py-6">
                        <x-link-one href="{{ route('contact') }}">Contact us for further enquiries</x-link-one>
                    </div>
                </div>
                <h2 class="mt-8 text-2xl font-bold mb-4 text-gray-700">The following is the contact information of the professional organizations that govern the legal representation provided by the lawyers at {{config('app.name')}}:</h2>
                <div class="mt-4">
                    <h3 class="text-dark font-bold text-xl">The Canadian Bar Association</h3> 
                    <p class="text-gray-600">500-865 Carling Avenue</p>
                    <p class="text-gray-600">Ottawa, Ontario K1S 5S8</p>
                </div>
                <div class="mt-4">
                    <h3 class="text-dark font-bold text-xl">The Quebec Bar Association (Barreau du Québec) Maison du Barreau</h3> 
                    <p class="text-gray-600">445 Boulevard Saint-Laurent, Suite 410</p>
                    <p class="text-gray-600">Montreal, Quebec, Canada, H2Y 3T8</p>
                </div>
                <div class="mt-4">
                    <h3 class="text-dark font-bold text-xl">The Quebec Immigration Lawyers Association (Association Québécoise des Avocats et Avocates en Droit de L'immigration)</h3> 
                    <p class="text-gray-600">445 Boulevard Saint-Laurent, Suite 500</p>
                    <p class="text-gray-600">Montreal, Quebec, Canada, H2Y 3T8</p>
                </div>
                <div class="mt-4">
                    <h3 class="text-dark font-bold text-xl">The Law Society of Ontario</h3> 
                    <p class="text-gray-600">Osgoode Hall, 130 Queen Street West, Toronto, Ontario M5H 2N6</p>
                </div>
            </div>
            <div class="lg:w-1/4 px-4 md:px-8">
                <div class="bg-white p-4 rounded-lg mb-10">
                    <h2 class="text-lg font-bold mb-4">Legal and Advice Options</h2>                
                    <ul class="space-y-3" role="list">

                        <li class=" flex flex-nowrap gap-x-1 px-4 py-2 bg-red-50 text-gray-700 shadow rounded-lg hover:bg-red-100 hover:text-gray-800 transition-colors duration-300 hover:cursor-pointer focus:cursor-pointer">

                            <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />

                            </svg>

                            </span>

                            <a href="{{route('about')}}">About us</a> 

                        </li>               

                        <li class="flex flex-nowrap gap-x-1 px-4 py-2 bg-red-50 text-gray-700 shadow rounded-lg hover:bg-red-100 hover:text-gray-800 transition-colors duration-300 hover:cursor-pointer focus:cursor-pointer active:text-red-500">

                            <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />

                            </svg>

                            </span>

                            <a href="{{route('professional_cred')}}">Professional Credential</button>

                        </li>

                        <li class="flex flex-nowrap gap-x-1 px-4 py-2 bg-red-50 text-gray-700 shadow rounded-lg hover:bg-red-100 hover:text-gray-800 transition-colors duration-300 hover:cursor-pointer focus:cursor-pointer active:text-red-500">

                            <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />

                            </svg>

                            </span>

                            <a href="{{route('temp_res_visa')}}">Temporary resident visas</button>

                        </li>

                        <li class="flex flex-nowrap gap-x-1 px-4 py-2 bg-red-50 text-gray-700 shadow rounded-lg hover:bg-red-100 hover:text-gray-800 transition-colors duration-300 hover:cursor-pointer focus:cursor-pointer active:text-red-500">

                            <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />

                            </svg>

                            </span>

                            <a href="{{route('biometrics')}}">Biometrics</button>

                        </li>

                        <li class="flex flex-nowrap gap-x-1 px-4 py-2 bg-red-50 text-gray-700 shadow rounded-lg hover:bg-red-100 hover:text-gray-800 transition-colors duration-300 hover:cursor-pointer focus:cursor-pointer active:text-red-500">

                            <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />

                            </svg>

                            </span>

                            <a href="/terms-of-service">Terms of Use</button>

                        </li>

                        <li class="flex flex-nowrap gap-x-1 px-4 py-2 bg-red-50 text-gray-700 shadow rounded-lg hover:bg-red-100 hover:text-gray-800 transition-colors duration-300 hover:cursor-pointer focus:cursor-pointer active:text-red-500">

                            <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                                <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />

                            </svg>

                            </span>

                            <a href="/privacy-policy">Privacy Policy</button>

                        </li> 

                    </ul>
                </div>
            </div>
        </div>
    </section>    
     {{-- BLOGS --}}
     <section class="py-12 md:py-16 lg:py-24 xl:py-32">
        <div class="px-4 md:px-8 lg:px-10 max-w-8xl mx-auto">
            <div class="pb-3 border-b mb-6 md:mb-8 flex justify-between flex-wrap gap-y-6">
                <h3 class="hedvig-regular uppercase text-4xl md:text-5xl tracking-wide max-w-xl text-gray-800">Latest
                    Canada immigration news</h3>
                <a href="{{ route('news') }}"
                    class="flex items-center text-md uppercase futura-medium text-rose-700 hover:text-rose-800">
                    View All
                    <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
            {{-- grid --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
                <!-- CARD 1 -->
                @if (count($blogs)>0)
                @foreach ($blogs as $item)
                <div class="rounded overflow-hidden shadow-lg flex flex-col">
                    <div class="relative">
                        <a href="{{$item['url']}}">
                            <img class="w-full h-56"
                                src="{{$item['urlToImage']}}"
                                alt="{{$item['title']}}">
                            <div
                                class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                            </div>
                        </a>                       
                    </div>
                    <div class="px-6 py-4 mb-auto">
                        <a href="{{$item['url']}}"
                            class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2">
                            {{$item['title']}}
                        </a>                        
                    </div>
                    <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                        <a href="{{$item['url']}}"
                            class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                            Keep reading
                            <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>                       
                    </div>
                </div>
                @endforeach
                @else
                    <div class="py-6 hedvig-regular text-gray-500 text-center text-2xl md:text-3xl tracking-wide">
                        No latest news to display
                    </div>
                @endif
                <!-- CARD ends -->
            </div>
        </div>
    </section>
</x-app-layout>