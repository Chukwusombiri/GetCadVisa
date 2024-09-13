<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100" id="auth-body">
    <div id="auth-logo">
        {{ $logo }}
    </div>

    <div id="auth-form" class="w-full sm:max-w-md mt-6 px-6 py-4 shadow-md overflow-hidden sm:rounded-lg"
    style="background-color: rgba(255, 255, 255, 0.7) !important;">
        {{ $slot }}
    </div>
</div>
