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
              <h1 class="m-0">Business Visa</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">               
                <li class="breadcrumb-item"><a href="{{route('admin.business_assessment')}}">Back</a></li>              
                <li class="breadcrumb-item active">business visa</li>
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
                                <p>{{$business_assessment->first_name}}</p>
                            </div>
                            
                            <div class="col-span-6 md:col-span-2">                    
                                <p class="font-bold">Last Name</p>
                                <p>{{$business_assessment->last_name}}</p>
                            </div>
                
                            <div class="col-span-6 md:col-span-2">                    
                                <p class="font-bold">Email Address</p>
                                <p>{{$business_assessment->email}}</p>
                            </div>
                            <div class="col-span-6 md:col-span-2">                    
                                <p class="font-bold">Telephone</p>
                                <p>{{$business_assessment->telephone}}</p>
                            </div>
                            <div class="col-span-6 sm:col-span-2">
                                <p class="font-bold">Nationality</p>
                                <p>{{$business_assessment->nationality}}</p>          
                            </div> 
                            <div class="col-span-6 sm:col-span-2">
                                <p class="font-bold">Residence</p>
                                <p>{{$business_assessment->residence}}</p>        
                            </div> 
                            <div class="col-span-6 md:col-span-2">                    
                                <p class="font-bold">Age (years)</p>
                                <p>{{$business_assessment->age}}</p>
                            </div> 
                
                            <div class="col-span-6 sm:col-span-2">
                                <p class="font-bold">Net Worth</p>
                                <p>{{$business_assessment->net_worth}}</p>        
                            </div>
                            @if ($business_assessment->passport)
                            <div class="col-span-6">
                                <p class="font-bold">Passport</p>
                                <img src="{{url('storage/'.$business_assessment->passport)}}" class="mt-2 h-[200px] w-[200px] rounded-full border border-gray-300 shadow" alt="User Passport">          
                            </div>
                            @endif 
                        </div>
                    </div>  
                </x-faq-item>
                <x-faq-item trigger="2. Management experience">
                    <div class="px-4 py-5 bg-white shadow">
                        <div class="grid grid-cols-6 gap-6">   
                            <div class="col-span-6">
                                <p class="font-bold">Do you have any management experience</p>
                                <p>{{$business_assessment->management_status==true ? 'Yes' : 'No'}}</p>           
                            </div> 
                            {{-- Management experiences --}} 
                            @if ($business_assessment->management_status==true)
                                @foreach (json_decode($business_assessment->managements,true) as $i => $item)
                                <div class="col-span-6 mt-2">
                                    <p class="underline text-base font-bold flex">Management experience {{$i+1}}</p>
                                    <div class="grid grid-cols-2 gap-2 sm:gap-4 mt-1 border-b border-dark pb-4">
                                        <div class="col-span-2 sm:col-span-1">
                                            <p class="font-bold">Title</p>
                                            <p>{{$item["management_title"]}}</p>       
                                        </div>
                    
                                        <div class="col-span-2 sm:col-span-1">
                                            <p class="font-bold">Duration</p>
                                            <p>{{$item["management_duration"]}}</p>           
                                        </div>
                                        <div class="col-span-2 sm:col-span-1">
                                            <p class="font-bold">Organizationy</p>
                                            <p>{{$item["management_organization"]}}</p>          
                                        </div>
                                    </div>                                        
                                </div> 
                                @endforeach
                            @endif
                        </div>
                    </div>
                </x-faq-item>
                <x-faq-item trigger="3. Other informations">
                    <div class="px-4 py-5 bg-white shadow">
                        <div class="grid grid-cols-4 gap-6">                
                            <div class="col-span-2 md:grid:col-span-4">
                                <p class="font-bold">I have a criminal record</p>
                                <p>{{$business_assessment->criminal_record_status}}</p>            
                            </div>  
                            <div class="col-span-2 md:grid:col-span-4">
                                <p class="font-bold">Medical condition status</p>
                                <p>{{$business_assessment->medical_condition_status}}</p>            
                            </div>
                            <div class="col-span-2 md:grid:col-span-4">
                                <p class="font-bold">Final Comment</p>
                                <p>{{$business_assessment->comment}}</p>            
                            </div>                                    
                        </div>
                    </div>
                </x-faq-item>          
            </div>
        </div>    
    </section>
  </div>
  <x-admin-footer></x-admin-footer>
  </x-admin-layout>
  