<div class="pt-8">
    {{-- personal information --}}
    @if ($step==1)
    <div class="">
        <h3 class="futura-medium text-2xl tracking-wide mb-4 lg:mb-6">Fill out Information</h3>       
        <div class="px-4 py-5 bg-white shadow rounded-xl">
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
                    <x-select-input name="nationality" id="nationality" wire:model="nationality">                                                         
                        <option value="">select</option>
                        @foreach ($country_list as $country)
                            <option value="{{$country}}">{{$country}}</option>
                        @endforeach                                               
                    </x-select-input>            
                    <x-input-error for="nationality" class="mt-2" />           
                </div> 
                <div class="col-span-6 sm:col-span-2">
                    <x-label for="residence" value="{{ __('Residence') }}" />
                    <x-select-input name="residence" id="residence" wire:model="residence">                                                         
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
                    <x-label for="admission_status" value="{{ __('Do you already have a letter of admission/acceptance to a Canadian educational institution?') }}" />
                    <x-select-input name="admission_status" id="admission_status" wire:model="admission_status">                                                                                 
                        <option value="">select</option>
                        <option value="1" >Yes</option>
                        <option value="0">No</option>                                                                   
                    </x-select-input>            
                    <x-input-error for="admission_status" class="mt-2" />           
                </div> 
                @if ($admission_status)
                <div class="col-span-6 sm:col-span-2">
                    <x-label for="study_start" value="{{ __('Start Date') }}" />
                    <x-input id="study_start" type="date" class="mt-1 block w-full" wire:model="study_start"/>         
                    <x-input-error for="study_start" class="mt-2" />           
                </div> 
                <div class="col-span-6 sm:col-span-2">
                    <x-label for="study_province" value="{{ __('What province is your program in?') }}" />
                    <x-select-input id="study_province" wire:model="study_province">                                
                        <option value="">select</option>
                        @foreach ($province_list as $province)
                            <option value="{{$province}}">{{$province}}</option>
                        @endforeach  
                    </x-select-input>            
                    <x-input-error for="study_province" class="mt-2" />           
                </div>  
                @endif                
                <div class="col-span-6 sm:col-span-2">
                    <x-label for="previous_study_immigration_attempt_status" value="{{ __('Have you previously been refused a study permit?') }}" />
                    <x-select-input id="previous_study_immigration_attempt_status"
                     wire:model="previous_study_immigration_attempt_status">   
                        <option value="">select</option>                                                                              
                        <option value="Yes" >Yes</option>
                        <option value="No">No</option>                                                                   
                    </x-select-input>            
                    <x-input-error for="previous_study_immigration_attempt_status" class="mt-2" />           
                </div>
                <div class="col-span-6 sm:col-span-2">
                    <x-label for="living_expense_capability_status" value="{{ __('IMPORTANT: Are you, or a family member, able to provide bank statements equivalent of $25,000 USD or more to cover your living expenses while you study in Canada?') }}" />
                    <x-select-input name="living_expense_capability_status" id="living_expense_capability_status" wire:model="living_expense_capability_status">                                                                                 
                        <option value="">select</option>
                        <option value="Yes" >Yes</option>
                        <option value="No">No</option>                                                                   
                    </x-select-input>            
                    <x-input-error for="living_expense_capability_status" class="mt-2" />           
                </div>                  
            </div>
            <p class="futura-light mt-4 text-gray-700 text-sm max-w-xl">
                Please note that if you choose to use our professional services for obtaining a Canadian visa,
                {{ config('app.name') }} reserves the right to determine the payment method for these services.
                Payment options may include US Dollars or Cryptocurrency, depending on the specific circumstances of
                the transaction.
            </p>
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
    @if ($step==2)
    <div class="w-full md:max-w-lg mx-auto">
        <h3 class="futura-medium text-2xl tracking-wide mb-4 lg:mb-6">Upload your photo (passport format)</h3>
        <div class="px-4 py-5 bg-white shadow rounded-xl">
            <div class="mx-auto max-w-[400px] relative border-dashed border-2 border-gray-300 p-4 rounded-lg">
                <div class="text-center">
                    <img class="mx-auto h-12 w-12" src="https://www.svgrepo.com/show/357902/image-upload.svg"
                        alt="">

                    <h3 class="mt-2 text-md futura-medium text-gray-800">
                        <label for="file-upload" class="relative cursor-pointer">
                            <span class="text-indigo-600">Browse</span>
                            <span>to upload</span>
                            <input x-ref="fileInput" id="file-upload" wire:model="passport" type="file"
                                class="hidden">
                        </label>
                    </h3>
                    <p class="mt-1 text-xs text-gray-500">
                        PNG, JPG, JPEG up to 2MB
                    </p>
                </div>

                @if ($passport)
                    <img src="{{ $passport->temporaryUrl() }}" class="mt-4 mx-auto max-h-40">
                @endif
            </div>

            <div class="flex justify-between py-4 mt-4 md:mt-8">
                <x-secondary-button type="button" wire:click="prevStep">
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
