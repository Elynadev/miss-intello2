<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    // app/Models/Category.php
public function articles()
{
    return $this->hasMany(Article::class);
}

}
