<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="../resources/css/app.css" rel="stylesheet" type="text/css"/>
    <link href="../resources/css/home.css" rel="stylesheet" type="text/css"/>
    <title>Home</title>
</head>
<body>
    <div class ="start">
    <h5>Registrar una Asignatura</h5>
    <button><a href="{{ url('materias/create') }}">Registrar</a></button>
    </div>
    <table class = "table table-dark table-bordered border-light align-middle">
        <thead class = "table-light table-bordered border-dark">
            <tr>
                <th>#</th>
                <th>Asignatura</th>
                <th>Actividad 1</th>
                <th>Calificación 1</th>
                <th>Actividad 2</th>
                <th>Calificación 2</th>
                <th>Modificar</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $materias as $materia )
            <tr>
                <td>{{ $materia -> id }}</td>
                <td>{{ $materia -> Asignatura }}</td>
                <td>{{ $materia -> Actividad_1 }}</td>
                <td>{{ $materia -> Calificacion_1 }}</td>
                <td>{{ $materia -> Actividad_2 }}</td>
                <td>{{ $materia -> Calificacion_2 }}</td>
                <td>
                    <button><a href="{{ url ('/materias/'.$materia->id.'/edit') }}">Editar</a></button>
                    <br>
                    <form action="{{ url ('/materias/'.$materia->id) }}" method ="post">
                    @csrf
                    {{ method_field('DELETE') }}
                        <input type="submit" onclick="return confirm('Deseas ELIMINAR este registro?')"
                        value = "Eliminar" class ="del_btn">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>