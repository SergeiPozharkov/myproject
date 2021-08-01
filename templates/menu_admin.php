<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link<?= $this->data['controllerName'] == "MainController" ? " active" : "" ?>" href="?">Главная</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<?= $this->data['controllerName'] == "ReviewsController" ? " active" : "" ?>"
                   href="?type=Reviews&action=show">Показать таблицу Reviews</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<?= $this->data['controllerName'] == "UsersController" ? " active" : "" ?>"
                   href="?type=Users&action=show">Показать таблицу Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<?= $this->data['controllerName'] == "UserGroupsController" ? " active" : "" ?>"
                   href="?type=UserGroups&action=show">Показать таблицу UserGroups</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?type=Aut&action=logout">Выйти</a>
            </li>
        </ul>
    </div>
</nav>

