<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
    <nav class="cl-effect-1">
        <div class="nav navbar-nav " id="flex">
            <div class="flex_item"><a
                        class="hvr-overline-from-left button2<?= $this->data['controllerName'] == "MainController" ? " active" : "" ?>"
                        href="?">Главная</a></div>

            <div class="flex_item"><a
                        class="hvr-overline-from-left button2<?= $this->data['controllerName'] == "GuestReviewsController" ? " active" : "" ?>"
                        href="?type=GuestReviews&action=show">Отзывы</a></div>
            <div class="flex_item"><a
                        class="hvr-overline-from-left button2<?= $this->data['controllerName'] == "GuestOrganisationsController" ? " active" : "" ?>"
                        href="?type=GuestOrganisations&action=show">Организации</a></div>
            <div class="flex_item"><a
                        class="hvr-overline-from-left button2<?= $this->data['controllerName'] == "AutController" ? " active" : "" ?>"
                        href="?type=Aut&action=show">Войти</a></div>
            <div class="flex_item"><a
                        class="hvr-overline-from-left button2<?= $this->data['controllerName'] == "AutController" ? " active" : "" ?>"
                        href="?type=Aut&action=showreg">Регистрация</a>
            </div>
        </div>
    </nav>
</div>
</nav>