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
    )
    {
        $this->setName($name);
        $this->setAddress($address);
        $this->setPhone($phone);
        $this->setWorkingHours($workingHours);
        $this->setUnp($unp);
        $this->setLegalName($legalName);
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @param string $workingHours
     */
    public function setWorkingHours(string $workingHours): void
    {
        $this->workingHours = $workingHours;
    }

    /**
     * @param string $unp
     */
    public function setUnp(string $unp): void
    {
        $this->unp = $unp;
    }

    /**
     * @param string $legalName
     */
    public function setLegalName(string $legalName): void
    {
        $this->legalName = $legalName;
    }

    /**
     * Возвращает номер телефона без пробелов и искомых символов
     * @param string $phone
     * @return string
     */
    public function replace(string $phone): string
    {
        return str_replace(' ', '', $phone);

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
        return mb_strlen($this->workingHours) <= 45;
    }


    /**
     * Проверяет на соответствие длину УНП
     * @return bool
     */
    public function unpCheck(): bool
    {
        return mb_strlen($this->unp) == 9;
    }

    /**
     * Проверяет на максимальную длину юридическое название организации
     * @return bool
     */
    public function legalNameCheck(): bool
    {
        return mb_strlen($this->legalName) <= 255;
    }

}