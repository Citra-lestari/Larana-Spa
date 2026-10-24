<select name="{{ $name }}" {{ $attributes->merge(['class' => 'select']) }}>
    {{ $slot }}
</select>
