@extends('layouts.app')

@section('title', isset($task) ? 'Edit Task' : 'Add Task')

@section('section')
    <form action="{{ isset($task) ? route('tasks.update', ['task' => $task->id]) : route('tasks.store') }}" method="POST">
        @csrf
        @isset($task)
            @method('PUT')
        @endisset
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{$task->title ?? old('title') }}">
            @error('title')
                <p>{{$message}}</p>
            @enderror
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="5">
                                {{$task->description ?? old('description') }}
                            </textarea>
            @error('description')
                <p>{{$message}}</p>
            @enderror
        </div>

        <div>
            <label for="completed">Status</label>
            <select name="completed" id="completed">
                <option value="0" {{ (isset($task) && $task->completed == 0) || old('completed') == 0 ? 'selected' : '' }}>Not Complete</option>
                <option value="1" {{ (isset($task) && $task->completed == 1) || old('completed') == 1 ? 'selected' : '' }}>Complete</option>
            </select>
            @error('completed')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="long_description">Long Description</label>
            <textarea name="long_description" id="long_description" rows="10">
                                {{$task->long_description ?? old('long_description') }}
                            </textarea>
            @error('long_description')
                <p>{{$message}}</p>
            @enderror
        </div>
        <div>
            <button type="submit">

                @isset($task)
                    Update task
                @else
                    Add task
                @endisset

            </button>
        </div>
    </form>
@endsection