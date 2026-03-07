<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'slug',
        'stock',
        'is_active'
    ];
    //podemos hacer relaciones con otras tables, por ejemplo categorias,

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
}

