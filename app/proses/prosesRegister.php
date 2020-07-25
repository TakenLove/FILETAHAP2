<?php
if(isset($_POST['store'])){
    include('../db.php');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $input = mysqli_query($con,"INSERT INTO users(name,email,password) VALUES('$name','$email','$password')")or die(mysqli_error($con));
    if($input){
        echo '<script>alert("succes"); window.location = "../login_page.php"</script>';
    }else{
        echo'<script>alert("succes"); window.location = "../register_page.php"</script>';
    }
}else{
    echo '<script>window.history.back()</script>';
}
?>