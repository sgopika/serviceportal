<!-- Navas -->
<script>
    $(document).ready(function() {
        $('#District').on('change', function(e) {
            val = $("#District").val();

            if (val == "") {
                $('#District').val('');
                $('#DistrictError').slideDown("slow");
                $('#DistrictError').html("District can'not be blank!");
            } else {
                $('#DistrictError').hide();
            }
        });


        $('#Block').on('change', function(e) {
            val = $("#Block").val();
            console.log(val)

            if (val == "") {
                $('#Block').val('');
                $('#BlockError').slideDown("slow");
                $('#BlockError').html("Block can'not be blank!");
            } else {
                $('#BlockError').hide();
            }
        });


        $('#Panchayath').on('change', function(e) {
            val = $("#Panchayath").val();

            if (val == "") {
                $('#Panchayath').val('');
                $('#PanchayathError').slideDown("slow");
                $('#PanchayathError').html("Panchayath can'not be blank!");
            } else {
                $('#PanchayathError').hide();
            }
        });

        $('#applicantName').on('change ', function(e) {
            var testval = this.value;
            var tested = new RegExp('^[a-zA-Z \s\.]+$');
            if (!tested.test(testval)) {
                $('#applicantName').val('');
                $('#NameError').html("Only  Alphabetic characters,space and dot allowed!");
                $('#NameError').slideDown("slow");

            } else {
                $('#NameError').hide();
            }
        });

        $('#adharNo').on('change', function(e) {
            adhar = document.getElementById("adharNo").value;
            var adharcard = /^\d{12}$/;
            if (adhar != '') {
                if (!adhar.match(adharcard)) {
                    $('#adharNo').val('');
                    $('#adharNoError').slideDown("slow");
                    $('#adharNoError').html("Enter your 12 digit Adhar Number!");
                } else {
                    $('#adharNoError').hide();
                }
            }
        });

        $('#houseName').on('change ', function(e) {
            var testval = this.value;
            var tested = new RegExp('^[a-zA-Z0-9 \.]+$');
            if (!tested.test(testval)) {
                $('#houseName').val('');
                $('#houseNameError').html("Only  Alphabetic characters,digits,space and dot allowed!");
                $('#houseNameError').slideDown("slow");

            } else {
                $('#houseNameError').hide();

            }

        });

        $('#Postoffice').on('change ', function(e) {
            var testval = this.value;
            var tested = new RegExp('^[a-zA-Z ]+$');
            if (!tested.test(testval)) {
                $('#Postoffice').val('');
                $('#PostofficeError').html("Only  Alphabetic characters and space are allowed!");
                $('#PostofficeError').slideDown("slow");

            } else {
                $('#PostofficeError').hide();

            }

        });

        $('#stateName').on('change', function(e) {
            val = $("#stateName").val();
            console.log(val)

            if (val == "") {
                $('#stateName').val('');
                $('#stateNameError').slideDown("slow");
                $('#stateNameError').html("State Name can'not be blank!");
            } else {
                $('#stateNameError').hide();
            }
        });

        $('#districtName').on('change', function(e) {
            val = $("#districtName").val();
            console.log(val)

            if (val == "") {
                $('#districtName').val('');
                $('#districtNameError').slideDown("slow");
                $('#districtNameError').html("District Name can'not be blank!");
            } else {
                $('#districtNameError').hide();
            }
        });

        $('#cityName').on('change ', function(e) {
            var testval = this.value;
            var tested = new RegExp('^[a-zA-Z ]+$');
            if (!tested.test(testval)) {
                $('#cityName').val('');
                $('#cityNameError').html("Only  Alphabetic characters and space are allowed!");
                $('#cityNameError').slideDown("slow");

            } else {
                $('#cityNameError').hide();

            }

        });

        $('#pincode').on('change', function(e) {
            pin = document.getElementById("pincode").value;
            var pincode = /^\d{6}$/;
            if (pin != '') {
                if (!pin.match(pincode)) {
                    $('#pincode').val('');
                    $('#pincodeError').slideDown("slow");
                    $('#pincodeError').html("Enter your 6 digit Adhar Number!");
                } else {
                    $('#pincodeError').hide();
                }
            }
        });

        $('#mobileNumber').on('change', function(e) {
            mobile = document.getElementById("mobileNumber").value;
            var mobileNumber = /^\d{10}$/;
            if (mobile != '') {
                if (!mobile.match(mobileNumber)) {
                    $('#mobileNumber').val('');
                    $('#mobileNumberError').slideDown("slow");
                    $('#mobileNumberError').html("Enter your 10 digit Mobile Number!");
                } else {
                    $('#mobileNumberError').hide();
                }
            }
        });

        $('#emailId').on('change ', function(e) {
            var testval = this.value;
            if (testval != '') {
                var tested = new RegExp('^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$');
                if (!tested.test(testval)) {
                    $('#emailId').val('');
                    $('#emailIdError').html("Enter a valid Email address!");
                    $('#emailIdError').slideDown("slow");

                } else {
                    $('#emailIdError').hide();
                }
            }
        });

        $('#HusName').on('change ', function(e) {
            var testval = this.value;
            var tested = new RegExp('^[a-zA-Z \.]+$');
            if (!tested.test(testval)) {
                $('#HusName').val('');
                $('#HusNameError').html("Only  Alphabetic characters,space and dot allowed!");
                $('#HusNameError').slideDown("slow");

            } else {
                $('#HusNameError').hide();

            }

        });

        $('#HusAdharNo').on('change', function(e) {
            adhar = document.getElementById("HusAdharNo").value;
            var adharcard = /^\d{12}$/;
            if (adhar != '') {
                if (!adhar.match(adharcard)) {
                    $('#HusAdharNo').val('');
                    $('#HusAdharNoError').slideDown("slow");
                    $('#HusAdharNoError').html("Enter your 12 digit Adhar Number!");
                } else {
                    $('#HusAdharNoError').hide();
                }
            }
        });

        $('#HusHouseName').on('change ', function(e) {
            var testval = this.value;
            var tested = new RegExp('^[a-zA-Z0-9 \.]+$');
            if (!tested.test(testval)) {
                $('#HusHouseName').val('');
                $('#HusHouseNameError').html("Only  Alphabetic characters,digits,space and dot allowed!");
                $('#HusHouseNameError').slideDown("slow");

            } else {
                $('#HusHouseNameError').hide();

            }

        });

        $('#HusPostoffice').on('change ', function(e) {
            var testval = this.value;
            var tested = new RegExp('^[a-zA-Z0-9 \.]+$');
            if (!tested.test(testval)) {
                $('#HusPostoffice').val('');
                $('#HusPostofficeError').html("Only  Alphabetic characters,digits,space and dot allowed!");
                $('#HusPostofficeError').slideDown("slow");

            } else {
                $('#HusPostofficeError').hide();

            }

        });

        $('#Husstate').on('change', function(e) {
            val = $("#Husstate").val();
            console.log(val)

            if (val == "") {
                $('#Husstate').val('');
                $('#HusStateError').slideDown("slow");
                $('#HusStateError').html("State Name can'not be blank!");
            } else {
                $('#HusStateError').hide();
            }
        });

        $('#HusDistrict').on('change', function(e) {
            val = $("#HusDistrict").val();

            if (val == "") {
                $('#HusDistrict').val('');
                $('#HusDistrictError').slideDown("slow");
                $('#HusDistrictError').html("District Name can'not be blank!");
            } else {
                $('#HusDistrictError').hide();
            }
        });

        $('#HuscityName').on('change ', function(e) {
            var testval = this.value;
            var tested = new RegExp('^[a-zA-Z ]+$');
            if (!tested.test(testval)) {
                $('#HuscityName').val('');
                $('#HuscityNameError').html("Only  Alphabetic characters and space are allowed!");
                $('#HuscityNameError').slideDown("slow");

            } else {
                $('#HuscityNameError').hide();

            }

        });

        $('#HusPincode').on('change', function(e) {
            pin = document.getElementById("HusPincode").value;
            var pincode = /^\d{6}$/;
            if (pin != '') {
                if (!pin.match(pincode)) {
                    $('#HusPincode').val('');
                    $('#HusPincodeError').slideDown("slow");
                    $('#HusPincodeError').html("Enter your 6 digit Adhar Number!");
                } else {
                    $('#HusPincodeError').hide();
                }
            }
        });

        $('#HusmobileNo').on('change', function(e) {
            mobile = document.getElementById("HusmobileNo").value;
            var mobileNumber = /^\d{10}$/;
            if (mobile != '') {
                if (!mobile.match(mobileNumber)) {
                    $('#HusmobileNo').val('');
                    $('#HusmobileNoError').slideDown("slow");
                    $('#HusmobileNoError').html("Enter your 10 digit Mobile Number!");
                } else {
                    $('#HusmobileNoError').hide();
                }
            }
        });

        $('#HusEmailId').on('change ', function(e) {
            var testval = this.value;
            if (testval != '') {
                var tested = new RegExp('^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$');
                if (!tested.test(testval)) {
                    $('#HusEmailId').val('');
                    $('#HusEmailIdError').html("Enter a valid Email address!");
                    $('#HusEmailIdError').slideDown("slow");

                } else {
                    $('#HusEmailIdError').hide();
                }
            }
        });


        $('#WifeName').on('change ', function(e) {
            var testval = this.value;
            var tested = new RegExp('^[a-zA-Z \.]+$');
            if (!tested.test(testval)) {
                $('#WifeName').val('');
                $('#WifeNameError').html("Only  Alphabetic characters,space and dot allowed!");
                $('#WifeNameError').slideDown("slow");

            } else {
                $('#WifeNameError').hide();

            }

        });

        $('#WifeAdharNo').on('change', function(e) {
            adhar = document.getElementById("WifeAdharNo").value;
            var adharcard = /^\d{12}$/;
            if (adhar != '') {
                if (!adhar.match(adharcard)) {
                    $('#WifeAdharNo').val('');
                    $('#WifeAdharNoError').slideDown("slow");
                    $('#WifeAdharNoError').html("Enter your 12 digit Adhar Number!");
                } else {
                    $('#WifeAdharNoError').hide();
                }
            }
        });

        $('#WifeHouseName').on('change ', function(e) {
            var testval = this.value;
            var tested = new RegExp('^[a-zA-Z0-9 \.]+$');
            if (!tested.test(testval)) {
                $('#WifeHouseName').val('');
                $('#WifeHouseNameError').html("Only  Alphabetic characters,digits,space and dot allowed!");
                $('#WifeHouseNameError').slideDown("slow");

            } else {
                $('#WifeHouseNameError').hide();

            }

        });

        $('#WifePostoffice').on('change ', function(e) {
            var testval = this.value;
            var tested = new RegExp('^[a-zA-Z0-9 \.]+$');
            if (!tested.test(testval)) {
                $('#WifePostoffice').val('');
                $('#WifePostofficeError').html("Only  Alphabetic characters,digits,space and dot allowed!");
                $('#WifePostofficeError').slideDown("slow");

            } else {
                $('#WifePostofficeError').hide();

            }

        });

        $('#Wifestate').on('change', function(e) {
            val = $("#Wifestate").val();
            console.log(val)

            if (val == "") {
                $('#Wifestate').val('');
                $('#WifeStateError').slideDown("slow");
                $('#WifeStateError').html("State Name can'not be blank!");
            } else {
                $('#WifeStateError').hide();
            }
        });

        $('#WifeDistrict').on('change', function(e) {
            val = $("#WifeDistrict").val();

            if (val == "") {
                $('#WifeDistrict').val('');
                $('#WifeDistrictError').slideDown("slow");
                $('#WifeDistrictError').html("District Name can'not be blank!");
            } else {
                $('#WifeDistrictError').hide();
            }
        });

        $('#WifecityName').on('change ', function(e) {
            var testval = this.value;
            var tested = new RegExp('^[a-zA-Z ]+$');
            if (!tested.test(testval)) {
                $('#WifecityName').val('');
                $('#WifecityNameError').html("Only  Alphabetic characters and space are allowed!");
                $('#WifecityNameError').slideDown("slow");

            } else {
                $('#WifecityNameError').hide();

            }

        });

        $('#WifePincode').on('change', function(e) {
            pin = document.getElementById("WifePincode").value;
            var pincode = /^\d{6}$/;
            if (pin != '') {
                if (!pin.match(pincode)) {
                    $('#WifePincode').val('');
                    $('#WifePincodeError').slideDown("slow");
                    $('#WifePincodeError').html("Enter your 6 digit Adhar Number!");
                } else {
                    $('#WifePincodeError').hide();
                }
            }
        });

        $('#WifemobileNo').on('change', function(e) {
            mobile = document.getElementById("WifemobileNo").value;
            var mobileNumber = /^\d{10}$/;
            if (mobile != '') {
                if (!mobile.match(mobileNumber)) {
                    $('#WifemobileNo').val('');
                    $('#WifemobileNoError').slideDown("slow");
                    $('#WifemobileNoError').html("Enter your 10 digit Mobile Number!");
                } else {
                    $('#WifemobileNoError').hide();
                }
            }
        });

        $('#WifeEmailId').on('change ', function(e) {
            var testval = this.value;
            if (testval != '') {
                var tested = new RegExp('^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$');
                if (!tested.test(testval)) {
                    $('#WifeEmailId').val('');
                    $('#WifeEmailIdError').html("Enter a valid Email address!");
                    $('#WifeEmailIdError').slideDown("slow");

                } else {
                    $('#WifeEmailIdError').hide();
                }
            }
        });

        $('#More_Panchayath').on('change ', function(e) {
            var testval = this.value;
            var tested = new RegExp('^[a-zA-Z0-9 ]+$');
            if (!tested.test(testval)) {
                $('#More_Panchayath').val('');
                $('#More_PanchayathError').html("Only  Alphabetic characters,digits and space are allowed!");
                $('#More_PanchayathError').slideDown("slow");

            } else {
                $('#More_PanchayathError').hide();

            }

        });

        $('#More_Panchayath').on('change ', function(e) {
            var testval = this.value;
            var tested = new RegExp('^[a-zA-Z0-9 ]+$');
            if (!tested.test(testval)) {
                $('#More_Panchayath').val('');
                $('#More_PanchayathError').html("Only  Alphabetic characters,digits and space are allowed!");
                $('#More_PanchayathError').slideDown("slow");

            } else {
                $('#More_PanchayathError').hide();

            }

        });

        $('#More_Ward').on('change ', function(e) {
            var testval = this.value;
            var tested = new RegExp('^[A-Z0-9 \s\.\/\\\\]+$');
            if (!tested.test(testval)) {
                $('#More_Ward').val('');
                $('#More_WardError').html("Only  Uppercase letters,digits,\\,/,(,) and dot allowed!");
                $('#More_WardError').slideDown("slow");

            } else {
                $('#More_WardError').hide();

            }

        });

        $('#Job').on('change ', function(e) {
            var testval = this.value;
            var tested = new RegExp('^[a-zA-Z \s\.\/\(\)]+$');
            if (!tested.test(testval)) {
                $('#Job').val('');
                $('#JobError').html("Only  Alphabets,space,(,) and dot allowed!");
                $('#JobError').slideDown("slow");

            } else {
                $('#JobError').hide();

            }

        });

        $('#Income').on('change ', function(e) {
            var testval = this.value;
            var tested = new RegExp('^[a-zA-Z0-9 \s\.\]+$');
            if (!tested.test(testval)) {
                $('#Income').val('');
                $('#IncomeError').html("Only  Alphabets,space,digits and dot allowed!");
                $('#IncomeError').slideDown("slow");

            } else {
                $('#IncomeError').hide();

            }

        });

        $('#SurveyNo').on('change ', function(e) {
            var testval = this.value;
            var tested = new RegExp('^[a-zA-Z0-9 \s\.\/\\\\)\(\-\]+$');
            if (!tested.test(testval)) {
                $('#SurveyNo').val('');
                $('#SurveyNoError').html("Only  Alphabets,digits,\\,/,-,(,) and dot allowed!");
                $('#SurveyNoError').slideDown("slow");

            } else {
                $('#SurveyNoError').hide();

            }

        });

        $('#Area').on('change ', function(e) {
            var testval = this.value;
            var tested = new RegExp('^[0-9\.\]+$');
            if (!tested.test(testval)) {
                $('#Area').val('');
                $('#AreaError').html("Only digits and dot are allowed!");
                $('#AreaError').slideDown("slow");

            } else {
                $('#AreaError').hide();

            }

        });

        $('#RationOrId').on('change ', function(e) {
            var testval = this.value;
            var tested = new RegExp('^[A-Z0-9\/\\\\-\]+$');
            if (!tested.test(testval)) {
                $('#RationOrId').val('');
                $('#RationOrIdError').html("Only Uppercase letters,digits,\\,/,- and dot are allowed!");
                $('#RationOrIdError').slideDown("slow");

            } else {
                $('#RationOrIdError').hide();

            }

        });

        $('#sc').on('change ', function(e) {
            $('#st').prop('checked', false);

        });

        $('#st').on('change ', function(e) {
            $('#sc').prop('checked', false);

        });


        $('#place').on('change ', function(e) {
            var testval = this.value;
            var tested = new RegExp('^[a-zA-Z ]+$');
            if (!tested.test(testval)) {
                $('#place').val('');
                $('#placeError').html("Only  Alphabetic characters and space are allowed!");
                $('#placeError').slideDown("slow");

            } else {
                $('#placeError').hide();

            }

        });

        $('#date').on('change ', function(e) {
            var testval = this.value;
            if (tested == '') {
                $('#place').val('');
                $('#dateError').html("Date required!");
                $('#dateError').slideDown("slow");

            } else {
                $('#dateError').hide();

            }

        });

    });
</script>