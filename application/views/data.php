<html>
<head>
  <style>
  table,td,tr{
    border:1px solid black;
    border-collapse: collapse;
  }
  </style>
</head>
<body>
  <table style="border:1px">
    <tr>
      <td>id</td>
      <td>Email</td>
      <td>Nama</td>
      <td>Waktu</td>
      <td>Isi</td>
    </tr>
    <?php
    $query = $this->db->query('SELECT id,nama, time, email,isi FROM komentar');

		foreach ($query->result_array() as $row){
    ?>
    <tr>
      <td><?php echo $row['id'] ?></td>
      <td><?php echo $row['email'] ?></td>
      <td><?php echo $row['nama'] ?></td>
      <td><?php echo $row['time'] ?></td>
      <td><?php echo $row['isi'] ?></td>
    </tr>
  <?php } ?>
  </table>
</body>
</html>
