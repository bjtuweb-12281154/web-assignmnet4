<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="signin.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="signin.css" rel="stylesheet">
<title>个人主页</title>

<style>
body{
	background:#f0f0f0;
}
#Container{
	width: auto;
	height:  1000px;
	background: #f0f0f0;	
	/*margin: 10px;*/
}
#front{
	width: 1200px;
	margin-left: 0px;
	margin:50px;	
	height: 200px;
	background: url("images/header2.png");
}
#main{

}
#lside{
	width: 300px;
	margin-top: 80px;
	margin-left: 50px;
	height: 210px;
	float: left;
	/*background:url("images/个人信息.png");*/
}
#rside{
	margin-left: 150px;
	margin-top: 80px;
	width:700px;
	height: 500px;
	float: left;
	background: #f0f0f0;
}
#face{
	width: 150px;
	height: 200px;
	margin-top: 80px;
	margin-left: 100px;
}

</style>
</head>

<body>
	<center>	
		<div class = "container" id = "Container">
			<div class = "navbar navbar-default navbar-fixed-top" role="navigation">
    		<div class = "container">
    			<div>
    				<div class="navbar-header">
						<button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="homepage_login.php">iMovie</a>
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
						<li>
						<a href="homepage_login.php">Home</a>
						</li>
						<li class="active">
						<a href="personal_page.php">Me</a>
						</li>
						<li>
						<a href="logout.php">Log out</a>
						</li>
					</div>
    			</div>
    		</div>
    	</div>
			<div id = "front"> </div>
			<div id = "main"> 
				<div id = "lside"> 
				<img src = "images/me.png" id = "me" width>
				<?php
					echo '<strong style = "font-size:220%; font-family: Times New Roman">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspWelcome</strong>' ;
					echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
				?>
				</div>
				<div class = "container" style = "padding-left:200px"> 
					<!-- <p style = "font-size:150%; style: Times; color: red; margin-left: 150px ">My Favoraite</p> -->
					<?php

 						$username = $_COOKIE['mycookie_name'];		
 						//连 user 数据库，取user_id
 						$connection = mysql_connect("localhost","root","12345");
 						mysql_select_db("users",$connection);
 						$result = mysql_query("SELECT user_id FROM user_info WHERE username = '$username'") or die(mysql_error());
 						$row1 = mysql_fetch_array($result)  or die(mysql_error());
 						//连 movie 数据库，取m_id
 						mysql_select_db("relationship",$connection);
 						$retval = mysql_query("SELECT * FROM user_movie WHERE user_id = '$row1[user_id]'");
 						$m = 0;
 						while($row2 = mysql_fetch_array($retval))
 						{
 							$m++;
 							 mysql_select_db("movie",$connection);
 							 $movie = mysql_query("SELECT * FROM movie_info WHERE m_id = '$row2[movie_id]'") or die(mysql_error());						 
 							 $poster = mysql_fetch_array($movie);
 							{?>
 				
							<a href="<?php echo $poster['m_link'];?>"><img style = "width: 240px; height: 360px;"src="<?php echo $poster['poster'];?>"></a>
							<a href="<?php echo $poster['m_link'];?>"><strong style = "font-size:200%; "><?php echo $poster['m_name'];?></strong></a>
							<br><br>
 							<?php
 						}
 						}

 						if($m == 0) echo '<strong style = "font-size:220%; font-family: Times New Roman">&nbsp&nbsp&nbsp<br/>您目前还没有选择任何喜欢的影片哦,快去<a href="homepage_login.php">选择</a>吧</strong>';
 					?>
 				<br><br>	
				</div>
		<center>
      	<div class="container" style = "bottom:0px; position:fixed">
       		<p class="text-muted">Designed by Crazy.</p>
      	</div>

</body>		
</html>