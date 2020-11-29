<?php
 $server	= "localhost";
 $username	= "root";
 $password	= "";
 $database	= "dtb_mahasiswa1";

 $con=mysqli_connect($server, $username, $password, $database);
  if(!$con){
  	die("Tidak dapat membuat koneksi dengan server database!");
  } 
  else {
  	echo("Koneksi berhasil");
  }

  function db_disconnect($con) {
  	mysqli_close($con);
  }
?>