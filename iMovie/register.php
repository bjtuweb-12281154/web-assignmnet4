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

<title>登录及注册</title>

<style>
body
{
	background:white;
}
#container{
	width: 1391px;
	/*background: url("images/background.jpg");*/
	margin:0px auto;
}
#header{
	width: 1200px;
	margin:50px;	
	height: 200px;
	background: url("images/header2.png");
}
#main{
	width: auto;

	background: pink;
}	
/*#content{
	margin:0px auto;
}*/
#left{

	margin-left: 50px;
	margin-top: 50px;
	background: url("images/边框.png");
	width:600px;
	height: 400px;
	float: left;
}
#right{
	margin-top: 50px;
	width:600px;
	height: 400px;
	float: left;
	background: url("images/边框.png");
}
</style>
</head>

<body>
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
						<a class="navbar-brand" href="homepage.php">iMovie</a>
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
						<li>
						<a href="homepage.php">Home</a>
						</li>
						<li class="active">
						<a href="register.php">Register/Log in</a>
						</li>
			
					</div>
    			</div>
    		</div>
    </div>
	<div id = "container">
		<div id = "header"></div>
		<div id = "main">
			<div id = "left" style="width: 600px" >
					<form   class="form-signin" role="form" action = "insert.php" method = "post" id = "content" style = "padding-left:200px;">
					<br /><br /><br/>
					<h2 class="form-signin-heading">Sign up</h2>
					<input class="form-control"  type = "text" placeholder="Nickname" name = "username_register" style = "width: 200px"/>
					<br/> 
					<input class="form-control"  type="password"  placeholder="Password" name = "password_register" style = "width: 200px"/>	
					<br>
		    	   
		    		<p class = "agreement">
		    	    <label for="agreement" >
		    		<input type="checkbox"   id = "agreement" name = "form_aggrement" />
		    		我已认真阅读并同意《
		    		<a  href="policy_agreemen">使用协议</a>
		    		》。
					</label>
		    		</p>
		    		<input type="submit" value = "Sign in" class="btn btn-lg btn-primary btn-block" style = "width: 100px;font-size: 80%";/>
					</form>
			</div>
			<div id = "right" style="width: 600px">
					<form class="form-signin" role="form" action = "change.php" method = "POST" style = "padding-left:200px;">
					<br/><br/><br/>
					<h2 class="form-signin-heading">Login</h2>
					<input class="form-control" type = "text" required="" placeholder="Nickname"  name = "username_login" style = "width: 200px"/>
					<br/>
		   			<input  class="form-control" type="password" required="" placeholder="Password" name = "password_login" style = "width: 200px"/>	
					<br/><br>
		   			<button class="btn btn-lg btn-primary btn-block" style = "width: 100px;font-size: 80%"; type="submit">Sign in</button>
		   			</form>
			</div>
		</div>
		<div id = "footer"></div>
	</div>
		<br />
		<center>
      	<div class="container">
       		<p class="text-muted">Designed by Crazy.</p>
      	</div>
</body>