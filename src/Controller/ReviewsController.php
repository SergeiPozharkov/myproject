<?php


namespace App\Controller;


use App\Model\ReviewsModel;

/**
 * Отвечает за отображение таблицы "Reviews" из БД и осуществление базовых операций над ней (CRUD)
 */
class ReviewsController extends Table
{
    protected string $tableName = 'reviews';

    /**
     *Осуществляет соединение с БД через "ReviewsModel"
     */
    public function __construct()
    {
        parent::__construct();
        $config = include __DIR__ . "/../../config.php";
        $config["table"] = $this->tableName;
        $this->pageSize = $config["page_size"];
        $this->model = new ReviewsModel($config);
    }


    /**
     * Отображает данные полученные из БД в виде таблицы
     * @throws \Exception
     */
    public function actionShow(): void
    {
        parent::actionShow();
        $this->view->setTemplate('Reviews/show');
    }

    /**
     *Отображает форму для добавления конкретной строки в таблицу БД
     */
    public function actionShowAdd(): void
    {
        parent::actionShowAdd();
        $this->view->addData([
            "usersList" => $this->model->getUsersList(),
            "organisationsList" => $this->model->getOrganisationsList()
        ])
            ->setTemplate('Reviews/add_edit');
    }

    /**
     *Отображает форму для изменения конкретной строки таблицы БД
     */
    public function actionShowEdit(): void
    {
        parent::actionShowEdit();
        $this->view->addData([
            "usersList" => $this->model->getUsersList(),
            "organisationsList" => $this->model->getOrganisationsList()
        ])
            ->setTemplate('Reviews/add_edit');
    }
}