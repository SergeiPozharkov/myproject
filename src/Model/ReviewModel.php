<?php


namespace App\Model;

use W1020\Table as ORMTable;


class ReviewModel extends ORMTable
{

    public function getReview($reviewId)
    {

        $sql = <<<SQL
SELECT
    `reviews`.`id`,
    `reviews`.`title`,
    `reviews`.`review`,
    `reviews`.`date`,
    `organisations`.`name` AS 'organisations_id',
    `users`.`name` AS 'users_id'
FROM
    `reviews`,
    `users`,
    `organisations`
WHERE
    `reviews`.`organisations_id` = `organisations`.`id` AND `reviews`.`users_id` = `users`.`id` AND `reviews`.`id` = $reviewId
SQL;
        $data = $this->query($sql);
        $query = [];
        foreach ($data as $row) {
            $query = $row;
        }
        return $query;

    }

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