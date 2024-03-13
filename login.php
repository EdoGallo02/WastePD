<?php
    session_start();
    if(isset($_SESSION["codf"])){
        die("<script>location.href='index.php'</script>");
    }
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
        <meta name="description" content="Accedi o registrati per gestire tutti i tuoi rifiuti.">
        <meta name="author" content="Edoardo Gallo">
        <script src="https://kit.fontawesome.com/7a07f992c3.js" crossorigin="anonymous"></script>
        <script>
            function showhidepass(){
                var pass=document.getElementById("pass");
                if(pass.type==="password"){
                    pass.type="text";
                }
                else{
                    pass.type="password";
                }
            }
            function empty(variable){
                if(variable===""){
                    return 1;
                }
                return 0;
            }
            function login(){
                var email = formlogin.email.value;
                var pass = formlogin.pass.value;
                if(empty(email)) {formlogin.email.style.border="1px solid red";}
                if(empty(pass)) {formlogin.pass.style.border="1px solid red";}
                if(empty(email) || empty(pass)){
                    document.getElementById("warning").innerHTML="* Compila tutti i campi selezionati";
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
                <a href="login.php" class="menulinks" style="color:#e6c059;border-bottom: 0;">ACCEDI</a>
                <a href="signin.php" class="menulinks">REGISTRATI</a>
            </div>
            <div class="contents" style="background: #b5d6cb;">
                <div class="inputs" style="padding:.1px;">
                    <form action="<?=$_SERVER["PHP_SELF"];?>" method="post" onsubmit="return login()" name="formlogin">
                        <label for="email" class="anaglabel" style="margin-top:7vh;text-align: center;color:#deac21;display:block;"><b>Email</b></label>
                        <input type="email" placeholder="Email" name="email" id="email" class="logininput" value="<?php if(isset($_POST["email"])){echo $_POST["email"];}?>">
                        <label for="pass" class="anaglabel" style="margin-top:5vh;text-align: center;color:#deac21;display:block;"><b>Password</b></label>
                        <input type="password" placeholder="Password" name="pass" id="pass" class="logininput"><i id="eyeicon" class="fas fa-eye" onclick="showhidepass();" style="margin-left:1vw;cursor:pointer;color:#145567;"></i><br>
                        <p class="logintext">Password dimenticata? <a href="editpassword.php">Recuperala</a></p>
                        <input type="submit" class="btnlogin" value="Accedi" name="invio">
                        <p class="logintext">Non ti sei ancora registrato? <a href="signin.php">Registrati qui</a></p>
                        <p id="warning"></p>
                    </form>
                </div>
            </div>
        </div>
        <?php
            if(isset($_POST["invio"])){
                if(checkifconfirmed($conn,$_POST["email"])){
                    $email= cleanstr($_POST["email"]);
                    $pass= cleanstr($_POST["pass"]);
                    checkuserlogin($conn, $email);
                    $passhash= getpasshash($conn, $email);
                    if(password_verify($pass, $passhash)){
						$confirmed=checkifconfirmed($conn,$email);
						if(!confirmed){
							$err= "Account non ancora confermato";
							die("<script>location.href='error.php?err=$err'</script>");
						}
                        insertfatt($conn, $email);
                        getlogininfo($conn,$email);
                    }
                    else{
                        echo "<script>document.getElementById(\"warning\").innerHTML=\"* Email o password non coincidono\";</script>";
                    }
                }
                else{
                    $err= "Account non ancora confermato";
                    die("<script>location.href='error.php?err=$err'</script>");
                }
            }
        ?>
    </body>
</html>