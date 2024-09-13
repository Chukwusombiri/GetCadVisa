<x-app-layout>
    {{-- BREADCRUMB --}}
    <x-breadcrumb>
        <x-slot:topic>Firm</x-slot>
        <x-slot:subtopic>Support</x-slot>
    </x-breadcrumb>
    <!-- Header -->
    <x-header>
        <x-slot:maintitle>Client Support and contact detail</x-slot>
        <x-slot:subtitle>Need help? We’re here for you. Our Client Success team and advisors are here to answer all
            your questions.</x-slot>
    </x-header>
    {{-- email --}}
    <section class="pt-10 md:pt-16 bg-gray-50">
        <div class="px-4 md:px-10">
            <a href="mailto:{{ config('mail.reply_to.address') }}"
                class="flex flex-col rounded-xl border border-gray-300 hover:border-rose-700 p-6" x-data="{ isHovered: false }"
                @mouseenter="isHovered = true" @mouseleave="isHovered = false">
                <div class="w-full flex flex-wrap justify-between items-center">
                    <div class="flex flex-col justify-center">
                        <h2 class="text-3xl md:text-5xl futura-medium mb-2 md:mb-6">Reach us by email</h2>
                        <p class="text-sm md:text-xl">You can contact us at any time 24/7</p>
                    </div>
                    <div class="w-full md:w-auto flex justify-end mt-4 md:mt-0">
                        <span class="bg-primary rounded-full px-2 py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" :class="{ 'w-8': isHovered }"
                                class="w-6 h-6 text-primary-white transition duration-150 ease-in-out">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </span>
                    </div>
                </div>
            </a>
        </div>
    </section>
    {{-- other channels grid --}}
    <section class="pt-4 pb-16 md:pt-10 bg-primary-white">
        <div class="px-4 md:px-10 grid grid-cols-1 md:grid-cols-2 gap-6">
            {{-- priority support --}}
            <div class="">
                <div
                    class="md:min-h-[60vh] flex flex-col justify-between rounded-xl border border-gray-300 hover:border-rose-700 p-6">
                    <div>
                        <h2 class="text-3xl md:text-5xl futura-medium mb-2 md:mb-6">Priority Support</h2>
                        <p class="text-sm md:text-xl">For {{ config('app.name') }} Priority inquiries, please email us
                            at <a href="mailto:{{ config('mail.reply_to.address') }}"
                                class="text-rose-700 underline futura-book">{{ config('mail.reply_to.address') }}</a> or
                            chat with our
                            virtual assistant anytime. Also, you reach out to us through <a
                                href="https://wa.me/{{ config('app.company.telegram') }}"
                                class="text-rose-700 underline futura-book">Telegram</a>.</p>
                    </div>
                </div>
            </div>
            {{-- chat with us --}}
            <div class="">
                <div
                    class="md:min-h-[60vh] flex flex-col justify-between rounded-xl border border-gray-300 hover:border-rose-700 p-6">
                    <div>
                        <h2 class="text-3xl md:text-5xl futura-medium mb-2 md:mb-6">Chat with us</h2>
                        <p class="text-sm md:text-xl">
                            We’re here for you in real-time. Get answers fast from our Virtual Assistant 24/7, or
                            connect with our team during business hours.
                        </p>
                        <ul class="mt-4 pl-6 list-disc space-y">
                            <li class="text-sm md:text-lg"><span class="futura-medium">Monday:</span> 9 am - 6pm (UTC)
                            </li>
                            <li class="text-sm md:text-lg"><span class="futura-medium">Tuesday:</span> 9 am - 6pm (UTC)
                            </li>
                            <li class="text-sm md:text-lg"><span class="futura-medium">Wednesday:</span> 9 am - 6pm
                                (UTC)
                            </li>
                            <li class="text-sm md:text-lg"><span class="futura-medium">Thursday:</span> 9 am - 6pm (UTC)
                            </li>
                            <li class="text-sm md:text-lg"><span class="futura-medium">Friday:</span> 9 am - 6pm (UTC)
                            </li>
                            <li class="text-sm md:text-lg"><span class="futura-medium">Saturday & Sunday: </span>Closed
                            </li>
                        </ul>
                    </div>
                    <div class="mt-14">
                        <ul class="pl-6 list-disc">
                            <li class="text-sm md:text-lg">Business hours may be subject to change on holidays</li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- file a complaint --}}
            <div class="">
                <a href="mailto:{{ config('mail.from.address') }}" x-data="{ isHovered: false }"
                    @mouseenter="isHovered = true" @mouseleave="isHovered = false"
                    class="md:min-h-[60vh] w-full flex flex-col justify-between rounded-xl border border-gray-300 hover:border-rose-700 p-6 cursor-pointer">
                    <div>
                        <h2 class="text-3xl md:text-5xl futura-medium mb-2 md:mb-6">File a complaint</h2>
                        <p class="text-sm md:text-xl">We’re here for you. If you’re unsatisfied with your experience,
                            endevor to reach out to us.</p>
                    </div>
                    <div class="flex justify-end mt-4 md:mt-0">
                        <span class="bg-primary rounded-full px-2 py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" :class="{ 'w-8': isHovered }"
                                class="w-6 h-6 text-primary-white transition duration-150 ease-in-out">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </span>
                    </div>
                </a>
            </div>
            {{-- resolving balance --}}
            <div class="">
                <div
                    class="md:min-h-[60vh] flex flex-col justify-between rounded-xl border border-gray-300 hover:border-rose-700 p-6">
                    <div>
                        <h2 class="text-3xl md:text-5xl futura-medium mb-6">Resolving an outstanding balance</h2>
                        <p class="text-sm md:text-xl">Our Resolutions team is available to support with negative
                            account balances. Ready on on weekdays
                            between 9am - 6pm (UTC), or by email at <a href="mailto:{{ config('mail.from.address') }}"
                                class="futura-medium underline">{{ config('mail.from.address') }}</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Contact Section Start -->
    <section class="relative overflow-hidden bg-gray-50 py-16 lg:py-24">
        <div class="px-4 md:px-6 lg:px-10 flex flex-wrap lg:justify-between">
            <div class="w-full md:pr-6 lg:w-1/2 xl:w-6/12">
                <div class="mb-8 max-w-2xl lg:mb-0">                    
                    <h2
                        class="hedvig-regular text-gray-800 mb-6 text-3xl md:text-4xl lg:text-5xl uppercase">
                        GET IN TOUCH WITH US
                    </h2>                    
                    <p class="text-gray-700 mb-9 text-md md:text-lg leading-relaxed">
                        Instantly get in touch with us by filling out our contact form below and submit.
                    </p>
                    <div class="mb-8 flex w-full max-w-2xl">
                        <div
                            class="bg-gray-300 mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded sm:h-[70px] sm:max-w-[70px]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-estate" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#334155" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M3 21h18" />
                                <path d="M19 21v-4" />
                                <path d="M19 17a2 2 0 0 0 2 -2v-2a2 2 0 1 0 -4 0v2a2 2 0 0 0 2 2z" />
                                <path d="M14 21v-14a3 3 0 0 0 -3 -3h-4a3 3 0 0 0 -3 3v14" />
                                <path d="M9 17v4" />
                                <path d="M8 13h2" />
                                <path d="M8 9h2" />
                            </svg>
                        </div>
                        <div class="w-full">
                            <h4 class="text-rose-700 mb-1 text-xl font-bold">Our Location</h4>
                            <p class="text-gray-700 text-base">
                                {{ config('app.company.address') }}
                            </p>
                        </div>
                    </div>
                    <div class="mb-8 flex w-full max-w-2xl">
                        <div
                            class="bg-gray-300 mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded sm:h-[70px] sm:max-w-[70px]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-telegram" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M15 10l-4 4l6 6l4 -16l-18 7l4 2l2 6l3 -4" />
                            </svg>
                        </div>
                        <div class="w-full">
                            <h4 class="text-rose-700 mb-1 text-xl font-bold">Telegram</h4>
                            <p class="text-gray-700 text-base"><a href="{{config('app.company.telegram')}}" class="underline hover:text-rose-700">Click to chat us</a></p>
                        </div>
                    </div>
                    <div class="mb-8 flex w-full max-w-2xl">
                        <div
                            class="bg-gray-300 mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded sm:h-[70px] sm:max-w-[70px]">
                            <svg width="28" height="19" viewBox="0 0 28 19" class="fill-current">
                                <path
                                    d="M25.3636 0H2.63636C1.18182 0 0 1.16785 0 2.6052V16.3948C0 17.8322 1.18182 19 2.63636 19H25.3636C26.8182 19 28 17.8322 28 16.3948V2.6052C28 1.16785 26.8182 0 25.3636 0ZM25.3636 1.5721C25.5909 1.5721 25.7727 1.61702 25.9545 1.75177L14.6364 8.53428C14.2273 8.75886 13.7727 8.75886 13.3636 8.53428L2.04545 1.75177C2.22727 1.66194 2.40909 1.5721 2.63636 1.5721H25.3636ZM25.3636 17.383H2.63636C2.09091 17.383 1.59091 16.9338 1.59091 16.3499V3.32388L12.5 9.8818C12.9545 10.1513 13.4545 10.2861 13.9545 10.2861C14.4545 10.2861 14.9545 10.1513 15.4091 9.8818L26.3182 3.32388V16.3499C26.4091 16.9338 25.9091 17.383 25.3636 17.383Z" />
                            </svg>
                        </div>
                        <div class="w-full">
                            <h4 class="text-rose-700 mb-1 text-xl font-bold">Email Address</h4>
                            <p class="text-gray-700 text-base">{{ config('mail.reply_to.address') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 lg:w-1/2 xl:w-5/12">
                {{-- livewire contact-us component --}}
                @livewire('contact-us')                   
            </div>
        </div>
    </section>
</x-app-layout>

<script>
    Livewire.on('contactedUs', (e) => {
        toastr.success('Thank you for contacting us!')
    })
</script>
