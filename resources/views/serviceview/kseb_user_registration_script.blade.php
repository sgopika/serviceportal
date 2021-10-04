
	<!--Created By Pranav V V -->
	<script>
	// Consumer Number Validation

	$('#CONSUMERNUM').on('change ', function(e) {
		var testval = this.value;
		var tested = /^[1][1-3][0-9]{11}$/;
		if (testval.search(tested) != 0)
		{
			$('#CONSUMERNUM').val('');
			$("#CONSUMERNUM").focus();
			$('#CONSUMERNUM_LABEL').show();
			$("#CONSUMERNUM_LABEL").html("Check Consumer Number !").css("color","red");
			
		}
		else
		{
			$('#CONSUMERNUM_LABEL').hide();
		}
	});

	// Bill Number Validation

	$('#BILLNO').on('change ', function(e) {
		var testval = this.value;
		var tested = /^[a-zA-Z0-9]{5,13}$/;
		if (testval.search(tested) != 0)
		{
			$('#BILLNO').val('');
			$("#BILLNO").focus();
			$('#BILLNO_LABEL').show();
			$("#BILLNO_LABEL").html("Check Bill Number !").css("color","red");
			
		}
		else
		{
			$('#BILLNO_LABEL').hide();
		}
	});


	// User Id Validation

	$('#USERID').on('change ', function(e) {
		var testval = this.value;
		var tested = /^[a-zA-Z0-9_.@]{6,40}$/;
		if (testval.search(tested) != 0)
		{
			$('#USERID').val('');
			$("#USERID").focus();
			$('#USERID_LABEL').show();
			$("#USERID_LABEL").html("Check UserId !").css("color","red");
			
		}
		else
		{
			$('#USERID_LABEL').hide();
		}
	});


	// Password Validation

	$('#PASSWORD').on('change ', function(e) {
		var testval = this.value;
		var tested = /^((?=.*[^a-zA-Z])(?=.*[0-9])(?=.*\W)(?!.*\s).{8,12})$/;
		if (testval.search(tested) != 0)
		{
			$('#PASSWORD').val('');
			$("#PASSWORD").focus();
			$('#PASSWORD_LABEL').show();
			$("#PASSWORD_LABEL").html("Check Password !").css("color","red");
			
		}
		else
		{
			$('#PASSWORD_LABEL').hide();
		}
	});


	// Confirm password check

	$("#CONFIRMPASSWWORD").on('keyup', function(){
    var password = $("#PASSWORD").val();
    var confirmPassword = $("#CONFIRMPASSWWORD").val();
    if (password != confirmPassword)
	{
		$('#CONFIRMPASSWWORD_LABEL').show();
        $("#CONFIRMPASSWWORD_LABEL").html("Password does not match !").css("color","red");
	}
    else
	{
		$('#CONFIRMPASSWWORD_LABEL').hide();
	}
   });  


   	// Email Validation

	$('#EMAILID').on('change ', function(e) {
		var testval = this.value;
		var tested = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
		if (testval.search(tested) != 0)
		{
			$('#EMAILID').val('');
			$("#EMAILID").focus();
			$('#EMAILID_LABEL').show();
			$("#EMAILID_LABEL").html("Check Email !").css("color","red");
			
		}
		else
		{
			$('#EMAILID_LABEL').hide();
		}
	});


   //mobile number validation 

   $('#MOBILENUMBER').on('change ', function() {
	// $('#MOBILENUMBER_LABEL').hide();
		var mobile = $("#MOBILENUMBER").val();
		var tested = new RegExp('^[0-9]+$');
		if(mobile.length!=10 || !tested.test(mobile)){
			$("#MOBILENUMBER").val('');
			$('#MOBILENUMBER_LABEL').show();
			$("#MOBILENUMBER_LABEL").html("Check Mobile Number !").css("color","red");
		} else {
			$('#MOBILENUMBER_LABEL').hide();
		}
	});


	//Name Validation
	$('#NAME').on('change ', function() {
	// $('#NAME_LABEL').hide();
		var name = $("#NAME").val();
		var tested = new RegExp('^[a-zA-Z ]{2,60}$');
		if(!tested.test(name)){
			$("#NAME").val('');
			$('#NAME_LABEL').show();
			$("#NAME_LABEL").html("Check Name !").css("color","red");
		} else {
			$('#NAME_LABEL').hide();
		}
	});
	</script>