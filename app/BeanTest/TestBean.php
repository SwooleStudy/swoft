<?php

namespace App\BeanTest;

use Swoft\Bean\Annotation\Scope;
use Swoft\Bean\Annotation\Bean;


/**
 * Class TestBean
 * @package App\BeanTest
 * @Bean(scope=Scope::PROTOTYPE)
 */
class TestBean
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $age;

    /**
     * @var string
     */
    private $bean_name;

    /**
     * @var string
     */
    private $arg1;

    public function __construct($arg1, $name)
    {
        $this->bean_name = $name;
        $this->arg1 = $arg1;
    }

    public function test()
    {
        return ["test"];
    }

}