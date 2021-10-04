<!--Created By Pranav V V -->
@extends('layouts.basemain')
@section('content')
<div class="container-fluid homepage adminpage">
<div class="row ">
	<div class="col-12 py-2">
		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb breadbar justify-content-end">
		     <li class="breadcrumb-item eng_xxxs"><a href="{{ route('servicedash') }}">Dashboard</a></li>
		    <li class="breadcrumb-item eng_xxxs">Payment Details</li>
		  </ol>
		</nav>
	</div> <!-- col12 -->
	<div class="col-12 py-1 px-2 ">
		<p class="eng_xxs px-3 fg-darkBrown"> KSEB Payment Details </p>
	</div> <!-- ./col12 -->	
	<div class="col-12 md-whiteframe-2dp ">
		<div id="form_section">
			<div class="row customformrow">
				<div class="col-md-6 py-2">
					<label for="CONSUMER" class="eng_xxxs fg-darkBrown">Conusmer Number</label>
					<!-- <small id="HELPCONSUMER" class="form-text eng_xxxxs text-muted"></small> -->
				</div> <!-- ./col-md-6 -->
				<div class="col-md-6 py-2">
					<select class="form-control customform eng_xxxs fg-darkCrimson" id="CONSUMER" aria-describedby="HELPNAME">
						<option>--Select Consumer--</option>
					</select>
					<label id="CONSUMER_LABEL"></label>
				</div> <!-- ./col-md-6 -->

				<div class="col-md-6 py-2">
					<label for="MONTH" class="eng_xxxs fg-darkBrown">Months</label>
					<!-- <small id="HELPMONTH" class="form-text eng_xxxxs text-muted"></small> -->
				</div> <!-- ./col-md-6 -->
				<div class="col-md-6 py-2">
					<select class="form-control customform eng_xxxs fg-darkCrimson" id="MONTH" aria-describedby="HELPNAME" required>
						<option value="">--Select Month--</option>
						<option value="3">3 Months</option>
						<option value="6">6 Months</option>
						<option value="12">12 Months</option>
					</select>
					<label id="MONTH_LABEL"></label>
				</div> <!-- ./col-md-6 -->

			</div> <!-- ./row -->

			
			<!--<div class="row customformrow">
				<div class="col-md-6 py-2 justify-content-center d-flex">
					<button class="btn btn-sm btn-flat eng_xxxs bg-lightOrange fg-darkCrimson"> <i class="fas fa-broom"></i>&nbsp;Reset </button> &nbsp;&nbsp;
					</div>
					<div class="col-md-6 py-2 justify-content-center d-flex">
					<button class="btn btn-sm btn-flat eng_xxxs bg-darkAmber fg-lightGray px-3"> <i class="fas fa-save"></i>&nbsp;Save </button>
				</div>
			</div>-->

			<div class="row">
				<div class="col-md-12">
					<table class="table">
						<thead class="thead-dark">
						  <tr>
							<th scope="col">Receipt No</th>
							<th scope="col">Paid Amount</th>
							<th scope="col">Paid On</th>
							<th scope="col">Payment Mode</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						  </tr>
						</tbody>
					</table>
				</div>
			</div>

			
		</div> <!-- ./form_section -->
	</div> <!-- ./col12 -->
</div> <!-- ./row -->
</div> <!-- ./container -->
@endsection
