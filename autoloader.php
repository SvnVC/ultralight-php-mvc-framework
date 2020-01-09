<?php


spl_autoload_register(function($className){
    $path = __DIR__.'/models/'.$className.".php";
    

    if(file_exists($path)){
        require_once $path;
    }
    else if (file_exists(__DIR__."/controllers/".$className.".php")){
        require_once __DIR__."/controllers/".$className.".php";
    }
    
});

?>