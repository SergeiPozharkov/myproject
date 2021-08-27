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
                        echo "<select id='select_add_review' name='$field'>";
                        foreach ($this->data["groupList"] as $value => $text) {
                            echo "<option value='$value' " . (($this->data["row"]['user_groups_id'] ?? "" == $value) ?
                                    "selected" : "") . ">$text</option>";
                        }
                        echo "</select><br>";
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
