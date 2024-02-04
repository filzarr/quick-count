<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class Desa extends Model
{
    use Sluggable;
    use HasFactory;
    public function Tps(): HasMany
    {
        return $this->hasMany(Tps::class);
    }
    public function Kecamatan(): BelongsTo
    {
        return $this->belongsTo(Kecamatan::class);
    }
    
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'desa'
            ]
        ];
    }
}
