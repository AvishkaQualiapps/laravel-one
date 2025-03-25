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

Route::get('/tasks/{id}', function ($id) {

    return view('show', [
        'task' =>  \App\Models\Task::find($id),
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

    return redirect()->route('tasks.show', [ 'id'=> $task->id])->with('success','succsesfully created');
})->name('tasks.store');
