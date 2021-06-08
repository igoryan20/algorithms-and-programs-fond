<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="/fap/news">Новости</a>
      </li>
      @if(Auth::user()->group_id != 1)
        @if(Auth::user()->group_id != 2)
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown"
              role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Категории
            </a>
            <div class="dropdown-menu" aria-labelledby="categoriesDropdown">
                @foreach ($categories as $category)
                    <a class="dropdown-item" href="/fap/categories/{{ $category->url }}">{{ $category->name }}</a>
                @endforeach
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/fap/categories">Посмотреть все категории</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/fap/statistics">Статистика</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown"
              role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Админ
            </a>
            <div class="dropdown-menu" aria-labelledby="categoriesDropdown">
              <a class="dropdown-item" href="/fap/create-news">Создать новость</a>
              <a class="dropdown-item" href="/fap/create-product">Создать продукт</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/fap/new-products">Новые продукты</a>
              <a class="dropdown-item" href="/fap/">Все продукты</a>
              <a class="dropdown-item" href="/fap/developers-requests">Запросы статуса разработчика</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/fap/categories">Категории</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/fap/users-list">Пользователи</a>
              <a class="dropdown-item" href="/fap/groups-list">Группы</a>
              <a class="dropdown-item" href="/fap/permissions">Разрешения</a>
            </div>
          </li>
        @else
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown"
              role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Разработчик
            </a>
            <div class="dropdown-menu" aria-labelledby="categoriesDropdown">
              <a class="dropdown-item" href="/fap/create-news">Создать новость</a>
              <a class="dropdown-item" href="/fap/create-product">Создать продукт</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/fap/new-products">Новые продукты</a>
              <a class="dropdown-item" href="/fap">Все продукты</a>
            </div>
          </li>
        @endif
      @endif
    </ul>
  </div>
