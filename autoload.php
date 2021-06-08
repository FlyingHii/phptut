<?php
spl_autoload_register(function ($classname) {
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $classname);

    include_once __DIR__ . '/code/' . $file . '.php';
});