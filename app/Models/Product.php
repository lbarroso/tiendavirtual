<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $fillable = ['isbn','clave','title','price','stock','description','category','genre'];

    // confirmar nombre de tabla
    protected $table = 'products';

    // desactivar timestamps
    public $timestamps = false; 

}
