@extends('layouts.basemain')
@section('content')
<div class="container-fluid homepage adminpage">
    <div class="row ">
        <div class="col-12 py-2  ">
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb breadbar justify-content-end">
                    <li class="breadcrumb-item eng_xxxs"><a href="{{ route('servicedash') }}">Dashboard</a></li>
                    <li class="breadcrumb-item eng_xxxs">List</li>
                </ol>
            </nav>
        </div> <!-- col12 -->
        <div class="col-12 py-1 px-2 ">
            <p class="eng_xxs px-3 fg-darkBrown"> Family Membership Certificate </p>
        </div> <!-- ./col12 -->
        <div class="col-12 md-whiteframe-2dp ">
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
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-application" role="tabpanel" aria-labelledby="pills-application-tab">
                        <div id="form_section">
                            <div class="form-heading1 text-center">
                                PORTAL APPLICATION FORM.
                            </div>
                            <div class="row customformrow">
                                <div class="col-md-3 py-2">
                                    <label for="register_no" class="eng_xxxs fg-darkBrown">eDistrict Register No <span class="text-danger">*</span>
                                    </label>
                                    <!-- <small id="HELPNAME1" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
                                </div> <!-- ./col-md-3 -->
                                <div class="col-md-3 py-2">
                                    <select class="form-control customform eng_xxxs fg-darkCrimson" id="register_no" aria-describedby="HELPNAME1" required>
                                        <option value="">--Select--</option>
                                    </select>
                                </div> <!-- ./col-md-3 -->
                                <div class="col-md-3 py-2">
                                    <label for="certificate_type" class="eng_xxxs fg-darkBrown">Certificate type <span class="text-danger">*</span>
                                    </label>
                                    <!-- <small id="HELPNAME2" class="form-text eng_xxxxs text-muted"> additional information.</small> -->

                                </div> <!-- ./col-md-3 -->
                                <div class="col-md-3 py-2">
                                    <select class="form-control customform eng_xxxs fg-darkCrimson" id="certificate_type" aria-describedby="HELPNAME2" required>
                                        <option value="">--Select--</option>
                                    </select>
                                    <label id="certificate-type-error" style="color:red;"></label>
                                </div> <!-- ./col-md-3 -->
                                <div class="col-md-3 py-2">
                                    <label for="certificate_purpose" class="eng_xxxs fg-darkBrown"> Certificate Purpose
                                        <span class="text-danger">*</span>
                                    </label>
                                    <!-- <small id="HELPNAME3" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
                                </div> <!-- ./col-md-3 -->
                                <div class="col-md-3 py-2">
                                    <select class="form-control customform eng_xxxs fg-darkCrimson" id="certificate_purpose" aria-describedby="HELPNAME3" required>
                                        <option value="">--Select--</option>
                                    </select>
                                    <label id="certificate-purpose-error" style="color:red;"></label>
                                </div> <!-- ./col-md-3 -->
                                <div class="col-md-3 py-2">
                                    <label for="to_be_produced_before" class="eng_xxxs fg-darkBrown">To be produced
                                        before
                                        <span class="text-danger">*</span>
                                    </label>
                                    <!-- <small id="HELPNAME4" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
                                </div> <!-- ./col-md-3 -->
                                <div class="col-md-3 py-2">
                                    <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="to_be_produced_before" aria-describedby="HELPNAME4" placeholder="">
                                    <label id="to_be_produced_before_error" style="color:red;"></label>
                                </div> <!-- ./col-md-3 -->
                            </div> <!-- ./row -->

                            <div class="form-heading2 text-center">
                                FAMILY MEMBERSHIP CERTIFICATE
                            </div>

                            <div class="row customformrow">
                                <div class="col-md-12 py-2 block-header">DETAILS OF THE PERSON WITH WHOM THE RELATIONSHIP IS TO BE PROVED</div>
                                <div class="col-md-2">
                                    <label for="name" class="eng_xxxs fg-darkBrown"> Name
                                        <span class="text-danger">*</span>
                                    </label>
                                </div>
                                <div class="col-md-4 py-2">
                                    <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="name" aria-describedby="HELPNAME4" placeholder="" maxlength="50">
                                    <label id="name-error" style="color:red;"></label>
                                </div>
                                <div class="col-md-6 py-2"></div>
                                <div class="col-md-2 py-2">
                                    <label for="address" class="eng_xxxs fg-darkBrown"> Address
                                        <span class="text-danger">*</span>
                                    </label>
                                </div>
                                <div class="col-md-4 py-2">
                                    <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="address" aria-describedby="HELPNAME4" placeholder="" maxlength="200">
                                    <label id="address-error" style="color:red;"></label>
                                </div>
                            </div>
                            <div class="row customformrow">
                                <div class="col-md-12 py-2 block-header text-center">DETAILS OF DEPENDENTS OF ABOVE PERSON</div>
                                <div class="col-md-12 py-2">
                                    <div class="table-responsive-md">
                                        <table id="faqs" class="table ">
                                            <thead>
                                                <tr>
                                                    <!-- <th>Sl No.</th> -->
                                                    <th>Name of person <span class="text-danger">*</span></th>
                                                    <th>Gender <span class="text-danger">*</span></th>
                                                    <th>Relationship <span class="text-danger">*</span></th>
                                                    <th>Age <span class="text-danger">*</span></th>
                                                    <th>Occupation</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="main-div">
                                                    <!-- <td>1</td> -->
                                                    <td><input type="text" name="depnd_name[]" class="form-control customform eng_xxxs fg-darkCrimson" required maxlength="50"></td>
                                                    <td><select class="form-control customform eng_xxxs fg-darkCrimson" name="depnd_gender[]">
                                                            <option value=""> --Select--</option>
                                                        </select>
                                                    </td>
                                                    <td><select class="form-control customform eng_xxxs fg-darkCrimson" name="depnd_relation[]">
                                                            <option value=""> --Select--</option>
                                                        </select>
                                                    </td>
                                                    <td> <input type="number" name="depnd_age[]" class="form-control customform eng_xxxs fg-darkCrimson" min="0" max="150" required maxlength="3" minlength="1"></td>
                                                    <td> <input type="text" name="depnd_occupation[]" class="form-control customform eng_xxxs fg-darkCrimson"></td>
                                                    <td>
                                                        <button onclick="addfaqs();" class="badge badge-success"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row customformrow">
                                <div class="col-md-12 py-2 text-center">DECLARATION</div>
                                <div class="col-md-2">
                                    <label for="name" class="eng_xxxs fg-darkBrown"> Applicant's Name
                                        <span class="text-danger">*</span>
                                    </label>
                                </div>
                                <div class="col-md-4 py-2">
                                    <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="applicant_name" aria-describedby="HELPNAME4" placeholder="">
                                    <label id="applicant_name-error" style="color:red;"></label>
                                </div>
                                <div class="col-md-2 py-2">
                                    <label for="address" class="eng_xxxs fg-darkBrown"> Relation
                                        <span class="text-danger">*</span>
                                    </label>
                                </div>
                                <div class="col-md-4 py-2">
                                    <select class="form-control customform eng_xxxs fg-darkCrimson" id="applicant_relation">
                                        <option value=""> --Select--</option>
                                    </select>
                                    <label id="applicant_relation-error" style="color:red;"></label>
                                </div>
                            </div>
                            <div class="row customformrow">
                                <div class="col-md-12 py-2 justify-content-center d-flex">
                                    <button class="btn btn-sm btn-flat eng_xxxs bg-lightOrange fg-darkCrimson"> <i class="fas fa-broom"></i>&nbsp;Reset </button> &nbsp;&nbsp;
                                    <button class="btn btn-sm btn-flat eng_xxxs bg-darkAmber fg-lightGray px-3"> <i class="fas fa-save"></i>&nbsp;Save </button>
                                </div>

                            </div> <!-- ./row -->

                        </div> <!-- ./form_section -->
                    </div>
                    <div class="tab-pane fade" id="pills-attachments" role="tabpanel" aria-labelledby="pills-attachments-tab">
                        <div id="form_section">
                            <div class="attachment-div" style="border-style: ridge;">
                                <div class="row">
                                    <div class="col-md-12 text-center block-header">Following document may be attached. (Ration Card/SSLC Book 2001 onwards / Driving Licence need not be uploaded)</div>
                                </div>
                                <div class="table-responsive-md">
                                    <table id="attachment" class="table ">
                                        <thead>
                                            <tr class="block-header">
                                                <th>Sl No.</th>
                                                <th>Document Name </th>
                                                <th>Upload File <span class="text-danger">*</span></th>
                                                <th>Remarks</th>
                                                <th>Document Reference Number </th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Ration Card</td>
                                                <td>
                                                    <input type="file" name="ration_card" id="file_ration" class="form-control customform eng_xxxs fg-darkCrimson">
                                                    <span id="span_file_ration"></span>
                                                </td>
                                                <td> <input type="text" class="form-control customform eng_xxxs fg-darkCrimson"></td>
                                                <td> <input type="text" class="form-control customform eng_xxxs fg-darkCrimson"></td>
                                                <td>
                                                    <button class="btn btn-primary">save</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Election ID Card</td>
                                                <td>
                                                    <input type="file" name="election_id_card" id="file_eid" class="form-control customform eng_xxxs fg-darkCrimson">
                                                    <span id="span_file_eid"></span>
                                                </td>
                                                <td> <input type="text" class="form-control customform eng_xxxs fg-darkCrimson"></td>
                                                <td> <input type="text" class="form-control customform eng_xxxs fg-darkCrimson"></td>
                                                <td>
                                                    <button class="btn btn-primary">save</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row customformrow">
                                <div class="col-md-12 py-2 text-center">
                                    <small id="" class="form-text eng_xxxxs text-muted">
                                        <span class="text-danger">*</span> Attach pdf documents only. A file size of maximum 100kb per page will be allowed.
                                        <br>While scanning use gray scale with 100 bpi. Maximum pages of same document may be scanned into a single pdf with maximum of 10 pages.
                                    </small>
                                </div> <!-- ./col-md-3 -->
                            </div> <!-- ./row -->
                        </div> <!-- ./form_section -->
                    </div>
                    <div class="tab-pane fade" id="pills-payment" role="tabpanel" aria-labelledby="pills-payment-tab">
                        ...</div>
                </div>
            </div>
        </div> <!-- ./col12 -->
    </div> <!-- ./row -->
</div> <!-- ./container -->
@endsection

@section('customscripts')
@include('serviceview.family_membership_certificates_script')
@endsection

