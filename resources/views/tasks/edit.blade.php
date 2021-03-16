@extends('layouts.main')
@section('contenido')

<div class="container"> <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Editar Tarea
                </div>
                <div class="card-body">
                    <form action="{{ route('task.update', $task->id) }}" method="POST">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label for="">Tarea</label>
                            <input type="text" value="{{ $task->task }}" class="form-control" name="task">
                        </div>
                        <div class="form-group">
                            <label for="">Descripcion</label>
                            <input type="text" value="{{ $task->description }}" class="form-control" name="description">
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