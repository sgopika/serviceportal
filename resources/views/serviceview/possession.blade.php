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
		<p class="eng_xxs px-3 fg-darkBrow customformrown"> Possession Certificate </p>
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
												<input required type="text"  class="form-control eng_xxxs fg-darkCrimson" id="edist_reg_num" name="edist_reg_num" aria-describedby="HELPNAME1" placeholder="Edistrict Reg Num">
												<span id="span_edist_reg_num"></span>
											</div>
										
											<div class="col-md-1 py-2 ">
												<label class="eng_xxxs fg-darkBrown">Certificate Type<span class="text-danger">*</span></label>
											</div>
											<div class="col-md-2 py-2 ">
												<select required id="cert_type" name="cert_type" class="form-control  eng_xxxs fg-darkCrimson">
														
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
												<input required type="text"  class="form-control eng_xxxs fg-darkCrimson" id="to_be_prod_befor" name="to_be_prod_befor" aria-describedby="HELPNAME1" placeholder="To be Produced before">
												<span id="span_to_be_prodcd"></span>
											</div>
										</div>
                                        <div class="row customformrow">
											<div class="col-md-12 py-2">
													<p class="text-center font-weight-bolder ">POSSESSION CERTIFICATE</p>
											</div>										
										</div>
										<div class="row customformrow">
										<div class="col-md-12 py-2">
										<table id="rep_tab" class="table table-bordered table-hover table-responsive" style="width:100%">
											<thead>
											<tr>
												<th>Sl No.</th>
												<th>District<span class="text-danger">*</span></th>
												<th>Taluk<span class="text-danger">*</span></th>
												<th>Village<span class="text-danger">*</span></th>
												<th>Old Survey/ Sub Div No.<span class="text-danger">*</span></th>
                                                <th>Re-Survey Block</th>
												<th>Re-Survey/ Sub Div No.<span class="text-danger">*</span></th>
                                                <th>Thandapper No</th>
												<th>Land Type</th>
                                                <th>Extent(in Hectare)<span class="text-danger">*</span></th>
												<th>Market Value of Property</th>
                                                <th>Liability Amount</th>
                                                <th>Action</th>
											</tr>
											</thead>
											<tbody id="rep_body">
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                                <select name="dist_list_1" id="dist_list_1" style="width: 100" title="Select District of Property" class="dist_list_1 form-control  eng_xxxs fg-darkCrimson">
																					
																					<option value="04">Alappuzha
																					</option>
																					
																					<option value="07">Ernakulam
																					</option>
																					
																					<option value="06">Idukki
																					</option>
																					
																					<option value="13">Kannur
																					</option>
																					
																					<option value="14">Kasaragod
																					</option>
																					
																					<option value="02">Kollam
																					</option>
																					
																					<option value="05">Kottayam
																					</option>
																					
																					<option value="11">Kozhikode
																					</option>
																					
																					<option value="10">Malappuram
																					</option>
																					
																					<option value="09">Palakkad
																					</option>
																					
																					<option value="03">Pathanamthitta
																					</option>
																					
																					<option value="01">Thiruvananthapuram
																					</option>
																					
																					<option value="08">Thrissur
																					</option>
																					
																					<option value="12">Wayanad
																					</option>
																					
																					<option value="0" selected="true">Select
																						one</option>
																</select>
																<span class="dist_list_1"></span>
                                                    </td>
                                                    
                                                    <td>
                                                                    <select name="taluk_list_1" id="taluk_list_1" style="width: 100" title="Select Taluk of Property" class="form-control taluk_list_1  eng_xxxs fg-darkCrimson">
																					<option value="0" selected="true">Select
																						one</option>
																	</select>
																	<span class="taluk_list_1"></span>
                                                    </td>
                                                    <td>
                                                                    <select name="village_list_1" id="village_list_1" style="width: 100" title="Select Taluk of Property" class="form-control village_list_1  eng_xxxs fg-darkCrimson">
																					<option value="0" selected="true">Select
																						one</option>
																	</select>
																	<span class="village_list_1"></span>                                                    
                                                    </td>
                                                    <td>

                                                            <input required type="text"  class="form-control eng_xxxs fg-darkCrimson old_survy_num" id="old_survy_num" name="old_survy_num" aria-describedby="HELPNAME1" placeholder="Old Survey/ Sub Div No.">
                                                           <span class="span_old_survy_num"></span>

                                                    </td>
                                                    <td>
                                                                <input required type="text"  class="form-control eng_xxxs fg-darkCrimson resurver_blck" id="resurver_blck" name="resurver_blck" aria-describedby="HELPNAME1" placeholder="Re-Survey Block">
                                                           <span class="span_resurver_blck"></span>
                                                    </td>
                                                    <td>
                                                                <input required type="text"  class="form-control eng_xxxs fg-darkCrimson resurvy_num" id="resurvy_num" name="resurvy_num" aria-describedby="HELPNAME1" placeholder="Re-Survey/ Sub Div No.">
                                                           <span class="span_resurvy_num"></span>
                                                    </td>
                                                    <td>
                                                                <input required type="text"  class="form-control eng_xxxs fg-darkCrimson thundaper_num" id="thundaper_num" name="thundaper_num" aria-describedby="HELPNAME1" placeholder="Thandapper No">
                                                           <span class="span_thundaper_num"></span>
                                                    </td>
                                                    <td>
                                                                <input required type="text"  class="form-control eng_xxxs fg-darkCrimson land_type" id="land_type" name="land_type" aria-describedby="HELPNAME1" placeholder="Land Type">
                                                           <span class="span_land_type"></span>
                                                    </td>
                                                    <td>
                                                                <input required type="text"  class="form-control eng_xxxs fg-darkCrimson extentinHect" id="extentinHect" name="extentinHect" aria-describedby="HELPNAME1" placeholder="Extent(in Hectare)">
                                                           <span class="span_extentinHect"></span>
															<span id="calc" onClick="Cal_hect()"><i class="fas fa-bars"></i></span>
                                                    </td>
                                                    <td>
                                                                <input required type="text"  class="form-control eng_xxxs fg-darkCrimson market_val_prop" id="market_val_prop" name="market_val_prop" aria-describedby="HELPNAME1" placeholder="Market Value of Property">
                                                           <span class="span_market_val_prop"></span>
                                                    </td>
                                                    <td>
                                                                <input required type="text"  class="form-control eng_xxxs fg-darkCrimson laibility_amnt" id="laibility_amnt" name="laibility_amnt" aria-describedby="HELPNAME1" placeholder="Liability Amount">
                                                           <span class="span_laibility_amnt"></span>
                                                    </td>
                                                    <td>
                                                             <button class="btn btn-sm btn-flat eng_xxxs restbtn bg-lightOrange fg-darkCrimson px-3 " onClick="row_repeat()">Add</button>
                                                             <!-- <button  class="del_row_btn btn btn-sm btn-flat eng_xxxs restbtn bg-lightOrange fg-darkCrimson px-3" >Delete</button> -->
                                                    
                                                    </td>
                                                </tr>
											</tbody>
										</table>
										</div> <!-- ./col-md-6 -->										
									</div> <!-- ./row -->
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
												<input required type="text" class="form-control eng_xxxs fg-darkCrimson" id="Applcnt_name" name="Applcnt_name" aria-describedby="HELPNAME1" placeholder="Applicant's Name">
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
												<button id="svBtnapp"  class="btn btn-sm btn-flat eng_xxxs savbtn fg-lightGray px-3" onClick="validate_form()"><svg class="svg-inline--fa fa-save fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="save" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M433.941 129.941l-83.882-83.882A48 48 0 0 0 316.118 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h352c26.51 0 48-21.49 48-48V163.882a48 48 0 0 0-14.059-33.941zM224 416c-35.346 0-64-28.654-64-64 0-35.346 28.654-64 64-64s64 28.654 64 64c0 35.346-28.654 64-64 64zm96-304.52V212c0 6.627-5.373 12-12 12H76c-6.627 0-12-5.373-12-12V108c0-6.627 5.373-12 12-12h228.52c3.183 0 6.235 1.264 8.485 3.515l3.48 3.48A11.996 11.996 0 0 1 320 111.48z"></path></svg><!-- <i class="fas fa-save"></i> Font Awesome fontawesome.com -->&nbsp;Save </button>

												
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
												<td>Election Id Card</td>
												<td>
													<div class="form-group">   
														<input type="file" class="form-control-file" id="file_eid"  name="fileupload">
														<span id="span_file_eid"></span>
													</div>
												</td>
												<td>
													<input required type="text" class="form-control eng_xxxs fg-darkCrimson" id="remarks_eid" name="remarks_eid" aria-describedby="HELPNAME1" placeholder="Remarks">
													<span id="span_remarks_eid"></span>
												</td>
												<td>
													<input required type="text" class="form-control eng_xxxs fg-darkCrimson" id="doc_ref_no_eid" name="doc_ref_no_eid" aria-describedby="HELPNAME1" placeholder="Document Reference Number">
													<span id="span_doc_ref_no_eid"></span>
												</td>
												
											</tr>
											<tr>
											<td>2</td>
												<td>Encumbarance Certificate</td>
												<td>
													<div class="form-group">   
														<input type="file" class="form-control-file" id="file_Encum"  name="fileupload">
														<span id="span_file_Encum"></span>
													</div>
												</td>
												<td>
													<input required type="text" class="form-control eng_xxxs fg-darkCrimson" id="remarks_Encum" name="remarks_Encum" aria-describedby="HELPNAME1" placeholder="Remarks">
													<span id="span_remarks_Encum"></span>
												</td>
												<td>
													<input required type="text" class="form-control eng_xxxs fg-darkCrimson" id="doc_ref_no_Encum" name="doc_ref_no_Encum" aria-describedby="HELPNAME1" placeholder="Document Reference Number">
													<span id="span_doc_ref_no_Encum"></span>
												</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Land tax receipt</td>
												<td>
													<div class="form-group">   
														<input type="file" class="form-control-file" id="file_land_tax"  name="fileupload">
														<span id="span_file_land_tax"></span>
													</div>
												</td>
												<td>
													<input required type="text" class="form-control eng_xxxs fg-darkCrimson" id="remarks_land_tax" name="remarks_land_tax" aria-describedby="HELPNAME1" placeholder="Remarks">
													<span id="span_remarks_land_tax"></span>
												</td>
												<td>
													<input required type="text" class="form-control eng_xxxs fg-darkCrimson" id="doc_ref_no_land_tax" name="doc_ref_no_land_tax" aria-describedby="HELPNAME1" placeholder="Document Reference Number">
													<span id="span_doc_ref_no_land_tax"></span>
												</td>
											</tr>
											<tr>
												<td>4</td>
												<td>AadharCard</td>
												<td>
													<div class="form-group">   
														<input type="file" class="form-control-file" id="aadhr_file" name="fileupload">
														<span id="span_aadhr_file"></span>
													</div>
												</td>
												<td>
													<input required type="text" class="form-control eng_xxxs fg-darkCrimson" id="remarks_aadhr" name="remarks_aadhr" aria-describedby="HELPNAME1" placeholder="Remarks">
													<span id="span_remarks_aadhr"></span>
												</td>
												<td>
													<input required type="text" class="form-control eng_xxxs fg-darkCrimson" id="doc_ref_no_aadhr" name="doc_ref_no_aadhr" aria-describedby="HELPNAME1" placeholder="Document Reference Number">
													<span id="span_doc_ref_no_aadhr"></span>
												</td>
											</tr>
											<tr>
												<td>5</td>
												<td>Pattayam</td>
												<td>
													<div class="form-group">   
														<input type="file" class="form-control-file" id="file_pattayam" name="fileupload">
														<span id="span_file_pattayam"></span>
													</div>
												</td>
												<td>
													<input required type="text" class="form-control eng_xxxs fg-darkCrimson" id="remarks_pattayam" name="remarks_pattayam" aria-describedby="HELPNAME1" placeholder="Remarks">
													<span id="span_remarks_pattayam"></span>
												</td>
												<td>
													<input required type="text" class="form-control eng_xxxs fg-darkCrimson" id="doc_ref_no_pattayam" name="doc_ref_no_pattayam" aria-describedby="HELPNAME1" placeholder="Document Reference Number">
													<span id="span_doc_ref_no_pattayam"></span>
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
											<button  id="saveBtn" class="btn btn-sm btn-flat eng_xxxs savbtn fg-lightGray px-3" onClick="validate_form_attach()"><svg class="svg-inline--fa fa-save fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="save" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M433.941 129.941l-83.882-83.882A48 48 0 0 0 316.118 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h352c26.51 0 48-21.49 48-48V163.882a48 48 0 0 0-14.059-33.941zM224 416c-35.346 0-64-28.654-64-64 0-35.346 28.654-64 64-64s64 28.654 64 64c0 35.346-28.654 64-64 64zm96-304.52V212c0 6.627-5.373 12-12 12H76c-6.627 0-12-5.373-12-12V108c0-6.627 5.373-12 12-12h228.52c3.183 0 6.235 1.264 8.485 3.515l3.48 3.48A11.996 11.996 0 0 1 320 111.48z"></path></svg><!-- <i class="fas fa-save"></i> Font Awesome fontawesome.com -->&nbsp;Save </button>

											
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
@include('serviceview.possession_script')
@endsection




