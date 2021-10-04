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
    $('#mobileerror').hide();
    $('#emailerror').hide();
    $('#adharerror').hide();
    $('#passportError').hide();
    $('#nameerror').hide();
    $('#HouseNoerror').hide();
    $('#CHouseNoerror').hide();
    $('#HouseNameerror').hide();
    $('#CHouseNameerror').hide();
    $('#LocalityError').hide();
    $('#CLocalityError').hide();
    $('#PostOfficeError').hide();
    $('#CPostOfficeError').hide();
    $('#PincodeError').hide();
    $('#CPincodeError').hide();
    $('#FatherNameError').hide();
    $('#MotherNameError').hide();
    $('#SpouseNameError').hide();
    $('#GuardianNameError').hide();
    $('#RationNoError').hide();
    $('#DLicenceError').hide();
    $('#adharerror').hide();
    $('#EleIdError').hide();
    $('#LandPhoneError').hide();
    $('#NoYrsError').hide();
    $('#SSLCError').hide();
    $('#SSLCYearError').hide();
    $('#DistrictError').hide();
    $('#CDistrictError').hide();
    $('#TalukError').hide();
    $('#CTalukError').hide();
    $('#VillageError').hide();
    $('#CVillageError').hide();
    $('#LTypeError').hide();
    $('#CLTypeError').hide();
    $('#LBodyError').hide();
    $('#CLBodyError').hide();



    $('#name').on('change ', function(e) {
      var testval = this.value;
      var tested = new RegExp('^[a-zA-Z \s\.]+$');
      if (!tested.test(testval)) {
        $('#name').val('');
        $('#nameerror').html("Only  Alphabetic characters,space and dot allowed!");
        $('#nameerror').slideDown("slow");

      } else {
        $('#nameerror').hide();

      }

    });


    $('#NoYrs').on('change ', function() {
      var testval = this.value;
      var Noyrs = parseInt($('#NoYrs').val());
      var tested = new RegExp('^[0-9]+$');
      if (!tested.test(testval) || Noyrs > 125) {
        $("#NoYrs").val('');
        $('#NoYrsError').html("Enter valid years of residence!");
        $('#NoYrsError').slideDown("slow");
      } else {
        $('#NoYrsError').hide();
      }
    });

    $('#LandPhone').on('change ', function() {
      var mobile = $("#LandPhone").val();
      var tested = new RegExp('^[0-9{10,12}]+$');

      if (mobile.length != 10 || !tested.test(mobile)) {
        $("#LandPhone").val('');
        $('#LandPhoneError').html("Check your Residance phone number format!");
        $('#LandPhoneError').slideDown("slow");
      } else {
        $('#LandPhoneError').hide();
      }
    });
    $('#mobile').on('change ', function() {
      var mobile = $("#mobile").val();
      var tested = new RegExp('^[0-9]+$');

      if (mobile.length != 10 || !tested.test(mobile)) {
        $("#mobile").val('');
        $('#mobileerror').html("Check your mobile number!");
        $('#mobileerror').slideDown("slow");
      } else {
        $('#mobileerror').hide();
      }
    });

    $('#email').on('change ', function(e) {
      var testval = this.value;
      if (testval != '') {
        var tested = new RegExp('^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$');
        if (!tested.test(testval)) {
          $('#email').val('');
          $('#emailerror').html("Enter a valid Email address!");
          $('#emailerror').slideDown("slow");

        } else {
          $('#emailerror').hide();


        }
      }
    });

    $('#RationNo').on('change', function(e) {
      ration = document.getElementById("RationNo").value;
      var rationcard = /^\d{10,15}$/;
      if (ration != '') {
        if (!ration.match(rationcard)) {
          $('#RationNo').val('');
          $('#RationNoError').slideDown("slow");
          $('#RationNoError').html("Ration card number format Error!");
        } else {
          $('#RationNoError').hide();
        }
      }
    });

    $('#DLicence').on('change ', function(e) {
      var testval = this.value;
      var tested = new RegExp('^[a-zA-Z0-9 \s\.\/\\\\]+$');
      if (!tested.test(testval)) {
        $('#DLicence').val('');
        $('#DLicenceError').html("Only  Alphabets,digits,\\,/ and dot allowed!");
        $('#DLicenceError').slideDown("slow");

      } else {
        $('#DLicenceError').hide();

      }

    });

    $('#EleId').on('change ', function(e) {
      var testval = this.value;
      var tested = new RegExp('^[a-zA-Z0-9\/\]+$');
      if (!tested.test(testval)) {
        $('#EleId').val('');
        $('#EleIdError').html("Only  Alphabets,digits and / are allowed!");
        $('#EleIdError').slideDown("slow");

      } else {
        $('#EleIdError').hide();

      }

    });


    $('#Aadhaar').on('change', function(e) {
      adhar = document.getElementById("Aadhaar").value;
      var adharcard = /^\d{12}$/;
      if (adhar != '') {
        if (!adhar.match(adharcard)) {
          $('#Aadhaar').val('');
          $('#adharerror').slideDown("slow");
          $('#adharerror').html("Adhaar Error!");
        } else {
          $('#adharerror').hide();
        }
      }
    });


    $('#SSLC').on('change ', function(e) {
      var testval = this.value;
      len = testval.length;
      var tested = new RegExp('^[a-zA-Z0-9 /-]+$');
      if (!tested.test(testval) || len < 5 || len > 10) {
        $('#EleId').val('');
        $('#SSLCError').html("Only  Alphabets,digits,- and space are allowed!");
        $('#SSLCError').slideDown("slow");

      } else {
        $('#SSLCError').hide();

      }

    });
    $('#SslcYear').on('change ', function(e) {
      var testval = this.value;
      var len = testval.length;
      var currentYear = (new Date).getFullYear();
      var tested = new RegExp('^[0-9]+$');
      if (!tested.test(testval) || len > 4 || testval > currentYear || testval < 1900) {
        $('#SslcYear').val('');
        $('#SSLCYearError').html("Enter a valid year!");
        $('#SSLCYearError').slideDown("slow");

      } else {
        $('#SSLCYearError').hide();

      }

    });

    $('#PassportNo').on('change', function(e) {

      var regsaid = /^[a-zA-Z]{1,2}[0-9]{7}$/;
      passport = $('#PassportNo').val();

      if (passport.search(regsaid) != 0) {
        $('#PassportNo').val('');
        $('#passportError').slideDown("slow");
        $('#passportError').html("Incorrect Passport format!");
      } else {
        $('#passportError').hide();
      }
    });

    $('#clear').on('click', function(e) {
      var $el = $('#profile_photo');
      $el.val('');
    });

    $('#dob').on('change', function(e) {
      var currentYear = (new Date).getFullYear();
      var dob = $('#dob').val()
      var dobyr = parseInt(dob.slice(0, 4))
      age = currentYear - dobyr;
      if (age > 125) {
        $('#ageError').html("Age should be lessthan 125!");
      }
      $('#age').val(age);
      $('#age').prop('disabled', 'true');

    });

    $('#copy_address').on('click', function(e) {
      HNo = $('#HouseNo').val();
      HouseName = $('#HouseName').val();
      Locality = $('#Locality').val();
      PostOffice = $('#PostOffice').val();
      Pincode = $('#Pincode').val();

      DistrictContent = $('#District').find("option:selected").text();
      DistrictVal = $('#District').val();

      TalukVal = $('#Taluk').val();
      TalukContent = $('#Taluk').find("option:selected").text();

      VillageVal = $('#Village').val();
      VillageContent = $('#Village').find("option:selected").text();

      LocalBodyTypeVal = $('#LType').val();
      LocalBodyTypeContent = $('#LType').find("option:selected").text();

      LocalBodyVal = $('#LBody').val();
      LocalBodyContent = $('#LBody').find("option:selected").text();

      $('#CHouseNo').val(HNo);
      $('#CHouseName').val(HouseName);
      $('#CLocality').val(Locality);
      $('#CPostOffice').val(PostOffice);
      $('#CPincode').val(Pincode);

      $('#CDistrict').append('<option selected value="' + DistrictVal + '">' + DistrictContent + '</option>');
      $('#CTaluk').append('<option selected value="' + TalukVal + '">' + TalukContent + '</option>');
      $('#CVillage').append('<option selected value="' + VillageVal + '">' + VillageContent + '</option>');
      $('#CLType').append('<option selected value="' + LocalBodyTypeVal + '">' + LocalBodyTypeContent + '</option>');
      $('#CLBody').append('<option selected value="' + LocalBodyVal + '">' + LocalBodyContent + '</option>');


    });

    $('#profile_photo').bind('change', function() {
      var size = (this.files[0].size);
      var filename = (this.files[0].name);
      var fileExtension = filename.substring(filename.lastIndexOf('.') + 1);
      if (size > 20000) {

        $('#profile_photo').val('');
        $('#photoerror').slideDown("slow");
        $('#photoerror').html('Photo must be in jpg format and max size is 20Kb')
      } else if (fileExtension != 'jpg') {
        $('#profile_photo').val('');
        $('#photoerror').slideDown("slow");
        $('#photoerror').html('Photo must be in jpg format and max size is 20Kb')

      } else {
        $('#photoerror').hide();

      }

    });


    $('#HouseNo').on('change ', function(e) {
      var testval = this.value;
      var tested = new RegExp('^[a-zA-Z0-9 \s\.\/\(\)\-]+$');
      if (!tested.test(testval)) {
        $('#HouseNo').val('');
        $('#HouseNoerror').html("Only  Alphabets,space,digits, /, ( , - and ) allowed!");
        $('#HouseNoerror').slideDown("slow");

      } else {
        $('#HouseNoerror').hide();

      }

    });

    $('#CHouseNo').on('change ', function(e) {
      var testval = this.value;
      var tested = new RegExp('^[a-zA-Z0-9 \s\.\/\(\)\-]+$');
      if (!tested.test(testval)) {
        $('#CHouseNo').val('');
        $('#CHouseNoerror').html("Only  Alphabets,space,digits, /, ( , - and ) allowed!");
        $('#CHouseNoerror').slideDown("slow");

      } else {
        $('#CHouseNoerror').hide();

      }

    });


    $('#HouseName').on('change ', function(e) {
      var testval = this.value;
      var tested = new RegExp('^[a-zA-Z \.]+$');
      if (!tested.test(testval)) {
        $('#HouseName').val('');
        $('#HouseNameerror').html("Only  Alphabetic characters,space and dot allowed!");
        $('#HouseNameerror').slideDown("slow");

      } else {
        $('#HouseNameerror').hide();

      }

    });

    $('#CHouseName').on('change ', function(e) {
      var testval = this.value;
      var tested = new RegExp('^[a-zA-Z \.]+$');
      if (!tested.test(testval)) {
        $('#CHouseName').val('');
        $('#CHouseNameerror').html("Only  Alphabetic characters,space and dot allowed!");
        $('#CHouseNameerror').slideDown("slow");

      } else {
        $('#CHouseNameerror').hide();

      }

    });


    $('#Locality').on('change ', function(e) {
      var testval = this.value;
      var tested = new RegExp('^[a-zA-Z ]+$');
      if (!tested.test(testval)) {
        $('#Locality').val('');
        $('#LocalityError').html("Only  Alphabetic characters and space are allowed!");
        $('#LocalityError').slideDown("slow");

      } else {
        $('#LocalityError').hide();

      }

    });

    $('#CLocality').on('change ', function(e) {
      var testval = this.value;
      var tested = new RegExp('^[a-zA-Z ]+$');
      if (!tested.test(testval)) {
        $('#CLocality').val('');
        $('#CLocalityError').html("Only  Alphabetic characters and space are allowed!");
        $('#CLocalityError').slideDown("slow");

      } else {
        $('#CLocalityError').hide();

      }

    });

    $('#PostOffice').on('change ', function(e) {
      var testval = this.value;
      var tested = new RegExp('^[a-zA-Z ]+$');
      if (!tested.test(testval)) {
        $('#PostOffice').val('');
        $('#PostOfficeError').html("Only  Alphabetic characters and space are allowed!");
        $('#PostOfficeError').slideDown("slow");

      } else {
        $('#PostOfficeError').hide();

      }

    });

    $('#CPostOffice').on('change ', function(e) {
      var testval = this.value;
      var tested = new RegExp('^[a-zA-Z ]+$');
      if (!tested.test(testval)) {
        $('#CPostOffice').val('');
        $('#CPostOfficeError').html("Only  Alphabetic characters and space are allowed!");
        $('#CPostOfficeError').slideDown("slow");

      } else {
        $('#CLocalityError').hide();

      }

    });

    $('#Pincode').on('change ', function(e) {
      var testval = this.value;
      var tested = new RegExp('^[0-9{6}]+$');
      if (!tested.test(testval)) {
        $('#Pincode').val('');
        $('#PincodeError').html("Only  Numeric and must be 6 digits!");
        $('#PincodeError').slideDown("slow");

      } else {
        $('#PincodeError').hide();

      }

    });

    $('#CPincode').on('change ', function(e) {
      var testval = this.value;
      var tested = new RegExp('^[0-9{6}]+$');
      if (!tested.test(testval)) {
        $('#CPincode').val('');
        $('#CPincodeError').html("Only  Numeric and must be 6 digits!");
        $('#CPincodeError').slideDown("slow");

      } else {
        $('#CPincodeError').hide();

      }

    });


    $('#District').on('change ', function(e) {
      var testval = this.value;
      console.log(testval)
      if (testval == '') {
        $('#District').val('');
        $('#DistrictError').html("District can'not be blank!");
        $('#DistrictError').slideDown("slow");

      } else {
        $('#DistrictError').hide();

      }

    });

    $('#CDistrict').on('change ', function(e) {
      var testval = this.value;
      console.log(testval)
      if (testval == '') {
        $('#CDistrict').val('');
        $('#CDistrictError').html("District can'not be blank!");
        $('#CDistrictError').slideDown("slow");

      } else {
        $('#CDistrictError').hide();

      }

    });

    $('#Taluk').on('change ', function(e) {
      var testval = this.value;
      console.log(testval)
      if (testval == '') {
        $('#Taluk').val('');
        $('#TalukError').html("Taluk can'not be blank!");
        $('#TalukError').slideDown("slow");

      } else {
        $('#TalukError').hide();

      }

    });

    $('#CTaluk').on('change ', function(e) {
      var testval = this.value;
      console.log(testval)
      if (testval == '') {
        $('#CTaluk').val('');
        $('#CTalukError').html("Taluk can'not be blank!");
        $('#CTalukError').slideDown("slow");

      } else {
        $('#CTalukError').hide();

      }

    });



    $('#Village').on('change ', function(e) {
      var testval = this.value;
      console.log(testval)
      if (testval == '') {
        $('#Village').val('');
        $('#VillageError').html("Village can'not be blank!");
        $('#VillageError').slideDown("slow");

      } else {
        $('#VillageError').hide();

      }

    });

    $('#CVillage').on('change ', function(e) {
      var testval = this.value;
      console.log(testval)
      if (testval == '') {
        $('#CVillage').val('');
        $('#CVillageError').html("Village can'not be blank!");
        $('#CVillageError').slideDown("slow");

      } else {
        $('#CVillageError').hide();

      }

    });


    $('#LType').on('change ', function(e) {
      var testval = this.value;
      console.log(testval)
      if (testval == '') {
        $('#LType').val('');
        $('#LTypeError').html("Local body type can'not be blank!");
        $('#LTypeError').slideDown("slow");

      } else {
        $('#LTypeError').hide();

      }

    });

    $('#CLType').on('change ', function(e) {
      var testval = this.value;
      console.log(testval)
      if (testval == '') {
        $('#CLType').val('');
        $('#CLTypeError').html("Local body type can'not be blank!");
        $('#CLTypeError').slideDown("slow");

      } else {
        $('#CLTypeError').hide();

      }

    });


    $('#LBody').on('change ', function(e) {
      var testval = this.value;
      console.log(testval)
      if (testval == '') {
        $('#LBody').val('');
        $('#LBodyError').html("Local body can'not be blank!");
        $('#LBodyError').slideDown("slow");

      } else {
        $('#LBodyError').hide();

      }

    });

    $('#CLBody').on('change ', function(e) {
      var testval = this.value;
      console.log(testval)
      if (testval == '') {
        $('#CLBody').val('');
        $('#CLBodyError').html("Local body can'not be blank!");
        $('#CLBodyError').slideDown("slow");

      } else {
        $('#CLBodyError').hide();

      }

    });




    $('#FatherName').on('change ', function(e) {
      var testval = this.value;
      var tested = new RegExp('^[a-zA-Z \.]+$');
      if (!tested.test(testval)) {
        $('#FatherName').val('');
        $('#FatherNameError').html("Only  Alphabetic characters,space and dot allowed!");
        $('#FatherNameError').slideDown("slow");

      } else {
        $('#FatherNameError').hide();

      }

    });


    $('#MotherName').on('change ', function(e) {
      var testval = this.value;
      var tested = new RegExp('^[a-zA-Z \.]+$');
      if (!tested.test(testval)) {
        $('#MotherName').val('');
        $('#MotherNameError').html("Only  Alphabetic characters,space and dot allowed!");
        $('#MotherNameError').slideDown("slow");

      } else {
        $('#MotherNameError').hide();

      }

    });


    $('#SpouseName').on('change ', function(e) {
      var testval = this.value;
      var tested = new RegExp('^[a-zA-Z \.]+$');
      if (!tested.test(testval)) {
        $('#SpouseName').val('');
        $('#SpouseNameError').html("Only  Alphabetic characters,space and dot allowed!");
        $('#SpouseNameError').slideDown("slow");

      } else {
        $('#SpouseNameError').hide();

      }

    });


    $('#Guardian').on('change ', function(e) {
      var testval = this.value;
      var tested = new RegExp('^[a-zA-Z \.]+$');
      if (!tested.test(testval)) {
        $('#Guardian').val('');
        $('#GuardianNameError').html("Only  Alphabetic characters,space and dot allowed!");
        $('#GuardianNameError').slideDown("slow");

      } else {
        $('#GuardianNameError').hide();

      }

    });

    $('#reset_form').on('click', function(e) {
      window.location.reload();
    });

    $('#save').on('click', function(e) {
      var FatherName = $('#FatherName').val();
      var MotherName = $('#MotherName').val();
      var Guardian = $('#Guardian').val();
      if (FatherName == '' && MotherName == '' && Guardian == '') {
        alert('Either one of father\'s name, mother\'s name or guardian\'s name is mandatory')
      }
    });


  });
</script>