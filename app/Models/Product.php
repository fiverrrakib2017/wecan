<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'product_slug',
        'review_description',
        'product_price',
        'product_comprice',
        'product_costprice',
        'product_image',
        'product_v_size_material_color',
        'product_v_option',
        'product_v_type_add_value',
        'online_store',
        'product_sku',
        'product_barcode',
        'product_weight',
        'product_thumbnail',
        'store_id',
        'user_id',
    ];
}
