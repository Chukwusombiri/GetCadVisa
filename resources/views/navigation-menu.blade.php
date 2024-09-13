<nav x-data="{ open: false }" class="relative bg-gray-100 border-b border-gray-50 z-50 shadow-lg">
    {{-- covid-19 --}}
    <div class="text-white bg-zinc-600 max-w-7xl mx-auto px-2 sm:px-4 lg:px-6 hidden sm:block">
        <div class="flex justify-between py-2">
            <div class="text-sm">
                <p>Latest updates from the Russian-Ukrain invasion. <a href="{{ route('ukrain') }}" class="underline">Read
                        more</a> </p>
            </div>
            <div class="text-sm">
                <p><a href="{{config('app.company.telegram')}}" class="underline hover:text-rose-700">Chat us</a> | <a
                        href="{{ route('contact') }}" class="underline hover:text-rose-700">Contact us</a></p>
            </div>
        </div>
    </div>
    {{-- covid19 ends --}}

    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <x-application-mark class="block h-9 w-auto" />
                    </a>
                </div>



                <!-- Navigation Links -->

                <div class="hidden space-x-3 sm:-my-px sm:ml-10 sm:flex">

                    <x-my-dropdown>

                        <x-slot:trigger>

                            {{ __('Assessment') }}

                        </x-slot:trigger>



                        <x-slot:content>

                            <x-dropdown-link href="{{ route('assessment') }}">

                                {{ __('General Assessment') }}

                            </x-dropdown-link>

                            <x-dropdown-link href="{{ route('business_assessment') }}">

                                {{ __('Work Permit Assessment') }}

                            </x-dropdown-link>

                            <x-dropdown-link href="{{ route('sponsorship_assessment') }}">

                                {{ __('Sponsorship Assessment') }}

                            </x-dropdown-link>

                            <x-dropdown-link href="{{ route('study_assessment') }}">

                                {{ __('Study Assessment') }}

                            </x-dropdown-link>

                            <x-dropdown-link href="{{ route('business_assessment') }}">

                                {{ __('Business Assessment') }}

                            </x-dropdown-link>



                        </x-slot:content>

                    </x-my-dropdown>



                    <x-my-dropdown>

                        <x-slot:trigger>

                            {{ __('Immigration') }}

                        </x-slot:trigger>



                        <x-slot:content>

                            <x-dropdown-link href="{{ route('canada_immigration') }}">

                                {{ __('Canada Immigration') }}

                            </x-dropdown-link>

                            <x-dropdown-link href="{{ route('work_permit') }}">

                                {{ __('Work permit') }}

                            </x-dropdown-link>

                            <x-dropdown-link href="{{ route('sponsorship_immigration') }}">

                                {{ __('Sponsorship') }}

                            </x-dropdown-link>

                            <x-dropdown-link href="{{ route('study_immigration') }}">

                                {{ __('Study visa') }}

                            </x-dropdown-link>

                            <x-dropdown-link href="{{ route('citizenship') }}">

                                {{ __('Citizenship') }}

                            </x-dropdown-link>

                            <x-dropdown-link href="{{ route('business_immigration') }}">

                                {{ __('Business visa') }}

                            </x-dropdown-link>
                            <x-dropdown-link href="{{ route('crs_system') }}">

                                {{ __('Comprehensive ranking system') }}

                            </x-dropdown-link>
                            <x-dropdown-link href="{{ route('in_admissibilty') }}">

                                {{ __('Inadmissibilty') }}

                            </x-dropdown-link>

                        </x-slot:content>

                    </x-my-dropdown>

                    <x-my-dropdown>

                        <x-slot:trigger>

                            {{ __('Free Tools') }}

                        </x-slot:trigger>



                        <x-slot:content>

                            <x-dropdown-link href="{{ route('crs') }}">

                                {{ __('CRS Calculator') }}

                            </x-dropdown-link>

                            <x-dropdown-link href="{{ route('pnp_finder') }}">

                                {{ __('PNP Finder') }}

                            </x-dropdown-link>

                            <x-dropdown-link href="{{ route('clb_converter') }}">

                                {{ __('CLB Languate Converter') }}

                            </x-dropdown-link>

                            <x-dropdown-link href="{{ route('imp') }}">

                                {{ __('Migration processing time') }}

                            </x-dropdown-link>

                            <x-dropdown-link href="{{ route('job_finder') }}">

                                {{ __('Job Finder') }}

                            </x-dropdown-link>

                            <x-dropdown-link href="{{ route('visiting_canada') }}">

                                {{ __('Visiting Canada tool') }}

                            </x-dropdown-link>

                        </x-slot:content>

                    </x-my-dropdown>

                    <x-my-dropdown>

                        <x-slot:trigger>

                            {{ __('About') }}

                        </x-slot:trigger>



                        <x-slot:content>

                            <x-dropdown-link href="{{ route('about') }}">

                                {{ __('About Us') }}

                            </x-dropdown-link>

                            <x-dropdown-link href="{{ route('about') . '#team' }}">

                                {{ __('Our Team') }}

                            </x-dropdown-link>

                            <x-dropdown-link href="{{ route('FAQ') }}">

                                {{ __('FAQ') }}

                            </x-dropdown-link>

                            <x-dropdown-link href="{{ route('about') . '#reviews' }}">

                                {{ __('Client Reviews') }}

                            </x-dropdown-link>

                        </x-slot:content>

                    </x-my-dropdown>

                    <x-nav-link href="{{ route('news') }}">

                        {{ __('News') }}

                    </x-nav-link>

                    <x-my-dropdown>

                        <x-slot:trigger>

                            {{ __('Legal Help') }}

                        </x-slot:trigger>



                        <x-slot:content>

                            <x-dropdown-link href="{{ route('legal_advice') }}">

                                {{ __('Legal Advice') }}

                            </x-dropdown-link>

                            <x-dropdown-link href="{{ route('professional_cred') }}">

                                {{ __('Professional Credentials') }}

                            </x-dropdown-link>

                            <x-dropdown-link href="{{ route('temp_res_visa') }}">

                                {{ __('Temporary resident visas') }}

                            </x-dropdown-link>

                            <x-dropdown-link href="{{ route('biometrics') }}">

                                {{ __('Biometrics') }}

                            </x-dropdown-link>

                            <x-dropdown-link href="{{ route('terms.show') }}">

                                {{ __('Terms of use') }}

                            </x-dropdown-link>

                            <x-dropdown-link href="{{ route('policy.show') }}">

                                {{ __('Privacy policy') }}

                            </x-dropdown-link>

                        </x-slot:content>

                    </x-my-dropdown>

                </div>

            </div>



            <div class="hidden sm:flex sm:items-center sm:ml-6">

                <!-- Settings Dropdown -->

                @auth

                    <div class="ml-3 relative">

                        <x-nav-link href="{{ route('admin.dashboard') }}">control panel</x-nav-link>

                    </div>

                @endauth
                <div class="ml-3 relative">

                    <a href="{{config('app.company.telegram')}}"
                        class='flex flex-nowrap items-center px-4 py-2 border border-[#00abfb] rounded-2xl font-semibold 
                        text-xs text-[#00abfb] uppercase tracking-widest hover:text-[#008de6]
                        focus:outline-none focus:border-[#008de6] focus:text-[#008de6] transition shadow-lg'>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-telegram w-6 h-6" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M15 10l-4 4l6 6l4 -16l-18 7l4 2l2 6l3 -4" />
                        </svg>
                        <span class="ml-3">{{ __('Telegram') }}</span>
                    </a>

                </div>
            </div>



            <!-- Hamburger -->

            <div class="-mr-2 flex items-center sm:hidden">

                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 bg-red-800

                rounded-md text-white hover:text-white hover:bg-red-700 focus:outline-none 

                focus:bg-red-700 focus:text-white transition">

                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">

                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />

                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />

                    </svg>

                </button>

            </div>

        </div>

    </div>



    <!-- Responsive Navigation Menu -->

    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden bg-gray-100">

        <div class="pt-2 pb-3 space-y-1 divide-y divide-gray-200">

            <x-responsive-nav-link-dropdown>

                <x:slot:trigger>

                    {{ __('Free Assessment') }}

                </x:slot:trigger>

                <x:slot:links>

                    <x-responsive-nav-link href="{{ route('assessment') }}">

                        {{ __('General Assessment') }}

                    </x-responsive-nav-link>

                    <x-responsive-nav-link href="{{ route('business_assessment') }}">

                        {{ __('Work Assessment') }}

                    </x-responsive-nav-link>

                    <x-responsive-nav-link href="{{ route('sponsorship_assessment') }}">

                        {{ __('Sponsorship Assessment') }}

                    </x-responsive-nav-link>

                    <x-responsive-nav-link href="{{ route('study_assessment') }}">

                        {{ __('Study Assessment') }}

                    </x-responsive-nav-link>

                    <x-responsive-nav-link href="{{ route('business_assessment') }}">

                        {{ __('Business Assessment') }}

                    </x-responsive-nav-link>



                </x:slot:links>

            </x-responsive-nav-link-dropdown>

            <x-responsive-nav-link-dropdown>

                <x:slot:trigger>

                    {{ __('Immigration') }}

                </x:slot:trigger>

                <x:slot:links>

                    <x-responsive-nav-link href="{{ route('canada_immigration') }}">

                        {{ __('Canada Immigration') }}

                    </x-responsive-nav-link>

                    <x-responsive-nav-link href="{{ route('work_permit') }}">

                        {{ __('Work permit') }}

                    </x-responsive-nav-link>

                    <x-responsive-nav-link href="{{ route('sponsorship_immigration') }}">

                        {{ __('Sponsorship') }}

                    </x-responsive-nav-link>

                    <x-responsive-nav-link href="{{ route('study_immigration') }}">

                        {{ __('Study visa') }}

                    </x-responsive-nav-link>

                    <x-responsive-nav-link href="{{ route('citizenship') }}">

                        {{ __('Citizenship') }}

                    </x-responsive-nav-link>

                    <x-responsive-nav-link href="{{ route('business_immigration') }}">

                        {{ __('Business visa') }}

                    </x-responsive-nav-link>
                    <x-responsive-nav-link href="{{ route('crs_system') }}">

                        {{ __('Comprehensive ranking system') }}

                    </x-responsive-nav-link>
                    <x-responsive-nav-link href="{{ route('in_admissibilty') }}">

                        {{ __('Inadmissibilty') }}

                    </x-responsive-nav-link>

                </x:slot:links>

            </x-responsive-nav-link-dropdown>


            <x-responsive-nav-link-dropdown>

                <x:slot:trigger>

                    {{ __('Free Tools') }}

                </x:slot:trigger>

                <x:slot:links>

                    <x-responsive-nav-link href="{{ route('crs') }}">

                        {{ __('CRS Calculator') }}

                    </x-responsive-nav-link>

                    <x-responsive-nav-link href="{{ route('pnp_finder') }}">

                        {{ __('PNP Finder') }}

                    </x-responsive-nav-link>

                    <x-responsive-nav-link href="{{ route('clb_converter') }}">

                        {{ __('CLB Languate Converter') }}

                    </x-responsive-nav-link>

                    <x-responsive-nav-link href="{{ route('imp') }}">

                        {{ __('Migration processing time') }}

                    </x-responsive-nav-link>

                    <x-responsive-nav-link href="{{ route('job_finder') }}">

                        {{ __('Job Finder') }}

                    </x-responsive-nav-link>                    

                    <x-responsive-nav-link href="{{ route('visiting_canada') }}">

                        {{ __('Visiting Canada') }}

                    </x-responsive-nav-link>

                </x:slot:links>

            </x-responsive-nav-link-dropdown>



            <x-responsive-nav-link-dropdown>

                <x:slot:trigger>

                    {{ __('About') }}

                </x:slot:trigger>

                <x:slot:links>

                    <x-responsive-nav-link href="{{ route('about') }}">

                        {{ __('About Us') }}

                    </x-responsive-nav-link>

                    <x-responsive-nav-link href="{{ route('about') . '#team' }}">

                        {{ __('Our Team') }}

                    </x-responsive-nav-link>

                    <x-responsive-nav-link href="{{ route('FAQ') }}">

                        {{ __('FAQ') }}

                    </x-responsive-nav-link>

                    <x-responsive-nav-link href="{{ route('about') . '#reviews' }}">

                        {{ __('Client Reviews') }}

                    </x-responsive-nav-link>

                </x:slot:links>

            </x-responsive-nav-link-dropdown>



            <x-responsive-nav-link href="{{ route('news') }}">

                {{ __('News') }}

            </x-responsive-nav-link>



            <x-responsive-nav-link-dropdown>

                <x:slot:trigger>

                    {{ __('Legal Help') }}

                </x:slot:trigger>

                <x:slot:links>

                    <x-responsive-nav-link href="{{ route('legal_advice') }}">

                        {{ __('Legal Advice') }}

                    </x-responsive-nav-link>

                    <x-responsive-nav-link href="{{ route('professional_cred') }}">

                        {{ __('Professional Credentials') }}

                    </x-responsive-nav-link>

                    <x-responsive-nav-link href="{{ route('temp_res_visa') }}">

                        {{ __('Temporary resident visas') }}

                    </x-responsive-nav-link>

                    <x-responsive-nav-link href="{{ route('biometrics') }}">

                        {{ __('Biometrics') }}

                    </x-responsive-nav-link>

                    <x-responsive-nav-link href="{{ route('terms.show') }}">

                        {{ __('Terms of use') }}

                    </x-responsive-nav-link>

                    <x-responsive-nav-link href="{{ route('policy.show') }}">

                        {{ __('Privacy policy') }}

                    </x-responsive-nav-link>

                </x:slot:links>

            </x-responsive-nav-link-dropdown>

        </div>



        <!-- Responsive Settings Options -->

        <div class="pt-4 pb-1 border-t border-gray-200">

            @auth
                <a href="{{ route('admin.dashboard') }}">Control panel</a>
            @endauth

            @guest
                <div class="px-2 mb-2">
                    <x-responsive-nav-link href="{{ config('app.company.telegram') }}"
                        class='px-4 py-2 bg-red-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:text-white hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition'>
                        {{ __('Telegram') }}
                    </x-responsive-nav-link>
                </div>
            @endguest
            <div class="bg-gray-300 mx-auto px-2 sm:px-4 lg:px-6">

                <div class="py-2 text-sm  px-4">

                    <div class="flex mb-2">

                        <p>Latest updates from the Russian-Ukrain invasion. <a href="{{ route('ukrain') }}"
                                class="underline uppercase">Read more</a> </p>

                    </div>

                    <div class="flex">

                        <p><a href="{{ config('app.company.telegram') }}" class="underline uppercase">Chat with us</a> | <a href="{{ route('contact') }}" class="underline">Contact
                                us</a></p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</nav>
