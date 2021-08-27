<div id="main">
    <h1 id="form_title">Форма добавления/редактирования отзыва:</h1>
</div>
<div class="container">
    <div class="row">
        <div class="col">
        </div>
        <div class="col">
            <form action="<?= $this->data['action'] ?>" method="post">
                <?php
                foreach ($this->data["comments"] as $field => $value) {
                    if ($field == "organisations_id") {
                        echo $value . "<br>";
                        echo "<select id='select_add_review' name='$field'>";
                        foreach ($this->data["organisationsList"] as $value => $text) {
                            echo "<option value='$value' " . (($this->data["row"]['organisations_id'] ?? "" == $value) ?
                                    "selected" : "") . ">$text</option>";
                        }
                        echo "</select><br>";
                    } elseif ($field == "users_id") {
                        echo $value . "<br>";
                        echo "<select id='select_add_review' name='$field'>";
                        foreach ($this->data["usersList"] as $value => $text) {
                            echo "<option value='$value' " . (($this->data["row"]['users_id'] ?? "" == $value) ?
                                    "selected" : "") . ">$text</option>";
                        }
                        echo "</select><br>";
                    } elseif ($field == "date") {
                        echo "<input type='hidden' name='$field' value='" . ($this->data['row'][$field] ??
                                date('Y-m-d H:i:s')) . "'>";
                    } elseif ($field == "review") {
                        echo $value . "<br>";
                        echo "<textarea id='review_text' name='$field'>" . ($this->data['row'][$field] ??
                                "") . "</textarea><br>";
                    } elseif ($field == "title") {
                        echo $value . "<br>";
                        echo "<input id='review_title' name='$field' value='" . ($this->data['row'][$field] ??
                                "") . "'><br>";
                    } else {
                        echo $value . "<br>";
                        echo "<input name='$field' value='" . ($this->data['row'][$field] ?? "") . "'><br>";
                    }
                }

                ?>
                <input type="submit" value="Ок" class="btn btn-success">
            </form>
        </div>
        <div class="col">
        </div>
    </div>
</div>

