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
                <h5 class="card-header"> Portal Application Form</h5>
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
                                <a class="nav-link active" id="pills-application-tab" data-toggle="pill" href="#pills-application" role="tab" aria-controls="pills-application" aria-selected="true">Application</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-attachments-tab" data-toggle="pill" href="#pills-attachments" role="tab" aria-controls="pills-attachments" aria-selected="false">Attachments</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-payment-tab" data-toggle="pill" href="#pills-payment" role="tab" aria-controls="pills-payment" aria-selected="false">Payment</a>
                            </li>
                        </ul>
                        <!-- for Application-start -->
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-application" role="tabpanel" aria-labelledby="pills-application-tab">
                                <div id="form_section">

                                    <div class="row customformrow">
                                        <div class="col-md-3 py-2">
                                            <label for="edistricID_lab" class="eng_xxxs fg-darkBrown">eDistrict
                                                Registration Number</label>
                                            <sup style="color:red">*</sup></label>
                                            <!-- <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> (Provided
                                                eDistrict Application)</small> -->
                                            <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="edistricID" aria-describedby="HELPNAME" placeholder="eDistrict Registration" maxlength="15" required>
                                            <span id="edistricIDerror" style="color:red;"></label>
                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-3 py-2">
                                            <label for="cerType" class="eng_xxxs fg-darkBrown">Certificate Type</label>
                                            <sup style="color:red">*</sup></label>
                                            <!-- <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> (select
                                                type)</small> -->
                                            <select class="form-control customform eng_xxxs fg-darkCrimson" id="cerType" aria-describedby="HELPNAME2" required>
                                                <option value="">select Type</option>
                                                <option value="1">Widow/Widower certificate</option>
                                            </select>
                                            <span id="cerTypeerror" style="color:red;"></span>
                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-3 py-2">
                                            <label for="cerPurpose" class="eng_xxxs fg-darkBrown">Certificate
                                                Purpose</label>
                                            <sup style="color:red">*</sup></label>
                                            <!-- <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> (select
                                                purpose)</small> -->
                                            <select class="form-control customform eng_xxxs fg-darkCrimson" id="cerPurpose" aria-describedby="HELPNAME2">
                                                <option value="">select Type</option>
                                                <option value="1">State purpose</option>
                                                <option value="2">Outside state purpose</option>
                                            </select>
                                            <span id="cerPurposeerror" style="color:red;"></span>
                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-3 py-2">
                                            <label for="cerproduced" class="eng_xxxs fg-darkBrown">To be produced
                                                before</label>
                                            <sup style="color:red">*</sup></label>
                                            <!-- <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> (To be produced
                                                before)</small> -->
                                            <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="pro_before" aria-describedby="HELPNAME" placeholder="To be produced before" maxlength="50" minlength="0">
                                            <span id="pro_beforeerror" style="color:red"></span>

                                        </div> <!-- ./col-md-6 -->
                                        <a href="">
                                            <div><i class="fa fa-plus"></i> &nbsp;<b>Show Applicant Details</b></div>
                                        </a>
                                    </div> <!-- ./row -->
                                    <div id="widow_widower_certificate_section">
                                        <center>
                                            <h5 class="card-header"> Widow/Widower Certificate</h5>
                                        </center>
                                        <h6 style="margin-top: 2%;"> NAME AND ADDRESS OF DECEASED / DESERTED</h6>
                                        
                                        <div class="row customformrow">

                                            <div class="col-md-3 py-2">
                                                <label for="name" class="eng_xxxs fg-darkBrown">Name</label>
                                                <sup style="color:red">*</sup></label>
                                                <!-- <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> (To be produced
                                                before)</small> -->
                                                <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="applicantName" aria-describedby="HELPNAME" placeholder="Name" maxlength="50" minlength="0">
                                                <span id="applicantNameError" style="color:red"></span>

                                            </div> <!-- ./col-md-6 -->
                                            <div class="col-md-3 py-2">
                                                <label for="cerproduced" class="eng_xxxs fg-darkBrown">Employed as</label>

                                                <!-- <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> (To be produced
                                                before)</small> -->
                                                <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="employedAs" aria-describedby="HELPNAME" placeholder="Employed as" maxlength="50" minlength="0">
                                                <span id="employedAsError" style="color:red"></span>

                                            </div> <!-- ./col-md-6 -->
                                            <div class="col-md-6 py-2">
                                                <label for="cerproduced" class="eng_xxxs fg-darkBrown">Address</label>
                                                <sup style="color:red">*</sup></label>
                                                <!-- <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> (To be produced
                                                before)</small> -->
                                                <textarea class="form-control customform eng_xxxs fg-darkCrimson" id="deceasedAddress" aria-describedby="HELPNAME" placeholder="Address" minlength="0"></textarea>
                                                <span id="AddressError" style="color:red"></span>

                                            </div> <!-- ./col-md-6 -->

                                        </div> <!-- ./row -->



                                        <div id="demise_details" class="row customformrow">
                                            <div class="col-md-4 py-2">
                                                <label for="marr_date" class="eng_xxxs fg-darkBrown">Date of Demise</label>
                                                <sup style="color:red">*</sup></label>
                                                <!-- <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> (select
                                                purpose)</small> -->
                                                <input type="date" class="form-control customform eng_xxxs fg-darkCrimson" id="marr_date" name="marr_date" aria-describedby="HELPNAME2" required>
                                            </div> <!-- ./col-md-6 -->
                                            <div class="col-md-4 py-2">
                                                <label for="spouse_religion" class="eng_xxxs fg-darkBrown">Death Certificate No.</label>

                                                <!-- <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> (select
                                                purpose)</small> -->
                                                <input type="text" name="death_cert_no" id="death_cert_no" class="form-control customform eng_xxxs fg-darkCrimson" placeholder="Death certificate No">
                                                <span id="death_cert_noError" style="color:red"></span>
                                            </div> <!-- ./col-md-6 -->
                                            <div class="col-md-4 py-2">
                                                <label for="spouse_religion" class="eng_xxxs fg-darkBrown">Place of Death</label>

                                                <!-- <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> (select
                                                purpose)</small> -->
                                                <input type="text" name="death_cert_no" id="death_cert_no" class="form-control customform eng_xxxs fg-darkCrimson" placeholder="Place of Death">
                                                <span id="spouse_religionerror" style="color:red"></span>
                                            </div> <!-- ./col-md-6 -->
                                        </div>
                                        <div class="row customformrow">
                                            <div class="col-md-6 py-2">
                                                <label for="spouse_religion" class="eng_xxxs fg-darkBrown">No of years since deserted/divorced/dead</label>
                                                <sup style="color:red">*</sup>
                                                <!-- <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> (select
                                                purpose)</small> -->
                                                <input type="text" name="no_years_since_death" id="no_years_since_death" class="form-control customform eng_xxxs fg-darkCrimson" placeholder="No of years since deserted/divorced/dead" minlength="1" maxlength="3">
                                                <span id="no_years_since_deathError" style="color:red"></span>
                                            </div> <!-- ./col-md-6 -->
                                            <div class="col-md-6 py-2">
                                                <label for="spouse_religion" class="eng_xxxs fg-darkBrown">Months</label>
                                                <sup style="color:red">*</sup>
                                                <!-- <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> (select
                                                purpose)</small> -->
                                                <input type="text" name="no_months_since_death" id="no_months_since_death" class="form-control customform eng_xxxs fg-darkCrimson" placeholder="Months" maxlength="2">
                                                <span id="no_months_since_deathError" style="color:red"></span>
                                            </div> <!-- ./col-md-6 -->
                                        </div>


                                        <div class="page-content page-container" id="page-content">

                                            <div class="card-body">
                                                <h5 class="card-header"> DETAILS OF LEGAL HEIRSHIP CLAIMANTS</h5>

                                                <div class="table-responsive">
                                                    <table id="faqs" class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>Sl.No</th>
                                                                <th>Name of Person<sup style="color:red">*</sup></th>
                                                                <th>Gender<sup style="color:red">*</sup></th>
                                                                <th>Relationship<sup style="color:red">*</sup></th>
                                                                <th>Age<sup style="color:red">*</sup></th>
                                                                <th>Occupation</th>
                                                                <th>Address<sup style="color:red">*</sup></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td><input type="text" class="form-control" placeholder="Name"></td>
                                                                <td><select class="form-control">
                                                                        <option value="">-Select-</option>
                                                                        <option value="M">Male</option>
                                                                        <option value="F">Female</option>
                                                                        <option value="O">Other</option>
                                                                    </select>
                                                                </td>
                                                                <td><select class="form-control">
                                                                        <option value="">-Select-</option>
                                                                        <option value="1">Mother</option>
                                                                        <option value="2">Husbant</option>
                                                                        <option value="3">Wife</option>
                                                                    </select>
                                                                </td>
                                                                <td><input type="text" id="" name="" class="form-control" placeholder="Age"></td>
                                                                <td><input type="text" id="" name="" class="form-control" placeholder="Occupation"></td>
                                                                <td><input type="text" id="" name="" class="form-control" placeholder="Address" required></td>
                                                                <td class="mt-10"><button class="badge badge-danger"><i class="fa fa-trash"></i> Delete</button></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="text-center"><button onclick="addfaqs();" class="badge badge-success"><i class="fa fa-plus"></i> ADD NEW</button></div>
                                            </div>
                                        </div>

                                        <h5 class="card-header"> Declaration</h5>
                                        <div class="row customformrow">
                                            <div class="col-md-3 py-2">
                                                <label for="cerproduced" class="eng_xxxs fg-darkBrown">Applicant's Name</label>
                                                <sup style="color:red">*</sup></label>
                                                <!-- <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> (To be produced
                                                before)</small> -->
                                            </div> <!-- ./col-md-6 -->
                                            <div class="col-md-3 py-2">
                                                <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="applicantNameOndecl" aria-describedby="HELPNAME" placeholder="Applicant's Name" maxlength="50" minlength="0">
                                                <span id="applicantNameOndeclError" style="color:red"></span>

                                            </div> <!-- ./col-md-6 -->
                                            <div class="col-md-3 py-2">
                                                <label for="cerPurpose" class="eng_xxxs fg-darkBrown">Relation</label>
                                                <sup style="color:red">*</sup></label>
                                                <!-- <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> (select
                                                purpose)</small> -->
                                            </div> <!-- ./col-md-6 -->
                                            <div class="col-md-3 py-2">
                                                <select class="form-control customform eng_xxxs fg-darkCrimson" id="appRelation" aria-describedby="HELPNAME2">
                                                    <option value="">Select Relation</option>
                                                    <option value="1">Self</option>
                                                </select>
                                                <span id="appRelationError" style="color:red"></span>
                                            </div> <!-- ./col-md-6 -->
                                        </div>
                                        <div class="row customformrow">
                                            <div class="col-md-3 py-2 justify-content-center d-flex">
                                                <!-- <button class="btn btn-sm btn-flat eng_xxxs bg-lightOrange fg-darkCrimson" id="reset_form"> <i class="fas fa-broom"></i>&nbsp;Reset </button>&nbsp;&nbsp;&nbsp;
                                                <button type="submit" id="save" class="btn btn-sm btn-flat eng_xxxs bg-darkAmber fg-lightGray px-3"> <i class="fas fa-save"></i>&nbsp;Save </button> -->
                                                <label for="otpLabel" id="otpLabel" class="text-danger">Enter OTP that received in your mobile number<sup style="color:red">*</sup></label>
                               
                                            </div> <!-- ./col-md-6 -->
                                            <div class="col-md-3 py-2 justify-content-center d-flex">
                                                <button class="btn btn-sm btn-flat eng_xxxs bg-lightOrange fg-darkCrimson" id="reset_form"> <i class="fas fa-broom"></i>&nbsp;Reset </button>&nbsp;&nbsp;&nbsp;
                                                <button type="submit" id="save" class="btn btn-sm btn-flat eng_xxxs bg-darkAmber fg-lightGray px-3"> <i class="fas fa-save"></i>&nbsp;Save </button>
                                                <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="otp_field" aria-describedby="HELPNAME" placeholder="Enter OTP" maxlength="4" minlength="4" required>
                                                <span id="applicantNameOndeclError" style="color:red"></span>
                               
                                            </div> <!-- ./col-md-6 -->
                                            <div class="col-md-4 py-2">
                                                
                                                <button class="btn btn-primary" id="submit_form">&nbsp;Submit Application </button>&nbsp;&nbsp;&nbsp;
                                                <button class="btn btn-warning" id="clear_form">&nbsp;Reset Application </button>&nbsp;&nbsp;&nbsp;
                                    
                                            </div> <!-- ./col-md-6 -->

                                        </div> <!-- ./row -->

                                    </div>
                                </div> <!-- ./form_section -->


                            </div>
                            <div class="tab-pane fade" id="pills-attachments" role="tabpanel" aria-labelledby="pills-attachments-tab">
                                <div id="form_section_attachment">
                                    <table class="table table-responsive" id="income" class="">
                                        <center><b>
                                                <div id="fileError" class="text-danger"></div>
                                            </b></center>

                                        <thead class="tableheadline">
                                            <tr>
                                                <th>Sl No</th>
                                                <th>Name of Document</th>
                                                <th>Attachment</th>
                                                <th>Remark</th>
                                                <th>Document Reference Number</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>1</p>
                                                </td>
                                                <td>Adhar Card</td>
                                                <td><input type="file" id="adharcard_file"></td>
                                                <td><input type="text"></td>
                                                <td><input type="text"></td>
                                                <td><button id="adharcard_attach" class="btn btn-primary">Save</button>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td>
                                                    <p>2</p>
                                                </td>
                                                <td>Death Certificate</td>
                                                <td><input type="file" id="death_file"></td>
                                                <td><input type="text"></td>
                                                <td><input type="text"></td>
                                                <td><button id="death_file_attach" class="btn btn-primary">Save</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>3</p>
                                                </td>
                                                <td>Election ID Card</td>
                                                <td><input id="eleId" type="file"></td>
                                                <td><input type="text"></td>
                                                <td><input type="text" disabled></td>
                                                <td><button>Save</button></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>4</p>
                                                </td>
                                                <td>Ration Card</td>
                                                <td><input id="ration" type="file"></td>
                                                <td><input type="text" disabled></td>
                                                <td><input type="text"></td>
                                                <td><button>Save</button></td>
                                            </tr>
                                            

                                        </tbody>
                                    </table>

                                    <div class="row customformrow">
                                        <div class="col-md-12 py-2 text-center">
                                            <small id="" class="form-text eng_xxxxs text-muted">
                                                <span class="text-danger">*</span> Attach pdf documents only. A file
                                                size of maximum 100kb per page will be allowed.
                                                <br>While scanning use gray scale with 100 bpi. Maximum pages of same
                                                document may be scanned into a single pdf with maximum of 10 pages.
                                            </small>
                                        </div> <!-- ./col-md-3 -->
                                    </div> <!-- ./row -->

                                </div> <!-- ./form_section -->
                                <div id="form_section_attachment_prv">
                                    <div class="row">
                                        <div class="col-md-12 py-2 block-header text-center">Attached Document List
                                        </div>
                                    </div>
                                    <table class="table table-responsive" id="attach_prv" class="">
                                        <thead class="tableheadline">
                                            <tr>
                                                <th>Sl No</th>
                                                <th>Document Name</th>
                                                <th>Remark</th>
                                                <th>updated by</th>
                                                <th>updated on</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1 </td>
                                                <td>Adhar Card</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><input type="file"></td>
                                                <td><button>Save new</button></td>
                                                <td><button>View</button></td>
                                            </tr>

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-payment" role="tabpanel" aria-labelledby="pills-payment-tab">
                                Test Payment pills</div>
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
@include('serviceview.widow_widower_certificate_script')
@endsection

