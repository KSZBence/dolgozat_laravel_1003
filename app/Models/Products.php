<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected  $primaryKey = 'item_id';
    use HasFactory;

    protected $fillable = [
        'type_id',
        'date'
    ];
}
