<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Caleg extends Model
{
    use HasFactory;
    use Sluggable;
    public function count_calegs(): HasMany
    {
        return $this->hasMany(CountCaleg::class, 'caleg_id');
    }
    public function partai(): BelongsTo
    {
        return $this->belongsTo(Partai::class, 'id');
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'namacaleg'
            ]
        ];
    }
}
