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


$("#applicantname").change(function(){
    var nameval = this.value;
    var tested = new RegExp('^[a-zA-Z \s]+$');
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

$("#uid").change(function(){
    var uidval = this.value;
    var uidlength = $('#uid').val().length;
    if(uidlength != 12 || !$.isNumeric(uidval))
    {
        $('#uid').val('');
        $('#uiderror').slideDown("slow");

    }
    else
    {
        $('#uiderror').hide();
         
    }

});

$("#housenameno").change(function(){
    var housenoval = this.value;
    var tested = new RegExp('^[a-zA-Z0-9-/() \s]+$');
    if (!tested.test(housenoval))
    {
        $('#housenameno').val('');
        $('#housenamenoerror').slideDown("slow");

    }
    else
    {
        $('#housenamenoerror').hide();
         
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

$('#fromyear').on('change ', function() {
    $('#fromyearerror').hide();
    var fromyear = $("#fromyear").val();
    var tested = new RegExp('^[0-9]+$');
   
    if(fromyear.length!=4 || !tested.test(fromyear)){
        $("#fromyear").val('');
        $('#fromyearerror').slideDown("slow");
        
    } 
    else
    {
        $('#fromyearerror').hide();
         
    }
});


$("#fromyear").keypress(function(e){
  var keyCode = e.which;
  if(keyCode == 69 || keyCode == 101)
  {
    e.preventDefault();
     $("#fromyear").val('');
  }
});

$('#toyear').on('change ', function() {
    $('#toyearerror').hide();
    var toyear = $("#toyear").val();
    var tested = new RegExp('^[0-9]+$');
   
    if(toyear.length!=4 || !tested.test(toyear)){
        $("#toyear").val('');
        $('#toyearerror').slideDown("slow");
        
    } 
    else
    {
        $('#toyearerror').hide();
         
    }
});


$("#toyear").keypress(function(e){
  var keyCode = e.which;
  if(keyCode == 69 || keyCode == 101)
  {
    e.preventDefault();
     $("#toyear").val('');
  }
});

$("#regno").change(function(){
    var regnoval = this.value;
    var tested = new RegExp('^[a-zA-Z0-9]+$');
    if (!tested.test(regnoval))
    {
        $('#regno').val('');
        $('#regnoerror').slideDown("slow");

    }
    else
    {
        $('#regnoerror').hide();
         
    }

});

$('#year').on('change ', function() {
    $('#yearerror').hide();
    var year = $("#year").val();
    var tested = new RegExp('^[0-9]+$');
    var d = new Date();
    var curryear =d.getFullYear();
    
    if(year.length!=4 || !tested.test(year)){
        $("#year").val('');
        $('#yearerror').slideDown("slow");
        $('#yearerror1').hide();
        
    } else if(year>curryear){
        $("#year").val('');
        $('#yearerror1').slideDown("slow");
        $('#yearerror').hide();
    }
    else
    {
        $('#yearerror').hide();
        $('#yearerror1').hide();
         
    }
});


$("#year").keypress(function(e){
  var keyCode = e.which;
  if(keyCode == 69 || keyCode == 101)
  {
    e.preventDefault();
     $("#year").val('');
  }
});

/*if($("#result").prop("checked", false))
{
    alert("Result Required");
}*/


$("#boarduniversity").change(function(){
    var boarduniversityval = this.value;
    var tested = new RegExp('^[a-zA-Z \s]+$');
    if (!tested.test(boarduniversityval))
    {
        $('#boarduniversity').val('');
        $('#boarduniversityerror').slideDown("slow");

    }
    else
    {
        $('#boarduniversityerror').hide();
         
    }

});

$("#certificatestatus").change(function(){
    var certificatestatusval = this.value;
    if((certificatestatusval==2)||(certificatestatusval==3)){
        $("#dupltrip_div").show();
    } else {
        $("#dupltrip_div").hide();
    }

});

$("#place").change(function(){
    var placeval = this.value;
    var tested = new RegExp('^[a-zA-Z \s]+$');
    if (!tested.test(placeval))
    {
        $('#place').val('');
        $('#placeerror').slideDown("slow");

    }
    else
    {
        $('#placeerror').hide();
         
    }

});

$('#applicationdate').on('change ', function(e) {
  var startdate = $("#applicationdate").val();
  var startdtsplit = startdate.split('/');
  var startyr = startdtsplit[2];
  var startmnt = startdtsplit[1];
  var startdt = startdtsplit[0];
  var startdatemgd = startmnt+'/'+startdt+'/'+startyr; 
  var startdatefnl = new Date(startdatemgd);
  
  var currdate = new Date();
  
  if(startdate==''){
   alert("Specify Application Date!");
   $("#applicationdate").focus();

  } else {
    if(startdatefnl == currdate)
    {
     return true;

    } else {
      alert("Application Date must be Current date")
      $("#applicationdate").val('');
      $("#applicationdate").focus();
    }
  }
   

}); 

$('#tradecertificate').bind('change', function() {
    
    var ext = $('#tradecertificate').val().split('.').pop().toLowerCase();
    if ($.inArray(ext, ['pdf']) == -1){
      $('#tradecertificateerror').slideDown("slow");
      $('#tradecertificateerror1').slideUp("slow");
     
     
    }else{
      var picsize = (this.files[0].size);
      if (picsize > 100000){
        $('#tradecertificateerror1').slideDown("slow");
        $('#tradecertificate').val('');
     
      }else{
     
        $('#tradecertificateerror1').slideUp("slow");
      }
      $('#tradecertificateerror').slideUp("slow");
    }
});

$('#marklists').bind('change', function() {
    
    var ext = $('#marklists').val().split('.').pop().toLowerCase();
    if ($.inArray(ext, ['pdf']) == -1){
      $('#marklistserror').slideDown("slow");
      $('#marklistserror1').slideUp("slow");
     
     
    }else{
      var picsize = (this.files[0].size);
      if (picsize > 100000){
        $('#marklistserror1').slideDown("slow");
        $('#marklists').val('');
     
      }else{
     
        $('#marklistserror1').slideUp("slow");
      }
      $('#marklistserror').slideUp("slow");
    }
});


</script>