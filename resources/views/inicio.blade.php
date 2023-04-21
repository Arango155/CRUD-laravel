
@extends('layout')

@section('title', 'Page Title')

@section('sidebar')
    <div class="card">
        <h5 class="card-header">CRUD</h5>
        <div class="card-body">
            <h5 class="card-title">Listado</h5>
            <p><a href="{{route("create")}}" class="btn btn-primary">Agregar</a></p>

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

                @foreach($dates as $item)
                <tr>
                    <td>{{$item->apellido_paterno}}</td>
                    <td>{{$item->apellido_materno}}</td>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->fecha_nacimiento}}</td>
                    <td>
                        <form action="{{ route("edit", $item->id) }}" method="GET">
                            <button class="btn btn-warning btn-sm">
                                <span class="fas fa-user-edit"></span>
                            </button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route("delete", $item->id) }}" method="GET">
                            <button class="btn btn-danger btn-sm">
                                <span class="fas fa-user-times"></span>
                            </button>
                        </form>
                    </td>

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
