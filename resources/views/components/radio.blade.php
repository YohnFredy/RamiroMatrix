@props([
    'name' => 'name',
    'label' => 'name',
    'options' => [],
])

<div class="mb-5">
    @if($label ?? false)
        <label class="block text-base-900">{{ $label }}</label>
    @endif
    <div class="flex items-center pt-3 space-x-4">
        @foreach($options as $option)
            <label class="flex items-center">
                <input type="radio" name="{{ $name }}" value="{{ $option['value'] }}"
                       {{ $attributes->merge(['class' => 'w-4 h-4 bg-gray-100 border-gray-300']) }}
                       @checked(old($name) == $option['value'])>
                <span class="ms-2 text-sm font-medium text-base-700 ">{{ $option['label'] }}</span>
            </label>
        @endforeach
    </div>
</div>