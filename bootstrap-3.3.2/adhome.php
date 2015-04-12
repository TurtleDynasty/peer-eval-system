<?php
    session_start();
    
    $position = $_SESSION['Position'];
    $name = $_SESSION['Name'];
    $ID = $_SESSION['ID'];
    
    if($position != "admin")
    {
        header("Location: login.html");
    }
    
?>

<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="favicon.ico">

        <title>Logistica - PES - Admin Home</title>

        <!-- Bootstrap core CSS -->
        <link href="dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="dist/css/bootstrap2.css" rel="stylesheet">

        <script src="assets/js/ie-emulation-modes-warning.js"></script>

        <!-- Custom styles for this template -->
        <link href="carousel.css" rel="stylesheet">
  </head>

    <!-- Carousel -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <div class="carousel-inner" role="listbox">
          <center>
        <div class="item active">
          <img src="LOGISTICA.png" alt="First slide" width="950" height="230">
        </div>
            </center>
      <div class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="sr-only">Previous</span>
      </div>
      <div class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="sr-only">Next</span>
      </div>
    </div>
    <!-- /.carousel -->
        
  <!-- NAVBAR  -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Peer Evaluation System</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                  <li class="active"><a href="#projects">Admin Home</a></li>
                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Account<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a>Logged as: <?php echo "$name"?></a></li>
                    <li class="divider"></li>
                    <li><a href="#">Logout</a></li>
                  </ul>
                </li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact Admin</a></li>                
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>
      
      <!-- CONTENT -->
    <div class="list-group2">
        <div class="alert alert-info" role="alert"><p align="center"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADMIN PAGE</p></div>
        <hr>
        <div class="alert alert-success" role="alert"><span class="glyphicon glyphicon-briefcase" aria-hidden='true'></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="projects.php" class="alert-link">Manage Projects</a></div>
        <div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="accounts.php" class="alert-link">Manage Accounts</a></div>
        <div class="alert alert-warning" role="alert"><span class="glyphicon glyphicon-plus" aria-hidden='true'></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="createAccount.php" class="alert-link">Create new account</a></div>
        
    </div>
      

      <!-- FOOTER -->
      <br><br>
      <footer class="list-group3">
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Logistica, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript -->
    \<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/docs.min.js"></script>
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
