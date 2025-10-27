<?php

use App\Http\Controllers\OrderController;
use App\Livewire\Order\OrderCreate;
use App\Livewire\Product\Cart;
use App\Livewire\Product\ProductListing;
use App\Livewire\Product\ProductShow;
use App\Livewire\Register;
use App\Livewire\Video\VideoIndex;
use App\Livewire\Video\VideoShow;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('register/{sponsor}', Register::class)->name('register');

Route::get('videos', VideoIndex::class)->name('videos.index');
Route::get('videos/{video}', VideoShow::class)->name('videos.show');


Route::get('/productos', ProductListing::class)->name('products.index');
Route::get('producto/{product}', ProductShow::class)->name('products.show');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('settings/password', 'settings.password')->name('password.edit');
    Volt::route('settings/appearance', 'settings.appearance')->name('appearance.edit');

    Volt::route('settings/two-factor', 'settings.two-factor')
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');


    Route::get('carrito', Cart::class)->name('products.cart');
    Route::get('order/create', OrderCreate::class)->name('orders.create');
    Route::get('orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('orders/{order}/show', [OrderController::class, 'show'])->name('orders.show');

    //Pasarela de pagos Bold
    Route::get('/checkout/bold/{order}', [OrderController::class, 'boldCheckout'])->name('bold.checkout');
});

require __DIR__ . '/auth.php';
