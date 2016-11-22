<?php

	// 全部
	$allUrl = 'https://moment.douban.com/api/auth_authors/all?alt=json&apikey=0bcf52793711959c236df76ba534c0d4&app_version=1.7.4&count=20&douban_udid=d623045db9fcb0d5243174c1bf1a675f887047c0&start=0&udid=9a34d8b038ff38971050199b0c5ee9c60c6d1ca3&version=6';

	// 推荐
	$recUrl = 'https://moment.douban.com/api/auth_authors/rec?alt=json&apikey=0bcf52793711959c236df76ba534c0d4&app_version=1.7.4&count=20&douban_udid=d623045db9fcb0d5243174c1bf1a675f887047c0&start=0&udid=9a34d8b038ff38971050199b0c5ee9c60c6d1ca3&version=6';

	// 
	$allResult = file_get_contents($allUrl); //'{}'

	$recResult = file_get_contents($recUrl); //'{}'

	// 转成数组
	$allResult = json_decode($allResult, true);
	// 转成数组
	$recResult = json_decode($recResult, true);

	// var_dump($allResult);

	// 拼凑数据
	$result = array('all'=>$allResult, 'rec'=>$recResult);

	// 返回json数据
	echo json_encode($result);





