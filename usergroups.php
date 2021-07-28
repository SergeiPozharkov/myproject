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
        "OrganisationsController"
    ],
    "guest" => [
        "AutController",
        "MainController",
        "ReviewsController"
    ]
];