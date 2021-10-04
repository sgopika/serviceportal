<!-- Krishnapriya -->
<style>
table,
th,
td {
    border: 1px solid black;
}

.tableheadline {
    color: #635e5e;
    background-color: #c5d9d7;
    border-color: #454d55;
}

.badge {
    display: inline-block;
    padding: 1.25em .4em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25rem;
    transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}

/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>
<script>
$(document).ready(function() {
    $('#birth_details').hide();
});
$('#birth_details_save').on('click ', function() {
    // alert("Dd");
    // $('#birth_details').show();
    var District = $("#district").val();
    if ((District == 0) || (District == '') || (District == null)) {
        $('#district_msg').show();
        $("#district_msg").html('');
        $("#district_msg").html("Select any one option to District");
    } else {
        $('#district_msg').hide();
    }
    var local_body_type = $("#local_body_type").val();
    if ((local_body_type == 0) || (local_body_type == '') || (local_body_type == null)) {
        $('#local_body_type_msg').show();
        $("#local_body_type_msg").html('');
        $("#local_body_type_msg").html("Select any one option to Local body Type");
    } else {
        $('#local_body_type_msg').hide();
    }
    var localbody = $("#localbody").val();
    if ((localbody == 0) || (localbody == '') || (localbody == null)) {
        $('#localbody_msg').show();
        $("#localbody_msg").html('');
        $("#localbody_msg").html("Select any one option to Local body");
    } else {
        $('#localbody_msg').hide();
    }

    if ((localbody != '') || (local_body_type != '') || (District != '')) {
        $('#birth_details').show();
    }
    // alert(District);


});
// REset

$('#birth_details_reset').on('click ', function() {
    location.reload()
});
// name validation

$(function() {
    $("#name_birth").keypress(function(e) {
        var keyCode = e.keyCode || e.which;

        $("#name_msg").html("");

        //Regex for Valid Characters i.e. Alphabets.
        var regex = /^[A-Za-z]+$/;

        //Validate TextBox value against the Regex.
        var isValid = regex.test(String.fromCharCode(keyCode));
        if (!isValid) {
            $("#name_msg").html("Only Alphabets allowed.");
        }

        return isValid;
    });
});

//mother name validation

$(function() {
    $("#name_mother").keypress(function(e) {
        var keyCode = e.keyCode || e.which;

        $("#mother_name_msg").html("");

        //Regex for Valid Characters i.e. Alphabets.
        var regex = /^[A-Za-z]+$/;

        //Validate TextBox value against the Regex.
        var isValid = regex.test(String.fromCharCode(keyCode));
        if (!isValid) {
            $("#mother_name_msg").html("Only Alphabets allowed.");
        }

        return isValid;
    });
});
//father name validation
$(function() {
    $("#name_father").keypress(function(e) {
        var keyCode = e.keyCode || e.which;

        $("#father_name_msg").html("");

        //Regex for Valid Characters i.e. Alphabets.
        var regex = /^[A-Za-z]+$/;

        //Validate TextBox value against the Regex.
        var isValid = regex.test(String.fromCharCode(keyCode));
        if (!isValid) {
            $("#father_name_msg").html("Only Alphabets allowed here");
        }

        return isValid;
    });
});

// Registration Number
$(function() {
    $("#reg_id").keypress(function(e) {
        var keyCode = e.keyCode || e.which;

        $("#reg_id_msg").html("");

        //Regex for Valid Characters i.e. Alphabets.
        var regex = /^[0-9 '.-]+$/;
        //Validate TextBox value against the Regex.
        var isValid = regex.test(String.fromCharCode(keyCode));
        if (!isValid) {
            $("#reg_id_msg").html("Only Numbers allowed.");
        }

        return isValid;
    });
});
// key number Number
$(function() {
    $("#key_id").keypress(function(e) {
        var keyCode = e.keyCode || e.which;

        $("#key_id_msg").html("");

        //Regex for Valid Characters i.e. Alphabets.
        var regex = /^[0-9 '.-]+$/;
        //Validate TextBox value against the Regex.
        var isValid = regex.test(String.fromCharCode(keyCode));
        if (!isValid) {
            $("#key_id_msg").html("Only Numbers allowed.");
        }

        return isValid;
    });
});
</script>