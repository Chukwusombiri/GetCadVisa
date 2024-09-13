<x-app-layout>
    {{-- breadcrumb --}}
    <x-breadcrumb>
        <x-slot:topic>immigration</x-slot>
        <x-slot:subtopic>CRS</x-slot>
    </x-breadcrumb>
    {{-- HEADER --}}
    <x-side-image-header :url="route('crs')" :source="asset('images/crs.jpg')" button-text="Take test now">
        <x-slot:maintitle>Comprehensive Ranking System</x-slot>
        <x-slot:subtitle>Gain indepth understanding of Canada's Comprehensive Ranking System and how to get a good score.</x-slot>
    </x-side-image-header>
    {{-- BODY --}}
    <section class="grid grid-cols-4">
        {{-- MAIN --}}
        <div class="col-span-4 lg:col-span-3 pt-12 pb-24 px-4 md:px-6 lg:px-10 bg-gray-50 text-gray-600">            
            <h2 class="hedvig-regular text-gray-800 mb-8 text-3xl text-4xl md:text-5xl max-w-xl">
                Canadian visa application's CRS
            </h2>
            <p class="text-lg mb-2">
                The Comprehensive Ranking System (CRS) is a points-based system used to assess and score candidates applying for a Canadian visa through the Express Entry system. The CRS evaluates candidates based on factors such as age, education, work experience, language proficiency, and adaptability.
            </p>
            <p class="text-lg mb-6 md:mb-8">The CRS aims to select immigrants who are most likely to succeed in Canada economically. Regular draws are held to invite the top-scoring candidates to apply for permanent residence.</p>
            <!-- bordered card -->
            <div class="px-4 py-4 w-full md:w-[70%] rounded-lg border border-gray-300 hover:border-rose-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
                </svg>
                <p>
                    Do you know we can help you improve streamline your options and also
                    improve your chances of Canada Immigration?        
                </p>
                <p>
                    Use our <a href="{{ route('assessment') }}"class="underline text-rose-700">free online canada immigration
                    assessment</a> tool to boost your immigration processing.
                </p>
            </div>
            {{-- immigrate tools options --}}
            <div class="md:hidden mt-16">
                <p
                    class="text-gray-700 text-xl mt-4 futura-medium mb-6">
                    Immigration Tools
                </p>
                <ul class="space-y-2 pl-2 mt-2" role="list">
                    <li>
                        <a href="{{ route('crs') }}"
                            class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                            Crs calculator
                            <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pnp_finder') }}"
                            class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                            PNP Finder
                            <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('clb_converter') }}"
                            class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                            CLB Converter
                            <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('imp') }}"
                            class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                            Immigration Processing time
                            <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('job_finder') }}"
                            class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                            Job Finder
                            <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('visiting_canada') }}"
                            class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                            Visiting Canada
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
            {{-- table of content --}}
            <div class="my-10">
                <p class="py-2 futura-medium text-xl text-gray-700">Comprehensive Ranking system</p>
                <ul class="md:w-max ml-4 space-y-2" role="list">
                    <li><a href="{{ route('crs') . '#What-is-the-Comprehensive-Ranking-System-score' }}"
                            class="flex gap-x-2 text-base text-gray-600"><span
                                class="text-rose-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 12.75l6 6 9-13.5" />
                                </svg>
                            </span><span class="underline">What is the Comprehensive Ranking System
                                (CRS) score?</span></a></li>
                    <li><a href="{{ route('crs') . '#What-is-a-good-Comprehensive-Ranking-System-score' }}"
                            class="flex gap-x-2 text-base text-gray-600"><span
                                class="text-rose-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 12.75l6 6 9-13.5" />
                                </svg>
                            </span><span class="underline">What is a good Comprehensive Ranking System
                                (CRS) score?</span></a></li>
                    <li><a href="{{ route('crs') . '#What-is-the-minimum-Comprehensive-Ranking-System-score-to-enter-the-Express-Entry-pool' }}"
                            class="flex gap-x-2 text-base text-gray-600"><span
                                class="text-rose-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 12.75l6 6 9-13.5" />
                                </svg>
                            </span><span class="underline">What is the minimum Comprehensive Ranking
                                System (CRS) score to enter the Express Entry pool?</span></a></li>
                    <li><a href="{{ route('crs') . '#How-can-I-increase-my-Comprehensive-Ranking-System-score' }}"
                            class="flex gap-x-2 text-base text-gray-600"><span
                                class="text-rose-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 12.75l6 6 9-13.5" />
                                </svg>
                            </span><span class="underline">How can I increase my Comprehensive Ranking
                                System (CRS) score?</span></a></li>
                    <li><a href="{{ route('crs') . '#How-can-a-Provincial-Nominee-Program-increase-my-CRS-score' }}"
                            class="flex gap-x-2 text-base text-gray-600"><span
                                class="text-rose-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 12.75l6 6 9-13.5" />
                                </svg>
                            </span><span class="underline">How can a Provincial Nominee Program
                                increase my CRS score?</span></a></li>
                    <li><a href="{{ route('crs') . '#Do-I-get-more-Comprehensive-Ranking-System-score-if-I-apply-with-a-spouse' }}"
                            class="flex gap-x-2 text-base text-gray-600"><span
                                class="text-rose-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 12.75l6 6 9-13.5" />
                                </svg>
                            </span><span class="underline">Do I get more Comprehensive Ranking System
                                (CRS) score if I apply with a spouse?</span></a></li>
                    <li><a href="{{ route('crs') . '#Why-is-my-CRS-score-low' }}"
                            class="flex gap-x-2 text-base text-gray-600"><span
                                class="text-rose-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 12.75l6 6 9-13.5" />
                                </svg>
                            </span><span class="underline">Why is my CRS score low?</span></a></li>
                    <li><a href="{{ route('crs') . '#What-CRS-score-is-required-for-PNPs' }}"
                            class="flex gap-x-2 text-base text-gray-600"><span
                                class="text-rose-700"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 12.75l6 6 9-13.5" />
                                </svg>
                            </span><span class="underline">What CRS score is required for
                                PNPs?</span></a></li>
                </ul>
            </div>
            {{-- What is the Comprehensive Ranking System (CRS) score? --}}
            <div id="What-is-the-Comprehensive-Ranking-System-score" class="w-full mt-16">
                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">What is the
                    Comprehensive Ranking System (CRS) score?</h2>
                <div class="">
                    <p class="mb-2">The Comprehensive Ranking System (CRS) is a tool used by
                        Immigration, Refugees and Citizenship Canada (IRCC) to rank profiles against
                        each other in the Express Entry pool.
                    </p>
                    <p class="mb-2">The points-based system provides candidates in the pool with
                        a CRS score based on factors such as one’s age, language ability, work
                        experience, education, and ties to Canada.</p>
                    <p class="mb-2">Approximately every two weeks, the Canadian government holds
                        an Express Entry draw, issuing a round of Invitations to Apply (ITAs) to
                        those individuals in the pool who hold the highest CRS scores.</p>
                </div>
            </div>
            {{-- What-is-a-good-Comprehensive-Ranking-System-score --}}
            <div class="w-full mt-16" id="What-is-a-good-Comprehensive-Ranking-System-score">
                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">What is a
                    good Comprehensive Ranking System (CRS) score?</h2>
                <div class="">
                    <p>While the lowest CRS score needed to receive an ITA was just 75 in Canada’s
                        February 2021 historic draw for Canadian Experience Class candidates, the
                        lowest CRS score selected in 2020 (excluding program specific draws) was 468
                        points. Prior to that, the lowest cut-off in a non-specified draw in 438 in
                        2019, 439 in 2018, and just 413 in 2017.
                    </p>
                    <p class="mt-2">As the CRS cut-off cannot be predicted ahead of each draw
                        score, it is important to take measures to maximize your CRS score wherever
                        possible.</p>
                </div>
            </div>
            {{-- What-is-the-minimum-Comprehensive-Ranking-System-score-to-enter-the-Express-Entry-pool --}}
            <div class="w-full mt-16"
                id="What-is-the-minimum-Comprehensive-Ranking-System-score-to-enter-the-Express-Entry-pool">
                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">What is the
                    minimum Comprehensive Ranking System (CRS) score to enter the Express Entry
                    pool?</h2>
                <div class="w-full ">
                    <p class="mb-4">There is no minimum CRS score required to enter the Express
                        Entry pool of candidates. The CRS cut-off fluctuates from draw to draw and
                        may increase or decrease depending on a number of factors. Immigration,
                        Refugees and Citizenship Canada (IRCC) does not release what the minimum
                        required CRS score will be ahead of each round of invitations. Therefore,
                        the higher your CRS score, the stronger chance you will have of receiving an
                        ITA.
                    </p>
                </div>
            </div>
            {{-- How-can-I-increase-my-Comprehensive-Ranking-System-score --}}
            <div class="w-full mt-16"
                id="How-can-I-increase-my-Comprehensive-Ranking-System-score">
                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">How can I
                    increase my Comprehensive Ranking System (CRS) score?</h2>
                <div class="w-full ">
                    <p class="mt-2">
                        There are many ways an applicant can <a
                            href="{{ route('express_entry') . '#How-can-I-increase-my-CRS-score' }}"
                            class="text-red 600 underline">increase their CRS</a> score once in the
                        Express Entry pool. CRS points are largely tied to the applicant’s language
                        ability, education, work experience, and age. Additional points can also be
                        claimed for having a sibling in Canada, speaking French at a high level,
                        receiving a job offer in the country, or securing a nomination from a
                        Provincial Nominee Program (PNP).
                    </p>
                    <p class="mt-2">Securing additional points from one of these factors can
                        substantially increase one’s changes of receiving an Invitation to Apply
                        (ITA) in one of Canada’s upcoming Express Entry draws.</p>
                </div>
            </div>
            {{-- How-can-a-Provincial-Nominee-Program-increase-my-CRS-score --}}
            <div class="w-full mt-16"
                id="How-can-a-Provincial-Nominee-Program-increase-my-CRS-score">
                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">How can a
                    Provincial Nominee Program increase my CRS score?</h2>
                <div class="w-full ">
                    <p class="mt-2">
                        <a href="{{ route('PNP') }}" class="text-rose-700 underline">Provincial
                            Nominee Programs (PNP)</a> provide pathways to permanent residency for
                        candidates with low CRS scores in the Express Entry pool. Receiving a
                        nomination from a province could result in an additional 600 points toward
                        one’s CRS score, essentially guaranteeing an invitation to apply for
                        permanent residence (ITA).
                    </p>
                    <p class="mt-2">Each province sets their own criteria for nominee programs;
                        while many require some type of connection to the province to be eligible to
                        apply, others look for candidates that fill labour market or demographic
                        gaps. Candidates invited under a PNP are expected to settle in the province
                        they are nominated under.</p>
                </div>
            </div>
            {{-- Do-I-get-more-Comprehensive-Ranking-System-score-if-I-apply-with-a-spouse --}}
            <div class="w-full mt-16"
                id="Do-I-get-more-Comprehensive-Ranking-System-score-if-I-apply-with-a-spouse">
                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Do I get more
                    Comprehensive Ranking System (CRS) score if I apply with a spouse?</h2>
                <div class="w-full ">
                    <p class="mt-2">
                        Comprehensive Ranking System (CRS) points are awarded differently, depending
                        on whether the applicant is married or single.
                    </p>
                    <p class="mt-2">If a spouse or common law partner is listed as
                        non-accompanying in an application or is already a citizen or permanent
                        resident of Canada, the applicant will earn points as a single applicant.
                    </p>
                    <p class="mt-2">If an applicant is married and has an accompanying spouse,
                        the spouse should provide language results and an <a
                            href="javascript:void(0);" class="text-rose-700 underline">Educational
                            Credential Assessment (ECA)</a> report for all post-secondary education.
                        This will enable a candidate to secure the maximum number of points when
                        including a partner on their application.</p>
                </div>
            </div>
            {{-- Why-is-my-CRS-score-low --}}
            <div class="w-full mt-16" id="Why-is-my-CRS-score-low">
                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">Why is my CRS
                    score low?</h2>
                <div class="w-full ">
                    <p class="mt-2">
                        There are several reasons why one’s CRS score may be lower than expected
                        upon entering the pool of candidates. By browsing our <a
                            href="javascript:void(0);" class="text-rose-700 underline">summary of
                            maximum CRS points</a> against your own score, you can determine where
                        you may be losing points.
                    </p>
                    <p class="mt-2">While a low CRS score may be disheartening, the good news is
                        that you can continue improve your ranking in the pool, even after your
                        profile has been submitted. Many candidates are successful in increasing
                        their CRS score after gaining additional work experience, retaking their
                        language exam, securing a Canadian job offer, or choosing to study in
                        Canada. There is always room for improvement!</p>
                </div>
            </div>
            {{-- What-CRS-score-is-required-for-PNPs --}}
            <div class="w-full mt-16" id="What-CRS-score-is-required-for-PNPs">
                <h2 class="futura-medium text-2xl mb-6 md:mb-8 text-rose-600">What CRS
                    score is required for PNPs?</h2>
                <div class="w-full ">
                    <p class="mt-2">
                        Each province sets their own eligibility requirements for Provincial Nominee
                        Programs (PNPs). Some of these programs use the Express Entry system to find
                        their potential nominees. While many of these programs use their own points
                        system, some provinces may use a candidate’s CRS score, among other factors,
                        to decide whether they will be issued an invitation to apply for nomination.
                    </p>
                    <p class="mt-2">Although these CRS scores may change from draw to draw, some
                        provinces state the minimum CRS score required to be considered for
                        nomination. For example, Ontario’s Human Capital Priorities stream does not
                        send invitations to candidates with a CRS score lower than 400, and
                        Alberta’s Express Entry stream will only consider candidates with a CRS
                        score of at least 300.</p>
                    <p class="mt-2">Keep up to date on the latest PNP draw requirements using our
                        Provincial Nominee Program Updates Tracker.</p>
                </div>
            </div>                        
        </div>
        {{-- aside --}}
        <div
            class="hidden md:block col-span-4 lg:col-span-1 px-4 md:px-6 bg-gradient-to-b from-gray-200 from-[5vh] via-gray-100 via-[65vh] to-gray-50">
            <p class="text-gray-700 text-xl mt-4 futura-medium mb-6">
                {{config('app.name')}} Immigration tools
            </p>

            <ul class="space-y-2 pl-2 mt-2" role="list">
                <li>
                    <a href="{{ route('crs') }}"
                        class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                        Crs calculator
                        <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('pnp_finder') }}"
                        class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                        PNP Finder
                        <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('clb_converter') }}"
                        class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                        CLB Converter
                        <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('imp') }}"
                        class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                        Immigration Processing time
                        <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('job_finder') }}"
                        class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                        Job Finder
                        <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('visiting_canada') }}"
                        class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                        Visiting Canada
                        <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
            </ul>
            <p class="text-gray-700 text-md mt-4 md:mt-8 mb-6">
                Have you used our free visa assessment tool? Start today.
            </p>
            <div class="py-6">
                <x-link-one href="{{ route('assessment') }}">visa assessment</x-link-one>
            </div>
        </div>
    </section>
</x-app-layout>
