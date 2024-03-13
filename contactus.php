<?php
    session_start();
    include "functions/functions.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Contattaci</title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sriracha">
        <meta charset="UTF-8">
		<link rel="icon" type="image/png" href="images/icon.png">
        <meta name="description" content="Problema? Contattaci immediatamente, anche senza esserti prima registrato, e chiariremo tutti i tuoi dubbi.">
        <meta name="author" content="Edoardo Gallo">
        <script src="https://kit.fontawesome.com/7a07f992c3.js" crossorigin="anonymous"></script>
        <script>
            window.onscroll = function() {
                console.log(window.pageYOffset);
                var menu = document.getElementById('menu');
                if ( window.pageYOffset > 1 ) {
                    menu.classList.add("scrollmenu");
                    document.getElementById("highlight").style.color="#e6c059";
                    document.getElementById("highlight").style.borderBottom="0";
                } else {
                    menu.classList.remove("scrollmenu");
                    document.getElementById("highlight").style.color="#145567";
                    document.getElementById("highlight").style.borderBottom="2px solid #145567";
                }
            };
        </script>
        <script>
            function empty(variable){
                if(variable===""){
                    return 1;
                }
                return 0;
            }
            function send_email(){
                var email = formemail.email.value;
                var lastname = formemail.lastname.value;
                var firstname = formemail.firstname.value;
                var address = formemail.address.value;
                var object = formemail.object.value;
                var text = formemail.text.value;
                if(empty(email)) formemail.email.style.border="1px solid red";
                if(empty(lastname)) formemail.lastname.style.border="1px solid red";
                if(empty(firstname)) formemail.firstname.style.border="1px solid red";
                if(empty(address)) formemail.address.style.border="1px solid red";
                if(empty(object)) formemail.object.style.border="1px solid red";
                if(empty(text)) formemail.text.style.border="1px solid red";
                if(empty(email) || empty(lastname) || empty(firstname) || empty(address) || empty(object) || empty(text)){
                    document.getElementById("warning").innerHTML="* Compila tutti i campi selezionati";
                    return false;
                }
            }
        </script>
    </head>
    <body>
        <div class="cont">
            <div class="back col-12">
                <img src="images/background.jpg" alt="Sfondo"/>
            </div>
            <div class="col-12" id="menu">
                <h1>Waste PD</h1>
                <a href="index.php" class="menulinks" style="margin-left:25vw;">HOME</a>
                <a href="info.php" class="menulinks">INFORMAZIONI</a>
                <a href="contactus.php" id="highlight" class="menulinks" style="color:#145567;border-bottom:2px solid #145567;">CONTATTACI</a>
                <?php
                    if(!isset($_SESSION["codf"])){
                        echo "<a href=\"login.php\" class=\"menulinks\">ACCEDI</a><a href=\"signin.php\" class=\"menulinks\">REGISTRATI</a>";
                    }
                    else{
                        echo "<a href=\"calendar.php\" class=\"menulinks\">CALENDARIO</a><a href=\"profile.php\" class=\"menulinks\">".strtoupper($_SESSION["firstname"])."</a>";
                    }
                ?>
            </div>
            <div class="content">
                <h2 style="margin-top:50px;">Gestisci i tuoi consumi in pochi secondi</h2>
                <p class="bdesc">
                    Waste PD è una piccola azienda in fase di espansione. Per ora operante nella sola provincia di 
                    Padova, ha tutte le carte in regola per diffondersi in tutta Italia.
                    Accedi o registrati per gestire tutti i tuoi rifiuti. Richiedi i contenitori direttamente dal sito, 
                    e approfitta della nostra assistenza. Nessun costo di installazione e per un qualsiasi problema, contattaci 
                    direttamente dal sito. <br>La gestione dei rifiuti come non l'avevi mai immaginata.
                </p>
                <h2 style="margin-top:50px;">Contattaci</h2>
                <form action="<?=$_SERVER["PHP_SELF"];?>" method="post" class="contactform" name="formemail" onsubmit="return send_email()">
                    <input type="email" placeholder="Email" name="email" value="<?php if(isset($_SESSION["codf"])){echo $_SESSION["email"];}?>">
                    <input type="text" placeholder="Cognome" name="lastname" value="<?php if(isset($_SESSION["codf"])){echo $_SESSION["lastname"];}?>">
                    <input type="text" placeholder="Nome" name="firstname" value="<?php if(isset($_SESSION["codf"])){echo $_SESSION["firstname"];}?>">
                    <input type="text" placeholder="Indirizzo" name="address" value="Via <?php if(isset($_SESSION["codf"])){echo $_SESSION["via"]." ".$_SESSION["civ"];}?>">
                    <div class="menuformcontact">
                        <input style="margin-top:30px;" type="text" placeholder="Oggetto" name="object">
                        <br><input style="margin-top:11px;" type="reset" Value="Cancella" class="btnformcontact" id="reset">
                        <br><input style="margin-top:11px;" type="submit" value="Invia" name="invio" class="btnformcontact" id="submit">
                    </div>
                    <textarea rows="5" cols="73" placeholder="(Massimo 200 caratteri) Scrivi il tuo testo qui..." name="text"></textarea>
                </form>
                <p id="warning"></p>
            </div>
            <div class="footer col-12" style="margin-top:8.6vh;">
                <svg class="biconfoot" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="20vh" viewBox="0 0 24 24" width="20vh" fill="#fff"><rect fill="none" height="24" width="24"/><path d="M5.77,7.15L7.2,4.78l1.03-1.71c0.39-0.65,1.33-0.65,1.72,0l1.48,2.46l-1.23,2.06L9.2,9.21L5.77,7.15z M21.72,12.97 l-1.6-2.66l-3.46,2L18.87,16H20c0.76,0,1.45-0.43,1.79-1.11C21.93,14.61,22,14.31,22,14C22,13.64,21.9,13.29,21.72,12.97z M16,21 h1.5c0.76,0,1.45-0.43,1.79-1.11L20.74,17H16v-2l-4,4l4,4V21z M10,17H5.7l-0.84,1.41c-0.3,0.5-0.32,1.12-0.06,1.65l0,0 C5.08,20.63,5.67,21,6.32,21H10V17z M6.12,14.35l1.73,1.04L6.48,9.9L1,11.27l1.7,1.02l-0.41,0.69c-0.35,0.59-0.38,1.31-0.07,1.92 l1.63,3.26L6.12,14.35z M17.02,5.14l-1.3-2.17C15.35,2.37,14.7,2,14,2h-3.53l3.12,5.2l-1.72,1.03l5.49,1.37l1.37-5.49L17.02,5.14z"/></svg>
                <div class="footinfo">
                    <h2>Waste PD</h2>
                    <p>La gestione dei rifiuti<br> come non l'avevi mai immaginata.<br>&copy Copyright <?=date("Y")?></p>
                </div>
                <div class="footlinks">
                    <a href="info.php">Privacy</a>
                    <a href="info.php">Cookie Policy</a>
                    <a href="info.php">Qualità</a>
                    <a href="contactus.php">Contattaci</a><br><br>
                    <p style="text-align: center;margin-left:3vw;">Contatto diretto: wastepadova@gmail.com</p>
                </div>
            </div>
        </div>
        <?php
            if(isset($_POST["invio"])){
                $to="wastepadova@gmail.com";
                $email= cleanstr($_POST["email"]);
                $subject=cleanstr($_POST["object"]);
                $lastname=cleanstr($_POST["lastname"]);
                $firstname=cleanstr($_POST["firstname"]);
                $address=cleanstr($_POST["address"]);
                $text=cleanstr($_POST["text"]);
                $msg= wordwrap($text,200);
                $txt="Email: $email\nCognome: $lastname\nNome: $firstname\nIndirizzo: $address\nTesto: \n$msg";
                mail($to,$subject,$txt);
            }
        ?>
    </body>
</html>