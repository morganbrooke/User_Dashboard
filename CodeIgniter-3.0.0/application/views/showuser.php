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
    h2{
      margin-top: 0;
    }
    .leavemessage{
      margin-left: 50px;
      background-color: #14695C;
    }
    .blog-post{
    	margin-left: 50px;
      margin-right: 50px;
      background-color: #209688;
    }
    .pastmessage{
      margin-left: 50px;
    }
    .message{
      border: 1px solid #14695C;
      background-color: #B2DFDB;
    }
    .comment{
      border: 1px solid #14695C;
      background-color: #E0F2F1;
    }
    button{
      background-color: #E0F2F1;
      border: 1px solid #14695C;
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
        <li class="active"><a href="/edit/profile">Edit Profile<span class="sr-only">(current)</span></a></li>
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
<div class="blog-post">
  <h2 class="blog-post-title"><?php echo $first_name, $last_name?></h2>
  <p>
    Registered at: <?php echo $created_at ?><br>
    User id: <?php echo $id ?><br>
    Email address: <?php echo $email ?><br>
    Description: <?php echo $description ?><br>
    </p>
  <hr>
    <div class="leavemessage">
      <label for="message"><?php echo $this->session->userdata('id') ?>, leave a message for <?php echo $first_name ?>:</label>
      <form action = "/postmessage/<?=$id?>" method="post" type="hidden" value="user_id">
      <textarea class="form-control" name='message' rows="5" id="comment"></textarea>
      <input type = "hidden" name="owner_id" value='<?= $id?>'>
      <button>Post Message</button>
      </form>
    </div>
    <div class="col-md-8"> <?= $this->session->flashdata('errors')?></div><br>
    <div class="pastmessages">

<?php foreach ($messages as $message)
      { ?>
      <div class= 'message'>
        <h4><?php echo $message['first_name']; ?>'s message </h4>
        <p> <?php echo $message['message']; ?></p>
<?php foreach ($message['comments'] as $comment)
      { ?> 
      <div class= 'comment'>
          <h4><?= $comment['first_name'] ?></h4>
          <p><?= $comment['comment'] ?></p>
      </div>
      <?php } ?> 
        <form action = "/post_comment/<?= $id?>" method= 'post'>
          <textarea cols= '50' rows= '4' name= 'comment' placeholder='leave a comment'></textarea>
          <input type = "hidden" name ='message_id' value='<?= $message['id']?>'> <br>
          <button>Post Comment</button>
        </form>
        <?= $this->session->flashdata('errors')?></div><br>

      </div>
<?php     }?>
    </div>
</div>
  </body>
  </html>