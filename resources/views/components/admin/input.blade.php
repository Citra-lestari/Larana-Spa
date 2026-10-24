<input type="{{ $type ?? 'text' }}" placeholder="{{ $placeholder }}" name="{{ $name }}"
    {{ $attributes->merge(['class' => 'input']) }}>
