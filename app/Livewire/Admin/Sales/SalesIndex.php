<?php

namespace App\Livewire\Admin\Sales;

use App\Models\Sale;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class SalesIndex extends Component
{

    use WithPagination;

    public $search = '';


    public function clearSearch()
    {
        $this->search = '';
        $this->resetPage();
    }

    #[Layout('components.layouts.admin')]
    public function render()
    {
        $sales = Sale::with(['user', 'seller', 'business'])
            ->where(function ($query) {
                $query->whereHas('user', function ($q) {
                    $q->where('name', 'like', '%' . $this->search . '%')
                        ->orWhere('email', 'like', '%' . $this->search . '%');
                })
                    ->orWhereHas('seller', function ($q) {
                        $q->where('name', 'like', '%' . $this->search . '%')
                            ->orWhere('email', 'like', '%' . $this->search . '%');
                    })
                    ->orWhereHas('business', function ($q) {
                        $q->where('name', 'like', '%' . $this->search . '%')
                            ->orWhere('nit', 'like', '%' . $this->search . '%');
                    })
                    ->orWhere('invoice_number', 'like', '%' . $this->search . '%');
            })
            ->latest()
            ->paginate(10);

        return view('livewire.admin.sales.sales-index', [
            'sales' => $sales,
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function deleteSale($id)
    {
        $sale = Sale::find($id);
        if ($sale) {
            $sale->delete();
            session()->flash('message', 'Venta eliminada exitosamente.');
        }
    }
}
