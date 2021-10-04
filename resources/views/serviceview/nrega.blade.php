@extends('layouts.basemain')
@section('content')

<div class="container-fluid homepage adminpage">
    <div class="row ">
        <div class="col-12 py-2  ">
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb breadbar justify-content-end">
                    <li class="breadcrumb-item eng_xxxs">Dashboard</li>
                    <li class="breadcrumb-item eng_xxxs">Application for NREGA</li>
                </ol>
            </nav>
        </div> <!-- col12 -->

        <div class="col-md-12 py-1 px-2 ">
            <div class="card">
                <h5 class="card-header">Application for NREGA</h5>
                <div class="card-body">
                    <div class="tab-content">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="pills-application-tab" data-toggle="pill"
                                    href="#pills-application" role="tab" aria-controls="pills-application"
                                    aria-selected="true">Step 1</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-attachments-tab" data-toggle="pill"
                                    href="#pills-attachments" role="tab" aria-controls="pills-attachments"
                                    aria-selected="false">Step 2</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-payment-tab" data-toggle="pill" href="#pills-payment"
                                    role="tab" aria-controls="pills-payment" aria-selected="false">Step 3</a>
                            </li>
                        </ul>
                        <!-- for Application-start -->
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-application" role="tabpanel"
                                aria-labelledby="pills-application-tab">
                                <div id="form_section">

                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2">
                                            <label for="district" class="eng_xxxs fg-darkBrown">District</label>
                                            <sup style="color:red">*</sup></label>

                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">
                                            <select class="form-control customform eng_xxxs fg-darkCrimson"
                                                id="district" aria-describedby="HELPNAME2" require>
                                                <option value="0">select Type</option>
                                                <option value="1">certificate Type</option>
                                            </select>
                                            <span id="district_msg" style="color:red;font-size:15px;"></span>
                                        </div> <!-- ./col-md-6 -->
                                    </div> <!-- ./row -->

                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2">
                                            <label for="block" class="eng_xxxs fg-darkBrown">Block</label>
                                            <sup style="color:red">*</sup></label>
                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">
                                            <select class="form-control customform eng_xxxs fg-darkCrimson" id="block"
                                                aria-describedby="HELPNAME2">
                                                <option value="0">select Type</option>
                                                <option value="1">income_pur</option>
                                            </select>
                                            <span id="block_msg" style="color:red;font-size:15px;"></span>
                                        </div> <!-- ./col-md-6 -->
                                    </div> <!-- ./row -->

                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2">
                                            <label for="panchayt" class="eng_xxxs fg-darkBrown">Panchayt</label>
                                            <sup style="color:red">*</sup></label>
                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">
                                            <select class="form-control customform eng_xxxs fg-darkCrimson"
                                                id="panchayt" aria-describedby="HELPNAME2">
                                                <option value="0">select Type</option>
                                                <option value="1">income_pur</option>
                                            </select>
                                            <span id="panchayt_msg" style="color:red;font-size:15px;"></span>
                                        </div> <!-- ./col-md-6 -->
                                    </div> <!-- ./row -->

                                    <div class="row customformrow">
                                        <div class="col-md-12 py-2" style="float:right;text-align:center">
                                            <button class="btn btn-md btn-flat btn-danger" id="nrega_details_reset">
                                                <i class="fa fa-refresh"></i>&nbsp;Reset
                                            </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <button class="btn btn-md btn-flat btn-success" id="proceed_nrega">
                                                &nbsp;Proceed </button>

                                        </div> <!-- ./col-md-6 -->
                                    </div>
                                    <div class="row customformrow" style="background: #c5d9d7;">
                                        <div class="col-md-12 py-2">
                                            <small id="" class="form-text eng_xxxxs text-muted">
                                                <span class="text-danger">*</span> Mandatory fields
                                                <span style="color: #f4fc03;">*</span> Either one is mandatory
                                            </small>
                                        </div> <!-- ./col-md-3 -->
                                    </div> <!-- ./row -->

                                </div> <!-- ./form_section -->


                            </div>
                            <div class="tab-pane fade" id="pills-attachments" role="tabpanel"
                                aria-labelledby="pills-attachments-tab">
                                <div id="form_section_attachment">

                                    <div style="background: #c5d9d7;">Subject : Application for work</div><br>
                                    <div>Sir/Madam,</div>
                                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I hereby submit my application for work
                                        under section 3(1) and paragraph 9 of
                                        Schedule-II of National Rural Employment Guarantee Act.The details of my request
                                        and the period for which work required are :</div><br>

                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2">
                                            <label for="name_nreg" class="eng_xxxs fg-darkBrown">
                                                Name of applicant with father's or husband's name</label>
                                            <sup style="color:red">*</sup></label>
                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">
                                            <input type="text" class="form-control customform eng_xxxs fg-darkCrimson"
                                                id="name_nreg" aria-describedby="HELPNAME" placeholder="Enter your name"
                                                required>
                                            <div id="name_nreg_msg" style="color:red;font-size:12px;"></div>
                                        </div> <!-- ./col-md-6 -->
                                    </div> <!-- ./row -->

                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2">
                                            <label for="aadhar_nreg" class="eng_xxxs fg-darkBrown">
                                                UID(Aadhar Number)</label>
                                            <sup style="color:red">*</sup></label>
                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">
                                            <input type="text" class="form-control customform eng_xxxs fg-darkCrimson"
                                                id="aadhar_nreg" aria-describedby="HELPNAME" placeholder="Aadhar Number"
                                                required maxLength="12" data-type="adhaar-number" minlength="12">
                                            <div id="aadhar_nreg_msg" style="color:red;font-size:12px;"></div>
                                        </div> <!-- ./col-md-6 -->
                                    </div> <!-- ./row -->

                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2">
                                            <label for="house_nreg" class="eng_xxxs fg-darkBrown">House
                                                Name/Number</label>
                                            <sup style="color:red">*</sup></label>
                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">
                                            <input type="text" class="form-control customform eng_xxxs fg-darkCrimson"
                                                id="house_nreg" aria-describedby="HELPNAME" placeholder="House Number"
                                                required>
                                            <div id="house_nreg_msg" style="color:red;font-size:12px;"></div>
                                        </div> <!-- ./col-md-6 -->
                                    </div> <!-- ./row -->

                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2">
                                            <label for="postoffice_nreg" class="eng_xxxs fg-darkBrown">Post
                                                office/Locality</label>
                                            <sup style="color:red">*</sup></label>
                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">
                                            <input type="text" class="form-control customform eng_xxxs fg-darkCrimson"
                                                id="postoffice_nreg" aria-describedby="HELPNAME"
                                                placeholder="Post office" required>
                                            <div id="postoffice_nreg_msg" style="color:red;font-size:12px;"></div>
                                        </div> <!-- ./col-md-6 -->
                                    </div> <!-- ./row -->

                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2">
                                            <label for="state_nreg" class="eng_xxxs fg-darkBrown">Post
                                                office/Locality</label>
                                            <sup style="color:red">*</sup></label>
                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">
                                            <input type="text" class="form-control customform eng_xxxs fg-darkCrimson"
                                                id="state_nreg" aria-describedby="HELPNAME" value="Kerala" required>
                                            <div id="state_nreg_msg" style="color:red;font-size:12px;"></div>
                                        </div> <!-- ./col-md-6 -->
                                    </div> <!-- ./row -->

                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2">
                                            <label for="district_nreg" class="eng_xxxs fg-darkBrown">District</label>
                                            <sup style="color:red">*</sup></label>
                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">
                                            <select class="form-control customform eng_xxxs fg-darkCrimson"
                                                id="district_nreg" aria-describedby="HELPNAME2" require>
                                                <option value="0">select Type</option>
                                                <option value="1">Trivandrum</option>
                                            </select>
                                            <span id="district_nreg_msg" style="color:red;font-size:12px;"></span>
                                        </div> <!-- ./col-md-6 -->
                                    </div> <!-- ./row -->

                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2">
                                            <label for="city_nreg" class="eng_xxxs fg-darkBrown">City</label>
                                            <sup style="color:red">*</sup></label>
                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">
                                            <input type="text" class="form-control customform eng_xxxs fg-darkCrimson"
                                                id="city_nreg" aria-describedby="HELPNAME" placeholder="Enter your city"
                                                required>
                                            <div id="city_nreg_msg" style="color:red;font-size:12px;"></div>
                                        </div> <!-- ./col-md-6 -->
                                    </div> <!-- ./row -->

                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2">
                                            <label for="pincode_nreg" class="eng_xxxs fg-darkBrown">Pincode</label>
                                            <sup style="color:red">*</sup></label>
                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">
                                            <input type="text" class="form-control customform eng_xxxs fg-darkCrimson"
                                                id="pincode_nreg" aria-describedby="HELPNAME"
                                                placeholder="Enter your pincode" required>
                                            <div id="pincode_nreg_msg" style="color:red;font-size:12px;"></div>
                                        </div> <!-- ./col-md-6 -->
                                    </div> <!-- ./row -->

                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2">
                                            <label for="mobile_nreg" class="eng_xxxs fg-darkBrown">Mobile Number</label>
                                            <sup style="color:red">*</sup></label>
                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">
                                            <input type="text" class="form-control customform eng_xxxs fg-darkCrimson"
                                                id="mobile_nreg" aria-describedby="HELPNAME"
                                                placeholder="Enter your mobile" maxlength="10" minlength="10" required>
                                            <div id="mobile_nreg_msg" style="color:red;font-size:12px;"></div>
                                        </div> <!-- ./col-md-6 -->
                                    </div> <!-- ./row -->

                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2">
                                            <label for="email_nreg" class="eng_xxxs fg-darkBrown">Email ID</label>
                                            <sup style="color:red">*</sup></label>
                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">
                                            <input type="email" class="form-control customform eng_xxxs fg-darkCrimson"
                                                id="email_nreg" aria-describedby="HELPNAME"
                                                placeholder="Enter your email" required>
                                            <div id="email_nreg_msg" style="color:red;font-size:12px;"></div>
                                        </div> <!-- ./col-md-6 -->
                                    </div> <!-- ./row -->

                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2">
                                            <label for="jobcard_nreg" class="eng_xxxs fg-darkBrown">Job Crad
                                                Number</label>
                                            <sup style="color:red">*</sup></label>
                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">
                                            <input type="text" class="form-control customform eng_xxxs fg-darkCrimson"
                                                id="jobcard_nreg" aria-describedby="HELPNAME"
                                                placeholder="Enter your jobcard number" required>
                                            <div id="jobcard_nreg_msg" style="color:red;font-size:12px;"></div>
                                        </div> <!-- ./col-md-6 -->
                                    </div> <!-- ./row -->


                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2">
                                            <label for="period_nreg" class="eng_xxxs fg-darkBrown">Periods(s) for which
                                                employment is needed</label>
                                            <sup style="color:red">*</sup></label>
                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">
                                            From: <input type="date"
                                                class="form-control customform eng_xxxs fg-darkCrimson"
                                                id="period_from_nreg" aria-describedby="HELPNAME"
                                                placeholder="Enter your jobcard number" required></br>
                                            To:<input type="date"
                                                class="form-control customform eng_xxxs fg-darkCrimson"
                                                id="period_to_nreg" aria-describedby="HELPNAME"
                                                placeholder="Enter your jobcard number" required>
                                            <div id="period_nreg_msg" style="color:red;font-size:12px;"></div>
                                        </div> <!-- ./col-md-6 -->
                                    </div> <!-- ./row -->

                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2">
                                            <label for="req_nreg" class="eng_xxxs fg-darkBrown">Requirement of
                                                Creche</label>
                                            <sup style="color:red">*</sup></label>
                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">
                                            <input type="radio" name="myRadios1" value="1" id="y" required />
                                            &nbsp;Yes&nbsp;
                                            <input type="radio" name="myRadios2" value="2" id="n" />&nbsp;No&nbsp;
                                            <span id="req_nreg_msg" style="color:red;font-size:14px;"></span>

                                        </div> <!-- ./col-md-6 -->
                                    </div> <!-- ./row -->

                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2 justify-content-center d-flex">

                                            <button class="btn btn-md btn-flat btn-primary " id="birth_details_reset">
                                                <i class="fas fa-broom"></i>&nbsp;Reset
                                            </button> &nbsp;&nbsp;
                                        </div>
                                        <div class="col-md-6 py-2 justify-content-center d-flex">

                                            <button class="btn btn-md btn-flat btn-success" id="birth_details_save">
                                                <i class="fas fa-save"></i>&nbsp;Save </button>

                                        </div> <!-- ./col-md-6 -->
                                    </div> <!-- ./row -->

                                </div> <!-- ./form_section -->
                            </div>
                            <div class="tab-pane fade" id="pills-payment" role="tabpanel"
                                aria-labelledby="pills-payment-tab">
                                <div id="form_section_attachment">
                                    <center>
                                        <div style="background: #c5d9d7;">Declaration</div><br>
                                    </center>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <input type="checkbox" aria-label="Checkbox for following text input">
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Text input with checkbox"
                                            value="I am willing to work for at least 14 continuous days in the work allotted to me">
                                        <sup style="color:red">*</sup></label>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="dec_place">Place</label>
                                            <input type="text" class="form-control" id="dec_place">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="dec_date">Date</label>
                                            <input type="date" class="form-control" id="dec_date">
                                        </div>
                                    </div>

                                    <div class="form-row justify-content-md-center">
                                        <div class="form-group col-md-6">

                                            <input type="text" class="form-control" id="dec_place">
                                            <center>
                                                <c<span class="">(Please enter visible characters in
                                                    the text box)</span>
                                            </center>
                                        </div>

                                    </div>
                                    <div class="row customformrow">
                                        <div class="col-md-12 py-2" style="float:right;text-align:center">
                                            <button class="btn btn-md btn-flat btn-success" id="show_details">
                                                &nbsp;Submit
                                            </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                            <button class="btn btn-md btn-flat btn-danger" id="desti_details_reset">
                                                &nbsp;Reset
                                            </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                            <button class="btn btn-md btn-flat btn-primary" id="show_details">
                                                &nbsp;Cancel </button>
                                        </div> <!-- ./col-md-6 -->
                                    </div>
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
@include('serviceview.nrega_script')
@endsection