@extends('layouts.app')

<div>
    @if(Count($tasks))
        @foreach ($tasks as $task)

            <div>
                @section('title')
                    <a href="{{ route('tasks.show', ['id' => $task->id]) }}">
                        <h2>{{ $task->title }}</h2>
                    </a>
                @endsection
                <br>
                @section('section')
                    <p>{{  $task->description }}</p>
                    <p>{{ $task->long_description }}</p>
                    <div class="dates">
                        @if($task->completed)
                            <p>Completed</p>
                        @else
                            <p>-----</p>
                        @endif
                    </div>
                @endsection
            </div>

        @endforeach
    @else
        <p>There are no tasks</p>
    @endif