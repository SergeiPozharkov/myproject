<?php
//print_r($this->data);

use W1020\HTML\Select; ?>

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
    <input type="submit" value="ok" class="btn btn-primary">
</form>
