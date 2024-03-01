@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-blue-500 dark:text-white-300']) }}>
    {{ $value ?? $slot }}
</label>

