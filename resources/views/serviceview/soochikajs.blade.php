
<script src="assets/js/validation.js"> </script>
<script src="assets/js/additional-methods.min.js"> </script>
<script type="text/javascript">
    $( document ).ready( function () {

     
     $( "#ajaxmodalform" ).validate( {

        rules: {
          
          inwardno: {
            required: true,
            pattern: '^[0-9\s]$',
            minlength: 1,
            maxlength:10
          },
          Year: {
            required: true,
            pattern: '^[0-9 \s]+$',
            min: 1700,
            max:2035
          },
          lgi: {
            required: true,
            pattern: '^[a-zA-Z0-9 \s]$',
            minlength: 1,
            maxlength:1
          },
          
          
         
          
    
          
        },
        messages: {
          inwardno: {
            required: "This field is required",
            pattern: "Only 0-9 are allow",
            minlength: "This field must consist of at least 1 characters",
            maxlength: "This field must consist of at most 10 characters"
          },
          Year: {
            required: "This field is required",
            pattern: "enter a valid year",
            min: "enter a year above 1700",
            maxlength: "maximum year 2035"
          },
          lgi: {
            required: "Select a Local Government Institution",
            pattern: "Please Select a Local Government Institution",
            minlength: "Your Username must consist of at least 1 characters",
            maxlength: "Your Username must consist of at most 100 characters"
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
 });

</script>