<?php

    namespace HUYLAND;
    use HUYLAND\Request;
    use HUYLAND\Router;
    class Dispatcher
    {

        private $request;

        public function dispatch()
        {
            $this->request = new Request();
            
            Router::parse($this->request->url, $this->request);
            
            $controller = $this->loadController();

            call_user_func_array([$controller, $this->request->action], $this->request->params);
        }

        public function loadController()
        {
            /*$name = $this->request->controller . "Controller";
            $file = ROOT . 'Controllers/' . $name . '.php';
            require($file);
            $controller = new $name();*/
            $this->request = new Request();
            
            Router::parse($this->request->url, $this->request);
            $name = ucfirst($this->request->controller);
            $controllerName = $name . "Controller";
            if($this->request->admin=="admin"){
            	$file = 'HUYLAND\\Controllers\\Admin\\'. $controllerName;
            	echo $file;
            }
            else $file = 'HUYLAND\\Controllers\\'. $controllerName;
            $controller = new $file();
            return $controller;
        }

    }
    
?>