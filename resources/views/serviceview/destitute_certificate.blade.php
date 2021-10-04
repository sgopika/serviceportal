@extends('layouts.basemain')
@section('content')

<div class="container-fluid homepage adminpage">
    <div class="row ">
        <div class="col-12 py-2  ">
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb breadbar justify-content-end">
                    <li class="breadcrumb-item eng_xxxs">Dashboard</li>
                    <li class="breadcrumb-item eng_xxxs">Destitute Certificate</li>
                </ol>
            </nav>
        </div> <!-- col12 -->

        <div class="col-md-12 py-1 px-2 ">
            <div class="card">
                <h5 class="card-header"> Destitute Certificate</h5>
                <div class="card-body">
                    <div class="tab-content">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="pills-application-tab" data-toggle="pill"
                                    href="#pills-application" role="tab" aria-controls="pills-application"
                                    aria-selected="true">Application</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-attachments-tab" data-toggle="pill"
                                    href="#pills-attachments" role="tab" aria-controls="pills-attachments"
                                    aria-selected="false">Attachments</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-payment-tab" data-toggle="pill" href="#pills-payment"
                                    role="tab" aria-controls="pills-payment" aria-selected="false">Payment</a>
                            </li>
                        </ul>
                        <!-- for Application-start -->
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-application" role="tabpanel"
                                aria-labelledby="pills-application-tab">
                                <div id="form_section">

                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2">
                                            <label for="edistricID_lab" class="eng_xxxs fg-darkBrown">eDistrict
                                                Registration
                                                Number</label>
                                            <sup style="color:red">*</sup></label>
                                            <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> (Provided
                                                eDistrict Application)</small>
                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">
                                            <input type="text" class="form-control customform eng_xxxs fg-darkCrimson"
                                                id="edistricID" aria-describedby="HELPNAME"
                                                placeholder="eDistrict Registration" required>
                                            <div id="edistricIDerror_msg" style="color:red;font-size:15px;"></div>
                                        </div> <!-- ./col-md-6 -->
                                    </div> <!-- ./row -->

                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2">
                                            <label for="cerType" class="eng_xxxs fg-darkBrown">Certificate
                                                Type</label>
                                            <sup style="color:red">*</sup></label>
                                            <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> (select
                                                type)</small>
                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">
                                            <select class="form-control customform eng_xxxs fg-darkCrimson" id="cerType"
                                                aria-describedby="HELPNAME2" require>
                                                <option value="0">select Type</option>
                                                <option value="1">certificate Type</option>
                                            </select>
                                            <span id="cerType_msg" style="color:red;font-size:15px;"></span>
                                        </div> <!-- ./col-md-6 -->
                                    </div> <!-- ./row -->

                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2">
                                            <label for="cerPurpose" class="eng_xxxs fg-darkBrown">Certificate
                                                Purpose</label>
                                            <sup style="color:red">*</sup></label>
                                            <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> (select
                                                purpose)</small>
                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">
                                            <select class="form-control customform eng_xxxs fg-darkCrimson"
                                                id="cerPurpose" aria-describedby="HELPNAME4">
                                                <option value="0">select Type</option>
                                                <option value="1">income_pur</option>
                                            </select>
                                            <span id="cerPurpose_msg" style="color:red;font-size:15px;"></span>
                                        </div> <!-- ./col-md-6 -->
                                    </div> <!-- ./row -->

                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2">
                                            <label for="cerproduced" class="eng_xxxs fg-darkBrown">To be produced
                                                before</label>
                                            <sup style="color:red">*</sup></label>
                                            <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> (To be produced
                                                before)</small>
                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">
                                            <input type="text" class="form-control customform eng_xxxs fg-darkCrimson"
                                                id="pro_before" aria-describedby="HELPNAME"
                                                placeholder="To be produced before" maxlength="50" minlength="0">
                                            <span id="pro_before_msg" style="color:red"></span>

                                        </div> <!-- ./col-md-6 -->
                                    </div> <!-- ./row -->

                                    <div class="row customformrow">
                                        <div class="col-md-12 py-2" style="float:right;text-align:center">
                                            <button class="btn btn-md btn-flat btn-danger" id="desti_details_reset">
                                                <i class="fa fa-refresh"></i>&nbsp;Reset
                                            </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <button class="btn btn-md btn-flat btn-success" id="show_details">
                                                <i class="fa fa-eye"></i>&nbsp;Show </button>

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
                                    <div class="details" id="details_dest" style="display: block;">
                                        <div class="row customformrow">
                                            <div class="col-md-12 py-2">
                                                <h5 class="card-header"> Details</h5>
                                                <div class="jumbotron">
                                                </div>
                                            </div> <!-- ./col-md-6 -->
                                        </div> <!-- ./row -->
                                    </div>

                                    <div class="row customformrow" id="declaration">
                                        <div class="col-md-12 py-2">
                                            <h5 class="card-header"> Declaration</h5>
                                            <!-- <div class="jumbotron">
                                                fghfjhgjm
                                            </div> -->
                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">
                                            <label for="appl_name" class="eng_xxxs fg-darkBrown">Applicant
                                                Name</label>
                                            <sup style="color:red">*</sup></label>

                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">
                                            <input type="text" class="form-control customform eng_xxxs fg-darkCrimson"
                                                id="appl_name" aria-describedby="HELPNAME" placeholder="Applicant Name"
                                                maxlength="50" minlength="0">
                                            <span id="appl_name_msg" style="color:red"></span>

                                        </div> <!-- ./col-md-6 -->

                                        <div class="col-md-6 py-2">
                                            <label for="relation" class="eng_xxxs fg-darkBrown">Relationship</label>
                                            <sup style="color:red">*</sup></label>
                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">
                                            <select class="form-control customform eng_xxxs fg-darkCrimson"
                                                id="relation" aria-describedby="HELPNAME2" required>
                                                <option value="0">select Relationship</option>
                                                <option value="1">father</option>
                                            </select>
                                            <span id="relation_msg" style="color:red"></span>

                                        </div> <!-- ./col-md-6 -->



                                        <div class="col-md-12 py-2" style="float:right;text-align:center">

                                            <button class="btn btn-md btn-flat btn-success" id="desti_details_save">
                                                <i class="fas fa-save"></i>&nbsp;Save </button>

                                        </div> <!-- ./col-md-6 -->

                                    </div>
                                </div> <!-- ./form_section -->


                            </div>
                            <div class="tab-pane fade" id="pills-attachments" role="tabpanel"
                                aria-labelledby="pills-attachments-tab">
                                <div id="form_section_attachment  table-responsive-md">
                                    <table class="table" id="income" class="">
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
                                                    1
                                                </td>
                                                <td>Ration Card</td>
                                                <td><input type="file" id="rationcard_file" accept=".pdf"><span
                                                        id="ration_msg"></span></td>
                                                <td><input type="text"></td>
                                                <td><input type="text"></td>
                                                <td><button id="rationcard_attach" class="btn btn-primary">Save</button>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>
                                                    2
                                                </td>
                                                <td>Election ID Card</td>
                                                <td><input type="file" id="election_file" accept=".pdf"><span
                                                        id="election_msg"></span></td>
                                                <td><input type="text"></td>
                                                <td><input type="text"></td>
                                                <td><button id="election_attach" class="btn btn-primary">Save</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    3
                                                </td>
                                                <td>Aadhar Card </td>
                                                <td><input type="file" id="aadhar_file" accept=".pdf"><span
                                                        id="aadhar_msg"></span></td>
                                                <td><input type="text"></td>
                                                <td><input type="text"></td>
                                                <td><button id="aadhar_attach" class="btn btn-primary">Save</button>
                                                </td>
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

                            </div>
                            <div class="tab-pane fade" id="pills-payment" role="tabpanel"
                                aria-labelledby="pills-payment-tab">
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
@include('serviceview.destitute_certificates_script')
@endsection