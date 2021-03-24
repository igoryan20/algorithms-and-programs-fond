@extends('main')

@section('layout-content')
    <x-header :categories="$firstCategories" :users="$allUsers" :username="Auth::user()->username" />
    @yield('page-content')
@endsection