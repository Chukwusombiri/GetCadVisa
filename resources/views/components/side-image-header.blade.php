@props([
    'source',
    'buttonText',
    'url',
])
<div {{$attributes->merge(['class'=>'min-h-screen md:h-screen bg-gray-50 py-16'])}}>
    <div class="grid grid-cols-2 items-center gap-10 px-4 md:px-6 lg:px-10 max-w-7xl mx-auto">
        <div class="col-span-2 lg:col-span-1 flex flex-col">
            <h1 class="hedvig-bold text-gray-800 text-4xl md:text-5xl lg:text-6xl mb-4 md:mb-6 w-full lg:max-w-lg">
                {{$maintitle}}
            </h1>
            <p class="futura-medium text-gray-600 text-lg">{{$subtitle}}</p>
            <div class="w-full mt-6 md:mt-8">
                <x-link-one href="{{$url}}">{{$buttonText}}</x-link-one>
            </div>
        </div>
        <div class="col-span-2 lg:col-span-1 flex">
            <img src="{{$source}}" alt="header image" class="w-full h-96 rounded-xl">
        </div>
    </div>
</div> 