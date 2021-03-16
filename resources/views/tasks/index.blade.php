@extends('layouts.main')
@section('contenido')
    <div class="container"> <br>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Listado de Tareas
                        <a href="{{ route('tasks.create') }}" class="btn btn-success btn-sm float-right">+ Tarea</a>
                    </div>
                    <div class="card-body">
                        @if(session('info'))

                        <div class="alert alert-success">
                            {{session('info')}}
                        </div>

                        @endif

                        <table class="table table-hover table-sm">
                            <thead>
                                <th>Tareas</th>
                                <th>Descripción</th>
                                <th>Acción</th>
                            </thead>
                            <tbody>
                                @foreach($tareas as $tarea)
                                <tr>
                                    <td>
                                        {{ $tarea->task}}
                                    </td>
                                    <td>
                                        {{ $tarea->description }}
                                    </td>
                                    <td>
                                        <a href="{{ route('task_edit', $tarea->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                        <a href="javascript: document.getElementById('delete-{{$tarea->id}}').submit()" class="btn btn-danger btn-sm">Eliminar</a>
                                        <form id="delete-{{$tarea->id}}" action="{{ route('task_delete', $tarea->id) }}" method="POST">
                                            @method('delete')
                                            @csrf
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>

                    </div>
                    <div class="card-footer">
                        Bienvenido {{ auth()->user()->name }}
                        <a href="javascript:document.getElementById('logout').submit()" class="btn btn-danger btn-sm float-right">Cerrar Sesión</a>
                        <form action="{{ route('logout') }}" id="logout" action="display:none" method="POST">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


 @endsection   
