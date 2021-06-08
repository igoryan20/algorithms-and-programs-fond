<div>
    <form action="" class="form-inline my-2 my-lg-0 mr-4 d-flex flex-column">
        <input id="search-title" class="form-control mr-sm-2" type="search" placeholder="Я ищу...">
        {{-- <div class="list-group position-absolute" style="margin-top: 4.3ch">
            <a href="#" class="list-group-item list-group-item-action" style="width: 180px; z-index: 10">A second link item</a>
            <a href="#" class="list-group-item list-group-item-action">A third link item</a>
            <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
        </div> --}}
    </form>

    <script>
        let searchTitle = document.getElementById('search-title')
        searchTitle.oninput = function() {
            searchTitle.submit()
        }
    </script>
</div>
