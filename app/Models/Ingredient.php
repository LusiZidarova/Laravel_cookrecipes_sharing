<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;
    public $table = "ingredients";

    protected $fillable = [
        'id',
        'name',
        'qty',
        'recipe_id',
        'measure_id'
    ];
}
