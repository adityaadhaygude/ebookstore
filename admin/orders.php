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
                            <a class="nav-link" href="users.php">
                                <span data-feather="users"></span>
                                Users
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="orders.php">
                                <span data-feather="shopping-cart"></span>
                                Orders
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="container my-3">
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" href="#pending" role="tab" data-toggle="tab">Pending Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#complete" role="tab" data-toggle="tab">Completed orders</a>
        </li>
      </ul>
    </div>

    <div class="container">
        <div class="tab-content">

            <div class="tab-pane fade show active" role="tabpanel" id="pending">
                    <div class="container">
                        <div class="row row-content">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <h2>Pending orders</h2>
                                    <?php  
                                    include 'include/dbconnect.php';
                                    $query = "SELECT * FROM orders WHERE status=0"; 
                                    $result = mysqli_query($conn, $query);        
                                    echo '<div class="tab"><table class="table table-striped"><tr><td id="brow">Id</td><td id="brow">Username</td><td id="brow">Bookname</td><td id="brow">Quantity</td><td id="brow">Total price</td><td id="brow">Address</td><td id="brow">Email</td><td id="brow">Contact</td><td id="brow">Status</td></tr>';          
                                    while($row = mysqli_fetch_array($result))  
                                    {  
                                    $id =$row[0];
                                    $username =$row[1];
                                    $bookname=$row[2];
                                    $quantity=$row[3];
                                    $totalprice=$row[4];
                                    $address=$row[5];
                                    $email=$row[6];
                                    $contact=$row[7];
                                    $status=$row[8];
                                    
                                        echo '<tr><td>'.$id.'</td><td>'.$username.'</td><td>'.$bookname.'</td><td>'.$quantity.'</td><td>'.$totalprice.'</td><td>'.$address.'</td><td>'.$email.'</td><td>'.$contact.'</td><td><form action="editorder.php?order_id='.$row['id'].'" method="post"><button class="btn btn-primary">Pending</button></form></td></tr>';  
                                    }
                                    //$_SESSION['image']=$image;
                                    echo '</table></div>';
                                    ?> 
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="tab-pane fade" role="tabpanel" id="complete">
                <div class="container">
                    <div class="row row-content">
                        <div class="col-12">
                            <div class="table-responsive">
                                <h2>Completed orders</h2>
                                <?php  
                                include 'include/dbconnect.php';
                                $query = "SELECT * FROM orders WHERE status=1"; 
                                $result = mysqli_query($conn, $query);        
                                echo '<div class="tab"><table class="table table-striped"><tr><td id="brow">Id</td><td id="brow">Username</td><td id="brow">Bookname</td><td id="brow">Quantity</td><td id="brow">Total price</td><td id="brow">Address</td><td id="brow">Email</td><td id="brow">Contact</td><td id="brow">Status</td></tr>';          
                                while($row = mysqli_fetch_array($result))  
                                {  
                                $id =$row[0];
                                $username =$row[1];
                                $bookname=$row[2];
                                $quantity=$row[3];
                                $totalprice=$row[4];
                                $address=$row[5];
                                $email=$row[6];
                                $contact=$row[7];
                                $status=$row[8];
                                
                                    echo '<tr><td>'.$id.'</td><td>'.$username.'</td><td>'.$bookname.'</td><td>'.$quantity.'</td><td>'.$totalprice.'</td><td>'.$address.'</td><td>'.$email.'</td><td>'.$contact.'</td><td><button class="btn btn-primary">Done</button>';
                                }
                                //$_SESSION['image']=$image;
                                echo '</table></div>';
                                ?> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>

<style type="text/css">
 
  #brow{
    font-weight: bold;
  }
  .tab{
    margin-top: 2%;
    
  }
</style>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
<script src="../js/bt.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
<script src="../js/dashboard.js"></script>
</body>
</html>            