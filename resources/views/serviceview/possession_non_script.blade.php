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
    $('#details_possession_non').hide();
    $('#possession_table').hide();
    $('#declaration').hide();
});

// $('#possession_details_show').on('click ', function() {
// $('#details_possession_non').show();
// $('#possession_table').show();
// $('#declaration').show();
// });

$('#possession_details_show').on('click ', function() {
    // $('#income_table').show();
    // $('#property_table').show();

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
        $('#details_possession_non').show();
        $('#possession_table').show();
        $('#declaration').show();
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
        $('#details_possession_non').show();
        $('#possession_table').show();
        $('#declaration').show();
    }

    var cerPurpose = $("#cerPurpose").val();
    if ((cerPurpose == 0) || (cerPurpose == '') || (cerPurpose == null)) {
        $('#cerPurpose_msg').show();
        $("#cerPurpose_msg").html('');
        $("#cerPurpose_msg").html("Enter your purpose");
        $('#income_table').hide();
        $('#property_table').hide();
    } else {
        $('#cerPurpose_msg').hide();
        $('#income_table').show();
        $('#property_table').show();
        $('#details_possession_non').show();
        $('#possession_table').show();
        $('#declaration').show();
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
        $('#details_possession_non').show();
        $('#possession_table').show();
        $('#declaration').show();

    }
});
// Attachment Validation
// let file = document.getElementById("election_file");

$('#election_attach').on('click ', function() {

    var fileName = file.value,
        idxDot = fileName.lastIndexOf(".") + 1,
        extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
    if (extFile == "pdf") {
        //TO DO
    } else {
        $('#election_msg').show();
        $("#election_msg").html('');
        $("#election_msg").html("Only jpg/jpeg and png files are allowed!");
        file.value = ""; // Reset the input so no files are uploaded
    }
});

// let file = document.getElementById("election_file");

$('#encum_attach').on('click ', function() {

    var fileName = file.value,
        idxDot = fileName.lastIndexOf(".") + 1,
        extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
    if (extFile == "pdf") {
        //TO DO
    } else {
        $('#encum_msg').show();
        $("#encum_msg").html('');
        $("#encum_msg").html("Only jpg/jpeg and png files are allowed!");
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

$('#aadhar_attach').on('click ', function() {

    var fileName = file.value,
        idxDot = fileName.lastIndexOf(".") + 1,
        extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
    if (extFile == "pdf") {
        //TO DO
    } else {
        $('#aadhar_msg').show();
        $("#aadhar_msg").html('');
        $("#aadhar_msg").html("Only jpg/jpeg and png files are allowed!");
        file.value = ""; // Reset the input so no files are uploaded
    }
});


$('#aadhar_attach').on('click ', function() {

    var fileName = file.value,
        idxDot = fileName.lastIndexOf(".") + 1,
        extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
    if (extFile == "pdf") {
        //TO DO
    } else {
        $('#aadhar_msg').show();
        $("#aadhar_msg").html('');
        $("#aadhar_msg").html("Only jpg/jpeg and png files are allowed!");
        file.value = ""; // Reset the input so no files are uploaded
    }
});


$('#pattayam_attach').on('click ', function() {

    var fileName = file.value,
        idxDot = fileName.lastIndexOf(".") + 1,
        extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
    if (extFile == "pdf") {
        //TO DO
    } else {
        $('#pattayam_msg').show();
        $("#pattayam_msg").html('');
        $("#pattayam_msg").html("Only jpg/jpeg and png files are allowed!");
        file.value = ""; // Reset the input so no files are uploaded
    }
});

$('#declaration_file').on('click ', function() {
    var fileName = file.value,
        idxDot = fileName.lastIndexOf(".") + 1,
        extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
    if (extFile == "pdf") {
        //TO DO
    } else {
        $('#declaration_msg').show();
        $("#declaration_msg").html('');
        $("#declaration_msg").html("Only jpg/jpeg and png files are allowed!");
        file.value = ""; // Reset the input so no files are uploaded
    }
});

// property table add row
<?php $i = 1; ?>
var faqs_row_pro = 0;

function addfaqs_property() {
    // alert("Sss")
    html = '<tr id="faqs-row' + faqs_row_pro + '">';
    html += '<td><?php echo ++$i;?></td>';
    html +=
        '<td><select class="form-control customform" id=""><option>Default select</option></select><option > Default select < /option> </select > </td>';
    html +=
        '<td><select class="form-control customform" id=""><option> Default select </option> </select > </td>';
    html +=
        '<td><select class="form-control customform" id="" aria - describedby="HELPNAME6"><option > Default select < /option> </select > </td>';
    html += '<td><input type="text"  class="form-control" id="" min="0" placeholder = "0" > </td>';
    html += '<td><input type="text"  class="form-control" id="" min="0" placeholder="0"></td>';
    html +=
        '<td><input type="text" class="form-control" id="" min="0" placeholder="0"></td>';
    html += '<td><input type="text"  class="form-control" id="" min="0" placeholder = "0" > </td>';
    html += '<td><input type="text" class="form-control" id="" min="0" placeholder="0"></td>';
    html += '<td><input type="text" class="form-control" id="" min="0" placeholder="0"></td>';
    html += '<td><input type="text" class="form-control" id="" min="0" placeholder="0" readonly></td>';
    html += '<td class="mt-10"><button class="badge badge-danger" onclick="$(\'#faqs-row' + faqs_row_pro +
        '\').remove();"><i class="fa fa-trash"></i> Delete</button></td>';

    html += '</tr>';

    $('#possession_table tbody').append(html);

    faqs_row_pro++;
}
</script>