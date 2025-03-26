@extends('layouts.app')

@section('title', 'Add Task')

@section('section')
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{old('title')}}">
            @error('title')
                <p>{{$message}}</p>
            @enderror
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="5">
                    {{old('description')}}
                </textarea>
            @error('description')
                <p>{{$message}}</p>
            @enderror
        </div>
        <div>
            <label for="completed">Status</label>
            <select name="completed" id="completed">
                <option value="0">Not Complete</option>
                <option value="1">Complete</option>
            </select>
            @error('completed')
                <p>{{$message}}</p>
            @enderror
        </div>
        <div>
            <label for="long_description">Long Description</label>
            <textarea name="long_description" id="long_description" rows="10">
                    {{old('long_description')}}
                </textarea>
            @error('long_description')
                <p>{{$message}}</p>
            @enderror
        </div>
        <div>
            <button type="submit">Add Task</button>
        </div>
    </form>
@endsection