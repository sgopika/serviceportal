


mobile
emailid
appln_forwarded
reasonforappln
certificate_required
duplicatecert_earlier
details_duplicatecert
name
place
applicationdate
newspaper_cutting

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


$("#applicant_name").change(function(){
    var nameval = this.value;
    var tested = new RegExp('^[a-zA-Z \s]+$');
    if (!tested.test(nameval))
    {
        $('#applicant_name').val('');
        $('#applicant_nameerror').slideDown("slow");

    }
    else
    {
        $('#applicant_nameerror').hide();
         
    }

});

$("#uid_no").change(function(){
    var uidval = this.value;
    var uidlength = $('#uid_no').val().length;
    if(uidlength != 12 || !$.isNumeric(uidval))
    {
        $('#uid_no').val('');
        $('#uid_noerror').slideDown("slow");

    }
    else
    {
        $('#uid_noerror').hide();
         
    }

});


$('#dateofbirth').on('change ', function(e) {
  var startdate = $("#dateofbirth").val();
  var startdtsplit = startdate.split('/');
  var startyr = startdtsplit[2];
  var startmnt = startdtsplit[1];
  var startdt = startdtsplit[0];
  var startdatemgd = startmnt+'/'+startdt+'/'+startyr; 
  var startdatefnl = new Date(startdatemgd);
  
  var currdate = new Date();
  
  if(startdate==''){
   alert("Specify Date of birth!");
   $("#dateofbirth").focus();

  } else {
    if(startdatefnl == currdate)
    {
     return true;

    } else {
      alert("Application Date must be Current date")
      $("#dateofbirth").val('');
      $("#dateofbirth").focus();
    }
  }
   

}); 


$("#parentname").change(function(){
    var nameval = this.value;
    var tested = new RegExp('^[a-zA-Z \s]+$');
    if (!tested.test(nameval))
    {
        $('#parentname').val('');
        $('#parentnameerror').slideDown("slow");

    }
    else
    {
        $('#parentnameerror').hide();
         
    }

});

$("#houseno_name").change(function(){
    var housenoval = this.value;
    var tested = new RegExp('^[a-zA-Z0-9-/() \s]+$');
    if (!tested.test(housenoval))
    {
        $('#houseno_name').val('');
        $('#houseno_nameerror').slideDown("slow");

    }
    else
    {
        $('#houseno_nameerror').hide();
         
    }

});

$("#postoffice").change(function(){
    var postofficeval = this.value;
    var tested = new RegExp('^[a-zA-Z \s]+$');
    if (!tested.test(postofficeval))
    {
        $('#postoffice').val('');
        $('#postofficeerror').slideDown("slow");

    }
    else
    {
        $('#postofficeerror').hide();
         
    }

});

$("#city").change(function(){
    var postofficeval = this.value;
    var tested = new RegExp('^[a-zA-Z \s]+$');
    if (!tested.test(postofficeval))
    {
        $('#city').val('');
        $('#cityerror').slideDown("slow");

    }
    else
    {
        $('#cityerror').hide();
         
    }

});

$("#pincode").change(function(){
    var pinval = this.value;
    var pinlength = $('#pincode').val().length;
    if(pinlength != 6 || !$.isNumeric(pinval))
    {
        $('#pincode').val('');
        $('#pincodeerror').slideDown("slow");

    }
    else
    {
        $('#pincodeerror').hide();
         
    }

});

$('#phoneno').on('change ', function() {
    $('#phonenoerror').hide();
    var phoneno = $("#phoneno").val();
    var tested = new RegExp('^[0-9]+$');
   
    if(phoneno.length>12 || !tested.test(phoneno)){
        $("#phoneno").val('');
        $('#phonenoerror').slideDown("slow");
        
    } 
    else
    {
        $('#phonenoerror').hide();
         
    }
});

$('#mobile').on('change ', function() {
    $('#mobileerror').hide();
    var mobile = $("#mobile").val();
    var tested = new RegExp('^[0-9]+$');
   
    if(mobile.length!=10 || !tested.test(mobile)){
        $("#mobile").val('');
        $('#mobileerror').slideDown("slow");
        
    } 
    else
    {
        $('#mobileerror').hide();
         
    }
});

$("#mobile").keypress(function(e){
  var keyCode = e.which;
  if(keyCode == 69 || keyCode == 101)
  {
    e.preventDefault();
     $("#mobile").val('');
  }
});



$('#email').on('change ', function(e) {
  var testval = this.value;
  if(testval != '')
  {
    var tested = new RegExp('^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$');
    if (!tested.test(testval))
    {
      $('#email').val('');
      $('#emailerror').slideDown("slow");
      
    }
    else
    {
        $('#emailerror').hide();
         
    }
    
 }
});



$/*("#duplicatecert_earlier").click(function() {
	var radioValue = $('input:radio[name=duplicatecert_earlier]:checked').val(); 
	
    if(radioValue==1) 
    {
        $("#checkboxchecked").show();
        $("#details_duplicatecert").prop('required',true);
        $("#name").prop('required',true);
        
    }
     else 
     {
        $("#checkboxchecked").hide();
    }
});*/

$('input:radio[name="duplicatecert_earlier"]').change(
    function(){
        if (this.checked && this.value == 1) {
            $("#checkboxchecked").show();
        $("#details_duplicatecert").prop('required',true);
        $("#name").prop('required',true);
        }
        else{ $("#checkboxchecked").hide(); }
    });


 



$('#affidavit_upld').bind('change', function() {
    
    var ext = $('#affidavit_upld').val().split('.').pop().toLowerCase();
    if ($.inArray(ext, ['pdf','jpg', 'jpeg', 'bmp', 'png']) == -1){
      $('#affidavit_uplderror').slideDown("slow");
      $('#affidavit_uplderror1').slideUp("slow");
     
     
    }else{
      var picsize = (this.files[0].size);
      if (picsize > 500000){
        $('#school_certificateerror1').slideDown("slow");
        $('#school_certificate').val('');
     
      }else{
     
        $('#school_certificateerror1').slideUp("slow");
      }
      $('#school_certificateerror').slideUp("slow");
    }
  });

$('#newspaper_cutting').bind('change', function() {
    
    var ext = $('#newspaper_cutting').val().split('.').pop().toLowerCase();
    if ($.inArray(ext, ['pdf','jpg', 'jpeg', 'bmp', 'png']) == -1){
      $('#newspaper_cuttingerror').slideDown("slow");
      $('#newspaper_cuttingerror1').slideUp("slow");
     
     
    }else{
      var picsize = (this.files[0].size);
      if (picsize > 500000){
        $('#newspaper_cuttingerror1').slideDown("slow");
        $('#newspaper_cutting').val('');
     
      }else{
     
        $('#newspaper_cuttingerror1').slideUp("slow");
      }
      $('#newspaper_cuttingerror').slideUp("slow");
    }
  });

  /*---------------------------------- End of Document Ready ---------------------------*/
});
</script>
