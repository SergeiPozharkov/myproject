<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
    <nav class="cl-effect-1">
        <div class="nav navbar-nav " id="flex">
            <div class="flex_item"><a
                        class="hvr-overline-from-left button2<?= $this->data['controllerName'] == "MainController" ? " active" : "" ?>"
                        href="?">Главная</a></div>

            <div class="flex_item"><a
                        class="hvr-overline-from-left button2<?= $this->data['controllerName'] == "UserReviewsController" ? " active" : "" ?>"
                        href="?type=UserReviews&action=show">Отзывы</a></div>
            <div class="flex_item"><a
                        class="hvr-overline-from-left button2<?= $this->data['controllerName'] == "UserOrganisationsController" ? " active" : "" ?>"
                        href="?type=UserOrganisations&action=show">Организации</a></div>
            <div class="flex_item"><a
                        class="hvr-overline-from-left button2<?= $this->data['controllerName'] == "UserOrganisationsController" ? " active" : "" ?>"
                        href="?type=UserOrganisations&action=showadd">Добавить организацию</a></div>
            <div class="flex_item"><a
                        class="hvr-overline-from-left button2<?= $this->data['controllerName'] == "UserReviewsController" ? " active" : "" ?>"
                        href="?type=UserReviews&action=showadd">Добавить отзыв</a></div>
            <div class="flex_item"><a
                        class="hvr-overline-from-left button2"
                        href="?type=Aut&action=logout">Выйти(<?= isset($_SESSION['user']['code']) ? $_SESSION['user']['name'] . ')' : "" ?>

                </a></div>

        </div>
    </nav>
</div><!-- /navbar-collapse -->
</nav>