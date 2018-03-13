<?php

namespace App\Commands;

use App\Models\Logic\UserLogic;
use Swoft\App;
use Swoft\Console\Bean\Annotation\Command;
use Swoft\Console\Bean\Annotation\Mapping;
use Swoft\Console\Input\Input;
use Swoft\Console\Output\Output;
use Swoft\Core\Coroutine;
use Swoft\Log\Log;

/**
 * Test command
 *
 * @Command(coroutine=false)
 */
class DemoCommand
{
    /**
     * this test command
     *
     * @Usage
     * demo:{command} [arguments] [options]
     *
     * @Options
     * -o,--o this is command option
     *
     * @Arguments
     * arg this is argument
     *
     * @Example
     * php swoft demo:test2 name=stelin -o opt
     *
     * @param Input  $input
     * @param Output $output
     *
     * @Mapping("test2")
     */
    public function test(Input $input, Output $output)
    {
        $hasOpt = $input->hasOpt('o');
        $opt    = $input->getOpt('o');
        $name   = input()->getArg('name', 'swoft');


        App::error('this is eror');
        App::trace('this is trace');
        Coroutine::create(function () use ($hasOpt,$opt,$name){
            /* @var UserLogic $logic */
            $logic = App::getBean(UserLogic::class);
            $data  = $logic->rpcCall();
            var_dump($hasOpt, $opt, $name, $data);
        });

        var_dump(Coroutine::id(),Coroutine::tid());
    }
}