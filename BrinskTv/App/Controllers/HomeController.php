<?php

    class HomeController {
        
        public static function index () {
            include './Views/modules/Login/index.php';
        }

        public static function notFound () {
            include './Views/modules/NotFound/index.php';
        }
    }
    
?>
