
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

$('#deceasedName').on('change',function(){
    var charRegExp = /^[a-zA-Z '.-]+$/;
    var deceasedName=$('#deceasedName').val();
    if(deceasedName.length<3){
        $('#deceasedName').addClass('has-error');
        $('#deceasedName').focus();
        $('#applctntabval').val('span_deceasedName~Enter alteast three Characters~deceasedName');
        $('#span_deceasedName').html('');
        $('#span_deceasedName').css("color","red");
        $('#span_deceasedName').html('Enter alteast three Characters');
        swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else if (deceasedName.search(charRegExp) != 0) {
        $('#deceasedName').addClass('has-error');
        $('#deceasedName').val('');
        $('#deceasedName').focus();
        $('#span_deceasedName').html('');
        $('#span_deceasedName').css("color","red");
        $('#applctntabval').val('span_deceasedName~Invalid Characters . Alphabets only~deceasedName');
        $('#span_deceasedName').html('Invalid Characters . Alphabets only');
        // swal('Info', 'Invalid Characters . Alphabets only', 'info');
        $('#loader').hide();
    } else {
        $('#applctntabval').val("0");
        $('#span_deceasedName').html('');
        $('#deceasedName').removeClass('has-error');
        deceasedName = deceasedName;
    }
});
$('#dod').on('change',function(){
    var charRegExp = /^[a-zA-Z '.-]+$/;
    var dod=$('#dod').val();
    if(dod.length<3){
        $('#dod').addClass('has-error');
        $('#dod').focus();
        $('#applctntabval').val('span_dod~Enter alteast three Characters~dod');
        $('#span_dod').html('');
        $('#span_dod').css("color","red");
        $('#span_dod').html('Enter alteast three Characters');
        swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else if (dod.search(charRegExp) != 0) {
        $('#dod').addClass('has-error');
        $('#dod').val('');
        $('#dod').focus();
        $('#span_dod').html('');
        $('#span_dod').css("color","red");
        $('#applctntabval').val('span_dod~Invalid Characters . Alphabets only~dod');
        $('#span_dod').html('Invalid Characters . Alphabets only');
        // swal('Info', 'Invalid Characters . Alphabets only', 'info');
        $('#loader').hide();
    } else {
        $('#applctntabval').val("0");
        $('#span_dod').html('');
        $('#dod').removeClass('has-error');
        dod = dod;
    }
});

$('input[name="gen_deceased"]').on('change',function(){
    var charRegExp = /^[a-zA-Z '.-]+$/;
    var gen_deceased=$('input[name="gen_deceased"]').val();
    if(gen_deceased.length<3){
        $('input[name="gen_deceased"]').addClass('has-error');
        $('input[name="gen_deceased"]').focus();
        $('#applctntabval').val('span_gen_deceased~Enter alteast three Characters~gen_deceased');
        $('#span_gen_deceased').html('');
        $('#span_gen_deceased').css("color","red");
        $('#span_gen_deceased').html('Enter alteast three Characters');
        swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else if (gen_deceased.search(charRegExp) != 0) {
        $('input[name="gen_deceased"]').addClass('has-error');
        $('input[name="gen_deceased"]').val('');
        $('input[name="gen_deceased"]').focus();
        $('#span_gen_deceased').html('');
        $('#span_gen_deceased').css("color","red");
        $('#applctntabval').val('span_gen_deceased~Invalid Characters . Alphabets only~gen_deceased');
        $('#span_gen_deceased').html('Invalid Characters . Alphabets only');
        // swal('Info', 'Invalid Characters . Alphabets only', 'info');
        $('#loader').hide();
    } else {
        $('#applctntabval').val("0");
        $('#span_gen_deceased').html('');
        $('input[name="gen_deceased"]').removeClass('has-error');
        gen_deceased = gen_deceased;
    }
});

$('#fem_rel_name').on('change',function(){
    var charRegExp = /^[a-zA-Z '.-]+$/;
    var fem_rel_name=$('#fem_rel_name').val();
    if(fem_rel_name.length<3){
        $('#fem_rel_name').addClass('has-error');
        $('#fem_rel_name').focus();
        $('#applctntabval').val('span_fem_rel_name~Enter alteast three Characters~fem_rel_name');
        $('#span_fem_rel_name').html('');
        $('#span_fem_rel_name').css("color","red");
        $('#span_fem_rel_name').html('Enter alteast three Characters');
        swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else if (fem_rel_name.search(charRegExp) != 0) {
        $('#fem_rel_name').addClass('has-error');
        $('#fem_rel_name').val('');
        $('#fem_rel_name').focus();
        $('#span_fem_rel_name').html('');
        $('#span_fem_rel_name').css("color","red");
        $('#applctntabval').val('span_fem_rel_name~Invalid Characters . Alphabets only~fem_rel_name');
        $('#span_fem_rel_name').html('Invalid Characters . Alphabets only');
        // swal('Info', 'Invalid Characters . Alphabets only', 'info');
        $('#loader').hide();
    } else {
        $('#applctntabval').val("0");
        $('#span_fem_rel_name').html('');
        $('#fem_rel_name').removeClass('has-error');
        fem_rel_name = fem_rel_name;
    }
});

$('#male_rel_name').on('change',function(){
    var charRegExp = /^[a-zA-Z '.-]+$/;
    var male_rel_name=$('#male_rel_name').val();
    if(male_rel_name.length<3){
        $('#male_rel_name').addClass('has-error');
        $('#male_rel_name').focus();
        $('#applctntabval').val('span_male_rel_name~Enter alteast three Characters~male_rel_name');
        $('#span_male_rel_name').html('');
        $('#span_male_rel_name').css("color","red");
        $('#span_male_rel_name').html('Enter alteast three Characters');
        swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else if (male_rel_name.search(charRegExp) != 0) {
        $('#male_rel_name').addClass('has-error');
        $('#male_rel_name').val('');
        $('#male_rel_name').focus();
        $('#span_male_rel_name').html('');
        $('#span_male_rel_name').css("color","red");
        $('#applctntabval').val('span_male_rel_name~Invalid Characters . Alphabets only~male_rel_name');
        $('#span_male_rel_name').html('Invalid Characters . Alphabets only');
        // swal('Info', 'Invalid Characters . Alphabets only', 'info');
        $('#loader').hide();
    } else {
        $('#applctntabval').val("0");
        $('#span_male_rel_name').html('');
        $('#male_rel_name').removeClass('has-error');
        male_rel_name = male_rel_name;
    }
});

$('#hospital').on('change',function(){
    var charRegExp = /^[a-zA-Z '.-]+$/;
    var hospital=$('#hospital').val();
    if(hospital.length<3){
        $('#hospital').addClass('has-error');
        $('#hospital').focus();
        $('#applctntabval').val('span_hospital~Enter alteast three Characters~hospital');
        $('#span_hospital').html('');
        $('#span_hospital').css("color","red");
        $('#span_hospital').html('Enter alteast three Characters');
        swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else if (hospital.search(charRegExp) != 0) {
        $('#hospital').addClass('has-error');
        $('#hospital').val('');
        $('#hospital').focus();
        $('#span_hospital').html('');
        $('#span_hospital').css("color","red");
        $('#applctntabval').val('span_hospital~Invalid Characters . Alphabets only~hospital');
        $('#span_hospital').html('Invalid Characters . Alphabets only');
        // swal('Info', 'Invalid Characters . Alphabets only', 'info');
        $('#loader').hide();
    } else {
        $('#applctntabval').val("0");
        $('#span_hospital').html('');
        $('#hospital').removeClass('has-error');
        hospital = hospital;
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
    var deceasedName=$('#deceasedName').val();
    var dod=$('#dod').val();
    var gen_deceased=$('input[name="gen_deceased"]').val();
    var fem_rel_name=$('#fem_rel_name').val();
    var male_rel_name=$('#male_rel_name').val();
    var hospital=$('#hospital').val();
    var reg_num=$('#reg_num').val();
    var key_num=$('#key_num').val();
    var get_catp_num=$('#get_catp_num').val();

    if(deceasedName.length<3){
        $('#deceasedName').addClass('has-error');
        Er_flag=1;
        $('#deceasedName').focus();
        $('#applctntabval').val('span_deceasedName~Enter alteast three Characters~deceasedName');
        $('#span_deceasedName').html('');
        $('#span_deceasedName').css("color","red");
        $('#span_deceasedName').html("Enter alteast three Characters");
        
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else{
        $('#deceasedName').removeClass('has-error');
        $('#span_deceasedName').html('');
        $('#applctntabval').val("0");
    }
    if(dod.length<3){
        $('#dod').addClass('has-error');
        Er_flag=1;
        $('#dod').focus();
        $('#applctntabval').val('span_dod~Enter alteast three Characters~dod');
        $('#span_dod').html('');
        $('#span_dod').css("color","red");
        $('#span_dod').html("Enter alteast three Characters");
        
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else{
        $('#dod').removeClass('has-error');
        $('#span_dod').html('');
        $('#applctntabval').val("0");
    }
    if(gen_deceased.length<3){
        $('input[name="gen_deceased"]').addClass('has-error');
        Er_flag=1;
        $('input[name="gen_deceased"]').focus();
        $('#applctntabval').val('span_gen_deceased~Enter alteast three Characters~gen_deceased');
        $('#span_gen_deceased').html('');
        $('#span_gen_deceased').css("color","red");
        $('#span_gen_deceased').html("Enter alteast three Characters");
        
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else{
        $('input[name="gen_deceased"]').removeClass('has-error');
        $('#span_gen_deceased').html('');
        $('#applctntabval').val("0");
    }
    if(fem_rel_name.length<3){
        $('#fem_rel_name').addClass('has-error');
        Er_flag=1;
        $('#fem_rel_name').focus();
        $('#applctntabval').val('span_fem_rel_name~Enter alteast three Characters~fem_rel_name');
        $('#span_fem_rel_name').html('');
        $('#span_fem_rel_name').css("color","red");
        $('#span_fem_rel_name').html("Enter alteast three Characters");
        
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else{
        $('#fem_rel_name').removeClass('has-error');
        $('#span_fem_rel_name').html('');
        $('#applctntabval').val("0");
    }
    if(male_rel_name.length<3){
        $('#male_rel_name').addClass('has-error');
        Er_flag=1;
        $('#male_rel_name').focus();
        $('#applctntabval').val('span_male_rel_name~Enter alteast three Characters~male_rel_name');
        $('#span_male_rel_name').html('');
        $('#span_male_rel_name').css("color","red");
        $('#span_male_rel_name').html("Enter alteast three Characters");
        
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else{
        $('#male_rel_name').removeClass('has-error');
        $('#span_male_rel_name').html('');
        $('#applctntabval').val("0");
    }
    if(hospital.length<3){
        $('#hospital').addClass('has-error');
        Er_flag=1;
        $('#hospital').focus();
        $('#applctntabval').val('span_hospital~Enter alteast three Characters~hospital');
        $('#span_hospital').html('');
        $('#span_hospital').css("color","red");
        $('#span_hospital').html("Enter alteast three Characters");
        
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else{
        $('#hospital').removeClass('has-error');
        $('#span_hospital').html('');
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
