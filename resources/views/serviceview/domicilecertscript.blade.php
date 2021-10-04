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

    $("#dupltrip_div").hide();

});

$('.dob').inputmask("date",{
    mask: "1/2/y",
    placeholder: "dd-mm-yyyy",
    leapday: "-02-29",
    separator: "/",
    alias: "dd/mm/yyyy"
});


$("#producedbefore").change(function(){
    var nameval = this.value;
    var tested = new RegExp('^[a-zA-Z. \s]+$');
    if (!tested.test(nameval))
    {
        $('#producedbefore').val('');
        $('#producedbeforeerror').slideDown("slow");

    }
    else
    {
        $('#producedbeforeerror').hide();
         
    }

});

$("#applicantname").change(function(){
    var nameval = this.value;
    var tested = new RegExp('^[a-zA-Z. \s]+$');
    if (!tested.test(nameval))
    {
        $('#applicantname').val('');
        $('#applicantnameerror').slideDown("slow");

    }
    else
    {
        $('#applicantnameerror').hide();
         
    }

});


$("#otp").change(function(){
    var otpval = this.value;
    var otplength = $('#otp').val().length;
    if(otplength != 12 || !$.isNumeric(otpval))
    {
        $('#otp').val('');
        $('#otperror').slideDown("slow");

    }
    else
    {
        $('#otperror').hide();
         
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
        $('#rationcarderror').val('');
     
      }else{
     
        $('#rationcarderror1').slideUp("slow");
      }
      $('#rationcarderror').slideUp("slow");
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

$('#schoolcertificate').bind('change', function() {
    
    var ext = $('#schoolcertificate').val().split('.').pop().toLowerCase();
    if ($.inArray(ext, ['pdf']) == -1){
      $('#schoolcertificateerror').slideDown("slow");
      $('#schoolcertificateerror1').slideUp("slow");
     
     
    }else{
      var picsize = (this.files[0].size);
      if (picsize > 100000){
        $('#schoolcertificateerror1').slideDown("slow");
        $('#schoolcertificate').val('');
     
      }else{
     
        $('#schoolcertificateerror1').slideUp("slow");
      }
      $('#schoolcertificateerror').slideUp("slow");
    }
});

$('#birthcertificate').bind('change', function() {
    
    var ext = $('#birthcertificate').val().split('.').pop().toLowerCase();
    if ($.inArray(ext, ['pdf']) == -1){
      $('#birthcertificateerror').slideDown("slow");
      $('#birthcertificateerror1').slideUp("slow");
     
     
    }else{
      var picsize = (this.files[0].size);
      if (picsize > 100000){
        $('#birthcertificateerror1').slideDown("slow");
        $('#birthcertificate').val('');
     
      }else{
     
        $('#birthcertificateerror1').slideUp("slow");
      }
      $('#birthcertificateerror').slideUp("slow");
    }
});


</script>