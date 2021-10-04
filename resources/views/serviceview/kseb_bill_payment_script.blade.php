	<!--Created By Pranav V V -->
	<script>
	$('#ADVANCEAMOUNT').on('keyup ', function(e) {
		$('#TOTAL').val($('#ADVANCEAMOUNT').val());
		$("#TOTALPAYABLE").html($('#ADVANCEAMOUNT').val()).css("color","black");

		var testval = this.value;
		var tested = /^[0-9]\d{0,10}(\.\d{1,2})?$/;
		$('#TOTAL').val($('#ADVANCEAMOUNT').val());
		if (testval.search(tested) != 0)
		{
			$('#ADVANCEAMOUNT_LABEL').show();
			$("#ADVANCEAMOUNT_LABEL").html("Please enter only numbers upto 2 decimal places !").css("color","red");
			$("#SUBMIT").attr("disabled",true);
		}
		else
		{
			$('#ADVANCEAMOUNT_LABEL').hide();
			$("#SUBMIT").attr("disabled",false);
		}
	});

	$('#SUBMIT').on('click ', function(e) {
		var testval = $('#TOTAL').val();
		if(testval<=5)
		{
			$("#ADVANCEAMOUNT").focus();
			$('#ADVANCEAMOUNT').val('0.00');
			$("#TOTALPAYABLE").html('0.00').css("color","black");
			$('#TOTAL').val('0.00');
			$('#ADVANCEAMOUNT_LABEL').show();
			$("#ADVANCEAMOUNT_LABEL").html("Kindly pay more than Rs 5.00 !").css("color","red");
			$("#SUBMIT").attr("disabled",true);
		}
		else
		{
			$('#ADVANCEAMOUNT_LABEL').hide();
			$("#SUBMIT").attr("disabled",false);
		}
	});
    </script>
	