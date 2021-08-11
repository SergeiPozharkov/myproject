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
            $query = $row;
        }
        return $query;

    }

    public function getPage(int $page = 1): array
    {
        $sql = <<<SQL
SELECT
    `reviews`.`id`,
    `reviews`.`title`,
    `reviews`.`review`,
    `reviews`.`date`,
    `organisations`.`id` AS 'organisation_id',
    `organisations`.`name` AS 'organisations_name',
    `users`.`name` AS 'users_name'
FROM
    `reviews`,
    `users`,
    `organisations`
WHERE
    `reviews`.`organisations_id` = `organisations`.`id` AND `reviews`.`users_id` = `users`.`id`
SQL;
        return $this->query(
            "$sql LIMIT " . (($page - 1) * $this->pageSize) . ",$this->pageSize;"
        );
    }

    public function getOrganisationReviews($organisationId)
    {
        $sql = <<<SQL
SELECT
    `reviews`.`id`,
    `reviews`.`title`,
    `reviews`.`review`,
    `reviews`.`date`,
    `organisations`.`id` AS 'organisation_id',
    `organisations`.`name` AS 'organisations_name',
    `users`.`name` AS 'users_name'
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

    public function getOrganisationInfo($organisationId)
    {
        $data = $this->query("SELECT * FROM `organisations` WHERE `id`=$organisationId");
        $arr = [];
        foreach ($data as $row) {
            $arr[] = $row;
        }
        return $arr;
    }

    public function organisationColumnComments()
    {
        $data = $this->query("SHOW FULL COLUMNS FROM `organisations`");
        $arr = [];
        foreach ($data as $field) {
            if ($field['Field'] != 'id') {
                $arr[$field['Field']] = $field['Comment'];
            }
        }
        return $arr;
    }
}