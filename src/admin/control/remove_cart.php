<style>
  table {
    width: 80%;
    margin: 20px auto;
    border-collapse: collapse;
    border: 2px solid #3498db;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  th, td {
    border: 1px solid #3498db;
    padding: 12px;
    text-align: left;
  }

  th {
    background-color: #3498db;
    color: #fff;
  }

  tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  tr:hover {
    background-color: #e0e0e0;
  }
</style>
<table border="1">
  <tr>
    <th>Nama</th>
    <th>Tools</th>
  </tr>
  <?php foreach($data['data'] as $key => $dat): ?>
    <tr>
      <td><?= $dat['nama'] ?></td>
      <td><a href="control.php?content=simpan_cart&data=remove&id=<?= $key ?>" style="color: red;">Remove</a></td>
    </tr>
  <?php endforeach ?>
</table>