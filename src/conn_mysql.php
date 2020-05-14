<?php
	$db_link=@mysqli_connect("tutorial-db-instance.cnui8xn1ax5x.us-east-1.rds.amazonaws.com","tutorial_user","Skills39");
	if(!$db_link){
		die("資料庫連線失敗<br>");
	}else{
		echo"資料庫連線成功<br>";
	}

?>