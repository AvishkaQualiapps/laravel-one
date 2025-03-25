<?php

// use illuminate\Http\Response;
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


Route::get('/tasks/{id}/edit', function ($id) {

    return view('edit', [
        'task' =>  Task::find($id),
    ]);
})->name('tasks.edit');



Route::get('/tasks/{id}', function ($id) {

    return view('show', [
        'task' => Task::find($id),
    ]);
})->name('tasks.show');

Route::post('/tasks', function (Request $request) {
    $data = $request->validate([
        'title'=> 'required|max:255',
        'description'=> 'required',
        'long_description'=> 'required',
    ]);

    $task = new Task;
    $task->title = $data['title'];
    $task->description = $data['description'];
    $task->long_description = $data['long_description'];
    $task->save();

    return redirect()->route('tasks.show', [ 'id'=> $task->id])->with('success','successfully created');
})->name('tasks.store');

Route::put('/tasks/{id}', function ( $id, Request $request) {
    $data = $request->validate([
        'title'=> 'required|max:255',
        'description'=> 'required',
        'long_description'=> 'required',
    ]);

    $task = Task::findOrFail( $id );
    $task->title = $data['title'];
    $task->description = $data['description'];
    $task->long_description = $data['long_description'];
    $task->save();

    return redirect()->route('tasks.show', [ 'id'=> $task->id])->with('success','successfully updated');
})->name('tasks.update');
