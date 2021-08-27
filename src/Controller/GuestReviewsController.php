<?php

namespace App\Controller;
/**
 *  Отвечает за отображение всех отзывы и информацию об организациях не зарегистрированным пользователям
 */
class GuestReviewsController extends UserReviewsController
{
    /**
     * Отображает список всех отзывов
     * @throws \Exception
     */
    public function actionShow(): void
    {
        parent::actionShow();
        $this->view->setTemplate("GuestReviews/show");
    }

    public function actionShowReview(): void
    {
        parent::actionShowReview();
        $this->view->setTemplate("GuestReviews/review");
    }

}