<?php
// include("mpdf/mpdf.php");

// $mpdf = new mPDF();
// $mpdf->WriteHTML('<h1>Hello world!</h1>');
// $mpdf->Output()

//$firstName = $_POST['firstName'];
//echo $firstName;
//workspace

//$photoapplicant =$_POST['filephoto'];
//$photoapplicant =$_POST['filephoto'];





$preferenceOne =$_POST['pre1'];
$preferenceTwo =$_POST['pre2'];
$preferenceThree =$_POST['pre3'];
$applicantName =$_POST['Aname'];
$initialDetails =$_POST['Idetails'];
$applicantAge =$_POST['Aage'];
$placeOfBirth =$_POST['Pbirth'];
$guardianName =$_POST['Gname'];
$relationGuardian =$_POST['Relation'];
$occupationGuardian =$_POST['Occu'];
$annualIncome =$_POST['Aincome'];
$guardianAddress =$_POST['Gaddress'];
$guardianPhone =$_POST['Gphone'];
$communicationAddress =$_POST['Caddress'];
$communicationPhone =$_POST['Cphone'];
$applicantReligion =$_POST['Religion'];
//$eligiblePdf =$_POST['file1'];


$ePassed1 =$_POST['Exampassed1'];
$eName1 =$_POST['Examname1'];
$yStudy1 =$_POST['Yearstudy1'];
$bName1 =$_POST['Boardname1'];
$yPassing1 =$_POST['Yearpassing1'];
$regNO1 =$_POST['Regno1'];
$iName1 =$_POST['Institutionname1'];

$ePassed2 =$_POST['Exampassed2'];
$eName2 =$_POST['Examname2'];
$yStudy2 =$_POST['Yearstudy2'];
$bNmae2 =$_POST['Boardname2'];
$yPassing2 =$_POST['Yearpassing2'];
$regNo2 =$_POST['Regno2'];
$iName2 =$_POST['Institutionname2'];

$appearTime =$_POST['appeartime'];
$lChoice =$_POST['Lchoice'];
$consider =$_POST['Consideration'];
$sAddress =$_POST['Saddress'];

$nameExamPass =$_POST['NameExamPassed'];
$yearOfPass =$_POST['YearOfPass'];
$nameOfBoard =$_POST['NameOfBoard'];
$specifyRegno =$_POST['Specifyregno'];

$englishNta =$_POST['EnglishNTA'];
$englishMs =$_POST['EnglishMS'];
$englishMm =$_POST['EnglishMM'];
$englishPm =$_POST['EnglishPM'];

$langNta =$_POST['LanguageNTA'];
$langMs =$_POST['LanguageMS'];
$langMm =$_POST['LanguageMM'];
$langPm =$_POST['LanguagePM'];


$firstNta =$_POST['FirstNTA'];
$firstMs =$_POST['FirstMS'];
$firstMm =$_POST['FirstMM'];
$firstPm =$_POST['FirstPM'];


$secondNta =$_POST['SecondNTA'];
$secondMs =$_POST['SecondMS'];
$secondMm =$_POST['SecondMM'];
$secondPm =$_POST['SecondPM'];


$thirdNta =$_POST['ThirdNTA'];
$thirdMs =$_POST['ThirdMS'];
$thirdMm =$_POST['ThirdMM'];
$thirdPm =$_POST['ThirdPM'];


$fourthNta =$_POST['FourthNTA'];
$fourthMs =$_POST['FourthMS'];
$fourthMm =$_POST['FourthMM'];
$fourthPm =$_POST['FourthPM'];

$fifthNta =$_POST['FifthNTA'];
$fifthMs =$_POST['FifthMS'];
$fifthMm =$_POST['FifthMM'];
$fifthPm =$_POST['FifthPM'];

$dDate =$_POST['Ddate'];
$nameApplicant =$_POST['Nameofapplicant'];
//$fileSig =$_POST['filesig'];
//$fileGSig =$_POST['fileGsig'];

$data=array();
array_push($data,   $preferenceOne,
  $preferenceTwo, 
  $preferenceThree,
  $applicantName, 
  $initialDetails,
  $applicantAge, 
  $placeOfBirth, 
  $guardianName, 
  $relationGuardian,
  $occupationGuardian, 
  $annualIncome,
  $guardianAddress,
  $guardianPhone, 
  $communicationAddress,
  $communicationPhone,
  $applicantReligion, 
  $eligiblePdf, 
  $ePassed1, 
  $eName1, 
  $yStudy1, 
  $bName1,
  $yPassing1, 
  $regNO1,  
  $iName1,  
  $ePassed2,  
  $eName2,  
  $yStudy2,  
  $bNmae2,  
  $yPassing2, 
  $regNo2, 
  $iName2,  
  $appearTime,  
  $lChoice,  
  $consider,  
  $sAddress, 
  $nameExamPass,  
  $yearOfPass,  
  $nameOfBoard,  
  $specifyRegno, 
  $englishNta, 
  $englishMs, 
  $englishMm,  
  $englishPm, 
  $langNta, 
  $langMs,
  $langMm, 
  $langPm,  
  $firstNta,  
  $firstMs,  
  $firstMm, 
  $firstPm,  
  $secondNta, 
  $secondMs,  
  $secondMm, 
  $secondPm,  
  $thirdNta,  
  $thirdMs,  
  $thirdMm, 
  $thirdPm, 
  $fourthNta,  
  $fourthMs, 
  $fourthMm, 
  $fourthPm, 
  $fifthNta,  
  $fifthMs,  
  $fifthMm,  
  $fifthPm,  
  $dDate,  
  $nameApplicant,  
  $fileSig,  
  $fileGSig); 
  
  print_r($data);




?>