<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head><meta charset="gb18030">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Admission Form | PGM College</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/select2.min.css" rel="stylesheet">



</head>
<body>
<header>
    <nav class="navbar navbar-expand-md navbar-dark  bg-dark">
        <a class="navbar-brand" href="#">PGM College</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://pgmcollege.ac.in/">Website</a>
                </li>
            </form>
        </div>
    </nav>
</header>

<main role="main">


    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container ">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-12">
                <img class="rounded mx-auto d-block" src="http://pgmcollege.ac.in/wp-content/uploads/2019/01/logo.png">
                <h1 class="text-center"><u>College Admission Form</u></h1>
                <div class="alert alert-danger" role="alert">
                    <h3 class="h3 text-center">Things to Follow.</h3>
                    <ul>
                        <li>The user must follow the examples given in Text Box</li>
                        <li>All the fields are <b>Mandatory</b>.</li>
                        <li>If you feel any difficulty in filling the form, kindly <b><a href="https://pgmcollege.ac.in/contact-us/">Contact Us</a></b></li>
                    </ul>
                </div>
                <h2>Basic Information </h2>
                <form data-parsley-validate="" id="form" method="post" action="process.php" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Applicant Name in Full <span>*</span></label>
                        <input type="text" name="fullName" class="form-control"  required=""  placeholder="Block letters as in SSLC Book">
                        <small id="emailHelp" class="form-text text-muted">In block letters as in SSLC Book</small>
                    </div>
                    <div class="form-group">
                        <label>Expansion of Initials if any</label>
                        <input type="text" name="nameInitials" class="form-control" placeholder="Expansion of Intials if any">
                    </div>
                    <label>Course Applied for with Subject <span>*</span></label>
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <!--                            <label>First Option  <span>*</span></label>-->
                            <select class="form-control" name="firstOption" required="" id="exampleFormControlSelect1">
                                <option value="" disabled selected>Select your First Option</option>
                                <option>B.com Computer Application</option>
                                <option>B.com Finance & Tax</option>
                                <option>BCA</option>
                                <option>BBA</option> 
                                <option>Bsc Microbiology</option>
                                 <option>M.com</option>
                                <option>Msc Microbiology</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <!--                           <label>Second Option  <span>*</span></label>-->
                            <select class="form-control" name="secondOption" required="" id="exampleFormControlSelect1">
                                <option value="" disabled selected>Select your Second Option</option>
                                <option>B.com Computer Application</option>
                                <option>B.com Finance & Tax</option>
                                <option>BCA</option>
                                <option>BBA</option>
                                <option>Bsc Microbiology</option>
                                <option>M.com</option>
                                <option>Msc Microbiology</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <!--                            <label>Second Option  <span>*</span></label>-->
                            <select class="form-control" name="thirdOption" required="" id="exampleFormControlSelect1">
                                <option value="" disabled selected>Select your Third Option</option>
                                <option>B.com Computer Application</option>
                                <option>B.com Finance & Tax</option>
                                <option>BCA</option>
                                <option>BBA</option>
                                <option>Bsc Microbiology</option>
                                 <option>M.com</option>
                                <option>Msc Microbiology</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email ID <span>*</span></label>
                        <input type="text" class="form-control" name="emailId"  required="" placeholder="Email Id">

                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label>Age  <span>*</span></label>
                            <input type="number" class="form-control" id="inputAddressLine1" name="applicantAge" required="" placeholder="Age">
                        </div>
                        <div class="col-sm-6">
                            <label>Date of Birth  <span>*</span></label>
                            <input type="date" class="form-control" id="inputAddressLine1" name="applicantDOB" required="" placeholder="Date of Birth">
                        </div>

                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Place of Birth  <span>*</span></label>
                            <input type="text" class="form-control" required="" name="applicantPlaceofbirth" id="inputAddressLine1" placeholder="Place of Birth">
                        </div>
                        <div class="col-sm-4">
                            <label>Taluk</label>
                            <input type="text" class="form-control"  name="applicantTaluk" id="inputAddressLine1" placeholder="Taluk">
                        </div>
                        <div class="col-sm-4">
                            <label>District  <span>*</span></label>
                            <select class="form-control"  name="applicantDistrict" id="exampleFormControlSelect1" required="">
                                <option>Thiruvananthapuram</option>
                                <option>Kollam</option>
                                <option>Alappuzha</option>
                                <option>Pathanamthitta</option>
                                <option>Kottayam</option>
                                <option>Idukki</option>
                                <option>Ernakulam</option>
                                <option>Thrissur</option>
                                <option>Palakkad</option>
                                <option>Malappuram</option>
                                <option>Kozhikode</option>
                                <option>Wayanadu</option>
                                <option>Kannur</option>
                                <option>Kasaragod</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label>Name of Parent or Guardian <span>*</span></label>
                            <input type="text" class="form-control" id="inputAddressLine1" name="applicantParent" required="" placeholder="Name of Parent or Guardian ">
                        </div>
                        <div class="col-sm-6">
                            <label>Relationship of Applicant With Guardian <span>*</span></label>
                            <input type="text" class="form-control" id="inputAddressLine1" name="applicantRelationship" required=""placeholder="Relationship of Applicant With Guardian">
                        </div>

                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label>Occupation of the Guardian <span>*</span></label>
                            <input type="text" class="form-control" id="inputAddressLine1" name="guardianOccupation"  required="" placeholder="Occupation of the Guardian">
                        </div>
                        <div class="col-sm-6">
                            <label>Annual Income of the Guardian <span>*</span></label>
                            <input type="number" class="form-control" id="inputAddressLine1" name="guardianIncome" required="" placeholder="Annual Income of the Guardian">
                        </div>

                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label>Address of the Guardian with Taluk and District <span>*</span></label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="primaryAddress" required="" rows="3"></textarea>
                        </div>
                        <div class="col-sm-6">
                            <label>Address to which Communications are to be send <span>*</span></label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="secondaryAddress" required="" rows="3"></textarea>
                        </div>

                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label>Primary Contact Number <span>*</span></label>
                            <input type="number" class="form-control" required="" name="primaryContact" id="inputAddressLine1" placeholder="Primary Contact Number ">
                        </div>
                        <div class="col-sm-6">
                            <label>Phone Number for Communication <span>*</span></label>
                            <input type="number" class="form-control" required=""  name="secondaryContact" id="inputAddressLine1" placeholder="Phone Number for Communication">
                        </div>

                    </div>
                    <div class="form-group">
                            <label>Religion with denomination of Caste <span>*</span></label>
                            <input type="text" class="form-control"  required="" name="applicantReligion" id="inputAddressLine1" placeholder="Religion with denomination of Castes">
                            <small id="emailHelp" class="form-text text-muted"> (if SC/ST/OBC/OEC-specify)</small>
                    </div>

                    <div class="form-group">
                        <label>No. of times the applicant appeared for the qualifying exam with Year  <span>*</span></label>
                        <input type="text" class="form-control" required="" name="applicantExamtime" placeholder="No. of times the applicant appeared for the qualifying exam with Year">

                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label>Language choice under Part II(For B.com Olny)
                            <input type="text" class="form-control" name="applicantLanguagechoice"  placeholder="Language choice under Part II">
                        </div>
                        <div class="col-sm-6">
                            <label>Any claims for special consideration of the application</label>
                            <input type="text" class="form-control" name="applicantSpecial" placeholder="Any claims for special consideration of the application">
                            <small id="emailHelp" class="form-text text-muted">   NCC/NSS/Sports/Ex-Service</small>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Address where the applicant intents to stay.  <span>*</span></label>
                        <textarea class="form-control" required="" name="applicantIntents" id="exampleFormControlTextarea1" rows="3"></textarea>

                    </div>
                    <hr>
                    <h2>Educational Qualification Details   </h2>
                    <table class="table table-striped ">
                        <tbody>
                        <tr>
                            <th scope="col" class="text-left">Exam Passed</th>
                            <th scope="col" class="text-left">Name of Exam</th>
                            <th scope="col" class="text-left">Year of Study</th>
                            <th scope="col" class="text-left">Name of Exam Board/University</th>
                            <th scope="col" class="text-left">Year of Passing</th>
                            <th scope="col" class="text-left">Reg. No.</th>
                            <th scope="col" class="text-left">Name of Institution /  Place</th>
                        </tr>
                        <tr>
                            <td><input required="" type="text" class="form-control" name="examPassed[0]"></td>
                            <td><input required="" type="text" class="form-control" name="examName[0]"></td>
                            <td><input required="" type="text" class="form-control" name="joinYear[0]"></td>
                            <td><input required="" type="text" class="form-control" name="examBoard[0]"></td>
                            <td><input required="" type="text" class="form-control" name="examYear[0]"></td>
                            <td><input required="" type="text" class="form-control" name="examReg[0]"></td>
                            <td><input required="" type="text" class="form-control" name="examInstitution[0]"></td>
                        </tr>
                        <tr>
                            <td><input required="" type="text" class="form-control" name="examPassed[1]"></td>
                            <td><input required="" type="text" class="form-control" name="examName[1]"></td>
                            <td><input required="" type="text" class="form-control" name="joinYear[1]"></td>
                            <td><input required="" type="text" class="form-control" name="examBoard[1]"></td>
                            <td><input required="" type="text" class="form-control" name="examYear[1]"></td>
                            <td><input required="" type="text" class="form-control" name="examReg[1]"></td>
                            <td><input required="" type="text" class="form-control" name="examInstitution[1]"></td>
                        </tr>
                        </tbody>
                    </table>
                    <h2>Statement of Marks </h2>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label>Name of Exam Passed <span>*</span></label>
                            <input type="text" class="form-control" required="" name = "examPass" placeholder="Name of Exam Passed">
                        </div>
                        <div class="col-sm-6">
                            <label>Year of Passing <span>*</span></label>
                            <input type="text" class="form-control" required="" name = "examYr" placeholder="Year of Passing">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label>Name of Board/University <span>*</span></label>
                            <input type="text" class="form-control" required="" name = "examBd" examYearplaceholder="Name of Board/University">
                        </div>
                        <div class="col-sm-6">
                            <label>Reg. No. <span>*</span></label>
                            <input type="text" class="form-control" required="" name = "examRg" placeholder="Reg. No.">
                        </div>

                    </div>
                    <table  class="table table-striped">
                        <tbody>
                        <tr>
                            <th scope="col" class="text-center">Subjects</th>
                            <th scope="col" class="text-center">No. of Times Appeared</th>
                            <th scope="col" class="text-center">Marks Secured</th>
                            <th scope="col" class="text-center">Max. Marks</th>
                            <th scope="col" class="text-center">Percentage of Marks</th>
                        </tr>
                        <tr>

                            <td><input required="" type="text" class="form-control" name="subjectName[0]"></td>
                            <td><input required="" type="text" class="form-control" name="subjectAppeared[0]"></td>
                            <td><input required="" type="text" class="form-control" name="subjectMarks[0]"></td>
                            <td><input required="" type="text" class="form-control" name="subjectMax[0]"></td>
                            <td><input required="" type="text" class="form-control" name="subjectPercentage[0]"></td>

                        </tr>
                        <tr>
                            <td><input required="" type="text" class="form-control" name="subjectName[1]"></td>
                            <td><input required="" type="text" class="form-control" name="subjectAppeared[1]"></td>
                            <td><input required="" type="text" class="form-control" name="subjectMarks[1]"></td>
                            <td><input required="" type="text" class="form-control" name="subjectMax[1]"></td>
                            <td><input required="" type="text" class="form-control" name="subjectPercentage[1]"></td>
                        </tr>

                        <tr>
                            <td><input required="" type="text" class="form-control" name="subjectName[2]"></td>
                            <td><input required="" type="text" class="form-control" name="subjectAppeared[2]"></td>
                            <td><input required="" type="text" class="form-control" name="subjectMarks[2]"></td>
                            <td><input required="" type="text" class="form-control" name="subjectMax[2]"></td>
                            <td><input required="" type="text" class="form-control" name="subjectPercentage[2]"></td>
                        </tr>
                        <tr>
                            <td><input required="" type="text" class="form-control" name="subjectName[3]"></td>
                            <td><input required="" type="text" class="form-control" name="subjectAppeared[3]"></td>
                            <td><input required="" type="text" class="form-control" name="subjectMarks[3]"></td>
                            <td><input required="" type="text" class="form-control" name="subjectMax[3]"></td>
                            <td><input required="" type="text" class="form-control" name="subjectPercentage[3]"></td>
                        </tr>
                        <tr>
                            <td><input required="" type="text" class="form-control" name="subjectName[4]"></td>
                            <td><input required="" type="text" class="form-control" name="subjectAppeared[4]"></td>
                            <td><input required="" type="text" class="form-control" name="subjectMarks[4]"></td>
                            <td><input required="" type="text" class="form-control" name="subjectMax[4]"></td>
                            <td><input required="" type="text" class="form-control" name="subjectPercentage[4]"></td>
                        </tr>
                        <tr>
                            <td><input required="" type="text" class="form-control" name="subjectName[5]"></td>
                            <td><input required="" type="text" class="form-control" name="subjectAppeared[5]"></td>
                            <td><input required="" type="text" class="form-control" name="subjectMarks[5]"></td>
                            <td><input required="" type="text" class="form-control" name="subjectMax[5]"></td>
                            <td><input required="" type="text" class="form-control" name="subjectPercentage[5]"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="subjectName[6]"></td>
                            <td><input type="text" class="form-control" name="subjectAppeared[6]"></td>
                            <td><input type="text" class="form-control" name="subjectMarks[6]"></td>
                            <td><input type="text" class="form-control" name="subjectMax[6]"></td>
                            <td><input type="text" class="form-control" name="subjectPercentage[6]"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="subjectName[7]"></td>
                            <td><input type="text" class="form-control" name="subjectAppeared[7]"></td>
                            <td><input type="text" class="form-control" name="subjectMarks[7]"></td>
                            <td><input type="text" class="form-control" name="subjectMax[7]"></td>
                            <td><input type="text" class="form-control" name="subjectPercentage[7]"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="subjectName[8]"></td>
                            <td><input type="text" class="form-control" name="subjectAppeared[8]"></td>
                            <td><input type="text" class="form-control" name="subjectMarks[8]"></td>
                            <td><input type="text" class="form-control" name="subjectMax[8]"></td>
                            <td><input type="text" class="form-control" name="subjectPercentage[8]"></td>
                        </tr>
                        </tbody>
                    </table>
                    <h2>Attachments </h2>
                    <div class="form-group">
                        <label>Upload your photo(.JPEG) <span>*</span></label>
                        <input type="file" id="applicantPhoto" required="" name="applicantPhoto">

                    </div>


                    <div class="form-group">
                        <label>Signature of the Applicant (.JPEG) <span>*</span></label>
                        <input type="file" id="applicantSign" required="" name="applicantSign">

                    </div>
                    <div class="form-group">
                        <label>Signature of Guardian (.JPEG) <span>*</span></label>
                        <input type="file" id="guardianSign" required="" name="guardianSign">

                    </div>
                    <div class="form-group">
                        <label>If a member of any backward community eligible for the concession from the Harijan Welfare Dept., State, Caste, Sub Caste (attested copies of the community and income certificate to be attached(PDF Upload).</label>
                        <input type="file" id="applicantPDF"  name="applicantPDF">

                    </div>
                    <h2>Declaration Of The Applicant </h2>
                    <p class="info">I hereby declare that all the information given by me in this application is true and correct to the
                        best of my knowledge and belief. I also note that if any of the above statements are found to be
                        incorrect or false or any information or particulars have been suppressed or omitted there from, I
                        am liable to be disqualified and my admission may be cancelled. I have read and understood the
                        contents of the Admission Announcement for the various Programmes. I hereby permit the institute
                        to use, display or transfer any of the details furnished by me in this form for complying with the
                        admission formalities.I will comply with the rules and regulations for student behaviour as notified by the College or University from
                        time to time.</p>
                        <div class="col-12 text-center">
                            <button type="reset" class="btn btn-secondary btn-lg ">Reset</button>
                            <button type="submit"  class="btn btn-primary btn-lg">Submit</button>
                        </div>

                </form>
            </div><!-- /.col-lg-4 -->

        </div><!-- /.row -->
        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


    <!-- FOOTER -->
    <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; All Right Received | Developed By: <a href="https://talkbate.com">Talkbate Digital Partners</a> | Hosted at <a href="https://hostmargin.com">Hostmargin &middot;</a> <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
<script src="assets/js/bootstrap.bundle.js"></script>
<script src="assets/js/select2.min.js"></script>

<script src="assets/js/parsley.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.selectJS').select2();
        $('#form').parsley();
    });
</script>

</body>
</html>
