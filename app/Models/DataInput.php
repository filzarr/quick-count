<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataInput extends Model
{
    use HasFactory;
    protected $fillable = [
        'tps_id',
        'nama',
        'noHp'
    ];
}
