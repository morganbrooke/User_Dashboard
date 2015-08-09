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
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Test App</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Dashboard<span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="#">Profile<span class="sr-only">(current)</span></a></li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Log off</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </nav>
  </div>
  <div class = 'container'>
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address:</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">First Name:</label>
    <input type="first_name" class="form-control" id="first_name" placeholder="First Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Last Name:</label>
    <input type="last_name" class="form-control" id="last_name" placeholder="Last Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password">
  </div>
  <button type="button" class="btn btn-success">Register!</button>
</form>
</div>
  </body>
  </html>