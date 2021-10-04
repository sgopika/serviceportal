<script type="text/javascript">

  var max_year=new Date().getFullYear().toString();
/*current date set */
  var dtToday = new Date();  
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var maxDate = year + '-' + month + '-' + day;
     $('#marklist_date').attr('max', maxDate);
      /*current date set */
$("#marklist_date").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy", "yearrange":{minyear: 1957, maxyear: max_year }});


$('#tradecertificate').on('click',function(){

if ($(this).is(':checked')) $('#tradefield').show();
else $('#tradefield').hide();
});

$('#marklist').on('click',function(){

if ($(this).is(':checked')) $('#marklistfield').show();
else $('#marklistfield').hide();
});

  $('#name').on('change ', function(e) {
  var testval = this.value;
  var tested = new RegExp('^[a-zA-Z. \s]+$');
  if (!tested.test(testval))
  {
    $('#name').val(''); 
     $('#nameerror').slideDown("slow");
  }
  else
  {
     $('#nameerror').hide();
     
  }
      
});
$('#tradefile').bind('change', function() {
    
    var ext = $('#tradefile').val().split('.').pop().toLowerCase();
    if ($.inArray(ext, ['pdf']) == -1){
      $('#tradefileerror').slideDown("slow");
      $('#tradefileerror1').slideUp("slow");
      $('#tradefile').val('');
     
    }else{
      var picsize = (this.files[0].size);
      if (picsize > 1000000){
        $('#tradefileerror1').slideDown("slow");
        $('#tradefile').val('');
     
      }else{
     
        $('#tradefileerror1').slideUp("slow");
      }
      $('#tradefileerror').slideUp("slow");
    }
  });

$('#marklistfile').bind('change', function() {
    
    var ext = $('#marklistfile').val().split('.').pop().toLowerCase();
    if ($.inArray(ext, ['pdf']) == -1){
      $('#marklistfileerror').slideDown("slow");
      $('#marklistfileerror1').slideUp("slow");
      $('#marklistfile').val('');
     
    }else{
      var picsize = (this.files[0].size);
      if (picsize > 1000000){
        $('#marklistfileerror1').slideDown("slow");
        $('#marklistfile').val('');
     
      }else{
     
        $('#marklistfileerror1').slideUp("slow");
      }
      $('#marklistfileerror').slideUp("slow");
    }
  });

  $('#uid').on('change ', function(e) {
  var testval = this.value;
  var tested = new RegExp('^[0-9\s]+$');
  if (!tested.test(testval))
  {
    $('#uid').val(''); 
     $('#uiderror').slideDown("slow");
  }
  else
  {
     $('#uiderror').hide();
     
  }
      
});

$('#year').on('change ', function(e) {
  var testval = this.value;
  var tested = new RegExp('^[0-9\/\s]+$');
  if (!tested.test(testval))
  {
    $('#year').val(''); 
     $('#yearerror').slideDown("slow");
  }
  else
  {
     $('#yearerror').hide();
     
  }
      
});

    $('#mobile').on('change ', function(e) {
  var testval = this.value;
  var tested = new RegExp('^[0-9\s]{10}$');
  if (!tested.test(testval))
  {
    $('#mobile').val(''); 
     $('#mobileerror').slideDown("slow");
  }
  else
  {
     $('#mobileerror').hide();
     
  }
      
});

$('#email').on('change ', function(e) {
  var testval = this.value;
  var tested = new RegExp('^[A-Za-z0-9@.\s]+@+[a-zA-Z0-9\s]+[.]+[a-zA-Z0-9]+$');
  if (!tested.test(testval))
  {
    $('#email').val(''); 
     $('#emailerror').slideDown("slow");
  }
  else
  {
     $('#emailerror').hide();
     
  }
      
});

$('#purpose').on('change ', function(e) {
  var testval = this.value;
  var tested = new RegExp('^[A-Za-z0-9\s]+$');
  if (!tested.test(testval))
  {
    $('#purpose').val(''); 
     $('#purposeerror').slideDown("slow");
  }
  else
  {
     $('#purposeerror').hide();
     
  }
      
});
$('#regno').on('change ', function(e) {
  var testval = this.value;
  var tested = new RegExp('^[A-Za-z0-9\s]+$');
  if (!tested.test(testval))
  {
    $('#regno').val(''); 
     $('#regnoerror').slideDown("slow");
  }
  else
  {
     $('#regnoerror').hide();
     
  }
      
});
$('#veno').on('change ', function(e) {
  var testval = this.value;
  var tested = new RegExp('^[A-Za-z0-9\s]+$');
  if (!tested.test(testval))
  {
    $('#veno').val(''); 
     $('#venoerror').slideDown("slow");
  }
  else
  {
     $('#venoerror').hide();
     
  }
      
});
$('#vemarklist').on('change ', function(e) {
  var testval = this.value;
  var tested = new RegExp('^[A-Za-z0-9\s]+$');
  if (!tested.test(testval))
  {
    $('#vemarklist').val(''); 
     $('#vemarklisterror').slideDown("slow");
  }
  else
  {
     $('#vemarklisterror').hide();
     
  }
      
});

$('#place').on('change ', function(e) {
  var testval = this.value;
  var tested = new RegExp('^[A-Za-z \s]+$');
  if (!tested.test(testval))
  {
    $('#place').val(''); 
     $('#placeerror').slideDown("slow");
  }
  else
  {
     $('#placeerror').hide();
     
  }
      
});
$('#captcha').on('change ', function(e) {
  var testval = this.value;
  var tested = new RegExp('^[A-Za-z0-9\s]+$');
  if (!tested.test(testval))
  {
    $('#captcha').val(''); 
     $('#captchaerror').slideDown("slow");
  }
  else
  {
     $('#captchaerror').hide();
     
  }
      
});


</script>