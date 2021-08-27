<?php use W1020\HTML\Pagination; ?>
<div id="main">
    <h1 id="form_title">Список организаций:</h1>
</div>
<div class="container">
    <div class="row">
        <div class="col">
        </div>
        <div class="col">
            <?php
            echo "<table>";
            foreach ($this->data['table'] as $row) {
                echo "<tr><td><h1><b>$row[name]</b></h1></td></tr>";
                echo "<tr><td><span><b>$row[address]</b></span></td></tr>";
                echo "<tr><td><span><b>$row[phone]</b></span></td></tr>";
                echo "<tr><td><span><b>$row[social_networks]</b></span></td></tr>";
                echo "<tr><td><span><b>$row[working_hours]</b></span></td></tr>";
                echo "<tr><td><span><b>$row[unp]</b></span></td></tr>";
                echo "<tr><td><span><b>$row[legal_name]</b></span></td></tr>";
                echo "<tr><td><p>" . mb_substr($row['description'], 0, 15) . "...</p></td></tr>";
                echo "<tr><td><a href='?type={$this->data['controllerName']}&action=del&id=$row[id]'>❌</a>";
                echo "<a href='?type={$this->data['controllerName']}&action=showedit&id=$row[id]'>✏</a></td></tr>";
            }
            echo "</table>";
            echo (new Pagination())
                ->setUrlPrefix("?type={$this->data['controllerName']}&action=show&page=")
                ->setPageCount($this->data["pageCount"])
                ->setActivePage($this->data["activePage"])
                ->html();
            ?>
            <a href="?type=<?= $this->data['controllerName'] ?>&action=showadd" class="btn btn-warning"
               id="button_color">Добавить</a>
        </div>
        <div class="col">
        </div>
    </div>
</div>