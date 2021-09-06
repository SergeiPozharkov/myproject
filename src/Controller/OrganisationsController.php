<?php


namespace App\Controller;


use App\Model\OrganisationsModel;

/**
 * Отвечает за отображение таблицы "Organisations" из БД и осуществление базовых операций над ней (CRUD)
 */
class OrganisationsController extends Table
{
    protected string $tableName = 'organisations';

    /**
     *Осуществляет соединение с БД через "OrganisationsModel"
     */
    public function __construct()
    {
        parent::__construct();
        $config = include __DIR__ . "/../../config.php";
        $config["table"] = $this->tableName;
        $this->pageSize = $config["page_size"];
        $this->model = new OrganisationsModel($config);
    }

    /**
     * Отображает данные полученные из БД в виде таблицы
     * @throws \Exception
     */
    public function actionShow(): void
    {
        parent::actionShow();
        $this->view->setTemplate('Organisations/show');
    }

    /**
     * Отображает форму для изменения конкретной строки таблицы БД
     */
    public function actionShowEdit(): void
    {
        parent::actionShowEdit();
        $this->view->setTemplate('Organisations/add_edit');
    }

    /**
     * Отображает форму для добавления конкретной строки в таблицу БД
     */
    public function actionShowAdd(): void
    {
        parent::actionShowAdd();
        $this->view->setTemplate('Organisations/add_edit');
    }

    /**
     *Осуществляет добавление данных в таблицу БД и перенаправление на заданную страницу
     */
    public function actionAdd(): void
    {
        $workingHours = [
            'working_hours' => "$_POST[week_days]$_POST[start_hours]:$_POST[start_minutes]-$_POST[end_hours]:$_POST[end_minutes]"
        ];
        if ($_POST && array_search("", $_POST) == false) {
            if (isset($_SESSION["user"]["id"])) {
                $this->model->addOrganisation(
                    $_POST['name'],
                    $_POST['address'],
                    $_POST['phone'],
                    $_POST['social_networks'],
                    $workingHours['working_hours'],
                    $_POST['unp'],
                    $_POST['legal_name'],
                    $_POST['description']
                );
                $this->redirect("?type=Organisations&action=show");
            }
        } else {
            $this->redirect("?type=Organisations&action&action=showadd");
        }
    }
}