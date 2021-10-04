
<style>
.paddingleft{
    padding-left:10px;
}
.fntlabel{
    font-weight: 300;
    font-weight: strong;
}
.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff;
    background-color: #3e2457;
}
a {
    color: rgb(0, 0, 0);
    text-decoration: none;
    background-color: transparent;
}
a:hover {
    color:  #a03064;
    text-decoration:underline;
}
.savbtn{
    background-color: #22269e;
    float: left;
}
.restbtn{
        float: right;
}
.has-error{
    border-color: red;
}
.topspace{
    margin-top:5px;
}
.calcdiv{
    width:200px;
    height:200px;
    background-color: rgb(255, 255, 255);
}
</style>
<script>

$('#district').on('change',function(){
    var charRegExp = /^[0-9]+$/;
    var district=$('#district').val();
    if (district.search(charRegExp) != 0) {
        $('#district').addClass('has-error');
        $('#district').val('');
        $('#district').focus();
        $('#span_district').html('');
        $('#span_district').css("color","red");
        $('#applctntabval').val('span_district~Invalid Characters . Alphabets only~district');
        $('#span_district').html("Invalid Characters . Alphabets only");
        // swal('Info', "Invalid Characters . Alphabets only", 'info');
        $('#loader').hide();
    } else {
        $('#span_district').html('');
        $('#applctntabval').val("0");
        $('#district').removeClass('has-error');
        district = district;
    }
});

$('#local_bdy_type').on('change',function(){
    var charRegExp = /^[0-9]+$/;
    var local_bdy_type=$('#local_bdy_type').val();
    if (local_bdy_type.search(charRegExp) != 0) {
        $('#local_bdy_type').addClass('has-error');
        $('#local_bdy_type').val('');
        $('#local_bdy_type').focus();
        $('#span_local_bdy_type').html('');
        $('#span_local_bdy_type').css("color","red");
        $('#applctntabval').val('span_local_bdy_type~Invalid Characters . Alphabets only~local_bdy_type');
        $('#span_local_bdy_type').html("Invalid Characters . Alphabets only");
        // swal('Info', "Invalid Characters . Alphabets only", 'info');
        $('#loader').hide();
    } else {
        $('#span_local_bdy_type').html('');
        $('#applctntabval').val("0");
        $('#local_bdy_type').removeClass('has-error');
        local_bdy_type = local_bdy_type;
    }
});

$('#local_bdy').on('change',function(){
    var charRegExp = /^[0-9]+$/;
    var local_bdy=$('#local_bdy').val();
    if (local_bdy.search(charRegExp) != 0) {
        $('#local_bdy').addClass('has-error');
        $('#local_bdy').val('');
        $('#local_bdy').focus();
        $('#span_local_bdy').html('');
        $('#span_local_bdy').css("color","red");
        $('#applctntabval').val('span_local_bdy~Invalid Characters . Alphabets only~local_bdy');
        $('#span_local_bdy').html("Invalid Characters . Alphabets only");
        // swal('Info', "Invalid Characters . Alphabets only", 'info');
        $('#loader').hide();
    } else {
        $('#span_local_bdy').html('');
        $('#applctntabval').val("0");
        $('#local_bdy').removeClass('has-error');
        local_bdy = local_bdy;
    }
});


$('#dom').on('change',function(){
    var charRegExp = /^[a-zA-Z '.-]+$/;
    var dom=$('#dom').val();
    if(dom.length<3){
        $('#dom').addClass('has-error');
        $('#dom').focus();
        $('#applctntabval').val('span_dom~Enter alteast three Characters~dom');
        $('#span_dom').html('');
        $('#span_dom').css("color","red");
        $('#span_dom').html('Enter alteast three Characters');
        swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else if (dom.search(charRegExp) != 0) {
        $('#dom').addClass('has-error');
        $('#dom').val('');
        $('#dom').focus();
        $('#span_dom').html('');
        $('#span_dom').css("color","red");
        $('#applctntabval').val('span_dom~Invalid Characters . Alphabets only~dom');
        $('#span_dom').html('Invalid Characters . Alphabets only');
        // swal('Info', 'Invalid Characters . Alphabets only', 'info');
        $('#loader').hide();
    } else {
        $('#applctntabval').val("0");
        $('#span_dom').html('');
        $('#dom').removeClass('has-error');
        dom = dom;
    }
});



$('#husband_rel_name').on('change',function(){
    var charRegExp = /^[a-zA-Z '.-]+$/;
    var husband_rel_name=$('#husband_rel_name').val();
    if(husband_rel_name.length<3){
        $('#husband_rel_name').addClass('has-error');
        $('#husband_rel_name').focus();
        $('#applctntabval').val('span_husband_rel_name~Enter alteast three Characters~husband_rel_name');
        $('#span_husband_rel_name').html('');
        $('#span_husband_rel_name').css("color","red");
        $('#span_husband_rel_name').html('Enter alteast three Characters');
        swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else if (husband_rel_name.search(charRegExp) != 0) {
        $('#husband_rel_name').addClass('has-error');
        $('#husband_rel_name').val('');
        $('#husband_rel_name').focus();
        $('#span_husband_rel_name').html('');
        $('#span_husband_rel_name').css("color","red");
        $('#applctntabval').val('span_husband_rel_name~Invalid Characters . Alphabets only~husband_rel_name');
        $('#span_husband_rel_name').html('Invalid Characters . Alphabets only');
        // swal('Info', 'Invalid Characters . Alphabets only', 'info');
        $('#loader').hide();
    } else {
        $('#applctntabval').val("0");
        $('#span_husband_rel_name').html('');
        $('#husband_rel_name').removeClass('has-error');
        husband_rel_name = husband_rel_name;
    }
});

$('#wife_rel_name').on('change',function(){
    var charRegExp = /^[a-zA-Z '.-]+$/;
    var wife_rel_name=$('#wife_rel_name').val();
    if(wife_rel_name.length<3){
        $('#wife_rel_name').addClass('has-error');
        $('#wife_rel_name').focus();
        $('#applctntabval').val('span_wife_rel_name~Enter alteast three Characters~wife_rel_name');
        $('#span_wife_rel_name').html('');
        $('#span_wife_rel_name').css("color","red");
        $('#span_wife_rel_name').html('Enter alteast three Characters');
        swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else if (wife_rel_name.search(charRegExp) != 0) {
        $('#wife_rel_name').addClass('has-error');
        $('#wife_rel_name').val('');
        $('#wife_rel_name').focus();
        $('#span_wife_rel_name').html('');
        $('#span_wife_rel_name').css("color","red");
        $('#applctntabval').val('span_wife_rel_name~Invalid Characters . Alphabets only~wife_rel_name');
        $('#span_wife_rel_name').html('Invalid Characters . Alphabets only');
        // swal('Info', 'Invalid Characters . Alphabets only', 'info');
        $('#loader').hide();
    } else {
        $('#applctntabval').val("0");
        $('#span_wife_rel_name').html('');
        $('#wife_rel_name').removeClass('has-error');
        wife_rel_name = wife_rel_name;
    }
});



$('#mgplace').on('change',function(){
    var charRegExp = /^[a-zA-Z '.-]+$/;
    var mgplace=$('#mgplace').val();
    if(mgplace.length<3){
        $('#mgplace').addClass('has-error');
        $('#mgplace').focus();
        $('#applctntabval').val('span_mgplace~Enter alteast three Characters~mgplace');
        $('#span_mgplace').html('');
        $('#span_mgplace').css("color","red");
        $('#span_mgplace').html('Enter alteast three Characters');
        swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else if (mgplace.search(charRegExp) != 0) {
        $('#mgplace').addClass('has-error');
        $('#mgplace').val('');
        $('#mgplace').focus();
        $('#span_mgplace').html('');
        $('#span_mgplace').css("color","red");
        $('#applctntabval').val('span_mgplace~Invalid Characters . Alphabets only~mgplace');
        $('#span_mgplace').html('Invalid Characters . Alphabets only');
        // swal('Info', 'Invalid Characters . Alphabets only', 'info');
        $('#loader').hide();
    } else {
        $('#applctntabval').val("0");
        $('#span_mgplace').html('');
        $('#mgplace').removeClass('has-error');
        mgplace = mgplace;
    }
});

$('#reg_num').on('change',function(){
    var charRegExp = /^[a-zA-Z '.-]+$/;
    var reg_num=$('#reg_num').val();
    if(reg_num.length<3){
        $('#reg_num').addClass('has-error');
        $('#reg_num').focus();
        $('#applctntabval').val('span_reg_num~Enter alteast three Characters~reg_num');
        $('#span_reg_num').html('');
        $('#span_reg_num').css("color","red");
        $('#span_reg_num').html('Enter alteast three Characters');
        swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else if (reg_num.search(charRegExp) != 0) {
        $('#reg_num').addClass('has-error');
        $('#reg_num').val('');
        $('#reg_num').focus();
        $('#span_reg_num').html('');
        $('#span_reg_num').css("color","red");
        $('#applctntabval').val('span_reg_num~Invalid Characters . Alphabets only~reg_num');
        $('#span_reg_num').html('Invalid Characters . Alphabets only');
        // swal('Info', 'Invalid Characters . Alphabets only', 'info');
        $('#loader').hide();
    } else {
        $('#applctntabval').val("0");
        $('#span_reg_num').html('');
        $('#reg_num').removeClass('has-error');
        reg_num = reg_num;
    }
});

$('#key_num').on('change',function(){
    var charRegExp = /^[a-zA-Z '.-]+$/;
    var key_num=$('#key_num').val();
    if(key_num.length<3){
        $('#key_num').addClass('has-error');
        $('#key_num').focus();
        $('#applctntabval').val('span_key_num~Enter alteast three Characters~key_num');
        $('#span_key_num').html('');
        $('#span_key_num').css("color","red");
        $('#span_key_num').html('Enter alteast three Characters');
        swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else if (key_num.search(charRegExp) != 0) {
        $('#key_num').addClass('has-error');
        $('#key_num').val('');
        $('#key_num').focus();
        $('#span_key_num').html('');
        $('#span_key_num').css("color","red");
        $('#applctntabval').val('span_key_num~Invalid Characters . Alphabets only~key_num');
        $('#span_key_num').html('Invalid Characters . Alphabets only');
        // swal('Info', 'Invalid Characters . Alphabets only', 'info');
        $('#loader').hide();
    } else {
        $('#applctntabval').val("0");
        $('#span_key_num').html('');
        $('#key_num').removeClass('has-error');
        key_num = key_num;
    }
});

$('#get_catp_num').on('change',function(){
    var charRegExp = /^[a-zA-Z '.-]+$/;
    var get_catp_num=$('#get_catp_num').val();
    if(get_catp_num.length<3){
        $('#get_catp_num').addClass('has-error');
        $('#get_catp_num').focus();
        $('#applctntabval').val('span_get_catp_num~Enter alteast three Characters~get_catp_num');
        $('#span_get_catp_num').html('');
        $('#span_get_catp_num').css("color","red");
        $('#span_get_catp_num').html('Enter alteast three Characters');
        swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else if (get_catp_num.search(charRegExp) != 0) {
        $('#get_catp_num').addClass('has-error');
        $('#get_catp_num').val('');
        $('#get_catp_num').focus();
        $('#span_get_catp_num').html('');
        $('#span_get_catp_num').css("color","red");
        $('#applctntabval').val('span_get_catp_num~Invalid Characters . Alphabets only~get_catp_num');
        $('#span_get_catp_num').html('Invalid Characters . Alphabets only');
        // swal('Info', 'Invalid Characters . Alphabets only', 'info');
        $('#loader').hide();
    } else {
        $('#applctntabval').val("0");
        $('#span_get_catp_num').html('');
        $('#get_catp_num').removeClass('has-error');
        get_catp_num = get_catp_num;
    }
});




function validate_search(){
    var district=$('#district').val();
    var local_bdy_type=$('#local_bdy_type').val();
    var local_bdy=$('#local_bdy').val();
    var ErMsg='';
    var Er_flag=0;
    if(district.length<3){
        Er_flag=1;
        $('#district').addClass('has-error');
        $('#district').focus();
        $('#span_district').html('');
        $('#applctntabval').val('span_district~Enter alteast three Characters~district');
        $('#span_district').css("color","red");
        $('#span_district').html('Invalid Characters . Alphabets only');
        $('#district').val('');        
        $('#loader').hide();
    }else{
        $('#span_district').html('');
        $('#district').removeClass('has-error');
        $('#applctntabval').val("0");
    }
    if(applctntabval==0){
            Er_flag==0;
            ErMsg=applctntabval.split('~');
            $('#'+ErMsg[0]).html('');
            $('#'+ErMsg[2]).removeClass('has-error');
        }else{
            Er_flag==1
            ErMsg=applctntabval.split('~');
            $('#'+ErMsg[0]).html('');
            $('#'+ErMsg[0]).html(ErMsg[1]);
        
        }
}

function register_form(){
    var dom=$('#dom').val();
    var husband_rel_name=$('#husband_rel_name').val();
    var wife_rel_name=$('#wife_rel_name').val();
    var mgplace=$('#mgplace').val();
    var reg_num=$('#reg_num').val();
    var key_num=$('#key_num').val();
    var get_catp_num=$('#get_catp_num').val();

    
    if(dom.length<3){
        $('#dom').addClass('has-error');
        Er_flag=1;
        $('#dom').focus();
        $('#applctntabval').val('span_dom~Enter alteast three Characters~dom');
        $('#span_dom').html('');
        $('#span_dom').css("color","red");
        $('#span_dom').html("Enter alteast three Characters");
        
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else{
        $('#dom').removeClass('has-error');
        $('#span_dom').html('');
        $('#applctntabval').val("0");
    }
    
    if(husband_rel_name.length<3){
        $('#husband_rel_name').addClass('has-error');
        Er_flag=1;
        $('#husband_rel_name').focus();
        $('#applctntabval').val('span_husband_rel_name~Enter alteast three Characters~husband_rel_name');
        $('#span_husband_rel_name').html('');
        $('#span_husband_rel_name').css("color","red");
        $('#span_husband_rel_name').html("Enter alteast three Characters");
        
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else{
        $('#husband_rel_name').removeClass('has-error');
        $('#span_husband_rel_name').html('');
        $('#applctntabval').val("0");
    }
    if(wife_rel_name.length<3){
        $('#wife_rel_name').addClass('has-error');
        Er_flag=1;
        $('#wife_rel_name').focus();
        $('#applctntabval').val('span_wife_rel_name~Enter alteast three Characters~wife_rel_name');
        $('#span_wife_rel_name').html('');
        $('#span_wife_rel_name').css("color","red");
        $('#span_wife_rel_name').html("Enter alteast three Characters");
        
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else{
        $('#wife_rel_name').removeClass('has-error');
        $('#span_wife_rel_name').html('');
        $('#applctntabval').val("0");
    }
    if(mgplace.length<3){
        $('#mgplace').addClass('has-error');
        Er_flag=1;
        $('#mgplace').focus();
        $('#applctntabval').val('span_mgplace~Enter alteast three Characters~mgplace');
        $('#span_mgplace').html('');
        $('#span_mgplace').css("color","red");
        $('#span_mgplace').html("Enter alteast three Characters");
        
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else{
        $('#mgplace').removeClass('has-error');
        $('#span_mgplace').html('');
        $('#applctntabval').val("0");
    }
    if(reg_num.length<3){
        $('#reg_num').addClass('has-error');
        Er_flag=1;
        $('#reg_num').focus();
        $('#applctntabval').val('span_reg_num~Enter alteast three Characters~reg_num');
        $('#span_reg_num').html('');
        $('#span_reg_num').css("color","red");
        $('#span_reg_num').html("Enter alteast three Characters");
        
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else{
        $('#reg_num').removeClass('has-error');
        $('#span_reg_num').html('');
        $('#applctntabval').val("0");
    }
    if(key_num.length<3){
        $('#key_num').addClass('has-error');
        Er_flag=1;
        $('#key_num').focus();
        $('#applctntabval').val('span_key_num~Enter alteast three Characters~key_num');
        $('#span_key_num').html('');
        $('#span_key_num').css("color","red");
        $('#span_key_num').html("Enter alteast three Characters");
        
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else{
        $('#key_num').removeClass('has-error');
        $('#span_key_num').html('');
        $('#applctntabval').val("0");
    }
    if(get_catp_num.length<3){
        $('#get_catp_num').addClass('has-error');
        Er_flag=1;
        $('#get_catp_num').focus();
        $('#applctntabval').val('span_get_catp_num~Enter alteast three Characters~get_catp_num');
        $('#span_get_catp_num').html('');
        $('#span_get_catp_num').css("color","red");
        $('#span_get_catp_num').html("Enter alteast three Characters");
        
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else{
        $('#get_catp_num').removeClass('has-error');
        $('#span_get_catp_num').html('');
        $('#applctntabval').val("0");
    }
    if(applctntabval==0){
        Er_flag==0;
        ErMsg=applctntabval.split('~');
        $('#'+ErMsg[0]).html('');
        $('#'+ErMsg[2]).removeClass('has-error');
        }else{
            Er_flag==1
            ErMsg=applctntabval.split('~');
            $('#'+ErMsg[0]).html('');
            $('#'+ErMsg[0]).html(ErMsg[1]);
        
        }



}






function reset_form(form_id){
    location.reload();
}




</script>
<script src="assets/js/sweetalertjs.js"></script>
