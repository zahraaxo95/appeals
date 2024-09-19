<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appeal extends Model
{
    protected $fillable = [
        'civilId',
        'fullname',
        'phone',
        'appeal_reason',
    ];


}
