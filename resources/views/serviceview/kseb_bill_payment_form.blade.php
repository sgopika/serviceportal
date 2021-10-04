<!--Created By Pranav V V -->
@extends('layouts.basemain')
@section('content')
<!-- Start of breadcrumb -->
<div class="container-fluid homepage adminpage">
<div class="row ">
	<div class="col-12 py-2">
		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb breadbar justify-content-end">
		     <li class="breadcrumb-item eng_xxxs"><a href="{{ route('servicedash') }}">Dashboard</a></li>
		    <li class="breadcrumb-item eng_xxxs">Billing History</li>
		  </ol>
		</nav>
	</div> <!-- col12 -->
	<div class="col-12 py-1 px-2 ">
		<p class="eng_xxs px-3 fg-darkBrown"> KSEB Billing History </p>
	</div> <!-- ./col12 -->	
	<div class="col-12 md-whiteframe-2dp ">
		<div id="form_section">
            <form action="" method="" onsubmit="return Validation()">
				<div class="row customformrow">
					<div class="col-md-12">
						<table class="table">
							<thead>
								<tr>
									<th scope="col">Consumer Number</th>
									<th scope="col" class="text-right">Due Amount (<i class="fas fa-rupee-sign"></i>)</th>
									<th scope="col" class="text-right">Payable (<i class="fas fa-rupee-sign"></i>)</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>124565484545444</td>
									<td class="text-right">0.00</td>
									<td class="text-right">5.00</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-md-12">
						<p class="text-center">There are no outstanding bills against this Consumer Number.</p>
					</div>
					<div class="col-md-6 py-2">
						<label for="ADVANCEAMOUNT" class="eng_xxxs fg-darkBrown">Please enter advance amount</label>
					</div> <!-- ./col-md-6 -->
					<div class="col-md-6 py-2">
						<input type="number" class="form-control customform eng_xxxs fg-darkCrimson" id="ADVANCEAMOUNT" aria-describedby="ADAVNCE AMOUNT" value="0.00" required maxlength="13">
						<label id="ADVANCEAMOUNT_LABEL"></label>
					</div> <!-- ./col-md-6 -->
					<div class="col-md-12">
						<p class="text-right">TOTAL AMOUNT PAYABLE FOR ALL REGISTERED CONSUMERS : <i class="fas fa-rupee-sign"></i> <span id="TOTALPAYABLE">0.00</span></p>
					</div>
					<div class="col-md-12">
						<p class="text-center"><i>Due amount will be updated only tomorrow in case of bills paid today.</i></p>
						<input type="hidden" id="TOTAL" name="" value="0.00" />
					</div>
				</div> <!-- ./row -->

				
				<div class="row customformrow">
					<div class="col-md-12 py-2 justify-content-center d-flex">
						<button type="submit" class="btn btn-sm btn-flat eng_xxxs bg-darkAmber fg-lightGray px-3" id="SUBMIT" disabled> Proceed To Pay </button>
					</div>
				</div>

			</form>
			
			</div>




		</div> <!-- ./form_section -->
	</div> <!-- ./col12 -->
</div> <!-- ./row -->
</div> <!-- ./container -->




@endsection

@section('customscripts')
@include('serviceview.kseb_bill_payment_script')
@endsection
