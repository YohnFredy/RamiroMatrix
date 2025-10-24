<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'for' => '',
    'label' => '',
    'options' => [], // Se mantiene como un array o colección
    'placeholder' => 'Seleccione una opción...',
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
    'for' => '',
    'label' => '',
    'options' => [], // Se mantiene como un array o colección
    'placeholder' => 'Seleccione una opción...',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div class="relative mb-5">
    <!--[if BLOCK]><![endif]--><?php if($label): ?>
        <label for="<?php echo e($for); ?>" class="block mb-2 text-sm font-medium text-base-900"><?php echo e($label); ?></label>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    <select id="<?php echo e($for); ?>" name="<?php echo e($for); ?>"
        <?php echo e($attributes->merge([
            'class' => 'block w-full bg-base-50 appearance-none border border-primary-600 text-base-900 text-sm rounded-lg 
                                    focus:outline-1 focus:outline-base-700 focus:bg-white p-2.5 cursor-pointer',
        ])); ?>>
        <option value=""><?php echo e($placeholder); ?></option>

        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div wire:key="<?php echo e($option['id']); ?>">
                <option value="<?php echo e($option['id']); ?>" <?php if(old($for) == $option['id']): echo 'selected'; endif; ?>>
                    <?php echo e($option['name']); ?>

                </option>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
    </select>

    <div class="absolute inset-y-0 right-5 top-8 flex items-center pointer-events-none">
        <svg class="w-4 h-4 text-primary-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd" />
        </svg>
    </div>

    <!--[if BLOCK]><![endif]--><?php $__errorArgs = [$for];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="text-sm text-accent-3"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH C:\Users\Fredy\Herd\matrix\resources\views/components/select.blade.php ENDPATH**/ ?>