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
                            <a class="nav-link active" href="#">
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
                            <a class="nav-link" href="orders.php">
                                <span data-feather="shopping-cart"></span>
                                Orders
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                
                <?php  
                    include 'include/dbconnect.php';
                    $query = "SELECT * FROM tbl_images WHERE quantity>0 ORDER BY id DESC"; 
                    $result = mysqli_query($conn, $query);      
                    echo '<div class="container row my-3">';            
                    while($row = mysqli_fetch_array($result))  

                    {
                    $id= $row[0];  
                    $image =$row[1];
                    $title =$row[2];
                    $author=$row[3];
                    $price =$row[4];
                    $avail =$row[5];
                    
                    echo '<div class="card"><img class="card-img-top" src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" class="img-thumnail" /><br><br>Title : '.$title.'<br>Author : '.$author.'<br>Price : '.$price.'<br>Quantity : '.$avail.'<br><form method="post" action="updatebook.php?id="'.$row['id'].'><input type="text" name="id" value="'.$row['id'].'" hidden><input type="submit" value="Edit" class="btn btn-success"></form></div>';  
                    
                    }
                    //$_SESSION['image']=$image;
                    echo '</div>';
                ?>
            </main>
            

                <style>
               .card-img-top{
                    height: 300px;
                    width: 100%;
                }
                .card{
                    padding:5px;
                    width: 23em;
                    margin:1%;
                    display: inline-block;
                    justify-content: center;        
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