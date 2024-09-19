<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    public function administration()
    {
        return $this->belongsTo(Administration::class);
    }

    public function observation()
    {
        return $this->hasMany(Observation::class);
    } 
}
