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
		<p class="eng_xxs px-3 fg-darkBrow customformrown"> Calicut University  </p>
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
									<a id="attach" class="nav-link" href="#pills-profile-tab" data-toggle="pill"   role="tab" aria-controls="pills-profile" aria-selected="false" >Fee details</a>
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link" href="#pills-contact-tab" data-toggle="pill"   role="tab" aria-controls="pills-contact" aria-selected="false">Payment</a>
								</li>
							</ul>
							<div class="tab-content" id="pills-tabContent">
								
								<div class="tab-pane fade show active" id="pills-home-tab" role="tabpanel" aria-labelledby="pills-home-tab">
									<!-- <form id="app_form"> -->
										<div class="row customformrow">
											<div class="col-md-12">
													<p class="text-center font-weight-bolder">Personal Details</p>
											</div>										
										</div>
                                            <div class="row customformrow">
                                                <div class="col-md-6 py-2">
                                                    <label for="IDNAME" class="eng_xxxs fg-darkBrown">Purpose </label>
                                                    <!-- <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
                                                </div> <!-- ./col-md-6 -->
                                                <div class="col-md-6 py-2">
                                                            <select name="purpose" id="purpose" class="form-control customform eng_xxxs fg-darkCrimson">
																<option value="1">Thiruvananthapuram								</option>
																<option value="2">Kollam								</option>
																<option value="3">Pathanamthitta								</option>
																<option value="4">Alappuzha								</option>
																<option value="5">Kottayam								</option>
																<option value="6">Idukki								</option>
																<option value="7">Ernakulam								</option>
																<option value="8">Thrissur								</option>
																<option value="9">Palakkad								</option>
																<option value="10">Malappuram								</option>
																<option value="11">Kozhikkode								</option>
																<option value="12">Wayanad								</option>
																<option value="13">Kannur								</option>
																<option value="14">Kasaragod								</option>
															</select>
                                                            <span id="span_purpose"></span>
                                                </div> <!-- ./col-md-6 -->
                                            </div> <!-- ./row -->

                                            <div class="row customformrow">
                                                <div class="col-md-6 py-2">
                                                    <label for="IDNAME1" class="eng_xxxs fg-darkBrown">Year of Pass </label>
                                                    <!-- <small id="HELPNAME1" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
                                                </div> <!-- ./col-md-6 -->
                                                <div class="col-md-6 py-2">
                                                    <select name="yr_pass" id="yr_pass" class="form-control customform eng_xxxs fg-darkCrimson">
						  		                    <option value="3" selected="">
                                                    Municipality</option>
                                                    <option value="4" selected="">Corporation</option>
                                                    <option value="5" selected="">Grama Panchayat</option>
                                                    </select>
                                                    <span id="span_yr_pass"></span>
                                                </div> <!-- ./col-md-6 -->
                                            </div> <!-- ./row -->

                                            <div class="row customformrow">
                                                <div class="col-md-6 py-2">
                                                    <label for="IDNAME2" class="eng_xxxs fg-darkBrown">Board </label>
                                                    <!-- <small id="HELPNAME2" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
                                                </div> <!-- ./col-md-6 -->
                                                <div class="col-md-6 py-2">
                                                    <select name="board" id="board" class="form-control customform eng_xxxs fg-darkCrimson">		
                                                            <option value="173" selected="">Attingal</option>
                                                            <option value="174" selected="">Nedumangad</option>
                                                            <option value="175" selected="">Neyyattinkara</option>
                                                            <option value="172" selected="">Varkala</option>
                                                    </select>
                                                    <span id="span_board"></span>
                                                </div> <!-- ./col-md-6 -->
                                            
                                            </div> <!-- ./row -->

                                            <div class="row customformrow">
                                                <div class="col-md-6 py-2">
                                                   
                                                    <label for="IDNAME" class="eng_xxxs fg-darkBrown">Register Number </label>
                                                </div> <!-- ./col-md-6 -->	
                                                <div class="col-md-6 py-2">
                                                    <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" name="reg_number" id="reg_number" aria-describedby="HELPNAME" placeholder="Register Number">
                                                    <span id="span_reg_number"></span>
                                                
                                                              </div> <!-- ./col-md-6 -->									
									        </div> <!-- ./row -->

                                            <div class="row customformrow">
                                                <div class="col-md-6 py-2">
                                                   
                                                    <label for="IDNAME" class="eng_xxxs fg-darkBrown">Name </label>
                                                </div> <!-- ./col-md-6 -->	
                                                <div class="col-md-6 py-2">
                                                    <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" name="name" id="name" aria-describedby="HELPNAME" placeholder="Name">
                                                    <span id="span_name"></span>
                                                
                                                </div> <!-- ./col-md-6 -->									
									        </div> <!-- ./row -->

                                            <div class="row customformrow">
                                                <div class="col-md-6 py-2">
                                                   
                                                    <label for="IDNAME" class="eng_xxxs fg-darkBrown">Date of birth </label>
                                                </div> <!-- ./col-md-6 -->	
                                                <div class="col-md-6 py-2">
                                                    <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" name="dob" id="dob" aria-describedby="HELPNAME" placeholder="Date of birth">
                                                    <span id="span_dob"></span>
                                                
                                                </div> <!-- ./col-md-6 -->									
									        </div> <!-- ./row -->

                                            <div class="row customformrow">
                                                <div class="col-md-6 py-2">
                                                   
                                                    <label for="IDNAME" class="eng_xxxs fg-darkBrown">Address </label>
                                                </div> <!-- ./col-md-6 -->	
                                                <div class="col-md-6 py-2">
                                                <textarea class="form-control customform eng_xxxs fg-darkCrimson" name="addr" id="addr" aria-describedby="HELPNAME" placeholder="Address"></textarea>
                                                    
                                                    <span id="span_addr"></span>
                                                
                                                </div> <!-- ./col-md-6 -->									
									        </div> <!-- ./row -->

                                            <div class="row customformrow">
                                                <div class="col-md-6 py-2">
                                                   
                                                    <label for="IDNAME" class="eng_xxxs fg-darkBrown">Mobile Number </label>
                                                </div> <!-- ./col-md-6 -->	
                                                <div class="col-md-6 py-2">
                                                    <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" name="Mob" id="Mob" aria-describedby="HELPNAME" placeholder="Mobile Number">
                                                    <span id="span_Mob"></span>
                                                
                                                </div> <!-- ./col-md-6 -->									
									        </div> <!-- ./row -->

                                            <div class="row customformrow">
                                                <div class="col-md-6 py-2">
                                                   
                                                    <label for="IDNAME" class="eng_xxxs fg-darkBrown">Email </label>
                                                </div> <!-- ./col-md-6 -->	
                                                <div class="col-md-6 py-2">
                                                    <input type="email" class="form-control customform eng_xxxs fg-darkCrimson" name="Email" id="Email" aria-describedby="HELPNAME" placeholder="Email">
                                                    <span id="span_Email"></span>
                                                
                                                </div> <!-- ./col-md-6 -->									
									        </div> <!-- ./row -->

                                            <div class="row customformrow">
                                                <div class="col-md-6 py-2 justify-content-center d-flex">
                                                    
                                                    <button onClick="reset_form()" class="btn btn-sm btn-flat eng_xxxs bg-lightOrange fg-darkCrimson"> <i class="fas fa-broom"></i>&nbsp;Reset </button> &nbsp;&nbsp;
                                                    </div>
                                                    <div class="col-md-6 py-2 justify-content-center d-flex">
                                                    <input type="hidden" id="applctntabval" name="applctntabval" value="0">
                                                    <button class="btn btn-sm btn-flat eng_xxxs bg-darkAmber fg-lightGray px-3" onClick="register_form()"> <i class="fas fa-save"></i>&nbsp;Save </button>
                                                
                                                </div> <!-- ./col-md-6 -->
                                            </div> <!-- ./row -->

									<!-- </form> -->
								
								</div>
								
								<div class="tab-pane fade" id="pills-profile-tab"  role="tabpanel" aria-labelledby="pills-profile-tab">
									<div class="row customformrow">
										<div class="col-md-6 py-2">
											<input type="hidden" id="attchment_tab" name="attchment_tab" value="0">
                                            <label for="IDNAME" class="eng_xxxs fg-darkBrown">Amount </label>
										</div> <!-- ./col-md-6 -->	
                                        <div class="col-md-6 py-2">
                                            <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" name="Amount" id="Amount" aria-describedby="HELPNAME" placeholder="Amount">
											<span id="span_Amount"></span>
                                        
                                        </div> <!-- ./col-md-6 -->									
									</div> <!-- ./row -->
                                    <div class="row customformrow">
										<div class="col-md-12 py-2 fltcentre">
										    <label for="IDNAME" class="eng_xxxs fg-darkBrown">You will not able to edit the details once You click the proceed button, Make sure all entries made are correct<br>
                                            Transaction fee charged would be borne by payee for any payment and would not be refunded/reversal of any transaction  </label>
			                                <br><span><label><input type="checkbox" value=""><span class="sdanger">*</span></label></span><label id="HELPNAME" class="form-text eng_xxxxs text-muted"> I have checked the details including Amount Rs. <label id="rs_rupee"></label> and I agree to above terms, Please proceed for payment.</label>
                                        
                                        </div> <!-- ./col-md-6 -->									
									</div> <!-- ./row -->
                                  

                                  
                    

                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2 justify-content-center d-flex">
                                            
                                            <button onClick="reset_form()" class="btn btn-sm btn-flat eng_xxxs bg-lightOrange fg-darkCrimson"> <i class="fas fa-broom"></i>&nbsp;Reset </button> &nbsp;&nbsp;
                                            </div>
                                            <div class="col-md-6 py-2 justify-content-center d-flex">
                                            
                                            <button onClick="register_form()" class="btn btn-sm btn-flat eng_xxxs bg-darkAmber fg-lightGray px-3"> <i class="fas fa-save"></i>&nbsp;Proceed </button>
                                        
                                        </div> <!-- ./col-md-6 -->
                                    </div> <!-- ./row -->
								
									
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
@include('serviceview.calicut_university_chellan_script')
@endsection



