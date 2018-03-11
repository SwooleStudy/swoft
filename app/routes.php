<?php
/**
 * Created by PhpStorm.
 * User: xiongcaho
 * Date: 2018/3/12
 * Time: 上午12:57
 */

use Swoft\Http\Message\Server\Request;
use Swoft\Http\Message\Server\Response;
use App\Controllers\IndexController;
/* @var \Swoft\Console\Router\HandlerMapping $router */
$router = \Swoft\App::getBean('httpRouter');
$router->get('/hello', 'App\Controllers\IndexController@json');
//$router->get('/', IndexController::class);
//$router->get('/raw', 'App\Controllers\IndexController@raw');
//$router->get('/arrayable', 'App\Controllers\IndexController@arrayable');
//$router->get('/user/{uid}/book/{bid}/{bool}/{name}', function (bool $bool, Request $request,  int $bid, string $name, int $uid, Response $response){
//    return ['clouse', $bid, $uid, $bool, $name, get_class($request), get_class($response)];
//});