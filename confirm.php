<?php
    session_start();
    include "functions/functions.php";
    require_once 'functions/connection.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Conferma Account</title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sriracha">
        <meta charset="UTF-8">
		<link rel="icon" type="image/png" href="images/icon.png">
        <script src="https://kit.fontawesome.com/7a07f992c3.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="cont">
            <div class="col-12" id="menuls">
                <h1>Waste PD</h1>
                <a href="index.php" id="highlight" class="menulinks" style="margin-left:25vw;color:#145567;">HOME</a>
                <a href="info.php" class="menulinks">INFORMAZIONI</a>
                <a href="contactus.php" class="menulinks">CONTATTACI</a>
                <a href="login.php" class="menulinks">ACCEDI</a>
                <a href="signin.php" class="menulinks">REGISTRATI</a>
            </div>
            <div class="contents" style="background: #b5d6cb;">
                <div class="error col-6">
                    <svg class="erricon" xmlns="http://www.w3.org/2000/svg" height="4vh" viewBox="0 0 24 24" width="4vh" fill="#fff"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
                    <?php
						if(!isset($_GET["cod"])){
							$to=$_GET["email"];
							echo    "<p class='errtext'>
										Conferma il tuo account
										<br>Ti abbiamo inviato una email a $to. <br>Accedi dal link contenuto nella mail per confermare il tuo account
									</p>";
							$codu=getcodf($conn,$to);
							$subject="Registrazione quasi completata";
							$txt="La tua registrazione è quasi completata. Conferma il tuo account accedendo a questo link:\nhttps://wastepd.altervista.org/confirm.php?cod=$codu";
							mail($to,$subject,$txt);
						}
						else{
							confirmuser($conn,$_GET["cod"]);
							echo    "<p class='errtext'>
										Account confermato
										<br>Il tuo account è stato confermato con successo. <br>Accedi <a href='login.php' class='errlink'>qui</a> per sfruttare tutti i tuoi vantaggi
									</p>";
						}
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>