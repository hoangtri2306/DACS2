<?php 
    $controller = isset($_GET['controller']) ? $_GET['controller'] : "";
    switch ($controller) {
        case "product":
            require_once "views/register.php";
            break;
        default:
            require_once "views/home.php";
            break;
    }
?>