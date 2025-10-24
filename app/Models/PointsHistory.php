<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PointsHistory extends Model
{
    protected $fillable = ['user_id', 'start', 'end', 'personal', 'level1_points_total', 'level2_points_total', 'total_points'];
}
