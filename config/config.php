<?php
	header("Content-Type:text/html;charset=utf-8");
	return array(
		/********************************数据库********************************/
		"DB_HOST"                       => SAE_MYSQL_HOST_M, //数据库连接主机  如127.0.0.1
		"DB_PORT"                       => SAE_MYSQL_PORT,        //数据库连接端口
		"DB_USER"                       => SAE_MYSQL_USER,      //数据库用户名
		"DB_PASSWORD"                   => SAE_MYSQL_PASS,          //数据库密码
		"DB_DATABASE"                   => "app_yangwang008",          //数据库名称
		"DB_PREFIX"                     => "hd_",          //表前缀
 	);
	// 连主库
	// $con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
	// if(!$con){
	//     die("连接失败:</br>".mysql_error());//诊断连接错误
	// }
	// echo '连接成功';

	// mysql_select_db('app_yangwang008',$con);
?>