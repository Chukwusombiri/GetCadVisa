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
                        <h1 class="m-0 hedvig-regular">Dashboard</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                  <div class="col-lg-3 col-6 col-12">
                    <!-- small box -->
                    <div class="small-box bg-white">
                        <div class="inner">
                            <h3 class="hedvig-regular">{{ $newAssessments }}</h3>

                            <p>Latest assessments</p>
                        </div>
                        <div class="icon">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-timeline-event-text w-10 h-10" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#be123c" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M12 20m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M10 20h-6" />
                            <path d="M14 20h6" />
                            <path d="M12 15l-2 -2h-3a1 1 0 0 1 -1 -1v-8a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v8a1 1 0 0 1 -1 1h-3l-2 2z" />
                            <path d="M9 6h6" />
                            <path d="M9 9h3" />
                          </svg>
                        </div>
                        <a href="{{ route('admin.assessment') }}" class="small-box-footer">View All <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6 col-12">
                    <!-- small box -->
                    <div class="small-box bg-white">
                        <div class="inner">
                            <h3 class="hedvig-regular">{{ count($general) ?? '0' }}</h3>

                            <p>General Visa Assessments</p>
                        </div>
                        <div class="icon">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-presentation-analytics w-12 h-12" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#be123c" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M9 12v-4" />
                            <path d="M15 12v-2" />
                            <path d="M12 12v-1" />
                            <path d="M3 4h18" />
                            <path d="M4 4v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-10" />
                            <path d="M12 16v4" />
                            <path d="M9 20h6" />
                          </svg>
                        </div>
                        <a href="{{ route('admin.assessment') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6 col-12">
                    <!-- small box -->
                    <div class="small-box bg-white">
                        <div class="inner">
                            <h3 class="hedvig-regular">{{ count($study) ?? '0' }}</h3>

                            <p>Study Visa</p>
                        </div>
                        <div class="icon">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-vocabulary w-10 h-10" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#be123c" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M10 19h-6a1 1 0 0 1 -1 -1v-14a1 1 0 0 1 1 -1h6a2 2 0 0 1 2 2a2 2 0 0 1 2 -2h6a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-6a2 2 0 0 0 -2 2a2 2 0 0 0 -2 -2z" />
                            <path d="M12 5v16" />
                            <path d="M7 7h1" />
                            <path d="M7 11h1" />
                            <path d="M16 7h1" />
                            <path d="M16 11h1" />
                            <path d="M16 15h1" />
                          </svg>
                        </div>
                        <a href="{{ route('admin.study_assessment') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6 col-12">
                    <!-- small box -->
                    <div class="small-box bg-white">
                        <div class="inner">
                            <h3 class="hedvig-regular">{{ count($sponsorship) ?? '0' }}</h3>

                            <p>Sponsorship Visa</p>
                        </div>
                        <div class="icon">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart-handshake w-10 h-10" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#be123c" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
                            <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                            <path d="M12 6l-3.293 3.293a1 1 0 0 0 0 1.414l.543 .543c.69 .69 1.81 .69 2.5 0l1 -1a3.182 3.182 0 0 1 4.5 0l2.25 2.25" />
                            <path d="M12.5 15.5l2 2" />
                            <path d="M15 13l2 2" />
                          </svg>
                        </div>
                        <a href="{{ route('admin.sponsorship_assessment') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6 col-12">
                    <!-- small box -->
                    <div class="small-box bg-white">
                        <div class="inner">
                            <h3 class="hedvig-regular">{{ count($business) ?? '0' }}</h3>

                            <p>Business Visa</p>
                        </div>
                        <div class="icon">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-report-money w-10 h-10" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#be123c" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                            <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                            <path d="M14 11h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5" />
                            <path d="M12 17v1m0 -8v1" />
                          </svg>
                        </div>
                        <a href="{{ route('admin.business_assessment') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                </div>
                <!-- /.row -->

                <!-- Main row -->
                <div class="row">
                    <div class="col-12">
                      <div class="relative bg-white rounded-xl mb-10">
                        <div class="p-6 flex justify-between items-center flex-wrap">
                            <h4 class="text-2xl hedvig-regular mb-6 md:mb-0">Latest assessments</h4>                                
                            <a href="{{ route('admin.assessment') }}"
                                class="inline-flex items-center text-base font-medium text-rose-700 hover:text-rose-800">
                                View all
                                <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                        {{-- table --}}
                        <div class="flex-auto px-0 pt-0 pb-2">
                            <div class="p-0 overflow-x-auto">
                                <table
                                    class="items-center w-full mb-0 align-top border-collapse text-slate-500">
                                    <thead class="align-bottom">
                                        <tr>
                                            <th
                                                class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-slate-600 opacity-70">
                                                Photo</th>
                                            <th
                                                class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-slate-600 opacity-70">
                                                Full name</th>
                                            <th
                                                class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-slate-600 opacity-70">
                                                Email</th>
                                            <th
                                                class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-slate-600 opacity-70">
                                                Phone</th>
                                            <th
                                                class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-slate-600 opacity-70">
                                                Type</th>
                                            <th
                                                class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-slate-600 opacity-70">
                                                Created</th>
                                            <th
                                                class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none tracking-none whitespace-nowrap text-slate-600 opacity-70">
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($latestAssessments) > 0)
                                            @foreach ($latestAssessments as $assessment)
                                                <tr>
                                                    <td
                                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                        <img src="{{ asset('storage/' . $assessment->passport) }}"
                                                            alt="{{ $assessment->first_name . ' ' . $assessment->last_name . ' photo' }}"
                                                            class="w-20 h-20 rounded-full border border-gray-300 shadow-md">
                                                    </td>
                                                    <td
                                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                        <p
                                                            class="font-semibold mb-0 text-sm">
                                                            {{ $assessment->first_name . ' ' . $assessment->last_name }}
                                                        </p>
                                                    </td>
                                                    <td
                                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                        <a href="{{ route('admin.getmail', ['email' => json_encode([$assessment->email])]) }}"
                                                            class="underline futura-medium">
                                                            {{ $assessment->email }}
                                                        </a>
                                                    </td>
                                                    <td
                                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                        <p
                                                            class="mb-0 text-sm leading-tight">
                                                            {{ $assessment->telephone }}</p>
                                                    </td>
                                                    <td
                                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                        <p
                                                            class="mb-0 text-sm leading-tight">
                                                            {{ $assessment->model . ' visa' }}</p>
                                                    </td>
                                                    <td
                                                        class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                        <span
                                                            class="text-sm leading-tight">{{ date('M d, Y | H:i', strtotime($assessment->created_at)) }}</span>
                                                    </td>
                                                    <td
                                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                        <a href="{{ $assessment->showRoute }}"
                                                            class="text-rose-700 underline text-xs uppercase futura-medium tracking-wide">view</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <x-admin-footer></x-admin-footer>
</x-admin-layout>
