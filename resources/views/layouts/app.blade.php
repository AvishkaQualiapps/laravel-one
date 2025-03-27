<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List App</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <div class="container mx-auto mt-10 mb-10 max-w-lg">
        <h1>Task List App</h1>
        <h2 class="text-2xl">@yield('title')</h2>
        <div>
            @if (session()->has('success'))
                <div>{{session('success')}}</div>
            @endif
            @yield('section')
        </div>
    </div>

</body>

</html>