<?php


namespace App\Controller;


use App\Model\UsersModel;

/**
 * Отвечает за отображение таблицы "Users" из БД и осуществление базовых операций над ней (CRUD)
 */
class UsersController extends Table
{
    protected string $tableName = "users";

    /**
     * Осуществляет соединение с БД через "UsersModel"
     */
    public function __construct()
    {
        parent::__construct();
        $config = include __DIR__ . "/../../config.php";
        $config["table"] = $this->tableName;
        $this->pageSize = $config["page_size"];
        $this->model = new UsersModel($config);

    }

    /**
     * Отображает форму для изменения конкретной строки таблицы БД
     */
    public function actionShowEdit(): void
    {
        parent::actionShowEdit();
        $this
            ->view
            ->addData(["groupList" => $this->model->getGroupList()])
            ->setTemplate("Users/add_edit");
    }

    /**
     * Отображает форму для добавления конкретной строки в таблицу БД
     */
    public function actionShowAdd(): void
    {
        parent::actionShowAdd();
        $this
            ->view
            ->addData(["groupList" => $this->model->getGroupList()])
            ->setTemplate("Users/add_edit");

    }

    /**
     * Отображает таблицу с данными о зарегистрированных пользователях
     * @throws \Exception
     */
    public function actionShow(): void
    {
        parent::actionShow();
        $this->view->setTemplate("Users/show");
    }
}