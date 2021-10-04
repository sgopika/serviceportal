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
        <div class="col-12 py-1 px-2 ">
            <p class="eng_xxs px-3 fg-darkBrown"> Non Creamy-Layer Certificate </p>
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
                                NON CREAMY LAYER CERTIFICATE
                            </div>

                            <div class="row customformrow">
                                <div class="col-md-2">
                                    <label for="religion" class="eng_xxxs fg-darkBrown">Religion
                                        <span class="text-danger">*</span>
                                    </label>
                                </div>
                                <div class="col-md-4 py-2">
                                    <select class="form-control customform eng_xxxs fg-darkCrimson" id="religion" aria-describedby="HELPNAME1" required>
                                        <option value="">--Select--</option>
                                    </select>
                                    <label id="religion_error" style="color:red;"></label>
                                </div>
                                <div class="col-md-6 py-2"></div>
                                <div class="col-md-2 py-2">
                                    <label for="caste" class="eng_xxxs fg-darkBrown"> Caste
                                        <span class="text-danger">*</span>
                                    </label>
                                </div>
                                <div class="col-md-4 py-2">
                                    <select class="form-control customform eng_xxxs fg-darkCrimson" id="caste" aria-describedby="HELPNAME1" required>
                                        <option value="">--Select--</option>
                                    </select>
                                    <label id="caste_error" style="color:red;"></label>
                                </div>
                            </div>
                            <div class="row customformrow">
                                <div class="col-md-12 py-2">
                                    <div class="table-responsive-md">
                                        <table id="faqs" class="table ">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Place of Birth</th>
                                                    <th>State</th>
                                                    <th>District</th>
                                                    <th>Taluk</th>
                                                    <th>Village </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Applicant <span class="text-danger">*</span></td>
                                                    <td>
                                                        <input type="text" name="birth_place_1" class="form-control customform eng_xxxs fg-darkCrimson" required>
                                                        <label id="birth_place_1_error" style="color:red;"></label>
                                                    </td>
                                                    <td><select name="state_1" class="form-control customform eng_xxxs fg-darkCrimson" required>
                                                            <option>Select one</option>
                                                        </select>
                                                        <label id="state_1_error" style="color:red;"></label>
                                                    </td>
                                                    <td><select name="district_1" class="form-control customform eng_xxxs fg-darkCrimson" required>
                                                            <option>Select one</option>
                                                        </select>
                                                        <label id="district_1_error" style="color:red;"></label>
                                                    </td>
                                                    <td><select name="taluk_1" class="form-control customform eng_xxxs fg-darkCrimson" required>
                                                            <option>Select one</option>
                                                        </select>
                                                        <label id="taluk_1_error" style="color:red;"></label>
                                                    </td>
                                                    <td><select name="village_1" class="form-control customform eng_xxxs fg-darkCrimson" required>
                                                            <option>Select one</option>
                                                        </select>
                                                        <label id="village_1_error" style="color:red;"></label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Father</td>
                                                    <td><input type="text" name="birth_place_2" class="form-control customform eng_xxxs fg-darkCrimson"></td>
                                                    <td><select name="state_2" class="form-control customform eng_xxxs fg-darkCrimson">
                                                            <option>Select one</option>
                                                        </select>
                                                    </td>
                                                    <td><select name="district_2" class="form-control customform eng_xxxs fg-darkCrimson">
                                                            <option>Select one</option>
                                                        </select>
                                                    </td>
                                                    <td><select name="taluk_2" class="form-control customform eng_xxxs fg-darkCrimson">
                                                            <option>Select one</option>
                                                        </select>
                                                    </td>
                                                    <td><select name="village_2" class="form-control customform eng_xxxs fg-darkCrimson">
                                                            <option>Select one</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Mother</td>
                                                    <td><input type="text" name="birth_place_3" class="form-control customform eng_xxxs fg-darkCrimson"></td>
                                                    <td><select name="state_3" class="form-control customform eng_xxxs fg-darkCrimson">
                                                            <option>Select one</option>
                                                        </select>
                                                    </td>
                                                    <td><select name="district_3" class="form-control customform eng_xxxs fg-darkCrimson">
                                                            <option>Select one</option>
                                                        </select>
                                                    </td>
                                                    <td><select name="taluk_3" class="form-control customform eng_xxxs fg-darkCrimson">
                                                            <option>Select one</option>
                                                        </select>
                                                    </td>
                                                    <td><select name="village_3" class="form-control customform eng_xxxs fg-darkCrimson">
                                                            <option>Select one</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-12 py-2">
                                    <div class="row" style="border-style: ridge ;">
                                        <div class="col-md-4 py-2">
                                            Occupation Category of Parents
                                        </div>
                                        <div class="col-md-4 py-2">
                                            Father's Details
                                        </div>
                                        <div class="col-md-4 py-2">
                                            Mother's Details
                                        </div>
                                        <div class="col-md-4 py-2">
                                            <input type="checkbox" id="constitutional_post" name="constitutional_post" value=""> 1.Constitutional Post<br>
                                            <input type="checkbox" id="constitutional_post" name="constitutional_post" value=""> 2.Government Service<br>
                                            <input type="checkbox" id="constitutional_post" name="constitutional_post" value=""> 3.International Organisation<br>
                                            <input type="checkbox" id="constitutional_post" name="constitutional_post" value=""> 4.Public sector /Private Undertakings<br>
                                            <input type="checkbox" id="constitutional_post" name="constitutional_post" value=""> 5.Armed Forces Including Paramilitary Forces<br>
                                            <input type="checkbox" id="constitutional_post" name="constitutional_post" value=""> 6.Professional Class and those who are engaged in trade and industry<br>
                                            <input type="checkbox" id="constitutional_post" name="constitutional_post" value=""> 7.Others
                                        </div>
                                        <div class="col-md-4 py-2">
                                            <div class=row>
                                                <div class="col-md-6">
                                                    <label for="father_name" class="eng_xxxs fg-darkBrown"> Name</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="father_name" aria-describedby="HELPNAME4" placeholder="">
                                                    <label id="father-name-error" style="color:red;"></label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="father_religion" class="eng_xxxs fg-darkBrown"> Religion</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="father_religion" aria-describedby="HELPNAME4" placeholder="">
                                                    <label id="father-religion-error" style="color:red;"></label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="father_caste" class="eng_xxxs fg-darkBrown"> Caste</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="father_caste" aria-describedby="HELPNAME4" placeholder="">
                                                    <label id="father-caste-error" style="color:red;"></label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="f_educational_qualification" class="eng_xxxs fg-darkBrown"> Educational Qualification<br>(Above Standard 4)</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="checkbox" id="f_educational_qualification" name="f_educational_qualification" value="Yes"> Yes
                                                    <input type="checkbox" id="f_educational_qualification" name="f_educational_qualification" value="No"> No
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="f_engaged_in_hereditary" class="eng_xxxs fg-darkBrown"> Engaged in Hereditary<br>Occupation</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="checkbox" id="f_engaged_in_hereditary" name="f_engaged_in_hereditary" value="Yes"> Yes
                                                    <input type="checkbox" id="f_engaged_in_hereditary" name="f_engaged_in_hereditary" value="No"> No
                                                </div>
                                            </div>


                                        </div>
                                        <div class="col-md-4 py-2">
                                            <div class=row>
                                                <div class="col-md-6">
                                                    <label for="mother_name" class="eng_xxxs fg-darkBrown"> Name</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="mother_name" aria-describedby="HELPNAME4" placeholder="">
                                                    <label id="mother-name-error" style="color:red;"></label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="mother_religion" class="eng_xxxs fg-darkBrown"> Religion</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="mother_religion" aria-describedby="HELPNAME4" placeholder="">
                                                    <label id="mother-religion-error" style="color:red;"></label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="mother_caste" class="eng_xxxs fg-darkBrown"> Caste</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="mother_caste" aria-describedby="HELPNAME4" placeholder="">
                                                    <label id="father-caste-error" style="color:red;"></label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="meducational_qualification1" class="eng_xxxs fg-darkBrown"> Educational Qualification<br>(Above Standard 4)</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="checkbox" id="m_educational_qualification1" name="m_educational_qualification" value="Yes"> Yes
                                                    <input type="checkbox" id="m_educational_qualification2" name="m_educational_qualification" value="No"> No
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="engaged_in_hereditary" class="eng_xxxs fg-darkBrown"> Engaged in Hereditary<br>Occupation</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="checkbox" id="m_engaged_in_hereditary" name="m_engaged_in_hereditary" value="Yes"> Yes
                                                    <input type="checkbox" id="m_engaged_in_hereditary" name="m_engaged_in_hereditary" value="No"> No
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row customformrow" style="border-style: ridge;">
                                <div class="col-md-6 py-2">
                                    Property Owers <span class="text-danger">*</span>
                                </div>
                                <div class="col-md-6 py-2">
                                    <input type="checkbox" id="property_owner" name="property_owner" value="Yes"> Yes
                                    <input type="checkbox" id="property_owner" name="property_owner" value="No"> No
                                </div>
                                <div class="col-md-6 py-2">
                                    Annual Family Income from all sources, excluding salaries and income from agricultural land <span class="text-danger">*</span>
                                </div>
                                <div class="col-md-6 py-2">
                                    <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="mother_caste" aria-describedby="HELPNAME4" placeholder="">
                                </div>
                            </div>
                            <div class="row customformrow">
                                <div class="col-md-12 py-2 text-center">Other Income Details</div>
                                <div class="col-md-12 py-2">
                                    <div class="table-responsive-md">
                                        <table id="faqs" class="table ">
                                            <thead>
                                                <tr>
                                                    <th>Parent <span class="text-danger">*</span></th>
                                                    <th>Whether Tax Payer <span class="text-danger">*</span></th>
                                                    <th>Whether covered in Wealth Tax Act <span class="text-danger">*</span></th>
                                                    <th>Details of assets covered in Wealth Tax</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="" aria-describedby="HELPNAME4" Value="Father">
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" id="property_owner" name="property_owner" value="Yes"> Yes
                                                        <input type="checkbox" id="property_owner" name="property_owner" value="No"> No
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" id="property_owner" name="property_owner" value="Yes"> Yes
                                                        <input type="checkbox" id="property_owner" name="property_owner" value="No"> No
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="" aria-describedby="HELPNAME4" Value="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="" aria-describedby="HELPNAME4" Value="Mother">
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" id="property_owner" name="property_owner" value="Yes"> Yes
                                                        <input type="checkbox" id="property_owner" name="property_owner" value="No"> No
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" id="property_owner" name="property_owner" value="Yes"> Yes
                                                        <input type="checkbox" id="property_owner" name="property_owner" value="No"> No
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="" aria-describedby="HELPNAME4" Value="">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="name" class="eng_xxxs fg-darkBrown"> Any Other Remarks
                                    </label>
                                </div>
                                <div class="col-md-4 py-2">
                                    <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="applicant_name" aria-describedby="HELPNAME4" placeholder="">
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
                                                <td>School Certificate</td>
                                                <td>
                                                    <input type="file" name="election_id_card" id="file_school" class="form-control customform eng_xxxs fg-darkCrimson">
                                                    <span id="span_file_school"></span>
                                                </td>
                                                <td> <input type="text" class="form-control customform eng_xxxs fg-darkCrimson"></td>
                                                <td> <input type="text" class="form-control customform eng_xxxs fg-darkCrimson"></td>
                                                <td>
                                                    <button class="btn btn-primary">save</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Salary Certificate</td>
                                                <td>
                                                    <input type="file" name="salary_certificates" id="file_salary" class="form-control customform eng_xxxs fg-darkCrimson">
                                                    <span id="span_file_salary"></span>
                                                </td>
                                                <td> <input type="text" class="form-control customform eng_xxxs fg-darkCrimson"></td>
                                                <td> <input type="text" class="form-control customform eng_xxxs fg-darkCrimson"></td>
                                                <td>
                                                    <button class="btn btn-primary">save</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Income tax returns</td>
                                                <td>
                                                    <input type="file" name="income_tax" id="file_income" class="form-control customform eng_xxxs fg-darkCrimson">
                                                    <span id="span_file_income"></span>
                                                </td>
                                                <td> <input type="text" class="form-control customform eng_xxxs fg-darkCrimson"></td>
                                                <td> <input type="text" class="form-control customform eng_xxxs fg-darkCrimson"></td>
                                                <td>
                                                    <button class="btn btn-primary">save</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Basic tax receipt</td>
                                                <td>
                                                    <input type="file" name="tax" id="file_tax" class="form-control customform eng_xxxs fg-darkCrimson">
                                                    <span id="span_file_tax"></span>
                                                </td>
                                                <td> <input type="text" class="form-control customform eng_xxxs fg-darkCrimson"></td>
                                                <td> <input type="text" class="form-control customform eng_xxxs fg-darkCrimson"></td>
                                                <td>
                                                    <button class="btn btn-primary">save</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Affidavit</td>
                                                <td>
                                                    <input type="file" name="affidavit" id="file_affidavit" class="form-control customform eng_xxxs fg-darkCrimson">
                                                    <span id="span_file_affidavit"></span>
                                                </td>
                                                <td> <input type="text" class="form-control customform eng_xxxs fg-darkCrimson"></td>
                                                <td> <input type="text" class="form-control customform eng_xxxs fg-darkCrimson"></td>
                                                <td>
                                                    <button class="btn btn-primary">save</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Service Certificate</td>
                                                <td>
                                                    <input type="file" name="service_certificates" id="file_service" class="form-control customform eng_xxxs fg-darkCrimson">
                                                    <span id="span_file_service"></span>
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
@include('serviceview.non_creamy_script')
@endsection
