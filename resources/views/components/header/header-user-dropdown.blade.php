<div>
    <div class="my-2 my-lg-0">
        <div class="dropdown">
            <a class="nav-link dropdown-toggle text-dark" href="#" id="categoriesDropdown"
                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <svg color="#8bc34a" width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-person-circle mr-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                    <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                </svg>
                {{ $username }}
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="categoriesDropdown">
                <a class="dropdown-item" href="/profile">Профиль</a>
                <a class="dropdown-item" href="/products-library">Библиотека</a>
                <a class="dropdown-item" href="/my-developments">Мои разработки</a>
                <a class="dropdown-item" href="/desired-products">Желаемое</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="">Выход</a>
            </div>
        </div>
    </div>
</div>
