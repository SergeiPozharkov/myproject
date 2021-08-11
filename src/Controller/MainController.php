<?php


namespace App\Controller;


use App\View\View;

/**
 * Отвечает за отображение главной страницы
 */
class MainController extends AbstractController
{
    /**
     *Отображает главную страницу
     */
    public function actionIndex(): void
    {
        $this
            ->view
            ->setTemplate("Main/index");
//            ->view();
    }
}