<?php
include("mpdf/mpdf.php");

$mpdf = new mPDF();
$mpdf->WriteHTML('<h1>Hello world!</h1>');
$mpdf->Output()

//$firstName = $_POST['firstName'];
//echo $firstName;




?>