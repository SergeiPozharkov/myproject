<?php

namespace App;
/**
 * Отвечает за подключение вызываемых пользователем контроллеры и их методы
 */
class Router
{
    /**
     * Подключает вызываемые пользователем контроллеры и вызывает их методы если они существуют
     */
    public function run(): void
    {
        $type = ($_GET["type"] ?? "Main") . "Controller";
        $action = "action" . ($_GET["action"] ?? "index");
        $controllerName = "App\\Controller\\$type";
        $userGroup = $_SESSION['user']['code'] ?? 'guest';
        $userGroups = include(__DIR__ . "/../usergroups.php");
        $allowedControllers = $userGroups[$userGroup];

        if (in_array($type, $allowedControllers)) {
            if (class_exists($controllerName)) {
                $controller = new $controllerName();
                if (method_exists($controller, $action)) {
                    $controller->{$action}();
                    $controller?->view?->view();
                } else {
                    header('HTTP/1.0 403 Forbidden');
                    include __DIR__ . "/../templates/errors/403.php";
                }
            } else {
                header("HTTP/1.0 404 Not Found");
                include __DIR__ . "/../templates/errors/404.php";
            }
        } else {
            header('HTTP/1.0 403 Forbidden');
            include __DIR__ . "/../templates/errors/access_denied.php";
        }
    }
}