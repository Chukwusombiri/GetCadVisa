<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 md:px-6 md:py-4 bg-gray-700 border-2 border-gray-700 hover:bg-gray-500 rounded-full font-semibold text-xs text-gray-100 uppercase tracking-widest shadow-sm focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
