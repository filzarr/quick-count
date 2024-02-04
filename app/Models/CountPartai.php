<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountPartai extends Model
{
    use HasFactory;
    public function partai(): BelongsTo
    {
        return $this->belongsTo(Partai::class);
    }
    public function tps(): BelongsTo
    {
        return $this->belongsTo(Tps::class);
    }
    protected $fillable = [
    'partai_id',
    'suara',
    'tps_id'
    ];
}
