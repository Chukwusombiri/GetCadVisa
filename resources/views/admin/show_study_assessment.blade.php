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
                        <h1 class="m-0">Study Visa</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">                            
                            <li class="breadcrumb-item"><a href="{{ route('admin.study_assessment') }}">Back</a></li>
                            <li class="breadcrumb-item active">study visa</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title w-100">
                                Study visa informations
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 md:col-span-2">
                                    <p class="font-bold">First Name</p>
                                    <p>{{ $study_assessment->first_name }}</p>
                                </div>

                                <div class="col-span-6 md:col-span-2">
                                    <p class="font-bold">Last Name</p>
                                    <p>{{ $study_assessment->last_name }}</p>
                                </div>

                                <div class="col-span-6 md:col-span-2">
                                    <p class="font-bold">Email Address</p>
                                    <p>{{ $study_assessment->email }}</p>
                                </div>
                                <div class="col-span-6 md:col-span-2">
                                    <p class="font-bold">Telephone</p>
                                    <p>{{ $study_assessment->telephone }}</p>
                                </div>
                                <div class="col-span-6 sm:col-span-2">
                                    <p class="font-bold">Nationality</p>
                                    <p>{{ $study_assessment->nationality }}</p>
                                </div>
                                <div class="col-span-6 sm:col-span-2">
                                    <p class="font-bold">Residence</p>
                                    <p>{{ $study_assessment->residence }}</p>
                                </div>
                                <div class="col-span-6 md:col-span-2">
                                    <p class="font-bold">Age (years)</p>
                                    <p>{{ $study_assessment->age }}</p>
                                </div>

                                <div class="col-span-6 sm:col-span-2">
                                    <p class="font-bold">Are you, or a family member, able to provide bank
                                        statements equivalent of $25,000 USD or more to cover your living expenses
                                        while you study in Canada?</p>
                                    <p>{{ $study_assessment->living_expense_capability_status }}</p>
                                </div>
                                <div class="col-span-6 sm:col-span-2">
                                    <p class="font-bold">Do you already have a letter of admission/acceptance to a
                                        Canadian educational institution?</p>
                                    <p>{{ $study_assessment->admission_status == true ? 'Yes' : 'No' }}</p>
                                </div>
                                @if ($study_assessment->admission_status==true)
                                    <div class="col-span-6 md:col-span-2">
                                        <p class="font-bold">Start Date</p>
                                        <p>{{ $study_assessment->study_start }}</p>
                                    </div>
                                    <div class="col-span-6 md:col-span-2">
                                        <p class="font-bold">What province is your program in?</p>
                                        <p>{{ $study_assessment->study_province }}</p>
                                    </div>
                                @endif
                                <div class="col-span-6 md:col-span-2">
                                    <p class="font-bold">Have you previously been refused a study permit?</p>
                                    <p>{{ $study_assessment->previous_study_immigration_attempt_status }}</p>
                                </div>
                                @if ($study_assessment->passport)
                                    <div class="col-span-6 sm:col-span-2">
                                        <p class="font-bold">Passport</p>
                                        <img src="{{ url('storage/' . $study_assessment->passport) }}"
                                            class="mt-2 h-[200px] w-[200px] rounded-full border border-gray-300 shadow" alt="User Passport">
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    {{--  --}}
                </div>
            </div>
        </section>
    </div>
    <x-admin-footer></x-admin-footer>
</x-admin-layout>
