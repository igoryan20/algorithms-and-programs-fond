<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('img/brand.png') }}" alt="brand" style="height: 48px; width: 68px" />
        </a>


        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="/news">Новости</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown"
                 role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Категории
              </a>
              <div class="dropdown-menu" aria-labelledby="categoriesDropdown">
                <a class="dropdown-item" href="">First</a>
                <a class="dropdown-item" href="">First</a>
                <a class="dropdown-item" href="">First</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Статистика</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown"
                 role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Админ
              </a>
              <div class="dropdown-menu" aria-labelledby="categoriesDropdown">
                <a class="dropdown-item" href="">Создать новость</a>
                <a class="dropdown-item" href="">Создать продукт</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="">Новые продукты</a>
                <a class="dropdown-item" href="">Все продукты</a>
                <a class="dropdown-item" href="">Запросы статуса разработчика</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="">Категории</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="">Пользователи</a>
                <a class="dropdown-item" href="">Группы</a>
                <a class="dropdown-item" href="">Разрешения</a>
              </div>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0 mr-4">
            <input class="form-control mr-sm-2" type="search" placeholder="Я ищу...">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Найти</button>
          </form>
          <div class="my-2 my-lg-0 d-flex">
            <svg color="#8bc34a" width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
            </svg>
            <div class="dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="categoriesDropdown"
                   role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   admin
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="categoriesDropdown">
                  <a class="dropdown-item" href="">Профиль</a>
                  <a class="dropdown-item" href="">Библиотека</a>
                  <a class="dropdown-item" href="">Мои разработки</a>
                  <a class="dropdown-item" href="">Желаемое</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="">Выход</a>
                </div>
            </div>
          </div>

        </div>
      </nav>
</header>
