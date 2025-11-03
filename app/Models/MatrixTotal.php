<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matrixTotal extends Model
{
     use HasFactory;

    protected $fillable = ['user_id', 'status', 'current_affiliates', 'two_levels_total_affiliates', 'direct_affiliates', 'total_affiliates', 'total_unilevel'];
}
