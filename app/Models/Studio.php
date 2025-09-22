<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Studio extends Model
{
    protected $fillable = ['name', 'slug'];

    public function videogames(): HasMany
    {
        return $this->hasMany(Videogame::class);
    }
}
