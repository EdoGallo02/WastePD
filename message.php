<?php
    session_start();
    if(!isset($_GET["msg"])){
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Waste PD</title>
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
                <a href="calendar.php" class="menulinks">CALENDARIO</a>
                <a href="logout.php" class="menulinks" style="color:#e6c059;border-bottom: 0;"><?=strtoupper($_SESSION["firstname"]);?></a>
            </div>
            <div class="contents" style="background: #b5d6cb;">
                <div class="error col-6">
                    <svg class="erricon" xmlns="http://www.w3.org/2000/svg" height="4vh" viewBox="0 0 24 24" width="4vh" fill="#fff"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
                    <?php
                        if(isset($_GET["msg"])){
                            if($_GET["msg"]=="Password Modificata"){
                                echo "<p class='errtext'>
                                        Messaggio: ".$_GET["msg"]."
                                        <br>Password modificata correttamente
                                        <br>Torna alla pagina del profilo <a href='profile.php' class='errlink'>qui</a>
                                    </p>";
                            }
                            else if($_GET["msg"]=="Dati Modificati"){
                                echo "<p class='errtext'>
                                        Messaggio: ".$_GET["msg"]."
                                        <br>Dati modificati correttamente
                                        <br>Torna alla pagina del profilo <a href='profile.php' class='errlink'>qui</a>
                                    </p>";
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>