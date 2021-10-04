<style>
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
$('#edist_reg_num').on('change',function(){
    var charRegExp = /^[a-zA-Z '.-]+$/;
    var edist_reg_num=$('#edist_reg_num').val();
    if(edist_reg_num.length<3){
        $('#edist_reg_num').addClass('has-error');
        $('#edist_reg_num').focus();
        $('#applctntabval').val('span_edist_reg_num~Enter alteast three Characters~edist_reg_num');
        $('#span_edist_reg_num').html('');
        $('#span_edist_reg_num').css("color","red");
        $('#span_edist_reg_num').html('Enter alteast three Characters');
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else if (edist_reg_num.search(charRegExp) != 0) {
        $('#edist_reg_num').addClass('has-error');
        $('#edist_reg_num').val('');
        $('#edist_reg_num').focus();
        $('#span_edist_reg_num').html('');
        $('#span_edist_reg_num').css("color","red");
        $('#applctntabval').val('span_edist_reg_num~Invalid Characters . Alphabets only~edist_reg_num');
        $('#span_edist_reg_num').html('Invalid Characters . Alphabets only');
        // swal('Info', 'Invalid Characters . Alphabets only', 'info');
        $('#loader').hide();
    } else {
        $('#applctntabval').val("0");
        $('#span_edist_reg_num').html('');
        $('#edist_reg_num').removeClass('has-error');
        edist_reg_num = edist_reg_num;
    }
});
$('#cert_type').on('change',function(){
    var charRegExp = /^[0-9]+$/;
    var cert_type=$('#cert_type').val();
    if (cert_type.search(charRegExp) != 0) {
        $('#cert_type').addClass('has-error');
        $('#cert_type').val('');
        $('#cert_type').focus();
        $('#span_cert_type').html('');
        $('#span_cert_type').css("color","red");
        $('#applctntabval').val('span_cert_type~Invalid Characters . Alphabets only~cert_type');
        $('#span_cert_type').html("Invalid Characters . Alphabets only");
        // swal('Info', "Invalid Characters . Alphabets only", 'info');
        $('#loader').hide();
    } else {
        $('#span_cert_type').html('');
        $('#applctntabval').val("0");
        $('#cert_type').removeClass('has-error');
        cert_type = cert_type;
    }
});
$('#cert_purpos').on('change',function(){
    var charRegExp = /^[0-9]+$/;
    var cert_purpos=$('#cert_purpos').val();
    if (cert_purpos.search(charRegExp) != 0) {
        $('#cert_purpos').addClass('has-error');
        $('#cert_purpos').val('');
        $('#cert_purpos').focus();
        $('#span_cert_purpos').html('');
        $('#span_cert_purpos').css("color","red");
        $('#applctntabval').val('span_cert_purpos~Invalid Characters . Alphabets only~cert_purpos');
        $('#span_cert_purpos').html("Invalid Characters . Alphabets only");
        // swal('Info', "Invalid Characters . Alphabets only", 'info');
        $('#loader').hide();
    } else {
        $('#span_cert_purpos').html('');
        $('#applctntabval').val("0");
        $('#cert_purpos').removeClass('has-error');
        cert_purpos = cert_purpos;
    }
});
$('#to_be_prod_befor').on('change',function(){
    var charRegExp = /^[a-zA-Z '.-]+$/;
    var to_be_prod_befor=$('#to_be_prod_befor').val();
    if(to_be_prod_befor.length<3){
        $('#to_be_prod_befor').addClass('has-error');
        $('#to_be_prod_befor').focus();
        $('#applctntabval').val('span_to_be_prodcd~Enter alteast three Characters~to_be_prod_befor');
        $('#span_to_be_prodcd').html('');
        $('#span_to_be_prodcd').css("color","red");
        $('#span_to_be_prodcd').html('Enter alteast three Characters');
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else if (to_be_prod_befor.search(charRegExp) != 0) {
        $('#to_be_prod_befor').addClass('has-error');
        $('#to_be_prod_befor').val('');
        $('#to_be_prod_befor').focus();
        $('#span_to_be_prodcd').html('');
        $('#span_to_be_prodcd').css("color","red");
        $('#applctntabval').val('span_to_be_prodcd~Invalid Characters . Alphabets only~to_be_prod_befor');
        $('#span_to_be_prodcd').html('Invalid Characters . Alphabets only');
        // swal('Info', 'Invalid Characters . Alphabets only', 'info');
        $('#loader').hide();
    } else {
        $('#applctntabval').val("0");
        $('#span_to_be_prodcd').html('');
        $('#to_be_prod_befor').removeClass('has-error');
        to_be_prod_befor = to_be_prod_befor;
    }
});

$('.dist_list_1').on('change',function(){
    var charRegExp = /^[0-9]+$/;
    var dist_list_1=$('.dist_list_1').val();
    if (dist_list_1.search(charRegExp) != 0) {
        $('.dist_list_1').addClass('has-error');
        $('.dist_list_1').val('');
        $('.dist_list_1').focus();
        $('.span_dist_list_1').html('');
        $('.span_dist_list_1').css("color","red");
        $('#applctntabval').val('span_dist_list_1~Invalid Characters . Alphabets only~dist_list_1');
        $('.span_dist_list_1').html("Invalid Characters . Alphabets only");
        // swal('Info', "Invalid Characters . Alphabets only", 'info');
        $('#loader').hide();
    } else {
        $('.span_dist_list_1').html('');
        $('#applctntabval').val("0");
        $('.dist_list_1').removeClass('has-error');
        cert_type = cert_type;
    }
});
$('.taluk_list_1').on('change',function(){
    var charRegExp = /^[0-9]+$/;
    var taluk_list_1=$('.taluk_list_1').val();
    if (taluk_list_1.search(charRegExp) != 0) {
        $('.taluk_list_1').addClass('has-error');
        $('.taluk_list_1').val('');
        $('.taluk_list_1').focus();
        $('.span_taluk_list_1').html('');
        $('.span_taluk_list_1').css("color","red");
        $('#applctntabval').val('span_taluk_list_1~Invalid Characters . Alphabets only~taluk_list_1');
        $('.span_taluk_list_1').html("Invalid Characters . Alphabets only");
        // swal('Info', "Invalid Characters . Alphabets only", 'info');
        $('#loader').hide();
    } else {
        $('.span_taluk_list_1').html('');
        $('#applctntabval').val("0");
        $('.taluk_list_1').removeClass('has-error');
        cert_type = cert_type;
    }
});

$('.village_list_1').on('change',function(){
    var charRegExp = /^[0-9]+$/;
    var village_list_1=$('.village_list_1').val();
    if (village_list_1.search(charRegExp) != 0) {
        $('.village_list_1').addClass('has-error');
        $('.village_list_1').val('');
        $('.village_list_1').focus();
        $('.span_village_list_1').html('');
        $('.span_village_list_1').css("color","red");
        $('#applctntabval').val('span_village_list_1~Invalid Characters . Alphabets only~village_list_1');
        $('.span_village_list_1').html("Invalid Characters . Alphabets only");
        // swal('Info', "Invalid Characters . Alphabets only", 'info');
        $('#loader').hide();
    } else {
        $('.span_village_list_1').html('');
        $('#applctntabval').val("0");
        $('.village_list_1').removeClass('has-error');
        cert_type = cert_type;
    }
});

$('.old_survy_num').on('change',function(){
    var charRegExp = /^[a-zA-Z0-9 '.-]+$/;
    var old_survy_num=$('.old_survy_num').val();
    if (old_survy_num.search(charRegExp) != 0) {
        $('.old_survy_num').addClass('has-error');
        $('.old_survy_num').val('');
        $('.old_survy_num').focus();
        $('.span_old_survy_num').html('');
        $('.span_old_survy_num').css("color","red");
        $('#applctntabval').val('span_old_survy_num~Invalid Characters.~old_survy_num');
        $('.span_old_survy_num').html("Invalid Characters .");
        // swal('Info', "Invalid Characters . Alphabets only", 'info');
        $('#loader').hide();
    }else if(old_survy_num.length<3){
        $('.old_survy_num').addClass('has-error');
        $('.old_survy_num').focus();
        $('.span_old_survy_num').html('');
        $('.span_old_survy_num').css("color","red");
        $('#applctntabval').val('span_to_be_prodcd~Enter alteast three Characters~old_survy_num');
        $('.span_old_survy_num').html("Enter alteast three Characters");
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    } else {
        $('.span_old_survy_num').html('');
        $('#applctntabval').val("0");
        $('.old_survy_num').removeClass('has-error');
        old_survy_num = old_survy_num;
    }
});

$('.resurver_blck').on('change',function(){
    var charRegExp = /^[a-zA-Z0-9 '.-]+$/;
    var resurver_blck=$('.resurver_blck').val();
    if (resurver_blck.search(charRegExp) != 0) {
        $('.resurver_blck').addClass('has-error');
        $('.resurver_blck').val('');
        $('.resurver_blck').focus();
        $('.span_resurver_blck').html('');
        $('.span_resurver_blck').css("color","red");
        $('#applctntabval').val('span_resurver_blck~Invalid Characters.~resurver_blck');
        $('.span_resurver_blck').html("Invalid Characters .");
        // swal('Info', "Invalid Characters . Alphabets only", 'info');
        $('#loader').hide();
    }else if(resurver_blck.length<3){
        $('.resurver_blck').addClass('has-error');
        $('.resurver_blck').focus();
        $('.span_resurver_blck').html('');
        $('.span_resurver_blck').css("color","red");
        $('#applctntabval').val('span_to_be_prodcd~Enter alteast three Characters~resurver_blck');
        $('.span_resurver_blck').html("Enter alteast three Characters");
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else {
        $('.span_resurver_blck').html('');
        $('#applctntabval').val("0");
        $('.resurver_blck').removeClass('has-error');
        resurver_blck = resurver_blck;
    }
});

$('.resurvy_num').on('change',function(){
    var charRegExp = /^[a-zA-Z0-9 '.-]+$/;
    var resurvy_num=$('.resurvy_num').val();
    if (resurvy_num.search(charRegExp) != 0) {
        $('.resurvy_num').addClass('has-error');
        $('.resurvy_num').val('');
        $('.resurvy_num').focus();
        $('.span_resurvy_num').html('');
        $('.span_resurvy_num').css("color","red");
        $('#applctntabval').val('span_resurvy_num~Invalid Characters.~resurvy_num');
        $('.span_resurvy_num').html("Invalid Characters .");
        // swal('Info', "Invalid Characters . Alphabets only", 'info');
        $('#loader').hide();
    }else if(resurvy_num.length<3){
        $('.resurvy_num').addClass('has-error');
        $('.resurvy_num').focus();
        $('.span_resurvy_num').html('');
        $('.span_resurvy_num').css("color","red");
        $('#applctntabval').val('span_to_be_prodcd~Enter alteast three Characters~resurvy_num');
        $('.span_resurvy_num').html("Enter alteast three Characters");
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else {
        $('.span_resurvy_num').html('');
        $('#applctntabval').val("0");
        $('.resurvy_num').removeClass('has-error');
        resurvy_num = resurvy_num;
    }
});

$('.thundaper_num').on('change',function(){
    var charRegExp = /^[a-zA-Z0-9 '.-]+$/;
    var thundaper_num=$('.thundaper_num').val();
    if (thundaper_num.search(charRegExp) != 0) {
        $('.thundaper_num').addClass('has-error');
        $('.thundaper_num').val('');
        $('.thundaper_num').focus();
        $('.span_thundaper_num').html('');
        $('.span_thundaper_num').css("color","red");
        $('#applctntabval').val('span_thundaper_num~Invalid Characters.~thundaper_num');
        $('.span_thundaper_num').html("Invalid Characters .");
        // swal('Info', "Invalid Characters . Alphabets only", 'info');
        $('#loader').hide();
    }else if(thundaper_num.length<3){
        $('.thundaper_num').addClass('has-error');
        $('.thundaper_num').focus();
        $('.span_thundaper_num').html('');
        $('.span_thundaper_num').css("color","red");
        $('#applctntabval').val('span_to_be_prodcd~Enter alteast three Characters~thundaper_num');
        $('.span_thundaper_num').html("Enter alteast three Characters");
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else {
        $('.span_thundaper_num').html('');
        $('#applctntabval').val("0");
        $('.thundaper_num').removeClass('has-error');
        thundaper_num = thundaper_num;
    }
});

$('.land_type').on('change',function(){
    var charRegExp = /^[a-zA-Z0-9 '.-]+$/;
    var land_type=$('.land_type').val();
    if (land_type.search(charRegExp) != 0) {
        $('.land_type').addClass('has-error');
        $('.land_type').val('');
        $('.land_type').focus();
        $('.span_land_type').html('');
        $('.span_land_type').css("color","red");
        $('#applctntabval').val('span_land_type~Invalid Characters.~land_type');
        $('.span_land_type').html("Invalid Characters .");
        // swal('Info', "Invalid Characters . Alphabets only", 'info');
        $('#loader').hide();
    }else if(land_type.length<3){
        $('.land_type').addClass('has-error');
        $('.land_type').focus();
        $('.span_land_type').html('');
        $('.span_land_type').css("color","red");
        $('#applctntabval').val('span_to_be_prodcd~Enter alteast three Characters~land_type');
        $('.span_land_type').html("Enter alteast three Characters");
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else {
        $('.span_land_type').html('');
        $('#applctntabval').val("0");
        $('.land_type').removeClass('has-error');
        land_type = land_type;
    }
});

$('.extentinHect').on('change',function(){
    var charRegExp = /^[a-zA-Z0-9 '.-]+$/;
    var extentinHect=$('.extentinHect').val();
    if (extentinHect.search(charRegExp) != 0) {
        $('.extentinHect').addClass('has-error');
        $('.extentinHect').val('');
        $('.extentinHect').focus();
        $('.span_extentinHect').html('');
        $('.span_extentinHect').css("color","red");
        $('#applctntabval').val('span_extentinHect~Invalid Characters.~extentinHect');
        $('.span_extentinHect').html("Invalid Characters .");
        // swal('Info', "Invalid Characters . Alphabets only", 'info');
        $('#loader').hide();
    }else if(extentinHect.length<3){
        $('.extentinHect').addClass('has-error');
        $('.extentinHect').focus();
        $('.span_extentinHect').html('');
        $('.span_extentinHect').css("color","red");
        $('#applctntabval').val('span_to_be_prodcd~Enter alteast three Characters~extentinHect');
        $('.span_extentinHect').html("Enter alteast three Characters");
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else {
        $('.span_extentinHect').html('');
        $('#applctntabval').val("0");
        $('.extentinHect').removeClass('has-error');
        extentinHect = extentinHect;
    }
});

$('.market_val_prop').on('change',function(){
    var charRegExp = /^[a-zA-Z0-9 '.-]+$/;
    var market_val_prop=$('.market_val_prop').val();
    if (market_val_prop.search(charRegExp) != 0) {
        $('.market_val_prop').addClass('has-error');
        $('.market_val_prop').val('');
        $('.market_val_prop').focus();
        $('.span_market_val_prop').html('');
        $('.span_market_val_prop').css("color","red");
        $('#applctntabval').val('span_market_val_prop~Invalid Characters.~market_val_prop');
        $('.span_market_val_prop').html("Invalid Characters .");
        // swal('Info', "Invalid Characters . Alphabets only", 'info');
        $('#loader').hide();
    }else if(market_val_prop.length<3){
        $('.market_val_prop').addClass('has-error');
        $('.market_val_prop').focus();
        $('.span_market_val_prop').html('');
        $('.span_market_val_prop').css("color","red");
        $('#applctntabval').val('span_to_be_prodcd~Enter alteast three Characters~market_val_prop');
        $('.span_market_val_prop').html("Enter alteast three Characters");
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else {
        $('.span_market_val_prop').html('');
        $('#applctntabval').val("0");
        $('.market_val_prop').removeClass('has-error');
        market_val_prop = market_val_prop;
    }
});

$('.laibility_amnt').on('change',function(){
    var charRegExp = /^[a-zA-Z0-9 '.-]+$/;
    var laibility_amnt=$('.laibility_amnt').val();
    if (laibility_amnt.search(charRegExp) != 0) {
        $('.laibility_amnt').addClass('has-error');
        $('.laibility_amnt').val('');
        $('.laibility_amnt').focus();
        $('.span_laibility_amnt').html('');
        $('.span_laibility_amnt').css("color","red");
        $('#applctntabval').val('span_laibility_amnt~Invalid Characters.~laibility_amnt');
        $('.span_laibility_amnt').html("Invalid Characters .");
        // swal('Info', "Invalid Characters . Alphabets only", 'info');
        $('#loader').hide();
    }else if(laibility_amnt.length<3){
        $('.laibility_amnt').addClass('has-error');
        $('.laibility_amnt').focus();
        $('.span_laibility_amnt').html('');
        $('.span_laibility_amnt').css("color","red");
        $('#applctntabval').val('span_to_be_prodcd~Enter alteast three Characters~laibility_amnt');
        $('.span_laibility_amnt').html("Enter alteast three Characters");
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else {
        $('.span_laibility_amnt').html('');
        $('#applctntabval').val("0");
        $('.laibility_amnt').removeClass('has-error');
        laibility_amnt = laibility_amnt;
    }
});


$('#Applcnt_name').on('change',function(){
    var charRegExp = /^[a-zA-Z '.-]+$/;
    var Applcnt_name=$('#Applcnt_name').val();
    if(Applcnt_name.length<3){
        $('#Applcnt_name').addClass('has-error');
        $('#Applcnt_name').focus();
        $('#span_Applcnt_name').html('');
        $('#span_Applcnt_name').css("color","red");
        $('#applctntabval').val('span_to_be_prodcd~Enter alteast three Characters~Applcnt_name');
        $('#span_Applcnt_name').html("Enter alteast three Characters");
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else if (Applcnt_name.search(charRegExp) != 0) {
        $('#Applcnt_name').addClass('has-error');
        $('#Applcnt_name').val('');
        $('#Applcnt_name').focus();
        $('#span_Applcnt_name').html('');
        $('#span_Applcnt_name').css("color","red");
        $('#applctntabval').val('span_Applcnt_name~Invalid Characters . Alphabets only~Applcnt_name');
        $('#span_Applcnt_name').html("Invalid Characters . Alphabets only");
        // swal('Info', "Invalid Characters . Alphabets only", 'info');
        $('#loader').hide();
    } else {
        $('#span_Applcnt_name').html('');
        $('#applctntabval').val("0");
        $('#Applcnt_name').removeClass('has-error');
        Applcnt_name = Applcnt_name;
    }
});
$('#cert_reltn').on('change',function(){
    var charRegExp = /^[0-9]+$/;
    var cert_reltn=$('#cert_reltn').val();
    if (cert_reltn.search(charRegExp) != 0) {
        $('#cert_reltn').addClass('has-error');
        $('#cert_reltn').val('');
        $('#cert_reltn').focus();
        $('#span_cert_reltn').html('');
        $('#span_cert_reltn').css("color","red");
        $('#applctntabval').val('span_cert_reltn~Invalid Characters . Alphabets only~cert_reltn');
        $('#span_cert_reltn').html("Invalid Characters . Alphabets only");
        // swal('Info', "Invalid Characters . Alphabets only", 'info');
        $('#loader').hide();
    } else {
        $('#span_cert_reltn').html('');
        $('#applctntabval').val("0");
        $('#cert_reltn').removeClass('has-error');
        cert_reltn = cert_reltn;
    }
});


$('#file_eid').on('change',function(){    
    var type=this.files[0].type;
    if ((type=="")||(type=="application/pdf")||(type =='application/vnd.pdf')||(type =='application/PDF')||(type =='application/VND.PDF'))
     {
        var size = this.files[0].size;
        $('#span_file_eid').html('');
        if (size > 1048576)// checks the file more than 1 MB
        {
            $('#filetabval').val('span_file_eid~File size must be less than 1 MB~file_eid');
            $('#span_file_eid').html('');
            $('#span_file_eid').css("color","red");
            $('#span_file_eid').html('File size must be less than 1 MB'); 
            $('#file_eid').focus();   
            //         
          
          
        } else {
            $('#filetabval').val("0");
            $('#span_file_eid').html('');
           
           
        }
        $('#filetabval').val("0");
         
     } else {
        $('#filetabval').val('span_file_eid~File must be a pdf~file_eid');
        $('#span_file_eid').html('');
        $('#span_file_eid').css("color","red");
        $('#span_file_eid').html('File must be a pdf'); 
        $('#file_eid').focus();
         
     }  

});


$('#file_Encum').on('change',function(){    
    var type=this.files[0].type;
    if ((type=="")||(type=="application/pdf")||(type =='application/vnd.pdf')||(type =='application/PDF')||(type =='application/VND.PDF'))
     {
        var size = this.files[0].size;
        $('#span_file_Encum').html('');
        if (size > 1048576)// checks the file more than 1 MB
        {
            $('#filetabval').val('span_file_Encum~File size must be less than 1 MB~file_Encum');
            $('#span_file_Encum').html('');
            $('#span_file_Encum').css("color","red");
            $('#span_file_Encum').html('File size must be less than 1 MB'); 
            $('#file_Encum').focus();   
            //         
          
          
        } else {
            $('#filetabval').val("0");
            $('#span_file_Encum').html('');
           
           
        }
        $('#filetabval').val("0");
         
     } else {
        $('#filetabval').val('span_file_Encum~File must be a pdf~file_Encum');
        $('#span_file_Encum').html('');
        $('#span_file_Encum').css("color","red");
        $('#span_file_Encum').html('File must be a pdf'); 
        $('#file_Encum').focus();
         
     }  

});


$('#file_land_tax').on('change',function(){    
    var type=this.files[0].type;
    if ((type=="")||(type=="application/pdf")||(type =='application/vnd.pdf')||(type =='application/PDF')||(type =='application/VND.PDF'))
     {
        var size = this.files[0].size;
        $('#span_file_land_tax').html('');
        if (size > 1048576)// checks the file more than 1 MB
        {
            $('#filetabval').val('span_file_land_tax~File size must be less than 1 MB~file_land_tax');            
            $('#span_file_land_tax').html('');
            $('#span_file_land_tax').css("color","red");
            $('#span_file_land_tax').html('File size must be less than 1 MB'); 
            $('#file_land_tax').focus();   
            //         
          
          
        } else {
            $('#filetabval').val("0");
            $('#span_file_land_tax').html('');
           
           
        }
        $('#filetabval').val("0");
         
     } else {
        $('#filetabval').val('span_file_land_tax~File must be a pdf~file_land_tax');
        $('#span_file_land_tax').html('');
        $('#span_file_land_tax').css("color","red");
        $('#span_file_land_tax').html('File must be a pdf'); 
        $('#file_land_tax').focus();
         
     }  

});

$('#aadhr_file').on('change',function(){    
    var type=this.files[0].type;
    if ((type=="")||(type=="application/pdf")||(type =='application/vnd.pdf')||(type =='application/PDF')||(type =='application/VND.PDF'))
     {
        var size = this.files[0].size;
        $('#span_aadhr_file').html('');
        if (size > 1048576)// checks the file more than 1 MB
        {
            $('#filetabval').val('span_aadhr_file~File size must be less than 1 MB~aadhr_file');
            $('#span_aadhr_file').html('');
            $('#span_aadhr_file').css("color","red");
            $('#span_aadhr_file').html('File size must be less than 1 MB'); 
            $('#aadhr_file').focus();   
            //         
          
          
        } else {
            $('#filetabval').val("0");
            $('#span_aadhr_file').html('');
           
           
        }
        $('#filetabval').val("0");
         
     } else {
        $('#filetabval').val('span_aadhr_file~File must be a pdf~aadhr_file');       
        $('#span_aadhr_file').html('');
        $('#span_aadhr_file').css("color","red");
        $('#span_aadhr_file').html('File must be a pdf'); 
        $('#aadhr_file').focus();
         
     }  

});

$('#file_pattayam').on('change',function(){    
    var type=this.files[0].type;
    if ((type=="")||(type=="application/pdf")||(type =='application/vnd.pdf')||(type =='application/PDF')||(type =='application/VND.PDF'))
     {
        var size = this.files[0].size;
        $('#span_file_pattayam').html('');
        if (size > 1048576)// checks the file more than 1 MB
        {
            $('#filetabval').val('span_file_pattayam~File size must be less than 1 MB~file_pattayam');            
            $('#span_file_pattayam').html('');
            $('#span_file_pattayam').css("color","red");
            $('#span_file_pattayam').html('File size must be less than 1 MB'); 
            $('#file_pattayam').focus();   
            //         
          
          
        } else {
            $('#filetabval').val("0");
            $('#span_file_pattayam').html('');
           
           
        }
        $('#filetabval').val("0");
         
     } else {
        $('#filetabval').val('span_file_pattayam~File must be a pdf~file_pattayam');
        $('#span_file_pattayam').html('');
        $('#span_file_pattayam').css("color","red");
        $('#span_file_pattayam').html('File must be a pdf'); 
        $('#file_pattayam').focus();
         
     }  

});

$('#remarks_eid').on('change',function(){
    var charRegExp = /^[a-zA-Z '.-]+$/;
    var remarks_eid=$('#remarks_eid').val();
    if(remarks_eid.length<3){
        $('#remarks_eid').addClass('has-error');
        $('#remarks_eid').focus();
        $('#span_remarks_eid').html('');
        $('#span_remarks_eid').css("color","red");
        $('#filetabval').val('span_remarks_eid~Enter alteast three Characters~remarks_eid');
        $('#span_remarks_eid').html("Enter alteast three Characters.");
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else if (remarks_eid.search(charRegExp) != 0) {
        $('#remarks_eid').addClass('has-error');
        $('#remarks_eid').val('');
        $('#remarks_eid').focus();
        $('#span_remarks_eid').html('');
        $('#span_remarks_eid').css("color","red");
        $('#filetabval').val('span_remarks_eid~Invalid Characters . Alphabets only~remarks_eid');
        $('#span_remarks_eid').html("Invalid Characters . Alphabets only");
        // swal('Info', "Invalid Characters . Alphabets only", 'info');
        $('#loader').hide();
    } else {
        $('#filetabval').val("0");
        $('#span_remarks_eid').html('');
        $('#remarks_eid').removeClass('has-error');
        remarks_eid = remarks_eid;
    }
});

$('#doc_ref_no_eid').on('change',function(){
    var charRegExp = /^[a-zA-Z '.-]+$/;
    var doc_ref_no_eid=$('#doc_ref_no_eid').val();
    if(doc_ref_no_eid.length<3){
        $('#doc_ref_no_eid').addClass('has-error');
        $('#doc_ref_no_eid').focus();
        $('#span_doc_ref_no_eid').html('');
        $('#span_doc_ref_no_eid').css("color","red");
        $('#filetabval').val('span_doc_ref_no_eid~Enter alteast three Characters~remarks_eid');
        $('#span_doc_ref_no_eid').html("Enter alteast three Characters");
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else if (doc_ref_no_eid.search(charRegExp) != 0) {
        $('#doc_ref_no_eid').addClass('has-error');
        $('#doc_ref_no_eid').val('');
        $('#doc_ref_no_eid').focus();
        $('#span_doc_ref_no_eid').html('');
        $('#span_doc_ref_no_eid').css("color","red");
        $('#filetabval').val('span_doc_ref_no_eid~Invalid Characters . Alphabets only~remarks_eid');
        $('#span_doc_ref_no_eid').html("Invalid Characters . Alphabets only");
        // swal('Info', "Invalid Characters . Alphabets only", 'info');
        $('#loader').hide();
    } else {
        $('#filetabval').val("0");
        $('#span_doc_ref_no_eid').html('');
        $('#doc_ref_no_eid').removeClass('has-error');
        doc_ref_no_eid = doc_ref_no_eid;
    }
});

$('#remarks_Encum').on('change',function(){
    var charRegExp = /^[a-zA-Z '.-]+$/;
    var remarks_Encum=$('#remarks_Encum').val();
    if(remarks_Encum.length<3){
        $('#remarks_Encum').addClass('has-error');
        $('#remarks_Encum').focus();
        $('#span_remarks_Encum').html('');
        $('#span_remarks_Encum').css("color","red");
        $('#filetabval').val('span_remarks_Encum~Enter alteast three Characters~remarks_Encum');
        $('#span_remarks_Encum').html("Enter alteast three Characters");
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else if (remarks_Encum.search(charRegExp) != 0) {
        $('#remarks_Encum').addClass('has-error');
        $('#remarks_Encum').val('');
        $('#remarks_Encum').focus();
        $('#span_remarks_Encum').html('');
        $('#span_remarks_Encum').css("color","red");
        $('#filetabval').val('span_remarks_Encum~Invalid Characters . Alphabets only~remarks_Encum');
        $('#span_remarks_Encum').html("Invalid Characters . Alphabets only");
        // swal('Info', "Invalid Characters . Alphabets only", 'info');
        $('#loader').hide();
    } else {
        $('#filetabval').val("0");
        $('#span_remarks_Encum').html('');
        $('#remarks_Encum').removeClass('has-error');
        remarks_Encum = remarks_Encum;
    }
});

$('#doc_ref_no_Encum').on('change',function(){
    var charRegExp = /^[a-zA-Z '.-]+$/;
    var doc_ref_no_Encum=$('#doc_ref_no_Encum').val();
    if(doc_ref_no_Encum.length<3){
        $('#doc_ref_no_Encum').addClass('has-error');
        $('#doc_ref_no_Encum').focus();
        $('#span_doc_ref_no_Encum').html('');
        $('#span_doc_ref_no_Encum').css("color","red");
        $('#filetabval').val('span_doc_ref_no_Encum~Enter alteast three Characters~doc_ref_no_Encum');
        $('#span_doc_ref_no_Encum').html("Enter alteast three Characters.");
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else if (doc_ref_no_Encum.search(charRegExp) != 0) {
        $('#doc_ref_no_Encum').addClass('has-error');
        $('#doc_ref_no_Encum').val('');
        $('#doc_ref_no_Encum').focus();
        $('#span_doc_ref_no_Encum').html('');
        $('#span_doc_ref_no_Encum').css("color","red");
        $('#filetabval').val('span_doc_ref_no_Encum~Invalid Characters . Alphabets only~doc_ref_no_Encum');
        $('#span_doc_ref_no_Encum').html("Invalid Characters . Alphabets only");
        // swal('Info', "Invalid Characters . Alphabets only", 'info');
        $('#loader').hide();
    } else {
        $('#filetabval').val("0");
        $('#span_doc_ref_no_Encum').html('');
        $('#doc_ref_no_Encum').removeClass('has-error');
        doc_ref_no_Encum = doc_ref_no_Encum;
    }
});



$('#remarks_land_tax').on('change',function(){
    var charRegExp = /^[a-zA-Z '.-]+$/;
    var remarks_land_tax=$('#remarks_land_tax').val();
    if(remarks_land_tax.length<3){
        $('#remarks_land_tax').addClass('has-error');
        $('#remarks_land_tax').focus();
        $('#span_remarks_land_tax').html('');
        $('#span_remarks_land_tax').css("color","red");
        $('#filetabval').val('span_remarks_land_tax~Enter alteast three Characters~remarks_land_tax');
        $('#span_remarks_land_tax').html("Enter alteast three Characters");
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else if (remarks_land_tax.search(charRegExp) != 0) {
        $('#remarks_land_tax').addClass('has-error');
        $('#remarks_land_tax').val('');
        $('#remarks_land_tax').focus();
        $('#span_remarks_land_tax').html('');
        $('#span_remarks_land_tax').css("color","red");
        $('#filetabval').val('span_remarks_land_tax~Invalid Characters . Alphabets only~remarks_land_tax');
        $('#span_remarks_land_tax').html("Invalid Characters . Alphabets only");
        // swal('Info', "Invalid Characters . Alphabets only", 'info');
        $('#loader').hide();
    } else {
        $('#filetabval').val("0");
        $('#span_remarks_land_tax').html('');
        $('#remarks_land_tax').removeClass('has-error');
        remarks_land_tax = remarks_land_tax;
    }
});

$('#doc_ref_no_land_tax').on('change',function(){
    var charRegExp = /^[a-zA-Z '.-]+$/;
    var doc_ref_no_land_tax=$('#doc_ref_no_land_tax').val();
    if(doc_ref_no_land_tax.length<3){
        $('#doc_ref_no_land_tax').addClass('has-error');
        $('#doc_ref_no_land_tax').focus();
        $('#span_doc_ref_no_land_tax').html('');
        $('#span_doc_ref_no_land_tax').css("color","red");
        $('#filetabval').val('span_doc_ref_no_land_tax~Enter alteast three Characters~doc_ref_no_land_tax');
        $('#span_doc_ref_no_land_tax').html("Enter alteast three Characters");
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else if (doc_ref_no_land_tax.search(charRegExp) != 0) {
        $('#doc_ref_no_land_tax').addClass('has-error');
        $('#doc_ref_no_land_tax').val('');
        $('#doc_ref_no_land_tax').focus();
        $('#span_doc_ref_no_land_tax').html('');
        $('#span_doc_ref_no_land_tax').css("color","red");
        $('#span_doc_ref_no_land_tax').html("Invalid Characters . Alphabets only");
        $('#filetabval').val('span_doc_ref_no_land_tax~Invalid Characters . Alphabets only~doc_ref_no_land_tax');

        // swal('Info', "Invalid Characters . Alphabets only", 'info');
        $('#loader').hide();
    } else {
        $('#filetabval').val("0");
        $('#span_doc_ref_no_land_tax').html('');
        $('#doc_ref_no_land_tax').removeClass('has-error');
        doc_ref_no_land_tax = doc_ref_no_land_tax;
    }
});

$('#remarks_aadhr').on('change',function(){
    var charRegExp = /^[a-zA-Z '.-]+$/;
    var remarks_aadhr=$('#remarks_aadhr').val();
    if(remarks_aadhr.length<3){
        $('#remarks_aadhr').addClass('has-error');
        $('#remarks_aadhr').focus();
        $('#span_remarks_aadhr').html('');
        $('#span_remarks_aadhr').css("color","red");
        $('#filetabval').val('span_remarks_aadhr~Enter alteast three Characters~remarks_aadhr');
        $('#span_remarks_aadhr').html("Enter alteast three Characters.");
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else if (remarks_aadhr.search(charRegExp) != 0) {
        $('#remarks_aadhr').addClass('has-error');
        $('#remarks_aadhr').val('');
        $('#remarks_aadhr').focus();
        $('#span_remarks_aadhr').html('');
        $('#span_remarks_aadhr').css("color","red");
        $('#filetabval').val('span_remarks_aadhr~Invalid Characters . Alphabets only~remarks_aadhr');

        $('#span_remarks_aadhr').html("Invalid Characters . Alphabets only");
        // swal('Info', "Invalid Characters . Alphabets only", 'info');
        $('#loader').hide();
    } else {
        $('#filetabval').val("0");
        $('#span_remarks_aadhr').html('');
        $('#remarks_aadhr').removeClass('has-error');
        remarks_aadhr = remarks_aadhr;
    }
});

$('#doc_ref_no_aadhr').on('change',function(){
    var charRegExp = /^[a-zA-Z '.-]+$/;
    var doc_ref_no_aadhr=$('#doc_ref_no_aadhr').val();
    if(doc_ref_no_aadhr.length<3){
        $('#doc_ref_no_aadhr').addClass('has-error');
        $('#doc_ref_no_aadhr').focus();
        $('#span_doc_ref_no_aadhr').html('');
        $('#span_doc_ref_no_aadhr').css("color","red");
        $('#filetabval').val('span_doc_ref_no_aadhr~Enter alteast three Characters~doc_ref_no_aadhr');
        $('#span_doc_ref_no_aadhr').html("Enter alteast three Characters.");
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else if (doc_ref_no_aadhr.search(charRegExp) != 0) {
        $('#doc_ref_no_aadhr').addClass('has-error');
        $('#doc_ref_no_aadhr').val('');
        $('#doc_ref_no_aadhr').focus();
        $('#span_doc_ref_no_aadhr').html('');
        $('#span_doc_ref_no_aadhr').css("color","red");
        $('#filetabval').val('span_doc_ref_no_aadhr~Invalid Characters . Alphabets only~doc_ref_no_aadhr');
        $('#span_doc_ref_no_aadhr').html("Invalid Characters . Alphabets only");
        // swal('Info', "Invalid Characters . Alphabets only", 'info');
        $('#loader').hide();
    } else {
        $('#filetabval').val("0");
        $('#span_doc_ref_no_aadhr').html('');
        $('#doc_ref_no_aadhr').removeClass('has-error');
        doc_ref_no_aadhr = doc_ref_no_aadhr;
    }
});


$('#remarks_pattayam').on('change',function(){
    var charRegExp = /^[a-zA-Z '.-]+$/;
    var remarks_pattayam=$('#remarks_pattayam').val();
    if(remarks_pattayam.length<3){
        $('#remarks_pattayam').addClass('has-error');
        $('#remarks_pattayam').focus();
        $('#span_remarks_pattayam').html('');
        $('#span_remarks_pattayam').css("color","red");
        $('#filetabval').val('span_remarks_pattayam~Enter alteast three Characters~remarks_pattayam');
        $('#span_remarks_pattayam').html("Enter alteast three Characters");
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else if (remarks_pattayam.search(charRegExp) != 0) {
        $('#remarks_pattayam').addClass('has-error');
        $('#remarks_pattayam').val('');
        $('#remarks_pattayam').focus();
        $('#span_remarks_pattayam').html('');
        $('#span_remarks_pattayam').css("color","red");
        $('#filetabval').val('span_remarks_pattayam~Invalid Characters . Alphabets only~remarks_pattayam');
        $('#span_remarks_pattayam').html("Invalid Characters . Alphabets only");
        // swal('Info', "Invalid Characters . Alphabets only", 'info');
        $('#loader').hide();
    } else {
        $('#filetabval').val("0");
        $('#span_remarks_pattayam').html('');
        $('#remarks_pattayam').removeClass('has-error');
        remarks_pattayam = remarks_pattayam;
    }
});

$('#doc_ref_no_pattayam').on('change',function(){
    var charRegExp = /^[a-zA-Z '.-]+$/;
    var doc_ref_no_pattayam=$('#doc_ref_no_pattayam').val();
    if(doc_ref_no_pattayam.length<3){
        $('#doc_ref_no_pattayam').addClass('has-error');
        $('#doc_ref_no_pattayam').focus();
        $('#span_doc_ref_no_pattayam').html('');
        $('#span_doc_ref_no_pattayam').css("color","red");
        $('#filetabval').val('span_doc_ref_no_pattayam~Enter alteast three Characters~doc_ref_no_pattayam');
        $('#span_doc_ref_no_pattayam').html("Enter alteast three Characters");
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else if (doc_ref_no_pattayam.search(charRegExp) != 0) {
        $('#doc_ref_no_pattayam').addClass('has-error');
        $('#doc_ref_no_pattayam').val('');
        $('#doc_ref_no_pattayam').focus();
        $('#span_doc_ref_no_pattayam').html('');
        $('#span_doc_ref_no_pattayam').css("color","red");
        $('#span_doc_ref_no_pattayam').html("Invalid Characters . Alphabets only");
        $('#filetabval').val('span_doc_ref_no_pattayam~Invalid Characters . Alphabets only~doc_ref_no_pattayam');

        // swal('Info', "Invalid Characters . Alphabets only", 'info');
        $('#loader').hide();
    } else {
        $('#filetabval').val("0");
        $('#span_doc_ref_no_pattayam').html('');
        $('#doc_ref_no_pattayam').removeClass('has-error');
        doc_ref_no_pattayam = doc_ref_no_pattayam;
    }
});


function validate_form(){
    var applctntabval=$('#applctntabval').val();
    var edist_reg_num=$('#edist_reg_num').val();
    var charRegExp = /^[a-zA-Z '.-]+$/;
    var to_be_prod_befor=$('#to_be_prod_befor').val();
    var Applcnt_name=$('#Applcnt_name').val();
    var Er_flag=0;
    var ErMsg='';
    var cert_type=$('#cert_type').val();
    var cert_purpos=$('#cert_purpos').val();
    var cert_reltn=$('#cert_reltn').val();
    // alert("gg"+cert_type+"hh"+cert_purpos+"kk"+cert_reltn);
    if(edist_reg_num.length<3){
        Er_flag=1;
        $('#edist_reg_num').addClass('has-error');
        $('#edist_reg_num').focus();
        $('#span_edist_reg_num').html('');
        $('#applctntabval').val('span_edist_reg_num~Enter alteast three Characters~edist_reg_num');
        $('#span_edist_reg_num').css("color","red");
        $('#span_edist_reg_num').html('Invalid Characters . Alphabets only');
        $('#edist_reg_num').val('');        
        $('#loader').hide();
    }else{
        $('#span_edist_reg_num').html('');
        $('#edist_reg_num').removeClass('has-error');
        $('#applctntabval').val("0");
    }
    if((cert_type==0)||(cert_type=='')||(cert_type==null)){
        Er_flag=1;
        $('#cert_type').addClass('has-error');
        $('#cert_type').focus();
        $('#span_cert_type').html('');
        $('#applctntabval').val('span_cert_type~Please enter certificate type~cert_type');
        $('#span_cert_type').css("color","red");
        $('#span_cert_type').html('Please enter certificate type');
        $('#cert_type').val('');        
        $('#loader').hide();
    }else{
        $('#span_cert_type').html('');
        $('#cert_type').removeClass('has-error');
        $('#applctntabval').val("0");
    }
    if((cert_purpos==0)||(cert_purpos=='')||(cert_purpos==null)){
        Er_flag=1;
        $('#cert_purpos').addClass('has-error');
        $('#cert_purpos').focus();
        $('#span_cert_purpos').html('');
        $('#applctntabval').val('span_cert_purpos~Please enter certificate purpose~cert_purpos');
        $('#span_cert_purpos').css("color","red");
        $('#span_cert_purpos').html('Please enter certificate purpose');
        $('#cert_purpos').val('');        
        $('#loader').hide();
    }else{
        $('#span_cert_purpos').html('');
        $('#cert_purpos').removeClass('has-error');
        $('#applctntabval').val("0");
    }
    if(to_be_prod_befor.length<3){
        Er_flag=1;
        $('#to_be_prod_befor').addClass('has-error');
        $('#to_be_prod_befor').focus();
        $('#span_to_be_prodcd').html('');
        $('#applctntabval').val('span_to_be_prodcd~Enter alteast three Characters~to_be_prod_befor');
        $('#span_to_be_prodcd').css("color","red");
        $('#span_to_be_prodcd').html('Invalid Characters . Alphabets only');
        $('#to_be_prod_befor').val('');        
        $('#loader').hide();
    }else{
        $('#span_to_be_prodcd').html('');
        $('#to_be_prod_befor').removeClass('has-error');
        $('#applctntabval').val("0");
    }
    if(Applcnt_name.length<3){
        $('#Applcnt_name').addClass('has-error');
        Er_flag=1;
        $('#Applcnt_name').focus();
        $('#applctntabval').val('span_Applcnt_name~Enter alteast three Characters~Applcnt_name');
        $('#span_Applcnt_name').html('');
        $('#span_Applcnt_name').css("color","red");
        $('#span_Applcnt_name').html("Enter alteast three Characters");
        
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else{
        $('#Applcnt_name').removeClass('has-error');
        $('#span_Applcnt_name').html('');
        $('#applctntabval').val("0");
    }
    if((cert_reltn==0)||(cert_reltn=='')||(cert_reltn==null)){
        Er_flag=1;
        $('#cert_reltn').addClass('has-error');
        $('#cert_reltn').focus();
        $('#span_cert_reltn').html('');
        $('#applctntabval').val('span_cert_reltn~Please enter Relation~cert_reltn');
        $('#span_cert_reltn').css("color","red");
        $('#span_cert_reltn').html('Please enter Relation');
        $('#cert_reltn').val('');        
        $('#loader').hide();
    }else{
        $('#cert_reltn').removeClass('has-error');
        $('#span_cert_reltn').html('');
        $('#applctntabval').val("0");
    }
    if(applctntabval==0){
        console.log("1st page");
        Er_flag==0;
        $('#svBtnapp').removeAttr("disabled");
        $('#svBtnapp').prop("disabled",false);
        ErMsg=applctntabval.split('~');
        $('#'+ErMsg[0]).html('');
        $('#'+ErMsg[2]).removeClass('has-error');
        }else{
            Er_flag==1
            $('#svBtnapp').addAttr("disabled");
        $('#svBtnapp').prop("disabled",true);
            ErMsg=applctntabval.split('~');
            $('#'+ErMsg[0]).html('');
            $('#'+ErMsg[0]).html(ErMsg[1]);
        
        }
    
    
    
}


function reset_form(form_id){
    location.reload();
}
function reset_form_attach(){
    location.reload();
}

$( document ).ready(function() {
    var tabval= $('#attchment_tab').val();
    $('#attach').removeClass('active');
    $('#pills-profile-tab').removeClass('active');
    $('#pills-profile-tab').removeClass('show');
});
$('#attach').on('click',function(){
    var tabval= $('#attchment_tab').val();
    if(tabval==0){   
        $('#attach').removeClass('active');
        $('#pills-profile-tab').removeClass('active');
        $('#pills-profile-tab').removeClass('show');
       
      
    }else{
        $('#attach').addClass('active');
        $('#pills-profile-tab').addClass('active');
        $('#pills-profile-tab').addClass('show');
        $('#appform').removeClass('active');
        $('#pills-home-tab').removeClass('active');
        $('#pills-home-tab').removeClass('show');
       
    }
});

// $('input[name^="fileupload"]').each(function () {
//     $(this).rules('add', {
//         required: true,
//         accept: "image/jpeg, image/pjpeg"
//     })
// });


function reset_form_attach(){
    $('#remarks_Encum').val('');
    $('#doc_ref_no_Encum').val('');
    $('#remarks_eid').val('');
    $('#doc_ref_no_eid').val('');
    $('#remarks_land_tax').val('');
    $('#doc_ref_no_land_tax').val('');
    $('#remarks_aadhr').val('');
    $('#doc_ref_no_aadhr').val('');
}
function validate_form_attach(){
    var remarks_Encum = $('#remarks_Encum').val();
    var doc_ref_no_Encum = $('#doc_ref_no_Encum').val();
    var remarks_eid = $('#remarks_eid').val();
    var doc_ref_no_eid = $('#doc_ref_no_eid').val();
    var remarks_land_tax = $('#remarks_land_tax').val();
    var doc_ref_no_land_tax = $('#doc_ref_no_land_tax').val();
    var remarks_aadhr = $('#remarks_aadhr').val();
    var doc_ref_no_aadhr = $('#doc_ref_no_aadhr').val();
    var remarks_Encum=$('#remarks_Encum').val();

    if(document.getElementById("file_Encum").files.length == 0 ){
        $('#filetabval').val('span_file_Encum~Please Upload pdf copy of Encumbarance Certificate~filetabval');
        $('#span_file_Encum').html('');
        $('#span_file_Encum').css("color","red");
        $('#span_file_Encum').html('Please Upload pdf copy of Encumbarance Certificate'); 
        $('#file_Encum').focus();
    }
    if(document.getElementById("file_eid").files.length == 0 ){
        $('#filetabval').val('span_file_eid~Please Upload pdf copy of Election id card~file_eid');
        $('#span_file_eid').html('');
        $('#span_file_eid').css("color","red");
        $('#span_file_eid').html('Please Upload pdf copy of Election id card'); 
        $('#file_eid').focus();
    }
    if(document.getElementById("file_land_tax").files.length == 0 ){
        $('#filetabval').val('span_file_land_tax~Please Upload pdf copy of Land tax receipt~file_land_tax');
        $('#span_file_land_tax').html('');
        $('#span_file_land_tax').css("color","red");
        $('#span_file_land_tax').html('Please Upload pdf copy of Land tax receipt'); 
        $('#file_land_tax').focus();
    }
    if(document.getElementById("aadhr_file").files.length == 0 ){
        $('#filetabval').val('span_aadhr_file~Please Upload pdf copy of Aadhar~aadhr_file');
        $('#span_aadhr_file').html('');
        $('#span_aadhr_file').css("color","red");
        $('#span_aadhr_file').html('Please Upload pdf copy of Aadhar'); 
        $('#aadhr_file').focus();
    }
    if(document.getElementById("file_pattayam").files.length == 0 ){
        $('#filetabval').val('span_file_pattayam~Please Upload pdf copy of Pattayam~file_pattayam');
        $('#span_file_pattayam').html('');
        $('#span_file_pattayam').css("color","red");
        $('#span_file_pattayam').html('Please Upload pdf copy of Pattayam'); 
        $('#file_pattayam').focus();
    }
    var filetabval=  $('#filetabval').val();
    var Erms='';
    var remarks_eid=$('#remarks_eid').val();
    if(remarks_eid.length<3){
        $('#remarks_eid').addClass('has-error');
        $('#remarks_eid').focus();
        $('#span_remarks_eid').html('');
        $('#filetabval').val('span_remarks_eid~Enter alteast three Characters~remarks_eid');

        $('#span_remarks_eid').css("color","red");
        $('#span_remarks_eid').html("Enter alteast three Characters.");
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else{
        $('#span_remarks_eid').html('');
        $('#filetabval').val("0");
    }
    var doc_ref_no_eid=$('#doc_ref_no_eid').val();
    if(doc_ref_no_eid.length<3){
        $('#doc_ref_no_eid').addClass('has-error');
        $('#doc_ref_no_eid').focus();
        $('#span_doc_ref_no_eid').html('');
        $('#filetabval').val('pan_doc_ref_no_eid~Enter alteast three Characters~doc_ref_no_eid');

        $('#span_doc_ref_no_eid').css("color","red");
        $('#span_doc_ref_no_eid').html("Enter alteast three Characters");
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else{
        $('#span_doc_ref_no_eid').html('');
        $('#filetabval').val("0");
    }

    if(remarks_Encum.length<3){
        $('#remarks_Encum').addClass('has-error');
        $('#remarks_Encum').focus();
        $('#span_remarks_Encum').html('');
        $('#span_remarks_Encum').css("color","red");
        $('#filetabval').val('span_remarks~Enter alteast three Characters~remarks_Encum');
        $('#span_remarks_Encum').html("Enter alteast three Characters");
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else{
        $('#span_remarks_Encum').html('');
        $('#filetabval').val("0");
    }
    var doc_ref_no_Encum=$('#doc_ref_no_Encum').val();
    if(doc_ref_no_Encum.length<3){
        $('#doc_ref_no_Encum').addClass('has-error');
        $('#doc_ref_no_Encum').focus();
        $('#filetabval').val('span_doc_ref_no_Encum~Enter alteast three Characters~doc_ref_no_Encum');
        $('#span_doc_ref_no_Encum').html('');
        $('#span_doc_ref_no_Encum').css("color","red");
        $('#span_doc_ref_no_Encum').html("Enter alteast three Characters.");
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else{
        $('#span_doc_ref_no_Encum').html('');
        $('#filetabval').val("0");
    }
    
    var remarks_land_tax=$('#remarks_land_tax').val();
    if(remarks_land_tax.length<3){
        $('#remarks_land_tax').addClass('has-error');
        $('#remarks_land_tax').focus();
        $('#filetabval').val('span_remarks_land_tax~Enter alteast three Characters~remarks_land_tax');

        $('#span_remarks_land_tax').html('');
        $('#span_remarks_land_tax').css("color","red");
        $('#span_remarks_land_tax').html("Enter alteast three Characters");
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else{
        $('#span_remarks_land_tax').html('');
        $('#filetabval').val("0");
    }
    var doc_ref_no_land_tax=$('#doc_ref_no_land_tax').val();
    if(doc_ref_no_land_tax.length<3){
        $('#doc_ref_no_land_tax').addClass('has-error');
        $('#doc_ref_no_land_tax').focus();
        $('#span_doc_ref_no_land_tax').html('');
        $('#filetabval').val('span_doc_ref_no_land_tax~Enter alteast three Characters~doc_ref_no_land_tax');

        $('#span_doc_ref_no_land_tax').css("color","red");
        $('#span_doc_ref_no_land_tax').html("Enter alteast three Characters");
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else{
        $('#span_doc_ref_no_land_tax').html('');
        $('#filetabval').val("0");
    }
    var remarks_aadhr=$('#remarks_aadhr').val();
    if(remarks_aadhr.length<3){
        $('#remarks_aadhr').addClass('has-error');
        $('#remarks_aadhr').focus();
        $('#span_remarks_aadhr').html('');
        $('#span_remarks_aadhr').css("color","red");
        $('#span_remarks_aadhr').html("Enter alteast three Characters.");
        $('#filetabval').val('span_remarks_aadhr~Enter alteast three Characters~remarks_aadhr');

        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else{
        $('#span_remarks_aadhr').html('');
        $('#filetabval').val("0");
    }
    var doc_ref_no_aadhr=$('#doc_ref_no_aadhr').val();
    if(doc_ref_no_aadhr.length<3){
        $('#doc_ref_no_aadhr').addClass('has-error');
        $('#doc_ref_no_aadhr').focus();
        $('#span_doc_ref_no_aadhr').html('');
        $('#span_doc_ref_no_aadhr').css("color","red");
        $('#span_doc_ref_no_aadhr').html("Enter alteast three Characters.");
        $('#filetabval').val('span_doc_ref_no_aadhr~Enter alteast three Characters~doc_ref_no_aadhr');

        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }
    else{
        $('#span_doc_ref_no_aadhr').html('');
        $('#filetabval').val("0");
    }

    var remarks_pattayam=$('#remarks_pattayam').val();
    if(remarks_pattayam.length<3){
        $('#remarks_pattayam').addClass('has-error');
        $('#remarks_pattayam').focus();
        $('#span_remarks_pattayam').html('');
        $('#filetabval').val('span_remarks_pattayam~Enter alteast three Characters~remarks_pattayam');

        $('#span_remarks_pattayam').css("color","red");
        $('#span_remarks_pattayam').html("Enter alteast three Characters.");
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else{
        $('#span_remarks_pattayam').html('');
        $('#filetabval').val("0");
    }
    var doc_ref_no_pattayam=$('#doc_ref_no_pattayam').val();
    if(doc_ref_no_pattayam.length<3){
        $('#doc_ref_no_pattayam').addClass('has-error');
        $('#doc_ref_no_pattayam').focus();
        $('#span_doc_ref_no_pattayam').html('');
        $('#filetabval').val('pan_doc_ref_no_pattayam~Enter alteast three Characters~doc_ref_no_pattayam');

        $('#span_doc_ref_no_pattayam').css("color","red");
        $('#span_doc_ref_no_pattayam').html("Enter alteast three Characters");
        // swal('Info', "Enter alteast three Characters.", 'info');
        $('#loader').hide();
    }else{
        $('#span_doc_ref_no_pattayam').html('');
        $('#filetabval').val("0");
    }
    var filetabval=$('#filetabval').val();
    if(filetabval==0){
        // console.log(filetabval);
        Erms=filetabval.split('~');
        $('#'+Erms[0]).html('');
        $('#'+Erms[2]).removeClass('has-error');
        swal("Info","success","info");
    }else{
            Erms=filetabval.split('~');
            $('#'+Erms[0]).html('');
            $('#'+Erms[0]).html(Erms[1]);
        
        }
    
}

function row_repeat(){
    var count = $('#rep_tab tr').length;
    var html=`  <tr>
    <td>${count}</td>
    <td>
                <select name="dist_list_1" id="dist_list_1" style="width: 100" title="Select District of Property" class="dist_list_1 form-control  eng_xxxs fg-darkCrimson">
                                    
                                    <option value="04">Alappuzha
                                    </option>
                                    
                                    <option value="07">Ernakulam
                                    </option>
                                    
                                    <option value="06">Idukki
                                    </option>
                                    
                                    <option value="13">Kannur
                                    </option>
                                    
                                    <option value="14">Kasaragod
                                    </option>
                                    
                                    <option value="02">Kollam
                                    </option>
                                    
                                    <option value="05">Kottayam
                                    </option>
                                    
                                    <option value="11">Kozhikode
                                    </option>
                                    
                                    <option value="10">Malappuram
                                    </option>
                                    
                                    <option value="09">Palakkad
                                    </option>
                                    
                                    <option value="03">Pathanamthitta
                                    </option>
                                    
                                    <option value="01">Thiruvananthapuram
                                    </option>
                                    
                                    <option value="08">Thrissur
                                    </option>
                                    
                                    <option value="12">Wayanad
                                    </option>
                                    
                                    <option value="0" selected="true">Select
                                        one</option>
                </select>
                <span class="span_dist_list_1"></span>
    </td>
    
    <td>
                    <select name="taluk_list_1" id="taluk_list_1" style="width: 100" title="Select Taluk of Property" class="taluk_list_1 form-control  eng_xxxs fg-darkCrimson">
                                    <option value="0" selected="true">Select
                                        one</option>
                    </select>
                    <span class="span_taluk_list_1"></span>
    </td>
    <td>
                    <select name="village_list_1" id="village_list_1" style="width: 100" title="Select Taluk of Property" class="village_list_1 form-control  eng_xxxs fg-darkCrimson">
                                    <option value="0" selected="true">Select
                                        one</option>
                    </select>
                    <span class="span_village_list_1"></span>                                                    
    </td>
    <td>

            <input required type="text"  class="old_survy_num form-control eng_xxxs fg-darkCrimson" id="old_survy_num" name="old_survy_num" aria-describedby="HELPNAME1" placeholder="Old Survey/ Sub Div No.">
            <span class="span_old_survy_num"></span>

    </td>
    <td>
                <input required type="text"  class="resurver_blck form-control eng_xxxs fg-darkCrimson" id="resurver_blck" name="resurver_blck" aria-describedby="HELPNAME1" placeholder="Re-Survey Block">
            <span class="span_resurver_blck"></span> 
    </td>
    <td>
                <input required type="text"  class="form-control eng_xxxs fg-darkCrimson resurvy_num" id="resurvy_num" name="resurvy_num" aria-describedby="HELPNAME1" placeholder="Re-Survey/ Sub Div No.">
            <span class="span_resurvy_num"></span>
    </td>
    <td>
                <input required type="text"  class="form-control eng_xxxs fg-darkCrimson thundaper_num" id="thundaper_num" name="thundaper_num" aria-describedby="HELPNAME1" placeholder="Thandapper No">
            <span class="span_thundaper_num"></span> 
    </td>
    <td>
                <input required type="text"  class="form-control eng_xxxs fg-darkCrimson land_type" id="land_type" name="land_type" aria-describedby="HELPNAME1" placeholder="Land Type">
            <span class="span_land_type"></span> 
    </td>
    <td>
                <input required type="text"  class="form-control eng_xxxs fg-darkCrimson extentinHect" id="extentinHect" name="extentinHect" aria-describedby="HELPNAME1" placeholder="Extent(in Hectare)">
            <span class="span_extentinHect"></span>
            <span class="calc" onClick="Cal_hect()" data-toggle="popover" data-html="true" title='Enter Extent in Acre/Cent/Square Links' data-content='<div class="calcdiv"><div class="row"><div class="col-md-12">ds</div></div><div class="row"><div class="col-md-12"><input type="text">d</div></div></div>'><i class="fas fa-bars"></i></span>
    </td>
    <td>
                <input required type="text"  class="market_val_prop form-control eng_xxxs fg-darkCrimson" id="market_val_prop" name="market_val_prop" aria-describedby="HELPNAME1" placeholder="Market Value of Property">
            <span class="span_market_val_prop"></span> 
    </td>
    <td>
                <input required type="text"  class="laibility_amnt form-control eng_xxxs fg-darkCrimson" id="laibility_amnt" name="laibility_amnt" aria-describedby="HELPNAME1" placeholder="Liability Amount">
            <span class="span_laibility_amnt"></span>
    </td>
    <td>
             <button class="btn btn-sm btn-flat eng_xxxs restbtn bg-lightOrange fg-darkCrimson px-3" onClick="row_repeat()">Add</button>
             <button  class="del_row_btn${count} btn btn-sm btn-flat eng_xxxs restbtn bg-lightOrange fg-darkCrimson px-3 topspace" onClick="row_del(${count})">Delete</button>
    </td>
</tr>`;
    $('#rep_body').append(html);
}
// $('.del_row_btn').on('click',function(){
//     $(this).closest('tr').remove();
// });
function row_del(count){
    $('.del_row_btn'+count).closest('tr').remove();
}
function Cal_hect(){
    $('[data-toggle="popover"]').popover()
}
</script>
<script src="assets/js/sweetalertjs.js"></script>