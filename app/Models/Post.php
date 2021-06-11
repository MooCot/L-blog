<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
		/**
    * Получить комментарии к посту блога.
    */
    public function category()
    {
			return $this->belongsTo(Category::class, 'cat_id');
    }
}
