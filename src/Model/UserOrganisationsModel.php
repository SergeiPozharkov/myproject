<?php

namespace App\Model;

class UserOrganisationsModel extends OrganisationsModel
{
    /**
     * Выбирает всю информацию о конкретной организации
     * @param int $organisationId
     * @return array<array>
     * @throws \Exception
     */
    public function getOrganisationInfo(int $organisationId): array
    {
        $data = $this->query("SELECT * FROM `organisations` WHERE `id`=$organisationId");
        $arr = [];
        foreach ($data as $row) {
            $arr[] = $row;
        }
        return $arr;
    }

    /**
     * Выбирает все данные отзывов относящиеся к конкретной организации
     * @param int $organisationId
     * @return array<array>
     * @throws \Exception
     */
    public function getOrganisationReviews(int $organisationId): array
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
    `reviews`.`organisations_id` = `organisations`.`id` AND `reviews`.`users_id` = `users`.`id` AND 
    `organisations`.`id` = $organisationId
SQL;

        $data = $this->query($sql);
        $query = [];
        foreach ($data as $row) {
            $query[] = $row;
        }
        return $query;
    }

    /**
     * Выбирает комментарии к таблице БД
     * @return array<array>
     * @throws \Exception
     */
    public function reviewsColumnComments(): array
    {
        $data = $this->query("SHOW FULL COLUMNS FROM `reviews`");
        $arr = [];
        foreach ($data as $field) {
            if ($field['Field'] != 'id') {
                $arr[$field['Field']] = $field['Comment'];
            }
        }
        return $arr;
    }

}