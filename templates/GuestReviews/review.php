<?php
//print_r($this->data);
?>
<div class="show_review">
    <h1><?= $this->data['review']['title'] ?></h1>
    <?= $this->data['columnComments']['organisations_id'] ?>:<br>
    <span><?= $this->data['comments']['organisations_id'] ?></span><br>
    <?= $this->data['columnComments']['date'] ?>:<br><span><?= $this->data['review']['date'] ?></span><br>
    <?= $this->data['columnComments']['users_id'] ?>:<br><span><?= $this->data['comments']['users_id'] ?></span><br>
    <?= $this->data['columnComments']['review'] ?>:<br>
    <p><?= $this->data['review']['review'] ?></p>
    <a href="?type=GuestReviews&action=show" class='btn btn-primary'>Назад</a>
</div>