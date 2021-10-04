<!-- Navas -->
@extends('layouts.basemain')
@section('content')
<div class="container-fluid homepage adminpage">
    <div class="row ">
        <div class="col-12 py-2  ">
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb breadbar justify-content-end">
                    <li class="breadcrumb-item eng_xxxs">Dashboard</li>
                    <li class="breadcrumb-item eng_xxxs">List</li>
                </ol>
            </nav>
        </div> <!-- col12 -->

        <div class="col-md-12 py-1 px-2 ">
            <div class="card">
                <div class="row customformrow" style="background: #c5d9d7;">
                    <div class="col-md-12 py-2">
                        <small id="" class="form-text eng_xxxxs text-muted">
                            <span class="text-danger">*</span> Mandatory fields
                            <span style="color: #f0bcdf;">*</span> Either one is mandatory
                        </small>
                    </div> <!-- ./col-md-3 -->
                </div> <!-- ./row -->
                <div class="card-body">
                    <div class="tab-content">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="pills-application-tab" data-toggle="pill" href="#pills-application" role="tab" aria-controls="pills-application" aria-selected="true">STEP 1</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-attachments-tab" data-toggle="pill" href="#pills-attachments" role="tab" aria-controls="pills-attachments" aria-selected="false">STEP 2</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="step3-tab" data-toggle="pill" href="#step3" role="tab" aria-controls="pills-payment" aria-selected="false">STEP 3</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="step4-tab" data-toggle="pill" href="#step4" role="tab" aria-controls="pills-payment" aria-selected="false">STEP 4</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="step5-tab" data-toggle="pill" href="#step5" role="tab" aria-controls="pills-payment" aria-selected="false">STEP 5</a>
                            </li>
                        </ul>
                        <!-- for Application-start -->

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-application" role="tabpanel" aria-labelledby="pills-application-tab">
                                <h5 class="card-header"> Application to be Submitted to :</h5>


                                <div id="form_section">

                                    <div class="row customformrow">

                                        <div class="col-md-6 py-2">
                                            <label for="District" class="eng_xxxs fg-darkBrown">District</label>
                                            <sup style="color:red">*</sup></label>
                                            <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> (Select
                                                your district)</small>
                                        </div>
                                        <div class="col-md-6 py-2">
                                            <select class="form-control customform eng_xxxs fg-darkCrimson" id="District" aria-describedby="HELPNAME2" required>
                                                <option value="">Select District</option>
                                                <option value="10">Malappuram</option>
                                                <option value="11">Kozhikkode</option>
                                            </select>
                                            <span id="DistrictError" style="color:red;"></span>
                                        </div> <!-- ./col-md-6 -->
                                    </div>
                                    <div class="row customformrow">

                                        <div class="col-md-6 py-2">
                                            <label for="Block" class="eng_xxxs fg-darkBrown">Block</label>
                                            <sup style="color:red">*</sup></label>
                                            <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> (Select
                                                your Block)</small>
                                        </div>
                                        <div class="col-md-6 py-2">
                                            <select class="form-control customform eng_xxxs fg-darkCrimson" id="Block" aria-describedby="HELPNAME2" required>
                                                <option value="">Select Block</option>
                                                <option value="1">Perinthalmanna</option>
                                                <option value="2">Mankada</option>
                                            </select>
                                            <span id="BlockError" style="color:red;"></span>
                                        </div> <!-- ./col-md-6 -->
                                    </div>
                                    <div class="row customformrow">

                                        <div class="col-md-6 py-2">
                                            <label for="Panchayath" class="eng_xxxs fg-darkBrown">Panchayath</label>
                                            <sup style="color:red">*</sup></label>
                                            <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> (Select
                                                your Panchayath)</small>
                                        </div>
                                        <div class="col-md-6 py-2">
                                            <select class="form-control customform eng_xxxs fg-darkCrimson" id="Panchayath" aria-describedby="HELPNAME2" required>
                                                <option value="">Select Panchayath</option>
                                                <option value="31">Angadippuram</option>
                                                <option value="26">Mankada</option>
                                            </select>
                                            <span id="PanchayathError" style="color:red;"></span>
                                        </div> <!-- ./col-md-6 -->

                                    </div> <!-- ./row -->
                                    <div class="row customformrow">

                                        <div class="col-md-12 py-2 justify-content-center d-flex">
                                            <button class="btn btn-sm btn-flat eng_xxxs bg-lightOrange fg-darkCrimson" id="reset_form"> &nbsp;Cancel </button>&nbsp;&nbsp;&nbsp;
                                            <button type="submit" id="save" class="btn btn-sm btn-flat eng_xxxs bg-darkAmber fg-lightGray px-3">&nbsp;Proceed </button>

                                        </div> <!-- ./col-md-6 -->


                                    </div> <!-- ./row -->
                                </div> <!-- ./form_section -->


                            </div>
                            <div class="tab-pane fade" id="pills-attachments" role="tabpanel" aria-labelledby="pills-attachments-tab">
                                <h5 class="card-header"> Application to Receive Home based on Indira Awas Yojna</h5>
                                <center>
                                    <h6>Applicant Details</h6>
                                </center>
                                <div class="row customformrow">
                                    <div class="col-md-6 py-2">
                                        <label for="applicantName" class="eng_xxxs fg-darkBrown">Name</label>
                                        <sup style="color:red">*</sup></label>
                                        <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> (Applicant
                                            Name)</small>
                                    </div>
                                    <div class="col-md-6 py-2">
                                        <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="applicantName" placeholder="Applicant Name" aria-describedby="HELPNAME2" maxlength="99" required>

                                        <span id="NameError" style="color:red;"></span>
                                    </div> <!-- ./col-md-6 -->
                                </div>
                                <div class="row customformrow">

                                    <div class="col-md-6 py-2">
                                        <label for="adharNo" class="eng_xxxs fg-darkBrown">UID (Adhar)</label>
                                        <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> (Adhar Number)</small>
                                    </div>
                                    <div class="col-md-6 py-2">
                                        <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="adharNo" placeholder="Adhar Number" maxlength="12" aria-describedby="HELPNAME2">

                                        <span id="adharNoError" style="color:red;"></span>
                                    </div> <!-- ./col-md-6 -->
                                </div>
                                <div class="row customformrow">

                                    <div class="col-md-6 py-2">
                                        <label for="houseName" class="eng_xxxs fg-darkBrown">House Name</label>
                                        <sup style="color:red">*</sup>
                                        <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> (House Name)</small>
                                    </div>
                                    <div class="col-md-6 py-2">
                                        <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="houseName" placeholder="House Name" maxlength="50" required aria-describedby="HELPNAME2">

                                        <span id="houseNameError" style="color:red;"></span>
                                    </div> <!-- ./col-md-6 -->
                                </div>
                                <div class="row customformrow">

                                    <div class="col-md-6 py-2">
                                        <label for="Postoffice" class="eng_xxxs fg-darkBrown">Post office Name</label><sup style="color:red">*</sup>
                                        <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> (Post office name)</small>
                                    </div>
                                    <div class="col-md-6 py-2">
                                        <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="Postoffice" placeholder="Name of Post offic" maxlength="30" required aria-describedby="HELPNAME2">

                                        <span id="PostofficeError" style="color:red;"></span>
                                    </div> <!-- ./col-md-6 -->
                                </div>
                                <div class="row customformrow">

                                    <div class="col-md-6 py-2">
                                        <label for="stateName" class="eng_xxxs fg-darkBrown">State</label><sup style="color:red">*</sup>
                                        <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> (State name)</small>
                                    </div>
                                    <div class="col-md-6 py-2">
                                        <select class="form-control customform eng_xxxs fg-darkCrimson" id="stateName" placeholder="House Name" required aria-describedby="HELPNAME2">
                                            <option value="">Select State</option>
                                            <option value="10">Kerala</option>
                                            <option value="13">Tamil Nadu</option>
                                        </select>

                                        <span id="stateNameError" style="color:red;"></span>
                                    </div> <!-- ./col-md-6 -->
                                </div>
                                <div class="row customformrow">

                                    <div class="col-md-6 py-2">
                                        <label for="districtName" class="eng_xxxs fg-darkBrown">District</label><sup style="color:red">*</sup>
                                        <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> (District name)</small>
                                    </div>
                                    <div class="col-md-6 py-2">
                                        <select class="form-control customform eng_xxxs fg-darkCrimson" id="districtName" placeholder="House Name" required aria-describedby="HELPNAME2">
                                            <option value="">Select District</option>
                                            <option value="10">Malappuram</option>
                                            <option value="13">Kannur</option>
                                        </select>

                                        <span id="districtNameError" style="color:red;"></span>
                                    </div> <!-- ./col-md-6 -->
                                </div>
                                <div class="row customformrow">

                                    <div class="col-md-6 py-2">
                                        <label for="cityName" class="eng_xxxs fg-darkBrown">City</label><sup style="color:red">*</sup>
                                        <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> (City name)</small>
                                    </div>
                                    <div class="col-md-6 py-2">
                                        <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="cityName" placeholder="City Name" maxlength="50" required aria-describedby="HELPNAME2">

                                        <span id="cityNameError" style="color:red;"></span>
                                    </div> <!-- ./col-md-6 -->
                                </div>
                                <div class="row customformrow">

                                    <div class="col-md-6 py-2">
                                        <label for="pincode" class="eng_xxxs fg-darkBrown">Pincode</label><sup style="color:red">*</sup>
                                        <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> (Pincode )</small>
                                    </div>
                                    <div class="col-md-6 py-2">
                                        <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="pincode" placeholder="Pincode" maxlength="6" required aria-describedby="HELPNAME2">

                                        <span id="pincodeError" style="color:red;"></span>
                                    </div> <!-- ./col-md-6 -->
                                </div>
                                <div class="row customformrow">

                                    <div class="col-md-6 py-2">
                                        <label for="mobileNumber" class="eng_xxxs fg-darkBrown">Mobile Number</label><sup style="color:red">*</sup>
                                        <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> (Mobile Number)</small>
                                    </div>
                                    <div class="col-md-6 py-2">
                                        <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="mobileNumber" placeholder="Mobile number" maxlength="13" required aria-describedby="HELPNAME2">

                                        <span id="mobileNumberError" style="color:red;"></span>
                                    </div> <!-- ./col-md-6 -->
                                </div>
                                <div class="row customformrow">

                                    <div class="col-md-6 py-2">
                                        <label for="emailId" class="eng_xxxs fg-darkBrown">Email ID</label>
                                        <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> (Email Address)</small>
                                    </div>
                                    <div class="col-md-6 py-2">
                                        <input type="email" class="form-control customform eng_xxxs fg-darkCrimson" id="emailId" placeholder="Email id" required aria-describedby="HELPNAME2">

                                        <span id="emailIdError" style="color:red;"></span>
                                    </div> <!-- ./col-md-6 -->
                                </div>
                                <div class="row customformrow">

                                    <div class="col-md-12 py-2 justify-content-center d-flex">
                                        <button class="btn btn-sm btn-flat eng_xxxs bg-lightOrange fg-darkCrimson" id="reset_form"> &nbsp;Clear </button>&nbsp;&nbsp;&nbsp;
                                        <button type="submit" id="save" class="btn btn-sm btn-flat eng_xxxs bg-darkAmber fg-lightGray px-3">&nbsp;Save </button>
                                    </div> <!-- ./col-md-6 -->
                                </div> <!-- ./row -->

                            </div>

                            <div class="tab-pane fade" id="step3" role="tabpanel" aria-labelledby="pills-payment-tab">

                                <div class="row customformrow">

                                    <div class="col-md-6 py-2">
                                        <h5 class="card-header">HUSBAND</h5>
                                        <div class="col-md-12 py-2">
                                            <label for="HusName" class="eng_xxxs fg-darkBrown">Name</label>
                                            <span id="HusNameError" style="color:red;"></span>

                                            <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="HusName" placeholder="House Name" required aria-describedby="HELPNAME2">

                                            <label for="HusName" class="eng_xxxs fg-darkBrown">UID (Adhar)</label><span id="HusAdharNoError" style="color:red;"></span>
                                            <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="HusAdharNo" placeholder="Adhar Number" required aria-describedby="HELPNAME2">


                                            <label for="HouseName" class="eng_xxxs fg-darkBrown">House Name</label><span id="HusHouseNameError" style="color:red;"></span>
                                            <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="HusHouseName" placeholder="House Name" required aria-describedby="HELPNAME2">


                                            <label for="Postoffice" class="eng_xxxs fg-darkBrown">Postoffice</label><span id="HusPostofficeError" style="color:red;"></span>
                                            <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="HusPostoffice" placeholder="Post Office" required aria-describedby="HELPNAME2">


                                            <label for="HusName" class="eng_xxxs fg-darkBrown">State</label><span id="HusStateError" style="color:red;"></span>
                                            <select class="form-control customform eng_xxxs fg-darkCrimson" id="Husstate" required aria-describedby="HELPNAME2">
                                                <option value="">Select</option>
                                                <option value="10">Kerala</option>
                                                <option value="11">Tamil Nadu</option>
                                            </select>


                                            <label for="HusName" class="eng_xxxs fg-darkBrown">District</label><span id="HusDistrictError" style="color:red;"></span>
                                            <select class="form-control customform eng_xxxs fg-darkCrimson" id="HusDistrict" required aria-describedby="HELPNAME2">
                                                <option value="">Select</option>
                                                <option value="10">Malappuram</option>
                                                <option value="11">Kozhikkode</option>
                                            </select>


                                            <label for="cityName" class="eng_xxxs fg-darkBrown">City</label><span id="HuscityNameError" style="color:red;"></span>
                                            <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="HuscityName" placeholder="City Name" required aria-describedby="HELPNAME2">


                                            <label for="Pincode" class="eng_xxxs fg-darkBrown">Pincode</label><span id="HusPincodeError" style="color:red;"></span>
                                            <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="HusPincode" placeholder="Pincode" required maxlength="6" aria-describedby="HELPNAME2">

                                            <label for="mobileNo" class="eng_xxxs fg-darkBrown">Mobile Number</label><span id="HusmobileNoError" style="color:red;"></span>
                                            <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="HusmobileNo" placeholder="Mobile Number" required maxlength="12" aria-describedby="HELPNAME2">

                                            <label for="Email" class="eng_xxxs fg-darkBrown">Email Number</label><span id="HusEmailIdError" style="color:red;"></span>
                                            <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="HusEmailId" placeholder="Email Address" required aria-describedby="HELPNAME2">
                                        </div>


                                    </div> <!-- ./col-md-6 -->
                                    <div class="col-md-6 py-2">
                                        <h5 class="card-header">WIFE</h5>
                                        <div class="col-md-12 py-2">
                                            <label for="WifeName" class="eng_xxxs fg-darkBrown">Name</label> <span id="WifeNameError" style="color:red;"></span>

                                            <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="WifeName" placeholder="Wife  Name" required aria-describedby="HELPNAME2">


                                            <label for="WifeAdharNo" class="eng_xxxs fg-darkBrown">UID (Adhar)</label> <span id="WifeAdharNoError" style="color:red;"></span>

                                            <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="WifeAdharNo" placeholder="Adhar Number" required aria-describedby="HELPNAME2">


                                            <label for="WifeHouseName" class="eng_xxxs fg-darkBrown">House Name</label> <span id="WifeHouseNameError" style="color:red;"></span>

                                            <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="WifeHouseName" placeholder="House Name" required aria-describedby="HELPNAME2">



                                            <label for="Postoffice" class="eng_xxxs fg-darkBrown">Postoffice</label> <span id="WifePostofficeError" style="color:red;"></span>
                                            <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="WifePostoffice" placeholder="Postoffice" required aria-describedby="HELPNAME2">


                                            <label for="HusName" class="eng_xxxs fg-darkBrown">State</label> <span id="WifeStateError" style="color:red;"></span>
                                            <select class="form-control customform eng_xxxs fg-darkCrimson" id="Wifestate" required aria-describedby="HELPNAME2">
                                                <option value="">Select</option>
                                                <option value="10">Kerala</option>
                                                <option value="11">Tamil Nadu</option>
                                            </select>


                                            <label for="HusName" class="eng_xxxs fg-darkBrown">District</label> <span id="WifeDistrictError" style="color:red;"></span>
                                            <select class="form-control customform eng_xxxs fg-darkCrimson" id="WifeDistrict" required aria-describedby="HELPNAME2">
                                                <option value="">Select</option>
                                                <option value="10">Malappuram</option>
                                                <option value="11">Kozhikkode</option>
                                            </select>


                                            <label for="cityName" class="eng_xxxs fg-darkBrown">City</label> <span id="WifecityNameError" style="color:red;"></span>
                                            <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="WifecityName" placeholder="City Name" required aria-describedby="HELPNAME2">


                                            <label for="Pincode" class="eng_xxxs fg-darkBrown">Pincode</label> <span id="WifePincodeError" style="color:red;"></span>
                                            <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="WifePincode" placeholder="Pincode" required aria-describedby="HELPNAME2">


                                            <label for="mobileNo" class="eng_xxxs fg-darkBrown">Mobile Number</label> <span id="WifemobileNoError" style="color:red;"></span>
                                            <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="WifemobileNo" placeholder="Mobile Number" required aria-describedby="HELPNAME2">


                                            <label for="Email" class="eng_xxxs fg-darkBrown">Email Number</label> <span id="WifeEmailIdError" style="color:red;"></span>
                                            <input type="email" class="form-control customform eng_xxxs fg-darkCrimson" id="WifeEmailId" placeholder="Email Address" required aria-describedby="HELPNAME2">

                                        </div>
                                    </div> <!-- ./col-md-6 -->

                                </div>
                                <div class="row customformrow">

                                    <div class="col-md-12 py-2 justify-content-center d-flex">
                                        <button class="btn btn-sm btn-flat eng_xxxs bg-lightOrange fg-darkCrimson" id="reset_form"> &nbsp;Clear </button>&nbsp;&nbsp;&nbsp;
                                        <button type="submit" id="save" class="btn btn-sm btn-flat eng_xxxs bg-darkAmber fg-lightGray px-3">&nbsp;Save </button>
                                    </div> <!-- ./col-md-6 -->
                                </div> <!-- ./row -->
                            </div>
                            <div class="tab-pane fade" id="step4" role="tabpanel" aria-labelledby="pills-payment-tab">
                                <div class="row customformrow">
                                    <h5 class="card-header col-md-12">MORE DETAILS</h5>
                                </div>

                                <div class="row customformrow">
                                    <div class="col-md-6 py-2">
                                        <label for="Panchayath" class="eng_xxxs fg-darkBrown">Panchayath Name</label>
                                        <sup style="color:red">*</sup>
                                    </div>
                                    <div class="col-md-6 py-2">
                                        <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="More_Panchayath" placeholder="Panchayath Name" required aria-describedby="HELPNAME2">
                                        <span id="More_PanchayathError" style="color:red;"></span>
                                    </div>
                                </div>

                                <div class="row customformrow">
                                    <div class="col-md-6 py-2">
                                        <label for="More_Ward" class="eng_xxxs fg-darkBrown">Ward Number</label>
                                        <sup style="color:red">*</sup>
                                    </div>
                                    <div class="col-md-6 py-2">
                                        <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="More_Ward" placeholder="Ward Number" required aria-describedby="HELPNAME2">
                                        <span id="More_WardError" style="color:red;"></span>
                                    </div>
                                </div>

                                <div class="row customformrow">
                                    <div class="col-md-6 py-2">
                                        <label for="Job" class="eng_xxxs fg-darkBrown">Job</label>
                                        <sup style="color:red">*</sup>
                                    </div>
                                    <div class="col-md-6 py-2">
                                        <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="Job" placeholder="Job Name" required aria-describedby="HELPNAME2">
                                        <span id="JobError" style="color:red;"></span>
                                    </div>
                                </div>

                                <div class="row customformrow">
                                    <div class="col-md-6 py-2">
                                        <label for="Income" class="eng_xxxs fg-darkBrown">Annual income of family</label>
                                        <sup style="color:red">*</sup>
                                    </div>
                                    <div class="col-md-6 py-2">
                                        <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="Income" placeholder="Annual Income" required aria-describedby="HELPNAME2">
                                        <span id="IncomeError" style="color:red;"></span>
                                    </div>
                                </div>

                                <div class="row customformrow">
                                    <div class="col-md-6 py-2">
                                        <label for="gender" class="eng_xxxs fg-darkBrown">Applicant is female?</label>
                                        <sup style="color:red">*</sup>
                                    </div>
                                    <div class="col-md-6 py-2">
                                        Yes <input type="radio" name="gender" id="gender" required aria-describedby="HELPNAME2">
                                        No <input type="radio" name="gender" checked id="gender" required aria-describedby="HELPNAME2">
                                        <span id="genderError" style="color:red;"></span>
                                    </div>
                                </div>

                                <div class="row customformrow">
                                    <div class="col-md-6 py-2">
                                        <label for="bpl" class="eng_xxxs fg-darkBrown">Is Applicant's family below poverty line</label>
                                        <sup style="color:red">*</sup>
                                    </div>
                                    <div class="col-md-6 py-2">
                                        Yes <input type="radio" name="bpl" id="bpl" required aria-describedby="HELPNAME2">
                                        No <input type="radio" name="bpl" checked id="bpl" required aria-describedby="HELPNAME2">
                                        <span id="bplError" style="color:red;"></span>
                                    </div>
                                </div>

                                <div class="row customformrow">
                                    <div class="col-md-6 py-2">
                                        <label for="haveHouse" class="eng_xxxs fg-darkBrown">Applicant have owned house?</label>
                                        <sup style="color:red">*</sup>
                                    </div>
                                    <div class="col-md-6 py-2">
                                        Yes <input type="radio" name="haveHouse" id="haveHouse" required aria-describedby="HELPNAME2">
                                        No <input type="radio" checked name="haveHouse" id="haveHouse" required aria-describedby="HELPNAME2">
                                        <span id="haveHouseError" style="color:red;"></span>
                                    </div>
                                </div>

                                <div class="row customformrow">
                                    <div class="col-md-6 py-2">
                                        <label for="SurveyNo" class="eng_xxxs fg-darkBrown">Survey Number of the place where the house is intended to be built</label>
                                        <sup style="color:red">*</sup>
                                    </div>
                                    <div class="col-md-6 py-2">
                                        <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="SurveyNo" placeholder="Survey Number of the land" required aria-describedby="HELPNAME2">
                                        <span id="SurveyNoError" style="color:red;"></span>
                                    </div>
                                </div>

                                <div class="row customformrow">
                                    <div class="col-md-6 py-2">
                                        <label for="Area" class="eng_xxxs fg-darkBrown">Area of the place where the house is intended to be built? (in Cent)</label>
                                        <sup style="color:red">*</sup>
                                    </div>
                                    <div class="col-md-6 py-2">
                                        <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="Area" placeholder="Area of the land" required aria-describedby="HELPNAME2">
                                        <span id="AreaError" style="color:red;"></span>
                                    </div>
                                </div>


                                <div class="row customformrow">
                                    <div class="col-md-6 py-2">
                                        <label for="haveHouse" class="eng_xxxs fg-darkBrown">Is Applicant belongs to Scheduled Caste or Scheduled Tribe?</label>
                                        <!-- <sup style="color:red">*</sup> -->
                                    </div>
                                    <div class="col-md-6 py-2">
                                        Scheduled Caste <input type="checkbox" name="sc" id="sc" required aria-describedby="HELPNAME2">
                                        Scheduled Tribe <input type="checkbox" name="st" id="st" required aria-describedby="HELPNAME2">
                                        <span id="haveHouseError" style="color:red;"></span>
                                    </div>
                                </div>


                                <div class="row customformrow">
                                    <div class="col-md-6 py-2">
                                        <label for="MinorityOrNot" class="eng_xxxs fg-darkBrown">Applicant is Belong to the minority group?</label>
                                        <sup style="color:red">*</sup>
                                    </div>
                                    <div class="col-md-6 py-2">
                                        <div class="col-md-6 py-2">
                                            Yes <input type="radio" name="MinorityOrNot" id="MinorityOrNot" required aria-describedby="HELPNAME2">
                                            No <input type="radio" checked name="MinorityOrNot" id="MinorityOrNot" required aria-describedby="HELPNAME2">
                                            <span id="MinorityOrNotError" style="color:red;"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row customformrow">
                                    <div class="col-md-6 py-2">
                                        <label for="disableOrNot" class="eng_xxxs fg-darkBrown">The applicant is physically/mentally disabled person?</label>
                                        <sup style="color:red">*</sup>
                                    </div>
                                    <div class="col-md-6 py-2">
                                        <div class="col-md-6 py-2">
                                            Yes <input type="radio" name="disableOrNot" id="MinorityOrNot" required aria-describedby="HELPNAME2">
                                            No <input type="radio" checked name="disableOrNot" id="MinorityOrNot" required aria-describedby="HELPNAME2">
                                            <span id="disableOrNotError" style="color:red;"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row customformrow">
                                    <div class="col-md-6 py-2">
                                        <label for="grantOrNot" class="eng_xxxs fg-darkBrown">Have you ever had any grant assistance or anything to build a house before?</label>
                                        <sup style="color:red">*</sup>
                                    </div>
                                    <div class="col-md-6 py-2">
                                        <div class="col-md-6 py-2">
                                            Yes <input type="radio" name="grantOrNot" id="MinorityOrNot" required aria-describedby="HELPNAME2">
                                            No <input type="radio" checked name="grantOrNot" id="MinorityOrNot" required aria-describedby="HELPNAME2">
                                            <span id="grantOrNotError" style="color:red;"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row customformrow">
                                    <div class="col-md-6 py-2">
                                        <label for="RationOrId" class="eng_xxxs fg-darkBrown">Ration card Number / Identity card number</label>
                                        <sup style="color:red">*</sup>
                                    </div>
                                    <div class="col-md-6 py-2">
                                        <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="RationOrId" placeholder="Ration card number or identity card number" required aria-describedby="HELPNAME2">
                                        <span id="RationOrIdError" style="color:red;"></span>
                                    </div>
                                </div>

                                <div class="row customformrow">

                                    <div class="col-md-12 py-2 justify-content-center d-flex">
                                        <button class="btn btn-sm btn-flat eng_xxxs bg-lightOrange fg-darkCrimson" id="reset_form"> &nbsp;Clear </button>&nbsp;&nbsp;&nbsp;
                                        <button type="submit" id="save" class="btn btn-sm btn-flat eng_xxxs bg-darkAmber fg-lightGray px-3">&nbsp;Save </button>
                                    </div> <!-- ./col-md-6 -->
                                </div> <!-- ./row -->
                            </div>
                            <div class="tab-pane fade" id="step5" role="tabpanel" aria-labelledby="pills-payment-tab">
                                <h5 class="card-header col-md-12">Declaration</h5>

                                <div class="row customformrow">
                                    <input style="margin-top: 2%;" type="checkbox" class="btn btn-sm btn-flat eng_xxxs bg-lightOrange fg-darkCrimson" name="declaration" id="declaration" required aria-describedby="HELPNAME2">
                                    I have understood the provisions for obtaining funding under this scheme.All the information mentioned above is true as far as I know and believe.
                                    If any of this turns out to be untrue, it is hereby informed that if the entire amount purchased from the Government cannot be paid together with the interest and additional interest at the that time,
                                    it is agreed to charge us the entire amount as per the revenue recovery measure.
                                </div>
                                <div class="row customformrow">
                                    <div class="col-md-1 py-2">
                                        <label for="place" class="eng_xxxs fg-darkBrown">Place</label>
                                        <sup style="color:red">*</sup>
                                    </div>
                                    <div class="col-md-5 py-2">
                                        <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="place" placeholder="Place" required aria-describedby="HELPNAME2">
                                        <span id="placeError" style="color:red;"></span>
                                    </div>
                                    <div class="col-md-1 py-2">
                                        <label for="date" class="eng_xxxs fg-darkBrown">Date</label>
                                        <sup style="color:red">*</sup>
                                    </div>
                                    <div class="col-md-5 py-2">
                                        <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="date" placeholder="Place" required aria-describedby="HELPNAME2" disabled value="<?php echo date('d-m-Y'); ?>">
                                        <span id="dateError" style="color:red;"></span>
                                    </div>
                                </div>
                                <div class="row customformrow">
                                    <div class="col-md-12 py-2">
                                        <center>
                                            <div class="col-md-2 py-2">

                                                <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="captcha" placeholder="Captcha" required aria-describedby="HELPNAME2">
                                                <span id="captchaError" style="color:red;"></span>
                                            </div>
                                            (Please enter visible characters in the textbox)

                                        </center>
                                    </div>
                                </div>
                                <div class="row customformrow">

                                    <div class="col-md-8 py-2 justify-content-center d-flex">
                                        <div class="col-md-4 py-2">
                                            <button class="btn btn-sm btn-flat eng_xxxs bg-lightOrange fg-darkCrimson" id="reset_form"> &nbsp;Clear </button>&nbsp;&nbsp;&nbsp;
                                        </div>
                                        <div class="col-md-4 py-2">
                                            <button id="save" class="btn btn-sm btn-flat eng_xxxs bg-darkAmber fg-lightGray px-3">&nbsp;Cancel </button>
                                        </div>
                                        <div class="col-md-4 py-2">
                                            <button type="submit" id="save" class="btn btn-sm btn-flat eng_xxxs bg-darkAmber fg-lightGray px-3">&nbsp;Submit </button>
                                        </div>
                                    </div> <!-- ./col-md-6 -->
                                </div> <!-- ./row -->
                            </div>
                        </div>

                    </div>
                    <!-- application stop -->
                </div>
            </div>
        </div>
    </div> <!-- ./col12 -->



</div> <!-- ./form_section -->
</div> <!-- ./col12 -->
</div> <!-- ./row -->
</div> <!-- ./container -->
@endsection

@section('customscripts')
@include('serviceview.indira_awas_yojana_application_script')
@endsection

