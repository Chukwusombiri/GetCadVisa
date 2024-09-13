<x-wire-modal formAction="workContact">
    <x-slot name="title">
        Do you have questions about working in Canada or hiring a foreign worker?
    </x-slot>

    <x-slot name="content">
        <x-validation-errors class="bg-zinc-100 py-2 px-4 rounded-md"/>
        <div class="mb-4">
            <x-label for="first_name" value="{{ __('First Name') }}" />
            <x-input id="first_name" type="text" class="mt-1 block w-full" wire:model="first_name"/>          
            <x-input-error for="first_name" class="mt-2" />           
        </div>
        <div class="mb-4">
            <x-label for="last_name" value="{{ __(' Last Name') }}" />
            <x-input id="last_name" type="text" class="mt-1 block w-full" wire:model="last_name"/>          
            <x-input-error for="last_name" class="mt-2" />           
        </div>
        <div class="mb-4">
            <x-label for="email" value="{{ __(' Email Address') }}" />
            <x-input id="email" type="email" class="mt-1 block w-full" wire:model="email"/>          
            <x-input-error for="email" class="mt-2" />           
        </div>
        <div class="mb-4">
            <x-label for="phone" value="{{ __(' Phone') }}" />
            <x-input id="phone" type="text" class="mt-1 block w-full" wire:model="phone"/>          
            <x-input-error for="phone" class="mt-2" />           
        </div>
        <div class="mb-4">
            <x-label for="location" value="{{ __(' Location') }}" />
            <x-select-input id="location" wire:model="location">                                                         
                <option value="">select country</option> 
                @foreach ($country_list as $country)
                    <option value="{{$country}}">{{$country}}</option>                            
                @endforeach                                              
            </x-select-input>         
            <x-input-error for="location" class="mt-2" />           
        </div>
        <div class="mb-4">
            <x-label for="comment" value="{{ __('Please provide information about your work permit enquiry') }}" />
            <textarea name="comment" id="comment" wire:model="comment" rows="5" placeholder="Summarize your inquiry"
            class="text-dark placeholder-gray-500 focus:border-primary w-full 
            rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD]">                                                                                       
            </textarea>            
            <x-input-error for="comment" class="mt-2" />           
        </div>
        <div class="mb-4">
            <x-label for="terms">
                <div class="flex items-center">
                    <x-checkbox id="terms"/>
                    <div class="ml-2">
                        {!! __('Yes, please send me the free Canadian Work permit Newsletter by email') !!}
                    </div>
                </div>                
            </x-label>
        </div>
    </x-slot>

    <x-slot name="buttons">
        <button type="button" wire:click="$emit('closeModal')" class="bg-gray-600 hover:bg-gray-700 focus:bg-gray-700 px-4 py-2 
        text-white shadow rounded-lg text-lg">close</button>

        <button type="submit" wire:click.prevent="send" class="bg-red-600 hover:bg-red-700 focus:bg-red-700 px-4 py-2 
        text-white shadow rounded-lg text-lg">submit</button>
    </x-slot>
</x-wire-modal>