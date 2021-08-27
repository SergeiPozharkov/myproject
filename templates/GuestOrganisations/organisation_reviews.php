<div id="main">
    <h1 id="form_title">Полная информация о организации и список отзывов:</h1>
</div>
<div class="organisation_info">
    <?php foreach ($this->data['organisationInfo'] as $row): ?>
        <h1><?= $row['name'] ?></h1>
        <i><?= $this->data['columnComments']['address'] ?>:</i>
        <span><b><?= $row['address'] ?></b></span>
        <br>
        <i><?= $this->data['columnComments']['phone'] ?>:</i><span><b><?= $row['phone'] ?></b></span>
        <br>
        <i><?= $this->data['columnComments']['social_networks'] ?>:</i>
        <span><b><?= $row['social_networks'] ?></b></span>
        <br>
        <i><?= $this->data['columnComments']['working_hours'] ?>:</i>
        <span><b><?= $row['working_hours'] ?></b></span><br>
        <i><?= $this->data['columnComments']['unp'] ?>:</i><span><b><?= $row['unp'] ?></b></span><br>
        <i><?= $this->data['columnComments']['legal_name'] ?>:</i>
        <span><b><?= $row['legal_name'] ?></b></span><br>
        <i><?= $this->data['columnComments']['description'] ?>:</i><p><i><?= $row['description'] ?></i>
        </p>
        <br>
    <?php endforeach; ?>
</div>
<hr>
<div class="container">
    <div class="row">
        <div class="col">
        </div>
        <div class="col">
            <div class="show_review">
                <?php foreach ($this->data['organisationComments'] as $row): ?>
                    <h1><?= $row['title'] ?></h1>
                    <?= $this->data['reviewsColumnComments']['organisations_id'] ?>:<br>
                    <span><?= $row['organisations_name'] ?></span><br>
                    <?= $this->data['reviewsColumnComments']['date'] ?>:<br><span><?= $row['date'] ?></span><br>
                    <?= $this->data['reviewsColumnComments']['users_id'] ?>:<br><span><?= $row['users_name'] ?></span>
                    <br>
                    <?= $this->data['reviewsColumnComments']['review'] ?>:<br>
                    <p><?= $row['review'] ?></p>
                <?php endforeach; ?>
                <a href="?type=GuestOrganisations&action=show" class='btn btn-warning' id="button_color">Назад</a>
            </div>
        </div>
        <div class="col">
        </div>
    </div>
</div>
