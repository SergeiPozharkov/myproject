<?php


namespace App\Controller;


use App\Model\ReviewModel;

class ReviewsController extends Table
{
    protected string $tableName = 'reviews';

    public function __construct()
    {
        parent::__construct();
        $config = include __DIR__ . "/../../config.php";
        $config["table"] = $this->tableName;
        $this->pageSize = $config["page_size"];
        $this->model = new ReviewModel($config);
    }

    public function actionShow(): void
    {
        parent::actionShow(); // TODO: Change the autogenerated stub
        $this->view->setTemplate('Reviews/show');
    }

    public function actionAdd(): void
    {
        parent::actionAdd(); // TODO: Change the autogenerated stub
    }

    public function actionShowEdit(): void
    {
        parent::actionShowEdit();
        $this
            ->view
            ->setTemplate('Reviews/add_edit');
    }

    public function actionShowAdd(): void
    {
//        parent::actionShowAdd();
        $this
            ->view
            ->addData([
//                "row" => $this->model->getRow($_GET['id']),
                "comments" => $this->model->columnComments(),
                "row" => $this->model->getOrganisationAndUserName(),
                "action" => "?type=" . ($this->getCurrentClass()) . "&action=add"
            ])
            ->setTemplate('Reviews/add_edit');
    }
}