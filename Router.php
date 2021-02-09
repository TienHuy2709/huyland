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

        else
        {
            $explode_url = explode('/', $url);
            $explode_url = array_slice($explode_url, 2);
            if($explode_url[0]=="admin"){
                $request->admin = "admin";
                $request->controller =isset($explode_url[1])? $explode_url[1]:"home";
                $request->action =isset($explode_url[2])? $explode_url[1]:"index";
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