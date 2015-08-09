<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>User Dashboard</title>
		<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
        <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    <style>
      *{
        font-weight: 300;
        font-family: sans-serif;
      }
      .container{
        border: 2px solid #14695C;
        margin-left: 50px;
        margin-right: 50px;
      }
      .sub-header{
        margin-left: 30px;
      }
      .btn-primary{
        float: right;
        margin-right: 30px;
      }
      .userdata{
        margin-left: 50px;
        margin-right: 50px;
      }
      h2, h4
      {
        margin-left: 30px;
      }
      tbody tr:nth-child(odd)
      {
        background: #E0F2F1;
      }
      tbody tr:nth-child(even)
      {
        background-color: #B2DFDB;
      }
      body{
        background-color: #80CBC4;
      }
    </style>
	</head>
	<body>
	<div id="1stcontiainer">
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
        <li class="active"><a href="/edit/profile">Edit Profile <span class="sr-only">(current)</span></a></li>
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
  <h2> Hello <?php echo $this->session->userdata('id') ?>! </h2>
  <h4 class="sub-header">List of all Users</h4>
  <hr>
  <div class="userdata">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID#</th>
          <th>Name</th>
          <th>Email</th>
          <th>Created_at</th>
          <th>Member level</th>
        </tr>
      </thead>
      <tbody>
      <?php  foreach($users as $row){ ?>

        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><u><a href = "/showuser/<?= $row['id'] ?>"><?php echo $row['name']; ?> </a></u></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['created_at']; ?></td>
          <td><?php echo $row['member']; ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</body>
</html>