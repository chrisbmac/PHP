<?php
    
    class Router {

        private $request;
        
        function __construct()
        {   
            if(!isset($_POST['request_url'])){
                $this->request = "/";
            } else {
                $this->request = $_POST['request_url'];
            }
            $this->route();
            
        }
            
        private function route() {
            
            switch ($this->request){
                case '/' :
                    require __DIR__ . './Views/index.html';
                    break;
                case '' :
                    require __DIR__ . './Views/index.html';
                    break;
                case '/indexCalcMS':
                    require __DIR__ . './Views/indexCalc.html';
                    break;
                case '/indexHWS':
                    require __DIR__ . './Views/indexHWS.html';
                    break;
                case '/calcMS':
                    require __DIR__ . './Views/calcMS.php';
                    break;
                case '/HWS':
                    require __DIR__ . './Views/howMuchSaved.php';
                    break;
                default:
                    http_response_code(404);
                    require __DIR__ . './Views/404.php';
                    break;
            }
        }
    }
    $route = new Router();
    