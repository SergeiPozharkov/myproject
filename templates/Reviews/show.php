<?php

use W1020\HTML\Pagination;
use W1020\HTML\Table;

?>
<div class="admin_show">
<?php
    echo (new Table())
        ->setData($this->data["table"])
        ->setHeaders($this->data["comments"])
        ->addColumn(fn($row) => "<a href='?type={$this->data['controllerName']}&action=del&id=$row[id]'>❌</a>")
        ->addColumn(fn($row) => "<a href='?type={$this->data['controllerName']}&action=showedit&id=$row[id]'>✏</a>")
        ->setClass("table table-dark table-borderless")
        ->html();
    echo (new Pagination())
        ->setUrlPrefix("?type={$this->data['controllerName']}&action=show&page=")
        ->setPageCount($this->data["pageCount"])
        ->setActivePage($this->data["activePage"])
        ->html();
    ?>

    <a href="?type=<?= $this->data['controllerName'] ?>&action=showadd" class="btn btn-warning">Добавить</a>
</div>