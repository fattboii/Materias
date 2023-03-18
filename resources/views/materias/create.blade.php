<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body style="
        display: grid;
        place-items: center;
    ">
    <!-- intro -->
<h2>Registra una Materia al Base de Datos</h2>
<!-- form -->
    <form action="{{ url('/materias') }}" method="post" enctype="multipart/form-data">
        <!-- security key -->
        @csrf
        <!-- user inputs -->
        @include('materias.form')
    </form>    
    <!-- returns to the home page -->
    <div style="
        display: grid;
        place-items: center;
    ">
    <button class ="return_btn"
    style="
    margin-top: 10px;
    width: 120px;
    height: 50px;
    "
    ><a href="{{ url('materias') }}" 
    style="
    text-decoration: none;
    color: black;
    ">Return</a></button>
    </div>
</body>
</html>