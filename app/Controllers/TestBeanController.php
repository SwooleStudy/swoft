<?php

namespace App\Controllers;

use \Swoft\Http\Server\Bean\Annotation\Controller;
use \App\BeanTest\TestBean;
use Swoft\Bean\Annotation\Inject;

/**
 * @Controller(prefix="/bean")
 */

class TestBeanController{

    /**
     * 别名注入
     *
     * @Inject("TestBean")
     *
     * @var \App\BeanTest\TestBean
     */
    private $test;


    /**
     * test
     */
    public function test(){
        return $this->test->test();
    }

    /**
     * getBean
     */
    public function getBean(){
        var_export($this->test);
        return [];
    }
}