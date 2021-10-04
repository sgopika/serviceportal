<!-- Krishnapriya -->
@extends('layouts.basemain')
@section('content')
<div class="container-fluid homepage adminpage">
    <div class="row ">
        <div class="col-12 py-2  ">
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb breadbar justify-content-end">
                    <li class="breadcrumb-item eng_xxxs">Dashboard</li>
                    <li class="breadcrumb-item eng_xxxs">Possession And Non Attachment Certificate</li>
                </ol>
            </nav>
        </div> <!-- col12 -->

        <div class="col-md-12 py-1 px-2 ">
            <div class="card">
                <h5 class="card-header"> Possession And Non Attachment Certificate</h5>
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
                                <!-- <form> -->
                                <div id="form_section">

                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2">
                                            <label for="edistricID_lab" class="eng_xxxs fg-darkBrown">eDistrict
                                                Registration
                                                Number</label>
                                            <sup style="color:red">*</sup></label>
                                            <small id="HELPNAME_11" class="form-text eng_xxxxs text-muted">
                                                (Provided
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
                                            <small id="HELPNAME_12" class="form-text eng_xxxxs text-muted"> (select
                                                type)</small>
                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">
                                            <select class="form-control customform eng_xxxs fg-darkCrimson" id="cerType"
                                                aria-describedby="HELPNAME2">
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
                                            <small id="HELPNAME_13" class="form-text eng_xxxxs text-muted"> (select
                                                purpose)</small>
                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">
                                            <select class="form-control customform eng_xxxs fg-darkCrimson"
                                                id="cerPurpose" aria-describedby="HELPNAME2">
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
                                            <small id="HELPNAME_14" class="form-text eng_xxxxs text-muted"> (To be
                                                produced
                                                before)</small>
                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">
                                            <input type="text" class="form-control customform eng_xxxs fg-darkCrimson"
                                                id="pro_before" aria-describedby="HELPNAME"
                                                placeholder="To be produced before" maxlength="50" minlength="0"
                                                required>
                                            <span id="pro_before_msg" style="color:red"></span>

                                        </div> <!-- ./col-md-6 -->
                                    </div> <!-- ./row -->
                                    <div class="row customformrow" style="background: #c5d9d7;">
                                        <div class="col-md-12 py-2">
                                            <small id="" class="form-text eng_xxxxs text-muted">
                                                <span class="text-danger">*</span> Mandatory fields
                                                <span style="color: #f2db0a;">*</span> Either one is mandatory
                                            </small>
                                        </div> <!-- ./col-md-3 -->
                                    </div> <!-- ./row -->
                                </div> <!-- ./form_section -->
                                <div class="row customformrow">
                                    <div class="col-md-6 py-2" style="float:right;text-align:right">
                                        <button class="btn btn-md btn-flat btn-danger" id="possession_details_reset">
                                            <i class="fas fa-save"></i>&nbsp;Reset </button>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <!-- <button type="submit" class="btn btn-md btn-flat btn-success"
                                            id="possession_details_save">
                                            <i class="fas fa-save"></i>&nbsp;Save </button>&nbsp;&nbsp;&nbsp;&nbsp; -->
                                        <button type="submit" class="btn btn-md btn-flat btn-success"
                                            id="possession_details_show">
                                            <i class="fas fa-save"></i>&nbsp;Show </button>
                                    </div> <!-- ./col-md-6 -->
                                </div>

                                <!-- </form> -->
                                <div class="form_session2 " style="display: block;" id="details_possession_non">
                                    <div style=" background: #c5d9d7;"></br>
                                        <center><b>Details</b>
                                        </center>
                                        test tsest test
                                    </div>

                                </div>

                                </br>

                                <div class="form_session3" style="border-style: ridge;display: block;"
                                    id="possession_table">
                                    <div class="row">
                                        <div class="col-md-12 py-2 block-header text-center">Family land information
                                        </div>
                                    </div>

                                    <div class="table-responsive-md" id="ownland_table">
                                        <table class="table table-responsive" id="possession_table_details" class="">
                                            <thead class="tableheadline">

                                                <th>Sl No</th>
                                                <th>District</th>
                                                <th>Taluk</th>
                                                <th>Village</th>
                                                <th>old survey/sub Div no</th>
                                                <th>Re survey block</th>
                                                <th>Thandapper No</th>
                                                <th>Land Type</th>
                                                <th> Extent(in Hectare)</th>
                                                <th>Market value of property</th>
                                                <th>Liability Amount</th>
                                            </thead>
                                            <tbody>

                                                <tr>

                                                    <td>1</td>
                                                    <td> <select class="form-control customform" id=""
                                                            aria-describedby="HELPNAME2">
                                                            <option>Default select</option>
                                                        </select></td>
                                                    <td> <select class="form-control customform" id=""
                                                            aria-describedby="HELPNAME2">
                                                            <option>Default select</option>
                                                        </select></td>
                                                    <td> <select class="form-control customform" id=""
                                                            aria-describedby="HELPNAME2">
                                                            <option>Default select</option>
                                                        </select></td>
                                                    <td><input type="text" class="form-control" id="salarypen" min="0"
                                                            placeholder="0"></td>
                                                    <td><input type="text" class="form-control" id="income_bus1" min="0"
                                                            placeholder="0"></td>
                                                    <td><input type="text" class="form-control" id="labourincome1"
                                                            min="0" placeholder="0"></td>
                                                    <td><input type="text" class="form-control" id="nriincome1" min="0"
                                                            placeholder="0"></td>
                                                    <td><input type="text" class="form-control" id="rentalincome1"
                                                            min="0" placeholder="0">
                                                        <i class="fas fa-calculator right" style="float:right;"></i>
                                                    </td>
                                                    <td><input type="text" class="form-control" id="otherincome1"
                                                            min="0" placeholder="0"></td>
                                                    <td><input type="text" class="form-control" id="total1" min="0"
                                                            placeholder="0" readonly></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                        <div class="row customformrow">
                                            <div class="col-md-6 py-2">
                                                <button onclick="addfaqs_property();" class="btn btn-success"><i
                                                        class="fa fa-plus"></i>
                                                    ADD NEW</button>
                                            </div> <!-- ./col-md-6 -->
                                            <div class="col-md-6 py-2" style="float:right;text-align:right">
                                                <button class="btn btn-md btn-flat btn-primary" id="family_save">
                                                    <i class="fas fa-save"></i>&nbsp;Verify </button>
                                            </div> <!-- ./col-md-6 -->
                                        </div> <!-- ./row -->

                                    </div>
                                </div>

                                <div class="form_session4" style="border-style: ridge;display: block;" id="declaration">
                                    <div class="row">
                                        <div class="col-md-12 py-2 block-header text-center"><b>Declaration</b>
                                        </div>
                                    </div>
                                    <div class="row customformrow">
                                        <div class="col-md-3">
                                            <label for="name_app" class="eng_xxxs fg-darkBrown">Name of
                                                Applicant</label>
                                            <sup style="color:red">*</sup></label>
                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-3">
                                            <input type="text" class="form-control customform eng_xxxs fg-darkCrimson"
                                                id="name_app" aria-describedby="HELPNAME"
                                                placeholder="eDistrict Registration" required>
                                            <div id="name_app_msg" style="color:red;font-size:12px;"></div>
                                        </div> <!-- ./col-md-6 -->

                                        <div class="col-md-3 py-2">
                                            <label for="relation_dec" class="eng_xxxs fg-darkBrown">Relationship</label>
                                            <sup style="color:red">*</sup></label>
                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-3 py-2">
                                            <input type="text" class="form-control customform eng_xxxs fg-darkCrimson"
                                                id="relation_dec" aria-describedby="HELPNAME" placeholder="Relation"
                                                required>
                                            <div id="relation_dec_msg" style="color:red;font-size:12px;"></div>
                                        </div> <!-- ./col-md-6 -->
                                    </div> <!-- ./row -->
                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2" style="float:right;text-align:right">
                                            <button class="btn btn-md btn-flat btn-danger" id="income_details_reset">
                                                <i class="fas fa-save"></i>&nbsp;Reset </button>
                                            <button type="submit" class="btn btn-md btn-flat btn-success"
                                                id="income_details_save">
                                                <i class="fas fa-save"></i>&nbsp;Save </button>

                                        </div> <!-- ./col-md-6 -->
                                    </div>
                                </div>


                            </div>
                            <div class="tab-pane fade" id="pills-attachments" role="tabpanel"
                                aria-labelledby="pills-attachments-tab">
                                <div id="form_section_attachment" class="table-responsive">
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
                                                <td>1</td>
                                                <td>Election ID Card</td>
                                                <td><input type="file" id="rationcard_file" accept=".pdf"><span
                                                        id="election_msg"></span></td>
                                                <td><input type="text"></td>
                                                <td><input type="text"></td>
                                                <td><button id="election_attach" class="btn btn-primary">Save</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>2</p>
                                                </td>
                                                <td>Encumbrance certificate</td>
                                                <td><input type="file" id="encum_file" accept=".pdf"><span
                                                        id="encum_msg"></span></td>
                                                <td><input type="text"></td>
                                                <td><input type="text"></td>
                                                <td><button id="encum_attach" class="btn btn-primary">Save</button></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>3</p>
                                                </td>
                                                <td>Land tax receipt</td>
                                                <td><input type="file" id="land_file" accept=".pdf"><span
                                                        id="land_msg"></span></td>
                                                <td><input type="text"></td>
                                                <td><input type="text"></td>
                                                <td><button id="land_attach" class="btn btn-primary">Save</button></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>4</p>
                                                </td>
                                                <td>Aadhar card</td>
                                                <td><input type="file" id="aadhar_file" accept=".pdf"><span
                                                        id="aadhar_msg"></span></td>
                                                <td><input type="text"></td>
                                                <td><input type="text"></td>
                                                <td><button id="aadhar_attach" class="btn btn-primary">Save</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>5</p>
                                                </td>
                                                <td>Pattayam</td>
                                                <td><input type="file" id="pattayam" accept=".pdf"><span
                                                        id="pattayam_msg"></span></td>
                                                <td><input type="text"></td>
                                                <td><input type="text"></td>
                                                <td><button id="pattayam_attach" class="btn btn-primary">Save</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>6</p>
                                                </td>
                                                <td>Declaration by the Applicant</td>
                                                <td><input type="file" id="declaration_file" accept=".pdf"><span
                                                        id="declaration_msg"></span></td>
                                                <td><input type="text"></td>
                                                <td><input type="text"></td>
                                                <td><button id="declaration_attach"
                                                        class="btn btn-primary">Save</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="row customformrow">
                                        <div class="col-md-12 py-2 text-center">
                                            <small id="" class="form-text eng_xxxxs text-muted">
                                                <span class="text-danger">*</span> Attach pdf documents only. A file
                                                size of maximum 100kb per page will be allowed.
                                                <br>While scanning use gray scale with 100 bpi. Maximum pages of
                                                same
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
@endsection

@section('customscripts')
@include('serviceview.possession_non_script')
@endsection
