<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario actualizar</title>
</head>
<body>
    <h1>{{$modo}}Formulario que tendra los datos para crear o actualizar los empleados</h1>
    <div class="form-group">
    <input class="form-control" type="text" value="{{isset($empleado->Nombres)?$empleado->Nombres:old('Nombres')}}" name="Nombres" id="Nombres" placeholder="Introduzca Nombre"><br><br>
    <input class="form-control" type="text" value="{{isset($empleado->PrimerApel)?$empleado->PrimerApel:old('PrimerApel')}}" name="PrimerApel" id="PrimerApel" placeholder="Introduzca Primer Apellido"><br><br>
    <input class="form-control" type="text" value="{{isset($empleado->SegundoApel)?$empleado->SegundoApel:old('SegundoApel')}}" name="SegundoApel" id="SegundoApel" placeholder="Introduzca Segundo Apellido"><br><br>
    <input class="form-control" type="text" value="{{isset($empleado->Email)?$empleado->Email:old('Email')}}" name="Email" id="Email" placeholder="Introduzca Email"><br><br>
    <input type="file" name="Foto" id="Foto"><br><br>
    @if(isset($empleado->Foto))
    <img src="{{asset('storage').'/'.$empleado->Foto}}" alt="" width="220" height="220">
    @endif
    <br>
    <br>
    <input type="submit" value="{{$modo}} Registro">
    @if(count($errors)>0)
    <div class="alert alert-danger" roler="alert">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif    
</body>
</html>