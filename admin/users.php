<html>

<head>
    <title>BookStore</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="../css/admin.css" rel="stylesheet">
    <link href="../css/dashboard.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="admin.php">BookStore</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse"
            data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <span
                    class="welcome text-light">Welcome:<?php session_start();if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']=true){echo $_SESSION['username'];}else{header("Location: adminlogin.php");exit();}?></span>
                <a href="include/logout.php">
                    <button class="btn btn-danger">Logout</button>
                </a>
            </li>
        </ul>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="sidebar-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="addbook.php">
                                <span data-feather="upload"></span>
                                Add book
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="edit.php">
                                <span data-feather="edit"></span>
                                Edit book
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="users.php">
                                <span data-feather="users"></span>
                                Users
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="orders.php">
                                <span data-feather="shopping-cart"></span>
                                Orders
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
<div class="container">
    <div class="row row-content">
        <div class="col-12">
          <div class="table-responsive">
    <?php  
    include 'include/dbconnect.php';
    $query = "SELECT * FROM register"; 
    $result = mysqli_query($conn, $query);        
    echo '<div class="my-4"><table class="table table-striped"><tr><td id="brow">Id</td><td id="brow">Username</td><td id="brow">Name</td><td id="brow">Address</td><td id="brow">Email</td><td id="brow">Contact</td></tr>';          
    while($row = mysqli_fetch_array($result))  
    {  
      $id =$row[0];
      $username =$row[1];
      $name=$row[3];
      $address=$row[4];
      $email=$row[5];
      $contact=$row[6];
    
        echo '<tr><td>'.$id.'</td><td>'.$username.'</td><td>'.$name.'</td><td>'.$address.'</td><td>'.$email.'</td><td>'.$contact.'</td></tr>';  
     }
    //$_SESSION['image']=$image;
    echo '</table></div>';
?> 
</div>
</div>
</div>

  </div>
  </main>
<style type="text/css">
  
  #brow{
    font-weight: bold;
  }
 
</style>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                    crossorigin="anonymous">
                </script>
                <script>
                window.jQuery || document.write(
                    '<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')
                </script>
                <script src="../js/bt.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
                <script src="../js/dashboard.js"></script>
</body>
</html>            
</body>
</html>