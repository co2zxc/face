<?PHP

session_start();

$BCode=$_POST['BCode'];
//echo $BCode;

//SAVE
 $_SESSION["BCode"]=$BCode;
echo $_SESSION["BCode"];

// SQL 比對 $_POST['BCode'];

require("conn_mysql.php");
	
//$sql_query_login="SELECT * FROM user where username='V998Z490'";
$sql_query_login="SELECT * FROM user where username='{$_SESSION["BCode"]}'";

$result1=mysqli_query($db_link,$sql_query_login) or die("查詢失敗");

		if(mysqli_num_rows($result1)){
		header("Location: http://127.0.0.1/ckface/index2.php");
		echo"OK";


		}else{
		echo"NO";
		header("Location: http://127.0.0.1/ckface/error.php");
	}
	
	
	

?>