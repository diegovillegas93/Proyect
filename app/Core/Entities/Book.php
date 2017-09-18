<?php

namespace App\Core\Entities;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table='books';
    protected $fillable=['title','description','picture','category_id'];

    public function category(){
        return $this->belongTo(Category::class, 'category_id'); 
    }
}
