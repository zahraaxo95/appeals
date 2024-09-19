<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administration extends Model
{
    public function Sector()
    {
        return $this->belongsTo(Sector::class);
    }

    public function division()
    {
        return $this->hasMany(Division::class);
    }    
}
