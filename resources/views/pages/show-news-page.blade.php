@extends('layouts.main-layout')

@section('title')
    Новости
@endsection

@section('page-content')
    <h1 class="pt-4 mr-auto ml-auto w-75">Новости</h1>
    <hr class="ml-auto w-75">
    @foreach ($news as $item)
        <div class="mr-auto ml-auto w-75 border mb-2">
            <h2 class="pl-4 py-2 border-bottom">{{ $item->title }}</h2>
            <p class="px-4">{{ $item->content }}</p>
        </div>
    @endforeach
@endsection
