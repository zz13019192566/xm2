<?php 

	$redis =new Redis();

	$redis->connect('127.0.0.1', 6379);

	$redis->select(6);

	foreach($_POST['arr'] as $k => $v){

		$rs = $redis->sismember('zw',$v);

		if ($rs) {
			echo '该票已经售出';

			return;
		}
		
	}

	foreach($_POST['arr'] as $k => $v){

		$redis->sadd('zw',$v);
	}

	echo 1;
