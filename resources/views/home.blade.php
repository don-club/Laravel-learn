@extends('layouts.layout')

@section('title')
    Home
@endsection

@section('main')
    @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Pricing</h1>
    <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example.
        It's built with default Bootstrap components and utilities with little customization.</p>
</div>
<div class="con12">
    <div class="container blockquote text-center">
        <div class="card mx-auto mb-3" style="max-width: 300px;">
            <!-- Текстовый контент -->
            <div class="card-body">
                <img src="https://cdn.svyaznoy.ru/upload/iblock/d75/ruru_iphone12_q321_purple_pdp-image-1a.jpg/resize/453x480/" class="card-img-top w-50">
                <h3 class="card-title">Iphone 12</h3>
            </div>
            <!-- Список List groups -->
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Цена: 9800смн</li>
            </ul>
            <!-- Текстовый контент -->
            <div class="card-body">
                <div class="btn btn-success"><a href="#" class="card-link text-dark text-secondary">Добавить в
                        корзину</a></div>
            </div>
        </div><!-- Конец карточки -->
    </div>
    <div class="container blockquote text-center">
        <div class="card mx-auto mb-3" style="max-width: 300px;">
            <!-- Текстовый контент -->
            <div class="card-body">
                <img src="https://cdn.svyaznoy.ru/upload/iblock/567/moto%20g9%20play_sapphire%20blue_front.jpg/resize/453x480/" class="card-img-top w-50">
                <h3 class="card-title">Motorola Moto g9</h3>
            </div>
            <!-- Список List groups -->
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Цена: 3000смн</li>
            </ul>
            <!-- Текстовый контент -->
            <div class="card-body">
                <div class="btn btn-success"><a href="#" class="card-link text-dark text-secondary">Добавить в
                        корзину</a></div>
            </div>
        </div><!-- Конец карточки -->
    </div>

    <div class="container blockquote text-center">
        <div class="card mx-auto mb-3" style="max-width: 300px;">
            <!-- Текстовый контент -->
            <div class="card-body">
                <img src="https://cdn.svyaznoy.ru/upload/iblock/7c8/7c8e357035508bcd838160f2d91b89cd.jpg/resize/453x480/" class="card-img-top w-50">
                <h3 class="card-title">Samsung galaxy A33</h3>
            </div>
            <!-- Список List groups -->
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Цена: 3450смн</li>
            </ul>
            <!-- Текстовый контент -->
            <div class="card-body">
                <div class="btn btn-success"><a href="#" class="card-link text-dark text-secondary">Добавить в
                        корзину</a></div>
            </div>
        </div><!-- Конец карточки -->
    </div>
    <div class="container blockquote text-center">
        <div class="card mx-auto mb-3" style="max-width: 300px;">
            <!-- Текстовый контент -->
            <div class="card-body">
                <img src="https://cdn.svyaznoy.ru/upload/iblock/e54/16.jpg/resize/453x480/" class="card-img-top w-50">
                <h3 class="card-title">Redmi 9</h3>
            </div>
            <!-- Список List groups -->
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Цена: 1200смн</li>
            </ul>
            <!-- Текстовый контент -->
            <div class="card-body">
                <div class="btn btn-success"><a href="#" class="card-link text-dark text-secondary">Добавить в
                        корзину</a></div>
            </div>
        </div><!-- Конец карточки -->
    </div>
</div>
<style>
    .con12 {
        display: flex;
    }

</style>
@endsection
