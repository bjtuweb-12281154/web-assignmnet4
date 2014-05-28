<?php
if(isset($_COOKIE['mycookie_name']))
{
	 $username = $_COOKIE['mycookie_name'];
	 $connection = mysql_connect("localhost","root","12345");
	 mysql_select_db("users",$connection);
	 $result = mysql_query("SELECT user_id FROM user_info WHERE username = '$username'") or die(mysql_error());
	 $row = mysql_fetch_array($result)  or die(mysql_error());
	mysql_select_db("relationship",$connection);
	echo $row['user_id'];
	echo $_POST['id'];
	$sql= mysql_query("INSERT INTO user_movie (user_id, movie_id)
	VALUES
	($row[user_id],'$_POST[id]')");
	header("Location:personal_page.php");
	echo "11";
}
else
{
	header("Location:register_like.php");
	echo "11";
}

?>

