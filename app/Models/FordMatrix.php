<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FordMatrix extends Model
{
     
   protected $fillable = ['user_id', 'placement_id', 'sponsor_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
