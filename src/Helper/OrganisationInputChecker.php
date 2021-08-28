<?php

namespace App\Helper;

class OrganisationInputChecker
{
    public function __construct(
        protected string $name,
        protected string $address,
        protected string $phone,
        protected string $workingHours,
        protected string $unp,
        protected string $legalName,
        protected string $description
    )
    {
        $this->setName($name);
        $this->setAddress($address);
        $this->setPhone($phone);
        $this->setWorkingHours($workingHours);
        $this->setUnp($unp);
        $this->setLegalName($legalName);
        $this->setDescription($description);
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param string $address
     * @return $this
     */
    public function setAddress(string $address): static
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @param string $phone
     * @return $this
     */
    public function setPhone(string $phone): static
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @param string $workingHours
     * @return $this
     */
    public function setWorkingHours(string $workingHours): static
    {
        $this->workingHours = $workingHours;
        return $this;
    }

    /**
     * @param string $unp
     * @return $this
     */
    public function setUnp(string $unp): static
    {
        $this->unp = $unp;
        return $this;
    }

    /**
     * @param string $legalName
     * @return $this
     */
    public function setLegalName(string $legalName): static
    {
        $this->legalName = $legalName;
        return $this;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription(string $description): static
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Проверяет на максимальную длину названия организации
     * @return bool
     */
    public function nameCheck(): bool
    {
        return mb_strlen($this->name) <= 50;
    }

    /**
     * Проверяет на максимальную длину адрес организации
     * @return bool
     */
    public function addressCheck(): bool
    {
        return mb_strlen($this->address) <= 150;
    }

    /**
     * Проверяет на максимальную длину телефон организации
     * @return bool
     */
    public function phoneCheck(): bool
    {
        return mb_strlen($this->phone) == 13;
    }

    /**
     * Проверяет на максимальную длину время работы организации
     * @return bool
     */
    public function workingHoursLengthCheck(): bool
    {
        return mb_strlen($this->workingHours) == 19;
    }


    /**
     * Проверяет на соответствие длину УНП
     * @return bool
     */
    public function unpCheck(): bool
    {
        if (is_numeric($this->unp) == true) {
            return mb_strlen($this->unp) == 9;
        } else {
            return false;
        }
    }

    /**
     * Проверяет на максимальную длину юридическое название организации
     * @return bool
     */
    public function legalNameCheck(): bool
    {
        return mb_strlen($this->legalName) <= 100;
    }

    /**
     * Проверяет на максимальную длину дополнительной информации
     * @return bool
     */
    public function descriptionCheck(): bool
    {
        return mb_strlen($this->description) <= 255;
    }
}