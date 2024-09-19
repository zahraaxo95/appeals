<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    protected $fillable = ['procedure_name', 'procedure_content','observation_id'];

    public function observation()
    {
        return $this->belongsTo(Observation::class);
    }
}
