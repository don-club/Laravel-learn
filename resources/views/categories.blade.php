@extends('layouts.layout')

@section('title')
    Categories
@endsection

@section('main')
    <style>
        .container {
            text-align: center;

            width: 500px;
        }

        img, svg {
            vertical-align: middle;
            width: 70px;
        }

        a {
            text-decoration: none;
            color: black;
        }


    </style>
    <div class="container">
        <a href="/iphone">
            <h2 class="we3">Iphone</h2>
            <img src="https://cdn.icon-icons.com/icons2/936/PNG/512/apple-logo_icon-icons.com_73680.png" class="img1">
        </a>
    </div>
    <div class="container">
        <a href="/redmi">
            <h2>Redmi</h2>
            <img src="https://cdn.iconscout.com/icon/free/png-256/free-xiaomi-282428.png" class="">
        </a>
    </div>
    <div class="container">
        <a href="/motorola">
            <h2>Motorola</h2>
            <img src="https://uniden.co.nz/wp-content/uploads/logo_moto_grey.png" class="">
        </a>
    </div>
    <div class="container">
        <a href="/samsung">
            <h2>Samsung</h2>
            <img src="https://static-00.iconduck.com/assets.00/samsung-icon-512x512-0o72hicf.png" class="">
        </a>
    </div>
@endsection
