<?php use W1020\HTML\Select; ?>
<div id="main">
    <h1 id="form_title">Форма добавления/редактирования пользователя:</h1>
</div>
<div class="container">
    <div class="row">
        <div class="col">
        </div>
        <div class="col">
            <form action="<?= $this->data['action'] ?>" method="post">
                <?php
                foreach ($this->data["comments"] as $field => $value) {
                    if ($field == "user_groups_id") {
                        echo $value . "<br>";
                        echo (new Select())
                                ->setName($field)
                                ->setData($this->data["groupList"])
                                ->setSelected($this->data["row"]['user_groups_id'] ?? "")
                                ->html() . '<br>';
                    } else {
                        echo $value . "<br>";
                        echo "<input name='$field' value='" . ($this->data['row'][$field] ?? "") . "'><br>";
                    }
                }
                ?>
                <input type="submit" value="ok" class="btn btn-success">
            </form>
        </div>
        <div class="col">
        </div>
    </div>
</div>
