@push('css')
    <link href="{{ asset('css/tree.css') }}" rel="stylesheet">
@endpush

<div>
    <div class="flex justify-between items-center mb-2">
        <h1 class="font-bold text-xl md:text-2xl text-primary-700 flex items-center">
            <i class="fas fa-diagram-project mr-2"></i> Red Matrix
        </h1>
    </div>

    <!-- Leyenda de árbol -->
    <div class="bg-white p-4 rounded-lg mb-4 shadow-md shadow-base-900 border border-base-600">
        <div class="flex flex-wrap items-center gap-4">
            <span class="font-semibold text-secondary-600"><i class="fas fa-info-circle bg-white mr-1"></i>
                Rango: Asociado:</span>
            <div class="flex items-center">

                @if ($activo == true)
                    <div class="w-4 h-4 rounded-full bg-primary-800 mr-2"></div>
                    <span>Usuario Activo</span>
                @else
                    <div class="w-4 h-4 rounded-full bg-accent-3 mr-2"></div>
                    <span>Usuario Inactivo</span>
                @endif
            </div>
        </div>
    </div>

    <!-- Filtros y búsqueda rápida -->
    <div class="bg-white p-3 sm:p-4 rounded-lg mb-4 shadow-md shadow-base-900 border border-base-600">
        <div class=" grid grid-cols-6 gap-2 sm:gap-4">
            <div class=" col-span-6 sm:col-span-4 relative">
                <input disabled type="text" wire:model.debounce.300ms="search"
                    placeholder="Buscar usuario en el árbol..."
                    class="w-full pl-10 pr-4 py-2 text-sm sm:text-base border border-primary-600 rounded-lg focus:ring-2 focus:ring-primary-600 focus:border-primary-600 transition-colors">
                <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-primary-600"></i>
            </div>

            <div class="relative col-span-3 sm:col-span-1">
                <div class="col-span-3 sm:col-span-1">
                    <select wire:model.live="selectedLevels"
                        class="block w-full bg-base-50 appearance-none border border-primary-600 text-base-900 text-sm rounded-lg focus:outline-1 focus:outline-base-700 focus:bg-white p-2.5 cursor-pointer">
                        <option value="">Niveles</option>
                        <option value="2">2 Niveles</option>
                        <option value="3">3 Niveles</option>
                        <option value="4">4 Niveles</option>
                        <option value="5">5 Niveles</option>
                    </select>

                    <div class="absolute inset-y-0 right-2.5 top-1 flex items-center pointer-events-none">
                        <svg class="w-4 h-4 ext-primary-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class=" relative col-span-3 sm:col-span-1">
                <select
                    class="block w-full bg-base-50 appearance-none border border-primary-600 text-base-900 text-sm rounded-lg focus:outline-1 focus:outline-base-700 focus:bg-white p-2.5 cursor-pointer">
                    <option value="">Estados</option>
                    <option value="active" disabled>Activos</option>
                    <option value="pending" disabled>Pendientes</option>
                    <option value="inactive" disabled>Inactivos</option>
                </select>

                <div class="absolute inset-y-0 right-2.5 top-1 flex items-center pointer-events-none">
                    <svg class="w-4 h-4 text-primary-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Contenedor principal del árbol con navegación -->
    <div
        class=" bg-base-50 px-2 border border-primary-600 shadow-md shadow-base-900 w-full rounded-2xl flex justify-center">
        <div class="caja">
            <div id="tree-container" class="tree px-2">
                <ul>
                    @include('livewire.office.children-matrix', ['node' => $tree])
                </ul>
            </div>
        </div>
    </div>


    <!-- Sección de paneles de información -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
        <!-- Panel de usuario -->
        <div class="bg-white rounded-lg shadow-md shadow-base-900 hover:shadow-lg transition-shadow overflow-hidden">
            <div class="bg-primary-600 p-4 border-b flex items-center">
                <i class="fas fa-user-circle text-2xl text-white mr-3"></i>
                <h2 class="text-xl font-bold text-white">Información del Usuario</h2>
            </div>
            <div class="p-6">
                <div class="flex items-center mb-4">
                    <div
                        class="w-16 h-16 rounded-full bg-secondary-600 text-white flex items-center justify-center text-2xl mr-4">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold capitalize">{{ $currentUser->name }} {{ $currentUser->last_name }}</h3>
                        <div class="flex items-center">
                            <span class="px-2 py-1 bg-base-600 text-white text-xs rounded-full mr-2">Asociado</span>
                        </div>
                    </div>
                </div>
                <div class="space-y-4">
                    <div class="flex items-center">
                        <i class="fas fa-user w-6 text-ink"></i>
                        <span class="ml-2"><strong>Username:</strong><span
                                class="ml-1">{{ $currentUser->username }}</span></span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-calendar-alt w-6 text-ink"></i>
                        <span class="ml-2"><strong>Ingreso:</strong><span
                                class="ml-1">{{ $currentUser->created_at->format('d/m/Y') }}</span></span>
                    </div>
                </div>
            </div>
        </div>


        <!-- Acciones rápidas -->
        <div class="bg-white rounded-lg shadow-md shadow-base-900 hover:shadow-lg transition-shadow overflow-hidden">
            <div class="bg-base-600 p-4 border-b flex items-center">
                <i class="fas fa-bolt text-2xl text-white mr-3"></i>
                <h2 class="text-xl font-bold text-white">Acciones Rápidas</h2>
            </div>
            <div class="p-6">
                <div class="mb-4">
                    <div class="relative">
                        <input disabled type="text" wire:model="searchUser" placeholder="Buscar por username o email"
                            class="w-full pl-10 pr-4 py-2 border rounded-lg focus:ring focus:ring-primary-600 focus:border-primary-600">
                        <i class="fas fa-search absolute left-3 top-3 text-base-700"></i>
                    </div>
                    <button
                        class="w-full mt-2 bg-primary-600 hover:bg-primary-700 text-white px-4 py-2 rounded-lg flex items-center justify-center">
                        <i class="fas fa-search mr-2"></i> Buscar
                    </button>
                </div>

                <div class="grid grid-cols-2 gap-3 mb-4">
                    <a href="{{ route('dashboard') }}#link-sponsor"
                        class="bg-primary-100 hover:bg-base-50 text-primary-700 p-3 rounded-lg flex flex-col items-center">
                        <i class="fas fa-user-plus text-2xl mb-1"></i>
                        <span class="text-sm">Añadir Usuario</span>
                    </a>

                    <a href="{{ route('unilevel.tree') }}"
                        class="bg-red-50 hover:bg-base-50 text-accent-3 p-3 rounded-lg flex flex-col items-center">
                        <i class="fas fa-network-wired text-2xl mb-1"></i>
                        <span class="text-sm">Ver Unilevel</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
