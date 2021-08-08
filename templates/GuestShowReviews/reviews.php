<?php
//print_r($this->data);

?>
<div class="organisation_info">
    <?php foreach ($this->data['organisationInfo'] as $row): ?>
        <h1><?= $row['name'] ?></h1>
        <i><?= $this->data['organisationColumnComments']['address'] ?>:</i>
        <span><b><?= $row['address'] ?></b></span>
        <br>
        <i><?= $this->data['organisationColumnComments']['phone'] ?>:</i><span><b><?= $row['phone'] ?></b></span>
        <br>
        <i><?= $this->data['organisationColumnComments']['social_networks'] ?>:</i>
        <span><b><?= $row['social_networks'] ?></b></span>
        <br>
        <i><?= $this->data['organisationColumnComments']['working_hours'] ?>:</i>
        <span><b><?= $row['working_hours'] ?></b></span><br>
        <i><?= $this->data['organisationColumnComments']['unp'] ?>:</i><span><b><?= $row['unp'] ?></b></span><br>
        <i><?= $this->data['organisationColumnComments']['legal_name'] ?>:</i>
        <span><b><?= $row['legal_name'] ?></b></span><br>
        <i><?= $this->data['organisationColumnComments']['description'] ?>:</i><p><i><?= $row['description'] ?></i>
        </p>
        <br>
    <?php endforeach; ?>
</div>
<hr>
<div class="show_review">
    <?php foreach ($this->data['organisationComments'] as $row): ?>
        <h1><?= $row['title'] ?></h1>
        <?= $this->data['columnComments']['organisations_id'] ?>:<br>
        <span><?= $row['organisations_name'] ?></span><br>
        <?= $this->data['columnComments']['date'] ?>:<br><span><?= $row['date'] ?></span><br>
        <?= $this->data['columnComments']['users_id'] ?>:<br><span><?= $row['users_name'] ?></span><br>
        <?= $this->data['columnComments']['review'] ?>:<br>
        <p><?= $row['review'] ?></p>
    <?php endforeach; ?>
    <a href="?type=GuestShowReviews&action=show" class='btn btn-primary'>Назад</a>
</div>