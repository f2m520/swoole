<?php

$host = '192.168.1.200';
$port = 9501;

$serv = new swoole_server($host, $port);

/**
 * 连接
 * $serv 服务端
 * $fd 客户端
 */
$serv->on('connect', function($serv, $fd){
    echo '建立连接\n';
});

/**
 * 接收信息
 * $serv 服务端信息
 * $fd 客户端信息
 * $from_id id
 * $data 数据
 */
$serv->on('receive', function($serv, $fd, $from_id, $data){
    echo '接收信息\n';
});

/**
 * 关闭连接
 */
$serv->on('close', function($serv, $fd){
    echo '关闭连接\n';
});

/**
 * 启动服务器
 */
$serv->start();