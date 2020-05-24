<?php

/**
 * 创建server，类型为udp
 */
$serv = new swoole_server("0.0.0.0", 9502, SWOOLE_PROCESS, SWOOLE_SOCK_UDP);

/**
 * 监听接收事件
 * $serv 服务器信息
 * $data 接收到的数据
 * $fd 客户端信息
 */
$serv->on('packet', function($serv, $data, $fd){
    $serv->sendto($fd['address'], $fd['port'], "server: ".$data);
    var_dump($fd);
});

/**
 * 启动服务
 */
$serv->start();