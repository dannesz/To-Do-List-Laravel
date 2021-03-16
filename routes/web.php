<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

use App\Models\Task;

use function GuzzleHttp\Promise\task;


Route::middleware('auth')->group(function () {

    Route::get('tasks', function () {
        $tareas = Task::orderBy('created_at', 'desc')->get();
        return view ('tasks.index', compact('tareas'));
    })->name('tasks.index');
    
    
    
    Route::get('tasks/create', function () {
        return view ('tasks.create');
    })->name('tasks.create');
    
    
    Route::post('tasks', function (Request $request) {
        $newTask = new Task;
        $newTask->task = $request->input('task');
        $newTask->description = $request->input('description');
        $newTask->save();
    
        return redirect() -> route('tasks.index')->with('info', 'Nueva tarea agregada exitosamente.');
    
    })->name('tasks.save');
    
    
    Route::delete('tasks/{id}', function($id){
    
      $task = Task::findOrFail($id);
      $task->delete();
      return redirect()->route('tasks.index')->with('info', 'Tarea eliminada');
    
    })->name('task_delete');
    
    
    Route::get('tasks/{id}/edit', function($id) {
        $task = Task::findOrFail($id);
        return view('tasks.edit', compact('task'));
    })->name('task_edit');
    
    
    Route::put('/tasks/{id}', function(Request $request, $id){
        $task = Task::findOrFail($id);
        $task->task = $request->input('task');
        $task->description = $request->input('description');
        $task->save();
        return redirect()->route('tasks.index')->with('info', 'Tarea actualizada.');
    })->name('task.update');    

});


Auth::routes();


