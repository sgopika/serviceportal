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
		<p class="eng_xxs px-3 fg-darkBrow customformrown"> Death Certificate </p>
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
									<div class="row customformrow">
										<div class="col-md-6 py-2">
											<input type="hidden" id="attchment_tab" name="attchment_tab" value="0">
                                            <label for="IDNAME" class="eng_xxxs fg-darkBrown">Name of Deceased </label>
										</div> <!-- ./col-md-6 -->	
                                        <div class="col-md-6 py-2">
                                            <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" name="deceasedName" id="deceasedName" aria-describedby="HELPNAME" placeholder="Name of Deceased">
											<span id="span_deceasedName"></span>
                                        
                                        </div> <!-- ./col-md-6 -->									
									</div> <!-- ./row -->
                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2">
                                            <label for="IDNAME1" class="eng_xxxs fg-darkBrown">Date of Death </label>
                                            <!-- <small id="HELPNAME1" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">
                                            <input type="date" class="form-control customform eng_xxxs fg-darkCrimson" id="dod" name="dod" aria-describedby="HELPNAME1" placeholder="Date of Death">
                                            <span id="span_dod"></span>
                                        </div> <!-- ./col-md-6 -->
                                    </div> <!-- ./row -->
                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2">
                                            <label for="IDNAME1" class="eng_xxxs fg-darkBrown">Gender</label>
                                            <!-- <small id="HELPNAME1" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">
                                        <label class="eng_xxxs fg-darkBrown paddingleft"><input type="radio" name="gen_deceased" checked> Female</label>
                                        <label class="eng_xxxs fg-darkBrown paddingleft"><input type="radio" name="gen_deceased" checked> Male</label>
                                        <label class="eng_xxxs fg-darkBrown paddingleft"><input type="radio" name="gen_deceased" checked> Others</label>
                                        <label class="eng_xxxs fg-darkBrown paddingleft"><input type="radio" name="gen_deceased" checked> Can not be Identified</label>
                                        <span id="span_gen_deceased"></span>
                                        
                                        </div> <!-- ./col-md-6 -->
                                    </div> <!-- ./row -->

                                                    
                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2">
                                            <label for="IDNAME1" class="eng_xxxs fg-darkBrown">Name of Mother/Wife </label>
                                            <!-- <small id="HELPNAME1" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">
                                            <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="fem_rel_name" name="fem_rel_name" aria-describedby="HELPNAME1" placeholder="Name of Mother/Wife">
                                            <span id="span_fem_rel_name"></span>
                                        
                                        </div> <!-- ./col-md-6 -->
                                    </div> <!-- ./row -->

                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2">
                                            <label for="IDNAME1" class="eng_xxxs fg-darkBrown"> Name of Father / Husband </label>
                                            <!-- <small id="HELPNAME1" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">
                                            <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="male_rel_name" name="male_rel_name" aria-describedby="HELPNAME1" placeholder=" Name of Father / Husband">
                                            <span id="span_male_rel_name"></span>
                                        
                                        </div> <!-- ./col-md-6 -->
                                    </div> <!-- ./row -->

                                    <div class="row customformrow">
                                        <div class="col-md-6 py-2">
                                            <label for="IDNAME1" class="eng_xxxs fg-darkBrown">Hospital </label>
                                            <!-- <small id="HELPNAME1" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
                                        </div> <!-- ./col-md-6 -->
                                        <div class="col-md-6 py-2">
                                                <select name="hospital" id="hospital" class="form-control  eng_xxxs fg-darkCrimson">
                                                                                    <option value="0">----</option>
                                                                                    <option value="1">Al-Arif Hospital </option>
                                                                                        <option value="2">Gov:Fort Hospital </option>
                                                                                        <option value="3">Sri Dhanwanthari Vaidyasala </option>
                                                                                        <option value="4">Pattom Thanupillai Memorial govt.Homeo Hospital </option>
                                                                                        <option value="5">Childrens Hospital </option>
                                                                                        <option value="6">S R K A C Hospital </option>
                                                                                        <option value="7">Keraleeya Ayurveda Samajam </option>
                                                                                        <option value="8">Mulamoottil Medical Centre </option>
                                                                                        <option value="9">Gowreesha Hospital </option>
                                                                                        <option value="10">G G Hospital </option>
                                                                                        <option value="11">Sree Uthradom Thirunal Mother and Baby Hospital </option>
                                                                                        <option value="12">S P Fort Hospital </option>
                                                                                        <option value="13">Sanatorium for chest Diseases  Pulayanarkotta </option>
                                                                                        <option value="14">Sree Chitra Tirunal Institute for Medical Science&amp;Technology </option>
                                                                                        <option value="15">Regional Cancer Centre </option>
                                                                                        <option value="16">Medical College Hospital </option>
                                                                                        <option value="17">S A T Hospital </option>
                                                                                        <option value="18">Kerala Institute Of Medical Sciences (KIMS) </option>
                                                                                        <option value="19">Samad I V F Hospital </option>
                                                                                        <option value="20">Government Women and Childrens Hospital </option>
                                                                                        <option value="21">Noorani Homeo Hospital </option>
                                                                                        <option value="22">National HospitalChest clinic </option>
                                                                                        <option value="50">Bernarda Nursing Home </option>
                                                                                        <option value="51">Nirmala Hospital </option>
                                                                                        <option value="52">Divyaprabha Eye Hospital </option>
                                                                                        <option value="53">Archana Hospital </option>
                                                                                        <option value="23">Parameswaravilasam Noorani Ayurvedavisha Vydyasala </option>
                                                                                        <option value="24">S R Hospital &amp;Surgical Centre </option>
                                                                                        <option value="25">Sreekrishna Hospital </option>
                                                                                        <option value="26">Ayurveda College Hospital for women and children </option>
                                                                                        <option value="27">P R S Hospital </option>
                                                                                        <option value="28">Geetha Hospital </option>
                                                                                        <option value="29">Government Mental Health Centre </option>
                                                                                        <option value="30">St.Jude Medical Centre </option>
                                                                                        <option value="31">Providence Hospital </option>
                                                                                        <option value="32">Sree Uthradamthirunal Hospital </option>
                                                                                        <option value="33">Kalyan Hospital </option>
                                                                                        <option value="34">Anand Hospital </option>
                                                                                        <option value="35">Santhwana Hospital </option>
                                                                                        <option value="36">E S I Hospital </option>
                                                                                        <option value="37">Vasudeva Vilasam Nursing Home </option>
                                                                                        <option value="38">Govt:Ayurveda College Panjakarma Hospital </option>
                                                                                        <option value="39">S K Hospital </option>
                                                                                        <option value="40">Chelsa Hospital </option>
                                                                                        <option value="41">Government Hospital Peroorkada </option>
                                                                                        <option value="42">B N V Hospital </option>
                                                                                        <option value="43">Military Hospital </option>
                                                                                        <option value="44">Anadiyil Hospital </option>
                                                                                        <option value="45">The India Hospital </option>
                                                                                        <option value="46">Govt.Homeopathic Medical College Hospital Iranimuttam </option>
                                                                                        <option value="47">Jubilee Memorial Hospital </option>
                                                                                        <option value="48">Arumana Hospital </option>
                                                                                        <option value="49">Dr.Govindans Hospital </option>
                                                                                        <option value="54">St.Annes Nursing Home </option>
                                                                                        <option value="55">Span Hospital </option>
                                                                                        <option value="56">Valsala Nursing Home </option>
                                                                                        <option value="57">K J K Hospital </option>
                                                                                        <option value="58">Chaithanya Eye Hospital </option>
                                                                                        <option value="59">Gov.Ayurveda College Hospital  </option>
                                                                                        <option value="60">Vanchinad Hospital </option>
                                                                                        <option value="61">Government General Hospital </option>
                                                                                        <option value="62">Lords Hospital </option>
                                                                                        <option value="63">Triveni Nursing Home </option>
                                                                                        <option value="64">Aisha Memorial Hospital </option>
                                                                                        <option value="65">Janatha Hospital </option>
                                                                                        <option value="66">Cosmopolitan Hospital </option>
                                                                                        <option value="67">Holy Cross Hospital </option>
                                                                                        <option value="68">Sivodaya Hospital </option>
                                                                                        <option value="69">Ananthapuri Hospital And Research Institute </option>
                                                                                        <option value="70">Railway Hospital </option>
                                                                                        <option value="71">Government Hospital Nemom </option>
                                                                                        <option value="72">Revathy Hospital </option>
                                                                                        <option value="74">Chithra Hospital </option>
                                                                                        <option value="75">Regional Institute of Ophthalmology </option>
                                                                                        <option value="76">CREDENCE HOSPITAL </option>
                                                                                        <option value="77">Rotary Hospital </option>
                                                                                        <option value="79">Cresent Metropolitan Hospital </option>
                                                                                        <option value="73">Saji Hospital </option>
                                                                                        <option value="80">Anugraha Hospital </option>
                                                                                        <option value="81">R R Childrens Hospital And Surgical Centre </option>
                                                                                        <option value="82">St.Jude Hospitals. Beemapally </option>
                                                                                        <option value="83">St.Jude Hospitals. Karamana </option>
                                                                                        <option value="84">Attukal Devi Institute Of Medical Sciences LTD </option>
                                                                                        <option value="85">District Model Hospital Peroorkada </option>
                                                                                        <option value="86">Chest Diseases Hospital </option>
                                                                                        <option value="87">Central Government Health Scheme (C G H S Branch), Kesavadasapuram </option>
                                                                                        <option value="88">Central Government Health Scheme (C G H S Branch), Vanchiyoor </option>
                                                                                        <option value="89">Al-Amin Hospital </option>
                                                                                        <option value="90">Colony Health Centre, Thumba </option>
                                                                                        <option value="91">Dental College, Thiruvananthapuram </option>
                                                                                        <option value="92">Sabarigiri Hospital </option>
                                                                                        <option value="93">Amritha Hospital, Manvila </option>
                                                                                        <option value="94">C B Hospital, Kulathoor </option>
                                                                                        <option value="95">Clinic For Mother and Child, Kulathoor </option>
                                                                                        <option value="96">Sree Narayana Hospital </option>
                                                                                        <option value="97">T M Medical Centre, Kulathoor </option>
                                                                                        <option value="98">A B Hospital </option>
                                                                                        <option value="99">St Marys Hospital </option>
                                                                                        <option value="100">Government Hospital, Sasthamangalam </option>
                                                                                        <option value="101">Sree Varaham Vanitha Samithy Hospital </option>
                                                                                        <option value="102">Sub Centre, Mannanthala </option>
                                                                                        <option value="103">Ayurveda College Maternity Hospital </option>
                                                                                        <option value="104">City Nursing Home </option>
                                                                                        <option value="105">T B Hospital </option>
                                                                                        <option value="106">Sree Chitra Medical Centre </option>
                                                                                        <option value="107">Geetha Integrated Nursing Home </option>
                                                                                        <option value="108">Dr K N Pais Clinic </option>
                                                                                        <option value="109">Gaeriatic Centre Poojappura </option>
                                                                                        <option value="110">R K Pillai Dispensary  Statue Road </option>
                                                                                        <option value="111">Raji Medical Centre </option>
                                                                                        <option value="112">Sushama Hospital Sanghummugham </option>
                                                                                        <option value="113">Homeopathic Hospital Karamana </option>
                                                                                        <option value="114">Central Governmevt Health Scheme(CGHS Branch) Sasthamangalam </option>
                                                                                        <option value="115">Geethanjali Hospital </option>
                                                                                        <option value="116">Amritha Hospital </option>
                                                                                        <option value="117">Attukal Bhagavathy Temple Trust Hospital(A B T T) </option>
                                                                                        <option value="118">Attupurath Hospital </option>
                                                                                        <option value="119">C D Hospital </option>
                                                                                        <option value="120">Central Prison Hospital </option>
                                                                                        <option value="121">Co-operative Group Hospital </option>
                                                                                        <option value="122">A V Hospital </option>
                                                                                        <option value="123">District Hospital,Thiruvananthapuram </option>
                                                                                        <option value="124">Government Hospital Karimattem </option>
                                                                                        <option value="125">Government Opthalmic Hospital </option>
                                                                                        <option value="126">Johnson Hospital </option>
                                                                                        <option value="127">K B M Hospital </option>
                                                                                        <option value="128">K J Hospital </option>
                                                                                        <option value="129">Government Dispensary, Valiyathura </option>
                                                                                        <option value="130">Khadeeja Hospital </option>
                                                                                        <option value="131">Medicare Centre, Muttada </option>
                                                                                        <option value="132">Modern Hospital, Valiyavila </option>
                                                                                        <option value="133">Mini Clinic, Kazhakuttam </option>
                                                                                        <option value="134">St. Philominas Dispensary, Poonthura </option>
                                                                                        <option value="135">Salvation Army Medical Centre, Kowdiyar </option>
                                                                                        <option value="136">Sathyavathy Nursing Home &amp; K R Research Centre </option>
                                                                                        <option value="137">Sreekrishna Pharmacy, Fort </option>
                                                                                        <option value="138">Sreekrishna Surgical Centre </option>
                                                                                        <option value="139">Sri Ram Hospital </option>
                                                                                        <option value="140">Upasana Clinic </option>
                                                                                        <option value="141">Vrindavan Clinic </option>
                                                                                        <option value="142">Vikram Sarabhai Space Centre Poly Clinic </option>
                                                                                        <option value="143">C J Hospital </option>
                                                                                        <option value="144">Mount Mission Hospital </option>
                                                                                        <option value="145">Devi Hospital </option>
                                                                                        <option value="146">Air Force Hospital </option>
                                                                                        <option value="149">St.Francis Medicare Hospital </option>
                                                                                        <option value="147">Beema Maheen Hospital </option>
                                                                                        <option value="148">Meditrina Hospital </option>
                                                                                        <option value="150">SUT Mother &amp; Baby Hospital </option>
                                                                                        <option value="151">SUT Royal Hospital </option>
                                                                                        <option value="152">Dr.Farook s Children And Women Hospital </option>
                                                                                        <option value="153">Taluk Hospital , Fort </option>
                                                                                        <option value="154">TSC Hospital </option>
                                                                                        <option value="155">B M SUT Hospital </option>
                                                                                        <option value="156">Ayurveda College Maternity Hospital Poojappura </option>
                                                                                        <option value="157">Salvation Army Medical Centre </option>
                                                                                        <option value="158">Nrithalayam Hospital </option>
                                                                                        <option value="159">Govt.Homeo Hospital </option>
                                                                                        <option value="160">Sree Sathyasai Hospital </option>
                                                                                        <option value="161">DR.Palpu Memorial Hospital </option>
                                                                                        <option value="162">N C Hospital </option>
                                                                                        <option value="163">State T B Centre </option>
                                                                                        <option value="164">PRAN FERTILITY AND WELL WOMAN CENTRE </option>
                                                                                        <option value="165">Punarjani Hospital </option>
                                                                                        <option value="166">SUT Academy of Medical Sciences Mother &amp; Child Hospital  </option>
                                                                                        <option value="167">Anjana Hospital </option>
                                                                                        <option value="168">Holy Cross Hospital </option>
                                                                                        <option value="169">S R K A C Hospital , Sasthamangalam </option>
                                                                                        hospital                             <option value="170">Valsala Hospital </option>
                                                                                        <option value="171">SP WELL FORT HOSPITAL </option>
                                                                                        <option value="172">TRIVANDRUM INSTITUTE OF PALLIATIVE SCIENCES </option>
                                                                                        <option value="173">Pulse Medicare Hospital , Mannanthala </option>
                                                    </select>
                                            <span id="span_hospital"></span>

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
@include('serviceview.death_certificate_script')
@endsection


