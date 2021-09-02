<?php


namespace App\Controller;

/**
 * Отвечает за отображение таблицы "UserGroups" из БД и осуществление базовых операций над ней (CRUD)
 */
class UserGroupsController extends Table
{
    protected string $tableName = "user_groups";

    public function actionShow(): void
    {
        parent::actionShow();
        $this->view->setTemplate("UserGroups/show");
    }

    public function actionShowEdit(): void
    {
        parent::actionShowEdit();
        $this->view->setTemplate("UserGroups/add_edit");
    }

    public function actionShowAdd(): void
    {
        parent::actionShowAdd();
        $this->view->setTemplate("UserGroups/add_edit");
    }
}