<x-app-layout>
    {{-- BREADCRUMB --}}
    <x-breadcrumb>
        <x-slot:topic>Assessment</x-slot>
        <x-slot:subtopic>Business visa</x-slot>
    </x-breadcrumb>
    {{-- header --}}
    <x-header>
        <x-slot name="maintitle">
            Business visa assessment
        </x-slot>
        <x-slot name="subtitle">
            Get our Business visa assessment evaluation to prepare you for your visa application
        </x-slot>
    </x-header>
    {{-- FORM --}}
    <section class="pt-8 pb-12 md:pt-10 md:pb-16 lg:pb-24 xl:pb-32 bg-gray-100">
        <div class="container mx-auto px-4 sm:px-6 md:px-8 lg:px-10 max-w-8xl">
            <div class="border-b border-gray-300 pb-8">
                <h2 class="hedvig-regular text-gray-800 mb-6 lg:mb-8 text-4xl md:text-5xl max-w-xl">
                    Immigration Assessment
                </h2>
                <p class="text-gray-700 text-md max-w-xl mb-2 lg:mb-4">
                    Completely fill out all the required fields in the forms belows and submit. After review and
                    evaluating your
                    assessment, we'll get in touch with you to convey your business visa eligibility status email
                    address you entered in assessment form.
                </p>
                <P class="text-gray-700 text-md max-w-xl mb-4 lg:mb-6">
                    Other Visa types Asessment Categories:
                </P>
                <ul class="space-y-2 pl-4" role="list">
                    <li>
                        <a href="{{ route('assessment') }}"
                            class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                            General assessment
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
            @livewire('business-assessment')
        </div>
    </section>
</x-app-layout>
