<div>
    <flux:breadcrumbs>
        <flux:breadcrumbs.item href="{{ route('admin.index') }}">
            <i class="fas fa-home mr-1"></i> Home
        </flux:breadcrumbs.item>
        <flux:breadcrumbs.item href="{{ route('admin.businesses.index') }}">
            Negocios Aliados
        </flux:breadcrumbs.item>
        <flux:breadcrumbs.item>
            {{ $business->exists ? 'Editar Negocio' : 'Nuevo Negocio' }}
        </flux:breadcrumbs.item>
    </flux:breadcrumbs>

    <!-- Encabezado de la sección -->
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mt-8 mb-4 px-6">
        <div>
            <h1 class="text-2xl font-bold text-primary-700">
                {{ $business->exists ? 'Editar Negocio' : 'Crear Nuevo Negocio' }}
            </h1>
            <p class="text-sm text-base-900 mt-1">
                {{ $business->exists ? 'Actualiza la información del negocio.' : 'Completa el formulario para añadir un nuevo negocio aliado.' }}
            </p>
        </div>
        <a href="{{ route('admin.businesses.index') }}"
            class="mt-4 md:mt-0 px-5 py-2.5 bg-neutral-200 text-neutral-800 rounded-lg hover:bg-neutral-300 transition duration-200 flex items-center">
            <i class="fas fa-arrow-left mr-2"></i>
            Volver al listado
        </a>
    </div>

    <!-- Tarjeta del formulario -->
    <div class="bg-white rounded-xl shadow-md shadow-base-900 overflow-hidden border border-neutral-300">
        <form wire:submit.prevent="save" novalidate>
            <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-x-6">

                <!-- Nombre -->
                <div>
                    <x-input type="text" wire:model.lazy="name" label="Nombre:" for="name" autofocus
                        autocomplete="name" placeholder="Ej: Mi Tienda" />
                </div>

                <!-- NIT -->
                <div>
                    <x-input type="text" wire:model.lazy="nit" label="Nit:" for="nit"
                        placeholder="Ej: 900123456-7" />
                </div>

                <!-- Teléfono -->
                <div>
                    <x-input type="text" wire:model.lazy="phone" label="teléfono:" for="phone" id="phone" />
                </div>

                <!-- Dirección -->
                <div>
                    <x-input type="text" label="Dirección:" wire:model.lazy="address" for="address" />
                </div>


                <!-- Pais -->
                <div class="col-span-2 sm:col-span-1">
                    <x-select wire:model.live="selectedCountry" label="País:" for="country_id"
                        placeholder="Seleccione un país..." :options="$countries" required />
                </div>

                <!-- Departamento -->
                @if ($selectedCountry)

                    <div class="col-span-2 sm:col-span-1">
                        <x-select wire:model.live="selectedDepartment" label="Departamento:" for="department_id"
                            placeholder="Seleccione un departamento..." :options="$departments" required />
                    </div>

                    <!-- ciudad -->
                    @if ($selectedDepartment)
                        @if (count($cities) > 0)
                            <div class="col-span-2 sm:col-span-1">
                                <x-select wire:model.live="selectedCity" label="Ciudad:" for="city_id"
                                    placeholder="Seleccione una ciudad..." :options="$cities" />
                            </div>
                        @else
                            <!-- Ciudad -->
                            <div class="col-span-2 sm:col-span-1">
                                <x-input wire:model="city" id="city" label="Ciudad:" type="text" for="city"
                                    autofocus autocomplete="city" placeholder="Ciudad" />
                            </div>
                        @endif
                    @endif
                @endif

                <!-- Comisión Vendedor -->
                <div>
                    <x-input type="number" wire:model.lazy="seller_commission_rate" label="Comisión Vendedor (%):"
                        for="seller_commission_rate" step="0.01" />
                </div>

                <!-- Comisión Patrocinador -->
                <div>
                    <x-input type="number" wire:model.lazy="sponsor_commission_rate" label="Comisión Vendedor (%):"
                        for="sponsor_commission_rate" step="0.01" />
                </div>

                <!-- Comisión Mínima Compañía -->
                <div>
                    <x-input type="number" wire:model.lazy="min_company_commission"
                        label="Comisión
                            Mínima Compañía (%):" for="min_company_commission"
                        step="0.01" />
                </div>


                <!-- Comisión Máxima Compañía -->
                <div>
                    <x-input type="number" wire:model.lazy="max_company_commission"
                        label="Comisión
                            Máxima Compañía (%):" for="min_company_commission"
                        step="0.01" />
                </div>

            </div>


            <!-- Pie del formulario con botón de guardar -->
            <div class="px-6 py-4 bg-gray-50 border-t border-gray-200 text-right">
                <button type="submit"
                    class="px-6 py-2.5 bg-primary-700 text-white font-semibold rounded-lg hover:bg-secondary-600 transition duration-200 shadow-lg shadow-primary-700/20">
                    <span wire:loading.remove wire:target="save">
                        {{ $business->exists ? 'Actualizar Negocio' : 'Guardar Negocio' }}
                    </span>
                    <span wire:loading wire:target="save">
                        Guardando...
                    </span>
                </button>
            </div>
        </form>
    </div>
</div>
