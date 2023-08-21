@extends('/template')

@section('contenido')
    <h1 class="text-center">Registrar Curso</h1>
    <form action={{ route('registrarCurso') }} method="post" enctype="multipart/form-data">

        <!--
        solicitamos un token para enviar la informacion no soportamos con csrf
        -->
        @csrf
        <label for="">Titulo</label>
        <input type="text" class="form-control" name="titulo">

        <label for="">Descripcion</label>
        <input type="text" class="form-control" name="descripcion">

        <label for="">precio</label>
        <input type="texi" class="form-control" name="precio">

        <label for="">Imagen</label>
        <input type="file" name="imagen" class="form-control" id="">

        <label for="">Seleccione un instructor</label>
        <select name="instructor" id="">
            <!--iterando el areglo de instructores -->
            @foreach ($instructores as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>

        <input type="submit" class="btn btn-success my-4" value="Registrar">
    </form>
@endsection
