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
    `organisations`.`name`,
    `users`.`name`
FROM
    `reviews`,
    `users`,
    `organisations`
WHERE
    `reviews`.`organisations_id` = `organisations`.`id` AND `reviews`.`users_id` = `users`.`id` AND `reviews`.`id` = $reviewId
SQL;

        return $this->query($sql);
    }
}