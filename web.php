<?php

$serv = new swoole_http_server("0.0.0.0", 9501);

/**
 * http服务 请求
 * $request 请求信息
 * $response 返回信息
 */
$serv->on('request', function($request, $response){
    var_dump($request);
    $response->header("Content-Type", "text/html; charset=utf-8");
    $response->end("hello swoole ". rand(100, 999));
});

/**
 * 开启服务
 */
$serv->start();