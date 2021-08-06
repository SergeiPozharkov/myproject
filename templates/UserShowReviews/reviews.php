<?php
//print_r($this->data);
?>
<div class="show_review">
    <?php foreach ($this->data['organisationComments'] as $row): ?>
        <h1><?= $row['title'] ?></h1>
        <?= $this->data['columnComments']['organisations_id'] ?>:<br>
        <span><?= $row['organisations_id'] ?></span><br>
        <?= $this->data['columnComments']['date'] ?>:<br><span><?= $row['date'] ?></span><br>
        <?= $this->data['columnComments']['users_id'] ?>:<br><span><?= $row['users_id'] ?></span><br>
        <?= $this->data['columnComments']['review'] ?>:<br>
        <p><?= $row['review'] ?></p>
    <?php endforeach; ?>
    <a href="?type=UserShowReviews&action=show" class='btn btn-primary'>Назад</a>
</div>
