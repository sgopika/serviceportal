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

$('#name_before_con').on('change ', function(e) {
  var testval = this.value;
  var tested = new RegExp('^[a-zA-Z., \s]+$');
  if (!tested.test(testval))
  {
    $('#name_before_con').val(''); 
    $('#name_before_conerror').slideDown("slow");
  }
  else
  {
     $('#name_before_conerror').hide();    
  }
      
}); 

$('#certificate_no').on('change ', function(e) {
  var testval = this.value;
  var tested = new RegExp('^[a-zA-Z0-9-/ \s]+$');
  if (!tested.test(testval))
  {
    $('#certificate_no').val(''); 
    $('#certificate_noerror').slideDown("slow");
  }
  else
  {
     $('#certificate_noerror').hide();    
  }
      
}); 

$('#religious_authority').on('change ', function(e) {
  var testval = this.value;
  var tested = new RegExp('^[a-zA-Z., \s]+$');
  if (!tested.test(testval))
  {
    $('#religious_authority').val(''); 
    $('#religious_authorityerror').slideDown("slow");
  }
  else
  {
     $('#religious_authorityerror').hide();    
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



$('#school_certificate').bind('change', function() {
    
    var ext = $('#school_certificate').val().split('.').pop().toLowerCase();
    if ($.inArray(ext, ['pdf']) == -1){
      $('#school_certificateerror').slideDown("slow");
      $('#school_certificateerror1').slideUp("slow");
     
     
    }else{
      var picsize = (this.files[0].size);
      if (picsize > 100000){
        $('#school_certificateerror1').slideDown("slow");
        $('#school_certificate').val('');
     
      }else{
     
        $('#school_certificateerror1').slideUp("slow");
      }
      $('#school_certificateerror').slideUp("slow");
    }
  });




$('#proof_caste').bind('change', function() {
    
    var ext = $('#proof_caste').val().split('.').pop().toLowerCase();
    if ($.inArray(ext, ['pdf']) == -1){
      $('#proof_casteerror').slideDown("slow");
      $('#proof_casteerror1').slideUp("slow");
     
     
    }else{
      var picsize = (this.files[0].size);
      if (picsize > 100000){
        $('#proof_casteerror1').slideDown("slow");
        $('#proof_caste').val('');
     
      }else{
     
        $('#proof_casteerror1').slideUp("slow");
      }
      $('#proof_casteerror').slideUp("slow");
    }
  });

  /*---------------------------------- End of Document Ready ---------------------------*/
});
</script>
