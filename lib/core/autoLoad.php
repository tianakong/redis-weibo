<?php
$model_dir      = fendou_lib.'app/'.$GLOBALS['m'] .'/model';
$controller_dir = fendou_lib.'app/'.$GLOBALS['m'] .'/controller';

$auto_load_dir = array(fendou_lib.'core', $model_dir, $controller_dir);

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