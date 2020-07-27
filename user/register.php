<?php
  include 'include/dbconnect.php';
  if(isset($_POST["submit"]))  
 { 
  $username=$_POST['username'];
  $password=$_POST['password'];
  $name=$_POST['name'];
  $address=$_POST['address'];
  $email=$_POST['email'];
  $contact=$_POST['contact'];

  $query = "INSERT INTO register(`username`,`password`,`name`,`address`,`email`,`contact`) VALUES('$username','$password','$name','$address','$email','$contact')";
  if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("Registration successfull!")</script>';  
      }  
   
   else  
    {  
           echo '<script>alert("Registration failed!")</script>';  
      }  
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">
    <!-- Bootstrap core CSS -->
  <link href="../css/sty.css" rel="stylesheet">
  <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#563d7c">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      .card{
        margin-left: 10%;
        width: 70%;
        height: 400px;
        padding: 2%;
        justify-content: center;
        align-items:  center;
      }
      .reg{
        display: flex;
        color: red;
        justify-content: center;
        font-size: 15px;
      }
      a:link{
        text-decoration:none;
      }
      input{
        margin:5px;
        box-shadow:2px 2px 3px grey ;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">
    <link href="../css/admin.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="home.php">BookStore</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="#">Contact</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <span data-feather="home"></span>
              Register <span class="sr-only">(current)</span>
            </a>
          </li>
         
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
       
        
          <div id="login">
            <h2>Register</h2>
            <form action="" method="post">
              <label>UserName :</label>
              <input id="name" name="username" placeholder="username" type="text" required>
              <label>Password :</label>
              <input id="password" name="password" placeholder="**********" type="password" required>
              <label>Name :</label>
              <input id="name" name="name" placeholder="name" type="text" required>
              <label>Address :</label>
              <input id="name" name="address" placeholder="address" type="text" required>
              <label>Email :</label>
              <input id="name" name="email" placeholder="email" type="text" required>
              <label>Contact :</label>
              <input id="name" name="contact" placeholder="contact" type="text" required>
              <input name="submit" type="submit" value=" Register " class="btn btn-primary">
              
              <a href="userlogin.php" class="reg">Login</a>
            </form>
          </div>
        
      </div>
    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../js/bt.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="../js/dashboard.js"></script></body>
</html>
