<?php

namespace App\Controller;

use App\Model\UserReviewsModel;

class UserReviewsController extends ReviewsController
{
    public function __construct()
    {
        parent::__construct();
        $config = include __DIR__ . "/../../config.php";
        $config["table"] = $this->tableName;
        $this->pageSize = $config["page_size"];
        $this->model = new UserReviewsModel($config);
    }

    /**
     *При попытке пользователя обратиться к методу для удаления данных, перенаправляет на главную страницу
     */
    public function actionDel(): void
    {
        $this->redirect("/");
    }

    /**
     * При попытке пользователя обратиться к методу для изменения данных, перенаправляет на главную страницу
     */
    public function actionEdit(): void
    {
        $this->redirect("/");
    }

    /**
     * При попытке пользователя обратиться к методу для отображения формы изменения данных, перенаправляет на главную страницу
     */
    public function actionShowEdit(): void
    {
        $this->redirect("/");
    }

    /**
     * Отображает пользователю список всех отзывов
     * @throws \Exception
     */
    public function actionShow(): void
    {
        parent::actionShow();
        $this->view->setTemplate("UserReviews/show");
    }

    /**
     * Осуществляет запись нового отзыва в БД
     */
    public function actionAdd(): void
    {
        if ($_POST && !empty($_POST['title']) != '' && !empty($_POST['review']) != '' && !empty($_POST['organisations_id']) != '') {
            if (isset($_SESSION["user"]["id"])) {
                $this->model->addReview($_POST['title'], $_POST['review'], date('Y-m-d H:i:s'), $_POST['organisations_id'], $_SESSION['user']['id']);
                $this->redirect("?type=UserReviews&action=show");
            }
        } else {
            $this->redirect("?type=UserReviews&action=ShowAdd");
        }
    }

    /**
     * Отображает форму для добавления отзыва
     */
    public function actionShowAdd(): void
    {
        parent::actionShowAdd();
        $this->view->setTemplate("UserReviews/showAdd");
    }

    /**
     * Отображает пользователю отзыв и всю сопутствующую информацию
     * @throws \Exception
     */
    public function actionShowReview(): void
    {
        $this
            ->view
            ->addData([
                "review" => $this->model->getRow($_GET['id']),
                "comments" => $this->model->getReviewComments($_GET['id']),
                "columnComments" => $this->model->columnComments()
            ])
            ->setTemplate("UserReviews/review");
    }


}