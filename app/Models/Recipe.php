<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;



    public static function find($slug){
        $recipes = self::all();
        foreach($recipes as $recipe){
            if($recipe['slug'] === $slug){
                return $recipe;
            }
        }

    }
}
