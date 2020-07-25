<?php 
if(isset($_POST['store'])){     
    include('../db.php'); 
 
    $name = $_POST['name'];     
    $email = $_POST['email'];     
    $tanggalLahir = $_POST['tanggalLahir'];     
    $nomorHandphone = $_POST['nomorHandphone'];     
    $jenisKelamin = $_POST['jenisKelamin'];

    $input = mysqli_query($con,"INSERT INTO customer(name, email, tanggalLahir, nomorHandphone, jenisKelamin)
    VALUES('$name','$email','$tanggalLahir','$nomorHandphone','$jenisKelamin')" )or die(mysqli_error($con));     
    if($input){         
        echo '<script>alert("success"); window.location = "../dashboard/listPeserta.php"</script>';     
    }else{         
        echo '<script>alert("failed"); window.location = "../dashboard/formpeserta.php"</script>';     
    } 
}else{     
    echo '<script>window.history.back()</script>'; 
} 
?>