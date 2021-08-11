<?php


namespace App\Controller;

/**
 * Отвечает за отображение таблицы "UserGroups" из БД и осуществление базовых операций над ней (CRUD)
 */
class UserGroupsController extends Table
{
    protected string $tableName = "user_groups";
}