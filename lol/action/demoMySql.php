<?php
	//链接sae数据库
	/*$conn = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT, SAE_MYSQL_USER, SAE_MYSQL_PASS) or die("无法连接数据库");
	mysql_query("SET NAMES 'UTF8'");
	mysql_select_db(SAE_MYSQL_DB ,$conn) or die ("找不到数据源");
	echo 'Connected OK!';*/
	
	
	$array = array('id'=>'1','username'=>'lazypeople');
	header('Content-type: text/json');
	$json = json_encode($array);
	echo($json);
?>