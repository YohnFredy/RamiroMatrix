@props([
    'title', // Título del enlace o grupo
    'icon' => null, // Ej: 'fas fa-users'  (FontAwesome)
    'iconBlade' => null, // Ej: 'flux:icon.bolt' (Blade Component)
    'routes' => [], // Rutas que activan el menú
    'items' => null, // Subitems: [ ['name'=>'...', 'route'=>'...', 'icon'=>'...', 'iconBlade'=>null] ]
])

@php
    $active = collect($routes)->some(fn($r) => request()->routeIs($r));
@endphp

<div x-data="{ open: {{ $active ? 'true' : 'false' }} }">
    {{-- Menú Expandible --}}
    @if ($items)
        <button @click="open = !open" :aria-expanded="open.toString()"
            class="flex items-center justify-between w-full text-left  text-base-900 hover:font-bold cursor-pointer hover:bg-primary-700/5 py-2 px-3 rounded-xl focus:outline-none group">
            <div class="flex items-center gap-3 text-sm">
                @if ($iconBlade)
                    <flux:icon name="{{ $iconBlade }}" variant="mini"
                        class=" text-base-600 group-hover:text-primary-700" />
                @elseif($icon)
                    <i class="{{ $icon }} text-base-600 group-hover:text-primary-700"></i>
                @endif
                <span>{{ $title }}</span>
            </div>

            <flux:icon name="chevron-right" variant="mini"
                x-bind:class="open ? 'text-accent-3 rotate-90' : 'text-priamry-700 rotate-0'"
                class="transition-transform duration-300" />
        </button>

        <div x-show="open" @if (!$active) wire:cloak @endif x-transition class="relative mt-1 pl-5">
            <span x-show="open" x-transition.opacity
                class="absolute left-5 top-0 bottom-0 w-0.5 bg-accent-3/50"></span>

            <nav class="space-y-1 ml-2 text-base-600">
                @foreach ($items as $item)
                    @php
                        $itemActive = request()->routeIs($item['route']);
                    @endphp
                    <a href="{{ route($item['route']) }}"
                        class="flex items-center gap-3 py-1 px-2 rounded text-sm
                       hover:bg-primary-600/5 hover:text-primary-700
                       {{ $itemActive ? 'bg-white hover:bg-white text-primary-700 shadow-sm border border-primary-700/50' : '' }}">
                        @if (!empty($item['iconBlade']))
                            <flux:icon name="{{ $item['iconBlade'] }}" variant="micro" />
                        @elseif(!empty($item['icon']))
                            <i class="{{ $item['icon'] }}"></i>
                        @endif
                        <span>{{ $item['name'] }}</span>
                    </a>
                @endforeach
            </nav>
        </div>

        {{-- Enlace Simple --}}
    @else
        <a href="{{ route($routes[0]) }}"
            class="flex items-center w-full text-left text-base-600 hover:font-bold cursor-pointer hover:bg-base-600/5 py-2 px-3 rounded-lg focus:outline-none group
                  {{ $active ? 'bg-white hover:bg-white hover:font-normal text-primary-700 shadow-sm border border-primary-700/50' : '' }}">
            <div class="flex items-center gap-3 text-sm">
                @if ($iconBlade)
                    <flux:icon name="{{ $iconBlade }}" variant="mini"
                        class="text-base-600 group-hover:text-primary-700 " />
                @elseif($icon)
                    <i class="{{ $icon }} text-base-600 group-hover:text-base-600"></i>
                @endif
                <span>{{ $title }}</span>
            </div>
        </a>
    @endif
</div>
