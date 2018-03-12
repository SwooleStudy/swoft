<?php

namespace App\Controllers;


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
     * @RequestMapping("/")
     * @View(template="index/index")
     * @return array
     */
    public function index(): array
    {
        $name = 'Swoft';
        $notes = [
            'New Generation of PHP Framework',
            'Hign Performance, Coroutine and Full Stack'
        ];
        $links = [
            [
                'name' => 'Home',
                'link' => 'http://www.swoft.org',
            ],
            [
                'name' => 'Documentation',
                'link' => 'http://doc.swoft.org',
            ],
            [
                'name' => 'Case',
                'link' => 'http://swoft.org/case',
            ],
            [
                'name' => 'Issue',
                'link' => 'https://github.com/swoft-cloud/swoft/issues',
            ],
            [
                'name' => 'GitHub',
                'link' => 'https://github.com/swoft-cloud/swoft',
            ],
        ];
        // 返回一个 array 或 Arrayable 对象，Response 将根据 Request Header 的 Accept 来返回数据，目前支持 View, Json, Raw
        return compact('name', 'notes', 'links');
    }

    /**
     * test
     */
    public function test(){
        return $this->test->test();
    }
}