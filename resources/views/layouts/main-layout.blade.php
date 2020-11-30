@extends('main')

@section('layout-content')
    <x-header :categories="$categories" />
    @yield('page-content')
    {{-- @include('footer') --}}
@endsection
