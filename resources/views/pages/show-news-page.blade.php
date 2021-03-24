@extends('layouts.main-layout')

@section('title')
    Новости
@endsection

@section('page-content')
    <h1 class="pt-4 mr-auto ml-auto w-75">Новости</h1>
    <hr class="ml-auto w-75">
    @if($news->isEmpty())
        <h4 class="mx-auto w-75">Новостей нет</h4>
    @else
        @foreach ($news as $new)
            <div class="mr-auto ml-auto w-75 border mb-2 pl-4">
                <h2 class="py-2">{{ $new->title }}</h2>
                <p>{{ $new->content }}</p>
                <small>{{ $new->created_at }}</small>
                @foreach ($new->creators as $creator)
                    <small>{{ $creator->surname }} {{ $creator->name }}</small>
                @endforeach
            </div>
        @endforeach
    @endif
@endsection
