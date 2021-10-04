@extends('layouts.basemain')
@section('content')

<div class="container-fluid homepage adminpage">
    <div class="row ">
        <div class="col-12 py-2  ">
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb breadbar justify-content-end">
                    <li class="breadcrumb-item eng_xxxs">Dashboard</li>
                    <li class="breadcrumb-item eng_xxxs">Birth Certificate</li>
                </ol>
            </nav>
        </div> <!-- col12 -->

        <div class="col-md-12 py-1 px-2 ">
            <div class="card">
                <h5 class="card-header">Birth Certificate</h5>
                <div class="card-body">
                    <div class="tab-content">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="pills-application-tab" data-toggle="pill"
                                    href="#pills-application" role="tab" aria-controls="pills-application"
                                    aria-selected="true">Application</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-attachments-details" data-toggle="pill"
                                    href="#pills-details" role="tab" aria-controls="pills-details"
                                    aria-selected="false">Details</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-print-tab" data-toggle="pill" href="#pills-print"
                                    role="tab" aria-controls="pills-print" aria-selected="false">Print</a>
                            </li>
                        </ul>
                        <!-- for Application-start -->
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-application" role="tabpanel"
                                aria-labelledby="pills-application-tab">
                                <div class="jumbotron">
                                    <div id="form_section" id="birth_form">

                                        <div class="row customformrow">
                                            <div class="col-md-6 py-2">
                                                <label for="district" class="eng_xxxs fg-darkBrown">District</label>
                                                <sup style="color:red">*</sup></label>
                                                <!-- <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> (select
                                        type)</small> -->
                                            </div> <!-- ./col-md-6 -->
                                            <div class="col-md-6 py-2">
                                                <select class="form-control customform eng_xxxs fg-darkCrimson"
                                                    id="district" aria-describedby="HELPNAME2" required>
                                                    <option value="0">select District</option>
                                                    <option value="1">District</option>
                                                </select>
                                                <span id="district_msg" style="color:red;font-size:12px;"></span>
                                            </div> <!-- ./col-md-6 -->
                                        </div> <!-- ./row -->
                                        <div class="row customformrow">
                                            <div class="col-md-6 py-2">
                                                <label for="local_body_type" class="eng_xxxs fg-darkBrown">Local body
                                                    Type</label>
                                                <sup style="color:red">*</sup></label>
                                                <!-- <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> (select
                                        type)</small> -->
                                            </div> <!-- ./col-md-6 -->
                                            <div class="col-md-6 py-2">
                                                <select class="form-control customform eng_xxxs fg-darkCrimson"
                                                    id="local_body_type" aria-describedby="HELPNAME2" required>
                                                    <option value="0">select local body</option>
                                                    <option value="1">localbody Type</option>
                                                </select>
                                                <span id="local_body_type_msg" style="color:red;font-size:12px;"></span>
                                            </div> <!-- ./col-md-6 -->
                                        </div> <!-- ./row -->
                                        <div class="row customformrow">
                                            <div class="col-md-6 py-2">
                                                <label for="localbody" class="eng_xxxs fg-darkBrown">Local Body</label>
                                                <sup style="color:red">*</sup></label>
                                                <!-- <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> (select
                                        type)</small> -->
                                            </div> <!-- ./col-md-6 -->
                                            <div class="col-md-6 py-2">
                                                <select class="form-control customform eng_xxxs fg-darkCrimson"
                                                    id="localbody" aria-describedby="HELPNAME2" required>
                                                    <option value="0">select Type</option>
                                                    <option value="1">local Type</option>
                                                </select>
                                                <span id="localbody_msg" style="color:red;font-size:12px;"></span>
                                            </div> <!-- ./col-md-6 -->
                                        </div> <!-- ./row -->

                                        <div class="row customformrow">
                                            <div class="col-md-6 py-2 justify-content-center d-flex">

                                                <button class="btn btn-md btn-flat btn-primary "
                                                    id="birth_details_reset"> <i class="fas fa-broom"></i>&nbsp;Reset
                                                </button> &nbsp;&nbsp;
                                            </div>
                                            <div class="col-md-6 py-2 justify-content-center d-flex">

                                                <button class="btn btn-md btn-flat btn-success" id="birth_details_save">
                                                    <i class="fas fa-save"></i>&nbsp;Search </button>

                                            </div> <!-- ./col-md-6 -->
                                        </div> <!-- ./row -->
                                        <!-- <div class="row customformrow" style="background: #c5d9d7;">
                                            <div class="col-md-12 py-2">
                                                <small id="" class="form-text eng_xxxxs text-muted">
                                                    <span class="text-danger">*</span>Select the Localboady where the
                                                    search
                                                    event(Birth,Death,Marriage) has been registered
                                                </small>
                                            </div> ./col-md-3 -->
                                        <!-- </div> ./row -->
                                    </div> <!-- ./form_section -->
                                </div>


                            </div>
                            <div class="tab-pane fade" id="pills-details" role="tabpanel"
                                aria-labelledby="pills-details-tab">

                                <div class="jumbotron">
                                    <form>
                                        <div id="birth_form">
                                            <div class="row customformrow">
                                                <div class="col-md-6 py-2">
                                                    <label for="cerproduced" class="eng_xxxs fg-darkBrown">Name of
                                                        child</label>
                                                    <sup style="color:red">*</sup></label>
                                                </div> <!-- ./col-md-6 -->
                                                <div class="col-md-6 py-2">
                                                    <input type="text"
                                                        class="form-control customform eng_xxxs fg-darkCrimson"
                                                        id="name_birth" aria-describedby="HELPNAME" placeholder="Name"
                                                        maxlength="99" minlength="0" required>
                                                    <span id="name_msg" style="color:red;font-size:14px;"></span>

                                                </div> <!-- ./col-md-6 -->
                                            </div> <!-- ./row -->


                                            <div class="row customformrow">
                                                <div class="col-md-6 py-2">
                                                    <label for="dob" class="eng_xxxs fg-darkBrown">Date of
                                                        Birth</label>
                                                    <sup style="color:red">*</sup></label>
                                                </div> <!-- ./col-md-6 -->
                                                <div class="col-md-6 py-2">
                                                    <input type="date"
                                                        class="form-control customform eng_xxxs fg-darkCrimson"
                                                        id="datepicker" aria-describedby="HELPNAME1" placeholder="dob"
                                                        maxlength="50" minlength="0" required>
                                                    <span id="dob_msg" style="color:red;font-size:14px;"></span>

                                                </div> <!-- ./col-md-6 -->
                                            </div> <!-- ./row -->
                                            <div class="row customformrow">
                                                <div class="col-md-6 py-2">
                                                    <label for="dob" class="eng_xxxs fg-darkBrown">Gender</label>
                                                    <sup style="color:red">*</sup></label>
                                                </div> <!-- ./col-md-6 -->
                                                <div class="col-md-6 py-2">
                                                    <input type="radio" name="myRadios" value="1" id="m" required />
                                                    &nbsp;Male&nbsp;
                                                    <input type="radio" name="myRadios" value="2"
                                                        id="f" />&nbsp;Female&nbsp;
                                                    <input type="radio" name="myRadios" value="3"
                                                        id="t" />&nbsp;Trans&nbsp;
                                                    <span id="dob_msg" style="color:red;font-size:14px;"></span>

                                                </div> <!-- ./col-md-6 -->
                                            </div> <!-- ./row -->

                                            <div class="row customformrow">
                                                <div class="col-md-6 py-2">
                                                    <label for="name_mother" class="eng_xxxs fg-darkBrown">Name of
                                                        Mother</label>
                                                    <sup style="color:red">*</sup></label>
                                                </div> <!-- ./col-md-6 -->
                                                <div class="col-md-6 py-2">
                                                    <input type="text"
                                                        class="form-control customform eng_xxxs fg-darkCrimson"
                                                        id="name_mother" aria-describedby="HELPNAME4"
                                                        placeholder="name of mother" maxlength="50" minlength="3"
                                                        required>
                                                    <span id="mother_name_msg" style="color:red;font-size:14px;"></span>

                                                </div> <!-- ./col-md-6 -->
                                            </div> <!-- ./row -->

                                            <div class="row customformrow">
                                                <div class="col-md-6 py-2">
                                                    <label for="name_father" class="eng_xxxs fg-darkBrown">Name of
                                                        Father</label>
                                                    <!-- <sup style="color:red">*</sup></label> -->
                                                </div> <!-- ./col-md-6 -->
                                                <div class="col-md-6 py-2">
                                                    <input type="text"
                                                        class="form-control customform eng_xxxs fg-darkCrimson"
                                                        id="name_father" aria-describedby="HELPNAME4"
                                                        placeholder="name of father" maxlength="50" minlength="0"
                                                        required>
                                                    <span id="father_name_msg" style="color:red;font-size:14px;"></span>

                                                </div> <!-- ./col-md-6 -->
                                            </div> <!-- ./row -->

                                            <div class="row customformrow">
                                                <div class="col-md-6 py-2">
                                                    <label for="hospital" class="eng_xxxs fg-darkBrown">Hospital</label>
                                                    <!-- <sup style="color:red">*</sup></label> -->
                                                    <!-- <small id="HELPNAME5" class="form-text eng_xxxxs text-muted"> (select
                                                    purpose)</small> -->
                                                </div> <!-- ./col-md-6 -->
                                                <div class="col-md-6 py-2">
                                                    <select class="form-control customform eng_xxxs fg-darkCrimson"
                                                        id="hospital" aria-describedby="HELPNAME5">
                                                        <option>select</option>
                                                        <option>income_pur</option>
                                                    </select>
                                                </div> <!-- ./col-md-6 -->
                                            </div> <!-- ./row -->

                                            <div class="row customformrow">
                                                <div class="col-md-6 py-2">
                                                    <label for="reg_id" class="eng_xxxs fg-darkBrown">
                                                        Registration Number</label>
                                                    <!-- <sup style="color:red">*</sup></label> -->
                                                    <!-- <small id="HELPNAME6" class="form-text eng_xxxxs text-muted"> (Provided -->
                                                    <!-- eDistrict Application)</small> -->
                                                </div> <!-- ./col-md-6 -->
                                                <div class="col-md-6 py-2">
                                                    <input type="text"
                                                        class="form-control customform eng_xxxs fg-darkCrimson"
                                                        id="reg_id" aria-describedby="HELPNAME6"
                                                        placeholder="Registration" required>
                                                    <div id="reg_id_msg" style="color:red;font-size:14px;"></div>
                                                </div> <!-- ./col-md-6 -->
                                            </div> <!-- ./row -->

                                            <div class="row customformrow">
                                                <div class="col-md-6 py-2">
                                                    <label for="key_id" class="eng_xxxs fg-darkBrown">
                                                        Key Number</label>
                                                    <sup style="color:red">*</sup></label>
                                                    <!-- <small id="HELPNAME7" class="form-text eng_xxxxs text-muted"> (Provided
                                                    eDistrict Application)</small> -->
                                                </div> <!-- ./col-md-6 -->
                                                <div class="col-md-6 py-2">
                                                    <input type="text"
                                                        class="form-control customform eng_xxxs fg-darkCrimson"
                                                        id="key_id" aria-describedby="HELPNAME7"
                                                        placeholder="key number" required>
                                                    <div id="key_id_msg" style="color:red;font-size:12px;"></div>
                                                </div> <!-- ./col-md-6 -->
                                            </div> <!-- ./row -->

                                            <div class="row customformrow">
                                                <div class="col-md-6 py-2">
                                                    <label for="key_id" class="eng_xxxs fg-darkBrown">
                                                        captcha</label>
                                                    <sup style="color:red">*</sup></label>
                                                    <!-- <small id="HELPNAME7" class="form-text eng_xxxxs text-muted"> (Provided
                                                    eDistrict Application)</small> -->
                                                </div> <!-- ./col-md-6 -->
                                                <div class="col-md-6 py-2">
                                                    <input type="text"
                                                        class="form-control customform eng_xxxs fg-darkCrimson"
                                                        id="key_id" aria-describedby="HELPNAME7"
                                                        placeholder="key number" required>
                                                    <div id="key_id_msg" style="color:red;font-size:12px;"></div>
                                                </div> <!-- ./col-md-6 -->
                                            </div> <!-- ./row -->

                                            <div class="col-md-6 py-2 justify-content-center d-flex">
                                                <button type="submit" id="application_completed"
                                                    class="btn btn-success">Process</button>

                                            </div> <!-- ./col-md-6 -->
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-print" role="tabpanel"
                                aria-labelledby="pills-print-tab">
                                <div class="jumbotron" style="text-align: center;">
                                    <div>
                                        <h4 style="text-align: center;">Details of Birth Certificate</h4>
                                    </div>
                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2">
                                            <label for="key_id" class="eng_xxxs fg-darkBrown">
                                                Date of Birth :</label>

                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">

                                        </div> <!-- ./col-md-6 -->
                                    </div> <!-- ./row -->
                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2">
                                            <label for="key_id" class="eng_xxxs fg-darkBrown">
                                                Name of Child :</label>

                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">

                                        </div> <!-- ./col-md-6 -->
                                    </div> <!-- ./row -->
                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2">
                                            <label for="key_id" class="eng_xxxs fg-darkBrown">
                                                Name of Father :</label>

                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">

                                        </div> <!-- ./col-md-6 -->
                                    </div> <!-- ./row -->
                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2">
                                            <label for="key_id" class="eng_xxxs fg-darkBrown">
                                                Name of Mother :</label>

                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">

                                        </div> <!-- ./col-md-6 -->
                                    </div> <!-- ./row -->
                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2">
                                            <label for="key_id" class="eng_xxxs fg-darkBrown">
                                                Sex :</label>

                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">

                                        </div> <!-- ./col-md-6 -->
                                    </div> <!-- ./row -->
                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2">
                                            <label for="key_id" class="eng_xxxs fg-darkBrown">
                                                Place of Birth :</label>

                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">

                                        </div> <!-- ./col-md-6 -->
                                    </div> <!-- ./row -->
                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2">
                                            <label for="key_id" class="eng_xxxs fg-darkBrown">
                                                Permanent Address :</label>

                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">

                                        </div> <!-- ./col-md-6 -->
                                    </div> <!-- ./row -->
                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2">
                                            <label for="key_id" class="eng_xxxs fg-darkBrown">
                                                Present Address :</label>

                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">

                                        </div> <!-- ./col-md-6 -->
                                    </div> <!-- ./row -->
                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2">
                                            <label for="key_id" class="eng_xxxs fg-darkBrown">
                                                Registration Number :</label>

                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">

                                        </div> <!-- ./col-md-6 -->
                                    </div> <!-- ./row -->
                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2">
                                            <label for="key_id" class="eng_xxxs fg-darkBrown">
                                                Registration Date :</label>

                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">

                                        </div> <!-- ./col-md-6 -->
                                    </div> <!-- ./row -->
                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2">
                                            <label for="key_id" class="eng_xxxs fg-darkBrown">
                                                Key Number:</label>

                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">

                                        </div> <!-- ./col-md-6 -->
                                    </div> <!-- ./row -->
                                    <button class="btn btn-md btn-flat btn-success" id="birth_details_save">
                                        <i class="fas fa-save"></i>&nbsp;Print </button>
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
@include('serviceview.birth_script')
@endsection