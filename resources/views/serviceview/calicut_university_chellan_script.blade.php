
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
.fltcentre{
    float:center;
}
.sdanger{
    color:red;
}
</style>
<script>

$('#purpose').on('change',function(){
    var charRegExp = /^[0-9]+$/;
    var purpose=$('#purpose').val();
    if (purpose.search(charRegExp) != 0) {
        $('#purpose').addClass('has-error');
        $('#purpose').val('');
        $('#purpose').focus();
        $('#span_purpose').html('');
        $('#span_purpose').css("color","red");
        $('#applctntabval').val('span_purpose~Invalid Characters . Alphabets only~purpose');
        $('#span_purpose').html("Invalid Characters . Alphabets only");
        // swal('Info', "Invalid Characters . Alphabets only", 'info');
        $('#loader').hide();
    } else {
        $('#span_purpose').html('');
        $('#applctntabval').val("0");
        $('#purpose').removeClass('has-error');
        purpose = purpose;
    }
});

$('#yr_pass').on('change',function(){
    var charRegExp = /^[0-9]+$/;
    var yr_pass=$('#yr_pass').val();
    if (yr_pass.search(charRegExp) != 0) {
        $('#yr_pass').addClass('has-error');
        $('#yr_pass').val('');
        $('#yr_pass').focus();
        $('#span_yr_pass').html('');
        $('#span_yr_pass').css("color","red");
        $('#applctntabval').val('span_yr_pass~Invalid Characters . Alphabets only~yr_pass');
        $('#span_yr_pass').html("Invalid Characters . Alphabets only");
        // swal('Info', "Invalid Characters . Alphabets only", 'info');
        $('#loader').hide();
    } else {
        $('#span_yr_pass').html('');
        $('#applctntabval').val("0");
        $('#yr_pass').removeClass('has-error');
        yr_pass = yr_pass;
    }
});

$('#board').on('change',function(){
    var charRegExp = /^[0-9]+$/;
    var board=$('#board').val();
    if (board.search(charRegExp) != 0) {
        $('#board').addClass('has-error');
        $('#board').val('');
        $('#board').focus();
        $('#span_board').html('');
        $('#span_board').css("color","red");
        $('#applctntabval').val('span_board~Invalid Characters . Alphabets only~board');
        $('#span_board').html("Invalid Characters . Alphabets only");
        // swal('Info', "Invalid Characters . Alphabets only", 'info');
        $('#loader').hide();
    } else {
        $('#span_board').html('');
        $('#applctntabval').val("0");
        $('#board').removeClass('has-error');
        board = board;
    }
});

$('#reg_number').on('change',function(){
    var charRegExp = /^[a-zA-Z '.-]+$/;
    var reg_number=$('#reg_number').val();
    if(reg_number.length<3){
        $('#reg_number').addClass('has-error');
        $('#reg_number').focus();
        $('#applctntabval').val('span_reg_number~Enter alteast three Characters~reg_number');
        $('#span_reg_number').html('');
        $('#span_reg_number').css("color","red");
        $('#span_reg_number').html('Enter alteast three Characters');
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else if (reg_number.search(charRegExp) != 0) {
        $('#reg_number').addClass('has-error');
        $('#reg_number').val('');
        $('#reg_number').focus();
        $('#span_reg_number').html('');
        $('#span_reg_number').css("color","red");
        $('#applctntabval').val('span_reg_number~Invalid Characters . Alphabets only~reg_number');
        $('#span_reg_number').html('Invalid Characters . Alphabets only');
        // swal('Info', 'Invalid Characters . Alphabets only', 'info');
        $('#loader').hide();
    } else {
        $('#applctntabval').val("0");
        $('#span_reg_number').html('');
        $('#reg_number').removeClass('has-error');
        reg_number = reg_number;
    }
});

$('#name').on('change',function(){
    var charRegExp = /^[a-zA-Z '.-]+$/;
    var name=$('#name').val();
    if(name.length<3){
        $('#name').addClass('has-error');
        $('#name').focus();
        $('#applctntabval').val('span_name~Enter alteast three Characters~name');
        $('#span_name').html('');
        $('#span_name').css("color","red");
        $('#span_name').html('Enter alteast three Characters');
        swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else if (name.search(charRegExp) != 0) {
        $('#name').addClass('has-error');
        $('#name').val('');
        $('#name').focus();
        $('#span_name').html('');
        $('#span_name').css("color","red");
        $('#applctntabval').val('span_name~Invalid Characters . Alphabets only~name');
        $('#span_name').html('Invalid Characters . Alphabets only');
        // swal('Info', 'Invalid Characters . Alphabets only', 'info');
        $('#loader').hide();
    } else {
        $('#applctntabval').val("0");
        $('#span_name').html('');
        $('#name').removeClass('has-error');
        name = name;
    }
});


$('#dob').on('change',function(){
    var charRegExp = /^[a-zA-Z '.-]+$/;
    var dob=$('#dob').val();
    if(dob.length<3){
        $('#dob').addClass('has-error');
        $('#dob').focus();
        $('#applctntabval').val('span_dob~Enter alteast three Characters~dob');
        $('#span_dob').html('');
        $('#span_dob').css("color","red");
        $('#span_dob').html('Enter alteast three Characters');
        swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else if (dob.search(charRegExp) != 0) {
        $('#dob').addClass('has-error');
        $('#dob').val('');
        $('#dob').focus();
        $('#span_dob').html('');
        $('#span_dob').css("color","red");
        $('#applctntabval').val('span_dob~Invalid Characters . Alphabets only~dob');
        $('#span_dob').html('Invalid Characters . Alphabets only');
        // swal('Info', 'Invalid Characters . Alphabets only', 'info');
        $('#loader').hide();
    } else {
        $('#applctntabval').val("0");
        $('#span_dob').html('');
        $('#dob').removeClass('has-error');
        dob = dob;
    }
});

$('#addr').on('change',function(){
    var charRegExp = /^[a-zA-Z '.-]+$/;
    var addr=$('#addr').val();
    if(addr.length<3){
        $('#addr').addClass('has-error');
        $('#addr').focus();
        $('#applctntabval').val('span_addr~Enter alteast three Characters~addr');
        $('#span_addr').html('');
        $('#span_addr').css("color","red");
        $('#span_addr').html('Enter alteast three Characters');
        swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else if (addr.search(charRegExp) != 0) {
        $('#addr').addClass('has-error');
        $('#addr').val('');
        $('#addr').focus();
        $('#span_addr').html('');
        $('#span_addr').css("color","red");
        $('#applctntabval').val('span_addr~Invalid Characters . Alphabets only~addr');
        $('#span_addr').html('Invalid Characters . Alphabets only');
        // swal('Info', 'Invalid Characters . Alphabets only', 'info');
        $('#loader').hide();
    } else {
        $('#applctntabval').val("0");
        $('#span_addr').html('');
        $('#addr').removeClass('has-error');
        addr = addr;
    }
});

$('#Mob').on('change',function(){
    var charRegExp = /^[a-zA-Z '.-]+$/;
    var Mob=$('#Mob').val();
    if(Mob.length<3){
        $('#Mob').addClass('has-error');
        $('#Mob').focus();
        $('#applctntabval').val('span_Mob~Enter alteast three Characters~Mob');
        $('#span_Mob').html('');
        $('#span_Mob').css("color","red");
        $('#span_Mob').html('Enter alteast three Characters');
        swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else if (Mob.search(charRegExp) != 0) {
        $('#Mob').addClass('has-error');
        $('#Mob').val('');
        $('#Mob').focus();
        $('#span_Mob').html('');
        $('#span_Mob').css("color","red");
        $('#applctntabval').val('span_Mob~Invalid Characters . Alphabets only~Mob');
        $('#span_Mob').html('Invalid Characters . Alphabets only');
        // swal('Info', 'Invalid Characters . Alphabets only', 'info');
        $('#loader').hide();
    } else {
        $('#applctntabval').val("0");
        $('#span_Mob').html('');
        $('#Mob').removeClass('has-error');
        Mob = Mob;
    }
});



$('#Email').on('change',function(){
    var charRegExp = /^[a-zA-Z '.-]+$/;
    var Email=$('#Email').val();
    if(Email.length<3){
        $('#Email').addClass('has-error');
        $('#Email').focus();
        $('#applctntabval').val('span_Email~Enter alteast three Characters~Email');
        $('#span_Email').html('');
        $('#span_Email').css("color","red");
        $('#span_Email').html('Enter alteast three Characters');
        swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else if (Email.search(charRegExp) != 0) {
        $('#Email').addClass('has-error');
        $('#Email').val('');
        $('#Email').focus();
        $('#span_Email').html('');
        $('#span_Email').css("color","red");
        $('#applctntabval').val('span_Email~Invalid Characters . Alphabets only~Email');
        $('#span_Email').html('Invalid Characters . Alphabets only');
        // swal('Info', 'Invalid Characters . Alphabets only', 'info');
        $('#loader').hide();
    } else {
        $('#applctntabval').val("0");
        $('#span_Email').html('');
        $('#Email').removeClass('has-error');
        Email = Email;
    }
});




function validate_search(){
    var purpose=$('#purpose').val();
    var yr_pass=$('#yr_pass').val();
    var board=$('#board').val();
    var ErMsg='';
    var Er_flag=0;
    if(purpose.length<3){
        Er_flag=1;
        $('#purpose').addClass('has-error');
        $('#purpose').focus();
        $('#span_purpose').html('');
        $('#applctntabval').val('span_purpose~Enter alteast three Characters~purpose');
        $('#span_purpose').css("color","red");
        $('#span_purpose').html('Invalid Characters . Alphabets only');
        $('#purpose').val('');        
        $('#loader').hide();
    }else{
        $('#span_purpose').html('');
        $('#purpose').removeClass('has-error');
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
    var applctntabval=$('#applctntabval').val();
    var reg_number=$('#reg_number').val();
    var name=$('#name').val();
    var Er_flag=0;
    var ErMsg='';
   
    var dob=$('#dob').val();
    var addr=$('#addr').val();
    var Mob=$('#Mob').val();
   
    var Email=$('#Email').val();
   

    if(reg_number.length<3){
        $('#reg_number').addClass('has-error');
        Er_flag=1;
        $('#reg_number').focus();
        $('#applctntabval').val('span_reg_number~Enter alteast three Characters~reg_number');
        $('#span_reg_number').html('');
        $('#span_reg_number').css("color","red");
        $('#span_reg_number').html("Enter alteast three Characters");
        
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else{
        $('#reg_number').removeClass('has-error');
        $('#span_reg_number').html('');
        $('#applctntabval').val("0");
    }

    if(name.length<3){
        $('#name').addClass('has-error');
        Er_flag=1;
        $('#name').focus();
        $('#applctntabval').val('span_name~Enter alteast three Characters~name');
        $('#span_name').html('');
        $('#span_name').css("color","red");
        $('#span_name').html("Enter alteast three Characters");
        
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else{
        $('#name').removeClass('has-error');
        $('#span_name').html('');
        $('#applctntabval').val("0");
    }
    
   
    if(dob.length<3){
        $('#dob').addClass('has-error');
        Er_flag=1;
        $('#dob').focus();
        $('#applctntabval').val('span_dob~Enter alteast three Characters~dob');
        $('#span_dob').html('');
        $('#span_dob').css("color","red");
        $('#span_dob').html("Enter alteast three Characters");
        
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else{
        $('#dob').removeClass('has-error');
        $('#span_dob').html('');
        $('#applctntabval').val("0");
    }
    if(addr.length<3){
        $('#addr').addClass('has-error');
        Er_flag=1;
        $('#addr').focus();
        $('#applctntabval').val('span_addr~Enter alteast three Characters~addr');
        $('#span_addr').html('');
        $('#span_addr').css("color","red");
        $('#span_addr').html("Enter alteast three Characters");
        
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else{
        $('#addr').removeClass('has-error');
        $('#span_addr').html('');
        $('#applctntabval').val("0");
    }
    if(Mob.length<3){
        $('#Mob').addClass('has-error');
        Er_flag=1;
        $('#Mob').focus();
        $('#applctntabval').val('span_Mob~Enter alteast three Characters~Mob');
        $('#span_Mob').html('');
        $('#span_Mob').css("color","red");
        $('#span_Mob').html("Enter alteast three Characters");
        
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else{
        $('#Mob').removeClass('has-error');
        $('#span_Mob').html('');
        $('#applctntabval').val("0");
    }
   
    if(Email.length<3){
        $('#Email').addClass('has-error');
        Er_flag=1;
        $('#Email').focus();
        $('#applctntabval').val('span_Email~Enter alteast three Characters~Email');
        $('#span_Email').html('');
        $('#span_Email').css("color","red");
        $('#span_Email').html("Enter alteast three Characters");
        
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else{
        $('#Email').removeClass('has-error');
        $('#span_Email').html('');
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
