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
		<p class="eng_xxs px-3 fg-darkBrow customformrown"> Marriage Certificate </p>
	</div> <!-- ./col12 -->	
	<div class="col-12 md-whiteframe-2dp ">
		<div id="form_section">
		<div class="row customformrow row customformrow">
			<div class="col-md-12 py-2">
				<div class="row customformrow  py-1 px-2">
					<div class="col-md-12">
                    <input type="hidden" id="applctntabval" name="applctntabval" value="0">
							<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
								<li class="nav-item" role="presentation">
									<a id="appform" class="nav-link active" href="#pills-home-tab" data-toggle="pill"   role="tab" aria-controls="pills-home" aria-selected="true">Search</a>
								</li>
								<li class="nav-item" role="presentation">
									<a id="attach" class="nav-link" href="#pills-profile-tab" data-toggle="pill"   role="tab" aria-controls="pills-profile" aria-selected="false" >Application</a>
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
													<p class="text-center font-weight-bolder">APPLICATION FORM</p>
											</div>										
										</div>
                                        <div class="row customformrow">
                                                <div class="col-md-6 py-2">
                                                    <label for="IDNAME" class="eng_xxxs fg-darkBrown">District </label>
                                                    <!-- <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
                                                </div> <!-- ./col-md-6 -->
                                                <div class="col-md-6 py-2">
                                                            <select name="district" id="district" class="form-control customform eng_xxxs fg-darkCrimson">
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
                                                            <span id="span_district"></span>
                                                </div> <!-- ./col-md-6 -->
                                            </div> <!-- ./row -->

                                            <div class="row customformrow">
                                                <div class="col-md-6 py-2">
                                                    <label for="IDNAME1" class="eng_xxxs fg-darkBrown">Local Body Type </label>
                                                    <!-- <small id="HELPNAME1" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
                                                </div> <!-- ./col-md-6 -->
                                                <div class="col-md-6 py-2">
                                                    <select name="local_bdy_type" id="local_bdy_type" class="form-control customform eng_xxxs fg-darkCrimson">
						  		                    <option value="3" selected="">
                                                    Municipality</option>
                                                    <option value="4" selected="">Corporation</option>
                                                    <option value="5" selected="">Grama Panchayat</option>
                                                    </select>
                                                    <span id="span_local_bdy_type"></span>
                                                </div> <!-- ./col-md-6 -->
                                            </div> <!-- ./row -->

                                            <div class="row customformrow">
                                                <div class="col-md-6 py-2">
                                                    <label for="IDNAME2" class="eng_xxxs fg-darkBrown">Local Body </label>
                                                    <!-- <small id="HELPNAME2" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
                                                </div> <!-- ./col-md-6 -->
                                                <div class="col-md-6 py-2">
                                                    <select name="local_bdy" id="local_bdy" class="form-control customform eng_xxxs fg-darkCrimson">		
                                                            <option value="173" selected="">Attingal</option>
                                                            <option value="174" selected="">Nedumangad</option>
                                                            <option value="175" selected="">Neyyattinkara</option>
                                                            <option value="172" selected="">Varkala</option>
                                                    </select>
                                                    <span id="span_local_bdy"></span>
                                                </div> <!-- ./col-md-6 -->
                                            
                                            </div> <!-- ./row -->

                                            <div class="row customformrow">
                                                <div class="col-md-6 py-2 justify-content-center d-flex">
                                                    
                                                    <button onClick="reset_form()" class="btn btn-sm btn-flat eng_xxxs bg-lightOrange fg-darkCrimson"> <i class="fas fa-broom"></i>&nbsp;Reset </button> &nbsp;&nbsp;
                                                    </div>
                                                    <div class="col-md-6 py-2 justify-content-center d-flex">
                                                    
                                                    <button class="btn btn-sm btn-flat eng_xxxs bg-darkAmber fg-lightGray px-3" onClick="validate_search()"> <i class="fas fa-save"></i>&nbsp;Search </button>
                                                
                                                </div> <!-- ./col-md-6 -->
                                            </div> <!-- ./row -->

									<!-- </form> -->
								
								</div>
								
								<div class="tab-pane fade" id="pills-profile-tab"  role="tabpanel" aria-labelledby="pills-profile-tab">

                                    <div class="col-12 py-1 px-2 text-center bg-primary">
                                        <p class="eng_xxs px-3 text-white">Marriage Registration.</p>
                                      </div> <!-- ./col12 --> 

                                     <div class="row customformrow">
                                        <div class="col-md-6 py-2">
                                            <label for="IDNAME2" class="eng_xxxs fg-darkBrown">Certificate Type </label>
                                            <!-- <small id="HELPNAME2" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">
                                            <select name="certtype" id="certtype" class="form-control customform eng_xxxs fg-darkCrimson">        
                                                    <option value="1" selected="">Marriage Registration (Common)</option>
                                                    <option value="174" selected="">Marriage Registration (Hindu)</option>
                                                    
                                            </select>
                                            <span id="span_certtype"></span>
                                        </div> <!-- ./col-md-6 -->
                                    
                                    </div> <!-- ./row -->

									
                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2">
                                            <label for="IDNAME1" class="eng_xxxs fg-darkBrown">Date of Marriage </label>
                                            <!-- <small id="HELPNAME1" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">
                                            <input type="date" class="form-control customform eng_xxxs fg-darkCrimson" id="dom" name="dom" aria-describedby="HELPNAME1" placeholder="Date of Death">
                                            <span id="span_dom"></span>
                                        </div> <!-- ./col-md-6 -->
                                    </div> <!-- ./row -->
                                    

                                                    
                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2">
                                            <label for="IDNAME1" class="eng_xxxs fg-darkBrown">Name of  Husband</label>
                                            <!-- <small id="HELPNAME1" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">
                                            <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="husband_rel_name" name="husband_rel_name" aria-describedby="HELPNAME1" placeholder="Name of Husband">
                                            <span id="span_husband_rel_name"></span>
                                        
                                        </div> <!-- ./col-md-6 -->
                                    </div> <!-- ./row -->

                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2">
                                            <label for="IDNAME1" class="eng_xxxs fg-darkBrown">Name of Wife </label>
                                            <!-- <small id="HELPNAME1" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">
                                            <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="wife_rel_name" name="wife_rel_name" aria-describedby="HELPNAME1" placeholder="Name of Wife">
                                            <span id="span_wife_rel_name"></span>
                                        
                                        </div> <!-- ./col-md-6 -->
                                    </div> <!-- ./row -->


                                    

                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2">
                                            <label for="IDNAME1" class="eng_xxxs fg-darkBrown">Marriage place</label>
                                            <!-- <small id="HELPNAME1" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">
                                                <select name="mgplace" id="mgplace" class="form-control  eng_xxxs fg-darkCrimson">
                                                    <option value="0">----</option>
                                                                                    
                                                    </select>
                                            <span id="span_mgplace"></span>

                                        </div> <!-- ./col-md-6 -->
                                    </div> <!-- ./row -->

                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2">
                                            <label for="IDNAME1" class="eng_xxxs fg-darkBrown"> Registration Number </label>
                                            <!-- <small id="HELPNAME1" class="form-text eng_xxxxs text-muted"> additional in Registration Numberformation.</small> -->
                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">
                                            <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="reg_num" name="reg_num" aria-describedby="HELPNAME1" placeholder=" Registration Number">
                                            <span id="span_reg_num"></span>

                                        </div> <!-- ./col-md-6 -->
                                    </div> <!-- ./row -->

                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2">
                                            <label for="IDNAME1" class="eng_xxxs fg-darkBrown"> Key Number </label>
                                            <!-- <small id="HELPNAME1" class="form-text eng_xxxxs text-muted"> additional in Registration Numberformation.</small> -->
                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">
                                            <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="key_num" name="key_num" aria-describedby="HELPNAME1" placeholder=" Key Number">
                                            <span id="span_key_num"></span>

                                        </div> <!-- ./col-md-6 -->
                                    </div> <!-- ./row -->

                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2">
                                            <label for="IDNAME1" class="eng_xxxs fg-darkBrown"> Captcha </label>
                                            <!-- <small id="HELPNAME1" class="form-text eng_xxxxs text-muted"> additional in Registration Numberformation.</small> -->
                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">
                                        <span>
                                            <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="catp_num" name="catp_num" aria-describedby="HELPNAME1" placeholder=" 123">
                                        
                                        </span>
                                            <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="get_catp_num" name="get_catp_num" aria-describedby="HELPNAME1" placeholder=" Enter the number displayed above">
                                            <span id="span_get_catp_num"></span>

                                        </div> <!-- ./col-md-6 -->
                                    </div> <!-- ./row -->

                    

                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2 justify-content-center d-flex">
                                            
                                            <button onClick="reset_form()" class="btn btn-sm btn-flat eng_xxxs bg-lightOrange fg-darkCrimson"> <i class="fas fa-broom"></i>&nbsp;Reset </button> &nbsp;&nbsp;
                                            </div>
                                            <div class="col-md-6 py-2 justify-content-center d-flex">
                                            
                                            <button onClick="register_form()" class="btn btn-sm btn-flat eng_xxxs bg-darkAmber fg-lightGray px-3"> <i class="fas fa-save"></i>&nbsp;Save </button>
                                        
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
@include('serviceview.marriagecertificatejs')
@endsection


