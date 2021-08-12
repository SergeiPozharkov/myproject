<?php

namespace App\Model;

/**
 * Отвечает за обращение к таблице "reviews"
 */
class UserAddReviewModel extends ReviewsModel
{
    /**
     * Добавляет новый отзыв в таблицу БД
     * @param string $title
     * @param string $review
     * @param string $date
     * @param int|string $organisationsId
     * @param int|string $usersId
     */
    public function addReview(string $title, string $review, string $date, int|string $organisationsId, int|string $usersId): void
    {
        $sql = "INSERT INTO `reviews`(`title`, `review`, `date`, `organisations_id`, `users_id`) VALUES ('$title','$review','$date',$organisationsId,$usersId)";
        $this->runSQL($sql);

    }
}