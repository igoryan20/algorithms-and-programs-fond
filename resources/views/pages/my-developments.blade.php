@extends('layouts.main-layout')

@section('title')
    Мои разработки
@endsection

@section('page-content')
    <h1 class="pt-4 mr-auto ml-auto w-75">Мои разработки</h1>
    <h2 class="pt-4 mx-auto w-75">Здесь перечисляются разработанные Вами продукты</h2>
    <hr class="ml-auto w-75">
    <x-home-page.programs-list :products="$developerProducts" />
@endsection
