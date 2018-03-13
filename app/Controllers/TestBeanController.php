<?php

namespace App\Controllers;

use \Swoft\Http\Server\Bean\Annotation\Controller;
use \App\BeanTest\TestBean;
use \App\BeanTest\TestBean2;
use Swoft\Bean\Annotation\Inject;

/**
 * @Controller(prefix="/bean")
 */

class TestBeanController{

    /**
     *
     * @Inject("TestBean")
     *
     * @var \App\BeanTest\TestBean
     */
    private $test;

    /**
     * 缺省定义
     *
     * @Inject("TestBean2")
     *
     * @var TestBean2
     */
    private $TestBean2;

    /**
     * test
     */
    public function test(){
        return $this->test->test();
    }

    /**
     * test2
     */
    public function test2(){
        return $this->TestBean2->test();
    }

    /**
     * getBean
     */
    public function getBean(){
        var_export($this->test);
        return [];
    }
}