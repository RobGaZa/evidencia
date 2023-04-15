<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'cantidad',
        'precio_unitario',
        'precio_total',
        'estatus'
    ];

    public function products(): HasMany
    {
         return $this->hasMany(Product::class, 'product_id');
    }
}
