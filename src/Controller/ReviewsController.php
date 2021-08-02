<?php


namespace App\Controller;


class ReviewsController extends Table
{
    protected string $tableName = 'reviews';


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
        parent::actionShowEdit(); // TODO: Change the autogenerated stub
        $this->view->setTemplate('Reviews/add_edit');
    }

    public function actionShowAdd(): void
    {
        parent::actionShowAdd(); // TODO: Change the autogenerated stub
        $this->view->setTemplate('Reviews/add_edit');
    }
}