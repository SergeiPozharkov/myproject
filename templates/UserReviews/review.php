<div id="main">
    <h1 id="form_title">Отзыв:</h1>
</div>
<div class="container">
    <div class="row">
        <div class="col">
        </div>
        <div class="col">
            <div class="show_review">
                <h1><?= $this->data['comments']['title'] ?></h1>
                <?= $this->data['columnComments']['organisations_id'] ?>:<br>
                <span><?= $this->data['comments']['organisations_id'] ?></span><br>
                <?= $this->data['columnComments']['date'] ?>
                :<br><span><?= $this->data['comments']['date'] = date(
                        "d-m-Y H:i:s",
                        strtotime($this->data['comments']['date'])
                    ) ?></span><br>
                <?= $this->data['columnComments']['users_id'] ?>
                :<br><span><?= $this->data['comments']['users_id'] ?></span><br>
                <?= $this->data['columnComments']['review'] ?>:<br>
                <p><?= $this->data['comments']['review'] ?></p>
                <a href="?type=UserReviews&action=show" class='btn btn-warning' id="button_color">Назад</a>
            </div>
        </div>
        <div class="col">
        </div>
    </div>
</div>
