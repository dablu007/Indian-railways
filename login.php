<?php
session_start(); 
$var1 = strtolower($_POST['uname']);
$var2 = $_POST['pass'];
mysql_connect("localhost","root","");
mysql_select_db("Railways");
$query = "select * from admin_login where id = '".$var1."' and password = '".$var2."' ";
$result = mysql_query($query);
$num=mysql_num_rows($result);
?>
<?php
if ($num){

	$_SESSION['uname']="1";
//	header('location:controlpanel.php');
	echo("Successfully login");

}

else{
//	header('location:registration.php');
	echo("Login Not Successfully");
}
?>