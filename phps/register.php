<?php
include 'config.php';
if (isset($_POST["u_btn"])) {
  $u_name = $_POST["u_name"];
  $u_email = $_POST["u_email"];
  $u_pass = $_POST["u_pass"];
  if (empty($u_name) || empty($u_email) || empty($u_pass) ) {
    echo "<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js'></script>";
    echo "<p id='text'>Please fill in all boxes</p>"; // error message
    echo "<script type='text/javascript'>";
    echo "$(function(){";
    echo "$('#text').fadeOut(5000);";
    echo "});";
    echo "</script>";
  }else{
    $insert = mysqli_query($conn,"INSERT INTO `users` (`u_name`, `u_email`, `u_pass`) VALUES ('$u_name', '$u_email', '$u_pass')");

    header( 'Location:../website/login.php' );


  }
}

 ?>

<form class="box" action="register.php" method="post">


  <h1>Sign up</h1>
  <input type="Username" placeholder="Username" name="u_name" value=""><br />

  <input type="email" placeholder="Email" name="u_email" value=""><br />

  <input type="password" placeholder="Password" name="u_pass" value=""><br />
  <input type="submit" name="u_btn" value="Sign up"><br />
  <a type="login" href="login.php">Already have an account?<br />Sign In</a>


  </form>
  <style type="text/css">
  body{ margin: 0;
     padding: 0;
     font-family: sans-serif;
     background: #34495e; }
     .box{ width: 300px;
       padding: 40px;
       position: absolute;
       top: 50%; left: 50%;
       transform: translate(-50%,-50%);
       background: #191919;
       text-align: center; }
       .box h1{ color: white;
         text-transform: uppercase;
         font-weight: 500; }
         .box input[type = "email"],.box input[type = "password"],.box input[type = "Username"]{
            border:0;
           background: none;
           display: block;
           margin: 20px auto;
           text-align: center;
           border: 2px solid #3498db;
           padding: 14px 10px; width: 200px;
           outline: none;
           color: white;
           border-radius: 24px;
           transition: 0.25s; }
           .box input[type = "Username"]:focus,
           .box input[type = "email"]:focus,
           .box input[type = "password"]:focus{
              width: 280px;
               border-color: #2ecc71; }
              .box input[type = "submit"]{
              border:0;
             background: none;
             display: block; margin: 20px auto;
             text-align: center;
             border: 2px solid #2ecc71;
             padding: 14px 40px; outline: none;
             color: white;
             border-radius: 24px;
             transition: 0.25s;
             cursor: pointer; }
             .box input[type = "submit"]:hover{ background: #2ecc71; }

             .box input[type = "login"]{
             border:0;
            background: none;
            display: block; margin: 20px auto;
            text-align: center;
            border: 2px solid #2ecc71;
            padding: 14px 40px; outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
            cursor: pointer; }
            .box input[type = "login"]:hover{ background: #2ecc71; }


  </style>
