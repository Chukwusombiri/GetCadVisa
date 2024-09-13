<x-admin-layout>
    <x-admin-nav></x-admin-nav>
    <x-admin-sidebar></x-admin-sidebar>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 hedvig-regular">General Visa</h1>
                    </div>

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            @if (app('router')->getRoutes()->match(app('request')->create(url()->previous()))->getName() == 'admin.user.show')
                                <li class="breadcrumb-item"><a
                                        href="{{ route('admin.user.show', [$assessment->user_id]) }}">Back</a></li>
                            @else
                                <li class="breadcrumb-item"><a href="{{ route('admin.assessment') }}">Back</a></li>
                            @endif
                            <li class="breadcrumb-item active">assessment</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12 px-4 md:px-6 lg:px-10">                
                    {{-- personal --}}
                    <x-faq-item trigger="1. Personal Information">
                        <div class="px-4 py-5 bg-white shadow sm:rounded-tl-md sm:rounded-tr-md">

                            <div class="grid grid-cols-6 gap-6">

                                <div class="col-span-6 md:col-span-2">

                                    <p class="font-bold text-gray-800">First Name</p>

                                    <p>{{ $assessment->first_name }}</p>

                                </div>



                                <div class="col-span-6 md:col-span-2">

                                    <p class="font-bold">Last Name</p>

                                    <p>{{ $assessment->last_name }}</p>

                                </div>



                                <div class="col-span-6 md:col-span-2">

                                    <p class="font-bold">Email Address</p>

                                    <p>{{ $assessment->email }}</p>

                                </div>

                                <div class="col-span-6 md:col-span-2">

                                    <p class="font-bold">Telephone</p>

                                    <p>{{ $assessment->telephone }}</p>

                                </div>

                                <div class="col-span-6 sm:col-span-2">

                                    <p class="font-bold">Nationality</p>

                                    <p>{{ $assessment->nationality }}</p>

                                </div>

                                <div class="col-span-6 sm:col-span-2">

                                    <p class="font-bold">Residence</p>

                                    <p>{{ $assessment->residence }}</p>

                                </div>

                                <div class="col-span-6 md:col-span-2">

                                    <p class="font-bold">Age (years)</p>

                                    <p>{{ $assessment->age }}</p>

                                </div>



                                <div class="col-span-6 sm:col-span-2">

                                    <p class="font-bold">Marital Status</p>

                                    <p>{{ $assessment->marital_status }}</p>

                                </div>

                                <div class="col-span-6 sm:col-span-2">

                                    <p class="font-bold">Do you have any children under the age of 22?</p>

                                    <p>{{ $assessment->children_under_22_status }}</p>

                                </div>

                                @if ($assessment->passport)
                                    <div class="col-span-6 sm:col-span-2">

                                        <p class="font-bold">Passport</p>

                                        <img src="{{ url('storage/' . $assessment->passport) }}"
                                            class="mt-2 h-[200px] w-[200px] rounded-full border border-gray-300 shadow" alt="User Passport">

                                    </div>
                                @endif

                            </div>

                        </div>
                    </x-faq-item>
                    {{-- education --}}
                    <x-faq-item trigger="2. Education and Training">
                        <div class="px-4 py-5 bg-white shadow">

                            <div class="grid grid-cols-6 gap-6">

                                <div class="col-span-6">

                                    <p class="font-bold">Have you completed high school (secondary school)?</p>

                                    <p>{{ $assessment->education_status }}</p>

                                </div>

                                <div class="col-span-6">

                                    <p class="font-bold">Have you received any education or training other than
                                        high school (secondary school)?</p>

                                    <p>{{ $assessment->high_education_status == true ? 'Yes' : 'No' }}</p>

                                </div>

                                {{-- educational qualifications --}}

                                @if ($assessment->high_education_status == true)
                                    @foreach (json_decode($assessment->education, true) as $ed => $edu)
                                        <div class="col-span-6 mt-2">

                                            <p class="underline text-base font-bold flex">Educational
                                                qualifications {{ $ed + 1 }}</p>

                                            <div
                                                class="grid grid-cols-2 gap-2 sm:gap-4 mt-1 border-b border-dark pb-4">

                                                <div class="col-span-2 sm:col-span-1">

                                                    <p class="font-bold">Type of programme</p>

                                                    <p>{{ $edu['programme_type'] }}</p>

                                                </div>



                                                <div class="col-span-2 sm:col-span-1">

                                                    <p class="font-bold">Duration of Programme</p>

                                                    <p>{{ $edu['programme_duration'] }}</p>

                                                </div>

                                                <div class="col-span-2 sm:col-span-1">

                                                    <p class="font-bold">Field of study</p>

                                                    <p>{{ $edu['programme_course'] }}</p>

                                                </div>

                                                <div class="col-span-2 sm:col-span-1">

                                                    <p class="font-bold">Did you complete this programme?</p>

                                                    <p>{{ $edu['programme_status'] }}</p>

                                                </div>

                                                <div class="col-span-2 sm:col-span-1">

                                                    <p class="font-bold">Where did you partake in the programme?
                                                    </p>

                                                    <p>{{ $edu['programme_location'] }}</p>

                                                </div>

                                                @if ($edu['programme_location'] == 'inside canada')
                                                    <div class="col-span-2 sm:col-span-1">

                                                        <p class="font-bold">Province or Territory</p>

                                                        <p>{{ $edu['programme_province'] }}</p>

                                                    </div>
                                                @endif

                                            </div>

                                        </div>
                                    @endforeach

                                @endif

                            </div>

                        </div>
                    </x-faq-item>
                    {{-- work --}}
                    <x-faq-item trigger="3. Work history">
                        <div class="px-4 py-5 bg-white shadow">

                            <div class="grid grid-cols-3 gap-6">

                                <div class="col-span-6">

                                    <p class="font-bold">Have you obtained any paid work experience in the last
                                        10 years?</p>

                                    <p>{{ $assessment->job_status == true ? 'Yes' : 'No' }}</p>

                                </div>

                                {{-- work experience --}}

                                @if ($assessment->job_status == true)

                                    @foreach (json_decode($assessment->job, true) as $em => $emp)
                                        <div class="col-span-6 mt-2">

                                            <p class="underline text-base font-bold flex">Work Experience
                                                {{ $em + 1 }}</p>

                                            <div
                                                class="grid grid-cols-2 gap-2 sm:gap-4 mt-1 border-b border-dark pb-4">

                                                <div class="col-span-2 sm:col-span-1">

                                                    <p class="font-bold">Occupation</p>

                                                    <p>{{ $emp['occupation'] }}</p>

                                                </div>

                                                <div class="col-span-2 sm:col-span-1">

                                                    <p class="font-bold">Type of Employment</p>

                                                    <p>{{ $emp['job_type'] }}</p>

                                                </div>

                                                <div class="col-span-2 sm:col-span-1">

                                                    <p class="font-bold">Start Date</p>

                                                    <p>{{ date('M d, Y', strtotime($emp['job_start'])) }}</p>

                                                </div>

                                                <div class="col-span-2 sm:col-span-1">

                                                    <p class="font-bold">End Date</p>

                                                    <p>{{ date('M d, Y', strtotime($emp['job_end'])) }}</p>

                                                </div>

                                                <div class="col-span-2 sm:col-span-1">

                                                    <p class="font-bold">Location of Employment</p>

                                                    <p>{{ $emp['job_location'] }}</p>

                                                </div>

                                                @if ($emp['job_location'] == 'inside canada')
                                                    <div class="col-span-2 sm:col-span-1">

                                                        <p class="font-bold">Province or Territory</p>

                                                        <p>{{ date('M d, Y', strtotime($emp['job_province'])) }}
                                                        </p>

                                                    </div>

                                                    <div class="col-span-2 sm:col-span-1">

                                                        <p class="font-bold">What type of Work Permit do you
                                                            currently hold?</p>

                                                        <p>{{ $emp['job_permit'] }}</p>

                                                    </div>
                                                @endif

                                                <div class="col-span-2 sm:col-span-1">

                                                    <p class="font-bold">is this Occupation in your field of
                                                        education or training?</p>

                                                    <p>{{ $emp['job_career_compare'] }}</p>

                                                </div>

                                            </div>

                                        </div>
                                    @endforeach
                                @endif

                            </div>
                        </div>
                    </x-faq-item>
                    {{-- language skills --}}
                    <x-faq-item trigger="4. Language Skills">
                        <div class="px-4 py-5 bg-white shadow">

                            {{-- english --}}

                            <p class="text-base font-bold">English Proficiency</p>

                            <div class="grid grid-cols-4 gap-4 mb-4">

                                <div class="col-span-4 sm:col-span-2 lg:col-span-1">

                                    <p class="font-bold">Writing</p>

                                    <p>{{ $assessment->english_writing_proficiency }}</p>

                                </div>

                                <div class="col-span-4 sm:col-span-2 lg:col-span-1">

                                    <p class="font-bold">Reading</p>

                                    <p>{{ $assessment->english_reading_proficiency }}</p>

                                </div>

                                <div class="col-span-4 sm:col-span-2 lg:col-span-1">

                                    <p class="font-bold">Speaking</p>

                                    <p>{{ $assessment->english_speaking_proficiency }}</p>

                                </div>

                                <div class="col-span-4 sm:col-span-2 lg:col-span-1">

                                    <p class="font-bold">Listening</p>

                                    <p>{{ $assessment->english_listening_proficiency }}</p>

                                </div>

                            </div>



                            {{-- french --}}

                            <p class="text-base font-bold">French Proficiency</p>

                            <div class="grid grid-cols-4 gap-4">

                                <div class="col-span-4 sm:col-span-2 lg:col-span-1">

                                    <p class="font-bold">Writing</p>

                                    <p>{{ $assessment->french_writing_proficiency }}</p>

                                </div>

                                <div class="col-span-4 sm:col-span-2 lg:col-span-1">

                                    <p class="font-bold">Reading</p>

                                    <p>{{ $assessment->french_reading_proficiency }}</p>

                                </div>

                                <div class="col-span-4 sm:col-span-2 lg:col-span-1">

                                    <p class="font-bold">Speaking</p>

                                    <p>{{ $assessment->french_speaking_proficiency }}</p>

                                </div>

                                <div class="col-span-4 sm:col-span-2 lg:col-span-1">

                                    <p class="font-bold">Listening</p>

                                    <p>{{ $assessment->french_listening_proficiency }}</p>

                                </div>

                            </div>

                        </div>
                    </x-faq-item>
                    {{-- express entry --}}
                    <x-faq-item trigger="5. Express entry">
                        <div class="bg-white py-4 px-5 shadow">

                            <div class="grid grid-cols-2 gap-4">

                                <div class="col-span-2">

                                    <p class="font-bold">Have you already submitted an Express Entry profile to
                                        the Government of Canada within the past 12 months?</p>

                                    <p>{{ $assessment->express_entry_status }}</p>

                                </div>

                                <div class="col-span-2">

                                    <p class="font-bold">Have you already received an Invitation to Apply for
                                        permanent residence from the Government of Canada through the Express
                                        Entry system?</p>

                                    <p>{{ $assessment->express_entry_invite_status }}</p>

                                </div>

                            </div>

                        </div>
                    </x-faq-item>
                    {{-- new job --}}
                    <x-faq-item trigger="6. Canadian Job Offer">
                        <div class="bg-white py-4 px-5 shadow">

                            <div class="grid grid-cols-2 gap-4">

                                <div class="col-span-2 md:col-span-1">

                                    <p class="font-bold">Do you have a written job offer from a Canadian
                                        employer?</p>

                                    <p>{{ $assessment->new_job_status == true ? 'Yes' : 'No' }}</p>

                                </div>

                                @if ($assessment->new_job_status)
                                    <div class="col-span-2 md:col-span-1">

                                        <p class="font-bold">Job Title</p>

                                        <p>{{ $assessment->new_job_title }}</p>

                                    </div>

                                    <div class="col-span-2 md:col-span-1">

                                        <p class="font-bold">Province or Territory</p>

                                        <p>{{ $assessment->new_job_province }}</p>

                                    </div>

                                    <div class="col-span-2 md:col-span-1">

                                        <p class="font-bold">Job Duration</p>

                                        <p>{{ $assessment->new_job_duration }}</p>

                                    </div>

                                    <div class="col-span-2 md:col-span-1">

                                        <p class="font-bold">Job Offer Work hours</p>

                                        <p>{{ $assessment->new_job_work_hours }}</p>

                                    </div>

                                    <div class="col-span-2 md:col-span-1">

                                        <p class="font-bold">Is this Job Offer supported by a Labour Market
                                            Impact Assessment (LMIA)?</p>

                                        <p>{{ $assessment->new_job_LMIA_support_status }}</p>

                                    </div>
                                @endif

                            </div>

                        </div>
                    </x-faq-item>
                    {{-- family --}}
                    <x-faq-item trigger="7. Family or Friends in Canada">
                        <div class="bg-white shadow py-5 px-4">

                            <div class="grid grid-cols-3 gap-4">

                                <div class="col-span-3 md:col-span-2">

                                    <p class="font-bold">Do you have any family members or relatives living in
                                        Canada and who are 18 years or older?</p>

                                    <p>{{ $assessment->family_in_canada_status == true ? 'Yes' : 'No' }}</p>

                                </div>

                                @if ($assessment->family_in_canada_status == true)

                                    @foreach (json_decode($assessment->relatives,true) as $r => $item)
                                        <div class="col-span-3 mt-2">

                                            <p class="underline text-base font-bold flex">Family or Friends in
                                                Canada {{ $r + 1 }}</p>

                                            <div
                                                class="grid grid-cols-4 gap-2 sm:gap-4 mt-1 border-b border-dark pb-4">

                                                <div class="col-span-4 sm:col-span-2 md:col-span-1">

                                                    <p class="font-bold">Relationship</p>

                                                    <p>{{ $item['family_in_canada_related'] }}</p>

                                                </div>

                                                <div class="col-span-4 sm:col-span-2 md:col-span-1">

                                                    <p class="font-bold">Residency Status</p>

                                                    <p>{{ $item['family_in_canada_residence_status'] }}</p>

                                                </div>

                                                <div class="col-span-4 sm:col-span-2 md:col-span-1">

                                                    <p class="font-bold">Living in</p>

                                                    <p>{{ $item['family_in_canada_residence'] }}</p>

                                                </div>

                                                <div class="col-span-4 sm:col-span-2 md:col-span-1">

                                                    <p class="font-bold">Since</p>

                                                    <p>{{ $item['family_in_canada_duration'] }}</p>

                                                </div>

                                            </div>

                                        </div>
                                    @endforeach

                                @endif

                            </div>

                        </div>
                    </x-faq-item>
                    {{-- finance --}}
                    <x-faq-item trigger="8. Personal Finance">
                        <div class="bg-white shadow py-5 px-4">

                            <p class="underline text-base font-bold flex mb-4">How much money do you have
                                available to you for the purposes of settling in Canada?</p>

                            <div class="grid grid-cols-4 gap-4">

                                <div class="col-span-4 md:col-span-2">

                                    <p class="font-bold">Amount($)</p>

                                    <p>{{ $assessment->amount_available }}</p>

                                </div>

                            </div>

                        </div>

                    </x-faq-item>
                    {{-- comment --}}                   
                    @if ($assessment->comment)
                    <x-faq-item trigger="9. Additional Info">
                        <div class="card">
                            <div class="card-body">

                                {{ $assessment->comment }}

                            </div>
                        </div>
                    </x-faq-item>
                    @endif
                </div>
            </div>
        </section>
    </div>

    <x-admin-footer></x-admin-footer>

</x-admin-layout>
