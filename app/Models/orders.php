<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;
    public function products()
    {
        return $this->hasMany(products::class);
    }
    public function category()
    {
        return $this->hasMany(category::class);
    }
}
