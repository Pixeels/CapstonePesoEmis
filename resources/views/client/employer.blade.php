<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" id="bootstrap-css">
    <link rel="stylesheet" href="{{ asset('css/emp.css') }}">

</head>

<body>
    <form id="regForm" action="/action_page.php">
        <h1>Establishment Registration Form</h1>


        <!-- One "tab" for each step in the form: -->

        <div class="tab">
            <div class="container-fluid pt-4">
                {{-- <center>
                  <h4><b>BLAZER 2022</b></h4>
                  <p>Central Mindanao University</p>
                </center> --}}
                <form id="" class="form-horizontal">
                    <div class="row">
                        <div class="col-sm-12 mb-2">
                         <h5 class="fs-15 fc-black">I. ESTABLISHMENT DETAILS</h5>
                         <hr>
                        </div>
                        <div class="col-md-4">
                          <input class="form-control mb-3 input-box" type="text" name="firstName" placeholder="Establishment Name" style="text-transform: capitalize" value="" required="">
                        </div>
                        <div class="col-md-4">
                          <input class="form-control mb-3 input-box" type="text" name="lastName" placeholder="Last name" value="" required="">
                        </div>
                        <div class="col-sm-3">
                          <input class="form-control mb-3 input-box" type="text" name="middleName" placeholder="Middle name" value="">
                        </div>
                       
                        <div class="col-md-4">
                          <input class="form-control mb-3 signup-input2" type="text" name="nickname" placeholder="Nick name" value="" required="">
                        </div>
                        <div class="col-md-4">
                          <input class="form-control mb-3 signup-input2" type="email" name="email" placeholder="University Email" value="" required="">
                        
                        </div>
                        <div class="col-md-4">
                          <select name="gender" id="gender" class="form-control mb-3 signup-input2" required="">
                          <option value="">Gender</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                        </div>
                        <div class="col-md-4">
                          <input class="form-control mb-3 signup-input2" type="date" name="birthdate" id="birthdate" placeholder="Birthdate" onfocus="(this.type='date')" required="" max="2017-06-11">
                        </div>
                        <div class="col-md-4">
                          <input class="form-control mb-3 signup-input2" type="number" name="mobileNumber" id="mobileNumber" placeholder="Mobile number" value="" required="">
                        </div>
                        <div class="col-md-4"><!--SPACE--></div>
                        <div class="col-md-4">
                          <h5 class="fs-13 ml-2">College</h5>
                          <select name="college" id="college" class="form-control mb-3 signup-input2" required="">
                          
                          
                        <option value=""></option><option value="621c4b835df1e88568585765">College of Agriculture</option><option value="621c4b835df1e88568585766">College of Arts and Sciences</option><option value="621c4b835df1e88568585767">College of Education</option><option value="621c4b835df1e88568585769">College of Business and Management</option><option value="621c4b835df1e8856858576a">College of Human Ecology</option><option value="621c4b835df1e8856858576b">College of Nursing</option><option value="621c4b835df1e8856858576c">College of Engineering</option><option value="621c4b835df1e8856858576d">College of Veterinary Medicine</option><option value="621c4b835df1e8856858576e">College of Forestry and Environmental Science</option><option value="621c4b835df1e8856858576f">College of Information Sciences and Computing</option></select>
                        </div>
                        <div class="col-md-4">
                          <h5 class="fs-13 ml-2">Course</h5>
                          <select name="course" id="course" class="form-control mb-3 signup-input2" required="">
                            
                            
                          <option value=""></option></select>
                        </div>
                        <div class="col-sm-12 mb-2">
                          <h5 class="fs-15 fc-black">Father's name</h5>
                          <hr>
                         </div>
                         <div class="col-md-4">
                          <input class="form-control mb-3 signup-input2" type="text" name="fatherfirstname" placeholder="First name" style="text-transform: capitalize" value="">
                        </div>
                        <div class="col-md-4">
                          <input class="form-control mb-3 signup-input2" type="text" name="fatherlastname" placeholder="Last name" value="">
                        </div>
                        <div class="col-sm-4">
                          <input class="form-control mb-3 signup-input2" type="text" name="fathermiddlename" placeholder="Middle name" value="">
                        </div>
                        <div class="col-sm-12 mb-2">
                          <h5 class="fs-15 fc-black">Mother's name</h5>
                          <hr>
                       </div>
                       <div class="col-md-4">
                        <input class="form-control mb-3 signup-input2" type="text" name="motherfirstname" placeholder="First name" style="text-transform: capitalize" value="">
                      </div>
                      <div class="col-md-4">
                        <input class="form-control mb-3 signup-input2" type="text" name="motherlastname" placeholder="Last name" value="">
                      </div>
                      <div class="col-sm-4">
                        <input class="form-control mb-3 signup-input2" type="text" name="mothermiddlename" placeholder="Middle name" value="">
                      </div>
                        <div class="col-sm-12 mb-2">
                          <h5 class="fs-15 fc-black">Home town</h5>
                          <hr>
                         </div>
                        <div class="col-md-4">
                          <input class="form-control mb-3 signup-input2" type="text" name="country" placeholder="Country" style="text-transform: capitalize" value="" required="">
                        </div>
                        <div class="col-md-4">
                          <input class="form-control mb-3 signup-input2" type="text" name="province" placeholder="Province" style="text-transform: capitalize" value="" required="">
                        </div>
                        <div class="col-md-4">
                          <input class="form-control mb-3 signup-input2" type="text" name="municipality" placeholder="Municipality" style="text-transform: capitalize" value="" required="">
                        </div>
                        <div class="col-md-4">
                          <input class="form-control mb-3 signup-input2" type="text" name="barangay" placeholder="Barangay" style="text-transform: capitalize" value="" required="">
                        </div>
                        <div class="col-md-4">
                          <input class="form-control mb-3 signup-input2" type="number" name="zipCode" id="zipCode" placeholder="Zip Code" style="text-transform: capitalize" value="" required="">
                        </div>
                        <div class="col-sm-12 mb-2">
                          <hr>
                       </div>
                        <div class="col-md-4">
                          <span class="fc-black"> Awards <span style="color: red"> (Separate with comma)</span></span>
                          <br>
                          <small class="fc-black">Top 5 Awards and Achievements</small>
                          <textarea class="form-control mb-3 signup-input2 mt-2" rows="5" name="awards" id="awards"></textarea>
                        </div>
                        <div class="col-md-4">
                          <span class="fc-black">School Affiliations and Positions <span style="color: red"> (Separate with comma)</span></span>
                          <br>
                          <small class="fc-black">Top 5 Highest University Affiliations and Organization Positions</small>
                          <textarea class="form-control mb-3 signup-input2" rows="5" name="affiliation" id="affiliation">                    </textarea>
                        </div>
                        <div class="col-md-4">
                          <span class="fc-black">Motto in Life</span>
                          <textarea class="form-control mb-3 signup-input2" rows="5" name="motto" id="motto" style="height: 129px;">                  </textarea>
                        </div>
                        <div class="col-md-4 displayNone">
                          <span class="fc-black">Message
                            <span id="messageCount" style="color: red; margin-left: 5px">(280 Characters)</span>
                          </span>
                          <textarea placeholder="" class="form-control mb-3 signup-input2" rows="7" name="message" id="message">                </textarea>
                        </div>
                        <div class="col-sm-12 mb-2">
                          <h5 class="fs-15 fc-black">Login account</h5>
                          <hr>
                         </div>
                         <div class="col-md-4 mb-3">
                          <input class="form-control signup-input2" type="number" name="studentId" id="studentId" placeholder="Student ID" value="" required="">
                            <span style="color: red; font-size: 10px" id="studentIdError" class="ml-2 hidden">Student ID already used!
                          </span>
                         </div>
                         <div class="col-md-4 mb-3">
                          <input class="form-control signup-input2" type="number" name="restudentId" id="restudentId" placeholder="Retype student ID" value="" required="">
                          <span style="color: red; font-size: 10px" id="restudentIdError" class="ml-2 hidden">Whoops, these don't match
                          </span>
                         </div>
                         <div class="col-md-4"><!--SPACE--></div>
                         <div class="col-md-4 mb-3">
                          <input class="form-control signup-input2" type="password" name="password" id="password" placeholder="Password" value="" required="">
                         </div>
                         <div class="col-md-4 mb-3">
                          <input class="form-control signup-input2" type="password" name="repassword" id="repassword" placeholder="Retype password" value="" required="">
                          <span style="color: red; font-size: 10px" id="repasswordError" class="ml-2 hidden">Whoops, these don't match
                          </span>
                         </div>
                         <div class="col-md-4"><!--SPACE--></div>
                         <div class="col-md-4">
                          <button id="submitbtn" type="submit" class="btn customize-button2 fw-bold mt-3 mb-4">Sign up</button>
                         </div>
                    </div>
                </form>
              </div>
        </div>







        <div class="tab">
            <h4>II. JOB PREFERENCE</h4>

            <div>
                <div class="row">
                    <div class="col6 prefoccupation">
                        <thead>PREFERRED OCCUPATION</thead>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">1.</span>
                            <input type="text" class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">2.</span>
                            <input type="text" class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">3.</span>
                            <input type="text" class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">4.</span>
                            <input type="text" class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-default">
                        </div>

                    </div>

                    <div class="col6 preflocation">
                        <thead>PREFERRED WORK LOCATION</thead>
                        <div class="row">
                            <div class="col">
                                <div class="">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="workloc"
                                        value="Local">
                                    <label class="form-check-label" for="exampleCheck1">Local, specify
                                        cities/municipalities.</label>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">1.</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-default">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">2.</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-default">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">3.</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-default">
                                </div>
                            </div>
                            <div class="col">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="workloc"
                                    value="Local">
                                <label class="form-check-label" for="exampleCheck1">Overseas,specify countries:
                                </label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">1.</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-default">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">2.</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-default">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">3.</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-default">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="row">
                    <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Expected Salary
                                (Range)</span>
                            <input type="text" class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Passport No.</span>
                            <input type="text" class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Expiry date</span>
                            <input type="text" class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                </div>
            </div>



        </div>




        <div class="tab">
            
        </div>


        <div class="tab">

        </div>

        <div class="tab">
            
        </div>

        <div class="tab">
            
        </div>

        <div class="tab">Login Info:
            <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
            <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
        </div>

        <div class="tab">Login Info:
            <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
            <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
        </div>

        <div class="tab">Login Info:
            <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
            <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
        </div>


        <div style="overflow:auto;">
            <div style="float:right;">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
        </div>


        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>
    </form>
</body>

<script src="{{ asset('js\emp.js') }}"></script>
<script src="{{ asset('js\jquery.min.js') }}"></script>
<script src="{{ asset('js\bootstrap.min.js') }}"></script>

</html>
