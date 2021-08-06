<?php

use W1020\HTML\Pagination;
use W1020\HTML\Table;

print_r($this->data);
echo "<table>";
foreach ($this->data['reviewsList'] as $row) {
    echo "<tr><td><a href='?type={$this->data['controllerName']}&action=showOrganisationReviews&id=$row[id]'><b>$row[title]</b></a></tr></td>";
    echo "<tr><td><b>$row[users_id]</b></td></tr>";
    echo "<tr><td><b>$row[date]</b></td></tr>";
    echo "<tr><td><a href='?type={$this->data['controllerName']}&action=showReview&id=$row[id]' class='btn btn-primary'>Подробнее</a></td></tr>";
}
echo "</table>";
echo (new Pagination())
    ->setUrlPrefix("?type={$this->data['controllerName']}&action=show&page=")
    ->setPageCount($this->data["pageCount"])
    ->setActivePage($this->data["activePage"])
    ->html();
?>

<!--<a href="?type=--><? //= $this->data['controllerName'] ?><!--&action=showReview" class="btn btn-primary">Подробнее</a>-->