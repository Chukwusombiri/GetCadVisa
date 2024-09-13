<div class="bg-white shadow rounded-xl">
    {{-- personal information --}}
    <div class="px-4 py-8 border-b border-gray-300">        
        <h3 class="futura-medium text-2xl tracking-wide mb-4 lg:mb-6 text-rose-700">Personal Information</h3>                
        <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6 md:col-span-2">                    
                <x-label for="first_name" value="{{ 'First Name' }}" />
                <x-input id="first_name" type="text" class="mt-1 block w-full" wire:model="first_name"/>
                <x-input-error for="first_name" class="mt-2" />
            </div>
            
            <div class="col-span-6 md:col-span-2">                    
                <x-label for="last_name" value="{{ 'Last Name' }}" />
                <x-input id="last_name" type="text" class="mt-1 block w-full" wire:model="last_name"/>
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
                <x-select-input id="nationality" wire:model="nationality">                                                         
                    <option value="">select</option>
                    @foreach ($country_list as $country)
                        <option value="{{$country}}">{{$country}}</option>
                    @endforeach                                               
                </x-select-input>            
                <x-input-error for="nationality" class="mt-2" />           
            </div> 
            <div class="col-span-6 sm:col-span-2">
                <x-label for="residence" value="{{ __('Residence') }}" />
                <x-select-input id="residence" wire:model="residence">                                                         
                    <option value="">select</option>
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
                <x-select-input id="marital_status" wire:model="marital_status">                                                         
                    <option value="">select</option>
                    @foreach ($marital_status_list as $marital_status)
                        <option value="{{$marital_status}}">{{$marital_status}}</option>
                    @endforeach                                             
                </x-select-input>            
                <x-input-error for="marital_status" class="mt-2" />           
            </div>
            <div class="col-span-6 sm:col-span-2">
                <x-label for="canada_spouse_status" value="{{ __('Do you or your spouse or common-law partner have a brother or sister living in Canada who is a citizen or permanent resident?') }}" />
                <x-select-input name="canada_spouse_status" id="canada_spouse_status" wire:model="canada_spouse_status"> 
                    <option value="">select</option>                                                        
                    <option value="yes">Yes, I do.</option>
                    <option value="no" >No, I don't.</option>                                             
                </x-select-input>            
                <x-input-error for="canada_spouse_status" class="mt-2" />           
            </div>                        
        </div>
    </div> 
    {{-- educational training --}}      
    <div class="px-4 py-8 border-b border-gray-300">
        <h3 class="futura-medium text-2xl tracking-wide mb-4 lg:mb-6 text-rose-700">Your Education and Training</h3>                   
        <div class="grid grid-cols-2 gap-2 sm:gap-4 mt-1 border-b border-dark pb-4">
            <div class="col-span-2 sm:col-span-1">
                <x-label for="educational_qualification" value="{{ __('What is your highest level of completed education') }}" />
                <x-select-input id="educational_qualification" wire:model="educational_qualification">                                                         
                    <option value="">select</option>
                    <option value="master's">Master's Degree</option>
                    <option value="phd" >PhD</option>
                    <option value="bachelor's">Bachelor's Degree</option>
                    <option value="trade_certificate">Trade Certificate</option>
                    <option value="associate_degree">Associate Degree</option>
                    <option value="apprenticeship">Apprenticeship</option>                                           
                    <option value="college">College or Non-university</option>
                    <option value="professional">Professional or Vocational</option>
                    <option value="trade_certificate">Others</option>
                </x-select-input>            
                <x-input-error for="educational_qualification" class="mt-2" />           
            </div>
            <div class="col-span-2 sm:col-span-1">
                <x-label for="canada_study_status" value="{{ __('Have you studied inside Canada?') }}" />
                <x-select-input id="canada_study_status" wire:model="canada_study_status"> 
                    <option value="">select</option>                                                        
                    <option value="1">Yes, I have.</option>
                    <option value="0" >No, I haven't.</option>                               
                </x-select-input>            
                <x-input-error for="canada_study_status" class="mt-2" />           
            </div>
            @if ($canada_study_status)
            <div class="col-span-2 sm:col-span-1">
                <x-label for="canada_study_completion_status" value="{{ __('Have you completed at least two academic years of full-time study, in a program at least two years long, at a secondary or post-secondary school IN CANADA? ') }}" />
                <x-select-input id="canada_study_completion_status" wire:model="canada_study_completion_status">                                                         
                    <option value="">select</option>
                    <option value="yes">Yes, I have.</option>
                    <option value="no" >No, i haven't.</option>                               
                </x-select-input>            
                <x-input-error for="canada_study_completion_status" class="mt-2" />           
            </div>
            <div class="col-span-2 sm:col-span-1">
                <x-label for="canada_degree_status" value="{{ __('Have you obtained a degree, diploma or certificate from a school, college or university IN CANADA?') }}" />
                <x-select-input id="canada_degree_status" wire:model="canada_degree_status">                                                         
                    <option value="">select</option>
                    <option value="yes">Yes, I have.</option>
                    <option value="no" >No, i haven't.</option>                            
                </x-select-input>            
                <x-input-error for="canada_degree_status" class="mt-2" />           
            </div>
            <div class="col-span-2 sm:col-span-1">
                <x-label for="in_canada_for_study_status" value="{{ __('Were you physically present IN CANADA for at least 8 months during your studies?') }}" />
                <x-select-input id="in_canada_for_study_status" wire:model="in_canada_for_study_status">                                                         
                    <option value="yes">Yes, I was.</option>
                    <option value="no" >No, i wasn't.</option>                               
                </x-select-input>            
                <x-input-error for="in_canada_for_study_status" class="mt-2" />           
            </div>
            <div class="col-span-2 sm:col-span-1">
                <x-label for="canada_educational_qualifiication" value="{{ __('What is your highest level of completed education IN CANADA') }}" />
                <x-select-input id="canada_educational_qualifiication" wire:model="canada_educational_qualifiication">                                                         
                    <option value="master's">Master's Degree</option>
                    <option value="phd" >PhD</option>
                    <option value="bachelor's">Bachelor's Degree</option>
                    <option value="trade_certificate">Trade Certificate</option>
                    <option value="associate_degree">Associate Degree</option>
                    <option value="apprenticeship">Apprenticeship</option>                                           
                    <option value="college">College or Non-university</option>
                    <option value="professional">Professional or Vocational</option>
                    <option value="trade_certificate">Others</option>
                </x-select-input>            
                <x-input-error for="canada_educational_qualifiication" class="mt-2" />           
            </div>
            @endif 
        </div>
    </div>
    {{-- language skill --}}
    <div class="px-4 py-8 border-b border-gray-300">
        <h3 class="futura-medium text-2xl tracking-wide mb-4 lg:mb-6 text-rose-700">Your Language Skills</h3>                      
        <div class="grid grid-cols-4 gap-4 mb-4">
            <div class="col-span-4 sm:col-span-2">
                <x-label for="english_proficiency" value="{{ __('English proficiency') }}" />
                <x-select-input id="english_proficiency" wire:model="english_proficiency">                                
                    <option value="">select</option>
                    @foreach ($language as $lang)
                    <option value="{{$lang}}">{{$lang}}</option>
                    @endforeach
                </x-select-input>            
                <x-input-error for="english_proficiency" class="mt-2" />           
            </div>         
            <div class="col-span-4 sm:col-span-2">
                <x-label for="french_proficiency" value="{{ __('French proficiency') }}" />
                <x-select-input id="french_proficiency" wire:model="french_proficiency">                                
                    <option value="">select</option>
                    @foreach ($language as $lang)
                        <option value="{{$lang}}">{{$lang}}</option>
                    @endforeach
                </x-select-input>            
                <x-input-error for="french_proficiency" class="mt-2" />           
            </div>                       
        </div>
    </div>
    {{-- work history --}}
    <div class="px-4 py-8 border-b border-gray-300">
        <h3 class="futura-medium text-2xl tracking-wide mb-4 lg:mb-6 text-rose-700">Your Work History</h3>        
        <div class="grid grid-cols-4 gap-6">                
            <div class="col-span-4 md:col-span-2">
                <x-label for="skilled_work_duration" value="{{ __('In the last 10 years, how many years of skilled work experience OUTSIDE CANADA do you have?') }}" />
                <x-select-input id="skilled_work_duration" wire:model="skilled_work_duration">                                                                                 
                    <option value="">select</option>
                    <option value="None">None</option>
                    <option value="Less than 3 months">Less than 3 months</option>
                    <option value="More than 3 and less than 6 months" >More than 3 and less than 6 months</option>
                    <option value="6 months and less than 12 months">6 months and less than 12 months</option>                                                                 
                </x-select-input>            
                <x-input-error for="skilled_work_duration" class="mt-2" />           
            </div>
            <div class="col-span-4 md:col-span-2">
                <x-label for="canada_skilled_work_duration" value="{{ __('In the last 10 years, how many years of skilled work experience INSIDE CANADA do you have?') }}" />
                <x-select-input id="canada_skilled_work_duration" wire:model="canada_skilled_work_duration">                                                         
                    <option value="">select</option>
                    <option value="None">None</option>
                    <option value="Less than 3 months">Less than 3 months</option>
                    <option value="More than 3 and less than 6 months" >More than 3 and less than 6 months</option>
                    <option value="6 months and less than 12 months">6 months and less than 12 months</option>                               
                </x-select-input>            
                <x-input-error for="canada_skilled_work_duration" class="mt-2" />           
            </div>
            <div class="col-span-4 md:col-span-2">
                <x-label for="qualification_cert_status" value="{{ __('Do you have a certificate of qualification from a Canadian province, territory, or federal body?') }}" />
                <x-select-input id="qualification_cert_status" wire:model="qualification_cert_status">                                                         
                    <option value="">select</option>
                    <option value="yes">Yes, I do.</option>
                    <option value="no" >No, I don't.</option>                             
                </x-select-input>            
                <x-input-error for="qualification_cert_status" class="mt-2" />           
            </div>
            <div class="col-span-4 md:col-span-2">
                <x-label for="nomination_cert_status" value="{{ __('Do you have a nomination certificate from a Canada province or territory?') }}" />
                <x-select-input id="nomination_cert_status" wire:model="nomination_cert_status">                                                         
                    <option value="">select</option>
                    <option value="Yes">Yes, I do.</option>
                    <option value="No" >No, I don't.</option>                               
                </x-select-input>            
                <x-input-error for="nomination_cert_status" class="mt-2" />           
            </div>
        </div>   
    </div>
    {{-- job offers --}}
    <div class="px-4 py-8 border-b border-gray-300">
        <h3 class="futura-medium text-2xl tracking-wide mb-4 lg:mb-6 text-rose-700">Canadian Job Offer</h3>        
        <div class="grid grid-cols-2 gap-4">
            <div class="col-span-2 md:col-span-1">
                <x-label for="canada_job_status" value="{{ __('Do you have a valid job offer from a Canadian employer?') }}" />
                <x-select-input id="canada_job_status" wire:model="canada_job_status">                                                                                 
                    <option value="">select</option>
                    <option value="1" >Yes, I have.</option>
                    <option value="0">No, I haven't.</option>                                                                   
                </x-select-input>            
                <x-input-error for="canada_job_status" class="mt-2" />           
            </div> 
            @if ($canada_job_status)
            <div class="col-span-2 md:col-span-1">
                <x-label for="senior_role_status" value="{{ __('Is the job offer in a senior managerial role?') }}" />
                <x-select-input id="senior_role_status" wire:model="senior_role_status">                                                         
                    <option value="">select</option>
                    <option value="yes" >Yes, It is.</option>
                    <option value="no">No, It isn't.</option>
                </x-select-input>            
                <x-input-error for="senior_role_status" class="mt-2" />           
            </div>
            @endif  
        </div>
        <div class="flex items-center justify-end pt-6 pb-2 mt-4 border-t border-gray-300">                                                           
            <button type="button" wire:click="submitTest" class="rounded-full px-4 py-2 md:px-6 md:py-4 bg-rose-700 text-gray-100 hover:bg-rose-800 font-semibold text-xs uppercase tracking-widest focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                {{ __('Submit test') }} <span>&rarr;</span>
            </button>                 
        </div>
    </div>      
</div>
