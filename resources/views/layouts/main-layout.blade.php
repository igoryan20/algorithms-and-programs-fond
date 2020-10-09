@extends('main')

@section('layout-content')
    <x-header />
    @yield('page-content')
    {{-- @include('footer') --}}
@endsection
