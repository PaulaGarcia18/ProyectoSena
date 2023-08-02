<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FORMULARIO PARA ACTUALIZAR LOS DATOS DE LOS EMPLEADOS</h1>
    @extends('layouts.app')
    @section('content')
    <div class="container">
        <a href="{{url('/empleados/' .$empleado->id)}}">Regresar</a>
    <form action="{{url('/empleados/'.$empleado->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{method_field('PATCH')}}
        @include('empleados.form',['modo'=>'Actualizar'])
    </form>
</div>
@endsection
</body>
</html>