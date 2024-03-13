<?php
    session_start();
    if(!isset($_SESSION["codf"])){
        die("<script>location.href='index.php'</script>");
    }
    include "functions/functions.php";
    require_once 'functions/connection.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Profilo</title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sriracha">
        <meta charset="UTF-8">
		<link rel="icon" type="image/png" href="images/icon.png">
        <script src="https://kit.fontawesome.com/7a07f992c3.js" crossorigin="anonymous"></script>
        <script>
            function changepage(p){
                var pages = document.getElementsByClassName("profilecont");
                for(i = 0;i < pages.length;i++){
                    pages[i].style.display="none";
                }
                document.getElementById(p).style.display="block";
            }
            function confirmcanc(){
                if(confirm("Sei sicuro di voler eliminare in tuo account?")){
                    location.href="functions/requestcancacc.php";
                }
            }
            function showprevfatt(){
                var prevfatt = document.getElementsByClassName("fatt");
                for(i = 0;i < prevfatt.length;i++){
                    prevfatt[i].style.display="block";
                }
                document.getElementById("btnfattall").style.display="none";
                document.getElementById("pay").style.display="none";
            }
        </script>
    </head>
    <body>
        <div class="cont">
            <div class="col-12" id="menuls">
                <h1>Waste PD</h1>
                <a href="index.php" id="highlight" class="menulinks" style="margin-left:25vw;">HOME</a>
                <a href="info.php" class="menulinks">INFORMAZIONI</a>
                <a href="contactus.php" class="menulinks">CONTATTACI</a>
                <a href="calendar.php" class="menulinks">CALENDARIO</a>
                <a href="profile.php" class="menulinks" style="color:#e6c059;border-bottom: 0;"><?=strtoupper($_SESSION["firstname"]);?></a>
            </div>
            <div class="contents" style="background: #b5d6cb;">
                <div class="profilebigcont">
                    <div class="profilecont col-8" id="profile" style="display:block;">
                        <div class="profilenav">
                            <div class="profilelinks" style="border-radius: 2vh 0vh 0vh 0vh;">
                                <div class="profileicons"><svg xmlns="http://www.w3.org/2000/svg" height="5.5vh" viewBox="0 0 24 24" width="5.5vh" fill="#e6c059"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2m0 10c2.7 0 5.8 1.29 6 2H6c.23-.72 3.31-2 6-2m0-12C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 10c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg></div>
                                <div class="profiletext" style="color:#e6c059;">Profilo</div>
                            </div>
                            <div class="profilelinks" onclick="changepage('calendar');">
                                <div class="profileicons"><svg xmlns="http://www.w3.org/2000/svg" height="5.5vh" viewBox="0 0 24 24" width="5.5vh" fill="#fff"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2zm-7 5h5v5h-5z"/></svg></div>
                                <div class="profiletext">Calendario</div>
                            </div>
                            <div class="profilelinks" onclick="changepage('invoices');">
                                <div class="profileicons"><svg xmlns="http://www.w3.org/2000/svg" height="5.5vh" viewBox="0 0 24 24" width="5.5vh" fill="#fff"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15 18.5c-2.51 0-4.68-1.42-5.76-3.5H15v-2H8.58c-.05-.33-.08-.66-.08-1s.03-.67.08-1H15V9H9.24C10.32 6.92 12.5 5.5 15 5.5c1.61 0 3.09.59 4.23 1.57L21 5.3C19.41 3.87 17.3 3 15 3c-3.92 0-7.24 2.51-8.48 6H3v2h3.06c-.04.33-.06.66-.06 1s.02.67.06 1H3v2h3.52c1.24 3.49 4.56 6 8.48 6 2.31 0 4.41-.87 6-2.3l-1.78-1.77c-1.13.98-2.6 1.57-4.22 1.57z"/></svg></div>
                                <div class="profiletext">Fatture e Pagamenti</div>
                            </div>
                            <div class="profilelinks" onclick="changepage('privacy');">
                                <div class="profileicons"><svg xmlns="http://www.w3.org/2000/svg" height="5.5vh" viewBox="0 0 24 24" width="5.5vh" fill="#fff"><g fill="none"><path d="M0 0h24v24H0V0z"/><path d="M0 0h24v24H0V0z" opacity=".87"/></g><path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zM9 6c0-1.66 1.34-3 3-3s3 1.34 3 3v2H9V6zm9 14H6V10h12v10zm-6-3c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z"/></svg></div>
                                <div class="profiletext">Privacy e Sicurezza</div>
                            </div>
                            <div class="profilelinks" onclick="changepage('morecontacts');">
                                <div class="profileicons"><svg xmlns="http://www.w3.org/2000/svg" height="5.5vh" viewBox="0 0 24 24" width="5.5vh" fill="#fff"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg></div>
                                <div class="profiletext">Ulteriori contatti</div>
                            </div>
                            <div class="profilelinks" style="border-bottom:.5vh solid #145567;border-radius: 0vh 0vh 0vh 2vh;" onclick="changepage('logout');">
                                <div class="profileicons"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="5.5vh" viewBox="0 0 24 24" width="5.5vh" fill="#fff"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><path d="M17,8l-1.41,1.41L17.17,11H9v2h8.17l-1.58,1.58L17,16l4-4L17,8z M5,5h7V3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h7v-2H5V5z"/></g></svg></div>
                                <div class="profiletext">Logout</div>
                            </div>
                        </div>
                        <div class="profilebody">
                            <h2>Profilo</h2>
                            <p>Nominativo: <?php echo $_SESSION["lastname"]." ".$_SESSION["firstname"];?></p>
                            <p>Codice Fiscale: <?php echo $_SESSION["codf"];?></p>
                            <p>Indirizzo: <?php echo "Via ".$_SESSION["via"]." ".$_SESSION["civ"];?></p>
                            <p>Paese/Città: <?php echo $_SESSION["com"].", ".$_SESSION["pro"]." (".$_SESSION["cap"].")";?></p>
                            <p>Email: <?php echo $_SESSION["email"];?></p>
                            <div class="btnedit" id="myBtn">MODIFICA</div>
                        </div>
                    </div>
                    <div class="profilecont col-8" id="calendar" style="display: none;">
                        <div class="profilenav">
                            <div class="profilelinks" style="border-radius: 2vh 0vh 0vh 0vh;" onclick="changepage('profile');">
                                <div class="profileicons"><svg xmlns="http://www.w3.org/2000/svg" height="5.5vh" viewBox="0 0 24 24" width="5.5vh" fill="#fff"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2m0 10c2.7 0 5.8 1.29 6 2H6c.23-.72 3.31-2 6-2m0-12C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 10c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg></div>
                                <div class="profiletext">Profilo</div>
                            </div>
                            <div class="profilelinks">
                                <div class="profileicons"><svg xmlns="http://www.w3.org/2000/svg" height="5.5vh" viewBox="0 0 24 24" width="5.5vh" fill="#e6c059"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2zm-7 5h5v5h-5z"/></svg></div>
                                <div class="profiletext" style="color:#e6c059;">Calendario</div>
                            </div>
                            <div class="profilelinks" onclick="changepage('invoices');">
                                <div class="profileicons"><svg xmlns="http://www.w3.org/2000/svg" height="5.5vh" viewBox="0 0 24 24" width="5.5vh" fill="#fff"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15 18.5c-2.51 0-4.68-1.42-5.76-3.5H15v-2H8.58c-.05-.33-.08-.66-.08-1s.03-.67.08-1H15V9H9.24C10.32 6.92 12.5 5.5 15 5.5c1.61 0 3.09.59 4.23 1.57L21 5.3C19.41 3.87 17.3 3 15 3c-3.92 0-7.24 2.51-8.48 6H3v2h3.06c-.04.33-.06.66-.06 1s.02.67.06 1H3v2h3.52c1.24 3.49 4.56 6 8.48 6 2.31 0 4.41-.87 6-2.3l-1.78-1.77c-1.13.98-2.6 1.57-4.22 1.57z"/></svg></div>
                                <div class="profiletext">Fatture e Pagamenti</div>
                            </div>
                            <div class="profilelinks" onclick="changepage('privacy');">
                                <div class="profileicons"><svg xmlns="http://www.w3.org/2000/svg" height="5.5vh" viewBox="0 0 24 24" width="5.5vh" fill="#fff"><g fill="none"><path d="M0 0h24v24H0V0z"/><path d="M0 0h24v24H0V0z" opacity=".87"/></g><path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zM9 6c0-1.66 1.34-3 3-3s3 1.34 3 3v2H9V6zm9 14H6V10h12v10zm-6-3c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z"/></svg></div>
                                <div class="profiletext">Privacy e Sicurezza</div>
                            </div>
                            <div class="profilelinks" onclick="changepage('morecontacts');">
                                <div class="profileicons"><svg xmlns="http://www.w3.org/2000/svg" height="5.5vh" viewBox="0 0 24 24" width="5.5vh" fill="#fff"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg></div>
                                <div class="profiletext">Ulteriori contatti</div>
                            </div>
                            <div class="profilelinks" style="border-bottom:.5vh solid #145567;border-radius: 0vh 0vh 0vh 2vh;" onclick="changepage('logout');">
                                <div class="profileicons"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="5.5vh" viewBox="0 0 24 24" width="5.5vh" fill="#fff"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><path d="M17,8l-1.41,1.41L17.17,11H9v2h8.17l-1.58,1.58L17,16l4-4L17,8z M5,5h7V3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h7v-2H5V5z"/></g></svg></div>
                                <div class="profiletext">Logout</div>
                            </div>
                        </div>
                        <div class="profilebody">
                            <h2>Prossimi Svuotamenti</h2>
                            <?php
                                /*$nextdatas=getnextsvuot($conn,$_SESSION["subplan"]);
                                echo    "<div class=\"nextsvuotp\">
                                            <h3>";
                                            echo gettitlenextsvuot($nextdatas[0]);
                                            echo "</h3>
                                            <p class=\"nextsvuottextp\">Data: ".$nextdatas[0]."</p>
                                            <p class=\"nextsvuottextp\">Frequenza: ".$_SESSION["subplan"]."</p><br>";
                                            $siglanextsvuot=getsiglanextsvuot($conn,$nextdatas[0],$_SESSION["subplan"]);
                                            if(count($siglanextsvuot)==1){
                                                echo "<div class=\"contstampindexp ".strtolower($siglanextsvuot[0])."\" style=\"margin-left:9vh;margin-top:-20px;\">".$siglanextsvuot[0]."</div>";
                                            }
                                            if(count($siglanextsvuot)==2){
                                                echo "<div class=\"contstampindexp ".strtolower($siglanextsvuot[0])."\" style=\"margin-left:30px;margin-top:-20px;\">".$siglanextsvuot[0]."</div>";
                                                echo "<div class=\"contstampindexp ".strtolower($siglanextsvuot[1])."\" style=\"margin-left:30px;margin-top:-20px;\">".$siglanextsvuot[1]."</div>";
                                            }
                                echo    "</div>";
                                echo    "<div class=\"nextsvuotp\">
                                            <h3>";
                                            echo gettitlenextsvuot($nextdatas[1]);
                                            echo "</h3>
                                            <p class=\"nextsvuottextp\">Data: ".$nextdatas[1]."</p>
                                            <p class=\"nextsvuottextp\">Frequenza: ".$_SESSION["subplan"]."</p><br>";
                                            $siglanextsvuot2=getsiglanextsvuot($conn,$nextdatas[1],$_SESSION["subplan"]);
                                            if(count($siglanextsvuot2)==1){
                                                echo "<div class=\"contstampindexp ".strtolower($siglanextsvuot2[0])."\" style=\"margin-left:9vh;margin-top:-20px;\">".$siglanextsvuot2[0]."</div>";
                                            }
                                            if(count($siglanextsvuot2)==2){
                                                echo "<div class=\"contstampindexp ".strtolower($siglanextsvuot2[0])."\" style=\"margin-left:4.25vh;margin-top:-20px;\">".$siglanextsvuot2[0]."</div>";
                                                echo "<div class=\"contstampindexp ".strtolower($siglanextsvuot2[1])."\" style=\"margin-left:4.25vh;margin-top:-20px;\">".$siglanextsvuot2[1]."</div>";
                                            }
                                echo    "</div>";
                                echo    "<div class=\"nextsvuotp\">
                                            <h3>";
                                            echo gettitlenextsvuot($nextdatas[2]);
                                            echo "</h3>
                                            <p class=\"nextsvuottextp\">Data: ".$nextdatas[2]."</p>
                                            <p class=\"nextsvuottextp\">Frequenza: ".$_SESSION["subplan"]."</p><br>";
                                            $siglanextsvuot3=getsiglanextsvuot($conn,$nextdatas[2],$_SESSION["subplan"]);
                                            if(count($siglanextsvuot3)==1){
                                                echo "<div class=\"contstampindexp ".strtolower($siglanextsvuot3[0])."\" style=\"margin-left:9vh;margin-top:-20px;\">".$siglanextsvuot3[0]."</div>";
                                            }
                                            if(count($siglanextsvuot3)==2){
                                                echo "<div class=\"contstampindexp ".strtolower($siglanextsvuot3[0])."\" style=\"margin-left:4.25vh;margin-top:-20px;\">".$siglanextsvuot3[0]."</div>";
                                                echo "<div class=\"contstampindexp ".strtolower($siglanextsvuot3[1])."\" style=\"margin-left:4.25vh;margin-top:-20px;\">".$siglanextsvuot3[1]."</div>";
                                            }
                                echo    "</div>";*/
                            ?>
                            <p class="calprofiletext">Il calendario è disponibile online visitando la pagina dedicata. Verrà inviata inoltre, una copia cartacea solo per il primo anno di abbonamento</p>
                            <div class="btneditcal" onclick="location.href='calendar.php'">VEDI CALENDARIO</div>
                        </div>
                    </div>
                    <div class="profilecont col-8" id="invoices" style="display: none;">
                        <div class="profilenav">
                            <div class="profilelinks" style="border-radius: 2vh 0vh 0vh 0vh;" onclick="changepage('profile');">
                                <div class="profileicons"><svg xmlns="http://www.w3.org/2000/svg" height="5.5vh" viewBox="0 0 24 24" width="5.5vh" fill="#fff"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2m0 10c2.7 0 5.8 1.29 6 2H6c.23-.72 3.31-2 6-2m0-12C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 10c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg></div>
                                <div class="profiletext">Profilo</div>
                            </div>
                            <div class="profilelinks" onclick="changepage('calendar');">
                                <div class="profileicons"><svg xmlns="http://www.w3.org/2000/svg" height="5.5vh" viewBox="0 0 24 24" width="5.5vh" fill="#fff"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2zm-7 5h5v5h-5z"/></svg></div>
                                <div class="profiletext">Calendario</div>
                            </div>
                            <div class="profilelinks">
                                <div class="profileicons"><svg xmlns="http://www.w3.org/2000/svg" height="5.5vh" viewBox="0 0 24 24" width="5.5vh" fill="#e6c059"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15 18.5c-2.51 0-4.68-1.42-5.76-3.5H15v-2H8.58c-.05-.33-.08-.66-.08-1s.03-.67.08-1H15V9H9.24C10.32 6.92 12.5 5.5 15 5.5c1.61 0 3.09.59 4.23 1.57L21 5.3C19.41 3.87 17.3 3 15 3c-3.92 0-7.24 2.51-8.48 6H3v2h3.06c-.04.33-.06.66-.06 1s.02.67.06 1H3v2h3.52c1.24 3.49 4.56 6 8.48 6 2.31 0 4.41-.87 6-2.3l-1.78-1.77c-1.13.98-2.6 1.57-4.22 1.57z"/></svg></div>
                                <div class="profiletext" style="color:#e6c059;">Fatture e Pagamenti</div>
                            </div>
                            <div class="profilelinks" onclick="changepage('privacy');">
                                <div class="profileicons"><svg xmlns="http://www.w3.org/2000/svg" height="5.5vh" viewBox="0 0 24 24" width="5.5vh" fill="#fff"><g fill="none"><path d="M0 0h24v24H0V0z"/><path d="M0 0h24v24H0V0z" opacity=".87"/></g><path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zM9 6c0-1.66 1.34-3 3-3s3 1.34 3 3v2H9V6zm9 14H6V10h12v10zm-6-3c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z"/></svg></div>
                                <div class="profiletext">Privacy e Sicurezza</div>
                            </div>
                            <div class="profilelinks" onclick="changepage('morecontacts');">
                                <div class="profileicons"><svg xmlns="http://www.w3.org/2000/svg" height="5.5vh" viewBox="0 0 24 24" width="5.5vh" fill="#fff"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg></div>
                                <div class="profiletext">Ulteriori contatti</div>
                            </div>
                            <div class="profilelinks" style="border-bottom:.5vh solid #145567;border-radius: 0vh 0vh 0vh 2vh;" onclick="changepage('logout');">
                                <div class="profileicons"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="5.5vh" viewBox="0 0 24 24" width="5.5vh" fill="#fff"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><path d="M17,8l-1.41,1.41L17.17,11H9v2h8.17l-1.58,1.58L17,16l4-4L17,8z M5,5h7V3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h7v-2H5V5z"/></g></svg></div>
                                <div class="profiletext">Logout</div>
                            </div>
                        </div>
                        <div class="profilebody scroll">
                            <h2>Fatture Recenti</h2>
                            <?php
                                $recentfattcod=getfattcod($conn,$_SESSION["email"]);
                                if(!isset($recentfattcod)){
                                    echo "<p>Nessuna fatture disponibile</p>";
                                }
                                else{
                                    if(count($recentfattcod)<=3){
                                        for($i=0;$i<count($recentfattcod);$i++){
                                            $infofatt1=getfattinfo($conn,$recentfattcod[$i],$_SESSION["email"]);
                                            echo    "<div class='fatt'>
                                                        <h3>".gettitlenextsvuot($infofatt1["dataf"])."</h3>
                                                        <p class=\"nextsvuottextp\">Data: ".$infofatt1["dataf"]."</p>
                                                        <p class=\"nextsvuottextp\">Numero fattura: ".$infofatt1["numf"]."</p>
                                                        <p class=\"nextsvuottextp\">Totale: € ";
                                                        echo getsubprice($conn,$_SESSION["subplan"]);
                                            echo        "</p>
                                                        <p class=\"nextsvuottextp\">Stato: ";
                                                        $datai= date_create($infofatt1["dataf"]);
                                                        $dataf= date_create(date("Y-m-d"));
                                                        $diff=date_diff($datai,$dataf);
                                                        if($diff->format("%a")>2){
                                                            echo "Pagata";
                                                        }
                                                        else{
                                                            echo "Non Pagata";
                                                        }
                                            echo        "</p>
                                                    <a class='btnfatt' href='invoices.php?cod=".$infofatt1["numf"]."' target='_blank'>APRI</a>
                                                    </div>";
                                        }
                                    }
                                    else{
                                        echo "<div id='btnfattall' class=\"btnfattall\" onclick='showprevfatt()'>VEDI TUTTE LE FATTURE</div>";
                                        for($i=0;$i<3;$i++){
                                            $infofatt4=getfattinfo($conn,$recentfattcod[$i],$_SESSION["email"]);
                                            echo    "<div class='fatt' style='margin-top:2vh;display:block;'>
                                                        <h3>".gettitlenextsvuot($infofatt4["dataf"])."</h3>
                                                        <p class=\"nextsvuottextp\">Data: ".$infofatt4["dataf"]."</p>
                                                        <p class=\"nextsvuottextp\">Numero fattura: ".$infofatt4["numf"]."</p>
                                                        <p class=\"nextsvuottextp\">Totale: € ";
                                                        echo getsubprice($conn,$_SESSION["subplan"]);
                                            echo        "</p>
                                                        <p class=\"nextsvuottextp\">Stato: ";
                                                        $datai= date_create($infofatt4["dataf"]);
                                                        $dataf= date_create(date("Y-m-d"));
                                                        $diff=date_diff($datai,$dataf);
                                                        if($diff->format("%a")>2){
                                                            echo "Pagata";
                                                        }
                                                        else{
                                                            echo "Non Pagata";
                                                        }
                                            echo        "</p>
                                                        <a class='btnfatt' href='invoices.php?cod=".$infofatt4["numf"]."' target='_blank'>APRI</a>
                                                    </div>";
                                        }
                                        for($i=3;$i<count($recentfattcod);$i++){
                                            $infofatt4=getfattinfo($conn,$recentfattcod[$i],$_SESSION["email"]);
                                            echo    "<div class='fatt' style='margin-top:2vh;display:none;'>
                                                        <h3>".gettitlenextsvuot($infofatt4["dataf"])."</h3>
                                                        <p class=\"nextsvuottextp\">Data: ".$infofatt4["dataf"]."</p>
                                                        <p class=\"nextsvuottextp\">Numero fattura: ".$infofatt4["numf"]."</p>
                                                        <p class=\"nextsvuottextp\">Totale: € ";
                                                        echo getsubprice($conn,$_SESSION["subplan"]);
                                            echo        "</p>
                                                        <p class=\"nextsvuottextp\">Stato: ";
                                                        $datai= date_create($infofatt4["dataf"]);
                                                        $dataf= date_create(date("Y-m-d"));
                                                        $diff=date_diff($datai,$dataf);
                                                        if($diff->format("%a")>2){
                                                            echo "Pagata";
                                                        }
                                                        else{
                                                            echo "Non Pagata";
                                                        }
                                            echo        "</p>
                                                        <a class='btnfatt' href='invoices.php?cod=".$infofatt4["numf"]."' target='_blank'>APRI</a>
                                                    </div>";
                                        }
                                    }
                                }
                            ?>
                        </div>
                    </div>
                    <div class="profilecont col-8" id="privacy" style="display: none;">
                        <div class="profilenav">
                            <div class="profilelinks" style="border-radius: 2vh 0vh 0vh 0vh;" onclick="changepage('profile');">
                                <div class="profileicons"><svg xmlns="http://www.w3.org/2000/svg" height="5.5vh" viewBox="0 0 24 24" width="5.5vh" fill="#fff"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2m0 10c2.7 0 5.8 1.29 6 2H6c.23-.72 3.31-2 6-2m0-12C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 10c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg></div>
                                <div class="profiletext">Profilo</div>
                            </div>
                            <div class="profilelinks" onclick="changepage('calendar');">
                                <div class="profileicons"><svg xmlns="http://www.w3.org/2000/svg" height="5.5vh" viewBox="0 0 24 24" width="5.5vh" fill="#fff"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2zm-7 5h5v5h-5z"/></svg></div>
                                <div class="profiletext">Calendario</div>
                            </div>
                            <div class="profilelinks" onclick="changepage('invoices');">
                                <div class="profileicons"><svg xmlns="http://www.w3.org/2000/svg" height="5.5vh" viewBox="0 0 24 24" width="5.5vh" fill="#fff"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15 18.5c-2.51 0-4.68-1.42-5.76-3.5H15v-2H8.58c-.05-.33-.08-.66-.08-1s.03-.67.08-1H15V9H9.24C10.32 6.92 12.5 5.5 15 5.5c1.61 0 3.09.59 4.23 1.57L21 5.3C19.41 3.87 17.3 3 15 3c-3.92 0-7.24 2.51-8.48 6H3v2h3.06c-.04.33-.06.66-.06 1s.02.67.06 1H3v2h3.52c1.24 3.49 4.56 6 8.48 6 2.31 0 4.41-.87 6-2.3l-1.78-1.77c-1.13.98-2.6 1.57-4.22 1.57z"/></svg></div>
                                <div class="profiletext">Fatture e Pagamenti</div>
                            </div>
                            <div class="profilelinks">
                                <div class="profileicons"><svg xmlns="http://www.w3.org/2000/svg" height="5.5vh" viewBox="0 0 24 24" width="5.5vh" fill="#e6c059"><g fill="none"><path d="M0 0h24v24H0V0z"/><path d="M0 0h24v24H0V0z" opacity=".87"/></g><path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zM9 6c0-1.66 1.34-3 3-3s3 1.34 3 3v2H9V6zm9 14H6V10h12v10zm-6-3c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z"/></svg></div>
                                <div class="profiletext" style="color:#e6c059;">Privacy e Sicurezza</div>
                            </div>
                            <div class="profilelinks" onclick="changepage('morecontacts');">
                                <div class="profileicons"><svg xmlns="http://www.w3.org/2000/svg" height="5.5vh" viewBox="0 0 24 24" width="5.5vh" fill="#fff"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg></div>
                                <div class="profiletext">Ulteriori contatti</div>
                            </div>
                            <div class="profilelinks" style="border-bottom:.5vh solid #145567;border-radius: 0vh 0vh 0vh 2vh;" onclick="changepage('logout');">
                                <div class="profileicons"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="5.5vh" viewBox="0 0 24 24" width="5.5vh" fill="#fff"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><path d="M17,8l-1.41,1.41L17.17,11H9v2h8.17l-1.58,1.58L17,16l4-4L17,8z M5,5h7V3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h7v-2H5V5z"/></g></svg></div>
                                <div class="profiletext">Logout</div>
                            </div>
                        </div>
                        <div class="profilebody scroll">
                            <h2>Privacy e Sicurezza</h2>
                            <p class="priprofiletext">Tutte le informazioni su privacy, sicurezza e dati trattati sono disponibili alla pagina dedicata</p>
                            <div class="btnedit" style="margin:4vh auto" onclick="location.href='info.php'">INFORMAZIONI</div>
                            <h3>Cancella Cookies</h3>
                            <p class="priprofiletext">Tutte le informazioni su privacy, sicurezza e dati trattati sono disponibili alla pagina dedicata</p>
                            <div class="btnedit" style="margin:4vh auto" onclick="location.href='functions/canccookie.php'">CANCELLA</div>
                            <h3>Richiedi Eliminazione Account</h3>
                            <p class="priprofiletext">L'eliminazione dell'account comporterà la cessazione del servizio e di tutti i suoi privilegi</p>
                            <div class="btnedit" style="margin:4vh auto;width:15vw;" onclick="confirmcanc();">RICHIEDI ELIMINAZIONE</div>
                        </div>
                    </div>
                    <div class="profilecont col-8" id="morecontacts" style="display: none;">
                        <div class="profilenav">
                            <div class="profilelinks" style="border-radius: 2vh 0vh 0vh 0vh;" onclick="changepage('profile');">
                                <div class="profileicons"><svg xmlns="http://www.w3.org/2000/svg" height="5.5vh" viewBox="0 0 24 24" width="5.5vh" fill="#fff"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2m0 10c2.7 0 5.8 1.29 6 2H6c.23-.72 3.31-2 6-2m0-12C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 10c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg></div>
                                <div class="profiletext">Profilo</div>
                            </div>
                            <div class="profilelinks" onclick="changepage('calendar');">
                                <div class="profileicons"><svg xmlns="http://www.w3.org/2000/svg" height="5.5vh" viewBox="0 0 24 24" width="5.5vh" fill="#fff"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2zm-7 5h5v5h-5z"/></svg></div>
                                <div class="profiletext">Calendario</div>
                            </div>
                            <div class="profilelinks" onclick="changepage('invoices');">
                                <div class="profileicons"><svg xmlns="http://www.w3.org/2000/svg" height="5.5vh" viewBox="0 0 24 24" width="5.5vh" fill="#fff"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15 18.5c-2.51 0-4.68-1.42-5.76-3.5H15v-2H8.58c-.05-.33-.08-.66-.08-1s.03-.67.08-1H15V9H9.24C10.32 6.92 12.5 5.5 15 5.5c1.61 0 3.09.59 4.23 1.57L21 5.3C19.41 3.87 17.3 3 15 3c-3.92 0-7.24 2.51-8.48 6H3v2h3.06c-.04.33-.06.66-.06 1s.02.67.06 1H3v2h3.52c1.24 3.49 4.56 6 8.48 6 2.31 0 4.41-.87 6-2.3l-1.78-1.77c-1.13.98-2.6 1.57-4.22 1.57z"/></svg></div>
                                <div class="profiletext">Fatture e Pagamenti</div>
                            </div>
                            <div class="profilelinks" onclick="changepage('privacy');">
                                <div class="profileicons"><svg xmlns="http://www.w3.org/2000/svg" height="5.5vh" viewBox="0 0 24 24" width="5.5vh" fill="#fff"><g fill="none"><path d="M0 0h24v24H0V0z"/><path d="M0 0h24v24H0V0z" opacity=".87"/></g><path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zM9 6c0-1.66 1.34-3 3-3s3 1.34 3 3v2H9V6zm9 14H6V10h12v10zm-6-3c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z"/></svg></div>
                                <div class="profiletext">Privacy e Sicurezza</div>
                            </div>
                            <div class="profilelinks">
                                <div class="profileicons"><svg xmlns="http://www.w3.org/2000/svg" height="5.5vh" viewBox="0 0 24 24" width="5.5vh" fill="#e6c059"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg></div>
                                <div class="profiletext" style="color:#e6c059;">Ulteriori contatti</div>
                            </div>
                            <div class="profilelinks" style="border-bottom:.5vh solid #145567;border-radius: 0vh 0vh 0vh 2vh;" onclick="changepage('logout');">
                                <div class="profileicons"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="5.5vh" viewBox="0 0 24 24" width="5.5vh" fill="#fff"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><path d="M17,8l-1.41,1.41L17.17,11H9v2h8.17l-1.58,1.58L17,16l4-4L17,8z M5,5h7V3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h7v-2H5V5z"/></g></svg></div>
                                <div class="profiletext">Logout</div>
                            </div>
                        </div>
                        <div class="profilebody">
                            <h2>Ulteriori Contatti</h2>
                            <p>Contattaci direttamente dalla pagina dedicata</p>
                            <div class="btnedit" style="margin:4vh auto" onclick="location.href='contactus.php'">CONTATTACI</div>
                            <p>Oppure vieni a trovarci su Facebook, Instagram o Youtube</p>
                            <a class="fb conticons" href="https://www.facebook.com/profile.php?id=100068319828227" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a class="ig conticons" href="https://www.instagram.com/wastepadova/" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a class="yt conticons" href="https://www.youtube.com/channel/UCgrCdHvxPvKZUnIQ2HMFSTQ" target="_blank"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="profilecont col-8" id="logout" style="display: none;">
                        <div class="profilenav">
                            <div class="profilelinks" style="border-radius: 2vh 0vh 0vh 0vh;" onclick="changepage('profile');">
                                <div class="profileicons"><svg xmlns="http://www.w3.org/2000/svg" height="5.5vh" viewBox="0 0 24 24" width="5.5vh" fill="#fff"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2m0 10c2.7 0 5.8 1.29 6 2H6c.23-.72 3.31-2 6-2m0-12C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 10c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg></div>
                                <div class="profiletext">Profilo</div>
                            </div>
                            <div class="profilelinks" onclick="changepage('calendar');">
                                <div class="profileicons"><svg xmlns="http://www.w3.org/2000/svg" height="5.5vh" viewBox="0 0 24 24" width="5.5vh" fill="#fff"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2zm-7 5h5v5h-5z"/></svg></div>
                                <div class="profiletext">Calendario</div>
                            </div>
                            <div class="profilelinks" onclick="changepage('invoices');">
                                <div class="profileicons"><svg xmlns="http://www.w3.org/2000/svg" height="5.5vh" viewBox="0 0 24 24" width="5.5vh" fill="#fff"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15 18.5c-2.51 0-4.68-1.42-5.76-3.5H15v-2H8.58c-.05-.33-.08-.66-.08-1s.03-.67.08-1H15V9H9.24C10.32 6.92 12.5 5.5 15 5.5c1.61 0 3.09.59 4.23 1.57L21 5.3C19.41 3.87 17.3 3 15 3c-3.92 0-7.24 2.51-8.48 6H3v2h3.06c-.04.33-.06.66-.06 1s.02.67.06 1H3v2h3.52c1.24 3.49 4.56 6 8.48 6 2.31 0 4.41-.87 6-2.3l-1.78-1.77c-1.13.98-2.6 1.57-4.22 1.57z"/></svg></div>
                                <div class="profiletext">Fatture e Pagamenti</div>
                            </div>
                            <div class="profilelinks" onclick="changepage('privacy');">
                                <div class="profileicons"><svg xmlns="http://www.w3.org/2000/svg" height="5.5vh" viewBox="0 0 24 24" width="5.5vh" fill="#fff"><g fill="none"><path d="M0 0h24v24H0V0z"/><path d="M0 0h24v24H0V0z" opacity=".87"/></g><path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zM9 6c0-1.66 1.34-3 3-3s3 1.34 3 3v2H9V6zm9 14H6V10h12v10zm-6-3c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z"/></svg></div>
                                <div class="profiletext">Privacy e Sicurezza</div>
                            </div>
                            <div class="profilelinks" onclick="changepage('morecontacts');">
                                <div class="profileicons"><svg xmlns="http://www.w3.org/2000/svg" height="5.5vh" viewBox="0 0 24 24" width="5.5vh" fill="#fff"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg></div>
                                <div class="profiletext">Ulteriori contatti</div>
                            </div>
                            <div class="profilelinks" style="border-bottom:.5vh solid #145567;border-radius: 0vh 0vh 0vh 2vh;">
                                <div class="profileicons"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="5.5vh" viewBox="0 0 24 24" width="5.5vh" fill="#e6c059"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><path d="M17,8l-1.41,1.41L17.17,11H9v2h8.17l-1.58,1.58L17,16l4-4L17,8z M5,5h7V3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h7v-2H5V5z"/></g></svg></div>
                                <div class="profiletext" style="color:#e6c059;">Logout</div>
                            </div>
                        </div>
                        <div class="profilebody">
                            <h2>Logout</h2>
                            <p>Effettua il logout dalla piattaforma. Tutti i tuoi dati non andranno perduti</p>
                            <div class="btnedit" onclick="location.href='logout.php'">LOGOUT</div>
                        </div>
                    </div>
                </div>
                <div id="myModal" class="modal">
                    <div class="modal-content">
                        <div class="modal-header">
                            <span class="close">&times;</span>
                            <h2>Inserisci Password</h2>
                        </div>
                        <div class="modal-body">
                            <form action="<?=$_SERVER["PHP_SELF"];?>" method="post" onsubmit="">
                                <input type="password" name="pass" id="passrep" placeholder="Password">
                                <input type="submit" name="invio" value="Modifica" class="submitrep" style="cursor: pointer;">
                            </form>
                            <?php
                                if(isset($_POST["invio"])){
                                    $pass= cleanstr($_POST["pass"]);
                                    $passhash= getpasshash($conn, $_SESSION["email"]);
                                    if(password_verify($pass, $passhash)){
                                        $_SESSION["editusercorrect"]=1;
                                        die("<script>location.href='editdata.php'</script>");
                                    }
                                    else{
                                        die("<script>location.href='error.php?err=Password Errata'</script>");
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <script>
                    var modal = document.getElementById("myModal");
                    var btn = document.getElementById("myBtn");
                    var span = document.getElementsByClassName("close")[0];
                    btn.onclick = function() {
                        modal.style.display = "block";
                        document.getElementById("passrep").focus();
                    };
                    span.onclick = function() {
                        modal.style.display = "none";
                    };
                    window.onclick = function(event) {
                        if (event.target === modal) {
                            modal.style.display = "none";
                        }
                    };
                </script>
                <p id="warning"></p>
            </div>
        </div>
    </body>
</html>