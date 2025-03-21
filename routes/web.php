<?php

use illuminate\Http\Response;
use Illuminate\Support\Facades\Route;


$tasks = \App\Models\Task::all();


Route::get('/', function () {
    return redirect() -> route('tasks.index');
});


Route::get('/tasks', function () use($tasks) {
    return view('index' , [
          'tasks' => $tasks,
    ] );
}) -> name('tasks.index');

Route::get( '/tasks/{id}' , function($id) {

   return view('show', [
    'task'=>  \App\Models\Task::find($id),
   ]);
}) ->name('tasks.show');

