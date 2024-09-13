<x-app-layout>
    <section class="pt-16 md:pt-32 px-4 text-center lg:text-left lg:px-16 xl:px-24">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-4xl md:text-6xl font-bold leading-tight">Immigration Measures and Support for Ukrainians</h1>
            <p class="text-xl md:text-2xl mt-4 mb-10">
                Our firm is dedicated to helping Ukrainians and their families navigate the Canadian immigration system
                with ease.
            </p>
            <a href="{{ route('contact') }}"
                class="bg-red-800 text-white font-bold py-4 px-8 rounded-full hover:bg-red-700 transition duration-200">
                Contact Us
            </a>
        </div>
    </section>
    <!-- Immigration measures section -->
    <section class="bg-white py-16 px-4">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-2xl md:text-4xl font-bold mb-8">
                Immigration Measures and Support for Ukrainians
            </h2>
            <div class="flex flex-wrap -mx-4">
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-gray-100 h-56 p-4 shadow hover:bg-gray-200">
                        <h3 class="text-lg font-bold mb-4">Express Entry</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Ukrainians may be eligible to apply for permanent residency in Canada through the Express
                            Entry system.
                        </p>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-gray-100 h-56 p-4 shadow hover:bg-gray-200">
                        <h3 class="text-lg font-bold mb-4">Family Sponsorship</h3>
                        <p class="text-gray-700 leading-relaxed">
                            If you have family members in Canada, they may be able to sponsor you to come to Canada as a
                            permanent resident.
                        </p>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-gray-100 h-56 p-4 shadow hover:bg-gray-200">
                        <h3 class="text-lg font-bold mb-4">Study Permit</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Ukrainians may be eligible to come to Canada to study and obtain a study permit, which can
                            be a pathway to permanent residency.
                        </p>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-gray-100 h-56 p-4 shadow hover:bg-gray-200">
                        <h3 class="text-lg font-bold mb-4">Work Permit</h3>
                        <p class="text-gray-700 leading-relaxed">
                            If you have a job offer in Canada, you may be able to obtain a work permit, which can be a
                            pathway to permanent residency.
                        </p>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-gray-100 h-56 p-4 shadow hover:bg-gray-200">
                        <h3 class="text-lg font-bold mb-4">Provincial Nominee Program</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Some provinces in Canada have their own immigration programs, which may be a pathway to
                            permanent residency for Ukrainians.
                        </p>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
                    <div class="bg-gray-100 h-56 p-4 shadow hover:bg-gray-200">
                        <h3 class="text-lg font-bold mb-4">Refugee and Asylum</h3>
                        <p class="text-gray-700 leading-relaxed">
                            If you are a Ukrainian refugee or asylum seeker, there may be options for you to come to
                            Canada and obtain permanent residency.
                        </p>
                    </div>
                </div>
            </div>
            <p class="text-xl leading-8 mb-6">
                If you are a Ukrainian citizen or a family member of a Ukrainian citizen
                living in Canada, {{config('app.name')}} is here to help you navigate the
                immigration process and take advantage of these measures. Our team of
                experienced immigration lawyers and consultants can help you with
                refugee claims, visa applications, family sponsorship, and settlement
                services.
            </p>
            <p class="text-xl leading-8">
                Contact us today to schedule a consultation and learn more about how we
                can assist you with your immigration needs.
            </p>
        </div>
    </section>
    {{-- BLOGS --}}
    <section class="py-12 md:py-16 lg:py-24 xl:py-32">
        <div class="px-4 md:px-8 lg:px-10 max-w-8xl mx-auto">
            <div class="pb-3 border-b mb-6 md:mb-8 flex justify-between flex-wrap gap-y-6">
                <h3 class="hedvig-regular uppercase text-4xl md:text-5xl tracking-wide max-w-xl text-gray-800">
                    Other Canada Immigration News Updates
                </h3>
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
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
                <!-- CARD 1 -->
                @if (count($blogs) > 0)
                    @foreach ($blogs as $item)
                        <div class="rounded overflow-hidden shadow-lg flex flex-col">
                            <div class="relative">
                                <a href="{{ $item['url'] }}">
                                    <img class="w-full h-56" src="{{ $item['urlToImage'] }}" alt="{{ $item['title'] }}">
                                    <div
                                        class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                                    </div>
                                </a>
                            </div>
                            <div class="px-6 py-4 mb-auto">
                                <a href="{{ $item['url'] }}"
                                    class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2">
                                    {{ $item['title'] }}
                                </a>
                            </div>
                            <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                                <a href="{{ $item['url'] }}"
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
