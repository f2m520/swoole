<?php

//创建tcp客户端
$client = new swoole_client(SWOOLE_SOCK_TCP);

//链接tcp服务
$client->connect('192.168.56.1', 8080) or die("连接失败");

//发送数据
$client->send("hello world") or die("数据发送失败！");

//接收数据
$data = $client->recv();
echo $data;

//关闭
$client->close();
