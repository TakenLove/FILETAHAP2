<?php
 if(isset($_GET['Idd']))
 {
  include('../db.php');
  $Idd = $_GET['Idd'];
  
  $delete = mysqli_query($con,"DELETE FROM bukumanager WHERE Idd='$Idd'")or die(mysqli_error($con));

  if($delete){
  echo '<script>alert("success"); window.location ="../dashboard/listBuku.php"</script>';
  }else{
  echo '<script>alert("failed"); window.location ="../dashboard/listBuku.php"</script>';
  }
 }else{
  echo '<script>window.history.back()</script>';
 }
?>