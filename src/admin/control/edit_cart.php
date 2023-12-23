<?php

if(!isset($_GET['id'])) {
  header('Location: control.php?content=cart');
}
$id = $_GET['id'];
$editData = $data['data'][$id];


?>

<style>
  .edit {
    width: 300px;
    height: 400px;
    background: white;
    border: 1px solid black;
    margin: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 35px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  }
  .edit input {
    box-sizing: border-box;
  }
  .edit form {
    display: grid;
    gap: 10px;
  }
  .edit input[type='number'], .edit input[type='text'] {
    display: block;
  }
  .edit span {
    font-family: 'Robotto', Arial;
  }
  .button input[type='reset'], .button input[type='submit'] {
    width: 100px;
    display: inline-block;
  }
</style>

<div class="edit">
  <div>
    <form action="control.php?content=simpan_cart&data=edit&id=<?= $id ?>" method="POST">
      <span>Nama</span>
      <input type="text" name="nama" placeholder="masukan nama produk" value="<?= $editData['nama'] ?>">
      <span>Harga Sebelum Diskon</span>
      <input type="number" name="harga" placeholder="masukan harga produk" value="<?= $editData['harga'] ?>">
      <span>Harga Sesudah Diskon</span>
      <input type="number" name="harga" placeholder="masukan harga sesudah diskon produk" value="<?= $editData['hargaDiskon'] ?>">
      <span>Diskon</span>
      <input type="number" name="diskon" placeholder="masukan diskon produk" value="<?= $editData['diskon'] ?>">
      <div class="button">
        <input type="reset" value="reset" class="btn btn-secondary">
        <input type="submit" value="simpan" name="simpan" class="btn btn-primary">
      </div>
    </form>
  </div>
</div>