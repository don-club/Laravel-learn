@extends('layouts.layout')

@section('title')
    Contact
@endsection

@section('main')
<form action="{{ route('contact-form') }}" method="post">
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
<?php
//
//?>

<div class="container">
    @csrf
<div class="form-group">
    <label for="name">Введите имя</label>
    <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
</div>

<div class="form-group">
    <label for="name">Email</label>
    <input type="text" name="email" placeholder="Введите email" id="email" class="form-control">
</div>

<div class="form-group">
    <label for="name">Тема сообщения</label>
    <input type="text" name="subject" placeholder="Тема сообщения" id="subject" class="form-control">
</div>

<div class="form-group">
    <label for="name">Сообщение</label>
    <textarea name="message" id="message" class="form-control" placeholder="Сообщение"></textarea>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-success">Отправить</button>
</div>

</div>

</form>
@endsection
