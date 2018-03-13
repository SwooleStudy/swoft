<?php

namespace App\BeanTest;

use Swoft\Bean\Annotation\Scope;
use Swoft\Bean\Annotation\Bean;


/**
 * Class TestBean2
 * @package App\BeanTest2
 * @Bean(scope=Scope::SINGLETON)
 */
class TestBean2
{

    public function test()
    {
        return ["test"];
    }

}