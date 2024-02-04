<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountCaleg extends Model
{
    use HasFactory;
    public function countcaleg(): BelongsTo
    {
        return $this->belongsTo(Caleg::class, 'id');
    }
    public function tps(): BelongsTo
    {
        return $this->belongsTo(Tps::class);
    }
    protected $fillable = [
        'caleg_id',
        'suara',
        'tps_id'
    ];
}
