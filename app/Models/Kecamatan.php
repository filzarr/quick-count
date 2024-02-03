<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class Kecamatan extends Model
{
    use Sluggable;
    use HasFactory;
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'kecamatan'
            ]
        ];
    }
}
