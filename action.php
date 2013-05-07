<?php
	//执行商品信息的增删改操作
	//导入配置文件和函数库文件
	require("dbconfig.php");
	require("functions.php");
	//连接Mysql，选择数据库
	$link = mysql_connect(HOST,USER,PASSWORD) or die("数据库连接失败");
	mysql_select_db(DBNAME,$link);
	//获取action参数的值，并做对应操作
	switch($_GET["action"]){
		case "add"://添加
			//获取添加信息，执行图片上传，执行图片缩放，拼装sql语句，并执行添加，判断并输出结果
			$name = $_POST['name'];
			$typeid = $_POST['typeid'];
			$price = $_POST['price'];
			$total = $_POST['total'];
			$note = $_POST['note'];
			$addtime = time();
			
			break;
		case "del":
			break;
		case "update":
			break;
	}
	//关闭数据库
	mysql_close($link);
?>