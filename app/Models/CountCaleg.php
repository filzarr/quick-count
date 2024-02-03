<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountCaleg extends Model
{
    use HasFactory;
    protected $fillable = [
        'caleg_id',
        'suara',
        'tps_id'
    ];
}
