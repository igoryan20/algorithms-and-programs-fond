@extends('layouts.main-layout')

@section('title')
    Профиль
@endsection

@section('page-content')

<div style="background-color: #f9fbe7">
    <h1 class="pt-4 mr-auto ml-auto w-75">Мои разработки</h1>
    <h2 class="pt-4 mx-auto w-75">Здесь перечисляются разработанные Вами продукты</h2>
    <hr class="ml-auto w-75">

    <x-home-page.programs-list :programsData="$myPrograms" />
</div>
@endsection
