<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('product_name')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    @if ($product['status'] == 'SSR')
        <div class="container d-flex flex-column align-items-center" style="background-color: red">
            <h1>@yield('product_name')</h1>
            @yield('content')
        </div>
     @elseif ($product['status'] == 'SR')
        <div class="container d-flex flex-column align-items-center" style="background-color: gold">
            <h1>@yield('product_name')</h1>
            @yield('content')
        </div>
    @elseif ($product['status'] == 'R')
        <div class="container d-flex flex-column align-items-center" style="background-color: silver">
            <h1>@yield('product_name')</h1>
            @yield('content')
        </div>
    @endif
</body>
</html>


