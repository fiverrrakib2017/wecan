<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        'review_email',
        'review_first_name',
        'review_last_name',
        'review_rate',
        'review_description',
        'q',
        'review_file',
        'store_id',
        'user_id',
    ];
}
