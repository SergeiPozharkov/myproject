<div id="main">
    <h1 id="form_title">Форма для добавления новой организации:</h1>
</div>
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
                            echo "<textarea id='border_color' class='form-control' class='news_text' typeof='text' name='$field' placeholder='$value'></textarea><br>";
                        } elseif ($field == "social_networks") {
                            echo $value . "<br>";
                            echo "<input id='border_color' class='form-control' type='text' name='$field' placeholder='$value'><br>";
                        } elseif ($field == "working_hours") {
                            echo $value . " * <br>";
                            echo "<div class='working_hours'><div><span>Дни:</span>" . $select = <<<SELECT
<select name="week_days" id="select" style="border: solid black 2px">
  <option value="" style="display:none;"></option>
  <option value="Пн.-Вс.:">Пн.-Вс.:</option>
  <option value="Пн.-Пт.:">Пн.-Пт.:</option>
  <option value="Пн.-Сб.:">Пн.-Сб.:</option>
</select>
SELECT;
                            echo "</div><div><span>С:</span><input id='working_hours' type='number' name='start_hours' style='border: solid black 2px'>:
<input id='working_hours' type='number' name='start_minutes' style='border: solid black 2px'></div>";
                            echo "<div><span>По:</span><input id='working_hours' type='number' name='end_hours' style='border: solid black 2px'>:
<input id='working_hours' type='number' name='end_minutes' style='border: solid black 2px'></div></div><br>";

                        } elseif ($field == "phone") {
                            echo $value . " * <br>";
                            echo "<input class='form-control' type='text' placeholder='формата:+375292223344' name='$field' id='border_color'><br>";
                        } else {
                            echo $value . " * <br>";
                            echo "<input class='form-control' name='$field' type='text' placeholder='$value' id='border_color'><br>";
                        }
                    }
                    ?>
                    <input type="submit" value="Добавить" class="btn btn-success">
                </form>
            </div>
        </div>
        <div class="col">
        </div>
    </div>
</div>