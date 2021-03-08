<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    public static function index(){
        return Post::where('draft', false)
            ->paginate(9);
    }

    public static function videoprev(){
        return Post::where('draft', false)
        ->paginate(6);
    }
}
