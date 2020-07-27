<!-- buying code -->
<?php
        include 'include/dbconnect.php';
        session_start();
        $flag_1=true;
        $error="";
        //$sid=$_GET['id'];
       if (isset($_POST['submit'])) 
      {
        $flag_1 = false;
        $sid  = $_POST['sid'];
        $query="SELECT title,price,quantity FROM tbl_images WHERE id='$sid'";
        $result = mysqli_query($conn, $query); 
        while($row = mysqli_fetch_array($result))  
         {  
            $bookname =$row[0];   
            $price= $row[1]; 
            $quan = $row[2];
            
        }             

        $name=$_POST['name'];
        $email=$_POST['email'];
        $contact=$_POST['contact'];
        $quantity=$_POST['quantity'];
        $totalprice=$quantity*$price;
        $user=$_SESSION['username'];
        $query1="INSERT INTO `orders` (`id`, `username`, `bookname`, `quantity`, `totalprice`, `address`, `email`, `contact`, `status`) VALUES (NULL, '$user', '$bookname', '$quantity', '$totalprice', 'pandharpur', '$email', '$contact', '0');";
        if($quantity<=$quan){
          $result1 = mysqli_query($conn, $query1); 
        
        //  echo $result1;
         if ($result1) {
          $query2="UPDATE tbl_images SET quantity=quantity-'$quantity' WHERE id='$sid'";
          mysqli_query($conn, $query2);

           echo "<script>alert('Order placed successfully!')</script>";
         }
        
         else{
            $error = "Please fill the details appropriately!";   
        }
        }
        else{
          $error = "Available items are less than you selected!";
        }
       }
      ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bookstore</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">
    <!-- Bootstrap core CSS -->
    <link href="../css/sty.css" rel="stylesheet">
    <link rel="icon" href="../img/lib.jpg">
    <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">
    <style>
    body{
        
    }
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .loginname {
        color: white;
    }

    .welcome {
        color: white;

    }

    .card-img-top{
        height: 300px;
        width: 100%;
      }
      .card{
        padding:5px;
        width: 21em;
        margin:1%;
        display: inline-block;
        justify-content: center;        
      }
    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style>
    <!-- Custom styles for this template -->
    <link href="../css/admin.css" rel="stylesheet">
    <link href="../css/dashboard.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="product.php">BookStore</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse"
            data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <span
                    class="welcome">Welcome:<?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']=true){echo $_SESSION['username'];}else{header("Location: user/userlogin.php");exit();}?></span>
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
                            <a class="nav-link active" href="#">
                                <span data-feather="shopping-cart"></span>
                                Buy now <span class="sr-only">(current)</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <h2>Checkout</h2>
      <?php
        
        if ($flag_1){
        $stdid=$_POST['id'];
        }
        else{
            $stdid=$sid;
        }
        $query = "SELECT * FROM tbl_images WHERE id='$stdid'"; 
        $result = mysqli_query($conn, $query);                  
        while($row = mysqli_fetch_array($result))  
        {
            $image =$row[1];   
        }
        echo '<div class="container text-center"><div class="card "><img class="card-img-top" src="data:image/jpeg;base64,'.base64_encode($image).'" class="img-thumnail"></div></div>';  
      ?>
        <div id="Buy" class="col-12 col-md-6 offset-3">   
            <form action="" method="post">
                <label>Id :</label>
                <input name="sid" value="<?php echo $stdid;?>" type="text">
                <label>Name :</label>
                <input name="name" placeholder="name" type="text" required>
                <label>Address :</label>
                <input name="address" placeholder="address" type="text" required>
                <label>Email :</label>
                <input name="email" placeholder="email" type="text" required>
                <label>Contact :</label>
                <input name="contact" placeholder="contact" type="text" required>
                <label>Quantity :</label>
                <input name="quantity" placeholder="quantity" type="text" required>
                <span><?php if (isset($_POST['submit'])) {echo $error;}?></span>
                <input name="submit" type="submit" value=" Place an order " class="btn btn-primary">
            </form>
        </div>
    </main>
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