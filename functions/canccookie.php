<?php
    if(isset($_COOKIE["REMEMBERME"])){
        setcookie("REMEMBERME", "", time() - 3600);
    }
    header("Location:../profile.php");