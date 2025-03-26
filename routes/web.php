<?php

// use illuminate\Http\Response;

use App\Http\Requests\TaskRequest;
use Illuminate\Http\Request;
use \App\Models\Task;
// use Illuminate\Mail\Mailables\Headers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;


$tasks = \App\Models\Task::all();


Route::get('/', function () {
    return redirect()->route('tasks.index');
});


Route::get('/tasks', function () use ($tasks) {
    return view('index', [
        'tasks' => $tasks,
    ]);
})->name('tasks.index');

Route::view('/tasks/create', 'create')->name('tasks.create');


Route::get('/tasks/{task}/edit', function ( Task $task) {

    return view('edit', [
        'task' =>  $task,
    ]);
})->name('tasks.edit');



Route::get('/tasks/{task}', function ( Task $task) {

    return view('show', [
        'task' => $task,
    ]);
})->name('tasks.show');

Route::post('/tasks', function (TaskRequest $request) {

    $task = Task::create($request->validated());

    return redirect()->route('tasks.show', [ 'task'=> $task->id])->with('success','successfully created');
})->name('tasks.store');



Route::put('/tasks/{task}', function ( Task $task, TaskRequest $request) {

    $task->update($request->validated());

    return redirect()->route('tasks.show', [ 'task'=> $task->id])->with('success','successfully updated');
})->name('tasks.update');

Route::delete('task/{task}' , function(Task $task){
    $task->delete();

    return redirect()->route('tasks.index')->with('success','task deleted');

} )->name('task.delete');
