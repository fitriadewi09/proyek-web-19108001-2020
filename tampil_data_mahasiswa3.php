<?php  
  require_once "koneksi.php";
  $sql    = "SELECT * FROM tb_mahasiswa";
  $result = mysqli_query($con, $sql);
?>

<html>
 <head>
  <title>Daftar Mahasiswa</title>
 </head>  
 <body>
  <h3><a href='form_tambah_data.php'>Tambah Data</a></h3><p> 
    <form action='hasil_cari_data.php' METHOD='POST'>
      Cari : 
      <input type='text' name='id_cari'> 
      <input type='submit' value='cari'>
    </form>
    <table border="1">
      <tr>
          <th>NIM</th>
          <th>Nama</th>
          <th>Tempat Lahir</th>
          <th>Tanggal Lahir</th>
          <th>Fakultas</th>
          <th>Jurusan</th>
          <th>IPK</th>
          <th>AKSI</th>
      </tr>
      <?php while ($data = mysqli_fetch_row($result)): ?>
        <tr>
            <td><?php echo $data[0]; ?></td>
            <td><?php echo $data[1]; ?></td>
            <td><?php echo $data[2]; ?></td>
            <td><?php echo $data[3]; ?></td>
            <td><?php echo $data[4]; ?></td>
            <td><?php echo $data[5]; ?></td>
            <td><?php echo $data[6]; ?></td>
            <td>
            <?php 
              echo 
              "<a href='form_update_data.php?id=$data[0]'>Edit</a> | 
              <a href=\"ctrl_mahasiswa.php?act=hapus&idm=$data[0] \"onClick=\"return confirm('Apakah Anda benar-benar mau menghapusnya?')\">Hapus</a> "; 
            ?>
            </td>
        </tr> 
      <?php endwhile; ?>
    </table>
 </body>
</html>

<?php
  mysqli_free_result($result);
  db_disconnect($con);
?>