<div>
    <div class=" sm:p-6 sm:bg-base-50 sm:shadow-lg shadow-base-900 border border-primary-100 rounded-lg min-h-screen">
        <!-- Header del Dashboard -->
        <div class="flex flex-col sm:flex-row justify-between items-center gap-4 sm:gap-0 mb-4 sm:mb-8">
            <div class="text-center sm:text-left w-full sm:w-auto">
                <h1 class="text-xl sm:text-2xl md:text-3xl font-bold text-secondary-600-600">Oficina Virtual</h1>
                <p class="text-base-900 text-sm sm:text-base-600">Bienvenido de nuevo</p>
            </div>
            <div class="flex items-center space-x-3 sm:space-x-4">
                <div class="relative">
                    <button class="p-1.5 sm:p-2 bg-white rounded-full text-primary-600 hover:bg-primary-50">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:h-6 sm:w-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                    </button>
                    <span
                        class="absolute top-0 right-0 h-2.5 w-2.5 sm:h-3 sm:w-3 rounded-full bg-accent-3 border-2 border-white"></span>
                </div>
                <div class="flex items-center rounded-full py-1 px-2 shadow-sm">
                    <span class="font-medium text-xs sm:text-sm text-primary-600 capitalize">{{ $user->name }}</span>
                </div>
            </div>
        </div>

        <!-- Cards  -->
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-8">
            <!-- Card Ganancias Totales -->
            <div
                class="bg-white rounded-xl shadow-lg hover:shadow-xl shadow-base-900 border border-primary-600/30 transition-all duration-300 overflow-hidden">

                <div class="p-6">
                    <div class="flex justify-between items-start">
                        <div class="space-y-2">
                            <p class="text-sm font-semibold text-primary-600 uppercase tracking-wider">Ganancias Totales
                            </p>
                            <h3 class="text-3xl font-bold text-base-900">$0</h3>
                            <div class="flex items-center mt-2 text-sm font-medium text-accent-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                </svg>
                                <span>Ganancia mes pasado: $0</span>
                            </div>
                        </div>
                        <div class="p-3 rounded-full bg-primary-600/20 text-primary-600 shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Socios Unilevel -->
            <div
                class="bg-white rounded-xl shadow-lg hover:shadow-xl shadow-base-900 border border-primary-600/30 transition-all duration-300 overflow-hidden">

                <div class="p-6">
                    <div class=" flex items-center justify-between">
                        <p class="text-sm font-semibold text-secondary-600 uppercase tracking-wider">Socios Unilevel</p>
                        <div class="p-3 rounded-full bg-secondary-600/20 text-secondary-600 shadow-md flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4 mt-2">
                        <div class="bg-base-50 rounded-lg p-3 text-center">
                            <span class="block text-sm text-secondary-600 font-medium">Directos</span>
                            <span class="block text-xl font-bold text-base-900 mt-1">
                                {{ $user->matrixTotal->direct_affiliates }}
                            </span>
                        </div>
                        <div class="bg-base-50 rounded-lg p-3 text-center">
                            <span class="block text-sm text-secondary-600 font-medium">Afiliados</span>
                            <span
                                class="block text-xl font-bold text-base-900 mt-1">{{ $user->matrixTotal->total_unilevel }}</span>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Card Socios Matrix -->
            <div
                class="bg-white rounded-xl shadow-lg hover:shadow-xl shadow-base-900 border border-primary-600/30 transition-all duration-300 overflow-hidden">

                <div class="p-6">
                    <div class=" flex items-center justify-between">
                        <p class="text-sm font-semibold text-base-700 uppercase tracking-wider">Socios Matrix</p>
                        <div class="p-3 rounded-full bg-base-700/20 text-base-700 shadow-md flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4 mt-2">
                        <div class="bg-base-50 rounded-lg p-3 text-center">
                            <span class="block text-sm text-base-600 font-medium">Directos</span>
                            <span class="block text-xl font-bold text-base-900 mt-1">
                                {{ $user->matrixTotal->current_affiliates}}
                            </span>
                        </div>
                        <div class="bg-base-50 rounded-lg p-3 text-center">
                            <span class="block text-sm text-base-600 font-medium">Afiliados</span>
                            <span
                                class="block text-xl font-bold text-base-900 mt-1">{{ $user->matrixTotal->total_affiliates }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Rango alcanzado -->
            <div
                class="bg-white rounded-xl shadow-lg hover:shadow-xl shadow-base-900 border border-primary-600/30 transition-all duration-300 overflow-hidden">

                <div class="p-6">
                    <div class="flex justify-between items-start">
                        <div class="space-y-2">
                            <p class="text-sm font-semibold text-primary-700 uppercase tracking-wider">Rango alcanzado
                            </p>
                            <h3 class="text-2xl font-bold text-secondary-600">Asociado</h3>
                            <div class="flex items-center text-sm font-medium mt-1">
                                <span class="px-3 py-1 rounded-lg bg-base-50 text-accent-3">
                                    Próximo nivel: Aprendiz
                                </span>
                            </div>
                        </div>
                        <div class="p-3 rounded-full bg-accent-3/20 text-accent-3 shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        

        <!-- Gráficos y Estadísticas -->
        <div class="grid grid-cols-1 xl:grid-cols-2 gap-8 mb-8">
            <!-- Gráfico de Rendimiento -->
            <div class="bg-white p-6 border border-primary-600/30 rounded-lg shadow-md shadow-base-900">
                <div class="sm:flex justify-between items-center mb-4">
                    <h2 class="text-lg font-semibold text-primary-600">Rendimiento de Red</h2>
                    <div class="flex bg-zinc-50 rounded-lg p-1 text-sm shadow-xs shadow-base-900">
                        <button
                            class="px-3 py-1 rounded bg-white shadow shadow-base-900 text-base-900 font-medium">Semana</button>
                        <button class="px-3 py-1 text-gray-600">Mes</button>
                        <button class="px-3 py-1 text-gray-600">Año</button>
                    </div>
                </div>
                <div class="h-64 flex items-end space-x-2">
                    <div class="bg-secondary-600 rounded-t w-full h-16 hover:bg-secondary transition-colors"></div>
                    <div class="bg-secondary-600 rounded-t w-full h-28 hover:bg-secondary transition-colors"></div>
                    <div class="bg-secondary-600 rounded-t w-full h-20 hover:bg-secondary transition-colors"></div>
                    <div class="bg-secondary-600 rounded-t w-full h-24 hover:bg-secondary transition-colors"></div>
                    <div class="bg-secondary-600 rounded-t w-full h-32 hover:bg-secondary transition-colors"></div>
                    <div class="bg-secondary-600 rounded-t w-full h-40 hover:bg-secondary transition-colors"></div>
                    <div class="bg-secondary-600/90 rounded-t w-full h-52 hover:bg-secondary-600 transition-colors"></div>
                </div>
                <div class="flex justify-between mt-2 text-xs text-base-600">
                    <span>Lun</span>
                    <span>Mar</span>
                    <span>Mié</span>
                    <span>Jue</span>
                    <span>Vie</span>
                    <span>Sáb</span>
                    <span>Dom</span>
                </div>
            </div>
        </div>

       

        <hr class=" my-8">


        <div id="link-sponsor" class=" bg-primary-50 border border-primary-600 rounded-lg py-4 px-6 mb-4 ">
            <h1 class=" text-center font-medium text-base-700 text-lg">Haz clic en "Registrar" en el lado
                correspondiente donde deseas inscribir al prospecto o copia el enlace para enviárselo.</h1>
        </div>


        <div class=" flex justify-center">
           <div class="bg-gradient-to-bl from-white to-secondary-600/20  p-4 sm:p-6 rounded-lg ">
                <div class="flex items-center justify-center mb-3">
                    <div class="bg-primary-50 p-2 rounded-full mr-2">
                        <i class="fas fa-arrow-right text-primary-600"></i>
                    </div>
                    <flux:heading class="text-base-700! text-lg sm:text-xl">Link de registro</flux:heading>
                </div>

                <div class="relative bg-base-50 rounded-lg p-2 border border-dashed border-base-600 mb-4">
                    <p id="p2" class="text-xs sm:text-sm mr-4 text-base-600 truncate select-all">
                        https://fornuvi.com/register/{{ $user->username }}</p>
                    <button
                        class="absolute cursor-pointer right-1 top-1/2 transform -translate-y-1/2 text-base-600 hover:text-primary-600 transition-colors"
                        onclick="copiarAlPortapapeles('p2')">
                        <i class="fas fa-copy"></i>
                    </button>
                </div>

                <div class="space-y-3">
                    <div class="text-center">
                        <flux:button variant="primary"
                            class="w-full sm:w-auto cursor-pointer transition-transform hover:scale-105"
                            onclick="copiarAlPortapapeles('p2')">
                            <i class="fas fa-copy mr-2"></i> Copiar enlace
                        </flux:button>
                    </div>

                    <div class="text-center">
                        <flux:link
                            class="text-danger hover:text-accent-3 flex items-center justify-center gap-1 transition-all"
                            href="{{ route('register', $user->username) }}">
                            <i class="fas fa-user-plus text-xs"></i> Registrar directo
                        </flux:link>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <script>
        function copiarAlPortapapeles(id_elemento) {
            var aux = document.createElement("input");
            aux.setAttribute("value", document.getElementById(id_elemento).innerHTML);
            document.body.appendChild(aux);
            aux.select();
            document.execCommand("copy");
            document.body.removeChild(aux);
        }
    </script>
</div>
