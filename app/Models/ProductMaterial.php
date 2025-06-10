<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductMaterial extends Model
{
    public $timestamps = false;
    public $fillable = [
        'product_id',
        'material_id',
        'quantity'
    ];

    // Связываемся с сущностью материала
    public function material()
    {
        return $this->belongsTo(Material::class);
    }

    // Связываемся с сущностью продукта
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
