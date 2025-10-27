<div>
    <div class="md:mx-auto max-w-7xl md:px-4 lg:px-8 pb-4">

        <!-- Breadcrumbs para móvil (sin cambios) -->
        <flux:breadcrumbs class="md:hidden mb-4">
            <flux:breadcrumbs.item href="{{ route('home') }}">Inicio</flux:breadcrumbs.item>
            <flux:breadcrumbs.item href="{{ route('videos.index') }}">Videos</flux:breadcrumbs.item>
        </flux:breadcrumbs>

        <div class="grid grid-cols-1 lg:grid-cols-3 md:gap-x-8 gap-y-6">

            <!-- Columna Principal: Video e Información (sin cambios) -->
            <div class="lg:col-span-2">
                <div class="-mx-5 sm:mx-0">
                    <div class="relative w-full" style="padding-bottom: 56.25%;">
                        <iframe id="youtube-player" class="absolute top-0 left-0 w-full h-full md:rounded-xl shadow-lg"
                             src="https://www.youtube.com/embed/{{ $video->youtube_url }}?enablejsapi=1"
                            title="{{ $video->name }}" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
                <div class="mt-4 px-2 sm:px-0">
                    <h1 class="text-xl font-bold text-base-800">{{ $video->name }}</h1>
                    <p class="text-sm text-base-600 mt-1">{{ $video->short_description }}</p>
                </div>
            </div>

            <!-- Columna Secundaria: Lista de Videos "A continuación" (MODIFICADA) -->
            <div class="lg:col-span-1 px-2 sm:px-0">
                <h2 class="text-lg font-bold text-base-800 mb-4">A continuación</h2>

                <!-- 1. Contenedor de la lista con scroll SÓLO en pantallas grandes -->
                <div class="flex flex-col space-y-4 lg:h-[500px] lg:overflow-y-auto lg:pr-2">

                    <!-- Asumiendo que la variable es $relatedVideos como en el ejemplo anterior -->
                    @foreach ($videos as $nextVideo)
                        <!-- 2. Tarjeta de video responsiva -->
                        <!-- Por defecto (móvil) es un 'block'. En 'md' y superior, se convierte en 'flex' -->
                        <a href="{{ route('videos.show', $nextVideo->slug) }}"
                           class="group block md:flex md:items-start md:space-x-3">

                            <!-- Miniatura -->
                            <!-- En móvil ocupa el ancho completo. En 'md' y superior, tiene un ancho fijo. -->
                            <div class="w-full md:w-40 md:flex-shrink-0">
                                <img src="https://img.youtube.com/vi/{{ $nextVideo->youtube_url }}/hqdefault.jpg"
                                    alt="{{ $nextVideo->name }}"
                                    class="w-full rounded-lg object-cover group-hover:opacity-80 transition-opacity">
                            </div>

                            <!-- Información del video -->
                            <!-- En móvil tiene margen superior. En 'md' y superior, no tiene margen y crece. -->
                            <div class="mt-2 md:mt-0 md:flex-grow">
                                <p class="text-sm font-semibold text-base-800 leading-tight group-hover:text-accent-3 transition-colors">
                                    {{ $nextVideo->name }}
                                </p>
                                <p class="text-xs text-base-500 mt-1">{!! Str::limit($nextVideo->short_description, 40) !!}</p>
                            </div>
                        </a>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <!-- Cargamos la API de YouTube iFrame -->
    <script src="https://www.youtube.com/iframe_api"></script>

    <script>
        let player;
        let progressInterval;
        let trackingSessionStarted = false;

        // Esta función es llamada automáticamente por la API de YouTube cuando está lista.
        function onYouTubeIframeAPIReady() {
            player = new YT.Player('youtube-player', {
                events: {
                    'onReady': onPlayerReady,
                    'onStateChange': onPlayerStateChange
                }
            });
        }

        // La API llamará a esta función cuando el reproductor de video esté listo.
        function onPlayerReady(event) {
            // El reproductor está listo.
        }

        // Esta función se llama cada vez que el estado del reproductor cambia.
        function onPlayerStateChange(event) {
            // Si el estado es "PLAYING" (1)
            if (event.data == YT.PlayerState.PLAYING) {
                
                // Si la sesión de seguimiento aún no ha comenzado, la iniciamos.
                if (!trackingSessionStarted) {
                    const duration = player.getDuration();
                    // Llamamos al método para reiniciar los contadores de tiempo en la BD
                    @this.startVideoTracking(duration);
                    
                    // Marcamos la sesión como iniciada para que no se vuelva a llamar
                    trackingSessionStarted = true;
                }

                // Limpiamos cualquier intervalo anterior por si acaso
                clearInterval(progressInterval);
                
                // Creamos el intervalo para actualizar el progreso
                progressInterval = setInterval(() => {
                    const currentTime = player.getCurrentTime();
                    // Enviamos solo el tiempo actual
                    @this.updateProgress(currentTime); 
                }, 5000); // 5000 milisegundos = 5 segundos

            } 
            // Si el estado es "PAUSED" (2) o "ENDED" (0)
            else if (event.data == YT.PlayerState.PAUSED || event.data == YT.PlayerState.ENDED) {
                // Detenemos el envío de progreso cuando el video se pausa o termina
                clearInterval(progressInterval);
            }

            // Si el estado es "ENDED" (0) - Video completado
            if (event.data == YT.PlayerState.ENDED) {
                // Llamamos al método final para marcar como completado
                @this.markAsCompleted();
            }
        }

        // Limpieza: Asegúrate de detener el intervalo si el usuario navega fuera de la página
        document.addEventListener('livewire:navigating', () => {
            if (progressInterval) {
                clearInterval(progressInterval);
            }
        });
    </script>
@endpush