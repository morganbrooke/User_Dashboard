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
    .form-group{
      margin-left: 50px;
    }
    </style>
	</head>
	<body>
	<div id="contiainer">
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
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
<div class = 'container'>
<form action = '/register' method='post'>
    <label>First Name:</label>
    <input type="text" class="form-control" name="first_name" placeholder="First Name">
    <label>Last Name:</label>
    <input type="text" class="form-control" name="last_name" placeholder="Last Name">
    <label> Email address:</label>
    <input type="text" class="form-control" name="email" placeholder="Enter email">
    <label>Password:</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
    <label>Confirm Password:</label>
    <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password">
  <button>Register!</button>
</form>

<a href = "/signin"><u>Already have an account? Login!</u></a>
</div>
<div class="col-md-8"> <?= $this->session->flashdata('errors')?> 
</div><br>
</body>
</html>