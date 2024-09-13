<x-app-layout>   
    <section class="min-h-screen lg:h-screen bg-gray-50 py-12">
        <div class="px-4 md:px-6 lg:px-10 flex flex-col justify-center">
            <div class="w-full flex flex-col items-center">
                <img src="{{asset('images/applause.gif')}}" alt="assessment completed GIF" class="w-48 h-auto">
                <p class="futura-medium text-center text-lg lg:text-2xl tracking-wider mt-4 md:mt-6">
                    Good job!! You're work here is done.
                </p>
                <p class="futura-book text-md mt-6 md:mt-8 max-w-xl mx-auto text-center">
                    We have sent you an email. If you did not receive it, please check your spam folder. If it is still not found, kindly contact us through LIVECHAT or email us at <a href="mailto:{{config('mail.mainTo.address')}}" class="text-rose-600">{{config('mail.mainTo.address')}}</a>. Your visa assessment is currently under review, and we will reach out to you via email once the review is complete.
                </p>
            </div>
            <div class="mt-6 lg:mt-8 w-full flex flex-wrap justify-center items-center">
                <x-link-one href="{{route('home')}}" class="mr-3 flex items-center"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home-move w-7 h-7" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2" />
                    <path d="M19 12h2l-9 -9l-9 9h2v7a2 2 0 0 0 2 2h5.5" />
                    <path d="M16 19h6" />
                    <path d="M19 16l3 3l-3 3" />
                  </svg><span class="hidden md:block ml-2">return home</span></x-link-one>
                <x-link-two href="{{route('contact')}}" class="flex items-center">                    
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-headset w-7 h-7" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#b91c1c" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M4 14v-3a8 8 0 1 1 16 0v3" />
                        <path d="M18 19c0 1.657 -2.686 3 -6 3" />
                        <path d="M4 14a2 2 0 0 1 2 -2h1a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-1a2 2 0 0 1 -2 -2v-3z" />
                        <path d="M15 14a2 2 0 0 1 2 -2h1a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-1a2 2 0 0 1 -2 -2v-3z" />
                      </svg>
                    <span class="hidden md:block ml-2">contact us</span>
                </x-link-two>
            </div>
        </div>
    </section>
</x-app-layout>