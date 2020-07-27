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
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="../index.php">BookStore</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse"
            data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a href="#" onclick="contact()">
                    Contact
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
                            <a class="nav-link" href="#">
                                <span data-feather="home"></span>
                                Admin login <span class="sr-only">(current)</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <?php
                $error="";
                if($_SERVER['REQUEST_METHOD']=='POST'){
                    include 'include/dbconnect.php';
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $sql = "SELECT * FROM `admin` WHERE username='$username' AND password='$password'";
                    $result=mysqli_query($conn,$sql);
                    $numRows = mysqli_num_rows($result);
                        if($numRows == 1){
                            $row = mysqli_fetch_assoc($result);
                            
                                session_start();
                                $_SESSION['loggedin']=true;
                                $_SESSION['username']=$row['username'];
                                header("Location: ./admin.php");
                                exit();
                        }
                
                        else{
                            $error = "Invalid username or password";
                        }
                }
                
            ?>

            <main role="main"
                class="col-md-9 ml-sm-auto col-lg-10 px-md-4 d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center">
                <div id="login">
                    <h2>User Login</h2>
                    <form action="" method="post">
                        <label>UserName :</label>
                        <input id="name" name="username" placeholder="username" type="text">
                        <label>Password :</label>
                        <input id="password" name="password" placeholder="**********" type="password">
                        <input name="submit" type="submit" value="Login " class="btn btn-primary">
                        <span><?php echo $error; ?></span>
                        <a href="register.php" class="reg">Register</a>
                    </form>
                </div>
            </main>


            <style>
            .card {
                margin-top: 10%;
                margin-right: 5%;
                position: relative;
                display: flexbox;
                align-items: center;
                justify-content: center;
            }
            </style>
            <script type="text/javascript">
            function contact() {
                alert("Contact: 7972103941 \nEmail: adityadhaygude17@gmail.com");
            }
            </script>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                crossorigin="anonymous">
            </script>
            <script>
            window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')
            </script>
            <script src="../js/bt.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
            <script src="../js/dashboard.js"></script>
</body>

</html>