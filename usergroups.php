<?php
return [
    "admin" => [
        "AutController",
        "MainController",
        "UsersController",
        "UserGroupsController",
        "ReviewsController",
        "OrganisationsController"
    ],
    "user" => [
        "AutController",
        "MainController",
        "UserReviewsController",
        "UserOrganisationsController"
    ],
    "guest" => [
        "AutController",
        "MainController",
        "GuestShowReviewsController"
    ]
];