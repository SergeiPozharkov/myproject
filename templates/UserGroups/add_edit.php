<?php
//print_r($this->data);
?>
<div id="main">
    <h1 id="form_title">Форма добавления/редактирования группы пользователей:</h1>
</div>
<div class="container">
    <div class="row">
        <div class="col">
        </div>
        <div class="col">
            <form action="<?= $this->data['action'] ?>" method="post">
                <?php
                foreach ($this->data["comments"] as $field => $value) {
                    echo $value . "<br>";
                    echo "<input name='$field' value='" . ($this->data['row'][$field] ?? "") . "'><br>";
                }
                ?>
                <input type="submit" value="ok" class="btn btn-success">
            </form>
        </div>
        <div class="col">
        </div>
    </div>
</div>

