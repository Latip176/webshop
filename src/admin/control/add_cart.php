<style>
  .add {
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
  .add input {
    padding: 5px;
    box-sizing: border-box;
  }
  .add form {
    display: grid;
    gap: 10px;
  }
  .add input[type='number'], .add input[type='text'] {
    display: block;
  }
  .add span {
    font-family: 'Robotto', Arial;
  }
  .button input[type='reset'], .button input[type='submit'] {
    width: 100px;
    display: inline-block;
  }
</style>

<div class="add">
  <div>
    <form action="control.php?content=simpan_cart&data=add" method="POST">
      <span>Nama</span>
      <input type="text" name="nama" placeholder="masukan nama produk">
      <span>Harga Diskon</span>
      <input type="number" name="hargaDiskon" placeholder="masukan harga produk">
      <span>Harga Sesudah Diskon</span>
      <input type="number" name="harga" placeholder="masukan harga produk">
      <span>Diskon</span>
      <input type="number" name="diskon" placeholder="masukan diskon produk">
      <div class="button">
        <input type="reset" value="reset" class="btn btn-secondary">
        <input type="submit" value="simpan" name="simpan" class="btn btn-primary">
      </div>
    </form>
  </div>
</div>