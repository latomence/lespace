<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-[#FF6363] dark:bg-[#FF6363] border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-[#FF6363] dark:hover:bg-[#FF6363] focus:bg-[#FF6363] dark:focus:bg-white active:bg-[#FF6363] dark:active:bg-[#FF6363] focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
