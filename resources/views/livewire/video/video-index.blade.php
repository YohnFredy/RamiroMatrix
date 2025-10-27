<div>

    {{-- <div class="relative w-full flex items-center mb-4">
        <!-- Flecha izquierda -->
        <flux:button class="z-10 bg-white/80 hover:bg-white shadow p-2 rounded-full mr-2" onclick="scrollButtons(-200)">
            &#10094;
        </flux:button>

        <!-- Contenedor de scroll -->
        <div id="scrollContainer" class="flex space-x-3 overflow-x-auto scroll-smooth hide-scroll py-3">

            <flux:button class="whitespace-nowrap bg-gray-200 hover:bg-gray-300 text-sm px-4 py-2 rounded-full">Comedias
                dramáticas</flux:button>
            <flux:button class="whitespace-nowrap bg-gray-200 hover:bg-gray-300 text-sm px-4 py-2 rounded-full">Música de
                meditación</flux:button>
            <flux:button class="whitespace-nowrap bg-gray-200 hover:bg-gray-300 text-sm px-4 py-2 rounded-full">Sonatas
            </flux:button>
            <flux:button class="whitespace-nowrap bg-gray-200 hover:bg-gray-300 text-sm px-4 py-2 rounded-full">R&B
            </flux:button>
            <flux:button class="whitespace-nowrap bg-gray-200 hover:bg-gray-300 text-sm px-4 py-2 rounded-full">Rock
                progresivo</flux:button>
            <flux:button class="whitespace-nowrap bg-gray-200 hover:bg-gray-300 text-sm px-4 py-2 rounded-full">Pop
                latino
            </flux:button>
            <flux:button class="whitespace-nowrap bg-gray-200 hover:bg-gray-300 text-sm px-4 py-2 rounded-full">Subidos
                recientemente</flux:button>
            <flux:button class="whitespace-nowrap bg-gray-200 hover:bg-gray-300 text-sm px-4 py-2 rounded-full">Vistos
            </flux:button>
            <flux:button class="whitespace-nowrap bg-gray-200 hover:bg-gray-300 text-sm px-4 py-2 rounded-full">Novedad
            </flux:button>

        </div>

        <!-- Flecha derecha -->
        <flux:button class="z-10 bg-white/80 hover:bg-white shadow p-2 rounded-full ml-2" onclick="scrollButtons(200)">
            &#10095;
        </flux:button>
    </div>
 --}}


    <div class="grid grid-cols-4 gap-x-4 gap-y-6">
        <div class="col-span-4">
            <h2 class="text-xl text-base-700 font-semibold">Ver video</h2>
        </div>

        @foreach ($unwatchedVideos as $video)
            <div wire:key="{{ $video->id }}" class="col-span-4 md:col-span-2 lg:col-span-1">
                <!-- 1. El enlace principal que envuelve toda la tarjeta -->
                <!-- Usamos la clase 'group' para controlar efectos hover en los elementos hijos -->
                <a href="{{ route('videos.show', $video->slug) }}" class="group">

                    <!-- Contenedor de la imagen con efectos visuales -->
                    <div class="relative overflow-hidden rounded-lg shadow-lg">
                        <!-- 2. La miniatura dinámica de YouTube -->
                        <img src="https://img.youtube.com/vi/{{ $video->youtube_url }}/hqdefault.jpg"
                            alt="{{ $video->name }}"
                            class="w-full h-40 object-cover group-hover:scale-105 transition-transform duration-300">

                        <!-- 3. (Opcional) Icono de 'Play' que aparece al pasar el cursor -->
                        <div
                            class="absolute inset-0 bg-black/30 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>

                    <!-- Información del video -->
                    <div class="mt-2">
                        <!-- 4. Título y descripción dinámicos -->
                        <p class="text-sm text-base-800 font-semibold group-hover:text-accent-3 transition-colors">
                            {{ $video->name }}
                        </p>
                        <p class="text-xs text-base-600 mt-1">
                            {{ $video->short_description }}
                        </p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

    <div class="grid grid-cols-4 gap-x-4 gap-y-6 mt-10">
        <div class="col-span-4">
            <h2 class="text-xl text-base-700 font-semibold">Videos vistos</h2>
        </div>

        @foreach ($videosViewed as $video)
            <div wire:key="{{ $video->id }}" class="col-span-4 md:col-span-2 lg:col-span-1">
                <!-- 1. El enlace principal que envuelve toda la tarjeta -->
                <!-- Usamos la clase 'group' para controlar efectos hover en los elementos hijos -->
                <a href="{{ route('videos.show', $video->slug) }}" class="group">

                    <!-- Contenedor de la imagen con efectos visuales -->
                    <div class="relative overflow-hidden rounded-lg shadow-lg">
                        <!-- 2. La miniatura dinámica de YouTube -->
                        <img src="https://img.youtube.com/vi/{{ $video->youtube_url }}/hqdefault.jpg"
                            alt="{{ $video->name }}"
                            class="w-full h-40 object-cover group-hover:scale-105 transition-transform duration-300">

                        <!-- 3. (Opcional) Icono de 'Play' que aparece al pasar el cursor -->
                        <div
                            class="absolute inset-0 bg-black/30 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>

                    <!-- Información del video -->
                    <div class="mt-2">
                        <!-- 4. Título y descripción dinámicos -->
                        <p class="text-sm text-base-800 font-semibold group-hover:text-accent-3 transition-colors">
                            {{ $video->name }}
                        </p>
                        <p class="text-xs text-base-600 mt-1">
                            {{ $video->short_description }}
                        </p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>



    <style>
        /* Ocultar scrollbar solo aquí */
        .hide-scroll::-webkit-scrollbar {
            display: none;
        }

        .hide-scroll {
            scrollbar-width: none;
            -ms-overflow-style: none;
        }
    </style>


    <script>
        function scrollButtons(amount) {
            const container = document.getElementById('scrollContainer');
            container.scrollBy({
                left: amount,
                behavior: 'smooth'
            });
        }
    </script>
</div>
