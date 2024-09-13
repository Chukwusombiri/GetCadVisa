<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('admin.dashboard')}}" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <div class="navbar-nav ml-auto flex items-center">
      {{-- Notification DROPDOWN --}}
      <div x-data="{open:false}">        
        <div class="relative">
          <x-dropdown align="right" width='48'>
              <x-slot name="trigger">                  
                <span class="inline-flex">
                  <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">                    
                    @if (count(auth()->user()->unreadNotifications)>0)
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bell-ringing-filled w-8 h-8" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#334155" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M17.451 2.344a1 1 0 0 1 1.41 -.099a12.05 12.05 0 0 1 3.048 4.064a1 1 0 1 1 -1.818 .836a10.05 10.05 0 0 0 -2.54 -3.39a1 1 0 0 1 -.1 -1.41z" stroke-width="0" fill="currentColor" />
                        <path d="M5.136 2.245a1 1 0 0 1 1.312 1.51a10.05 10.05 0 0 0 -2.54 3.39a1 1 0 1 1 -1.817 -.835a12.05 12.05 0 0 1 3.045 -4.065z" stroke-width="0" fill="currentColor" />
                        <path d="M14.235 19c.865 0 1.322 1.024 .745 1.668a3.992 3.992 0 0 1 -2.98 1.332a3.992 3.992 0 0 1 -2.98 -1.332c-.552 -.616 -.158 -1.579 .634 -1.661l.11 -.006h4.471z" stroke-width="0" fill="currentColor" />
                        <path d="M12 2c1.358 0 2.506 .903 2.875 2.141l.046 .171l.008 .043a8.013 8.013 0 0 1 4.024 6.069l.028 .287l.019 .289v2.931l.021 .136a3 3 0 0 0 1.143 1.847l.167 .117l.162 .099c.86 .487 .56 1.766 -.377 1.864l-.116 .006h-16c-1.028 0 -1.387 -1.364 -.493 -1.87a3 3 0 0 0 1.472 -2.063l.021 -.143l.001 -2.97a8 8 0 0 1 3.821 -6.454l.248 -.146l.01 -.043a3.003 3.003 0 0 1 2.562 -2.29l.182 -.017l.176 -.004z" stroke-width="0" fill="currentColor" />
                      </svg>
                      <span class="self-start bg-red-500 text-white rounded-full w-2 h-2"></span> 
                    @else
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bell-filled w-8 h-8" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#334155" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                      <path d="M14.235 19c.865 0 1.322 1.024 .745 1.668a3.992 3.992 0 0 1 -2.98 1.332a3.992 3.992 0 0 1 -2.98 -1.332c-.552 -.616 -.158 -1.579 .634 -1.661l.11 -.006h4.471z" stroke-width="0" fill="currentColor" />
                      <path d="M12 2c1.358 0 2.506 .903 2.875 2.141l.046 .171l.008 .043a8.013 8.013 0 0 1 4.024 6.069l.028 .287l.019 .289v2.931l.021 .136a3 3 0 0 0 1.143 1.847l.167 .117l.162 .099c.86 .487 .56 1.766 -.377 1.864l-.116 .006h-16c-1.028 0 -1.387 -1.364 -.493 -1.87a3 3 0 0 0 1.472 -2.063l.021 -.143l.001 -2.97a8 8 0 0 1 3.821 -6.454l.248 -.146l.01 -.043a3.003 3.003 0 0 1 2.562 -2.29l.182 -.017l.176 -.004z" stroke-width="0" fill="currentColor" />
                    </svg>        
                    @endif
                </button>                           
                </span>
              </x-slot>

              <x-slot name="content">
                  <!-- Account Management -->                  
                  @if (count(auth()->user()->unreadNotifications)>0)
                      <div class="block px-4 py-2 text-xs text-gray-400">
                        {{count(auth()->user()->unreadNotifications)}} New Deposit request
                      </div>                                  
                      @foreach (auth()->user()->unreadNotifications as $notification)
                          <x-dropdown-link class="flex justify-between text-gray-700 hover:text-opacity-50"
                            href="{{route('admin.notification',[$notification->id])}}" style="padding: 5px 5px !important">
                            <span class="flex flex-col">
                              {{$notification->data['action']}}
                              <span class="mt-2 text-gray-500">
                                {{$notification->created_at->diffForHumans()}}
                              </span>
                            </span>
                            <span class="flex items-center">
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-check" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#be123c" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                <path d="M9 12l2 2l4 -4" />
                              </svg>
                              <span class="text-rose-700">
                                Mark read
                              </span>
                            </span>
                          </x-dropdown-link>                   
                      @endforeach                                                             
                  @else
                  <div class="block px-4 py-2 text-xs text-gray-400">
                    No notifications
                  </div>                            
                  @endif                                    
              </x-slot>
            </x-dropdown>
        </div>  
      </div>
      
      <!-- Logout Dropdown Menu -->
      <div x-data="{open:false}">        
        <div class="relative">
          <x-dropdown align="right" width="48">
              <x-slot name="trigger">                  
                  <span class="inline-flex rounded-md">
                      <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                          @switch(auth()->user()->admin_role)
                              @case('super_admin')
                                  {{__('Super admin')}}
                                  @break
                              @case('operation_manager')
                                  {{__('Operation manager')}}
                                  @break
                              @case('moderator')
                                  {{__('Moderator')}}
                                  @break
                              @case('content_manager')
                                  {{__('Content manager')}}
                                  @break
                              @case('support_assistance')
                                  {{__('Support assistance')}}
                                  @break
                              @default
                                  {{__('Super admin')}}
                          @endswitch

                          <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                          </svg>
                      </button>
                  </span>
              </x-slot>

              <x-slot name="content">
                  <!-- Account Management -->
                  <div class="block px-4 py-2 text-xs text-gray-400">
                      {{ __('Manage Account') }}
                  </div>                                   
                  <x-dropdown-link href="{{ route('admin.resetpwd') }}" class="flex">
                    <span class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />
                    </svg>
                    </span>  
                    {{ __('Change Password') }}
                  </x-dropdown-link>

                  <div class="border-t border-gray-200"></div>

                  <!-- Authentication -->
                  <form method="POST" action="{{ route('admin.logout') }}" x-data>
                      @csrf

                      <x-dropdown-link href="{{ route('admin.logout') }}"
                               @click.prevent="$root.submit();" class="flex">
                               <span class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                              </svg>
                              </span>
                          <span>{{ __('Log Out') }}</span>
                      </x-dropdown-link>
                  </form>
              </x-slot>
            </x-dropdown>
        </div>  
      </div>
    </div>
  </nav>
  <!-- /.navbar -->
