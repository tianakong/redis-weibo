<?php

class index extends base
{
    public function index()
    {
        $params['test'] = '测试view调用controller变量';
        common_test();
        $this->display($params);
    }
}