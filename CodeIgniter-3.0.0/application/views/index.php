<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>User Dashboard</title>
		<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
    <style>
    *{
      font-weight: 300;
      font-family: sans-serif;
    }
    .jumbotron{
      margin-left: 50px;
      margin-right: 50px;
    }
    .row3{
      margin-left: 50px;
      margin-right: 50px;
    }
    #contiainer{
      background-color: #14695C;
    }
    body{
      background-color: #80CBC4;
    }
    #button{
      background-color: #26A69B;
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
        <span class="sr-only"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">User Dashboard</a>
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
  <div class = "container2">
  <div class="jumbotron">
    <h1>Welcome to the Test</h1>
    <p>We're going to build a cool application using a MVC framework! This application was built with the Village88 folks!</p>
    <a id='button' class="btn btn-primary btn-lg" href="/signin" role="button">Start</a>
  </div>
  </div>
<div class = 'container3'>
  <div class="row3">
    <div class="col-md-4"><h4>Manage Users</h4>
      <p>Using this application, you'll learn how to add, remove, and edit users for the application.</p></div>
    <div class="col-md-4"><h4>Manage Users</h4>
      <p>Users will be able to leave a message to another user using this application.</p></div>
    <div class="col-md-4"><h4>Edit User Information</h4>
      <p>Admins will be able to edit another user's information (email address, first name, last name, ect...)</p></div>
  </div>
</div>
  </body>
</html>