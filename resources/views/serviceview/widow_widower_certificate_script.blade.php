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

        $("#reset_form").click(function() {
            location.reload();
        });
        
        $("#clear_form").click(function() {
            location.reload();
        });


    });
</script>

<script>
    $(document).ready(function() {
        $('#widow_widower_certificate_section').hide();
        $('#otpLabel').hide();
        $('#otp_field').hide();
        $('#submit_form').hide();
        $('#clear_form').hide();

        $('#save').on('click', function(e) {

            $('#save').hide();
            $('#reset_form').hide();
            $('#otpLabel').show();
            $('#otp_field').show();
            $('#submit_form').show();
            $('#clear_form').show();
        });



        $('#cerType').on('change', function(e) {
            var val = parseInt(this.value);


            switch (val) {
                case 1:
                    console.log(val)
                    $('#widow_widower_certificate_section').show();
                    break;

                default:
                    $('#widow_widower_certificate_section').hide();
                    break;
            }

        });

        $('#app_rel_category').on('change', function(e) {
            var val = parseInt(this.value);
            console.log(val)
            if (val == 1) {
                $('#demise_details').show();
            } else {
                $('#demise_details').hide();

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
                $('#app_rel_categoryerror').html("Select one option!");
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

        $('#applicantNameOndecl').on('change ', function(e) {
            var testval = this.value;
            var tested = new RegExp('^[a-zA-Z \s\.]+$');
            if (!tested.test(testval)) {
                $('#applicantNameOndecl').val('');
                $('#applicantNameOndeclError').html("Only  Alphabetic characters,space and dot allowed!");
                $('#applicantNameOndeclError').slideDown("slow");

            } else {
                $('#applicantNameOndeclError').hide();
            }
        });


        $('#deceasedAddress').on('change ', function(e) {
            var testval = this.value;
            var tested = new RegExp('^[a-zA-Z0-9 \s\.\-\/]+$');
            if (!tested.test(testval)) {
                $('#applicantName').val('');
                $('#AddressError').html("Only  Alphabetic characters,numbers,space,-,/ and dot are allowed!");
                $('#AddressError').slideDown("slow");

            } else {
                $('#AddressError').hide();
            }
        });

        $('#death_cert_no').on('change ', function(e) {
            var testval = this.value;
            var tested = new RegExp('^[a-zA-Z0-9 \s\"\-\/\(\)\.]+$');
            if (!tested.test(testval)) {
                $('#death_cert_no').val('');
                $('#death_cert_noError').html("Only  Alphabets,numbers,space,-,/,\" and dot are allowed!");
                $('#death_cert_noError').slideDown("slow");

            } else {
                $('#death_cert_noError').hide();
            }
        });

        $('#employedAs').on('change ', function(e) {
            var testval = this.value;
            var tested = new RegExp('^[a-zA-Z \s\.]+$');
            if (!tested.test(testval)) {
                $('#employedAs').val('');
                $('#employedAsError').html("Only  Alphabetic characters,space and dot allowed!");
                $('#employedAsError').slideDown("slow");

            } else {
                $('#employedAsError').hide();
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



        $('#death_file').bind('change', function() {
            var size = (this.files[0].size);
            var filename = (this.files[0].name);
            var fileExtension = filename.substring(filename.lastIndexOf('.') + 1);
            if (size > 1024000) {

                $('#death_file').val('');
                $('#fileError').slideDown("slow");
                $('#fileError').html('Death certificate size must be lessthan 2Mb.!')
            } else if (fileExtension != 'pdf') {
                $('#death_file').val('');
                $('#fileError').slideDown("slow");
                $('#fileError').html('Death certificate must be in pdf format.!')

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

        $('#ration').bind('change', function() {
            var size = (this.files[0].size);
            var filename = (this.files[0].name);
            var fileExtension = filename.substring(filename.lastIndexOf('.') + 1);
            if (size > 1024000) {

                $('#ration').val('');
                $('#fileError').slideDown("slow");
                $('#fileError').html('Ration card size must be lessthan 2Mb.!')
            } else if (fileExtension != 'pdf') {
                $('#ration').val('');
                $('#fileError').slideDown("slow");
                $('#fileError').html('Ration card must be in pdf format.!')

            } else {
                $('#fileError').hide();

            }

        });



        $('#no_years_since_death').on('change ', function(e) {
            var testval = this.value;
            var tested = new RegExp('^[0-9{3}]+$');
            if (!tested.test(testval)) {
                $('#no_years_since_death').val('');
                $('#no_years_since_deathError').html("Enter a valid number!");
                $('#no_years_since_deathError').slideDown("slow");

            } else {
                $('#no_years_since_deathError').hide();
            }
        });

        $('#no_months_since_death').on('change ', function(e) {
            var testval = this.value;
            var tested = new RegExp('^[0-9{3}]+$');
            if (!tested.test(testval)) {
                $('#no_months_since_death').val('');
                $('#no_months_since_deathError').html("Enter a valid number!");
                $('#no_months_since_deathError').slideDown("slow");

            } else {
                $('#no_months_since_deathError').hide();
            }
        });



    });
</script>

<script>
    var faqs_row = 2;

    function addfaqs() {
        html = '<tr id="faqs-row' + faqs_row + '">';
        html += '<td>' + faqs_row + '</td>';
        html += '<td><input type="text" class="form-control" placeholder="Name"></td>';
        html += '<td><select class="form-control"><option value="">-Select-</option><option value="M">Male</option><option value="F">Female</option><option value="O">Other</option></select></td>';
        html += '<td><select class="form-control"><option value="">-Select-</option><option value="1">Mother</option><option value="2">Husbant</option><option value="3">Wife</option></select></td>';
        html += '<td><input type="text" id="" name="" class="form-control" placeholder="Age"></td>';
        html += '<td><input type="text" id="" name="" class="form-control" placeholder="Occupation"></td>';
        html += '<td><input type="text" id="" name="" class="form-control" placeholder="Address"></td>';
        html += '<td class="mt-10"><button class="badge badge-danger" onclick="$(\'#faqs-row' + faqs_row + '\').remove();"><i class="fa fa-trash"></i> Delete</button></td>';

        html += '</tr>';

        $('#faqs tbody').append(html);

        faqs_row++;
    }
</script>