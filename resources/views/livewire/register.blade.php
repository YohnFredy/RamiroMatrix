<div class="flex flex-col gap-6">
    <x-auth-header title="Crear una cuenta" description="Ingresa tus datos a continuación para crear tu cuenta" />

    <form method="POST" wire:submit="save">

        <div class="grid grid-cols-2 gap-x-3">
            <!-- Name -->
            <div class="col-span-2 sm:col-span-1">
                <x-input wire:model="name" label="{{ __('Nombre') }}:" type="text" for="name" autofocus required
                    autocomplete="name" placeholder="Nombre" />
            </div>

            <!-- Apellidos -->
            <div class="col-span-2 sm:col-span-1">
                <x-input wire:model="last_name" id="last_name" label="{{ __('Apellido') }}:" type="text"
                    for="last_name" autofocus autocomplete="last_name" placeholder="Apellidos" required />
            </div>

            <!-- username -->
            <div class="col-span-2 sm:col-span-1">
                <x-input wire:model.live.debounce.500ms="username" id="username" label="Nombre de usuario:"
                    type="text" for="username" placeholder="Nombre de usuario" required />
            </div>

            <!-- Dni -->
            <div class="col-span-2 sm:col-span-1">
                <x-input wire:model.blur="dni" id="dni" label="Número de documento:" type="text" for="dni"
                    placeholder="Número de documento" required />
            </div>

            <!-- Email -->
            <div class="col-span-2">
                <x-input wire:model.blur="email" id="email" label="{{ __('Email address') }}:" type="email"
                    for="email" autocomplete="email" placeholder="email@example.com" required />
            </div>

            <!-- Sexo -->
            <div class="col-span-2 sm:col-span-1">
                <x-radio class="" name="sex" label="Sexo:" wire:model="sex" :options="[['value' => 'male', 'label' => 'Masculino'], ['value' => 'female', 'label' => 'Femenino']]" />
            </div>

            <div class="col-span-2 sm:col-span-1 mb-5">
                <x-input wire:model.live="birthdate" type="date" max="2999-12-31" label="Fecha nacimiento:"
                    required />
                <div class="text-sm text-danger -mt-5">
                    @error('birthdate')
                        {{ $message }}
                    @enderror
                </div>
            </div>

           <!-- Teléfono -->
            <div class="col-span-2 sm:col-span-1">
                <x-input wire:model.live="phone" label="Teléfono:" type="text" for="phone" placeholder="Teléfono"
                    required />
            </div>

            <div class="col-span-2 sm:col-span-1">
                <x-input wire:model.live="whatsApp" label="WhatsApp:" type="text" for="whatsApp" placeholder="WhatsApp"
                    required />
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
        </div>

        <div class="grid grid-cols-2 gap-x-3  ">
            <!-- Dirección -->
            <div class="col-span-2">
                <x-input wire:model="address" id="Dirección" label="Dirección:" type="text" for="address"
                    autocomplete="off" placeholder="Dirección" />
            </div>

            <!-- sponsor -->
            <div class="col-span-2 sm:col-span-1">
                <x-input wire:model="sponsor" id="sponsor" disabled label="Auspiciador:" type="text" for="sponsor"
                    placeholder="sponsor" required />
            </div>

            <!-- sponsor -->
            <div class="col-span-2 sm:col-span-1">
            </div>

            <!-- Password -->
            <div class=" col-span-2">
                <x-input wire:model.live.debounce.750ms="password" id="password" label="Contraseña:"
                    type="password" for="password" autocomplete="new-password" placeholder="Password" required />
            </div>

            <!-- Confirm Password -->
            <div class=" col-span-2">
                <x-input wire:model.live.debounce.750ms="password_confirmation" id="password_confirmation"
                    label="Confirmación de contraseña:" type="password" for="password_confirmation"
                    autocomplete="new-password" placeholder="Confirm password" required />
            </div>

            <div class="col-span-2 ">
                @include('terms-And-Conditions')
            </div>

            <div class=" col-span-2 flex items-center justify-end mt-5">
                <flux:button id="register-btn" type="submit" variant="primary" class=" w-full">
                    Crear una cuenta
                </flux:button>
            </div>

            @if (session('captcha'))
                <div x-data="{ show: false }" x-init="setTimeout(() => show = true, 2000)" x-show="show" x-transition
                    class="col-span-2 bg-danger/3 text-danger w-full rounded-2xl p-4 relative">
                    <button @click="show = false"
                        class="absolute top-2 right-3 text-danger hover:text-danger/60 text-xl font-bold"
                        aria-label="Cerrar">
                        &times;
                    </button>
                    {{ session('captcha') }}
                </div>
            @endif
        </div>

    </form>

    <div class="text-center text-sm text-zinc-600 dark:text-zinc-400">
        ¿Ya tienes una cuenta?
        <flux:link class="ml-1" href="{{ route('login') }}" wire:navigate> Iniciar sesión</flux:link>
    </div>

    <flux:modal wire:model.live="watchVideo" :closable="false" :dismissible="false" class="md:w-2xl">
        <div class="space-y-6">
            <div>
                <flux:heading class=" text-base-800!" size="lg"> Para completar tu registro, es necesario que
                    veas
                    el siguiente video hasta el final sin salir de esta página.</flux:heading>
                <flux:subheading class=" text-base-600!">✅ Una vez finalice el video, tu registro se generará
                    automáticamente.
                    ⚠️ Si abandonas la página antes de que termine, el registro no se completará.</flux:subheading>
            </div>

            {{-- CONTENEDOR DEL VIDEO --}}
            <div wire:ignore class="relative w-full group" style="padding-bottom: 56.25%;">
                {{-- REPRODUCTOR --}}
                <div id="player" data-video-id="{{ $video }}"
                    class="absolute top-0 left-0 w-full h-full rounded-lg shadow-lg"></div>

                {{-- CONTROLES PERSONALIZADOS --}}
                <div id="custom-controls"
                    class="absolute bottom-0 left-0 w-full flex items-center gap-4 p-2 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">

                    <!-- Botón Play/Pausa -->
                    <button id="play-pause-btn" class="text-white">
                        <svg id="play-icon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <svg id="pause-icon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hidden"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 9v6m4-6v6m7-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </button>

                    <!-- Barra de Progreso (Interactiva) -->
                    <div id="progress-container" class="flex-grow h-2 bg-gray-500 rounded cursor-pointer">
                        <div id="progress-bar" class="h-full bg-blue-600 rounded" style="width: 0%;"></div>
                    </div>

                    <!-- Controles de Volumen -->
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
                        </svg>
                        <input id="volume-slider" type="range" min="0" max="100" value="100"
                            class="w-20 h-1 accent-blue-500">
                    </div>


                    <!-- Botón Pantalla Completa -->
                    <button id="fullscreen-btn" class="text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5v-4m0 0h-4m4 0l-5-5" />
                        </svg>
                    </button>

                </div>
            </div>

            <div id="success-message" class="hidden text-green-600 font-bold mt-4 text-center">
                ✅ Registro completado
            </div>
        </div>
    </flux:modal>

    <flux:modal wire:model.live="confirmingRegistration" :closable="false" :dismissible="false"
        class="md:w-3xl">
        <div class="space-y-6">
            <div>
                <flux:heading class=" text-primary!" size="lg">Confirmación de Registro</flux:heading>
                <flux:subheading class=" text-ink!">Tu cuenta ha sido creada exitosamente. Ahora puedes acceder a todas
                    las funcionalidades
                    de nuestra
                    plataforma.</flux:subheading>
            </div>

            <p class="mt-4 text-primary">
                Aquí tienes tus detalles de registro:
            </p>
            <ul class="mt-2 list-disc list-inside text-ink">
                <li><strong>Nombre de Usuario:</strong> {{ $username }}</li>
                <li><strong>Email:</strong> {{ $email }} </li>
            </ul>
            <flux:heading class=" text-primary!">Puedes empezar a explorar y utilizar nuestras funciones. Si tienes
                alguna pregunta o necesitas
                ayuda, no
                dudes en contactarnos.</flux:heading>

            <div class="flex">
                <flux:spacer />

                <div class=" space-x-2">
                    <flux:button class=" cursor-pointer" variant="primary" wire:click="redirectToHome"
                        type="button" variant="primary">
                        Inicio</flux:button>

                    {{--   <flux:button x-on:click="$wire.confirmingRegistration = false">Cerrar</flux:button> --}}
                </div>
            </div>
        </div>
    </flux:modal>

    <script>
        let player;
        let hasEnded = false;
        let userHasInteracted = false; // Nueva variable para controlar la primera interacción

        document.addEventListener("DOMContentLoaded", function() {
            // Cargar API YouTube
            let tag = document.createElement('script');
            tag.src = "https://www.youtube.com/iframe_api";
            let firstScriptTag = document.getElementsByTagName('script')[0];
            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
        });

        function onYouTubeIframeAPIReady() {

            const playerElement = document.getElementById('player');
            const videoId = playerElement.getAttribute('data-video-id');
            player = new YT.Player('player', {
                videoId: videoId, // 👈 Cambia tu ID si subes otro video
                playerVars: {
                    autoplay: 0, // ❌ NO se reproduce automáticamente
                    controls: 0, // ❌ SIN controles de YouTube
                    rel: 0,
                    modestbranding: 1,
                    disablekb: 1
                },
                events: {
                    onStateChange: onPlayerStateChange,
                    onReady: onPlayerReady
                }
            });
        }

        function onPlayerReady(event) {
            const playerElement = event.target.getIframe();

            // Referencias a los controles personalizados
            const playPauseBtn = document.getElementById('play-pause-btn');
            const playIcon = document.getElementById('play-icon');
            const pauseIcon = document.getElementById('pause-icon');
            const progressContainer = document.getElementById('progress-container');
            const progressBar = document.getElementById('progress-bar');
            const volumeSlider = document.getElementById('volume-slider');
            const fullscreenBtn = document.getElementById('fullscreen-btn');


            // --- LÓGICA DE CONTROLES ---

            // 1. Botón Play/Pausa
            playPauseBtn.addEventListener('click', () => {
                const playerState = player.getPlayerState();
                if (playerState === YT.PlayerState.PLAYING) {
                    player.pauseVideo();
                } else {
                    player.playVideo();
                }
            });

            // 2. Control de Volumen
            volumeSlider.addEventListener('input', (e) => {
                player.setVolume(e.target.value);
            });

            // 3. Botón Pantalla Completa
            fullscreenBtn.addEventListener('click', () => {
                playerElement.requestFullscreen();
            });

            // 4. Barra de Progreso (Lógica para NO adelantar)
            progressContainer.addEventListener('click', (e) => {
                const rect = progressContainer.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const clickedPercent = (x / progressContainer.offsetWidth);
                const duration = player.getDuration();
                const currentTime = player.getCurrentTime();

                const targetTime = duration * clickedPercent;

                // ✅ SOLO permite buscar si el tiempo es ANTERIOR al actual
                if (targetTime < currentTime) {
                    player.seekTo(targetTime, true);
                }
            });


            // ❌ Bloquea velocidad de reproducción
            player.setPlaybackRate(1);
            player.addEventListener("onPlaybackRateChange", () => {
                player.setPlaybackRate(1);
            });

            // ⏳ Actualiza la barra de progreso
            setInterval(() => {
                if (!hasEnded && player.getDuration) {
                    const progress = (player.getCurrentTime() / player.getDuration()) * 100;
                    progressBar.style.width = progress + '%';
                }
            }, 250);
        }

        function onPlayerStateChange(event) {
            const playIcon = document.getElementById('play-icon');
            const pauseIcon = document.getElementById('pause-icon');

            // Actualizar icono de Play/Pausa
            if (event.data === YT.PlayerState.PLAYING) {
                playIcon.classList.add('hidden');
                pauseIcon.classList.remove('hidden');
            } else {
                playIcon.classList.remove('hidden');
                pauseIcon.classList.add('hidden');
            }

            // --- LÓGICA DE FINALIZACIÓN ---
            if (event.data === YT.PlayerState.ENDED && !hasEnded) {
                hasEnded = true;
                document.getElementById('progress-bar').style.width = '100%';
                document.getElementById('success-message').classList.remove('hidden');

                // ✅ NUEVO: Salir de pantalla completa si es necesario
                // Esto comprueba si algún elemento está en pantalla completa.
                if (document.fullscreenElement) {
                    // Si es así, le pide al documento que salga del modo de pantalla completa.
                    document.exitFullscreen();
                }

                // ✅ LLAMAR a Livewire
                const component = Livewire.find(document.querySelector('[wire\\:id]').getAttribute('wire:id'));
                if (component) {
                    component.call('confirmationVideo');
                }
            }
        }
    </script>



    <script>
        // Selecciona el campo de entrada
        var usernameInput = document.getElementById('username');

        // Añade un evento 'input' para eliminar espacios en tiempo real
        usernameInput.addEventListener('input', function() {
            this.value = this.value.replace(/\s+/g, '');
        });
    </script>
</div>
