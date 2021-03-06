<?php


namespace App\Model;

use W1020\Table as ORMTable;

/**
 * Отвечает за обращение к таблицам "organisations" и "users"
 */
class ReviewsModel extends ORMTable
{
    /**
     * Выбирает все данные отзывов
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
    `organisations`.`name` AS 'organisations_id',
    `users`.`name` AS 'users_id'
FROM
    `reviews`,
    `organisations`,
    `users`
WHERE
    `reviews`.`organisations_id` = `organisations`.`id` AND `reviews`.`users_id` = `users`.`id`
SQL;

        return $this->query(
            "$sql LIMIT " . (($page - 1) * $this->pageSize) . ",$this->pageSize;"
        );
    }

    /**
     * Выбирает все имена пользователей из таблицы БД
     * @return array<array>
     * @throws \Exception
     */
    public function getUsersList(): array
    {
        $data = $this->query("SELECT `id`,`name` AS 'user_name' FROM `users`");
        $arr = [];
        foreach ($data as $row) {
            $arr[$row['id']] = $row['user_name'];
        }
        return $arr;
    }

    /**
     * Выбирает все названия организаций из таблицы БД
     * @return array<array>
     * @throws \Exception
     */
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