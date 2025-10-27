<li class="py-1" wire:key="category-{{ $category->id }}">
    @if ($category->children->isEmpty())
        {{-- Categoría sin hijos --}}
        <button wire:click="category({{ $category->id }})" 
            class=" cursor-pointer w-full text-left flex items-center  px-2 py-0.5  hover:text-secondary-600 hover:bg-base-50 rounded-md   group">
            <span class="flex-1">{{ $category->name }}</span>
            <span class="opacity-0 group-hover:opacity-100 duration-300 text-base-900">
                <i class="fas fa-arrow-right text-sm"></i>
            </span>
        </button>
    @else
        {{-- Categoría con hijos --}}
        <button 
            class="w-full px-2 py-0.5 hover:text-secondary-600 hover:bg-base-50 focus:bg-base-50 rounded-md cursor-pointer"
            x-on:click="openCategories[{{ $category->id }}] = !openCategories[{{ $category->id }}]">
            <span class="flex items-center justify-between ">
                <p class="">{{ $category->name }}</p>
                <i
                    x-bind:class="openCategories[{{ $category->id }}] ?
                        'fas fa-chevron-down text-accent-3' :
                        'fas fa-chevron-right text-primary-600'"></i>
            </span>
        </button>

        <div x-show="openCategories[{{ $category->id }}]" x-collapse class="ml-2">
            <ul class="divide-y-1 divide-neutral-400">
                @foreach ($category->children as $child)
                    @include('partials.category-item', [
                        'category' => $child,
                        'level' => $level + 1,
                    ])
                @endforeach
            </ul>
        </div>
    @endif
</li>
