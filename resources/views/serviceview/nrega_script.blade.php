<script>
$('#nrega_details_reset').on('click ', function() {
    location.reload()
});

$('#proceed_nrega').on('click ', function() {
    var district = $("#district").val();
    if ((district == 0) || (district == '') || (district == null)) {
        $('#district_msg').show();
        $("#district_msg").html('');
        $("#district_msg").html("Select district");

    } else {
        $('#district_msg').hide();

    }

    var block = $("#block").val();
    // alert(block)
    if ((block == 0) || (block == '') || (block == null)) {
        $('#block_msg').show();
        $("#block_msg").html('');
        $("#block_msg").html("Select Block");

    } else {
        $('#block_msg').hide();

    }

    var panchayt = $("#panchayt").val();
    if ((panchayt == 0) || (panchayt == '') || (panchayt == null)) {
        $('#panchayt').show();
        $("#panchayt").html('');
        $("#panchayt_msg").html("Select Panchayt");

    } else {
        $('#panchayt_msg').hide();

    }
});
//mother name validation

$(function() {
    $("#name_nreg").keypress(function(e) {
        var keyCode = e.keyCode || e.which;

        $("#name_nreg_msg").html("");

        //Regex for Valid Characters i.e. Alphabets.
        var regex = /^[A-Za-z]+$/;

        //Validate TextBox value against the Regex.
        var isValid = regex.test(String.fromCharCode(keyCode));
        if (!isValid) {
            $("#name_nreg_msg").html("Only Alphabets allowed.");
        }

        return isValid;
    });
});

$('[data-type="adhaar-number"]').keyup(function() {
    var value = $(this).val();
    value = value.replace(/\D/g, "").split(/(?:([\d]{4}))/g).filter(s => s.length > 0).join("-");
    $(this).val(value);
});

$('#aadhar_nreg').on("change, blur", function() {
    var aadhar_nreg = $('#aadhar_nreg').val();
    var charRegExp_res = /^[0-9]{10}$/;
    if (aadhar_nreg != '') {
        if (aadhar_nreg.length != 12) {
            $('#aadhar_nreg').addClass('has-error');
            $('#aadhar_nreg').focus();
            $('#aadhar_nreg_msg').show();
            $("#aadhar_nreg_msg").html('');
            $("#aadhar_nreg_msg").html("You have to enter 12 digits for Aadhar (eg: 123456789012).");

            return false;
        } else {
            aadhar_nreg = aadhar_nreg;
        }
        if (aadhar_nreg.search(charRegExp_digits) != 0) {
            $('#aadhar_nreg').addClass('has-error');
            $('#aadhar_nreg').focus();
            $('#aadhar_nreg_msg').show();
            $("#aadhar_nreg_msg").html('');
            $("#aadhar_nreg_msg").html("You have to enter 12 digits for Aadhar (eg: 123456789012).");
            return false;
        } else {
            aadhar_nreg = aadhar_nreg;
        }
    } else {
        aadhar_nreg = aadhar_nreg;
    }
});

// pincode_nreg number Number
$(function() {
    $("#pincode_nreg").keypress(function(e) {
        var keyCode = e.keyCode || e.which;

        $("#pincode_nreg_msg").html("");

        //Regex for Valid Characters i.e. Alphabets.
        var regex = /^[0-9 '.-]+$/;
        //Validate TextBox value against the Regex.
        var isValid = regex.test(String.fromCharCode(keyCode));
        if (!isValid) {
            $("#pincode_nreg_msg").html("Only Numbers allowed.");
        }

        return isValid;
    });
});


// key number Number
$(function() {
    $("#mobile_nreg").keypress(function(e) {
        var keyCode = e.keyCode || e.which;

        $("#mobile_nreg_msg").html("");

        //Regex for Valid Characters i.e. Alphabets.
        var regex = /^[0-9 '.-]+$/;
        //Validate TextBox value against the Regex.
        var isValid = regex.test(String.fromCharCode(keyCode));
        if (!isValid) {
            $("#mobile_nreg_msg").html("Only Numbers allowed.");
        }

        return isValid;
    });
});
</script>