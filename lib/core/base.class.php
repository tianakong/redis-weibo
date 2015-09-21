<?php

class base
{
    public $layout = 'layout.php';

    /**
     * 公共文件
     * @param string $content 视图文件
     * @param array $params 参数 二维数组，key是变量,val是值
     */
    private function layout($content, $params)
    {
        if($params) {
            extract($params);
        }
        $view = fendou_lib.'app/'.$GLOBALS['m'] .'/view/'.'layout/'.$this->layout;
        if(file_exists($view)) {
            include $view;
            exit;
        } else {
            exit('layout.php 不存在');
        }
    }

    /**
     * 渲染视图
     */
    public function display($params = array())
    {
        $view = fendou_lib.'app/'.$GLOBALS['m'] .'/view/'.$GLOBALS['c'] .'/'.$GLOBALS['a'].VIEW_SUFFIX;
        if(file_exists($view)) {
            $this->layout($view, $params);
            exit;
        } else {
            exit('模版不存在');
        }
    }
}