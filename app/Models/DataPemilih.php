<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPemilih extends Model
{
    use HasFactory;
    protected $fillable = [
        'tps_id',
        'kategori',
        'suara'
    ];
}
