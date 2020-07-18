<?php
// include("mpdf/mpdf.php");

// $mpdf = new mPDF();
// $mpdf->WriteHTML('<h1>Hello world!</h1>');
// $mpdf->Output()

//$firstName = $_POST['firstName'];
//echo $firstName;
//workspace

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


//workspace2

echo $preferenceOne;
echo $preferenceTwo; 
echo $preferenceThree;
echo $applicantName; 
echo $initialDetails;
echo $applicantAge; 
echo $placeOfBirth; 
echo $guardianName; 
echo $relationGuardian; 
echo $occupationGuardian; 
echo $annualIncome;
echo $guardianAddress; 
echo $guardianPhone; 
echo $communicationAddress; 
echo $communicationPhone;
echo $applicantReligion; 
//echo $eligiblePdf; 


echo $ePassed1; 
echo $eName1; 
echo $yStudy1; 
echo $bName1; 
echo $yPassing1; 
echo $regNO1;  
echo $iName1;  

echo $ePassed2;  
echo $eName2;  
echo $yStudy2;  
echo $bNmae2;  
echo $yPassing2;  
echo $regNo2; 
echo $iName2;  

echo $appearTime;  
echo $lChoice;  
echo $consider;  
echo $sAddress; 

echo $nameExamPass;  
echo $yearOfPass;  
echo $nameOfBoard;  
echo $specifyRegno;  

echo $englishNta; 
echo $englishMs;  
echo $englishMm;  
echo $englishPm; 


echo $langNta; 
echo $langMs;
echo $langMm; 
echo $langPm;  


echo $firstNta;  
echo $firstMs;  
echo $firstMm; 
echo $firstPm;  


echo $secondNta;  
echo $secondMs;  
echo $secondMm; 
echo $secondPm;  


echo $thirdNta;  
echo $thirdMs;  
echo $thirdMm; 
echo $thirdPm; 


echo $fourthNta;  
echo $fourthMs; 
echo $fourthMm; 
echo $fourthPm;  

echo $fifthNta;  
echo $fifthMs;  
echo $fifthMm;  
echo $fifthPm;  

echo $dDate;  
echo $nameApplicant;  
//echo $fileSig;  
//echo $fileGSig; 








?>