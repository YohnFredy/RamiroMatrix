<div>
    <flux:breadcrumbs>
        <flux:breadcrumbs.item href="{{ route('admin.index') }}">
            <i class="fas fa-home mr-1"></i> Home
        </flux:breadcrumbs.item>
        <flux:breadcrumbs.item href="{{ route('admin.sales.index') }}">
            venta
        </flux:breadcrumbs.item>
        <flux:breadcrumbs.item>
            {{ $sale->exists ? 'Editar venta' : 'Nueva venta' }}
        </flux:breadcrumbs.item>
    </flux:breadcrumbs>

    <!-- Encabezado de la sección -->
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mt-8 mb-4 px-6">
        <div>
            <h1 class="text-2xl font-bold text-primary-700">
                {{ $sale->exists ? 'Editar venta' : 'Crear Nueva Venta' }}
            </h1>
            <p class="text-sm text-base-900 mt-1">
                {{ $sale->exists ? 'Actualiza la información de la venta.' : 'Completa el formulario para añadir una nuevo venta.' }}
            </p>
        </div>
        <a href="{{ route('admin.sales.index') }}"
            class="mt-4 md:mt-0 px-5 py-2.5 bg-neutral-200 text-neutral-800 rounded-lg hover:bg-neutral-300 transition duration-200 flex items-center">
            <i class="fas fa-arrow-left mr-2"></i>
            Volver al listado
        </a>
    </div>

    <!-- Tarjeta del formulario -->
    <div class="bg-white rounded-xl shadow-md shadow-base-900 overflow-hidden border border-neutral-300">
        <form wire:submit.prevent="save" novalidate>
            <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-x-6">

                <div class="relative mb-5">
                    <label class="block mb-2 text-sm font-medium text-base-900">Usuario que compra:</label>
                    <select
                        class="block w-full bg-base-50 appearance-none border border-primary-600 text-base-900 text-sm rounded-lg 
                                    focus:outline-1 focus:outline-base-700 focus:bg-white p-2.5 cursor-pointer"
                        wire:model="user_id">
                        <option value="">Seleccione un usuario</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}"> {{ $user->username }} - {{ $user->name }}
                                {{ $user->last_name }} </option>
                        @endforeach

                    </select>
                    <div class="absolute inset-y-0 right-5 top-8 flex items-center pointer-events-none">
                        <svg class="w-4 h-4 text-primary-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>

                    @error('user_id')
                        <p class="text-sm text-accent-3">{{ $message }}</p>
                    @enderror

                </div>

                <div class="relative mb-5">
                    <label class="block mb-2 text-sm font-medium text-base-900">Usuario vendedor::</label>
                    <select
                        class="block w-full bg-base-50 appearance-none border border-primary-600 text-base-900 text-sm rounded-lg 
                                    focus:outline-1 focus:outline-base-700 focus:bg-white p-2.5 cursor-pointer"
                        wire:model="seller_id">
                        <option value="">Seleccione un usuario</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}"> {{ $user->username }} - {{ $user->name }}
                                {{ $user->last_name }} </option>
                        @endforeach

                    </select>
                    <div class="absolute inset-y-0 right-5 top-8 flex items-center pointer-events-none">
                        <svg class="w-4 h-4 text-primary-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>

                    @error('seller_id')
                        <p class="text-sm text-accent-3">{{ $message }}</p>
                    @enderror

                </div>

                <div>
                    <x-select wire:model="business_id" label="Seleccione un negocio:" for="business_id"
                        placeholder="Seleccione un negocio" :options="$businesses" required />
                </div>

                <div>
                    <x-input type="text" wire:model="invoice_number" label="Número de Factura:"
                        for="invoice_number" />
                </div>

                <div>
                    <x-input type="number" wire:model="total_sale_amount" label="Monto Total de la Venta:"
                        for="total_sale_amount" step="0.01" />
                </div>

                <div>
                    <x-input type="number" wire:model="total_commission_amount" label="Monto Total de la Venta:"
                        for="total_commission_amount" step="0.01" />
                </div>

                <div>
                    <x-input type="number" wire:model="seller_commission_earned" label="Comisión Ganada por Vendedor:"
                        for="seller_commission_earned" step="0.01" />
                </div>

            </div>

            <!-- Pie del formulario con botón de guardar -->
            <div class="px-6 py-4 bg-gray-50 border-t border-gray-200 text-right">
                <button type="submit"
                    class="px-6 py-2.5 bg-primary-700 text-white font-semibold rounded-lg hover:bg-secondary-600 transition duration-200 shadow-lg shadow-primary-700/20">
                    <span wire:loading.remove wire:target="save">
                        {{ $sale->exists ? 'Actualizar Negocio' : 'Guardar Negocio' }}
                    </span>
                    <span wire:loading wire:target="save">
                        Guardando...
                    </span>
                </button>
            </div>
        </form>
    </div>
</div>
