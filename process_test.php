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
$target_path = "/";  
$target_path = $target_path.basename( $_FILES['filephoto']['name']);
if(move_uploaded_file($_FILES['filephoto']['tmp_name'], $target_path)) {  
    echo "File uploaded successfully!";  
} else{  
    echo "Sorry, file not uploaded, please try again!";  
}



// Image Upload

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



$data=[   'Preference 1: ' => $preferenceOne,
'Preference 2: ' => $preferenceTwo, 
'Preference 3: ' => $preferenceThree,
'Name in Full: ' => $applicantName, 
'Expansion of Intials if any: ' => $initialDetails,
'Age and Date Of Birth: ' => $applicantAge, 
'Place of Birth with Taluk and District: ' => $placeOfBirth, 
'Name of Parent or Guardian: ' => $guardianName, 
'Relationship of Applicant With Guardian: ' => $relationGuardian,
'Occupation of the Guardian: ' => $occupationGuardian, 
'Annual Income of the Guardian: ' => $annualIncome,
'Address of the Guardian with Taluk and District: ' => $guardianAddress,
'Phone No.: ' => $guardianPhone, 
'Address to which Communications are to be send: ' => $communicationAddress,
'Phone No. With code.Res: Off: Mobile: ' => $communicationPhone,
'Religion with denomination of Caste:' => $applicantReligion, 
'Age and Date Of Birth: ' => $eligiblePdf, 
'Age and Date Of Birth: ' => $ePassed1, 
'Age and Date Of Birth: ' => $eName1, 
'Age and Date Of Birth: ' => $yStudy1, 
'Age and Date Of Birth: ' => $bName1,
'Age and Date Of Birth: ' => $yPassing1, 
'Age and Date Of Birth: ' => $regNO1,  
'Age and Date Of Birth: ' => $iName1,  
'Age and Date Of Birth: ' => $ePassed2,  
'Age and Date Of Birth: ' => $eName2,  
'Age and Date Of Birth: ' => $yStudy2,  
'Age and Date Of Birth: ' => $bNmae2,  
'Age and Date Of Birth: ' => $yPassing2, 
'Age and Date Of Birth: ' => $regNo2, 
'Age and Date Of Birth: ' => $iName2,  
'Age and Date Of Birth: ' => $appearTime,  
'Age and Date Of Birth: ' => $lChoice,  
'Age and Date Of Birth: ' => $consider,  
'Age and Date Of Birth: ' => $sAddress, 
'Age and Date Of Birth: ' => $nameExamPass,  
'Age and Date Of Birth: ' => $yearOfPass,  
'Age and Date Of Birth: ' => $nameOfBoard,  
'Age and Date Of Birth: ' => $specifyRegno, 
'Age and Date Of Birth: ' => $englishNta, 
'Age and Date Of Birth: ' => $englishMs, 
'Age and Date Of Birth: ' => $englishMm,  
'Age and Date Of Birth: ' => $englishPm, 
'Age and Date Of Birth: ' => $langNta, 
'Age and Date Of Birth: ' => $langMs,
'Age and Date Of Birth: ' => $langMm, 
'Age and Date Of Birth: ' => $langPm,  
'Age and Date Of Birth: ' => $firstNta,  
'Age and Date Of Birth: ' => $firstMs,  
'Age and Date Of Birth: ' => $firstMm, 
'Age and Date Of Birth: ' => $firstPm,  
'Age and Date Of Birth: ' => $secondNta, 
'Age and Date Of Birth: ' => $secondMs,  
'Age and Date Of Birth: ' => $secondMm, 
'Age and Date Of Birth: ' => $secondPm,  
'Age and Date Of Birth: ' => $thirdNta,  
'Age and Date Of Birth: ' => $thirdMs,  
'Age and Date Of Birth: ' => $thirdMm, 
'Age and Date Of Birth: ' => $thirdPm, 
'Age and Date Of Birth: ' => $fourthNta,  
'Age and Date Of Birth: ' => $fourthMs, 
'Age and Date Of Birth: ' => $fourthMm, 
'Age and Date Of Birth: ' => $fourthPm, 
'Age and Date Of Birth: ' => $fifthNta,  
'Age and Date Of Birth: ' => $fifthMs,  
'Age and Date Of Birth: ' => $fifthMm,  
'Age and Date Of Birth: ' => $fifthPm,  
'Age and Date Of Birth: ' => $dDate,  
'Age and Date Of Birth: ' => $nameApplicant,  
'Age and Date Of Birth: ' => $fileSig,  
'Age and Date Of Birth: ' => $fileGSig]; 
  
print_r($data);




?>