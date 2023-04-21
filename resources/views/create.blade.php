@extends('layout')

@section("tituloPagina", "Crear un nuevo registro")

@section('sidebar')
    <div class="card">
        <h5 class="card-header">Agregar nueva persona</h5>
        <div class="card-body">

            <p class="card-text">

                @csrf
                <form action="{{ route("add") }}" method="POST">
                    @csrf
                <label for="">Apellido paterno</label>
                <input type="text" name="apellido_paterno" class="form-control" required>
                <label for="">Apellido materno</label>
                <input type="text" name="apellido_materno" class="form-control" required>
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
                <label for="">Fecha de nacimiento</label>
                <input type="date" name="fecha_nacimiento" class="form-control" required>
                <br>
                <a href="{{ route("inicio") }}" class="btn btn-info" >
                    <span class="fas fa-undo-alt"></span> Regresar
                </a>
                <button class="btn btn-primary">
                    <span class="fas fa-user-plus"></span> Agregar
                </button>


            </form>
            </p>

        </div>
    </div>
@endsection
