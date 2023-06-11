<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-totk-green-100 dark:bg-totk-green-900 border border-gray-300 dark:border-gray-700 rounded-md font-semibold text-xs text-totk-green-600 dark:text-totk-green-400 uppercase tracking-widest shadow-sm hover:text-totk-green-500 dark:hover:text-totk-green-200 focus:outline-none focus:border-totk-green-300 dark:focus:border-totk-green-700 focus:ring focus:ring-totk-green-200 dark:focus:ring-totk-green-800 active:text-totk-green-700 dark:active:text-totk-green-500 active:bg-totk-green-50 dark:active:bg-totk-green-950 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
