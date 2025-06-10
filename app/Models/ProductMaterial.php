<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductMaterial extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'product_id',
        'material_id',
        'quantity'
    ];
}
