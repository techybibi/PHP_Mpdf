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
'Eligibility Documents: ' => $eligiblePdf, 
'Exam Passed 1: ' => $ePassed1, 
'Exam Name 1: ' => $eName1, 
'Year of study 1: ' => $yStudy1, 
'Name of Board 1: ' => $bName1,
'Year of Passing 1: ' => $yPassing1, 
'Registation Number 1: ' => $regNO1,  
'Institution Name 1: ' => $iName1,  
'Exam Passed 2: ' => $ePassed2,  
'Exam Name 2: ' => $eName2,  
'Year of study 2: ' => $yStudy2,  
'Name of Board 2: ' => $bNmae2,  
'Year of passing 2: ' => $yPassing2, 
'Registation Number 2: ' => $regNo2, 
'Institution Name 2: ' => $iName2,  
'Number of times appeared for qualifying exam: ' => $appearTime,  
'Language choice for part II: ' => $lChoice,  
'Claims for special consideration: ' => $consider,  
'Address were applicant intends to stay: ' => $sAddress, 
'Name of Exam Passed: ' => $nameExamPass,  
'Year of Passing: ' => $yearOfPass,  
'Name of Board or University: ' => $nameOfBoard,  
'Registeration Number: ' => $specifyRegno, 
'English Number of times appeared: ' => $englishNta, 
'English marks secured: ' => $englishMs, 
'English maximum marks: ' => $englishMm,  
'English percentage of marks: ' => $englishPm, 
'Language Number of times appeared: ' => $langNta, 
'Language marks secured: ' => $langMs,
'Language maximum marks: ' => $langMm, 
'Language percentage of marks: ' => $langPm,  
'Subject 1 Number of times appeared: ' => $firstNta,  
'Subject 1 marks secured: ' => $firstMs,  
'Subject 1 maximum marks: ' => $firstMm, 
'Subject 1 percentage of marks: ' => $firstPm,  
'Subject 2 Number of times appeared: ' => $secondNta, 
'Subject 2 marks secured: ' => $secondMs,  
'Subject 2 maximum marks: ' => $secondMm, 
'Subject 2 percentage of marks: ' => $secondPm,  
'Subject 3 Number of times appeared: ' => $thirdNta,  
'Subject 3 marks secured: ' => $thirdMs,  
'Subject 3 maximum marks: ' => $thirdMm, 
'Subject 3 percentage of marks: ' => $thirdPm, 
'Subject 4 Number of times appeared: ' => $fourthNta,  
'Subject 4 marks secured: ' => $fourthMs, 
'Subject 4 maximum marks: ' => $fourthMm, 
'Subject 4 percentage of marks: ' => $fourthPm, 
'Subject 5 Number of times appeared: ' => $fifthNta,  
'Subject 5 marks secured: ' => $fifthMs,  
'Subject 5 maximum marks: ' => $fifthMm,  
'subject 5 percentage of marks: ' => $fifthPm,  
'Declaration Date: ' => $dDate,  
'Name of Applicant: ' => $nameApplicant,  
'Signature of applicant: ' => $fileSig,  
'Signature of guardian: ' => $fileGSig]; 
  
  echo $data;




?>