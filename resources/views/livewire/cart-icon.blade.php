<div>
    <!-- cart -->
    <a href="{{ route('products.cart') }}" :active="request()->routeIs('products.cart')"
        class=" relative flex items-center ml-3 
        {{ request()->routeIs('products.cart') ? 'text-secondary-600 hover:text-primary-700 border-b-2 border-primary-600' : 'text-primary-700 hover:text-secondary-600  ' }}">
        <div class=" text-2xl "><i class="fas fa-cart-arrow-down"></i></div>
        <div class=" absolute -top-1.5 left-5.5 w-5 h-5 rounded-full bg-accent-3 flex items-center justify-center">
            <p class="text-white text-[11px] ">
                {{ $this->totalQuantity ?: 0 }}
            </p>
        </div>
    </a>
</div>
