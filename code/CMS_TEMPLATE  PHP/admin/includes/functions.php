<?php

function autoloader ($class) {
    $class = str_replace("\\", DS,strtolower($class));
    $the_path = SITE_ROOT . DS . "{$class}.php";
    if(file_exists($the_path)) {
        require_once($the_path);
    } else {
        die("This file named {$class}.php was not found");
    }
}

spl_autoload_register('autoloader');
?>