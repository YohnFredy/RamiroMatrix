<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['color' => 'primary']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['color' => 'primary']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php
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
?>

<button <?php echo e($attributes->merge(['type' => 'button', 'class' => "$baseClasses $colorClasses"])); ?>>
    <?php echo e($slot); ?>

</button>
<?php /**PATH C:\Users\Fredy\Herd\matrix\resources\views/components/button-dynamic.blade.php ENDPATH**/ ?>