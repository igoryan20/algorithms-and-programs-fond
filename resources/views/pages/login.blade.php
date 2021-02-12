@extends('layouts.login-layout')

@section('title')
    Вход
@endsection

@section('page-content')
    <h1 class="pt-4 mr-auto ml-auto w-75">От какого пользователя зайти в подсистему?</h1>
    <hr class="ml-auto w-75">
    <div class="mr-auto ml-auto w-75 d-flex">
        <div class="card mr-4 w-25">
            <div class="card-header">
                <p class="w-50 mx-auto mb-0"><b>Пользователи</b></p>
            </div>
            <div class="card-body px-0 py-0">
                <table class="table table-hover">
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <form action="/login-attempt" method="POST">
                                    {{ csrf_field() }}
                                    <td><button href="" class="btn w-100">{{ $user->username }}</button></td>
                                    <input type="hidden" name="username" value="{{ $user->username }}">
                                    <input type="hidden" name="password" value="{{ $user->password }}">
                                </form>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card mr-4 w-25">
            <div class="card-header">
                <p class="w-50 mx-auto mb-0"><b>Разработчики</b></p>
            </div>
            <div class="card-body px-0 py-0">
                <table class="table table-hover">
                    <tbody>
                        @foreach ($developers as $developer)
                            <tr>
                                <form action="">
                                    <td><button class="btn w-100">{{ $developer->username }}</button></td>
                                    <input type="hidden" name="userId" value="{{ $developer->id }}">
                                </form>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card mr-4 w-25">
            <div class="card-header">
                <p class="w-50 mx-auto mb-0"><b>Администраторы</b></p>
            </div>
            <div class="card-body px-0 py-0">
                <table class="table table-hover">
                    <tbody>
                        @foreach ($admins as $admin)
                            <tr>
                                <form action="">
                                    <td><button href="" class="btn w-100">{{ $admin->username }}</button></td>
                                    <input type="hidden" name="userId" value="{{ $admin->id }}">
                                </form>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
