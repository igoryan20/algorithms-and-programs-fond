@extends('main')

@section('layout-content')
    <?php
        use App\Http\Controllers\HeaderController;
        $categories = HeaderController::getCategories();
        $username = HeaderController::getUsername();
    ?>
    <x-header :username="$username" :categories="$categories" />
    @yield('page-content')
    {{-- @include('footer') --}}
@endsection
