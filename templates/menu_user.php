<!--<nav class="navbar navbar-expand-lg navbar-dark bg-dark">-->
<!--    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"-->
<!--            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">-->
<!--        <span class="navbar-toggler-icon"></span>-->
<!--    </button>-->
<!---->
<!--    <div class="collapse navbar-collapse" id="navbarSupportedContent">-->
<!--        <ul class="navbar-nav mr-auto">-->
<!--            <li class="nav-item active">-->
<!--                <a class="nav-link--><? //= $this->data['controllerName'] == "MainController" ? " active" : "" ?><!--" href="?">Главная</a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link--><? //= $this->data['controllerName'] == "UserShowReviewsController" ? " active" : "" ?><!--"-->
<!--                   href="?type=UserShowReviews&action=show">Отзывы</a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link--><? //= $this->data['controllerName'] == "UserShowAddOrganisationController" ? " active" : "" ?><!--"-->
<!--                   href="?type=UserShowAddOrganisation&action=showadd">Добавить организацию</a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link--><? //= $this->data['controllerName'] == "UserShowAddReviewController" ? " active" : "" ?><!--"-->
<!--                   href="?type=UserShowAddReview&action=showadd">Добавить отзыв</a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link"-->
<!--                   href="?type=Aut&action=logout">Выйти(--><? //= isset($_SESSION['user']['code']) ? $_SESSION['user']['name'] : "" ?>
<!--                    )-->
<!--                </a>-->
<!--            </li>-->
<!--        </ul>-->
<!--    </div>-->
<!--</nav>-->

<!------->
<div id="rotate_logo">
    <h1>
        <a class="navbar-brand link link--yaku" id="rotate_letter"
           href="?"><span>V</span><span>O</span><span>D</span><span>G</span><span>U</span><span>K</span></a>
    </h1>
</div>
</div>
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
    <nav class="cl-effect-1">
        <div class="nav navbar-nav " id="flex">
            <div class="flex_item"><a
                        class="hvr-overline-from-left button2<?= $this->data['controllerName'] == "MainController" ? " active" : "" ?>"
                        href="?">Главная</a></div>

            <div class="flex_item"><a
                        class="hvr-overline-from-left button2<?= $this->data['controllerName'] == "UserShowReviewsController" ? " active" : "" ?>"
                        href="?type=UserShowReviews&action=show">Отзывы</a></div>
            <div class="flex_item"><a
                        class="hvr-overline-from-left button2<?= $this->data['controllerName'] == "UserShowAddOrganisationController" ? " active" : "" ?>"
                        href="?type=UserShowAddOrganisation&action=showadd">Добавить организацию</a></div>
            <div class="flex_item"><a
                        class="hvr-overline-from-left button2<?= $this->data['controllerName'] == "UserShowAddReviewController" ? " active" : "" ?>"
                        href="?type=UserShowAddReview&action=showadd">Добавить отзыв</a></div>
            <div class="flex_item"><a
                        class="hvr-overline-from-left button2"
                        href="?type=Aut&action=logout">Выйти(<?= isset($_SESSION['user']['code']) ? $_SESSION['user']['name'] . ')' : "" ?>

                </a></div>

        </div>
    </nav>
</div><!-- /navbar-collapse -->
</nav>