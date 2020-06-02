<?php

//创建webSocket服务器
$ws = new swoole_websocket_server("0.0.0.0", 9501);

/**
 * 建立连接
 * $ws 服务端
 * $request 客户端信息
 */
$ws->on('open', function($ws, $request){
    var_dump($request);
    $ws->push($request->fd, "welcome \n");
});

/**
 * 接收信息
 */
$ws->on('message', function($ws, $request){
    echo "Message：".$request->data;
    $ws->push($request->fd, "get it message");
});

/**
 * 关闭
 */
$ws->on('close', function($ws, $request){
    echo "close \n";
});

/**
 * 开启
 */
$ws->start();