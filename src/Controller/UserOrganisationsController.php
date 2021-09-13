<?php

namespace App\Controller;

use App\Helper\OrganisationInputChecker;
use App\Helper\WorkingHours;
use App\Model\UserOrganisationsModel;

class UserOrganisationsController extends OrganisationsController
{
    public function __construct()
    {
        parent::__construct();
        $config = include __DIR__ . "/../../config.php";
        $config["table"] = $this->tableName;
        $this->pageSize = $config["page_size"];
        $this->model = new UserOrganisationsModel($config);
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
     * При попытке пользователя обратиться к методу для отображения формы изменения данных, перенаправляет на главную
     * страницу
     */
    public function actionShowEdit(): void
    {
        $this->redirect("/");
    }

    public function actionShow(): void
    {
        parent::actionShow();
        $this->view->setTemplate("UserOrganisations/show");
    }

    /**
     *Осуществляет запись данных о новой организации в БД
     */
    public function actionAdd(): void
    {
        $workingHoursChecker = new WorkingHours();
        if ($workingHoursChecker->workingHoursCheck(
                $_POST['week_days'], $_POST['start_hours'],
                $_POST['start_minutes'],
                $_POST['end_hours'],
                $_POST['end_minutes']
            ) == true) {
            $workingHours = [
                'working_hours' =>
                    "$_POST[week_days]$_POST[start_hours]:$_POST[start_minutes]-$_POST[end_hours]:$_POST[end_minutes]"
            ];
        } else {
            $this->redirect("?type=UserOrganisations&action=showadd");
        }
        $validate = true;
        $organisationChecker = new OrganisationInputChecker(
            $_POST['name'],
            $_POST['address'],
            $_POST['phone'],
            $workingHours['working_hours'],
            $_POST['unp'],
            $_POST['legal_name'],
            $_POST['description']
        );
        if (!$organisationChecker->nameCheck()) {
            $_SESSION['warnings'][] = 'Превышена длина названия организации!';
            $validate = false;
        } elseif (!$organisationChecker->addressCheck()) {
            $_SESSION['warnings'][] = 'Превышена длина адреса организации!';
            $validate = false;
        } elseif (!$organisationChecker->phoneCheck()) {
            $_SESSION['warnings'][] = 'Превышена длина телефона!';
            $validate = false;
        } elseif (!$organisationChecker->workingHoursLengthCheck()) {
            $_SESSION['warnings'][] = 'Превышена длина времени работы!';
            $validate = false;
        } elseif (!$organisationChecker->unpCheck()) {
            $_SESSION['warnings'][] = 'Превышена длина УНП!';
            $validate = false;
        } elseif (!$organisationChecker->legalNameCheck()) {
            $_SESSION['warnings'][] = 'Превышена длина юридического названия организации!';
            $validate = false;
        } elseif (!$organisationChecker->descriptionCheck()) {
            $_SESSION['warnings'][] = 'Превышена длина дополнительной информации!';
            $validate = false;
        }
        if ($_POST && array_search("", $_POST) == false) {
            if (isset($_SESSION["user"]["id"]) && $validate == true) {
                $this->model->addOrganisation(
                    $_POST['name'],
                    $_POST['address'],
                    $_POST['phone'],
                    $_POST['social_networks'],
                    $workingHours['working_hours'],
                    $_POST['unp'], $_POST['legal_name'],
                    $_POST['description']
                );
                $this->redirect("?type=UserOrganisations&action=show");
            }
        } else {
            $this->redirect("?type=UserOrganisations&action=showadd");
        }
    }

    /**
     *Отображает форму для добавления новой организации
     */
    public function actionShowAdd(): void
    {
        parent::actionShowAdd();
        $this->view->setTemplate("UserOrganisations/showadd");
    }

    /**
     * Отображает пользователю информацию о конкретной организации и все отзывы о ней
     * @throws \Exception
     */
    public function actionShowOrganisationReviews(): void
    {
        $this
            ->view
            ->addData([
                "organisationInfo" => $this->model->getOrganisationInfo($_GET['id']),
                "organisationComments" => $this->model->getOrganisationReviews($_GET['id']),
                "columnComments" => $this->model->columnComments(),
                "reviewsColumnComments" => $this->model->reviewsColumnComments()
            ])
            ->setTemplate("UserOrganisations/organisation_reviews");
    }
}