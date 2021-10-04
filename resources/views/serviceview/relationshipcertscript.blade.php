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

$("#name").change(function(){
    var nameval = this.value;
    var tested = new RegExp('^[a-zA-Z. \s]+$');
    if (!tested.test(nameval))
    {
        $('#name').val('');
        $('#nameerror').slideDown("slow");

    }
    else
    {
        $('#nameerror').hide();
         
    }

});

$("#address").change(function(){
    var nameval = this.value;
    var tested = new RegExp('^[a-zA-Z0-9-,./() \s]+$');
    if (!tested.test(nameval))
    {
        $('#address').val('');
        $('#addresserror').slideDown("slow");

    }
    else
    {
        $('#addresserror').hide();
         
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

$('#aadharcard').bind('change', function() {
    
    var ext = $('#aadharcard').val().split('.').pop().toLowerCase();
    if ($.inArray(ext, ['pdf']) == -1){
      $('#aadharcarderror').slideDown("slow");
      $('#aadharcarderror1').slideUp("slow");
     
     
    }else{
      var picsize = (this.files[0].size);
      if (picsize > 100000){
        $('#aadharcarderror1').slideDown("slow");
        $('#rationcarderror').val('');
     
      }else{
     
        $('#aadharcarderror1').slideUp("slow");
      }
      $('#aadharcarderror').slideUp("slow");
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



var i = 0;
       
$("#add").click(function(){

    ++i;

    $("#dynamicTable").append('<tr><td><input type="text" name="addmore['+i+'][nameofperson]" id="nameofperson'+i+'" placeholder="Enter Name" class="form-control nameofperson" /></td><td><select class="form-control customform eng_xxxs fg-darkCrimson" name="addmore['+i+'][gender]" id="gender'+i+'" aria-describedby="HELPNAME2"><option>Default select</option></select></td><td><select class="form-control customform eng_xxxs fg-darkCrimson" name="addmore['+i+'][relationship]" id="relationship'+i+'" aria-describedby="HELPNAME2"><option>Default select</option></select></td><td><input type="text" name="addmore['+i+'][age]" id="age'+i+'"  placeholder="Enter Age" class="form-control" minlength="1" maxlength="3" /></td><td><input type="text" name="addmore['+i+'][occupation]" id="occupation'+i+'" placeholder="Enter Occupation" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>');
});

$(document).on('click', '.remove-tr', function(){  
     $(this).parents('tr').remove();
}); 




</script>