<?php
mb_internal_encoding("UTF-8");
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);


   class Router{
        private $request;

        private $routes = [
                            'home'  => ['controller' => 'HomeController', 'method' => 'showReviews'],
                            'bakery' => [],
                            'pastry' => [],
                            'pastryClass' => [],
                            'aboutUs' =>[],
                            'contact' =>[],
        ];
        public function __construct($request){
            $this->request = $request;
        }
        public function getControllers(){

            $request = $this->request;
            if(key_exists($request, $this->routes))
        {
            $controllers = $this->routes[$request]['controller'];
            $method = $this->routes[$request]['method'];

            // include(CONTROLLERS.$controllers.'php');

            $currentController = new $controller();
            $currentController->$method();

        } else {
            echo 'Erreur 404 Page introuvable';
        }
    }

        }


  

?>