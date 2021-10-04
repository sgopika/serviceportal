
<script src="assets/js/validation.js"> </script>
<script src="assets/js/additional-methods.min.js"> </script>
<script type="text/javascript">
    $( document ).ready( function () {

     
     $( "#ajaxmodalform1" ).validate( {

        rules: {
          
          edistrict_no: {
            select: true,
            pattern: '^[0-9\s]$',
            minlength: 1,
            maxlength:1
          },
          certificate_type: {
            select: true,
            pattern: '^[0-9\s]$',
            minlength: 1,
            maxlength:1
          },
          certificate_purpose: {
            select: true,
            pattern: '^[0-9\s]$',
            minlength: 1,
            maxlength:1
          },
          to_be_produced_before: {
            required: true,
            pattern: new RegExp('^[a-zA-Z0-9 .,\s]+$'),
            minlength: 3,
            maxlength:100
          },
          
          district: {
            select: true,
            pattern: '^[0-9\s]$',
            minlength: 1,
            maxlength:1
          },
          
          taluk: {
            select: true,
            pattern: '^[0-9\s]$',
            minlength: 1,
            maxlength:1
          },
         
          village: {
            select: true,
            pattern: '^[0-9\s]$',
            minlength: 1,
            maxlength:1
          },
          
          
          subdivno: {
            required: true,
            pattern: new RegExp('^[a-zA-Z \s]+$'),
            minlength: 3,
            maxlength:100
          },
          re_serveyblock: {
            required: true,
            pattern: new RegExp('^[a-zA-Z \s]+$'),
            minlength: 3,
            maxlength:100
          },
          re_serveyno: {
            required: true,
            pattern: new RegExp('^[a-zA-Z \s]+$'),
            minlength: 3,
            maxlength:100
          },
          thandapperno: {
            required: true,
            pattern: new RegExp('^[a-zA-Z \s]+$'),
            minlength: 3,
            maxlength:100
          },
          landtype: {
            required: true,
            pattern: new RegExp('^[a-zA-Z \s]+$'),
            minlength: 3,
            maxlength:100
          },
          extent: {
            required: true,
            pattern: '^[0-9\s]$',
            minlength: 3,
            maxlength:100
          },
          marketvalue: {
            required: true,
            pattern: '^[0-9\s]$',
            minlength: 3,
            maxlength:100
          },
          liability_ammount: {
            required: true,
            pattern: '^[0-9\s]$',
            minlength: 3,
            maxlength:100
          },
          applicant_name: {
            required: true,
            pattern: '^[a-zA-Z \s]+$',
            minlength: 3,
            maxlength:100
          },
          relation : {
            select: true,
            pattern: '^[0-9\s]$',
            minlength: 1,
            maxlength:1
          },
          declation :  {
           
            required: function(elem)
            {
                return $("input:checked").length > 0;
            }

          }
          
        },
        messages: {
          edistrict_no: {
            select: "Select a valid ID",
            pattern: "Please Select a valid ID",
            minlength: "Your Username must consist of at least 1 characters",
            maxlength: "Your Username must consist of at most 1 characters"
          },
          certificate_type: {
            select: "Select a certificate type",
            pattern: "Please Select a certificate type",
            minlength: "Your Username must consist of at least 1 characters",
            maxlength: "Your Username must consist of at most 1 characters"
          },
          certificate_purpose: {
            select: "Select a purpose",
            pattern: "Please Select a purpose",
            minlength: "Your Username must consist of at least 1 characters",
            maxlength: "Your Username must consist of at most 1 characters"
          },
          to_be_produced_before: {
            required: "This field is required",
            pattern: "Only A-Za-Z0-9 space fullstop and coma are allow",
            minlength: "Your Username must consist of at least 3 characters",
            maxlength: "Your Username must consist of at most 100 characters"
          },
          district: {
            select: "Select a District",
            pattern: "Please Select a District",
            minlength: "Your Username must consist of at least 1 characters",
            maxlength: "Your Username must consist of at most 1 characters"
          },
          
          taluk: {
            select: "Select a taluk",
            pattern: "Please Select a taluk",
            minlength: "Your Username must consist of at least 1 characters",
            maxlength: "Your Username must consist of at most 1 characters"
          },
          
          village: {
            select: "Select a village",
            pattern: "Please Select a village",
            minlength: "Your Username must consist of at least 1 characters",
            maxlength: "Your Username must consist of at most 1 characters"
          },
         subdivno : {
            required: "This field is required",
            pattern: "Only A-Za-Z are allow",
            minlength: "Your Username must consist of at least 3 characters",
            maxlength: "Your Username must consist of at most 100 characters"
          },
          re_serveyblock : {
            required: "This field is required",
            pattern: "Only A-Za-Z are allow",
            minlength: "Your Username must consist of at least 3 characters",
            maxlength: "Your Username must consist of at most 100 characters"
          },
          re_serveyno : {
            required: "This field is required",
            pattern: "Only A-Za-Z are allow",
            minlength: "Your Username must consist of at least 3 characters",
            maxlength: "Your Username must consist of at most 100 characters"
          },
          thandapperno : {
            required: "This field is required",
            pattern: "Only A-Za-Z are allow",
            minlength: "Your Username must consist of at least 3 characters",
            maxlength: "Your Username must consist of at most 100 characters"
          },
          landtype : {
            required: "This field is required",
            pattern: "Only A-Za-Z are allow",
            minlength: "Your Username must consist of at least 3 characters",
            maxlength: "Your Username must consist of at most 100 characters"
          },
           extent : {
            required: "This field is required",
            pattern: "Only A-Za-Z are allow",
            minlength: "Your Username must consist of at least 1 characters",
            maxlength: "Your Username must consist of at most 5 characters"
          },
           marketvalue : {
            required: "This field is required",
            pattern: "Only A-Za-Z are allow",
            minlength: "Your Username must consist of at least 3 characters",
            maxlength: "Your Username must consist of at most 10 characters"
          },
           liability_ammount : {
            required: "This field is required",
            pattern: "Only A-Za-Z are allow",
            minlength: "Your Username must consist of at least 3 characters",
            maxlength: "Your Username must consist of at most 10 characters"
          },

          applicant_name : {
            required: "This field is required",
            pattern: "Only A-Za-Z are allow",
            minlength: "Your Username must consist of at least 3 characters",
            maxlength: "Your Username must consist of at most 5 characters"
          },
          relation : {
            select: "Select a village",
            pattern: "Please Select a village",
            minlength: "Your Username must consist of at least 1 characters",
            maxlength: "Your Username must consist of at most 1 characters"
          },
        },
        errorElement: "em",
        errorPlacement: function ( error, element ) {
          // Add the `invalid-feedback` class to the error element
          error.addClass( "invalid-feedback" );

          if ( element.prop( "type" ) === "checkbox" ) {
            error.insertAfter( element.next( "label" ) );
          } else {
            error.insertAfter( element );
          }
        },
        highlight: function ( element, errorClass, validClass ) {
          $( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
        },
        unhighlight: function (element, errorClass, validClass) {
          $( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
        },
        
      } );

$('#aadhar_card').bind('change', function() {
    
    var ext = $('#aadhar_card').val().split('.').pop().toLowerCase();
    if ($.inArray(ext, ['pdf']) == -1){
      $('#aadhar_carderror').slideDown("slow");
      $('#aadhar_carderror1').slideUp("slow");
      $('#aadhar_card').val('');
     
    }else{
      var picsize = (this.files[0].size);
      if (picsize > 1000000){
        $('#aadhar_carderror1').slideDown("slow");
        $('#aadhar_card').val('');
     
      }else{
     
        $('#aadhar_carderror1').slideUp("slow");
      }
      $('#aadhar_carderror').slideUp("slow");
    }
  });


$('#encumbrance_certificate').bind('change', function() {
    
    var ext = $('#encumbrance_certificate').val().split('.').pop().toLowerCase();
    if ($.inArray(ext, ['pdf']) == -1){
      $('#encumbrance_certificateerror').slideDown("slow");
      $('#encumbrance_certificateerror1').slideUp("slow");
      $('#encumbrance_certificate').val('');
     
    }else{
      var picsize = (this.files[0].size);
      if (picsize > 1000000){
        $('#encumbrance_certificateerror1').slideDown("slow");
        $('#encumbrance_certificate').val('');
     
      }else{
     
        $('#encumbrance_certificateerror1').slideUp("slow");
      }
      $('#encumbrance_certificateerror').slideUp("slow");
    }
  });

$('#tax_receipt').bind('change', function() {
    
    var ext = $('#tax_receipt').val().split('.').pop().toLowerCase();
    if ($.inArray(ext, ['pdf']) == -1){
      $('#tax_receipterror').slideDown("slow");
      $('#tax_receipterror1').slideUp("slow");
      $('#tax_receipt').val('');
     
    }else{
      var picsize = (this.files[0].size);
      if (picsize > 1000000){
        $('#tax_receipterror1').slideDown("slow");
        $('#tax_receipt').val('');
     
      }else{
     
        $('#tax_receipterror1').slideUp("slow");
      }
      $('#tax_receipterror').slideUp("slow");
    }
  });

$('#election_id_card').bind('change', function() {
    
    var ext = $('#election_id_card').val().split('.').pop().toLowerCase();
    if ($.inArray(ext, ['pdf']) == -1){
      $('#election_id_carderror').slideDown("slow");
      $('#election_id_carderror1').slideUp("slow");
      $('#election_id_card').val('');
     
    }else{
      var picsize = (this.files[0].size);
      if (picsize > 1000000){
        $('#election_id_carderror1').slideDown("slow");
        $('#election_id_card').val('');
     
      }else{
     
        $('#election_id_carderror1').slideUp("slow");
      }
      $('#election_id_carderror').slideUp("slow");
    }
  });

$('#pattayam').bind('change', function() {
    
    var ext = $('#pattayam').val().split('.').pop().toLowerCase();
    if ($.inArray(ext, ['pdf']) == -1){
      $('#pattayamerror').slideDown("slow");
      $('#pattayamerror1').slideUp("slow");
      $('#pattayam').val('');
     
    }else{
      var picsize = (this.files[0].size);
      if (picsize > 1000000){
        $('#pattayamerror1').slideDown("slow");
        $('#pattayam').val('');
     
      }else{
     
        $('#pattayamerror1').slideUp("slow");
      }
      $('#pattayamerror').slideUp("slow");
    }
  });

    $( "#ajaxmodalform2" ).validate( {

        rules: {
          tax_receipt: {
              required: true,
              extension:'pdf',
              },
              election_id_card:{
              required: true,
              extension:'pdf',

              },
              encumbrance_certificate: {
              required: true,
              extension:'pdf',
              },
              aadhar_card:{
              required: true,
              extension:'pdf',

              },
              pattayam: {
              required: true,
              extension:'pdf',
              },
              tax_receipt_rm : {
                required: true,
                pattern: new RegExp('^[a-zA-Z0-9 .\s]+$'),
                minlength: 3,
                maxlength:100
              },
              encumbrance_certificate_rm : {
                required: true,
                pattern: new RegExp('^[a-zA-Z0-9 .\s]+$'),
                minlength: 3,
                maxlength:100
              },
              aadhar_card_rm : {
                required: true,
                pattern: new RegExp('^[a-zA-Z0-9 .\s]+$'),
                minlength: 3,
                maxlength:100
              },
              pattayam_rm : {
                required: true,
                pattern: new RegExp('^[a-zA-Z0-9 .\s]+$'),
                minlength: 3,
                maxlength:100
              },
              election_id_card_rm :{
                required: true,
                pattern: new RegExp('^[a-zA-Z0-9 .\s]+$'),
                minlength: 3,
                maxlength:100
              },
              election_id_card_no : {
                required: true,
                pattern: new RegExp('^[a-zA-Z0-9 .\s]+$'),
                minlength: 3,
                maxlength:100
              },
              tax_receipt_no :{
                required: true,
                pattern: new RegExp('^[a-zA-Z0-9 .\s]+$'),
                minlength: 3,
                maxlength:100
              },
              aadhar_card_no :{
                required: true,
                pattern: new RegExp('^[a-zA-Z0-9 .\s]+$'),
                minlength: 3,
                maxlength:100
              },
              encumbrance_certificate_no :{
                required: true,
                pattern: new RegExp('^[a-zA-Z0-9 .\s]+$'),
                minlength: 3,
                maxlength:100
              },
              pattayam_no : {
                required: true,
                pattern: new RegExp('^[a-zA-Z0-9 .\s]+$'),
                minlength: 3,
                maxlength:100
              },
              
          
        },
        messages: {
          tax_receipt: {
              required: "This field is required",
              extension:'only pdf areallowded',
              },
              encumbrance_certificate:{
              required: "This field is required",
              extension:'only pdf are allowded',
              },
              aadhar_card:{
              required: "This field is required",
              extension:'only pdf are allowded',
              },
              election_id_card:{
              required: "This field is required",
              extension:'only pdf are allowded',
              },
              pattayam:{
              required: "This field is required",
              extension:'only pdf are allowded',
              },
              tax_receipt_rm :{
                required: "This field is required",
                pattern: "Only A-Za-Z are allow",
                minlength: "Your Username must consist of at least 3 characters",
                maxlength: "Your Username must consist of at most 100 characters"
              },
              tax_receipt_no : {
                required: "This field is required",
                pattern: "Only A-Za-Z are allow",
                minlength: "Your Username must consist of at least 3 characters",
                maxlength: "Your Username must consist of at most 100 characters"
              },
              election_id_card_no :{
                required: "This field is required",
                pattern: "Only A-Za-Z are allow",
                minlength: "Your Username must consist of at least 3 characters",
                maxlength: "Your Username must consist of at most 100 characters"
              },
              election_id_card_rm :{
                required: "This field is required",
                pattern: "Only A-Za-Z are allow",
                minlength: "Your Username must consist of at least 3 characters",
                maxlength: "Your Username must consist of at most 100 characters"
              },
              encumbrance_certificate_no :{
                required: "This field is required",
                pattern: "Only A-Za-Z are allow",
                minlength: "Your Username must consist of at least 3 characters",
                maxlength: "Your Username must consist of at most 100 characters"
              },
              encumbrance_certificate_rm :{
                required: "This field is required",
                pattern: "Only A-Za-Z are allow",
                minlength: "Your Username must consist of at least 3 characters",
                maxlength: "Your Username must consist of at most 100 characters"
              },
              aadhar_card_rm : {
                required: "This field is required",
                pattern: "Only A-Za-Z are allow",
                minlength: "Your Username must consist of at least 3 characters",
                maxlength: "Your Username must consist of at most 100 characters"
              },
              aadhar_card_no :{
              	required: "This field is required",
                pattern: "Only A-Za-Z are allow",
                minlength: "Your Username must consist of at least 3 characters",
                maxlength: "Your Username must consist of at most 100 characters"
              },
              pattayam_rm :{
                required: "This field is required",
                pattern: "Only A-Za-Z are allow",
                minlength: "Your Username must consist of at least 3 characters",
                maxlength: "Your Username must consist of at most 100 characters"
              },
              pattayam_no : {
                required: "This field is required",
                pattern: "Only A-Za-Z are allow",
                minlength: "Your Username must consist of at least 3 characters",
                maxlength: "Your Username must consist of at most 100 characters"
              }

        },
        errorElement: "em",
        errorPlacement: function ( error, element ) {
          // Add the `invalid-feedback` class to the error element
          error.addClass( "invalid-feedback" );

          if ( element.prop( "type" ) === "checkbox" ) {
            error.insertAfter( element.next( "label" ) );
          } else {
            error.insertAfter( element );
          }
        },
        highlight: function ( element, errorClass, validClass ) {
          $( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
        },
        unhighlight: function (element, errorClass, validClass) {
          $( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
        },
        
      } );
      

        jQuery.validator.addMethod(
              "select",
              function(value, element) {      
                if (element.value == "none")
                {
                  return false;
                }
                else return true;
              },
              "Please select an option."
            );    
    } );
</script>