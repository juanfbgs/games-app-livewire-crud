<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Videogame extends Model
{
    //

    protected $fillable = [
        'title',
        'description',
        'image',
        'rating',
        'price',
        'release_date',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function studio(): BelongsTo
    {
        return $this->belongsTo(Studio::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
