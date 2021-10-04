<script>
    $('#district').on('click ', function(e) {
        if ($(this).val() == '') {
            $('#district-error').val('');
            $('#district-error').slideDown("slow");
            $('#district-error').html('Please select one');
        } else {
            $('#district-error').hide();
        }
    });
    $('#district').on('change ', function(e) {
        var charRegExp = /^[0-9]+$/;
        var district_1 = $('#district').val();
        if (district_1.search(charRegExp) != 0) {
            $('#district-error').val('');
            $('#district-error').slideDown("slow");
            $('#district-error').html('Invalid Characters . Alphabets only');
        } else {
            $('#district-error').hide();
        }
    });
    $('#taluk').on('click ', function(e) {
        if ($(this).val() == '') {
            $('#taluk-error').val('');
            $('#taluk-error').slideDown("slow");
            $('#taluk-error').html('Please select one');
        } else {
            $('#taluk-error').hide();
        }
    });
    $('#taluk').on('change ', function(e) {
        var charRegExp = /^[0-9]+$/;
        var taluk_1 = $('#taluk').val();
        if (taluk_1.search(charRegExp) != 0) {
            $('#taluk-error').val('');
            $('#taluk-error').slideDown("slow");
            $('#taluk-error').html('Invalid Characters . Alphabets only');
        } else {
            $('#taluk-error').hide();
        }
    });
    $('#village').on('click ', function(e) {
        if ($(this).val() == '') {
            $('#village-error').val('');
            $('#village-error').slideDown("slow");
            $('#village-error').html('Please select one');
        } else {
            $('#village-error').hide();
        }
    });
    $('#village').on('change ', function(e) {
        var charRegExp = /^[0-9]+$/;
        var village_1 = $('#village').val();
        if (village_1.search(charRegExp) != 0) {
            $('#village-error').val('');
            $('#village-error').slideDown("slow");
            $('#village-error').html('Invalid Characters . Alphabets only');
        } else {
            $('#village-error').hide();
        }
    });
    $('#file_aadhar').on('change', function() {
        var type = this.files[0].type;
        if ((type == "application/pdf") || (type == 'application/vnd.pdf') || (type == 'application/PDF') || (type == 'application/VND.PDF')) {
            var size = this.files[0].size;
            $('#span_file_aadhar').html('');
            if (size > 1048576) // checks the file more than 1 MB
            {

                $('#span_file_aadhar').html('');
                $('#span_file_aadhar').css("color", "red");
                $('#span_file_aadhar').html('File size must be less than 1 MB');
                $('#file_aadhar').focus();
                // return false;        


            } else {
                $('#span_file_aadhar').html('');
                return true;

            }
            return true;
        } else {

            $('#span_file_aadhar').html('');
            $('#span_file_aadhar').css("color", "red");
            $('#span_file_aadhar').html('File must be a pdf');
            $('#file_aadhar').focus();
            return false;
        }

    });
    $('#file_eid').on('change', function() {
        var type = this.files[0].type;
        if ((type == "application/pdf") || (type == 'application/vnd.pdf') || (type == 'application/PDF') || (type == 'application/VND.PDF')) {
            var size = this.files[0].size;
            $('#span_file_eid').html('');
            if (size > 1048576) // checks the file more than 1 MB
            {

                $('#span_file_eid').html('');
                $('#span_file_eid').css("color", "red");
                $('#span_file_eid').html('File size must be less than 1 MB');
                $('#file_eid').focus();
                // return false;        


            } else {
                $('#span_file_eid').html('');
                return true;

            }
            return true;
        } else {

            $('#span_file_eid').html('');
            $('#span_file_eid').css("color", "red");
            $('#span_file_eid').html('File must be a pdf');
            $('#file_eid').focus();
            return false;
        }

    });
    $('#file_encumbrance').on('change', function() {
        var type = this.files[0].type;
        if ((type == "application/pdf") || (type == 'application/vnd.pdf') || (type == 'application/PDF') || (type == 'application/VND.PDF')) {
            var size = this.files[0].size;
            $('#span_file_encumbrance').html('');
            if (size > 1048576) // checks the file more than 1 MB
            {

                $('#span_file_encumbrance').html('');
                $('#span_file_encumbrance').css("color", "red");
                $('#span_file_encumbrance').html('File size must be less than 1 MB');
                $('#file_encumbrance').focus();
                // return false;        


            } else {
                $('#span_file_encumbrance').html('');
                return true;

            }
            return true;
        } else {

            $('#span_file_encumbrance').html('');
            $('#span_file_encumbrance').css("color", "red");
            $('#span_file_encumbrance').html('File must be a pdf');
            $('#file_encumbrance').focus();
            return false;
        }

    });
    $('#file_encumbrance').on('change', function() {
        var type = this.files[0].type;
        if ((type == "application/pdf") || (type == 'application/vnd.pdf') || (type == 'application/PDF') || (type == 'application/VND.PDF')) {
            var size = this.files[0].size;
            $('#span_file_encumbrance').html('');
            if (size > 1048576) // checks the file more than 1 MB
            {

                $('#span_file_encumbrance').html('');
                $('#span_file_encumbrance').css("color", "red");
                $('#span_file_encumbrance').html('File size must be less than 1 MB');
                $('#file_encumbrance').focus();
                // return false;        


            } else {
                $('#span_file_encumbrance').html('');
                return true;

            }
            return true;
        } else {

            $('#span_file_encumbrance').html('');
            $('#span_file_encumbrance').css("color", "red");
            $('#span_file_encumbrance').html('File must be a pdf');
            $('#file_encumbrance').focus();
            return false;
        }

    });
    $('#file_land_tax').on('change', function() {
        var type = this.files[0].type;
        if ((type == "application/pdf") || (type == 'application/vnd.pdf') || (type == 'application/PDF') || (type == 'application/VND.PDF')) {
            var size = this.files[0].size;
            $('#span_file_land_tax').html('');
            if (size > 1048576) // checks the file more than 1 MB
            {

                $('#span_file_land_tax').html('');
                $('#span_file_land_tax').css("color", "red");
                $('#span_file_land_tax').html('File size must be less than 1 MB');
                $('#file_land_tax').focus();
                // return false;        


            } else {
                $('#span_file_land_tax').html('');
                return true;

            }
            return true;
        } else {

            $('#span_file_land_tax').html('');
            $('#span_file_land_tax').css("color", "red");
            $('#span_file_land_tax').html('File must be a pdf');
            $('#file_land_tax').focus();
            return false;
        }

    });
    $('#file_pattayam').on('change', function() {
        var type = this.files[0].type;
        if ((type == "application/pdf") || (type == 'application/vnd.pdf') || (type == 'application/PDF') || (type == 'application/VND.PDF')) {
            var size = this.files[0].size;
            $('#span_file_pattayam').html('');
            if (size > 1048576) // checks the file more than 1 MB
            {

                $('#span_file_pattayam').html('');
                $('#span_file_pattayam').css("color", "red");
                $('#span_file_pattayam').html('File size must be less than 1 MB');
                $('#file_pattayam').focus();
                // return false;        


            } else {
                $('#span_file_pattayam').html('');
                return true;

            }
            return true;
        } else {

            $('#span_file_pattayam').html('');
            $('#span_file_pattayam').css("color", "red");
            $('#span_file_pattayam').html('File must be a pdf');
            $('#file_pattayam').focus();
            return false;
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
    $('#extent_hectare').on('change ', function(e) {
        var testval = this.value;
        var tested = new RegExp('^[0-9\.]+$');
        if (!tested.test(testval)) {
            $('#extent_hectare').val('');
            $('#extent_hectare_error').html("Only digits and dot allowed!");
            $('#extent_hectare_error').slideDown("slow");

        } else {
            $('#extent_hectare_error').hide();

        }
    });
    $('#market_value').on('change ', function(e) {
        var testval = this.value;
        var tested = new RegExp('^[0-9\.]+$');
        if (!tested.test(testval)) {
            $('#market_value').val('');
            $('#market_value_error').html("Only digits and dot allowed!");
            $('#market_value_error').slideDown("slow");

        } else {
            $('#market_value_error').hide();

        }
    });
    $('#liability_amount').on('change ', function(e) {
        var testval = this.value;
        var tested = new RegExp('^[0-9\.]+$');
        if (!tested.test(testval)) {
            $('#liability_amount').val('');
            $('#liability_amount_error').html("Only digits and dot allowed!");
            $('#liability_amount_error').slideDown("slow");

        } else {
            $('#liability_amount_error').hide();

        }
    });
</script>