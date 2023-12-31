@extends('template')

@section('contenido')
    <h1 class="text-center text-prymary">Cursos Disponibles</h1>
    <a href="{{ url('/formulario') }}" class="btn btn-dark">Resgistrar Cursos</a>

    <div class="row">

        @foreach ($cursos as $item)
            <div class="col-md-4 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ url('/') }}/img/{{ $item->imagen }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->title }}</h5>
                        <p class="card-text">
                            {{ $item->description }}
                        </p>
                        <p class="card-text"><strong>Precio: </strong>$ {{ $item->price }}</p>
                        <p class="card-text"><strong>Instructor: </strong>{{ $item->instructor }}</p>
                        <form action="{{ route('editarCurso', $item->id) }}" method="post">
                            @method('GET')
                            @csrf
                            <button type="submit" class="btn btn-primary">Editar</button>
                        </form>
                        <form action="{{ route('eliminarCurso', $item->id) }}" method="post">
                            @method('Delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
