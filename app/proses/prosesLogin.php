<?php
if(isset($_POST['login'])){
    include('../db.php');

    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = mysqli_query($con,"SELECT * FROM users WHERE email = '$email' Limit 1") or die(mysqli_error($con));

    if(mysqli_num_rows($query)==0){
        echo '<script>alert("Email not found"); window.location = "../login_page.php"</script>';
    }else{
        $user = mysqli_fetch_assoc($query);
        if(password_verify($password,$user['Password'])){
            session_start();
            $_SESSION['isLogin'] = true;
            $_SESSION['user'] = $user;
            echo'<script>alert("succes"); window.location = "../dashboard"</script>';
        }else{
            echo'<script>alert("Email or password invalid!"); window.location = "../login.page.pbp"</script>';
        }
    }
}else{
    echo '<script>window.history.back()</script>';
}
?>