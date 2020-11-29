<?php
  require_once "koneksi.php";
  $cari   = $_GET['id'];
  $sql    = "SELECT * FROM tb_mahasiswa WHERE nim = '$cari'";
  $result = mysqli_query($con, $sql);
  $data   = mysqli_fetch_row($result);
?> 

<html>  
  <head>        
   <title>Update Data</title>
  </head>
  <body>
   <h1>Update Data Mahasiswa</h1>
   <form action="ctrl_mahasiswa.php?act=update" method ="POST"> 
    <table border ="0">
     <input type="hidden" name="idn" 
            value="<?php echo $data[0]; ?>">
     <tr> 
       <td> NIM </td> 
       <td> : <input type="text" 
                     value="<?php echo $data[0]; ?>"
                     disabled>
       </td>
     </tr>
     <tr> 
       <td> Nama </td> 
       <td> : <input type="text" name="txt_nama" 
                     value="<?php echo $data[1]; ?> ">
       </td>
     </tr>
     <tr> 
       <td> Tempat Lahir </td> 
       <td> : <input type="text" name="txt_tempat" 
                     value="<?php echo $data[2]; ?> ">
       </td>
     </tr>
     <tr> 
       <td> Tanggal Lahir </td> 
       <td> : <input type="date" name="date_lahir" 
                     value="<?php echo $data[3]; ?>"> 
       </td>
     </tr>
     <tr> 
       <td> Fakultas </td> 
       <td> : <input type="text" name="txt_fakultas" 
                     value="<?php echo $data[4]; ?>"> 
       </td>
     </tr>
     <tr> 
       <td> Jurusan </td> 
       <td> : <input type="text" name="txt_jurusan" 
                     value="<?php echo $data[5]; ?>"> 
       </td>
     </tr>
     <tr> 
       <td> IPK </td> 
       <td> : <input type="text" name="txt_ipk" 
                     value="<?php echo $data[6]; ?>"> 
       </td>
     </tr>
     <tr> 
       <td> <input type="submit" value="Save">   
            <input type=button value=Back onclick=self.history.back()> 
       </td>
     </tr>
   </table>            
  </form>
 </body>
</html>