<?php


namespace App\Controller;


class ReviewsController extends Table
{
    protected string $tableName = 'reviews';

    public function actionShow(): void
    {
        parent::actionShow(); // TODO: Change the autogenerated stub
        $this->view->setTemplate('Review/show');
    }
}