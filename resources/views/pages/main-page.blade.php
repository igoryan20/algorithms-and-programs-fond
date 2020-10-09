@extends('layouts.main-layout')

@section('title')
    Главная
@endsection

@section('page-content')
    <x-home-page :programsData="$programsData"/>

@endsection
