<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];    
 $nama=$_POST['nama'];
 $alamat=$_POST['alamat'];
 $nohp=$_POST['nohp'];
 $q=mysqli_query($con,"UPDATE `penjualan` SET `nama`='$nama',`alamat`='$alamat',`nohp`='$nohp' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>