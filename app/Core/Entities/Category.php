<?php

namespace App\Core\Entities;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='categories'; 
    //protected $connection='mysql'; para trabajar con mas de una bd 
    protected $fillable=['name','description']; //para ver los campos que van hacer publicos para ingresar a bd

    public function books(){
        return $this->hasMany(Book::class, 'category_id'); //Una categoria tiene muchos libros 
        //de que clase voy a obtener esos muchos
        
    }
}
