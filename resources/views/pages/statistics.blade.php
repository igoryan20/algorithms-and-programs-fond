@extends('layouts.main-layout')

@section('title')
    Статистика
@endsection

@section('page-content')
<script src="{{ asset('/js/chart.js') }}"></script>
    <h1 class="pt-4 mr-auto ml-auto w-75">Статистика</h1>
    <hr class="ml-auto w-75">
    <div class="mx-auto w-75 d-flex flex-wrap">
        <x-statistics.card-with-table :programsCount="$programsCount" :usersCount="$usersCount" :releasesCount="$releasesCount" />
        <x-statistics.card-with-pie />
        <x-statistics.card-with-vertical-bar chart="new_products_chart" />
        <x-statistics.card-with-vertical-bar chart="new_relizes_chart" />
        <x-statistics.card-with-horizontal-bar />
    </div>
@endsection
