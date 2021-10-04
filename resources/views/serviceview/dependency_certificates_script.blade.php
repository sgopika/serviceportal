<script>
    var faqs_row = 0;
    var sl_no = 2;

    function addfaqs() {
        html = '<tr id="faqs-row' + faqs_row + '">';
        // html += '<td id="">' + sl_no + '</td>';
        html += '<td><input type="text" class="form-control customform eng_xxxs fg-darkCrimson"></td>';
        html += '<td><select class="form-control customform eng_xxxs fg-darkCrimson"><option>Default select</option></select></td>';
        html += '<td><select class="form-control customform eng_xxxs fg-darkCrimson"><option>Default select</option></select></td>';
        html += '<td> <input type="number" class="form-control customform eng_xxxs fg-darkCrimson" min="0" max="100" required>';
        html += '<td> <input type="text" class="form-control customform eng_xxxs fg-darkCrimson"></td>';
        html += '<td><button class="badge badge-danger" onclick="removefaqs(' + faqs_row + ');" ><i class="fa fa-minus"></i></button></td>';

        html += '</tr>';

        $('#faqs tbody').append(html);

        faqs_row++;
        sl_no++;
    }

    function removefaqs(row_no) {
        $('#faqs-row' + row_no).remove();
        var rowCount = $('#faqs tr').length;

    }
    $('#name').on('change ', function(e) {
        var testval = this.value;
        var tested = new RegExp('^[a-zA-Z \s\.]+$');
        if (!tested.test(testval)) {
            $('#name').val('');

            $('#name-error').slideDown("slow");
            $('#name-error').html('Incorrect format');

        } else {
            $('#name-error').hide();
        }
    });
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

    $('#address').on('change ', function(e) {
        var testval = this.value;
        var tested = new RegExp('^[a-zA-Z \s\.]+$');
        if (!tested.test(testval)) {
            $('#address').val('');

            $('#address-error').slideDown("slow");
            $('#address-error').html('Incorrect format');

        } else {
            $('#address-error').hide();
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
    $('#file_lt').on('change', function() {
        var type = this.files[0].type;
        if ((type == "application/pdf") || (type == 'application/vnd.pdf') || (type == 'application/PDF') || (type == 'application/VND.PDF')) {
            var size = this.files[0].size;
            $('#span_file_lt').html('');
            if (size > 1048576) // checks the file more than 1 MB
            {

                $('#span_file_lt').html('');
                $('#span_file_lt').css("color", "red");
                $('#span_file_lt').html('File size must be less than 1 MB');
                $('#file_lt').focus();
                // return false;        


            } else {
                $('#span_file_lt').html('');
                return true;

            }
            return true;
        } else {

            $('#span_file_lt').html('');
            $('#span_file_lt').css("color", "red");
            $('#span_file_lt').html('File must be a pdf');
            $('#file_lt').focus();
            return false;
        }

    });
    $('#file_affidavit').on('change', function() {
        var type = this.files[0].type;
        if ((type == "application/pdf") || (type == 'application/vnd.pdf') || (type == 'application/PDF') || (type == 'application/VND.PDF')) {
            var size = this.files[0].size;
            $('#span_file_affidavit').html('');
            if (size > 1048576) // checks the file more than 1 MB
            {

                $('#span_file_affidavit').html('');
                $('#span_file_affidavit').css("color", "red");
                $('#span_file_affidavit').html('File size must be less than 1 MB');
                $('#file_affidavit').focus();
                // return false;        


            } else {
                $('#span_file_affidavit').html('');
                return true;

            }
            return true;
        } else {

            $('#span_file_affidavit').html('');
            $('#span_file_affidavit').css("color", "red");
            $('#span_file_affidavit').html('File must be a pdf');
            $('#file_affidavit').focus();
            return false;
        }

    });

    $('#aadhr_file').on('change', function() {
        var type = this.files[0].type;
        if ((type == "application/pdf") || (type == 'application/vnd.pdf') || (type == 'application/PDF') || (type == 'application/VND.PDF')) {
            var size = this.files[0].size;
            $('#span_aadhr_file').html('');
            if (size > 1048576) // checks the file more than 1 MB
            {

                $('#span_aadhr_file').html('');
                $('#span_aadhr_file').css("color", "red");
                $('#span_aadhr_file').html('File size must be less than 1 MB');
                $('#aadhr_file').focus();
                // return false;        


            } else {
                $('#span_aadhr_file').html('');
                return true;

            }
            return true;
        } else {

            $('#span_aadhr_file').html('');
            $('#span_aadhr_file').css("color", "red");
            $('#span_aadhr_file').html('File must be a pdf');
            $('#aadhr_file').focus();
            return false;
        }

    });

    $('#file_declaration').on('change', function() {
        var type = this.files[0].type;
        if ((type == "application/pdf") || (type == 'application/vnd.pdf') || (type == 'application/PDF') || (type == 'application/VND.PDF')) {
            var size = this.files[0].size;
            $('#span_file_declaration').html('');
            if (size > 1048576) // checks the file more than 1 MB
            {

                $('#span_file_declaration').html('');
                $('#span_file_declaration').css("color", "red");
                $('#span_file_declaration').html('File size must be less than 1 MB');
                $('#file_declaration').focus();
                // return false;        


            } else {
                $('#span_file_declaration').html('');
                return true;

            }
            return true;
        } else {

            $('#span_file_declaration').html('');
            $('#span_file_declaration').css("color", "red");
            $('#span_file_declaration').html('File must be a pdf');
            $('#file_declaration').focus();
            return false;
        }

    });
</script>