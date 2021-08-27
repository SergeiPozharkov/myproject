<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
    <nav class="cl-effect-1">
        <div class="nav navbar-nav " id="flex">
            <div class="flex_item"><a
                        class="hvr-overline-from-left button2<?= $this->data['controllerName'] == "MainController" ? " active" : "" ?>"
                        href="?">Главная</a></div>

            <div class="flex_item"><a
                        class="hvr-overline-from-left button2<?= $this->data['controllerName'] == "ReviewsController" ? " active" : "" ?>"
                        href="?type=Reviews&action=show">Отзывы</a></div>
            <div class="flex_item"><a
                        class="hvr-overline-from-left button2<?= $this->data['controllerName'] == "OrganisationsController" ? " active" : "" ?>"
                        href="?type=Organisations&action=show">Организации</a></div>
            <div class="flex_item"><a
                        class="hvr-overline-from-left button2<?= $this->data['controllerName'] == "UsersController" ? " active" : "" ?>"
                        href="?type=Users&action=show">Пользователи</a></div>
            <div class="flex_item"><a
                        class="hvr-overline-from-left button2<?= $this->data['controllerName'] == "UserGroupsController" ? " active" : "" ?>"
                        href="?type=UserGroups&action=show">Группы пользователей</a></div>
            <div class="flex_item"><a
                        class="hvr-overline-from-left button2"
                        href="?type=Aut&action=logout">Выйти(<?= (isset($_SESSION['user']['code']) ? $_SESSION['user']['name'] : "") . ')' ?></a>
            </div>

        </div>
    </nav>
</div>
</nav>