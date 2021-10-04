<!--Created By Pranav V V -->
@extends('layouts.basemain')
@section('content')
<div class="container-fluid homepage adminpage">
<div class="row ">
	<div class="col-12 py-2">
		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb breadbar justify-content-end">
		    <li class="breadcrumb-item eng_xxxs">Dashboard</li>
		    <li class="breadcrumb-item eng_xxxs">Transaction History</li>
		  </ol>
		</nav>
	</div> <!-- col12 -->
	<div class="col-12 py-1 px-2 ">
		<p class="eng_xxs px-3 fg-darkBrown"> KSEB Transaction History </p>
	</div> <!-- ./col12 -->	
	<div class="col-12 md-whiteframe-2dp ">
		<div id="form_section">
			<div class="row customformrow">
				<div class="col-md-6 py-2">
					<label for="SELECTFOR" class="eng_xxxs fg-darkBrown">Select For</label>
					<!-- <small id="HELPCONSUMER" class="form-text eng_xxxxs text-muted"></small> -->
				</div> <!-- ./col-md-6 -->
				<div class="col-md-6 py-2">
					<input id="SEARCHTYPE_LOGED" type="radio" name="SEARCHTYPE" value="rdbtnOpt1" checked="checked" onclick="hideConsumer();" /> <label for="SEARCHTYPE_LOGED"> Logged In User</label>
                    <input id="SEARCHTYPE_CONSUMER" type="radio" name="SEARCHTYPE" value="rdbtnOpt2"/> <label for="SEARCHTYPE_CONSUMER" onclick="showConsumer();"> Consumer Number</label> 
					<label id="SELECT_TYPE_LABEL"></label>
				</div> <!-- ./col-md-6 -->

                <div class="col-md-6 py-2 consumer_box" id="consumer1">
                    <label for="CONSUMERNO" class="eng_xxxs fg-darkBrown">Consumer No</label>
                    <!-- <small id="HELPMONTH" class="form-text eng_xxxxs text-muted"></small> -->
                </div> <!-- ./col-md-6 -->
                <div class="col-md-6 py-2 consumer_box" id="consumer2">
                    <select class="form-control customform eng_xxxs fg-darkCrimson" id="CONSUMERNO" aria-describedby="CONSUMERNO">
                        <option>--Select Consumer--</option>
                    </select>
                    <label id="CONSUMERNO_LABEL"></label>
                </div> <!-- ./col-md-6 -->

                <div class="col-md-6 py-2">
					<label for="PERIOD" class="eng_xxxs fg-darkBrown">Period</label>
					<!-- <small id="HELPMONTH" class="form-text eng_xxxxs text-muted"></small> -->
				</div> <!-- ./col-md-6 -->
				<div class="col-md-6 py-2">
					<select class="form-control customform eng_xxxs fg-darkCrimson" id="MONTH" aria-describedby="HELPNAME" required>
						<option value="">--Select Month--</option>
						<option value="3">3 Months</option>
						<option value="6">6 Months</option>
						<option value="12">12 Months</option>
					</select>
					<label id="PERIOD_LABEL"></label>
				</div> <!-- ./col-md-6 -->

			</div> <!-- ./row -->

			<!--<div class="row customformrow">
				<div class="col-md-6 py-2 justify-content-center d-flex">
					<button class="btn btn-sm btn-flat eng_xxxs bg-lightOrange fg-darkCrimson"> <i class="fas fa-broom"></i>&nbsp;Reset </button> &nbsp;&nbsp;
					</div>
					<div class="col-md-6 py-2 justify-content-center d-flex">
					<button class="btn btn-sm btn-flat eng_xxxs bg-darkAmber fg-lightGray px-3"> <i class="fas fa-save"></i>&nbsp;Save </button>
				</div>
			</div> -->


			<div class="row">
				<div class="col-md-12">
					<table class="table">
						<thead class="thead-dark">
						  <tr>
							<th scope="col">Generate Receipt</th>
							<th scope="col">Receipt No</th>
							<th scope="col">Transaction Id</th>
							<th scope="col">Bill No</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td><a class="btn btn-primary">Generate Reciept</a></td>
							<td></td>
							<td></td>
							<td></td>
						  </tr>
						</tbody>
					</table>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<p class="text-center">(*) PG Credit Amount and PG Service Charge is for single Transaction ID.</p>
				</div>
			</div>

		</div> <!-- ./form_section -->
	</div> <!-- ./col12 -->
</div> <!-- ./row -->
</div> <!-- ./container -->
@endsection

@section('customscripts')
@include('serviceview.kseb_transaction_history_script')
@endsection
