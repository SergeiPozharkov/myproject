<div id="main">
    <h1 id="form_title">Форма для добавления отзыва:</h1>
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
                        echo "<select id='select_add_review' name='$field' style='border: solid black 2px'>";
                        foreach ($this->data["organisationsList"] as $value => $text) {
                            echo "<option value='$value' " . (($this->data["row"]['organisations_id'] ?? "" == $value) ?
                                    "selected" : "") . ">$text</option>";
                        }
                        echo "</select><br>";
                    } elseif ($field == "review") {
                        echo $value . "<br>";
                        echo "<textarea class='review_text' id='border_color' name='$field' placeholder='$value'></textarea><br>";
                    } elseif ($field == "title") {
                        echo $value . "<br>";
                        echo "<input class='review_title' id='border_color' name='$field' type='text' placeholder='$value'><br>";
                    }
                }

                ?>
                <input type="submit" value="Добавить" class="btn btn-success">
            </form>
        </div>
        <div class="col">
        </div>
    </div>
</div>
