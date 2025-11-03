<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Business extends Model
{
   use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'nit',
        'phone',
        'address',
        'country_id',
        'department_id',
        'city_id',
        'city',
        'seller_commission_rate',
        'sponsor_commission_rate',
        'min_company_commission',
        'max_company_commission',
    ];

    /**
     * Obtiene la ciudad a la que pertenece el comercio.
     */
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    /**
     * Obtiene el departamento al que pertenece el comercio.
     */
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

    /**
     * Obtiene el país al que pertenece el comercio.
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * Obtiene todas las ventas asociadas a este comercio.
     */
    public function sales(): HasMany
    {
        return $this->hasMany(Sale::class);
    }
}
