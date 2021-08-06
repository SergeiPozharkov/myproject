<?php

namespace App\Model;

use W1020\Table as ORMTable;


class UserShowReviewsModel extends ORMTable
{
    public function getReviewComments($reviewId)
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
            $query [] = $row;
        }
        return $query;

    }


    public function getReviews()
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
    `reviews`.`organisations_id` = `organisations`.`id` AND `reviews`.`users_id` = `users`.`id`
SQL;

        $data = $this->query($sql);
        $query = [];
        foreach ($data as $row) {
            $query[] = $row;
        }
        return $query;
    }

    public function getOrganisationReviews($organisationId)
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
    `reviews`.`organisations_id` = `organisations`.`id` AND `reviews`.`users_id` = `users`.`id` AND `organisations`.`id` = $organisationId
SQL;

        $data = $this->query($sql);
        $query = [];
        foreach ($data as $row) {
            $query[] = $row;
        }
        return $query;
    }
}