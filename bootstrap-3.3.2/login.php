<?php
include 'db.php';

$username = $password = $loginErr = "";
$connectionSuccess = FALSE; // It only will turn TRUE when everything goes right 

            /* set the variables */
            $username = $_POST["username"];
            $password = $_POST["password"];

            
            $sql = "SELECT * FROM employee WHERE Username ='$username' AND Password ='$password'";
            $result = mysql_query($sql,$cxn);
            if($result == FALSE)
            {
                $validFlag = FALSE;
                echo "error here 3";
            }
            else
            {
                if(mysql_num_rows($result) == 0)
                {
                    $loginErr = "Invalid Username or Password.";
                    $validFlag = FALSE;
                }
                else{
                            /* start a session and save some information */
                            session_start();
                            $_SESSION['userid'] = $username;
                            
                            /* save the info of the user that just logged in */
                            $sql = "SELECT * FROM employee WHERE Username = '$username'";
                            $result = mysql_query($sql);
                            $row=mysql_fetch_array($result);

                            $_SESSION['Name']=$row['Name'];
                            $_SESSION['Email']=$row['Email'];
                            $_SESSION['Position']=$row['Position'];
                            $position = $row['Position'];
                            $_SESSION['ID']=$row['ID'];
                            
                            
                            /* TO REPORT SUCCESS */
                            $connectionSuccess = TRUE;
                    }
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
    <link rel="icon" href="">

    <title>Logistice - PES - Signin</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="dist/css/signin.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

        <script src="assets/js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>
    <!-- Carousel -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      
      <div class="carousel-inner" role="listbox">
        <center>
        <div class="item active">
          <img src="LOGISTICA.png" alt="First slide" width="950" height="230">
            <div class="container">
            <div class="">
                <h1><font color="black">Peer Evaluation System</font></h1><br><br>
            </div>
          </div>
          <div class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="sr-only">Previous</span>
      </div>
      <div class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="sr-only">Next</span>
      </div>
        </div>
        <center>
    </div>
    <!-- /.carousel -->
            
    <!-- /container -->
    <div class="container">
      <form class="form-signin" action="login.php">
        <h2 class="form-signin-heading">Please sign in</h2>
          
          <?php
                    if (!$connectionSuccess){
                        echo "<label><font color='red'>
                            $loginErr
                            </font></label>";
                    }
                    else
                    {
                        if ($position == "admin")
                        {
                            header("Location: adhome.php");
                        }
                        else
                        {
                            header("Location: home.php");
                        }
                    }
            ?>
          
        <label for="inputUser" class="sr-only" width="250">Username</label>
        <input type="username" id="inputUser" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </form>
          </div>

    </div> 
    <!-- /container -->

    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="extra.js"></script>
  </body>
</html>