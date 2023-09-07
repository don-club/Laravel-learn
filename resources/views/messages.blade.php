@extends('layouts.layout')

@section('title')
    All messages
@endsection

@section('main')
    <h1>All messages</h1>
    @foreach($data as $el)
        <div class="alert alert-info">
            <h3>ID: {{$el->id}}</h3>
            <h3>Name: {{$el->name}}</h3>
            <h3>Email: {{$el->email}}</h3>
            <h3>Subject: {{$el->subject}}</h3>
            <h3>Created at: {{   $el->created_at  }}</h3>
            <a href="#"><button class="btn btn-warning">Подробнее</button></a>
        </div>
    @endforeach
@endsection
