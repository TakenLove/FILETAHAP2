<?php 
if(isset($_POST['store'])){     
    include('../db.php'); 
 
    $Name = $_POST['Name'];     
    $gmail = $_POST['gmail'];        
    $JenisKelamin = $_POST['JenisKelamin'];
    $NomorHandphone = $_POST['NomorHandphone'];     
    $Pendidikan = $_POST['Pendidikan'];
    $IPK = $_POST['IPK'];
    $Cumlaude = $_POST['Cumlaude'];
    $Alamat = $_POST['Alamat'];
    $Kota = $_POST['Kota'];

    $input = mysqli_query($con,"INSERT INTO bukumanager(Name, gmail, JenisKelamin, NomorHandphone, Pendidikan, IPK, Cumlaude, Alamat, Kota)
    VALUES('$Name','$gmail','$JenisKelamin','$NomorHandphone','$Pendidikan','$IPK','$Cumlaude','$Alamat','$Kota')" )or die(mysqli_error($con));
    if($input){         
        echo '<script>alert("success"); window.location = "../dashboard/listBuku.php"</script>';     
    }else{         
        echo '<script>alert("failed"); window.location = "../dashboard/BukuManager.php"</script>';     
    } 
}else{     
    echo '<script>window.history.back()</script>'; 
} 
?>