@extends('main')

@section('layout-content')
    <x-header :categories="$firstCategories" :users="$allUsers" :username="Auth::user()->username" />
    @yield('page-content')
        <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
        <!-- Position it -->
        <div style="position: fixed; bottom: 50px; right: 50px;">
            <!-- Then put toasts within -->
            <div id="releaseNotification" class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
            <div class="toast-header">
                <img src="..." class="rounded mr-2" alt="...">
                <strong class="mr-auto">Bootstrap</strong>
                <small class="text-muted">just now</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                See? Just like this.
            </div>
            </div>
        </div>
@endsection