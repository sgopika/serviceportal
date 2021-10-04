<!--Created By Pranav V V -->
@extends('layouts.basemain')
@section('content')
<div class="container-fluid homepage adminpage">
<div class="row ">
	<div class="col-12 py-2">
		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb breadbar justify-content-end">
		     <li class="breadcrumb-item eng_xxxs"><a href="{{ route('servicedash') }}">Dashboard</a></li>
		    <li class="breadcrumb-item eng_xxxs">Pension Search</li>
		  </ol>
		</nav>
	</div> <!-- col12 -->
	<div class="col-12 py-1 px-2 ">
		<p class="eng_xxs px-3 fg-darkBrown"> Sevana Pensioners Search</p>
	</div> <!-- ./col12 -->	
	<div class="col-12 md-whiteframe-2dp ">
		<div id="form_section">
			<div class="row customformrow">
				<div class="col-md-6 py-2">
					<label for="SEARCHTYPE_PID" class="eng_xxxs fg-darkBrown">Search Type</label>
					<!-- <small id="HELPCONSUMER" class="form-text eng_xxxxs text-muted"></small> -->
				</div> <!-- ./col-md-6 -->
				<div class="col-md-6 py-2">
					<input id="SEARCHTYPE_PID" type="radio" name="SEARCHTYPE" value="rdbtnOpt1" checked="checked" /> <label for="SEARCHTYPE_PID"> Pensioner ID</label>
                    <input id="SEARCHTYPE2_ADHAR" type="radio" name="SEARCHTYPE" value="rdbtnOpt2"/> <label for="SEARCHTYPE2_ADHAR"> Aadhar No</label> 
                    <input id="SEARCHTYPE_ACCOUNT" type="radio" name="SEARCHTYPE" value="rbtnOpt4"/> <label for="SEARCHTYPE_ACCOUNT"> Account No</label>
					<label id="SEARCHTYPE_LABEL"></label>
				</div> <!-- ./col-md-6 -->

				<div class="col-md-6 py-2">
					<label for="SEARCHVALUE" class="eng_xxxs fg-darkBrown">Search Value</label>
					<!-- <small id="HELPMONTH" class="form-text eng_xxxxs text-muted"></small> -->
				</div> <!-- ./col-md-6 -->
				<div class="col-md-6 py-2">
					<input type="text" id="SEARCHVALUE" class="form-control customform eng_xxxs fg-darkCrimson" ria-describedby="SEARCHVALUE" minlength="2" maxlength="20" required> 
					<label id="SEARCHVALUE_LABEL"></label>
				</div> <!-- ./col-md-6 -->

				<div class="col-md-6 py-2">
					<label for="" class="eng_xxxs fg-darkBrown">Enter Captcha</label>
				</div> <!-- ./col-md-6 -->
				<div class="col-md-6 py-2">
					<input type="text" id="" class="form-control customform eng_xxxs fg-darkCrimson" ria-describedby="" required> 
					<label id=""></label>
				</div> <!-- ./col-md-6 -->
			</div> <!-- ./row -->

			<div class="row customformrow">
				<div class="col-md-6 py-2 justify-content-center d-flex">
					<button class="btn btn-sm btn-flat eng_xxxs bg-lightOrange fg-darkCrimson"> <i class="fas fa-broom"></i>&nbsp;Reset </button> &nbsp;&nbsp;
					</div>
					<div class="col-md-6 py-2 justify-content-center d-flex">
					<button class="btn btn-sm btn-flat eng_xxxs bg-darkAmber fg-lightGray px-3"> <i class="fas fa-save"></i>&nbsp;Search </button>
				</div> <!-- ./col-md-6 -->
			</div> <!-- ./row -->

		</div> <!-- ./form_section -->
	</div> <!-- ./col12 -->
</div> <!-- ./row -->
</div> <!-- ./container -->



@endsection

@section('customscripts')
@include('serviceview.sevana_pensioners_search_script_eng')
@endsection
