<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<!-- Custom styles for this template -->
<link href="signin.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

<style>
	body
	{
		background:#f0f0f0;
	
	}
	#container{
	
		background:#f0f0f0;
		margin:0px auto;
	}
	#header{
	width: 1200px;
	margin-left: 0px;
	margin:50px;	
	height: 200px;
	background: url("images/header2.png");
	}
	#lside{
		float: left;

	}
	#rside{
		float: right;
		margin-top: 100px;
		margin-right: 300px;
	}

</style>
</head>

<body>
	<center>

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
						<li >
						<a href="check.php">Me</a>
						</li>
				
					</div>
    			</div>
    		</div>
    	</div>	
	<div id = "header"></div>
		<?php
			$connection = mysql_connect("localhost","root","12345");
			mysql_select_db("movie",$connection);
			$id=$_POST['language'];
			for ($i=0; $i < count($id) ; $i++) 
			{ 
				$movie_language = $id[$i];		
				
				{?>
					<strong style = "font-size:200%; font-family:Times NEw Roma"><?php echo $movie_language; ?></strong>
				<?php
				}
			 	$result = mysql_query("SELECT * FROM movie_info WHERE m_language like '%$movie_language%'") or die(mysql_error());
			 	if(mysql_num_rows($result) == 0) echo "没有该语言的影片";
				{?><div id = "container" style = "padding-left:250px">
				<?php
				}
			 	while($row = mysql_fetch_array($result))
			 	{ 
					{?>
						<form action="like.php" method = "POST">
						<div >
							<div id = "lside">
								<a href="<?php echo $row['m_link'];?>"><img style = "width: 240px; height: 360px;"src="<?php echo $row['poster'];?>"></a>
								<input type="hidden" name ="id" value = "<?php echo $row['m_id'];?>"><br>
							<div id = "rside"  style = "padding-left:300px;">
								<input type="submit" value = "" style = " background: url(images/like.jpg); width :22px">我喜欢<br><br>
								<a href="<?php echo $row['m_link'];?>"><strong style = "font-size:200%; "><?php echo $row['m_name'];?></strong></a>
								<br><br><br>
							</div>

						</div>
						</form>						
						<br>
					<?php
				}
				}
			}
		?> 
		</div>
		<center>
      	<div class="container" style = "bottom:0px; position:fixed">
       		<p class="text-muted">Designed by Crazy.</p>
      	</div>
</body>
</html>