@extends('layouts.app')

@section('title', 'Add Task')

@section('section')
    <form action="{{ route('tasks.store') }}"  method="POST" >
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title">
            @error('title')
            <p>Please enter the title</p>
            @enderror
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="5"></textarea>
            @error('description')
            <p>Please enter the description</p>
            @enderror
        </div>
        <div>
            <label for="long_description">Long Description</label>
            <textarea name="long_description" id="long_description" rows="10"></textarea>
            @error('long_description')
            <p>Please enter the long description</p>
            @enderror
        </div>
        <div>
            <button type="submit">Add Task</button>
        </div>
    </form>
@endsection
