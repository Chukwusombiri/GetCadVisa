<div class="py-16 md:py-24 bg-gray-50">
    <div class="px-4 sm:px-6 md:px-8 lg:px-10 mx-auto max-w-7xl">
        <div class="flex flex-col lg:items-center justify-center">
            <h2 class="hedvig-bold text-gray-800 text-4xl md:text-5xl lg:text-6xl tracking-wide mb-8 lg:text-center">
                {{$maintitle}}
            </h2>
            @if (isset($subtitle))
                <p class="text-gray-700 text-md md:text-2xl lg:text-center max-w-2xl">
                    {{$subtitle}}
                </p>
            @endif           
        </div>
    </div>
</div>