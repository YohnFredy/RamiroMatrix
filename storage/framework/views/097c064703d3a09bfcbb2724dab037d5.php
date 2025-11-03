<div class="max-w-4xl mx-auto py-10">

    
    <h1 class="text-2xl font-bold mb-6">
        <?php echo e($video && $video->exists ? 'Editar Video' : 'Crear Nuevo Video'); ?>

    </h1>


    <form wire:submit.prevent="<?php echo e($video && $video->exists ? 'update' : 'save'); ?>" class="space-y-6">

        
        <div>
            <label class="block text-sm font-medium text-gray-700">Nombre del video</label>
            <input type="text" wire:model="name"
                class="w-full border rounded-lg p-2 focus:ring focus:ring-blue-400">
            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-700 text-sm"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
        </div>

        
        <div>
            <label class="block text-sm font-medium text-gray-700">Descripción corta</label>
            <textarea wire:model="short_description"
                class="w-full border rounded-lg p-2 h-32 focus:ring focus:ring-blue-400"></textarea>
            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['short_description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-700 text-sm"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
        </div>

        
        <div>
            <label class="block text-sm font-medium text-gray-700">URL de YouTube</label>
            <input type="text" wire:model="youtube_url"
                class="w-full border rounded-lg p-2 focus:ring focus:ring-blue-400">
            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['youtube_url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-700 text-sm"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
        </div>

        
       

        <div class="pt-4">
            <button type="submit"
                class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 shadow">
                <?php echo e($video && $video->exists ? 'Actualizar Video' : 'Guardar Video'); ?>

            </button>
        </div>
    </form>

</div>

<?php /**PATH C:\Users\Fredy\Herd\matrix\resources\views/livewire/admin/videos/video-form.blade.php ENDPATH**/ ?>