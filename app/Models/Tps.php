<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class Tps extends Model
{
    use HasFactory;
    use Sluggable;
    public function CountCaleg(): HasMany
    {
        return $this->hasMany(CountCaleg::class);
    }
    public function desa(): BelongsTo
    {
        return $this->belongsTo(Desa::class);
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nomortps'
            ]
        ];
    }
}
