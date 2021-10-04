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
    $('#details_dest').hide();
    $('#declaration').hide();
});

// $('#show_details').on('click ', function() {
// $('#details_dest').show();
// $('#declaration').show();
// });

$('#show_details').on('click ', function() {

    var edistricID = $("#edistricID").val();
    if ((edistricID == 0) || (edistricID == '') || (edistricID == null)) {
        $('#edistricIDerror_msg').show();
        $("#edistricIDerror_msg").html('');
        $("#edistricIDerror_msg").html("Enter registration number");

    } else {
        $('#edistricIDerror_msg').hide();
        $('#details_dest').show();
        $('#declaration').show();
    }

    var cerType = $("#cerType").val();
    if ((cerType == 0) || (cerType == '') || (cerType == null)) {
        $('#cerType_msg').show();
        $("#cerType_msg").html('');
        $("#cerType_msg").html("Enter certificate type");

    } else {
        $('#cerType_msg').hide();
        $('#details_dest').show();
        $('#declaration').show();

    }

    var cerPurpose = $("#cerPurpose").val();
    // alert(cerPurpose);
    if ((cerPurpose == 0) || (cerPurpose == '') || (cerPurpose == null)) {
        $('#cerPurpose_msg').show();
        $("#cerPurpose_msg").html('');
        $("#cerPurpose_msg").html("Enter your purpose");
    } else {
        $('#cerPurpose_msg').hide();
        $('#details_dest').show();
        $('#declaration').show();

    }

    var pro_before = $("#pro_before").val();
    if ((pro_before == 0) || (pro_before == '') || (pro_before == null)) {
        $('#pro_before_msg').show();
        $("#pro_before_msg").html('');
        $("#pro_before_msg").html("Enter details");

    } else {
        $('#pro_before_msg').hide();
        $('#details_dest').show();
        $('#declaration').show();

    }
    // var appl_name = $("#appl_name").val();
    // if ((appl_name == 0) || (appl_name == '') || (appl_name == null)) {
    //     $('#appl_name_msg').show();
    //     $("#appl_name_msg").html('');
    //     $("#appl_name_msg").html("Enter Application number");

    // } else {
    //     $('#appl_name_msg').hide();

    // }
    // var relation = $("#relation").val();
    // if ((relation == 0) || (relation == '') || (relation == null)) {
    //     $('#relation_msg').show();
    //     $("#relation_msg").html('');
    //     $("#relation_msg").html("fill Application number");

    // } else {
    //     $('#relation_msg').hide();

    // }


});

$('#desti_details_reset').on('click ', function() {
    location.reload()
});

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

//next tab
$(function() {
    $('#birth_details_save').click(function(e) {
        e.preventDefault();
        var next_tab = $('.nav-tabs > .active').next('li').find('a');
        if (next_tab.length > 0) {
            next_tab.trigger('click');
        } else {
            $('.nav-tabs li:eq(0) a').trigger('click');
        }
    });
});
</script>