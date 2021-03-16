@extends('layouts.main')
@section('contenido')

<div class="container"> <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Nueva Tarea
                </div>
                <div class="card-body">
                    <form action="{{ route('tasks.save') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Tarea</label>
                            <input type="text" class="form-control" name="task">
                        </div>
                        <div class="form-group">
                            <label for="">Descripcion</label>
                            <input type="text" class="form-control" name="description">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a href="{{ route('tasks.index') }}" class="btn btn-danger">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection