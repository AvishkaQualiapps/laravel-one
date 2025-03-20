<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Task Lists</h1>
    <div>
        @if(Count($tasks))
            @foreach ( $tasks  as $task )

            <div>
                <a href="{{ route( 'tasks.show' , [ 'id'  => $task -> id ] ) }}"><h2>{{ $task -> title }}</h2></a>
                <br>
                <p>{{  $task -> description }}</p>
                <p>{{ $task -> long_description }}</p>
                <div class="dates">
                    @if($task -> completed)
                    <p>Completed</p>
                    @else
                    <p>-----</p>
                    @endif
                </div>
            </div>

            @endforeach
        @else
            <p>There are no tasks</p>
        @endif
    </div>
</body>

</html>