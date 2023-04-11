<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="text-center">List of Products</h1>
    <div class="row">
        @foreach ($products as $product)
            @if ($product['status'] == 'SSR')
                <a href="/products/{{ $product['slug'] }}" class="text-decoration-none text-dark col-4">
                    <div class="d-flex flex-column align-items-center" style="background-color: red">
                        <h3>{{ $product['name'] }}</h3>
                        <img src="{{ asset('assets/' . $product['pics']) }}" style="max-width: 20vw; max-height: 20vw" alt="">
                        <h5>Status: {{ $product['status'] }}</h5>
                        <p>Price: Rp{{ $product['price'] }}</p>
                    </div>
                </a>

            @elseif ($product['status'] == 'SR')
                <a href="/products/{{ $product['slug'] }}" class="text-decoration-none text-dark col-4">
                    <div class="d-flex flex-column align-items-center" style="background-color: gold">
                        <h3>{{ $product['name'] }}</h3>
                        <img src="{{ asset('assets/' . $product['pics']) }}" style="max-width: 20vw; max-height: 20vw" alt="">
                        <h5>Status: {{ $product['status'] }}</h5>
                        <p>Price: Rp{{ $product['price'] }}</p>
                    </div>
                </a>
            @elseif ($product['status'] == 'R')
            <a href="/products/{{ $product['slug'] }}" class="text-decoration-none text-dark col-4">
                <div class="d-flex flex-column align-items-center" style="background-color: silver">
                    <h3>{{ $product['name'] }}</h3>
                    <img src="{{ asset('assets/' . $product['pics']) }}" style="max-width: 20vw; max-height: 20vw"alt="">
                    <h5>Status: {{ $product['status'] }}</h5>
                    <p>Price: Rp{{ $product['price'] }}</p>
                </div>
            </a>
            @endif
        @endforeach
    </div>
</body>
</html>
