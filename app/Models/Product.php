<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'name',
        'image',
        'stock',
        'harga',
        'categories_id'
    ];

    public function category()
    {
        return $this->belongsTo(category::class, 'categories_id', 'id');
    }
}
