<?php
include 'config.php';


if (isset($_POST["u_btn"])) {
  $u_email = $_POST["u_email"];
  $u_pass = $_POST["u_pass"];
  if (empty($u_email) || empty($u_pass) ) {
    echo "Please fill in all boxes";
  }else{
    $selectfdb = mysqli_query($conn,"SELECT * FROM users WHERE u_email = '$u_email' AND u_pass = '$u_pass'");
    $row = mysqli_fetch_array($selectfdb);
    if ($row["u_email"] == $u_email && $row["u_pass"] == $u_pass) {
      echo "Welcome back".$row[u_name]."!";

      setcookie('uid',$row["u_id"],time()+(3600 * 24));
      setcookie('login',1,time()+(3600 * 24));
      echo "  <meta http-equiv='refresh' content='0; url=index.html'>";
    }else{
      echo "<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js'></script>";
      echo "<p id='text'>Account Does Not Exist or Incorrect Credentials</p>"; // error message
      echo "<script type='text/javascript'>";
      echo "$(function(){";
      echo "$('#text').fadeOut(3500);";
      echo "});";
      echo "</script>";
    }
  }
}


 ?>

<form class="box" action="login.php" method="post">
  <h1>Login</h1>
<input type="email" name="u_email" placeholder="Email" value=""><br />
<input type="password" name="u_pass" placeholder="Password" value=""><br />
<input type="submit" name="u_btn" value="Log in"><br />
<a href="register.php">Don't have an account?<br />Register Now!</a>


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
       .box input[type = "email"],.box input[type = "password"]{
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

           .box input[type = "registernow"]{
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
          .box input[type = "registernow"]:hover{ background: #2ecc71; }


</style>
