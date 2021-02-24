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
            @foreach ($categories as $category)
                <a class="dropdown-item" href="">{{ $category->name }}</a>
            @endforeach
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/categories">Посмотреть все категории</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/statistics">Статистика</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown"
           role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Админ
        </a>
        <div class="dropdown-menu" aria-labelledby="categoriesDropdown">
          <a class="dropdown-item" href="/create-news">Создать новость</a>
          <a class="dropdown-item" href="/create-product">Создать продукт</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="">Новые продукты</a>
          <a class="dropdown-item" href="/">Все продукты</a>
          <a class="dropdown-item" href="/developers-requests">Запросы статуса разработчика</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/categories">Категории</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/users-list">Пользователи</a>
          <a class="dropdown-item" href="/groups-list">Группы</a>
          <a class="dropdown-item" href="/permissions">Разрешения</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown"
           role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Войти как
        </a>
        <div class="dropdown-menu" aria-labelledby="categoriesDropdown">
            @foreach ($users as $user)
                <a class="dropdown-item" href="">{{ $user->username }}</a>
            @endforeach
        </div>
      </li>
    </ul>
  </div>
