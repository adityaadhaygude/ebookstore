<?php  
 include 'include/dbconnect.php';
  if(isset($_POST["insert"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $title = $_POST['title'];
      $author = $_POST['author'];
      $price = $_POST['price'];
      $quantity = $_POST['quantity'];
    
      $query= "INSERT INTO tbl_images(image,title,author,price,quantity) VALUES ('$file','$title','$author','$price','$quantity')";  
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
      else
      {
          echo '<script>alert("Book Already Exist In The Database")</script>';  
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
  <link rel="icon" href="img/lib.jpg">
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
        margin-top: 10%;
        margin-right: 5%;
        position: relative;
        display: flexbox;
        align-items: center;
        justify-content: center;
      }
      .box{
        margin-top: 0.2%;

      }
      #insert{
        margin-top: 3%;
      }
      .upload_book{
        margin-top: 5%;
        margin-bottom: 20%;
      }
      .welcome{
        color: white;
      }
       .loginname{
        color: white;
        font-weight: bold;
        font-family: sans-serif;  
      }
      .signout{
        height: 30px;
        width: 30px;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="admin.php">BookStore</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
     <span class="welcome">Welcome:<?php  session_start();echo $_SESSION['username'];?></span>
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
            <a class="nav-link" href="orders.php">
              <span data-feather="shopping-cart"></span>
              Orders
            </a>
          </li>
          
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        
          <div class="upload_book">
               <h4 class="heading"> Upload a book</h4>
                <br />  
                <form method="post" enctype="multipart/form-data">  
                     <input type="file" name="image" id="image" class="ibox" value="" required>  
                     <br>
                     <br>
                     <input type="text" name="title" id="title" placeholder="Title"class="box" required><br>

                     <input type="text" name="author" id="author" placeholder="Author"class="box" required><br>

                     <input type="text" name="price" id="price" placeholder="price"class="box" required><br>

                     <input type="text" name="quantity" id="quantity" placeholder="quantity"class="box" required><br>

                     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-primary" />  
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
        <script src="../js/dashboard.js"></script>

</body>
</html>
