<div class="w-full max-w-full px-3 md:w-7/12 mx-auto pb-10">
    <div
        class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
        <div wire:loading.delay.long wire:target="sendEmail">
            <div class="absolute top-1/2 left-1/2 h-24 w-24 flex" style="transform: translate(-50%, -50%);">
                <div class="relative rounded-full w-full h-full border-t-8 border-b-8 border-rose-700 animate-spin"></div>
            </div>
        </div>
        {{-- header --}}        
        <div class="w-full p-6 pb-0 mb-0 border-b-0 border-b border-gray-500">
            <h6 class="text-xl font-semibold pb-2">Prepare email to be sent</h6>
        </div>
        {{-- session data --}}
        {{-- <x-admin-alert /> --}}
        {{-- main --}}
        <div class="w-full mt-4 px-4 md:px-6">
            <x-label for="recipients" value="{{ __('Recipients') }}" />
            <x-input-error for="recipients" class="mt-1" />
            <x-input-error for="recipients.*" class="mt-1" />
            @if (count($recipients) > 0)
                <div class="flex flex-wrap mt-2">
                    @if ($isBulk==='no')
                        @foreach ($recipients as $r => $recipient)
                            <div class="inline-flex items-center overflow-hidden rounded-md border bg-white mr-1 mb-2">
                                <span
                                    class="border-e px-4 py-2 text-sm/none text-gray-600 hover:bg-gray-50 hover:text-gray-700">
                                    {{ $recipient }}
                                </span>

                                <button wire:click="removeRecipient({{ $r }})"
                                    class="h-full p-2 text-gray-600 hover:bg-gray-50 hover:text-gray-700">
                                    <span class="sr-only">remove recipient</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        @endforeach
                    @elseif($isBulk==='yes')
                        <span class="text-md text-semibold">This email will be sent to every Email address in the database records...</span>
                    @endif
                </div>
            @endif
        </div>
        @if($isBulk==='no')
        <div class="w-full max-w-full px-4 md:px-6 shrink-0 mt-4">
            <x-label for="newRecipient" value="{{ __('Add new recipient') }}" />
            <div class="w-full relative mt-2">
                <div class="flex flex-nowrap">
                    <input type="text" id="newRecipient" wire:model="newRecipient" wire:focus="handleFocus"
                        placeholder="Enter recipient email (optional)"
                        class="w-7/12 px-4 py-2 rounded-l-lg focus:shadow-primary-outline text-sm leading-5.6 ease appearance-none border-solid border-gray-300 bg-white bg-clip-padding font-normal text-gray-700 outline-none transition-all focus:border-blue-500 focus:ring-0 focus:outline-none">
                    <button type="button" wire:click='addRecipient'
                        class="px-7 py-2 rounded-r-lg font-bold leading-normal text-center text-white align-middle transition-all ease-in border-0 cursor-pointer text-xs bg-gray-700 hover:shadow-xs active:opacity-85">
                        Add
                    </button>
                </div>
                @if (count($allUsers) > 0)
                    <div id="allUsers"
                        class="absolute top-full z-50 bg-white w-full border border-gray-300 mt-1 rounded-xl shadow-md">
                        @foreach ($allUsers as $n => $nuser)
                            <button type="button" wire:click="setUser('{{ $nuser->email }}')"
                                class="block w-full py-1 px-4 text-start outline-none border-none hover:bg-gray-100 @if ($n == 0) {{ 'rounded-t-xl' }} @endif @if ($n === count($allUsers) - 1) {{ 'rounded-b-xl' }} @endif">{{ $nuser->username }}
                                <span class="ml-2 futura-light">{{ $nuser->email }}</span></button>
                        @endforeach
                    </div>
                @else
                    <div id="allUsers" class="hidden"></div>
                @endif
            </div>
            <x-action-message on="addedRecipient">Added new recipient</x-action-message>
            <x-input-error for="newRecipient" class="mt-1" />
        </div>
        @endif
        <div class="w-full max-w-full px-4 md:px-6 shrink-0 mt-4">
            <x-label for="subject" value="{{__('Subject')}}"/>
            <x-input type="text" wire:model="subject" placeholder="Enter email subject..." class="block w-full mt-2" />
            <x-input-error for="subject" class="mt-1"/>
        </div>
        <div class="w-full max-w-full px-4 md:px-6 shrink-0 mt-4">           
            <x-label for="body" value="{{__('Email message')}}"/>
            <textarea wire:model="body" id="body"
            class="p-4 mt-2 w-full rounded-lg border-gray-200 align-top shadow-sm sm:text-sm"
            rows="4" placeholder="Enter email message..."></textarea>
            <x-input-error for="body" class="mt-1"/>
        </div>
        <div    x-data="{ isUploading: false, progress: 0 }"
                x-on:livewire-upload-start="isUploading = true"
                x-on:livewire-upload-finish="isUploading = false"
                x-on:livewire-upload-error="isUploading = false"
                x-on:livewire-upload-progress="progress = $event.detail.progress" class="w-full max-w-full px-4 md:px-6 shrink-0 mt-4">       
            <x-label for="attachees" class="text-rose-700 underline cursor-pointer" value="{{__('Click to upload file if any')}}"/>  
            <input type="file" wire:model="attachees" id="attachees" class="hidden" multiple />
            <x-input-error for="attachees.*" class="mt-1"/>
            <div x-show="isUploading">
                <progress max="100" x-bind:value="progress"></progress>
            </div>
            @if (count($attachees)>0)
                <div class="futura-medium text-md mb-2">Upload preview:</div>
                <div class="flex gap-4 flex-wrap py-2">
                    @foreach ($attachees as $it => $item)
                        <div class="flex items-start">
                            <img src="{{$item->temporaryUrl()}}" alt="File {{$it+1}} preview" class="rounded-md w-20 h-20 mr-2">
                            <button class="h-6 w-6 rounded-full bg-gray-200 bg-opacity-50 hover:bg-opacity-80 outline-none p-[4px] inline-flex justify-center items-center" wire:click="removeFile({{$it}})">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x w-4 h-4" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="#be123c" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M18 6l-12 12" />
                                    <path d="M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
        <div class="w-full max-w-full px-4 md:px-6 shrink-0 flex justify-end my-6">
            <button wire:click="sendEmail" wire:loading.attr="disabled" type="button" class="py-[12px] px-6 bg-rose-700 hover:bg-rose-800 text-xs text-gray-100 font-semibold uppercase transition duration-300 rounded-3xl tracking-wider disabled:cursor-not-allowed disabled:bg-gray-800">send email</button>
        </div>
    </div>
</div>
