<!-- Navas -->
<script>
  $(document).ready(function() {

    $('#livemodal').on('hidden.bs.modal', function(e) {

      $("#livemodal iframe").attr('src', $("#livemodal iframe").attr('src'));


    })


    $("#sitemode").click(function() {
      var maincolor = $('#portal-color').attr('href');
      var maincolorclass = (maincolor.slice(maincolor.length - 8));
      if (maincolorclass == 'dark.css') {
        $("#portal-color").attr("href", "assets/css/portal-light.css");
        $("#portal-animate").attr("href", "assets/css/portal-animate-light.css");
      } else {
        $("#portal-color").attr("href", "assets/css/portal-dark.css");
        $("#portal-animate").attr("href", "assets/css/portal-animate-dark.css");
      }
    });

    $("#fontincrement").click(function() {
      $("div").children().each(function() {
        var size = parseInt($(this).css("font-size"));
        size = size + 1 + "px";
        $(this).css({
          'font-size': size
        });
      });
    });

    $("#fontdecrement").click(function() {
      $("div").children().each(function() {
        var size = parseInt($(this).css("font-size"));
        size = size - 1 + "px";
        $(this).css({
          'font-size': size
        });
      });
    });

    $("#fontreset").click(function() {
      location.reload();
    });


  });
</script>

<script>
  $(document).ready(function() {
    $('#inter_cast_certificate_section').hide();

    $('#cerType').on('change', function(e) {
      var val = parseInt(this.value);
     
      if(isNaN(val)){
        alert('Choose certificate type')
      }

      switch (val) {
        case 1:
          console.log(val)
          $('#inter_cast_certificate_section').show();
          break;

        default:
          $('#inter_cast_certificate_section').hide();
          break;
      }

    });



    $('#edistricID').on('change', function(e) {
      val = document.getElementById("edistricID").value;
      var edistricID = /^\d{6,15}$/;
      if (val != '') {
        if (!val.match(edistricID)) {
          $('#edistricID').val('');
          $('#edistricIDerror').slideDown("slow");
          $('#edistricIDerror').html("E-District id Error!");
        } else {
          $('#edistricIDerror').hide();
        }
      }
    });


    $('#cerType').on('change', function(e) {
      val = document.getElementById("cerType").value;
      console.log(val)
      var cerType = /^\d{1,15}$/;
      if (val = '') {
        if (val.match(cerType)) {
          $('#cerType').val('');
          $('#cerTypeerror').slideDown("slow");
          $('#cerTypeerror').html("Certificate Type Error!");
        } else {
          $('#cerTypeerror').hide();
        }
      }
    });


    $('#cerPurpose').on('change', function(e) {
      val = $("#cerPurpose").val();
      console.log(val)

      if (val == "") {
        $('#cerPurpose').val('');
        $('#cerPurposeerror').slideDown("slow");
        $('#cerPurposeerror').html("Certificate Purpose Error!");
      } else {
        $('#cerPurposeerror').hide();
      }
    });


    $('#pro_before').on('change ', function(e) {
      var testval = this.value;
      var tested = new RegExp('^[a-zA-Z \s\.]+$');
      if (!tested.test(testval)) {
        $('#pro_before').val('');
        $('#pro_beforeerror').html("Only  Alphabetic characters,space and dot allowed!");
        $('#pro_beforeerror').slideDown("slow");

      } else {
        $('#pro_beforeerror').hide();
      }
    });


    $('#app_religion').on('change ', function(e) {
      var testval = this.value;
      var tested = new RegExp('^[0-9{2}]+$');
      if (!tested.test(testval)) {
        $('#app_religion').val('');
        $('#app_religionerror').html("Applicant Religion Error!");
        $('#app_religionerror').slideDown("slow");

      } else {
        $('#app_religionerror').hide();
      }
    });


    $('#app_rel_category').on('change ', function(e) {
      var testval = this.value;
      var tested = new RegExp('^[0-9{2}]+$');
      if (!tested.test(testval)) {
        $('#app_rel_category').val('');
        $('#app_rel_categoryerror').html("Applicant Religion Category Error!");
        $('#app_rel_categoryerror').slideDown("slow");

      } else {
        $('#app_rel_categoryerror').hide();
      }
    });


    $('#app_caste').on('change ', function(e) {
      var testval = this.value;
      var tested = new RegExp('^[0-9{2}]+$');
      if (!tested.test(testval)) {
        $('#app_caste').val('');
        $('#app_casteerror').html("Applicant Caste Error!");
        $('#app_casteerror').slideDown("slow");

      } else {
        $('#app_casteerror').hide();
      }
    });

    

    $('#spouse_religion').on('change ', function(e) {
      var testval = this.value;
      var tested = new RegExp('^[0-9{2}]+$');
      if (!tested.test(testval)) {
        $('#spouse_religion').val('');
        $('#spouse_religionerror').html("Spouse's Religion Error!");
        $('#spouse_religionerror').slideDown("slow");

      } else {
        $('#spouse_religionerror').hide();
      }
    });
    

    $('#spouse_rel_cat').on('change ', function(e) {
      var testval = this.value;
      var tested = new RegExp('^[0-9{2}]+$');
      if (!tested.test(testval)) {
        $('#spouse_rel_cat').val('');
        $('#spouse_rel_caterror').html("Spouse's Religion Category Error!");
        $('#spouse_rel_caterror').slideDown("slow");

      } else {
        $('#spouse_rel_caterror').hide();
      }
    });
    

    $('#spouse_caste').on('change ', function(e) {
      var testval = this.value;
      var tested = new RegExp('^[0-9{2}]+$');
      if (!tested.test(testval)) {
        $('#spouse_caste').val('');
        $('#spouse_casteerror').html("Spouse's Caste Error!");
        $('#spouse_casteerror').slideDown("slow");

      } else {
        $('#spouse_casteerror').hide();
      }
    });

    
    $('#applicantName').on('change ', function(e) {
      var testval = this.value;
      var tested = new RegExp('^[a-zA-Z \s\.]+$');
      if (!tested.test(testval)) {
        $('#applicantName').val('');
        $('#applicantNameError').html("Only  Alphabetic characters,space and dot allowed!");
        $('#applicantNameError').slideDown("slow");

      } else {
        $('#applicantNameError').hide();
      }
    });

    $('#appRelation').on('change ', function(e) {
      var testval = this.value;
      var tested = new RegExp('^[0-9{2}]+$');
      if (!tested.test(testval)) {
        $('#appRelation').val('');
        $('#appRelationError').html("Applicant Relation Error!");
        $('#appRelationError').slideDown("slow");

      } else {
        $('#appRelationError').hide();
      }
    });

    
    $('#adharcard_file').bind('change', function() {
      var size = (this.files[0].size);
      var filename = (this.files[0].name);
      var fileExtension = filename.substring(filename.lastIndexOf('.') + 1);
      if (size > 1024000) {

        $('#adharcard_file').val('');
        $('#fileError').slideDown("slow");
        $('#fileError').html('Adhar Card size must be lessthan 2Mb.!')
      } else if (fileExtension != 'pdf') {
        $('#adharcard_file').val('');
        $('#fileError').slideDown("slow");
        $('#fileError').html('Adhar Card must be in pdf format.!')

      } else {
        $('#fileError').hide();

      }

    });

    
    $('#eleId').bind('change', function() {
      var size = (this.files[0].size);
      var filename = (this.files[0].name);
      var fileExtension = filename.substring(filename.lastIndexOf('.') + 1);
      if (size > 1024000) {

        $('#eleId').val('');
        $('#fileError').slideDown("slow");
        $('#fileError').html('Elecetion ID Card size must be lessthan 2Mb.!')
      } else if (fileExtension != 'pdf') {
        $('#eleId').val('');
        $('#fileError').slideDown("slow");
        $('#fileError').html('Elecetion ID must be in pdf format and max size is 2Mb.!')

      } else {
        $('#fileError').hide();

      }

    });
    
    $('#mc').bind('change', function() {
      var size = (this.files[0].size);
      var filename = (this.files[0].name);
      var fileExtension = filename.substring(filename.lastIndexOf('.') + 1);
      if (size > 1024000) {

        $('#mc').val('');
        $('#fileError').slideDown("slow");
        $('#fileError').html('Marriage Certificate size must be lessthan 2Mb.!')
      } else if (fileExtension != 'pdf') {
        $('#mc').val('');
        $('#fileError').slideDown("slow");
        $('#fileError').html('Marriage Certificate must be in pdf format.!')

      } else {
        $('#fileError').hide();

      }

    });

    
    $('#icm_cer').bind('change', function() {
      var size = (this.files[0].size);
      var filename = (this.files[0].name);
      var fileExtension = filename.substring(filename.lastIndexOf('.') + 1);
      if (size > 1024000) {

        $('#icm_cer').val('');
        $('#fileError').slideDown("slow");
        $('#fileError').html('Intercast Certificate size must be lessthan 2Mb.!')
      } else if (fileExtension != 'pdf') {
        $('#icm_cer').val('');
        $('#fileError').slideDown("slow");
        $('#fileError').html('Intercast Certificate must be in pdf format and max size is 2Mb.!')

      } else {
        $('#fileError').hide();

      }

    });



  });
</script>