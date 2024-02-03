<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountPartai extends Model
{
    use HasFactory;
    protected $fillable = [
    'partai_id',
    'suara',
    'tps_id'
    ];
}
