<?php
    /*session_start();
    $to="wastepadova@gmail.com";
    $email= $_SESSION["email"];
    $subject="Richiesta Eliminazione Account";
    $lastname=$_SESSION["lastname"];
    $firstname=$_SESSION["firstname"];
    $address="Via ".$_SESSION["via"]." ".$_SESSION["civ"];
    $paese="Paese/Città ".$_SESSION["com"].", ".$_SESSION["pro"];
    $text="Richiesta eliminazione account";
    $msg= wordwrap($text,200);
    $txt="Email: $email\nCognome: $lastname\nNome: $firstname\nIndirizzo: $address\nPaese/Città: $paese\nTesto: \n$msg";
    mail($to,$subject,$txt);*/
    header("Location:../profile.php");