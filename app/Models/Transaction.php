<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public $fillable = [
        'user_id',
        'product_id',
        'price',
        'status',
        'snap_token',
    ];
}
