<?php

switch($_GET['content']) {
  case "home":
    include('control/cart.php');
    break;
  case "add_cart":
    include('control/add_cart.php');
    break;
  case "edit_cart":
    include('control/edit_cart.php');
    break;
  case "remove_cart":
    include('control/remove_cart.php');
    break;
  case "simpan_cart":
    include("control/simpan_cart.php");
    break;
  default:
    include('control/cart.php');
    break;
}


?>