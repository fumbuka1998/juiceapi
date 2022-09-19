<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public $fillable=[
        'title','price','description','quantity'
    ];
  
    public function Carts()
    {
        return $this->belongsTo(Carts::class);
    }

}
