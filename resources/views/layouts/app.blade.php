<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List App</title>
</head>
<body>
    <h1>Task List App</h1>
    <h2>@yield('title')</h2>
    <div>
        @if (session()->has('success'))
        <div>{{session('success')}}</div>
        @endif
        @yield('section')
    </div>
</body>
</html>