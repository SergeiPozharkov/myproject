<?php

namespace App\Model;

class UserAddReviewModel extends ReviewsModel
{
    public function addReview(string $title, string $review, string $date, int|string $organisationsId, int|string $usersId): void
    {
        $sql = "INSERT INTO `reviews`(`title`, `review`, `date`, `organisations_id`, `users_id`) VALUES ('$title','$review','$date',$organisationsId,$usersId)";
        $this->runSQL($sql);

    }
}