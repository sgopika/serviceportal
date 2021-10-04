
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
          state_app: {
            select: true,
            pattern: '^[0-9\s]$',
            minlength: 1,
            maxlength:1
          },
          state_father: {
            select: true,
            pattern: '^[0-9\s]$',
            minlength: 1,
            maxlength:1
          },
          state_mother: {
            select: true,
            pattern: '^[0-9\s]$',
            minlength: 1,
            maxlength:1
          },
          district_app: {
            select: true,
            pattern: '^[0-9\s]$',
            minlength: 1,
            maxlength:1
          },
          district_father: {
            select: true,
            pattern: '^[0-9\s]$',
            minlength: 1,
            maxlength:1
          },
          district_mother: {
            select: true,
            pattern: '^[0-9\s]$',
            minlength: 1,
            maxlength:1
          },
          taluk_app: {
            select: true,
            pattern: '^[0-9\s]$',
            minlength: 1,
            maxlength:1
          },
          taluk_father: {
            select: true,
            pattern: '^[0-9\s]$',
            minlength: 1,
            maxlength:1
          },
          taluk_mother: {
            select: true,
            pattern: '^[0-9\s]$',
            minlength: 1,
            maxlength:1
          },
          village_app: {
            select: true,
            pattern: '^[0-9\s]$',
            minlength: 1,
            maxlength:1
          },
          village_father: {
            select: true,
            pattern: '^[0-9\s]$',
            minlength: 1,
            maxlength:1
          },
          village_mother: {
            select: true,
            pattern: '^[0-9\s]$',
            minlength: 1,
            maxlength:1
          },
          
          applicant_name: {
            required: true,
            pattern: new RegExp('^[a-zA-Z \s]+$'),
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
          state_app: {
            select: "Select a state",
            pattern: "Please Select a state",
            minlength: "Your Username must consist of at least 1 characters",
            maxlength: "Your Username must consist of at most 1 characters"
          },
          state_father: {
            select: "Select a state",
            pattern: "Please Select a state",
            minlength: "Your Username must consist of at least 1 characters",
            maxlength: "Your Username must consist of at most 1 characters"
          },
          state_mother: {
            select: "Select a state",
            pattern: "Please Select a state",
            minlength: "Your Username must consist of at least 1 characters",
            maxlength: "Your Username must consist of at most 1 characters"
          },
          district_app: {
            select: "Select a District",
            pattern: "Please Select a District",
            minlength: "Your Username must consist of at least 1 characters",
            maxlength: "Your Username must consist of at most 1 characters"
          },
          district_father: {
            select: "Select a District",
            pattern: "Please Select a District",
            minlength: "Your Username must consist of at least 1 characters",
            maxlength: "Your Username must consist of at most 1 characters"
          },
          district_mother: {
            select: "Select a District",
            pattern: "Please Select a District",
            minlength: "Your Username must consist of at least 1 characters",
            maxlength: "Your Username must consist of at most 1 characters"
          },
          taluk_app: {
            select: "Select a taluk",
            pattern: "Please Select a taluk",
            minlength: "Your Username must consist of at least 1 characters",
            maxlength: "Your Username must consist of at most 1 characters"
          },
          taluk_father: {
            select: "Select a taluk",
            pattern: "Please Select a taluk",
            minlength: "Your Username must consist of at least 1 characters",
            maxlength: "Your Username must consist of at most 1 characters"
          },
          taluk_mother: {
            select: "Select a taluk",
            pattern: "Please Select a taluk",
            minlength: "Your Username must consist of at least 1 characters",
            maxlength: "Your Username must consist of at most 1 characters"
          },
          village_app: {
            select: "Select a village",
            pattern: "Please Select a village",
            minlength: "Your Username must consist of at least 1 characters",
            maxlength: "Your Username must consist of at most 1 characters"
          },
          village_father: {
            select: "Select a village",
            pattern: "Please Select a village",
            minlength: "Your Username must consist of at least 1 characters",
            maxlength: "Your Username must consist of at most 1 characters"
          },
          village_mother: {
            select: "Select a village",
            pattern: "Please Select a village",
            minlength: "Your Username must consist of at least 1 characters",
            maxlength: "Your Username must consist of at most 1 characters"
          },
          applicant_name : {
            required: "This field is required",
            pattern: "Only A-Za-Z are allow",
            minlength: "Your Username must consist of at least 3 characters",
            maxlength: "Your Username must consist of at most 100 characters"
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

$('#ration_card').bind('change', function() {
    
    var ext = $('#ration_card').val().split('.').pop().toLowerCase();
    if ($.inArray(ext, ['jpg']) == -1){
      $('#ration_carderror').slideDown("slow");
      $('#ration_carderror1').slideUp("slow");
      $('#ration_card').val('');
     
    }else{
      var picsize = (this.files[0].size);
      if (picsize > 1000000){
        $('#ration_carderror1').slideDown("slow");
        $('#ration_card').val('');
     
      }else{
     
        $('#ration_carderror1').slideUp("slow");
      }
      $('#ration_carderror').slideUp("slow");
    }
  });

$('#school_certificate').bind('change', function() {
    
    var ext = $('#school_certificate').val().split('.').pop().toLowerCase();
    if ($.inArray(ext, ['jpg']) == -1){
      $('#school_certificateerror').slideDown("slow");
      $('#school_certificateerror1').slideUp("slow");
      $('#school_certificate').val('');
     
    }else{
      var picsize = (this.files[0].size);
      if (picsize > 1000000){
        $('#school_certificateerror1').slideDown("slow");
        $('#school_certificate').val('');
     
      }else{
     
        $('#school_certificateerror1').slideUp("slow");
      }
      $('#school_certificateerror').slideUp("slow");
    }
  });

$('#election_id_card').bind('change', function() {
    
    var ext = $('#election_id_card').val().split('.').pop().toLowerCase();
    if ($.inArray(ext, ['jpg']) == -1){
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

    $( "#ajaxmodalform2" ).validate( {

        rules: {
          ration_card: {
              required: true,
              extension:'jpeg,png,jpg',
              },
              election_id_card:{
              required: true,
              extension:'jpeg,png,jpg',

              },
              school_certificate: {
              required: true,
              extension:'jpeg,png,jpg',
              },
              ration_card_rm : {
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
              ration_card_no :{
                required: true,
                pattern: new RegExp('^[a-zA-Z0-9 .\s]+$'),
                minlength: 3,
                maxlength:100
              },
              school_certificate_no : {
                required: true,
                pattern: new RegExp('^[a-zA-Z0-9 .\s]+$'),
                minlength: 3,
                maxlength:100
              },
              school_certificate_rm :{
                required: true,
                pattern: new RegExp('^[a-zA-Z0-9 .\s]+$'),
                minlength: 3,
                maxlength:100
              }
          
        },
        messages: {
          ration_card: {
              required: "This field is required",
              extension:'only jpeg,jpg,png areallowded',
              },
              election_id_card:{
              required: "This field is required",
              extension:'only jpeg,jpg,png are allowded',
              },
              school_certificate:{
              required: "This field is required",
              extension:'only jpeg,jpg,png are allowded',
              },
              ration_card_rm :{
                required: "This field is required",
                pattern: "Only A-Za-Z are allow",
                minlength: "Your Username must consist of at least 3 characters",
                maxlength: "Your Username must consist of at most 100 characters"
              },
              ration_card_no : {
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
              election_id_card_rm : {
                required: "This field is required",
                pattern: "Only A-Za-Z are allow",
                minlength: "Your Username must consist of at least 3 characters",
                maxlength: "Your Username must consist of at most 100 characters"
              },
              school_certificate_rm :{
                required: "This field is required",
                pattern: "Only A-Za-Z are allow",
                minlength: "Your Username must consist of at least 3 characters",
                maxlength: "Your Username must consist of at most 100 characters"
              },
              school_certificate_rm : {
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