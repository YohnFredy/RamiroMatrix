<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'name' => 'name',
    'label' => 'name',
    'options' => [],
]));

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

foreach (array_filter(([
    'name' => 'name',
    'label' => 'name',
    'options' => [],
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div class="mb-5">
    <!--[if BLOCK]><![endif]--><?php if($label ?? false): ?>
        <label class="block text-base-900"><?php echo e($label); ?></label>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    <div class="flex items-center pt-3 space-x-4">
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <label class="flex items-center">
                <input type="radio" name="<?php echo e($name); ?>" value="<?php echo e($option['value']); ?>"
                       <?php echo e($attributes->merge(['class' => 'w-4 h-4 bg-gray-100 border-gray-300'])); ?>

                       <?php if(old($name) == $option['value']): echo 'checked'; endif; ?>>
                <span class="ms-2 text-sm font-medium text-base-700 "><?php echo e($option['label']); ?></span>
            </label>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
    </div>
</div><?php /**PATH C:\Users\Fredy\Herd\matrix\resources\views/components/radio.blade.php ENDPATH**/ ?>