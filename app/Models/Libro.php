<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);//Pertenece a una categoría.
    }
    public function etiquetas(){
        return $this->belongsToMany(Etiqueta::class); // Muchos a muchos
    }
    protected $dates = ['fecha']; // pasar fechas a carbon
}
