@extends('master')

@section('product_name', $product['name'])

@section('content')
    <img src="{{ asset('assets/' . $product['pics']) }}" style="max-width: 20vw; max-height: 20vw" alt="">
    <h3>Status: {{ $product['status'] }}</h3>
    <p>Price: Rp{{ $product['price'] }}</p>

@endsection
