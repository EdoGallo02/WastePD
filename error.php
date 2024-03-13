<?php
    if(!isset($_GET["err"])){
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
                <h1>Errore</h1>
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
                        if(isset($_GET["err"])){
                            if($_GET["err"]=="Utente già registrato"){
                                echo "<p class='errtext'>
                                        Errore: ".$_GET["err"]."
                                        <br>La mail o il codice fiscale sono già stati usati per accedere a questo sito
                                        <br>Effettua il login <a href='login.php' class='errlink'>qui</a>
                                    </p>";
                            }
                            else if($_GET["err"]=="Utente non ancora registrato"){
                                echo "<p class='errtext'>
                                        Errore: ".$_GET["err"]."
                                        <br>L'account selezionato non è ancora stato registrato
                                        <br>Registrati <a href='signin.php' class='errlink'>qui</a>
                                    </p>";
                            }
                            else if($_GET["err"]=="Account non ancora confermato"){
                                echo "<p class='errtext'>
                                        Errore: ".$_GET["err"]."
                                        <br>L'account selezionato non è ancora stato confermato
                                        <br>Controlla le tue email per confermare l'utente e procedere
                                    </p>";
                            }
                            else if($_GET["err"]=="Password Errata"){
                                echo "<p class='errtext'>
                                        Errore: ".$_GET["err"]."
                                        <br>Torna alla pagina del profilo <a href='profile.php' class='errlink'>qui</a>
                                    </p>";
                            }
                            else{
                                echo "<p class='errtext'>
                                        Errore: ".$_GET["err"]."
                                        <br>C'è stato un problema con i nostri database. Riprovare più tardi o consultare l'errore in Internet. 
                                        Se il problema persiste contattaci qui
                                    </p>";
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>