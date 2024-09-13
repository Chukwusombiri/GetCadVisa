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
        <button @click="$wire.changeStep(5)"
            class="px-3 py-2 mb-2 mr-2 shadow rounded-md hover:bg-gray-400 text-sm futura-medium"
            :class="{ 'bg-rose-700 text-gray-100': step == 5, 'bg-gray-300 text-gray-600': step != 5 }">5</button>
    </div>
    {{-- personal information --}}
    @if ($step == 1)
        <div class="">
            <h3 class="futura-medium text-2xl tracking-wide mb-4 lg:mb-6">Personal Information</h3>
            <div class="px-4 py-5 bg-white shadow rounded-xl">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 md:col-span-2">
                        <x-label for="first_name" value="{{ 'First Name' }}" />
                        <x-input id="first_name" type="text" class="mt-1 block w-full" wire:model="first_name" />
                        <x-input-error for="first_name" class="mt-2" />
                    </div>

                    <div class="col-span-6 md:col-span-2">
                        <x-label for="last_name" value="{{ 'Last Name' }}" />
                        <x-input id="last_name" type="text" class="mt-1 block w-full" wire:model="last_name" />
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
                        <x-select-input name="nationality" id="nationality" wire:model="nationality">
                            <option value="">select</option>
                            @foreach ($country_list as $country)
                                <option value="{{ $country }}">{{ $country }}</option>
                            @endforeach
                        </x-select-input>
                        <x-input-error for="nationality" class="mt-2" />
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <x-label for="residence" value="{{ __('Residence') }}" />
                        <x-select-input name="residence" id="residence" wire:model="residence">
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
    {{-- Net worth --}}
    @if ($step == 2)
        <div class="w-full md:max-w-lg mx-auto">
            <h3 class="futura-medium text-2xl tracking-wide mb-4 lg:mb-6">Net worth</h3>
            <div class="bg-white shadow py-5 px-4 rounded-xl">
                <p class="text-md">
                    Please be sure to include your share value of any businesses that you own. Also, if you live outside
                    USA, use standard
                    currency rates and convert your net worth to USD.
                </p>
                <div class="w-full mt-4 md:mt-6">
                    <x-label for="net_worth" value="{{ __('Net Worth Value($)') }}" />
                    <x-select-input id="net_worth" wire:model="net_worth">
                        <option value="less than $10,000">less than $10,000</option>
                        <option value="between $10,000 and $25,000">between $10,000 and $25,000</option>
                        <option value="between $25,000 and $100,000">between 25,000 and 100,000</option>
                        <option value="between $100,000 and $500,000">between 100,000 and 500,000</option>
                        <option value="between $500,000 and $1,000,000">between 500,000 and 1,000,000</option>
                        <option value="between $1,000,000 and $2,000,000">between 1,000,000 and 2,000,000</option>
                        <option value="more than $2,000,000">more than $2,000,000</option>
                    </x-select-input>
                    <x-input-error for="net_worth" class="mt-2" />
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
    {{-- Management experience --}}
    @if ($step == 3)
        <div class="max-w-xl mx-auto">
            <h3 class="futura-medium text-2xl tracking-wide mb-4 lg:mb-6">Business experience</h3>
            <div class="bg-white shadow py-5 px-4 rounded-xl">
                <p class="text-md mb-4 md:mb-6">
                    Management experience may have been gained in a private or public sector, international agency,
                    government or government department.
                </p>
                <div class="grid grid-cols-4 gap-4 md:gap-8">
                    <div class="col-span-4">
                        <x-label for="management_status" value="Do you have any management experience" />
                        <x-select-input name="management_status" id="management_status"
                            wire:model="management_status">
                            <option value="">select</option>
                            <option value="1">Yes, I do.</option>
                            <option value="0">No, I don't.</option>
                        </x-select-input>
                        <x-input-error for="management_status" class="mt-2" />
                    </div>
                    {{-- work experience --}}
                    @if ($management_status)
                        <div class="col-span-4">
                            <p class="underline text-md futura-medium flex mt-2">Starting with your current (or most
                                recent) management experience, please list all the management experiences:</p>
                            @foreach ($managements as $mg => $m)
                                <div class="grid grid-cols-2 gap-4 md:gap-6 border-b border-dark pb-4">
                                    <div class="col-span-2 flex flex-wrap justify-between my-2">
                                        <p class="text-gray-700 font-bold text-lg">Management experience
                                            {{ $mg + 1 }}</p>
                                        @if (count($managements) > 1)
                                            <button wire:click="removeManagement({{ $mg }})"
                                                class="bg-red-200 text-gray-800 hover:text-dark hover:bg-red-400 py-2 px-4 shadow rounded">remove</button>
                                        @endif
                                    </div>
                                    <div class="col-span-2">
                                        <x-label for="managements[{{ $mg }}][management_title]"
                                            value="{{ __('Title') }}" />
                                        <x-input id="managements[{{ $mg }}][management_title]"
                                            type="text" class="mt-1 block w-full"
                                            wire:model="managements.{{ $mg }}.management_title" />
                                        <x-input-error for="managements.{{ $mg }}.management_title"
                                            class="mt-2" />
                                    </div>

                                    <div class="col-span-2">
                                        <x-label for="managements[{{ $mg }}][management_organization]"
                                            value="{{ __(' Organization') }}" />
                                        <x-input id="managements[{{ $mg }}][management_organization]"
                                            type="text" class="mt-1 block w-full"
                                            wire:model="managements.{{ $mg }}.management_organization" />
                                        <x-input-error for="managements.{{ $mg }}.management_organization"
                                            class="mt-2" />
                                    </div>
                                    <div class="col-span-2">
                                        <x-label for="managements[{{ $mg }}][management_duration]"
                                            value="{{ __('Duration') }}" />
                                        <x-select-input id="managements[{{ $mg }}][management_duration]"
                                            wire:model="managements.{{ $mg }}.management_duration">
                                            <option value="">select</option>
                                            <option value="Less than 3 months">Less than 3 months</option>
                                            <option value="More than 3 and less than 6 months">More than 3 and less
                                                than 6 months</option>
                                            <option value="6 months and less than 12 months">6 months and less than 12
                                                months</option>
                                            <option value="12 months and less than 2 years">12 months and less than 2
                                                years</option>
                                            <option value="More than 2 years">More than 2 years</option>
                                        </x-select-input>
                                        <x-input-error for="managements.{{ $mg }}.management_duration"
                                            class="mt-2" />
                                    </div>
                                </div>
                            @endforeach
                            <div class="flex justify-center mt-2">
                                <button wire:click="addManagement"
                                    class="py-2 px-4 bg-zinc-300 rounded-md hover:bg-zinc-400 shadow-md">
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
    {{-- other information --}}
    @if ($step == 4)
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
    {{-- passport --}}
    @if ($step == 5)
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
