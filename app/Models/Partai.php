<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Partai extends Model
{
    use HasFactory;
    use Sluggable;
    public function calegs(): HasMany
    {
        return $this->hasMany(Caleg::class, 'partai_id');
    }
    public function countpartai(): HasMany
    {
        return $this->hasMany(CountPartai::class);
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'partai'
            ]
        ];
    }
}
