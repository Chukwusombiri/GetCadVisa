<div class="pt-16 md:pt-24 bg-gray-100">
    <div class="w-full px-6 md:px-12">
        <div class="flex flex-col">
            {{-- subscribe call to action --}}
            <div class="w-full flex md:justify-between items-center flex-wrap border-b border-gray-300 pb-10">
                <div class="w-full md:w-1/2 mb-6 md:mb-0">
                    <div class="max-w-sm flex flex-col">
                        <h3 class="hedvig-regular text-2xl md:text-4xl mb-5">
                            Newletter
                        </h3>
                        <p class="text-sm">
                            Sign up for our weekly non-boring newsletter about money, markets, and more.
                        </p>
                    </div>                    
                </div>
                <div class="w-full md:w-1/2 flex flex-col">                    
                    @livewire('subscription')
                    <p class="hind-light text-xs max-w-sm">
                        By providing your email, you agree to receive communications from {{config('app.name')}} Media Inc. For details, see our <a href="{{route('policy.show')}}" class="underline">Privacy Policy</a> or contact us at {{config('mail.mainTo.address')}} or {{config('app.company.address')}}.
                    </p>
                </div>
            </div>
            {{-- footer items --}}
            <div class="w-full py-10 border-b border-gray-300">
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 justify-center">
                    {{-- single --}}
                    <div class="">
                        <p class="hind-medium text-md mb-2">Our company</p>
                        <ul class="list-style-none space-y-2">
                            <li class="text-sm"><a href="{{route('about')}}">About us</a></li>
                            <li class="text-sm"><a href="{{route('about').'#team'}}">Our team</a></li>
                            <li class="text-sm"><a href="{{route('about').'#reviews'}}">Client review</a></li>
                            <li class="text-sm"><a href="{{route('FAQ')}}">FAQs</a></li>
                        </ul>
                    </div>
                    {{-- single --}}
                    <div class="">
                        <p class="hind-medium text-md mb-2">Services</p>
                        <ul class="list-style-none space-y-2">
                            <li class="text-sm"><a href="route('canada_immigration')">Canada immigration</a></li>
                            <li class="text-sm"><a href="{{route('work_permit')}}">Work permit</a></li>
                            <li class="text-sm"><a href="{{route('sponsorship_immigration')}}">Sponsorship</a></li>
                            <li class="text-sm"><a href="{{route('study_immigration')}}">Study visa</a></li>
                            <li class="text-sm"><a href="{{route('citizenship')}}">Citizenship</a></li>
                            <li class="text-sm"><a href="{{route('business_immigration')}}">Business visa</a></li>
                        </ul>
                    </div>
                    {{-- single --}}
                    <div class="">
                        <p class="hind-medium text-md mb-2">Others</p>
                        <ul class="list-style-none space-y-2">
                            <li class="text-sm"><a href="{{route('news')}}">Immigration blog</a></li>
                            <li class="text-sm"><a href="{{route('legal_advice')}}">Legal Advice</a></li>
                            <li class="text-sm"><a href="{{route('professional_cred')}}">Professional Credentials</a></li>
                            <li class="text-sm"><a href="{{route('biometrics')}}">Biometrics</a></li>
                            <li class="text-sm"><a href="{{route('in_admissibilty')}}">Inadmissibilty</a></li>                           
                        </ul>
                    </div>                    
                    {{-- single --}}
                    <div class="col-span-2 md:col-span-2 lg:col-span-2">
                        <h5 class="hind-medium text-md mb-2">
                            <x-application-logo />
                        </h5>
                        <p class="text-sm">
                            We specialize in offering expert representation and advice to foreign nationals seeking to obtain Canadian visas for permanent or temporary residency.
                        </p>
                        <div class="mt-4">
                            <p class="hind-medium text-md">Contact us</p>
                            <div class="mt-2 text-sm"><a href="{{route('contact')}}" class="underline">Chat</a> or <a href="mailto:{{config('mail.mainTo.address')}}" class="underline">Email</a></div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- copyright --}}
            <div class="pt-10 pb-6">
                <div class="w-full flex items-center justify-center">
                    <div class="max-w-2xl mx-auto flex flex-col items-center">
                        <p class="futura-light text-sm mb-px">
                            © {{now()->year}}, {{config('app.name')}}. All Rights Reserved.
                        </p>
                        <p class="futura-light text-sm mb-px">
                            By using this website, you accept our <a href="{{route('terms.show')}}" class="underline">Terms of Use</a> and <a href="{{route('policy.show')}}" class="underline">Privacy Policy.</a>
                        </p>
                        <p class="futura-light text-sm mb-px">
                            For information about filing a complaint please visit <a href="{{route('contact')}}" class="underline">our contact page</a> and use subject 'How to File a Complaint'.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>