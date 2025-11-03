<div class="max-w-4xl mx-auto py-10">

    {{-- Header dinámico --}}
    <h1 class="text-2xl font-bold mb-6">
        {{ $video && $video->exists ? 'Editar Video' : 'Crear Nuevo Video' }}
    </h1>


    <form wire:submit.prevent="{{ $video && $video->exists ? 'update' : 'save' }}" class="space-y-6">

        {{-- Nombre --}}
        <div>
            <label class="block text-sm font-medium text-gray-700">Nombre del video</label>
            <input type="text" wire:model="name"
                class="w-full border rounded-lg p-2 focus:ring focus:ring-blue-400">
            @error('name') <span class="text-red-700 text-sm">{{ $message }}</span> @enderror
        </div>

        {{-- Descripción corta --}}
        <div>
            <label class="block text-sm font-medium text-gray-700">Descripción corta</label>
            <textarea wire:model="short_description"
                class="w-full border rounded-lg p-2 h-32 focus:ring focus:ring-blue-400"></textarea>
            @error('short_description') <span class="text-red-700 text-sm">{{ $message }}</span> @enderror
        </div>

        {{-- URL de YouTube --}}
        <div>
            <label class="block text-sm font-medium text-gray-700">URL de YouTube</label>
            <input type="text" wire:model="youtube_url"
                class="w-full border rounded-lg p-2 focus:ring focus:ring-blue-400">
            @error('youtube_url') <span class="text-red-700 text-sm">{{ $message }}</span> @enderror
        </div>

        {{-- Imagen --}}
       {{--  <div>
            <label class="block text-sm font-medium text-gray-700">Imagen (opcional)</label>
            <input type="file" wire:model="image_path" class="w-full">
            @error('image_path') <span class="text-red-700 text-sm">{{ $message }}</span> @enderror

          
            @if ($video && $video->image_path)
                <div class="mt-3">
                    <img src="{{ asset($video->image_path) }}" class="w-40 rounded shadow">
                </div>
            @endif
        </div> --}}

        <div class="pt-4">
            <button type="submit"
                class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 shadow">
                {{ $video && $video->exists ? 'Actualizar Video' : 'Guardar Video' }}
            </button>
        </div>
    </form>

</div>

