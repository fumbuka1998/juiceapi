<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SMS extends Model
{
    public $fillable=['name', 'email','subject','message'];

   
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
