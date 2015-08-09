<html>
  <head>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Dashboard</title>
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
    <style>
    *{
      font-weight: 300;
      font-family: sans-serif;
    }
    h3{
      margin-bottom: 50px;
    }
    #mainContainer{
      background-color: #B2DFDB;
    }
    #container2{
      display: inline-block;
      vertical-align: top;
      margin-left: 50px;
      background-color: #209688;
    }
    #container3{
      display: inline-block;
      vertical-align: top;
      margin-left: 10em;
      background-color: #209688;
    }
    #container4{
      margin-top: 5em;
    	margin-left: 50px;
    	margin-right: 50px;
      background-color: #209688;
    }
    h3{
    	margin-left: 50px;
      margin-top: 0;
    }
    .save_name{
      background-color: #E0F2F1;
      border: 1px solid #14695C;
    }
    form{
      margin: 0;
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
      <a class="navbar-brand" href="#">User Dashboard</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/dashboard">Dashboard<span class="sr-only">(current)</span></a></li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/logoff">Log off</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </nav>
  </div>
<div id ='mainContainer'>
  <h3> <?php echo $this->session->userdata('id') ?>, edit your profile:</h3>
  <div id = 'container2'>
  <h4>Edit Information</h4><hr>
    <form action = '/user/(:num)/edit' method="post">
      <div class="form-group">
        <label for="editemail">Email Address:</label>
        <input type="text" class="form-control" value="<?=$this->session->userdata['logged_user']['email']?>">
      </div>
      <div class="form-group">
        <label for="first_name">First Name:</label>
        <input type="text" class="form-control" value="<?=$this->session->userdata['logged_user']['first_name']?>">
      </div>
      <div class="form-group">
        <label for="last_name">Last Name:</label>
        <input type="text" class="form-control" value="<?=$this->session->userdata['logged_user']['last_name']?>">
      </div>
        <button type="button" class='save_name'>Save</button>
    </form>
  </div>
  <div id = 'container3'>
    <h4>Change Password</h4>
    <hr>
    <form action = '/user/(:num)/editpassword' method='post'>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="text" class="form-control">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Confirm Password</label>
        <input type="password" class="form-control">
      </div>
        <button type="button" class='save_pass'>Update Password</button>
    </form>
  </div>
  <div id = 'container4'>
    <div class="form-group">
      <form action = '/user/(:num)/edit' method='post'>
      <br>
        <label for="comment">Edit Description:</label>
        <hr>
        <input type ="text" class="form-control" rows="5" value="<?=$this->session->userdata['logged_user']['description']?>">
        <button type="button" class="save_description">Save</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>