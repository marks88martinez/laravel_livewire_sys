<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'barcode', 'cost', 'cost', 'price', 'stock', 'alerts', 'image', 'category_id'];


    //6CF2A6D14A7944DC126062B121077A2F2A92BDA99E9C61E739A3F5A906E93472
    // LUISFAX.COM


}
