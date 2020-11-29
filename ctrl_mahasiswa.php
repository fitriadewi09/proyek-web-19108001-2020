<?php 
  require_once "koneksi.php";	
  $act = $_GET['act'];
  
  if($act == "tambah") {
    $sql = "INSERT INTO tb_mahasiswa 
              (nama_mahasiswa, tempat_lahir, tanggal_lahir, fakultas, jurusan, ipk) 
	          VALUES 
		          ('$_POST[txt_nama]', '$_POST[txt_tempat]', '$_POST[date_lahir]', 
              '$_POST[txt_fakultas]', '$_POST[txt_jurusan]', '$_POST[txt_ipk]')";	 					
    
    mysqli_query($con, $sql);

    db_disconnect($con);
  } 

  if($act == "update") {
    $sql = "UPDATE tb_mahasiswa SET							 	        
            nama_mahasiswa = '$_POST[txt_nama]',
            tempat_lahir   = '$_POST[txt_tempat]',
            tanggal_lahir  = '$_POST[date_lahir]',
            fakultas       = '$_POST[txt_fakultas]',
            jurusan        = '$_POST[txt_jurusan]', 
            ipk            = '$_POST[txt_ipk]'				  	
            WHERE nim = '$_POST[idn]'"; 
				
    mysqli_query($con, $sql);

	  db_disconnect($con);
  }
  if($act == "hapus") {
    $sql = "DELETE FROM tb_mahasiswa WHERE nim = $_GET[idm]";
    mysqli_query($con, $sql);
    db_disconnect($con);
  }
  header('location:tampil_data_mahasiswa3.php'); 
?>