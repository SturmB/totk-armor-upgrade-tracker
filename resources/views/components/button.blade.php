<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-totk-green-500 dark:bg-totk-green-400 border border-transparent rounded-md font-semibold text-xs text-white dark:text-totk-green-900 uppercase tracking-widest hover:bg-totk-green-400 dark:hover:bg-totk-green-300 active:bg-totk-green-600 dark:active:bg-totk-green-500 focus:outline-none focus:border-totk-green-600 dark:focus:border-totk-green-600 focus:ring focus:ring-totk-green-200 dark:focus:ring-totk-green-700 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
