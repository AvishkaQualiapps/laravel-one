@extends('layouts.app')

@section('title')
    {{ $task->title }}
@endsection

@section('section')
    <p>{{ $task->description }}</p>

    @if($task->long_description)
        <p>{{$task->long_description}}</p>
    @endif
    <p>{{ $task->created_at}}</p>
    <p>{{ $task->updated_at}}</p>
    <div>
        <a href="{{route('tasks.edit' , ['task' => $task ] )}}">Edit Task</a>
    </div>
    <div>
        <form action="{{route('tasks.destroy' ,  ['task' => $task ] ) }}" method="POST" >
            @csrf
            @method('DELETE')
            <button type="submit" >Delete Task</button>
        </form>
    </div>
@endsection