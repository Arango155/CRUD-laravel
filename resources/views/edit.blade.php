@extends('layout')

@section("tituloPagina", "Actualizar el registro")

@section('sidebar')
    <div class="card">

        <div class="card-body">


            <p class="card-text">

            <form action="{{ route('update1', $personas->id) }}" method="POST">
                @csrf
                @method("PUT")
                <label for="">Apellido paterno</label>
                <input type="text" name="apellido_paterno" class="form-control" required value="{{$personas->apellido_paterno}}">
                <label for="">Apellido materno</label>
                <input type="text" name="apellido_materno" class="form-control" required value="{{$personas->apellido_materno}}">
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required value="{{$personas->nombre}}">
                <label for="">Fecha de nacimiento</label>
                <input type="date" name="fecha_nacimiento" class="form-control" required value="{{$personas->fecha_nacimiento}}">
                <br>
                <a href="{{ route("inicio") }}" class="btn btn-info" >
                    <span class="fas fa-undo-alt"></span> Regresar
                </a>
                <button class="btn btn-primary">
                    <span class="fas fa-user-plus"></span> Actualizar
                </button>

            </form>
            </p>

        </div>
    </div>
@endsection
