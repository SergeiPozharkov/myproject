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
        "UserShowReviewsController",
        "UserShowAddOrganisationController",
        "UserShowAddReviewController"
    ],
    "guest" => [
        "AutController",
        "MainController",
        "GuestShowReviewsController"
    ]
];