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
        <li class="breadcrumb-item eng_xxxs">Migration Certificate</li>
      </ol>
    </nav>
  </div> <!-- col12 -->
  <div class="col-12 py-1 px-2 ">
    <p class="eng_xxs px-3 fg-darkBrown"> <h2>Migration Certificate </h2></p>
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
      <div class="col-md-6 py-2">
        <label for="IDNAME" class="eng_xxxs fg-darkBrown">Name of the Applicant<font class="text-danger eng_xxxxs"> * </font></label>
        <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
         <input type="text" class="form-control" name="applicantname" id="applicantname" minlength="3" maxlength="30" required>
         <p id="applicantnameerror" style="display:none; color:#FF0000;" >Only A -Z a-z Characters and space are allowed.</p>
      </div> <!-- ./col-md-6 -->
    </div> <!-- ./row -->

    <div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="IDNAME1" class="eng_xxxs fg-darkBrown">UID</label>
        <small id="HELPNAME1" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
         <input type="text" class="form-control" name="uid" id="uid" minlength="12" maxlength="12">
         <p id="uiderror" style="display:none; color:#FF0000;" >Invalid UID Number.</p>
      </div> <!-- ./col-md-6 -->
    </div> <!-- ./row -->

    
    <div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="IDNAME2" class="eng_xxxs fg-darkBrown">House Number / House Name<font class="text-danger eng_xxxxs"> * </font></label>
        <small id="HELPNAME2" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
          <input type="text" class="form-control" name="housenameno" id="housenameno" minlength="3" maxlength="50" required>
          <p id="housenamenoerror" style="display:none; color:#FF0000;" >Only A -Z a-z Characters, digits, /, (, ), - and space are allowed.</p>
      </div> <!-- ./col-md-6 -->
    </div> <!-- ./row -->

    <div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="IDNAME2" class="eng_xxxs fg-darkBrown">Post Office / Locality<font class="text-danger eng_xxxxs"> * </font></label>
        <small id="HELPNAME2" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
          <input type="text" class="form-control" name="postoffice" id="postoffice" minlength="3" maxlength="50" required>
          <p id="postofficeerror" style="display:none; color:#FF0000;" >Only A -Z a-z Characters and space are allowed.</p>
      </div> <!-- ./col-md-6 -->
    </div> <!-- ./row -->

    <div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="IDNAME2" class="eng_xxxs fg-darkBrown">State<font class="text-danger eng_xxxxs"> * </font></label>
        <small id="HELPNAME2" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
           <select class="form-control customform eng_xxxs fg-darkCrimson" id="state" name="state" aria-describedby="HELPNAME2" required>
           <option>Default select</option>
         </select>
      </div> <!-- ./col-md-6 -->
    </div> <!-- ./row -->

    <div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="IDNAME2" class="eng_xxxs fg-darkBrown">District<font class="text-danger eng_xxxxs"> * </font></label>
        <small id="HELPNAME2" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
           <select class="form-control customform eng_xxxs fg-darkCrimson" id="district" name="district" aria-describedby="HELPNAME2" required>
           <option>Default select</option>
         </select>
      </div> <!-- ./col-md-6 -->
    </div> <!-- ./row -->

    <div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="IDNAME2" class="eng_xxxs fg-darkBrown">City<font class="text-danger eng_xxxxs"> * </font></label>
        <small id="HELPNAME2" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
          <input type="text" class="form-control" name="city" id="city" minlength="3" maxlength="50" required>
          <p id="cityerror" style="display:none; color:#FF0000;" >Only A -Z a-z Characters and space are allowed.</p>
      </div> <!-- ./col-md-6 -->
    </div> <!-- ./row -->

    <div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="IDNAME2" class="eng_xxxs fg-darkBrown">Pincode<font class="text-danger eng_xxxxs"> * </font></label>
        <small id="HELPNAME2" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
          <input type="text" class="form-control" name="pincode" id="pincode" minlength="6" maxlength="6" required>
          <p id="pincodeerror" style="display:none; color:#FF0000;" >Invalid Pincode.</p>
      </div> <!-- ./col-md-6 -->
    </div> <!-- ./row -->

    <div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="IDNAME2" class="eng_xxxs fg-darkBrown">Mobile Number</label>
        <small id="HELPNAME2" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
          <input type="text" class="form-control" name="mobile" id="mobile" minlength="10" maxlength="10" >
          <p id="mobileerror" style="display:none; color:#FF0000;" >Invalid Mobile.</p>
      </div> <!-- ./col-md-6 -->
    </div> <!-- ./row -->

    <div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="IDNAME2" class="eng_xxxs fg-darkBrown">Email ID</label>
        <small id="HELPNAME2" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
          <input type="email" class="form-control" name="email" id="email" minlength="10" maxlength="50">
          <p id="emailerror" style="display:none; color:#FF0000;" >Invalid Email.</p>
      </div> <!-- ./col-md-6 -->
    </div> <!-- ./row -->

    <div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="IDNAME2" class="eng_xxxs fg-darkBrown">Name of the institution in which the applicant has studied for the V.H.S course<font class="text-danger eng_xxxxs"> * </font></label>
        <small id="HELPNAME2" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
           <select class="form-control customform eng_xxxs fg-darkCrimson" id="institution" name="institution" aria-describedby="HELPNAME2" required>
           <option>Default select</option>
         </select>
      </div> <!-- ./col-md-6 -->
    </div> <!-- ./row -->

    <div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="IDNAME2" class="eng_xxxs fg-darkBrown">Name of Vocational Course<font class="text-danger eng_xxxxs"> * </font></label>
        <small id="HELPNAME2" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
           <select class="form-control customform eng_xxxs fg-darkCrimson" id="course" name="course" aria-describedby="HELPNAME2" required>
           <option>Default select</option>
         </select>
      </div> <!-- ./col-md-6 -->
    </div> <!-- ./row -->

    <div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="IDNAME2" class="eng_xxxs fg-darkBrown">Years of Study<font class="text-danger eng_xxxxs"> * </font></label>
        <small id="HELPNAME2" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
        <div class="row">
            <div class="col-md-2 py-2">
              <input type="text" class="form-control" name="fromyear" id="fromyear" minlength="4" maxlength="4" required>
              <p id="fromyearerror" style="display:none; color:#FF0000;" >Invalid From Year.</p>
            </div>
            
            <div class="py-2">-</div>
            
            <div class="col-md-2 py-2">
              <input type="text" class="form-control" name="toyear" id="toyear" minlength="4" maxlength="4" required>
              <p id="toyearerror" style="display:none; color:#FF0000;" >Invalid To Year.</p>
            </div>
            
        </div>
          
      </div> <!-- ./col-md-6 -->
    </div> <!-- ./row -->

    <div class="row customformrow">
      <div class="col-md-12 py-2">
        <h4>Details of Appearance for VHS Examination</h4>
      </div> <!-- ./col-md-6 -->
      
    </div> <!-- ./row -->
    <div class="row ">
      <div class="col-md-3 py-2">
        <label for="IDNAME2" class="eng_xxxs fg-darkBrown">Reg No<font class="text-danger eng_xxxxs"> * </font></label>
        <input type="text" class="form-control" name="regno" id="regno" minlength="5" maxlength="15" required>
        <p id="regnoerror" style="display:none; color:#FF0000;" >Only A -Z a-z Characters and digits are allowed.</p>
      </div>
      <div class="col-md-3 py-2">
        <label for="IDNAME2" class="eng_xxxs fg-darkBrown">Month<font class="text-danger eng_xxxxs"> * </font></label>
        <select class="form-control customform eng_xxxs fg-darkCrimson" id="month" name="month" aria-describedby="HELPNAME2" required>
           <option>Default select</option>
         </select>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-3 py-2">
        <label for="IDNAME2" class="eng_xxxs fg-darkBrown">Year<font class="text-danger eng_xxxxs"> * </font></label>
        <input type="text" class="form-control" name="year" id="year" minlength="4" maxlength="4" required>
        <p id="yearerror" style="display:none; color:#FF0000;" >Invalid Year.</p>
        <p id="yearerror1" style="display:none; color:#FF0000;" >Year cannot be greater than current year.</p>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-3 py-2">
        <div class="row">
            <div class="col-md-3 "><label for="IDNAME2" class="eng_xxxs fg-darkBrown">Result<font class="text-danger eng_xxxxs"> * </font></label></div>
        </div>
        <div class="row">
            <div class="col-md-5 "><label class="radiocontainer eng_xxxs fg-darkBrown"> <span class="text-darkslategray" > Passed </span>
                <input type="radio" name="result" id="result" value="1" class="typeradio">
                <span class="radiocheckmark"></span>
              </label>&nbsp;
              <label class="radiocontainer eng_xxxs fg-darkBrown"> <span class="text-darkslategray" > Failed </span>
                <input type="radio" name="result" id="result" value="2" class="typeradio">
                <span class="radiocheckmark"></span>
              </label>
          </div>
        </div>
        
        
        
      </div> <!-- ./col-md-6 -->
      
    </div> <!-- ./row -->

    <div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="IDNAME2" class="eng_xxxs fg-darkBrown">Name of the Board/University in which candidate intend for Higher Studies<font class="text-danger eng_xxxxs"> * </font></label>
        <small id="HELPNAME2" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
          <input type="text" class="form-control" name="boarduniversity" id="boarduniversity" minlength="10" maxlength="150" required>
          <p id="boarduniversityerror" style="display:none; color:#FF0000;" >Only A -Z a-z Characters and space are allowed.</p>
      </div> <!-- ./col-md-6 -->
      
    </div> <!-- ./row -->

    <div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="IDNAME2" class="eng_xxxs fg-darkBrown">Specify whether Original/ Duplicate/ Triplicate<font class="text-danger eng_xxxxs"> * </font></label>
        <small id="HELPNAME2" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
          <select class="form-control customform eng_xxxs fg-darkCrimson" id="certificatestatus" name="certificatestatus" aria-describedby="HELPNAME2" required>
           <option value="0">-- Select --</option>
           <option value="1">Original</option>
           <option value="2">Duplicate</option>
           <option value="3">Triplicate</option>
         </select>
      </div> <!-- ./col-md-6 -->
      
    </div> <!-- ./row -->
    <div class="row customformrow" id="dupltrip_div">
      <div class="col-md-3 py-2">
        <label for="IDNAME2" class="eng_xxxs fg-darkBrown">Reason for application</label>
        <small id="HELPNAME2" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-3 py-2">
          <label class="radiocontainer eng_xxxs fg-darkBrown"> <span class="text-darkslategray" > Damaged </span>
                <input type="radio" name="reason" id="reason" value="1" class="typeradio">
                <span class="radiocheckmark"></span>
              </label>&nbsp;
              <label class="radiocontainer eng_xxxs fg-darkBrown"> <span class="text-darkslategray" > Lost </span>
                <input type="radio" name="reason" id="reason" value="2" class="typeradio">
                <span class="radiocheckmark"></span>
              </label>
      </div> <!-- ./col-md-6 -->
      
      <div class="col-md-3 py-2">
        <label for="IDNAME2" class="eng_xxxs fg-darkBrown">Whether the applicant had applied for a duplicate copy of the certificate / Marklist earlier</label>
        <small id="HELPNAME2" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-3 py-2">
          <label class="radiocontainer eng_xxxs fg-darkBrown"> <span class="text-darkslategray" > Yes </span>
                <input type="radio" name="duplstatus" id="duplstatus" value="1" class="typeradio">
                <span class="radiocheckmark"></span>
              </label>&nbsp;
              <label class="radiocontainer eng_xxxs fg-darkBrown"> <span class="text-darkslategray" > No </span>
                <input type="radio" name="duplstatus" id="duplstatus" value="2" class="typeradio">
                <span class="radiocheckmark"></span>
              </label>
      </div> <!-- ./col-md-6 -->
    </div> <!-- ./row -->

    <div class="row customformrow">
      <div class="col-md-2 py-2">
        <label for="IDNAME2" class="eng_xxxs fg-darkBrown">Place<font class="text-danger eng_xxxxs"> * </font></label>
        <input type="text" class="form-control" name="place" id="place" minlength="5" maxlength="50" required>
        <p id="placeerror" style="display:none; color:#FF0000;" >Only A -Z a-z Characters and space are allowed.</p>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-8 py-2"></div>
      <div class="col-md-2 py-2">
          <label for="IDNAME2" class="eng_xxxs fg-darkBrown">Date<font class="text-danger eng_xxxxs"> * </font></label>
          <input type="text" class="form-control btn-point dob" name="applicationdate" id="applicationdate" minlength="5" maxlength="50" required>
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
            <label for="IDNAME" class="eng_xxxs fg-darkBrown">Copy of Trade Certificate <font class="text-danger eng_xxxxs"> * </font></label>
            <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> additional information.</small>
          </div> <!-- ./col-md-6 -->
          <div class="col-md-6 py-2">
              <input type="file" class="form-control customform eng_xxxs fg-darkCrimson" id="tradecertificate" name="tradecertificate" aria-describedby="HELPNAME1" placeholder="Placeholder value" required>
              <p id="tradecertificateerror" style="display:none; color:#FF0000;">Only PDF format allowed </p>
              <p id="tradecertificateerror1" style="display:none; color:#FF0000;" class="mal_xxxs"> Allowed size 100 KB. </p>
          </div> <!-- ./col-md-6 -->
        </div> <!-- ./row -->

        <div class="row customformrow">
          <div class="col-md-6 py-2">
            <label for="IDNAME" class="eng_xxxs fg-darkBrown">Copy of Mark Lists<font class="text-danger eng_xxxxs"> * </font></label>
            <small id="HELPNAME" class="form-text eng_xxxxs text-muted"> additional information.</small>
          </div> <!-- ./col-md-6 -->
          <div class="col-md-6 py-2">
              <input type="file" class="form-control customform eng_xxxs fg-darkCrimson" id="marklists" name="marklists" aria-describedby="HELPNAME1" placeholder="Placeholder value" required>
              <p id="marklistserror" style="display:none; color:#FF0000;">Only PDF format allowed </p>
              <p id="marklistserror1" style="display:none; color:#FF0000;" class="mal_xxxs"> Allowed size 100 KB. </p>
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
@include('serviceview.migrationcertscript')
@endsection
