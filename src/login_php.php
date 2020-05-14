<?php
header('Content-Type: text/html; charset=utf-8');
	
	
	require("conn_mysql.php");
	//$sql_query_login="SELECT * FROM employee where username='$username' AND password='$password'";
$sql_query_login="SELECT * FROM user where username='V998Z490'";
	$result1=mysqli_query($db_link,$sql_query_login) or die("查詢失敗");
	
		if(mysqli_num_rows($result1)){
	/*	$sql_query="SELECT * FROM user";
		$result=mysqli_query($db_link,$sql_query);
		
		echo "<table border=1 width=400 cellpadding=5>";
		echo "<tr>
			<td>id</td>
			<td>password</td>
			<td>username</td>
			<td>imgbase64</td>
		      </tr>";	
while($row=mysqli_fetch_array($result)){
			
			echo "<tr>
				<td>$row[0]</td> 
				<td>$row[1]</td>
				<td>$row[2]</td>
				<td>$row[3]</td>
			      </tr>";
		
			
		}*/
		
		//echo"</table>";
		echo"OK";
		}else{
		echo"NO";
	}
?>
		



?>