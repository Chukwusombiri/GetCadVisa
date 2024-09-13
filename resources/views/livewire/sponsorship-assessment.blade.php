<div class="pt-8">
    <div class="flex flex-wrap items-center mb-4 md:mb-6" x-data="{ step: @entangle('step') }">
        <button @click="$wire.changeStep(1)"
            class="px-3 py-2 mb-2 mr-2 shadow rounded-md hover:bg-gray-400 text-sm futura-medium"
            :class="{ 'bg-rose-700 text-gray-100': step == 1, 'bg-gray-300 text-gray-600': step != 1 }">1</button>
        <button @click="$wire.changeStep(2)"
            class="px-3 py-2 mb-2 mr-2 shadow rounded-md hover:bg-gray-400 text-sm futura-medium"
            :class="{ 'bg-rose-700 text-gray-100': step == 2, 'bg-gray-300 text-gray-600': step != 2 }">2</button>
        <button @click="$wire.changeStep(3)"
            class="px-3 py-2 mb-2 mr-2 shadow rounded-md hover:bg-gray-400 text-sm futura-medium"
            :class="{ 'bg-rose-700 text-gray-100': step == 3, 'bg-gray-300 text-gray-600': step != 3 }">3</button>
        <button @click="$wire.changeStep(4)"
            class="px-3 py-2 mb-2 mr-2 shadow rounded-md hover:bg-gray-400 text-sm futura-medium"
            :class="{ 'bg-rose-700 text-gray-100': step == 4, 'bg-gray-300 text-gray-600': step != 4 }">4</button>
    </div>
    {{-- personal information --}}
    @if ($step == 1)
        <div class="">
            <h3 class="futura-medium text-2xl tracking-wide mb-4 lg:mb-6">Personal details</h3>
            <div class="px-4 py-5 bg-white shadow rounded-xl">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 md:col-span-2">
                        <x-label for="first_name" value="{{ 'First Name' }}" />
                        <x-input id="first_name" type="text" class="mt-1 block w-full" wire:model="first_name" />
                        <x-input-error for="first_name" class="mt-2" />
                    </div>

                    <div class="col-span-6 md:col-span-2">
                        <x-label for="last_name" value="{{ 'Last Name' }}" />
                        <x-input id="last_name" type="text" minimum="8" class="mt-1 block w-full"
                            wire:model="last_name" />
                        <x-input-error for="last_name" class="mt-2" />
                    </div>

                    <div class="col-span-6 md:col-span-2">
                        <x-label for="email" value="{{ 'Email Address' }}" />
                        <x-input id="email" type="email" class="mt-1 block w-full" wire:model="email" />
                        <x-input-error for="email" class="mt-2" />
                    </div>
                    <div class="col-span-6 md:col-span-2">
                        <x-label for="telephone" value="{{ 'Telephone' }}" />
                        <x-input id="telephone" type="text" class="mt-1 block w-full" wire:model="telephone" />
                        <x-input-error for="telephone" class="mt-2" />
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <x-label for="nationality" value="{{ __('Nationality') }}" />
                        <x-select-input id="nationality" wire:model="nationality">
                            <option value="">select</option>
                            @foreach ($country_list as $country)
                                <option value="{{ $country }}">{{ $country }}</option>
                            @endforeach
                        </x-select-input>
                        <x-input-error for="nationality" class="mt-2" />
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <x-label for="residence" value="{{ __('Residence') }}" />
                        <x-select-input id="residence" wire:model="residence">
                            <option value="">select</option>
                            @foreach ($country_list as $country)
                                <option value="{{ $country }}">{{ $country }}</option>
                            @endforeach
                        </x-select-input>
                        <x-input-error for="residence" class="mt-2" />
                    </div>
                    <div class="col-span-6 md:col-span-2">
                        <x-label for="age" value="{{ 'Age (years)' }}" />
                        <x-input id="age" type="number" class="mt-1 block w-full" wire:model="age" />
                        <x-input-error for="age" class="mt-2" />
                    </div>
                    <div class="col-span-6 md:col-span-2">
                        <x-label for="sponsorship_need" value="What would you like to do?" />
                        <x-select-input name="sponsorship_need" id="sponsorship_need" wire:model="sponsorship_need">
                            <option value="">select</option>
                            <option value="Become a sponsor">Become a sponsor</option>
                            <option value="Get sponsored">Get sponsored</option>
                        </x-select-input>
                        <x-input-error for="sponsorship_need" class="mt-2" />
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <x-label for="marital_status" value="{{ __('Marital Status') }}" />
                        <x-select-input id="marital_status" wire:model="marital_status">
                            <option value="">select</option>
                            @foreach ($marital_status_list as $marital_status)
                                <option value="{{ $marital_status }}">{{ $marital_status }}</option>
                            @endforeach
                        </x-select-input>
                        <x-input-error for="marital_status" class="mt-2" />
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <x-label for="children_under_22_status"
                            value="{{ __('Do you have any children under the age of 22?') }}" />
                        <x-select-input id="children_under_22_status" wire:model="children_under_22_status">
                            <option value="1">Yes, I do.</option>
                            <option value="0">No, I don't.</option>
                        </x-select-input>
                        <x-input-error for="children_under_22_status" class="mt-2" />
                    </div>
                    @if ($children_under_22_status)
                        <div class="col-span-6 sm:col-span-2">
                            <x-label for="children_under_22_count"
                                value="{{ __('How many children under the age of 22?') }}" />
                            <x-input id="children_under_22_count" type="number" class="mt-1 block w-full"
                                wire:model="children_under_22_count" />
                            <x-input-error for="children_under_22_count" class="mt-2" />
                        </div>
                    @endif
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
    {{-- sponsor infos --}}
    @if ($step == 2)
        <div class="">
            <h3 class="futura-medium text-2xl tracking-wide mb-4 lg:mb-6">Sponsor Information</h3>
            <div class="bg-white shadow py-5 px-4 rounded-xl">
                <div class="grid grid-cols-2 gap-4 md:gap-6 lg:gap-10">
                    <div class="col-span-2 md:col-span-1">
                        <x-label for="sponsor_name" value="Sponsor's Full Name" />
                        <x-input id="sponsor_name" type="text" class="mt-1 block w-full"
                            wire:model="sponsor_name" />
                        <x-input-error for="sponsor_name" class="mt-2" />
                    </div>
                    <div class="col-span-2 md:col-span-1">
                        <x-label for="sponsored_relative" value="Who do you wish to sponsor" />
                        <x-select-input id="sponsored_relative" wire:model="sponsored_relative">
                            <option value="">select</option>
                            <option value="spouse">Spouse or Common-Law Partner</option>
                            <option value="sibling">Sister or Brother</option>
                            <option value="child">Daughter or Son</option>
                            <option value="parent">Mother or Father</option>
                            <option value="cousin">Cousin (child of aunt/uncle)</option>
                            <option value="aunt_or_uncle">Aunt or Uncle</option>
                            <option value="sibling">Sister or Brother</option>
                            <option value="grand_child">Granddaugther or Grandson</option>
                            <option value="grand_parent">Grandmother or Grandfather</option>
                            <option value="niece">Niece or Nephew (child of sister/brother)</option>
                            <option value="distant">Distant Relative</option>
                        </x-select-input>
                        <x-input-error for="sponsored_relative" class="mt-2" />
                    </div>
                    <div class="col-span-2 md:col-span-1">
                        <x-label for="social_assistance_status"
                            value="{{ __('Are you currently getting any kind of social assistance from the Government.') }}" />
                        <x-select-input name="social_assistance_status" id="social_assistance_status"
                            wire:model="social_assistance_status">
                            <option value="">select</option>
                            <option value="yes">Yes, I do.</option>
                            <option value="no">No, I don't.</option>
                        </x-select-input>
                        <x-input-error for="social_assistance_status" class="mt-2" />
                    </div>
                    <div class="col-span-2 md:col-span-1">
                        <x-label for="sponsor_citizenship_status"
                            value="{{ __('Are you a citizen or permanent resident of Canada') }}" />
                        <x-select-input name="sponsor_citizenship_status" id="sponsor_citizenship_status"
                            wire:model="sponsor_citizenship_status">
                            <option value="">select</option>
                            <option value="yes">Yes, I am.</option>
                            <option value="no">No, I'm not'.</option>
                        </x-select-input>
                        <x-input-error for="sponsor_citizenship_status" class="mt-2" />
                    </div>
                    <div class="col-span-2 md:col-span-1">
                        <x-label for="sponsor_resident_status"
                            value="{{ __('Are you currently residing in Canada') }}" />
                        <x-select-input name="sponsor_resident_status" id="sponsor_resident_status"
                            wire:model="sponsor_resident_status">
                            <option value="">select</option>
                            <option value="1">Yes, I am.</option>
                            <option value="0">No, I'm not'.</option>
                        </x-select-input>
                        <x-input-error for="sponsor_resident_status" class="mt-2" />
                    </div>
                    @if ($sponsor_resident_status)
                        <div class="col-span-2 md:col-span-1">
                            <x-label for="sponsor_in_canada_residence" value="{{ __('Living in') }}" />
                            <x-select-input name="sponsor_in_canada_residence" id="sponsor_in_canada_residence"
                                wire:model="sponsor_in_canada_residence">
                                <option value="">select</option>
                                @foreach ($province_list as $province)
                                    <option value="{{ $province }}">{{ $province }}</option>
                                @endforeach
                            </x-select-input>
                            <x-input-error for="sponsor_in_canada_residence" class="mt-2" />
                        </div>
                    @endif
                </div>
                <p class="text-sm tracking-wider futura-medium mt-4 w-full max-w-lg">
                    This information is used in accordance with <a href="{{ route('policy.show') }}"
                        class="underline text-red-600 inline">our privacy policy</a>. We do not share information with
                    any third-party organizations except those that assist in immigration assessments.
                </p>
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
    {{-- other information --}}
    @if ($step == 3)
    <div class="max-w-xl mx-auto">
        <h3 class="futura-medium text-2xl tracking-wide mb-4 lg:mb-6">Other informations</h3>
        <div class="px-4 py-5 bg-white shadow rounded-xl">
            <div class="grid grid-cols-6 gap-x-6 gap-y-8">
                <div class="col-span-6 md:col-span-3">
                    <x-label for="criminal_record_status" value="I have a criminal record" />
                    <x-select-input id="criminal_record_status" wire:model="criminal_record_status">
                        <option value="">select</option>
                        <option value="yes">Yes, I do.</option>
                        <option value="no">No, I don't.</option>
                    </x-select-input>
                    <x-input-error for="criminal_record_status" class="mt-2" />
                </div>
                <div class="col-span-6 md:col-span-3">
                    <x-label for="medical_condition_status" value="I have a serious medical condition" />
                    <x-select-input id="medical_condition_status" wire:model="medical_condition_status">
                        <option value="">select</option>
                        <option value="yes">True</option>
                        <option value="no">False</option>
                    </x-select-input>
                    <x-input-error for="medical_condition_status" class="mt-2" />
                </div>
                <div class="col-span-6">
                    <x-label for="comment"
                        value="{{ __('You may provide additional information that you think would be relevant to your immigration assessment') }}" />
                    <textarea id="comment" wire:model="comment" rows="5" placeholder="Additional information"
                        class="text-dark placeholder-gray-500 focus:border-primary w-full 
                rounded-lg border py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]">                                                                                       
                </textarea>
                    <x-input-error for="comment" class="mt-2" />
                </div>
            </div>
            <p class="futura-light mt-4 text-gray-700 text-sm">
                Please note that if you choose to use our professional services for obtaining a Canadian visa,
                {{ config('app.name') }} reserves the right to determine the payment method for these services.
                Payment options may include US Dollars or Cryptocurrency, depending on the specific circumstances of
                the transaction.
            </p>
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
    {{-- passport --}}
    @if ($step==4)
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
                <x-secondary-button type="button" wire:click="changeStep(3)">
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
