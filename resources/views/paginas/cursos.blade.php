@extends('template')

@section('contenido')
    <h1 class="text-center text-prymary">Cursos Disponibles</h1>
    <a href="{{ url('/formulario') }}" class="btn btn-dark">Resgistrar Cursos</a>

    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the card's content.
            </p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
@endsection
