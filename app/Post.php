<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    public static function generateSlug($title){

        $slug = $title;
        return $slug;
    }

}
