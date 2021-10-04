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
        <li class="breadcrumb-item eng_xxxs">List</li>
      </ol>
    </nav>
  </div> <!-- col12 -->
  <div class="col-12 py-1 px-2 ">
    <p class="eng_xxs px-3 fg-darkBrown"> <h2>Residence Certificate </h2></p>
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

  <div class="col-12 md-whiteframe-2dp">
    <div id="form_section">
    <div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="IDNAME" class="eng_xxxs fg-darkBrown">eDistrict Register No </label>
        <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
         <select class="form-control customform eng_xxxs fg-darkCrimson" id="edistregisterno" name="edistregisterno"  aria-describedby="edistregisterno" required="required">
           <option>Default select</option>
         </select>

      </div> <!-- ./col-md-6 -->
    </div> <!-- ./row -->

    <div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="IDNAME1" class="eng_xxxs fg-darkBrown">Certificate type</label>
        <small id="HELPNAME1" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
         <select class="form-control customform eng_xxxs fg-darkCrimson" id="certificatetype" name="certificatetype" aria-describedby="certificatetype" required="required">
           <option>Default select</option>
         </select>
      </div> <!-- ./col-md-6 -->
    </div> <!-- ./row -->

    <div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="IDNAME2" class="eng_xxxs fg-darkBrown">Certificate Purpose </label>
        <small id="HELPNAME2" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
           <select class="form-control customform eng_xxxs fg-darkCrimson" id="certificatepurpose" name="certificatepurpose" aria-describedby="certificatepurpose" required="required">
           <option>Default select</option>
         </select>
      </div> <!-- ./col-md-6 -->
    </div> <!-- ./row -->

    <div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="IDNAME2" class="eng_xxxs fg-darkBrown">To be produced before </label>
        <small id="HELPNAME2" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
        <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="producedbefore" name="producedbefore" aria-describedby="producedbefore" required="required" placeholder="Placeholder value" maxlength="50">
        <p id="producedbeforeerror" style="display:none; color:#FF0000;" >Only A -Z a-z,dot,space Characters are allowed.</p>
           
      </div> <!-- ./col-md-6 -->
    </div> <!-- ./row -->

    <div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="IDNAME2" class="eng_xxxs fg-darkBrown">State*</label>
        <small id="HELPNAME2" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
           <select class="form-control customform eng_xxxs fg-darkCrimson" id="state" name="state" aria-describedby="state" required="required">
           <option>Default select</option>
         </select>
      </div> <!-- ./col-md-6 -->
    </div> <!-- ./row -->
    <div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="IDNAME2" class="eng_xxxs fg-darkBrown">District*</label>
        <small id="HELPNAME2" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
           <select class="form-control customform eng_xxxs fg-darkCrimson" id="district" name="district" aria-describedby="district" required="required">
           <option>Default select</option>
         </select>
      </div> <!-- ./col-md-6 -->
    </div> <!-- ./row -->
    <div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="IDNAME2" class="eng_xxxs fg-darkBrown">Taluk</label>
        <small id="HELPNAME2" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
           <select class="form-control customform eng_xxxs fg-darkCrimson" id="taluk" name="taluk" aria-describedby="taluk" required="required">
           <option>Default select</option>
         </select>
      </div> <!-- ./col-md-6 -->
    </div> <!-- ./row -->
    <div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="IDNAME2" class="eng_xxxs fg-darkBrown">Village</label>
        <small id="HELPNAME2" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
           <select class="form-control customform eng_xxxs fg-darkCrimson" id="village" name="village" aria-describedby="village" required="required">
           <option>Default select</option>
         </select>
      </div> <!-- ./col-md-6 -->
    </div> <!-- ./row -->
    
    

   
    <div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="IDNAME2" class="eng_xxxs fg-darkBrown">Applicant's Name* </label>
        <small id="HELPNAME2" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
            <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="applicant_name" name="applicant_name" aria-describedby="HELPNAME1" placeholder="Placeholder value" required="required" maxlength="100">

            <p id="applicant_nameerror" style="display:none; color:#FF0000;" >Only A -Z a-z,dot,comma,space Characters are allowed.</p>
      </div> <!-- ./col-md-6 -->
    </div> <!-- ./row -->

    <div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="IDNAME2" class="eng_xxxs fg-darkBrown">Relation* </label>
        <small id="HELPNAME2" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
            <select class="form-control customform eng_xxxs fg-darkCrimson" id="relation" name="relation" aria-describedby="HELPNAME2" required="required">
           <option>Default select</option>
         </select>
      </div> <!-- ./col-md-6 -->
    </div> <!-- ./row -->
    <div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="IDNAME2" class="eng_xxxs fg-darkBrown">Enter one time password received on  your mobile* </label>
        <small id="HELPNAME2" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
          <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="applicant_name" name="applicant_name" aria-describedby="HELPNAME1" placeholder="Placeholder value" required="required">
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

  </div><!-- PILL HOME CLOSE -->
  <div class="tab-pane fade" id="pills-attachment" role="tabpanel" aria-labelledby="pills-attachment-tab">

<div class="col-12 md-whiteframe-2dp">
    <div id="form_section2">

      <div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="IDNAME" class="eng_xxxs fg-darkBrown">Aadhaar Card* </label>
        <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
          <input type="file" class="form-control customform eng_xxxs fg-darkCrimson" id="aadharno"  name="aadharno" aria-describedby="HELPNAME1" placeholder="Placeholder value" required="required">
           <p id="aadharnoerror" style="display:none; color:#FF0000;">
                  Invalid File format. 
                  </p>
                  <p id="aadharnoerror1" style="display:none; color:#FF0000;" class="mal_xxxs">
                  Allowed size 100 KB.
                  </p>
      </div> <!-- ./col-md-6 -->
    </div> <!-- ./row -->
    <div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="IDNAME" class="eng_xxxs fg-darkBrown">Election ID Card* </label>
        <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
          <input type="file" class="form-control customform eng_xxxs fg-darkCrimson" id="electionid"  name="electionid" aria-describedby="HELPNAME1" placeholder="Placeholder value" required="required">
           <p id="electioniderror" style="display:none; color:#FF0000;">
                  Invalid File format. 
                  </p>
                  <p id="electioniderror1" style="display:none; color:#FF0000;" class="mal_xxxs">
                  Allowed size 100 KB.
                  </p>
      </div> <!-- ./col-md-6 -->
    </div> <!-- ./row -->
    <div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="IDNAME" class="eng_xxxs fg-darkBrown">Ration Card*</label>
        <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
          <input type="file" class="form-control customform eng_xxxs fg-darkCrimson" id="rationcard" name="rationcard" aria-describedby="HELPNAME1" placeholder="Placeholder value" required="required">
           <p id="rationcarderror" style="display:none; color:#FF0000;">
                  Invalid File format. 
                  </p>
                  <p id="rationcarderror1" style="display:none; color:#FF0000;" class="mal_xxxs">
                  Allowed size 100 KB.
                  </p>

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

  </div><!-- form section2 close -->
</div><!-- col-12 close -->






  </div><!-- Pill Attachment Close -->
  <div class="tab-pane fade" id="pills-payment" role="tabpanel" aria-labelledby="pills-payment-tab">
    <div class="col-12 md-whiteframe-2dp">
    <div id="form_section2">
    <div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="IDNAME" class="eng_xxxs fg-darkBrown">eDistrict Register No </label>
        <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
         <select class="form-control customform eng_xxxs fg-darkCrimson" id="IDNAME2" aria-describedby="HELPNAME2">
           <option>Default select</option>
         </select>
      </div> <!-- ./col-md-6 -->
    </div> <!-- ./row -->


  </div><!-- form section2 close -->
</div><!-- col-12 close -->

  </div><!-- Pill Attachment Close -->
</div>




  <!-- Main  -->
</div> <!-- ./row -->
</div> <!-- ./container -->




@endsection

@section('customscripts')
@include('serviceview.residencecertificatescript')
@endsection