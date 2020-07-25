<?php
 if(isset($_POST['stores']))
 {
    include('../db.php');
    
    $Idd = $_POST['Idd'];
    $Name = $_POST['Name'];     
    $gmail = $_POST['gmail'];        
    $JenisKelamin = $_POST['JenisKelamin'];
    $NomorHandphone = $_POST['NomorHandphone'];     
    $Pendidikan = $_POST['Pendidikan'];
    $IPK = $_POST['IPK'];
    $Cumlaude = $_POST['Cumlaude'];
    $Alamat = $_POST['Alamat'];
    $Kota = $_POST['Kota'];


    $update = mysqli_query($con,"UPDATE bukumanager SET Name='$Name', gmail='$gmail', JenisKelamin='$JenisKelamin', NomorHandphone='$NomorHandphone', Pendidikan='$Pendidikan', IPK='$IPK', Cumlaude='$Cumlaude', Alamat='$Alamat', Kota='$Kota' WHERE Idd='$Idd'") or die(mysqli_error($con));
	
	//jika query update sukses
	if($update){
		echo '<script>alert("success"); window.location ="../dashboard/listBuku.php"</script>';
	}else{
		echo '<script>alert("failed"); window.location ="../dashboard/editBukuDash.php"</script>';
	}
}else{	
	echo '<script>window.history.back()</script>';
}
?>