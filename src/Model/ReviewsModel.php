<?php


namespace App\Model;

use W1020\Table as ORMTable;


class ReviewsModel extends ORMTable
{
    public function getUsersList(): array
    {
        $data = $this->query("SELECT `id`,`name` AS 'user_name' FROM `users`");
        $arr = [];
        foreach ($data as $row) {
            $arr[$row['id']] = $row['user_name'];
        }
        return $arr;
    }

    public function getOrganisationsList(): array
    {
        $data = $this->query("SELECT `id`,`name` FROM `organisations`");
        $arr = [];
        foreach ($data as $row) {
            $arr[$row['id']] = $row['name'];
        }
        return $arr;
    }

}