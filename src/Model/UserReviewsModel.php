<?php

namespace App\Model;


class UserReviewsModel extends ReviewsModel
{
    /**
     * Добавляет новый отзыв в таблицу БД
     * @param string $title
     * @param string $review
     * @param string $date
     * @param int|string $organisationsId
     * @param int|string $usersId
     */
    public function addReview(
        string     $title,
        string     $review,
        string     $date,
        int|string $organisationsId,
        int|string $usersId
    ): void
    {
        $sql = "INSERT INTO `reviews`(
                      `title`,
                      `review`,
                      `date`,
                      `organisations_id`,
                      `users_id`
                      ) 
                      VALUES (
                              '$title',
                              '$review',
                              '$date',
                              $organisationsId,
                              $usersId
                              )";
        $this->runSQL($sql);

    }

    /**
     * Выбирает все данные относящиеся к конкретному отзыву
     * @param int $reviewId
     * @return array<array>
     * @throws \Exception
     */
    public function getReviewComments(int $reviewId): array
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
    `reviews`.`organisations_id` = `organisations`.`id` AND `reviews`.`users_id` = `users`.`id` AND 
    `reviews`.`id` = $reviewId
SQL;

        $data = $this->query($sql);
        $query = [];
        foreach ($data as $row) {
            $query = $row;
        }
        return $query;

    }

    /**
     * Выбирает все данные относящиеся ко всем отзывам
     * @param int $page
     * @return array<array>
     * @throws \Exception
     */
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
     * Выбирает комментарии к таблице БД
     * @return array<array>
     * @throws \Exception
     */
    public function organisationColumnComments(): array
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