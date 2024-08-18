<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    protected $fillable = [
        'coupon_code',
        'coupon_discount',
        'discount_type',
        'coupon_start_date',
        'coupon_end_date',
        'coupon_max_usage',
        'coupon_description',
        'store_id',
        'user_id',
    ];
}
