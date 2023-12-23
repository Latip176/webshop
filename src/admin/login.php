<?php

session_start();

$db = file_get_contents('database/hakikikontol.json');
$login = json_decode($db, true);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    * {
      padding: 0;
      margin: 0;
    }
    body {
      background-color: #f4f4f4;
      font-family: Arial, sans-serif;
    }
    
    .login {
      width: 100%;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    
    .kotak {
      background-color: #ffffff;
      padding: 20px;
      width: 280px;
      height: 300px;
      border-radius: 8px;
      box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
      display: flex;
      align-items: center;
      justify-content: center;
    }
    
    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333333;
    }

    .form form {
      display: grid;
      gap: 15px;
    }
    .form form input {
      box-sizing: border-box;
      width: 100%;
    }
    .form input[type="text"],
    .form input[type="password"] {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
    }
    
    .form input[type="submit"] {
      background-color: #4caf50;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 18px;
    }
    
    .form input[type="submit"]:hover {
      background-color: #45a049;
    }
    
    p {
      text-align: center;
      margin-top: 20px;
    }
    a {
      text-decoration: none;
      color: #4caf50;
    }
    a:hover {
      color: #45a049;
    }
  </style>
</head>
<body>
  
  <div class="login">
    <div class="kotak">
      <div class="form">
        <h2 align="center" style="position: relative;">Login</h2>
        <form action="" method="POST">
          <input type="text" name="user" id="user" placeholder="username" autocomplete="off" required>
          <input type="password" name="pass" id="pass" placeholder="password" autocomplete="off" required>
          <input type="submit" value="Login" name="login">
        </form>
        <p align="center" style="position: relative; top: 75%;"><a href="">Forget Password?</a></p>
      </div>
    </div>
  </div>
  
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <?php
  
    if(isset($_POST['login'])) {
      if($_POST['user'] == $login['username']) {
        if($_POST['pass'] == $login['password']) {
          $_SESSION['LOGIN'] = 'Hakiki Kontol';
          echo("
          <script>
            swal({title: 'Login Berhasil!', text: 'Selamat Datang Hakiki Kontol.', icon: 'success', button: {text: 'OK', value: 'ok'}})
            .then((value) => {
              if(value) {
                window.location.href='control.php?content=home';
              }
            })
          </script>");
        } else {
          echo("<script>swal({title: 'Login Error!', text: 'Password Salah.', icon: 'error'});</script>");
        }
      } else {
        echo("<script>swal({title: 'Login Error!', text: 'Username Tidak Ditemukan.', icon: 'error'});</script>");
      }
    }
    
  ?>
</body>
</html>