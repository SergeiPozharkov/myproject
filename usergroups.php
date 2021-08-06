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
        "ReviewsController",
        "OrganisationsController",
        "UserShowReviewsController"
    ],
    "guest" => [
        "AutController",
        "MainController",
        "ReviewsController"
    ]
];