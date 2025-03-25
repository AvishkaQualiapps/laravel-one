<?php

// use illuminate\Http\Response;
use Illuminate\Http\Request;
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
    dd($request->all());
})->name('tasks.store');
