<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/emp.css') }}">

</head>

<body>
    <form id="regForm" action="/action_page.php">
        <h1>PESO EMPLOYMENT INFORMATION SYSTEM REGISTRATION FORM</h1>


        <!-- One "tab" for each step in the form: -->

        <div class="tab">
            <h4>I. Personal Information</h4>
            <div>
                <p><input placeholder="SURNAME" oninput="this.className = ''" name="ASurname"></p>
                <p><input placeholder="FIRSTNAME" oninput="this.className = ''" name="AFirstname"></p>
                <p><input placeholder="MIDDLENAME" oninput="this.className = ''" name="AMiddlename"></p>
                <p><input placeholder="SUFFIX(Ex: Sr., Jr., III, etc.)" oninput="this.className = ''" name="ASuffix">
                </p>
            </div>

            <div class="row">
                <div class="col">
                    <div class="col-md-6">
                        <p>Date of Birth</p>
                        <p><input type="date" id="birthday" name="birthday"></p>
                    </div>
                </div>

                <div class="col">
                    <p>Place of Birth</p>
                    <input placeholder="PLACE OF BIRTH" oninput="this.className = ''" name="AMiddlename">

                </div>

                <div class="col">
                    <p>Sex</p>
                    <div class="input-group mb-2">
                        <div class="row">
                            <div class="col">
                                <div class="form-check form-check-inline mt-1 mx-4">
                                    <input class="form-check-input" type="radio" name="sex" id="inlineRadio1"
                                        value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline mt-1">
                                    <input class="form-check-input" type="radio" name="sex" id="inlineRadio2"
                                        value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h5 class="mt-2 fw-bold">Present Address</h5>
            <div class="row">
                <div class="col">
                    <p><input placeholder="" oninput="this.className = ''" name="ASurname">House No./ Street
                        Village</p>
                </div>
                <div class="col">
                    <p><input placeholder="" oninput="this.className = ''" name="ASurname">Barangay</p>
                </div>
                <div class="col">
                    <p><input placeholder="" oninput="this.className = ''" name="ASurname">Municipality/City </p>
                </div>
                <div class="col">
                    <p><input placeholder="" oninput="this.className = ''" name="ASurname">Province</p>
                </div>
            </div>

            <h5 class="mt-2 fw-bold">Civil Status</h5>
            <div class="input-group mb-2 mt-1 d-flex">
                <div class="form-check form-check-inline mt-1 mx-4">
                    <input class="form-check-input" type="radio" name="civilstatus" id="inlineRadio3" value="option1">
                    <label class="form-check-label" for="inlineRadio2">Single</label>
                </div>
                <div class="form-check form-check-inline mt-1">
                    <input class="form-check-input" type="radio" name="civilstatus" id="inlineRadio4" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Married</label>
                </div>
                <div class="form-check form-check-inline mt-1">
                    <input class="form-check-input" type="radio" name="civilstatus" id="inlineRadio4" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Widowed</label>
                </div>
                <div class="form-check form-check-inline mt-1">
                    <input class="form-check-input" type="radio" name="civilstatus" id="inlineRadio4" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Separated</label>
                </div>
                <div class="form-check form-check-inline mt-1">
                    <input class="form-check-input" type="radio" name="civilstatus" id="inlineRadio4" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Live-in</label>
                </div>
            </div>

            <h5 class="mt-3 fw-bold">Religion</h5>
            <p><input placeholder="" oninput="this.className = ''" name="ASurname"></p>

            <div class="row">
              <div class="col">
                <h6>TIN</h6>
                <p><input placeholder="" oninput="this.className = ''" name="ASurname"></p>
              </div>
              <div class="col">
                <h6>GSIS/SSS ID NO. </h6>
                <p><input placeholder="" oninput="this.className = ''" name="ASurname"></p>
              </div>
              <div class="col">
                <h6>PAG-IBIG NO. </h6>
                <p><input placeholder="" oninput="this.className = ''" name="ASurname"></p>
              </div>
              <div class="col">
                <h6>PHILHEALTH NO.</h6>
                <p><input placeholder="" oninput="this.className = ''" name="ASurname"></p>
              </div>
            </div>

            <div class="row">
              <div class="col">
                <h6>HEIGHT</h6>
                <p><input placeholder="" oninput="this.className = ''" name="ASurname"></p>
              </div>
              <div class="col">
                <h6>EMAIL ADDRESS</h6>
                <p><input placeholder="" oninput="this.className = ''" name="ASurname"></p>
              </div>
              <div class="col">
                <h6>LANDLINE NUMBER</h6>
                <p><input placeholder="" oninput="this.className = ''" name="ASurname"></p>
              </div>
              <div class="col">
                <h6>CELLPHONE NUMBER</h6>
                <p><input placeholder="" oninput="this.className = ''" name="ASurname"></p>
              </div>
            </div>


            <h5>Disablity</h5>
            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
              <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
              <label class="btn btn-outline-primary" for="btncheck1">Visual</label>
            
              <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
              <label class="btn btn-outline-primary" for="btncheck2">Hearing</label>
            
              <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
              <label class="btn btn-outline-primary" for="btncheck3">Speech</label>

              <input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off">
              <label class="btn btn-outline-primary" for="btncheck4">Physical</label>
            </div>
            <p class="mt-2"><input placeholder="Others, specify: " oninput="this.className = ''" name="ASurname"></p>

            <h5>Employment Status/Type</h5>
            <div class="row">
              <div class="col-6 empstatus1">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Employed
                  </label>
                </div>
                
                <div class="mt-3">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Wage Employed
                    </label>
                  </div>
  
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Self Employed
                    </label>
                  </div>
                </div>

              </div>

              <div class="col-6 container empstatus2">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Unemployed
                  </label>
                </div>

                <div class="row container">
                  <div class="col containe">
                    <div class="mt-3">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                          New Entrant/Fresh Graduate 
                        </label>
                      </div>
      
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                          Finished Contract
                        </label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                          Resigned
                        </label>
                      </div>
      
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                          Retired 
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="col mt-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                      <label class="form-check-label" for="flexRadioDefault1">
                        Terminated/Laidoff(local) 
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                      <label class="form-check-label" for="flexRadioDefault1">
                        Terminated/Laidoff(abroad) specify country
                      </label>
                      <p><input placeholder="" oninput="this.className = ''" name="ASurname"></p>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                      <label class="form-check-label" for="flexRadioDefault1">
                        Others, specify 
                      </label>
                      <p><input placeholder="" oninput="this.className = ''" name="ASurname"></p>
                    </div>
                  </div>

                </div>

               

                </div>
              </div>
            
            </div>
            
            <div class="row">
              <div class="col">
                <p>Are you actively looking for work?</p>
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Yes
                  </label>
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    No
                  </label>
                  <p>How long have you been looking for work?<input placeholder="" oninput="this.className = ''" name="ASurname"></p>

              </div>

              <div class="col">
                <p>Willing to work immediately? </p>
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Yes
                  </label>
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    No
                  </label>
                <p>If no when?<input placeholder="" oninput="this.className = ''" name="ASurname"></p>
              </div>
            </div>
            
            <div>
              <p>Are you a 4Ps beneficiary?</p>
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Yes
                  </label>
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    No
                  </label>
              <p>If yes, Household ID No.<input placeholder="" oninput="this.className = ''" name="ASurname"></p>    
              
                
            </div> 
            
            









        </div>


        <div class="tab">Contact Info:
            <p><input placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
            <p><input placeholder="Phone..." oninput="this.className = ''" name="phone"></p>
        </div>
        <div class="tab">Birthday:
            <p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
            <p><input placeholder="mm" oninput="this.className = ''" name="nn"></p>
            <p><input placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p>
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
        </div>
    </form>
</body>

<script src="{{ asset('js\emp.js') }}"></script>

</html>
