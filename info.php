<?php
    session_start();
    include "functions/functions.php";
    require_once 'functions/connection.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Informazioni</title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sriracha">
        <meta charset="UTF-8">
		<link rel="icon" type="image/png" href="images/icon.png">
        <meta name="description" content="Non sei ancora convinto? L'azienda è nata per un preciso motivo. Scopri quale e tutte le ulteriori informazioni.">
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
    </head>
    <body>
        <div class="cont">
            <div class="back col-12">
                <img src="images/background.jpg" alt="Sfondo"/>
            </div>
            <div class="col-12" id="menu">
                <h1>Waste PD</h1>
                <a href="index.php"class="menulinks" style="margin-left:25vw;">HOME</a>
                <a href="info.php" class="menulinks" id="highlight" style="color:#145567;border-bottom:2px solid #145567;">INFORMAZIONI</a>
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
                <h2 style="margin-top:50px;">Piani di abbonamento</h2>
                <p class="bdesc" id="subs">
                    Sono disponibili tre piani di abbonamento mesili. Ognuno di questi ha caratteristiche differenti come il numero di contenitori o la frequenza con cui vengono svuotati. 
                    Se vuoi maggiori <a href="info.php" class="bdesclink">informazioni</a> visita la nostra pagina dedicata.
                </p>
                <h3 class="subtitle">Base</h3>
                <h3 class="subtitle">Intermedio</h3>
                <h3 class="subtitle">Avanzato</h3>
                <div class="subplan">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#145567"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z"/></svg>
                    <p class="subtext">Contenitori: 3</p>
                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#145567"><rect fill="none" height="24" width="24"/><path d="M5.77,7.15L7.2,4.78l1.03-1.71c0.39-0.65,1.33-0.65,1.72,0l1.48,2.46l-1.23,2.06L9.2,9.21L5.77,7.15z M21.72,12.97 l-1.6-2.66l-3.46,2L18.87,16H20c0.76,0,1.45-0.43,1.79-1.11C21.93,14.61,22,14.31,22,14C22,13.64,21.9,13.29,21.72,12.97z M16,21 h1.5c0.76,0,1.45-0.43,1.79-1.11L20.74,17H16v-2l-4,4l4,4V21z M10,17H5.7l-0.84,1.41c-0.3,0.5-0.32,1.12-0.06,1.65l0,0 C5.08,20.63,5.67,21,6.32,21H10V17z M6.12,14.35l1.73,1.04L6.48,9.9L1,11.27l1.7,1.02l-0.41,0.69c-0.35,0.59-0.38,1.31-0.07,1.92 l1.63,3.26L6.12,14.35z M17.02,5.14l-1.3-2.17C15.35,2.37,14.7,2,14,2h-3.53l3.12,5.2l-1.72,1.03l5.49,1.37l1.37-5.49L17.02,5.14z"/></svg>
                    <p class="subtext">Frequenza: 1</p>
                    <p class="subtext">€7,98/mese</p>
                    <p class="subtextmini">(IVA inclusa)</p>
                </div>
                <div class="subplan">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#145567"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z"/></svg>
                    <p class="subtext">Contenitori: 4</p>
                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#145567"><rect fill="none" height="24" width="24"/><path d="M5.77,7.15L7.2,4.78l1.03-1.71c0.39-0.65,1.33-0.65,1.72,0l1.48,2.46l-1.23,2.06L9.2,9.21L5.77,7.15z M21.72,12.97 l-1.6-2.66l-3.46,2L18.87,16H20c0.76,0,1.45-0.43,1.79-1.11C21.93,14.61,22,14.31,22,14C22,13.64,21.9,13.29,21.72,12.97z M16,21 h1.5c0.76,0,1.45-0.43,1.79-1.11L20.74,17H16v-2l-4,4l4,4V21z M10,17H5.7l-0.84,1.41c-0.3,0.5-0.32,1.12-0.06,1.65l0,0 C5.08,20.63,5.67,21,6.32,21H10V17z M6.12,14.35l1.73,1.04L6.48,9.9L1,11.27l1.7,1.02l-0.41,0.69c-0.35,0.59-0.38,1.31-0.07,1.92 l1.63,3.26L6.12,14.35z M17.02,5.14l-1.3-2.17C15.35,2.37,14.7,2,14,2h-3.53l3.12,5.2l-1.72,1.03l5.49,1.37l1.37-5.49L17.02,5.14z"/></svg>
                    <p class="subtext">Frequenza: 2</p>
                    <p class="subtext">€10,98/mese</p>
                    <p class="subtextmini">(IVA inclusa)</p>
                </div>
                <div class="subplan">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#145567"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z"/></svg>
                    <p class="subtext">Contenitori: 5</p>
                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#145567"><rect fill="none" height="24" width="24"/><path d="M5.77,7.15L7.2,4.78l1.03-1.71c0.39-0.65,1.33-0.65,1.72,0l1.48,2.46l-1.23,2.06L9.2,9.21L5.77,7.15z M21.72,12.97 l-1.6-2.66l-3.46,2L18.87,16H20c0.76,0,1.45-0.43,1.79-1.11C21.93,14.61,22,14.31,22,14C22,13.64,21.9,13.29,21.72,12.97z M16,21 h1.5c0.76,0,1.45-0.43,1.79-1.11L20.74,17H16v-2l-4,4l4,4V21z M10,17H5.7l-0.84,1.41c-0.3,0.5-0.32,1.12-0.06,1.65l0,0 C5.08,20.63,5.67,21,6.32,21H10V17z M6.12,14.35l1.73,1.04L6.48,9.9L1,11.27l1.7,1.02l-0.41,0.69c-0.35,0.59-0.38,1.31-0.07,1.92 l1.63,3.26L6.12,14.35z M17.02,5.14l-1.3-2.17C15.35,2.37,14.7,2,14,2h-3.53l3.12,5.2l-1.72,1.03l5.49,1.37l1.37-5.49L17.02,5.14z"/></svg>
                    <p class="subtext">Frequenza: 3</p>
                    <p class="subtext">€15,98/mese</p>
                    <p class="subtextmini">(IVA inclusa)</p>
                </div>
                <p class="subinfo" style="margin-top:220px;">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#145567"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z"/></svg><br>
                    Il numero di contenitori disponibili variano a seconda dell'offerta selezionata. 
                    Il massimo numero di contenitori ottenibile è 5 (Plastica e metalli, Carta, Umido, Secco, Vetro).
                    Nel piano Intermedio il contenitore Vetro non è incluso. Nel piano Base anche il contenitore Secco non è incluso.
                    <br><br><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#145567"><rect fill="none" height="24" width="24"/><path d="M5.77,7.15L7.2,4.78l1.03-1.71c0.39-0.65,1.33-0.65,1.72,0l1.48,2.46l-1.23,2.06L9.2,9.21L5.77,7.15z M21.72,12.97 l-1.6-2.66l-3.46,2L18.87,16H20c0.76,0,1.45-0.43,1.79-1.11C21.93,14.61,22,14.31,22,14C22,13.64,21.9,13.29,21.72,12.97z M16,21 h1.5c0.76,0,1.45-0.43,1.79-1.11L20.74,17H16v-2l-4,4l4,4V21z M10,17H5.7l-0.84,1.41c-0.3,0.5-0.32,1.12-0.06,1.65l0,0 C5.08,20.63,5.67,21,6.32,21H10V17z M6.12,14.35l1.73,1.04L6.48,9.9L1,11.27l1.7,1.02l-0.41,0.69c-0.35,0.59-0.38,1.31-0.07,1.92 l1.63,3.26L6.12,14.35z M17.02,5.14l-1.3-2.17C15.35,2.37,14.7,2,14,2h-3.53l3.12,5.2l-1.72,1.03l5.49,1.37l1.37-5.49L17.02,5.14z"/></svg><br>
                    La frequenza della raccolta dei rifuiti varia a seconda del piano scelto. I contenitori Plastica e metalli e Carta 
                    verranno svuotati ogni due settimane, indipendentemente dal piano scelto. Il contenitore Vetro sarà svuotato ogni 
                    due settimane (solo per il piano di abbonamento Avanzato). Il livello uno consente la raccolta 
                    di tutti contenitori disponibili una volta ogni due settimane. Con il livello intermedio lo svuotamento del contenitore Umido 
                    verrà effettuato ogni settimana. Con il terzo livello di frequenza, anche il Secco verrà svuotato settimanalmente. Se sei già registrato, 
                    consulta il <a href ="calendar.php">calendario</a> per avere maggiori informazioni.
                    <br><br><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#145567"><g><rect fill="none" height="24" width="24"/></g><g><g/><path d="M15,18.5c-2.51,0-4.68-1.42-5.76-3.5H15l1-2H8.58c-0.05-0.33-0.08-0.66-0.08-1s0.03-0.67,0.08-1H15l1-2H9.24 C10.32,6.92,12.5,5.5,15,5.5c1.61,0,3.09,0.59,4.23,1.57L21,5.3C19.41,3.87,17.3,3,15,3c-3.92,0-7.24,2.51-8.48,6H3l-1,2h4.06 C6.02,11.33,6,11.66,6,12s0.02,0.67,0.06,1H3l-1,2h4.52c1.24,3.49,4.56,6,8.48,6c2.31,0,4.41-0.87,6-2.3l-1.78-1.77 C18.09,17.91,16.62,18.5,15,18.5z"/></g></svg><br>
                    La tariffa è mensile e anch'essa cambia a senconda del piano selezionato. La fattura per le fruizione del 
                    servizio viene inviata ogni mese, nel giorno in cui ci si è iscritti a <a href ="index.php">Waste PD</a>. 
                    Nella fattura comparirà l'importo con e senza IVA ma tutti i prezzi che verranno visualizzati nel sito 
                    hanno l'IVA inclusa.
                </p>
                <h2 style="margin-top:50px;">Privacy</h2>
                <p class="bdesc">
                    Tutti i dati personali che vengono richiesti da Waste PD sono obbligatori e in mancanza di essi non sarà possibile
                    registrarsi al sito e usufruire del servizio. I dettagli completi sui dati raccolti sono disponibili al termine
                    di questa sezione. Tutte le informazioni sono utilizzate al solo scopo di gestire l'utente e il servizio di raccolta. 
                    <br>L'eventuale utilizzo di cookie, la cui informativa è presente in questa pagina, ha la sola finalità di 
                    fornire il servizio richiesto dall'utente. L'utente si assume, inoltre, la responsabilità dei dati personali ottenuti 
                    da terzi e libera il titolare da qualsiasi responsabilità. Gli utenti che dovessero avere dubbi su quali informazioni
                    siano obbligatorie o volessero ottenere maggiori dettagli sui dati gestiti da Waste PD, sono incoraggiati a 
                    contattarci direttamente inviando una email a wastepd@altervista.org.<br>I dati gestiti esclusivamente e in modo sicuro da Waste PD 
                    sono:
                    <ul class="privacylist">
                        <li>Dati anagrafici</li>
                        <li>Email</li>
                        <li>Telefono / Cellulare</li>
                        <li>Indirizzo</li>
                    </ul>
                </p>
                <h2 style="margin-top:50px;">Cookie policy</h2>
                <p class="bdesc">
                    I cookie sono porzioni di codice installati all'interno del browser che agevolano l'utilizzo del sito 
                    all'utente finale. Per l'utilizzo di alcuni cookie è necessario il consenso esplicito dell'utente. 
                    Quando l'installazione avviene sulla base del consenso, quest'ultimo può essere liberamente revocato 
                    (Profilo -> Privacy e Sicurezza -> Cancella dati di navigazione). <br>Waste PD utilizza Cookie detti "tecnici", 
                    per svolgere attività strettamente necessarie a garantire il funzionamento o la fornitura del servizio.
                </p>
                <h2 style="margin-top:50px;">Qualità e Assistenza</h2>
                <p class="bdesc" id="qualityinfo">
                    Tutti i nostri prodotti sono di qualità e revisionati prima di essere consegnati all'utente finale. 
                    <br>Se desideri ottere maggiori informazioni sul rapporto qualità/prezzo o richiedere assistenza immediata 
                    (disponibile in tutti e tre i piani di abbonamento), non esitare a contattarci tramite la nostra 
                    <a href="contactus.php" class="bdesclink">pagina dedicata</a> o all'indirizzo mail wastepadova@gmail.com.
                </p>
            </div>
            <div class="footer col-12" style="margin-top:12vh;">
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
    </body>
</html>