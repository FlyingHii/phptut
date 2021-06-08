<?php

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
define('SITE_ROOT', '/home/hai/Documents/projects/php-tut/code/CMS_TEMPLATE  PHP/' );
defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH', SITE_ROOT.DS.'admin'.DS.'includes');
defined('IMAGES_PATH') ? null : define('IMAGES_PATH', SITE_ROOT.DS.'admin'.DS.'images');

function camel_to_snake($input)
{
    return strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $input));
}
function snakeToCamel($input)
{
    return lcfirst(str_replace(' ', '', ucwords(str_replace('_', ' ', $input))));
}

require_once(INCLUDES_PATH.DS."functions.php");
