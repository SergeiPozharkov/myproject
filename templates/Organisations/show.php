<?php

use W1020\HTML\Pagination;
use W1020\HTML\Table;


//print_r($this->data['table']);
echo <<<HTML
<div class="container">
  <div class="row">
    <div class="col">
      Column
    </div>
    <div class="col">
HTML;
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
echo <<<HTML
</div>
    <div class="col">
      Column
    </div>
  </div>
</div>
HTML;
?>
<a href="?type=<?= $this->data['controllerName'] ?>&action=showadd" class="btn btn-primary">Добавить</a>
