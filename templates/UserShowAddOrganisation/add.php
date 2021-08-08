<?php
//print_r($this->data);
?>

<div class="container">
    <div class="row">
        <div class="col">
        </div>
        <div class="col">
            <div class="container">
                <form action="<?= $this->data['action'] ?>" method="post">
                    <?php

                    foreach ($this->data["comments"] as $field => $value) {
                        if ($field == "description") {
                            echo $value . "<br>";
                            echo "<textarea class='form-control' class='news_text' name='$field'></textarea><br>";
                        } elseif ($field == "social_networks") {
                            echo $value . "<br>";
                            echo "<input class='form-control' name='$field'><br>";
                        } elseif ($field == "working_hours") {
                            echo $value . " * <br>";
                            echo "<span>Дни недели:</span>" . $select = <<<SELECT
<select name="week_days">
  <option value="" style="display:none;"></option>
  <option value="Пн.-Вс.:">Пн.-Вс.:</option>
  <option value="Пн.-Пт.:">Пн.-Пт.:</option>
  <option value="Пн.-Сб.:">Пн.-Сб.:</option>
</select>
SELECT;
                            echo "<br> <span>С:</span><input id='working_hours' type='number' name='start_hours'>:<input id='working_hours' type='number' name='start_minutes'><br>";
                            echo " <span>По:</span><input id='working_hours' type='number' name='end_hours'>:<input id='working_hours' type='number' name='end_minutes'><br>";

                        } else {
                            echo $value . " * <br>";
                            echo "<input class='form-control' name='$field'><br>";
                        }
                    }
                    ?>
                    <input type="submit" value="Добавить" class="btn btn-primary">
                </form>
            </div>
        </div>
        <div class="col">
        </div>
    </div>
</div>