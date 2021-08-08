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
                <a class="nav-link<?= $this->data['controllerName'] == "ReviewsController" ? " active" : "" ?>"
                   href="?type=Reviews&action=show">Показать таблицу Reviews</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<?= $this->data['controllerName'] == "OrganisationsController" ? " active" : "" ?>"
                   href="?type=Organisations&action=show">Показать таблицу Organisations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<?= $this->data['controllerName'] == "UserShowReviewsController" ? " active" : "" ?>"
                   href="?type=UserShowReviews&action=show">Отзывы</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<?= $this->data['controllerName'] == "UserShowAddOrganisationController" ? " active" : "" ?>"
                   href="?type=UserShowAddOrganisation&action=showadd">Добавить организацию</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<?= $this->data['controllerName'] == "UserShowAddReviewController" ? " active" : "" ?>"
                   href="?type=UserShowAddReview&action=showadd">Добавить отзыв</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"
                   href="?type=Aut&action=logout">Выйти(<?= isset($_SESSION['user']['code']) ? $_SESSION['user']['name'] : "" ?>
                    )
                </a>
            </li>
        </ul>
    </div>
</nav>

