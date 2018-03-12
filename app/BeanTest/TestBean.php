<?php

namespace App\BeanTest;

use \Swoft\Bean\Annotation\Scope;

/**
 * @\Swoft\Bean\Annotation\Bean("TestBean",Scope::SINGLETON);
 */

class TestBean{
    public function test(){
        return ["test"];
    }
}