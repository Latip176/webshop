<?php
session_start();

if(!isset($_SESSION['LOGIN'])) {
  header('Location: login.php');
}

$data = file_get_contents('database/data_cart.json');
$data = json_decode($data, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Control Cart - Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/23b0acc186.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
  <style>
    .navbar {
      border: 1px solid #eaeaea;
    }
    .navbar button {
      border: none;
      background: none;
      padding: 10px;
      color: #025464;
    }
    .tools {
      width: 100%;
    }
    .tools ul li {
      padding-block: 10px;
      list-style: none;
    }
    .tools a {
      text-decoration: none;
      color: black;
    }
    .tools ul li:hover {
      transform: scale(1.1);
    }
    .content {
      padding-top: 150px;
    }
  </style>
</head>
<body>
  
  <nav class="navbar navbar-expand-lg bg-light fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html" style="font-weight: bold;">
            Admin
      </a>
      <button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
          <span class="fas fa-tools"></span>
      </button>
    </div>
  </nav>
  
  <div class="content">
    <div class="data">
      <?php include('media.php') ?>
    </div>
  </div>
  
  <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasBottomLabel">Tools Admin</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="tools">
        <ul>
          <li><a href="control.php?content=cart"><i class="fas fa-shopping-cart"></i> List Cart</a></li>
          <li><a href="control.php?content=add_cart"><i class="fas fa-cart-plus"></i> Add Cart</a></li>
          <li><a href="control.php?content=remove_cart"><i class="fas fa-cart-arrow-down"></i> Remove Cart</a></li>
        </ul>
      </div>
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>