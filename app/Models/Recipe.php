<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'ingredients', 'category', 'instructions', 'image'];

    public static function find($slug){
        $recipes = self::all();
        foreach($recipes as $recipe){
            if($recipe['slug'] === $slug){
                return $recipe;
            }
        }

    }

    public function scopeFilter($query, array $filters){
        if($filters['category'] ?? false){
            $query->where('category', 'like', '%' . request('category') . '%');
        }

        if($filters['search'] ?? false){
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('category', 'like', '%' . request('search') . '%')
                ->orWhere('ingredients', 'like', '%' . request('search') . '%');
        }
    }
}
