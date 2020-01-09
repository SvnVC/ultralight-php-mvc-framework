<?php


class Router {

    private $validRoutes = array();





    public static function set($url, $function){

                        
        if(array_key_exists('url',$_GET)){
            

            if($url == $_GET['url']){
                $function();
                
            }
        }

        
        




    }
}

?>