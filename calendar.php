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
        <title>Calendario</title>
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
                <a href="index.php" id="highlight" class="menulinks" style="margin-left:25vw;">HOME</a>
                <a href="info.php" class="menulinks">INFORMAZIONI</a>
                <a href="contactus.php" class="menulinks">CONTATTACI</a>
                <a href="calendar.php" class="menulinks" style="color:#e6c059;border-bottom: 0;">CALENDARIO</a>
                <a href="profile.php" class="menulinks"><?=strtoupper($_SESSION["firstname"]);?></a>
            </div>
            <div class="contents" style="background: #b5d6cb;">
                <div class="month col-8" id="month1" style="padding:.1px;">
                    <div class="head">
                        <h2>Gennaio 2021</h2>
                    </div>
                    <div class="weekdays">Lunedì</div>
                    <div class="weekdays">Martedì</div>
                    <div class="weekdays">Mercoledì</div>
                    <div class="weekdays">Giovedì</div>
                    <div class="weekdays">Venerdì</div>
                    <div class="weekdays" style="background:#deac21;color:white;">Sabato</div>
                    <div class="weekdays" style="background:#deac21;color:white;border:0;">Domenica</div>
                    <div class="days"></div>
                    <div class="days"></div>
                    <div class="days"></div>
                    <div class="days"></div>
                    <div class="days">1</div>
                    <div class="days weekend">2</div>
                    <div class="days weekend" style="border-right:0;">3</div>
                    <div class="days">4<br>
                        <?php
                            if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                        ?>
                    </div>
                    <div class="days">5</div>
                    <div class="days">6</div>
                    <div class="days">7<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2) || ($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp c\" style=\"margin-left:6.7vh;\">C</div>";
                            }
                        ?>
                    </div>
                    <div class="days">8<br>
                        <?php
                            if(($_SESSION["subplan"]==1)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else{
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend">9</div>
                    <div class="days weekend" style="border-right:0;">10</div>
                    <div class="days">11</div>
                    <div class="days">12</div>
                    <div class="days">13</div>
                    <div class="days">14<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp pm\" style=\"margin-left:6.7vh;\">PM</div>";
                            }
                            else{
                                echo "<div class=\"contstamp pm\" style=\"margin-left:2.5vh;\">PM</div>";
                                echo "<div class=\"contstamp v\" style=\"margin-left:2.5vh;\">V</div>";
                            }
                        ?>
                    </div>
                    <div class="days">15<br>
                        <?php
                            if(($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend">16</div>
                    <div class="days weekend" style="border-right:0;">17</div>
                    <div class="days">18<br>
                        <?php
                            if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                        ?>
                    </div>
                    <div class="days">19</div>
                    <div class="days">20</div>
                    <div class="days">21<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2) || ($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp c\" style=\"margin-left:6.7vh;\">C</div>";
                            }
                        ?>
                    </div>
                    <div class="days">22<br>
                        <?php
                            if(($_SESSION["subplan"]==1)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else{
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend">23</div>
                    <div class="days weekend" style="border-right:0;">24</div>
                    <div class="days" style="border-bottom:0;border-radius: 0px 0px 0px 10px;">25</div>
                    <div class="days" style="border-bottom:0;">26</div>
                    <div class="days" style="border-bottom:0;">27</div>
                    <div class="days" style="border-bottom:0;">28<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp pm\" style=\"margin-left:6.7vh;\">PM</div>";
                            }
                            else{
                                echo "<div class=\"contstamp pm\" style=\"margin-left:2.5vh;\">PM</div>";
                                echo "<div class=\"contstamp v\" style=\"margin-left:2.5vh;\">V</div>";
                            }
                        ?>
                    </div>
                    <div class="days" style="border-bottom:0;">29<br>
                        <?php
                            if(($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend" style="border-bottom:0;">30</div>
                    <div class="days weekend" style="border-right:0;border-bottom:0;border-radius: 0px 0px 10px 0px;">31</div>
                    <input type="button" class="btnrightcal" value="&#10095;" onclick="changemonth('month1','month2')">
                </div>
                <div class="month col-8" id="month2" style="padding:.1px;">
                    <div class="head">
                        <h2>Febbraio 2021</h2>
                    </div>
                    <div class="weekdays">Lunedì</div>
                    <div class="weekdays">Martedì</div>
                    <div class="weekdays">Mercoledì</div>
                    <div class="weekdays">Giovedì</div>
                    <div class="weekdays">Venerdì</div>
                    <div class="weekdays" style="background:#deac21;color:white;">Sabato</div>
                    <div class="weekdays" style="background:#deac21;color:white;border:0;">Domenica</div>
                    <div class="days">1<br>
                        <?php
                            if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                        ?>
                    </div>
                    <div class="days">2</div>
                    <div class="days">3</div>
                    <div class="days">4<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2) || ($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp c\" style=\"margin-left:6.7vh;\">C</div>";
                            }
                        ?>
                    </div>
                    <div class="days">5<br>
                        <?php
                            if(($_SESSION["subplan"]==1)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else{
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend">6</div>
                    <div class="days weekend" style="border-right:0;">7</div>
                    <div class="days">8</div>
                    <div class="days">9</div>
                    <div class="days">10</div>
                    <div class="days">11<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp pm\" style=\"margin-left:6.7vh;\">PM</div>";
                            }
                            else{
                                echo "<div class=\"contstamp pm\" style=\"margin-left:2.5vh;\">PM</div>";
                                echo "<div class=\"contstamp v\" style=\"margin-left:2.5vh;\">V</div>";
                            }
                        ?>
                    </div>
                    <div class="days">12<br>
                        <?php
                            if(($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend">13</div>
                    <div class="days weekend" style="border-right:0;">14</div>
                    <div class="days">15<br>
                        <?php
                            if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                        ?>
                    </div>
                    <div class="days">16</div>
                    <div class="days">17</div>
                    <div class="days">18<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2) || ($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp c\" style=\"margin-left:6.7vh;\">C</div>";
                            }
                        ?>
                    </div>
                    <div class="days">19<br>
                        <?php
                            if(($_SESSION["subplan"]==1)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else{
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend">20</div>
                    <div class="days weekend" style="border-right:0;">21</div>
                    <div class="days">22</div>
                    <div class="days">23</div>
                    <div class="days">24</div>
                    <div class="days">25<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp pm\" style=\"margin-left:6.7vh;\">PM</div>";
                            }
                            else{
                                echo "<div class=\"contstamp pm\" style=\"margin-left:2.5vh;\">PM</div>";
                                echo "<div class=\"contstamp v\" style=\"margin-left:2.5vh;\">V</div>";
                            }
                        ?>
                    </div>
                    <div class="days">26<br>
                        <?php
                            if(($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend">27</div>
                    <div class="days weekend" style="border-right:0;">28</div>
                    <div class="days" style="border-bottom:0;border-radius: 0px 0px 0px 10px;"></div>
                    <div class="days" style="border-bottom:0;"></div>
                    <div class="days" style="border-bottom:0;"></div>
                    <div class="days" style="border-bottom:0;"></div>
                    <div class="days" style="border-bottom:0;"></div>
                    <div class="days weekend" style="border-bottom:0;"></div>
                    <div class="days weekend" style="border-right:0;border-bottom:0;border-radius: 0px 0px 10px 0px;"></div>
                    <input type="button" class="btnleftcal" value="&#10094;" onclick="changemonth('month2','month1')">
                    <input type="button" class="btnrightcal" value="&#10095;" onclick="changemonth('month2','month3')">
                </div>
                <div class="month col-8" id="month3" style="padding:.1px;">
                    <div class="head">
                        <h2>Marzo 2021</h2>
                    </div>
                    <div class="weekdays">Lunedì</div>
                    <div class="weekdays">Martedì</div>
                    <div class="weekdays">Mercoledì</div>
                    <div class="weekdays">Giovedì</div>
                    <div class="weekdays">Venerdì</div>
                    <div class="weekdays" style="background:#deac21;color:white;">Sabato</div>
                    <div class="weekdays" style="background:#deac21;color:white;border:0;">Domenica</div>
                    <div class="days">1<br>
                        <?php
                            if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                        ?>
                    </div>
                    <div class="days">2</div>
                    <div class="days">3</div>
                    <div class="days">4<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2) || ($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp c\" style=\"margin-left:6.7vh;\">C</div>";
                            }
                        ?>
                    </div>
                    <div class="days">5<br>
                        <?php
                            if(($_SESSION["subplan"]==1)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else{
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend">6</div>
                    <div class="days weekend" style="border-right:0;">7</div>
                    <div class="days">8</div>
                    <div class="days">9</div>
                    <div class="days">10</div>
                    <div class="days">11<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp pm\" style=\"margin-left:6.7vh;\">PM</div>";
                            }
                            else{
                                echo "<div class=\"contstamp pm\" style=\"margin-left:2.5vh;\">PM</div>";
                                echo "<div class=\"contstamp v\" style=\"margin-left:2.5vh;\">V</div>";
                            }
                        ?>
                    </div>
                    <div class="days">12<br>
                        <?php
                            if(($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend">13</div>
                    <div class="days weekend" style="border-right:0;">14</div>
                    <div class="days">15<br>
                        <?php
                            if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                        ?>
                    </div>
                    <div class="days">16</div>
                    <div class="days">17</div>
                    <div class="days">18<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2) || ($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp c\" style=\"margin-left:6.7vh;\">C</div>";
                            }
                        ?>
                    </div>
                    <div class="days">19<br>
                        <?php
                            if(($_SESSION["subplan"]==1)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else{
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend">20</div>
                    <div class="days weekend" style="border-right:0;">21</div>
                    <div class="days">22</div>
                    <div class="days">23</div>
                    <div class="days">24</div>
                    <div class="days">25<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp pm\" style=\"margin-left:6.7vh;\">PM</div>";
                            }
                            else{
                                echo "<div class=\"contstamp pm\" style=\"margin-left:2.5vh;\">PM</div>";
                                echo "<div class=\"contstamp v\" style=\"margin-left:2.5vh;\">V</div>";
                            }
                        ?>
                    </div>
                    <div class="days">26<br>
                        <?php
                            if(($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend">27</div>
                    <div class="days weekend" style="border-right:0;">28</div>
                    <div class="days" style="border-bottom:0;border-radius: 0px 0px 0px 10px;">29<br>
                        <?php
                            if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                        ?>
                    </div>
                    <div class="days" style="border-bottom:0;">30</div>
                    <div class="days" style="border-bottom:0;">31</div>
                    <div class="days" style="border-bottom:0;"></div>
                    <div class="days" style="border-bottom:0;"></div>
                    <div class="days weekend" style="border-bottom:0;"></div>
                    <div class="days weekend" style="border-right:0;border-bottom:0;border-radius: 0px 0px 10px 0px;"></div>
                    <input type="button" class="btnleftcal" value="&#10094;" onclick="changemonth('month3','month2')">
                    <input type="button" class="btnrightcal" value="&#10095;" onclick="changemonth('month3','month4')">
                </div>
                <div class="month col-8" id="month4" style="padding:.1px;">
                    <div class="head">
                        <h2>Aprile 2021</h2>
                    </div>
                    <div class="weekdays">Lunedì</div>
                    <div class="weekdays">Martedì</div>
                    <div class="weekdays">Mercoledì</div>
                    <div class="weekdays">Giovedì</div>
                    <div class="weekdays">Venerdì</div>
                    <div class="weekdays" style="background:#deac21;color:white;">Sabato</div>
                    <div class="weekdays" style="background:#deac21;color:white;border:0;">Domenica</div>
                    <div class="days"></div>
                    <div class="days"></div>
                    <div class="days"></div>
                    <div class="days">1<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2) || ($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp c\" style=\"margin-left:6.7vh;\">C</div>";
                            }
                        ?>
                    </div>
                    <div class="days">2<br>
                        <?php
                            if(($_SESSION["subplan"]==1)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else{
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend">3</div>
                    <div class="days weekend" style="border-right:0;">4</div>
                    <div class="days">5</div>
                    <div class="days">6</div>
                    <div class="days">7</div>
                    <div class="days">8<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp pm\" style=\"margin-left:6.7vh;\">PM</div>";
                            }
                            else{
                                echo "<div class=\"contstamp pm\" style=\"margin-left:2.5vh;\">PM</div>";
                                echo "<div class=\"contstamp v\" style=\"margin-left:2.5vh;\">V</div>";
                            }
                        ?>
                    </div>
                    <div class="days">9<br>
                        <?php
                            if(($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend">10</div>
                    <div class="days weekend" style="border-right:0;">11</div>
                    <div class="days">12<br>
                        <?php
                            if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                        ?>
                    </div>
                    <div class="days">13</div>
                    <div class="days">14</div>
                    <div class="days">15<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2) || ($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp c\" style=\"margin-left:6.7vh;\">C</div>";
                            }
                        ?>
                    </div>
                    <div class="days">16<br>
                        <?php
                            if(($_SESSION["subplan"]==1)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else{
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend">17</div>
                    <div class="days weekend" style="border-right:0;">18</div>
                    <div class="days">19</div>
                    <div class="days">20</div>
                    <div class="days">21</div>
                    <div class="days">22<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp pm\" style=\"margin-left:6.7vh;\">PM</div>";
                            }
                            else{
                                echo "<div class=\"contstamp pm\" style=\"margin-left:2.5vh;\">PM</div>";
                                echo "<div class=\"contstamp v\" style=\"margin-left:2.5vh;\">V</div>";
                            }
                        ?>
                    </div>
                    <div class="days">23<br>
                        <?php
                            if(($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend">24</div>
                    <div class="days weekend" style="border-right:0;">25</div>
                    <div class="days" style="border-bottom:0;border-radius: 0px 0px 0px 10px;">26<br>
                        <?php
                            if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                        ?>
                    </div>
                    <div class="days" style="border-bottom:0;">27</div>
                    <div class="days" style="border-bottom:0;">28</div>
                    <div class="days" style="border-bottom:0;">29<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2) || ($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp c\" style=\"margin-left:6.7vh;\">C</div>";
                            }
                        ?>
                    </div>
                    <div class="days" style="border-bottom:0;">30<br>
                        <?php
                            if(($_SESSION["subplan"]==1)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else{
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend" style="border-bottom:0;"></div>
                    <div class="days weekend" style="border-right:0;border-bottom:0;border-radius: 0px 0px 10px 0px;"></div>
                    <input type="button" class="btnleftcal" value="&#10094;" onclick="changemonth('month4','month3')">
                    <input type="button" class="btnrightcal" value="&#10095;" onclick="changemonth('month4','month5')">
                </div>
                <div class="month col-8" id="month5" style="padding:.1px;">
                    <div class="head">
                        <h2>Maggio 2021</h2>
                    </div>
                    <div class="weekdays">Lunedì</div>
                    <div class="weekdays">Martedì</div>
                    <div class="weekdays">Mercoledì</div>
                    <div class="weekdays">Giovedì</div>
                    <div class="weekdays">Venerdì</div>
                    <div class="weekdays" style="background:#deac21;color:white;">Sabato</div>
                    <div class="weekdays" style="background:#deac21;color:white;border:0;">Domenica</div>
                    <div class="days"></div>
                    <div class="days"></div>
                    <div class="days"></div>
                    <div class="days"></div>
                    <div class="days"></div>
                    <div class="days weekend">1</div>
                    <div class="days weekend" style="border-right:0;">2</div>
                    <div class="days">3</div>
                    <div class="days">4</div>
                    <div class="days">5</div>
                    <div class="days">6<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp pm\" style=\"margin-left:6.7vh;\">PM</div>";
                            }
                            else{
                                echo "<div class=\"contstamp pm\" style=\"margin-left:2.5vh;\">PM</div>";
                                echo "<div class=\"contstamp v\" style=\"margin-left:2.5vh;\">V</div>";
                            }
                        ?>
                    </div>
                    <div class="days">7<br>
                        <?php
                            if(($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend">8</div>
                    <div class="days weekend" style="border-right:0;">9</div>
                    <div class="days">10<br>
                        <?php
                            if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                        ?>
                    </div>
                    <div class="days">11</div>
                    <div class="days">12</div>
                    <div class="days">13<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2) || ($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp c\" style=\"margin-left:6.7vh;\">C</div>";
                            }
                        ?>
                    </div>
                    <div class="days">14<br>
                        <?php
                            if(($_SESSION["subplan"]==1)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else{
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend">15</div>
                    <div class="days weekend" style="border-right:0;">16</div>
                    <div class="days">17</div>
                    <div class="days">18</div>
                    <div class="days">19</div>
                    <div class="days">20<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp pm\" style=\"margin-left:6.7vh;\">PM</div>";
                            }
                            else{
                                echo "<div class=\"contstamp pm\" style=\"margin-left:2.5vh;\">PM</div>";
                                echo "<div class=\"contstamp v\" style=\"margin-left:2.5vh;\">V</div>";
                            }
                        ?>
                    </div>
                    <div class="days">21<br>
                        <?php
                            if(($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend">22</div>
                    <div class="days weekend" style="border-right:0;">23</div>
                    <div class="days" style="border-bottom:0;border-radius: 0px 0px 0px 10px;">
                        <div class="halfday" style="border-bottom: 1px solid #145567;">
                            <?php
                                if(($_SESSION["subplan"]==3)){
                                    echo "<div class=\"halfcontstamp u\" style=\"margin-left:1vh;\">U</div>";
                                }
                            ?>
                            24
                            <?php
                                if(($_SESSION["subplan"]==3)){
                                    echo "<div class=\"halfcontstamp u\" style=\"float:right;margin-right:1vh;\">U</div>";
                                }
                            ?>
                        </div>
                        <div class="halfday">31</div>
                    </div>
                    <div class="days" style="border-bottom:0;">25</div>
                    <div class="days" style="border-bottom:0;">26</div>
                    <div class="days" style="border-bottom:0;">27<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2) || ($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp c\" style=\"margin-left:6.7vh;\">C</div>";
                            }
                        ?>
                    </div>
                    <div class="days" style="border-bottom:0;">28<br>
                        <?php
                            if(($_SESSION["subplan"]==1)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else{
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend" style="border-bottom:0;">29</div>
                    <div class="days weekend" style="border-right:0;border-bottom:0;border-radius: 0px 0px 10px 0px;">30</div>
                    <input type="button" class="btnleftcal" value="&#10094;" onclick="changemonth('month5','month4')">
                    <input type="button" class="btnrightcal" value="&#10095;" onclick="changemonth('month5','month6')">
                </div>
                <div class="month col-8" id="month6" style="padding:.1px;">
                    <div class="head">
                        <h2>Giugno 2021</h2>
                    </div>
                    <div class="weekdays">Lunedì</div>
                    <div class="weekdays">Martedì</div>
                    <div class="weekdays">Mercoledì</div>
                    <div class="weekdays">Giovedì</div>
                    <div class="weekdays">Venerdì</div>
                    <div class="weekdays" style="background:#deac21;color:white;">Sabato</div>
                    <div class="weekdays" style="background:#deac21;color:white;border:0;">Domenica</div>
                    <div class="days"></div>
                    <div class="days">1</div>
                    <div class="days">2</div>
                    <div class="days">3<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp pm\" style=\"margin-left:6.7vh;\">PM</div>";
                            }
                            else{
                                echo "<div class=\"contstamp pm\" style=\"margin-left:2.5vh;\">PM</div>";
                                echo "<div class=\"contstamp v\" style=\"margin-left:2.5vh;\">V</div>";
                            }
                        ?>
                    </div>
                    <div class="days">4<br>
                        <?php
                            if(($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend">5</div>
                    <div class="days weekend" style="border-right:0;">6</div>
                    <div class="days">7<br>
                        <?php
                            if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                        ?>
                    </div>
                    <div class="days">8</div>
                    <div class="days">9</div>
                    <div class="days">10<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2) || ($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp c\" style=\"margin-left:6.7vh;\">C</div>";
                            }
                        ?>
                    </div>
                    <div class="days">11<br>
                        <?php
                            if(($_SESSION["subplan"]==1)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else{
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend">12</div>
                    <div class="days weekend" style="border-right:0;">13</div>
                    <div class="days">14</div>
                    <div class="days">15</div>
                    <div class="days">16</div>
                    <div class="days">17<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp pm\" style=\"margin-left:6.7vh;\">PM</div>";
                            }
                            else{
                                echo "<div class=\"contstamp pm\" style=\"margin-left:2.5vh;\">PM</div>";
                                echo "<div class=\"contstamp v\" style=\"margin-left:2.5vh;\">V</div>";
                            }
                        ?>
                    </div>
                    <div class="days">18<br>
                        <?php
                            if(($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend">19</div>
                    <div class="days weekend" style="border-right:0;">20</div>
                    <div class="days">21<br>
                        <?php
                            if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                        ?>
                    </div>
                    <div class="days">22</div>
                    <div class="days">23</div>
                    <div class="days">24<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2) || ($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp c\" style=\"margin-left:6.7vh;\">C</div>";
                            }
                        ?>
                    </div>
                    <div class="days">25<br>
                        <?php
                            if(($_SESSION["subplan"]==1)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else{
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend">26</div>
                    <div class="days weekend" style="border-right:0;">27</div>
                    <div class="days" style="border-bottom:0;border-radius: 0px 0px 0px 10px;">28</div>
                    <div class="days" style="border-bottom:0;">29</div>
                    <div class="days" style="border-bottom:0;">30</div>
                    <div class="days" style="border-bottom:0;"></div>
                    <div class="days" style="border-bottom:0;"></div>
                    <div class="days weekend" style="border-bottom:0;"></div>
                    <div class="days weekend" style="border-right:0;border-bottom:0;border-radius: 0px 0px 10px 0px;"></div>
                    <input type="button" class="btnleftcal" value="&#10094;" onclick="changemonth('month6','month5')">
                    <input type="button" class="btnrightcal" value="&#10095;" onclick="changemonth('month6','month7')">
                </div>
                <div class="month col-8" id="month7" style="padding:.1px;">
                    <div class="head">
                        <h2>Luglio 2021</h2>
                    </div>
                    <div class="weekdays">Lunedì</div>
                    <div class="weekdays">Martedì</div>
                    <div class="weekdays">Mercoledì</div>
                    <div class="weekdays">Giovedì</div>
                    <div class="weekdays">Venerdì</div>
                    <div class="weekdays" style="background:#deac21;color:white;">Sabato</div>
                    <div class="weekdays" style="background:#deac21;color:white;border:0;">Domenica</div>
                    <div class="days"></div>
                    <div class="days"></div>
                    <div class="days"></div>
                    <div class="days">1<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp pm\" style=\"margin-left:6.7vh;\">PM</div>";
                            }
                            else{
                                echo "<div class=\"contstamp pm\" style=\"margin-left:2.5vh;\">PM</div>";
                                echo "<div class=\"contstamp v\" style=\"margin-left:2.5vh;\">V</div>";
                            }
                        ?>
                    </div>
                    <div class="days">2<br>
                        <?php
                            if(($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend">3</div>
                    <div class="days weekend" style="border-right:0;">4</div>
                    <div class="days">5<br>
                        <?php
                            if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                        ?>
                    </div>
                    <div class="days">6</div>
                    <div class="days">7</div>
                    <div class="days">8<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2) || ($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp c\" style=\"margin-left:6.7vh;\">C</div>";
                            }
                        ?>
                    </div>
                    <div class="days">9<br>
                        <?php
                            if(($_SESSION["subplan"]==1)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else{
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend">10</div>
                    <div class="days weekend" style="border-right:0;">11</div>
                    <div class="days">12</div>
                    <div class="days">13</div>
                    <div class="days">14</div>
                    <div class="days">15<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp pm\" style=\"margin-left:6.7vh;\">PM</div>";
                            }
                            else{
                                echo "<div class=\"contstamp pm\" style=\"margin-left:2.5vh;\">PM</div>";
                                echo "<div class=\"contstamp v\" style=\"margin-left:2.5vh;\">V</div>";
                            }
                        ?>
                    </div>
                    <div class="days">16<br>
                        <?php
                            if(($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend">17</div>
                    <div class="days weekend" style="border-right:0;">18</div>
                    <div class="days">19<br>
                        <?php
                            if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                        ?>
                    </div>
                    <div class="days">20</div>
                    <div class="days">21</div>
                    <div class="days">22<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2) || ($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp c\" style=\"margin-left:6.7vh;\">C</div>";
                            }
                        ?>
                    </div>
                    <div class="days">23<br>
                        <?php
                            if(($_SESSION["subplan"]==1)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else{
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend">24</div>
                    <div class="days weekend" style="border-right:0;">25</div>
                    <div class="days" style="border-bottom:0;border-radius: 0px 0px 0px 10px;">26</div>
                    <div class="days" style="border-bottom:0;">27</div>
                    <div class="days" style="border-bottom:0;">28</div>
                    <div class="days" style="border-bottom:0;">29<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp pm\" style=\"margin-left:6.7vh;\">PM</div>";
                            }
                            else{
                                echo "<div class=\"contstamp pm\" style=\"margin-left:2.5vh;\">PM</div>";
                                echo "<div class=\"contstamp v\" style=\"margin-left:2.5vh;\">V</div>";
                            }
                        ?>
                    </div>
                    <div class="days" style="border-bottom:0;">30<br>
                        <?php
                            if(($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend" style="border-bottom:0;">31</div>
                    <div class="days weekend" style="border-right:0;border-bottom:0;border-radius: 0px 0px 10px 0px;"></div>
                    <input type="button" class="btnleftcal" value="&#10094;" onclick="changemonth('month7','month6')">
                    <input type="button" class="btnrightcal" value="&#10095;" onclick="changemonth('month7','month8')">
                </div>
                <div class="month col-8" id="month8" style="padding:.1px;">
                    <div class="head">
                        <h2>Agosto 2021</h2>
                    </div>
                    <div class="weekdays">Lunedì</div>
                    <div class="weekdays">Martedì</div>
                    <div class="weekdays">Mercoledì</div>
                    <div class="weekdays">Giovedì</div>
                    <div class="weekdays">Venerdì</div>
                    <div class="weekdays" style="background:#deac21;color:white;">Sabato</div>
                    <div class="weekdays" style="background:#deac21;color:white;border:0;">Domenica</div>
                    <div class="days"></div>
                    <div class="days"></div>
                    <div class="days"></div>
                    <div class="days"></div>
                    <div class="days"></div>
                    <div class="days weekend"></div>
                    <div class="days weekend" style="border-right:0;">1</div>
                    <div class="days">2<br>
                        <?php
                            if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                        ?>
                    </div>
                    <div class="days">3</div>
                    <div class="days">4</div>
                    <div class="days">5<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2) || ($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp c\" style=\"margin-left:6.7vh;\">C</div>";
                            }
                        ?>
                    </div>
                    <div class="days">6<br>
                        <?php
                            if(($_SESSION["subplan"]==1)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else{
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend">7</div>
                    <div class="days weekend" style="border-right:0;">8</div>
                    <div class="days">9</div>
                    <div class="days">10</div>
                    <div class="days">11</div>
                    <div class="days">12<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp pm\" style=\"margin-left:6.7vh;\">PM</div>";
                            }
                            else{
                                echo "<div class=\"contstamp pm\" style=\"margin-left:2.5vh;\">PM</div>";
                                echo "<div class=\"contstamp v\" style=\"margin-left:2.5vh;\">V</div>";
                            }
                        ?>
                    </div>
                    <div class="days">13<br>
                        <?php
                            if(($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend">14</div>
                    <div class="days weekend" style="border-right:0;">15</div>
                    <div class="days">16<br>
                        <?php
                            if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                        ?>
                    </div>
                    <div class="days">17</div>
                    <div class="days">18</div>
                    <div class="days">19<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2) || ($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp c\" style=\"margin-left:6.7vh;\">C</div>";
                            }
                        ?>
                    </div>
                    <div class="days">20<br>
                        <?php
                            if(($_SESSION["subplan"]==1)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else{
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend">21</div>
                    <div class="days weekend" style="border-right:0;">22</div>
                    <div class="days" style="border-bottom:0;border-radius: 0px 0px 0px 10px;">
                        <div class="halfday" style="border-bottom: 1px solid #145567;">23</div>
                        <div class="halfday">
                            <?php
                                if(($_SESSION["subplan"]==3)){
                                    echo "<div class=\"halfcontstamp u\" style=\"margin-left:1vh;\">U</div>";
                                }
                            ?>
                            30
                            <?php
                                if(($_SESSION["subplan"]==3)){
                                    echo "<div class=\"halfcontstamp u\" style=\"float:right;margin-right:1vh;\">U</div>";
                                }
                            ?>
                        </div>
                    </div>
                    <div class="days" style="border-bottom:0;"><div class="halfday" style="border-bottom: 1px solid #145567;">24</div><div class="halfday">31</div></div>
                    <div class="days" style="border-bottom:0;">25</div>
                    <div class="days" style="border-bottom:0;">26<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp pm\" style=\"margin-left:6.7vh;\">PM</div>";
                            }
                            else{
                                echo "<div class=\"contstamp pm\" style=\"margin-left:2.5vh;\">PM</div>";
                                echo "<div class=\"contstamp v\" style=\"margin-left:2.5vh;\">V</div>";
                            }
                        ?>
                    </div>
                    <div class="days" style="border-bottom:0;">27<br>
                        <?php
                            if(($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend" style="border-bottom:0;">28</div>
                    <div class="days weekend" style="border-right:0;border-bottom:0;border-radius: 0px 0px 10px 0px;">29</div>
                    <input type="button" class="btnleftcal" value="&#10094;" onclick="changemonth('month8','month7')">
                    <input type="button" class="btnrightcal" value="&#10095;" onclick="changemonth('month8','month9')">
                </div>
                <div class="month col-8" id="month9" style="padding:.1px;">
                    <div class="head">
                        <h2>Settembre 2021</h2>
                    </div>
                    <div class="weekdays">Lunedì</div>
                    <div class="weekdays">Martedì</div>
                    <div class="weekdays">Mercoledì</div>
                    <div class="weekdays">Giovedì</div>
                    <div class="weekdays">Venerdì</div>
                    <div class="weekdays" style="background:#deac21;color:white;">Sabato</div>
                    <div class="weekdays" style="background:#deac21;color:white;border:0;">Domenica</div>
                    <div class="days"></div>
                    <div class="days"></div>
                    <div class="days">1</div>
                    <div class="days">2<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2) || ($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp c\" style=\"margin-left:6.7vh;\">C</div>";
                            }
                        ?>
                    </div>
                    <div class="days">3<br>
                        <?php
                            if(($_SESSION["subplan"]==1)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else{
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend">4</div>
                    <div class="days weekend" style="border-right:0;">5</div>
                    <div class="days">6</div>
                    <div class="days">7</div>
                    <div class="days">8</div>
                    <div class="days">9<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp pm\" style=\"margin-left:6.7vh;\">PM</div>";
                            }
                            else{
                                echo "<div class=\"contstamp pm\" style=\"margin-left:2.5vh;\">PM</div>";
                                echo "<div class=\"contstamp v\" style=\"margin-left:2.5vh;\">V</div>";
                            }
                        ?>
                    </div>
                    <div class="days">10<br>
                        <?php
                            if(($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend">11</div>
                    <div class="days weekend" style="border-right:0;">12</div>
                    <div class="days">13<br>
                        <?php
                            if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                        ?>
                    </div>
                    <div class="days">14</div>
                    <div class="days">15</div>
                    <div class="days">16<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2) || ($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp c\" style=\"margin-left:6.7vh;\">C</div>";
                            }
                        ?>
                    </div>
                    <div class="days">17<br>
                        <?php
                            if(($_SESSION["subplan"]==1)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else{
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend">18</div>
                    <div class="days weekend" style="border-right:0;">19</div>
                    <div class="days">20</div>
                    <div class="days">21</div>
                    <div class="days">22</div>
                    <div class="days">23<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp pm\" style=\"margin-left:6.7vh;\">PM</div>";
                            }
                            else{
                                echo "<div class=\"contstamp pm\" style=\"margin-left:2.5vh;\">PM</div>";
                                echo "<div class=\"contstamp v\" style=\"margin-left:2.5vh;\">V</div>";
                            }
                        ?>
                    </div>
                    <div class="days">24<br>
                        <?php
                            if(($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend">25</div>
                    <div class="days weekend" style="border-right:0;">26</div>
                    <div class="days" style="border-bottom:0;border-radius: 0px 0px 0px 10px;">27<br>
                        <?php
                            if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                        ?>
                    </div>
                    <div class="days" style="border-bottom:0;">28</div>
                    <div class="days" style="border-bottom:0;">29</div>
                    <div class="days" style="border-bottom:0;">30<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2) || ($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp c\" style=\"margin-left:6.7vh;\">C</div>";
                            }
                        ?>
                    </div>
                    <div class="days" style="border-bottom:0;"></div>
                    <div class="days weekend" style="border-bottom:0;"></div>
                    <div class="days weekend" style="border-right:0;border-bottom:0;border-radius: 0px 0px 10px 0px;"></div>
                    <input type="button" class="btnleftcal" value="&#10094;" onclick="changemonth('month9','month8')">
                    <input type="button" class="btnrightcal" value="&#10095;" onclick="changemonth('month9','month10')">
                </div>
                <div class="month col-8" id="month10" style="padding:.1px;">
                    <div class="head">
                        <h2>Ottobre 2021</h2>
                    </div>
                    <div class="weekdays">Lunedì</div>
                    <div class="weekdays">Martedì</div>
                    <div class="weekdays">Mercoledì</div>
                    <div class="weekdays">Giovedì</div>
                    <div class="weekdays">Venerdì</div>
                    <div class="weekdays" style="background:#deac21;color:white;">Sabato</div>
                    <div class="weekdays" style="background:#deac21;color:white;border:0;">Domenica</div>
                    <div class="days"></div>
                    <div class="days"></div>
                    <div class="days"></div>
                    <div class="days"></div>
                    <div class="days">1<br>
                        <?php
                            if(($_SESSION["subplan"]==1)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else{
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend">2</div>
                    <div class="days weekend" style="border-right:0;">3</div>
                    <div class="days">4</div>
                    <div class="days">5</div>
                    <div class="days">6</div>
                    <div class="days">7<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp pm\" style=\"margin-left:6.7vh;\">PM</div>";
                            }
                            else{
                                echo "<div class=\"contstamp pm\" style=\"margin-left:2.5vh;\">PM</div>";
                                echo "<div class=\"contstamp v\" style=\"margin-left:2.5vh;\">V</div>";
                            }
                        ?>
                    </div>
                    <div class="days">8<br>
                        <?php
                            if(($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend">9</div>
                    <div class="days weekend" style="border-right:0;">10</div>
                    <div class="days">11<br>
                        <?php
                            if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                        ?>
                    </div>
                    <div class="days">12</div>
                    <div class="days">13</div>
                    <div class="days">14<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2) || ($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp c\" style=\"margin-left:6.7vh;\">C</div>";
                            }
                        ?>
                    </div>
                    <div class="days">15<br>
                        <?php
                            if(($_SESSION["subplan"]==1)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else{
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend">16</div>
                    <div class="days weekend" style="border-right:0;">17</div>
                    <div class="days">18</div>
                    <div class="days">19</div>
                    <div class="days">20</div>
                    <div class="days">21<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp pm\" style=\"margin-left:6.7vh;\">PM</div>";
                            }
                            else{
                                echo "<div class=\"contstamp pm\" style=\"margin-left:2.5vh;\">PM</div>";
                                echo "<div class=\"contstamp v\" style=\"margin-left:2.5vh;\">V</div>";
                            }
                        ?>
                    </div>
                    <div class="days">22<br>
                        <?php
                            if(($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend">23</div>
                    <div class="days weekend" style="border-right:0;">24</div>
                    <div class="days" style="border-bottom:0;border-radius: 0px 0px 0px 10px;">25<br>
                        <?php
                            if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                        ?>
                    </div>
                    <div class="days" style="border-bottom:0;">26</div>
                    <div class="days" style="border-bottom:0;">27</div>
                    <div class="days" style="border-bottom:0;">28<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2) || ($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp c\" style=\"margin-left:6.7vh;\">C</div>";
                            }
                        ?>
                    </div>
                    <div class="days" style="border-bottom:0;">29<br>
                        <?php
                            if(($_SESSION["subplan"]==1)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else{
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend" style="border-bottom:0;">30</div>
                    <div class="days weekend" style="border-right:0;border-bottom:0;border-radius: 0px 0px 10px 0px;">31</div>
                    <input type="button" class="btnleftcal" value="&#10094;" onclick="changemonth('month10','month9')">
                    <input type="button" class="btnrightcal" value="&#10095;" onclick="changemonth('month10','month11')">
                </div>
                <div class="month col-8" id="month11" style="padding:.1px;">
                    <div class="head">
                        <h2>Novembre 2021</h2>
                    </div>
                    <div class="weekdays">Lunedì</div>
                    <div class="weekdays">Martedì</div>
                    <div class="weekdays">Mercoledì</div>
                    <div class="weekdays">Giovedì</div>
                    <div class="weekdays">Venerdì</div>
                    <div class="weekdays" style="background:#deac21;color:white;">Sabato</div>
                    <div class="weekdays" style="background:#deac21;color:white;border:0;">Domenica</div>
                    <div class="days">1</div>
                    <div class="days">2</div>
                    <div class="days">3</div>
                    <div class="days">4<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp pm\" style=\"margin-left:6.7vh;\">PM</div>";
                            }
                            else{
                                echo "<div class=\"contstamp pm\" style=\"margin-left:2.5vh;\">PM</div>";
                                echo "<div class=\"contstamp v\" style=\"margin-left:2.5vh;\">V</div>";
                            }
                        ?>
                    </div>
                    <div class="days">5<br>
                        <?php
                            if(($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend">6</div>
                    <div class="days weekend" style="border-right:0;">7</div>
                    <div class="days">8<br>
                        <?php
                            if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                        ?>
                    </div>
                    <div class="days">9</div>
                    <div class="days">10</div>
                    <div class="days">11<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2) || ($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp c\" style=\"margin-left:6.7vh;\">C</div>";
                            }
                        ?>
                    </div>
                    <div class="days">12<br>
                        <?php
                            if(($_SESSION["subplan"]==1)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else{
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend">13</div>
                    <div class="days weekend" style="border-right:0;">14</div>
                    <div class="days">15</div>
                    <div class="days">16</div>
                    <div class="days">17</div>
                    <div class="days">18<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp pm\" style=\"margin-left:6.7vh;\">PM</div>";
                            }
                            else{
                                echo "<div class=\"contstamp pm\" style=\"margin-left:2.5vh;\">PM</div>";
                                echo "<div class=\"contstamp v\" style=\"margin-left:2.5vh;\">V</div>";
                            }
                        ?>
                    </div>
                    <div class="days">19<br>
                        <?php
                            if(($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend">20</div>
                    <div class="days weekend" style="border-right:0;">21</div>
                    <div class="days">22<br>
                        <?php
                            if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                        ?>
                    </div>
                    <div class="days">23</div>
                    <div class="days">24</div>
                    <div class="days">25<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2) || ($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp c\" style=\"margin-left:6.7vh;\">C</div>";
                            }
                        ?>
                    </div>
                    <div class="days">26<br>
                        <?php
                            if(($_SESSION["subplan"]==1)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else{
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend">27</div>
                    <div class="days weekend" style="border-right:0;">28</div>
                    <div class="days" style="border-bottom:0;border-radius: 0px 0px 0px 10px;">29</div>
                    <div class="days" style="border-bottom:0;">30</div>
                    <div class="days" style="border-bottom:0;"></div>
                    <div class="days" style="border-bottom:0;"></div>
                    <div class="days" style="border-bottom:0;"></div>
                    <div class="days weekend" style="border-bottom:0;"></div>
                    <div class="days weekend" style="border-right:0;border-bottom:0;border-radius: 0px 0px 10px 0px;"></div>
                    <input type="button" class="btnleftcal" value="&#10094;" onclick="changemonth('month11','month10')">
                    <input type="button" class="btnrightcal" value="&#10095;" onclick="changemonth('month11','month12')">
                </div>
                <div class="month col-8" id="month12" style="padding:.1px;">
                    <div class="head">
                        <h2>Dicembre 2021</h2>
                    </div>
                    <div class="weekdays">Lunedì</div>
                    <div class="weekdays">Martedì</div>
                    <div class="weekdays">Mercoledì</div>
                    <div class="weekdays">Giovedì</div>
                    <div class="weekdays">Venerdì</div>
                    <div class="weekdays" style="background:#deac21;color:white;">Sabato</div>
                    <div class="weekdays" style="background:#deac21;color:white;border:0;">Domenica</div>
                    <div class="days"></div>
                    <div class="days"></div>
                    <div class="days">1</div>
                    <div class="days">2<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp pm\" style=\"margin-left:6.7vh;\">PM</div>";
                            }
                            else{
                                echo "<div class=\"contstamp pm\" style=\"margin-left:2.5vh;\">PM</div>";
                                echo "<div class=\"contstamp v\" style=\"margin-left:2.5vh;\">V</div>";
                            }
                        ?>
                    </div>
                    <div class="days">3<br>
                        <?php
                            if(($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend">4</div>
                    <div class="days weekend" style="border-right:0;">5</div>
                    <div class="days">6<br>
                        <?php
                            if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                        ?>
                    </div>
                    <div class="days">7</div>
                    <div class="days">8</div>
                    <div class="days">9<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2) || ($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp c\" style=\"margin-left:6.7vh;\">C</div>";
                            }
                        ?>
                    </div>
                    <div class="days">10<br>
                        <?php
                            if(($_SESSION["subplan"]==1)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else{
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend">11</div>
                    <div class="days weekend" style="border-right:0;">12</div>
                    <div class="days">13</div>
                    <div class="days">14</div>
                    <div class="days">15</div>
                    <div class="days">16<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp pm\" style=\"margin-left:6.7vh;\">PM</div>";
                            }
                            else{
                                echo "<div class=\"contstamp pm\" style=\"margin-left:2.5vh;\">PM</div>";
                                echo "<div class=\"contstamp v\" style=\"margin-left:2.5vh;\">V</div>";
                            }
                        ?>
                    </div>
                    <div class="days">17<br>
                        <?php
                            if(($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend">18</div>
                    <div class="days weekend" style="border-right:0;">19</div>
                    <div class="days">20<br>
                        <?php
                            if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                        ?>
                    </div>
                    <div class="days">21</div>
                    <div class="days">22</div>
                    <div class="days">23<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2) || ($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp c\" style=\"margin-left:6.7vh;\">C</div>";
                            }
                        ?>
                    </div>
                    <div class="days">24<br>
                        <?php
                            if(($_SESSION["subplan"]==1)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else{
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend">25</div>
                    <div class="days weekend" style="border-right:0;">26</div>
                    <div class="days" style="border-bottom:0;border-radius: 0px 0px 0px 10px;">27</div>
                    <div class="days" style="border-bottom:0;">28</div>
                    <div class="days" style="border-bottom:0;">29</div>
                    <div class="days" style="border-bottom:0;">30<br>
                        <?php
                            if(($_SESSION["subplan"]==1) || ($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp pm\" style=\"margin-left:6.7vh;\">PM</div>";
                            }
                            else{
                                echo "<div class=\"contstamp pm\" style=\"margin-left:2.5vh;\">PM</div>";
                                echo "<div class=\"contstamp v\" style=\"margin-left:2.5vh;\">V</div>";
                            }
                        ?>
                    </div>
                    <div class="days" style="border-bottom:0;">31<br>
                        <?php
                            if(($_SESSION["subplan"]==2)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:6.7vh;\">U</div>";
                            }
                            else if(($_SESSION["subplan"]==3)){
                                echo "<div class=\"contstamp u\" style=\"margin-left:2.5vh;\">U</div>";
                                echo "<div class=\"contstamp s\" style=\"margin-left:2.5vh;\">S</div>";
                            }
                        ?>
                    </div>
                    <div class="days weekend" style="border-bottom:0;"></div>
                    <div class="days weekend" style="border-right:0;border-bottom:0;border-radius: 0px 0px 10px 0px;"></div>
                    <input type="button" class="btnleftcal" value="&#10094;" onclick="changemonth('month12','month11')">
                </div>
                <div class="legenda" style="left:31%;">
                    <div class="contstamp pm">PM</div><p class="legendatext">Plastica e Metalli</p>
                </div>
                <div class="legenda" style="left:46%;">
                    <div class="contstamp c">C</div><p class="legendatext">Carta</p>
                </div>
                <div class="legenda" style="left:55%;">
                    <div class="contstamp u">U</div><p class="legendatext">Umido</p>
                </div>
                <div class="legenda" style="left:64%;">
                    <div class="contstamp s">S</div><p class="legendatext">Secco</p>
                </div>
                <div class="legenda" style="left:73%;">
                    <div class="contstamp v">V</div><p class="legendatext">Vetro</p>
                </div>
            </div>
        </div>
        <script>
            document.getElementById("month<?= managemonth();?>").style.display="block";
        </script>
        <script>
            function changemonth(current,newid){
                var currentmonth=document.getElementById(current);
                var newmonth=document.getElementById(newid);
                currentmonth.style.display="none";
                newmonth.style.display="block";
            }
        </script>
    </body>
</html>