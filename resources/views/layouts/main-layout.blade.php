@extends('main')

@section('layout-content')
    <?php
        use App\Http\Controllers\HeaderController;
        $categories = HeaderController::getCategories();
        $users = HeaderController::getUsers();
        $username = HeaderController::getUsername(6);
        session(['user_id' => '6']);
    ?>
    <x-header :categories="$categories" :users="$users" :username="$username" />
    @yield('page-content')
@endsection
