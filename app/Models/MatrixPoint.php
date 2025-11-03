<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class matrixPoint extends Model
{
     protected $fillable = ['user_id', 'personal', 'level1_points_total', 'level2_points_total', 'total_points',  'locked', 'approved'];
}
