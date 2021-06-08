@extends('layouts.main-layout')

@section('title')
    Мои разработки
@endsection

@section('page-content')
    <h1 class="pt-4 mr-auto ml-auto w-75">Желаемые продукты</h1>
    <hr class="ml-auto w-75">
    <div class="mx-auto w-75">
        <x-home-page.programs-list :products="$desiredProducts" />
    </div>
@endsection
