<?php


namespace App\Model;

use W1020\Table as ORMTable;


class ReviewModel extends ORMTable
{

    public function getReviewList()
    {
        $data = $this->query("SELECT `id`,`name` FROM `user_groups`");

    }
}