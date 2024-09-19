<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Observation extends Model
{
    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    public function procedure()
    {
        return $this->hasMany(Procedure::class);
    } 
}
