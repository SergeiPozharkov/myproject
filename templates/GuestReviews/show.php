<?php use W1020\HTML\Pagination; ?>
<div id="main">
    <h1 id="form_title">Список отзывов:</h1>
</div>
<div class="container">
    <div class="row">
        <div class="col">
        </div>
        <div class="col">
            <?php
            foreach ($this->data['table'] as &$row_date) {
                $row_date['date'] = date("d-m-Y H:i:s", strtotime($row_date['date']));
            }
            echo "<table>";
            foreach ($this->data['table'] as $key => $row) {
                echo "<tr><td><b>$row[title]</b></tr></td>";
                echo "<tr><td><b>$row[users_name]</b></td></tr>";
                echo "<tr><td><b>$row[date]</b></td></tr>";
                echo "<tr><td><a href='?type={$this->data['controllerName']}&action=showReview&id=$row[id]' 
class='btn btn-warning' id='button_color'>Подробнее</a></td></tr>";
            }
            echo "</table>";
            echo (new Pagination())
                ->setUrlPrefix("?type={$this->data['controllerName']}&action=show&page=")
                ->setPageCount($this->data["pageCount"])
                ->setActivePage($this->data["activePage"])
                ->html();
            ?>
        </div>
        <div class="col">
        </div>
    </div>
</div>