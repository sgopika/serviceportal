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
<div class="container">
	<div class="col-12 py-1 px-2">
		<p class="eng_xxs px-3 fg-darkBrown text-center"> Equivalency Certificate</p>
	</div> <!-- ./col12 -->	
	<div class="col-12 md-whiteframe-2dp ">
		<div id="form_section">
   <form id="ajaxmodalform" method="post" class="form-horizontal" enctype="multipart/form-data">   
  <div class="col-12 py-1 px-2 text-white">
    <p class="eng_xxs px-3 bg-primary text-white">Application For Equivalency Certificate</p>
  </div> <!-- ./col12 --> 
		<div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="name" class="eng_xxxs fg-darkBrown">Name of the Candidate* </label>
        <small id="HELPNAME2" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
          <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="name" name="name" aria-describedby="HELPNAME2" placeholder="Placeholder value">
           <p id="nameerror" style="display:none; color:#FF0000;" >Only A -Z a-z Characters are allowed.</p>

      </div> <!-- ./col-md-6 -->
    </div> <!-- ./row -->
<div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="uid" class="eng_xxxs fg-darkBrown">UID (Aadhaar Number) </label>
        <small id="HELPNAME2" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
          <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="uid" name="uid" aria-describedby="HELPNAME2" placeholder="Placeholder value">
           <p id="uiderror" style="display:none; color:#FF0000;" >Enter a valid UID.</p>

      </div> <!-- ./col-md-6 -->
    </div> <!-- ./row -->

    <div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="mobile" class="eng_xxxs fg-darkBrown">Mobile Number </label>
        <small id="HELPNAME2" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
          <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="mobile" name="mobile" aria-describedby="HELPNAME2" placeholder="Placeholder value">
           <p id="mobileerror" style="display:none; color:#FF0000;" >Enter a valid phone number.</p>

      </div> <!-- ./col-md-6 -->
    </div> <!-- ./row -->
<div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="email" class="eng_xxxs fg-darkBrown">Email ID </label>
        <small id="HELPNAME2" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
          <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="email" name="email" aria-describedby="HELPNAME2" placeholder="Placeholder value">
           <p id="emailerror" style="display:none; color:#FF0000;" >Enter a valid Email ID.</p>

      </div> <!-- ./col-md-6 -->
    </div> <!-- ./row -->

<div class="col-12 py-1 px-2 text-white">
    <p class="eng_xxs px-3 bg-primary text-white">Course Details</p>
  </div> <!-- ./col12 --> 

    <div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="course" class="eng_xxxs fg-darkBrown">Name of the VHS Course studied* </label>
        <small id="HELPNAME1" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
           <select class="form-control customform eng_xxxs fg-darkCrimson" name="course" id="course" aria-describedby="HELPNAME1" required="required">
            <option>----default option---</option>            
         </select>
      </div> <!-- ./col-md-6 -->
    </div> <!-- ./row -->

    <div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="school" class="eng_xxxs fg-darkBrown">Name of the VHS School* </label>
        <small id="HELPNAME1" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
           <select class="form-control customform eng_xxxs fg-darkCrimson" name="school" id="school" aria-describedby="HELPNAME1">
            <option>----default option---</option>            
         </select>
      </div> <!-- ./col-md-6 -->
    </div> <!-- ./row -->

    <div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="month" class="eng_xxxs fg-darkBrown">Month and Year of Passing* </label>
        <small id="HELPNAME1" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
        <div class="row">
          <div class="col-md-6 py-2">
          <select class="form-control customform eng_xxxs fg-darkCrimson" name="month" id="month" aria-describedby="HELPNAME1">
            <option>----default option---</option>            
         </select>
       </div>
       <div class="col-md-6 py-2">
         <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="year" name="year" aria-describedby="HELPNAME2" placeholder="Placeholder value">
         <p id="yearerror" style="display:none; color:#FF0000;" >Enter a valid year.</p>
        </div>
      </div>
           
      </div> <!-- ./col-md-6 -->
    </div> <!-- ./row -->


<div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="regno" class="eng_xxxs fg-darkBrown">Reg No* </label>
        <small id="HELPNAME2" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
          <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="regno" name="regno" aria-describedby="HELPNAME2" placeholder="Placeholder value">
           <p id="regnoerror" style="display:none; color:#FF0000;" >Only A -Z a-z Characters are allowed.</p>

      </div> <!-- ./col-md-6 -->
    </div> <!-- ./row -->
<div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="veno" class="eng_xxxs fg-darkBrown">VE. No. of the Certificate </label>
        <small id="HELPNAME2" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
          <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="veno" name="veno" aria-describedby="HELPNAME2" placeholder="Placeholder value">
           <p id="venoerror" style="display:none; color:#FF0000;" >Only A -Z a-z Characters are allowed.</p>

      </div> <!-- ./col-md-6 -->
    </div> <!-- ./row -->
<div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="cert_date" class="eng_xxxs fg-darkBrown">Certificate Date </label>
        <small id="HELPNAME2" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-3 py-2">
          <input type="date" class="form-control customform eng_xxxs fg-darkCrimson" id="cert_date" name="cert_date" aria-describedby="HELPNAME2" placeholder="Placeholder value">
           <p id="cert_dateerror" style="display:none; color:#FF0000;" >Only A -Z a-z Characters are allowed.</p>

      </div> <!-- ./col-md-6 -->
    </div> <!-- ./row -->
    <div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="vemarklist" class="eng_xxxs fg-darkBrown">VE. No. of Mark list* </label>
        <small id="HELPNAME2" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
          <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="vemarklist" name="vemarklist" aria-describedby="HELPNAME2" placeholder="Placeholder value">
           <p id="vemarklisterror" style="display:none; color:#FF0000;" >Only A -Z a-z Characters are allowed.</p>

      </div> <!-- ./col-md-6 -->
    </div> <!-- ./row -->
    <div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="marklist_date" class="eng_xxxs fg-darkBrown">Mark list Date* </label>
        <small id="HELPNAME2" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-3 py-2">
          <input type="date" class="form-control customform eng_xxxs fg-darkCrimson" id="marklist_date" name="marklist_date" aria-describedby="HELPNAME2" placeholder="Placeholder value">
           <p id="marklist_dateerror" style="display:none; color:#FF0000;" >Only A -Z a-z Characters are allowed.</p>

      </div> <!-- ./col-md-6 -->
    </div> <!-- ./row -->

    <div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="purpose" class="eng_xxxs fg-darkBrown">Purpose for which the Certificate has been applied for* </label>
        <small id="HELPNAME2" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
          <textarea  class="form-control customform eng_xxxs fg-darkCrimson" id="purpose" name="purpose" aria-describedby="HELPNAME2" placeholder="Placeholder value" rows="5"></textarea> 
           <p id="purposeerror" style="display:none; color:#FF0000;" >Only A -Z a-z and Characters like ., are allowed.</p>

      </div> <!-- ./col-md-6 -->
    </div> <!-- ./row -->

    <div class="col-12 py-1 px-2 text-white">
    <p class="eng_xxs px-3 bg-primary text-white">Attachments</p>
  </div> <!-- ./col12 --> 
  
<div class="row customformrow">
      <div class="row col-md-6">
     <div class="col-md-6 py-2">
        <label for="IDNAME" class="eng_xxxs fg-darkBrown">Copy of Trade Certificate* </label>
        
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
          <input type="checkbox" id="tradecertificate" value="1" name="tradecertificate" >
      </div> <!-- ./col-md-6 -->
    </div>
     <div class="row col-md-6" style="display: none;" id="tradefield">
      <div class="col-md-6 py-2">
          <input type="file" class="form-control customform eng_xxxs fg-darkCrimson" id="tradefile" name="tradefile" aria-describedby="HELPNAME2" placeholder="Placeholder value">
           <p id="tradefileerror" style="display:none; color:#FF0000;">
                  Invalid File format. 
                  </p>
                  <p id="tradefileerror1" style="display:none; color:#FF0000;" class="mal_xxxs">
                  Allowed size 1 MB.
                  </p>

      </div> <!-- ./col-md-6 -->
    </div>
    </div> <!-- ./row -->
    <div class="row customformrow">
      <div class="row col-md-6">
     <div class="col-md-6 py-2">
        <label for="IDNAME" class="eng_xxxs fg-darkBrown">Copy of Mark List* </label>
        
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
          <input type="checkbox" id="marklist" value="1" name="marklist" >
      </div> <!-- ./col-md-6 -->
    </div>
     <div class="row col-md-6">
      <div class="col-md-6 py-2" style="display: none;" id="marklistfield">
          <input type="file" class="form-control customform eng_xxxs fg-darkCrimson" id="marklistfile" name="marklistfile" aria-describedby="HELPNAME2" placeholder="Placeholder value">
           <p id="marklistfileerror" style="display:none; color:#FF0000;">
                  Invalid File format. 
                  </p>
                  <p id="marklistfileerror1" style="display:none; color:#FF0000;" class="mal_xxxs">
                  Allowed size 1 MB.
                  </p>

      </div> <!-- ./col-md-6 -->
    </div>
    </div> <!-- ./row -->

<br><br><br>

    <div class="row customformrow">
      <div class="row col-md-6">
      <div class="col-md-6 py-2">
        <label for="place" class="eng_xxxs fg-darkBrown">Place* </label>
        <small id="HELPNAME2" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
          <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="place" name="place" aria-describedby="HELPNAME2" placeholder="Placeholder value">
           <p id="placeerror" style="display:none; color:#FF0000;" >Only A -Z a-z Characters are allowed.</p>

      </div> <!-- ./col-md-6 -->
    </div>
     <div class="row col-md-6">
      <div class="col-md-6 py-2">
        <label for="date" class="eng_xxxs fg-darkBrown">Date </label>
        <small id="HELPNAME2" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
          <input type="date" class="form-control customform eng_xxxs fg-darkCrimson" id="date" name="date" aria-describedby="HELPNAME2" placeholder="Placeholder value">
           <p id="dateerror" style="display:none; color:#FF0000;" >Only A -Z a-z Characters are allowed.</p>

      </div> <!-- ./col-md-6 -->
    </div>
    </div> <!-- ./row -->
    <div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="captcha" class="eng_xxxs fg-darkBrown">Please enter visible characters in the text box* </label>
        <small id="HELPNAME2" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
          <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="captcha" name="captcha" aria-describedby="HELPNAME2" placeholder="Placeholder value">
           <p id="captchaerror" style="display:none; color:#FF0000;" >Enter a valid captcha.</p>

      </div> <!-- ./col-md-6 -->
    </div> <!-- ./row -->


		<div class="row customformrow">
			<div class="col-md-6 py-2 justify-content-center d-flex">
				
				<button class="btn btn-sm btn-flat eng_xxxs bg-lightOrange fg-darkCrimson"> <i class="fas fa-broom"></i>&nbsp;Reset </button> &nbsp;&nbsp;
				</div>
				<div class="col-md-6 py-2 justify-content-center d-flex">
				
			     <button class="btn btn-sm btn-flat eng_xxxs bg-darkAmber fg-lightGray px-3"> <i class="fas fa-save"></i>&nbsp;Save </button>
			 
			</div> <!-- ./col-md-6 -->
		</div> <!-- ./row -->
  </form>
		</div> <!-- ./form_section -->
	</div> <!-- ./col12 -->
</div>
</div> <!-- ./row -->
</div> <!-- ./container -->
@endsection

@section('customscripts')
@include('serviceview.equivalency_js')
@endsection
