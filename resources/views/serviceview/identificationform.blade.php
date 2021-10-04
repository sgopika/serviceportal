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

        <div class="col-md-12 py-1 px-2 ">
            <div class="card">
                <h5 class="card-header"> Dependency Certificate</h5>
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
                        <div class="tab-content" id="pills-tabContent">
                            
                            <div class="tab-pane fade show active" id="pills-application" role="tabpanel" aria-labelledby="pills-application-tab">
                                <div id="form_section">
                                    
                                    <form id="ajaxmodalform1" method="post" class="form-horizontal" enctype="multipart/form-data">
                                  
                                  <div class="border border-secondary">
                                    <div class="col-12 py-1 px-2 text-center bg-primary">
                                        <p class="eng_xxs px-3 text-white">PORTAL APPLICATION FORM.</p>
                                      </div> <!-- ./col12 --> 
                                    <div class="row customformrow table-responsive-md">
                                       
                                    <table class="table table-striped table-bordered">
                                      <thead>
                                        <tr>
                                          <th scope="col">
                                            <label for="edistrict_no" class="eng_xxxs fg-darkBrown ">eDistrict Register No <span class="text-danger">*</span>
                                            </label>
                                          </th>
                                          <th scope="col">
                                            <label for="certificate_type" class="eng_xxxs fg-darkBrown">Certificate type <span class="text-danger">*</span>
                                            </label>
                                          </th>
                                          <th scope="col">
                                            <label for="certificate_purpose" class="eng_xxxs fg-darkBrown"> Certificate Purpose<span class="text-danger">*</span>
                                            </label>
                                          </th>
                                          <th scope="col">
                                            <label for="to_be_produced_before" class="eng_xxxs fg-darkBrown">To be produced before <span class="text-danger">*</span>
                                            </label>
                                           </th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <th scope="row">                     
                                           <select class="form-control customform eng_xxxs fg-darkCrimson" name="edistrict_no" id="edistrict_no" aria-describedby="HELPNAME1">
                                                <option>Default select</option>
                                            </select></th>
                                          <td>
                                                <select class="form-control customform eng_xxxs fg-darkCrimson" name="certificate_type" id="certificate_type" aria-describedby="HELPNAME2">
                                                    <option>Default select</option>
                                                </select>
                                            </td>
                                          <td>
                                            <select class="form-control customform eng_xxxs fg-darkCrimson" name="certificate_purpose" id="certificate_purpose" aria-describedby="HELPNAME3">
                                                <option>Default select</option>
                                            </select>
                                        </td>
                                          <td>
                                             <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" name="to_be_produced_before" id="to_be_produced_before" aria-describedby="HELPNAME4" placeholder="">
                                         </td>
                                        </tr>

                                        
                                      </tbody>
                                    </table>
                                    <div class="col-12 py-1 px-2 text-center bg-primary text-white">
                                            <p class="eng_xxs px-3">
                                                <small id="" class="form-text eng_xxxxs">
                                                <span class="text-danger">*</span> Mandatory fields
                                                <span style="color: #f0bcdf;">*</span> Either one is mandatory
                                            </small></p>
                                        </div> <!-- ./col12 --> 
                                    </div> <!-- ./row -->
                                    </div>
                                    <br><br>
                                    <div class="border border-secondary">
                                    <div class="col-12 py-1 px-2 text-center bg-primary">
                                        <p class="eng_xxs px-3  text-white">IDENTITY CERTIFICATE</p>
                                      </div> <!-- ./col12 --> 
                                    <div class="row customformrow table-responsive-md">
                                       
                                    <table class="table table-striped table-bordered">
                                      <thead>
                                        <tr>
                                          <th scope="col">
                                            <label for="register_no" class="eng_xxxs fg-darkBrown ">Place of Birth<span class="text-danger">*</span>
                                            </label>
                                          </th>
                                          <th scope="col">
                                            <label for="state" class="eng_xxxs fg-darkBrown">State <span class="text-danger">*</span>
                                            </label>
                                          </th>
                                          <th scope="col">
                                            <label for="district" class="eng_xxxs fg-darkBrown"> District<span class="text-danger">*</span>
                                            </label>
                                          </th>
                                          <th scope="col">
                                            <label for="taluk" class="eng_xxxs fg-darkBrown">Taluk <span class="text-danger">*</span>
                                            </label>
                                           </th>
                                            <th scope="col">
                                            <label for="village" class="eng_xxxs fg-darkBrown">Village <span class="text-danger">*</span>
                                            </label>
                                           </th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td scope="row">                     
                                           
                                             <label for="register_no" class="eng_xxxs fg-darkBrown ">Applicant<span class="text-danger">*</span>
                                            </label>
                                            </td>
                                          <td>
                                                <select class="form-control customform eng_xxxs fg-darkCrimson" id="state_app" name="state_app" aria-describedby="HELPNAME2">
                                                    <option>Default select</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control customform eng_xxxs fg-darkCrimson" id="district_app" name="district_app" aria-describedby="HELPNAME2">
                                                    <option>Default select</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control customform eng_xxxs fg-darkCrimson" id="taluk_app" name="taluk_app" aria-describedby="HELPNAME2">
                                                    <option>Default select</option>
                                                </select>
                                            </td>
                                          <td>
                                            <select class="form-control customform eng_xxxs fg-darkCrimson" id="village_app" name="village_app" aria-describedby="HELPNAME3">
                                                <option>Default select</option>
                                            </select>
                                        </td>
                                          
                                        </tr>
                                        <tr>
                                          <td scope="row">                     
                                            <label for="register_no" class="eng_xxxs fg-darkBrown ">Father<span class="text-danger">*</span>
                                            </label>
                                        </td>
                                          <td>
                                                <select class="form-control customform eng_xxxs fg-darkCrimson" id="state_father" name="state_father" aria-describedby="HELPNAME2">
                                                    <option>Default select</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control customform eng_xxxs fg-darkCrimson" id="district_father" name="district_father" aria-describedby="HELPNAME2">
                                                    <option>Default select</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control customform eng_xxxs fg-darkCrimson" id="taluk_father" name="taluk_father" aria-describedby="HELPNAME2">
                                                    <option>Default select</option>
                                                </select>
                                            </td>
                                          <td>
                                            <select class="form-control customform eng_xxxs fg-darkCrimson" id="village_father" name="village_father" aria-describedby="HELPNAME3">
                                                <option>Default select</option>
                                            </select>
                                        </td>
                                          
                                        </tr>
                                        <tr>
                                          <td scope="row">                     
                                            <label for="register_no" class="eng_xxxs fg-darkBrown ">Mother<span class="text-danger">*</span>
                                            </label>
                                        </td>
                                          <td>
                                                <select class="form-control customform eng_xxxs fg-darkCrimson" id="state_mother" name="state_mother" aria-describedby="HELPNAME2">
                                                    <option>Default select</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control customform eng_xxxs fg-darkCrimson" id="district_mother" name="district_mother" aria-describedby="HELPNAME2">
                                                    <option>Default select</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control customform eng_xxxs fg-darkCrimson" id="taluk_mother" name="taluk_mother" aria-describedby="HELPNAME2">
                                                    <option>Default select</option>
                                                </select>
                                            </td>
                                          <td>
                                            <select class="form-control customform eng_xxxs fg-darkCrimson" id="village_mother" name="village_mother" aria-describedby="HELPNAME3">
                                                <option>Default select</option>
                                            </select>
                                        </td>
                                          
                                        </tr>

                                        
                                      </tbody>
                                    </table>
                                    <div class="row col-md-12">
                                    <div class="col-12 py-2 px-2 ">
                                            <p class="eng_xxs px-3 bg-info text-white">
                                            Enter two identification marks*
                                            </p>
                                        </div> <!-- ./col12 --> 
                                        <div class="col-md-2 py-2">
                                                <label for="identification_mark1" class="eng_xxxs fg-darkBrown"> identification marks 1
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-4 py-2">
                                                <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="identification_mark1" name="identification_mark1" aria-describedby="HELPNAME4" placeholder="" required="required">
                                            </div>
                                            <div class="col-md-2 py-2">
                                                <label for="identification_mark2" class="eng_xxxs fg-darkBrown"> identification marks 2
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-4 py-2">
                                                <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="identification_mark2" name="identification_mark2" aria-describedby="HELPNAME4" placeholder="" required="required">
                                            </div>
                                    </div>
                                    <div class="row col-md-12">
                                        <div class="col-md-2 py-2">
                                                <label for="alias1" class="eng_xxxs fg-darkBrown"> Alias Name (i)
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-4 py-2">
                                                <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="alias1" name="alias1" aria-describedby="HELPNAME4" placeholder="" required="required">
                                            </div>
                                            <div class="col-md-2 py-2">
                                                <label for="name" class="eng_xxxs fg-darkBrown"> Alias Name (ii)
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-4 py-2">
                                                <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="alias2" name="alias2" aria-describedby="HELPNAME4" placeholder="" required="required">
                                            </div>
                                    </div>

                                    </div> <!-- ./row -->
                                    </div>
                                   
                                <br><br>
                                 <div class="row">
                                            <div class="col-md-12 py-2 block-header text-center bg-info text-white">DECLARATION</div>
                                            <div class="col-md-2">
                                                <label for="name" class="eng_xxxs fg-darkBrown"> Applicant's Name
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-4 py-2">
                                                <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="applicant_name" name="applicant_name" aria-describedby="HELPNAME4" placeholder="">
                                            </div>
                                            <div class="col-md-2 py-2">
                                                <label for="relation" class="eng_xxxs fg-darkBrown"> Relation
                                                    <span class="text-danger">*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-4 py-2">
                                                <select class="form-control customform eng_xxxs fg-darkCrimson" id="relation" name="relation">
                                                    <option>Default select</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-session3">
                                       
                                    
                                    <div class="row customformrow">
                                        <div class="col-md-12 py-2 d-flex">
                                           
                                          <div class="py-1">
                                              <input type="checkbox" id="declation" value="1" name="declation" required="required">
                                          </div> <!-- ./col-md-6 -->
                                          <div class="py-1">
                                            <label for="IDNAME" class="eng_xxxs fg-darkBrown">The above mentioned facts are true and fair to the best of my knowledge and belief</label>
                                           </div> 
                                          </div> <!-- ./col-md-6 -->
                                        </div>
                                 </div>
                                   <div class="row col-md-12 py-2">
                                        <!--     <div class="col-12"> -->
                                        <div class="col-md-3 py-2">
                                                <label for="name" class="eng_xxxs fg-darkBrown">
                                                    <span class="text-danger">Enter one time password received on your mobile*</span>
                                                </label>
                                            </div>
                                            <div class="col-md-5 py-2">
                                                <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="applicant_name" aria-describedby="HELPNAME4" placeholder="" required="required">
                                            </div>
                                            <div class="col-md-4 py-2 ">
                                            <button class="btn btn-sm btn-flat eng_xxxs bg-info fg-darkCrimson otp" type="button"> &nbsp;Send OTP </button> &nbsp;&nbsp;
                                        </div>
                                        </div>

                                       <!--  </div> -->
                                       <div class="row customformrow" >
                                        <div class="col-md-12 py-2 justify-content-center d-flex" id="buttondiv">
                                             <button class="btn btn-sm btn-flat eng_xxxs bg-info fg-darkCrimson save"> &nbsp;Save Application</button> &nbsp;&nbsp;
                                            <button  type="reset" class="btn btn-sm btn-flat eng_xxxs bg-primary fg-lightGray px-3 reset"> &nbsp;Application Reset </button>
                                        </div>

                                    </div> <!-- ./row -->
                                </form>
                                </div> <!-- ./form_section -->
                            </div>
                            <div class="tab-pane fade" id="pills-attachments" role="tabpanel" aria-labelledby="pills-attachments-tab">
                                <div id="form_section">
                                    <form id="ajaxmodalform2" method="post" class="form-horizontal" enctype="multipart/form-data">
                                    <div class="attachment-div" style="border-style: ridge;">
                                        <div class="row">
                                            <div class="col-md-12 text-center block-header">Following document may be attached. (Ration Card/SSLC Book 2001 onwards / Driving Licence need not be uploaded)</div>
                                        </div>
                                        <div class="table-responsive-md">
                                            <table id="attachment" class="table table-bordered">
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
                                                            <input type="file" name="ration_card" id="ration_card" class="form-control customform eng_xxxs fg-darkCrimson" required="required">
                                                            <p id="ration_carderror" style="display:none; color:#FF0000;">
                                                              Invalid File format.
                                                              </p>
                                                              <p id="ration_carderror1" style="display:none; color:#FF0000;" class="mal_xxxs">
                                                              Allowed size 1 MB.
                                                              </p>
                                                        </td>
                                                        <td> <input type="text" name="ration_card_rm" id="ration_card_rm" class="form-control customform eng_xxxs fg-darkCrimson"></td>
                                                        <td> <input type="text" name="ration_card_no" id="ration_card_no" class="form-control customform eng_xxxs fg-darkCrimson"></td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Election ID Card</td>
                                                        <td><input type="file" name="election_id_card" id="election_id_card" class="form-control customform eng_xxxs fg-darkCrimson" required="required">
                                                        <p id="election_id_carderror" style="display:none; color:#FF0000;">
                                                              Invalid File format.
                                                              </p>
                                                              <p id="election_id_carderror1" style="display:none; color:#FF0000;" class="mal_xxxs">
                                                              Allowed size 1 MB.
                                                              </p>
                                                          </td>
                                                        <td> <input type="text" name="election_id_card_rm" id="election_id_card_rm" class="form-control customform eng_xxxs fg-darkCrimson"></td>
                                                        <td> <input type="text" name="election_id_card_no" id="election_id_card_no" class="form-control customform eng_xxxs fg-darkCrimson"></td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>School Certificate</td>
                                                        <td><input type="file" name="school_certificate" id="school_certificate" class="form-control customform eng_xxxs fg-darkCrimson" required="required">
                                                        <p id="school_certificateerror" style="display:none; color:#FF0000;">
                                                              Invalid File format.
                                                              </p>
                                                              <p id="school_certificateerror1" style="display:none; color:#FF0000;" class="mal_xxxs">
                                                              Allowed size 1 MB.
                                                              </p>
                                                          </td>
                                                        <td> <input type="text" name="school_certificate_rm" id="school_certificate_rm" class="form-control customform eng_xxxs fg-darkCrimson"></td>
                                                        <td> <input type="text" name="school_certificate_no" id="school_certificate_no" class="form-control customform eng_xxxs fg-darkCrimson"></td>
                                                       
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
                                <div class="row customformrow">
                                        <div class="col-md-12 py-2 justify-content-center d-flex">
                                             <button class="btn btn-sm btn-flat eng_xxxs bg-info fg-darkCrimson"> &nbsp;Submit Application</button> &nbsp;&nbsp;
                                           <!--  <button class="btn btn-sm btn-flat eng_xxxs bg-primary fg-lightGray px-3"> &nbsp;Application Reset </button> -->
                                        </div>

                                    </div> <!-- ./row -->
                            </div>
                             </form>
                            <div class="tab-pane fade" id="pills-payment" role="tabpanel" aria-labelledby="pills-payment-tab">
                                ...</div>
                        </div>
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
@include('serviceview.identificationjs')
@endsection
