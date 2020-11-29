<html> 
 <head>        
  <title>Tambah Data</title>
 </head>
 <body>
  <h1>Tambah Data Mahasiswa</h1>
  <form action="ctrl_mahasiswa.php?act=tambah" method ="POST"> 
   <table border ="0"> 
      <tr> 
          <td> Nama </td> 
          <td> : <input type="text" name="txt_nama"></td>
      </tr>
      <tr> 
          <td> Tempat Lahir </td> 
          <td> : <input type="text" name="txt_tempat"></td>
      </tr>
      <tr> 
          <td> Tanggal Lahir </td> 
          <td> : <input type="date" name="date_lahir"> </td>
      </tr>
      <tr> 
          <td> Fakultas </td> 
          <td> : <input type="text" name="txt_fakultas"> </td>
      </tr>
      <tr> 
          <td> Jurusan </td> 
          <td> : <input type="text" name="txt_jurusan"> </td>
      </tr>
      <tr> 
          <td> IPK </td> 
          <td> : <input type="text" name="txt_ipk"> </td>
      </tr>
      <tr> 
          <td> <input type="submit" value="Save">   
          <input type=button value=Back onclick=self.history.back()></td>
      </tr>
   </table>            
  </form>
 </body>
</html>