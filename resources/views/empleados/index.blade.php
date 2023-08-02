<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Datos Empleados</title>
</head>


<body>
    <h1>LISTA LOS DATOS DE LOS EMPLEADOS</h1>
   
   
    @if(Session::has('mensaje'))
    <div class = "alert alert-success alert-dismissible" role = "alert" >
        {{Session::get('mensaje')}}
    </div>
   @endif


    @extends('layouts.app')
    @section('content')
    <div class="container">
    @if(Session::has('mensaje'))
    {{Session::get('mensaje')}}
    @endif


<div class = "collage navbar-collage" id = "navbarSupportedContent" >
    <ul class =  "navbar-nav me-auto" >
        <li class = "nav-item" >
            <a  class = "nav-link" href="{{route('empleados.index')}}">{{ __('Empleado') }}    </a>
        </li>
    </ul>
</div>


    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <a href="{{url('/empleados/create')}}" class="btn btn-success">Registrar Nuevo Empleado</a>
                <th>#</th>
                <th>Foto</th>
                <th>Nombre</th>
                <th>P. Apellido</th>
                <th>S. Apellido</th>
                <th>Email</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $datos)
            <tr>
                <td>{{$datos->id}}</td>
                <td><img src="{{asset('storage').'/'.$datos->Foto}}" alt=""></td>
                <td>{{$datos->Nombres}}</td>
                <td>{{$datos->PrimerApel}}</td>
                <td>{{$datos->SegundoApel}}</td>
                <td>{{$datos->Email}}</td>
                <td>
                    <a href="{{url('/empleados/'.$datos->id.'/edit')}}" class="btn btn-success">Editar</a>
                    <br>
                    <br>
                    <form action="{{url('/empleados/'.$datos->id)}}" method="POST">
                        @csrf
                        {{method_field('DELETE')}}
                        <input type="submit" onclick="return confirm('¿Deseas Eliminar?')"  value="Eliminar">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $empleados->Links() !!}
</div>
@endsection
</body>
</html>