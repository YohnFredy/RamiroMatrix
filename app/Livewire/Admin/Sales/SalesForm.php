<?php

namespace App\Livewire\Admin\Sales;

use App\Models\Business;
use App\Models\Sale;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Livewire\Attributes\Layout;
use Livewire\Component;

class SalesForm extends Component
{

  public ?Sale $sale = null;
    public $saleId;

    // Campos del formulario
    public $user_id;
    public $seller_id;
    public $business_id;
    public $total_sale_amount;
    public $total_commission_amount;
    public $seller_commission_earned;
    public $invoice_number;

    public $users = [];
    public $businesses = [];

    protected function rules()
    {
        return [
            'user_id' => 'required|exists:users,id',
            'seller_id' => 'required|exists:users,id',
            'business_id' => 'required|exists:businesses,id',
            'total_sale_amount' => 'required|numeric|min:0',
            'total_commission_amount' => 'required|numeric|min:0',
            'seller_commission_earned' => 'required|numeric|min:0',
            'invoice_number' => 'required|unique:sales,invoice_number,' . $this->saleId,
        ];
    }

    public function mount(?Sale $sale): void
    {
        $this->sale = $sale ?? new Sale();

        if ($this->sale->exists) {
            $this->saleId = $this->sale->id;
            $this->loadSaleData();
        }

        $this->users = User::all();
        $this->businesses = Business::select('id', 'name')->get();
    }


     private function loadSaleData(): void
    {
        $this->user_id = $this->sale->user_id;
        $this->seller_id = $this->sale->seller_id;
        $this->business_id = $this->sale->business_id;
        $this->total_sale_amount = $this->sale->total_sale_amount;
        $this->total_commission_amount = $this->sale->total_commission_amount;
        $this->seller_commission_earned = $this->sale->seller_commission_earned;
        $this->invoice_number = $this->sale->invoice_number;
    }

    public function save()
    {
        $validatedData = $this->validate();

        if ($this->sale->exists) {
            $this->sale->update($validatedData);
            session()->flash('success', 'La venta fue actualizada correctamente.');
        } else {
            Sale::create($validatedData);
            session()->flash('success', 'Venta creada exitosamente.');
        }

        return redirect()->route('admin.sales.index');
    }
    
    #[Layout('components.layouts.admin')]
    public function render()
    {
        return view('livewire.admin.sales.sales-form');
    }
}
