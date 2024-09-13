<div class="relative rounded-lg bg-white p-8 shadow-lg sm:p-12">
            
    <div class="mb-6">
      <input
      wire:model="name"
        type="text"
        placeholder="Your Name"
        class="text-gray-700 border-[f0f0f0] focus:border-red-700 w-full rounded border py-3 px-[14px] text-base outline-none focus-visible:shadow-none"
      />
      @error('name') <span class="inline-block bg-red-100 mt-2 p-2">{{ $message }}</span> @enderror
    </div>
    <div class="mb-6">
      <input
      wire:model="email"
        type="email"
        placeholder="Your Email"
        class="text-gray-700 border-[f0f0f0] focus:border-red-700 w-full rounded border py-3 px-[14px] text-base outline-none focus-visible:shadow-none"
      />
      @error('email') <span class="inline-block bg-red-100 mt-2 p-2">{{ $message }}</span> @enderror
    </div>
    <div class="mb-6">
      <input
        wire:model="phone"
        type="text"
        placeholder="Your Phone"
        class="text-gray-700 border-[f0f0f0] focus:border-red-700 w-full rounded border py-3 px-[14px] text-base outline-none focus-visible:shadow-none"
      />
      @error('phone') <span class="inline-block bg-red-100 mt-2 p-2">{{ $message }}</span> @enderror
    </div>
    <div class="mb-6">
        <x-select-input class="text-gray-700 border-[f0f0f0] focus:border-red-700 w-full rounded border py-3 px-[14px] text-base outline-none focus-visible:shadow-none"
         id="location" wire:model="location">                                                         
            <option value="">Select your residence</option>  
            @foreach ($country_list as $country)
            <option value="{{$country}}">{{$country}}</option>                            
            @endforeach                                              
        </x-select-input>            
        <x-input-error for="location" class="mt-2" />           
    </div>    
    <div class="mb-6">
      <textarea
      wire:model="comment"
        rows="6"
        placeholder="Your Message"
        class="text-gray-700 border-[f0f0f0] focus:border-red-700 w-full resize-none rounded border py-3 px-[14px] text-base outline-none focus-visible:shadow-none"
      ></textarea>
      @error('comment') <span class="inline-block bg-red-100 mt-2 p-2">{{ $message }}</span> @enderror
    </div>
    @if ($response)
    <span class="block w-full bg-green-100 my-2 p-2">{{ 'Thank you for contacting us.' }}</span> 
    @endif
    
    <div>
      <button
        wire:click="submit"
        class="bg-red-700 border-red-700 w-full rounded border p-3 text-white transition hover:bg-opacity-90"
      >
        submit
      </button>
    </div>
 
  </div>