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
//        "UserShowReviewsController",
//        "UserShowAddOrganisationController",
//        "UserShowAddReviewController",
        "UserReviewsController",
        "UserOrganisationsController"
    ],
    "guest" => [
        "AutController",
        "MainController",
        "GuestShowReviewsController"
    ]
];