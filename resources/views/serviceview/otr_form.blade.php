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
		<p class="eng_xxs px-3 fg-darkBrown"><b> New Registration</b> </p>
		<p class="eng_xxs px-3 fg-darkBrown"> <span class="text-danger">* Mandatory Fields</span> <span class="text-primary">* Either One Is Mandatory.</span></p>
	</div> <!-- ./col12 -->	
	
	<div class="col-12 md-whiteframe-2dp ">
	<form>
		<div id="form_section">
		<div class="row customformrow">
			<div class="col-md-6 py-2">
				<label for="name" class="eng_xxxs fg-darkBrown">1.Name of person for whom service is sought<span class="text-danger">*</span> </label>
				<!-- <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
			</div> <!-- ./col-md-6 -->
			<div class="col-md-6 py-2">
			    <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="name" aria-describedby="HELPNAME" maxlength="99" required placeholder="Name of person for whom service is sought">
			<label for="nameerror" id="nameerror" class="text-danger"></label>
			</div> <!-- ./col-md-6 -->
		</div> <!-- ./row -->

		<div class="row customformrow">
			<div class="col-md-6 py-2">
				<label for="gender" class="eng_xxxs fg-darkBrown">2.Male/Female<span class="text-danger">*</span> </label>
				<!-- <small id="HELPNAME1" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
			</div> <!-- ./col-md-6 -->
			<div class="col-md-6 py-2">
			<label for="Male" class="eng_xxxs fg-darkBrown">Male </label>
			    <input type="radio" name='gender' value="M" id="male" aria-describedby="HELPNAME1" checked required>
			<label for="Female" class="eng_xxxs fg-darkBrown">Female </label>
			    <input type="radio" name='gender' value="F" id="female" aria-describedby="HELPNAME1" required>
			<label for="Other" class="eng_xxxs fg-darkBrown">Other </label>
			    <input type="radio" name='gender' value="O" id="other" aria-describedby="HELPNAME1" required>
			</div> <!-- ./col-md-6 -->
		</div> <!-- ./row -->

		<div class="row customformrow">
			<div class="col-md-3 py-2">
				<label for="DOB" class="eng_xxxs fg-darkBrown">3.a) Date of Birth<span class="text-danger">*</span> </label>
				<!-- <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
			</div> <!-- ./col-md-6 -->
			<div class="col-md-3 py-2">
			    <input type="date" class="form-control customform eng_xxxs fg-darkCrimson" id="dob" aria-describedby="HELPNAME" required>
			</div> <!-- ./col-md-6 -->
			<div class="col-md-3 py-2">
				<label for="age" class="eng_xxxs fg-darkBrown">3.b) Age<span class="text-danger">*</span> </label>
				<!-- <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
				<label for="ageError" id="ageError" class="text-danger"></label>
			</div> <!-- ./col-md-6 -->
			<div class="col-md-3 py-2">
			    <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="age" aria-describedby="HELPNAME" maxlength="3" max="125" placeholder="Age will be appear here" required>
			</div> <!-- ./col-md-6 -->
		</div> <!-- ./row -->

		<div class="row customformrow">
			<div class="col-md-6 py-2">
				<label for="photo" class="eng_xxxs fg-darkBrown">Upload Photo </label>
				<small id="photo" class="form-text eng_xxxxs text-muted"> (Photo must be in jpg format and max size is 20Kb)</small>
			</div> <!-- ./col-md-3 -->
			<div class="col-md-4 py-2">
			    <input type="file" name='photo' class="form-control customform eng_xxxs fg-darkCrimson" id="profile_photo" aria-describedby="HELPNAME">
				<label for="photoerror" id="photoerror" class="text-danger"></label>
			</div> <!-- ./col-md-3 -->
			<div class="col-md-2 py-2">
			<button id="clear" type="button" class="btn btn-sm btn-flat eng_xxxs bg-lightOrange fg-darkCrimson"> <i class="fas fa-broom"></i>&nbsp;Clear </button> &nbsp;&nbsp;
			</div> <!-- ./col-md-3 -->
		</div> <!-- ./row -->

		

	<div class="row customformrow">
	<div class="col-md-6 py-1 px-2 ">
		<p class="eng_xxs px-3 fg-darkBrown"> <b>4.Present Address</b> </p>
		<div class="col-md-12 py-2">
				<label for="HoseNo" class="eng_xxxs fg-darkBrown"> House No<span class="text-danger">*</span> </label>
				<input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="HouseNo" aria-describedby="HELPNAME" placeholder="House Number" required>
				<label for="HouseNoerror" id="HouseNoerror" class="text-danger"></label>
				<!-- <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
		</div> 
		<div class="col-md-12 py-2">
				<label for="HouseName" class="eng_xxxs fg-darkBrown"> House Name<span class="text-danger">*</span> </label>
				<input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="HouseName" aria-describedby="HELPNAME" placeholder="House Name" maxlength="50" required>
				<!-- <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
				<label for="HouseNameerror" id="HouseNameerror" class="text-danger"></label>
		</div> 
		<div class="col-md-12 py-2">
				<label for="Locality" class="eng_xxxs fg-darkBrown"> Locality<span class="text-danger">*</span> </label>
				<input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="Locality" aria-describedby="HELPNAME" placeholder="Locality" maxlength="50" required>
				<label for="LocalityError" id="LocalityError" class="text-danger"></label>
		</div> 
		<div class="col-md-12 py-2">
				<label for="PostOffice" class="eng_xxxs fg-darkBrown"> Post Office<span class="text-danger">*</span> </label>
				<input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="PostOffice" aria-describedby="HELPNAME" placeholder="Post Office" maxlength="50" required>
				<label for="PostOfficeError" id="PostOfficeError" class="text-danger"></label>
		</div> 
		<div class="col-md-12 py-2">
				<label for="Pincode" class="eng_xxxs fg-darkBrown"> Pincode<span class="text-danger">*</span> </label>
				<input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="Pincode" aria-describedby="HELPNAME" placeholder="Pincode" minlength="6" maxlength="6" required>
				<label for="PincodeError" id="PincodeError" class="text-danger"></label>
		</div> 
		<div class="col-md-12 py-2">
				<label for="District" class="eng_xxxs fg-darkBrown"> District<span class="text-danger">*</span> </label>
				<select class="form-control customform eng_xxxs fg-darkCrimson" id="District" aria-describedby="HELPNAME" required>
					<option value="">Select District</option>
					<option value="10">Malappuram</option>
				</select>
				<label for="DistrictError" id="DistrictError" class="text-danger"></label>
		</div> 
		<div class="col-md-12 py-2">
				<label for="Taluk" class="eng_xxxs fg-darkBrown"> Taluk<span class="text-danger">*</span> </label>
				<select class="form-control customform eng_xxxs fg-darkCrimson" id="Taluk" aria-describedby="HELPNAME" required>
					<option value="">Select Taluk</option>
					<option value="78">Mankada</option>
				</select>		
				<label for="TalukError" id="TalukError" class="text-danger"></label>
			</div> 
		<div class="col-md-12 py-2">
				<label for="Village" class="eng_xxxs fg-darkBrown"> Village<span class="text-danger">*</span> </label>
				<select class="form-control customform eng_xxxs fg-darkCrimson" id="Village" aria-describedby="HELPNAME" required>
					<option value="">Select Village</option>
					<option value="153">Valamboor</option>
				</select>	
				<label for="VillageError" id="VillageError" class="text-danger"></label>	
			</div> 
		<div class="col-md-12 py-2">
				<label for="LType" class="eng_xxxs fg-darkBrown"> Local Body Type<span class="text-danger">*</span> </label>
				<select class="form-control customform eng_xxxs fg-darkCrimson" id="LType" aria-describedby="HELPNAME" required>
					<option value="">Select Local Body Type</option>
					<option value="110">Panchayath</option>
				</select>
				<label for="LTypeError" id="LTypeError" class="text-danger"></label>			
					</div> 
		<div class="col-md-12 py-2">
				<label for="LBody" class="eng_xxxs fg-darkBrown"> Local Body<span class="text-danger">*</span> </label>
				<select class="form-control customform eng_xxxs fg-darkCrimson" id="LBody" aria-describedby="HELPNAME" required>
					<option value="">Select Local Body</option>
					<option value="12">Angadippuram</option>
				</select>
				<label for="LBodyError" id="LBodyError" class="text-danger"></label>					
		</div> 
	</div>
	<div class="col-md-6 py-1 px-2 ">
		<p class="eng_xxs px-3 fg-darkBrown"> <b>5.Permanent Address</b> <input type="checkbox" id="copy_address">Same as Present Address </p>
		<div class="col-md-12 py-2">
				<label for="HoseNo" class="eng_xxxs fg-darkBrown"> House No<span class="text-danger">*</span> </label>
				<input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="CHouseNo" aria-describedby="HELPNAME" placeholder="House Number" required>
				<!-- <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
				<label for="CHouseNoerror" id="CHouseNoerror" class="text-danger"></label>
		</div> 
		<div class="col-md-12 py-2">
				<label for="CHouseName" class="eng_xxxs fg-darkBrown"> House Name<span class="text-danger">*</span> </label>
				<input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="CHouseName" aria-describedby="HELPNAME" placeholder="House Name" required>
				<label for="CHouseNameerror" id="CHouseNameerror" class="text-danger"></label>
				<!-- <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
		</div> 
		<div class="col-md-12 py-2">
				<label for="CLocality" class="eng_xxxs fg-darkBrown"> Locality<span class="text-danger">*</span> </label>
				<input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="CLocality" aria-describedby="HELPNAME" placeholder="Locality" maxlength="50" required>
				<label for="CLocalityError" id="CLocalityError" class="text-danger"></label>
		</div> 
		<div class="col-md-12 py-2">
				<label for="CPostOffice" class="eng_xxxs fg-darkBrown"> Post Office<span class="text-danger">*</span> </label>
				<input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="CPostOffice" aria-describedby="HELPNAME" placeholder="Post Office" maxlength="50" required>
				<label for="CPostOfficeError" id="CPostOfficeError" class="text-danger"></label>
		</div> 
		<div class="col-md-12 py-2">
				<label for="CPincode" class="eng_xxxs fg-darkBrown"> Pincode<span class="text-danger">*</span> </label>
				<input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="CPincode" aria-describedby="HELPNAME" placeholder="Pincode" minlength="6" maxlength="6" required>
				<label for="CPincodeError" id="CPincodeError" class="text-danger"></label>
		</div> 
		<div class="col-md-12 py-2">
				<label for="CDistrict" class="eng_xxxs fg-darkBrown"> District<span class="text-danger">*</span> </label>
				<select class="form-control customform eng_xxxs fg-darkCrimson" id="CDistrict" aria-describedby="HELPNAME" required>
					<option value="">Select District</option>
				</select>
				<label for="CDistrictError" id="CDistrictError" class="text-danger"></label>
		</div> 
		<div class="col-md-12 py-2">
				<label for="CTaluk" class="eng_xxxs fg-darkBrown"> Taluk<span class="text-danger">*</span> </label>
				<select class="form-control customform eng_xxxs fg-darkCrimson" id="CTaluk" aria-describedby="HELPNAME" required>
					<option value="">Select Taluk</option>
				</select>		
				<label for="CTalukError" id="CTalukError" class="text-danger"></label>
			</div> 
		<div class="col-md-12 py-2">
				<label for="CVillage" class="eng_xxxs fg-darkBrown"> Village<span class="text-danger">*</span> </label>
				<select class="form-control customform eng_xxxs fg-darkCrimson" id="CVillage" aria-describedby="HELPNAME" required>
					<option value="">Select Village</option>
				</select>	
				<label for="CVillageError" id="CVillageError" class="text-danger"></label>		
			</div> 
		<div class="col-md-12 py-2">
				<label for="CLType" class="eng_xxxs fg-darkBrown"> Local Body Type<span class="text-danger">*</span> </label>
				<select class="form-control customform eng_xxxs fg-darkCrimson" id="CLType" aria-describedby="HELPNAME" required>
					<option value="">Select Local Body Type</option>
				</select>
				<label for="CLTypeError" id="CLTypeError" class="text-danger"></label>		
					</div> 
		<div class="col-md-12 py-2">
				<label for="CLBody" class="eng_xxxs fg-darkBrown"> Local Body<span class="text-danger">*</span> </label>
				<select class="form-control customform eng_xxxs fg-darkCrimson" id="CLBody" aria-describedby="HELPNAME" required>
					<option value="">Select Local Body</option>
				</select>	
				<label for="CLBodyError" id="CLBodyError" class="text-danger"></label>			
		</div> 
	</div>
			
			
			
	</div> <!-- ./row -->
	<div class="col-12 py-1 px-2 ">
		<p class="eng_xxs px-3 fg-darkBrown"><b> Personal Details</b> </p>
	</div> <!-- ./col12 -->	
	<div class="row customformrow">
	<div class="col-md-4 py-2">
				<label for="FatherName" class="eng_xxxs fg-darkBrown"> 6.Father's Name<span class="text-primary">*</span> </label>
				<input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="FatherName" aria-describedby="HELPNAME" placeholder="Father's Name">
				<!-- <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
				<label for="FatherNameError" id="FatherNameError" class="text-danger"></label>
		</div> 
		<div class="col-md-4 py-2">
				<label for="RelFather" class="eng_xxxs fg-darkBrown"> 7.Religion of Father </label>
				<select class="form-control customform eng_xxxs fg-darkCrimson" id="RelFather" aria-describedby="HELPNAME">
					<option value="">Select One</option>
				</select>
				<!-- <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
		</div> 
		<div class="col-md-4 py-2">
				<label for="HoseNo" class="eng_xxxs fg-darkBrown"> 8.Caste of Father </label>
				<select class="form-control customform eng_xxxs fg-darkCrimson" id="CasFather" aria-describedby="HELPNAME">
					<option value="">Select One</option>
				</select>				<!-- <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
		</div> 
	<div class="col-md-4 py-2">
				<label for="MotherName" class="eng_xxxs fg-darkBrown"> 9.Mother's Name<span class="text-primary">*</span> </label>
				<input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="MotherName" aria-describedby="HELPNAME" placeholder="Mother's Name">
				<label for="MotherNameError" id="MotherNameError" class="text-danger"></label>
				<!-- <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
		</div> 
		<div class="col-md-4 py-2">
				<label for="RelMother" class="eng_xxxs fg-darkBrown"> 10.Religion of Mother </label>
				<select class="form-control customform eng_xxxs fg-darkCrimson" id="RelMother" aria-describedby="HELPNAME">
					<option value="">Select One</option>
				</select>				<!-- <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
		</div> 
		<div class="col-md-4 py-2">
				<label for="CasMother" class="eng_xxxs fg-darkBrown"> 11.Caste of Mother </label>
				<select class="form-control customform eng_xxxs fg-darkCrimson" id="CasMother" aria-describedby="HELPNAME">
					<option value="">Select One</option>
				</select>				<!-- <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
		</div> 
	<div class="col-md-4 py-2">
				<label for="MaritalStatus" class="eng_xxxs fg-darkBrown"> 	12.Marital Status </label>
				<select class="form-control customform eng_xxxs fg-darkCrimson" name="MaritalStatus" id="MaritalStatus" aria-describedby="HELPNAME">
					<option value="">Select One</option>
				</select>				<!-- <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
		</div> 
		<div class="col-md-4 py-2">
				<label for="SpouseName" class="eng_xxxs fg-darkBrown"> 13.Name of Spouse </label>
				<input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="SpouseName" name="SpouseName" aria-describedby="HELPNAME" maxlength="99" placeholder="Name of Spouse">
				<label for="SpouseNameError" id="SpouseNameError" class="text-danger"></label>
				<!-- <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
		</div> 
		<div class="col-md-4 py-2">
				<label for="Guardian" class="eng_xxxs fg-darkBrown"> 14.Guardian<span class="text-primary">*</span> </label>
				<input type="text" class="form-control customform eng_xxxs fg-darkCrimson" name="Guardian" id="Guardian" aria-describedby="HELPNAME" maxlength="99" placeholder="Guardian's Name">
				<label for="GuardianNameError" id="GuardianNameError" class="text-danger"></label>
				<!-- <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
		</div> 
	<div class="col-md-4 py-2">
				<label for="NoYrs" class="eng_xxxs fg-darkBrown"> 15.No of years
(Residing at Present Address)</label>
				<input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="NoYrs" aria-describedby="HELPNAME" placeholder="No of years 
Residing at Present Address" maxlength="3">
				<label for="NoYrsError" id="NoYrsError" class="text-danger"></label>
				<!-- <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
		</div> 
		<div class="col-md-4 py-2">
				<label for="LandPhone" class="eng_xxxs fg-darkBrown"> 16.Phone(Res with STDcode) </label>
				<input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="LandPhone" name="LandPhone" aria-describedby="HELPNAME" placeholder="Phone with STDcode">
				<label for="LandPhoneError" id="LandPhoneError" class="text-danger"></label>
				<!-- <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
		</div> 
		<div class="col-md-4 py-2">
				<label for="Mobile" class="eng_xxxs fg-darkBrown"> 17.Mobile: </label>
				<input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="mobile" name="Mobile" aria-describedby="HELPNAME" placeholder="Mobile Number" maxlength="10" required>
				<!-- <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
				<label for="mobileerror" id="mobileerror" class="text-danger"></label>
			</div> 
		<div class="col-md-4 py-2">
				<label for="Email" class="eng_xxxs fg-darkBrown"> 18.Email </label>
				<input type="email" class="form-control customform eng_xxxs fg-darkCrimson" id="email" aria-describedby="HELPNAME" placeholder="Email" required>
				<!-- <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
				<div id="emailerror" class="text-danger"></div>
			</div> 
		
		<div class="col-md-4 py-2">
				<label for="RationNo" class="eng_xxxs fg-darkBrown"> 	19.Ration Card No </label>
				<input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="RationNo" aria-describedby="HELPNAME" placeholder="Ration Card Number">
				<label for="RationNoError" id="RationNoError" class="text-danger"></label>
				<!-- <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
		</div> 
	<div class="col-md-4 py-2">
				<label for="DLicence" class="eng_xxxs fg-darkBrown"> 20.Driving License No</label>
				<input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="DLicence" aria-describedby="HELPNAME" placeholder="Driving License Number">
				<label for="DLicenceError" id="DLicenceError" class="text-danger"></label>
				<!-- <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
		</div> 
		<div class="col-md-4 py-2">
				<label for="EleId" class="eng_xxxs fg-darkBrown"> 	21.Election ID Card No </label>
				<input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="EleId" aria-describedby="HELPNAME" placeholder="Election ID Card Number">
				<label for="EleIdError" id="EleIdError" class="text-danger"></label>
				<!-- <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
		</div> 
		<div class="col-md-4 py-2">
				<label for="PassportNo" class="eng_xxxs fg-darkBrown"> 22.Passport No </label>
				<input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="PassportNo" aria-describedby="HELPNAME" placeholder="Passport Number">
				<!-- <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
				<label for="passportError" id="passportError" class="text-danger"></label>
			</div> 
	<div class="col-md-4 py-2">
				<label for="Aadhaar" class="eng_xxxs fg-darkBrown"> 23.Aadhaar No</label>
				<input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="Aadhaar" aria-describedby="HELPNAME" placeholder="Aadhaar Number">
				<!-- <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
				<label for="adharerror" id="adharerror" class="text-danger"></label>
			</div> 
		<div class="col-md-4 py-2">
				<label for="SSLC" class="eng_xxxs fg-darkBrown"> 	24.SSLC Registration Number </label>
				<input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="SSLC" name="SSLC" aria-describedby="HELPNAME" minlength="5" maxlength="10" placeholder="SSLC Registration Number">
				<label for="SSLCError" id="SSLCError" class="text-danger"></label>
				<!-- <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
		</div> 
		<div class="col-md-4 py-2">
				<label for="SslcYear" class="eng_xxxs fg-darkBrown"> 	25.SSLC Year </label>
				<input type="text" class="form-control customform eng_xxxs fg-darkCrimson" name="SslcYear" id="SslcYear" aria-describedby="HELPNAME" maxlength="4" placeholder="SSLC passed year">
				<label for="SSLCYearError" id="SSLCYearError" class="text-danger"></label>
				<!-- <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> additional information.</small> -->
		</div> 
		</div> <!-- ./row -->

		<div class="row customformrow">
			<div class="col-md-6 py-2 justify-content-center d-flex">
			<button type="submit" id="save" class="btn btn-sm btn-flat eng_xxxs bg-darkAmber fg-lightGray px-3"> <i class="fas fa-save"></i>&nbsp;Save </button>

				</div>
				<div class="col-md-6 py-2 justify-content-center d-flex">
				<button class="btn btn-sm btn-flat eng_xxxs bg-lightOrange fg-darkCrimson" id="reset_form"> <i class="fas fa-broom"></i>&nbsp;Reset </button> &nbsp;&nbsp;

			     <button class="btn btn-primary"> <i class="fas fa-search"></i>&nbsp;Check Duplicate </button>&nbsp;&nbsp;
			 
			</div> <!-- ./col-md-6 -->
		</div> <!-- ./row -->
		
		
		</div> <!-- ./form_section -->
		</form>	
	</div> <!-- ./col12 -->
</div> <!-- ./row -->
</div> <!-- ./container -->

@endsection

@section('customscripts')
@include('serviceview.otr_script')
@endsection




