@extends('layouts.main-layout')

@section('title')
    {{ $title }}
@endsection

@section('page-content')
    <h1 class="pt-4 mr-auto ml-auto w-75">{{ $info }}</h1>
    <hr class="ml-auto w-75">
    <div class="pt-4 mx-auto w-75">
        <a href="/product/{{$id}}" class="btn btn-outline-secondary">Перейти к продукту</a>
    </div>
@endsection
