<?php
 if(isset($_POST['store']))
 {
    include('../db.php');
    
    $id = $_POST['id'];
    $name = $_POST['name'];     
    $email = $_POST['email'];     
    $nomorHandphone = $_POST['nomorHandphone'];     
    $tanggalLahir = $_POST['tanggalLahir'];
    $jenisKelamin = $_POST['jenisKelamin'];

 $update = mysqli_query($con,"UPDATE customer SET name='$name', email='$email', nomorHandphone='$nomorHandphone', jenisKelamin='$jenisKelamin', tanggalLahir='$tanggalLahir' WHERE id='$id'") or die(mysqli_error($con));
	
	//jika query update sukses
	if($update){
		echo '<script>alert("success"); window.location ="../dashboard/listPeserta.php"</script>';
	}else{
		echo '<script>alert("failed"); window.location ="../dashboard/editData.php"</script>';
	}

}else{	
	echo '<script>window.history.back()</script>';
}
?>