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
        "UserShowReviewsController",
        "UserShowAddOrganisationController"
    ],
    "guest" => [
        "AutController",
        "MainController",
        "ReviewsController"
    ]
];