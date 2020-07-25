<?php
    # $dbServer = "localhost";
    # $username = "root";
    # $password = "";
    # $dbName = "GD4_9523_C";
    
    $dbServer = getenv('HOSTNAME');
    $username = getenv('USERNAME');
    $password = getenv('PASSWORD');
    $dbName = getenv('DBNAME');

    $con = mysqli_connect($dbServer, $username, $password, $dbName);
    if(mysqli_connect_errno())
    {
        echo"failed to connect to MySQL : ". mysqli_connect_error();
    }
?>
