<?php

class base
{
    /**
     * 公共文件
     */
    private function layout($content)
    {
        $view = fendou_lib.'app/'.$GLOBALS['m'] .'/view/'.'layout/layout.php';
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
    public function display()
    {
        $view = fendou_lib.'app/'.$GLOBALS['m'] .'/view/'.$GLOBALS['c'] .'/'.$GLOBALS['a'].VIEW_SUFFIX;
        if(file_exists($view)) {
            $content = include $view;
            $this->layout($content);
            exit;
        } else {
            exit('模版不存在');
        }
    }

    /**
     * 把变量注入到视图中
     * @param array $data 二维数组，key是变量,val是值
     */
    public function assign(array $data)
    {

    }
}