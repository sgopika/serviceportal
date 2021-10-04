<script>
    $('#certificate_type').on('change ', function(e) {
        var charRegExp = /^[0-9]+$/;
        var certificate_type = $('#certificate_type').val();
        if (certificate_type.search(charRegExp) != 0) {
            $('#certificate-type-error').slideDown("slow");
            $('#certificate-type-error').html('Invalid Characters . Alphabets only');
        } else {
            $('#certificate-type-error').hide();
        }
    });

    $('#certificate_purpose').on('change ', function(e) {
        var charRegExp = /^[0-9]+$/;
        var certificate_purpose = $('#certificate_purpose').val();
        if (certificate_purpose.search(charRegExp) != 0) {
            $('#certificate-purpose-error').slideDown("slow");
            $('#certificate-purpose-error').html('Invalid Characters . Alphabets only');
        } else {
            $('#certificate-purpose-error').hide();
        }
    });

    $('#certificate_type').on('click ', function(e) {
        if ($(this).val() == '') {
            $('#certificate-type-error').slideDown("slow");
            $('#certificate-type-error').html('Please select one');

        } else {
            $('#certificate-type-error').hide();
        }
    });

    $('#certificate_purpose').on('click ', function(e) {
        if ($(this).val() == '') {
            $('#certificate-purpose-error').slideDown("slow");
            $('#certificate-purpose-error').html('Please select one');
        } else {
            $('#certificate-purpose-error').hide();
        }
    });

    $('#to_be_produced_before').on('change ', function(e) {
        if ($('#to_be_produced_before').val() == '') {
            $('#to_be_produced_before_error').val('');
            $('#to_be_produced_before_error').slideDown("slow");
            $('#to_be_produced_before_error').html('Please enter the field');

        } else {
            $('#to_be_produced_before_error').hide();
        }
    });
    $('#religion').on('click ', function(e) {
        if ($(this).val() == '') {
            $('#religion_error').val('');
            $('#religion_error').slideDown("slow");
            $('#religion_error').html('Please select one');
        } else {
            $('#religion_error').hide();
        }
    });
    $('#religion').on('change ', function(e) {
        var charRegExp = /^[0-9]+$/;
        var religion = $('#religion').val();
        if (religion.search(charRegExp) != 0) {
            $('#religion_error').val('');
            $('#religion_error').slideDown("slow");
            $('#religion_error').html('Invalid Characters . Alphabets only');
        } else {
            $('#religion_error').hide();
        }
    });
    $('#caste').on('click ', function(e) {
        if ($(this).val() == '') {
            $('#caste_error').val('');
            $('#caste_error').slideDown("slow");
            $('#caste_error').html('Please select one');
        } else {
            $('#caste_error').hide();
        }
    });
    $('#caste').on('change ', function(e) {
        var charRegExp = /^[0-9]+$/;
        var caste = $('#caste').val();
        if (caste.search(charRegExp) != 0) {
            $('#caste_error').val('');
            $('#caste_error').slideDown("slow");
            $('#caste_error').html('Invalid Characters . Alphabets only');
        } else {
            $('#caste_error').hide();
        }
    });
    $('#category').on('click ', function(e) {
        if ($(this).val() == '') {
            $('#category_error').val('');
            $('#category_error').slideDown("slow");
            $('#category_error').html('Please select one');
        } else {
            $('#category_error').hide();
        }
    });
    $('#category').on('change ', function(e) {
        var charRegExp = /^[0-9]+$/;
        var category = $('#category').val();
        if (category.search(charRegExp) != 0) {
            $('#category_error').val('');
            $('#category_error').slideDown("slow");
            $('#category_error').html('Invalid Characters . Alphabets only');
        } else {
            $('#category_error').hide();
        }
    });
    $('#if_caste_converted').on('click ', function(e) {
        if ($("input[type=checkbox]").is(
                ":checked")) {
            $('#caste_converted_div').show();
        } else {
            $('#caste_converted_div').hide();
        }
    });
    $('#applicant_name').on('change ', function(e) {
        var testval = this.value;
        var tested = new RegExp('^[a-zA-Z \s\.]+$');
        if (!tested.test(testval)) {
            $('#applicant_name').val('');

            $('#applicant_name-error').slideDown("slow");
            $('#applicant_name-error').html('Incorrect format');

        } else {
            $('#applicant_name-error').hide();
        }
    });
    $('#applicant_relation').on('click ', function(e) {
        if ($(this).val() == '') {
            $('#applicant_relation-error').slideDown("slow");
            $('#applicant_relation-error').html('Please select one');
        } else {
            $('#applicant_relation-error').hide();
        }
    });
    $('#birth_place_1').on('change ', function(e) {
        var testval = this.value;
        var tested = new RegExp('^[a-zA-Z \s\.]+$');
        if (!tested.test(testval)) {
            $('#birth_place_1_error').val('');

            $('#birth_place_1_error').slideDown("slow");
            $('#birth_place_1_error').html('Incorrect format');

        } else {
            $('#birth_place_1_error').hide();
        }
    });
    $('#state_1').on('click ', function(e) {
        if ($(this).val() == '') {
            $('#state_1_error').val('');
            $('#state_1_error').slideDown("slow");
            $('#state_1_error').html('Please select one');
        } else {
            $('#state_1_error').hide();
        }
    });
    $('#state_1').on('change ', function(e) {
        var charRegExp = /^[0-9]+$/;
        var state_1 = $('#state_1').val();
        if (state_1.search(charRegExp) != 0) {
            $('#state_1_error').val('');
            $('#state_1_error').slideDown("slow");
            $('#state_1_error').html('Invalid Characters . Alphabets only');
        } else {
            $('#state_1_error').hide();
        }
    });

    $('#district_1').on('click ', function(e) {
        if ($(this).val() == '') {
            $('#district_1_error').val('');
            $('#district_1_error').slideDown("slow");
            $('#district_1_error').html('Please select one');
        } else {
            $('#district_1_error').hide();
        }
    });
    $('#district_1').on('change ', function(e) {
        var charRegExp = /^[0-9]+$/;
        var district_1 = $('#district_1').val();
        if (district_1.search(charRegExp) != 0) {
            $('#district_1_error').val('');
            $('#district_1_error').slideDown("slow");
            $('#district_1_error').html('Invalid Characters . Alphabets only');
        } else {
            $('#district_1_error').hide();
        }
    });
    $('#taluk_1').on('click ', function(e) {
        if ($(this).val() == '') {
            $('#taluk_1_error').val('');
            $('#taluk_1_error').slideDown("slow");
            $('#taluk_1_error').html('Please select one');
        } else {
            $('#taluk_1_error').hide();
        }
    });
    $('#taluk_1').on('change ', function(e) {
        var charRegExp = /^[0-9]+$/;
        var taluk_1 = $('#taluk_1').val();
        if (taluk_1.search(charRegExp) != 0) {
            $('#taluk_1_error').val('');
            $('#taluk_1_error').slideDown("slow");
            $('#taluk_1_error').html('Invalid Characters . Alphabets only');
        } else {
            $('#taluk_1_error').hide();
        }
    });
    $('#village_1').on('click ', function(e) {
        if ($(this).val() == '') {
            $('#village_1_error').val('');
            $('#village_1_error').slideDown("slow");
            $('#village_1_error').html('Please select one');
        } else {
            $('#village_1_error').hide();
        }
    });
    $('#village_1').on('change ', function(e) {
        var charRegExp = /^[0-9]+$/;
        var village_1 = $('#village_1').val();
        if (village_1.search(charRegExp) != 0) {
            $('#village_1_error').val('');
            $('#village_1_error').slideDown("slow");
            $('#village_1_error').html('Invalid Characters . Alphabets only');
        } else {
            $('#village_1_error').hide();
        }
    });
    $('#file_ration').on('change', function() {
        var type = this.files[0].type;
        if ((type == "application/pdf") || (type == 'application/vnd.pdf') || (type == 'application/PDF') || (type == 'application/VND.PDF')) {
            var size = this.files[0].size;
            $('#span_file_ration').html('');
            if (size > 1048576) // checks the file more than 1 MB
            {

                $('#span_file_ration').html('');
                $('#span_file_ration').css("color", "red");
                $('#span_file_ration').html('File size must be less than 1 MB');
                $('#file_ration').focus();
                // return false;        


            } else {
                $('#span_file_ration').html('');
                return true;

            }
            return true;
        } else {

            $('#span_file_ration').html('');
            $('#span_file_ration').css("color", "red");
            $('#span_file_ration').html('File must be a pdf');
            $('#file_ration').focus();
            return false;
        }

    });
    $('#file_school').on('change', function() {
        var type = this.files[0].type;
        if ((type == "application/pdf") || (type == 'application/vnd.pdf') || (type == 'application/PDF') || (type == 'application/VND.PDF')) {
            var size = this.files[0].size;
            $('#span_file_school').html('');
            if (size > 1048576) // checks the file more than 1 MB
            {

                $('#span_file_school').html('');
                $('#span_file_school').css("color", "red");
                $('#span_file_school').html('File size must be less than 1 MB');
                $('#file_school').focus();
                // return false;        


            } else {
                $('#span_file_school').html('');
                return true;

            }
            return true;
        } else {

            $('#span_file_school').html('');
            $('#span_file_school').css("color", "red");
            $('#span_file_school').html('File must be a pdf');
            $('#file_school').focus();
            return false;
        }

    });
    $('#file_caste').on('change', function() {
        var type = this.files[0].type;
        if ((type == "application/pdf") || (type == 'application/vnd.pdf') || (type == 'application/PDF') || (type == 'application/VND.PDF')) {
            var size = this.files[0].size;
            $('#span_file_caste').html('');
            if (size > 1048576) // checks the file more than 1 MB
            {

                $('#span_file_caste').html('');
                $('#span_file_caste').css("color", "red");
                $('#span_file_caste').html('File size must be less than 1 MB');
                $('#file_caste').focus();
                // return false;        


            } else {
                $('#span_file_caste').html('');
                return true;

            }
            return true;
        } else {

            $('#span_file_caste').html('');
            $('#span_file_caste').css("color", "red");
            $('#span_file_caste').html('File must be a pdf');
            $('#file_caste').focus();
            return false;
        }

    });
</script>