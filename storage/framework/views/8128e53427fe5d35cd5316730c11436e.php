<?php if (isset($component)) { $__componentOriginaldbce252eb40169cc4a74f0123aabaf0b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldbce252eb40169cc4a74f0123aabaf0b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::field','data' => ['variant' => 'inline']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'inline']); ?>
    <?php if (isset($component)) { $__componentOriginal9384bd05e996fcc8c16dc84e6bbc1c8f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9384bd05e996fcc8c16dc84e6bbc1c8f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::checkbox.index','data' => ['wire:model.live' => 'terms']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.live' => 'terms']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9384bd05e996fcc8c16dc84e6bbc1c8f)): ?>
<?php $attributes = $__attributesOriginal9384bd05e996fcc8c16dc84e6bbc1c8f; ?>
<?php unset($__attributesOriginal9384bd05e996fcc8c16dc84e6bbc1c8f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9384bd05e996fcc8c16dc84e6bbc1c8f)): ?>
<?php $component = $__componentOriginal9384bd05e996fcc8c16dc84e6bbc1c8f; ?>
<?php unset($__componentOriginal9384bd05e996fcc8c16dc84e6bbc1c8f); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal8a84eac5abb8af1e2274971f8640b38f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a84eac5abb8af1e2274971f8640b38f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::label','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <span class=" text-base-600">He leído y acepto los</span>

        <?php if (isset($component)) { $__componentOriginal1db8c57e729d67f7d4103875cf3230cb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1db8c57e729d67f7d4103875cf3230cb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::modal.trigger','data' => ['name' => 'terms-modal']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::modal.trigger'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'terms-modal']); ?>
            <span class="font-medium text-secondary-600 hover:underline cursor-pointer ml-1">
                Términos y Condiciones
            </span>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1db8c57e729d67f7d4103875cf3230cb)): ?>
<?php $attributes = $__attributesOriginal1db8c57e729d67f7d4103875cf3230cb; ?>
<?php unset($__attributesOriginal1db8c57e729d67f7d4103875cf3230cb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1db8c57e729d67f7d4103875cf3230cb)): ?>
<?php $component = $__componentOriginal1db8c57e729d67f7d4103875cf3230cb; ?>
<?php unset($__componentOriginal1db8c57e729d67f7d4103875cf3230cb); ?>
<?php endif; ?>
        <span class=" text-base-600">Y el</span>
        <?php if (isset($component)) { $__componentOriginal1db8c57e729d67f7d4103875cf3230cb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1db8c57e729d67f7d4103875cf3230cb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::modal.trigger','data' => ['name' => 'contract-modal']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::modal.trigger'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'contract-modal']); ?>
            <span class="font-medium text-secondary-600 hover:underline cursor-pointer ml-1">
                Contrato de Afiliación como Distribuidor Independiente de Matrix,
            </span>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1db8c57e729d67f7d4103875cf3230cb)): ?>
<?php $attributes = $__attributesOriginal1db8c57e729d67f7d4103875cf3230cb; ?>
<?php unset($__attributesOriginal1db8c57e729d67f7d4103875cf3230cb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1db8c57e729d67f7d4103875cf3230cb)): ?>
<?php $component = $__componentOriginal1db8c57e729d67f7d4103875cf3230cb; ?>
<?php unset($__componentOriginal1db8c57e729d67f7d4103875cf3230cb); ?>
<?php endif; ?>
        <span class=" text-base-600">los cuales he leído previamente y entiendo en su totalidad.</span>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a84eac5abb8af1e2274971f8640b38f)): ?>
<?php $attributes = $__attributesOriginal8a84eac5abb8af1e2274971f8640b38f; ?>
<?php unset($__attributesOriginal8a84eac5abb8af1e2274971f8640b38f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a84eac5abb8af1e2274971f8640b38f)): ?>
<?php $component = $__componentOriginal8a84eac5abb8af1e2274971f8640b38f; ?>
<?php unset($__componentOriginal8a84eac5abb8af1e2274971f8640b38f); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal5730b1630871592dc0d77210545c88c1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5730b1630871592dc0d77210545c88c1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::error','data' => ['name' => 'terms']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'terms']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5730b1630871592dc0d77210545c88c1)): ?>
<?php $attributes = $__attributesOriginal5730b1630871592dc0d77210545c88c1; ?>
<?php unset($__attributesOriginal5730b1630871592dc0d77210545c88c1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5730b1630871592dc0d77210545c88c1)): ?>
<?php $component = $__componentOriginal5730b1630871592dc0d77210545c88c1; ?>
<?php unset($__componentOriginal5730b1630871592dc0d77210545c88c1); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldbce252eb40169cc4a74f0123aabaf0b)): ?>
<?php $attributes = $__attributesOriginaldbce252eb40169cc4a74f0123aabaf0b; ?>
<?php unset($__attributesOriginaldbce252eb40169cc4a74f0123aabaf0b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldbce252eb40169cc4a74f0123aabaf0b)): ?>
<?php $component = $__componentOriginaldbce252eb40169cc4a74f0123aabaf0b; ?>
<?php unset($__componentOriginaldbce252eb40169cc4a74f0123aabaf0b); ?>
<?php endif; ?>






<?php if (isset($component)) { $__componentOriginal8cc9d3143946b992b324617832699c5f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8cc9d3143946b992b324617832699c5f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::modal.index','data' => ['name' => 'terms-modal','class' => 'w-full max-w-4xl']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'terms-modal','class' => 'w-full max-w-4xl']); ?>

    
    <div class="border-b border-gray-200 pb-4 mb-4">
        <h1 class="text-xl text-primary font-bold text-center">
            TÉRMINOS Y CONDICIONES GENERALES DE MATRIX.
        </h1>
        <p class="text-center text-sm text-gray-500 mt-1">
            Uso del Sitio Web y Proceso de Registro en Línea
        </p>
    </div>

    
    <div class="p-2 sm:p-6 text-ink text-justify space-y-4 leading-relaxed text-sm max-h-[60vh] overflow-y-auto">

        <h2 class="text-lg font-bold text-gray-800 pt-2 pb-2 border-b border-gray-200">
            1. ACEPTACIÓN E INFORMACIÓN GENERAL
        </h2>
        <p>
            Bienvenido a la plataforma en línea de <b>Matrix.</b> (en adelante, “LA COMPAÑÍA”).
        </p>
        <p>
            Estos Términos y Condiciones Generales (en adelante, "T&C") regulan el acceso, la navegación y el uso del
            sitio web oficial de LA COMPAÑÍA (en adelante, el "Sitio Web"), así como el proceso de registro en línea
            para aspirantes a Distribuidores Independientes.
        </p>
        <p>
            Cualquier persona que acceda, navegue o utilice el Sitio Web (en adelante, el “Usuario”) declara ser mayor
            de edad, tener plena capacidad legal para obligarse y aceptar, sin reserva ni condición alguna, todos y
            cada uno de los presentes T&C. Si el Usuario no está de acuerdo con estos términos, debe abstenerse de
            utilizar el Sitio Web y de iniciar cualquier proceso de registro.
        </p>
        <p>
            Estos T&C se complementan con el <b>Contrato de Vinculación Comercial para Distribuidor Independiente</b>, el cual
            regula específicamente la relación mercantil entre LA COMPAÑÍA y sus Distribuidores Independientes.
        </p>

        <h2 class="text-lg font-bold text-gray-800 pt-6 pb-2 border-b border-gray-200">
            2. OBJETO DEL SITIO WEB
        </h2>
        <p>
            El Sitio Web tiene como finalidad principal:
        </p>
        <ul class="list-disc pl-5 mt-4 space-y-2">
            <li>Presentar información corporativa sobre LA COMPAÑÍA, su modelo de negocio, productos y alianzas.</li>
            <li>Servir como plataforma para el registro en línea de nuevos Distribuidores Independientes.</li>
            <li>Proporcionar un portal de acceso (oficina virtual) para los Distribuidores Independientes activos.</li>
            <li>Facilitar la comunicación entre LA COMPAÑÍA y sus Usuarios y Distribuidores.</li>
        </ul>

        <h2 class="text-lg font-bold text-gray-800 pt-6 pb-2 border-b border-gray-200">
            3. PROCESO DE REGISTRO COMO DISTRIBUIDOR INDEPENDIENTE
        </h2>
        <p>
            <b>3.1. Voluntariedad y Requisitos:</b> El registro como Distribuidor Independiente es un acto completamente
            voluntario. Para poder registrarse, el Usuario debe ser mayor de edad, residente legal en Colombia y
            proporcionar información veraz, precisa, completa y actualizada en el formulario de registro. El Usuario es
            el único responsable de la exactitud de los datos suministrados.
        </p>
        <p>
            <b>3.2. Aceptación Dual:</b> El proceso de registro culmina con la aceptación expresa de dos documentos
            fundamentales: (a) los presentes Términos y Condiciones y (b) el Contrato de Vinculación Comercial. Al
            marcar la casilla de verificación: "☑️ He leído y acepto los Términos y Condiciones y el Contrato de
            Afiliación...", el Usuario manifiesta su consentimiento libre e informado para quedar vinculado por ambos
            documentos.
        </p>
        <p>
            <b>3.3. Perfeccionamiento:</b> La relación como Distribuidor Independiente solo se considerará perfeccionada una
            vez que el registro haya sido completado y aceptado por LA COMPAÑÍA, quien se reserva el derecho de admitir
            o rechazar cualquier solicitud.
        </p>

        <h2 class="text-lg font-bold text-gray-800 pt-6 pb-2 border-b border-gray-200">
            4. OBLIGACIONES DEL USUARIO
        </h2>
        <p>
            El Usuario se compromete a utilizar el Sitio Web de manera diligente, correcta y lícita, y a abstenerse de:
        </p>
        <ul class="list-disc pl-5 mt-4 space-y-2">
            <li>Utilizar el Sitio Web con fines o efectos ilícitos, fraudulentos, o contrarios a la ley y el orden
                público.</li>
            <li>Reproducir, copiar, distribuir o modificar los contenidos sin autorización expresa de LA COMPAÑÍA.</li>
            <li>Introducir virus informáticos o cualquier sistema que pueda dañar los sistemas de LA COMPAÑÍA.</li>
            <li>Intentar acceder a áreas restringidas o cuentas de otros usuarios sin autorización.</li>
        </ul>


        <h2 class="text-lg font-bold text-gray-800 pt-6 pb-2 border-b border-gray-200">
            5. PROPIEDAD INTELECTUAL E INDUSTRIAL
        </h2>
        <p>
            Todos los derechos de propiedad intelectual sobre el Sitio Web y sus contenidos, incluyendo textos,
            gráficos, logotipos, marcas y software (el "Contenido"), son propiedad exclusiva de LA COMPAÑÍA o de
            terceros que han autorizado su uso. El acceso al Sitio Web no confiere al Usuario ningún derecho sobre dicho
            Contenido. Queda estrictamente prohibida su explotación sin autorización previa y por escrito.
        </p>

        <h2 class="text-lg font-bold text-gray-800 pt-6 pb-2 border-b border-gray-200">
            6. EXCLUSIÓN DE RESPONSABILIDAD
        </h2>
        <p>
            <b>6.1. Disponibilidad del Sitio Web:</b> LA COMPAÑÍA no garantiza la disponibilidad ininterrumpida del
            Sitio Web y no asume responsabilidad por daños derivados de su falta de disponibilidad o continuidad.
        </p>
        <p>
            <b>6.2. Información de Terceros:</b> El Sitio Web puede contener enlaces a sitios de terceros (ej. comercios
            aliados). LA COMPAÑÍA no se hace responsable por el contenido, políticas o prácticas de dichos sitios.
        </p>
        <p>
            <b>6.3. Declaraciones de Ingresos:</b> LA COMPAÑÍA no garantiza ningún nivel de ingresos. Cualquier ejemplo
            de ganancias es solo para fines ilustrativos y no constituye una promesa. El éxito depende del esfuerzo y
            habilidades personales del Distribuidor Independiente.
        </p>

        <h2 class="text-lg font-bold text-gray-800 pt-6 pb-2 border-b border-gray-200">
            7. POLÍTICA DE PRIVACIDAD Y TRATAMIENTO DE DATOS
        </h2>
        <p>
            Al aceptar estos T&C, el Usuario autoriza el tratamiento de sus datos personales conforme a la <b>Política
                de Tratamiento de Datos Personales</b> de LA COMPAÑÍA, en armonía con la Ley 1581 de 2012. Los detalles
            sobre finalidades, derechos y canales de contacto se encuentran en la <b>CLÁUSULA DÉCIMA del Contrato de
                Vinculación Comercial</b>, que forma parte integral de este acuerdo.
        </p>

        <h2 class="text-lg font-bold text-gray-800 pt-6 pb-2 border-b border-gray-200">
            8. MODIFICACIONES
        </h2>
        <p>
            LA COMPAÑÍA se reserva el derecho a modificar en cualquier momento los presentes T&C. Es responsabilidad
            del Usuario revisarlos periódicamente. El uso continuado del Sitio Web tras una modificación constituirá la
            aceptación de los nuevos términos.
        </p>

        <h2 class="text-lg font-bold text-gray-800 pt-6 pb-2 border-b border-gray-200">
            9. LEY APLICABLE Y JURISDICCIÓN
        </h2>
        <p>
            Estos T&C se rigen por las leyes de la República de Colombia. Para cualquier controversia, las partes se
            someten a la jurisdicción de los jueces y tribunales de la ciudad de Cali, Colombia.
        </p>

        <h2 class="text-lg font-bold text-gray-800 pt-6 pb-2 border-b border-gray-200">
            10. CONTACTO
        </h2>
        <p>
            Para cualquier duda o consulta sobre estos T&C, el Usuario puede contactar a LA COMPAÑÍA a través de:
            Correo Electrónico: info@matirx.com | Teléfono: +57xxxxxx
        </p>

        <p class="pt-8 text-center text-xs text-gray-500">
            Última actualización: Julio 2024
        </p>
    </div>

    
    <div class="flex pt-4">
        <?php if (isset($component)) { $__componentOriginal4a4f7aa062a095c651c2f80bb685a42a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4a4f7aa062a095c651c2f80bb685a42a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::spacer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::spacer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4a4f7aa062a095c651c2f80bb685a42a)): ?>
<?php $attributes = $__attributesOriginal4a4f7aa062a095c651c2f80bb685a42a; ?>
<?php unset($__attributesOriginal4a4f7aa062a095c651c2f80bb685a42a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4a4f7aa062a095c651c2f80bb685a42a)): ?>
<?php $component = $__componentOriginal4a4f7aa062a095c651c2f80bb685a42a; ?>
<?php unset($__componentOriginal4a4f7aa062a095c651c2f80bb685a42a); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['xOn:click' => '$flux.modal(\'terms-modal\').close()','variant' => 'primary']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-on:click' => '$flux.modal(\'terms-modal\').close()','variant' => 'primary']); ?>Entendido, Cerrar
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $attributes = $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $component = $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8cc9d3143946b992b324617832699c5f)): ?>
<?php $attributes = $__attributesOriginal8cc9d3143946b992b324617832699c5f; ?>
<?php unset($__attributesOriginal8cc9d3143946b992b324617832699c5f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8cc9d3143946b992b324617832699c5f)): ?>
<?php $component = $__componentOriginal8cc9d3143946b992b324617832699c5f; ?>
<?php unset($__componentOriginal8cc9d3143946b992b324617832699c5f); ?>
<?php endif; ?>


<?php if (isset($component)) { $__componentOriginal8cc9d3143946b992b324617832699c5f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8cc9d3143946b992b324617832699c5f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::modal.index','data' => ['name' => 'contract-modal','class' => 'w-full max-w-4xl']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'contract-modal','class' => 'w-full max-w-4xl']); ?>

    
    <div class="border-b border-gray-200 pb-4 mb-4">
        <h1 class="text-xl text-primary font-bold text-center">
            CONTRATO DE VINCULACIÓN COMERCIAL PARA DISTRIBUIDOR INDEPENDIENTE
        </h1>
        <p class="text-center text-sm text-gray-500 mt-1">
            Entre Matrix. y EL DISTRIBUIDOR INDEPENDIENTE
        </p>
    </div>

    
    

    
    <div class="flex pt-4">
        <?php if (isset($component)) { $__componentOriginal4a4f7aa062a095c651c2f80bb685a42a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4a4f7aa062a095c651c2f80bb685a42a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::spacer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::spacer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4a4f7aa062a095c651c2f80bb685a42a)): ?>
<?php $attributes = $__attributesOriginal4a4f7aa062a095c651c2f80bb685a42a; ?>
<?php unset($__attributesOriginal4a4f7aa062a095c651c2f80bb685a42a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4a4f7aa062a095c651c2f80bb685a42a)): ?>
<?php $component = $__componentOriginal4a4f7aa062a095c651c2f80bb685a42a; ?>
<?php unset($__componentOriginal4a4f7aa062a095c651c2f80bb685a42a); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['xOn:click' => '$flux.modal(\'contract-modal\').close()','variant' => 'primary']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-on:click' => '$flux.modal(\'contract-modal\').close()','variant' => 'primary']); ?>Entendido, Cerrar
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $attributes = $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $component = $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8cc9d3143946b992b324617832699c5f)): ?>
<?php $attributes = $__attributesOriginal8cc9d3143946b992b324617832699c5f; ?>
<?php unset($__attributesOriginal8cc9d3143946b992b324617832699c5f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8cc9d3143946b992b324617832699c5f)): ?>
<?php $component = $__componentOriginal8cc9d3143946b992b324617832699c5f; ?>
<?php unset($__componentOriginal8cc9d3143946b992b324617832699c5f); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Fredy\Herd\matrix\resources\views/terms-And-Conditions.blade.php ENDPATH**/ ?>