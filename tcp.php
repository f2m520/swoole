<?php

$host = '192.168.1.200';
$port = 9501;
$serv = new swoole_server($host, $port);

$serv->on('connect', function($serv, $fd){
    var_dump(11);die;
    var_dump($serv);
    var_dump($fd);die;
    echo '建立连接';
});