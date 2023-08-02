<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Empleados</title>
</head>
<body>
    <h1>Formulario Para Crear Empleados</h1>
    @extends('layouts.app')
    @section('content')
    <div class="container">
        <a href="{{url('/empleados/')}}">Listar Empleados</a>
    <form action="{{url('/empleados')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('empleados.form',['modo'=>'Guardar'])
    </form>
</div>
@endsection
</body>
</html>