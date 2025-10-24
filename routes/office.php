<?php


use App\Livewire\Office\Dashboard;
use App\Livewire\Office\MatrixTree;
use Illuminate\Support\Facades\Route;
use App\Livewire\Office\UnilevelTree;


Route::get('dashboard', Dashboard::class)->name('dashboard');
Route::get('matirx/tree', MatrixTree::class)->name('matrix-tree');

Route::get('unilevel/tree', UnilevelTree::class)->name('unilevel-tree');




/* Route::get('comisiones', Commissions::class)->name('commissions');

Route::get('unilevel/tree', UnilevelTree::class)->name('unilevel-tree');

Route::get('agregar-factura', AddInvoice::class)->name('add-invoice'); */


