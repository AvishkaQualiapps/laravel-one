@extends('layouts.app')


@section('section')
   @include('form' , ['task' => $task ] )
@endsection
