@extends('layouts.main-layout')

@section('title')
    {{ $title }}
@endsection

@section('page-content')
    <h1 class="pt-4 mr-auto ml-auto w-75">{{ $info }}</h1>
    <hr class="ml-auto w-75">
    <div class="mx-auto w-75">
        @if($id)
            <a href="/product/{{$id}}" class="btn btn-outline-secondary">Перейти к продукту</a>
        @else
            <a href="/" class="btn btn-outline-secondary">Перейти к продуктам</a>
        @endif
    </div>
@endsection
