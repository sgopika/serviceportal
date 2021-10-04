@extends('layouts.basemain')
@section('content')
<!-- Start of breadcrumb -->

<!-- End of breadcrumb -->
<div class="container-fluid homepage adminpage">
<div class="row ">
  <div class="col-12 py-2  ">
    <nav aria-label="breadcrumb ">
      <ol class="breadcrumb breadbar justify-content-end">
        <li class="breadcrumb-item eng_xxxs"><a href="{{ route('servicedash') }}">Dashboard</a></li>
        <li class="breadcrumb-item eng_xxxs">Domicile Certificate</li>
      </ol>
    </nav>
  </div> <!-- col12 -->
  <div class="col-12 py-1 px-2 ">
    <p class="eng_xxs px-3 fg-darkBrown"> <h2>Domicile Certificate </h2></p>
  </div> <!-- ./col12 --> 
  <div class="col-12 py-1 px-2 ">
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="pills-application-tab" data-toggle="pill" href="#pills-application" role="tab" aria-controls="pills-application" aria-selected="true">Application</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="pills-attachment-tab" data-toggle="pill" href="#pills-attachment" role="tab" aria-controls="pills-attachment" aria-selected="false">Attachment</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="pills-payment-tab" data-toggle="pill" href="#pills-payment" role="tab" aria-controls="pills-payment" aria-selected="false">Payment</a>
  </li>
</ul>
</div>

<div class="tab-content col-12 py-1 px-2" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-application" role="tabpanel" aria-labelledby="pills-application-tab"> 
      <div class="col-12 md-whiteframe-2dp ">
    <div id="form_section">
      <div class="row customformrow">
        <div class="col-md-3 py-2">
          <label for="IDNAME" class="eng_xxxs fg-darkBrown">e-District Reg No<font class="text-danger eng_xxxxs"> * </font></label>
          <select class="form-control customform eng_xxxs fg-darkCrimson" id="edistrictregno" name="edistrictregno" aria-describedby="HELPNAME2" required>
             <option>Default select</option>
           </select>
        </div> <!-- ./col-md-3 -->
        <div class="col-md-3 py-2">
           <label for="IDNAME" class="eng_xxxs fg-darkBrown">Certificate Type<font class="text-danger eng_xxxxs"> * </font></label>
          <select class="form-control customform eng_xxxs fg-darkCrimson" id="certificatetype" name="certificatetype" aria-describedby="HELPNAME2" required>
           <option>Default select</option>
         </select>
        </div> <!-- ./col-md-3 -->
        <div class="col-md-3 py-2">
          <label for="IDNAME" class="eng_xxxs fg-darkBrown">Certificate Purpose<font class="text-danger eng_xxxxs"> * </font></label>
          <select class="form-control customform eng_xxxs fg-darkCrimson" id="certificatepurpose" name="certificatepurpose" aria-describedby="HELPNAME2" required>
           <option>Default select</option>
         </select>
        </div> <!-- ./col-md-3 -->
        <div class="col-md-3 py-2">
           <label for="IDNAME" class="eng_xxxs fg-darkBrown">To be produced before<font class="text-danger eng_xxxxs"> * </font></label>
          <input type="text" class="form-control" name="producedbefore" id="producedbefore" minlength="3" maxlength="50" required>
          <p id="producedbeforeerror" style="display:none; color:#FF0000;" >Only A -Z a-z Characters, dots and space are allowed.</p>
        </div> <!-- ./col-md-3 -->
      </div> <!-- ./row -->

  

    <div class="row customformrow">
      <div class="col-md-3 py-2">
        <label for="IDNAME" class="eng_xxxs fg-darkBrown">Applicant's State<font class="text-danger eng_xxxxs"> * </font></label>
        <select class="form-control customform eng_xxxs fg-darkCrimson" id="applicantstate" name="applicantstate" aria-describedby="HELPNAME2" required>
           <option>Default select</option>
         </select>
      </div> <!-- ./col-md-3 -->
      <div class="col-md-3 py-2">
         <label for="IDNAME" class="eng_xxxs fg-darkBrown">Applicant's District<font class="text-danger eng_xxxxs"> * </font></label>
        <select class="form-control customform eng_xxxs fg-darkCrimson" id="applicantdistrict" name="applicantdistrict" aria-describedby="HELPNAME2" required>
           <option>Default select</option>
         </select>
      </div> <!-- ./col-md-3 -->
      <div class="col-md-3 py-2">
        <label for="IDNAME" class="eng_xxxs fg-darkBrown">Applicant's Taluk<font class="text-danger eng_xxxxs"> * </font></label>
        <select class="form-control customform eng_xxxs fg-darkCrimson" id="applicanttaluk" name="applicanttaluk" aria-describedby="HELPNAME2" required>
           <option>Default select</option>
         </select>
      </div> <!-- ./col-md-3 -->
      <div class="col-md-3 py-2">
         <label for="IDNAME" class="eng_xxxs fg-darkBrown">Applicant's Village<font class="text-danger eng_xxxxs"> * </font></label>
        <select class="form-control customform eng_xxxs fg-darkCrimson" id="applicantvillage" name="applicantvillage" aria-describedby="HELPNAME2" required>
           <option>Default select</option>
         </select>
      </div> <!-- ./col-md-3 -->
    </div> <!-- ./row -->

    <div class="row customformrow">
      <div class="col-md-3 py-2">
        <label for="IDNAME" class="eng_xxxs fg-darkBrown">Father's State</label>
        <select class="form-control customform eng_xxxs fg-darkCrimson" id="fatherstate" name="fatherstate" aria-describedby="HELPNAME2">
           <option>Default select</option>
         </select>
      </div> <!-- ./col-md-3 -->
      <div class="col-md-3 py-2">
         <label for="IDNAME" class="eng_xxxs fg-darkBrown">Father's District</label>
        <select class="form-control customform eng_xxxs fg-darkCrimson" id="fatherdistrict" name="fatherdistrict" aria-describedby="HELPNAME2">
           <option>Default select</option>
         </select>
      </div> <!-- ./col-md-3 -->
      <div class="col-md-3 py-2">
        <label for="IDNAME" class="eng_xxxs fg-darkBrown">Father's Taluk</label>
        <select class="form-control customform eng_xxxs fg-darkCrimson" id="fathertaluk" name="fathertaluk" aria-describedby="HELPNAME2">
           <option>Default select</option>
         </select>
      </div> <!-- ./col-md-3 -->
      <div class="col-md-3 py-2">
         <label for="IDNAME" class="eng_xxxs fg-darkBrown">Father's Village</label>
        <select class="form-control customform eng_xxxs fg-darkCrimson" id="fathervillage" name="fathervillage" aria-describedby="HELPNAME2">
           <option>Default select</option>
         </select>
      </div> <!-- ./col-md-3 -->
    </div> <!-- ./row -->

    <div class="row customformrow">
      <div class="col-md-3 py-2">
        <label for="IDNAME" class="eng_xxxs fg-darkBrown">Mother's State</label>
        <select class="form-control customform eng_xxxs fg-darkCrimson" id="motherstate" name="motherstate" aria-describedby="HELPNAME2">
           <option>Default select</option>
         </select>
      </div> <!-- ./col-md-3 -->
      <div class="col-md-3 py-2">
         <label for="IDNAME" class="eng_xxxs fg-darkBrown">Mother's District</label>
        <select class="form-control customform eng_xxxs fg-darkCrimson" id="motherdistrict" name="motherdistrict" aria-describedby="HELPNAME2">
           <option>Default select</option>
         </select>
      </div> <!-- ./col-md-3 -->
      <div class="col-md-3 py-2">
        <label for="IDNAME" class="eng_xxxs fg-darkBrown">Mother's Taluk</label>
        <select class="form-control customform eng_xxxs fg-darkCrimson" id="mothertaluk" name="mothertaluk" aria-describedby="HELPNAME2">
           <option>Default select</option>
         </select>
      </div> <!-- ./col-md-3 -->
      <div class="col-md-3 py-2">
         <label for="IDNAME" class="eng_xxxs fg-darkBrown">Mother's Village</label>
          <select class="form-control customform eng_xxxs fg-darkCrimson" id="mothervillage" name="mothervillage" aria-describedby="HELPNAME2">
           <option>Default select</option>
         </select>
      </div> <!-- ./col-md-3 -->
    </div> <!-- ./row -->

    <div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="IDNAME" class="eng_xxxs fg-darkBrown">Name of the Applicant<font class="text-danger eng_xxxxs"> * </font></label>
        <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
         <input type="text" class="form-control" name="applicantname" id="applicantname" minlength="3" maxlength="99" required>
         <p id="applicantnameerror" style="display:none; color:#FF0000;" >Only A -Z a-z Characters, dots and space are allowed.</p>
      </div> <!-- ./col-md-6 -->
    </div> <!-- ./row -->

    <div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="IDNAME" class="eng_xxxs fg-darkBrown">Relation<font class="text-danger eng_xxxxs"> * </font></label>
        <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
        <select class="form-control customform eng_xxxs fg-darkCrimson" id="relation" name="relation" aria-describedby="HELPNAME2" required>
           <option>Default select</option>
         </select>
      </div> <!-- ./col-md-6 -->
    </div> <!-- ./row -->


    <div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="IDNAME1" class="eng_xxxs fg-darkBrown">Enter one time Password received on your mobile</label>
        <small id="HELPNAME1" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-2 py-2">
         <input type="number" id="otpnumber" name="otpnumber" required maxlength="4" minlength="4" class="form-control" pattern="[0-9]" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength = "4">
         <p id="otperror" style="display:none; color:#FF0000;" >Invalid OTP.</p>
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

    </div> <!-- ./form_section -->
  </div> <!-- ./col12 -->

  </div>
  <div class="tab-pane fade" id="pills-attachment" role="tabpanel" aria-labelledby="pills-attachment-tab">
      
    <div id="form_section2">
        
        <div class="row customformrow">
          <div class="col-md-6 py-2">
            <label for="IDNAME" class="eng_xxxs fg-darkBrown">Ration Card<font class="text-danger eng_xxxxs"> * </font></label>
            <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> additional information.</small>
          </div> <!-- ./col-md-6 -->
          <div class="col-md-6 py-2">
              <input type="file" class="form-control customform eng_xxxs fg-darkCrimson" id="rationcard" name="rationcard" aria-describedby="HELPNAME1" placeholder="Placeholder value" required="required">
               <p id="rationcarderror" style="display:none; color:#FF0000;">Only PDF format allowed</p>
               <p id="rationcarderror1" style="display:none; color:#FF0000;" class="mal_xxxs">Allowed size 100 KB.</p>

          </div> <!-- ./col-md-6 -->
        </div> <!-- ./row -->
        <div class="row customformrow">
          <div class="col-md-6 py-2">
            <label for="IDNAME" class="eng_xxxs fg-darkBrown">Election ID Card <font class="text-danger eng_xxxxs"> * </font></label>
            <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> additional information.</small>
          </div> <!-- ./col-md-6 -->
          <div class="col-md-6 py-2">
              <input type="file" class="form-control customform eng_xxxs fg-darkCrimson" id="electionid" name="electionid" aria-describedby="HELPNAME1" placeholder="Placeholder value" required>
              <p id="electioniderror" style="display:none; color:#FF0000;">Only PDF format allowed </p>
              <p id="electioniderror1" style="display:none; color:#FF0000;" class="mal_xxxs"> Allowed size 100 KB. </p>
          </div> <!-- ./col-md-6 -->
        </div> <!-- ./row -->
        <div class="row customformrow">
          <div class="col-md-6 py-2">
            <label for="IDNAME" class="eng_xxxs fg-darkBrown">School Certificate <font class="text-danger eng_xxxxs"> * </font></label>
            <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> additional information.</small>
          </div> <!-- ./col-md-6 -->
          <div class="col-md-6 py-2">
            <input type="file" class="form-control customform eng_xxxs fg-darkCrimson" id="schoolcertificate"  name="schoolcertificate" aria-describedby="HELPNAME1" placeholder="Placeholder value" required="required">
            <p id="schoolcertificateerror" style="display:none; color:#FF0000;">Only PDF format allowed</p>
            <p id="schoolcertificateerror1" style="display:none; color:#FF0000;" class="mal_xxxs">Allowed size 100 KB.</p>
          </div> <!-- ./col-md-6 -->
        </div> <!-- ./row -->
        <div class="row customformrow">
          <div class="col-md-6 py-2">
            <label for="IDNAME" class="eng_xxxs fg-darkBrown">Birth Certificate<font class="text-danger eng_xxxxs"> * </font></label>
            <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> additional information.</small>
          </div> <!-- ./col-md-6 -->
          <div class="col-md-6 py-2">
              <input type="file" class="form-control customform eng_xxxs fg-darkCrimson" id="birthcertificate" name="birthcertificate" aria-describedby="HELPNAME1" placeholder="Placeholder value" required>
              <p id="birthcertificateerror" style="display:none; color:#FF0000;">Only PDF format allowed </p>
              <p id="birthcertificateerror1" style="display:none; color:#FF0000;" class="mal_xxxs"> Allowed size 100 KB. </p>
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
    </div>
  </div>
  <div class="tab-pane fade" id="pills-payment" role="tabpanel" aria-labelledby="pills-payment-tab">...</div>
  
</div>

 
</div> <!-- ./row -->
</div> <!-- ./container -->




@endsection

@section('customscripts')
@include('serviceview.domicilecertscript')
@endsection
