<?php

namespace HUYLAND;
class Router
{
    static public function parse($url, $request)
    {
        $url = trim($url);
        if ($url == "/huyland/")
        {
            $request->controller = "home";
            $request->action = "index";
            $request->admin = "";
            $request->params = [];
        }
        else if($url == "/huyland/admin" || $url == "/huyland/admin/" ){
            $request->admin = "admin";
            $request->controller = "home";
            $request->action = "index";
            $request->params = [];
        }
        else
        {
            $explode_url = explode('/', $url);
            $explode_url = array_slice($explode_url, 2);
            if($explode_url[0]=="admin"){
                $request->admin = "admin";
                $request->controller = $explode_url[1];
                $request->action = $explode_url[2];
                $request->params = array_slice($explode_url, 3);
            }
            else{
             $request->admin = "";
             $request->controller = $explode_url[0];
             $request->action = $explode_url[1];
             $request->params = array_slice($explode_url, 2);
            /*if(strpos($explode_url[1], 'search') !== false)
             {
                $request->action = 'search';
                $param_url = explode('?', $url);

                $request->params = array_slice($param_url, 1);
                 $param_url = implode( $request->params );
                 $param_url = explode('&', $param_url);
                 $request->params = array_slice($param_url, 0);
                 
            } 

            else{
                $request->action = $explode_url[1];
                $request->params = array_slice($explode_url, 2);
            }*/
            }
        }

    }
}
?>