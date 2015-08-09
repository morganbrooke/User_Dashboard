<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Sign In</title>
		<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
		<style>
    *{
      font-family: sans-serif;
      font-weight: 300;
    }
		.form-group{
			width: 200px;
		}
		#container2{
			margin-left: 100px;
		}
    #contiainer{
      background-color: #14695C;
    }
    body{
      background-color: #80CBC4;
    }
		</style>
    </head>
<body>
<div id="contiainer">
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="">Test App</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/home">Home <span class="sr-only">(current)</span></a></li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/signin">Sign in</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </nav>
  </div>
<div id = "container2">
<form action = '/signin_verify' method='post'>
	<h3>Sign In</h3>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password"><br>
    <button>Sign In</button>
  </div>
    <div class="linktext">
    <label>
      <a href="/register/index"><u>Don't have an account? Register Here.</u></a>
    </label>
  </div>
</form>
</div>
</body>
</html>
