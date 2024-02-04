<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    use HasFactory;
    use Sluggable;
    public function kecamatan(): HasMany
    {
        return $this->hasMany(Kecamatan::class);
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'Kota'
            ]
        ];
    }
}
