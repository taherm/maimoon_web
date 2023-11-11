<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bush extends Model
{
    protected $fillable = ['car', 'category', 'size', 'part_number'];
    use HasFactory;
}
