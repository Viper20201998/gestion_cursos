<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function index()
    {
        return view('paginas.cursos');
    }



    //retornar el formulario de registro para el curso con la lista de instatructore de la bade de datos
    public function getForm()
    {

        //DB::("SELECT * FROM instructor"); opcional
        //DB::select('*', 'instructor');
        //select * from instructor
        /*
            queryBuilder
            ORM => (mapeo relacional de objetos)

            all() => select * from table
            save() => insert into
            update()
            delete()
        */

        //consultas $instructores => [] array
        $instructores = Instructor::all(); //select * from instructor

        //consultas especifica
        //Instructor::select('name', 'email')->get();
        //retorna la vista
        return view('paginas.registrar_cursos', array("instructores" => $instructores));
    }
}
