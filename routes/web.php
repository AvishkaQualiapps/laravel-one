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

Route::post('/tasks_save', function (Request $request) {
    // Log::info('Headers: ' . print_r($request->headers->all(), true));
    // Log::info('Request Method: ' . $request->method());
    // Log::info('Input: ' . print_r($request->input(), true));
    // $title = $request->input('title');
    // $description = $request->input('description');
    // $long_description = $request->input('long_description');
    // return "$title , $description , $long_description"
    dd($request->input('title'));
})->name('tasks.store');
