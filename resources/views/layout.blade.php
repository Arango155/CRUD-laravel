<html>
<head>
    <title>App Name - @yield('title')</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<body>
@section('sidebar')
    <br> <br>
    Texto de la vista principal
@show
<div class="container">
    @yield('content')
</div>
</body>
</html>
