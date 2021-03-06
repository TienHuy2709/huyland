<?php
    namespace HUYLAND\Core;
    use HUYLAND\Request;
    use HUYLAND\Router;
    class Controller
    {
        var $vars = [];
        var $layout = "default";
        private $request;

        function set($d)
        {
            $this->vars = array_merge($this->vars, $d);

        }

        function render($filename)
        {
            $this->request = new Request();
            Router::parse($this->request->url, $this->request);
            extract($this->vars);
            
            ob_start();

            $get_url = ucfirst(str_replace('Controller', '', get_class($this)));
            if($this->request->admin=="admin"){
                require(ROOT . "Views/Admin/". $filename . '.php'); 
            }
            else require(ROOT . "Views/Fontend/" . $filename . '.php');

            /*require(ROOT . "Views/Fontend/" . ucfirst(str_replace('HUYLAND\s\\', '', $get_url )). '/' . $filename . '.php');*/

            $content_for_layout = ob_get_clean();

            
            if ($this->layout == false)
            {
                $content_for_layout;
            }

            else
            {

                if($this->request->admin=="admin"){
                    if($this->request->action!="login"){
                        require(ROOT . "Views/Layouts/" . $this->layout.'Admin'. '.php');
                    }
                    else require(ROOT . "Views/Admin/login.php");
                    
                    //echo ROOT . "Views/Layouts/" . $this->layout.'Admin'. '.php';

                }
                else require(ROOT . "Views/Layouts/" . $this->layout . '.php');
                
            }

        }

        private function secure_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        protected function secure_form($form)
        {
            foreach ($form as $key => $value)
            {
                $form[$key] = $this->secure_input($value);
            }

        }

    }
    
?>