<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('img/brand.png') }}" alt="brand" style="height: 48px; width: 68px" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="/news">Новости<span class="sr-only">(current)</span></a>
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
                <a class="dropdown-item" href=""></a>
                <a class="dropdown-item" href="">First</a>
                <a class="dropdown-item" href="">First</a>
              </div>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Я ищу...">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Найти</button>
          </form>
        </div>
      </nav>
</header>
