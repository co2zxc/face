<?php

//echo $_POST['username'];
//echo $_POST['password'];
//echo $_POST['imgBase64'];
/*SQL 比對 BCode 插入 imgBase64*/
session_start();


echo $_SESSION["BCode"];

// SQL 比對 $_POST['BCode'];

require("conn_mysql.php");
	
$sql_query_login="SELECT * FROM user where username='V998Z490'";
//$sql_query_login="SELECT * FROM user where username='{$_SESSION["BCode"]}'";

$sql = "update `user` set `imgBase64`='{$_POST["imgBase64"]}' where `username`='{$_SESSION["BCode"]}'";


$re=mysqli_query($db_link,$sql) or die("ins失敗");


	
	/*
	update user set
password='123456'
where username='V998Z490'

update `user` set `password`='123456' where `username`='V998Z490'
*/


?>


