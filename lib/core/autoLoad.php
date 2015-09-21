<?php
$auto_load_dir[]    = fendou_lib.'core';
$auto_load_dir[]    = fendou_lib.'app/'.$GLOBALS['m'] .'/model';
$auto_load_dir[]    = fendou_lib.'app/'.$GLOBALS['m'] .'/controller';

function __autoload($className)
{
    global $auto_load_dir;
    foreach($auto_load_dir as $val)
    {
        $classNameDir = $val.'/'.$className.'.class.php';
        if(file_exists($classNameDir)){
            include_once ($classNameDir);
            return;
        }
    }
    exit('404');
}

?>