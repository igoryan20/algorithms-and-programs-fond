@extends('main')

@section('layout-content')
    <?php
        use App\Http\Controllers\HeaderController;
        $categories = HeaderController::getCategories();
    ?>
    <x-header :categories="$categories" />
    @yield('page-content')
    {{-- @include('footer') --}}
@endsection
