<?php 

namespace App\core;


class Controller {

    
    public static function view($filename) {
       
        $file = __DIR__ . "/../views/$filename.php";
    
        if (file_exists($file)) {
            require $file;
        } else {
           
            require __DIR__ . "/../views/_404.view.php";
        }
    }
}
