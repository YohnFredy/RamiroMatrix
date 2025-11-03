@props(['color' => 'primary'])

@php
    // Definimos las clases de diseño base para el botón
    $baseClasses =
        'text-center px-4 py-3  rounded-md font-semibold text-xs uppercase tracking-widest   disabled:opacity-70 focus:outline-none focus:ring-2 focus:ring-offset-2 transition ease-in-out duration-150';

    // Definimos las clases de color y efecto hover basadas en el color proporcionado
    $colorClasses = match ($color) {
        'primary'
            => 'bg-primary-700 hover:bg-secondary-600 text-neutral-100 hover:text-white  focus:ring-secondary-600',
        'white'
            => 'bg-neutral-200 hover:bg-white text-primary-700 hover:text-secondary-600  focus:ring-neutral-200 focus:ring-offset-secondary-600',
    };
@endphp

<button {{ $attributes->merge(['type' => 'button', 'class' => "$baseClasses $colorClasses"]) }}>
    {{ $slot }}
</button>
