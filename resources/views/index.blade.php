@extends('layouts.app')

<div class="container mx-auto mt-10 mb-10 max-w-lg">
    @if(count($tasks))
        @foreach ($tasks as $task)

            <div>
                <a href="{{ route('tasks.show', ['task' => $task->id]) }}">
                    <h2>{{ $task->title }}</h2>
                </a>
                <br>
                <p>{{  $task->description }}</p>
                <p>{{ $task->long_description }}</p>
                <div class="dates">
                    @if($task->completed)
                        <p>Completed</p>
                    @else
                        <p>-----</p>
                    @endif
                </div>
            </div>

        @endforeach
        <div>
            {{ $tasks->links() }}
        </div>
    @else
        <p>There are no tasks</p>
    @endif
    <div>