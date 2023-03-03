<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    protected $fillable = ['name', 'china_price', 'taiwan_price', 'category', 'kyb_price', 'japan_price', 'part_number'];
    use HasFactory;
}
