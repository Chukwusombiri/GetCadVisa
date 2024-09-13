@props(['imageUrl','nationality'])
<div
    class="aspect-auto p-8 border border-gray-100 rounded-3xl bg-white shadow-2xl shadow-gray-600/10">    
    <div class="flex gap-4">
        <img class="w-12 h-12 rounded-full" src="{{$imageUrl}}" alt="user avatar" width="400" height="400" loading="lazy">
        <div>
            <h6 class="text-lg font-medium text-gray-700 dark:text-white">{{$client}}</h6>
            <p class="text-sm text-gray-500 dark:text-gray-300">{{$nationality}}</p>
        </div>
    </div>
    <p class="mt-8">
        {{$comment}}
    </p>
</div>