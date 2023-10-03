<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Baskets extends Model
{
    protected  $primaryKey = 'basket_id';
    use HasFactory;

    protected $fillable = [
        'item_id',
        'user_id'
    ];
}
