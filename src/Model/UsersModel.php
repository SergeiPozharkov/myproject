<?php


namespace App\Model;

use W1020\Table as ORMTable;

/**
 * Отвечает за обращение к таблицам "users" и "user_groups"
 */
class UsersModel extends ORMTable
{
    /**
     * Выбирает все данные о пользователях
     * @param int $page
     * @return array<array>
     * @throws \Exception
     */
    public function getPage(int $page = 1): array
    {
        $sql = <<<SQL
SELECT
    `users`.`id`,
    `users`.`login`,
    `users`.`name`,
    `users`.`pass`,
    `user_groups`.`name` AS 'user_groups_id'
FROM
    `users`,
    `user_groups`
WHERE
    `users`.`user_groups_id` = `user_groups`.`id`
SQL;

        return $this->query(
            "$sql LIMIT " . (($page - 1) * $this->pageSize) . ",$this->pageSize;"
        );
    }

    /**
     * Выбирает все группы пользователей
     * @return array<array>
     * @throws \Exception
     */
    public function getGroupList(): array
    {
        $data = $this->query("SELECT `id`,`name` FROM `user_groups`");
        $arr = [];
        foreach ($data as $row) {
            $arr[$row['id']] = $row['name'];
        }
        return $arr;
    }
}