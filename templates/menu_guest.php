<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
                <a class="nav-link<?= $this->data['controllerName'] == "AutController" ? " active" : "" ?>"
                   href="?type=Aut&action=show">Войти</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<?= $this->data['controllerName'] == "AutController" ? " active" : "" ?>"
                   href="?type=Aut&action=showreg">Регистрация</a>
            </li>
        </ul>
    </div>
</nav>

