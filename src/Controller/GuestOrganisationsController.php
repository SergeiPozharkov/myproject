<?php

namespace App\Controller;

class GuestOrganisationsController extends UserOrganisationsController
{
    public function actionShow(): void
    {
        parent::actionShow();
        $this->view->setTemplate("GuestOrganisations/show");
    }

    public function actionShowOrganisationReviews(): void
    {
        parent::actionShowOrganisationReviews();
        $this->view->setTemplate("GuestOrganisations/organisation_reviews");
    }
}