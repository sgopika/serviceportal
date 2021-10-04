@extends('layouts.basemain')
@section('content')
<div class="container-fluid homepage adminpage">
<div class="row customformrow ">
	<div class="col-12 py-2  ">
		<nav aria-label="breadcrumb ">
		  <ol class="breadcrumb breadbar justify-content-end">
		    <li class="breadcrumb-item eng_xxxs">Dashboard</li>
		    <li class="breadcrumb-item eng_xxxs">List</li>
		  </ol>
		</nav>
	</div> <!-- col12 -->
	<div class="col-12 py-1 px-2 ">
		<p class="eng_xxs px-3 fg-darkBrow customformrown"> Conversion Certificate </p>
	</div> <!-- ./col12 -->	
	<div class="col-12 md-whiteframe-2dp ">
		<div id="form_section">
		<div class="row customformrow row customformrow">
			<div class="col-md-12 py-2">
				<div class="row customformrow  py-1 px-2">
					<div class="col-md-12">
							<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
								<li class="nav-item" role="presentation">
									<a id="appform" class="nav-link active" href="#pills-home-tab" data-toggle="pill"   role="tab" aria-controls="pills-home" aria-selected="true">Application</a>
								</li>
								<li class="nav-item" role="presentation">
									<a id="attach" class="nav-link" href="#pills-profile-tab" data-toggle="pill"   role="tab" aria-controls="pills-profile" aria-selected="false" >Attachments</a>
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link" href="#pills-contact-tab" data-toggle="pill"   role="tab" aria-controls="pills-contact" aria-selected="false">Payment</a>
								</li>
							</ul>
							<div class="tab-content" id="pills-tabContent">
								
								<div class="tab-pane fade show active" id="pills-home-tab" role="tabpanel" aria-labelledby="pills-home-tab">
									<form id="app_form">
										<div class="row customformrow">
											<div class="col-md-12">
													<p class="text-center font-weight-bolder">PORTAL APPLICATION FORM</p>
											</div>										
										</div>
										<div class="row customformrow">
											<div class="col-md-1 py-2 ">
												<label class="eng_xxxs fg-darkBrown">Edistrict Reg Num<span class="text-danger">*</span></label>
											</div>
											<div class="col-md-2 py-2 ">
												<input required type="text" onkeypress="return onlyNumberKey(event)" minlength="3" maxlength="30" class="form-control eng_xxxs fg-darkCrimson" id="edist_reg_num" name="edist_reg_num" aria-describedby="HELPNAME1" placeholder="Edistrict Reg Num">
												<span id="span_edist_reg_num"></span>
											</div>
										
											<div class="col-md-1 py-2 ">
												<label class="eng_xxxs fg-darkBrown">Certificate Type<span class="text-danger">*</span></label>
											</div>
											<div class="col-md-2 py-2 ">
												<select required id="cert_type" name="cert_type"class="form-control  eng_xxxs fg-darkCrimson">
														
																		<option id="certtypename" name="certtypename" value="2">Caste
																		</option>
																		
																		<option id="certtypename" name="certtypename" value="1">Community
																		</option>
																		
																		<option id="certtypename" name="certtypename" value="30">Conversion
																		</option>
																		
																		<option id="certtypename" name="certtypename" value="20">Dependency
																		</option>
																		
																		<option id="certtypename" name="certtypename" value="21">Destitute
																		</option>
																		
																		<option id="certtypename" name="certtypename" value="11">Domicile
																		</option>
																		
																		<option id="certtypename" name="certtypename" value="22">Family Membership
																		</option>
																		
																		<option id="certtypename" name="certtypename" value="5">Identification
																		</option>
																		
																		<option id="certtypename" name="certtypename" value="4">Income
																		</option>
																		
																		<option id="certtypename" name="certtypename" value="23">Inter-CasteMarriage
																		</option>
																		
																		<option id="certtypename" name="certtypename" value="37">Land
																		</option>
																		
																		<option id="certtypename" name="certtypename" value="24">Life
																		</option>
																		
																		<option id="certtypename" name="certtypename" value="12">Location
																		</option>
																		
																		<option id="certtypename" name="certtypename" value="93">Minority
																		</option>
																		
																		<option id="certtypename" name="certtypename" value="6">Nativity
																		</option>
																		
																		<option id="certtypename" name="certtypename" value="36">Non-Creamy Layer
																		</option>
																		
																		<option id="certtypename" name="certtypename" value="25">Non-ReMarriage
																		</option>
																		
																		<option id="certtypename" name="certtypename" value="26">One and the Same
																		</option>
																		
																		<option id="certtypename" name="certtypename" value="13">Possession
																		</option>
																		
																		<option id="certtypename" name="certtypename" value="27">Possession and Non-Attachment
																		</option>
																		
																		<option id="certtypename" name="certtypename" value="8">Relationship
																		</option>
																		
																		<option id="certtypename" name="certtypename" value="9">Residence
																		</option>
																		
																		<option id="certtypename" name="certtypename" value="7">Solvency
																		</option>
																		
																		<option id="certtypename" name="certtypename" value="28">Valuation
																		</option>
																		
																		<option id="certtypename" name="certtypename" value="29">Widow-Widower
																		</option>
																		
																		<option value="0" selected="true">Select one</option>

												</select>
												<span id="span_cert_type"></span>
											</div>
											<div class="col-md-1 py-2 ">
												<label class="eng_xxxs fg-darkBrown">Certificate Purpose<span class="text-danger">*</span></label>
											</div>
											<div class="col-md-2 py-2 ">
												<select required id="cert_purpos" name="cert_purpos"class="form-control  eng_xxxs fg-darkCrimson">
													<option value="0" selected="">Select one</option>
													<option value="41">State Purpose</option>
													<option value="42">Outside State Purpose</option>
												</select>
												<span id="span_cert_purpos"></span>
											</div>
											<div class="col-md-1 py-2 ">
												<label class="eng_xxxs fg-darkBrown">To be Produced before<span class="text-danger">*</span></label>
											</div>
											<div class="col-md-2 py-2 ">
												<input required type="text" minlength="3" maxlength="99" class="form-control eng_xxxs fg-darkCrimson" id="to_be_prod_befor" name="to_be_prod_befor" aria-describedby="HELPNAME1" placeholder="To be Produced before">
												<span id="span_to_be_prodcd"></span>
											</div>
										</div>
                                        <div class="row customformrow">
											<div class="col-md-12 py-2">
													<p class="text-center font-weight-bolder ">CONVERSION CERTIFICATE</p>
											</div>										
										</div>
										<div class="row customformrow">
											<div class="col-md-1 py-2">
												<label class="eng_xxxs fg-darkBrown">Religion before conversion<span class="text-danger">*</span></label>										
											</div>
											<div class="col-md-2 py-2">
												<select name="religionOld" class="form-control  eng_xxxs fg-darkCrimson" id="religionOld" title="Select the Original religion" style="width: 150" onchange="onReliSelectionOld('religionOld','categoryNewCbo')">
																	
																	<option value="01">Hindu
																	</option>
																	
																	<option value="02">Islam
																	</option>
																	
																	<option value="03">Christian
																	</option>
																	
																	<option value="04">Sikh
																	</option>
																	
																	<option value="05">Budhism
																	</option>
																	
																	<option value="06">Jain
																	</option>
																	
																	<option value="07">Other
																	</option>
																	
																	<option value="08">Parsis
																	</option>
																	
																	<option value="0" selected="true">Select one</option>
															</select>
												
												<span id="span_religionOld"></span>
											</div>
											<div class="col-md-1 py-2">
												<label class="eng_xxxs fg-darkBrown">Category before conversion<span class="text-danger">*</span></label>
											</div>
											<div class="col-md-2 py-2">
												<select required id="Catgry_bfre" name="Catgry_bfre" class="form-control  eng_xxxs fg-darkCrimson">
																			
																		<option value="4">OBC
																		</option>
																		
																		<option value="3">ST
																		</option>
																		
																		<option value="2">SC
																		</option>
																		
																		<option value="5">OEC
																		</option>
																		
																		<option value="1">General
																		</option>
																		
																		<option value="9">Minority
																		</option>
																		
																		<option value="0" selected="true">Select one</option>
												</select>
												<span id="span_Catgry_bfre"></span>
											</div>
											<div class="col-md-1 py-2">
												<label class="eng_xxxs fg-darkBrown">Caste before conversion<span class="text-danger">*</span></label>
											</div>
											<div class="col-md-2 py-2">
												<select required id="Caste_bfre" name="Caste_bfre" class="form-control  eng_xxxs fg-darkCrimson">
																			
																		<option value="4">OBC
																		</option>
																		
																		<option value="3">ST
																		</option>
																		
																		<option value="2">SC
																		</option>
																		
																		<option value="5">OEC
																		</option>
																		
																		<option value="1">General
																		</option>
																		
																		<option value="9">Minority
																		</option>
																		
																		<option value="0" selected="true">Select one</option>
												</select>
												<span id="span_Caste_bfre"></span>
											</div>
											<div class="col-md-1 py-2">
												<label class="eng_xxxs fg-darkBrown">Name before conversion<span class="text-danger">*</span></label>
											</div>
											<div class="col-md-2 py-2">
												<input required type="text" minlength="3" maxlength="99" class="form-control eng_xxxs fg-darkCrimson" id="name_befor" name="name_befor" aria-describedby="HELPNAME1" placeholder="Name before conversion">
												<span id="span_name_befor"></span>
											</div>
										</div>
										<div class="row customformrow">
											<div class="col-md-2 py-2">
												<label class="eng_xxxs fg-darkBrown">Certificate No(issued by the religious authority)<span class="text-danger">*</span></label>										
											</div>
											<div class="col-md-2 py-2">
												<input required type="text" minlength="3" maxlength="99" class="form-control eng_xxxs fg-darkCrimson" id="cast_certif_issued_by" name="cast_certif_issued_by" aria-describedby="HELPNAME1" placeholder="Certificate No(issued by the religious authority)">
												<span id="span_cast_certif_issued_by"></span>
											</div>
											<div class="col-md-2 py-2">
												<label class="eng_xxxs fg-darkBrown">Dated<span class="text-danger">*</span></label>
											</div>
											<div class="col-md-2 py-2">
											<input required type="date" minlength="3" maxlength="99" class="form-control eng_xxxs fg-darkCrimson" id="date_caste_cert" name="date_caste_cert" aria-describedby="HELPNAME1" placeholder="Dated">
												<span id="span_date_caste_cert"></span>
											</div>
											<div class="col-md-2 py-2">
												<label class="eng_xxxs fg-darkBrown">Religious Authority<span class="text-danger">*</span></label>
											</div>
											<div class="col-md-2 py-2">
												<input required type="text" minlength="3" maxlength="99" class="form-control eng_xxxs fg-darkCrimson" id="religous_authority" name="religous_authority" aria-describedby="HELPNAME1" placeholder="Religious Authority">
												<span id="span_religous_authority"></span>
											</div>											
										</div>
										<div class="row customformrow">
											<div class="col-md-12 py-2">
													<p class="text-center font-weight-bolder ">DECLARATION</p>
											</div>										
										</div>
										<div class="row customformrow">
											<div class="col-md-3 py-2">
												<label class="eng_xxxs fg-darkBrown">Applicant's Name<span class="text-danger">*</span></label>										
											</div>
											<div class="col-md-3 py-2">
												<input required type="text" class="form-control eng_xxxs fg-darkCrimson" minlength="3" maxlength="99" id="Applcnt_name" name="Applcnt_name" aria-describedby="HELPNAME1" placeholder="Applicant's Name">
												<span id="span_Applcnt_name"></span>
											</div>
											<div class="col-md-3 py-2">
												<label class="eng_xxxs fg-darkBrown">Relation<span class="text-danger">*</span></label>
											</div>
											<div class="col-md-3 py-2">
												<select required id="cert_reltn" name="cert_reltn" class="form-control  eng_xxxs fg-darkCrimson">
																		<option value="23">Adopted daughter
																		</option>
																		
																		<option value="22">Adopted son
																		</option>
																		
																		<option value="07">Brother
																		</option>
																		
																		<option value="11">Brother-In-Law
																		</option>
																		
																		<option value="06">Daughter
																		</option>
																		
																		<option value="20">Daughter In Law
																		</option>
																		
																		<option value="03">Father
																		</option>
																		
																		<option value="09">Father In Law
																		</option>
																		
																		<option value="16">Granddaughter
																		</option>
																		
																		<option value="17">Grandfather
																		</option>
																		
																		<option value="18">Grandmother
																		</option>
																		
																		<option value="15">Grandson
																		</option>
																		
																		<option value="02">Husband
																		</option>
																		
																		<option value="04">Mother
																		</option>
																		
																		<option value="10">Mother In Law
																		</option>
																		
																		<option value="13">Nephew
																		</option>
																		
																		<option value="14">Niece
																		</option>
																		
																		<option value="01">Self
																		</option>
																		
																		<option value="08">Sister
																		</option>
																		
																		<option value="12">Sister-In-Law
																		</option>
																		
																		<option value="05">Son
																		</option>
																		
																		<option value="19">Son In Law
																		</option>
																		
																		<option value="21">Wife
																		</option>
																		

																		<option value="0" selected="false">Select One</option>
												</select>
												<span id="span_cert_reltn"></span>
											</div>
										</div>
										<div class="row">
											
											<div class="col-md-6 py-2">
												<button onClick="reset_form('app_form')" class="btn btn-sm btn-flat eng_xxxs restbtn bg-lightOrange fg-darkCrimson px-3"> <i class="fas fa-broom"></i>&nbsp;Reset </button> &nbsp;&nbsp;
												
												
											</div>
											<div class="col-md-6 py-2">
											<input type="hidden" id="applctntabval" name="applctntabval" value="0">
												<button class="btn btn-sm btn-flat eng_xxxs savbtn fg-lightGray px-3" onClick="validate_form()"><svg class="svg-inline--fa fa-save fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="save" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M433.941 129.941l-83.882-83.882A48 48 0 0 0 316.118 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h352c26.51 0 48-21.49 48-48V163.882a48 48 0 0 0-14.059-33.941zM224 416c-35.346 0-64-28.654-64-64 0-35.346 28.654-64 64-64s64 28.654 64 64c0 35.346-28.654 64-64 64zm96-304.52V212c0 6.627-5.373 12-12 12H76c-6.627 0-12-5.373-12-12V108c0-6.627 5.373-12 12-12h228.52c3.183 0 6.235 1.264 8.485 3.515l3.48 3.48A11.996 11.996 0 0 1 320 111.48z"></path></svg><!-- <i class="fas fa-save"></i> Font Awesome fontawesome.com -->&nbsp;Save </button>

												
											</div>
											
										</div>
									</form>
								
								</div>
								
								<div class="tab-pane fade" id="pills-profile-tab"  role="tabpanel" aria-labelledby="pills-profile-tab">
									<div class="row customformrow">
										<div class="col-md-12 py-2">
											<input type="hidden" id="attchment_tab" name="attchment_tab" value="0">
											<small id="HELPNAME1" class="form-text eng_xxxxs text-success"> Your Application is saved successfully. Attach supporting documents (Step 2) and then make Payment (Step 3).</small>
										</div> <!-- ./col-md-6 -->										
									</div> <!-- ./row -->
									<div class="row customformrow">
										<div class="col-md-12 py-2">
										<table class="table table-hover table-responsive" style="width:100%">
											<thead>
											<tr>
												<th>Sl No.</th>
												<th>Document Name</th>
												<th>Upload File<span class="text-danger">*</span></th>
												<th>Remarks</th>
												<th>Document Reference Number</th>
											</tr>
											</thead>
											<tbody>
											<tr>
												<td>1</td>
												<td>Ration Card</td>
												<td>
													<div class="form-group">   
														<input type="file" class="form-control-file" id="file_ration"  name="fileupload">
														<span id="span_file_ration"></span>
													</div>
												</td>
												<td>
													<input required type="text" minlength="3" maxlength="99" class="form-control eng_xxxs fg-darkCrimson" id="remarks_ration" name="remarks_ration" aria-describedby="HELPNAME1" placeholder="Remarks">
													<span id="span_remarks_ration"></span>
												</td>
												<td>
													<input required type="text" minlength="10" maxlength="15" class="form-control eng_xxxs fg-darkCrimson" id="doc_ref_no_ration" name="doc_ref_no_ration" aria-describedby="HELPNAME1" placeholder="Document Reference Number">
													<span id="span_doc_ref_no_ration"></span>
												</td>
											</tr>
											<tr>
												<td>2</td>
												<td>School Certificate</td>
												<td>
													<div class="form-group">   
														<input type="file" class="form-control-file" id="file_school_certfct"  name="fileupload">
														<span id="span_file_school_certfct"></span>
													</div>
												</td>
												<td>
													<input required type="text" minlength="3" maxlength="99" class="form-control eng_xxxs fg-darkCrimson" id="remarks_school_certfct" name="remarks_school_certfct" aria-describedby="HELPNAME1" placeholder="Remarks">
													<span id="span_remarks_school_certfct"></span>
												</td>
												<td>
													<input required type="text" minlength="10" maxlength="10" class="form-control eng_xxxs fg-darkCrimson" id="doc_ref_no_school_certfct" name="doc_ref_no_school_certfct" aria-describedby="HELPNAME1" placeholder="Document Reference Number">
													<span id="span_doc_ref_no_school_certfct"></span>
												</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Affidavit</td>
												<td>
													<div class="form-group">   
														<input type="file" class="form-control-file" id="file_affidavit"  name="fileupload">
														<span id="span_file_affidavit"></span>
													</div>
												</td>
												<td>
													<input required type="text" minlength="3" maxlength="99" class="form-control eng_xxxs fg-darkCrimson" id="remarks_Affidavit" name="remarks_Affidavit" aria-describedby="HELPNAME1" placeholder="Remarks">
													<span id="span_remarks_Affidavit"></span>
												</td>
												<td>
													<input required type="text" minlength="3" maxlength="30" class="form-control eng_xxxs fg-darkCrimson" id="doc_ref_no_Affidavit" name="doc_ref_no_Affidavit" aria-describedby="HELPNAME1" placeholder="Document Reference Number">
													<span id="span_doc_ref_no_Affidavit"></span>
												</td>
											</tr>
											<tr>
												<td>4</td>
												<td>Conversion Certificate from Concerned Authority</td>
												<td>
													<div class="form-group">   
														<input type="file" class="form-control-file" id="file_cover_cert" name="fileupload">
														<span id="span_file_cover_cert"></span>
													</div>
												</td>
												<td>
													<input required type="text" minlength="3" maxlength="99" class="form-control eng_xxxs fg-darkCrimson" id="remarks_cover_cert" name="remarks_cover_cert" aria-describedby="HELPNAME1" placeholder="Remarks">
													<span id="span_remarks_cover_cert"></span>
												</td>
												<td>
													<input required type="text" minlength="12" maxlength="12" class="form-control eng_xxxs fg-darkCrimson" id="doc_ref_no_cover_cert" name="doc_ref_no_cover_cert" aria-describedby="HELPNAME1" placeholder="Document Reference Number">
													<span id="span_doc_ref_no_cover_cert"></span>
												</td>
											</tr>
											</tbody>
										</table>
										</div> <!-- ./col-md-6 -->										
									</div> <!-- ./row -->
									<div class="row">
										
										<div class="col-md-6 py-2">
											<button onClick="reset_form_attach()" class="btn btn-sm btn-flat eng_xxxs restbtn bg-lightOrange fg-darkCrimson px-3"> <i class="fas fa-broom"></i>&nbsp;Reset </button> &nbsp;&nbsp;
											
											
										</div>
										<div class="col-md-6 py-2">
										<input type="hidden" id="filetabval" name="filetabval" value="0">
											<button class="btn btn-sm btn-flat eng_xxxs savbtn fg-lightGray px-3" onClick="validate_form_attach()"><svg class="svg-inline--fa fa-save fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="save" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M433.941 129.941l-83.882-83.882A48 48 0 0 0 316.118 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h352c26.51 0 48-21.49 48-48V163.882a48 48 0 0 0-14.059-33.941zM224 416c-35.346 0-64-28.654-64-64 0-35.346 28.654-64 64-64s64 28.654 64 64c0 35.346-28.654 64-64 64zm96-304.52V212c0 6.627-5.373 12-12 12H76c-6.627 0-12-5.373-12-12V108c0-6.627 5.373-12 12-12h228.52c3.183 0 6.235 1.264 8.485 3.515l3.48 3.48A11.996 11.996 0 0 1 320 111.48z"></path></svg><!-- <i class="fas fa-save"></i> Font Awesome fontawesome.com -->&nbsp;Save </button>

											
										</div>
										
									</div>
								</div>
								<div class="tab-pane fade" id="pills-contact-tab" role="tabpanel" aria-labelledby="pills-contact-tab"></div>
							</div>
					</div>
				</div>

				
							
			</div> <!-- ./col-md-6 -->
			 <!-- ./col-md-6 -->
		</div> <!-- certificate ./row customformrow -->
		




		</div> <!-- ./form_section -->
	</div> <!-- ./col12 -->
</div> <!-- ./row customformrow -->
</div> <!-- ./container -->
@endsection

@section('customscripts')
@include('serviceview.conversion_script')
@endsection


