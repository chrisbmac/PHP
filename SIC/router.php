<?php
    class Router {

        private $request = $_SERVER['request_uri'];

        private function ($request) {
            switch ($request){
                case '/' :
                    require __DIR__ . '/Views/index.php';
                    break;
                case '' :
                    require __DIR__ . '/Views/index.php';
                    break;
                case '/calcMS'
                    require __DIR__ . './Views/calcMS.php';
                    break;
                case '/howmuchsaved'
                    require __DIR__ . './Views/howMuchSaved.php';
                    break;
                default:
                    http_response_code(404);
                    require __DIR__ . '/views/404.php';
                    break;
            }
        }
    }