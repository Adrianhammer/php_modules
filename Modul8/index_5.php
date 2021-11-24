<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>oppgave 5</h1>

    <form action="index_5.php" method="get">
        <input type="hidden" name="act" value="run">
        <input type="submit" value="Press here">
    </form>


<?php

use setasign\Fpdi\Fpdi;
use setasign\Fpdi\PdfReader;

require_once '../pdf/fpdf184/fpdf.php';
require_once '../pdf/FPDI-2.3.6/src/autoload.php';


if(!empty($_REQUEST['act'])) {
    reg();
}

function reg() {

    $member = "Adrian";
    $date = date("Y/m/d");
    $city = "Kristiansand";
    $image = "/xampp/htdocs/Modul8/img/me.JPG";

    ob_start();

    $pdf = new FPDI();
    $pdf->AddPage();
    $pdf->setSourceFile("/xampp/htdocs/files/velkomstbrev.pdf");

    $tplidx = $pdf->importPage(1);

    $pdf->useTemplate($tplidx, 10, 10, 200);

    $pdf->SetFont("Arial");
    $pdf->SetFontSize(10);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetXY(43, 107);
    $pdf->Write(0, $member);
    $pdf->SetXY(180, 35);
    $pdf->Write(0, $date);
    $pdf->SetXY(178, 30);
    $pdf->Write(0, $city);

    $pdf->Image($image, 80, 222, 60, 70);

    $pdf->Output('newpdf.pdf', 'D');

    ob_end_flush();
}
























?> 





</body>
</html>