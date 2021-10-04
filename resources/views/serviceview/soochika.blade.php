@extends('layouts.basemain')
@section('content')

<div class="container-fluid homepage adminpage">
<div class="row ">
	<div class="col-12 py-2  ">
		<nav aria-label="breadcrumb ">
		  <ol class="breadcrumb breadbar justify-content-end">
		    <li class="breadcrumb-item eng_xxxs">Dashboard</li>
		    <li class="breadcrumb-item eng_xxxs">List</li>
		  </ol>
		</nav>
	</div> <!-- col12 -->
<div class="container">
	<div class="col-12 py-1 px-2">
		<p class="eng_xxs px-3 fg-darkBrown text-center"> Soochika File Tracking</p>
	</div> <!-- ./col12 -->	
	<div class="col-12 md-whiteframe-2dp ">
		<div id="form_section">
   <form id="ajaxmodalform" method="post" class="form-horizontal" enctype="multipart/form-data">   
  <div class="col-12 py-1 px-2 text-white">
    <p class="eng_xxs px-3 bg-primary text-white">Soochika File Tracking</p>
  </div> <!-- ./col12 --> 
		<div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="inwardno" class="eng_xxxs fg-darkBrown">Inward No </label>
        <small id="HELPNAME2" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
          <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="inwardno" name="inwardno" aria-describedby="HELPNAME2" placeholder="Placeholder value">
           <p id="inwardnoerror" style="display:none; color:#FF0000;" >Only A -Z a-z Characters are allowed.</p>

      </div> <!-- ./col-md-6 -->
    </div> <!-- ./row -->
<div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="Year" class="eng_xxxs fg-darkBrown">Year </label>
        <small id="HELPNAME2" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
          <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="Year" name="Year" aria-describedby="HELPNAME2" placeholder="Placeholder value">
           <p id="Yearerror" style="display:none; color:#FF0000;" >Enter a valid UID.</p>

      </div> <!-- ./col-md-6 -->
    </div> <!-- ./row -->

    <div class="row customformrow">
      <div class="col-md-6 py-2">
        <label for="lgi" class="eng_xxxs fg-darkBrown">Online Local Government Institution </label>
        <small id="HELPNAME2" class="form-text eng_xxxxs text-muted"> additional information.</small>
      </div> <!-- ./col-md-6 -->
      <div class="col-md-6 py-2">
          <input type="text" class="form-control customform eng_xxxs fg-darkCrimson" id="lgi" name="lgi" aria-describedby="HELPNAME2" placeholder="Placeholder value">
           <p id="lgierror" style="display:none; color:#FF0000;" >Enter a valid phone number.</p>

      </div> <!-- ./col-md-6 -->
    </div> <!-- ./row -->
    
<br><br><br>


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
@include('serviceview.soochikajs')
@endsection
