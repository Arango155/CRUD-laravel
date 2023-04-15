
@extends('layout')

@section('title', 'Page Title')

@section('sidebar')
    <div class="card">
        <h5 class="card-header">CRUD</h5>
        <div class="card-body">
            <h5 class="card-title">Listado</h5>
            <p><a href="{{route("personas.create")}}" class="btn btn-primary">Agregar</a></p>

            @php

            @endphp

            <p class="card-text">
            <div class="table table-responsive">
                <table class="table table-sm table-bordered">
                <thead>
            <th>Apellido paterno</th>
            <th>Apellido materno</th>
            <th>Nombre</th>
            <th>Fecha de nacimiento</th>

                </thead>
                <tbody>

                @foreach($datos as $item)
                <tr>
                    <td>{{$item->apellido_paterno}}</td>
                    <td>{{$item->apellido_materno}}</td>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->fecha_nacimiento}}</td>

                </tr>
                @endforeach
                </tbody>
                </table>
            </div>
            </p>
        </div>
    </div>
@endsection

@section('content')

@endsection
