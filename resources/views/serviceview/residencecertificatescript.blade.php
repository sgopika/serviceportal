<!--  -->
<script>
$(document).ready(function(){ 

  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

$(function () {
    $('#myTab li:last-child a').tab('show')
  });

$('.dob').inputmask("date",{
    mask: "1/2/y",
    placeholder: "dd-mm-yyyy",
    leapday: "-02-29",
    separator: "/",
    alias: "dd/mm/yyyy"
});

$("#casteconverted").click(function() {
    if($(this).is(":checked")) {
        $("#checkboxchecked").show();
        $("#religion_before_con").prop('required',true);
        $("#category_before_con").prop('required',true);
        $("#caste_before_con").prop('required',true);
        $("#name_before_con").prop('required',true);
        $("#certificate_no").prop('required',true);
        $("#certificate_date").prop('required',true);
        $("#religious_authority").prop('required',true);
    } else {
        $("#checkboxchecked").hide();
    }
});




 
/*Validation*/

  $('#producedbefore').on('change ', function(e) {
  var testval = this.value;
  var tested = new RegExp('^[a-zA-Z. \s]+$');
  if (!tested.test(testval))
  {
    $('#producedbefore').val(''); 
    $('#producedbeforeerror').slideDown("slow");
  }
  else
  {
     $('#producedbeforeerror').hide();    
  }
      
});


 $('#applicant_name').on('change ', function(e) {
  var testval = this.value;
  var tested = new RegExp('^[a-zA-Z., \s]+$');
  if (!tested.test(testval))
  {
    $('#applicant_name').val(''); 
    $('#applicant_nameerror').slideDown("slow");
  }
  else
  {
     $('#applicant_nameerror').hide();    
  }
      
});  


$('#rationcard').bind('change', function() {
    
    var ext = $('#rationcard').val().split('.').pop().toLowerCase();
    if ($.inArray(ext, ['pdf']) == -1){
      $('#rationcarderror').slideDown("slow");
      $('#rationcarderror1').slideUp("slow");
     
     
    }else{
      var picsize = (this.files[0].size);
      if (picsize > 100000){
        $('#rationcarderror1').slideDown("slow");
        $('#rationcard').val('');
     
      }else{
     
        $('#rationcarderror1').slideUp("slow");
      }
      $('#rationcarderror').slideUp("slow");
    }
  });



$('#aadharno').bind('change', function() {
    
    var ext = $('#aadharno').val().split('.').pop().toLowerCase();
    if ($.inArray(ext, ['pdf']) == -1){
      $('#aadharnoerror').slideDown("slow");
      $('#aadharnoerror1').slideUp("slow");
     
     
    }else{
      var picsize = (this.files[0].size);
      if (picsize > 100000){
        $('#aadharnoerror1').slideDown("slow");
        $('#aadharno').val('');
     
      }else{
     
        $('#aadharnoerror1').slideUp("slow");
      }
      $('#aadharnoerror').slideUp("slow");
    }
  });


$('#electionid').bind('change', function() {
    
    var ext = $('#electionid').val().split('.').pop().toLowerCase();
    if ($.inArray(ext, ['pdf']) == -1){
      $('#electioniderror').slideDown("slow");
      $('#electioniderror1').slideUp("slow");
     
     
    }else{
      var picsize = (this.files[0].size);
      if (picsize > 100000){
        $('#electioniderror1').slideDown("slow");
        $('#electionid').val('');
     
      }else{
     
        $('#electioniderror1').slideUp("slow");
      }
      $('#electioniderror').slideUp("slow");
    }
  });


  /*---------------------------------- End of Document Ready ---------------------------*/
});
</script>
