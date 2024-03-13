<?php
    session_start();
    include "functions/functions.php";
    require_once 'functions/connection.php';
?>
<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <title>Waste PD</title>
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sriracha">
        <meta name="description" content="Waste PD è una piccola azienda in fase di espansione. Per ora operante nella sola provincia di Padova, ha tutte le carte in regola per diffondersi in tutta Italia.">
        <meta name="author" content="Edoardo Gallo">
		<link rel="icon" type="image/png" href="images/icon.png">
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
                    document.getElementById("highlight").style.borderBottom=".4vh solid #145567";
                }
            };
        </script>
    </head>
    <body>
        <div class="cont">
            <div class="back col-12">
                <img src="images/background.jpg" alt="Sfondo">
            </div>
            <div class="col-12" id="menu">
                <h1>Waste PD</h1>
                <a href="index.php" id="highlight" class="menulinks" style="margin-left:25vw;color:#145567;border-bottom:2px solid #145567;">HOME</a>
                <a href="info.php" class="menulinks">INFORMAZIONI</a>
                <a href="contactus.php" class="menulinks">CONTATTACI</a>
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
                <?php 
                    if(!isset($_SESSION["codf"])){
                        echo    "<div class=\"boxl\">
                                    <svg class=\"sicon\" xmlns=\"http://www.w3.org/2000/svg\" enable-background=\"new 0 0 24 24\" height=\"40px\" viewBox=\"0 0 24 24\" width=\"40px\" fill=\"#145567\"><g><rect fill=\"none\" height=\"24\" width=\"24\"/></g><g><path d=\"M11,7L9.6,8.4l2.6,2.6H2v2h10.2l-2.6,2.6L11,17l5-5L11,7z M20,19h-8v2h8c1.1,0,2-0.9,2-2V5c0-1.1-0.9-2-2-2h-8v2h8V19z\"/></g></svg>
                                    <a href=\"login.php\">Accedi</a><br>
                                    <p class=\"sdesc\">Sei già registrato? Accedi per consultare, modificare tutti i tuoi dati e richiedere assistenza immediata.</p>
                                </div>
                                <div class=\"boxr\">
                                    <svg class=\"sicon\" style=\"margin-left:60px;\" xmlns=\"http://www.w3.org/2000/svg\" enable-background=\"new 0 0 24 24\" height=\"40px\" viewBox=\"0 0 24 24\" width=\"40px\" fill=\"#145567\"><g><rect fill=\"none\" height=\"24\" width=\"24\"/></g><g><path d=\"M20,9V6h-2v3h-3v2h3v3h2v-3h3V9H20z M9,12c2.21,0,4-1.79,4-4c0-2.21-1.79-4-4-4S5,5.79,5,8C5,10.21,6.79,12,9,12z M9,6 c1.1,0,2,0.9,2,2c0,1.1-0.9,2-2,2S7,9.1,7,8C7,6.9,7.9,6,9,6z M15.39,14.56C13.71,13.7,11.53,13,9,13c-2.53,0-4.71,0.7-6.39,1.56 C1.61,15.07,1,16.1,1,17.22V20h16v-2.78C17,16.1,16.39,15.07,15.39,14.56z M15,18H3v-0.78c0-0.38,0.2-0.72,0.52-0.88 C4.71,15.73,6.63,15,9,15c2.37,0,4.29,0.73,5.48,1.34C14.8,16.5,15,16.84,15,17.22V18z\"/></g></svg>
                                    <a href=\"signin.php\">Registrati</a><br>
                                    <p class=\"sdesc\" style=\"padding:0px 0px 0px 120px;\">Non sei ancora registrati? Registrati subito, scopri e sfrutta tutti i vantaggi di Waste PD.</p>
                                </div>";
                    }
                    else{
                        echo    "<div class=\"boxl\">
                                    <svg class=\"sicon\" xmlns=\"http://www.w3.org/2000/svg\" height=\"40px\" viewBox=\"0 0 24 24\" width=\"40px\" fill=\"#145567\"><path d=\"M0 0h24v24H0V0z\" fill=\"none\"/><path d=\"M19 4h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2zm-7 5h5v5h-5z\"/></svg>
                                    <a href=\"calendar.php\">Calendario</a><br>
                                    <p class=\"sdesc\">Consulta il caledario per i prossimi svuotamenti. I prossimi tre sono visibili anche dalla pagina principale.</p>
                                </div>
                                <div class=\"boxr\">
                                    <svg class=\"sicon\" style=\"margin-left:60px;\" xmlns=\"http://www.w3.org/2000/svg\" height=\"40px\" viewBox=\"0 0 24 24\" width=\"40px\" fill=\"#145567\"><path d=\"M0 0h24v24H0V0z\" fill=\"none\"/><path d=\"M12 6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2m0 10c2.7 0 5.8 1.29 6 2H6c.23-.72 3.31-2 6-2m0-12C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 10c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z\"/></svg>
                                    <a href=\"profile.php\">Profilo</a><br>
                                    <p class=\"sdesc\" style=\"padding:0px 0px 0px 120px;\">Consulta il tuo profilo. Modifica i tuoi dati e rimani informato sui pagamenti imminenti.</p>
                                </div>";
                    }
                ?>
                <svg class="bicon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="150px" viewBox="0 0 24 24" width="150px" fill="#e6c059"><rect fill="none" height="24" width="24"/><path d="M5.77,7.15L7.2,4.78l1.03-1.71c0.39-0.65,1.33-0.65,1.72,0l1.48,2.46l-1.23,2.06L9.2,9.21L5.77,7.15z M21.72,12.97 l-1.6-2.66l-3.46,2L18.87,16H20c0.76,0,1.45-0.43,1.79-1.11C21.93,14.61,22,14.31,22,14C22,13.64,21.9,13.29,21.72,12.97z M16,21 h1.5c0.76,0,1.45-0.43,1.79-1.11L20.74,17H16v-2l-4,4l4,4V21z M10,17H5.7l-0.84,1.41c-0.3,0.5-0.32,1.12-0.06,1.65l0,0 C5.08,20.63,5.67,21,6.32,21H10V17z M6.12,14.35l1.73,1.04L6.48,9.9L1,11.27l1.7,1.02l-0.41,0.69c-0.35,0.59-0.38,1.31-0.07,1.92 l1.63,3.26L6.12,14.35z M17.02,5.14l-1.3-2.17C15.35,2.37,14.7,2,14,2h-3.53l3.12,5.2l-1.72,1.03l5.49,1.37l1.37-5.49L17.02,5.14z"/></svg>
                <div class="boxl" style="margin-top:0px;">
                    <svg class="sicon" xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 0 24 24" width="40px" fill="#145567"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M11 7h2v2h-2zm0 4h2v6h-2zm1-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                    <a href="info.php">Informazioni</a><br>
                    <p class="sdesc">Non sei ancora convinto? L'azienda è nata per un preciso motivo. Scopri quale e tutte le ulteriori informazioni.</p>
                </div>
                <div class="boxr" style="margin-top:0px;">
                    <svg class="sicon" style="margin-left:60px;" xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 0 24 24" width="40px" fill="#145567"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6zm-2 0l-8 5-8-5h16zm0 12H4V8l8 5 8-5v10z"/></svg>
                    <a href="contactus.php">Contattaci</a><br>
                    <p class="sdesc" style="padding:0px 0px 0px 120px;">Problema? Contattaci immediatamente, anche senza esserti prima registrato, e chiariremo tutti i tuoi dubbi.</p>
                </div>
                <?php
                    if(!isset($_SESSION["codf"])){
                        echo    "<h2 style=\"margin-top:220px;\">Piani di abbonamento</h2>
                                <p class=\"bdesc\" id=\"subs\">
                                    Sono disponibili tre piani di abbonamento mesili. Ognuno di questi ha caratteristiche differenti come il numero di contenitori o la frequenza con cui vengono svuotati. 
                                    Se vuoi maggiori <a href=\"info.php\" class=\"bdesclink\">informazioni</a> visita la nostra pagina dedicata.
                                </p>
                                <h3 class=\"subtitle\">Base</h3>
                                <h3 class=\"subtitle\">Intermedio</h3>
                                <h3 class=\"subtitle\">Avanzato</h3>
                                <div class=\"subplan\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"24px\" viewBox=\"0 0 24 24\" width=\"24px\" fill=\"#145567\"><path d=\"M0 0h24v24H0V0z\" fill=\"none\"/><path d=\"M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z\"/></svg>
                                    <p class=\"subtext\">Contenitori: 3</p>
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" enable-background=\"new 0 0 24 24\" height=\"24px\" viewBox=\"0 0 24 24\" width=\"24px\" fill=\"#145567\"><rect fill=\"none\" height=\"24\" width=\"24\"/><path d=\"M5.77,7.15L7.2,4.78l1.03-1.71c0.39-0.65,1.33-0.65,1.72,0l1.48,2.46l-1.23,2.06L9.2,9.21L5.77,7.15z M21.72,12.97 l-1.6-2.66l-3.46,2L18.87,16H20c0.76,0,1.45-0.43,1.79-1.11C21.93,14.61,22,14.31,22,14C22,13.64,21.9,13.29,21.72,12.97z M16,21 h1.5c0.76,0,1.45-0.43,1.79-1.11L20.74,17H16v-2l-4,4l4,4V21z M10,17H5.7l-0.84,1.41c-0.3,0.5-0.32,1.12-0.06,1.65l0,0 C5.08,20.63,5.67,21,6.32,21H10V17z M6.12,14.35l1.73,1.04L6.48,9.9L1,11.27l1.7,1.02l-0.41,0.69c-0.35,0.59-0.38,1.31-0.07,1.92 l1.63,3.26L6.12,14.35z M17.02,5.14l-1.3-2.17C15.35,2.37,14.7,2,14,2h-3.53l3.12,5.2l-1.72,1.03l5.49,1.37l1.37-5.49L17.02,5.14z\"/></svg>
                                    <p class=\"subtext\">Frequenza: 1</p>
                                    <p class=\"subtext\">€7,98/mese</p>
                                    <p class=\"subtextmini\">(IVA inclusa)</p>
                                </div>
                                <div class=\"subplan\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"24px\" viewBox=\"0 0 24 24\" width=\"24px\" fill=\"#145567\"><path d=\"M0 0h24v24H0V0z\" fill=\"none\"/><path d=\"M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z\"/></svg>
                                    <p class=\"subtext\">Contenitori: 4</p>
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" enable-background=\"new 0 0 24 24\" height=\"24px\" viewBox=\"0 0 24 24\" width=\"24px\" fill=\"#145567\"><rect fill=\"none\" height=\"24\" width=\"24\"/><path d=\"M5.77,7.15L7.2,4.78l1.03-1.71c0.39-0.65,1.33-0.65,1.72,0l1.48,2.46l-1.23,2.06L9.2,9.21L5.77,7.15z M21.72,12.97 l-1.6-2.66l-3.46,2L18.87,16H20c0.76,0,1.45-0.43,1.79-1.11C21.93,14.61,22,14.31,22,14C22,13.64,21.9,13.29,21.72,12.97z M16,21 h1.5c0.76,0,1.45-0.43,1.79-1.11L20.74,17H16v-2l-4,4l4,4V21z M10,17H5.7l-0.84,1.41c-0.3,0.5-0.32,1.12-0.06,1.65l0,0 C5.08,20.63,5.67,21,6.32,21H10V17z M6.12,14.35l1.73,1.04L6.48,9.9L1,11.27l1.7,1.02l-0.41,0.69c-0.35,0.59-0.38,1.31-0.07,1.92 l1.63,3.26L6.12,14.35z M17.02,5.14l-1.3-2.17C15.35,2.37,14.7,2,14,2h-3.53l3.12,5.2l-1.72,1.03l5.49,1.37l1.37-5.49L17.02,5.14z\"/></svg>
                                    <p class=\"subtext\">Frequenza: 2</p>
                                    <p class=\"subtext\">€10,98/mese</p>
                                    <p class=\"subtextmini\">(IVA inclusa)</p>
                                </div>
                                <div class=\"subplan\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"24px\" viewBox=\"0 0 24 24\" width=\"24px\" fill=\"#145567\"><path d=\"M0 0h24v24H0V0z\" fill=\"none\"/><path d=\"M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z\"/></svg>
                                    <p class=\"subtext\">Contenitori: 5</p>
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" enable-background=\"new 0 0 24 24\" height=\"24px\" viewBox=\"0 0 24 24\" width=\"24px\" fill=\"#145567\"><rect fill=\"none\" height=\"24\" width=\"24\"/><path d=\"M5.77,7.15L7.2,4.78l1.03-1.71c0.39-0.65,1.33-0.65,1.72,0l1.48,2.46l-1.23,2.06L9.2,9.21L5.77,7.15z M21.72,12.97 l-1.6-2.66l-3.46,2L18.87,16H20c0.76,0,1.45-0.43,1.79-1.11C21.93,14.61,22,14.31,22,14C22,13.64,21.9,13.29,21.72,12.97z M16,21 h1.5c0.76,0,1.45-0.43,1.79-1.11L20.74,17H16v-2l-4,4l4,4V21z M10,17H5.7l-0.84,1.41c-0.3,0.5-0.32,1.12-0.06,1.65l0,0 C5.08,20.63,5.67,21,6.32,21H10V17z M6.12,14.35l1.73,1.04L6.48,9.9L1,11.27l1.7,1.02l-0.41,0.69c-0.35,0.59-0.38,1.31-0.07,1.92 l1.63,3.26L6.12,14.35z M17.02,5.14l-1.3-2.17C15.35,2.37,14.7,2,14,2h-3.53l3.12,5.2l-1.72,1.03l5.49,1.37l1.37-5.49L17.02,5.14z\"/></svg>
                                    <p class=\"subtext\">Frequenza: 3</p>
                                    <p class=\"subtext\">€15,98/mese</p>
                                    <p class=\"subtextmini\">(IVA inclusa)</p>
                                </div>";
                    }
                    /*else{
                        $nextdatas=getnextsvuot($conn,$_SESSION["subplan"]);
                        echo    "<h2 style=\"margin-top:220px;\">Prossimi svuotamenti</h2>
                                <p class=\"bdesc\" id=\"subs\">
                                    I prossimi tre svuotamenti dei contenitori a seconda del piano di frequenza da te scelto.<br> 
                                    Vedi il calendario completo e la legenda <a href=\"calendar.php\" class=\"bdesclink\">qui</a>.
                                </p>";
                        echo    "<div class=\"nextsvuot\">
                                    <h3>";
                                    echo gettitlenextsvuot($nextdatas[0]);
                                    echo "</h3>
                                    <p class=\"nextsvuottext\">Data: ".$nextdatas[0]."</p>
                                    <p class=\"nextsvuottext\">Frequenza: ".$_SESSION["subplan"]."</p><br>";
                                    $siglanextsvuot=getsiglanextsvuot($conn,$nextdatas[0],$_SESSION["subplan"]);
                                    if(count($siglanextsvuot)==1){
                                        echo "<div class=\"contstampindex ".strtolower($siglanextsvuot[0])."\" style=\"margin-left:60px;margin-top:-20px;\">".$siglanextsvuot[0]."</div>";
                                    }
                                    if(count($siglanextsvuot)==2){
                                        echo "<div class=\"contstampindex ".strtolower($siglanextsvuot[0])."\" style=\"margin-left:30px;margin-top:-20px;\">".$siglanextsvuot[0]."</div>";
                                        echo "<div class=\"contstampindex ".strtolower($siglanextsvuot[1])."\" style=\"margin-left:30px;margin-top:-20px;\">".$siglanextsvuot[1]."</div>";
                                    }
                        echo    "</div>";
                        echo    "<div class=\"nextsvuot\">
                                    <h3>";
                                    echo gettitlenextsvuot($nextdatas[1]);
                                    echo "</h3>
                                    <p class=\"nextsvuottext\">Data: ".$nextdatas[1]."</p>
                                    <p class=\"nextsvuottext\">Frequenza: ".$_SESSION["subplan"]."</p><br>";
                                    $siglanextsvuot2=getsiglanextsvuot($conn,$nextdatas[1],$_SESSION["subplan"]);
                                    if(count($siglanextsvuot2)==1){
                                        echo "<div class=\"contstampindex ".strtolower($siglanextsvuot2[0])."\" style=\"margin-left:60px;margin-top:-20px;\">".$siglanextsvuot2[0]."</div>";
                                    }
                                    if(count($siglanextsvuot2)==2){
                                        echo "<div class=\"contstampindex ".strtolower($siglanextsvuot2[0])."\" style=\"margin-left:30px;margin-top:-20px;\">".$siglanextsvuot2[0]."</div>";
                                        echo "<div class=\"contstampindex ".strtolower($siglanextsvuot2[1])."\" style=\"margin-left:30px;margin-top:-20px;\">".$siglanextsvuot2[1]."</div>";
                                    }
                        echo    "</div>";
                        echo    "<div class=\"nextsvuot\">
                                    <h3>";
                                    echo gettitlenextsvuot($nextdatas[2]);
                                    echo "</h3>
                                    <p class=\"nextsvuottext\">Data: ".$nextdatas[2]."</p>
                                    <p class=\"nextsvuottext\">Frequenza: ".$_SESSION["subplan"]."</p><br>";
                                    $siglanextsvuot3=getsiglanextsvuot($conn,$nextdatas[2],$_SESSION["subplan"]);
                                    if(count($siglanextsvuot3)==1){
                                        echo "<div class=\"contstampindex ".strtolower($siglanextsvuot3[0])."\" style=\"margin-left:60px;margin-top:-20px;\">".$siglanextsvuot3[0]."</div>";
                                    }
                                    if(count($siglanextsvuot3)==2){
                                        echo "<div class=\"contstampindex ".strtolower($siglanextsvuot3[0])."\" style=\"margin-left:30px;margin-top:-20px;\">".$siglanextsvuot3[0]."</div>";
                                        echo "<div class=\"contstampindex ".strtolower($siglanextsvuot3[1])."\" style=\"margin-left:30px;margin-top:-20px;\">".$siglanextsvuot3[1]."</div>";
                                    }
                        echo    "</div>";
                    }*/
                ?>
            </div>
            <div class="footer col-12">
                <svg class="biconfoot" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="20vh" viewBox="0 0 24 24" width="20vh" fill="#fff"><rect fill="none" height="24" width="24"/><path d="M5.77,7.15L7.2,4.78l1.03-1.71c0.39-0.65,1.33-0.65,1.72,0l1.48,2.46l-1.23,2.06L9.2,9.21L5.77,7.15z M21.72,12.97 l-1.6-2.66l-3.46,2L18.87,16H20c0.76,0,1.45-0.43,1.79-1.11C21.93,14.61,22,14.31,22,14C22,13.64,21.9,13.29,21.72,12.97z M16,21 h1.5c0.76,0,1.45-0.43,1.79-1.11L20.74,17H16v-2l-4,4l4,4V21z M10,17H5.7l-0.84,1.41c-0.3,0.5-0.32,1.12-0.06,1.65l0,0 C5.08,20.63,5.67,21,6.32,21H10V17z M6.12,14.35l1.73,1.04L6.48,9.9L1,11.27l1.7,1.02l-0.41,0.69c-0.35,0.59-0.38,1.31-0.07,1.92 l1.63,3.26L6.12,14.35z M17.02,5.14l-1.3-2.17C15.35,2.37,14.7,2,14,2h-3.53l3.12,5.2l-1.72,1.03l5.49,1.37l1.37-5.49L17.02,5.14z"/></svg>
                <div class="footinfo">
                    <h2>Waste PD</h2>
                    <p>La gestione dei rifiuti<br> come non l'avevi mai immaginata.<br>&copy; Copyright <?=date("Y")?></p>
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
    </body>
</html>