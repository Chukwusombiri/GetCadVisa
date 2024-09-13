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
                        <h1 class="m-0 hedvig-regular">Sponsorship Visa</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a
                                        href="{{ route('admin.sponsorship_assessment') }}">Back</a></li>
                            <li class="breadcrumb-item active">assessment</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12 px-4 md:px-6 lg:px-10">
                    <x-faq-item trigger="1. Personal Information">
                        <div class="px-4 py-5 bg-white shadow sm:rounded-tl-md sm:rounded-tr-md">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 md:col-span-2">
                                    <p class="font-bold">First Name</p>
                                    <p>{{ $sponsor_assessment->first_name }}</p>
                                </div>

                                <div class="col-span-6 md:col-span-2">
                                    <p class="font-bold">Last Name</p>
                                    <p>{{ $sponsor_assessment->last_name }}</p>
                                </div>

                                <div class="col-span-6 md:col-span-2">
                                    <p class="font-bold">Email Address</p>
                                    <p>{{ $sponsor_assessment->email }}</p>
                                </div>
                                <div class="col-span-6 md:col-span-2">
                                    <p class="font-bold">Telephone</p>
                                    <p>{{ $sponsor_assessment->telephone }}</p>
                                </div>
                                <div class="col-span-6 sm:col-span-2">
                                    <p class="font-bold">Nationality</p>
                                    <p>{{ $sponsor_assessment->nationality }}</p>
                                </div>
                                <div class="col-span-6 sm:col-span-2">
                                    <p class="font-bold">Residence</p>
                                    <p>{{ $sponsor_assessment->residence }}</p>
                                </div>
                                <div class="col-span-6 md:col-span-2">
                                    <p class="font-bold">Age (years)</p>
                                    <p>{{ $sponsor_assessment->age }}</p>
                                </div>
                                <div class="col-span-6 sm:col-span-2">
                                    <p class="font-bold">What would you like to do?</p>
                                    <p>{{ $sponsor_assessment->sponsorship_need }}</p>
                                </div>
                                <div class="col-span-6 sm:col-span-2">
                                    <p class="font-bold">Marital Status</p>
                                    <p>{{ $sponsor_assessment->marital_status }}</p>
                                </div>
                                <div class="col-span-6 sm:col-span-2">
                                    <p class="font-bold">Do you have any children under the age of 22?</p>
                                    <p>{{ $sponsor_assessment->children_under_22_status == true ? 'yes' : 'No' }}
                                    </p>
                                </div>
                                @if ($sponsor_assessment->children_under_22_status)
                                    <div class="col-span-6 sm:col-span-2">
                                        <p class="font-bold">How many children under the age of 22?</p>
                                        <p>{{ $sponsor_assessment->children_under_22_count }}</p>
                                    </div>
                                @endif
                                @if ($sponsor_assessment->passport)
                                    <div class="col-span-6">
                                        <p class="font-bold">Passport</p>
                                        <img src="{{ url('storage/' . $sponsor_assessment->passport) }}"
                                            class="mt-2 h-[200px] w-[200px] rounded-full border border-gray-300 shadow" alt="User Passport">
                                    </div>
                                @endif
                            </div>
                        </div>
                    </x-faq-item>
                    <x-faq-item trigger="2. Sponsor Information">
                        <div class="bg-white shadow py-5 px-4">
                            <div class="grid grid-cols-4 gap-4">
                                <div class="col-span-4 md:col-span-2">
                                    <p class="font-bold">Sponsor name</p>
                                    <p>{{ $sponsor_assessment->sponsor_name }}</p>
                                </div>
                                <div class="col-span-4 md:col-span-2">
                                    <p class="font-bold">Who do you wish to sponsor</p>
                                    <p>{{ $sponsor_assessment->sponsored_relative }}</p>
                                </div>
                                <div class="col-span-4 md:col-span-2">
                                    <p class="font-bold">Are you currently getting any kind of social assistance
                                        from the Government.</p>
                                    <p>{{ $sponsor_assessment->social_assistance_status }}</p>
                                </div>
                                <div class="col-span-4 md:col-span-2">
                                    <p class="font-bold">Are you a citizen or permanent resident of Canada</p>
                                    <p>{{ $sponsor_assessment->sponsor_citizenship_status }}</p>
                                </div>
                                <div class="col-span-4 md:col-span-2">
                                    <p class="font-bold">Are you currently residing in Canada</p>
                                    <p>{{ $sponsor_assessment->sponsor_resident_status == true ? 'Yes' : 'No' }}
                                    </p>
                                </div>
                                @if ($sponsor_assessment->sponsor_resident_status)
                                    <div class="col-span-4 md:col-span-2">
                                        <p class="font-bold">Living in</p>
                                        <p>{{ $sponsor_assessment->sponsor_in_canada_residence }}</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </x-faq-item>
                    <x-faq-item trigger="3. Other Information">
                        <div class="bg-white shadow py-5 px-4">
                            <div class="grid grid-cols-4 gap-4">
                                <div class="col-span-4 md:col-span-2">
                                    <p class="font-bold">I have a criminal record</p>
                                    <p>{{ $sponsor_assessment->criminal_record_status }}</p>
                                </div>
                                <div class="col-span-4 md:col-span-2">
                                    <p class="font-bold">I have a serious medical condition</p>
                                    <p>{{ $sponsor_assessment->medical_condition_status }}</p>
                                </div>
                            </div>
                        </div>
                    </x-faq-item>
                    @if ($sponsor_assessment->comment)
                    <x-faq-item trigger="9. Additional Info">
                        <div class="card-body">
                            {{ $sponsor_assessment->comment }}
                        </div>   
                    </x-faq-item>                     
                    @endif
                </div>
            </div>
        </section>
    </div>
    <x-admin-footer></x-admin-footer>
</x-admin-layout>
