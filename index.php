<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!-- CSS And JavaScript -->
        <title>
        PGM Admission Form
        </title>
        <script src="js/parsley.js"></script>
        <script src="js/parsley.min.js"></script>
    </head>

    <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">PGM College</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="https://pgmcollege.ac.in">About College<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>


        <div class="container">
            <h1 class="display-4 text-center"><u>College Admission Form</u></h3>
                <p class="lead text-center">
                    Kindly Enter the Form & Submit. Download Printable Format <a href="" class="btn btn-primary">Here</a>
                  </p>
                  <div class="alert alert-danger" role="alert">
                    <h3 class="h3 text-center">Things to Follow.</h3>
                    <ul>
                        <li>The user must follow the examples given in Text Box</li>
                        <li>All uploaded files name should be same as <b>Candidate Name</b>.</li>
                        <li>All the fields are <b>Mandatory</b>.</li>
                        <li>If you feel any difficulty in filling the form, kindly <b><a href="https://pgmcollege.ac.in/contact-us/">Contact Us</a></b></li>
                    </ul>
                  </div>
                  <hr/>
            <form action="process_test.php" method="POST" enctype="multipart/form-data" data-parsley-validate>
                <div class="form-group">	
                 <table width="1000" border="0" class="table table-striped">
                   <tbody>
		              <tr>
                       <td><label class="text-justify">Upload your photo(.JPEG)</label></td>
                       <td><input required class="field-center" type="file" name="filephoto" id="fileToUpload"></td>
                     </tr>
                     <tr>
                         <td><label>Course Applied for with Subject. (Preference)</label></td>
                       <td></td>
                     </tr>
                     <tr>
                       <td><span class="float-right">1.&nbsp;</span></td>
                       <td><input required type="text" class="form-control" name="pre1"></td>
                     </tr>
                     <tr>
                       <td><span class="float-right">2.&nbsp;</span></td>
                       <td><input required type="text" class="form-control" name="pre2"></td>
                     </tr>
                     <tr>
                       <td><span class="float-right">3.&nbsp;</span></td>
                       <td><input required type="text" class="form-control" name="pre3"></td>
                     </tr>
                     <tr>
                         <td>&nbsp;</td>
                       <td>&nbsp;</td>
                     </tr>
                     <tr>
                       <td><label>Name in Full<br>(in block letters as in SSLC Book)</label></td>
                       <td><input required type="text" class="form-control" name="Aname"></td>
                     </tr>
                    <tr>
                       <td><label>Expansion of Intials if any</label></td>
                       <td><input required type="text" class="form-control" name="Idetails"></td>
                     </tr>
                    <tr>
                       <td><label>Age and Date Of Birth</label></td>
                       <td><input required type="text" placeholder="Eg: 21, 29.07/1998" class="form-control" name="Aage"></td>
                     </tr>
                      <tr>
                       <td><label>Place of Birth with Taluk and District</label></td>
                       <td><input required type="text" class="form-control" name="Pbirth"></td>
                     </tr>
                      <tr>
                       <td><label>Name of Parent or Guardian</label></td>
                       <td><input required type="text" class="form-control" name="Gname"></td>
                     </tr>
                      <tr>
                       <td><label>Relationship of Applicant With Guardian</label></td>
                       <td><input required type="text" class="form-control" name="Relation"></td>
                     </tr>
                      <tr>
                       <td><label>Occupation of the Guardian</label></td>
                       <td><input required type="text" class="form-control" name="Occu"></td>
                     </tr>
                      <tr>
                       <td><label>Annual Income of the Guardian</label></td>
                       <td><input required type="text" class="form-control" name="Aincome"></td>
                     </tr>
                      <tr>
                       <td><label>Address of the Guardian with Taluk and District</label></td>
                       <td><textarea name="Gaddress"  cols="5" rows="5" class="form-control" placeholder="Eg: Address Line 1,
Address Line 2"></textarea></td>
                     </tr>
                     <tr>
                       <td>Phone No.</td>
                       <td><input required type="text" class="form-control" name="Gphone" placeholder="Eg: +912134567890"></td>
                     </tr>
                      <tr>
                       <td><label>Address to which Communications are to be send</label></td>
                       <td><textarea name="Caddress"  cols="5" rows="5" class="form-control" placeholder="Eg: Address Line 1,
Address Line 2"></textarea></td>
                     </tr>
                     <tr>
                       <td>Phone No./Mobile:</td>
                       <td><input required type="text" class="form-control" name="Cphone" placeholder="Eg: +912134567890"></td>
                     </tr>
                      <tr>
                       <td><label>Religion with denomination of Caste<br>
                       (if SC/ST/OBC/OEC-specify)</label></td>
                       <td><input required type="text" class="form-control" name="Religion"></td>
                     </tr>
                      <tr>
                       <td><label class="text-justify">If a member of any backward community eligible for the concession from the Harijan Welfare Dept.,
                           State, Caste, Sub Caste (attested copies of the
                           community and income certificate to be attached(PDF Upload).</label></td>
                       <td><input required class="field-center" type="file" name="file1" id="fileToUpload"></td>
                     </tr>
                     <tr>
                       <td>&nbsp;</td>
                       <td>&nbsp;</td>
                     </tr>
                     <tr>
                       <td>&nbsp;</td>
                       <td>&nbsp;</td>
                     </tr>
                     <tr>
                       <td>&nbsp;</td>
                       <td>&nbsp;</td>
                     </tr>
                   </tbody>
                 </table>
           <table width="1000" border="1" >
           <tbody>
             <tr>
               <th scope="col" class="text-center" >Exam Passed</th>
               <th scope="col" class="text-center">Name of Exam</th>
               <th scope="col" class="text-center">Year of Study</th>
               <th scope="col" class="text-center">Name of Exam<br>Board/University</th>
               <th scope="col" class="text-center">Year of Passing</th>
               <th scope="col" class="text-center">Reg.<br>No.</th>
               <th scope="col" class="text-center">Name of Institution & Place</th>
             </tr>
             <tr>
             <td><input required type="text" class="form-control" name="Exampassed1"></td>
              <td><input required type="text" class="form-control" name="Examname1"></td>
              <td><input required type="text" class="form-control" name="Yearstudy1"></td>
              <td><input required type="text" class="form-control" name="Boardname1"></td>
              <td><input required type="text" class="form-control" name="Yearpassing1"></td>
             <td><input required type="text" class="form-control" name="Regno1"></td>
              <td><input required type="text" class="form-control" name="Institutionname1"></td>
             </tr>
             <tr>
             <td><input required type="text" class="form-control" name="Exampassed2"></td>
              <td><input required type="text" class="form-control" name="Examname2"></td>
              <td><input required type="text" class="form-control" name="Yearstudy2"></td>
              <td><input required type="text" class="form-control" name="Boardname2"></td>
              <td><input required type="text" class="form-control" name="Yearpassing2"></td>
             <td><input required type="text" class="form-control" name="Regno2"></td>
              <td><input required type="text" class="form-control" name="Institutionname2"></td>
             </tr>
           </tbody>
         </table>
					
          <table width="1000" class="table table-striped mt-5">
           <tbody>
         
         
             
               
                      <tr>
                       <td><label>No. of times the applicant appeared for the qulifying exam with Year </label></td>
                       <td><input required type="text" class="form-control" name="appeartime"></td>
                     </tr>
                       <tr>
                       <td><label>Language choice under Part II </label></td>
                       <td><input required type="text" class="form-control" name="Lchoice"></td>
                     </tr>
                         <tr>
                       <td><label>Any claims for special consideration of the <br> application NCC/NSS/Sports/Ex-Service</label></td>
                       <td><input required type="text" class="form-control" name="Consideration"></td>
                     </tr>
                         <tr>
                       <td><label>Address where the applicant intents to stay.</label></td>
                       <td><textarea name="Saddress"  cols="5" rows="5" class="form-control" placeholder="Eg: Address Line 1,
Address Line 2"></textarea></td>
                     </tr>
             <tr>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
             </tr>
             <tr>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
             </tr>
           </tbody>
         </table>
         <h3 class="text-center"><u>Statement  Of Marks</u></h3>
         <table width="1000" border="0">
           <tbody>
             <tr>
               <td width="500"><label class="text-center">Name of Exam Passed</label>&nbsp;<input required type="text" class="form-control" name="NameExamPassed"></td>
               <td width="500"><label class="text-center">Year of Passing</label>&nbsp;<input required type="text" class="form-control" name="YearOfPass"></td>
             </tr>
             <tr>
              <td width="500"><label class="text-center">Name of Board/University</label>&nbsp;<input required type="text" class="form-control" name="NameOfBoard"></td>
               <td width="500"><label class="text-center">Reg. No.</label>&nbsp;<input required type="text" class="form-control" name="Specifyregno"></td>
             </tr>
           </tbody>
         </table>
         
         <table width="1000" border="1" class="mt-5">
           <tbody>
             <tr>
               <th scope="col" class="text-center" >Subjects</th>
               <th scope="col" class="text-center">No. of Times <br> Appeared</th>
               <th scope="col" class="text-center">Marks Secured</th>
               <th scope="col" class="text-center">Max. Marks</th>
               <th scope="col" class="text-center">Percentage of Marks</th>
             </tr>
             <tr>
               <td><label>English</label></td>
              <td><input required type="text" class="form-control" name="EnglishNTA"></td>
              <td><input required type="text" class="form-control" name="EnglishMS"></td>
              <td><input required type="text" class="form-control" name="EnglishMM"></td>
              <td><input required type="text" class="form-control" name="EnglishPM"></td>
             </tr>
             <tr>
               <td><label>Language</label></td>
              <td><input required type="text" class="form-control" name="LanguageNTA"></td>
              <td><input required type="text" class="form-control" name="LanguageMS"></td>
              <td><input required type="text" class="form-control" name="LanguageMM"></td>
              <td><input required type="text" class="form-control" name="LanguagePM"></td>
             </tr>
             <tr>
               <td><label>Subjects(Specify the Name)</label></td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
             </tr>
             <tr>
               <td><span class="float-right">1.&nbsp;</span></td>
              <td><input required type="text" class="form-control" name="FirstNTA"></td>
              <td><input required type="text" class="form-control" name="FirstMS"></td>
              <td><input required type="text" class="form-control" name="FirstMM"></td>
              <td><input required type="text" class="form-control" name="FirstPM"></td>
             </tr>
             <tr>
               <td><span class="float-right">2.&nbsp;</span></td>
              <td><input required type="text" class="form-control" name="SecondNTA"></td>
              <td><input required type="text" class="form-control" name="SecondMS"></td>
              <td><input required type="text" class="form-control" name="SecondMM"></td>
              <td><input required type="text" class="form-control" name="SecondPM"></td>
             </tr>
                   <tr>
               <td><span class="float-right">3.&nbsp;</span></td>
              <td><input required type="text" class="form-control" name="ThirdNTA"></td>
              <td><input required type="text" class="form-control" name="ThirdMS"></td>
              <td><input required type="text" class="form-control" name="ThirdMM"></td>
              <td><input required type="text" class="form-control" name="ThirdPM"></td>
             </tr>
                   <tr>
               <td><span class="float-right">4.&nbsp;</span></td>
              <td><input required type="text" class="form-control" name="FourthNTA"></td>
              <td><input required type="text" class="form-control" name="FourthMS"></td>
              <td><input required type="text" class="form-control" name="FourthMM"></td>
              <td><input required type="text" class="form-control" name="FourthPM"></td>
             </tr>
               <tr>
               <td><span class="float-right">5.&nbsp;</span></td>
              <td><input required type="text" class="form-control" name="FifthNTA"></td>
              <td><input required type="text" class="form-control" name="FifthMS"></td>
              <td><input required type="text" class="form-control" name="FifthMM"></td>
              <td><input required type="text" class="form-control" name="FifthPM"></td>
             </tr>
         
           </tbody>
         </table>
             &nbsp;
             &nbsp;
             &nbsp;
             &nbsp;
             &nbsp;
         <h3 class="text-center"><u>Declaration Of The Applicant</u></h3>	   
         
         <p class="lead">
           The details given above are correct. If I am admitted to the college, I agree to abide by the rules and regulayions of the college.
         </p>
             <table width="1000" border="0" class="table table-striped">
           <tbody>
             <tr>
               <td width="500"><label class="text-center">Date</label>&nbsp;<input required placeholder="dd/mm/yy" type="text" class="form-control" name="Ddate"></td>
               <th scope="col"><label class="text-center">Name of Applicant</label>&nbsp;<input required type="text" class="form-control" name="Nameofapplicant">&nbsp;<br><label class="text-center">Signature(.JPEG)</label>&nbsp;<br><input required type="file" name="filesig" id="fileToUpload">&nbsp;<br><br>
                 <label class="text-center">Signature of Guardian(.JPEG)</label>&nbsp;<br><input required type="file" name="fileGsig" id="fileToUpload">&nbsp;</th>
             </tr>
           </tbody>
         </table>
                 
         <hr/>
         <p class="lead text-center">
            <button type="submit" class="btn btn-success">SUBMIT</button>
          </p>
        
         <hr/>


         </div>
         </form>
        </div>

    </body>

    </html>

    <script>
  $('#form').parsley();
</script>