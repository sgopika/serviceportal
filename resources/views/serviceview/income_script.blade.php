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
    console.log("ready!");
    $('#income_table').hide();
    $('#property_table').hide();
    $('#ownland_table').hide();

});
//  Validation for Reg ID
$(function() {
    $("#edistricID").keypress(function(e) {
        var keyCode = e.keyCode || e.which;

        $("#edistricIDerror_msg").html("");

        //Regex for Valid Characters i.e. Alphabets.
        var regex = /^[0-9 '.-]+$/;
        //Validate TextBox value against the Regex.
        var isValid = regex.test(String.fromCharCode(keyCode));
        if (!isValid) {
            $("#edistricIDerror_msg").html("Only Numbers allowed.");
        }

        return isValid;
    });
});

$("#otherincome").on("change", function() {

    var total = parseInt($("#salarypen").val()) + parseInt($("#income_bus").val()) + parseInt($("#labourincome")
        .val()) + parseInt($("#nriincome").val()) + parseInt($("#rentalincome").val()) + parseInt($(
        "#otherincome").val());
    // alert(total);
    $("#total").val(total);
});
$('#total').on('blur', function(e) {
    // alert("dd");
    var filter_value = $(this).val();
    // alert(filter_value);
    $("#grand_tot").val(filter_value);
    // console.log(filter_value + "s")
    var number = filter_value;
    // alert(number);
    var digit = ['zero', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine'];
    var elevenSeries = ['ten', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen',
        'eighteen', 'nineteen'
    ];

    var countingByTens = ['twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety'];
    var shortScale = ['', 'thousand', 'million', 'billion', 'trillion'];

    number = number.toString();

    number = number.replace(/[\, ]/g, '');
    if (number != parseFloat(number)) return 'not a number';
    var x = number.indexOf('.');
    if (x == -1) x = number.length;
    if (x > 15) return 'too big';
    var n = number.split('');
    var str = '';
    var sk = 0;
    for (var i = 0; i < x; i++) {
        if ((x - i) % 3 == 2) {
            if (n[i] == '1') {
                str += elevenSeries[Number(n[i + 1])] + ' ';
                i++;
                sk = 1;
            } else if (n[i] != 0) {
                str += countingByTens[n[i] - 2] + ' ';
                sk = 1;
            }
        } else if (n[i] != 0) {
            str += digit[n[i]] + ' ';
            if ((x - i) % 3 == 0) str += 'hundred ';
            sk = 1;
        }
        if ((x - i) % 3 == 1) {
            if (sk) str += shortScale[(x - i - 1) / 3] + ' ';
            sk = 0;
        }
    }
    if (x != number.length) {
        var y = number.length;
        str += 'point ';
        for (var i = x + 1; i < y; i++) str += digit[n[i]] + ' ';
    }
    str = str.replace(/\number+/g, ' ');
    // alert(str.trim());
    $("#grand_tot_word").val(str);


    // return str.trim() + ".";


});
// for alpha validation
$('#pro_before').keypress(function(e) {
    var regex = new RegExp("^[a-zA-Z ]+$");
    var strigChar = String.fromCharCode(!e.charCode ? e.which : e.charCode);
    if (regex.test(strigChar)) {
        return true;

    }
    return false;
    $("#pro_before_msg").val('test');
});
<?php $i = 1; ?>
var faqs_row = 0;

function addfaqs() {
    html = '<tr id="faqs-row' + faqs_row + '">';
    html += '<td><?php echo ++$i;?></td>';
    html +=
        '<td><select class="form-control customform" id="add_relation" aria - describedby="HELPNAME5"><option > Default select < /option> </select > </td>';
    html +=
        '<td><select class="form-control customform" id="add_rel_name" aria - describedby="HELPNAME6"><option > Default select < /option> </select > </td>';
    html +=
        '<td><select class="form-control customform" id="add_income" aria - describedby="HELPNAME6"><option > Default select < /option> </select > </td>';
    html += '<td><input type="text"  class="form-control" id="otherincome" min="0" placeholder = "0" > </td>';
    html += '<td><input type="text"  class="form-control" id="otherincome" min="0" placeholder="0"></td>';
    html +=
        '<td><input type="text" class="form-control" id="otherincome" min="0" placeholder="0"></td>';
    html += '<td><input type="text"  class="form-control" id="otherincome" min="0" placeholder = "0" > </td>';
    html += '<td><input type="text" class="form-control" id="otherincome" min="0" placeholder="0"></td>';
    html += '<td><input type="text" class="form-control" id="otherincome" min="0" placeholder="0"></td>';
    html += '<td><input type="text" class="form-control" id="otherincome" min="0" placeholder="0" readonly></td>';
    html += '<td class="mt-10"><button class="badge badge-danger" onclick="$(\'#faqs-row' + faqs_row +
        '\').remove();"><i class="fa fa-trash"></i> Delete</button></td>';

    html += '</tr>';

    $('#income tbody').append(html);

    faqs_row++;
}
// property table add row
<?php $i = 1; ?>
var faqs_row_pro = 0;

function addfaqs_property() {
    html = '<tr id="faqs-row' + faqs_row + '">';
    html += '<td><?php echo ++$i;?></td>';
    html +=
        '<td><select class="form-control customform" id="add_relation" aria - describedby="HELPNAME5"><option > Default select < /option> </select > </td>';
    html +=
        '<td><select class="form-control customform" id="add_rel_name" aria - describedby="HELPNAME6"><option > Default select < /option> </select > </td>';
    html +=
        '<td><select class="form-control customform" id="add_income" aria - describedby="HELPNAME6"><option > Default select < /option> </select > </td>';
    html += '<td><input type="text"  class="form-control" id="otherincome" min="0" placeholder = "0" > </td>';
    html += '<td><input type="text"  class="form-control" id="otherincome" min="0" placeholder="0"></td>';
    html +=
        '<td><input type="text" class="form-control" id="otherincome" min="0" placeholder="0"></td>';
    html += '<td><input type="text"  class="form-control" id="otherincome" min="0" placeholder = "0" > </td>';
    html += '<td><input type="text" class="form-control" id="otherincome" min="0" placeholder="0"></td>';
    html += '<td><input type="text" class="form-control" id="otherincome" min="0" placeholder="0"></td>';
    html += '<td><input type="text" class="form-control" id="otherincome" min="0" placeholder="0" readonly></td>';
    html += '<td class="mt-10"><button class="badge badge-danger" onclick="$(\'#faqs-row' + faqs_row +
        '\').remove();"><i class="fa fa-trash"></i> Delete</button></td>';

    html += '</tr>';

    $('#property tbody').append(html);

    faqs_row_pro++;
}

// $('#ereg_id').on('change ', function(e) {
//     // console.log("sss")

// });

// District validation
$('#cerType').on('change ', function() {
    // console.log("sss")
    var cert_type = $(this).val();
    console.log(cert_type)
    if (cert_type == 0) {
        $('#cerType_msg').show();
        $("#cerType_msg").html('');
        $("#cerType_msg").html("Select any one option to continue");
        // alert("sss");
        $('#cerType').addClass('has-error');
        $('#cerType').focus();
    } else {
        $('#cerType_msg').hide();

    }
});
// Ration card validation
$('#rationcard_attach').on('click ', function() {
    // alert("Dd");
    if (document.getElementById("file_rarationcard_filetion").files.length == 0) {
        alert("ss");
        // $('#filetabval').val('span_file_ration~Please Upload pdf copy of Ration card');
        // $('#span_file_ration').html('');
        // $('#span_file_ration').css("color", "red");
        // $('#span_file_ration').html('Please Upload pdf copy of Ration card');
        // $('#file_ration').focus();
    }

});


// REset

$('#income_details_reset').on('click ', function() {
    location.reload()
});
$('#income_details_save').on('click ', function() {
    $('#income_table').show();
    $('#property_table').show();
    var edistricID = $("#edistricID").val();
    if ((edistricID == 0) || (edistricID == '') || (edistricID == null)) {
        $('#edistricIDerror_msg').show();
        $("#edistricIDerror_msg").html('');
        $("#edistricIDerror_msg").html("Enter your registration number");
        $('#income_table').hide();
        $('#property_table').hide();
    } else {
        $('#edistricIDerror_msg').hide();
        $('#income_table').show();
        $('#property_table').show();
    }

    var cerType = $("#cerType").val();
    if ((cerType == 0) || (cerType == '') || (cerType == null)) {
        $('#cerType_msg').show();
        $("#cerType_msg").html('');
        $("#cerType_msg").html("Enter your certificate type");
        $('#income_table').hide();
        $('#property_table').hide();
    } else {
        $('#cerType_msg').hide();
        $('#income_table').show();
        $('#property_table').show();
    }

    var cerPurpose = $("#cerPurpose").val();
    if ((cerPurpose == 0) || (cerPurpose == '') || (cerPurpose == null)) {
        $('#cerPurpose').show();
        $("#cerPurpose").html('');
        $("#cerPurpose_msg").html("Enter your purpose");
        $('#income_table').hide();
        $('#property_table').hide();
    } else {
        $('#cerPurpose_msg').hide();
        $('#income_table').show();
        $('#property_table').show();
    }

    var pro_before = $("#pro_before").val();
    if ((pro_before == 0) || (pro_before == '') || (pro_before == null)) {
        $('#pro_before_msg').show();
        $("#pro_before_msg").html('');
        $("#pro_before_msg").html("Enter your details");
        $('#income_table').hide();
        $('#property_table').hide();
        $('#ownland_table').hide();
    } else {
        $('#pro_before_msg').hide();
        $('#income_table').show();
        $('#property_table').show();
        $('#ownland_table').show();

    }
});
// FILE VALIDATION
$('#rationcard_attach').on('click ', function() {
    var fileName = file.value,
        idxDot = fileName.lastIndexOf(".") + 1,
        extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
    if (extFile == "pdf") {
        //TO DO
    } else {
        $('#ration_msg').show();
        $("#ration_msg").html('');
        $("#ration_msg").html("Only jpg/jpeg and png files are allowed!");
        file.value = ""; // Reset the input so no files are uploaded
    }
});

$('#salary_attach').on('click ', function() {
    var fileName = file.value,
        idxDot = fileName.lastIndexOf(".") + 1,
        extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
    if (extFile == "pdf") {
        //TO DO
    } else {
        $('#salaray_msg').show();
        $("#salaray_msg").html('');
        $("#salaray_msg").html("Only jpg/jpeg and png files are allowed!");
        file.value = ""; // Reset the input so no files are uploaded
    }
});

$('#tax_attach').on('click ', function() {
    var fileName = file.value,
        idxDot = fileName.lastIndexOf(".") + 1,
        extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
    if (extFile == "pdf") {
        //TO DO
    } else {
        $('#tax_msg').show();
        $("#tax_msg").html('');
        $("#tax_msg").html("Only jpg/jpeg and png files are allowed!");
        file.value = ""; // Reset the input so no files are uploaded
    }
});

$('#land_attach').on('click ', function() {
    var fileName = file.value,
        idxDot = fileName.lastIndexOf(".") + 1,
        extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
    if (extFile == "pdf") {
        //TO DO
    } else {
        $('#land_msg').show();
        $("#land_msg").html('');
        $("#land_msg").html("Only jpg/jpeg and png files are allowed!");
        file.value = ""; // Reset the input so no files are uploaded
    }
});

$('#relative_attach').on('click ', function() {
    var fileName = file.value,
        idxDot = fileName.lastIndexOf(".") + 1,
        extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
    if (extFile == "pdf") {
        //TO DO
    } else {
        $('#relative_msg').show();
        $("#relative_msg").html('');
        $("#relative_msg").html("Only jpg/jpeg and png files are allowed!");
        file.value = ""; // Reset the input so no files are uploaded
    }
});
</script>