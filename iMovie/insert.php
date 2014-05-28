<?php
$con = mysql_connect("localhost","root","12345");
mysql_select_db("users", $con);
$username = $_POST["username_register"];
$password = $_POST["password_register"];
echo $username;
echo $password;
$sql=mysql_query("INSERT INTO user_info (username, password)
VALUES
('$username','$password')") or mysql_error();
		
setcookie('mycookie_name',$username);
header("Location:personal_page.php");
exit;
mysql_close($con);
?>