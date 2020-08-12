
<?php
header("Access-Control-Allow-Origin: *");
$url = "http://websitewithme.in/pgmadmission/";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


$file = 'application.txt'; // the name of the text file (must be writeable by the server)
$lastID = file_get_contents ($file); // read file data and store as variable
$applicationID = intval($lastID)+1; // increment the value
file_put_contents($file, $applicationID); // write the new value back to file

require_once __DIR__ . '/vendor/autoload.php';

if ( $_FILES['applicantPDF']['error'] == 0)
{
    $applicantPDF = 'applicantPDF-'.$applicationID.'.'.basename($_FILES["applicantPDF"]["type"]);
}
// Photo Upload

$uploaddir = 'uploads/';
$applicantPhoto = 'applicantPhoto-'.$applicationID.'.'.basename($_FILES["applicantPhoto"]["type"]);
$applicantSign = 'applicantSign-'.$applicationID.'.'.basename($_FILES["applicantSign"]["type"]);
$guardianSign = 'guardianSign-'.$applicationID.'.'.basename($_FILES["guardianSign"]["type"]);



if (move_uploaded_file($_FILES['applicantPhoto']['tmp_name'],$uploaddir.$applicantPhoto)) {
    //echo "Applicant Photo is valid, and was successfully uploaded.\n";
} else {
    //echo "Applicant Photo upload Failed! \n";
}

if (move_uploaded_file($_FILES['applicantSign']['tmp_name'],$uploaddir.$applicantSign)) {
    //echo "Applicant Signature File is valid, and was successfully uploaded. \n";
} else {
    //echo "Applicant Signature File upload Failed! \n";
}

if (move_uploaded_file($_FILES['guardianSign']['tmp_name'],$uploaddir.$guardianSign)) {
    //echo "Guardian Signature File is valid, and was successfully uploaded. \n";
} else {
    //echo "Guardian Signature File upload Failed! \n";
}

// if ( $_FILES['applicantPDF']['error'] == 0){
//   $attachmentURL == null;
// }else{
    
      if (move_uploaded_file($_FILES['applicantPDF']['tmp_name'],$uploaddir.$applicantPDF)) {
         $attachmentURL = 'applicantPDF-'.$applicationID.'.'.basename($_FILES["applicantPDF"]["type"]);
         
        //echo "Applicant PDF File is valid, and was successfully uploaded. \n".$attachmentURL;
    } else {
        //echo "Applicant PDF File upload Failed! \n";
    }
//}




$applicantPhotoURL = $url.'uploads/applicantPhoto-'.$applicationID.'.'.basename($_FILES["applicantPhoto"]["type"]);


 $applicantSignURL = $url.'uploads/applicantSign-'.$applicationID.'.'.basename($_FILES["applicantSign"]["type"]);
 
 $guardianSignURL = $url.'uploads/guardianSign-'.$applicationID.'.'.basename($_FILES["guardianSign"]["type"]);

// echo $applicantPhotoURL;

//========================IMAGE AND PDF UPLOADING END======================//
$applicationNo = time();
$mpdf = new \Mpdf\Mpdf();
$mpdf->SetHTMLHeader('
<div style="text-align: right; font-weight: bold;">
   Application Number : '.$applicationID.'
</div>');
$mpdf->WriteHTML('<table border="1">
                        <tr>
                        <td><img src="http://pgmcollege.ac.in/wp-content/uploads/2019/01/logo.png" width="160px"></td>
                        <td align="right"><img src="'.$applicantPhotoURL.'" width="80px"></td>
                        </tr>
                        <tr> <td><label>Course Applied for with Subject. (Preference)</label> </td><td>'.$_POST['firstOption'].'<br> '.$_POST['secondOption'].'<br>'.$_POST['thirdOption'].'</td></tr>
                        <tr> <td><label>Name in full </label> <br> (in block letters as in SSLC Book) </td><td>'.$_POST['fullName'].'</td></tr>
                        <tr> <td><label>Expansion of Initials if any </label> <br> (in block letters as in SSLC Book) </td><td>'.$_POST['nameInitials'].'</td></tr>
                        <tr> <td><label>Age & Date of Birth </label>  </td><td>'.$_POST['applicantAge'].','.$_POST['applicantDOB'].' </td></tr>
                        <tr> <td><label>Place of Birth with Taluk and District </label>  </td><td>'.$_POST['applicantPlaceofbirth'].', '.$_POST['applicantTaluk'].' '.$_POST['applicantDistrict'].'</td></tr>
                        <tr> <td><label>Name of Parent or Guardian </td><td>'.$_POST['applicantParent'].'</td></tr>
                        <tr> <td><label>Relationship of Applicant With Guardian </td><td>'.$_POST['applicantRelationship'].'</td></tr>
                        <tr> <td><label>Occupation of the Guardian </label>  </td><td>'.$_POST['guardianOccupation'].'</td></tr>
                        <tr> <td><label>Annual Income of the Guardian </label> </td><td>'.$_POST['guardianIncome'].'</td></tr>
                        <tr> <td><label>Address of the Guardian with Taluk and District</label> </td><td>'.$_POST['primaryAddress'].'</td></tr>
                         <tr> <td><label>Primary Contact Number</label> </td><td>'.$_POST['primaryContact'].'</td></tr>
                        <tr> <td><label>Address to which Communications are to be send </label> </td><td>'.$_POST['secondaryAddress'].'</td></tr>
                        <tr> <td><label>Phone Number for Communication</label> </td><td>'.$_POST['secondaryContact'].'</td></tr>
                        <tr> <td><label>Religion with denomination of Caste </label> <br>(if SC/ST/OBC/OEC-specify) </td><td>'.$_POST['applicantReligion'].'</td></tr>
                        
                        <tr> <td><label>No. of times the applicant appeared for the qualifying exam with Year  </label> </td><td>'.$_POST['applicantExamtime'].'</td></tr>
                        <tr> <td><label>Language choice under Part II  </label> </td><td>'.$_POST['applicantLanguagechoice'].'</td></tr>
                        <tr> <td><label>Any claims for special consideration of the application </label> </td><td>'.$_POST['applicantSpecial'].'</td></tr>
                        <tr> <td><label>Address where the applicant intents to stay.  </label> </td><td>'.$_POST['applicantIntents'].'</td></tr>
                       
                        </table>
                        <h3>Educational Qualification Details</h3>
                        <table border="1">
                        <tr>
                        <td><label>Exam Passed</label></td>
                        <td><label>	Name of Exam</label></td>
                        <td><label>	Year of Study</label></td>
                        <td><label>	Name of Exam Board/University</label></td>
                       <td><label>	Year of Passing.</label></td>
                        <td><label>	Reg. No.</label></td>
                        <td><label>	Name of Institution / Place</label></td>
                        </tr>
                        <tr>
                        <td>'. $_POST['examPassed'][0] .'</td>
                        <td>'. $_POST['examName'][0] .'</td>
                        <td>'. $_POST['joinYear'][0] .'</td>
                        <td>'. $_POST['examBoard'][0] .'</td>
                        <td>'. $_POST['examYear'][0] .'</td>
                        <td>'. $_POST['examReg'][0] .'</td>
                        <td>'. $_POST['examInstitution'][0] .'</td>
                        </tr>
                        <tr>
                        <td>'. $_POST['examPassed'][1] .'</td>
                        <td>'. $_POST['examName'][1] .'</td>
                        <td>'. $_POST['joinYear'][1] .'</td>
                        <td>'. $_POST['examBoard'][1] .'</td>
                        <td>'. $_POST['examYear'][1] .'</td>
                        <td>'. $_POST['examReg'][1] .'</td>
                        <td>'. $_POST['examInstitution'][1] .'</td>
                        </tr>
                        </table>  
                        <pagebreak>
                        <h3>Statement of Marks</h3>
                        <table border="1">
                         <tr>
                        <td><label>Name of Exam Passed : </label>'. $_POST['examPass'] .'</td>
                        <td><label>	Year of Passing</label> : '. $_POST['examYr'] .'</td>
                   
                        </tr>
                    <tr>
                        <td><label>	Name of Board/University : </label>'. $_POST['examBd'] .'</td>
                        <td><label>	Reg. No.: </label>'. $_POST['examRg'] .'</td>
                   
                        </tr>
                        
                        </table>                 
                        <table border="1">
                        <tr>
                        <td><label>Subjects</label></td>
                        <td><label>No. of Times Appeared</label></td>
                        <td><label>Marks Secured</label></td>
                        <td><label>	Max. Marks</label></td>
                        <td><label>Percentage of Marks.</label></td>                      
                        </tr>
                        <tr>
                        <td>'. $_POST['subjectName'][0] .'</td>
                        <td>'. $_POST['subjectAppeared'][0] .'</td>
                        <td>'. $_POST['subjectMarks'][0] .'</td>
                        <td>'. $_POST['subjectMax'][0] .'</td>
                        <td>'. $_POST['subjectPercentage'][0] .'</td>
                        </tr>
                        <tr>
                        <td>'. $_POST['subjectName'][1] .'</td>
                        <td>'. $_POST['subjectAppeared'][1] .'</td>
                        <td>'. $_POST['subjectMarks'][1] .'</td>
                        <td>'. $_POST['subjectMax'][1] .'</td>
                        <td>'. $_POST['subjectPercentage'][1] .'</td>
                        </tr>
                        <tr>
                        <td>'. $_POST['subjectName'][2] .'</td>
                        <td>'. $_POST['subjectAppeared'][2] .'</td>
                        <td>'. $_POST['subjectMarks'][2] .'</td>
                        <td>'. $_POST['subjectMax'][2] .'</td>
                        <td>'. $_POST['subjectPercentage'][2] .'</td>
                        </tr>
                        <tr>
                        <td>'. $_POST['subjectName'][3] .'</td>
                        <td>'. $_POST['subjectAppeared'][3] .'</td>
                        <td>'. $_POST['subjectMarks'][3] .'</td>
                        <td>'. $_POST['subjectMax'][3] .'</td>
                        <td>'. $_POST['subjectPercentage'][3] .'</td>
                        </tr>
                        <tr>
                        <td>'. $_POST['subjectName'][4] .'</td>
                        <td>'. $_POST['subjectAppeared'][4] .'</td>
                        <td>'. $_POST['subjectMarks'][4] .'</td>
                        <td>'. $_POST['subjectMax'][4] .'</td>
                        <td>'. $_POST['subjectPercentage'][4] .'</td>
                        </tr>
                        <tr>
                        <td>'. $_POST['subjectName'][5] .'</td>
                        <td>'. $_POST['subjectAppeared'][5] .'</td>
                        <td>'. $_POST['subjectMarks'][5] .'</td>
                        <td>'. $_POST['subjectMax'][5] .'</td>
                        <td>'. $_POST['subjectPercentage'][5] .'</td>
                        </tr>
                        <tr>
                        <td>'. $_POST['subjectName'][6] .'</td>
                        <td>'. $_POST['subjectAppeared'][6] .'</td>
                        <td>'. $_POST['subjectMarks'][6] .'</td>
                        <td>'. $_POST['subjectMax'][6] .'</td>
                        <td>'. $_POST['subjectPercentage'][6] .'</td>
                        </tr>
                        <tr>
                        <td>'. $_POST['subjectName'][7] .'</td>
                        <td>'. $_POST['subjectAppeared'][7] .'</td>
                        <td>'. $_POST['subjectMarks'][7] .'</td>
                        <td>'. $_POST['subjectMax'][7] .'</td>
                        <td>'. $_POST['subjectPercentage'][7] .'</td>
                        </tr>
                         <tr>
                        <td>'. $_POST['subjectName'][8] .'</td>
                        <td>'. $_POST['subjectAppeared'][8] .'</td>
                        <td>'. $_POST['subjectMarks'][8] .'</td>
                        <td>'. $_POST['subjectMax'][8] .'</td>
                        <td>'. $_POST['subjectPercentage'][8] .'</td>
                        </tr>
                        </table>   
                        <h3>Declaration Of The Applicant</h3>
                        <p style="font-size: 10px">I hereby declare that all the information given by me in this application is true and correct to the best of my knowledge and belief. I also note that if any of the above statements are found to be incorrect or false or any information or particulars have been suppressed or omitted there from, I am liable to be disqualified and my admission may be cancelled. I have read and understood the contents of the Admission Announcement for the various Programmes. I hereby permit the institute to use, display or transfer any of the details furnished by me in this form for complying with the admission formalities.I will comply with the rules and regulations for student behaviour as notified by the College or University from time to time.</p>
                        <table border="1">
                        <tr>
                        <td><label>Date</label></td>
                        <td>'. date("l jS  F Y h:i:s A").'</td>
                        </tr>
                        <tr>
                        <td><label>Name of Applicant </label></td>
                        <td>'.$_POST['fullName'].'</td>
                        </tr>
                        <tr>
                        <td><label>Signature of the Applicant </label></td>
                        <td><img src="'.$applicantSignURL.'" width="80px"></td>
                        </tr>
                        <tr>
                        <td><label>	Signature of the Guardian</label></td>
                        <td><img src="'.$guardianSignURL.'" width="80px"> </td>
                        </tr>
                        </table> 
        ');


$emailAttachment = $mpdf->Output('','S');
$mpdf->Output($uploaddir.'application-form-'.$applicationID.'.pdf','F'); // For Download

// 
// $emailAttachment = chunk_split(base64_encode($emailAttachment));

// echo $emailAttachment;

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output :: SMTP::DEBUG_SERVER; 
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'server.insibe.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'admissions@pgmcollege.ac.in';                     // SMTP username
    $mail->Password   = 'Q1W2E3R4T5@123';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('admissions@pgmcollege.ac.in', 'Admission Form');
    $mail->addAddress('pgmcollege@gmail.com', 'PGM ADMIN');     // Add a recipient
              // Name is optional

//echo $attachmentURL;
    // Attachments
        $mail->addStringAttachment($emailAttachment, 'application-form-'.$applicationID.'.pdf');
       if ($attachmentURL == null ){
           
       }else{
           $mail->addAttachment("uploads/".$attachmentURL); 
       }
       
       
          // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'You have one Filled Admission Form - '.$applicationID;
    $mail->Body    = 'Dear Admin,<br> You have a application form filled by a candidate. Kindly make a loot at it.<br>If a member of any backward community eligible for the concession from the Harijan Welfare Dept., State, Caste, Sub Caste (attested copies of the community and income certificate to be attached: http://websitewithme.in/pgmadmission/uploads/'.$attachmentURL;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    header('URL=http://pgmcollege.ac.in/thank-you/"', true, 301);
    //header("Location:http://pgmcollege.ac.in/thank-you/"); 
    //echo 'Message has been sent';
} catch (Exception $e) {
    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>

<html>
    <head>
        <script>
         setTimeout(function(){
            window.location.href = 'http://pgmcollege.ac.in/thank-you/';
         }, 5000);
      </script>
    </head>
    <body>
        <center><h1>Please Wait. . Do Not Close or Reload Your Window</h1>
        </center>
    </body>
</html>





