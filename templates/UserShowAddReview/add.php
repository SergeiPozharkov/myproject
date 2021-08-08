<?php
//print_r($this->data);

use W1020\HTML\Select; ?>
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
                        echo (new Select())
                                ->setName($field)
                                ->setData($this->data["organisationsList"])
                                ->setSelected($this->data["row"]['organisations_id'] ?? "")
                                ->html() . '<br>';
                    } elseif ($field == "review") {
                        echo $value . "<br>";
                        echo "<textarea id='review_text' name='$field'></textarea><br>";
                    } elseif ($field == "title") {
                        echo $value . "<br>";
                        echo "<input id='review_title' name='$field'><br>";
                    } else {
                        echo "<input type='hidden' name='$field' value='" . ($this->data['row'][$field] ?? "") . "'>";
                    }
                }

                ?>
                <input type="submit" value="Добавить" class="btn btn-primary">
            </form>
        </div>
        <div class="col">
        </div>
    </div>
</div>
