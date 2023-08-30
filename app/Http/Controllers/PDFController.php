<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cursos;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    //metodo para obtener todos los cursos
    //SELECT courses.title, courses.description, courses.price, instructor.name, instructor.email FROM courses INNER JOIN instructor ON courses.id_instructor = instructor.id
    public function listaCursos()
    {
        $lista = Cursos::join('instructor', 'courses.id_instructor', '=', 'instructor.id')->select('courses.title', 'courses.description', 'courses.price', 'instructor.name', 'instructor.email')->get();

        /**

         **/

        // $pdf = PDF::loadView('PDF.reporte_cursos', array("lista" => $lista));
        $pdf = Pdf::loadView('PDF.reporte_cursos', compact('lista'));
        /**
            stream()=> visualiza el fdf (depues se puede descargar)
         **/
        return $pdf->stream('listadoCurosos.pdf');
    }
}
