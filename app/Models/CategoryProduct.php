<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    use HasFactory;
    // guarded desabilita la creacion masiva de los datos especificados
    protected $guarded =['id','created_at','updated_at'];
}
