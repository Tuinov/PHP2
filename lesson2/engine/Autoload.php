<?php

namespace app\engine;

class Autoload
{

    public function loadClass($className) {
        
        $fileName = str_ireplace("\\", "/", $className);
        $fileName = str_ireplace("app", "..", $className) . '.php';

            if (file_exists($fileName)) {
                include $fileName;
        
            } 
    }
}