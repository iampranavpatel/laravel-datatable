<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $table = 'product';

    protected $fillable = [
        'name',
        'description',
        'status',
        'created_at',
        'updated_at',
    ];
}
