<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Characteristic extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'characteristics';
    protected $fillable = [
        'value', 
        'attribute_id',
        'product_id'
    ];
}
