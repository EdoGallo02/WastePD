<?php
    $host="localhost";
    $user="root";
    $pass="";
    $db="my_wastepd";
    $conn=mysqli_connect($host,$user,$pass,$db);
    if(!$conn){
        $err= mysqli_connect_errno();
        die("<script>location.href='error.php?err=$err'</script>");
    }