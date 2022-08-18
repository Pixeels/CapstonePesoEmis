<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PESO | Applicant Registration Form</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" id="bootstrap-css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

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
            <hr>

            <div class="row">
                <div class="col">
                    <div class="col-md-6">
                        <p>Date of Birth</p>
                        <p><input type="date" id="" name="ADateOfBirth"></p>
                    </div>
                </div>

                <div class="col">
                    <p class="text-danger">Place of Birth</p>
                    <input placeholder="PLACE OF BIRTH" oninput="this.className = ''" name="APlaceOfBirth">

                </div>

                <div class="col">
                    <p>Sex</p>
                    <div class="input-group mb-2">
                        <div class="row">
                            <div class="col">
                                <div class="form-check form-check-inline mt-1 mx-4">
                                    <input class="form-check-input" type="radio" name="ASex" id="" value="option1">
                                    <label class="form-check-label" for="">Male</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline mt-1">
                                    <input class="form-check-input" type="radio" name="ASex" id="" value="option2">
                                    <label class="form-check-label" for="">Female</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h5 class="mt-2 fw-bold">Present Address</h5>
            <div class="row">
                <div class="col">
                    <p><input placeholder="" oninput="this.className = ''" name="AStrtVill">House No./ Street
                        Village</p>
                </div>
                <div class="col">
                    <p><input placeholder="" oninput="this.className = ''" name="ABrgy">Barangay</p>
                </div>
                <div class="col">
                    <p><input placeholder="" oninput="this.className = ''" name="AMuniCity">Municipality/City </p>
                </div>
                <div class="col">
                    <p><input placeholder="" oninput="this.className = ''" name="AProvince">Province</p>
                </div>
            </div>

            <h5 class="mt-2 fw-bold">Civil Status</h5>
            <div class="input-group mb-2 mt-1 d-flex">
                <div class="form-check form-check-inline mt-1 mx-4">
                    <input class="form-check-input" type="radio" name="ACivilStatus" id="" value="option1">
                    <label class="form-check-label" for="">Single</label>
                </div>
                <div class="form-check form-check-inline mt-1">
                    <input class="form-check-input" type="radio" name="ACivilStatus" id="" value="option2">
                    <label class="form-check-label" for="">Married</label>
                </div>
                <div class="form-check form-check-inline mt-1">
                    <input class="form-check-input" type="radio" name="ACivilStatus" id="" value="option2">
                    <label class="form-check-label" for="">Widowed</label>
                </div>
                <div class="form-check form-check-inline mt-1">
                    <input class="form-check-input" type="radio" name="ACivilStatus" id="" value="option2">
                    <label class="form-check-label" for="">Separated</label>
                </div>
                <div class="form-check form-check-inline mt-1">
                    <input class="form-check-input" type="radio" name="ACivilStatus" id="" value="option2">
                    <label class="form-check-label" for="">Live-in</label>
                </div>
            </div>

            <h5 class="mt-3 fw-bold">Religion</h5>
            <p><input placeholder="" oninput="this.className = ''" name="AReligion"></p>

            <div class="row">
                <div class="col">
                    <h6>TIN</h6>
                    <p><input placeholder="" oninput="this.className = ''" name="ATin"></p>
                </div>
                <div class=" col">
                    <h6>GSIS/SSS ID NO. </h6>
                    <p><input placeholder="" oninput="this.className = ''" name="AGsis"></p>
                </div>
                <div class="col">
                    <h6>PAG-IBIG NO. </h6>
                    <p><input placeholder="" oninput="this.className = ''" name="APagibig"></p>
                </div>
                <div class="col">
                    <h6>PHILHEALTH NO.</h6>
                    <p><input placeholder="" oninput="this.className = ''" name="APhilhealth"></p>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <h6>HEIGHT</h6>
                    <p><input placeholder="" oninput="this.className = ''" name="AHeight"></p>
                </div>
                <div class="col">
                    <h6>EMAIL ADDRESS</h6>
                    <p><input placeholder="" oninput="this.className = ''" name="AEmailAdd"></p>
                </div>
                <div class="col">
                    <h6>LANDLINE NUMBER</h6>
                    <p><input placeholder="" oninput="this.className = ''" name="ALandline"></p>
                </div>
                <div class="col">
                    <h6>CELLPHONE NUMBER</h6>
                    <p><input placeholder="" oninput="this.className = ''" name="ACellphone"></p>
                </div>
            </div>


            <h5>Disablity</h5>
            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                <input type="checkbox" class="btn-check" id="" autocomplete="off" name="ADisability">
                <label class="btn btn-outline-primary" for="">Visual</label>

                <input type="checkbox" class="btn-check" id="" autocomplete="off" name="ADisability">
                <label class="btn btn-outline-primary" for="2">Hearing</label>

                <input type="checkbox" class="btn-check" id="" autocomplete="off" name="ADisability">
                <label class="btn btn-outline-primary" for="">Speech</label>

                <input type="checkbox" class="btn-check" id="" autocomplete="off" name="ADisability">
                <label class="btn btn-outline-primary" for="">Physical</label>
            </div>
            <p class="mt-2"><input placeholder="Others, specify: " oninput="this.className = ''"
                    name="ADisability"></p>

            <h5>Employment Status/Type</h5>
            <div class="row">
                <div class="col-6 empstatus1">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="AEmpStatus" id="">
                        <label class="form-check-label" for="">
                            Employed
                        </label>
                    </div>

                    <div class="mt-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="AEmployed" id="">
                            <label class="form-check-label" for="">
                                Wage Employed
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="AEmployed" id="">
                            <label class="form-check-label" for="">
                                Self Employed
                            </label>
                        </div>
                    </div>

                </div>

                <div class="col-6 container empstatus2">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="AEmpStatus" id="">
                        <label class="form-check-label" for="">
                            Unemployed
                        </label>
                    </div>

                    <div class="row container">
                        <div class="col containe">
                            <div class="mt-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="AUnemployed" id="">
                                    <label class="form-check-label" for="">
                                        New Entrant/Fresh Graduate
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="AUnemployed" id="">
                                    <label class="form-check-label" for="">
                                        Finished Contract
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="AUnemployed" id="">
                                    <label class="form-check-label" for="">
                                        Resigned
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="AUnemployed" id="">
                                    <label class="form-check-label" for="">
                                        Retired
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col mt-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="AUnemployed" id="">
                                <label class="form-check-label" for="">
                                    Terminated/Laidoff(local)
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="AUnemployed" id="">
                                <label class="form-check-label" for="">
                                    Terminated/Laidoff(abroad) specify country
                                </label>
                                <p><input placeholder="" oninput="this.className = ''" name="AUnemployed"></p>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="AUnemployed" id="">
                                <label class="form-check-label" for="">
                                    Others, specify
                                </label>
                                <p><input placeholder="" oninput="this.className = ''" name="AUnemployed"></p>
                            </div>
                        </div>

                    </div>



                </div>
            </div>

            <div class="row">
                <div class="col">
                    <p>Are you actively looking for work?</p>
                    <input class="form-check-input" oninput="this.className" type="radio" name="AActive" id="">
                    <label class="form-check-label" for="f">
                        Yes
                    </label>
                    <input class="form-check-input" oninput="this.className" type="radio" name="AActive" id="">
                    <label class="form-check-label" for="">
                        No
                    </label>
                    <p>How long have you been looking for work?<input placeholder="" oninput="this.className = ''"
                            name="AActive"></p>

                </div>

                <div class="col">
                    <p>Willing to work immediately? </p>
                    <input class="form-check-input" oninput="this.className" type="radio" name="AWilling" id="">
                    <label class="form-check-label" for="">
                        Yes
                    </label>
                    <input class="form-check-input" oninput="this.className" type="radio" name="AWilling" id="">
                    <label class="form-check-label" for="">
                        No
                    </label>
                    <p>If no when?<input placeholder="" oninput="this.className = ''" name="AWilling"></p>
                </div>

            </div>
            <div>
                <p>Are you a 4Ps beneficiary?</p>
                <input class="form-check-input" oninput="this.className" type="radio" name="ABeneficiary" id="">
                <label class="form-check-label" for="">
                    Yes
                </label>
                <input class="form-check-input" oninput="this.className" type="radio" name="ABeneficiary" id="">
                <label class="form-check-label" for="">
                    No
                </label>
                <p>If yes, Household ID No.<input placeholder="" oninput="this.className = ''" name="AHouseholdNum"></p>
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
            <h4>III. LANGUAGE / DIALECT PROFICIENCY</h4>
            <div>
                <div class="row">
                    <div class="col">
                        <h5 class="dialect">Filipino</h5>
                        <div class="input-group mb-3 justify-content-center">
                            <div class="input-group-text">
                                <label for="" class="mx-1">READ</label>
                                <input class="form-check-input mt-0" type="checkbox" value=""
                                    aria-label="Checkbox for following text input">
                            </div>
                        </div>
                        <div class="input-group mb-3 justify-content-center">
                            <div class="input-group-text">
                                <label for="" class="mx-1">WRITE</label>
                                <input class="form-check-input mt-0" type="checkbox" value=""
                                    aria-label="Checkbox for following text input">
                            </div>
                        </div>
                        <div class="input-group mb-3 justify-content-center">
                            <div class="input-group-text">
                                <label for="" class="mx-1">SPEAK</label>
                                <input class="form-check-input mt-0" type="checkbox" value=""
                                    aria-label="Checkbox for following text input">
                            </div>
                        </div>
                        <div class="input-group mb-3 justify-content-center">
                            <div class="input-group-text">
                                <label for="" class="mx-1">UNDERSTAND</label>
                                <input class="form-check-input mt-0" type="checkbox" value=""
                                    aria-label="Checkbox for following text input">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <h5 class="dialect">Filipino</h5>
                        <div class="input-group mb-3 justify-content-center">
                            <div class="input-group-text">
                                <label for="" class="mx-1">READ</label>
                                <input class="form-check-input mt-0" type="checkbox" value=""
                                    aria-label="Checkbox for following text input">
                            </div>
                        </div>
                        <div class="input-group mb-3 justify-content-center">
                            <div class="input-group-text">
                                <label for="" class="mx-1">WRITE</label>
                                <input class="form-check-input mt-0" type="checkbox" value=""
                                    aria-label="Checkbox for following text input">
                            </div>
                        </div>
                        <div class="input-group mb-3 justify-content-center">
                            <div class="input-group-text">
                                <label for="" class="mx-1">SPEAK</label>
                                <input class="form-check-input mt-0" type="checkbox" value=""
                                    aria-label="Checkbox for following text input">
                            </div>
                        </div>
                        <div class="input-group mb-3 justify-content-center">
                            <div class="input-group-text">
                                <label for="" class="mx-1">UNDERSTAND</label>
                                <input class="form-check-input mt-0" type="checkbox" value=""
                                    aria-label="Checkbox for following text input">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <p>Others: </p>
                            </div>
                            <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>
                        <div class="input-group mb-3 justify-content-center">
                            <div class="input-group-text">
                                <label for="" class="mx-1">READ</label>
                                <input class="form-check-input mt-0" type="checkbox" value=""
                                    aria-label="Checkbox for following text input">
                            </div>
                        </div>
                        <div class="input-group mb-3 justify-content-center">
                            <div class="input-group-text">
                                <label for="" class="mx-1">WRITE</label>
                                <input class="form-check-input mt-0" type="checkbox" value=""
                                    aria-label="Checkbox for following text input">
                            </div>
                        </div>
                        <div class="input-group mb-3 justify-content-center">
                            <div class="input-group-text">
                                <label for="" class="mx-1">SPEAK</label>
                                <input class="form-check-input mt-0" type="checkbox" value=""
                                    aria-label="Checkbox for following text input">
                            </div>
                        </div>
                        <div class="input-group mb-3 justify-content-center">
                            <div class="input-group-text">
                                <label for="" class="mx-1">UNDERSTAND</label>
                                <input class="form-check-input mt-0" type="checkbox" value=""
                                    aria-label="Checkbox for following text input">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="tab">
            <h4>IV. EDUCATIONAL BACKGROUND</h4>
            <div>
                <div class="row">
                    <div class="col my-4">
                        <h6 class="lhead">Elementary</h6>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">School</span>
                            <input type="text" class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Course</span>
                            <input type="text" class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Year Graduated</span>
                            <input type="text" class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">School</span>
                            <input type="text" class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-default">
                        </div>
                        <p>If Undergraduate</p>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">What level?</span>
                            <input type="text" class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Year last Attended</span>
                            <input type="text" class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="input-group">
                            <span class="input-group-text">Awards Received</span>
                            <textarea class="form-control" aria-label="With textarea"></textarea>
                        </div>
                    </div>

                    <div class="col my-4">
                        <div class="col">
                            <h6 class="lhead">Secondary</h6>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">School</span>
                                <input type="text" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Course</span>
                                <input type="text" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Year Graduated</span>
                                <input type="text" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">School</span>
                                <input type="text" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default">
                            </div>
                            <p>If Undergraduate</p>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">What level?</span>
                                <input type="text" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Year last Attended</span>
                                <input type="text" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">Awards Received</span>
                                <textarea class="form-control" aria-label="With textarea"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="col my-4">
                            <h6 class="lhead">Tertiary</h6>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">School</span>
                                <input type="text" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Course</span>
                                <input type="text" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Year Graduated</span>
                                <input type="text" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">School</span>
                                <input type="text" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default">
                            </div>
                            <p>If Undergraduate</p>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">What level?</span>
                                <input type="text" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Year last Attended</span>
                                <input type="text" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">Awards Received</span>
                                <textarea class="form-control" aria-label="With textarea"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col my-4">
                        <div class="col">
                            <h6 class="lhead">Graduate Studies</h6>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">School</span>
                                <input type="text" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Course</span>
                                <input type="text" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Year Graduated</span>
                                <input type="text" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">School</span>
                                <input type="text" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default">
                            </div>
                            <p>If Undergraduate</p>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">What level?</span>
                                <input type="text" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Year last Attended</span>
                                <input type="text" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">Awards Received</span>
                                <textarea class="form-control" aria-label="With textarea"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="tab">
            <h4>V. TECHNICAL/VOCATIONAL AND OTHER TRAINING (Include courses takens as part of college education)</h4>
            <div class="panel">
                <div class="panel-body">

                    <div id="education_fields">

                    </div>
                    <div class="col nopadding">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">TRAINING/VOCATIONAL COURSE</span>
                                <input type="text" class="form-control" name="ACourse" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
                    </div>
                    <div class="col nopadding">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Duration</span>
                                <input type="text" class="form-control" name="ADuration" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
                    </div>
                    <div class="col nopadding">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Training Institution</span>
                                <input type="text" class="form-control" name="ATraIns" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
                    </div>

                    <div class="col nopadding">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Certificates Received (NC I, NC II, NC II, NC IV, etc)</span>
                                    <input type="text" class="form-control" name="ACertRec" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="input-group-btn">
                        <button class="btn btn-success" type="button" onclick="education_fields();"> 
                            <span
                                class="glyphicon glyphicon-plus" aria-hidden="true">
                            </span> 
                        </button>
                    </div>
                    <div class="clear"></div>

                </div>
                <div class="panel-footer"><small>Press <span class="glyphicon glyphicon-plus gs"></span> to add another form field :)</small>, 
                    <small>Press <span class="glyphicon glyphicon-minus gs"></span>to remove form field :)</small>
                </div>
                </div>
        </div>

        <div class="tab">
            <h4>VI. ELIGIBILITY/ PROFESSIONAL LICENSE</h4>
            
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12 table-responsive">
                        <table class="table table-bordered table-hover table-sortable" id="tab_logic">
                            <thead>
                                <tr >
                                    <th class="text-center">
                                        Name
                                    </th>
                                    <th class="text-center">
                                        Email
                                    </th>
                                    <th class="text-center">
                                        Notes
                                    </th>
                                    <th class="text-center">
                                        Option
                                    </th>
                                    <th class="text-center" style="border-top: 1px solid #ffffff; border-right: 1px solid #ffffff;">
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr id='addr0' data-id="0" class="hidden">
                                    <td data-name="name">
                                        <input type="text" name='name0'  placeholder='Name' class="form-control"/>
                                    </td>
                                    <td data-name="mail">
                                        <input type="text" name='mail0' placeholder='Email' class="form-control"/>
                                    </td>
                                    <td data-name="desc">
                                        <textarea name="desc0" placeholder="Description" class="form-control"></textarea>
                                    </td>
                                    <td data-name="sel">
                                        <select name="sel0">
                                            <option value="">Select Option</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                        </select>
                                    </td>
                                    <td data-name="del">
                                        <button name="del0" class='btn btn-danger glyphicon glyphicon-remove row-remove'><span aria-hidden="true">×</span></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <a id="add_row" class="btn btn-primary float-right">Add Row</a>
            </div>
            
        </div>

        <div class="tab">
            <h4>VII. WORK EXEPERIENCE</h4>
            <h6>(Limit to 10 year period, start with the most recent employment)</h6>
            
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

<script src="{{ asset('js\app.js') }}"></script>
<script src="{{ asset('js\jquery.min.js') }}"></script>
<script src="{{ asset('js\bootstrap.min.js') }}"></script>

</html>
