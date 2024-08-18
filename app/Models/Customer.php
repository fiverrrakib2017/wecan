<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_first_name',
        'customer_last_name',
        'customer_email',
        'customer_country',
        'customer_region',
        'customer_city',
        'customer_phone',
        'customer_notes',
        'store_id',
        'user_id',
    ];
}
