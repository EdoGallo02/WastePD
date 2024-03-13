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
        <title>Registrati</title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sriracha">
        <meta charset="UTF-8">
		<link rel="icon" type="image/png" href="images/icon.png">
        <meta name="description" content="Accedi o registrati per gestire tutti i tuoi rifiuti.">
        <meta name="author" content="Edoardo Gallo">
        <script src="https://kit.fontawesome.com/7a07f992c3.js" crossorigin="anonymous"></script>
        <script>
            function changepage(p,lb,l){
                var newp=document.getElementById(p);
                var newlb=document.getElementById(lb);
                var newl=document.getElementById(l);
                var links = document.getElementsByClassName("signlink");
                var linksb = document.getElementsByClassName("signsteps");
                var pages = document.getElementsByClassName("signpages");
                for(i = 0;i < links.length;i++){
                    links[i].style.color="#145567";
                    linksb[i].style.background="#145567";
                    pages[i].style.display="none";
                }
                newlb.style.background="#e6c059";
                newl.style.color="#e6c059";
                newp.style.display="block";
            }
            function showhidepass(){
                var pass=document.getElementById("pass");
                var confpass=document.getElementById("confpass");
                if(pass.type==="password"){
                    pass.type="text";
                    confpass.type="text";
                }
                else{
                    pass.type="password";
                    confpass.type="password";
                }
            }
            function empty(variable){
                if(variable===""){
                    return 1;
                }
                return 0;
            }
            function signin(){
                var codf = formsignin.codf.value;
                var lastname = formsignin.lastname.value;
                var firstname = formsignin.firstname.value;
                var reg = formsignin.reg.value;
                var pro = formsignin.pro.value;
                var com = formsignin.com.value;
                var via = formsignin.via.value;
                var civ = formsignin.civ.value;
                var cap = formsignin.cap.value;
                var subplans = formsignin.subplans.value;
                var cardnum = formsignin.cardnum.value;
                var cardscad = formsignin.civ.value;
                var cvv = formsignin.cvv.value;
                var email = formsignin.email.value;
                var confemail = formsignin.confemail.value;
                var pass = formsignin.pass.value;
                var confpass = formsignin.confpass.value;
                if(empty(codf)) {formsignin.codf.style.border="1px solid red";}
                if(empty(lastname)) {formsignin.lastname.style.border="1px solid red";}
                if(empty(firstname)) {formsignin.firstname.style.border="1px solid red";}
                if(empty(reg)) {formsignin.reg.style.border="1px solid red";}
                if(empty(pro)) {formsignin.pro.style.border="1px solid red";}
                if(empty(com)) {formsignin.com.style.border="1px solid red";}
                if(empty(via)) {formsignin.via.style.border="1px solid red";}
                if(empty(civ)) {formsignin.civ.style.border="1px solid red";}
                if(empty(cap)) {formsignin.cap.style.border="1px solid red";}
                if(empty(cardnum)) {formsignin.cardnum.style.border="1px solid red";}
                if(empty(cardscad)) {formsignin.cardscad.style.border="1px solid red";}
                if(empty(cvv)) {formsignin.cvv.style.border="1px solid red";}
                if(empty(email)) {formsignin.email.style.border="1px solid red";}
                if(empty(confemail)) {formsignin.confemail.style.border="1px solid red";}
                if(empty(pass)) {formsignin.pass.style.border="1px solid red";}
                if(empty(confpass)) {formsignin.confpass.style.border="1px solid red";}
                if(empty(codf) || empty(lastname) || empty(firstname) || empty(reg) || empty(pro) || empty(com) || empty(via) || empty(civ) || empty(cap) || empty(subplans) || empty(cardnum) || empty(cardscad) || empty(cvv) || empty(email) || empty(confemail) || empty(pass) || empty(confpass)){
                    document.getElementById("warning").innerHTML="* Compila tutti i campi selezionati";
                    return false;
                }
                if((codf.length<16) || (cardnum.length<16) || (cvv.length<3)){
                    document.getElementById("warning").innerHTML="* Alcuni dati potrebbero non essere completi";
                    return false;
                }
                if((pass!==confpass) || (email!==confemail)){
                    document.getElementById("warning").innerHTML="* Email o password non coincidono";
                    return false;
                }
            }
        </script>
    </head>
    <body>
        <div class="cont">
            <div class="col-12" id="menuls">
                <h1>Waste PD</h1>
                <div class="signsteps" id="lbd" onclick="changepage('pd','lbd','ld')" style="margin-right:7vw;">
                    <p class="nums"><svg style="margin-top:1.2vh;" xmlns="http://www.w3.org/2000/svg" height="3.5vh" viewBox="0 0 24 24" width="3.5vh" fill="#fff"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg></p>
                    <p class="signlink" id="ld" style="margin-top:-.7vh;">Conferma</p>
                </div>
                <div class="signsteps" id="lb3" onclick="changepage('p3','lb3','l3')">
                    <p class="nums">3</p>
                    <p class="signlink" id="l3">Dati Login</p>
                </div>
                <div class="signsteps" id="lb2" onclick="changepage('p2','lb2','l2')">
                    <p class="nums">2</p>
                    <p class="signlink" id="l2">Abbonamenti</p>
                </div>
                <div class="signsteps" style="background:#e6c059;" id="lb1" onclick="changepage('p1','lb1','l1')">
                    <p class="nums">1</p>
                    <p class="signlink" id="l1" style="color:#e6c059;text-decoration: none;">Dati Anagrafici</p>
                </div>
            </div>
            <div class="contents" style="background: #b5d6cb;">
                <form method="post" action="<?=$_SERVER["PHP_SELF"];?>" class="signform" onsubmit="return signin()" name="formsignin">
                    <div class="signpages" id="p1">
                        <div class="inputs">
                            <label for="codf" class="anaglabel">Codice Fiscale</label>
                            <label for="lastname" class="anaglabel">Cognome</label>
                            <label for="firstname" class="anaglabel" style="margin-right:0;">Nome</label><br>
                            <input type="text" maxlength="16" placeholder="Codice Fiscale" name="codf" id="codf" class="signinput">
                            <input type="text" id="lastname" placeholder="Cognome" name="lastname" class="signinput">
                            <input type="text" id="firstname" placeholder="Nome" name="firstname" class="signinput" style="margin-right:0;"><br>
                            <label for="reg" class="anaglabel">Regione</label>
                            <label for="pro" class="anaglabel">Provincia</label>
                            <label for="com" class="anaglabel" style="margin-right:0;">Comune</label><br>
                            <input type="text" style="background: #fff;" name="reg" id="reg" class="signinput" value="Veneto">
                            <input type="text"  style="background: #fff;"id="pro" name="pro" class="signinput" value="Padova">
                            <select id="com" name="com" class="signinput" style="margin-right:0;">
                                <option></option>
                                <option>Abano Terme</option>
                                <option>Agna</option>
                                <option>Albignasego</option>
                                <option>Anguillara Veneta</option>
                                <option>Arquà Petrarca</option>
                                <option>Arre</option>
                                <option>Arzergrande</option>
                                <option>Bagnoli di Sopra</option>
                                <option>Baone</option>
                                <option>Barbona</option>
                                <option>Battaglia Terme</option>
                                <option>Boara Pisani</option>
                                <option>Borgo Veneto</option>
                                <option>Borgoricco</option>
                                <option>Bovolenta</option>
                                <option>Brugine</option>
                                <option>Cadoneghe</option>
                                <option>Campo San Martino</option>
                                <option>Campodarsego</option>
                                <option>Campodoro</option>
                                <option>Camposampiero</option>
                                <option>Candiana</option>
                                <option>Carceri</option>
                                <option>Carmignano di Brenta</option>
                                <option>Cartura</option>
                                <option>Casale di Scodosia</option>
                                <option>Casalserugo</option>
                                <option>Castelbaldo</option>
                                <option>Cervarese Santa Croce</option>
                                <option>Cinto Euganeo</option>
                                <option>Cittadella</option>
                                <option>Codevigo</option>
                                <option>Conselve</option>
                                <option>Correzzola</option>
                                <option>Curtarolo</option>
                                <option>Due Carrare</option>
                                <option>Este</option>
                                <option>Fontaniva</option>
                                <option>Galliera Veneta</option>
                                <option>Galzignano Terme</option>
                                <option>Gazzo</option>
                                <option>Grantorto</option>
                                <option>Granze</option>
                                <option>Legnaro</option>
                                <option>Limena</option>
                                <option>Loreggia</option>
                                <option>Lozzo Atestino</option>
                                <option>Maserà di Padova</option>
                                <option>Masi</option>
                                <option>Massanzago</option>
                                <option>Megliadino San Vitale</option>
                                <option>Merlara</option>
                                <option>Mestrino</option>
                                <option>Monselice</option>
                                <option>Montagnana</option>
                                <option>Montegrotto Terme</option>
                                <option>Noventa Padovana</option>
                                <option>Ospedaletto Euganeo</option>
                                <option>Padova</option>
                                <option>Pernumia</option>
                                <option>Piacenza d'Adige</option>
                                <option>Piazzola sul Brenta</option>
                                <option>Piombino Dese</option>
                                <option>Piove di Sacco</option>
                                <option>Polverara</option>
                                <option>Ponso</option>
                                <option>Ponte San Nicolò</option>
                                <option>Pontelongo</option>
                                <option>Pozzonovo</option>
                                <option>Rovolon</option>
                                <option>Rubano</option>
                                <option>Saccolongo</option>
                                <option>San Giorgio delle Pertiche</option>
                                <option>San Giorgio in Bosco</option>
                                <option>San Martino di Lupari</option>
                                <option>San Pietro in Gu</option>
                                <option>San Pietro Viminario</option>
                                <option>Sant'Angelo di Piove di S.</option>
                                <option>Sant'Elena</option>
                                <option>Sant'Urbano</option>
                                <option>Santa Giustina in Colle</option>
                                <option>Saonara</option>
                                <option>Selvazzano Dentro</option>
                                <option>Solesino</option>
                                <option>Stanghella</option>
                                <option>Teolo</option>
                                <option>Terrassa Padovana</option>
                                <option>Tombolo</option>
                                <option>Torreglia</option>
                                <option>Trebaseleghe</option>
                                <option>Tribano</option>
                                <option>Urbana</option>
                                <option>Veggiano</option>
                                <option>Vescovana</option>
                                <option>Vighizzolo d'Este</option>
                                <option>Vigodarzere</option>
                                <option>Vigonza</option>
                                <option>Villa del Conte</option>
                                <option>Villa Estense</option>
                                <option>Villafranca Padovana</option>
                                <option>Villanova di Camposampiero</option>
                                <option>Vo'</option>
                            </select>
                            <label for="via" class="anaglabel">Via / Viale</label>
                            <label for="civ" class="anaglabel">Civico</label>
                            <label for="cap" class="anaglabel" style="margin-right:0;">CAP</label><br>
                            <input type="text" placeholder="Via / Viale" name="via" id="via" class="signinput">
                            <input type="text" id="civ" placeholder="Civico" name="civ" class="signinput">
                            <input type="text" id="cap" placeholder="CAP" name="cap" class="signinput" maxlength="5" style="margin-right:0;"><br>
                        </div>
                        <input type="button" class="btnleft" value="<< Home" onclick="location.href='index.php'">
                        <input type="button" class="btnright" value="Continua >>" onclick="changepage('p2','lb2','l2')">
                    </div>
                    <div class="signpages" id="p2" style="display: none;">
                        <div class="inputs">
                            <div class="plans" style="margin-left:2.8vw;">
                                <input type="radio" name="subplans" id="base" value="Base" style="margin-left:5vh;"><label class="subtitles" for="base"><b>Base</b></label><br>
                                <div class="subplans">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#145567"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z"/></svg>
                                    <p class="subtext">Contenitori: 3</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#145567"><rect fill="none" height="24" width="24"/><path d="M5.77,7.15L7.2,4.78l1.03-1.71c0.39-0.65,1.33-0.65,1.72,0l1.48,2.46l-1.23,2.06L9.2,9.21L5.77,7.15z M21.72,12.97 l-1.6-2.66l-3.46,2L18.87,16H20c0.76,0,1.45-0.43,1.79-1.11C21.93,14.61,22,14.31,22,14C22,13.64,21.9,13.29,21.72,12.97z M16,21 h1.5c0.76,0,1.45-0.43,1.79-1.11L20.74,17H16v-2l-4,4l4,4V21z M10,17H5.7l-0.84,1.41c-0.3,0.5-0.32,1.12-0.06,1.65l0,0 C5.08,20.63,5.67,21,6.32,21H10V17z M6.12,14.35l1.73,1.04L6.48,9.9L1,11.27l1.7,1.02l-0.41,0.69c-0.35,0.59-0.38,1.31-0.07,1.92 l1.63,3.26L6.12,14.35z M17.02,5.14l-1.3-2.17C15.35,2.37,14.7,2,14,2h-3.53l3.12,5.2l-1.72,1.03l5.49,1.37l1.37-5.49L17.02,5.14z"/></svg>
                                    <p class="subtext">Frequenza: 1</p>
                                    <p class="subtext">€7,98/mese</p>
                                    <p class="subtextmini">(IVA inclusa)</p>
                                </div>
                            </div>
                            <div class="plans" style="margin-left:3.8vw;">
                                <input type="radio" name="subplans" id="inter" value="Intermedio" style="margin-left:2.5vh;"><label class="subtitles" for="inter"><b>Intermedio</b></label><br>
                                <div class="subplans">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#145567"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z"/></svg>
                                    <p class="subtext">Contenitori: 4</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#145567"><rect fill="none" height="24" width="24"/><path d="M5.77,7.15L7.2,4.78l1.03-1.71c0.39-0.65,1.33-0.65,1.72,0l1.48,2.46l-1.23,2.06L9.2,9.21L5.77,7.15z M21.72,12.97 l-1.6-2.66l-3.46,2L18.87,16H20c0.76,0,1.45-0.43,1.79-1.11C21.93,14.61,22,14.31,22,14C22,13.64,21.9,13.29,21.72,12.97z M16,21 h1.5c0.76,0,1.45-0.43,1.79-1.11L20.74,17H16v-2l-4,4l4,4V21z M10,17H5.7l-0.84,1.41c-0.3,0.5-0.32,1.12-0.06,1.65l0,0 C5.08,20.63,5.67,21,6.32,21H10V17z M6.12,14.35l1.73,1.04L6.48,9.9L1,11.27l1.7,1.02l-0.41,0.69c-0.35,0.59-0.38,1.31-0.07,1.92 l1.63,3.26L6.12,14.35z M17.02,5.14l-1.3-2.17C15.35,2.37,14.7,2,14,2h-3.53l3.12,5.2l-1.72,1.03l5.49,1.37l1.37-5.49L17.02,5.14z"/></svg>
                                    <p class="subtext">Frequenza: 2</p>
                                    <p class="subtext">€10,98/mese</p>
                                    <p class="subtextmini">(IVA inclusa)</p>
                                </div>
                            </div>
                            <div class="plans" style="margin-right:0;margin-left:3.8vw;">
                                <input type="radio" name="subplans" id="avanzato" value="Avanzato" style="margin-left:3vh;"><label class="subtitles" for="avanzato"><b>Avanzato</b></label><br>
                                <div class="subplans">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#145567"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z"/></svg>
                                    <p class="subtext">Contenitori: 5</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#145567"><rect fill="none" height="24" width="24"/><path d="M5.77,7.15L7.2,4.78l1.03-1.71c0.39-0.65,1.33-0.65,1.72,0l1.48,2.46l-1.23,2.06L9.2,9.21L5.77,7.15z M21.72,12.97 l-1.6-2.66l-3.46,2L18.87,16H20c0.76,0,1.45-0.43,1.79-1.11C21.93,14.61,22,14.31,22,14C22,13.64,21.9,13.29,21.72,12.97z M16,21 h1.5c0.76,0,1.45-0.43,1.79-1.11L20.74,17H16v-2l-4,4l4,4V21z M10,17H5.7l-0.84,1.41c-0.3,0.5-0.32,1.12-0.06,1.65l0,0 C5.08,20.63,5.67,21,6.32,21H10V17z M6.12,14.35l1.73,1.04L6.48,9.9L1,11.27l1.7,1.02l-0.41,0.69c-0.35,0.59-0.38,1.31-0.07,1.92 l1.63,3.26L6.12,14.35z M17.02,5.14l-1.3-2.17C15.35,2.37,14.7,2,14,2h-3.53l3.12,5.2l-1.72,1.03l5.49,1.37l1.37-5.49L17.02,5.14z"/></svg>
                                    <p class="subtext">Frequenza: 3</p>
                                    <p class="subtext">€15,98/mese</p>
                                    <p class="subtextmini">(IVA inclusa)</p>
                                </div>
                            </div>
                            <label for="cardnum" class="anaglabel">Numero Carta</label>
                            <label for="cardscad" class="anaglabel">Scadenza Carta</label>
                            <label for="cvv" class="anaglabel" style="margin-right:0;">CVV</label><br>
                            <input type="text" maxlength="16" placeholder="Numero Carta" name="cardnum" id="carnum" class="signinput">
                            <input type="month" id="cardscad" name="cardscad" class="signinput" min="<?=date("Y-m");?>">
                            <input type="text" maxlength="3" id="cvv" placeholder="CVV" name="cvv" class="signinput" style="margin-right:0;"><br>
                        </div>
                        <input type="button" class="btnleft" value="<< Indietro" onclick="changepage('p1','lb1','l1')">
                        <input type="button" class="btnright" value="Continua >>" onclick="changepage('p3','lb3','l3')">
                    </div>
                    <div class="signpages" id="p3" style="display: none;">
                        <div class="inputs" style="width:39vw;">
                            <label for="email" class="anaglabel" style="margin-left:2vw;">Email</label>
                            <label for="confemail" class="anaglabel" style="margin-right:0;">Conferma Email</label><br>
                            <input type="email" placeholder="Email" name="email" id="email" class="signinput" style="margin-left:2vw;">
                            <input type="email" id="confemail" placeholder="Conferma Email" name="confemail" class="signinput" style="margin-right:0;"><br>
                            <label for="pass" class="anaglabel" style="margin-left:2vw;">Password</label>
                            <label for="confpass" class="anaglabel" style="margin-right:0;">Conferma Password</label><br>
                            <input type="password" placeholder="Password" name="pass" id="pass" class="signinput" style="margin-left:2vw;">
                            <input type="password" id="confpass" placeholder="Conferma Password" name="confpass" class="signinput" style="margin-right:0;float:left;">
                            <i id="eyeicon" class="fas fa-eye" onclick="showhidepass();" style="margin-top:16.5vh;margin-left:1vw;cursor:pointer;color:#145567;"></i><br>
                        </div>
                        <input type="button" class="btnleft" value="<< Indietro" onclick="changepage('p2','lb2','l2')">
                        <input type="button" class="btnright" value="Continua >>" onclick="changepage('pd','lbd','ld')">
                    </div>
                    <div class="signpages" id="pd" style="display: none;">
                        <div class="inputs">
                            <input type="checkbox" name="privacycookies" id="privacy" class="checkboxes" required>
                            <label for="privacy" class="subtitles" style="color:#145567;">Accetto i termini sulla privacy di Waste PD</label><br>
                            <input type="checkbox" name="privacycookies" id="cookies" class="checkboxes" required>
                            <label for="cookies" class="subtitles" style="color:#145567;">Acconsento all'uso di cookies per una migliore esperienza</label><br>
                            <input type="checkbox" name="privacycookies" id="quality" class="checkboxes" required>
                            <label for="quality" class="subtitles" style="color:#145567;">Ho letto l'informativa su privacy e qualità del sito</label><br>
                            <input type="checkbox" name="privacycookies" id="emailinfo" class="checkboxes" required>
                            <label for="emailinfo" class="subtitles" style="color:#145567;">Acconsento all'invio di email da parte di Waste PD per la conferma dell'account</label><br>
                        </div>
                        <p id="warning"></p>
                        <input type="button" class="btnleft" value="<< Indietro" onclick="changepage('p3','lb3','l3')">
                        <input type="submit" class="btnright" value="Registrati >>" name="invio">
                    </div>
                </form>
            </div>
        </div>
        <?php
            if(isset($_POST["invio"])){
                $pass= cleanstr($_POST["pass"]);
                $codf= cleanstr($_POST["codf"]);
                $lastname= cleanstr($_POST["lastname"]);
                $firstname= cleanstr($_POST["firstname"]);
                $com= cleanstr($_POST["com"]);
                $via= cleanstr($_POST["via"]);
                $civ= cleanstr($_POST["civ"]);
                $cap= cleanstr($_POST["cap"]);
                $subplan= cleanstr($_POST["subplans"]);
                $cardnum= cleanstr($_POST["cardnum"]);
                $cardscad= cleanstr($_POST["cardscad"]);
                $cvv= cleanstr($_POST["cvv"]);
                $email= cleanstr($_POST["email"]);
                $passhash= password_hash($pass, PASSWORD_DEFAULT);
                checkuser($conn, $codf, $email);
                adduser($conn, $codf, $lastname, $firstname, $com,$via,$civ,$cap,$subplan,$cardnum,$cardscad,$cvv,$email,$passhash);
            }
        ?>
    </body>
</html>