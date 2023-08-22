@extends('/template')

@section('contenido')
    <h1 class="text-center">Editar Curso</h1>
    <form action="{{ route('actualizarCurso', $curso->id) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <label for="">Titulo</label>
        <input type="text" class="form-control" name="titulo" value="{{ $curso->title }}">

        <label for="">Descripcion</label>
        <input type="text" class="form-control" name="descripcion" value="{{ $curso->description }}">

        <label for="">precio</label>
        <input type="texi" class="form-control" name="precio" value="{{ $curso->price }}">

        <label for="">Imagen</label>
        <input type="file" name="imagen" class="form-control" id="">
        <input type="hidden" name="imagen_previa" value="{{ $curso->imagen }}">
        <br>
        <img src="{{ url('/') }}/img/{{ $curso->imagen }}" alt="" class="w-25 mb-3">
        <br>

        <label for="">Seleccione un instructor</label>
        <select name="instructor" id="">
            <!--iterando el areglo de instructores -->
            <option value="{{ $curso->id }}">{{ $curso->name }}</option>
            @foreach ($instructores as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>

        <input type="submit" class="btn btn-success my-4" value="Actualizar">
    </form>
@endsection
