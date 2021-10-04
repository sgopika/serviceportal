	<!--Created By Pranav V V -->
<script>
	$('#SEARCHVALUE').on('change',function(e){
		var regsaid = /^[a-zA-Z0-9]{2,20}$/;
		value=$('#SEARCHVALUE').val();

		if(value.search(regsaid) != 0)
		{
			$('#SEARCHVALUE').val('');
			$("#SEARCHVALUE").focus();
			$('#SEARCHVALUE_LABEL').show();
			$("#SEARCHVALUE_LABEL").html("Check  Search Value !").css("color","red");
		}
		else
		{
			$('#SEARCHVALUE_LABEL').hide();
		}
	});
</script>