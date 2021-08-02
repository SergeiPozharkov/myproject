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
                    //                                                            unset($this->data["comments"]['picture']);
                    //                    unset($this->data["comments"]['date'], $this->data["comments"]['organisations_id'], $this->data["comments"]['users_id']);

                    foreach ($this->data["comments"] as $field => $value) {

                        if ($field == "date") {
                            echo "<input type='hidden' name='$field' value='" . ($this->data['row'][$field] ?? date('YYYY-MM-DD hh:mm:ss')) . "'>";
                        }

                        if ($field == "organisations_id" || $field == "users_id") {
                            echo "<input type='hidden' name='$field' value='" . ($this->data['row'][$field] ?? "") . "'>";
                        }
                        if ($field == "review") {
                            echo $value . "<br>";
                            echo "<textarea class='form-control' class='news_text' name='$field'>" . ($this->data['row'][$field] ?? "") . "</textarea><br>";
                        } elseif ($field == "title") {
                            echo $value . "<br>";
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