<?php
echo "111";
$connection = mysql_connect("localhost","root","12345");
mysql_select_db("users",$connection);
if(isset($_POST["username_login"]) && isset($_POST["password_login"]));
{
	echo "111";
	$sql = sprintf("SELECT 1 FROM user_info WHERE username = '%s' AND password = '%s'",mysql_real_escape_string($_POST["username_login"]),mysql_real_escape_string($_POST["password_login"]));
	$result = mysql_query($sql);
	if(mysql_num_rows($result) == 1)
	{
		echo "111";
		$username = $_POST["username_login"];		
		setcookie('mycookie_name',$username);
		echo $_COOKIE['mycookie_name'];
		header("Location:personal_page.php");
		exit;
	}
}
?>

