@php
    // Array combinado para navbar (rutas y dropdowns en orden)
    $navbarItems = [
        [
            'type' => 'route',
            'name' => 'Home',
            'icon' => 'home',
            'route' => 'home',
            'routeIs' => 'home',
        ],
        [
            'type' => 'route',
            'name' => 'Videos',
            'icon' => 'play-circle',
            'route' => 'videos.index',
            'routeIs' => 'videos*',
        ],

        [
            'type' => 'route',
            'name' => 'Productos',
            'icon' => 'shopping-cart',
            'route' => 'products.index',
            'routeIs' => 'products*',
        ],

        /* [
            'type' => 'route',
            'name' => 'contacto',
            'icon' => 'envelope',
            'route' => 'dashboard',
            'routeIs' => 'dashboard',
        ], */
        /* [
            'type' => 'route',
            'name' => 'Productos',
            'icon' => 'shopping-cart',
            'route' => 'products.index',
            'routeIs' => 'products*',
        ]
        
        [
            'type' => 'anchor',
            'name' => 'Contáctanos',
            'icon' => 'contact',
            'route' => '#contacto',
            'routeIs' => 'home',
        ], */

        /* [
            'type' => 'dropdown',
            'name' => 'Oportunidad',
            'iconTrailing' => 'chevron-down',
            'expandable' => true,
            'items' => [
                [
                    'type' => 'route',
                    'name' => 'Plan de compensación',
                    'icon' => 'shopping-cart',
                    'route' => 'products.index',
                    'routeIs' => 'products.favorites',
                ],
                [
                    'type' => 'anchor',
                    'name' => 'Contáctanos',
                    'icon' => 'contact',
                    'route' => '#contacto',
                    'routeIs' => 'home',
                ],
            ],
        ], */
        [
            'type' => 'route',
            'name' => 'Oficina',
            'icon' => 'building-office-2',
            'route' => 'dashboard',
            'routeIs' => 'dashboard',
        ],
    ];
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" {{-- class="dark" --}}>

<head>
    @include('partials.head')
</head>

<body class="min-h-screen bg-white text-base-600">
    <flux:header container class="border-b border-primary-600 bg-base-50">
        <flux:sidebar.toggle class="lg:hidden" icon="bars-3" inset="left" />

        <a href="{{ route('home') }}" class="ms-2 me-5 flex items-center space-x-2 rtl:space-x-reverse lg:ms-0"
            wire:navigate>
            <x-app-logo />
        </a>

        <flux:navbar class="-mb-px max-lg:hidden">
            {{-- Elementos combinados de la navbar --}}
            @foreach ($navbarItems as $item)
                @if ($item['type'] === 'route')
                    <flux:navbar.item icon="{{ $item['icon'] }}" :href="route($item['route'])"
                        :current="request()->routeIs($item['routeIs'])" wire:navigate>
                        {{ __($item['name']) }}
                    </flux:navbar.item>
                @elseif ($item['type'] === 'anchor')
                    <a href="{{ route($item['routeIs']) }}{{ $item['route'] }}">
                        <flux:navbar.item icon="{{ $item['icon'] }}" class="cursor-pointer">
                            {{ __($item['name']) }}
                        </flux:navbar.item>
                    </a>
                @elseif ($item['type'] === 'dropdown' && $item['expandable'])
                    <flux:dropdown class="max-lg:hidden">
                        <flux:navbar.item iconTrailing="{{ $item['iconTrailing'] }}">
                            {{ __($item['name']) }}
                        </flux:navbar.item>
                        <flux:navmenu>
                            @foreach ($item['items'] as $subItem)
                                @if ($subItem['type'] === 'route')
                                    <flux:navmenu.item icon="{{ $subItem['icon'] }}" :href="route($subItem['route'])"
                                        :current="request()->routeIs($subItem['routeIs'])" wire:navigate>
                                        {{ __($subItem['name']) }}
                                    </flux:navmenu.item>
                                @elseif ($subItem['type'] === 'anchor')
                                    <a href="{{ route($subItem['routeIs']) }}{{ $subItem['route'] }}">
                                        <flux:navmenu.item icon="{{ $subItem['icon'] }}" class="cursor-pointer">
                                            {{ __($subItem['name']) }}
                                        </flux:navmenu.item>
                                    </a>
                                @endif
                            @endforeach
                        </flux:navmenu>
                    </flux:dropdown>
                @endif
            @endforeach

             @can('admin.index')
                <flux:navbar.item icon="inbox" href="{{ route('admin.index') }}">Admin</flux:navbar.item>
            @endcan 
        </flux:navbar>


        <flux:spacer />

        {{-- <flux:navbar class="me-1.5 space-x-0.5 rtl:space-x-reverse py-0!">
            <flux:tooltip :content="__('Search')" position="bottom">
                <flux:navbar.item class="!h-10 [&>div>svg]:size-5" icon="magnifying-glass" href="#"
                    :label="__('Search')" />
            </flux:tooltip>
            <flux:tooltip :content="__('Repository')" position="bottom">
                <flux:navbar.item class="h-10 max-lg:hidden [&>div>svg]:size-5" icon="folder-git-2"
                    href="https://github.com/laravel/livewire-starter-kit" target="_blank" :label="__('Repository')" />
            </flux:tooltip>
            <flux:tooltip :content="__('Documentation')" position="bottom">
                <flux:navbar.item class="h-10 max-lg:hidden [&>div>svg]:size-5" icon="book-open-text"
                    href="https://laravel.com/docs/starter-kits#livewire" target="_blank" label="Documentation" />
            </flux:tooltip>
        </flux:navbar> --}}

        <!-- Desktop User Menu -->
        <flux:dropdown position="top" align="end">
            @auth
                <flux:profile class="cursor-pointer text-white" :initials="auth()->user()->initials()" />
                <flux:menu>
                    <flux:menu.radio.group>
                        <div class="p-0 text-sm font-normal">
                            <div class="flex items-center gap-2 px-1 py-1.5 text-left text-sm">
                                <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                    <span
                                        class="flex h-full w-full items-center justify-center rounded-lg bg-base-900 text-white">
                                        {{ auth()->user()->initials() }}
                                    </span>
                                </span>

                                <div class="grid flex-1 text-left text-sm leading-tight text-base-900">
                                    <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                                    <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                                </div>
                            </div>
                        </div>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <flux:menu.radio.group>
                        <flux:menu.item href="/settings/profile" icon="cog" wire:navigate>{{ __('Settings') }}
                        </flux:menu.item>
                        <flux:menu.item href="{{-- {{ route('orders.index') }} --}}" icon="arrow-path-rounded-square" wire:navigate>
                            Mis ordenes
                        </flux:menu.item>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                            {{ __('Log Out') }}
                        </flux:menu.item>
                    </form>
                </flux:menu>
            @else
                <flux:link class="flex text-primary-600 hover:text-primary-700" href="{{ route('login') }}" wire:navigate>
                    <span class="flex items-center">
                        Login <flux:icon.arrow-right-start-on-rectangle class="ml-0" />
                    </span>
                </flux:link>
            @endauth
        </flux:dropdown>

        <!-- cart -->
        @livewire('cart-icon')
    </flux:header>

    <!-- Mobile Menu -->
    <flux:sidebar stashable sticky class="lg:hidden border-r border-primary-600 bg-base-50">
        <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

        <a href="{{ route('home') }}" class="ml-1 flex items-center space-x-2" wire:navigate>
            <x-app-logo />
        </a>

        <flux:navlist variant="outline">
            <flux:navlist.group heading="Plataforma">
                @foreach ($navbarItems as $item)
                    @if ($item['type'] === 'route')
                        <flux:navlist.item icon="{{ $item['icon'] }}" :href="route($item['route'])"
                            :current="request()->routeIs($item['routeIs'])" wire:navigate>
                            {{ __($item['name']) }}
                        </flux:navlist.item>
                    @elseif ($item['type'] === 'anchor')
                        <a href="{{ route($item['routeIs']) }}{{ $item['route'] }}"
                            x-on:click="document.body.removeAttribute('data-show-stashed-sidebar')">
                            <flux:navlist.item icon="{{ $item['icon'] }}" class="cursor-pointer">
                                {{ __($item['name']) }}
                            </flux:navlist.item>
                        </a>
                    @elseif ($item['type'] === 'dropdown' && $item['expandable'])
                        <flux:navlist.group expandable :heading="$item['name']">
                            @foreach ($item['items'] as $subItem)
                                @if ($subItem['type'] === 'route')
                                    <flux:navlist.item icon="{{ $subItem['icon'] }}" :href="route($subItem['route'])"
                                        :current="request()->routeIs($subItem['routeIs'])" wire:navigate>
                                        {{ __($subItem['name']) }}
                                    </flux:navlist.item>
                                @elseif ($subItem['type'] === 'anchor')
                                    <a href="{{ route($subItem['routeIs']) }}{{ $subItem['route'] }}"
                                        x-on:click="document.body.removeAttribute('data-show-stashed-sidebar')">
                                        <flux:navlist.item icon="{{ $subItem['icon'] }}" class="cursor-pointer">
                                            {{ __($subItem['name']) }}
                                        </flux:navlist.item>
                                    </a>
                                @endif
                            @endforeach
                        </flux:navlist.group>
                    @endif
                @endforeach
                @can('admin.index')
                    <flux:navlist.item icon="inbox" href="{{ route('admin.index') }}">Admin</flux:navlist.item>
                @endcan
            </flux:navlist.group>
        </flux:navlist>

        <flux:spacer />

    </flux:sidebar>


    {{ $slot }}

    @fluxScripts
</body>

</html>
