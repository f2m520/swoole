<?php

//循环定时器
swoole_timer_tick(2000, function($timer_id){
    echo "执行 $timer_id \n";
});

swoole_timer_after(3000, function($timer_id){
    echo "3000后执行 \n";
});