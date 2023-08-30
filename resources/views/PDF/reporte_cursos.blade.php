<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Cursos Disponibles 2023</h1>
    <table>
        <thead>
            <th>#</th>
            <th>Titulo</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Instructor</th>
            <th>Correo</th>
        </thead>
        <tbody>
            @foreach ($lista as $curso)
                <tr>
                    <td></td>
                    <td>{{ $curso->title }}</td>
                    <td>{{ $curso->description }}</td>
                    <td>{{ $curso->price }}</td>
                    <td>{{ $curso->name }}</td>
                    <td>{{ $curso->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
