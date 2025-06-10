<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'product_type_id',
        'name',
        'article',
        'minPrice',
        'width'
    ];

    // Связь с сущностью типа продукта
    public function productType()
    {
        return $this->belongsTo(ProductType::class);
    }

    // Связь с сущностями материалов продукта (1 ко многим)
    public function productMaterials()
    {
        return $this->hasMany(ProductMaterial::class);
    }

    // Pivot для подсчёта количества
    public function materials()
    {
        return $this->belongsToMany(Material::class, 'product_materials')
            ->withPivot('quantity');
    }
}
