<select {{ $attributes->merge(['class'=>'block w-full border-gray-300 focus:border-red-300 focus:ring focus:ring-red-200 focus:ring-opacity-50 rounded-md shadow-sm']) }}>                                                         
    {{$slot}}
</select>            