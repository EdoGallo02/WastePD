<?php
    session_start();
    if(!isset($_SESSION["codf"])){
        die("<script>location.href='index.php'</script>");
    }
    include "functions/functions.php";
    require_once 'functions/connection.php';
    $codu= getcodu2($conn, $_SESSION["email"]);
    $sql="SELECT dataf FROM fatture WHERE numf=".$_GET["cod"]." AND fk_users=$codu";
    $result= mysqli_query($conn, $sql);
    $row= mysqli_fetch_assoc($result);
    $price=getsubprice($conn, $_SESSION["subplan"]);
    $pricenoiva= number_format($price*100/122,2);
    $iva= number_format($pricenoiva*22/100,2);
    use setasign\Fpdi\Fpdi;
    require_once('fpdf/fpdf.php');
    require_once('fpdi/src/autoload.php');
    $pdf=new Fpdi();
    $pdf->AddPage();
    $pdf->setSourceFile('templates/invoicetemplate.pdf');
    $tplIdx = $pdf->importPage(1);
    $pdf->useTemplate($tplIdx);
    $pdf->SetFont('Helvetica');
    $pdf->SetTextColor(0, 0, 0);
    // Font 12
    $pdf->SetFontSize("12");
    $pdf->SetXY(42, 15.75);
    $pdf->Write(0, $_SESSION["lastname"]." ".$_SESSION["firstname"]);
    $pdf->SetXY(47, 23);
    $pdf->Write(0, $_SESSION["codf"]);
    $pdf->SetXY(37, 30.8);
    $pdf->Write(0, "Via ".$_SESSION["via"]." ".$_SESSION["civ"]);
    $pdf->SetXY(42, 38.7);
    $pdf->Write(0, $_SESSION["com"].", ".$_SESSION["pro"]);
    $pdf->SetXY(33, 46.5);
    $pdf->Write(0, $_SESSION["email"]);
    // Font 14
    $pdf->SetFontSize("14");
    $pdf->SetXY(172, 120.4);
    $pdf->Write(0, 'Euro '. $pricenoiva);
    $pdf->SetXY(173.5, 133.4);
    $pdf->Write(0, 'Euro '.$iva);
    // Font 15
    $pdf->SetFontSize("15");
    $pdf->SetXY(55, 69.4);
    $pdf->Write(0, $_GET["cod"]);
    $pdf->SetXY(150, 69.7);
    $pdf->Write(0, $row["dataf"]);
    $pdf->SetXY(171, 154.5);
    $pdf->Write(0, 'Euro '.$price);
    $pdf->Output('generated.pdf','I');