<?php

    include './Controllers/HomeController.php';

    $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    
    
    switch ($url) {
        case '/':
            HomeController::index();
            break;
        
        default:
            HomeController::notFound();
            break;
    }
?>
