<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nama=$_POST['nama'];
 $alamat=$_POST['alamat'];
 $nohp=$_POST['nohp'];

 $q=mysqli_query($con,"INSERT INTO `penjualan` (`nama`,`alamat`,`nohp`) VALUES ('$nama','$alamat','$nohp')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>