<?php

if(isset($_GET['data'])) {
  $dataG = file_get_contents('database/data_cart.json');
  $dataG = json_decode($dataG, true);
  
  if($_GET['data'] == "add" || $_GET['data'] == "edit") {
    if($_GET['data'] == "add") {
      $id = bin2hex(random_bytes(3));
    } else if($_GET['data'] == "edit") {
      $id = $_GET['id'];
    }
    $newData = array(
      'nama' => $_POST['nama'],
      'harga' => $_POST['harga'],
      'diskon' => $_POST['diskon']
    );
    $dataG['data'][$id] = $newData;
    
    $dataBaru = json_encode($dataG, JSON_PRETTY_PRINT);
    file_put_contents('database/data_cart.json', $dataBaru);
    
    if($_GET['data'] == "add") {
      $msg = 'Data berhasil ditambahkan.';
    } else if($_GET['data'] == "edit") {
      $msg = 'Data berhasil diubah.';
    }
    echo("
      <script>
        swal({title: 'Berhasil!', text: '$msg', icon: 'success', button: {text: 'OK', value: 'ok'}})
        .then((value) => {
          if(value == 'ok') {
            window.location.href='control.php?content=home';
          }
        });
      </script>");
  } else if($_GET['data'] == "remove") {
    unset($dataG['data'][$_GET['id']]);
    
    $dataBaru = json_encode($dataG, JSON_PRETTY_PRINT);
    file_put_contents('database/data_cart.json', $dataBaru);
    echo("
      <script>
        swal({title: 'Berhasil!', text: 'Data berhasil dihapus.', icon: 'success', button: {text: 'OK', value: 'ok'}})
        .then((value) => {
          if(value == 'ok') {
            window.location.href='control.php?content=home';
          }
        });
      </script>");
  }
}