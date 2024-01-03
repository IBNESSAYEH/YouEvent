<?php 

namespace App\core;


trait Controller {

    
    public static function view($filename, $data = []) {
        if(!empty($data)){
            extract($data);
        }
       
        $file = __DIR__ . "/../views/$filename.php";
    
        if (file_exists($file)) {
            
            require $file;
        } else {
           
            require __DIR__ . "/../views/_404.view.php";
        }
    }
}
