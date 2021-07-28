<?php


namespace App\Controller;


use App\View\View;

class MainController extends AbstractController
{
    public function actionIndex(): void
    {
        $this
            ->view
            ->setTemplate("Main/index");
//            ->view();
    }
}