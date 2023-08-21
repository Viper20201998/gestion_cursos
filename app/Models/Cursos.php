<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    use HasFactory;
    //colocamos el nombre de la tabla de la base de datos
    protected $table = 'courses';
    //update_at
    //create_at => fecha de registro
    //validamos que esos 2 campos no estan el la tabla
    public $timestamps = false;
}
