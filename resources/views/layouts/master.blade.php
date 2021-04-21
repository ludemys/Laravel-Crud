<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Title | @yield('title')</title>
</head>
<body>
    @section('header')
        <h1>Web header (Master)</h1>
    @show
    <hr>

    <div class="container">
        @yield('content')
    </div>

    <hr>
    @section('footer')
        <h3>Web footer (Master)</h3>
    @show
</body>
</html>