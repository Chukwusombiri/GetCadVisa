<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 md:px-6 md:py-4 bg-rose-700 rounded-full font-semibold text-xs text-gray-100 uppercase tracking-widest shadow-sm hover:bg-rose-800 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
