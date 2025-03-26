@extends('layouts.app')

@section('title', 'Edit Task')

@section('section')
    <form action="{{ route('tasks.update' , ['task' => $task->id ] ) }}"  method="POST" >
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{$task -> title}}" >
            @error('title')
            <p>{{$message}}</p>
            @enderror
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="5">
                {{$task -> description}}
            </textarea>
            @error('description')
            <p>{{$message}}</p>
            @enderror
        </div>

        <div>
            <label for="completed">Status</label>
            <select name="completed" id="completed">
                <option value="0" {{ $task->completed == 0 ? 'selected' : '' }}>Not Complete</option>
                <option value="1" {{ $task->completed == 1 ? 'selected' : '' }}>Complete</option>
            </select>
            @error('completed')
            <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="long_description">Long Description</label>
            <textarea name="long_description" id="long_description" rows="10">
                {{$task -> long_description}}
            </textarea>
            @error('long_description')
            <p>{{$message}}</p>
            @enderror
        </div>
        <div>
            <button type="submit">Edit Task</button>
        </div>
    </form>
@endsection
