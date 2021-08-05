<?php

namespace App\Model;

use W1020\Table as ORMTable;

class OrganisationsModel extends ORMTable
{

    public function addOrganisation(string $name, string $address, string $phone, string $socialNetworks, string $workingHours, int|string $unp, string $legalName, string $description): void
    {
        $sql = "INSERT INTO `organisations`(`name`, `address`, `phone`, `social_networks`, `working_hours`, `unp`, `legal_name`, `description`) VALUES ('$name','$address','$phone','$socialNetworks','$workingHours','$unp','$legalName','$description')";
        $this->runSQL($sql);
    }
}