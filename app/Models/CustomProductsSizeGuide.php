<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomProductsSizeGuide extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'size_guide_name',
        'size_guide_number',
        'size_guide_short_size',
        'size_guide_shirt_size',
        'size_guide_quantity',
    ];
}
