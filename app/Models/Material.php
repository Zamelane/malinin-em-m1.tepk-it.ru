<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name',
        'material_type_id',
        'price',
        'quantity',
        'minQuantity',
        'packageQuantity',
        'unit_id'
    ];

    // Связь с сущностью единицы измерения
    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    // Связь с сущностью типа материала
    public function materialType()
    {
        return $this->belongsTo(MaterialType::class);
    }
}
