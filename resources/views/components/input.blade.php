@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'dark:bg-gray-900 dark:text-gray-50 border-gray-300 dark:border-gray-700 focus:border-totk-green-300 dark:focus:border-totk-green-700 focus:ring focus:ring-totk-green-200 dark:focus:ring-totk-green-800 focus:ring-opacity-50 dark:focus:ring-offset-gray-950 rounded-md shadow-sm']) !!}>
