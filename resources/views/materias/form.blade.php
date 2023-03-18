<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Create</title>
</head>
<body>
    <form action="{{ url('/materias') }}" method="post" enctype="multipart/form-data">
        <!-- security key -->
        @csrf
        <!-- user inputs -->
        <div style="
        display: grid;
        place-items: center;
    ">
            <div class="form">
            <label for="Asignatura">Asignatura</label> <br>
            <input type="text" name="Asignatura" value = "{{ isset($materia->Asignatura)?$materia->Asignatura:'' }}" id="Asignatura"> <br><br>
            
            <label for="Actividad_1">Actividad 1</label> <br>
            <input type="text" name="Actividad_1" value = "{{ isset($materia->Actividad_1)?$materia->Actividad_1:'' }}" id="Actividad_1"> <br><br>
            
            <label for="Calificacion_1">Calificación 1</label> <br>
            <input type="text" name="Calificacion_1" value = "{{ isset($materia->Calificacion_1)?$materia->Calificacion_1:'' }}" id="Calificacion_1"> <br><br>
            
            <label for="Actividad_2">Actividad 2</label> <br>
            <input type="text" name="Actividad_2" value = "{{ isset($materia->Actividad_2)?$materia->Actividad_2:'' }}" id="Actividad_2"> <br><br>
            
            <label for="Calificacion_2">Calificación 2</label> <br>
            <input type="text" name="Calificacion_2" value = "{{ isset($materia->Calificacion_2)?$materia->Calificacion_2:'' }}" id="Calificacion_2"> <br><br>
            
            <input type="submit" value="Save" class="send_btn" 
            style="
            border-color: black;
            width: 120px;
            height: 50px; ">
            </div>
        </div>
    </form>
</body>
</html>