<x-layouts.app title="Matrix">
    <!-- VIDEO EXPLICATIVO -->

    <section
        class="w-full rounded-2xl bg-gradient-to-b from-base-900 via-base-800 to-base-900 pt-6 sm:py-16 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
            <!-- Encabezado -->
            <header class=" mb-6 sm:mb-10 px-4">
                <h1 class="text-2xl sm:text-4xl md:text-5xl font-extrabold text-white mb-3 leading-tight">
                    Bienvenidos a un Futuro de Ayuda Mutua
                </h1>
                <p class="text-base sm:text-lg text-slate-300">
                    Cuidado del Medio Ambiente y Cuidado de la Salud
                </p>
            </header>

            <!-- Contenedor del video -->
            <div class="relative mx-auto max-w-3xl rounded-2xl overflow-hidden shadow-2xl bg-black">
                <div class="aspect-video">
                    <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Sistema Matrix Colombia"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen class="w-full h-full">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN: SISTEMA MATRIX COLOMBIA -->
    <section class="w-full bg-white py-8 sm:py-20 px-4 sm:px-6 lg:px-8 overflow-x-hidden">
        <div class="max-w-6xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

                <!-- Texto descriptivo -->
                <div class="space-y-6">
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-base-900 leading-tight">
                        Sistema Matrix Colombia
                    </h2>
                    <p class="text-base sm:text-lg text-base-700 leading-relaxed">
                        Es un sistema cuyo objeto primordial es crear programas, ideas, inventos y estrategias que
                        busquen el
                        <span class="font-semibold text-primary-600">cuidado de la salud</span> y el
                        <span class="font-semibold text-primary-600">cuidado del medio ambiente</span>.
                    </p>
                    <p class="text-base sm:text-lg text-base-700 leading-relaxed">
                        Los bienes y productos que se generen serán para compensar a todos los registrados patrocinados
                        con
                        <span class="font-semibold">bonos de descuento</span> sorteados en diferentes niveles
                        dependiendo de su grado de compromiso.
                    </p>

                    <!-- Botones -->
                    <div class="flex flex-col sm:flex-row gap-4 pt-2">
                        <a href="{{ route('register', 'master')}}"
                            class="inline-block text-center bg-primary-600 hover:bg-primary-700 text-white font-semibold py-3 px-8 rounded-xl transition duration-300 shadow-lg">
                            Registrarse Ahora
                        </a>
                        <a href="#beneficios"
                            class="inline-block text-center border-2 border-primary-600 text-primary-600 hover:bg-primary-50 font-semibold py-3 px-8 rounded-xl transition duration-300">
                            Ver Beneficios
                        </a>
                    </div>
                </div>

                <!-- Beneficios -->
                <div class="bg-gradient-to-br from-primary-50 to-secondary-50 rounded-2xl p-6 sm:p-8 shadow-xl">
                    <div class="space-y-6">
                        <!-- Beneficio 1 -->
                        <div class="flex items-start gap-4">
                            <div
                                class="flex-shrink-0 w-12 h-12 bg-primary-600 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg sm:text-xl font-bold text-base-900">Descuentos Exclusivos</h3>
                                <p class="text-base-700 text-sm sm:text-base">Acceso a descuentos del 5% hasta 100%</p>
                            </div>
                        </div>

                        <!-- Beneficio 2 -->
                        <div class="flex items-start gap-4">
                            <div
                                class="flex-shrink-0 w-12 h-12 bg-primary-600 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg sm:text-xl font-bold text-base-900">Ganancias Constantes</h3>
                                <p class="text-base-700 text-sm sm:text-base">Sorteos diarios, semanales y mensuales
                                </p>
                            </div>
                        </div>

                        <!-- Beneficio 3 -->
                        <div class="flex items-start gap-4">
                            <div
                                class="flex-shrink-0 w-12 h-12 bg-primary-600 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg sm:text-xl font-bold text-base-900">Impacto Ambiental</h3>
                                <p class="text-base-700 text-sm sm:text-base">Contribuye al cuidado del planeta</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BENEFICIOS -->
    <section id="beneficios" class="w-full bg-base-50 py-8 px-4 sm:px-6 lg:px-8 overflow-x-hidden">
        <div class="max-w-6xl mx-auto">
            <!-- Encabezado -->
            <header class="text-center mb-12">
                <h2 class="text-3xl sm:text-4xl font-extrabold text-base-900 mb-4">
                    Beneficios por ser Registrado Patrocinado
                </h2>
                <p class="text-base sm:text-lg text-base-600">
                    Accede a una amplia gama de ventajas exclusivas
                </p>
            </header>

            <!-- Contenedor de Beneficios -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Tarjeta -->
                <div
                    class="bg-white rounded-2xl p-8 shadow-md hover:shadow-2xl transition-all duration-300 border-l-4 border-primary-600 hover:-translate-y-1">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-primary-100 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-primary-600" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold text-base-900">Descuentos en Socios Aliados</h3>
                    </div>
                    <p class="text-base-700 text-sm sm:text-base leading-relaxed">
                        Acceso a descuentos del 5%, 10%, 15% y más en productos y servicios de nuestros socios aliados.
                    </p>
                </div>

                <!-- Tarjeta -->
                <div
                    class="bg-white rounded-2xl p-8 shadow-md hover:shadow-2xl transition-all duration-300 border-l-4 border-secondary-600 hover:-translate-y-1">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-secondary-100 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-secondary-600" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M5 3a2 2 0 012-2h6a2 2 0 012 2v2h2a2 2 0 012 2v10a2 2 0 01-2 2H3a2 2 0 01-2-2V7a2 2 0 012-2h2V3z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold text-base-900">Participación en Beneficios</h3>
                    </div>
                    <p class="text-base-700 text-sm sm:text-base leading-relaxed">
                        Participa en rifas, regalos, promociones y acceso a nuevos proyectos del sistema.
                    </p>
                </div>

                <!-- Tarjeta -->
                <div
                    class="bg-white rounded-2xl p-8 shadow-md hover:shadow-2xl transition-all duration-300 border-l-4 border-accent-1 hover:-translate-y-1">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-accent-1" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.3A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold text-base-900">Sorteos Indefinidos</h3>
                    </div>
                    <p class="text-base-700 text-sm sm:text-base leading-relaxed">
                        Participa en sorteos diarios, semanales o mensuales de bonos de descuento hasta del 100%.
                    </p>
                </div>

                <!-- Tarjeta -->
                <div
                    class="bg-white rounded-2xl p-8 shadow-md hover:shadow-2xl transition-all duration-300 border-l-4 border-accent-2 hover:-translate-y-1">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-orange-100 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-accent-2" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M3.707 2.293a1 1 0 00-1.414 1.414l14 14a1 1 0 001.414-1.414l-1.473-1.473A10.014 10.014 0 1012.206 2.693a1 1 0 00-1.682.464A8.014 8.014 0 1014.519 15.88l-1.473-1.473a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l14-14z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold text-base-900">Crea tu Empresa</h3>
                    </div>
                    <p class="text-base-700 text-sm sm:text-base leading-relaxed">
                        Participa como creador de pequeñas empresas y obtén nuevos clientes a través del sistema.
                    </p>
                </div>

                <!-- Tarjeta -->
                <div
                    class="bg-white rounded-2xl p-8 shadow-md hover:shadow-2xl transition-all duration-300 border-l-4 border-accent-5 hover:-translate-y-1">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-accent-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold text-base-900">Créditos y Microcréditos</h3>
                    </div>
                    <p class="text-base-700 text-sm sm:text-base leading-relaxed">
                        Acceso a sistemas de ayuda como créditos y microcréditos respaldados por el sistema.
                    </p>
                </div>

                <!-- Tarjeta -->
                <div
                    class="bg-white rounded-2xl p-8 shadow-md hover:shadow-2xl transition-all duration-300 border-l-4 border-accent-4 hover:-translate-y-1">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-pink-100 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-accent-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 3.062v6.757a1 1 0 01-.956.956H3.21a1 1 0 01-.956-.956v-6.757a3.066 3.066 0 012.812-3.062zM9 12a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold text-base-900">Más Beneficios</h3>
                    </div>
                    <p class="text-base-700 text-sm sm:text-base leading-relaxed">
                        Nuevas ventajas y oportunidades informadas continuamente a través de nuestros canales.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- CÓMO REGISTRARSE -->
    <div id="registro" class="w-full bg-white py-8 px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl sm:text-4xl font-bold text-base-900 text-center mb-4">
                ¿Cómo Ser Registrado Patrocinado?
            </h2>
            <p class="text-base sm:text-lg text-base-600 text-center mb-12">
                Sigue estos sencillos pasos para comenzar
            </p>

            <!-- PASO 1 -->
            <div
                class="bg-gradient-to-r from-primary-50 to-secondary-50 rounded-2xl p-6 sm:p-10 mb-12 border border-emerald-200 shadow-sm">
                <div class="flex flex-col md:flex-row items-center gap-6 md:gap-10">
                    <div class="flex-1 text-center md:text-left">
                        <h3 class="text-2xl font-bold text-base-900 mb-4">Paso 1: Regístrate en Nuestra Plataforma
                        </h3>
                        <p class="text-base sm:text-lg text-base-700 mb-4">
                            Accede a
                            <span class="font-mono bg-slate-200 px-2 py-1 rounded text-base-800">
                                https://matrix-colombia.web.app
                            </span>
                            y crea tu cuenta sin ninguna condición.
                        </p>
                        <p class="text-base-600">Es rápido, fácil y completamente gratis.</p>
                    </div>
                    <div
                        class="flex-shrink-0 w-20 h-20 sm:w-24 sm:h-24 bg-primary-600 rounded-full flex items-center justify-center shadow-lg">
                        <span class="text-3xl sm:text-4xl font-bold text-white">1</span>
                    </div>
                </div>
            </div>

            <!-- PASO 2 -->
            <div class="mb-12">
                <h3 class="text-2xl font-bold text-base-900 mb-6 text-center">Paso 2: Realiza Tareas y Gana Puntos
                </h3>
                <p class="text-base sm:text-lg text-base-600 text-center mb-10">
                    Acumula <span class="font-semibold text-primary-600">5,000 puntos</span> para convertirte en
                    Registrado Patrocinado
                </p>

                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Card -->
                    <div
                        class="bg-white rounded-xl p-6 shadow-md border-t-4 border-primary-600 hover:shadow-lg transition">
                        <h4 class="font-bold text-lg text-base-900 mb-2">📺 Ver Anuncios</h4>
                        <p class="text-base-700">Visualiza publicidad en la plataforma y gana puntos.</p>
                    </div>

                    <div
                        class="bg-white rounded-xl p-6 shadow-md border-t-4 border-secondary-600 hover:shadow-lg transition">
                        <h4 class="font-bold text-lg text-base-900 mb-2">📱 Redes Sociales</h4>
                        <p class="text-base-700">Regístrate e interactúa en nuestras redes sociales.</p>
                    </div>

                    <div
                        class="bg-white rounded-xl p-6 shadow-md border-t-4 border-accent-1 hover:shadow-lg transition">
                        <h4 class="font-bold text-lg text-base-900 mb-2">🛍️ Usa Servicios</h4>
                        <p class="text-base-700">Compra en nuestros proveedores aliados.</p>
                    </div>

                    <div
                        class="bg-white rounded-xl p-6 shadow-md border-t-4 border-accent-2 hover:shadow-lg transition">
                        <h4 class="font-bold text-lg text-base-900 mb-2">♻️ Recicla</h4>
                        <p class="text-base-700">Dona artículos reciclables y de segunda mano.</p>
                    </div>

                    <div
                        class="bg-white rounded-xl p-6 shadow-md border-t-4 border-accent-3 hover:shadow-lg transition">
                        <h4 class="font-bold text-lg text-base-900 mb-2">💰 Dona</h4>
                        <p class="text-base-700">Realiza donaciones en efectivo o en especies.</p>
                    </div>

                    <div
                        class="bg-white rounded-xl p-6 shadow-md border-t-4 border-accent-5 hover:shadow-lg transition">
                        <h4 class="font-bold text-lg text-base-900 mb-2">🤝 Referencia</h4>
                        <p class="text-base-700">Invita a otros y sé sponsor de nuevos registrados.</p>
                    </div>

                    <div
                        class="bg-white rounded-xl p-6 shadow-md border-t-4 border-accent-4 hover:shadow-lg transition">
                        <h4 class="font-bold text-lg text-base-900 mb-2">🛒 Compras Online</h4>
                        <p class="text-base-700">Usa códigos de venta en páginas de ventas por internet.</p>
                    </div>

                    <div
                        class="bg-white rounded-xl p-6 shadow-md border-t-4 border-accent-6 hover:shadow-lg transition">
                        <h4 class="font-bold text-lg text-base-900 mb-2">📧 Notificaciones</h4>
                        <p class="text-base-700">Mantente atento a nuevas oportunidades.</p>
                    </div>
                </div>
            </div>

            <!-- PASO 3 -->
            <div
                class="bg-gradient-to-r from-secondary-50 to-primary-50 rounded-2xl p-6 sm:p-10 border border-blue-200 shadow-sm">
                <div class="flex flex-col md:flex-row items-center gap-6 md:gap-10">
                    <div
                        class="flex-shrink-0 w-20 h-20 sm:w-24 sm:h-24 bg-secondary-600 rounded-full flex items-center justify-center shadow-lg">
                        <span class="text-3xl sm:text-4xl font-bold text-white">3</span>
                    </div>
                    <div class="flex-1 text-center md:text-left">
                        <h3 class="text-2xl font-bold text-base-900 mb-4">Paso 3: Recibe Tus Beneficios</h3>
                        <p class="text-base sm:text-lg text-base-700 mb-3">
                            Una vez alcances <span class="font-semibold text-primary-600">5,000 puntos</span>,
                            ¡comenzarás a recibir beneficios increíbles!
                        </p>
                        <p class="text-base-600">Participa en sorteos, accede a descuentos exclusivos y mucho más.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- PATROCINADOS ESPECIALES -->

    <section
        class="w-full bg-gradient-to-r from-primary-600 to-secondary-600 py-8 px-4 sm:px-6 lg:px-8 overflow-x-hidden">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <!-- Texto principal -->
                <div class="text-white">
                    <h2 class="text-3xl sm:text-4xl font-extrabold mb-6 leading-tight">
                        Patrocinados Especiales
                    </h2>
                    <p class="text-base sm:text-lg mb-6 leading-relaxed text-primary-100">
                        Se refiere a personas naturales o jurídicas que, después de registrarse, serán patrocinadas por
                        el sistema cuando ingresen los recursos suficientes.
                    </p>

                    <p class="text-base sm:text-lg mb-8 leading-relaxed text-primary-50">
                        <span class="font-semibold text-white">Nos enfocamos principalmente en:</span>
                    </p>

                    <ul class="space-y-3 text-base sm:text-lg">
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 flex-shrink-0 text-emerald-200" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Ancianos y personas de la tercera edad</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 flex-shrink-0 text-emerald-200" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Personas discapacitadas</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 flex-shrink-0 text-emerald-200" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Fundaciones y entidades sin ánimo de lucro</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 flex-shrink-0 text-emerald-200" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Grupos deportivos</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 flex-shrink-0 text-emerald-200" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Programas mundiales de ayuda</span>
                        </li>
                    </ul>
                </div>

                <!-- Tarjeta lateral -->
                <div class="bg-white rounded-2xl p-8 shadow-xl border border-slate-200">
                    <h3 class="text-2xl sm:text-3xl font-bold text-base-900 mb-6">
                        Ayuda a Quienes Más Lo Necesitan
                    </h3>
                    <p class="text-base-700 mb-6 leading-relaxed">
                        Miles de personas necesitadas pueden obtener beneficios a través de nuestro sistema con tu
                        ayuda.
                    </p>
                    <div class="bg-primary-50 border-l-4 border-primary-600 p-4 rounded-lg">
                        <p class="text-base-900 font-semibold">
                            Si lo haces para tu beneficio, hazlo también por tu familia.
                            <span class="block text-primary-700 font-bold mt-1">¡Enséñales a participar!</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- MISIÓN Y VISIÓN -->
    <div class="w-full overflow-hidden bg-white py-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12">

                <!-- Misión -->
                <div
                    class="bg-gradient-to-br from-primary-50 to-primary-100 rounded-2xl p-8 border border-emerald-300">
                    <div class="flex items-center gap-3 mb-4">
                        <div
                            class="w-12 h-12 bg-primary-600 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M13 7H7v6h6V7z"></path>
                                <path fill-rule="evenodd"
                                    d="M7 2a1 1 0 012 0v1h2V2a1 1 0 112 0v1h2V2a1 1 0 112 0v1h1a2 2 0 012 2v2h1a1 1 0 110 2h-1v2h1a1 1 0 110 2h-1v2h1a1 1 0 110 2h-1v1a2 2 0 01-2 2h-2v1a1 1 0 11-2 0v-1h-2v1a1 1 0 11-2 0v-1H7a2 2 0 01-2-2v-2H4a1 1 0 110-2h1V9H4a1 1 0 110-2h1V5H4a1 1 0 110-2h1V2z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-base-900">Misión</h3>
                    </div>
                    <p class="text-base-700 leading-relaxed">
                        El sistema Matrix tiene como misión generar conciencia en todos los registrados sobre el cuidado
                        del medio ambiente al tiempo que cuidan de su salud. Se enfoca en crear programas, ideas,
                        inventos y estrategias para fortalecer la mejora constante del mundo donde respiramos y el
                        cuerpo que habitamos.
                    </p>
                </div>

                <!-- Visión -->
                <div
                    class="bg-gradient-to-br from-secondary-50 to-secondary-100 rounded-2xl p-8 border border-blue-300">
                    <div class="flex items-center gap-3 mb-4">
                        <div
                            class="w-12 h-12 bg-secondary-600 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M15 8a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path fill-rule="evenodd"
                                    d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-base-900">Visión</h3>
                    </div>
                    <p class="text-base-700 leading-relaxed">
                        El sistema Matrix tiene la visión que al año 2030 se habrán registrado un millón de usuarios,
                        los cuales serán educados en el cuidado del medio ambiente y su salud, ingresándolos a programas
                        y estrategias que facilitarán el mejoramiento de nuestro mundo y nuestro cuerpo.
                    </p>
                </div>

            </div>
        </div>
    </div>


    <!-- CTA FINAL -->
    <div
        class="w-full overflow-hidden bg-gradient-to-r from-primary-600 via-secondary-600 to-accent-1 py-8 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl sm:text-5xl font-bold text-white mb-6">
                ¡Bienvenido al Cambio!
            </h2>
            <p class="text-xl text-primary-50 mb-8 leading-relaxed">
                Únete a miles de personas que ya están transformando sus vidas y el planeta. No hay condiciones, solo
                oportunidades.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('register', 'master')}}" target="_blank" rel="noopener noreferrer"
                    class="inline-block bg-white hover:bg-slate-100 text-primary-600 font-bold py-4 px-10 rounded-lg transition duration-300 shadow-xl hover:scale-[1.03]">
                    Registrarse Gratis Ahora
                </a>
                <button onclick="document.getElementById('contacto').scrollIntoView({behavior: 'smooth'})"
                    class="inline-block border-2 border-white text-white hover:bg-white hover:text-primary-600 font-bold py-4 px-10 rounded-lg transition duration-300 hover:scale-[1.03]">
                    Más Información
                </button>
            </div>
        </div>
    </div>


    <!-- PREGUNTAS FRECUENTES -->
    <div class="w-full bg-base-50 py-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-4xl font-bold text-base-900 text-center mb-12">Preguntas Frecuentes</h2>

            <div class="space-y-6">
                <div class="bg-white rounded-xl p-6 shadow-md">
                    <details class="group">
                        <summary
                            class="flex cursor-pointer justify-between items-center font-bold text-lg text-base-900">
                            <span>¿Es realmente gratis registrarse?</span>
                            <span class="transition group-open:rotate-180">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                                </svg>
                            </span>
                        </summary>
                        <p class="text-base-700 mt-4">Sí, el registro es completamente gratis sin ninguna condición.
                            No hay costos ocultos.</p>
                    </details>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-md">
                    <details class="group">
                        <summary
                            class="flex cursor-pointer justify-between items-center font-bold text-lg text-base-900">
                            <span>¿Cuánto tiempo tarda en convertirse en Registrado Patrocinado?</span>
                            <span class="transition group-open:rotate-180">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                                </svg>
                            </span>
                        </summary>
                        <p class="text-base-700 mt-4">El tiempo depende de tu actividad. Necesitas acumular 5,000
                            puntos. Puedes hacerlo a tu propio ritmo realizando las tareas disponibles en la plataforma.
                        </p>
                    </details>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-md">
                    <details class="group">
                        <summary
                            class="flex cursor-pointer justify-between items-center font-bold text-lg text-base-900">
                            <span>¿Cuáles son los descuentos disponibles?</span>
                            <span class="transition group-open:rotate-180">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                                </svg>
                            </span>
                        </summary>
                        <p class="text-base-700 mt-4">Los descuentos varían según los socios aliados, comenzando desde
                            5% hasta 100% en productos y servicios específicos. Se publican continuamente nuevas
                            ofertas.</p>
                    </details>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-md">
                    <details class="group">
                        <summary
                            class="flex cursor-pointer justify-between items-center font-bold text-lg text-base-900">
                            <span>¿Cómo funcionan los sorteos?</span>
                            <span class="transition group-open:rotate-180">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                                </svg>
                            </span>
                        </summary>
                        <p class="text-base-700 mt-4">Los Registrados Patrocinados participan automáticamente en
                            sorteos diarios, semanales y mensuales de bonos de descuento. El nivel de participación
                            depende de tu grado de compromiso con el sistema.</p>
                    </details>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-md">
                    <details class="group">
                        <summary
                            class="flex cursor-pointer justify-between items-center font-bold text-lg text-base-900">
                            <span>¿Puedo referir a otras personas?</span>
                            <span class="transition group-open:rotate-180">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                                </svg>
                            </span>
                        </summary>
                        <p class="text-base-700 mt-4">Sí, una vez seas Registrado Patrocinado puedes referir y ser
                            sponsor de nuevos registrados, ganando puntos adicionales por cada referencia exitosa.</p>
                    </details>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-md">
                    <details class="group">
                        <summary
                            class="flex cursor-pointer justify-between items-center font-bold text-lg text-base-900">
                            <span>¿Qué debo hacer cuando recibo un beneficio?</span>
                            <span class="transition group-open:rotate-180">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                                </svg>
                            </span>
                        </summary>
                        <p class="text-base-700 mt-4">Cuando recibas un beneficio, la condición es que ayudes al
                            sistema a conseguir más beneficios para dar a otros registrados patrocinados, utilizando las
                            estrategias disponibles en la plataforma.</p>
                    </details>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER CTA -->
    <div id="contacto" class="w-full bg-base-900 py-8 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-white mb-6">¿Listo para Comenzar?</h2>
            <p class="text-xl text-slate-300 mb-8">
                Únete a nuestro sistema y sé parte de la revolución de ayuda mutua, cuidado del medio ambiente y salud.
            </p>
            <a href="https://matrix-colombia.web.app" target="_blank" rel="noopener noreferrer"
                class="inline-block bg-primary-600 hover:bg-primary-700 text-white font-bold py-4 px-12 rounded-lg transition duration-300 shadow-xl text-lg">
                Ir a matrix-colombia.web.app
            </a>
            <p class="text-slate-400 mt-8 text-sm">
                © 2025 Sistema Matrix Colombia. Todos los derechos reservados.
            </p>
        </div>
    </div>

</x-layouts.app>
