<html>

<head>
    <title>BookStore</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/admin.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
</head>

<body>


    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">BookStore</a>
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
                            <a class="nav-link active" href="#">
                                <span data-feather="home"></span>
                                Home <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">
                                <span data-feather="file"></span>
                                About
                            </a>
                        </li>


                    </ul>
                </div>
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

                <div
                    class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <div class="card" style="width: 18rem;">
                        <a href="admin/adminlogin.php"><img src="img/adm.png" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <p class="card-text" style="font-weight: bold;"><a
                                    href="admin/adminlogin.php">Administrator</a></p>
                        </div>
                    </div>

                    <div class="card" style="width: 18rem;">
                        <a href="user/userlogin.php"><img src="img/cust.png" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <p class="card-text" style="font-weight: bold;"><a href="user/userlogin.php">User</a></p>
                        </div>
                    </div>
                </div>
            </main>



        </div>
    </div>
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
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script>
    window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')
    </script>
    <script src="js/bt.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <script src="js/dashboard.js"></script>
</body>

</html>