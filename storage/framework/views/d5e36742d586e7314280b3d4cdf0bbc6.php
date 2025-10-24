<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['label' => '', 'for' => '', 'disabled' => false]));

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

foreach (array_filter((['label' => '', 'for' => '', 'disabled' => false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>



<div class="mb-5">
    <label for="<?php echo e($for); ?>" class="block mb-2 text-sm font-medium text-base-900">
        <?php echo e($label); ?>

    </label>


    <p class=" text-primary-700"></p>
    <input 
        <?php echo e($disabled ? 'disabled' : ''); ?> 
        <?php echo $attributes->merge([
            'class' => 'block w-full border text-sm rounded-lg p-2.5 focus:outline-1 ' . 
                        ($disabled 
                            ? 'bg-base-50 text-base-600 border-base-50 cursor-not-allowed' 
                            : 'bg-base-50 border-primary-600 text-base-700 focus:outline-primary-600 focus:bg-white')
        ]); ?>

    >

    <!--[if BLOCK]><![endif]--><?php $__errorArgs = [$for];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p <?php echo e($attributes->merge(['class' => 'text-sm text-accent-3'])); ?>><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
</div>

<?php /**PATH C:\Users\Fredy\Herd\matrix\resources\views/components/input.blade.php ENDPATH**/ ?>