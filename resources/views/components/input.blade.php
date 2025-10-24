@props(['label' => '', 'for' => '', 'disabled' => false])

{{-- <p class=" text-base-900"></p> --}}

<div class="mb-5">
    <label for="{{ $for }}" class="block mb-2 text-sm font-medium text-base-900">
        {{ $label }}
    </label>


    <p class=" text-primary-700"></p>
    <input 
        {{ $disabled ? 'disabled' : '' }} 
        {!! $attributes->merge([
            'class' => 'block w-full border text-sm rounded-lg p-2.5 focus:outline-1 ' . 
                        ($disabled 
                            ? 'bg-base-50 text-base-600 border-base-50 cursor-not-allowed' 
                            : 'bg-base-50 border-primary-600 text-base-700 focus:outline-primary-600 focus:bg-white')
        ]) !!}
    >

    @error($for)
        <p {{ $attributes->merge(['class' => 'text-sm text-accent-3']) }}>{{ $message }}</p>
    @enderror
</div>

