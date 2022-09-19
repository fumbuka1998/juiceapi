<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    use HasFactory;

    public $fillable = [];

 
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

  
    public function Products(): HasMany
    {
        return $this->hasMany(Products::class, 'product_id');
    }

}
