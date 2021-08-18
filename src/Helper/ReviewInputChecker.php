<?php

namespace App\Helper;

class ReviewInputChecker
{
    public function __construct(
        protected string $title,
        protected string $review,
        protected int    $organisationsId
    )
    {
        $this->setTitle($title);
        $this->setReview($review);
        $this->setOrganisationsId($organisationsId);
    }

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle(string $title): static
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param string $review
     * @return $this
     */
    public function setReview(string $review): static
    {
        $this->review = $review;
        return $this;
    }

    /**
     * @param int $organisationsId
     * @return $this
     */
    public function setOrganisationsId(int $organisationsId): static
    {
        $this->organisationsId = $organisationsId;
        return $this;
    }

    /**
     * Проверяет на максимальную длину заголовка
     * @return bool
     */
    public function titleCheck(): bool
    {
        return mb_strlen($this->title) <= 100;
    }

    /**
     * Проверяет на максимальную длину заголовка
     * @return bool
     */
    public function reviewCheck(): bool
    {
        return mb_strlen($this->review) <= 150;
    }

    /**
     * Проверяет на соответствие типа id организации
     * @return bool
     */
    public function organisationIdCheck(): bool
    {
        return is_numeric($this->organisationsId);
    }
}