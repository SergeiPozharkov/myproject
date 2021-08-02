<?php
//print_r($this->data);
?>

<div class="container">
    <div class="row">
        <div class="col">
            Column
        </div>
        <div class="col">
            <div class="container">
                <form action="<?= $this->data['action'] ?>" method="post">
                    <?php

                    foreach ($this->data["comments"] as $field => $value) {
                        echo $value . "<br>";
                        if ($field == "description") {
                            echo "<textarea class='form-control' class='news_text' name='$field'>" . ($this->data['row'][$field] ?? "") . "</textarea><br>";
                        } else {
                            echo "<input class='form-control' name='$field' value='" . ($this->data['row'][$field] ?? "") . "'><br>";
                        }
                    }
                    ?>
                    <input type="submit" value="ok" class="btn btn-primary">
                </form>
            </div>
        </div>
        <div class="col">
            Column
        </div>
    </div>
</div>