@extends('main')

@section('layout-content')
    <x-header :categories="$firstCategories" :users="$allUsers" :username="Auth::user()->username" />
    @yield('page-content')
        <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
            <!-- Position it -->
            <div style="position: fixed; bottom: 50px; right: 50px;">
            <!-- Then put toasts within -->
            <div id="releaseNotification" class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="10000">
                <div class="toast-header">
                    <!-- <img src="/img/brand.png" class="rounded mr-2" style="width: 1em"> -->
                    <strong class="mr-auto toast-title"></strong>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body">
                    <p class="toast-message"></p>
                    <a href="" class="toast-link"></a>
                </div>
            </div>
        </div>

        <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
            });
        }, false);
        })();
    </script>
@endsection