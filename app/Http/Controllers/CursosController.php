<?php

namespace App\Http\Controllers;

use App\Models\Cursos;
use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CursosController extends Controller
{
    public function index()
    {
        // consulta para obtener el nombre del instructor y la informacion del curso #inner join, ON SELECT courses.*, instructor.name AS instructor FROM courses INNER JOIN instructor ON courses.id_instructor = instructor.id;
        //all(),
        $cursos = Cursos::join('instructor', 'courses.id_instructor', '=', 'instructor.id')->select('courses.*', 'instructor.name AS instructor')->get();
        return view('paginas.cursos', array("cursos" => $cursos));
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


    //metodo para registrar un curso
    public function store(Request $request)
    {
        //validando la entradad de imagenes
        //true, false
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');

            //formatear el nombre de la imagen
            //react Js - react-js.jpg
            $nombre_imagen = Str::slug($request->post('titulo')) . "." . $imagen->guessExtension();
            //asignamos la ruta donde se guardan las imagenes
            $ruta = public_path("img/");
            //public/
            //hacemos una copia del archivo y lo almacenamos en la ruta img
            copy($imagen->getRealPath(), $ruta . $nombre_imagen);
            //public/img/react-js.jpg
        } else {
            $nombre_imagen = null;
        }

        //metodo save() para guardar datos como insert into
        $cursos = new Cursos();
        $cursos->title = $request->post('titulo');
        $cursos->description = $request->post('descripcion');
        $cursos->price = $request->post('precio');
        $cursos->imagen = $nombre_imagen;
        $cursos->id_instructor = $request->post('instructor');
        $cursos->save();
        //insert into courses(title, description, price, imagen, id_instructor,) values ()
        return redirect()->route('cursos');
    }

    //CRUD => index() (leer), store() crear, update() actualizar, destroy()
}
