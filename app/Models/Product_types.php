<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_types extends Model
{
    protected  $primaryKey = 'type_id';
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'cost',
    ];
}
