<?php
define('APPLICATION_PATH', realpath('.'));

$paths = array (
APPLICATION_PATH,
APPLICATION_PATH . '\business_logic',
//APPLICATION_PATH . '\\',
get_include_path()
);
set_include_path(implode(PATH_SEPARATOR,$paths));

function __autoload($className)
{
  $filename = str_replace('\\','/', $className).".php";
  require_once ($filename);
}

spl_autoload_register('__autoload');


?>
