<x-app-layout>
    {{-- BREADCRUMB --}}
    <x-breadcrumb>
        <x-slot:topic>Assessment</x-slot>
        <x-slot:subtopic>General</x-slot>
    </x-breadcrumb>
    {{-- HEADER --}}
    <x-header>
        <x-slot:maintitle>
            Immigration Assessment
        </x-slot>
        <x-slot:subtitle>
        Instantly apply for Canada
        visa after Assessment on category of your choice
        </x-slot>
    </x-header>
    {{-- FORM --}}
    <section class="pt-8 pb-12 md:pt-10 md:pb-16 lg:pb-24 xl:pb-32 bg-gray-100">
        <div class="container mx-auto px-4 sm:px-6 md:px-8 lg:px-10 max-w-8xl">
            <div class="border-b border-gray-300 grid grid-cols-1 lg:grid-cols-2 justify-center items-center pb-8">
                <div class="overflow-hidden">
                    <h2 class="hedvig-regular text-gray-800 mb-6 lg:mb-8 text-4xl md:text-5xl max-w-xl">
                        Visa Assessment
                    </h2>
                    <p class="text-gray-700 text-md max-w-xl mb-2 lg:mb-4">
                        Please take a few minutes to complete the assessment form. After submission,
                        {{ config('app.name') }}'s assessment team will reach out to offer further assistance.
                    </p>
                    <p class="text-gray-700 text-md max-w-xl mb-4 lg:mb-6">
                        This General Assessment provides an overview of your eligibility for immigration to Canada. For
                        a more tailored evaluation based on your specific visa type, please use one of the options
                        below.
                    </p>
                    <ul class="space-y-2 pl-4" role="list">
                        <li>
                            <a href="{{ route('business_assessment') }}"
                                class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                                Business visa  / Work visa
                                <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('study_assessment') }}"
                                class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                                Study visa
                                <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('sponsorship_assessment') }}"
                                class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                                Sponsorship visa
                                <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="hidden lg:flex">
                    <img src="{{ asset('images/ga-vector.jpg') }}" alt="" class="w-full h-auto object-fit">
                </div>
            </div>
            @livewire('general-assessment')
        </div>
    </section>
</x-app-layout>

