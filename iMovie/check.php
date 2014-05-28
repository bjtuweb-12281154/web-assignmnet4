<?php
if(isset($_COOKIE['mycookie_name']))
{

	header("Location:personal_page.php");
	echo "11";
}
else
{
	header("Location:register_like.php");
	echo "11";
}

?>

