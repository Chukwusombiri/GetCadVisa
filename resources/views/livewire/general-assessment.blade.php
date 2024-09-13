<div class="pt-8">
    <div class="flex flex-wrap items-center mb-4 md:mb-6" x-data="{step:@entangle('step')}">
        <button @click="$wire.changeStep(1)" class="px-3 py-2 mb-2 mr-2 shadow rounded-md hover:bg-gray-400 text-sm futura-medium" :class="{'bg-rose-700 text-gray-100':step==1,  'bg-gray-300 text-gray-600': step != 1}">1</button>
        <button @click="$wire.changeStep(2)" class="px-3 py-2 mb-2 mr-2 shadow rounded-md hover:bg-gray-400 text-sm futura-medium" :class="{'bg-rose-700 text-gray-100':step==2,  'bg-gray-300 text-gray-600': step != 2}">2</button>
        <button @click="$wire.changeStep(3)" class="px-3 py-2 mb-2 mr-2 shadow rounded-md hover:bg-gray-400 text-sm futura-medium" :class="{'bg-rose-700 text-gray-100':step==3,  'bg-gray-300 text-gray-600': step != 3}">3</button>
        <button @click="$wire.changeStep(4)" class="px-3 py-2 mb-2 mr-2 shadow rounded-md hover:bg-gray-400 text-sm futura-medium" :class="{'bg-rose-700 text-gray-100':step==4,  'bg-gray-300 text-gray-600': step != 4}">4</button>
        <button @click="$wire.changeStep(5)" class="px-3 py-2 mb-2 mr-2 shadow rounded-md hover:bg-gray-400 text-sm futura-medium" :class="{'bg-rose-700 text-gray-100':step==5,  'bg-gray-300 text-gray-600': step != 5}">5</button>
        <button @click="$wire.changeStep(6)" class="px-3 py-2 mb-2 mr-2 shadow rounded-md hover:bg-gray-400 text-sm futura-medium" :class="{'bg-rose-700 text-gray-100':step==6,  'bg-gray-300 text-gray-600': step != 6}">6</button>
        <button @click="$wire.changeStep(7)" class="px-3 py-2 mb-2 mr-2 shadow rounded-md hover:bg-gray-400 text-sm futura-medium" :class="{'bg-rose-700 text-gray-100':step==7,  'bg-gray-300 text-gray-600': step != 7}">7</button>
        <button @click="$wire.changeStep(8)" class="px-3 py-2 mb-2 mr-2 shadow rounded-md hover:bg-gray-400 text-sm futura-medium" :class="{'bg-rose-700 text-gray-100':step==8,  'bg-gray-300 text-gray-600': step != 8}">8</button>
        <button @click="$wire.changeStep(9)" class="px-3 py-2 mb-2 mr-2 shadow rounded-md hover:bg-gray-400 text-sm futura-medium" :class="{'bg-rose-700 text-gray-100':step==9,  'bg-gray-300 text-gray-600': step != 9}">9</button>
    </div>
    {{-- personal information --}}
    @if ($step==1)
    <div class="">               
        <h3 class="futura-medium text-2xl tracking-wide mb-4 lg:mb-6">Personal Information</h3>
        <div class="px-4 py-5 bg-white shadow rounded-xl">
            <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 md:col-span-2">                    
                    <x-label for="first_name" value="{{ 'First Name' }}" />
                    <x-input id="first_name" type="text" class="mt-1 block w-full" wire:model="first_name" autocomplete="first_name" />
                    <x-input-error for="first_name" class="mt-2" />
                </div>
                
                <div class="col-span-6 md:col-span-2">                    
                    <x-label for="last_name" value="{{ 'Last Name' }}" />
                    <x-input id="last_name" type="text" class="mt-1 block w-full" wire:model="last_name" autocomplete="last_name" />
                    <x-input-error for="last_name" class="mt-2" />
                </div>
    
                <div class="col-span-6 md:col-span-2">                    
                    <x-label for="email" value="{{ 'Email Address' }}" />
                    <x-input id="email" type="email" class="mt-1 block w-full" wire:model="email"/>
                    <x-input-error for="email" class="mt-2" />
                </div>
                <div class="col-span-6 md:col-span-2">                    
                    <x-label for="telephone" value="{{ 'Telephone' }}" />
                    <x-input id="telephone" type="text" class="mt-1 block w-full" wire:model="telephone"/>
                    <x-input-error for="telephone" class="mt-2" />
                </div>
                <div class="col-span-6 sm:col-span-2">
                    <x-label for="nationality" value="{{ __('Nationality') }}" />
                    <x-select-input name="nationality" id="nationality" wire:model="nationality">                                                         
                        <option value="">select country</option> 
                        @foreach ($country_list as $country)
                            <option value="{{$country}}">{{$country}}</option>                            
                        @endforeach                                              
                    </x-select-input>            
                    <x-input-error for="nationality" class="mt-2" />           
                </div> 
                <div class="col-span-6 sm:col-span-2">
                    <x-label for="residence" value="{{ __('Residence') }}" />
                    <x-select-input name="residence" id="residence" wire:model="residence">                                                         
                        <option value="">select country</option> 
                        @foreach ($country_list as $country)
                            <option value="{{$country}}">{{$country}}</option>                            
                        @endforeach                                               
                    </x-select-input>            
                    <x-input-error for="residence" class="mt-2" />           
                </div> 
                <div class="col-span-6 md:col-span-2">                    
                    <x-label for="age" value="{{ 'Age (years)' }}" />
                    <x-input id="age" type="number" class="mt-1 block w-full" wire:model="age"/>
                    <x-input-error for="age" class="mt-2" />
                </div> 
    
                <div class="col-span-6 sm:col-span-2">
                    <x-label for="marital_status" value="{{ __('Marital Status') }}" />
                    <x-select-input name="marital_status" id="marital_status" wire:model="marital_status">    
                        <option value="">choose one</option> 
                        @foreach ($marital_status_list as $item)
                        <option value="{{$item}}">{{$item}}</option> 
                        @endforeach                                                                                                                       
                    </x-select-input>            
                    <x-input-error for="marital_status" class="mt-2" />           
                </div>    
                <div class="col-span-6 sm:col-span-2">
                    <x-label for="children_under_22_status" value="{{ __('Do you have any children under the age of 22?') }}" />
                    <x-select-input name="children_under_22_status" id="children_under_22_status" wire:model="children_under_22_status">   
                        <option value="">select..</option> 
                        <option value="yes" >Yes, I do.</option>
                        <option value="no">No, I don't.</option>                                                                   
                    </x-select-input>            
                    <x-input-error for="children_under_22_status" class="mt-2" />           
                </div>                
            </div>
            <div class="flex justify-end py-4 mt-4 md:mt-8">
                <x-button type="button" wire:click="submitStep1">
                    Next
                    <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </x-button>
            </div>
        </div>
    </div> 
    @else
    <div class="hidden"></div>
    @endif    
    {{-- educational training --}}  
    @if ($step==2)
    <div class="">       
        <h3 class="futura-medium text-2xl tracking-wide mb-4 lg:mb-6">Education and Training</h3>        
        <div class="px-4 py-5 bg-white shadow rounded-xl">
            <div class="grid grid-cols-6 gap-6">   
                <div class="col-span-6 md:col-span-3">
                    <x-label for="education_status" value="{{ __('Have you completed high school (secondary school)?') }}" />
                    <x-select-input name="education_status" id="education_status" wire:model="education_status" class="w-[40%]">                                                                                 
                        <option value="" >select</option>
                        <option value="yes" >Yes, I have.</option>
                        <option value="no">No, I haven't.</option>                                                                   
                    </x-select-input>            
                    <x-input-error for="education_status" class="mt-2" />           
                </div>   
                <div class="col-span-6 md:col-span-3">
                    <x-label for="high_education_status" value="{{ __('Have you received any education or training other than high school (secondary school)?') }}" />
                    <x-select-input name="high_education_status" id="high_education_status" wire:model="high_education_status" class="w-[40%]">                                                                                 
                        <option value="" >select</option>
                        <option value="1" >Yes, I have.</option>
                        <option value="0">No, I haven't.</option>                                                                   
                    </x-select-input>            
                    <x-input-error for="high_education_status" class="mt-2" />           
                </div> 
                {{-- educational qualifications --}} 
                @if ($high_education_status)
                <div class="col-span-6 mt-2">
                    <p class="underline text-base font-bold flex">Please list all of your education and/or training other than high school (secondary school), starting with the most recent:</p>                    
                       @foreach ($education as $e => $ed)
                        <div class="grid grid-cols-2 gap-2 sm:gap-4 border-t border-dark pb-4 mt-10">
                            <div class="col-span-2 flex flex-wrap justify-between my-2">
                                <p class="text-gray-700 font-bold text-lg"> Educational qualification {{$e+1}}</p>
                                @if (count($education)>1)
                                <button wire:click="removeEducation({{$e}})" class="bg-red-200 text-gray-800 hover:text-dark hover:bg-red-400 py-2 px-4 shadow rounded">remove</button> 
                                @endif                                
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <x-label for="education[{{$e}}][programme_type]" value="{{ __('Type of programme') }}" />
                                <x-select-input wire:model="education.{{$e}}.programme_type" id="education[{{$e}}][programme_type]" >  
                                    <option value="">choose..</option>                                                       
                                    <option value="Master's Degree">Master's Degree</option>
                                    <option value="PhD" >PhD</option>
                                    <option value="Bachelor's Degree">Bachelor's Degree</option>
                                    <option value="Trade Certificate">Trade Certificate</option>
                                    <option value="Associate Degree">Associate Degree</option>
                                    <option value="Apprenticeship">Apprenticeship</option>                                           
                                    <option value="College or Non-university">College or Non-university</option>
                                    <option value="Professional or Vocational">Professional or Vocational</option>
                                    <option value="Others">Others</option>
                                </x-select-input>            
                                <x-input-error for="education.{{$e}}.programme_type" class="mt-2" />           
                            </div>
        
                            <div class="col-span-2 sm:col-span-1">
                                <x-label for="education[{{$e}}][programme_duration]" value="{{ __('Duration of Programme') }}" />
                                <x-select-input id="education[{{$e}}][programme_duration]" wire:model="education.{{$e}}.programme_duration">                                                         
                                    <option value="">choose..</option>
                                    <option value="Less than 3 months">Less than 3 months</option>
                                    <option value="More than 3 and less than 6 months" >More than 3 and less than 6 months</option>
                                    <option value="6 months and less than 12 months">6 months and less than 12 months</option>
                                    <option value="1 Academic year">1 Academic year</option>
                                    <option value="2 academic years">2 academic years </option>
                                    <option value="3 accademic years">3 accademic years </option>                                           
                                    <option value="4 academic years">4 academic years </option>
                                    <option value="More than 4 academic years">More than 4 academic years</option>                                
                                </x-select-input>            
                                <x-input-error for="education.{{$e}}.programme_duration" class="mt-2" />           
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <x-label for="education[{{$e}}][programme_course]" value="{{ __('Field of study') }}" />
                                <x-input id="education[{{$e}}][programme_course]" type="text" class="mt-1 block w-full" wire:model="education.{{$e}}.programme_course"/>           
                                <x-input-error for="education.{{$e}}.programme_course" class="mt-2" />           
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <x-label for="education[{{$e}}][programme_status]" value="{{ __('Did you complete this programme?') }}" />
                                <x-select-input id="education[{{$e}}][programme_status]" wire:model="education.{{$e}}.programme_status">                                                         
                                    <option value="">select</option>
                                    <option value="yes">Yes, I did.</option>
                                    <option value="no" >No, i did not.</option>                               
                                </x-select-input>            
                                <x-input-error for="education.{{$e}}.programme_status" class="mt-2" />           
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <x-label for="education[{{$e}}][programme_location]" value="{{ __('Where did you partake in the programme?') }}" />
                                <x-select-input wire:model="education.{{$e}}.programme_location">                                                         
                                    <option value="">select</option>
                                    <option value="inside canada">Inside Canada</option>
                                    <option value="outside canada" >Outside Canada</option>                               
                                </x-select-input>            
                                <x-input-error for="education.{{$e}}.programme_location" class="mt-2" />           
                            </div>
                            @if ($education[$e]["programme_location"]=='inside canada')
                            <div class="col-span-2 sm:col-span-1">
                                <x-label for="education[{{$e}}][programme_province]" value="{{ __('Province or Territory') }}" />
                                <x-select-input id="education[{{$e}}][programme_province]" wire:model="education.{{$e}}.programme_province">                                                         
                                    <option value="">select</option>
                                    @foreach ($province_list as $province)
                                        <option value="{{$province}}" >{{$province}}</option>
                                    @endforeach                                    
                                </x-select-input>            
                                <x-input-error for="education.{{$e}}.programme_province" class="mt-2" />           
                            </div> 
                            @endif                            
                        </div>
                       @endforeach                         
                    <div class="flex justify-center mt-2">
                        <button class="py-2 px-4 bg-zinc-300 rounded-md hover:bg-zinc-400 shadow-md" wire:click="addEducation">
                            Add another programme    
                        </button>    
                    </div>    
                </div>
                @endif                    
            </div>
            <div class="flex justify-between py-4 mt-4 md:mt-8">
                <x-secondary-button type="button" wire:click="changeStep(1)">
                    <svg class="w-5 h-5 mr-1 rotate-180" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="hidden md:block">Prev</span>                    
                </x-secondary-button>
                <x-button type="button" wire:click="submitStep2">
                    <span class="hidden md:block">Next</span>
                    <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </x-button>
            </div>
        </div>
    </div>
    @else
    <div class="hidden"></div>
    @endif  
    {{-- work history --}}
    @if ($step==3)
    <div class="transition duration-300 {{$job_status!=true ? 'max-w-xl mx-auto' : ''}}">
        <h3 class="futura-medium text-2xl tracking-wide mb-4 lg:mb-6">Work History</h3>        
        <div class="px-4 py-5 bg-white shadow rounded-xl">
            <div class="grid grid-cols-6 gap-6">                
                <div x-data="{jobStatus: @entangle('job_status')}" :class="{'col-span-6 md:col-span-3':jobStatus==true,'col-span-6':jobStatus==false}">
                    <x-label for="job_status" value="{{ __('Have you obtained any paid work experience in the last 10 years?') }}" />
                    <x-select-input name="job_status" id="job_status" wire:model="job_status" class="w-[40%]">                                                                                 
                        <option value="">select</option>
                        <option value="1" >Yes, I have.</option>
                        <option value="0">No, I haven't.</option>                                                                   
                    </x-select-input>            
                    <x-input-error for="job_status" class="mt-2" />           
                </div>  
                {{-- work experience --}} 
                @if ($job_status==true)
                <div class="col-span-6 mt-2">
                    <p class="underline text-base font-bold flex">Starting with your current (or most recent) job, please list all the paid work you have done during the last 10 years:</p>
                    @foreach ($job as $emp => $em)
                    <div class="grid grid-cols-2 gap-2 sm:gap-4 mt-10 border-t border-dark pb-4">
                        <div class="col-span-2 flex flex-wrap justify-between my-2">
                            <p class="text-gray-700 font-bold text-lg">Employment {{$emp+1}}</p>
                            @if (count($job)>1)
                            <button wire:click="removeEmployment({{$emp}})" class="bg-red-200 text-gray-800 hover:text-dark hover:bg-red-400 py-2 px-4 shadow rounded">remove</button>
                            @endif
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <x-label for="job[{{$emp}}][occupation]" value="{{ __('Occupation') }}" />
                            <x-input type="text" id="job[{{$emp}}][occupation]" class="mt-1 block w-full" wire:model="job.{{$emp}}.occupation"/>                                 
                            <x-input-error for="job.{{$emp}}.occupation" class="mt-2" />           
                        </div>
    
                        <div class="col-span-2 sm:col-span-1">
                            <x-label for="job[{{$emp}}][job_type]" value="{{ __(' Type of Employment') }}" />
                            <x-select-input id="job[{{$emp}}][job_type]" wire:model="job.{{$emp}}.job_type">  
                                <option value="">select</option>                                                       
                                <option value="Full time">Full time</option>
                                <option value="Part time" >Part time </option>
                                <option value="Self-employed">Self-employed</option>                                                                                         
                            </x-select-input>            
                            <x-input-error for="job.{{$emp}}.job_type" class="mt-2" />           
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <x-label for="job[{{$emp}}][job_start]" value="{{ __('Start Date') }}" />
                            <x-input id="job[{{$emp}}][job_start]" type="date" class="mt-1 block w-full" wire:model="job.{{$emp}}.job_start"/>           
                            <x-input-error for="job.{{$emp}}.job_start" class="mt-2" />           
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <x-label for="job[{{$emp}}][job_end]" value="{{ __('End Date') }}" />
                            <x-input id="job[{{$emp}}][job_end]" type="date" class="mt-1 block w-full" wire:model="job.{{$emp}}.job_end"/>            
                            <x-input-error for="job.{{$emp}}.job_end" class="mt-2" />           
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <x-label for="job[{{$emp}}][job_location]" value="{{ __('Location of Employment') }}" />
                            <x-select-input id="job[{{$emp}}][job_location]" wire:model="job.{{$emp}}.job_location">                                                         
                                <option value="">select</option>
                                <option value="inside canada">Inside Canada</option>                                
                                <option value="outside canada" >Outside Canada</option>                               
                            </x-select-input>            
                            <x-input-error for="job.{{$emp}}.job_location" class="mt-2" />           
                        </div>
                        @if ($job[$emp]["job_location"]=='inside canada')
                        <div class="col-span-2 sm:col-span-1">
                            <x-label for="job[{{$emp}}][job_province]" value="{{ __('Province or Territory') }}" />
                            <x-select-input id="job[{{$emp}}][job_province]" wire:model="job.{{$emp}}.job_province">                                                         
                                <option value="">select</option>
                                @foreach ($province_list as $province)
                                <option value="{{$province}}" >{{$province}}</option>
                                @endforeach                                
                            </x-select-input>            
                            <x-input-error for="job.{{$emp}}.job_province" class="mt-2" />           
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <x-label for="job[{{$emp}}][job_permit]" value="{{ __('What type of Work Permit do you currently hold?') }}" />
                            <x-select-input id="job[{{$emp}}][job_permit]" wire:model="job.{{$emp}}.job_permit">                                                         
                                <option value="">select</option>
                                <option value="LMIA based work permit">LMIA (previously LMO) based work permit</option>
                                <option value="NAFTA Work Permit" >NAFTA Work Permit (including Professionals, Traders and Investors)</option>
                                <option value="Treaty Permit" >Treaty Permit (other than NAFTA)</option>
                                <option value="Intra-Company Transfer Work Permit" >Intra-Company Transfer Work Permit</option>
                                <option value="Post-Graduate Work Permit">Post-Graduate Work Permit</option>                               
                                <option value="Co-op Work Permit">Co-op Work Permit</option>
                                <option value="International Experience Canada work permit" >International Experience Canada (IEC) / Working Holiday Work Permit</option>                                
                                <option value="Spousal Open Work Permit" >Spousal Open Work Permit</option>
                                <option value="Seasonal Agriculture Work Permit" >Seasonal Agriculture Work Permit</option>
                                <option value="I am not sure" >I am not sure / Other</option>
                            </x-select-input>
                            <x-input-error for="job.{{$emp}}.job_permit" class="mt-2" />           
                        </div>
                        @endif                        
                        <div class="col-span-2 sm:col-span-1">
                            <x-label for="job[{{$emp}}][job_career_compare]" value="{{ __('Is this Occupation in your field of education or training? ') }}" />
                            <x-select-input id="job[{{$emp}}][job_career_compare]" wire:model="job.{{$emp}}.job_career_compare">                                
                                <option value="">select</option>
                                <option value="yes">Yes, It is.</option>
                                <option value="no" >No, It isn't.</option>                               
                            </x-select-input>            
                            <x-input-error for="job.{{$emp}}.job_career_compare" class="mt-2" />           
                        </div>
                    </div> 
                    @endforeach
                    <div class="flex justify-center mt-2">
                        <button wire:click.prevent="addEmployment" class="py-2 px-4 bg-zinc-300 rounded-md hover:bg-zinc-400 shadow-md">
                            Add another job    
                        </button>    
                    </div>    
                </div>  
                @endif                
            </div>
            <div class="flex justify-between py-4 mt-4 md:mt-8">
                <x-secondary-button type="button" wire:click="changeStep(2)">
                    <svg class="w-5 h-5 mr-1 rotate-180" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="hidden md:block">Prev</span>                    
                </x-secondary-button>
                <x-button type="button" wire:click="submitStep3">
                    <span class="hidden md:block">Next</span>
                    <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </x-button>
            </div>
        </div>
    </div>  
    @else
       <div class="hidden"></div> 
    @endif    
    
    {{-- language skill --}}
    @if ($step==4)
    <div class="w-full md:max-w-4xl mx-auto">
        <h3 class="futura-medium text-2xl tracking-wide mb-4 lg:mb-6">Language Skills</h3>
        <div class="px-4 py-5 bg-white shadow rounded-xl">    
            {{-- english --}}      
            <p class="text-base font-bold">English Proficiency</p>  
            <div class="grid grid-cols-4 gap-4 mb-4 md:mb-8">
                <div class="col-span-4 sm:col-span-2 lg:col-span-1">
                    <x-label for="english_writing_proficiency" value="{{ __('Writing') }}" />
                    <x-select-input name="english_writing_proficiency" id="english_writing_proficiency" wire:model="english_writing_proficiency">                                
                        <option value="">select</option>
                        <option value="Expert">Expert</option>
                        <option value="Very good" >Very good</option>
                        <option value="Competent" >Competent</option>
                        <option value="Modest" >Modest</option>                               
                        <option value="Limited" >Limited</option>
                        <option value="None at all" >None at all</option>
                    </x-select-input>            
                    <x-input-error for="english_writing_proficiency" class="mt-2" />           
                </div> 
                <div class="col-span-4 sm:col-span-2 lg:col-span-1">
                    <x-label for="english_reading_proficiency" value="{{ __('Reading') }}" />
                    <x-select-input name="english_reading_proficiency" id="english_reading_proficiency" wire:model="english_reading_proficiency">                                
                        <option value="">select</option>
                        <option value="Expert">Expert</option>
                        <option value="Very good" >Very good</option>
                        <option value="Competent" >Competent</option>
                        <option value="Modest" >Modest</option>                               
                        <option value="Limited" >Limited</option>
                        <option value="None at all" >None at all</option>
                    </x-select-input>            
                    <x-input-error for="english_reading_proficiency" class="mt-2" />           
                </div> 
                <div class="col-span-4 sm:col-span-2 lg:col-span-1">
                    <x-label for="english_speaking_proficiency" value="{{ __('Speaking') }}" />
                    <x-select-input name="english_speaking_proficiency" id="english_speaking_proficiency" wire:model="english_speaking_proficiency">                                
                        <option value="">select</option>
                        <option value="Expert">Expert</option>
                        <option value="Very good" >Very good</option>
                        <option value="Competent" >Competent</option>
                        <option value="Modest" >Modest</option>                               
                        <option value="Limited" >Limited</option>
                        <option value="None at all" >None at all</option>
                    </x-select-input>            
                    <x-input-error for="english_speaking_proficiency" class="mt-2" />           
                </div> 
                <div class="col-span-4 sm:col-span-2 lg:col-span-1">
                    <x-label for="english_listening_proficiency" value="{{ __('Listening') }}" />
                    <x-select-input name="english_listening_proficiency" id="english_listening_proficiency" wire:model="english_listening_proficiency">                                
                        <option value="">select</option>
                        <option value="Expert">Expert</option>
                        <option value="Very good" >Very good</option>
                        <option value="Competent" >Competent</option>
                        <option value="Modest" >Modest</option>                               
                        <option value="Limited" >Limited</option>
                        <option value="None at all" >None at all</option>
                    </x-select-input>            
                    <x-input-error for="english_listening_proficiency" class="mt-2" />           
                </div>               
            </div>

            {{-- french --}}           
            <p class="text-base font-bold">French Proficiency</p>
            <div class="grid grid-cols-4 gap-4">                
                <div class="col-span-4 sm:col-span-2 lg:col-span-1">
                    <x-label for="french_writing_proficiency" value="{{ __('Writing') }}" />
                    <x-select-input name="french_writing_proficiency" id="french_writing_proficiency" wire:model="french_writing_proficiency">                                
                        <option value="">select</option>
                        <option value="Expert">Expert</option>
                        <option value="Very good" >Very good</option>
                        <option value="Competent" >Competent</option>
                        <option value="Modest" >Modest</option>                               
                        <option value="Limited" >Limited</option>
                        <option value="None at all" >None at all</option>
                    </x-select-input>            
                    <x-input-error for="french_writing_proficiency" class="mt-2" />           
                </div>  
                <div class="col-span-4 sm:col-span-2 lg:col-span-1">
                    <x-label for="french_reading_proficiency" value="{{ __('Reading') }}" />
                    <x-select-input name="french_reading_proficiency" id="french_reading_proficiency" wire:model="french_reading_proficiency">                                
                        <option value="">select</option>
                        <option value="Expert">Expert</option>
                        <option value="Very good" >Very good</option>
                        <option value="Competent" >Competent</option>
                        <option value="Modest" >Modest</option>                               
                        <option value="Limited" >Limited</option>
                        <option value="None at all" >None at all</option>
                    </x-select-input>            
                    <x-input-error for="french_reading_proficiency" class="mt-2" />           
                </div> 
                <div class="col-span-4 sm:col-span-2 lg:col-span-1">
                    <x-label for="french_speaking_proficiency" value="{{ __('Speaking') }}" />
                    <x-select-input name="french_speaking_proficiency" id="french_speaking_proficiency" wire:model="french_speaking_proficiency">                                
                        <option value="">select</option>
                        <option value="Expert">Expert</option>
                        <option value="Very good" >Very good</option>
                        <option value="Competent" >Competent</option>
                        <option value="Modest" >Modest</option>                               
                        <option value="Limited" >Limited</option>
                        <option value="None at all" >None at all</option>
                    </x-select-input>            
                    <x-input-error for="french_speaking_proficiency" class="mt-2" />           
                </div> 
                <div class="col-span-4 sm:col-span-2 lg:col-span-1">
                    <x-label for="listening_proficiency" value="{{ __('Listening') }}" />
                    <x-select-input name="french_listening_proficiency" id="french_listening_proficiency" wire:model="french_listening_proficiency">                                
                        <option value="">select</option>
                        <option value="Expert">Expert</option>
                        <option value="Very good" >Very good</option>
                        <option value="Competent" >Competent</option>
                        <option value="Modest" >Modest</option>                               
                        <option value="Limited" >Limited</option>
                        <option value="None at all" >None at all</option>
                    </x-select-input>            
                    <x-input-error for="french_listening_proficiency" class="mt-2" />           
                </div>               
            </div>
            {{-- buttons --}}
            <div class="flex justify-between py-4 mt-4 md:mt-8">
                <x-secondary-button type="button" wire:click="changeStep(3)">
                    <svg class="w-5 h-5 mr-1 rotate-180" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="hidden md:block">Prev</span>                    
                </x-secondary-button>
                <x-button type="button" wire:click="submitStep4">
                    <span class="hidden md:block">Next</span>
                    <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </x-button>
            </div>
        </div>
    </div>
    @else
      <div class="hidden"></div>  
    @endif

    {{-- express entry --}}
    @if ($step==5)        
    <div class="w-full md:max-w-xl mx-auto">
        <h3 class="futura-medium text-2xl tracking-wide mb-4 lg:mb-6">Express Entry Profile</h3>
        <div class="bg-white py-4 px-5 shadow rounded-xl">
            <div class="grid grid-cols-2 gap-4 md:gap-6 lg:gap-10">
                <div class="col-span-2">
                    <x-label for="express_entry_status" class="w-full max-w-xl" value="{{ __('Have you already submitted an Express Entry profile to the Government of Canada within the past 12 months?') }}" />
                    <x-select-input name="express_entry_status" id="express_entry_status" wire:model="express_entry_status" class="w-[40%]">                                                                                 
                        <option value="">select</option>
                        <option value="yes" >Yes, I have.</option>
                        <option value="no">No, I haven't.</option>                                                                   
                    </x-select-input>            
                    <x-input-error for="express_entry_status" class="mt-2" />           
                </div>  
                <div class="col-span-2">
                    <x-label for="express_entry_invite_status" class="w-full max-w-xl" value="{{ __('Have you already received an Invitation to Apply for permanent residence from the Government of Canada through the Express Entry system?') }}" />
                    <x-select-input name="express_entry_invite_status" id="express_entry_invite_status" wire:model="express_entry_invite_status" class="w-[40%]">                                                                                 
                        <option value="">select</option>
                        <option value="yes" >Yes, I have.</option>
                        <option value="no">No, I haven't.</option>                                                                   
                    </x-select-input>            
                    <x-input-error for="express_entry_invite_status" class="mt-2" />           
                </div>  
            </div>
            <div class="flex justify-between py-4 mt-4 md:mt-8">
                <x-secondary-button type="button" wire:click="changeStep(4)">
                    <svg class="w-5 h-5 mr-1 rotate-180" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="hidden md:block">Prev</span>                    
                </x-secondary-button>
                <x-button type="button" wire:click="submitStep5">
                    <span class="hidden md:block">Next</span>
                    <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </x-button>
            </div>
        </div>
    </div>
    @else
        <div class="hidden"></div>
    @endif

    {{-- job offers --}}
    @if ($step==6)
    <div class="transition duration-300 {{$new_job_status!=true ? 'max-w-xl mx-auto' : ''}}">
        <h3 class="futura-medium text-2xl tracking-wide mb-4 lg:mb-6">Job offer</h3>
        <div class="bg-white py-4 px-5 shadow rounded-xl">
            <div class="grid grid-cols-2 gap-4">
                <div x-data="{newJobStatus:@entangle('new_job_status')}" :class="{'col-span-2 md:col-span-1':newJobStatus==true,'col-span-2':newJobStatus==false}">
                    <x-label for="new_job_status" value="{{ __('Do you have a written job offer from a Canadian employer?') }}" />
                    <x-select-input name="new_job_status" id="new_job_status" wire:model="new_job_status">                                                                                 
                        <option value="">select</option>
                        <option value="1" >Yes, I have.</option>
                        <option value="0">No, I haven't.</option>                                                                   
                    </x-select-input>            
                    <x-input-error for="new_job_status" class="mt-2" />           
                </div>  
                @if ($new_job_status)
                <div class="col-span-2 md:col-span-1">
                    <x-label for="new_job_title" value="{{ __('Job Title') }}" />
                    <x-input id="new_job_title" placeholder="Enter Job title" type="text" class="mt-1 block w-full" wire:model="new_job_title"/>         
                    <x-input-error for="new_job_title" class="mt-2" />           
                </div> 
                <div class="col-span-2 md:col-span-1">
                    <x-label for="new_job_province" value="{{ __('Province or Territory') }}" />
                    <x-select-input name="new_job_province" id="new_job_province" wire:model="new_job_province">      
                        <option value="">select</option> 
                        @foreach ($province_list as $province)
                        <option value="{{$province}}">{{$province}}</option>
                        @endforeach                                                                                                  
                    </x-select-input>            
                    <x-input-error for="new_job_province" class="mt-2" />           
                </div> 
                <div class="col-span-2 md:col-span-1">
                    <x-label for="new_job_duration" value="{{ __('Job Duration') }}" />
                    <x-select-input name="new_job_duration" id="new_job_duration" wire:model="new_job_duration">  
                        <option value="">select</option>                                                                               
                        <option value="Two years or longer">Two years or longer</option>
                        <option value="Between one and two years">Between one and two years</option>
                        <option value="Between six months and one year">Between six months and one year</option>
                        <option value="Less than six months">Less than six months</option>                     
                    </x-select-input>            
                    <x-input-error for="new_job_duration" class="mt-2" />           
                </div> 
                <div class="col-span-2 md:col-span-1">
                    <x-label for="new_job_work_hours" value="{{ __('Job Offer Work hours') }}" />
                    <x-select-input name="new_job_work_hours" id="new_job_work_hours" wire:model="new_job_work_hours"> 
                        <option value="">select</option>                                                                                
                        <option value="Full Time (At least 30 hours per week)">Full Time (At least 30 hours per week)</option>
                        <option value="Part Time (At least 15 hours per week)">Part Time (At least 15 hours per week)</option>
                        <option value="Less than 15 hours per week">Less than 15 hours per week</option>                                                                   
                    </x-select-input>            
                    <x-input-error for="new_job_work_hours" class="mt-2" />           
                </div> 
                <div class="col-span-2 md:col-span-1">
                    <x-label for="new_job_LMIA_support_status" value="{{ __('Is this Job Offer supported by a Labour Market Impact Assessment (LMIA)?') }}" />
                    <x-select-input name="new_job_LMIA_support_status" id="new_job_LMIA_support_status" wire:model="new_job_LMIA_support_status">                                                                                 
                        <option value="">select</option>
                        <option value="yes" >Yes, It's supported.</option>
                        <option value="no">No, it's not supported.</option>
                        <option value="I don't know">I don't know</option>                                                                   
                    </x-select-input>            
                    <x-input-error for="new_job_LMIA_support_status" class="mt-2" />           
                </div>  
                @endif
            </div>
            <div class="flex justify-between py-4 mt-4 md:mt-8">
                <x-secondary-button type="button" wire:click="changeStep(5)">
                    <svg class="w-5 h-5 mr-1 rotate-180" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="hidden md:block">Prev</span>                    
                </x-secondary-button>
                <x-button type="button" wire:click="submitStep6">
                    <span class="hidden md:block">Next</span>
                    <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </x-button>
            </div>
        </div>
    </div>
    @else
        <div class="hidden"></div>
    @endif

    {{-- family and friends in canada --}}
    @if ($step==7)
        {{-- family and friends in canada --}}
    <div class="transition duration-300 {{$family_in_canada_status!=true ? 'max-w-xl mx-auto' : ''}}">
        <h3 class="futura-medium text-2xl tracking-wide mb-4 lg:mb-6">Family or Friends in Canada</h3>
        <div class="bg-white shadow py-5 px-4 rounded-xl">
            <div class="grid grid-cols-2 gap-4">
                <div x-data="{familyInCanadaStatus:@entangle('family_in_canada_status')}" :class="{'col-span-2 md:col-span-1':familyInCanadaStatus==true,'col-span-2':familyInCanadaStatus==false}">
                    <x-label for="family_in_canada_status" class="w-full md:max-w-[60%]" value="{{ __('Do you have any family members or relatives living in Canada and who are 18 years or older?') }}" />
                    <x-select-input name="family_in_canada_status" id="family_in_canada_status" wire:model="family_in_canada_status">                                                                                 
                        <option value="">select</option>
                        <option value="1" >Yes, I have.</option>
                        <option value="0">No, I don't.</option>                                                                                         
                    </x-select-input>            
                    <x-input-error for="family_in_canada_status" class="mt-2" />           
                </div> 
                @if ($family_in_canada_status)
                <div class="col-span-2 mt-2">
                    <p class="underline text-base font-bold flex">Please list your and/or your spouse/common-law partner's relatives in Canada</p>
                    @foreach ($relatives as $relative => $r)
                    <div class="grid grid-cols-4 gap-2 sm:gap-4 mt-1 border-b border-dark pb-4">
                        <div class="col-span-4 flex flex-wrap justify-between my-2">
                            <p class="text-gray-700 font-bold text-lg">Relative {{$relative+1}}</p>
                            @if (count($relatives)>1)
                            <button wire:click="removeRelative({{$relative}})" class="bg-red-200 text-gray-800 hover:text-dark hover:bg-red-400 py-2 px-4 shadow rounded">remove</button>
                            @endif
                        </div>
                        <div class="col-span-4 sm:col-span-2 md:col-span-1">
                            <x-label for="relatives[{{$relative}}][family_in_canada_related]" value="{{ __('Relationship') }}" />
                            <x-select-input id="relatives[{{$relative}}][family_in_canada_related]" wire:model="relatives.{{$relative}}.family_in_canada_related">                                                                
                                <option value="">select</option>
                                <option value="Spouse or Common-Law Partner" >Spouse or Common-Law Partner</option>
                                <option value="Sister or Brother">Sister or Brother</option>
                                <option value="Daughter or Son" >Daughter or Son</option>
                                <option value="Mother or Father" >Mother or Father</option>
                                <option value="Cousin" >Cousin (child of aunt/uncle)</option>
                                <option value="Aunt or Uncle" >Aunt or Uncle</option>                               
                                <option value="Sister or Brother" >Sister or Brother</option>
                                <option value="Granddaugther or Grandson" >Granddaugther or Grandson</option>
                                <option value="Grandmother or Grandfather" >Grandmother or Grandfather</option>                               
                                <option value="Niece or Nephew" >Niece or Nephew (child of sister/brother)</option>
                                <option value="Distant Relative" >Distant Relative</option>
                            </x-select-input>            
                            <x-input-error for="relatives.{{$relative}}.family_in_canada_related" class="mt-2" />           
                        </div> 
                        <div class="col-span-4 sm:col-span-2 md:col-span-1">
                            <x-label for="relatives[{{$relative}}][family_in_canada_residence_status]" value="{{ __('Residency Status ') }}" />
                            <x-select-input id="relatives[{{$relative}}][family_in_canada_residence_status]" wire:model="relatives.{{$relative}}.family_in_canada_residence_status">                                
                                <option value="">select</option>
                                <option value="Citizen">Citizen</option>
                                <option value="Permanent Resident" >Permanent Resident</option>
                                <option value="Work Permit" >Work Permit</option>
                                <option value="Study Permit" >Study Permit</option>                               
                                <option value="Other" >Other</option>                                
                            </x-select-input>            
                            <x-input-error for="relatives.{{$relative}}.family_in_canada_residence_status" class="mt-2" />           
                        </div> 
                        <div class="col-span-4 sm:col-span-2 md:col-span-1">
                            <x-label for="relatives[{{$relative}}][family_in_canada_residence]" value="{{ __('Living in') }}" />
                            <x-select-input id="relatives[{{$relative}}][family_in_canada_residence]" wire:model="relatives.{{$relative}}.family_in_canada_residence">                                
                                <option value="">select</option>
                                @foreach ($province_list as $province)
                                    <option value="{{$province}}">{{$province}}</option>
                                @endforeach                              
                            </x-select-input>            
                            <x-input-error for="relatives.{{$relative}}.family_in_canada_residence" class="mt-2" />           
                        </div> 
                        <div class="col-span-4 sm:col-span-2 md:col-span-1">
                            <x-label for="relatives[{{$relative}}][family_in_canada_duration]" value="{{ __('Since') }}" />
                            <x-select-input id="relatives[{{$relative}}][family_in_canada_duration]" wire:model="relatives.{{$relative}}.family_in_canada_duration">                                                               
                                <option value="">select</option>
                                <option value="2 years or longer" >2 years or longer</option>                               
                                <option value="More than 1 year, but less than 2 years" >More than 1 year, but less than 2 years</option>
                                <option value="Less than 1 year" >Less than 1 year</option>
                            </x-select-input>            
                            <x-input-error for="relatives.{{$relative}}.family_in_canada_duration" class="mt-2" />           
                        </div>             
                    </div>
                    @endforeach
                    <div class="flex justify-center mt-2">
                        <button wire:click.prevent="addRelative" class="py-2 px-4 bg-zinc-300 rounded-md hover:bg-zinc-400 shadow-md">
                            Add another relative    
                        </button>    
                    </div>
                </div>
                @endif
            </div>
            <div class="flex justify-between py-4 mt-4 md:mt-8">
                <x-secondary-button type="button" wire:click="changeStep(6)">
                    <svg class="w-5 h-5 mr-1 rotate-180" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="hidden md:block">Prev</span>                    
                </x-secondary-button>
                <x-button type="button" wire:click="submitStep7">
                    <span class="hidden md:block">Next</span>
                    <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </x-button>
            </div>
        </div>
    </div>
    @else
        <div class="hidden"></div>
    @endif

    {{-- Net worth --}}
    @if ($step==8)
    <div class="w-full md:max-w-lg mx-auto">
        <h3 class="futura-medium text-2xl tracking-wide mb-4 lg:mb-6">Personal finance</h3>
        <div class="bg-white shadow py-5 px-4 rounded-xl">
            <p class="underline text-base font-bold flex mb-4">How much money do you have available to you for the purposes of settling in Canada?</p>
            <div class="grid grid-cols-4 gap-4">
                <div class="col-span-4">
                    <x-label for="amount_available" value="{{ __('Amount($)') }}" />
                    <x-select-input name="amount_available" id="amount_available" wire:model.defer="amount_available">        
                        <option value="">select</option>                                                        
                        <option value="less than $10,000" >less than $10,000</option>
                        <option value="between $10,000 and $25,000">between $10,000 and $25,000</option>
                        <option value="between $25,000 and $100,000" >between $25,000 and $100,000</option>
                        <option value="between 100,000 and $500,000" >between 100,000 and $500,000</option>
                        <option value="between $500,000 and $1,000,000" >between $500,000 and $1,000,000</option>
                        <option value="between $1,000,000 and $2,000,000" >between $1,000,000 and $2,000,000</option>                               
                        <option value="more than $2,000,000" >more than $2,000,000</option>
                    </x-select-input>            
                    <x-input-error for="amount_available" class="mt-2" />           
                </div>
                <div class="col-span-4">
                    <x-label for="comment" value="{{ __('You may provide additional information that you think would be relevant to your immigration assessment') }}" />
                    <textarea name="comment" id="comment" wire:model.defer="comment" rows="5" placeholder="Additional information"
                    class="text-dark placeholder-gray-500 focus:border-primary w-full 
                    rounded-lg border py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]">                                                                                       
                    </textarea>            
                    <x-input-error for="comment" class="mt-2" />           
                </div>                
            </div>            
            <p class="futura-light flex mt-4 text-gray-700 text-sm"> 
                Please note that if you choose to use our professional services for obtaining a Canadian visa, {{config('app.name')}} reserves the right to determine the payment method for these services. Payment options may include US Dollars or Cryptocurrency, depending on the specific circumstances of the transaction.                                
            </p>
            <div class="flex justify-between py-4 mt-4 md:mt-8">
                <x-secondary-button type="button" wire:click="changeStep(7)">
                    <svg class="w-5 h-5 mr-1 rotate-180" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="hidden md:block">Prev</span>                    
                </x-secondary-button>
                <x-button type="button" wire:click="submitStep8">
                    <span class="hidden md:block">Next</span>
                    <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </x-button>
            </div>
        </div>        
    </div>  
    @else
        <div class="hidden"></div>
    @endif
    {{-- passport --}}
    @if ($step==9)
    <div class="w-full md:max-w-lg mx-auto">               
        <h3 class="futura-medium text-2xl tracking-wide mb-4 lg:mb-6">Upload your photo (passport format)</h3>
        <div class="px-4 py-5 bg-white shadow rounded-xl">
            <div class="mx-auto max-w-[400px] relative border-dashed border-2 border-gray-300 p-4 rounded-lg">
                <div class="text-center">
                    <img class="mx-auto h-12 w-12" src="https://www.svgrepo.com/show/357902/image-upload.svg" alt="">
            
                    <h3 class="mt-2 text-md futura-medium text-gray-800">
                        <label for="file-upload" class="relative cursor-pointer">                            
                            <span class="text-indigo-600">Browse</span>
                            <span>to upload</span>
                            <input  x-ref="fileInput" id="file-upload" wire:model="passport" type="file" class="hidden">
                        </label>
                    </h3>
                    <p class="mt-1 text-xs text-gray-500">
                        PNG, JPG, JPEG up to 2MB
                    </p>
                </div>

                @if ($passport)               
                <img src="{{$passport->temporaryUrl()}}" class="mt-4 mx-auto max-h-40">  
                @endif                
            </div>
            
            <div class="flex justify-between py-4 mt-4 md:mt-8">
                <x-secondary-button type="button" wire:click="changeStep(8)">
                    <svg class="w-5 h-5 mr-1 rotate-180" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="hidden md:block">Prev</span>                    
                </x-secondary-button>
                <x-button type="button" wire:click="submitFinal">
                    <span>Complete</span>
                    <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </x-button>
            </div>
        </div>
    </div> 
    @else
        <div class="hidden"></div>
    @endif
</div>
