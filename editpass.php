<?php
    session_start();
    include "functions/functions.php";
    require_once 'functions/connection.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Accedi</title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sriracha">
        <meta charset="UTF-8">
		<link rel="icon" type="image/png" href="images/icon.png">
        <script src="https://kit.fontawesome.com/7a07f992c3.js" crossorigin="anonymous"></script>
        <script>
            function showhidepass(){
                var oldpass=document.getElementById("oldpass");
                var newpass=document.getElementById("newpass");
                var confpass=document.getElementById("confpass");
                if(oldpass.type==="password"){
                    oldpass.type="text";
                    newpass.type="text";
                    confpass.type="text";
                }
                else{
                    oldpass.type="password";
                    newpass.type="password";
                    confpass.type="password";
                }
            }
            function empty(variable){
                if(variable===""){
                    return 1;
                }
                return 0;
            }
            function conf(){
                var oldpass = formlogin.oldpass.value;
                var newpass = formlogin.newpass.value;
                var confpass = formlogin.confpass.value;
                if(empty(oldpass)) {formlogin.oldpass.style.border="1px solid red";}
                if(empty(newpass)) {formlogin.newpass.style.border="1px solid red";}
                if(empty(confpass)) {formlogin.confpass.style.border="1px solid red";}
                if(empty(oldpass) || empty(newpass) || empty(confpass)){
                    document.getElementById("warning").innerHTML="* Compila tutti i campi selezionati";
                    return false;
                }
                if(newpass!==confpass){
                    document.getElementById("warning").innerHTML="* Le password non coincidono";
                    return false;
                }
            }
        </script>
    </head>
    <body>
        <div class="cont">
            <div class="col-12" id="menuls">
                <h1>Waste PD</h1>
                <a href="index.php" class="menulinks" style="margin-left:25vw;">HOME</a>
                <a href="info.php" class="menulinks">INFORMAZIONI</a>
                <a href="contactus.php" class="menulinks">CONTATTACI</a>
                <a href="calendar.php" class="menulinks">CALENDARIO</a>
                <a href="profile.php" class="menulinks"><?=strtoupper($_SESSION["firstname"]);?></a>
            </div>
            <div class="contents" style="background: #b5d6cb;">
                <div class="inputs" style="padding:.1px;">
                    <form action="<?=$_SERVER["PHP_SELF"];?>" method="post" onsubmit="return conf()" name="formlogin">
                        <label for="oldpass" class="anaglabel" style="margin-top:7vh;text-align: center;color:#deac21;display:block;"><b>Vecchia Password</b></label>
                        <input type="password" placeholder="Vacchia Password" name="oldpass" id="oldpass" class="logininput">
                        <label for="newpass" class="anaglabel" style="margin-top:5vh;text-align: center;color:#deac21;display:block;"><b>Password</b></label>
                        <input type="password" placeholder="Nuova Password" name="newpass" id="newpass" class="logininput"><i id="eyeicon" class="fas fa-eye" onclick="showhidepass();" style="margin-left:1vw;cursor:pointer;color:#145567;"></i><br>
                        <label for="confpass" class="anaglabel" style="margin-top:5vh;text-align: center;color:#deac21;display:block;"><b>Password</b></label>
                        <input type="password" placeholder="Conferma Password" name="confpass" id="confpass" class="logininput">
                        <input type="submit" class="btnlogin" value="Accedi" name="invio" style="margin-top:8vh;">
                        <p id="warning"></p>
                    </form>
                </div>
            </div>
        </div>
        <?php
            if(isset($_POST["invio"])){
                $oldpass= cleanstr($_POST["oldpass"]);
                $newpass= cleanstr($_POST["newpass"]);
                $passhash= getpasshash($conn, $_SESSION["email"]);
                if(password_verify($oldpass, $passhash)){
                    changepass($conn, $_SESSION["email"], password_hash($newpass, PASSWORD_DEFAULT));
                }
                else{
                    echo "<script>document.getElementById(\"warning\").innerHTML=\"* La vecchia password non coincide\";</script>";
                }
            }
        ?>
    </body>
</html>